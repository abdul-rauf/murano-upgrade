<?php
// created: 2018-06-13 14:43:59
$listViewDefs['cl_Client_list'] = array (
  'CLIENT_LIST' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_CLIENT_LIST',
    'width' => '10',
  ),
  'CLIENT_LISTS_RELATE_C' => 
  array (
    'type' => 'relate',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_CLIENT_LISTS_RELATE',
    'width' => '10',
  ),
  'DATE_SENT' => 
  array (
    'type' => 'date',
    'label' => 'LBL_DATE_SENT',
    'width' => '10',
    'default' => true,
  ),
  'HIT_STATUS' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_HIT_STATUS',
    'width' => '10',
  ),
  'CONTINENT' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_CONTINENT',
    'width' => '10',
  ),
  'TICKET_SIZE' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_TICKET_SIZE',
    'width' => '10',
    'default' => true,
  ),
  'NAME' => 
  array (
    'width' => '32',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
  ),
  'ASSIGNED_USER_NAME' => 
  array (
    'width' => '9',
    'label' => 'LBL_ASSIGNED_TO_NAME',
    'module' => 'Employees',
    'id' => 'ASSIGNED_USER_ID',
    'default' => true,
  ),
  'RELATE_TO_LEADS' => 
  array (
    'type' => 'relate',
    'studio' => 'visible',
    'label' => 'LBL_RELATE_TO_LEADS',
    'width' => '10',
    'default' => true,
  ),
  'TEAM_NAME' => 
  array (
    'width' => '9',
    'label' => 'LBL_TEAM',
    'default' => false,
  ),
);