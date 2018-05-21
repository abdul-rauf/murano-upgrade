<?php
$module_name = 'rt_report_board';
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
                'name' => 'client',
                'label' => 'LBL_CLIENT',
                'enabled' => true,
                'id' => 'MUR_CLIENT_N_LIST_ID_C',
                'link' => true,
                'sortable' => false,
                'width' => '10%',
                'default' => true,
              ),
              1 => 
              array (
                'name' => 'client_alias',
                'label' => 'LBL_CLIENT_ALIAS',
                'enabled' => true,
                'width' => '10%',
                'default' => true,
              ),
              2 => 
              array (
                'name' => 'no_of_reports',
                'label' => 'LBL_NO_OF_REPORTS',
                'enabled' => true,
                'width' => '10%',
                'default' => true,
              ),
              3 => 
              array (
                'name' => 'four_weeks_average',
                'label' => 'LBL_FOUR_WEEKS_AVERAGE',
                'enabled' => true,
                'width' => '10%',
                'default' => true,
              ),
              4 => 
              array (
                'name' => 'minimum_black',
                'label' => 'LBL_MINIMUM_BLACK',
                'enabled' => true,
                'width' => '10%',
                'default' => true,
              ),
              5 => 
              array (
                'name' => 'fund_type',
                'label' => 'LBL_FUND_TYPE',
                'enabled' => true,
                'width' => '10%',
                'default' => true,
              ),
              6 => 
              array (
                'name' => 'green_status',
                'label' => 'LBL_GREEN_STATUS',
                'enabled' => true,
                'width' => '10%',
                'default' => true,
              ),
              7 => 
              array (
                'name' => 'assigned_team',
                'label' => 'LBL_ASSIGNED_TEAM',
                'enabled' => true,
                'width' => '10%',
                'default' => true,
              ),
              8 => 
              array (
                'name' => 'team_name',
                'label' => 'LBL_TEAM',
                'width' => '9%',
                'default' => false,
                'enabled' => true,
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
