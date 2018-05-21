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
/**
 * THIS CLASS IS GENERATED BY MODULE BUILDER
 * PLEASE DO NOT CHANGE THIS CLASS
 * PLACE ANY CUSTOMIZATIONS IN mu_Enquriy_Tracker
 */


class mu_Enquriy_Tracker_sugar extends Basic {
    public $new_schema = true;
    public $module_dir = 'mu_Enquriy_Tracker';
    public $object_name = 'mu_Enquriy_Tracker';
    public $table_name = 'mu_enquriy_tracker';
    public $importable = true;
    public $id;
    public $name;
    public $date_entered;
    public $date_modified;
    public $modified_user_id;
    public $modified_by_name;
    public $created_by;
    public $created_by_name;
    public $description;
    public $deleted;
    public $created_by_link;
    public $modified_user_link;
    public $team_id;
    public $team_set_id;
    public $team_count;
    public $team_name;
    public $team_link;
    public $team_count_link;
    public $teams;
    public $assigned_user_id;
    public $assigned_user_name;
    public $assigned_user_link;
    public $account_id_c;
    public $account_name;
    public $status;
    public $date_click;
    public $date_expire;
    public $lead_id_c;
    public $lead_record;
    
    /**
     * This is a deprecated method, please start using __construct() as this
     * method will be removed in a future version.
     *
     * @see __construct
     * @deprecated
     */
    public function mu_Enquriy_Tracker_sugar(){
        $GLOBALS['log']->deprecated('Calls to mu_Enquriy_Tracker::mu_Enquriy_Tracker are deprecated.');
        self::__construct();
    }

    public function __construct(){
        parent::__construct();
    }
    
    public function bean_implements($interface){
        switch($interface){
            case 'ACL': return true;
        }
        return false;
    }
    
}