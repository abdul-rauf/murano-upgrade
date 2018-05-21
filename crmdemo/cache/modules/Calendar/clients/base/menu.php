<?php
$clientCache['Calendar']['base']['menu'] = array (
  'header' => 
  array (
    'meta' => 
    array (
      0 => 
      array (
        'route' => '#bwc/index.php?module=Meetings&action=EditView&return_module=Meetings&return_action=DetailView',
        'label' => 'LNK_NEW_MEETING',
        'acl_action' => 'create',
        'acl_module' => 'Meetings',
        'icon' => 'icon-plus',
      ),
      1 => 
      array (
        'route' => '#bwc/index.php?module=Calls&action=EditView&return_module=Calls&return_action=DetailView',
        'label' => 'LNK_NEW_CALL',
        'acl_action' => 'create',
        'acl_module' => 'Calls',
        'icon' => 'icon-plus',
      ),
      2 => 
      array (
        'route' => '#Tasks/create',
        'label' => 'LNK_NEW_TASK',
        'acl_action' => 'create',
        'acl_module' => 'Tasks',
        'icon' => 'icon-plus',
      ),
      3 => 
      array (
        'route' => '#bwc/index.php?module=Calendar&action=index&view=day',
        'label' => 'LNK_VIEW_CALENDAR',
        'acl_action' => 'list',
        'acl_module' => 'Calendar',
        'icon' => 'icon-reorder',
      ),
    ),
  ),
  '_hash' => 'd9995b1ef73c8fd3d96f0d92cb3c7430',
);

