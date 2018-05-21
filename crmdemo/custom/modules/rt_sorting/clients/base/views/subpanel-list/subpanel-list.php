<?php

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
$module_name = 'rt_sorting';
$viewdefs[$module_name]['base']['view']['subpanel-list'] = array(
    'panels' =>
    array(
        array(
            'name' => 'panel_header',
            'label' => 'LBL_PANEL_1',
            'fields' =>
            array(
                array(
                    'label' => 'LBL_NAME',
                    'enabled' => true,
                    'default' => true,
                    'name' => 'name',
                    'link' => true,
                ),
                array(
                    'label' => 'Date Created',
                    'enabled' => true,
                    'default' => true,
                    'name' => 'date_created',
                ),
                array(
                    'label' => 'LBL_REPORT_STATUS',
                    'enabled' => true,
                    'default' => true,
                    'name' => 'report_status',
                ),
                array(
                    'label' => 'LBL_SPACES',
                    'enabled' => true,
                    'default' => true,
                    'name' => 'spaces',
                ),
                array(
                    'label' => 'LBL_LAST_AMENDED_MODIFIED',
                    'enabled' => true,
                    'default' => true,
                    'name' => 'last_amended_modified',
                ),
                array(
                    'label' => 'LBL_DATE_MODIFIED',
                    'enabled' => true,
                    'default' => true,
                    'name' => 'date_modified',
                ),
            ),
        ),
    ),
    'rowactions' => array(
        'actions' => array(
            array(
                'type' => 'rowaction',
                'css_class' => 'btn',
                'tooltip' => 'LBL_PREVIEW',
                'event' => 'list:preview:fire',
                'icon' => 'fa-eye',
                'acl_action' => 'view',
            ),
            array(
                'type' => 'rowaction',
                'name' => 'edit_button',
                'icon' => 'fa-pencil',
                'label' => 'LBL_EDIT_BUTTON',
                'event' => 'list:editrow:fire',
                'acl_action' => 'edit',
            ),
            array(
                'type' => 'rowaction',
                'name' => 'compose_button',
                'icon' => 'fa-pencil',
                'label' => 'Compose To Clients',
                'event' => 'list:composeclients:fire',
                'acl_action' => 'view',
            ),
            array(
                'type' => 'unlink-action',
                'icon' => 'fa-chain-broken',
                'label' => 'LBL_UNLINK_BUTTON',
            ),
        ),
    ),
    'orderBy' => array(
        'field' => 'date_modified',
        'direction' => 'desc',
    ),
);
