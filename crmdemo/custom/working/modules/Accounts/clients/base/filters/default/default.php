<?php
$viewdefs['Accounts']['base']['filter']['default'] = array (
  'default_filter' => 'all_records',
  'fields' => 
  array (
    'name' => 
    array (
    ),
    'website' => 
    array (
    ),
    'address_city' => 
    array (
      'dbFields' => 
      array (
        0 => 'billing_address_city',
        1 => 'shipping_address_city',
      ),
      'vname' => 'LBL_CITY',
    ),
    'address_state' => 
    array (
      'dbFields' => 
      array (
        0 => 'billing_address_state',
        1 => 'shipping_address_state',
      ),
      'vname' => 'LBL_STATE',
    ),
    'penalty_c' => 
    array (
      'type' => 'bool',
      'default' => true,
      'width' => '10%',
      'name' => 'penalty_c',
      'vname' => 'LBL_PENALTY',
    ),
    'leverage_c' => 
    array (
      'type' => 'bool',
      'default' => true,
      'width' => '10%',
      'name' => 'leverage_c',
      'vname' => 'LBL_LEVERAGE',
    ),
    'lockuptickifyes_c' => 
    array (
      'type' => 'bool',
      'default' => true,
      'width' => '10%',
      'name' => 'lockuptickifyes_c',
      'vname' => 'LBL_LOCKUPTICKIFYES',
    ),
    'companytype_c' => 
    array (
      'type' => 'multienum',
      'default' => true,
      'studio' => 'visible',
      'width' => '10%',
      'name' => 'companytype_c',
      'vname' => 'LBL_COMPANYTYPE',
    ),
    'subscriptionfrequency_c' => 
    array (
      'type' => 'enum',
      'default' => true,
      'studio' => 'visible',
      'sortable' => false,
      'width' => '10%',
      'name' => 'subscriptionfrequency_c',
      'vname' => 'LBL_SUBSCRIPTIONFREQUENCY',
    ),
    'redemptionfrequency_c' => 
    array (
      'type' => 'enum',
      'default' => true,
      'studio' => 'visible',
      'sortable' => false,
      'width' => '10%',
      'name' => 'redemptionfrequency_c',
      'vname' => 'LBL_REDEMPTIONFREQUENCY',
    ),
    'regionallocation_c' => 
    array (
      'type' => 'multienum',
      'default' => true,
      'studio' => 'visible',
      'width' => '10%',
      'name' => 'regionallocation_c',
      'vname' => 'LBL_REGIONALLOCATION',
    ),
    'currentallocationtohf_c' => 
    array (
      'type' => 'enum',
      'default' => true,
      'studio' => 'visible',
      'sortable' => false,
      'width' => '10%',
      'name' => 'currentallocationtohf_c',
      'vname' => 'LBL_CURRENTALLOCATIONTOHF',
    ),
    'targetallocationtohf_c' => 
    array (
      'type' => 'enum',
      'default' => true,
      'studio' => 'visible',
      'sortable' => false,
      'width' => '10%',
      'name' => 'targetallocationtohf_c',
      'vname' => 'LBL_TARGETALLOCATIONTOHF',
    ),
    'currentlocationofinterest_c' => 
    array (
      'type' => 'multienum',
      'default' => true,
      'studio' => 'visible',
      'width' => '10%',
      'name' => 'currentlocationofinterest_c',
      'vname' => 'LBL_CURRENTLOCATIONOFINTEREST',
    ),
    'currentstrategyofinterest_c' => 
    array (
      'type' => 'multienum',
      'default' => true,
      'studio' => 'visible',
      'width' => '10%',
      'name' => 'currentstrategyofinterest_c',
      'vname' => 'LBL_CURRENTSTRATEGYOFINTEREST',
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
