<?php
$clientCache['Documents']['base']['menu'] = array (
  'quickcreate' => 
  array (
    'meta' => 
    array (
      'layout' => 'create',
      'label' => 'LNK_NEW_DOCUMENT',
      'visible' => true,
      'order' => 5,
      'icon' => 'icon-plus',
      'related' => 
      array (
        0 => 
        array (
          'module' => 'Accounts',
          'link' => 'documents',
        ),
        1 => 
        array (
          'module' => 'Contacts',
          'link' => 'documents',
        ),
        2 => 
        array (
          'module' => 'Opportunities',
          'link' => 'documents',
        ),
        3 => 
        array (
          'module' => 'RevenueLineItems',
          'link' => 'documents',
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
        'route' => '#bwc/index.php?module=Documents&action=editview',
        'label' => 'LNK_NEW_DOCUMENT',
        'acl_action' => 'create',
        'acl_module' => 'Documents',
        'icon' => 'icon-plus',
      ),
      1 => 
      array (
        'route' => '#Documents',
        'label' => 'LNK_DOCUMENT_LIST',
        'acl_action' => 'list',
        'acl_module' => 'Documents',
        'icon' => 'icon-reorder',
      ),
    ),
  ),
  '_hash' => '4b5b01649c0ae00524e7fb59824947bb',
);

