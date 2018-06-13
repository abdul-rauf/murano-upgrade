<?php
// created: 2018-06-13 14:43:59
$listViewDefs['mur_client_n_list'] = array (
  'NAME' => 
  array (
    'width' => '32',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
  ),
  'CONTINENT' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_CONTINENT',
    'width' => '10',
  ),
  'DATE_ENTERED' => 
  array (
    'type' => 'datetime',
    'label' => 'LBL_DATE_ENTERED',
    'width' => '10',
    'default' => true,
  ),
  'ASSIGNED_USER_NAME' => 
  array (
    'width' => '9',
    'label' => 'LBL_ASSIGNED_TO_NAME',
    'module' => 'Employees',
    'id' => 'ASSIGNED_USER_ID',
    'default' => true,
  ),
  'TEAM_NAME' => 
  array (
    'width' => '9',
    'label' => 'LBL_TEAM',
    'default' => false,
  ),
);