<?php
$clientCache['mr_consultant']['base']['menu'] = array (
  'quickcreate' => 
  array (
    'meta' => 
    array (
      'layout' => 'create',
      'label' => 'LNK_NEW_RECORD',
      'icon' => 'icon-plus',
      'visible' => false,
      'order' => 19,
    ),
  ),
  'header' => 
  array (
    'meta' => 
    array (
      0 => 
      array (
        'route' => '#mr_consultant/create',
        'label' => 'LNK_NEW_RECORD',
        'acl_action' => 'create',
        'acl_module' => 'mr_consultant',
        'icon' => 'icon-plus',
      ),
      1 => 
      array (
        'route' => '#mr_consultant',
        'label' => 'LNK_LIST',
        'acl_action' => 'list',
        'acl_module' => 'mr_consultant',
        'icon' => 'icon-reorder',
      ),
      2 => 
      array (
        'route' => '#bwc/index.php?module=Import&action=Step1&import_module=mr_consultant',
        'label' => 'LNK_IMPORT_MR_CONSULTANT',
        'acl_action' => 'import',
        'acl_module' => 'mr_consultant',
        'icon' => 'icon-upload',
      ),
    ),
  ),
  '_hash' => '4c9baf57a1271f5745afbed9b5690295',
);

