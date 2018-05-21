<?php
/* Created by SugarUpgrader for module zr2_Report */
$viewdefs['zr2_Report']['base']['menu']['header'] =array (
  0 => 
  array (
    'route' => '#zr2_Report/create',
    'label' => 'LNK_NEW_RECORD',
    'acl_action' => 'create',
    'acl_module' => 'zr2_Report',
    'icon' => 'icon-plus',
  ),
  1 => 
  array (
    'route' => '#zr2_Report',
    'label' => 'LNK_LIST',
    'acl_action' => 'list',
    'acl_module' => 'zr2_Report',
    'icon' => 'icon-reorder',
  ),
  2 => 
  array (
    'route' => '#bwc/index.php?module=Import&action=Step1&import_module=zr2_Report',
    'label' => 'LNK_IMPORT_ZR2_REPORT',
    'acl_action' => 'import',
    'acl_module' => 'zr2_Report',
    'icon' => 'icon-upload',
  ),
);
