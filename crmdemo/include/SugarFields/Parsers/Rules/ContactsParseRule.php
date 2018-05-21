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


require_once('include/SugarFields/Parsers/Rules/BaseRule.php');

class ContactsParseRule extends BaseRule {

function ContactsParseRule() {
	
}


function preParse($panels, $view) {
	
	if($view == 'DetailView') {
		foreach($panels as $name=>$panel) {
		   	  foreach($panel as $rowCount=>$row) {
		   	  	 foreach($row as $key=>$column) {
		   	  	 	if($this->matches($column, '/^(last_)?name$/')) {
		   	  	 	   $panels[$name][$rowCount][$key] = 'full_name';
		   	  	 	}
				} //foreach 
		   	} //foreach
	    } //foreach
	}
	
	return $panels;		
}

function parsePanels(& $panels, $view) {

       if($view == 'EditView') {
		   foreach($panels as $name=>$panel) {
		   	  foreach($panel as $rowCount=>$row) {
		   	  	 foreach($row as $key=>$column) {
					if($this->matches($column, '/portal_password1/si')) {
		   	  	 	   $panels[$name][$rowCount][$key] = array('name'=>'portal_password1', 'type'=>'password', 'customCode'=>'<input id="portal_password1" name="portal_password1" type="password" size="32" maxlength="32" value="{$fields.portal_password.value}">', 'label'=>'LBL_PORTAL_PASSWORD');
					}
		   	  	 } //foreach 
		   	  } //foreach
		   } //foreach
       }
	   return $panels;	
}
	
}
?>
