<?php
// created: 2016-08-08 13:47:45
$subpanel_layout['list_fields'] = array (
  'account_name' => 
  array (
    'type' => 'varchar',
    'vname' => 'LBL_ACCOUNT_NAME',
    'width' => '10%',
    'default' => true,
  ),
  'full_name' => 
  array (
    'type' => 'fullname',
    'link' => true,
    'studio' => 
    array (
      'listview' => false,
    ),
    'vname' => 'LBL_NAME',
    'width' => '10%',
    'default' => true,
  ),
  'feedback_c' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'vname' => 'LBL_FEEDBACK',
    'width' => '10%',
  ),
  'feedback2_c' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'vname' => 'LBL_FEEDBACK2',
    'width' => '10%',
  ),
  'feedback3_c' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'vname' => 'LBL_FEEDBACK3',
    'width' => '10%',
  ),
  'assigned_user_name' => 
  array (
    'name' => 'assigned_user_name',
    'vname' => 'LBL_LIST_ASSIGNED_TO_NAME',
    'widget_class' => 'SubPanelDetailViewLink',
    'target_record_key' => 'assigned_user_id',
    'target_module' => 'Employees',
    'width' => '10%',
    'default' => true,
  ),
  'target_links' => 
  array (
    'type' => 'text',
    'studio' => 
    array (
      'listview' => true,
      'detailview' => true,
    ),
    'vname' => 'All Target Lists',
    'sortable' => false,
    'width' => '10%',
    'default' => true,
  ),
  'primary_address_state' => 
  array (
    'type' => 'varchar',
    'vname' => 'LBL_PRIMARY_ADDRESS_STATE',
    'width' => '10%',
    'default' => true,
  ),
  'primary_address_country' => 
  array (
    'type' => 'varchar',
    'vname' => 'LBL_PRIMARY_ADDRESS_COUNTRY',
    'width' => '10%',
    'default' => true,
  ),
  'last_spoke_c' => 
  array (
    'type' => 'date',
    'default' => true,
    'vname' => 'LBL_LAST_SPOKE',
    'width' => '10%',
  ),
  'status' => 
  array (
    'type' => 'enum',
    'vname' => 'LBL_STATUS',
    'width' => '10%',
    'default' => true,
  ),
  'first_name' => 
  array (
    'usage' => 'query_only',
  ),
  'last_name' => 
  array (
    'usage' => 'query_only',
  ),
  'salutation' => 
  array (
    'name' => 'salutation',
    'usage' => 'query_only',
  ),
);