<?php
$clientCache['Meetings']['base']['menu'] = array (
  'quickcreate' => 
  array (
    'meta' => 
    array (
      'layout' => 'create',
      'href' => '#bwc/index.php?module=Meetings&action=EditView&return_module=Meetings&return_action=DetailView',
      'label' => 'LNK_NEW_MEETING',
      'visible' => true,
      'order' => 8,
      'icon' => 'icon-calendar',
    ),
  ),
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
        'route' => '#Meetings',
        'label' => 'LNK_MEETING_LIST',
        'acl_action' => 'list',
        'acl_module' => 'Meetings',
        'icon' => 'icon-reorder',
      ),
      2 => 
      array (
        'route' => '#bwc/index.php?module=Import&action=Step1&import_module=Meetings&return_module=Meetings&return_action=index',
        'label' => 'LNK_IMPORT_MEETINGS',
        'acl_action' => 'import',
        'acl_module' => 'Meetings',
        'icon' => 'icon-upload',
      ),
    ),
  ),
  '_hash' => '962040705a6793ce35e6f70e9e4b7cfd',
);

