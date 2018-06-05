<?php
$clientCache['cl_Client_list']['base']['menu'] = array (
  'quickcreate' => 
  array (
    'meta' => 
    array (
      'layout' => 'create',
      'label' => 'LNK_NEW_RECORD',
      'icon' => 'icon-plus',
      'visible' => false,
      'order' => 16,
    ),
  ),
  'header' => 
  array (
    'meta' => 
    array (
      0 => 
      array (
        'route' => '#cl_Client_list/create',
        'label' => 'LNK_NEW_RECORD',
        'acl_action' => 'create',
        'acl_module' => 'cl_Client_list',
        'icon' => 'icon-plus',
      ),
      1 => 
      array (
        'route' => '#cl_Client_list',
        'label' => 'LNK_LIST',
        'acl_action' => 'list',
        'acl_module' => 'cl_Client_list',
        'icon' => 'icon-reorder',
      ),
      2 => 
      array (
        'route' => '#bwc/index.php?module=Import&action=Step1&import_module=cl_Client_list',
        'label' => 'LNK_IMPORT_CL_CLIENT_LIST',
        'acl_action' => 'import',
        'acl_module' => 'cl_Client_list',
        'icon' => 'icon-upload',
      ),
    ),
  ),
  '_hash' => '9a0219886d14eb32eb48b45627f2c7e5',
);

