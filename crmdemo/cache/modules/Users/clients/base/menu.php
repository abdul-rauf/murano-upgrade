<?php
$clientCache['Users']['base']['menu'] = array (
  'header' => 
  array (
    'meta' => 
    array (
      0 => 
      array (
        'route' => '#bwc/index.php?module=Users&action=EditView',
        'label' => 'LNK_NEW_USER',
        'acl_action' => 'admin',
        'acl_module' => 'Users',
        'icon' => 'icon-plus',
      ),
      1 => 
      array (
        'route' => '#bwc/index.php?module=Users&action=EditView&usertype=group&return_module=Users&return_action=DetailView',
        'label' => 'LNK_NEW_GROUP_USER',
        'acl_action' => 'admin',
        'acl_module' => 'Users',
        'icon' => 'icon-plus',
      ),
      2 => 
      array (
        'route' => '#bwc/index.php?module=Users&action=EditView&usertype=portal&return_module=Users&return_action=DetailView',
        'label' => 'LNK_NEW_PORTAL_USER',
        'acl_action' => 'admin',
        'acl_module' => 'Users',
        'icon' => 'icon-plus',
      ),
      3 => 
      array (
        'route' => '#bwc/index.php?module=Users&action=reassignUserRecords',
        'label' => 'LNK_REASSIGN_RECORDS',
        'acl_action' => 'admin',
        'acl_module' => 'Users',
        'icon' => 'icon-move',
      ),
      4 => 
      array (
        'route' => '#bwc/index.php?module=Import&action=Step1&import_module=Users&return_module=Users&return_action=index',
        'label' => 'LNK_IMPORT_USERS',
        'acl_action' => 'admin',
        'acl_module' => 'Users',
        'icon' => 'icon-upload',
      ),
    ),
  ),
  '_hash' => '943cc259c0dee599b51d58d3e1d3501a',
);

