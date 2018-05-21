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
 * ParseRule.php
 * 
 * This is a utility base class to provide further refinement when converting 
 * pre 5.x files to the new meta-data rules.
 
 * @author Collin Lee
 */
class ParseRules {

function ParseRules() {

}

/**
 * getRules
 * Return Array of rules to run
 *
 */
function getRules() {
    $rules = array();
    $rules[] = array("class"=>"UndefinedVardefRule", "file"=>"include/SugarFields/Parsers/Rules/UndefinedVardefRule.php");
    $rules[] = array("class"=>"VariableCleanupRule", "file"=>"include/SugarFields/Parsers/Rules/VariableCleanupRule.php");
    $rules[] = array("class"=>"VariableSubstitutionRule", "file"=>"include/SugarFields/Parsers/Rules/VariableSubstitutionRule.php");
    $rules[] = array("class"=>"AddressRule", "file"=>"include/SugarFields/Parsers/Rules/AddressRule.php");
    $rules[] = array("class"=>"EmailAddressRule", "file"=>"include/SugarFields/Parsers/Rules/EmailAddressRule.php");
    $rules[] = array("class"=>"EmptyRowRule", "file"=>"include/SugarFields/Parsers/Rules/EmptyRowRule.php");
    return $rules;
}

}

?>
