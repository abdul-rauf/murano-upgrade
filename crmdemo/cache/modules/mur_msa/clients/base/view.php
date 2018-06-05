<?php
$clientCache['mur_msa']['base']['view'] = array (
  'record' => 
  array (
    'meta' => 
    array (
      'panels' => 
      array (
        0 => 
        array (
          'name' => 'panel_header',
          'label' => 'LBL_RECORD_HEADER',
          'header' => true,
          'fields' => 
          array (
            0 => 
            array (
              'name' => 'picture',
              'type' => 'avatar',
              'width' => 42,
              'height' => 42,
              'dismiss_label' => true,
              'readonly' => true,
            ),
            1 => 'name',
            2 => 
            array (
              'name' => 'favorite',
              'label' => 'LBL_FAVORITE',
              'type' => 'favorite',
              'readonly' => true,
              'dismiss_label' => true,
            ),
            3 => 
            array (
              'name' => 'follow',
              'label' => 'LBL_FOLLOW',
              'type' => 'follow',
              'readonly' => true,
              'dismiss_label' => true,
            ),
          ),
        ),
        1 => 
        array (
          'name' => 'panel_body',
          'label' => 'LBL_RECORD_BODY',
          'columns' => 2,
          'labelsOnTop' => true,
          'placeholders' => true,
          'newTab' => false,
          'panelDefault' => 'expanded',
          'fields' => 
          array (
            0 => 
            array (
              'name' => 'last_name',
              'label' => 'LBL_LAST_NAME',
            ),
            1 => 
            array (
              'name' => 'lic_key_c',
              'label' => 'LBL_LIC_KEY',
            ),
            2 => 'website',
            3 => 'phone_office',
            4 => 
            array (
              'name' => 'act_date',
              'label' => 'LBL_ACT_DATE',
            ),
            5 => 
            array (
              'name' => 'expiry_date',
              'label' => 'LBL_EXPIRY_DATE',
            ),
            6 => 
            array (
              'name' => 'email',
              'span' => 12,
            ),
          ),
        ),
        2 => 
        array (
          'name' => 'panel_hidden',
          'label' => 'LBL_SHOW_MORE',
          'hide' => true,
          'columns' => 2,
          'labelsOnTop' => true,
          'placeholders' => true,
          'newTab' => false,
          'panelDefault' => 'expanded',
          'fields' => 
          array (
            0 => 'twitter',
            1 => 
            array (
              'name' => 'googleplus',
              'comment' => 'The Google Plus name of the company',
              'label' => 'LBL_GOOGLEPLUS',
            ),
            2 => 
            array (
              'name' => 'facebook',
              'comment' => 'The facebook name of the company',
              'label' => 'LBL_FACEBOOK',
              'span' => 12,
            ),
            3 => 'assigned_user_name',
            4 => 
            array (
              'name' => 'date_entered_by',
              'readonly' => true,
              'type' => 'fieldset',
              'label' => 'LBL_DATE_ENTERED',
              'fields' => 
              array (
                0 => 
                array (
                  'name' => 'date_entered',
                ),
                1 => 
                array (
                  'type' => 'label',
                  'default_value' => 'LBL_BY',
                ),
                2 => 
                array (
                  'name' => 'created_by_name',
                ),
              ),
            ),
            5 => 
            array (
              'name' => 'date_modified_by',
              'readonly' => true,
              'type' => 'fieldset',
              'label' => 'LBL_DATE_MODIFIED',
              'fields' => 
              array (
                0 => 
                array (
                  'name' => 'date_modified',
                ),
                1 => 
                array (
                  'type' => 'label',
                  'default_value' => 'LBL_BY',
                ),
                2 => 
                array (
                  'name' => 'modified_by_name',
                ),
              ),
            ),
          ),
        ),
      ),
      'templateMeta' => 
      array (
        'useTabs' => false,
      ),
    ),
  ),
  'list' => 
  array (
    'meta' => 
    array (
      'panels' => 
      array (
        0 => 
        array (
          'label' => 'LBL_PANEL_DEFAULT',
          'fields' => 
          array (
            0 => 
            array (
              'name' => 'name',
              'label' => 'LBL_ACCOUNT_NAME',
              'link' => true,
              'default' => true,
              'enabled' => true,
              'width' => '40%',
            ),
            1 => 
            array (
              'name' => 'last_name',
              'label' => 'LBL_LAST_NAME',
              'enabled' => true,
              'width' => '10%',
              'default' => true,
            ),
            2 => 
            array (
              'name' => 'act_date',
              'label' => 'LBL_ACT_DATE',
              'enabled' => true,
              'width' => '10%',
              'default' => true,
            ),
            3 => 
            array (
              'name' => 'expiry_date',
              'label' => 'LBL_EXPIRY_DATE',
              'enabled' => true,
              'width' => '10%',
              'default' => true,
            ),
            4 => 
            array (
              'name' => 'email',
              'label' => 'LBL_ANY_EMAIL',
              'enabled' => true,
              'sortable' => false,
              'width' => '10%',
              'default' => true,
            ),
            5 => 
            array (
              'name' => 'phone_office',
              'label' => 'LBL_PHONE',
              'default' => true,
              'enabled' => true,
              'width' => '10%',
            ),
            6 => 
            array (
              'name' => 'mur_msa_type',
              'label' => 'LBL_TYPE',
              'default' => false,
              'enabled' => true,
              'width' => '10%',
            ),
            7 => 
            array (
              'name' => 'billing_address_city',
              'label' => 'LBL_CITY',
              'default' => false,
              'enabled' => true,
              'width' => '10%',
            ),
            8 => 
            array (
              'name' => 'assigned_user_name',
              'label' => 'LBL_ASSIGNED_TO_NAME',
              'default' => false,
              'enabled' => true,
              'width' => '2%',
            ),
            9 => 
            array (
              'name' => 'industry',
              'label' => 'LBL_INDUSTRY',
              'default' => false,
              'enabled' => true,
              'width' => '10%',
            ),
            10 => 
            array (
              'name' => 'team_name',
              'label' => 'LBL_TEAM',
              'default' => false,
              'enabled' => true,
              'width' => '2%',
            ),
            11 => 
            array (
              'name' => 'annual_revenue',
              'label' => 'LBL_ANNUAL_REVENUE',
              'default' => false,
              'enabled' => true,
              'width' => '10%',
            ),
            12 => 
            array (
              'name' => 'phone_fax',
              'label' => 'LBL_PHONE_FAX',
              'default' => false,
              'enabled' => true,
              'width' => '10%',
            ),
            13 => 
            array (
              'name' => 'billing_address_street',
              'label' => 'LBL_BILLING_ADDRESS_STREET',
              'default' => false,
              'enabled' => true,
              'width' => '15%',
            ),
            14 => 
            array (
              'name' => 'billing_address_state',
              'label' => 'LBL_BILLING_ADDRESS_STATE',
              'default' => false,
              'enabled' => true,
              'width' => '7%',
            ),
            15 => 
            array (
              'name' => 'billing_address_postalcode',
              'label' => 'LBL_BILLING_ADDRESS_POSTALCODE',
              'default' => false,
              'enabled' => true,
              'width' => '10%',
            ),
            16 => 
            array (
              'name' => 'billing_address_country',
              'label' => 'LBL_BILLING_ADDRESS_COUNTRY',
              'default' => false,
              'enabled' => true,
              'width' => '10%',
            ),
            17 => 
            array (
              'name' => 'shipping_address_street',
              'label' => 'LBL_SHIPPING_ADDRESS_STREET',
              'default' => false,
              'enabled' => true,
              'width' => '15%',
            ),
            18 => 
            array (
              'name' => 'shipping_address_city',
              'label' => 'LBL_SHIPPING_ADDRESS_CITY',
              'default' => false,
              'enabled' => true,
              'width' => '10%',
            ),
            19 => 
            array (
              'name' => 'shipping_address_state',
              'label' => 'LBL_SHIPPING_ADDRESS_STATE',
              'default' => false,
              'enabled' => true,
              'width' => '7%',
            ),
            20 => 
            array (
              'name' => 'shipping_address_postalcode',
              'label' => 'LBL_SHIPPING_ADDRESS_POSTALCODE',
              'default' => false,
              'enabled' => true,
              'width' => '10%',
            ),
            21 => 
            array (
              'name' => 'shipping_address_country',
              'label' => 'LBL_SHIPPING_ADDRESS_COUNTRY',
              'default' => false,
              'enabled' => true,
              'width' => '10%',
            ),
            22 => 
            array (
              'name' => 'phone_alternate',
              'label' => 'LBL_PHONE_ALT',
              'default' => false,
              'enabled' => true,
              'width' => '10%',
            ),
            23 => 
            array (
              'name' => 'website',
              'label' => 'LBL_WEBSITE',
              'default' => false,
              'enabled' => true,
              'width' => '10%',
            ),
            24 => 
            array (
              'name' => 'ownership',
              'label' => 'LBL_OWNERSHIP',
              'default' => false,
              'enabled' => true,
              'width' => '10%',
            ),
            25 => 
            array (
              'name' => 'employees',
              'label' => 'LBL_EMPLOYEES',
              'default' => false,
              'enabled' => true,
              'width' => '10%',
            ),
            26 => 
            array (
              'name' => 'ticker_symbol',
              'label' => 'LBL_TICKER_SYMBOL',
              'default' => false,
              'enabled' => true,
              'width' => '10%',
            ),
          ),
        ),
      ),
    ),
  ),
  'massupdate' => 
  array (
    'meta' => 
    array (
      'buttons' => 
      array (
        0 => 
        array (
          'type' => 'button',
          'value' => 'cancel',
          'css_class' => 'btn-link btn-invisible cancel_button',
          'label' => 'LBL_CANCEL_BUTTON_LABEL',
          'primary' => false,
        ),
        1 => 
        array (
          'name' => 'update_button',
          'type' => 'button',
          'label' => 'LBL_UPDATE',
          'acl_action' => 'massupdate',
          'css_class' => 'btn-primary',
          'primary' => true,
        ),
      ),
      'panels' => 
      array (
        0 => 
        array (
          'fields' => 
          array (
          ),
        ),
      ),
    ),
  ),
  'selection-list' => 
  array (
    'meta' => 
    array (
      'panels' => 
      array (
        0 => 
        array (
          'label' => 'LBL_PANEL_1',
          'fields' => 
          array (
            0 => 
            array (
              'name' => 'name',
              'label' => 'LBL_NAME',
              'default' => true,
              'enabled' => true,
              'link' => true,
            ),
            1 => 
            array (
              'name' => 'team_name',
              'label' => 'LBL_TEAM',
              'width' => 9,
              'default' => true,
              'enabled' => true,
            ),
            2 => 
            array (
              'name' => 'assigned_user_name',
              'label' => 'LBL_ASSIGNED_TO_NAME',
              'width' => 9,
              'default' => true,
              'enabled' => true,
              'link' => true,
            ),
            3 => 
            array (
              'label' => 'LBL_DATE_MODIFIED',
              'enabled' => true,
              'default' => true,
              'name' => 'date_modified',
              'readonly' => true,
            ),
          ),
        ),
      ),
      'orderBy' => 
      array (
        'field' => 'date_modified',
        'direction' => 'desc',
      ),
    ),
  ),
  'subpanel-list' => 
  array (
    'meta' => 
    array (
      'panels' => 
      array (
        0 => 
        array (
          'name' => 'panel_header',
          'label' => 'LBL_PANEL_1',
          'fields' => 
          array (
            0 => 
            array (
              'label' => 'LBL_NAME',
              'enabled' => true,
              'default' => true,
              'name' => 'name',
            ),
            1 => 
            array (
              'label' => 'LBL_INDUSTRY',
              'enabled' => true,
              'default' => true,
              'name' => 'industry',
            ),
            2 => 
            array (
              'label' => 'LBL_PHONE_OFFICE',
              'enabled' => true,
              'default' => true,
              'name' => 'phone_office',
            ),
            3 => 
            array (
              'name' => 'assigned_user_name',
              'target_record_key' => 'assigned_user_id',
              'target_module' => 'Employees',
              'label' => 'LBL_ASSIGNED_USER',
              'enabled' => true,
              'default' => true,
            ),
          ),
        ),
      ),
    ),
  ),
  'twitter' => 
  array (
    'meta' => 
    array (
      'dashlets' => 
      array (
        0 => 
        array (
          'name' => 'LBL_TWITTER_NAME',
          'description' => 'LBL_TWITTER_DESCRIPTION',
          'config' => 
          array (
            'limit' => '20',
          ),
          'preview' => 
          array (
            'title' => 'LBL_TWITTER_MY_ACCOUNT',
            'twitter' => 'sugarcrm',
            'limit' => '3',
          ),
        ),
      ),
      'config' => 
      array (
        'fields' => 
        array (
          0 => 
          array (
            'name' => 'limit',
            'label' => 'LBL_TWITTER_DISPLAY_ROWS',
            'type' => 'enum',
            'options' => 
            array (
              5 => 5,
              10 => 10,
              15 => 15,
              20 => 20,
              50 => 50,
            ),
          ),
        ),
      ),
    ),
  ),
  '_hash' => 'ef821b5531193fdfd90c82603e7bd3bf',
);

