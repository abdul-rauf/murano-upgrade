<?php
$popupMeta = array (
    'moduleMain' => 'A1234_murano',
    'varName' => 'A1234_murano',
    'orderBy' => 'a1234_murano.name',
    'whereClauses' => array (
  'name' => 'a1234_murano.name',
),
    'searchInputs' => array (
  0 => 'a1234_murano_number',
  1 => 'name',
  2 => 'priority',
  3 => 'status',
),
    'listviewdefs' => array (
  'MURANO_C' => 
  array (
    'type' => 'iframe',
    'default' => true,
    'label' => 'LBL_MURANO',
    'width' => '100%',
    'name' => 'murano_c',
  ),
  'DESCRIPTION' => 
  array (
    'type' => 'text',
    'label' => 'LBL_DESCRIPTION',
    'sortable' => false,
    'width' => '100%',
    'default' => false,
    'name' => 'description',
  ),
  'ASSIGNED_USER_NAME' => 
  array (
    'width' => '9%',
    'label' => 'LBL_ASSIGNED_TO_NAME',
    'module' => 'Employees',
    'id' => 'ASSIGNED_USER_ID',
    'default' => false,
    'name' => 'assigned_user_name',
  ),
  'NAME' => 
  array (
    'width' => '32%',
    'label' => 'LBL_NAME',
    'default' => false,
    'link' => true,
    'name' => 'name',
  ),
),
);
