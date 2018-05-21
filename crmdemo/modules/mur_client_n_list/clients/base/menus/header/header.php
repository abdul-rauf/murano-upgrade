<?php
/* Created by SugarUpgrader for module mur_client_n_list */
$viewdefs['mur_client_n_list']['base']['menu']['header'] =array (
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
);
