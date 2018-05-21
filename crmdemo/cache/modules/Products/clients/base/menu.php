<?php
$clientCache['Products']['base']['menu'] = array (
  'quickcreate' => 
  array (
    'meta' => 
    array (
      'layout' => 'create',
      'label' => 'LNK_NEW_PRODUCT',
      'icon' => 'icon-plus',
      'visible' => false,
      'order' => 11,
    ),
  ),
  'header' => 
  array (
    'meta' => 
    array (
      0 => 
      array (
        'route' => '#Products/create',
        'label' => 'LNK_NEW_PRODUCT',
        'acl_action' => 'create',
        'acl_module' => 'Products',
        'icon' => 'icon-plus',
      ),
      1 => 
      array (
        'route' => '#Products',
        'label' => 'LNK_PRODUCT_LIST',
        'acl_action' => 'list',
        'acl_module' => 'Products',
        'icon' => 'icon-reorder',
      ),
      2 => 
      array (
        'route' => '#bwc/index.php?module=Import&action=Step1&import_module=Products&return_module=Products&return_action=index',
        'label' => 'LNK_IMPORT_PRODUCTS',
        'acl_action' => 'import',
        'acl_module' => 'Products',
        'icon' => 'icon-upload',
      ),
    ),
  ),
  '_hash' => 'ce7250834a8ab9be0a717f71bf98d631',
);

