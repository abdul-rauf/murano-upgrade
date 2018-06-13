<?php
// created: 2018-06-13 10:47:59
$viewdefs['base']['view']['profileactions'] = array (
  0 => 
  array (
    'route' => '#profile',
    'label' => 'LBL_PROFILE',
    'css_class' => 'profileactions-profile',
    'acl_action' => 'view',
    'icon' => 'fa-user',
    'submenu' => '',
  ),
  1 => 
  array (
    'route' => '#bwc/index.php?module=Employees&action=index&query=true',
    'label' => 'LBL_EMPLOYEES',
    'css_class' => 'profileactions-employees',
    'acl_action' => 'list',
    'icon' => 'fa-users',
    'submenu' => '',
  ),
  2 => 
  array (
    'route' => '#bwc/index.php?module=Administration&action=index',
    'label' => 'LBL_ADMIN',
    'css_class' => 'administration',
    'acl_action' => 'admin',
    'icon' => 'fa-cogs',
    'submenu' => '',
  ),
  3 => 
  array (
    'route' => '#logout/?clear=1',
    'label' => 'LBL_LOGOUT',
    'css_class' => 'profileactions-logout',
    'icon' => 'fa-sign-out',
    'submenu' => '',
  ),
  4 => 
  array (
    'route' => '#about',
    'label' => 'LNK_ABOUT',
    'css_class' => 'profileactions-about',
    'acl_action' => 'view',
    'icon' => 'fa-info-circle',
    'submenu' => '',
  ),
);