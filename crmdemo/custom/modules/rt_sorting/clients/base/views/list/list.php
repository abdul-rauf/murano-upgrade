<?php
$module_name = 'rt_sorting';
$viewdefs[$module_name] = 
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
            'label' => 'LBL_PANEL_1',
            'fields' => 
            array (
              0 => 
              array (
                'name' => 'date_entered',
                'width' => '9%',
                'default' => true,
                'enabled' => true,
              ),
              1 => 
              array (
                'name' => 'rt_sorting_leads_name',
                'default' => true,
                'enabled' => true,
                'link' => true,
                'width' => '10%',
              ),
              2 => 
              array (
                'name' => 'assigned_user_name',
                'label' => 'LBL_ASSIGNED_TO_NAME',
                'width' => '9%',
                'default' => true,
                'enabled' => true,
                'link' => true,
              ),
              3 => 
              array (
                'name' => 'account_name',
                'label' => 'LBL_ACCOUNT_NAME',
                'enabled' => true,
                'sortable' => true,
                'width' => '10%',
                'default' => true,
              ),
              4 => 
              array (
                'name' => 'primary_address_country',
                'label' => 'LBL_PRIMARY_ADDRESS_COUNTRY',
                'enabled' => true,
                'width' => '10%',
                'default' => true,
              ),
              5 => 
              array (
                'name' => 'assigned_team',
                'label' => 'LBL_ASSIGNED_TEAM',
                'enabled' => true,
                'width' => '10%',
                'default' => true,
              ),
              6 => 
              array (
                'name' => 'spaces',
                'label' => 'LBL_SPACES',
                'enabled' => true,
                'width' => '10%',
                'default' => true,
              ),
              7 => 
              array (
                'name' => 'report_status',
                'label' => 'LBL_REPORT_STATUS',
                'enabled' => true,
                'width' => '10%',
                'default' => true,
              ),
              8 => 
              array (
                'name' => 'confirmed_clients',
                'label' => 'LBL_CONFIRMED_CLIENTS',
                'enabled' => true,
                'width' => '10%',
                'default' => true,
              ),
              9 => 
              array (
                'name' => 'email_timestamp',
                'label' => 'LBL_EMAIL_TIMESTAMP',
                'enabled' => true,
                'width' => '10%',
                'default' => true,
              ),
              10 => 
              array (
                'name' => 'feedback_received_c',
                'label' => 'LBL_FEEDBACK_RECEIVED',
                'enabled' => true,
                'sortable' => false,
                'width' => '10%',
                'default' => true,
              ),
              11 => 
              array (
                'name' => 'greenreport_c',
                'label' => 'LBL_GREENREPORT_C',
                'enabled' => true,
                'width' => '10%',
                'default' => true,
              ),
              12 => 
              array (
                'name' => 'total_point_c',
                'label' => 'LBL_TOTAL_POINT',
                'enabled' => true,
                'width' => '10%',
                'default' => true,
              ),
              13 => 
              array (
                'name' => 'amendments',
                'label' => 'LBL_AMENDMENTS',
                'enabled' => true,
                'sortable' => false,
                'width' => '10%',
                'default' => false,
              ),
              14 => 
              array (
                'name' => 'last_amended_modified',
                'label' => 'LBL_LAST_AMENDED_MODIFIED',
                'enabled' => true,
                'width' => '10%',
                'default' => false,
              ),
              15 => 
              array (
                'name' => 'name',
                'label' => 'LBL_NAME',
                'default' => false,
                'enabled' => true,
                'link' => true,
                'width' => '10%',
              ),
              16 => 
              array (
                'name' => 'potential_clients',
                'label' => 'LBL_POTENTIAL_CLIENTS',
                'enabled' => true,
                'width' => '10%',
                'default' => false,
              ),
              17 => 
              array (
                'name' => 'last_spoke_date',
                'label' => 'LBL_LAST_SPOKE_DATE',
                'enabled' => true,
                'width' => '10%',
                'default' => false,
              ),
              18 => 
              array (
                'name' => 'feedback_date1_c',
                'label' => 'LBL_FEEDBACK_DATE1_C',
                'enabled' => true,
                'width' => '10%',
                'default' => false,
              ),
              19 => 
              array (
                'name' => 'no_of_days_c',
                'label' => 'LBL_NO_OF_DAYS_C',
                'enabled' => true,
                'width' => '10%',
                'default' => false,
              ),
              20 => 
              array (
                'name' => 'feedback_points1_c',
                'label' => 'LBL_FEEDBACK_POINTS1_C',
                'enabled' => true,
                'width' => '10%',
                'default' => false,
              ),
              21 => 
              array (
                'name' => 'modified_by_name',
                'label' => 'LBL_MODIFIED',
                'enabled' => true,
                'readonly' => true,
                'id' => 'MODIFIED_USER_ID',
                'link' => true,
                'sortable' => false,
                'width' => '10%',
                'default' => false,
              ),
              22 => 
              array (
                'name' => 'question_marks',
                'label' => 'LBL_QUESTION_MARKS',
                'enabled' => true,
                'sortable' => false,
                'width' => '10%',
                'default' => false,
              ),
              23 => 
              array (
                'name' => 'description',
                'label' => 'LBL_DESCRIPTION',
                'enabled' => true,
                'sortable' => false,
                'width' => '10%',
                'default' => false,
              ),
              24 => 
              array (
                'name' => 'lead_status',
                'label' => 'LBL_LEAD_STATUS',
                'enabled' => true,
                'width' => '10%',
                'default' => false,
              ),
              25 => 
              array (
                'name' => 'created_by_name',
                'label' => 'LBL_CREATED',
                'enabled' => true,
                'readonly' => true,
                'id' => 'CREATED_BY',
                'link' => true,
                'sortable' => false,
                'width' => '10%',
                'default' => false,
              ),
              26 => 
              array (
                'name' => 'team_name',
                'label' => 'LBL_TEAM',
                'width' => '9%',
                'default' => false,
                'enabled' => true,
              ),
              27 => 
              array (
                'name' => 'date_modified',
                'label' => 'LBL_DATE_MODIFIED',
                'enabled' => true,
                'readonly' => true,
                'width' => '10%',
                'default' => false,
              ),
              28 => 
              array (
                'name' => 'points_c',
                'label' => 'LBL_POINTS',
                'enabled' => true,
                'width' => '10%',
                'default' => false,
              ),
              29 => 
              array (
                'name' => 'green_point_c',
                'label' => 'LBL_GREEN_POINT',
                'enabled' => true,
                'width' => '10%',
                'default' => false,
              ),
              30 => 
              array (
                'name' => 'amended_date',
                'label' => 'LBL_RECENT_TIME_CHANGED',
                'default' => false,
                'enabled' => true,
                'link' => true,
                'width' => '10%',
              ),
            ),
          ),
        ),
        'orderBy' => 
        array (
          'field' => 'date_modified',
          'direction' => 'desc',
        ),
      ),
    ),
  ),
);