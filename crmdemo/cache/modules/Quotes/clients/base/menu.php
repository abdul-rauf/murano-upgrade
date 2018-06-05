<?php
$clientCache['Quotes']['base']['menu'] = array (
  'header' => 
  array (
    'meta' => 
    array (
      0 => 
      array (
        'route' => '#bwc/index.php?module=Quotes&action=EditView&return_module=Quotes&return_action=DetailView',
        'label' => 'LNK_NEW_QUOTE',
        'acl_action' => 'create',
        'acl_module' => 'Quotes',
        'icon' => 'icon-plus',
      ),
      1 => 
      array (
        'route' => '#Quotes',
        'label' => 'LNK_QUOTE_LIST',
        'acl_action' => 'list',
        'acl_module' => 'Quotes',
        'icon' => 'icon-reorder',
      ),
      2 => 
      array (
        'route' => '#bwc/index.php?module=Reports&action=index&view=quotes&query=true&report_module=Quotes',
        'label' => 'LNK_QUOTE_REPORTS',
        'acl_action' => 'list',
        'acl_module' => 'Quotes',
        'icon' => 'icon-bar-chart',
      ),
    ),
  ),
  '_hash' => 'c3c5b45862e7fa18812c36ad5cf85ea4',
);

