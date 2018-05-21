<?php
/* Created by SugarUpgrader for module zr2_ReportParameter */
$viewdefs['zr2_ReportParameter']['base']['menu']['header'] =array (
  0 => 
  array (
    'route' => '#zr2_ReportParameter/create',
    'label' => 'LNK_NEW_RECORD',
    'acl_action' => 'create',
    'acl_module' => 'zr2_ReportParameter',
    'icon' => 'icon-plus',
  ),
  1 => 
  array (
    'route' => '#zr2_ReportParameter',
    'label' => 'LNK_LIST',
    'acl_action' => 'list',
    'acl_module' => 'zr2_ReportParameter',
    'icon' => 'icon-reorder',
  ),
  2 => 
  array (
    'route' => '#bwc/index.php?module=Import&action=Step1&import_module=zr2_ReportParameter',
    'label' => 'LNK_IMPORT_ZR2_REPORTPARAMETER',
    'acl_action' => 'import',
    'acl_module' => 'zr2_ReportParameter',
    'icon' => 'icon-upload',
  ),
);
