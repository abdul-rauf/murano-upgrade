<?php
// created: 2012-03-05 19:19:21
$subpanel_layout['list_fields'] = array (
  'name' => 
  array (
    'vname' => 'LBL_NAME',
    'widget_class' => 'SubPanelDetailViewLink',
    'width' => '45%',
    'default' => true,
  ),
  'client_list' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'vname' => 'LBL_CLIENT_LIST',
    'width' => '10%',
  ),
  'date_sent' => 
  array (
    'type' => 'date',
    'vname' => 'LBL_DATE_SENT',
    'width' => '10%',
    'default' => true,
  ),
  'hit_status' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'vname' => 'LBL_HIT_STATUS',
    'width' => '10%',
  ),
  'continent' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'vname' => 'LBL_CONTINENT',
    'width' => '10%',
  ),
  'ticket_size' => 
  array (
    'type' => 'varchar',
    'vname' => 'LBL_TICKET_SIZE',
    'width' => '10%',
    'default' => true,
  ),
  'created_by_name' => 
  array (
    'type' => 'relate',
    'link' => 'created_by_link',
    'vname' => 'LBL_CREATED',
    'width' => '10%',
    'default' => true,
    'widget_class' => 'SubPanelDetailViewLink',
    'target_module' => 'Users',
    'target_record_key' => 'created_by',
  ),
  'remove_button' => 
  array (
    'widget_class' => 'SubPanelRemoveButton',
    'module' => 'cl_Client_list',
    'width' => '5%',
    'default' => true,
  ),
  'edit_button' => 
  array (
    'widget_class' => 'SubPanelEditButton',
    'module' => 'cl_Client_list',
    'width' => '4%',
    'default' => true,
  ),
);