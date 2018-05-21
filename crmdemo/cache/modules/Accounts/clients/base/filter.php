<?php
$clientCache['Accounts']['base']['filter'] = array (
  'default' => 
  array (
    'meta' => 
    array (
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
    ),
  ),
  'basic' => 
  array (
    'meta' => 
    array (
      'create' => true,
      'quicksearch_field' => 
      array (
        0 => 'name',
      ),
      'quicksearch_priority' => 1,
      'quicksearch_split_terms' => false,
      'filters' => 
      array (
        0 => 
        array (
          'id' => 'all_records',
          'name' => 'LBL_LISTVIEW_FILTER_ALL',
          'filter_definition' => 
          array (
          ),
          'editable' => false,
        ),
        1 => 
        array (
          'id' => 'assigned_to_me',
          'name' => 'LBL_ASSIGNED_TO_ME',
          'filter_definition' => 
          array (
            '$owner' => '',
          ),
          'editable' => false,
        ),
        2 => 
        array (
          'id' => 'favorites',
          'name' => 'LBL_FAVORITES',
          'filter_definition' => 
          array (
            '$favorite' => '',
          ),
          'editable' => false,
        ),
        3 => 
        array (
          'id' => 'recently_viewed',
          'name' => 'LBL_RECENTLY_VIEWED',
          'filter_definition' => 
          array (
            '$tracker' => '-7 DAY',
          ),
          'editable' => false,
        ),
        4 => 
        array (
          'id' => 'recently_created',
          'name' => 'LBL_NEW_RECORDS',
          'filter_definition' => 
          array (
            'date_entered' => 
            array (
              '$dateRange' => 'last_7_days',
            ),
          ),
          'editable' => false,
        ),
      ),
    ),
  ),
  '_hash' => '521a097cb928f778e0a6af6ac5f970b4',
);

