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

$module_name = 'rt_sorting';
$subpanel_layout = array(
    'top_buttons' => array(
        array('widget_class' => 'SubPanelTopCreateButton'),
        array('widget_class' => 'SubPanelTopSelectButton', 'popup_module' => $module_name),
    ),
    'where' => '',
    'list_fields' => array(
        'name' => array(
            'vname' => 'LBL_SUBJECT',
            'widget_class' => 'SubPanelDetailViewLink',
            'width' => '15%',
        ),
        'date_entered' => array(
            'vname' => 'LBL_DATE_ENTERED',
            'width' => '15%',

        ),
        'report_status' => array(
            'vname' => 'LBL_REPORT_STATUS',
            'width' => '15%',
        ),
        'spaces' => array(
            'vname' => 'LBL_SPACES',
            'width' => '15%',
        ),
        'last_amended_modified' => array(
            'vname' => 'LBL_LAST_AMENDED_MODIFIED',
            'width' => '15%',
        ),
        'amended_date' => array(
            'vname' => 'LBL_RECENT_TIME_CHANGED',
            'sortable' => false,
            'width' => '15%',
        ),
        'date_modified' => array(
            'vname' => 'LBL_DATE_MODIFIED',
            'width' => '15%',
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
        'close_button' => array(
            'vname' => 'LBL_COMPOSE_CLIENT',
            'widget_class' => 'SubPanelComposeButton',
            'module' => $module_name,
            'width' => '5%',
        ),
    ),
);
?>