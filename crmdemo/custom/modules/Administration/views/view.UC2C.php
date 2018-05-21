<?php if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

/*********************************************************************************
 * Name: Universal Click to Call by Epicom
 * Version: 1.0.0
 * Date: 2011-06-08
 * Author: Epicom Corp.
 * Maintainer: support@epicom.com
 * License: GPL version 2 or later
 ********************************************************************************/


require_once('modules/Configurator/Configurator.php');
require_once('include/MVC/View/SugarView.php');

class AdministrationViewUC2C extends SugarView {
	
	function AdministrationViewUC2C(){
 		parent::SugarView();
 	}
 
 	function display()
 	{
 		global $mod_strings, $app_strings, $current_user;
        
        if ( !is_admin($current_user) )
            sugar_die($GLOBALS['app_strings']['ERR_NOT_ADMIN']); 
 	
 	
 	
 		$configurator = new Configurator();
 		$echo_sign_settings = $configurator->config['UC2C'];
 	
 		$this->ss->assign('MOD', $mod_strings);
        $this->ss->assign('APP', $app_strings);
        $this->ss->assign('ACCOUNT_SID', '');
        $this->ss->assign('AUTH_TOKEN', '');
        
        if(is_array($echo_sign_settings)){
        	$this->ss->assign('ACCOUNT_SID', $echo_sign_settings['account_sid']);
        	$this->ss->assign('AUTH_TOKEN', $echo_sign_settings['auth_token']);
        }
        
        
        $updated = isset($_POST['update']) ? true : false;
        $this->ss->assign('UPDATED', $updated);
        
        echo $this->ss->fetch('modules/uc2ce_Click2Call/tpls/administration.tpl');
 	}
 	
}