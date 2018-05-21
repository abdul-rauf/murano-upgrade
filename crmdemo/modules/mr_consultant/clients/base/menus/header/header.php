<?php
/* Created by SugarUpgrader for module mr_consultant */
$viewdefs['mr_consultant']['base']['menu']['header'] =array (
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
);
