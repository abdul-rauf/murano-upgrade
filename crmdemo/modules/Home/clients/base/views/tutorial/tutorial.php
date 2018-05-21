<?php
if (!defined('sugarEntry') || !sugarEntry) {
    die('Not A Valid Entry Point');
}
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
 * Portions created by SugarCRM are Copyright (C) SugarCRM, Inc.
 * All Rights Reserved.
 * Contributor(s): ______________________________________..
 ********************************************************************************/

$viewdefs['Home']['base']['view']['tutorial'] = array(
    'record' => array(
        'version' =>1,
        'intro' => 'LBL_TOUR_INTRO',
        'content' => array(
            array(
                'name' => '[href=#Home]',
                'text' => 'LBL_TOUR_CUBE',
                'full' => true,
                'horizAdj' => -11,
            ),
            array(
                'name' => '[data-route="#Accounts"]',
                'text' => 'LBL_TOUR_NAV_BAR',
                'full' => true,
                'vertAdj'=> -5,
            ),
            array(
                'name' => '.search-query',
                'text' => 'LBL_TOUR_SEARCH',
                'full' => true,
            ),
            array(
                'name' => '.notification-list',
                'text' => 'LBL_TOUR_NOTIFICATIONS',
                'full' => true,
                'horizAdj'=> -5,
                'vertAdj'=> 8,
            ),
            array(
                'name' => '#userActions',
                'text' => 'LBL_TOUR_AVATAR',
                'full' => true,
                'vertAdj'=> 8,
            ),
            array(
                'name' => '#createList',
                'text' => 'LBL_TOUR_ADD',
                'full' => true,
                'vertAdj'=> 8,
            ),
            array(
                'name' => '#tour',
                'text' => 'LBL_TOUR_TOUR',
                'full' => true,
                'vertAdj'=> -14,
            ),
        )
    ),
);
