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
    'client_list' => 
    array (
      'required' => false,
      'name' => 'client_list',
      'vname' => 'LBL_CLIENT_LIST',
      'type' => 'enum',
      'massupdate' => 0,
      'default' => 'CSV',
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => true,
      'reportable' => true,
      'calculated' => false,
      'len' => 100,
      'size' => '20',
      'options' => 'Client_list',
      'studio' => 'visible',
      'dependency' => false,
    ),
    'date_sent' => 
    array (
      'required' => false,
      'name' => 'date_sent',
      'vname' => 'LBL_DATE_SENT',
      'type' => 'date',
      'massupdate' => 0,
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => false,
      'reportable' => true,
      'calculated' => false,
      'size' => '20',
      'enable_range_search' => false,
      'display_default' => 'now',
    ),
    'hit_status' => 
    array (
      'required' => false,
      'name' => 'hit_status',
      'vname' => 'LBL_HIT_STATUS',
      'type' => 'enum',
      'massupdate' => 0,
      'default' => '1',
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => false,
      'reportable' => true,
      'calculated' => false,
      'len' => 100,
      'size' => '20',
      'options' => 'hit',
      'studio' => 'visible',
      'dependency' => false,
    ),
    'continent' => 
    array (
      'required' => true,
      'name' => 'continent',
      'vname' => 'LBL_CONTINENT',
      'type' => 'enum',
      'massupdate' => 0,
      'default' => 'Europe',
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => false,
      'reportable' => true,
      'calculated' => false,
      'len' => 100,
      'size' => '20',
      'options' => 'Continent',
      'studio' => 'visible',
      'dependency' => false,
    ),
    'ticket_size' => 
    array (
      'required' => false,
      'name' => 'ticket_size',
      'vname' => 'LBL_TICKET_SIZE',
      'type' => 'varchar',
      'massupdate' => 0,
      'comments' => '',
      'help' => '',
      'importable' => 'false',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => false,
      'reportable' => true,
      'calculated' => false,
      'len' => '255',
      'size' => '20',
    ),
    'lead_id_c' => 
    array (
      'required' => false,
      'name' => 'lead_id_c',
      'vname' => '',
      'type' => 'id',
      'massupdate' => 0,
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => 0,
      'audited' => false,
      'reportable' => false,
      'calculated' => false,
      'len' => 36,
      'size' => '20',
    ),
    'relate_to_leads' => 
    array (
      'required' => false,
      'source' => 'non-db',
      'name' => 'relate_to_leads',
      'vname' => 'LBL_RELATE_TO_LEADS',
      'type' => 'relate',
      'massupdate' => 0,
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => false,
      'reportable' => true,
      'calculated' => false,
      'len' => '255',
      'size' => '20',
      'id_name' => 'lead_id_c',
      'ext2' => 'Leads',
      'module' => 'Leads',
      'rname' => 'name',
      'quicksearch' => 'enabled',
      'studio' => 'visible',
    ),
    'name' => 
    array (
      'name' => 'name',
      'vname' => 'LBL_NAME',
      'type' => 'name',
      'link' => true,
      'dbType' => 'varchar',
      'len' => '255',
      'unified_search' => true,
      'required' => true,
      'importable' => 'required',
      'duplicate_merge' => 'disabled',
      'merge_filter' => 'selected',
      'massupdate' => 0,
      'comments' => '',
      'help' => '',
      'duplicate_merge_dom_value' => '0',
      'audited' => false,
      'reportable' => true,
      'calculated' => false,
      'size' => '20',
    ),
    'account_name' => 
    array (
      'required' => false,
      'name' => 'account_name',
      'vname' => 'LBL_ACCOUNT_NAME',
      'type' => 'varchar',
      'massupdate' => 0,
      'comments' => '',
      'help' => '',
      'importable' => 'false',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => false,
      'reportable' => true,
      'calculated' => false,
      'len' => '255',
      'size' => '20',
    ),
  ),
  'relationships' => 
  array (
  ),
);