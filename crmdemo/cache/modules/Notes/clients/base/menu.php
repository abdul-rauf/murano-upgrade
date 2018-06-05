<?php
$clientCache['Notes']['base']['menu'] = array (
  'quickcreate' => 
  array (
    'meta' => 
    array (
      'layout' => 'create',
      'label' => 'LNK_NEW_NOTE',
      'visible' => true,
      'order' => 6,
      'icon' => 'icon-plus',
      'related' => 
      array (
        0 => 
        array (
          'module' => 'Contacts',
          'link' => 'notes',
        ),
      ),
    ),
  ),
  'header' => 
  array (
    'meta' => 
    array (
      0 => 
      array (
        'route' => '#Notes/create',
        'label' => 'LNK_NEW_NOTE',
        'acl_action' => 'create',
        'acl_module' => 'Notes',
        'icon' => 'icon-plus',
      ),
      1 => 
      array (
        'route' => '#Notes',
        'label' => 'LNK_NOTE_LIST',
        'acl_action' => 'list',
        'acl_module' => 'Notes',
        'icon' => 'icon-reorder',
      ),
      2 => 
      array (
        'route' => '#bwc/index.php?module=Import&action=Step1&import_module=Notes&return_module=Notes&return_action=index',
        'label' => 'LNK_IMPORT_NOTES',
        'acl_action' => 'import',
        'acl_module' => 'Notes',
        'icon' => 'icon-upload',
      ),
    ),
  ),
  '_hash' => '08220d36db172c998247e64893d3bbd9',
);

