<?php
// created: 2018-06-12 08:15:50
$listViewDefs['Calls'] = array (
  'name' => 
  array (
    'width' => '30%',
    'label' => 'LBL_LIST_SUBJECT',
    'link' => true,
    'default' => true,
  ),
  'direction' => 
  array (
    'width' => '10%',
    'label' => 'LBL_LIST_DIRECTION',
    'link' => false,
    'default' => true,
  ),
  'date_start' => 
  array (
    'width' => '15%',
    'label' => 'LBL_LIST_DATE',
    'link' => false,
    'default' => true,
    'related_fields' => 
    array (
      0 => 'time_start',
    ),
  ),
  'parent_name' => 
  array (
    'width' => '15%',
    'label' => 'LBL_LIST_RELATED_TO',
    'dynamic_module' => 'PARENT_TYPE',
    'id' => 'PARENT_ID',
    'link' => true,
    'default' => true,
    'sortable' => false,
    'ACLTag' => 'PARENT',
    'related_fields' => 
    array (
      0 => 'parent_id',
      1 => 'parent_type',
    ),
  ),
  'class_of_service_c' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_CLASS_OF_SERVICE',
    'width' => '10%',
  ),
  'extension_c' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'label' => 'LBL_EXTENSION',
    'width' => '10%',
  ),
  'talk_c' => 
  array (
    'type' => 'int',
    'default' => true,
    'label' => 'LBL_TALK',
    'width' => '10%',
  ),
  'cost_c' => 
  array (
    'related_fields' => 
    array (
      0 => 'currency_id',
      1 => 'base_rate',
    ),
    'type' => 'currency',
    'default' => true,
    'label' => 'LBL_COST',
    'currency_format' => true,
    'width' => '10%',
  ),
  'answer_c' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_ANSWER',
    'width' => '10%',
  ),
  'users_calls_1_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_USERS_CALLS_1_FROM_USERS_TITLE',
    'id' => 'USERS_CALLS_1USERS_IDA',
    'sortable' => false,
    'width' => '10%',
    'default' => true,
  ),
  'date_entered' => 
  array (
    'type' => 'datetime',
    'label' => 'LBL_DATE_ENTERED',
    'width' => '10%',
    'default' => true,
  ),
  'contact_name' => 
  array (
    'width' => '15%',
    'label' => 'LBL_LIST_CONTACT',
    'link' => true,
    'id' => 'CONTACT_ID',
    'module' => 'Contacts',
    'default' => false,
    'ACLTag' => 'CONTACT',
  ),
  'set_complete' => 
  array (
    'width' => '5%',
    'label' => 'LBL_LIST_CLOSE',
    'link' => true,
    'sortable' => false,
    'default' => false,
    'related_fields' => 
    array (
      0 => 'status',
    ),
  ),
  'team_name' => 
  array (
    'width' => '2%',
    'label' => 'LBL_LIST_TEAM',
    'default' => false,
  ),
  'status' => 
  array (
    'width' => '10%',
    'label' => 'LBL_STATUS',
    'link' => false,
    'default' => false,
  ),
  'assigned_user_name' => 
  array (
    'width' => '2%',
    'label' => 'LBL_LIST_ASSIGNED_TO_NAME',
    'module' => 'Employees',
    'id' => 'ASSIGNED_USER_ID',
    'default' => false,
  ),
);