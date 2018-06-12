<?php
// created: 2018-06-12 08:17:54
$viewdefs['Tasks']['base']['view']['list'] = array (
  'panels' => 
  array (
    0 => 
    array (
      'label' => 'LBL_PANEL_DEFAULT',
      'fields' => 
      array (
        0 => 
        array (
          'name' => 'date_due',
          'width' => '15%',
          'label' => 'LBL_LIST_DUE_DATE',
          'link' => false,
          'enabled' => true,
          'default' => true,
        ),
        1 => 
        array (
          'name' => 'parent_name',
          'width' => '20%',
          'label' => 'LBL_LIST_RELATED_TO',
          'dynamic_module' => 'PARENT_TYPE',
          'id' => 'PARENT_ID',
          'link' => true,
          'enabled' => true,
          'default' => true,
          'sortable' => false,
          'ACLTag' => 'PARENT',
          'related_fields' => 
          array (
            0 => 'parent_id',
            1 => 'parent_type',
          ),
        ),
        2 => 
        array (
          'name' => 'name',
          'link' => true,
          'label' => 'LBL_LIST_SUBJECT',
          'enabled' => true,
          'default' => true,
        ),
        3 => 
        array (
          'name' => 'date_entered',
          'width' => '10%',
          'label' => 'LBL_DATE_ENTERED',
          'enabled' => true,
          'default' => false,
          'readonly' => true,
          'type' => 'datetime',
        ),
        4 => 
        array (
          'name' => 'team_name',
          'width' => '2%',
          'label' => 'LBL_LIST_TEAM',
          'enabled' => true,
          'default' => false,
        ),
        5 => 
        array (
          'name' => 'date_start',
          'width' => '5%',
          'label' => 'LBL_LIST_START_DATE',
          'link' => false,
          'enabled' => true,
          'default' => false,
        ),
        6 => 
        array (
          'name' => 'assigned_user_name',
          'width' => '10%',
          'label' => 'LBL_LIST_ASSIGNED_TO_NAME',
          'id' => 'ASSIGNED_USER_ID',
          'enabled' => true,
          'default' => false,
        ),
        7 => 
        array (
          'name' => 'contact_name',
          'width' => '20%',
          'label' => 'LBL_LIST_CONTACT',
          'link' => true,
          'id' => 'CONTACT_ID',
          'enabled' => true,
          'default' => false,
          'ACLTag' => 'CONTACT',
          'related_fields' => 
          array (
            0 => 'contact_id',
          ),
        ),
        8 => 
        array (
          'name' => 'status',
          'width' => '10%',
          'label' => 'LBL_LIST_STATUS',
          'link' => false,
          'enabled' => true,
          'default' => false,
        ),
        9 => 
        array (
          'name' => 'date_modified',
          'enabled' => true,
          'default' => true,
        ),
      ),
    ),
  ),
);