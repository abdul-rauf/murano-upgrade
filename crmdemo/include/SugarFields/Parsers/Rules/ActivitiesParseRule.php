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

class ActivitiesParseRule extends BaseRule {

function ActivitiesParseRule() {
	
}

function preParse($panels, $view) {
	if($view == 'DetailView') {
		foreach($panels as $name=>$panel) {
	   	  foreach($panel as $rowCount=>$row) {
	   	  	 foreach($row as $key=>$column) {
				if($this->matches($column, '/^duration_minutes$/')) {
	   	  	 	   $panels[$name][$rowCount][$key] = 'duration_hours';
				} else if($this->matches($column, '/^time_start$/')) {
				   $panels[$name][$rowCount][$key] = 'date_start';
				}
	   	  	 } //foreach 
	   	  } //foreach
	   } //foreach
	}
    return $panels;	
}

function parsePanels($panels, $view) {
	foreach($panels as $name=>$panel) {
   	  foreach($panel as $rowCount=>$row) {
   	  	 foreach($row as $key=>$column) {
			if($this->matches($column, '/^duration_minutes$/si')) {
   	  	 	   $panels[$name][$rowCount][$key] = '';
			} 
   	  	 } //foreach 
   	  } //foreach
   } //foreach
   return $panels;	
}
	
}
?>