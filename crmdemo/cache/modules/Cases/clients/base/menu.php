<?php
$clientCache['Cases']['base']['menu'] = array (
  'quickcreate' => 
  array (
    'meta' => 
    array (
      'layout' => 'create',
      'label' => 'LNK_NEW_CASE',
      'visible' => false,
      'icon' => 'icon-plus',
      'order' => 13,
    ),
  ),
  'header' => 
  array (
    'meta' => 
    array (
      0 => 
      array (
        'route' => '#Cases/create',
        'label' => 'LNK_NEW_CASE',
        'acl_action' => 'create',
        'acl_module' => 'Cases',
        'icon' => 'icon-plus',
      ),
      1 => 
      array (
        'route' => '#Cases',
        'label' => 'LNK_CASE_LIST',
        'acl_action' => 'list',
        'acl_module' => 'Cases',
        'icon' => 'icon-reorder',
      ),
      2 => 
      array (
        'route' => '#bwc/index.php?module=Reports&action=index&view=cases&query=true&report_module=Cases',
        'label' => 'LNK_CASE_REPORTS',
        'acl_action' => 'list',
        'acl_module' => 'Cases',
        'icon' => 'icon-bar-chart',
      ),
      3 => 
      array (
        'route' => '#bwc/index.php?module=Import&action=Step1&import_module=Cases&return_module=Cases&return_action=index',
        'label' => 'LNK_IMPORT_CASES',
        'acl_action' => 'import',
        'acl_module' => 'Cases',
        'icon' => 'icon-upload',
      ),
    ),
  ),
  '_hash' => 'fa5fe05d8049d779d9d5d869d4a54f79',
);

