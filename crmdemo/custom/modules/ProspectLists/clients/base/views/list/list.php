<?php
$viewdefs['ProspectLists'] = 
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
                'name' => 'name',
                'width' => '25%',
                'label' => 'LBL_LIST_PROSPECT_LIST_NAME',
                'link' => true,
                'enabled' => true,
                'default' => true,
              ),
              1 => 
              array (
                'name' => 'due_date_target_c',
                'label' => 'LBL_DUE_DATE_TARGET',
                'enabled' => true,
                'width' => '10%',
                'default' => true,
              ),
              2 => 
              array (
                'name' => 'description',
                'width' => '40%',
                'label' => 'LBL_LIST_DESCRIPTION',
                'enabled' => true,
                'default' => true,
              ),
              3 => 
              array (
                'name' => 'assigned_user_name',
                'width' => '10%',
                'label' => 'LBL_LIST_ASSIGNED_USER',
                'id' => 'ASSIGNED_USER_ID',
                'enabled' => true,
                'default' => true,
                'sortable' => false,
              ),
              4 => 
              array (
                'name' => 'date_entered',
                'type' => 'datetime',
                'label' => 'LBL_DATE_ENTERED',
                'width' => '10%',
                'enabled' => true,
                'default' => true,
                'readonly' => true,
              ),
              5 => 
              array (
                'name' => 'team_name',
                'label' => 'LBL_TEAMS',
                'enabled' => true,
                'id' => 'TEAM_ID',
                'link' => true,
                'sortable' => false,
                'width' => '10%',
                'default' => true,
              ),
              6 => 
              array (
                'name' => 'list_type',
                'width' => '15%',
                'label' => 'LBL_LIST_TYPE_LIST_NAME',
                'enabled' => true,
                'default' => false,
              ),
            ),
          ),
        ),
      ),
    ),
  ),
);
