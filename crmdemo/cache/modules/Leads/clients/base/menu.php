<?php
$clientCache['Leads']['base']['menu'] = array (
  'header' => 
  array (
    'meta' => 
    array (
      0 => 
      array (
        'route' => '#Leads/create',
        'label' => 'LNK_NEW_LEAD',
        'acl_action' => 'create',
        'acl_module' => 'Leads',
        'icon' => 'icon-plus',
      ),
      1 => 
      array (
        'route' => '#Leads/layout/dnb-bal',
        'label' => 'LBL_BAL',
        'acl_action' => 'create',
        'acl_module' => 'Leads',
        'icon' => 'icon-plus',
      ),
      2 => 
      array (
        'route' => '#Leads/vcard-import',
        'label' => 'LNK_IMPORT_VCARD',
        'acl_action' => 'create',
        'acl_module' => 'Leads',
        'icon' => 'icon-plus',
      ),
      3 => 
      array (
        'route' => '#Leads',
        'label' => 'LNK_LEAD_LIST',
        'acl_action' => 'list',
        'acl_module' => 'Leads',
        'icon' => 'icon-reorder',
      ),
      4 => 
      array (
        'route' => '#bwc/index.php?module=Reports&action=index&view=leads&query=true&report_module=Leads',
        'label' => 'LNK_LEAD_REPORTS',
        'acl_action' => 'list',
        'acl_module' => 'Leads',
        'icon' => 'icon-bar-chart',
      ),
      5 => 
      array (
        'route' => '#bwc/index.php?module=Import&action=Step1&import_module=Leads&return_module=Leads&return_action=index',
        'label' => 'LNK_IMPORT_LEADS',
        'acl_action' => 'import',
        'acl_module' => 'Leads',
        'icon' => 'icon-upload',
      ),
    ),
  ),
  'quickcreate' => 
  array (
    'meta' => 
    array (
      'layout' => 'create',
      'label' => 'LNK_NEW_LEAD',
      'visible' => true,
      'order' => 3,
      'icon' => 'icon-plus',
      'related' => 
      array (
        0 => 
        array (
          'module' => 'Accounts',
          'link' => 'leads',
        ),
        1 => 
        array (
          'module' => 'Contacts',
          'link' => 'leads',
        ),
        2 => 
        array (
          'module' => 'Opportunities',
          'link' => 'leads',
        ),
      ),
    ),
  ),
  '_hash' => '453b6cd9409e198f55be4b78edaf43c1',
);

