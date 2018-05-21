<?php
/* Created by SugarUpgrader for module mur_approval_managment */
$viewdefs['mur_approval_managment']['base']['menu']['header'] =array (
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
);
