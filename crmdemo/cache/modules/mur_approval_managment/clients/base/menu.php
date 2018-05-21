<?php
$clientCache['mur_approval_managment']['base']['menu'] = array (
  'quickcreate' => 
  array (
    'meta' => 
    array (
      'layout' => 'create',
      'label' => 'LNK_NEW_RECORD',
      'icon' => 'icon-plus',
      'visible' => false,
      'order' => 22,
    ),
  ),
  'header' => 
  array (
    'meta' => 
    array (
      0 => 
      array (
        'route' => '#mur_approval_managment/create',
        'label' => 'LNK_NEW_RECORD',
        'acl_action' => 'create',
        'acl_module' => 'mur_approval_managment',
        'icon' => 'icon-plus',
      ),
      1 => 
      array (
        'route' => '#mur_approval_managment',
        'label' => 'LNK_LIST',
        'acl_action' => 'list',
        'acl_module' => 'mur_approval_managment',
        'icon' => 'icon-reorder',
      ),
      2 => 
      array (
        'route' => '#bwc/index.php?module=Import&action=Step1&import_module=mur_approval_managment',
        'label' => 'LNK_IMPORT_MUR_APPROVAL_MANAGMENT',
        'acl_action' => 'import',
        'acl_module' => 'mur_approval_managment',
        'icon' => 'icon-upload',
      ),
    ),
  ),
  '_hash' => '473fd6a844e3ecee0600da338facd358',
);

