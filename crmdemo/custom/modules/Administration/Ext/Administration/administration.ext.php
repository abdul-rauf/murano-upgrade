<?php
// WARNING: The contents of this file are auto-generated.

//Merged from custom/Extension/modules/Administration/Ext/Administration/ZuckerReports2Config.php

if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

$admin_option_defs=array();
$admin_option_defs['Administration']['ZuckerReports2Config']= array('zuckerreports','LBL_MANAGE_ZUCKERREPORTS2CONFIG','LBL_ZUCKERREPORTS2CONFIG','./index.php?module=Configurator&action=ZuckerReports2Config');
$admin_group_header[]=array('LBL_ZUCKERREPORTS2CONFIG_TITLE','',false,$admin_option_defs, 'LBL_ZUCKERREPORTS2CONFIG_DESC');


//Merged from custom/Extension/modules/Administration/Ext/Administration/administration.UC2C.php

/*********************************************************************************
 * Name: Universal Click to Call by Epicom
 * Version: 1.0.0
 * Date: 2011-06-08
 * Author: Epicom Corp.
 * Maintainer: support@epicom.com
 * License: GPL version 2 or later
 ********************************************************************************/

$admin_option_defs=array();
$image_path = 'custom/themes/default/images/'; 
$admin_option_defs['Administration']['UC2CSettings'] = array('uc2ce_Click2Call', 'LBL_UC2C_TITLE', 'LBL_UC2C_DESC', 'index.php?module=Administration&action=UC2CAdmin');
$admin_group_header[]= array('LBL_UC2C_PANEL_NAME', '', false, $admin_option_defs, 'LBL_UC2C_PANEL_DESC');
