<?php
// created: 2016-06-27 13:16:09
$viewdefs['Leads']['base']['view']['subpanel-for-mur_group_client_tasks-mur_group_client_tasks_leads_1'] = array (
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
          'name' => 'account_name',
          'label' => 'LBL_ACCOUNT_NAME',
          'enabled' => true,
          'default' => true,
        ),
        1 => 
        array (
          'name' => 'full_name',
          'type' => 'fullname',
          'fields' => 
          array (
            0 => 'salutation',
            1 => 'first_name',
            2 => 'last_name',
          ),
          'link' => true,
          'css_class' => 'full-name',
          'label' => 'LBL_LIST_NAME',
          'enabled' => true,
          'default' => true,
        ),
        2 => 
        array (
          'name' => 'account_description',
          'label' => 'LBL_ACCOUNT_DESCRIPTION',
          'enabled' => true,
          'sortable' => false,
          'default' => true,
        ),
        3 => 
        array (
          'name' => 'tempanalyst_c',
          'label' => 'LBL_TEMPANALYST',
          'enabled' => true,
          'default' => true,
        ),
        4 => 
        array (
          'name' => 'assigned_user_name',
          'target_record_key' => 'assigned_user_id',
          'target_module' => 'Employees',
          'label' => 'LBL_LIST_ASSIGNED_TO_NAME',
          'enabled' => true,
          'default' => true,
        ),
        5 => 
        array (
          'name' => 'inv_groups',
          'label' => 'Investor Group Tasks',
          'enabled' => true,
          'sortable' => false,
          'default' => true,
        ),
        6 => 
        array (
          'name' => 'suitable_clients_2_c',
          'label' => 'LBL_SUITABLE_CLIENTS_2',
          'enabled' => true,
          'default' => true,
        ),
        7 => 
        array (
          'name' => 'trips_suitable2_c',
          'label' => 'LBL_TRIPS_SUITABLE2',
          'enabled' => true,
          'default' => true,
        ),
        8 => 
        array (
          'name' => 'trips_suitable3_c',
          'label' => 'LBL_TRIPS_SUITABLE3',
          'enabled' => true,
          'default' => true,
        ),
        9 => 
        array (
          'name' => 'trips_suitable4_c',
          'label' => 'LBL_TRIPS_SUITABLE4',
          'enabled' => true,
          'default' => true,
        ),
        10 => 
        array (
          'name' => 'trips_suitable5_c',
          'label' => 'LBL_TRIPS_SUITABLE5',
          'enabled' => true,
          'default' => true,
        ),
        11 => 
        array (
          'name' => 'trip6_c',
          'label' => 'LBL_TRIP6',
          'enabled' => true,
          'default' => true,
        ),
        12 => 
        array (
          'name' => 'trip7_c',
          'label' => 'LBL_TRIP7',
          'enabled' => true,
          'default' => true,
        ),
        13 => 
        array (
          'name' => 'trip8_c',
          'label' => 'LBL_TRIP8',
          'enabled' => true,
          'default' => true,
        ),
        14 => 
        array (
          'name' => 'trip9_c',
          'label' => 'LBL_TRIP9',
          'enabled' => true,
          'default' => true,
        ),
        15 => 
        array (
          'name' => 'target_links',
          'label' => 'All Target Lists',
          'enabled' => true,
          'sortable' => false,
          'default' => true,
        ),
        16 => 
        array (
          'name' => 'last_spoke_c',
          'label' => 'LBL_LAST_SPOKE',
          'enabled' => true,
          'default' => true,
        ),
        17 => 
        array (
          'name' => 'status',
          'label' => 'LBL_STATUS',
          'enabled' => true,
          'default' => true,
        ),
      ),
    ),
  ),
  'type' => 'subpanel-list',
);