<?php
$viewdefs['mur_client_n_list']['base']['view']['list'] = array (
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
          'label' => 'LBL_NAME',
          'default' => true,
          'enabled' => true,
          'link' => true,
          'width' => '32',
        ),
        1 => 
        array (
          'name' => 'team_name',
          'label' => 'LBL_TEAM',
          'width' => '9',
          'default' => false,
          'enabled' => true,
        ),
        2 => 
        array (
          'name' => 'assigned_user_name',
          'label' => 'LBL_ASSIGNED_TO_NAME',
          'width' => '9',
          'default' => true,
          'enabled' => true,
          'link' => true,
          'id' => 'ASSIGNED_USER_ID',
        ),
      ),
    ),
  ),
);