<?php
$viewdefs['A1234_murano'] = 
array (
  'base' => 
  array (
    'view' => 
    array (
      'selection-list' => 
      array (
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
                'name' => 'assigned_user_name',
                'label' => 'LBL_ASSIGNED_TO_NAME',
                'width' => '9',
                'default' => true,
                'enabled' => true,
                'link' => true,
                'id' => 'ASSIGNED_USER_ID',
              ),
              2 => 
              array (
                'type' => 'iframe',
                'default' => true,
                'label' => 'LBL_MURANO',
                'enabled' => true,
                'name' => 'murano_c',
              ),
              3 => 
              array (
                'type' => 'text',
                'label' => 'LBL_DESCRIPTION',
                'default' => true,
                'enabled' => true,
                'name' => 'description',
              ),
            ),
          ),
        ),
      ),
    ),
  ),
);
