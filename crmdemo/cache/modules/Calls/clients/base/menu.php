<?php
$clientCache['Calls']['base']['menu'] = array (
  'quickcreate' => 
  array (
    'meta' => 
    array (
      'layout' => 'create',
      'href' => '#bwc/index.php?module=Calls&action=EditView&return_module=Calls&return_action=DetailView',
      'label' => 'LNK_NEW_CALL',
      'visible' => true,
      'order' => 9,
      'icon' => 'icon-phone',
    ),
  ),
  'header' => 
  array (
    'meta' => 
    array (
      0 => 
      array (
        'route' => '#bwc/index.php?module=Calls&action=EditView',
        'label' => 'LNK_NEW_CALL',
        'acl_action' => 'create',
        'acl_module' => 'Calls',
        'icon' => 'icon-plus',
      ),
      1 => 
      array (
        'route' => '#Calls',
        'label' => 'LNK_CALL_LIST',
        'acl_action' => 'list',
        'acl_module' => 'Calls',
        'icon' => 'icon-reorder',
      ),
      2 => 
      array (
        'route' => '#bwc/index.php?module=Import&action=Step1&import_module=Calls&query=true&report_module=Calls',
        'label' => 'LNK_IMPORT_CALLS',
        'acl_action' => 'import',
        'acl_module' => 'Calls',
        'icon' => 'icon-upload',
      ),
      3 => 
      array (
        'route' => '#bwc/index.php?module=Reports&action=index&view=Calls',
        'label' => 'LBL_ACTIVITIES_REPORTS',
        'acl_action' => 'list',
        'acl_module' => 'Reports',
        'icon' => 'icon-bar-chart',
      ),
    ),
  ),
  '_hash' => 'e1887aa63bfd23a12d619414f2fafb7b',
);

