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


require_once('include/SugarFields/Parsers/Rules/ActivitiesParseRule.php');

class MeetingsParseRule extends ActivitiesParseRule {

function MeetingsParseRule() {
	
}

function preParse($panels, $view) {
	$panels = parent::preParse($panels, $view);
	if($view == 'DetailView') {
		foreach($panels as $name=>$panel) {
		   	  foreach($panel as $rowCount=>$row) {
		   	  	 foreach($row as $key=>$column) {
		   	  	 	//Fix issue of not having parent_name in Meetings vardefs.php in pre 5.x versions
		   	  	 	if($this->matches($column, '/^tag.parent$/') || $this->matches($column, '/^parent_id$/')) {
		   	  	 	   $panels[$name][$rowCount][$key] = 'parent_name';
		   	  	 	}
				} //foreach 
		   	} //foreach
	    } //foreach
	}
	return $panels;
}

}
?>