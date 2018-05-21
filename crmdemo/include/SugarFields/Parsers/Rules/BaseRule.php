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
 * BaseRule.php
 * 
 * This is a utility base class to provide further refinement when converting 
 * pre 5.x files to the new meta-data rules.
 
 * @author Collin Lee
 */
 
class BaseRule {

function BaseRule() {
	
}

function preParse($panels, $view) {
   return $panels;
}

function postParse($panels, $view) {
   return $this->parsePanels($panels, $view);
}

function parsePanels($panels, $view) {
   return $panels;
}

function isCustomField($mixed) {
   if(is_array($mixed) && isset($mixed['name']) && preg_match('/.*?_c$/s', $mixed['name'])) {
   	  return true;
   } else if(!is_array($mixed) && isset($mixed) && preg_match('/.*?_c$/s', $mixed)) {
   	  return true;
   }
   return false;
}

function matches($mixed, $regExp) {
   if(is_array($mixed) && isset($mixed['name']) && preg_match($regExp, $mixed['name'])) {
   	  return true;
   } else if(!is_array($mixed) && isset($mixed) && preg_match($regExp, $mixed)) {
   	  return true;
   }
   return false;	
}

function getMatch($mixed, $regExp) {
   if(is_array($mixed) && isset($mixed['name']) && preg_match($regExp, $mixed['name'], $matches)) {
   	  return $matches;
   } else if(!is_array($mixed) && isset($mixed) && preg_match($regExp, $mixed, $matches)) {
   	  return $matches;
   }
   return null;	
}

}

?>
