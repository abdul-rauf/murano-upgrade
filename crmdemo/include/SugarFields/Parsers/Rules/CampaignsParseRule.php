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

class CampaignsParseRule extends BaseRule {

function CampaignsParseRule() {
	
}

function preParse($panels, $view) {
	if($view == 'EditView') {
	    $frequencyAdded = false;
		foreach($panels as $name=>$panel) {
		   	foreach($panel as $rowCount=>$row) {
		   	  	 foreach($row as $key=>$column) {
		   	  	 	 if(empty($column) && !$frequencyAdded) {
		   	  	 	 	//Add the frequency label
		   	  	 	    $panels[$name][$rowCount][$key] = 'frequency';
		   	  	 	    $frequencyAdded = true;
		   	  	 	 } else if($this->matches($column, '/^deleted$/')) {
		   	  	 	 	//This is to fix the error where the Created By field
		   	  	 	 	//in Campaigns EditView.html actually references the deleted field
		   	  	 	 	//We will just remove the field since you shouldn't be able to edit this information anyway
		   	  	 	 	$panels[$name][$rowCount][$key] = '';
		   	  	 	 }
		   	  	 } //foreach 
		   	} //foreach
		} //foreach
		
		//If all the row/columns were taken up, then add frequency as a last row
		if(!$frequencyAdded) {
		   $panels['default'][][] = 'frequency';
		}
	}
	return $panels;	
}
	
}
?>