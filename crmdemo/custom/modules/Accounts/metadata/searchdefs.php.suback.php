<?php
// created: 2015-01-11 07:07:58
$searchdefs['Accounts'] = array (
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
  'layout' => 
  array (
    'basic_search' => 
    array (
      0 => 
      array (
        'name' => 'name',
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
    ),
    'advanced_search' => 
    array (
      0 => 
      array (
        'name' => 'name',
        'default' => true,
        'width' => '10%',
      ),
      1 => 
      array (
        'name' => 'website',
        'default' => true,
        'width' => '10%',
      ),
      2 => 
      array (
        'name' => 'address_city',
        'label' => 'LBL_CITY',
        'type' => 'name',
        'default' => true,
        'width' => '10%',
      ),
      3 => 
      array (
        'name' => 'address_state',
        'label' => 'LBL_STATE',
        'type' => 'name',
        'default' => true,
        'width' => '10%',
      ),
      4 => 
      array (
        'type' => 'bool',
        'default' => true,
        'label' => 'LBL_PENALTY',
        'width' => '10%',
        'name' => 'penalty_c',
      ),
      5 => 
      array (
        'type' => 'bool',
        'default' => true,
        'label' => 'LBL_LEVERAGE',
        'width' => '10%',
        'name' => 'leverage_c',
      ),
      6 => 
      array (
        'type' => 'bool',
        'default' => true,
        'label' => 'LBL_LOCKUPTICKIFYES',
        'width' => '10%',
        'name' => 'lockuptickifyes_c',
      ),
      7 => 
      array (
        'type' => 'multienum',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_COMPANYTYPE',
        'width' => '10%',
        'name' => 'companytype_c',
      ),
      8 => 
      array (
        'type' => 'enum',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_SUBSCRIPTIONFREQUENCY',
        'sortable' => false,
        'width' => '10%',
        'name' => 'subscriptionfrequency_c',
      ),
      9 => 
      array (
        'type' => 'enum',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_REDEMPTIONFREQUENCY',
        'sortable' => false,
        'width' => '10%',
        'name' => 'redemptionfrequency_c',
      ),
      10 => 
      array (
        'type' => 'multienum',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_REGIONALLOCATION',
        'width' => '10%',
        'name' => 'regionallocation_c',
      ),
      11 => 
      array (
        'type' => 'enum',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_CURRENTALLOCATIONTOHF',
        'sortable' => false,
        'width' => '10%',
        'name' => 'currentallocationtohf_c',
      ),
      12 => 
      array (
        'type' => 'enum',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_TARGETALLOCATIONTOHF',
        'sortable' => false,
        'width' => '10%',
        'name' => 'targetallocationtohf_c',
      ),
      13 => 
      array (
        'type' => 'multienum',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_CURRENTLOCATIONOFINTEREST',
        'width' => '10%',
        'name' => 'currentlocationofinterest_c',
      ),
      14 => 
      array (
        'type' => 'multienum',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_CURRENTSTRATEGYOFINTEREST',
        'width' => '10%',
        'name' => 'currentstrategyofinterest_c',
      ),
    ),
  ),
);