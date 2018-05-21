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
 * EmailAddressRule.php
 * 
 * This is a utility base class to provide further refinement when converting 
 * pre 5.x files to the new meta-data rules.  We basically scan for email1 or
 * email2 defined outside of the email address panel and remove it.
 *
 * @author Collin Lee
 */
 
require_once('include/SugarFields/Parsers/Rules/BaseRule.php');
 
class EmailAddressRule extends BaseRule {

function EmailAddressRule() {
	
}

function parsePanels(& $panels, $view) {

   if($view == 'DetailView') {

		foreach($panels as $name=>$panel) {

	   	  if(preg_match('/lbl_email_addresses/si', $name)) {
	   	  	 continue;
	   	  }
			
	   	  foreach($panel as $rowCount=>$row) {
	   	  	 foreach($row as $key=>$column) {
	   	  	 	
                if($this->isCustomField($column)) {
                   continue;	
                } else if(is_array($column) && !empty($column['name']) && preg_match('/^email(s|2)$/si', $column['name']) && !isset($column['type'])) {             
		           $panels[$name][$rowCount][$key] = '';
                } else if($this->matches($column, '/^email[1]_link$/si')) {
                   $panels[$name][$rowCount][$key] = 'email1';
	   	  	 	} else if($this->matches($column, '/^email[2]_link$/si')) {
	   	  	 	   $panels[$name][$rowCount][$key] = '';
	   	  	 	} else if(!is_array($column) && !empty($column)) {
	   	  	 	   if(preg_match('/^email(s|2)$/si', $column) ||
	   	  	 	      preg_match('/^invalid_email$/si', $column) ||
	   	  	 	      preg_match('/^email_opt_out$/si', $column) ||
	   	  	 	      preg_match('/^primary_email$/si', $column)) {
	   	  	 	   	  $panels[$name][$rowCount][$key] = '';
	   	  	 	   }
	   	  	 	}

	   	  	 } //foreach
	   	  } //foreach
	   } //foreach
   
   } else if($view == 'EditView') {

		foreach($panels as $name=>$panel) {

	   	  if(preg_match('/lbl_email_addresses/si', $name)) {
	   	  	 continue;
	   	  }
	   	
	   	  foreach($panel as $rowCount=>$row) {
	   	  	 foreach($row as $key=>$column) {

                if($this->isCustomField($column)) {
                   continue;	
                }

                if($this->matches($column, '/email(s)*?([1|2])*?/si')) {
                   $panels[$name][$rowCount][$key] = '';
                }

	   	  	 } //foreach

	   	  } //foreach
	   } //foreach
   }
   

   return $panels;
}

}

?>
