<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*********************************************************************************
 * Name: Universal Click to Call by Epicom
 * Version: 1.0.0
 * Date: 2011-06-08
 * Author: Epicom Corp.
 * Maintainer: support@epicom.com
 * License: GPL version 2 or later
 ********************************************************************************/




$module_name = 'uc2ce_Click2Call';
$listViewDefs[$module_name] = array(
	'NAME' => array(
		'width' => '32', 
		'label' => 'LBL_NAME', 
		'default' => true,
        'link' => true),         
	'TEAM_NAME' => array(
		'width' => '9', 
		'label' => 'LBL_TEAM',
        'default' => false),
	'ASSIGNED_USER_NAME' => array(
		'width' => '9', 
		'label' => 'LBL_ASSIGNED_TO_NAME',
		'module' => 'Employees',
        'id' => 'ASSIGNED_USER_ID',
        'default' => true),
	
);
?>
