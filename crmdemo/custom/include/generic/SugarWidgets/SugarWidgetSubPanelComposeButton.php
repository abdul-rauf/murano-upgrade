<?php

if (!defined('sugarEntry') || !sugarEntry)
    die('Not A Valid Entry Point');

class SugarWidgetSubPanelComposeButton extends SugarWidgetSubPanelCloseButton {

    function displayList(&$layout_def) {
        global $app_strings;
        global $subpanel_item_count;
        $return_module = $_REQUEST['module'];
        $lead_id = $_REQUEST['record'];
        
        $module_name = $layout_def['module'];
        $record_id = $layout_def['fields']['ID'];
        $unique_id = $layout_def['subpanel_id'] . "_close_" . $subpanel_item_count; 
        $new_status = "";
        echo '<script type="text/javascript" src="custom/include/generic/SugarWidgets/compose_email.js"></script>';
        if ($layout_def['EditView']) {
            $html = "<a id=\"$unique_id\" onclick='openPopups(\"$module_name\",\"$record_id\",\"$lead_id\",\"subpanel\",\"{$layout_def['subpanel_id']}\");' >" . $app_strings['LBL_COMPOSE_CLIENT'] . "</a>";
            return $html;
        } else {
            return '';
        }
    }

}
