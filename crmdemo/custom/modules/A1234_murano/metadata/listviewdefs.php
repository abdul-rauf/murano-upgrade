<?php
// created: 2018-06-13 14:43:59
$listViewDefs['A1234_murano'] = array (
  'MURANO_C' => 
  array (
    'type' => 'iframe',
    'default' => true,
    'label' => 'LBL_MURANO',
    'width' => '100',
  ),
  'DESCRIPTION' => 
  array (
    'type' => 'text',
    'label' => 'LBL_DESCRIPTION',
    'sortable' => false,
    'width' => '100',
    'default' => false,
  ),
  'ASSIGNED_USER_NAME' => 
  array (
    'width' => '9',
    'label' => 'LBL_ASSIGNED_TO_NAME',
    'module' => 'Employees',
    'id' => 'ASSIGNED_USER_ID',
    'default' => false,
  ),
  'NAME' => 
  array (
    'width' => '32',
    'label' => 'LBL_NAME',
    'default' => false,
    'link' => true,
  ),
  'TEAM_NAME' => 
  array (
    'width' => '9',
    'label' => 'LBL_TEAM',
    'default' => false,
  ),
);