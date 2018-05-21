<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*********************************************************************************
 * By installing or using this file, you are confirming on behalf of the entity
 * subscribed to the SugarCRM Inc. product ("Company") that Company is bound by
 * the SugarCRM Inc. Master Subscription Agreement (“MSA”), which is viewable at:
 * http://www.sugarcrm.com/master-subscription-agreement
 *
 * If Company is not bound by the MSA, then by installing or using this file
 * you are agreeing unconditionally that Company will be bound by the MSA and
 * certifying that you have authority to bind Company accordingly.
 *
 * Copyright (C) 2004-2013 SugarCRM Inc.  All rights reserved.
 ********************************************************************************/





// User is used to store Forecast information.
class Worksheet extends SugarBean {

    var $id;

    var $table_name = "worksheet";

    var $object_name = "Worksheet";
    var $disable_custom_fields = true;

    // This is used to retrieve related fields from form posts.
    var $additional_column_fields = Array('');



    var $new_schema = true;
    var $module_dir = 'Forecasts';
    function Worksheet() {
        global $current_user;
        parent::SugarBean();
        $this->disable_row_level_security =true;
    }

    function save($check_notify = false){

        parent::save($check_notify);
    }

    function get_summary_text() {
        return "$this->id";
    }

    function retrieve($id, $encode=false, $deleted=true){
        $ret = parent::retrieve($id, $encode, $deleted);

        return $ret;
    }

    function is_authenticated()
    {
        return $this->authenticated;
    }

}
?>