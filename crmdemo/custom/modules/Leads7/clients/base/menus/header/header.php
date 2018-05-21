<?php
/* Created by SugarUpgrader for module cl_Client_list */
$viewdefs['cl_Client_list']['base']['menu']['header'] =array (
  0 => 
  array (
    'route' => '#Leads/create',
    'label' => 'LNK_NEW_RECORD',
    'acl_action' => 'create',
    'acl_module' => 'Leads',
    'icon' => 'icon-plus',
  ),
  1 => 
  array (
    'route' => '#Leads',
    'label' => 'LNK_LIST',
    'acl_action' => 'list',
    'acl_module' => 'Leads',
    'icon' => 'icon-reorder',
  ),
  2 => 
  array (
    'route' => '#bwc/index.php?module=Import&action=Step1&import_module=Leads',
    'label' => 'LNK_IMPORT_Leads',
    'acl_action' => 'import',
    'acl_module' => 'Leads',
    'icon' => 'icon-upload',
  ),
);
