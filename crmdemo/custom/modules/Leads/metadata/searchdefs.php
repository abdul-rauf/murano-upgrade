<?php
$searchdefs['Leads'] = 
array (
  'layout' => 
  array (
    'basic_search' => 
    array (
      'search_name' => 
      array (
        'name' => 'search_name',
        'label' => 'LBL_NAME',
        'type' => 'name',
        'default' => true,
        'width' => '10%',
      ),
      'current_user_only' => 
      array (
        'name' => 'current_user_only',
        'label' => 'LBL_CURRENT_USER_FILTER',
        'type' => 'bool',
        'default' => true,
        'width' => '10%',
      ),
      'favorites_only' => 
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
      'account_name' => 
      array (
        'name' => 'account_name',
        'default' => true,
        'width' => '10%',
      ),
      'first_name' => 
      array (
        'name' => 'first_name',
        'default' => true,
        'width' => '10%',
      ),
      'last_name' => 
      array (
        'name' => 'last_name',
        'default' => true,
        'width' => '10%',
      ),
      'primary_address_city' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_PRIMARY_ADDRESS_CITY',
        'width' => '10%',
        'default' => true,
        'name' => 'primary_address_city',
      ),
      'primary_address_state' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_PRIMARY_ADDRESS_STATE',
        'width' => '10%',
        'default' => true,
        'name' => 'primary_address_state',
      ),
      'primary_address_country' => 
      array (
        'name' => 'primary_address_country',
        'label' => 'LBL_COUNTRY',
        'type' => 'name',
        'options' => 'countries_dom',
        'default' => true,
        'width' => '10%',
      ),
      'continent_c' => 
      array (
        'type' => 'enum',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_CONTINENT',
        'width' => '10%',
        'name' => 'continent_c',
      ),
      'investor_typ_c' => 
      array (
        'type' => 'multienum',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_INVESTOR_TYP',
        'width' => '10%',
        'name' => 'investor_typ_c',
      ),
      'assigned_user_id' => 
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
      'status' => 
      array (
        'name' => 'status',
        'default' => true,
        'width' => '10%',
      ),
      'investor_rating_c' => 
      array (
        'type' => 'enum',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_INVESTOR_RATING',
        'sortable' => false,
        'width' => '10%',
        'name' => 'investor_rating_c',
      ),
      'fund_type_c' => 
      array (
        'type' => 'multienum',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_FUND_TYPE',
        'width' => '10%',
        'name' => 'fund_type_c',
      ),
      'spec_strat_pref_c' => 
      array (
        'type' => 'multienum',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_SPEC_STRAT_PREF',
        'width' => '10%',
        'name' => 'spec_strat_pref_c',
      ),
      'investment_geography_c' => 
      array (
        'type' => 'multienum',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_INVESTMENT_GEOGRAPHY',
        'width' => '10%',
        'name' => 'investment_geography_c',
      ),
      'pref_liquid_c' => 
      array (
        'type' => 'enum',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_PREF_LIQUID',
        'width' => '10%',
        'name' => 'pref_liquid_c',
      ),
      'fund_structure_c' => 
      array (
        'type' => 'multienum',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_FUND_STRUCTURE',
        'width' => '10%',
        'name' => 'fund_structure_c',
      ),
      'last_spoke_c' => 
      array (
        'type' => 'date',
        'default' => true,
        'label' => 'LBL_LAST_SPOKE',
        'width' => '10%',
        'name' => 'last_spoke_c',
      ),
      'date_modified' => 
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
      'inv_groups' => 
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
      'target_links' => 
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
      'go_on_web_c' => 
      array (
        'type' => 'bool',
        'default' => true,
        'label' => 'LBL_GO_ON_WEB',
        'width' => '10%',
        'name' => 'go_on_web_c',
      ),
      'title' => 
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
