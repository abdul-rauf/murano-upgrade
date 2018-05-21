<?php
/*********************************************************************************
 * Name: Universal Click to Call by Epicom
 * Version: 1.0.0
 * Date: 2011-06-08
 * Author: Epicom Corp.
 * Maintainer: support@epicom.com
 * License: GPL version 2 or later
 ********************************************************************************/

$dictionary['uc2ce_Click2Call'] = array(
	'table'=>'uc2ce_click2call',
	'audited'=>true,
	'fields'=>array (
),
	'relationships'=>array (
),
	'optimistic_locking'=>true,
);
if (!class_exists('VardefManager')){
        require_once('include/SugarObjects/VardefManager.php');
}
VardefManager::createVardef('uc2ce_Click2Call','uc2ce_Click2Call', array('basic','assignable'));