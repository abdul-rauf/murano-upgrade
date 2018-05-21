<?php
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
