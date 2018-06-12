<?php
// created: 2018-06-12 08:17:52
$viewdefs['rt_sorting']['base']['view']['recordlist'] = array (
  'favorite' => true,
  'following' => true,
  'selection' => 
  array (
    'type' => 'multi',
    'actions' => 
    array (
      0 => 
      array (
        'name' => 'edit_button',
        'type' => 'button',
        'label' => 'LBL_MASS_UPDATE',
        'primary' => true,
        'events' => 
        array (
          'click' => 'list:massupdate:fire',
        ),
        'acl_action' => 'massupdate',
      ),
      1 => 
      array (
        'name' => 'calc_field_button',
        'type' => 'button',
        'label' => 'LBL_UPDATE_CALC_FIELDS',
        'events' => 
        array (
          'click' => 'list:updatecalcfields:fire',
        ),
        'acl_action' => 'massupdate',
      ),
      2 => 
      array (
        'name' => 'merge_button',
        'type' => 'button',
        'label' => 'LBL_MERGE',
        'primary' => true,
        'events' => 
        array (
          'click' => 'list:mergeduplicates:fire',
        ),
        'acl_action' => 'edit',
      ),
      3 => 
      array (
        'name' => 'compose_client',
        'type' => 'button',
        'label' => 'LBL_COMPOSE_CLIENT',
        'acl_action' => 'edit',
        'primary' => true,
        'events' => 
        array (
          'click' => 'list:composeclients:fire',
        ),
      ),
      4 => 
      array (
        'name' => 'export_button',
        'type' => 'button',
        'label' => 'LBL_EXPORT',
        'acl_action' => 'export',
        'primary' => true,
        'events' => 
        array (
          'click' => 'list:massexport:fire',
        ),
      ),
    ),
  ),
  'rowactions' => 
  array (
    'actions' => 
    array (
      0 => 
      array (
        'type' => 'rowaction',
        'css_class' => 'btn',
        'tooltip' => 'LBL_PREVIEW',
        'event' => 'list:preview:fire',
        'icon' => 'fa-eye',
        'acl_action' => 'view',
      ),
      1 => 
      array (
        'type' => 'rowaction',
        'name' => 'edit_button',
        'label' => 'LBL_EDIT_BUTTON',
        'event' => 'list:editrow:fire',
        'acl_action' => 'edit',
      ),
      2 => 
      array (
        'type' => 'follow',
        'name' => 'follow_button',
        'event' => 'list:follow:fire',
        'acl_action' => 'view',
      ),
      3 => 
      array (
        'type' => 'rowaction',
        'name' => 'delete_button',
        'event' => 'list:deleterow:fire',
        'label' => 'LBL_DELETE_BUTTON',
        'acl_action' => 'delete',
      ),
    ),
  ),
  'last_state' => 
  array (
    'id' => 'record-list',
  ),
);