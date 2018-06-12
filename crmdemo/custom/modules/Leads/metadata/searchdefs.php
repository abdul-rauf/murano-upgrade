<?php
// created: 2018-06-12 11:30:30
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
        'label' => 'LBL_PRIMARY_ADDRESS_CITY',
        'width' => '10%',
        'default' => true,
        'name' => 'primary_address_city',
      ),
      4 => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_PRIMARY_ADDRESS_STATE',
        'width' => '10%',
        'default' => true,
        'name' => 'primary_address_state',
      ),
      5 => 
      array (
        'name' => 'primary_address_country',
        'label' => 'LBL_COUNTRY',
        'type' => 'name',
        'options' => 'countries_dom',
        'default' => true,
        'width' => '10%',
      ),
      6 => 
      array (
        'type' => 'enum',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_CONTINENT',
        'width' => '10%',
        'name' => 'continent_c',
      ),
      7 => 
      array (
        'type' => 'multienum',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_INVESTOR_TYP',
        'width' => '10%',
        'name' => 'investor_typ_c',
      ),
      8 => 
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
      9 => 
      array (
        'name' => 'status',
        'default' => true,
        'width' => '10%',
      ),
      10 => 
      array (
        'type' => 'enum',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_INVESTOR_RATING',
        'sortable' => false,
        'width' => '10%',
        'name' => 'investor_rating_c',
      ),
      11 => 
      array (
        'type' => 'multienum',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_FUND_TYPE',
        'width' => '10%',
        'name' => 'fund_type_c',
      ),
      12 => 
      array (
        'type' => 'multienum',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_SPEC_STRAT_PREF',
        'width' => '10%',
        'name' => 'spec_strat_pref_c',
      ),
      13 => 
      array (
        'type' => 'multienum',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_INVESTMENT_GEOGRAPHY',
        'width' => '10%',
        'name' => 'investment_geography_c',
      ),
      14 => 
      array (
        'type' => 'enum',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_PREF_LIQUID',
        'width' => '10%',
        'name' => 'pref_liquid_c',
      ),
      15 => 
      array (
        'type' => 'multienum',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_FUND_STRUCTURE',
        'width' => '10%',
        'name' => 'fund_structure_c',
      ),
      16 => 
      array (
        'type' => 'date',
        'default' => true,
        'label' => 'LBL_LAST_SPOKE',
        'width' => '10%',
        'name' => 'last_spoke_c',
      ),
      17 => 
      array (
        'type' => 'datetime',
        'studio' => 
        array (
          'portaleditview' => false,
        ),
        'readonly' => true,
        'label' => 'LBL_DATE_MODIFIED',
        'width' => '10%',
        'default' => true,
        'name' => 'date_modified',
      ),
      18 => 
      array (
        'type' => 'text',
        'studio' => 
        array (
          'listview' => true,
          'detailview' => true,
        ),
        'label' => 'Investor Group Tasks',
        'sortable' => false,
        'width' => '10%',
        'default' => true,
        'name' => 'inv_groups',
      ),
      19 => 
      array (
        'type' => 'text',
        'studio' => 
        array (
          'listview' => true,
          'detailview' => true,
        ),
        'label' => 'All Target Lists',
        'sortable' => false,
        'width' => '10%',
        'default' => true,
        'name' => 'target_links',
      ),
      20 => 
      array (
        'type' => 'bool',
        'default' => true,
        'label' => 'LBL_GO_ON_WEB',
        'width' => '10%',
        'name' => 'go_on_web_c',
      ),
      21 => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_TITLE',
        'width' => '10%',
        'default' => true,
        'name' => 'title',
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