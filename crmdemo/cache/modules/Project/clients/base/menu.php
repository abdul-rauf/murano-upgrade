<?php
$clientCache['Project']['base']['menu'] = array (
  'quickcreate' => 
  array (
    'meta' => 
    array (
      'layout' => 'create',
      'label' => 'LNK_NEW_PROJECT',
      'visible' => false,
      'icon' => 'icon-plus',
      'order' => 14,
    ),
  ),
  'header' => 
  array (
    'meta' => 
    array (
      0 => 
      array (
        'route' => '#bwc/index.php?module=Project&action=EditView&return_module=Project&return_action=DetailView',
        'label' => 'LNK_NEW_PROJECT',
        'acl_action' => 'create',
        'acl_module' => 'Project',
        'icon' => 'icon-plus',
      ),
      1 => 
      array (
        'route' => '#bwc/index.php?module=Project&action=ProjectTemplatesEditView&return_module=Project&return_action=ProjectTemplatesDetailView',
        'label' => 'LNK_NEW_PROJECT_TEMPLATES',
        'acl_action' => 'create',
        'acl_module' => 'Project',
        'icon' => 'icon-plus',
      ),
      2 => 
      array (
        'route' => '#bwc/index.php?module=Project&action=index',
        'label' => 'LNK_PROJECT_LIST',
        'acl_action' => 'list',
        'acl_module' => 'Project',
        'icon' => 'icon-reorder',
      ),
      3 => 
      array (
        'route' => '#bwc/index.php?module=Project&action=ProjectTemplatesListView',
        'label' => 'LNK_PROJECT_TEMPLATES_LIST',
        'acl_action' => 'list',
        'acl_module' => 'Project',
        'icon' => 'icon-reorder',
      ),
      4 => 
      array (
        'route' => '#bwc/index.php?module=ProjectTask&action=index',
        'label' => 'LNK_PROJECT_TASK_LIST',
        'acl_action' => 'list',
        'acl_module' => 'ProjectTask',
        'icon' => 'icon-reorder',
      ),
      5 => 
      array (
        'route' => '#bwc/index.php?module=Project&action=Dashboard&return_module=Project&return_action=DetailView',
        'label' => 'LNK_PROJECT_DASHBOARD',
        'acl_action' => 'list',
        'acl_module' => 'Project',
        'icon' => 'icon-reorder',
      ),
    ),
  ),
  '_hash' => 'e24f54601818a24259a64086f5827799',
);

