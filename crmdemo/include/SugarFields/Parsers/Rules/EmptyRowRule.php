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
 * EmptyRowRule.php
 * 
 * This is a utility base class to provide further refinement when converting 
 * pre 5.x files to the new meta-data rules.  This rule goes through the panels
 * and deletes rows for which there are no fields.
 *
 * @author Collin Lee
 */
 
require_once('include/SugarFields/Parsers/Rules/BaseRule.php');
 
class EmptyRowRule extends BaseRule {

function EmptyRowRule() {
	
}


function parsePanels($panels, $view) {

   foreach($panels as $name=>$panel) {

   	  foreach($panel as $rowCount=>$row) {
         $emptyCount = 0;

   	  	 foreach($row as $key=>$column) {
   	  	 	if(is_array($column) && (!isset($column['name']) || empty($column['name']))) {             
   	  	 	    $emptyCount++;
   	  	 	} else if(!is_array($column) && (!isset($column) || empty($column))) {
				$emptyCount++;
   	  	 	}
   	  	 } //foreach
   	  	 
	  	 // If we have unset everything, then just remove the whole row entirely
   	  	 if($emptyCount == count($row)) {
   	  	 	unset($panels[$name][$rowCount]);
   	  	 	continue;
   	  	 } else if(count($row) > 2) {
   	  	    foreach($row as $key=>$column) {
   	  	        if(empty($column) || $column == '') {
   	  	           unset($panels[$name][$rowCount][$key]);
   	  	        }	
   	  	    }
   	  	 }
   	  } //foreach  
   } //foreach
   
   return $panels;
}

}
?>
