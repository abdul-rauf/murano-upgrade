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

class NotesParseRule extends BaseRule {

function NotesParseRule() {
	
}

function preParse($panels, $view) {
	foreach($panels as $name=>$panel) {
	   	foreach($panel as $rowCount=>$row) {
	   	  	 foreach($row as $key=>$column) {  	
	   	  	     if($this->matches($column, '/^related_doc_id$/')) {
	   	  	 	 	$panels[$name][$rowCount][$key] = 'related_doc_name';
	   	  	 	 } else if($this->matches($column, '/^related_doc_rev_id$/')) {
	   	  	 	 	$panels[$name][$rowCount][$key] = ($view == 'EditView') ? 'related_doc_rev_number' : 'related_doc_name';
	   	  	 	 } else if($this->matches($column, '/^filelink$/')) {
	   	  	 	 	$panels[$name][$rowCount][$key] = 'filename';
	   	  	 	 }
	   	  	 } //foreach 
	   	} //foreach
	} //foreach
    return $panels;	
}

}
?>