<?php
/* Created by SugarUpgrader for module uc2ce_Click2Call */
$viewdefs['uc2ce_Click2Call']['base']['menu']['header'] =array (
  0 => 
  array (
    'route' => '#uc2ce_Click2Call/create',
    'label' => 'LNK_NEW_RECORD',
    'acl_action' => 'create',
    'acl_module' => 'uc2ce_Click2Call',
    'icon' => 'icon-plus',
  ),
  1 => 
  array (
    'route' => '#uc2ce_Click2Call',
    'label' => 'LNK_LIST',
    'acl_action' => 'list',
    'acl_module' => 'uc2ce_Click2Call',
    'icon' => 'icon-reorder',
  ),
  2 => 
  array (
    'route' => '#bwc/index.php?module=Import&action=Step1&import_module=uc2ce_Click2Call',
    'label' => 'LNK_IMPORT_UC2CE_CLICK2CALL',
    'acl_action' => 'import',
    'acl_module' => 'uc2ce_Click2Call',
    'icon' => 'icon-upload',
  ),
);