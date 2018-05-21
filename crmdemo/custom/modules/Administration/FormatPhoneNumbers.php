<?php
/*********************************************************************************
 * Name: Universal Click to Call by Epicom
 * Version: 1.0.0
 * Date: 2011-06-08
 * Author: Epicom Corp.
 * Maintainer: support@epicom.com
 * License: GPL version 2 or later
 ********************************************************************************/
 
/*
 * @todo - add logging of this process so that we have a log file to reference if something goes wrong
 * @todo - add a step between 1 and 2 that will create a mysqldump of the tables that are going to be updated
 */

// pull in these globals and loop through to check for phone number fields
global $db, $moduleList, $beanList, $beanFiles, $mod_strings, $sugar_config;

if($_REQUEST['step'] === '1')
{
	// this array will be appended to each time a module is found that has a phone number field
	$eligible_modules = array();
	
	// fire up the loop through the module list array
	foreach($moduleList as $module)
	{
		// make a string of the bean name
		$bean_name = $beanList[$module];
		
		// check to see if it is empty before trying to instantiate it as a class
		if(!empty($bean_name))
		{	
			// this object holds the table and field names we need for the module
			$mod = new stdClass();
			
			// instantiate the bean for examination
			$bean = new $bean_name();
			
			// store the table name for this module
			$mod->table = $bean->table_name;
			
			// this array will be appededed to if there are fields in the current module of type 'phone'
			$mod->fields = array();
			
			$mod->label = array();
			
			// loop through the field_name_map array to try and find any phone number fields
			foreach($bean->field_name_map as $key => $field)
			{
				if($field['type'] == 'phone')
				{
					// if the field is of type phone add it to the fields array
					$mod->fields[] = $key;
					
					$mod->label[$key] = translate($field['vname'], $module);
					
					$mod->label[$key] = (substr($mod->label[$key], -1 == ':')) ? rtrim($mod->label[$key], ':') : $mod->label[$key];
				}
			}
			
			// if the array is not empty then the current module has phone number fields
			if(!empty($mod->fields))
			{
				// add this module to the eligible modules array as well as it's phone number fields
				$eligible_modules[$module] = $mod;
			}
		}
	}
	
	require_once('include/Sugar_Smarty.php');
	$ss = new Sugar_Smarty();
	
	$ss->assign('eligible_modules', $eligible_modules);
	$ss->assign('MOD', $mod_strings);
	$ss->display('modules/uc2ce_Click2Call/tpls/format_numbers.tpl');
	$ss->display('modules/uc2ce_Click2Call/tpls/js.tpl');
}

if($_REQUEST['step'] === '2')
{
	$selected_modules = array();
	
	// this loop builds the $selected_modules array which is used to decide which fields to update
	foreach($_POST as $key => $val)
	{
		$temp = explode('~', $key);
		
		if(!isset($selected_modules[$temp[0]]))
		{
			$mod = new stdClass();
			$mod->table	 = $temp[0];
			$mod->fields = array();
			$mod->name	 = $temp[2];
			
			$selected_modules[$temp[0]] = $mod;
		}
		
		$selected_modules[$temp[0]]->fields[] = $temp[1];
	}
	
	/* -- first attemp to use bean for updating
	foreach($selected_modules as $module)
	{
		$bean_name = $beanList[$module->name];
		
		$bean = new $bean_name();
		
		$list = $bean->get_full_list();
		
		echo '<pre>'; print_r($list);
	}
	*/
	//echo '<pre>'; print_r($selected_modules); die();
	
	$db_type = $sugar_config['dbconfig']['db_type'];
	if($db_type == 'mysql' OR $db_type == 'mysqli')
	{
		// -- Start of Direct DB code to update numbers
		// This code block updates the phone numbers using direct db querys, but it will only work for mysql
		foreach($selected_modules as $module_name => $mod)
		{
			// if only 1 field and it ends with _c and it's in the fields_meta_data table then we need to hit _cstm table too
			$_cstm = FALSE;
			
			foreach($mod->fields as $field)
			{
				// if the current field ends with _c AND we haven't encountered a field that requires the _cstm table yet :: then do this stuff
				if( (substr($field, -2) == '_c') AND ($_cstm == FALSE) )
				{
					$qry = 'SELECT count(id) as count FROM fields_meta_data WHERE id = "'.$module_name.$field.'"';
					$num = $db->query($qry);
					$count = $db->fetchByAssoc($num);
					
					$_cstm = TRUE;
				}
			}
			
			$query  = 'SELECT id, '.implode($mod->fields, ', ').' FROM '.$mod->table;
			$query .= ($_cstm) ? ' LEFT JOIN '.$mod->table.'_cstm ON id = id_c' : '';
			$query .= ' WHERE deleted = 0';
			
			$result = $db->query($query);
			
			$phone_nums = array();
			
			while($n = $db->fetchByAssoc($result))
			{
				$phones = array();
				
				foreach($mod->fields as $field)
				{
					if(!empty($n[$field]))
					{
						$phones[$field] = c2c_numberfier($n[$field]);
					}
				}
				
				if(count($phones) > 0)
				{
					$phone_nums[$n['id']] = $phones;
				}
			}
				
			foreach($phone_nums as $id => $phone)
			{
				
				$update  = 'UPDATE '.$mod->table;
				$update .= ($_cstm) ? ', '.$mod->table.'_cstm ' : ' ';
				$update .= "SET ";
				
				$first = FALSE;
				foreach($mod->fields as $field)
				{
					$update .= ($first AND !empty($phone_nums[$id][$field])) ? ', ' : '';
					$update .= (!empty($phone_nums[$id][$field])) ? $field.' = "'.$phone_nums[$id][$field].'"' : '';
					$first = TRUE;
				}
				
				$update .= ' WHERE id = "'.$id.'"';
				
				$db->query($update);
			
			}
		}
		//-- End of Direct DB query code */
		
		echo '<b>Phone Numbers have been updated.</b><br/><br/><a href="http://twilio6.epicom.com/index.php?module=Administration&action=UC2CAdmin">Back to Admin</a>';
	}
	else
	{
		echo 'At this time only mysql databases are supported for updating phone numbers.';
	}
}

function c2c_numberfier($phone_number)
{
	// first remove all non-numeric characters
	$phone = preg_replace('/\D/', '', $phone_number);
	
	// if, after stripping all non-numeric chars length is 11 but the 1st char is NOT 1 just return the number as it is not a valid US number
	if(strlen($phone) == 11 AND substr($phone, 0, 1) != '1')
	{
		return $phone_number;
	}
	
	// check length and only process if length is 11 chars and first char is '1'
	if(strlen($phone) == 11 AND substr($phone, 0, 1) == '1')
	{
		// trim the 1 off the number
		$phone = substr($phone, 1);
	}
	
	if(strlen($phone) == 10)
	{
		// reformat the number to be +1(555) 555-1234
		$phone = '+1 ('.substr($phone,0,3).') '.substr($phone,3,3).'-'.substr($phone,6,4);
	}
	
	return $phone;
}
