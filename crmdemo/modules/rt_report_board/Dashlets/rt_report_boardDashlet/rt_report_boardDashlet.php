<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*
 * Your installation or use of this SugarCRM file is subject to the applicable
 * terms available at
 * http://support.sugarcrm.com/06_Customer_Center/10_Master_Subscription_Agreements/.
 * If you do not agree to all of the applicable terms or do not have the
 * authority to bind the entity as an authorized representative, then do not
 * install or use this SugarCRM file.
 *
 * Copyright (C) SugarCRM Inc. All rights reserved.
 */
/*********************************************************************************

 * Description:  Defines the English language pack for the base application.
 * Portions created by SugarCRM are Copyright (C) SugarCRM, Inc.
 * All Rights Reserved.
 * Contributor(s): ______________________________________..
 ********************************************************************************/

require_once('include/Dashlets/DashletGeneric.php');
require_once('modules/rt_report_board/rt_report_board.php');

class rt_report_boardDashlet extends DashletGeneric { 
    function rt_report_boardDashlet($id, $def = null) {
		global $current_user, $app_strings;
		require('modules/rt_report_board/metadata/dashletviewdefs.php');

        parent::__construct($id, $def);

        if(empty($def['title'])) $this->title = translate('LBL_HOMEPAGE_TITLE', 'rt_report_board');

        $this->searchFields = $dashletData['rt_report_boardDashlet']['searchFields'];
        $this->columns = $dashletData['rt_report_boardDashlet']['columns'];

        $this->seedBean = new rt_report_board();        
    }
}