<?php
/* Created by SugarUpgrader for module mu_Enquriy_Tracker */
$viewdefs['mu_Enquriy_Tracker']['base']['menu']['header'] =array (
  0 => 
  array (
    'route' => '#mu_Enquriy_Tracker/create',
    'label' => 'LNK_NEW_RECORD',
    'acl_action' => 'create',
    'acl_module' => 'mu_Enquriy_Tracker',
    'icon' => 'icon-plus',
  ),
  1 => 
  array (
    'route' => '#mu_Enquriy_Tracker',
    'label' => 'LNK_LIST',
    'acl_action' => 'list',
    'acl_module' => 'mu_Enquriy_Tracker',
    'icon' => 'icon-reorder',
  ),
  2 => 
  array (
    'route' => '#bwc/index.php?module=Import&action=Step1&import_module=mu_Enquriy_Tracker',
    'label' => 'LNK_IMPORT_MU_ENQURIY_TRACKER',
    'acl_action' => 'import',
    'acl_module' => 'mu_Enquriy_Tracker',
    'icon' => 'icon-upload',
  ),
);
