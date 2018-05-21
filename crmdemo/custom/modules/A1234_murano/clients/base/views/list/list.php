<?php
$viewdefs['A1234_murano']['base']['view']['list'] = array (
  'panels' => 
  array (
    0 => 
    array (
      'label' => 'LBL_PANEL_DEFAULT',
      'fields' => 
      array (
        0 => 
        array (
          'name' => 'murano_c',
          'default' => true,
          'enabled' => true,
          'type' => 'iframe',
          'label' => 'LBL_MURANO',
          'width' => '100%',
        ),
        1 => 
        array (
          'name' => 'description',
          'default' => false,
          'enabled' => true,
          'type' => 'text',
          'label' => 'LBL_DESCRIPTION',
          'sortable' => false,
          'width' => '100%',
        ),
        2 => 
        array (
          'name' => 'assigned_user_name',
          'label' => 'LBL_ASSIGNED_TO_NAME',
          'width' => '9%',
          'default' => false,
          'enabled' => true,
          'link' => true,
          'id' => 'ASSIGNED_USER_ID',
        ),
        3 => 
        array (
          'name' => 'name',
          'label' => 'LBL_NAME',
          'default' => false,
          'enabled' => true,
          'link' => true,
          'width' => '32%',
        ),
      ),
    ),
  ),
);
