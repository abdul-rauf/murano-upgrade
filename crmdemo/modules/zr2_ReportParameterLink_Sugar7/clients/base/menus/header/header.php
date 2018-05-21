<?php
/* Created by SugarUpgrader for module zr2_ReportParameterLink */
$viewdefs['zr2_ReportParameterLink']['base']['menu']['header'] =array (
  0 => 
  array (
    'route' => '#zr2_ReportParameterLink/create',
    'label' => 'LNK_NEW_RECORD',
    'acl_action' => 'create',
    'acl_module' => 'zr2_ReportParameterLink',
    'icon' => 'icon-plus',
  ),
  1 => 
  array (
    'route' => '#zr2_ReportParameterLink',
    'label' => 'LNK_LIST',
    'acl_action' => 'list',
    'acl_module' => 'zr2_ReportParameterLink',
    'icon' => 'icon-reorder',
  ),
  2 => 
  array (
    'route' => '#bwc/index.php?module=Import&action=Step1&import_module=zr2_ReportParameterLink',
    'label' => 'LNK_IMPORT_ZR2_REPORTPARAMETERLINK',
    'acl_action' => 'import',
    'acl_module' => 'zr2_ReportParameterLink',
    'icon' => 'icon-upload',
  ),
);
