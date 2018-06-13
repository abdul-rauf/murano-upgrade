<?php
// created: 2018-06-13 14:44:00
$viewdefs['Leads']['base']['view']['list'] = array (
  'panels' => 
  array (
    0 => 
    array (
      'label' => 'LBL_PANEL_DEFAULT',
      'fields' => 
      array (
        0 => 
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
          'label' => 'LBL_LIST_NAME',
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
          ),
          'width' => '10%',
        ),
        2 => 
        array (
          'name' => 'title',
          'default' => true,
          'enabled' => true,
          'width' => '15%',
          'label' => 'LBL_TITLE',
        ),
        3 => 
        array (
          'name' => 'email1',
          'default' => true,
          'enabled' => true,
          'width' => '15%',
          'label' => 'LBL_LIST_EMAIL_ADDRESS',
          'sortable' => false,
          'customCode' => '{$EMAIL1_LINK}{$EMAIL1}</a>',
        ),
        4 => 
        array (
          'name' => 'phone_work',
          'label' => 'LBL_LIST_PHONE',
          'enabled' => true,
          'default' => true,
          'width' => '15%',
        ),
        5 => 
        array (
          'name' => 'team_name',
          'default' => true,
          'enabled' => true,
          'width' => '10%',
          'label' => 'LBL_LIST_TEAM',
        ),
        6 => 
        array (
          'name' => 'do_not_call',
          'default' => false,
          'enabled' => true,
          'width' => '10%',
          'label' => 'LBL_DO_NOT_CALL',
        ),
        7 => 
        array (
          'name' => 'phone_home',
          'default' => false,
          'enabled' => true,
          'width' => '10%',
          'label' => 'LBL_HOME_PHONE',
        ),
        8 => 
        array (
          'name' => 'phone_mobile',
          'default' => false,
          'enabled' => true,
          'width' => '10%',
          'label' => 'LBL_MOBILE_PHONE',
        ),
        9 => 
        array (
          'name' => 'phone_other',
          'default' => false,
          'enabled' => true,
          'width' => '10%',
          'label' => 'LBL_OTHER_PHONE',
        ),
        10 => 
        array (
          'name' => 'phone_fax',
          'default' => false,
          'enabled' => true,
          'width' => '10%',
          'label' => 'LBL_FAX_PHONE',
        ),
        11 => 
        array (
          'name' => 'date_entered',
          'label' => 'LBL_DATE_ENTERED',
          'enabled' => true,
          'default' => false,
          'readonly' => true,
          'width' => '10%',
        ),
        12 => 
        array (
          'name' => 'created_by_name',
          'label' => 'LBL_CREATED',
          'enabled' => true,
          'readonly' => true,
          'id' => 'CREATED_BY',
          'link' => true,
          'sortable' => false,
          'width' => '10%',
          'default' => false,
        ),
        13 => 
        array (
          'name' => 'date_modified',
          'enabled' => true,
          'default' => true,
        ),
      ),
    ),
  ),
);