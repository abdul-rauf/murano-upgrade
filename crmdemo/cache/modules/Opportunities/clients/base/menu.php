<?php
$clientCache['Opportunities']['base']['menu'] = array (
  'header' => 
  array (
    'meta' => 
    array (
      0 => 
      array (
        'route' => '#Opportunities/create',
        'label' => 'LNK_NEW_OPPORTUNITY',
        'acl_action' => 'create',
        'acl_module' => 'Opportunities',
        'icon' => 'icon-plus',
      ),
      1 => 
      array (
        'route' => '#Opportunities',
        'label' => 'LNK_OPPORTUNITY_LIST',
        'acl_action' => 'list',
        'acl_module' => 'Opportunities',
        'icon' => 'icon-reorder',
      ),
      2 => 
      array (
        'route' => '#bwc/index.php?module=Reports&action=index&view=opportunities&query=true&report_module=Opportunities',
        'label' => 'LNK_OPPORTUNITY_REPORTS',
        'acl_action' => 'list',
        'acl_module' => 'Opportunities',
        'icon' => 'icon-bar-chart',
      ),
      3 => 
      array (
        'route' => '#bwc/index.php?module=Import&action=Step1&import_module=Opportunities&return_module=Opportunities&return_action=index',
        'label' => 'LNK_IMPORT_OPPORTUNITIES',
        'acl_action' => 'import',
        'acl_module' => 'Opportunities',
        'icon' => 'icon-upload',
      ),
    ),
  ),
  'quickcreate' => 
  array (
    'meta' => 
    array (
      'layout' => 'create',
      'label' => 'LNK_NEW_OPPORTUNITY',
      'visible' => true,
      'order' => 2,
      'icon' => 'icon-plus',
      'related' => 
      array (
        0 => 
        array (
          'module' => 'Accounts',
          'link' => 'opportunities',
        ),
        1 => 
        array (
          'module' => 'Contacts',
          'link' => 'opportunities',
        ),
      ),
    ),
  ),
  '_hash' => 'ee0b8c662694a38f28a79378934fb729',
);

