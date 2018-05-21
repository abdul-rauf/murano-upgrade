<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*********************************************************************************
 * By installing or using this file, you are confirming on behalf of the entity
 * subscribed to the SugarCRM Inc. product ("Company") that Company is bound by
 * the SugarCRM Inc. Master Subscription Agreement (“MSA”), which is viewable at:
 * http://www.sugarcrm.com/master-subscription-agreement
 *
 * If Company is not bound by the MSA, then by installing or using this file
 * you are agreeing unconditionally that Company will be bound by the MSA and
 * certifying that you have authority to bind Company accordingly.
 *
 * Copyright (C) 2004-2013 SugarCRM Inc.  All rights reserved.
 ********************************************************************************/


/**
 * VariableCleanupRule.php
 * 
 * This is a utility base class to provide further refinement when converting 
 * pre 5.x files to the new meta-data rules.
 *
 * @author Collin Lee
 */
 
require_once('include/SugarFields/Parsers/Rules/BaseRule.php');
 
class VariableCleanupRule extends BaseRule {

function VariableCleanupRule() {
	
}

function parsePanels($panels, $view) {

   if($view == 'DetailView') {
		foreach($panels as $name=>$panel) {
	   	  foreach($panel as $rowCount=>$row) {
	   	  	 foreach($row as $key=>$column) {
	   	  	 	//This converts variable ended with "_c_checked" to just "_c" (for checkboxes in DetailView)
				if(!is_array($column) && isset($column) && preg_match('/(.*?)_c_checked$/s', $column, $matches)) {
	   	  	 	   if(count($matches) == 2) {
	   	  	 	      $panels[$name][$rowCount][$key] = $matches[1] . "_c";
	   	  	 	   }
	   	  	 	} else if($this->matches($column, '/^parent_id$/si')) {
	   	  	 		  $panels[$name][$rowCount][$key] = '';
				} else if($this->matches($column, '/^assigned_user_id$/si')) {
	   	  	 	   $panels[$name][$rowCount][$key] = '';	
	   	  	 	}
	   	  	 } //foreach 
	   	  } //foreach
	   } //foreach
	   
   } else if ($view == 'EditView') {
   	    
		foreach($panels as $name=>$panel) {
	   	  foreach($panel as $rowCount=>$row) {
	   	  	 foreach($row as $key=>$column) {
	   	  	 	if($this->matches($column, '/^(.*?)_c\[\]$/s')) {
	   	  	 	   //This converts multienum variables named with [] suffix back to normal and removes custom code
	   	  	 	   $val = $this->getMatch($column, '/^(.*?)_c\[\]$/s');
	   	  	 	   $panels[$name][$rowCount][$key] = $val[1] . '_c';
	   	  	 	} else if($this->matches($column, '/^parent_id$/si')) {
	   	  	 	   //Remove parent_id field (replaced with parent_name from master copy)
	   	  	 	   $panels[$name][$rowCount][$key] = '';	
	   	  	 	} else if($this->matches($column, '/^assigned_user_id$/si')) {
	   	  	 	   //Remove assigned_user_id field (replaced with assigned_user_name from master copy)
	   	  	 	   $panels[$name][$rowCount][$key] = '';	
	   	  	 	} else if($this->matches($column, '/^RADIOOPTIONS_/si')) {
	   	  	 	   //This converts radioenum variables
	   	  	 	   $val = $this->getMatch($column, '/^RADIOOPTIONS_(.*)?$/si');
	   	  	 	   $panels[$name][$rowCount][$key] = $val[1];
	   	  	 	}
	   	  	 } //foreach
	   	  } //foreach
	   } //foreach   	
   }
   
   return $panels;
}

}

?>
