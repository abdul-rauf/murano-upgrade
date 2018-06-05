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
    'clients' => 
    array (
      'required' => true,
      'name' => 'clients',
      'vname' => 'LBL_CLIENTS',
      'type' => 'enum',
      'massupdate' => 0,
      'default' => 'CSV',
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
      'options' => 'Client_list',
      'studio' => 'visible',
      'dependency' => false,
    ),
    'continent' => 
    array (
      'required' => false,
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
  ),
  'relationships' => 
  array (
  ),
);