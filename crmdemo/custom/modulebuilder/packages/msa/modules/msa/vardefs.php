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
$vardefs = array (
  'fields' => 
  array (
    'name' => 
    array (
      'name' => 'name',
      'type' => 'name',
      'link' => true,
      'dbType' => 'varchar',
      'vname' => 'LBL_NAME',
      'len' => '150',
      'comment' => 'Name of the Company',
      'unified_search' => true,
      'full_text_search' => 
      array (
        'boost' => '3',
        'enabled' => true,
      ),
      'audited' => true,
      'required' => true,
      'importable' => 'required',
      'duplicate_on_record_copy' => 'always',
      'merge_filter' => 'disabled',
      'massupdate' => false,
      'no_default' => false,
      'comments' => 'Name of the Company',
      'help' => '',
      'duplicate_merge' => 'enabled',
      'duplicate_merge_dom_value' => '1',
      'reportable' => true,
      'calculated' => false,
      'size' => '20',
    ),
    'last_name' => 
    array (
      'required' => false,
      'name' => 'last_name',
      'vname' => 'LBL_LAST_NAME',
      'type' => 'varchar',
      'massupdate' => false,
      'no_default' => false,
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'enabled',
      'duplicate_merge_dom_value' => '1',
      'audited' => false,
      'reportable' => true,
      'unified_search' => false,
      'merge_filter' => 'disabled',
      'full_text_search' => 
      array (
        'boost' => '0',
        'enabled' => false,
      ),
      'calculated' => false,
      'len' => '255',
      'size' => '20',
    ),
    'act_date' => 
    array (
      'required' => false,
      'name' => 'act_date',
      'vname' => 'LBL_ACT_DATE',
      'type' => 'datetimecombo',
      'massupdate' => true,
      'no_default' => false,
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'enabled',
      'duplicate_merge_dom_value' => '1',
      'audited' => false,
      'reportable' => true,
      'unified_search' => false,
      'merge_filter' => 'disabled',
      'calculated' => false,
      'size' => '20',
      'enable_range_search' => false,
      'dbType' => 'datetime',
    ),
    'expiry_date' => 
    array (
      'required' => false,
      'name' => 'expiry_date',
      'vname' => 'LBL_EXPIRY_DATE',
      'type' => 'datetimecombo',
      'massupdate' => true,
      'no_default' => false,
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'enabled',
      'duplicate_merge_dom_value' => '1',
      'audited' => false,
      'reportable' => true,
      'unified_search' => false,
      'merge_filter' => 'disabled',
      'calculated' => false,
      'size' => '20',
      'enable_range_search' => false,
      'dbType' => 'datetime',
    ),
  ),
  'relationships' => 
  array (
  ),
);