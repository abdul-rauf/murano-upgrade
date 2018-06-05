<?php
$viewdefs['Calls'] = 
array (
  'base' => 
  array (
    'view' => 
    array (
      'list' => 
      array (
        'panels' => 
        array (
          0 => 
          array (
            'name' => 'panel_header',
            'label' => 'LBL_PANEL_1',
            'fields' => 
            array (
              0 => 
              array (
                'label' => 'LBL_LIST_SUBJECT',
                'enabled' => true,
                'default' => true,
                'link' => true,
                'name' => 'name',
                'width' => '30%',
              ),
              1 => 
              array (
                'name' => 'direction',
                'label' => 'LBL_DIRECTION',
                'enabled' => true,
                'width' => '10%',
                'default' => true,
              ),
              2 => 
              array (
                'label' => 'LBL_LIST_DATE',
                'enabled' => true,
                'default' => true,
                'name' => 'date_start',
                'width' => '15%',
              ),
              3 => 
              array (
                'name' => 'parent_name',
                'width' => '15%',
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
              4 => 
              array (
                'name' => 'class_of_service_c',
                'label' => 'LBL_CLASS_OF_SERVICE',
                'enabled' => true,
                'width' => '10%',
                'default' => true,
              ),
              5 => 
              array (
                'name' => 'extension_c',
                'label' => 'LBL_EXTENSION',
                'enabled' => true,
                'width' => '10%',
                'default' => true,
              ),
              6 => 
              array (
                'name' => 'talk_c',
                'label' => 'LBL_TALK',
                'enabled' => true,
                'width' => '10%',
                'default' => true,
              ),
              7 => 
              array (
                'name' => 'cost_c',
                'label' => 'LBL_COST',
                'enabled' => true,
                'related_fields' => 
                array (
                  0 => 'currency_id',
                  1 => 'base_rate',
                ),
                'currency_format' => true,
                'width' => '10%',
                'default' => true,
              ),
              8 => 
              array (
                'name' => 'answer_c',
                'label' => 'LBL_ANSWER',
                'enabled' => true,
                'width' => '10%',
                'default' => true,
              ),
              9 => 
              array (
                'name' => 'users_calls_1_name',
                'label' => 'LBL_USERS_CALLS_1_FROM_USERS_TITLE',
                'enabled' => true,
                'id' => 'USERS_CALLS_1USERS_IDA',
                'link' => true,
                'sortable' => false,
                'width' => '10%',
                'default' => true,
              ),
              10 => 
              array (
                'name' => 'date_entered',
                'label' => 'LBL_DATE_ENTERED',
                'enabled' => true,
                'readonly' => true,
                'width' => '10%',
                'default' => true,
              ),
              11 => 
              array (
                'target_record_key' => 'contact_id',
                'target_module' => 'Contacts',
                'label' => 'LBL_LIST_CONTACT',
                'link' => true,
                'enabled' => true,
                'default' => false,
                'name' => 'contact_name',
                'related_fields' => 
                array (
                  0 => 'contact_id',
                ),
                'width' => '15%',
              ),
              12 => 
              array (
                'name' => 'team_name',
                'label' => 'LBL_TEAMS',
                'enabled' => true,
                'id' => 'TEAM_ID',
                'link' => true,
                'sortable' => false,
                'width' => '2%',
                'default' => false,
              ),
              13 => 
              array (
                'label' => 'LBL_STATUS',
                'enabled' => true,
                'default' => false,
                'name' => 'status',
                'width' => '10%',
              ),
              14 => 
              array (
                'name' => 'assigned_user_name',
                'target_record_key' => 'assigned_user_id',
                'target_module' => 'Employees',
                'label' => 'LBL_LIST_ASSIGNED_TO_NAME',
                'enabled' => true,
                'default' => false,
                'sortable' => false,
                'width' => '2%',
              ),
            ),
          ),
        ),
      ),
    ),
  ),
);
