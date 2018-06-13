<?php
// created: 2018-06-13 10:48:08
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
          'name' => 'account_name',
          'label' => 'LBL_LIST_ACCOUNT_NAME',
          'enabled' => true,
          'default' => true,
          'related_fields' => 
          array (
            0 => 'account_id',
          ),
          'width' => '15%',
        ),
        1 => 
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
        2 => 
        array (
          'name' => 'title',
          'default' => true,
          'enabled' => true,
          'width' => '10%',
          'label' => 'LBL_TITLE',
        ),
        3 => 
        array (
          'name' => 'status',
          'label' => 'LBL_LIST_STATUS',
          'enabled' => true,
          'default' => true,
          'width' => '7%',
        ),
        4 => 
        array (
          'name' => 'primary_address_state',
          'default' => true,
          'enabled' => true,
          'width' => '10%',
          'label' => 'LBL_PRIMARY_ADDRESS_STATE',
        ),
        5 => 
        array (
          'name' => 'primary_address_country',
          'default' => true,
          'enabled' => true,
          'width' => '10%',
          'label' => 'LBL_PRIMARY_ADDRESS_COUNTRY',
        ),
        6 => 
        array (
          'name' => 'continent_c',
          'default' => true,
          'enabled' => true,
          'type' => 'enum',
          'studio' => 'visible',
          'label' => 'LBL_CONTINENT',
          'width' => '10%',
        ),
        7 => 
        array (
          'name' => 'phone_work',
          'label' => 'LBL_LIST_PHONE',
          'enabled' => true,
          'default' => true,
          'width' => '15%',
        ),
        8 => 
        array (
          'name' => 'website',
          'default' => true,
          'enabled' => true,
          'type' => 'url',
          'label' => 'LBL_WEBSITE',
          'width' => '10%',
        ),
        9 => 
        array (
          'name' => 'date_modified',
          'default' => true,
          'enabled' => true,
          'type' => 'datetime',
          'label' => 'LBL_DATE_MODIFIED',
          'width' => '10%',
        ),
        10 => 
        array (
          'name' => 'last_spoke_c',
          'default' => true,
          'enabled' => true,
          'type' => 'date',
          'label' => 'LBL_LAST_SPOKE',
          'width' => '10%',
        ),
        11 => 
        array (
          'name' => 'assigned_user_name',
          'label' => 'LBL_LIST_ASSIGNED_USER',
          'enabled' => true,
          'default' => true,
          'width' => '5%',
          'id' => 'ASSIGNED_USER_ID',
        ),
        12 => 
        array (
          'name' => 'investor_rating_c',
          'default' => true,
          'enabled' => true,
          'type' => 'enum',
          'studio' => 'visible',
          'label' => 'LBL_INVESTOR_RATING',
          'sortable' => true,
          'width' => '10%',
        ),
        13 => 
        array (
          'name' => 'data_updated',
          'default' => true,
          'enabled' => true,
          'width' => '5%',
          'label' => '',
        ),
        14 => 
        array (
          'name' => 'refered_by',
          'default' => false,
          'enabled' => true,
          'width' => '10%',
          'label' => 'LBL_REFERED_BY',
        ),
        15 => 
        array (
          'name' => 'department',
          'default' => false,
          'enabled' => true,
          'width' => '10%',
          'label' => 'LBL_DEPARTMENT',
        ),
        16 => 
        array (
          'name' => 'status_description',
          'default' => false,
          'enabled' => true,
          'type' => 'text',
          'label' => 'LBL_STATUS_DESCRIPTION',
          'sortable' => false,
          'width' => '10%',
        ),
        17 => 
        array (
          'name' => 'alt_address_country',
          'default' => false,
          'enabled' => true,
          'width' => '10%',
          'label' => 'LBL_ALT_ADDRESS_COUNTRY',
        ),
        18 => 
        array (
          'name' => 'modified_by_name',
          'default' => false,
          'enabled' => true,
          'width' => '5%',
          'label' => 'LBL_MODIFIED',
        ),
        19 => 
        array (
          'name' => 'email1',
          'default' => false,
          'enabled' => true,
          'width' => '16%',
          'label' => 'LBL_LIST_EMAIL_ADDRESS',
          'sortable' => false,
          'customCode' => '{$EMAIL1_LINK}{$EMAIL1}</a>',
        ),
        20 => 
        array (
          'name' => 'do_not_call',
          'default' => false,
          'enabled' => true,
          'width' => '10%',
          'label' => 'LBL_DO_NOT_CALL',
        ),
        21 => 
        array (
          'name' => 'phone_home',
          'default' => false,
          'enabled' => true,
          'width' => '10%',
          'label' => 'LBL_HOME_PHONE',
        ),
        22 => 
        array (
          'name' => 'fsa_c',
          'default' => false,
          'enabled' => true,
          'type' => 'enum',
          'studio' => 'visible',
          'label' => 'LBL_FSA',
          'sortable' => false,
          'width' => '10%',
        ),
        23 => 
        array (
          'name' => 'lead_source_description',
          'default' => false,
          'enabled' => true,
          'type' => 'text',
          'label' => 'LBL_LEAD_SOURCE_DESCRIPTION',
          'sortable' => false,
          'width' => '10%',
        ),
        24 => 
        array (
          'name' => 'phone_mobile',
          'default' => false,
          'enabled' => true,
          'width' => '10%',
          'label' => 'LBL_MOBILE_PHONE',
        ),
        25 => 
        array (
          'name' => 'phone_other',
          'default' => false,
          'enabled' => true,
          'width' => '10%',
          'label' => 'LBL_OTHER_PHONE',
        ),
        26 => 
        array (
          'name' => 'phone_fax',
          'default' => false,
          'enabled' => true,
          'width' => '10%',
          'label' => 'LBL_FAX_PHONE',
        ),
        27 => 
        array (
          'name' => 'primary_address_street',
          'default' => false,
          'enabled' => true,
          'width' => '10%',
          'label' => 'LBL_PRIMARY_ADDRESS_STREET',
        ),
        28 => 
        array (
          'name' => 'primary_address_city',
          'default' => false,
          'enabled' => true,
          'width' => '10%',
          'label' => 'LBL_PRIMARY_ADDRESS_CITY',
        ),
        29 => 
        array (
          'name' => 'primary_address_postalcode',
          'default' => false,
          'enabled' => true,
          'width' => '10%',
          'label' => 'LBL_PRIMARY_ADDRESS_POSTALCODE',
        ),
        30 => 
        array (
          'name' => 'alt_address_street',
          'default' => false,
          'enabled' => true,
          'width' => '10%',
          'label' => 'LBL_ALT_ADDRESS_STREET',
        ),
        31 => 
        array (
          'name' => 'alt_address_city',
          'default' => false,
          'enabled' => true,
          'width' => '10%',
          'label' => 'LBL_ALT_ADDRESS_CITY',
        ),
        32 => 
        array (
          'name' => 'alt_address_state',
          'default' => false,
          'enabled' => true,
          'width' => '10%',
          'label' => 'LBL_ALT_ADDRESS_STATE',
        ),
        33 => 
        array (
          'name' => 'alt_address_postalcode',
          'default' => false,
          'enabled' => true,
          'width' => '10%',
          'label' => 'LBL_ALT_ADDRESS_POSTALCODE',
        ),
        34 => 
        array (
          'name' => 'date_entered',
          'label' => 'LBL_DATE_ENTERED',
          'enabled' => true,
          'default' => false,
          'readonly' => true,
          'width' => '10%',
        ),
        35 => 
        array (
          'name' => 'created_by',
          'default' => false,
          'enabled' => true,
          'width' => '10%',
          'label' => 'LBL_CREATED',
        ),
        36 => 
        array (
          'name' => 'team_name',
          'default' => false,
          'enabled' => true,
          'width' => '5%',
          'label' => 'LBL_LIST_TEAM',
        ),
      ),
    ),
  ),
);