<?php
// created: 2015-02-22 18:55:24
$viewdefs['Leads']['base']['view']['subpanel-cl_client_list_subpanel_cl_client_list_leads'] = array (
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
          'type' => 'varchar',
          'default' => true,
          'label' => 'LBL_ACCOUNT_NAME',
          'enabled' => true,
          'name' => 'account_name',
        ),
        1 => 
        array (
          'default' => true,
          'label' => 'LBL_LIST_NAME',
          'enabled' => true,
          'name' => 'name',
          'link' => true,
          'fields' => 
          array (
            0 => 'first_name',
            1 => 'last_name',
            2 => 'salutation',
            3 => 'title',
          ),
          'type' => 'fullname',
        ),
        2 => 
        array (
          'default' => true,
          'label' => 'LBL_LIST_REFERED_BY',
          'enabled' => true,
          'name' => 'refered_by',
        ),
        3 => 
        array (
          'default' => true,
          'label' => 'LBL_LIST_LEAD_SOURCE',
          'enabled' => true,
          'name' => 'lead_source',
          'type' => 'enum',
        ),
        4 => 
        array (
          'default' => true,
          'label' => 'LBL_LIST_PHONE',
          'enabled' => true,
          'name' => 'phone_work',
          'type' => 'phone',
        ),
        5 => 
        array (
          'sortable' => false,
          'default' => true,
          'label' => 'LBL_LIST_EMAIL_ADDRESS',
          'enabled' => true,
          'name' => 'email',
          'type' => 'email',
        ),
        6 => 
        array (
          'name' => 'lead_source_description',
          'sortable' => false,
          'default' => true,
          'label' => 'LBL_LIST_LEAD_SOURCE_DESCRIPTION',
          'enabled' => true,
          'type' => 'text',
        ),
        7 => 
        array (
          'name' => 'assigned_user_name',
          'target_record_key' => 'assigned_user_id',
          'target_module' => 'Employees',
          'default' => true,
          'label' => 'LBL_LIST_ASSIGNED_TO_NAME',
          'enabled' => true,
          'link' => true,
          'type' => 'relate',
        ),
      ),
    ),
  ),
  'type' => 'subpanel-list',
);