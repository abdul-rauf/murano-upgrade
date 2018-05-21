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
 * PLACE ANY CUSTOMIZATIONS IN A1234_murano
 */


class A1234_murano_sugar extends Basic {
    public $new_schema = true;
    public $module_dir = 'A1234_murano';
    public $object_name = 'A1234_murano';
    public $table_name = 'a1234_murano';
    public $importable = false;
    public $assigned_user_id;
    public $assigned_user_name;
    public $assigned_user_link;
    public $id;
    public $name;
    public $date_entered;
    public $date_modified;
    public $modified_user_id;
    public $modified_by_name;
    public $created_by;
    public $created_by_name;
    public $doc_owner;
    public $user_favorites;
    public $description;
    public $deleted;
    public $created_by_link;
    public $modified_user_link;
    public $activities;
    public $following;
    public $following_link;
    public $my_favorite;
    public $favorite_link;
        public $disable_row_level_security = true;
    
    /**
     * This is a deprecated method, please start using __construct() as this
     * method will be removed in a future version.
     *
     * @see __construct
     * @deprecated
     */
    public function A1234_murano_sugar(){
        $GLOBALS['log']->deprecated('Calls to A1234_murano::A1234_murano are deprecated.');
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