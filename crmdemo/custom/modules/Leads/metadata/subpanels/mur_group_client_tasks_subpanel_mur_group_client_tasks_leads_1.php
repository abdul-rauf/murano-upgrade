<?php
// created: 2016-06-27 13:16:08
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
  'account_description' => 
  array (
    'type' => 'text',
    'vname' => 'LBL_ACCOUNT_DESCRIPTION',
    'sortable' => false,
    'width' => '10%',
    'default' => true,
  ),
  'tempanalyst_c' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'vname' => 'LBL_TEMPANALYST',
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
  'inv_groups' => 
  array (
    'type' => 'text',
    'studio' => 
    array (
      'listview' => true,
      'detailview' => true,
    ),
    'vname' => 'Investor Group Tasks',
    'sortable' => false,
    'width' => '10%',
    'default' => true,
  ),
  'suitable_clients_2_c' => 
  array (
    'type' => 'multienum',
    'default' => true,
    'studio' => 'visible',
    'vname' => 'LBL_SUITABLE_CLIENTS_2',
    'width' => '10%',
  ),
  'trips_suitable2_c' => 
  array (
    'type' => 'multienum',
    'default' => true,
    'studio' => 'visible',
    'vname' => 'LBL_TRIPS_SUITABLE2',
    'width' => '10%',
  ),
  'trips_suitable3_c' => 
  array (
    'type' => 'multienum',
    'default' => true,
    'studio' => 'visible',
    'vname' => 'LBL_TRIPS_SUITABLE3',
    'width' => '10%',
  ),
  'trips_suitable4_c' => 
  array (
    'type' => 'multienum',
    'default' => true,
    'studio' => 'visible',
    'vname' => 'LBL_TRIPS_SUITABLE4',
    'width' => '10%',
  ),
  'trips_suitable5_c' => 
  array (
    'type' => 'multienum',
    'default' => true,
    'studio' => 'visible',
    'vname' => 'LBL_TRIPS_SUITABLE5',
    'width' => '10%',
  ),
  'trip6_c' => 
  array (
    'type' => 'multienum',
    'default' => true,
    'studio' => 'visible',
    'vname' => 'LBL_TRIP6',
    'width' => '10%',
  ),
  'trip7_c' => 
  array (
    'type' => 'multienum',
    'default' => true,
    'studio' => 'visible',
    'vname' => 'LBL_TRIP7',
    'width' => '10%',
  ),
  'trip8_c' => 
  array (
    'type' => 'multienum',
    'default' => true,
    'studio' => 'visible',
    'vname' => 'LBL_TRIP8',
    'width' => '10%',
  ),
  'trip9_c' => 
  array (
    'type' => 'multienum',
    'default' => true,
    'studio' => 'visible',
    'vname' => 'LBL_TRIP9',
    'width' => '10%',
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