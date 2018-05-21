<?php

if (!defined('sugarEntry') || !sugarEntry)
    die('Not A Valid Entry Point');
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

$module_name = 'rt_client_reporting';
$subpanel_layout = array(
    'top_buttons' => array(
        array('widget_class' => 'SubPanelTopCreateButton'),
        array('widget_class' => 'SubPanelTopSelectButton', 'popup_module' => $module_name),
    ),
    'where' => '',
    'list_fields' => array(
        'email_to' => array(
            'vname' => 'LBL_EMAIL_TO',
            'width' => '30%',
        ),
        'email_cc' => array(
            'vname' => 'LBL_EMAIL_CC',
            'width' => '10%',
        ),
        'email_bcc' => array(
            'vname' => 'LBL_EMAIL_BCC',
            'width' => '10%',
        ),
        'assigned_user_name' => array(
            'vname' => 'LBL_ASSIGNED_TO_NAME',
            'widget_class' => 'SubPanelDetailViewLink',
            'width' => '10%',
        ),
        'client_alias' => array(
            'vname' => 'LBL_CLIENT_ALIAS',
            'width' => '10%',
        ),
        'team_name' => array(
            'vname' => 'LBL_TEAM',
            'width' => '10%',
        ),
        'active_on_portal' => array(
            'vname' => 'LBL_ACTIVE_ON_PORTAL',
            'width' => '10%',
        ),
        'date_modified' => array(
            'vname' => 'LBL_DATE_MODIFIED',
            'width' => '10%',
        ),
        'edit_button' => array(
            'vname' => 'LBL_EDIT_BUTTON',
            'widget_class' => 'SubPanelEditButton',
            'module' => $module_name,
            'width' => '4%',
        ),
        'remove_button' => array(
            'vname' => 'LBL_REMOVE',
            'widget_class' => 'SubPanelRemoveButton',
            'module' => $module_name,
            'width' => '5%',
        ),
    ),
);
?>