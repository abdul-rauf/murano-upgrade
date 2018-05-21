<?php
$clientCache['Emails']['base']['menu'] = array (
  'quickcreate' => 
  array (
    'meta' => 
    array (
      'layout' => 'compose',
      'label' => 'LBL_COMPOSE_MODULE_NAME_SINGULAR',
      'visible' => true,
      'order' => 4,
      'icon' => 'icon-plus',
    ),
  ),
  'header' => 
  array (
    'meta' => 
    array (
      0 => 
      array (
        'route' => '#Emails',
        'label' => 'LNK_VIEW_MY_INBOX',
        'acl_action' => 'edit',
        'acl_module' => 'Emails',
        'icon' => 'icon-plus',
      ),
      1 => 
      array (
        'route' => '#bwc/index.php?module=EmailTemplates&action=EditView&return_module=EmailTemplates&return_action=DetailView',
        'label' => 'LNK_NEW_EMAIL_TEMPLATE',
        'acl_action' => 'create',
        'acl_module' => 'EmailTemplates',
        'icon' => 'icon-plus',
      ),
      2 => 
      array (
        'route' => '#EmailTemplates',
        'label' => 'LNK_EMAIL_TEMPLATE_LIST',
        'acl_action' => 'list',
        'acl_module' => 'EmailTemplates',
        'icon' => 'icon-reorder',
      ),
    ),
  ),
  '_hash' => 'b854461443ff3388fe4022e7a0522c2d',
);

