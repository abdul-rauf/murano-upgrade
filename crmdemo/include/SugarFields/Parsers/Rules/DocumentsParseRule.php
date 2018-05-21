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

class DocumentsParseRule extends BaseRule {

function DocumentsParseRule() {
	
}

function preParse($panels, $view) {
		foreach($panels as $name=>$panel) {
		   	foreach($panel as $rowCount=>$row) {
		   	  	 foreach($row as $key=>$column) {  	
		   	  	     if($this->matches($column, '/^related_doc_id$/')) {
		   	  	 	 	$panels[$name][$rowCount][$key] = 'related_doc_name';
		   	  	 	 } else if($this->matches($column, '/^related_doc_rev_id$/')) {
		   	  	 	 	$panels[$name][$rowCount][$key] = ($view == 'EditView') ? 'related_doc_rev_number' : 'related_doc_name';
		   	  	 	 } else if($this->matches($column, '/^user_date_format$/')) {
		   	  	 	 	$panels[$name][$rowCount][$key] = 'active_date';
		   	  	 	 } else if($this->matches($column, '/^is_template_checked$/')) {
		   	  	 	 	$panels[$name][$rowCount][$key] = 'is_template';
		   	  	 	 } else if($this->matches($column, '/^last_rev_creator$/')) {
		   	  	 	 	$panels[$name][$rowCount][$key] = 'last_rev_created_name';
		   	  	 	 } else if($this->matches($column, '/^last_rev_date$/')) {
		   	  	 	 	$panels[$name][$rowCount][$key] = 'last_rev_create_date';
		   	  	 	 } else if($this->matches($column, '/^save_file$/')) {
		   	  	 	 	$panels[$name][$rowCount][$key] = 'filename';
		   	  	 	 } else if($this->matches($column, '/^subcategory$/')) {
		   	  	 	 	$panels[$name][$rowCount][$key] = 'subcategory_id';
		   	  	 	 } else if($this->matches($column, '/^category$/')) {
		   	  	 	 	$panels[$name][$rowCount][$key] = 'category_id';
		   	  	 	 } else if($this->matches($column, '/^related_document_version$/')) {
		   	  	 	 	$panels[$name][$rowCount][$key] = 'related_doc_rev_number';
		   	  	 	 }
		   	  	 } //foreach 
		   	} //foreach
		} //foreach
	return $panels;	
}

function parsePanels(& $panels, $view) {

		foreach($panels as $name=>$panel) {
	   	  foreach($panel as $rowCount=>$row) {
	   	  	 foreach($row as $key=>$column) {
				if($this->matches($column, '/related_doc_id/si') ||
				   $this->matches($column, '/related_doc_rev_id/si') ||
				   $this->matches($column, '/latest_revision/si') ||
				   $this->matches($column, '/file_name/si')) {
	   	  	 	   $panels[$name][$rowCount][$key] = '';
				} 	
	   	  	 } //foreach 
	   	  } //foreach
	   } //foreach
      
	   return $panels;		
}

}
?>
