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
    'account_name' => 
    array (
      'dbFields' => 
      array (
      ),
    ),
    'first_name' => 
    array (
    ),
    'last_name' => 
    array (
    ),
    'email1' => 
    array (
    ),
    'primary_address_street' => 
    array (
    ),
    'primary_address_city' => 
    array (
    ),
    'primary_address_state' => 
    array (
    ),
    'primary_address_country' => 
    array (
    ),
    'affiliate_c' => 
    array (
      'type' => 'varchar',
      'default' => true,
      'width' => '10%',
      'name' => 'affiliate_c',
      'vname' => 'LBL_AFFILIATE',
    ),
    'assigned_user_name' => 
    array (
    ),
    'status' => 
    array (
    ),
    'investor_rating_c' => 
    array (
      'type' => 'enum',
      'default' => true,
      'studio' => 'visible',
      'sortable' => false,
      'width' => '10%',
      'name' => 'investor_rating_c',
      'vname' => 'LBL_INVESTOR_RATING',
    ),
    'pref_liquid_c' => 
    array (
      'type' => 'enum',
      'default' => true,
      'studio' => 'visible',
      'width' => '10%',
      'name' => 'pref_liquid_c',
      'vname' => 'LBL_PREF_LIQUID',
    ),
    'investor_typ_c' => 
    array (
      'type' => 'multienum',
      'default' => true,
      'studio' => 'visible',
      'width' => '10%',
      'name' => 'investor_typ_c',
      'vname' => 'LBL_INVESTOR_TYP',
    ),
    'continent_c' => 
    array (
      'type' => 'enum',
      'default' => true,
      'studio' => 'visible',
      'width' => '10%',
      'name' => 'continent_c',
      'vname' => 'LBL_CONTINENT',
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
    'fund_type_c' => 
    array (
      'type' => 'multienum',
      'default' => true,
      'studio' => 'visible',
      'width' => '10%',
      'name' => 'fund_type_c',
      'vname' => 'LBL_FUND_TYPE',
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
    'team_name' => 
    array (
    ),
    'date_modified' => 
    array (
    ),
    'last_spoke_c' => 
    array (
      'type' => 'date',
      'default' => true,
      'width' => '10%',
      'name' => 'last_spoke_c',
      'vname' => 'LBL_LAST_SPOKE',
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
