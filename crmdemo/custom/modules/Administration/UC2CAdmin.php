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

global $current_user, $sugar_config, $mod_strings;
if (!is_admin($current_user)) 
	sugar_die($GLOBALS['app_strings']['ERR_NOT_ADMIN']); 

$UPDATED = FALSE;

if(isset($_POST['update']))
{
	require_once('modules/Configurator/Configurator.php');
	$configurator = new Configurator();
	$configurator->config['UC2C'] = array('account_sid' => $_POST['UC2C_account_sid'], 
										  'auth_token'  => $_POST['UC2C_auth_token']
										); 
	$configurator->handleOverride();

	$UPDATED = TRUE;
}

// Version checking
$version = new stdClass();
if(function_exists('curl_init'))
{
	$version->tested = TRUE;
	
	// check to make sure this version is the latest version
	$version->installed = '1.0';
	
	function get_data($url)
	{
		$ch = curl_init();
		$timeout = 5;
		curl_setopt($ch,CURLOPT_URL,$url);
		curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
		curl_setopt($ch,CURLOPT_CONNECTTIMEOUT,$timeout);
		curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,0);
		$data = curl_exec($ch);
		curl_close($ch);
		return $data;
	}
	$version->latest = get_data('https://cti.epicom.com/version.txt');
	$version->up_to_date = ($version->installed == $version->latest) ? TRUE : FALSE;
}
else
{
	$version->tested = FALSE;
}

require_once('include/Sugar_Smarty.php');
$sugar_smarty = new Sugar_Smarty();

$tpl = 'modules/uc2ce_Click2Call/tpls/administration.tpl';

$sugar_smarty->assign('ACCOUNT_SID', $GLOBALS['sugar_config']['UC2C']['account_sid']);
$sugar_smarty->assign('AUTH_TOKEN', $GLOBALS['sugar_config']['UC2C']['auth_token']);
$sugar_smarty->assign('MOD', $mod_strings);
$sugar_smarty->assign('APP', $app_strings);
$sugar_smarty->assign('APP_LIST', $app_list_strings);
$sugar_smarty->assign('site_url', $sugar_config['site_url']);
$sugar_smarty->assign('version', $version);

if($UPDATED) {$sugar_smarty->assign('UPDATED', $UPDATED);}

$sugar_smarty->display($tpl);
