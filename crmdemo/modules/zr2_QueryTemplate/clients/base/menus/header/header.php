<?php
/* Created by SugarUpgrader for module zr2_QueryTemplate */
$viewdefs['zr2_QueryTemplate']['base']['menu']['header'] =array (
  0 => 
  array (
    'route' => '#zr2_QueryTemplate/create',
    'label' => 'LNK_NEW_RECORD',
    'acl_action' => 'create',
    'acl_module' => 'zr2_QueryTemplate',
    'icon' => 'icon-plus',
  ),
  1 => 
  array (
    'route' => '#zr2_QueryTemplate',
    'label' => 'LNK_LIST',
    'acl_action' => 'list',
    'acl_module' => 'zr2_QueryTemplate',
    'icon' => 'icon-reorder',
  ),
  2 => 
  array (
    'route' => '#bwc/index.php?module=Import&action=Step1&import_module=zr2_QueryTemplate',
    'label' => 'LNK_IMPORT_ZR2_QUERYTEMPLATE',
    'acl_action' => 'import',
    'acl_module' => 'zr2_QueryTemplate',
    'icon' => 'icon-upload',
  ),
);
