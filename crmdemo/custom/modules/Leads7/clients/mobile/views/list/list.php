<?php
$viewdefs['Leads']['mobile']['view']['list'] = array (
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
          'link' => '1',
          'related_fields' => 
          array (
            0 => 'first_name',
            1 => 'last_name',
            2 => 'salutation',
          ),
          'width' => '20%',
          'orderBy' => 'last_name',
        ),
        1 => 
        array (
          'name' => 'title',
          'label' => 'LBL_TITLE',
          'enabled' => true,
          'width' => '15%',
          'default' => true,
        ),
        2 => 
        array (
          'name' => 'email1',
          'default' => true,
          'enabled' => true,
          'width' => '15%',
          'label' => 'LBL_EMAIL_ADDRESS',
          'sortable' => '',
          'link' => '1',
          'customCode' => '{$EMAIL1_LINK}{$EMAIL1}</a>',
        ),
        3 => 
        array (
          'name' => 'phone_work',
          'label' => 'LBL_OFFICE_PHONE',
          'enabled' => true,
          'width' => '15%',
          'default' => true,
        ),
        4 => 
        array (
          'name' => 'do_not_call',
          'default' => false,
          'enabled' => true,
          'width' => '10',
          'label' => 'LBL_DO_NOT_CALL',
        ),
        5 => 
        array (
          'name' => 'phone_home',
          'enabled' => true,
          'width' => '10',
          'default' => false,
          'label' => 'LBL_HOME_PHONE',
        ),
        6 => 
        array (
          'name' => 'phone_mobile',
          'enabled' => true,
          'width' => '10',
          'default' => false,
          'label' => 'LBL_MOBILE_PHONE',
        ),
        7 => 
        array (
          'name' => 'phone_other',
          'default' => false,
          'enabled' => true,
          'width' => '10',
          'label' => 'LBL_WORK_PHONE',
        ),
        8 => 
        array (
          'name' => 'phone_fax',
          'default' => false,
          'enabled' => true,
          'width' => '10',
          'label' => 'LBL_FAX_PHONE',
        ),
        9 => 
        array (
          'name' => 'date_entered',
          'default' => false,
          'enabled' => true,
          'width' => '10',
          'label' => 'LBL_DATE_ENTERED',
        ),
        10 => 
        array (
          'name' => 'created_by_name',
          'default' => false,
          'enabled' => true,
          'width' => '10',
          'label' => 'LBL_CREATED',
        ),
        11 => 
        array (
          'name' => 'team_name',
          'default' => true,
          'enabled' => true,
          'width' => '10',
          'label' => 'LBL_TEAM',
        ),
      ),
    ),
  ),
);
