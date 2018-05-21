<?php
/* Created by SugarUpgrader for module zr2_ReportContainer */
$viewdefs['zr2_ReportContainer']['base']['menu']['header'] =array (
  0 => 
  array (
    'route' => '#zr2_ReportContainer/create',
    'label' => 'LNK_NEW_RECORD',
    'acl_action' => 'create',
    'acl_module' => 'zr2_ReportContainer',
    'icon' => 'icon-plus',
  ),
  1 => 
  array (
    'route' => '#zr2_ReportContainer',
    'label' => 'LNK_LIST',
    'acl_action' => 'list',
    'acl_module' => 'zr2_ReportContainer',
    'icon' => 'icon-reorder',
  ),
  2 => 
  array (
    'route' => '#bwc/index.php?module=Import&action=Step1&import_module=zr2_ReportContainer',
    'label' => 'LNK_IMPORT_ZR2_REPORTCONTAINER',
    'acl_action' => 'import',
    'acl_module' => 'zr2_ReportContainer',
    'icon' => 'icon-upload',
  ),
);
