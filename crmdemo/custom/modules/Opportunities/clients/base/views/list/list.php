<?php
$viewdefs['Opportunities']['base']['view']['list'] = array (
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
          'width' => '30%',
          'link' => true,
          'label' => 'LBL_LIST_OPPORTUNITY_NAME',
          'enabled' => true,
          'default' => true,
        ),
        1 => 
        array (
          'name' => 'account_name',
          'width' => '20%',
          'link' => true,
          'label' => 'LBL_LIST_ACCOUNT_NAME',
          'enabled' => true,
          'default' => true,
          'id' => 'ACCOUNT_ID',
          'sortable' => true,
          'ACLTag' => 'ACCOUNT',
          'contextMenu' => 
          array (
            'objectType' => 'sugarAccount',
            'metaData' => 
            array (
              'return_module' => 'Contacts',
              'return_action' => 'ListView',
              'module' => 'Accounts',
              'parent_id' => '{$ACCOUNT_ID}',
              'parent_name' => '{$ACCOUNT_NAME}',
              'account_id' => '{$ACCOUNT_ID}',
              'account_name' => '{$ACCOUNT_NAME}',
            ),
          ),
          'related_fields' => 
          array (
            0 => 'account_id',
          ),
        ),
        2 => 
        array (
          'name' => 'sales_stage',
          'width' => '10%',
          'label' => 'LBL_LIST_SALES_STAGE',
          'enabled' => true,
          'default' => true,
        ),
        3 => 
        array (
          'name' => 'amount_usdollar',
          'default' => true,
          'enabled' => true,
          'width' => '10%',
          'label' => 'LBL_LIST_AMOUNT_USDOLLAR',
          'align' => 'right',
          'currency_format' => true,
        ),
        4 => 
        array (
          'name' => 'date_entered',
          'width' => '10%',
          'label' => 'LBL_DATE_ENTERED',
          'enabled' => true,
          'default' => true,
          'readonly' => true,
        ),
        5 => 
        array (
          'name' => 'next_step',
          'width' => '10%',
          'label' => 'LBL_NEXT_STEP',
          'enabled' => true,
          'default' => true,
        ),
        6 => 
        array (
          'name' => 'date_closed',
          'width' => '10',
          'label' => 'LBL_DATE_CLOSED',
          'enabled' => true,
          'default' => true,
        ),
        7 => 
        array (
          'name' => 'assigned_user_name',
          'width' => '5%',
          'label' => 'LBL_LIST_ASSIGNED_USER',
          'id' => 'ASSIGNED_USER_ID',
          'enabled' => true,
          'default' => true,
        ),
        8 => 
        array (
          'name' => 'opportunity_type',
          'width' => '15%',
          'label' => 'LBL_TYPE',
          'enabled' => true,
          'default' => false,
        ),
        9 => 
        array (
          'name' => 'lead_source',
          'width' => '15%',
          'label' => 'LBL_LEAD_SOURCE',
          'enabled' => true,
          'default' => false,
        ),
        10 => 
        array (
          'name' => 'probability',
          'width' => '10%',
          'label' => 'LBL_PROBABILITY',
          'enabled' => true,
          'default' => false,
        ),
        11 => 
        array (
          'name' => 'created_by_name',
          'width' => '10%',
          'label' => 'LBL_CREATED',
          'enabled' => true,
          'default' => false,
          'readonly' => true,
        ),
        12 => 
        array (
          'name' => 'team_name',
          'type' => 'teamset',
          'width' => '5%',
          'label' => 'LBL_LIST_TEAM',
          'enabled' => true,
          'default' => false,
        ),
        13 => 
        array (
          'name' => 'modified_by_name',
          'width' => '5%',
          'label' => 'LBL_MODIFIED',
          'enabled' => true,
          'default' => false,
          'readonly' => true,
        ),
      ),
    ),
  ),
);