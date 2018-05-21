<?php
// created: 2015-02-22 18:44:41
$viewdefs['Accounts']['QuickCreate'] = array (
  'templateMeta' => 
  array (
    'form' => 
    array (
      'buttons' => 
      array (
        0 => 'SAVE',
        1 => 'CANCEL',
      ),
    ),
    'maxColumns' => '2',
    'widths' => 
    array (
      0 => 
      array (
        'label' => '10',
        'field' => '30',
      ),
      1 => 
      array (
        'label' => '10',
        'field' => '30',
      ),
    ),
    'includes' => 
    array (
      0 => 
      array (
        'file' => 'modules/Accounts/Account.js',
      ),
    ),
    'useTabs' => false,
    'tabDefs' => 
    array (
      'DEFAULT' => 
      array (
        'newTab' => false,
        'panelDefault' => 'expanded',
      ),
    ),
  ),
  'panels' => 
  array (
    'default' => 
    array (
      0 => 
      array (
        0 => 
        array (
          'name' => 'name',
          'displayParams' => 
          array (
            'required' => true,
          ),
        ),
      ),
      1 => 
      array (
        0 => 
        array (
          'name' => 'website',
        ),
        1 => 
        array (
          'name' => 'phone_office',
        ),
      ),
      2 => 
      array (
        0 => 
        array (
          'name' => 'email1',
        ),
        1 => 
        array (
          'name' => 'billing_address_street',
          'comment' => 'The street address used for billing address',
          'label' => 'LBL_BILLING_ADDRESS_STREET',
        ),
      ),
      3 => 
      array (
        0 => 
        array (
          'name' => 'billing_address_city',
          'comment' => 'The city used for billing address',
          'label' => 'LBL_BILLING_ADDRESS_CITY',
        ),
        1 => 
        array (
          'name' => 'billing_address_state',
          'comment' => 'The state used for billing address',
          'label' => 'LBL_BILLING_ADDRESS_STATE',
        ),
      ),
      4 => 
      array (
        0 => 
        array (
          'name' => 'billing_address_postalcode',
          'comment' => 'The postal code used for billing address',
          'label' => 'LBL_BILLING_ADDRESS_POSTALCODE',
        ),
        1 => 
        array (
          'name' => 'billing_address_country',
          'comment' => 'The country used for the billing address',
          'label' => 'LBL_BILLING_ADDRESS_COUNTRY',
        ),
      ),
      5 => 
      array (
        0 => 
        array (
          'name' => 'phone_alternate',
          'comment' => 'An alternate phone number',
          'label' => 'LBL_PHONE_ALT',
        ),
        1 => 
        array (
          'name' => 'otherinformation_c',
          'studio' => 'visible',
          'label' => 'LBL_OTHERINFORMATION ',
        ),
      ),
      6 => 
      array (
        0 => 
        array (
          'name' => 'fund_strategy_c',
          'studio' => 'visible',
          'label' => 'LBL_FUND_STRATEGY',
        ),
        1 => 
        array (
          'name' => 'aum_c',
          'label' => 'LBL_AUM',
        ),
      ),
      7 => 
      array (
        0 => 
        array (
          'name' => 'description',
          'comment' => 'Full text of the note',
          'label' => 'LBL_DESCRIPTION',
        ),
      ),
      8 => 
      array (
        0 => 
        array (
          'name' => 'interest_c',
          'label' => 'LBL_INTEREST',
        ),
        1 => 
        array (
          'name' => 'created_by_name',
          'label' => 'LBL_CREATED',
        ),
      ),
      9 => 
      array (
        0 => 
        array (
          'name' => 'assigned_user_name',
        ),
        1 => 
        array (
          'name' => 'team_name',
        ),
      ),
    ),
  ),
);