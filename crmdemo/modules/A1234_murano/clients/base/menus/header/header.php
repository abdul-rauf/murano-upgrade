<?php
/* Created by SugarUpgrader for module A1234_murano */
$viewdefs['A1234_murano']['base']['menu']['header'] =array (
  0 => 
  array (
    'route' => '#A1234_murano/create',
    'label' => 'LNK_NEW_RECORD',
    'acl_action' => 'create',
    'acl_module' => 'A1234_murano',
    'icon' => 'icon-plus',
  ),
  1 => 
  array (
    'route' => '#A1234_murano',
    'label' => 'LNK_LIST',
    'acl_action' => 'list',
    'acl_module' => 'A1234_murano',
    'icon' => 'icon-reorder',
  ),
  2 => 
  array (
    'route' => '#bwc/index.php?module=Import&action=Step1&import_module=A1234_murano',
    'label' => 'LNK_IMPORT_A1234_MURANO',
    'acl_action' => 'import',
    'acl_module' => 'A1234_murano',
    'icon' => 'icon-upload',
  ),
);
