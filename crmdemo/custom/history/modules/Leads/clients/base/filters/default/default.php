<?php
$viewdefs['Leads']['base']['filter']['default'] = array (
  'default_filter' => 'all_records',
  'fields' => 
  array (
    'search_name' => 
    array (
      'dbFields' => 
      array (
        0 => 'first_name',
        1 => 'last_name',
      ),
      'vname' => 'LBL_NAME',
    ),
    'first_name' => 
    array (
    ),
    'phone' => 
    array (
      'dbFields' => 
      array (
        0 => 'phone_mobile',
        1 => 'phone_work',
        2 => 'phone_other',
        3 => 'phone_fax',
        4 => 'phone_home',
      ),
      'vname' => 'LBL_ANY_PHONE',
    ),
    'last_name' => 
    array (
    ),
    'address_street' => 
    array (
      'dbFields' => 
      array (
        0 => 'primary_address_street',
        1 => 'alt_address_street',
      ),
      'vname' => 'LBL_ANY_ADDRESS',
    ),
    'address_city' => 
    array (
      'dbFields' => 
      array (
        0 => 'primary_address_city',
        1 => 'alt_address_city',
      ),
      'vname' => 'LBL_CITY',
    ),
    'account_name' => 
    array (
      'dbFields' => 
      array (
      ),
    ),
    'primary_address_country' => 
    array (
    ),
    'address_state' => 
    array (
      'dbFields' => 
      array (
        0 => 'primary_address_state',
        1 => 'alt_address_state',
      ),
      'vname' => 'LBL_STATE',
    ),
    'status' => 
    array (
    ),
    'assigned_user_name' => 
    array (
    ),
    'fund_type_c' => 
    array (
      'type' => 'multienum',
      'default' => true,
      'studio' => 'visible',
      'width' => '10%',
      'name' => 'fund_type_c',
      'vname' => 'LBL_FUND_TYPE',
    ),
    'investment_geography_c' => 
    array (
      'type' => 'multienum',
      'default' => true,
      'studio' => 'visible',
      'width' => '10%',
      'name' => 'investment_geography_c',
      'vname' => 'LBL_INVESTMENT_GEOGRAPHY',
    ),
    'spec_strat_pref_c' => 
    array (
      'type' => 'multienum',
      'default' => true,
      'studio' => 'visible',
      'width' => '10%',
      'name' => 'spec_strat_pref_c',
      'vname' => 'LBL_SPEC_STRAT_PREF',
    ),
    '$owner' => 
    array (
      'predefined_filter' => true,
      'vname' => 'LBL_CURRENT_USER_FILTER',
    ),
    '$favorite' => 
    array (
      'predefined_filter' => true,
      'vname' => 'LBL_FAVORITES_FILTER',
    ),
  ),
);
