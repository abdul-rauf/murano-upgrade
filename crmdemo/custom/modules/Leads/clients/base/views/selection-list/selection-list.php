<?php
// created: 2018-06-13 15:14:56
$viewdefs['Leads']['base']['view']['selection-list'] = array (
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
          'name' => 'status',
          'label' => 'LBL_LIST_STATUS',
          'enabled' => true,
          'default' => true,
        ),
        1 => 
        array (
          'name' => 'account_name',
          'label' => 'LBL_LIST_ACCOUNT_NAME',
          'enabled' => true,
          'default' => true,
          'related_fields' => 
          array (
            0 => 'account_id',
            1 => 'converted',
          ),
        ),
        2 => 
        array (
          'name' => 'phone_work',
          'label' => 'LBL_LIST_PHONE',
          'enabled' => true,
          'default' => false,
        ),
        3 => 
        array (
          'name' => 'email',
          'label' => 'LBL_LIST_EMAIL_ADDRESS',
          'enabled' => true,
          'default' => false,
        ),
        4 => 
        array (
          'name' => 'assigned_user_name',
          'label' => 'LBL_LIST_ASSIGNED_USER',
          'enabled' => true,
          'default' => true,
        ),
        5 => 
        array (
          'name' => 'date_entered',
          'label' => 'LBL_DATE_ENTERED',
          'enabled' => true,
          'default' => false,
          'readonly' => true,
        ),
        6 => 
        array (
          'type' => 'fullname',
          'link' => true,
          'label' => 'LBL_NAME',
          'default' => true,
          'enabled' => true,
          'name' => 'name',
        ),
        7 => 
        array (
          'type' => 'enum',
          'label' => 'LBL_LEAD_SOURCE',
          'default' => true,
          'enabled' => true,
          'name' => 'lead_source',
        ),
        8 => 
        array (
          'type' => 'enum',
          'default' => true,
          'studio' => 'visible',
          'label' => 'LBL_FSA',
          'enabled' => true,
          'name' => 'fsa_c',
        ),
      ),
    ),
  ),
);