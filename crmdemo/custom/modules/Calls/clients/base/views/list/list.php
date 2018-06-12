<?php
$viewdefs['Calls']['base']['view']['list'] = array (
  'panels' => 
  array (
    0 => 
    array (
      'label' => 'LBL_PANEL_DEFAULT',
      'fields' => 
      array (
        0 => 
        array (
          'label' => 'LBL_LIST_SUBJECT',
          'enabled' => true,
          'default' => true,
          'link' => true,
          'name' => 'name',
          'related_fields' => 
          array (
            0 => 'repeat_type',
          ),
          'width' => '30%',
        ),
        1 => 
        array (
          'enabled' => true,
          'default' => true,
          'name' => 'direction',
          'width' => '10%',
          'label' => 'LBL_LIST_DIRECTION',
          'link' => false,
        ),
        2 => 
        array (
          'name' => 'date_start',
          'label' => 'LBL_LIST_DATE',
          'type' => 'datetimecombo-colorcoded',
          'css_class' => 'overflow-visible',
          'completed_status_value' => 'Held',
          'enabled' => true,
          'default' => true,
          'readonly' => true,
          'related_fields' => 
          array (
            0 => 'time_start',
          ),
          'width' => '15%',
          'link' => false,
        ),
        3 => 
        array (
          'name' => 'parent_name',
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
          'width' => '15%',
        ),
        4 => 
        array (
          'name' => 'extension_c',
          'default' => true,
          'enabled' => true,
          'label' => 'LBL_EXTENSION',
          'width' => '10%',
        ),
        5 => 
        array (
          'name' => 'talk_c',
          'default' => true,
          'enabled' => true,
          'label' => 'LBL_TALK',
          'width' => '10%',
        ),
        6 => 
        array (
          'name' => 'cost_c',
          'default' => true,
          'enabled' => true,
          'related_fields' => 
          array (
            0 => 'currency_id',
            1 => 'base_rate',
          ),
          'label' => 'LBL_COST',
          'currency_format' => true,
          'width' => '10%',
        ),
        7 => 
        array (
          'name' => 'answer_c',
          'default' => true,
          'enabled' => true,
          'studio' => 'visible',
          'label' => 'LBL_ANSWER',
          'width' => '10%',
        ),
        8 => 
        array (
          'name' => 'users_calls_1_name',
          'default' => true,
          'enabled' => true,
          'link' => true,
          'label' => 'LBL_USERS_CALLS_1_FROM_USERS_TITLE',
          'id' => 'USERS_CALLS_1USERS_IDA',
          'sortable' => false,
          'width' => '10%',
        ),
        9 => 
        array (
          'name' => 'date_entered',
          'enabled' => true,
          'default' => true,
          'readonly' => true,
          'label' => 'LBL_DATE_ENTERED',
          'width' => '10%',
        ),
        10 => 
        array (
          'name' => 'team_name',
          'default' => false,
          'enabled' => true,
          'width' => '2%',
          'label' => 'LBL_LIST_TEAM',
        ),
        11 => 
        array (
          'enabled' => true,
          'default' => false,
          'name' => 'status',
          'type' => 'event-status',
          'css_class' => 'full-width',
          'width' => '10%',
          'label' => 'LBL_STATUS',
          'link' => false,
        ),
        12 => 
        array (
          'name' => 'assigned_user_name',
          'target_record_key' => 'assigned_user_id',
          'target_module' => 'Employees',
          'label' => 'LBL_LIST_ASSIGNED_TO_NAME',
          'enabled' => true,
          'default' => false,
          'sortable' => true,
          'width' => '2%',
          'id' => 'ASSIGNED_USER_ID',
        ),
      ),
    ),
  ),
);
