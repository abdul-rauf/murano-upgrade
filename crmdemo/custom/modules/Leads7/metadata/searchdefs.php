<?php
// created: 2015-02-22 18:44:41
$searchdefs['Leads'] = array (
  'layout' => 
  array (
    'basic_search' => 
    array (
      0 => 
      array (
        'name' => 'search_name',
        'label' => 'LBL_NAME',
        'type' => 'name',
        'default' => true,
        'width' => '10%',
      ),
      1 => 
      array (
        'name' => 'current_user_only',
        'label' => 'LBL_CURRENT_USER_FILTER',
        'type' => 'bool',
        'default' => true,
        'width' => '10%',
      ),
      2 => 
      array (
        'name' => 'favorites_only',
        'label' => 'LBL_FAVORITES_FILTER',
        'type' => 'bool',
        'default' => true,
        'width' => '10%',
      ),
    ),
    'advanced_search' => 
    array (
      0 => 
      array (
        'name' => 'account_name',
        'default' => true,
        'width' => '10%',
      ),
      1 => 
      array (
        'name' => 'first_name',
        'default' => true,
        'width' => '10%',
      ),
      2 => 
      array (
        'name' => 'last_name',
        'default' => true,
        'width' => '10%',
      ),
      3 => 
      array (
        'type' => 'varchar',
        'studio' => 
        array (
          'editField' => true,
        ),
        'label' => 'LBL_EMAIL_ADDRESS',
        'width' => '10%',
        'default' => true,
        'name' => 'email1',
      ),
      4 => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_PRIMARY_ADDRESS_STREET',
        'width' => '10%',
        'default' => true,
        'name' => 'primary_address_street',
      ),
      5 => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_PRIMARY_ADDRESS_CITY',
        'width' => '10%',
        'default' => true,
        'name' => 'primary_address_city',
      ),
      6 => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_PRIMARY_ADDRESS_STATE',
        'width' => '10%',
        'default' => true,
        'name' => 'primary_address_state',
      ),
      7 => 
      array (
        'name' => 'primary_address_country',
        'label' => 'LBL_COUNTRY',
        'type' => 'name',
        'options' => 'countries_dom',
        'default' => true,
        'width' => '10%',
      ),
      8 => 
      array (
        'type' => 'varchar',
        'default' => true,
        'label' => 'LBL_AFFILIATE',
        'width' => '10%',
        'name' => 'affiliate_c',
      ),
      9 => 
      array (
        'name' => 'assigned_user_id',
        'type' => 'enum',
        'label' => 'LBL_ASSIGNED_TO',
        'function' => 
        array (
          'name' => 'get_user_array',
          'params' => 
          array (
            0 => false,
          ),
        ),
        'default' => true,
        'width' => '10%',
      ),
      10 => 
      array (
        'name' => 'status',
        'default' => true,
        'width' => '10%',
      ),
      11 => 
      array (
        'type' => 'enum',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_INVESTOR_RATING',
        'sortable' => false,
        'width' => '10%',
        'name' => 'investor_rating_c',
      ),
      12 => 
      array (
        'type' => 'enum',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_PREF_LIQUID',
        'width' => '10%',
        'name' => 'pref_liquid_c',
      ),
      13 => 
      array (
        'type' => 'multienum',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_INVESTOR_TYP',
        'width' => '10%',
        'name' => 'investor_typ_c',
      ),
      14 => 
      array (
        'type' => 'enum',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_CONTINENT',
        'width' => '10%',
        'name' => 'continent_c',
      ),
      15 => 
      array (
        'type' => 'multienum',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_INVESTMENT_GEOGRAPHY',
        'width' => '10%',
        'name' => 'investment_geography_c',
      ),
      16 => 
      array (
        'type' => 'multienum',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_FUND_TYPE',
        'width' => '10%',
        'name' => 'fund_type_c',
      ),
      17 => 
      array (
        'type' => 'multienum',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_SPEC_STRAT_PREF',
        'width' => '10%',
        'name' => 'spec_strat_pref_c',
      ),
      18 => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_TEAMS',
        'id' => 'TEAM_ID',
        'width' => '10%',
        'default' => true,
        'name' => 'team_name',
      ),
      19 => 
      array (
        'type' => 'datetime',
        'label' => 'LBL_DATE_MODIFIED',
        'width' => '10%',
        'default' => true,
        'name' => 'date_modified',
      ),
      20 => 
      array (
        'type' => 'date',
        'default' => true,
        'label' => 'LBL_LAST_SPOKE',
        'width' => '10%',
        'name' => 'last_spoke_c',
      ),
    ),
  ),
  'templateMeta' => 
  array (
    'maxColumns' => '3',
    'widths' => 
    array (
      'label' => '10',
      'field' => '30',
    ),
    'maxColumnsBasic' => '3',
  ),
);