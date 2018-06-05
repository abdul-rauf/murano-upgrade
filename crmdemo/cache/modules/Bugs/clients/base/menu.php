<?php
$clientCache['Bugs']['base']['menu'] = array (
  'quickcreate' => 
  array (
    'meta' => 
    array (
      'layout' => 'create',
      'label' => 'LNK_NEW_BUG',
      'visible' => false,
      'icon' => 'icon-plus',
      'order' => 15,
    ),
  ),
  'header' => 
  array (
    'meta' => 
    array (
      0 => 
      array (
        'route' => '#Bugs/create',
        'label' => 'LNK_NEW_BUG',
        'acl_action' => 'create',
        'acl_module' => 'Bugs',
        'icon' => 'icon-plus',
      ),
      1 => 
      array (
        'route' => '#Bugs',
        'label' => 'LNK_BUG_LIST',
        'acl_action' => 'list',
        'acl_module' => 'Bugs',
        'icon' => 'icon-reorder',
      ),
      2 => 
      array (
        'route' => '#bwc/index.php?module=Reports&action=index&view=bugs&query=true&report_module=Bugs',
        'label' => 'LNK_BUG_REPORTS',
        'acl_action' => 'list',
        'acl_module' => 'Bugs',
        'icon' => 'icon-bar-chart',
      ),
      3 => 
      array (
        'route' => '#bwc/index.php?module=Import&action=Step1&import_module=Bugs&return_module=Bugs&return_action=index',
        'label' => 'LNK_IMPORT_BUGS',
        'acl_action' => 'import',
        'acl_module' => 'Bugs',
        'icon' => 'icon-upload',
      ),
    ),
  ),
  '_hash' => 'ac7a3894e0deff263d170b0730d1e7ad',
);

