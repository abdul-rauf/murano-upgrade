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

require_once('include/Dashlets/DashletGeneric.php');
require_once('modules/uc2ce_Click2Call/uc2ce_Click2Call.php');

class uc2ce_Click2CallDashlet extends DashletGeneric { 
    function uc2ce_Click2CallDashlet($id, $def = null) {
		global $current_user, $app_strings;
		require('modules/uc2ce_Click2Call/metadata/dashletviewdefs.php');

        parent::DashletGeneric($id, $def);

        if(empty($def['title'])) $this->title = translate('LBL_HOMEPAGE_TITLE', 'uc2ce_Click2Call');

        $this->searchFields = $dashletData['uc2ce_Click2CallDashlet']['searchFields'];
        $this->columns = $dashletData['uc2ce_Click2CallDashlet']['columns'];

        $this->seedBean = new uc2ce_Click2Call();        
    }
}