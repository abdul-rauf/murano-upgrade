<?php
$module_name = 'cl_Client_list';
$listViewDefs [$module_name] = 
array (
  'ACCOUNT_NAME' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_ACCOUNT_NAME',
    'width' => '10%',
    'default' => true,
  ),
  'CLIENT_LIST' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_CLIENT_LIST',
    'width' => '10%',
  ),
  'DATE_SENT' => 
  array (
    'type' => 'date',
    'label' => 'LBL_DATE_SENT',
    'width' => '10%',
    'default' => true,
  ),
  'HIT_STATUS' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_HIT_STATUS',
    'width' => '10%',
  ),
  'TICKET_SIZE' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_TICKET_SIZE',
    'width' => '10%',
    'default' => true,
  ),
  'NAME' => 
  array (
    'width' => '32%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
  ),
  'ASSIGNED_USER_NAME' => 
  array (
    'width' => '9%',
    'label' => 'LBL_ASSIGNED_TO_NAME',
    'module' => 'Employees',
    'id' => 'ASSIGNED_USER_ID',
    'default' => true,
  ),
  'TEAM_NAME' => 
  array (
    'width' => '9%',
    'label' => 'LBL_TEAM',
    'default' => false,
  ),
);
?>
