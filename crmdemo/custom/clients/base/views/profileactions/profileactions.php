<?php
// created: 2015-02-22 18:55:20
$viewdefs['base']['view']['profileactions'] = array (
  0 => 
  array (
    'route' => '#bwc/index.php?module=Users&action=DetailView&record=',
    'label' => 'LBL_PROFILE',
    'css_class' => 'profileactions-profile',
    'acl_action' => 'view',
    'icon' => 'icon-user',
    'submenu' => '',
  ),
  1 => 
  array (
    'route' => '#bwc/index.php?module=Employees&action=index&query=true',
    'label' => 'LBL_EMPLOYEES',
    'css_class' => 'profileactions-employees',
    'acl_action' => 'list',
    'icon' => 'icon-group',
    'submenu' => '',
  ),
  2 => 
  array (
    'route' => '#bwc/index.php?module=Administration&action=index',
    'label' => 'LBL_ADMIN',
    'css_class' => 'administration',
    'acl_action' => 'admin',
    'icon' => 'icon-cogs',
    'submenu' => '',
  ),
  3 => 
  array (
    'route' => '#logout/?clear=1',
    'label' => 'LBL_LOGOUT',
    'css_class' => 'profileactions-logout',
    'icon' => 'icon-signout',
    'submenu' => '',
  ),
  4 => 
  array (
    'route' => '#about',
    'label' => 'LNK_ABOUT',
    'css_class' => 'profileactions-about',
    'acl_action' => 'view',
    'icon' => 'icon-info-sign',
    'submenu' => '',
  ),
);