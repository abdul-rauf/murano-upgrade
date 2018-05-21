<?php
$clientCache['mur_client_n_list']['base']['menu'] = array (
  'quickcreate' => 
  array (
    'meta' => 
    array (
      'layout' => 'create',
      'label' => 'LNK_NEW_RECORD',
      'icon' => 'icon-plus',
      'visible' => false,
      'order' => 17,
    ),
  ),
  'header' => 
  array (
    'meta' => 
    array (
      0 => 
      array (
        'route' => '#mur_client_n_list/create',
        'label' => 'LNK_NEW_RECORD',
        'acl_action' => 'create',
        'acl_module' => 'mur_client_n_list',
        'icon' => 'icon-plus',
      ),
      1 => 
      array (
        'route' => '#mur_client_n_list',
        'label' => 'LNK_LIST',
        'acl_action' => 'list',
        'acl_module' => 'mur_client_n_list',
        'icon' => 'icon-reorder',
      ),
      2 => 
      array (
        'route' => '#bwc/index.php?module=Import&action=Step1&import_module=mur_client_n_list',
        'label' => 'LNK_IMPORT_MUR_CLIENT_N_LIST',
        'acl_action' => 'import',
        'acl_module' => 'mur_client_n_list',
        'icon' => 'icon-upload',
      ),
    ),
  ),
  '_hash' => '4be9852bc43635668e33461a7102480c',
);

