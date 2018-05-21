<?php
$viewdefs['mu_Enquriy_Tracker']['base']['view']['list'] = array (
  'panels' => 
  array (
    0 => 
    array (
      'label' => 'LBL_PANEL_DEFAULT',
      'fields' => 
      array (
        0 => 
        array (
          'name' => 'lead_record',
          'default' => true,
          'enabled' => true,
          'type' => 'relate',
          'studio' => 'visible',
          'label' => 'LBL_LEAD_RECORD',
          'id' => 'LEAD_ID_C',
          'link' => true,
          'width' => '10%',
        ),
        1 => 
        array (
          'name' => 'account_name',
          'default' => true,
          'enabled' => true,
          'type' => 'relate',
          'studio' => 'visible',
          'label' => 'LBL_ACCOUNT_NAME',
          'id' => 'ACCOUNT_ID_C',
          'link' => true,
          'width' => '10%',
        ),
        2 => 
        array (
          'name' => 'date_entered',
          'default' => true,
          'enabled' => true,
          'type' => 'datetime',
          'label' => 'LBL_DATE_ENTERED',
          'width' => '10%',
        ),
        3 => 
        array (
          'name' => 'date_click',
          'default' => true,
          'enabled' => true,
          'type' => 'datetimecombo',
          'label' => 'LBL_DATE_CLICK',
          'width' => '10%',
        ),
        4 => 
        array (
          'name' => 'status',
          'default' => true,
          'enabled' => true,
          'type' => 'enum',
          'studio' => 'visible',
          'label' => 'LBL_STATUS',
          'width' => '10%',
        ),
        5 => 
        array (
          'name' => 'assigned_user_name',
          'label' => 'LBL_ASSIGNED_TO_NAME',
          'width' => '9%',
          'default' => true,
          'enabled' => true,
          'link' => true,
          'id' => 'ASSIGNED_USER_ID',
        ),
        6 => 
        array (
          'name' => 'name',
          'label' => 'LBL_NAME',
          'default' => false,
          'enabled' => true,
          'link' => true,
          'width' => '32%',
        ),
        7 => 
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
);
