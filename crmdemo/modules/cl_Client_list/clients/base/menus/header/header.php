<?php
/* Created by SugarUpgrader for module cl_Client_list */
$viewdefs['cl_Client_list']['base']['menu']['header'] =array (
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
);
