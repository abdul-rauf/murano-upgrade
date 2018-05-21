<?php
// created: 2015-02-22 18:55:19
$viewdefs['Documents']['base']['menu']['quickcreate'] = array (
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
);