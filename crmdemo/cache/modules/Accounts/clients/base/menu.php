<?php
$clientCache['Accounts']['base']['menu'] = array (
  'header' => 
  array (
    'meta' => 
    array (
      0 => 
      array (
        'label' => 'LNK_NEW_ACCOUNT',
        'acl_action' => 'create',
        'acl_module' => 'Accounts',
        'icon' => 'icon-plus',
        'route' => '#Accounts/create',
      ),
      1 => 
      array (
        'label' => 'LBL_BAL',
        'acl_action' => 'create',
        'acl_module' => 'Accounts',
        'icon' => 'icon-plus',
        'route' => '#Accounts/layout/dnb-bal',
      ),
      2 => 
      array (
        'route' => '#Accounts',
        'label' => 'LNK_ACCOUNT_LIST',
        'acl_action' => 'list',
        'acl_module' => 'Accounts',
        'icon' => 'icon-reorder',
      ),
      3 => 
      array (
        'route' => '#bwc/index.php?module=Reports&action=index&view=Accounts&query=true&report_module=Accounts',
        'label' => 'LNK_ACCOUNT_REPORTS',
        'acl_action' => 'list',
        'acl_module' => 'Accounts',
        'icon' => 'icon-bar-chart',
      ),
      4 => 
      array (
        'route' => '#bwc/index.php?module=Import&action=Step1&import_module=Accounts',
        'label' => 'LNK_IMPORT_ACCOUNTS',
        'acl_action' => 'import',
        'acl_module' => 'Accounts',
        'icon' => 'icon-upload',
      ),
    ),
  ),
  'quickcreate' => 
  array (
    'meta' => 
    array (
      'layout' => 'create',
      'label' => 'LNK_NEW_ACCOUNT',
      'visible' => true,
      'order' => 0,
      'icon' => 'icon-plus',
    ),
  ),
  '_hash' => '0174861775f5fa1fd96e744b04d86b9b',
);

