<?php
// created: 2018-06-13 14:44:00
$viewdefs['Meetings']['base']['view']['list'] = array (
  'panels' => 
  array (
    0 => 
    array (
      'label' => 'LBL_PANEL_DEFAULT',
      'fields' => 
      array (
        0 => 
        array (
          'name' => 'name',
          'label' => 'LBL_LIST_SUBJECT',
          'link' => true,
          'default' => true,
          'enabled' => true,
          'related_fields' => 
          array (
            0 => 'repeat_type',
          ),
          'width' => '30%',
        ),
        1 => 
        array (
          'name' => 'parent_name',
          'label' => 'LBL_LIST_RELATED_TO',
          'id' => 'PARENT_ID',
          'link' => true,
          'default' => true,
          'enabled' => true,
          'sortable' => false,
          'width' => '15%',
          'dynamic_module' => 'PARENT_TYPE',
          'ACLTag' => 'PARENT',
          'related_fields' => 
          array (
            0 => 'parent_id',
            1 => 'parent_type',
          ),
        ),
        2 => 
        array (
          'name' => 'date_modified',
          'default' => true,
          'enabled' => true,
          'type' => 'datetime',
          'label' => 'LBL_DATE_MODIFIED',
          'width' => '10%',
        ),
        3 => 
        array (
          'name' => 'assigned_user_name',
          'label' => 'LBL_LIST_ASSIGNED_TO_NAME',
          'id' => 'ASSIGNED_USER_ID',
          'default' => true,
          'enabled' => true,
          'width' => '2%',
        ),
        4 => 
        array (
          'name' => 'team_name',
          'label' => 'LBL_LIST_TEAM',
          'default' => false,
          'enabled' => true,
          'width' => '2%',
        ),
        5 => 
        array (
          'name' => 'status',
          'type' => 'event-status',
          'label' => 'LBL_LIST_STATUS',
          'link' => false,
          'default' => false,
          'enabled' => true,
          'css_class' => 'full-width',
          'width' => '10%',
        ),
      ),
    ),
  ),
);