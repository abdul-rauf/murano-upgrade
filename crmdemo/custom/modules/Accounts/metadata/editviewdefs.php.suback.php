<?php
// created: 2015-01-11 07:07:58
$viewdefs['Accounts']['EditView'] = array (
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
    'useTabs' => false,
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
    'tabDefs' => 
    array (
      'LBL_ACCOUNT_INFORMATION' => 
      array (
        'newTab' => false,
        'panelDefault' => 'expanded',
      ),
      'LBL_PANEL_ADVANCED' => 
      array (
        'newTab' => false,
        'panelDefault' => 'expanded',
      ),
      'LBL_EDITVIEW_PANEL1' => 
      array (
        'newTab' => false,
        'panelDefault' => 'expanded',
      ),
    ),
  ),
  'panels' => 
  array (
    'lbl_account_information' => 
    array (
      0 => 
      array (
        0 => 
        array (
          'name' => 'name',
          'label' => 'LBL_NAME',
          'displayParams' => 
          array (
            'required' => true,
          ),
        ),
        1 => 
        array (
          'name' => 'phone_office',
          'label' => 'LBL_PHONE_OFFICE',
        ),
      ),
      1 => 
      array (
        0 => 
        array (
          'name' => 'website',
          'type' => 'link',
          'label' => 'LBL_WEBSITE',
        ),
      ),
      2 => 
      array (
        0 => 
        array (
          'name' => 'email1',
          'studio' => 'false',
          'label' => 'LBL_EMAIL',
        ),
      ),
      3 => 
      array (
        0 => 
        array (
          'name' => 'rating',
          'comment' => 'An arbitrary rating for this company for use in comparisons with others',
          'label' => 'LBL_RATING',
        ),
        1 => 
        array (
          'name' => 'phone_fax',
          'label' => 'LBL_PHONE_FAX',
        ),
      ),
      4 => 
      array (
        0 => 
        array (
          'name' => 'billing_address_street',
          'hideLabel' => true,
          'type' => 'address',
          'displayParams' => 
          array (
            'key' => 'billing',
            'rows' => 2,
            'cols' => 30,
            'maxlength' => 150,
          ),
        ),
      ),
      5 => 
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
      6 => 
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
      7 => 
      array (
        0 => 
        array (
          'name' => 'otherinformation_c',
          'studio' => 'visible',
          'label' => 'LBL_OTHERINFORMATION ',
        ),
      ),
      8 => 
      array (
        0 => 
        array (
          'name' => 'assigned_user_name',
          'label' => 'LBL_ASSIGNED_TO',
        ),
        1 => 
        array (
          'name' => 'team_name',
          'displayParams' => 
          array (
            'display' => true,
          ),
        ),
      ),
    ),
    'LBL_PANEL_ADVANCED' => 
    array (
      0 => 
      array (
        0 => 
        array (
          'name' => 'ownership',
          'comment' => '',
          'label' => 'LBL_OWNERSHIP',
        ),
        1 => 
        array (
          'name' => 'aum_c',
          'label' => 'LBL_AUM',
        ),
      ),
      1 => 
      array (
        0 => 
        array (
          'name' => 'fundtype_c',
          'studio' => 'visible',
          'label' => 'LBL_FUNDTYPE',
        ),
        1 => 
        array (
          'name' => 'interest_c',
          'label' => 'LBL_INTEREST',
        ),
      ),
      2 => 
      array (
        0 => 
        array (
          'name' => 'fundmanager_c',
          'label' => 'LBL_FUNDMANAGER ',
        ),
        1 => 
        array (
          'name' => 'fundname_c',
          'label' => 'LBL_FUNDNAME',
        ),
      ),
      3 => 
      array (
        0 => 
        array (
          'name' => 'news_links_c',
          'studio' => 'visible',
          'label' => 'LBL_NEWS_LINKS',
        ),
        1 => 
        array (
          'name' => 'notes_c',
          'studio' => 'visible',
          'label' => 'LBL_NOTES',
        ),
      ),
      4 => 
      array (
        0 => 
        array (
          'name' => 'additionalinformation_c',
          'studio' => 'visible',
          'label' => 'LBL_ADDITIONALINFORMATION',
        ),
      ),
      5 => 
      array (
        0 => 
        array (
          'name' => 'investment_geography_c',
          'studio' => 'visible',
          'label' => 'LBL_INVESTMENT_GEOGRAPHY',
        ),
        1 => 
        array (
          'name' => 'fund_strategy_c',
          'studio' => 'visible',
          'label' => 'LBL_FUND_STRATEGY',
        ),
      ),
      6 => 
      array (
        0 => 
        array (
          'name' => 'minimumtrackrecord_c',
          'label' => 'LBL_MINIMUMTRACKRECORD',
        ),
        1 => 
        array (
          'name' => 'fundsize_c',
          'label' => 'LBL_FUNDSIZE',
        ),
      ),
      7 => 
      array (
        0 => 
        array (
          'name' => 'annualisedreturn_c',
          'label' => 'LBL_ANNUALISEDRETURN',
        ),
        1 => '',
      ),
      8 => 
      array (
        0 => 
        array (
          'name' => 'description',
          'label' => 'LBL_DESCRIPTION',
        ),
      ),
    ),
    'lbl_editview_panel1' => 
    array (
      0 => 
      array (
        0 => 
        array (
          'name' => 'maplocation_c',
          'label' => 'LBL_MAPLOCATION',
        ),
      ),
    ),
  ),
);