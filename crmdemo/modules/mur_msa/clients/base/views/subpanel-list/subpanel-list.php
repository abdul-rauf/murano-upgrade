<?php

/* This file was updated by 7_FixNameLink.php */
$viewdefs['mur_msa']['base']['view']['subpanel-list'] = array (
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
          'label' => 'LBL_NAME',
          'enabled' => true,
          'default' => true,
          'name' => 'name',
          'link' => true,
        ),
        1 => 
        array (
          'label' => 'LBL_INDUSTRY',
          'enabled' => true,
          'default' => true,
          'name' => 'industry',
        ),
        2 => 
        array (
          'label' => 'LBL_PHONE_OFFICE',
          'enabled' => true,
          'default' => true,
          'name' => 'phone_office',
        ),
        3 => 
        array (
          'name' => 'assigned_user_name',
          'target_record_key' => 'assigned_user_id',
          'target_module' => 'Employees',
          'label' => 'LBL_ASSIGNED_USER',
          'enabled' => true,
          'default' => true,
        ),
      ),
    ),
  ),
);
