<?php
// created: 2018-06-04 12:04:53
$viewdefs['base']['view']['profileactions'] = array (
  0 => 
  array (
    'route' => '#profile',
    'label' => 'LBL_PROFILE',
    'css_class' => 'profileactions-profile',
    'acl_action' => 'view',
    'icon' => 'fa-user',
  ),
  1 => 
  array (
    'route' => '#bwc/index.php?module=Employees&action=index&query=true',
    'label' => 'LBL_EMPLOYEES',
    'css_class' => 'profileactions-employees',
    'acl_action' => 'list',
    'icon' => 'fa-users',
  ),
  2 => 
  array (
    'label' => 'Admin',
    'acl_action' => 'admin',
    'route' => '#bwc/index.php?module=Administration&action=index',
    'icon' => 'fa-cogs',
  ),
  3 => 
  array (
    'route' => '#logout/?clear=1',
    'label' => 'LBL_LOGOUT',
    'css_class' => 'profileactions-logout',
    'icon' => 'fa-sign-out',
  ),
  4 => 
  array (
    'route' => '#about',
    'label' => 'LNK_ABOUT',
    'css_class' => 'profileactions-about',
    'acl_action' => 'view',
    'icon' => 'fa-info-circle',
  ),
);