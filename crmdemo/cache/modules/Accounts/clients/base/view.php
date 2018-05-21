<?php
$clientCache['Accounts']['base']['view'] = array (
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
              'width' => '20%',
              'link' => true,
              'label' => 'LBL_LIST_ACCOUNT_NAME',
              'enabled' => true,
              'default' => true,
            ),
            1 => 
            array (
              'name' => 'billing_address_street',
              'default' => true,
              'enabled' => true,
              'width' => '15%',
              'label' => 'LBL_BILLING_ADDRESS_STREET',
            ),
            2 => 
            array (
              'name' => 'billing_address_city',
              'width' => '10%',
              'label' => 'LBL_LIST_CITY',
              'enabled' => true,
              'default' => true,
            ),
            3 => 
            array (
              'name' => 'billing_address_country',
              'width' => '10%',
              'label' => 'LBL_BILLING_ADDRESS_COUNTRY',
              'enabled' => true,
              'default' => true,
            ),
            4 => 
            array (
              'name' => 'phone_office',
              'width' => '10%',
              'label' => 'LBL_LIST_PHONE',
              'enabled' => true,
              'default' => true,
            ),
            5 => 
            array (
              'name' => 'billing_address_postalcode',
              'default' => true,
              'enabled' => true,
              'width' => '10%',
              'label' => 'LBL_BILLING_ADDRESS_POSTALCODE',
            ),
            6 => 
            array (
              'name' => 'email1',
              'default' => true,
              'enabled' => true,
              'width' => '15%',
              'label' => 'LBL_EMAIL_ADDRESS',
              'sortable' => false,
              'link' => true,
              'customCode' => '{$EMAIL1_LINK}{$EMAIL1}</a>',
            ),
            7 => 
            array (
              'name' => 'assigned_user_name',
              'width' => '10%',
              'label' => 'LBL_LIST_ASSIGNED_USER',
              'id' => 'ASSIGNED_USER_ID',
              'enabled' => true,
              'default' => true,
            ),
            8 => 
            array (
              'name' => 'team_name',
              'default' => true,
              'enabled' => true,
              'width' => '10%',
              'label' => 'LBL_LIST_TEAM',
            ),
            9 => 
            array (
              'name' => 'aum_c',
              'default' => true,
              'enabled' => true,
              'type' => 'varchar',
              'label' => 'LBL_AUM',
              'width' => '10%',
            ),
            10 => 
            array (
              'name' => 'fundtype_c',
              'default' => true,
              'enabled' => true,
              'type' => 'enum',
              'studio' => 'visible',
              'label' => 'LBL_FUNDTYPE',
              'sortable' => false,
              'width' => '10%',
            ),
            11 => 
            array (
              'name' => 'otherinformation_c',
              'default' => true,
              'enabled' => true,
              'type' => 'text',
              'studio' => 'visible',
              'label' => 'LBL_OTHERINFORMATION ',
              'sortable' => false,
              'width' => '10%',
            ),
            12 => 
            array (
              'name' => 'description',
              'default' => false,
              'enabled' => true,
              'type' => 'text',
              'label' => 'LBL_DESCRIPTION',
              'sortable' => false,
              'width' => '10%',
            ),
            13 => 
            array (
              'name' => 'ownership',
              'default' => false,
              'enabled' => true,
              'width' => '10%',
              'label' => 'LBL_OWNERSHIP',
            ),
            14 => 
            array (
              'name' => 'additionalinformation_c',
              'default' => false,
              'enabled' => true,
              'type' => 'text',
              'studio' => 'visible',
              'label' => 'LBL_ADDITIONALINFORMATION',
              'sortable' => false,
              'width' => '10%',
            ),
            15 => 
            array (
              'name' => 'billing_address_state',
              'default' => false,
              'enabled' => true,
              'width' => '7%',
              'label' => 'LBL_BILLING_ADDRESS_STATE',
            ),
            16 => 
            array (
              'name' => 'account_type',
              'default' => false,
              'enabled' => true,
              'width' => '10%',
              'label' => 'LBL_TYPE',
            ),
            17 => 
            array (
              'name' => 'industry',
              'default' => false,
              'enabled' => true,
              'width' => '10%',
              'label' => 'LBL_INDUSTRY',
            ),
            18 => 
            array (
              'name' => 'annual_revenue',
              'default' => false,
              'enabled' => true,
              'width' => '10%',
              'label' => 'LBL_ANNUAL_REVENUE',
            ),
            19 => 
            array (
              'name' => 'phone_fax',
              'default' => false,
              'enabled' => true,
              'width' => '10%',
              'label' => 'LBL_PHONE_FAX',
            ),
            20 => 
            array (
              'name' => 'shipping_address_street',
              'default' => false,
              'enabled' => true,
              'width' => '15%',
              'label' => 'LBL_SHIPPING_ADDRESS_STREET',
            ),
            21 => 
            array (
              'name' => 'shipping_address_city',
              'default' => false,
              'enabled' => true,
              'width' => '10%',
              'label' => 'LBL_SHIPPING_ADDRESS_CITY',
            ),
            22 => 
            array (
              'name' => 'shipping_address_state',
              'default' => false,
              'enabled' => true,
              'width' => '7%',
              'label' => 'LBL_SHIPPING_ADDRESS_STATE',
            ),
            23 => 
            array (
              'name' => 'shipping_address_postalcode',
              'default' => false,
              'enabled' => true,
              'width' => '10%',
              'label' => 'LBL_SHIPPING_ADDRESS_POSTALCODE',
            ),
            24 => 
            array (
              'name' => 'shipping_address_country',
              'default' => false,
              'enabled' => true,
              'width' => '10%',
              'label' => 'LBL_SHIPPING_ADDRESS_COUNTRY',
            ),
            25 => 
            array (
              'name' => 'rating',
              'default' => false,
              'enabled' => true,
              'width' => '10%',
              'label' => 'LBL_RATING',
            ),
            26 => 
            array (
              'name' => 'phone_alternate',
              'default' => false,
              'enabled' => true,
              'width' => '10%',
              'label' => 'LBL_OTHER_PHONE',
            ),
            27 => 
            array (
              'name' => 'website',
              'default' => false,
              'enabled' => true,
              'width' => '10%',
              'label' => 'LBL_WEBSITE',
            ),
            28 => 
            array (
              'name' => 'maplocation_c',
              'default' => false,
              'enabled' => true,
              'type' => 'iframe',
              'label' => 'LBL_MAPLOCATION',
              'width' => '10%',
            ),
            29 => 
            array (
              'name' => 'interest_c',
              'default' => false,
              'enabled' => true,
              'type' => 'bool',
              'label' => 'LBL_INTEREST',
              'width' => '10%',
            ),
            30 => 
            array (
              'name' => 'fundmanager_c',
              'default' => false,
              'enabled' => true,
              'type' => 'varchar',
              'label' => 'LBL_FUNDMANAGER ',
              'width' => '10%',
            ),
            31 => 
            array (
              'name' => 'fundname_c',
              'default' => false,
              'enabled' => true,
              'type' => 'varchar',
              'label' => 'LBL_FUNDNAME',
              'width' => '10%',
            ),
            32 => 
            array (
              'name' => 'date_modified',
              'default' => false,
              'enabled' => true,
              'width' => '5%',
              'label' => 'LBL_DATE_MODIFIED',
            ),
            33 => 
            array (
              'name' => 'date_entered',
              'type' => 'datetime',
              'label' => 'LBL_DATE_ENTERED',
              'enabled' => true,
              'width' => '5%',
              'default' => false,
              'readonly' => true,
            ),
            34 => 
            array (
              'name' => 'created_by_name',
              'default' => false,
              'enabled' => true,
              'width' => '10%',
              'label' => 'LBL_CREATED',
            ),
            35 => 
            array (
              'name' => 'modified_by_name',
              'default' => false,
              'enabled' => true,
              'width' => '10%',
              'label' => 'LBL_MODIFIED',
            ),
          ),
        ),
      ),
    ),
  ),
  'record' => 
  array (
    'meta' => 
    array (
      'buttons' => 
      array (
        0 => 
        array (
          'type' => 'button',
          'name' => 'cancel_button',
          'label' => 'LBL_CANCEL_BUTTON_LABEL',
          'css_class' => 'btn-invisible btn-link',
          'showOn' => 'edit',
        ),
        1 => 
        array (
          'type' => 'rowaction',
          'event' => 'button:save_button:click',
          'name' => 'save_button',
          'label' => 'LBL_SAVE_BUTTON_LABEL',
          'css_class' => 'btn btn-primary',
          'showOn' => 'edit',
          'acl_action' => 'edit',
        ),
        2 => 
        array (
          'type' => 'actiondropdown',
          'name' => 'main_dropdown',
          'primary' => true,
          'showOn' => 'view',
          'buttons' => 
          array (
            0 => 
            array (
              'type' => 'rowaction',
              'event' => 'button:edit_button:click',
              'name' => 'edit_button',
              'label' => 'LBL_EDIT_BUTTON_LABEL',
              'acl_action' => 'edit',
            ),
            1 => 
            array (
              'type' => 'shareaction',
              'name' => 'share',
              'label' => 'LBL_RECORD_SHARE_BUTTON',
              'acl_action' => 'view',
            ),
            2 => 
            array (
              'type' => 'pdfaction',
              'name' => 'download-pdf',
              'label' => 'LBL_PDF_VIEW',
              'action' => 'download',
              'acl_action' => 'view',
            ),
            3 => 
            array (
              'type' => 'pdfaction',
              'name' => 'email-pdf',
              'label' => 'LBL_PDF_EMAIL',
              'action' => 'email',
              'acl_action' => 'view',
            ),
            4 => 
            array (
              'type' => 'divider',
            ),
            5 => 
            array (
              'type' => 'rowaction',
              'event' => 'button:find_duplicates_button:click',
              'name' => 'find_duplicates_button',
              'label' => 'LBL_DUP_MERGE',
              'acl_action' => 'edit',
            ),
            6 => 
            array (
              'type' => 'rowaction',
              'event' => 'button:duplicate_button:click',
              'name' => 'duplicate_button',
              'label' => 'LBL_DUPLICATE_BUTTON_LABEL',
              'acl_module' => 'Accounts',
              'acl_action' => 'create',
            ),
            7 => 
            array (
              'type' => 'rowaction',
              'event' => 'button:historical_summary_button:click',
              'name' => 'historical_summary_button',
              'label' => 'LBL_HISTORICAL_SUMMARY',
              'acl_action' => 'view',
            ),
            8 => 
            array (
              'type' => 'rowaction',
              'event' => 'button:audit_button:click',
              'name' => 'audit_button',
              'label' => 'LNK_VIEW_CHANGE_LOG',
              'acl_action' => 'view',
            ),
            9 => 
            array (
              'type' => 'divider',
            ),
            10 => 
            array (
              'type' => 'rowaction',
              'event' => 'button:delete_button:click',
              'name' => 'delete_button',
              'label' => 'LBL_DELETE_BUTTON_LABEL',
              'acl_action' => 'delete',
            ),
          ),
        ),
        3 => 
        array (
          'name' => 'sidebar_toggle',
          'type' => 'sidebartoggle',
        ),
      ),
      'panels' => 
      array (
        0 => 
        array (
          'name' => 'panel_header',
          'label' => 'LBL_PANEL_HEADER',
          'header' => true,
          'fields' => 
          array (
            0 => 
            array (
              'name' => 'picture',
              'type' => 'avatar',
              'size' => 'large',
              'dismiss_label' => true,
              'readonly' => true,
            ),
            1 => 'name',
            2 => 
            array (
              'name' => 'favorite',
              'label' => 'LBL_FAVORITE',
              'type' => 'favorite',
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
          'labels' => true,
          'labelsOnTop' => true,
          'placeholders' => true,
          'fields' => 
          array (
            0 => 
            array (
              'name' => 'phone_office',
              'span' => 12,
            ),
            1 => 
            array (
              'name' => 'website',
              'span' => 12,
            ),
            2 => 'email',
            3 => 
            array (
              'name' => 'phone_alternate',
              'label' => 'LBL_OTHER_PHONE',
            ),
            4 => 
            array (
              'name' => 'billing_address',
              'type' => 'fieldset',
              'css_class' => 'address',
              'label' => 'LBL_BILLING_ADDRESS',
              'fields' => 
              array (
                0 => 
                array (
                  'name' => 'billing_address_street',
                  'css_class' => 'address_street',
                  'placeholder' => 'LBL_BILLING_ADDRESS_STREET',
                ),
                1 => 
                array (
                  'name' => 'billing_address_city',
                  'css_class' => 'address_city',
                  'placeholder' => 'LBL_BILLING_ADDRESS_CITY',
                ),
                2 => 
                array (
                  'name' => 'billing_address_state',
                  'css_class' => 'address_state',
                  'placeholder' => 'LBL_BILLING_ADDRESS_STATE',
                ),
                3 => 
                array (
                  'name' => 'billing_address_postalcode',
                  'css_class' => 'address_zip',
                  'placeholder' => 'LBL_BILLING_ADDRESS_POSTALCODE',
                ),
                4 => 
                array (
                  'name' => 'billing_address_country',
                  'css_class' => 'address_country',
                  'placeholder' => 'LBL_BILLING_ADDRESS_COUNTRY',
                ),
              ),
              'span' => 12,
            ),
            5 => 
            array (
              'name' => 'otherinformation_c',
              'studio' => 'visible',
              'label' => 'LBL_OTHERINFORMATION ',
              'span' => 12,
            ),
            6 => 
            array (
              'name' => 'additionalinformation_c',
              'studio' => 'visible',
              'label' => 'LBL_ADDITIONALINFORMATION',
              'span' => 12,
            ),
            7 => 
            array (
              'name' => 'news_links_c',
              'studio' => 'visible',
              'label' => 'LBL_NEWS_LINKS',
              'span' => 12,
            ),
            8 => 
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
            9 => 
            array (
              'name' => 'modified_by_name',
              'readonly' => true,
              'label' => 'LBL_MODIFIED',
            ),
            10 => 
            array (
              'name' => 'team_name',
              'span' => 12,
            ),
            11 => 
            array (
              'name' => 'insideview_account_c',
              'studio' => 'visible',
              'label' => 'LBL_INSIDEVIEW',
              'span' => 12,
            ),
            12 => 'twitter',
            13 => 
            array (
              'name' => 'duns_num',
              'readonly' => true,
            ),
          ),
          'newTab' => true,
          'panelDefault' => 'expanded',
        ),
        2 => 
        array (
          'name' => 'panel_hidden',
          'label' => 'LBL_RECORD_SHOWMORE',
          'columns' => 2,
          'labels' => true,
          'labelsOnTop' => true,
          'placeholders' => true,
          'hide' => true,
          'fields' => 
          array (
            0 => 'ownership',
            1 => 
            array (
              'name' => 'aum_c',
              'label' => 'LBL_AUM',
            ),
            2 => 
            array (
              'name' => 'investment_geography_c',
              'studio' => 'visible',
              'label' => 'LBL_INVESTMENT_GEOGRAPHY',
            ),
            3 => 
            array (
              'name' => 'fundtype_c',
              'studio' => 'visible',
              'label' => 'LBL_FUNDTYPE',
            ),
            4 => 
            array (
              'name' => 'fund_strategy_c',
              'studio' => 'visible',
              'label' => 'LBL_FUND_STRATEGY',
            ),
            5 => 
            array (
              'name' => 'interest_c',
              'label' => 'LBL_INTEREST',
            ),
            6 => 
            array (
              'name' => 'fundname_c',
              'label' => 'LBL_FUNDNAME',
            ),
            7 => 
            array (
              'name' => 'fundmanager_c',
              'label' => 'LBL_FUNDMANAGER ',
            ),
            8 => 
            array (
              'name' => 'description',
              'span' => 12,
            ),
            9 => 'rating',
            10 => 'phone_fax',
            11 => 
            array (
              'name' => 'billing_address_city',
              'comment' => 'The city used for billing address',
              'label' => 'LBL_BILLING_ADDRESS_CITY',
            ),
            12 => 
            array (
              'name' => 'billing_address_state',
              'comment' => 'The state used for billing address',
              'label' => 'LBL_BILLING_ADDRESS_STATE',
            ),
            13 => 
            array (
              'name' => 'billing_address_postalcode',
              'comment' => 'The postal code used for billing address',
              'label' => 'LBL_BILLING_ADDRESS_POSTALCODE',
            ),
            14 => 
            array (
              'name' => 'billing_address_country',
              'comment' => 'The country used for the billing address',
              'label' => 'LBL_BILLING_ADDRESS_COUNTRY',
            ),
            15 => 'assigned_user_name',
            16 => 
            array (
              'name' => 'notes_c',
              'studio' => 'visible',
              'label' => 'LBL_NOTES',
            ),
            17 => 
            array (
              'name' => 'minimumtrackrecord_c',
              'label' => 'LBL_MINIMUMTRACKRECORD',
            ),
            18 => 
            array (
              'name' => 'fundsize_c',
              'label' => 'LBL_FUNDSIZE',
            ),
            19 => 
            array (
              'name' => 'annualisedreturn_c',
              'label' => 'LBL_ANNUALISEDRETURN',
            ),
          ),
          'newTab' => true,
          'panelDefault' => 'expanded',
        ),
        3 => 
        array (
          'name' => 'lbl_detailview_panel1',
          'label' => 'LBL_DETAILVIEW_PANEL1',
          'columns' => 2,
          'labels' => true,
          'labelsOnTop' => true,
          'placeholders' => true,
          'fields' => 
          array (
            0 => 
            array (
              'name' => 'maplocation_c',
              'label' => 'LBL_MAPLOCATION',
              'span' => 12,
            ),
          ),
          'newTab' => true,
          'panelDefault' => 'expanded',
        ),
      ),
      'templateMeta' => 
      array (
        'maxColumns' => '2',
        'useTabs' => true,
      ),
    ),
    'controller' => 
    array (
      'base' => '/*
     * Your installation or use of this SugarCRM file is subject to the applicable
     * terms available at
     * http://support.sugarcrm.com/06_Customer_Center/10_Master_Subscription_Agreements/.
     * If you do not agree to all of the applicable terms or do not have the
     * authority to bind the entity as an authorized representative, then do not
     * install or use this SugarCRM file.
     *
     * Copyright (C) SugarCRM Inc. All rights reserved.
     */
({extendsFrom:\'RecordView\',initialize:function(options){this.plugins=_.union(this.plugins||[],[\'HistoricalSummary\']);this._super(\'initialize\',[options]);}})',
    ),
  ),
  'dnb-bal-params' => 
  array (
    'meta' => 
    array (
      'action' => 'edit',
      'panels' => 
      array (
        0 => 
        array (
          'name' => 'panel_body',
          'title' => 'LBL_DNB_BAL_PARAM_COMP',
          'label' => 'LBL_RECORD_BODY',
          'columns' => 2,
          'paramGrp' => 'companyLocation',
          'labelsOnTop' => true,
          'placeholders' => true,
          'rows' => 
          array (
            0 => 
            array (
              'fields' => 
              array (
                0 => 
                array (
                  'type' => 'label',
                  'cell_css_class' => 'span2',
                  'default_value' => 'LBL_DNB_COUNTRY',
                  'name' => 'dnb_bal_ctry_lbl',
                  'css' => 'dnb-bal-param-label',
                ),
                1 => 
                array (
                  'name' => 'dnb_bal_ctry',
                  'type' => 'dnbenum',
                  'isMultiSelect' => true,
                  'options' => 'dnb_countries_iso',
                  'cell_css_class' => 'span3',
                ),
              ),
            ),
            1 => 
            array (
              'fields' => 
              array (
                0 => 
                array (
                  'type' => 'label',
                  'cell_css_class' => 'span2',
                  'default_value' => 'LBL_DNB_BAL_PARAM_STATES',
                  'tooltip' => 'LBL_TT_DNB_BAL_STATES',
                  'css' => 'dnb-bal-param-label',
                  'name' => 'dnb_bal_state_lbl',
                ),
                1 => 
                array (
                  'name' => 'dnb_bal_state',
                  'cell_css_class' => 'span2',
                  'placeholder' => 'LBL_DNB_BAL_PARAM_STATES',
                  'no_required_placeholder' => true,
                  'required' => true,
                  'len' => 64,
                ),
                2 => 
                array (
                  'type' => 'rowaction',
                  'cell_css_class' => 'span1',
                  'icon' => 'icon-plus',
                  'css_class' => 'dnb-bal-add-btn btn',
                  'event' => 'dnb-bal-state-btn',
                ),
                3 => 
                array (
                  'type' => 'tagcontainer',
                  'cell_css_class' => 'tagcontainer span3',
                  'id' => 'dnb-state-tags',
                ),
              ),
            ),
            2 => 
            array (
              'fields' => 
              array (
                0 => 
                array (
                  'type' => 'label',
                  'cell_css_class' => 'span2',
                  'default_value' => 'LBL_DNB_CI_CITY',
                  'css' => 'dnb-bal-param-label',
                ),
                1 => 
                array (
                  'name' => 'dnb_bal_city',
                  'cell_css_class' => 'span2',
                  'placeholder' => 'LBL_DNB_CI_CITY',
                  'no_required_placeholder' => true,
                  'required' => true,
                  'len' => 240,
                ),
                2 => 
                array (
                  'type' => 'rowaction',
                  'cell_css_class' => 'span1',
                  'icon' => 'icon-plus',
                  'css_class' => 'dnb-bal-add-btn btn',
                  'event' => 'dnb-bal-city-btn',
                ),
                3 => 
                array (
                  'type' => 'tagcontainer',
                  'cell_css_class' => 'tagcontainer span3',
                  'id' => 'dnb-city-tags',
                ),
              ),
            ),
            3 => 
            array (
              'fields' => 
              array (
                0 => 
                array (
                  'type' => 'label',
                  'cell_css_class' => 'span2',
                  'default_value' => 'LBL_DNB_BAL_AREA_CODE',
                  'tooltip' => 'LBL_TT_DNB_BAL_AREA_CODE',
                  'css' => 'dnb-bal-param-label',
                ),
                1 => 
                array (
                  'name' => 'dnb_bal_area_code',
                  'cell_css_class' => 'span2',
                  'placeholder' => 'LBL_DNB_BAL_AREA_CODE',
                  'no_required_placeholder' => true,
                  'required' => true,
                  'len' => 16,
                ),
                2 => 
                array (
                  'type' => 'rowaction',
                  'cell_css_class' => 'span1',
                  'icon' => 'icon-plus',
                  'css_class' => 'dnb-bal-add-btn btn',
                  'event' => 'dnb-bal-area-code-btn',
                ),
                3 => 
                array (
                  'type' => 'tagcontainer',
                  'cell_css_class' => 'tagcontainer span3',
                  'id' => 'dnb-area-code-tags',
                ),
              ),
            ),
            4 => 
            array (
              'fields' => 
              array (
                0 => 
                array (
                  'type' => 'label',
                  'cell_css_class' => 'span2',
                  'default_value' => 'LBL_DNB_BAL_POSTAL_CODE',
                  'tooltip' => 'LBL_TT_DNB_BAL_POSTAL_CODE',
                  'css' => 'dnb-bal-param-label',
                ),
                1 => 
                array (
                  'name' => 'dnb_bal_postal_code',
                  'cell_css_class' => 'span2',
                  'placeholder' => 'LBL_DNB_BAL_POSTAL_CODE',
                  'no_required_placeholder' => true,
                  'required' => true,
                  'len' => 16,
                ),
                2 => 
                array (
                  'type' => 'rowaction',
                  'cell_css_class' => 'span1',
                  'icon' => 'icon-plus',
                  'css_class' => 'dnb-bal-add-btn btn',
                  'event' => 'dnb-bal-postal-code-btn',
                ),
                3 => 
                array (
                  'type' => 'tagcontainer',
                  'cell_css_class' => 'tagcontainer span3',
                  'id' => 'dnb-postal-code-tags',
                ),
              ),
            ),
            5 => 
            array (
              'fields' => 
              array (
                0 => 
                array (
                  'type' => 'label',
                  'cell_css_class' => 'span2',
                  'default_value' => 'LBL_DNB_BAL_RADIUS_SRCH',
                  'tooltip' => 'LBL_TT_DNB_BAL_RADIUS_SRCH',
                  'css' => 'dnb-bal-param-label',
                  'name' => 'dnb_bal_rad_srch_lbl',
                ),
                1 => 
                array (
                  'name' => 'dnb_bal_dist_ctry',
                  'type' => 'enum',
                  'options' => 'dnb_countries_radius_iso',
                  'placeholder' => 'LBL_DNB_SLCT_CTRY',
                  'cell_css_class' => 'span2',
                ),
                2 => 
                array (
                  'name' => 'dnb_bal_distance',
                  'type' => 'float',
                  'placeholder' => 'LBL_DNB_BAL_DISTANCE',
                  'cell_css_class' => 'span2',
                  'no_required_placeholder' => true,
                  'required' => true,
                  'len' => 5,
                ),
                3 => 
                array (
                  'name' => 'dnb_bal_distance_units',
                  'type' => 'enum',
                  'cell_css_class' => 'span2',
                  'options' => 'dnb_bal_miles_km',
                ),
                4 => 
                array (
                  'name' => 'dnb_bal_distance_zip',
                  'placeholder' => 'LBL_DNB_BAL_ZIP',
                  'cell_css_class' => 'span2',
                  'no_required_placeholder' => true,
                  'required' => true,
                  'len' => 16,
                ),
                5 => 
                array (
                  'type' => 'rowaction',
                  'cell_css_class' => 'span1',
                  'icon' => 'icon-plus',
                  'css_class' => 'dnb-bal-add-btn btn',
                  'event' => 'dnb-bal-rad-srch-btn',
                ),
              ),
            ),
            6 => 
            array (
              'fields' => 
              array (
                0 => 
                array (
                  'type' => 'tagcontainer',
                  'cell_css_class' => 'tagcontainer offset2 span3',
                  'id' => 'dnb-rad-srch-tags',
                ),
              ),
            ),
          ),
        ),
        1 => 
        array (
          'name' => 'panel_body',
          'title' => 'LBL_DNB_BAL_INDUSTRY',
          'paramGrp' => 'industry',
          'label' => 'LBL_RECORD_BODY',
          'columns' => 2,
          'labelsOnTop' => true,
          'placeholders' => true,
          'rows' => 
          array (
            0 => 
            array (
              'fields' => 
              array (
                0 => 
                array (
                  'name' => 'dnb_bal_ind_code_type',
                  'label' => 'LBL_DNB_BAL_IND_CODE_TYPE',
                  'tooltip' => 'LBL_TT_DNB_BAL_CODE_TYPE',
                  'type' => 'enum',
                  'cell_css_class' => 'span2',
                  'placeholder' => 'LBL_DNB_BAL_IND_CODE_TYPE',
                  'searchBarThreshold' => -1,
                  'options' => 'dnb_sic_naics_code',
                ),
                1 => 
                array (
                  'name' => 'dnb_bal_ind_filter',
                  'label' => 'LBL_DNB_BAL_IND_CODE_TYPE_PRI_SEC',
                  'type' => 'enum',
                  'cell_css_class' => 'span3',
                  'placeholder' => 'LBL_DNB_BAL_IND_CODE_TYPE_PRI_SEC',
                  'searchBarThreshold' => -1,
                  'options' => 'dnb_bal_primary_secondary',
                ),
                2 => 
                array (
                  'name' => 'dnb_bal_ind_code_val',
                  'tooltip' => 'LBL_TT_DNB_BAL_IND_CODE',
                  'type' => 'int',
                  'cell_css_class' => 'span2',
                  'no_required_placeholder' => true,
                  'required' => true,
                  'len' => 16,
                ),
                3 => 
                array (
                  'type' => 'rowaction',
                  'cell_css_class' => 'span1',
                  'icon' => 'icon-plus',
                  'css_class' => 'dnb-bal-add-btn btn',
                  'event' => 'dnb-bal-ind-code-btn',
                ),
                4 => 
                array (
                  'type' => 'tagcontainer',
                  'cell_css_class' => 'tagcontainer span3',
                  'id' => 'dnb-ind-code-tags',
                ),
                5 => 
                array (
                  'type' => 'label',
                  'cell_css_class' => 'span10',
                  'default_value' => 'LBL_DNB_BAL_SIC_NAICS_EXAMPLE',
                  'css' => 'dnb-bal-param-label',
                ),
              ),
            ),
          ),
        ),
        2 => 
        array (
          'name' => 'panel_body',
          'title' => 'LBL_DNB_BAL_PARAM_COMP_SZ',
          'label' => 'LBL_RECORD_BODY',
          'columns' => 5,
          'paramGrp' => 'companySize',
          'labelsOnTop' => true,
          'placeholders' => true,
          'rows' => 
          array (
            0 => 
            array (
              'fields' => 
              array (
                0 => 
                array (
                  'type' => 'label',
                  'cell_css_class' => 'span2',
                  'tooltip' => 'LBL_TT_DNB_BAL_MILLIONS',
                  'default_value' => 'LBL_DNB_BAL_PARAM_ANNL_SALES',
                  'css' => 'dnb-bal-param-label',
                ),
                1 => 
                array (
                  'name' => 'dnb_bal_sale',
                  'type' => 'enum',
                  'cell_css_class' => 'span3',
                  'searchBarThreshold' => -1,
                  'options' => 'dnb_bal_gte_lte_btw',
                ),
                2 => 
                array (
                  'name' => 'dnb_bal_sales_low',
                  'type' => 'float',
                  'tooltip' => 'LBL_TT_DNB_BAL_MILLIONS',
                  'cell_css_class' => 'hide toggleCandidate span2',
                  'no_required_placeholder' => true,
                  'required' => true,
                  'len' => 7,
                ),
                3 => 
                array (
                  'name' => 'dnb_bal_annl_sale_and_str',
                  'type' => 'label',
                  'cell_css_class' => 'hide toggleCandidate span1',
                  'css' => 'dnb-bal-param-label',
                  'default_value' => 'LBL_DNB_AND',
                ),
                4 => 
                array (
                  'name' => 'dnb_bal_sales_high',
                  'type' => 'float',
                  'tooltip' => 'LBL_TT_DNB_BAL_MILLIONS',
                  'cell_css_class' => 'span2',
                  'no_required_placeholder' => true,
                  'required' => true,
                  'len' => 7,
                ),
                5 => 
                array (
                  'type' => 'rowaction',
                  'cell_css_class' => 'span1',
                  'icon' => 'icon-plus',
                  'css_class' => 'dnb-bal-add-btn btn',
                  'event' => 'dnb-bal-sales-btn',
                ),
                6 => 
                array (
                  'type' => 'tagcontainer',
                  'cell_css_class' => 'tagcontainer span3',
                  'id' => 'dnb-annlsales-tags',
                ),
              ),
            ),
            1 => 
            array (
              'fields' => 
              array (
                0 => 
                array (
                  'type' => 'label',
                  'cell_css_class' => 'span2',
                  'default_value' => 'LBL_DNB_BAL_PARAM_EMP_CNT',
                  'css' => 'dnb-bal-param-label',
                ),
                1 => 
                array (
                  'name' => 'dnb_bal_emp_cnt_cat',
                  'type' => 'enum',
                  'cell_css_class' => 'span2',
                  'searchBarThreshold' => -1,
                  'options' => 'dnb_bal_single_all',
                ),
                2 => 
                array (
                  'name' => 'dnb_bal_emp_cnt',
                  'type' => 'enum',
                  'cell_css_class' => 'span3',
                  'searchBarThreshold' => -1,
                  'options' => 'dnb_bal_gte_lte_btw',
                ),
                3 => 
                array (
                  'name' => 'dnb_bal_emp_cnt_low',
                  'type' => 'int',
                  'cell_css_class' => 'hide toggleCandidate span1',
                  'no_required_placeholder' => true,
                  'required' => true,
                  'len' => 7,
                ),
                4 => 
                array (
                  'name' => 'dnb_bal_annl_sale_and_str',
                  'type' => 'label',
                  'cell_css_class' => 'hide toggleCandidate span1',
                  'css' => 'dnb-bal-param-label',
                  'default_value' => 'LBL_DNB_AND',
                ),
                5 => 
                array (
                  'name' => 'dnb_bal_emp_cnt_high',
                  'type' => 'int',
                  'cell_css_class' => 'span1',
                  'no_required_placeholder' => true,
                  'required' => true,
                  'len' => 7,
                ),
                6 => 
                array (
                  'type' => 'rowaction',
                  'cell_css_class' => 'span1',
                  'icon' => 'icon-plus',
                  'css_class' => 'dnb-bal-add-btn btn',
                  'event' => 'dnb-bal-empcnt-btn',
                ),
                7 => 
                array (
                  'type' => 'tagcontainer',
                  'cell_css_class' => 'tagcontainer span3',
                  'id' => 'dnb-empcnt-tags',
                ),
              ),
            ),
            2 => 
            array (
              'fields' => 
              array (
                0 => 
                array (
                  'type' => 'label',
                  'cell_css_class' => 'span2',
                  'default_value' => 'LBL_DNB_BAL_PARAM_EMP_GRWTH',
                  'css' => 'dnb-bal-param-label',
                ),
                1 => 
                array (
                  'name' => 'dnb_bal_emp_grwth',
                  'type' => 'enum',
                  'cell_css_class' => 'span3',
                  'searchBarThreshold' => -1,
                  'options' => 'dnb_bal_gte_lte_btw',
                ),
                2 => 
                array (
                  'name' => 'dnb_bal_emp_grwth_low',
                  'type' => 'float',
                  'cell_css_class' => 'hide toggleCandidate span1',
                  'no_required_placeholder' => true,
                  'required' => true,
                  'len' => 7,
                ),
                3 => 
                array (
                  'name' => 'dnb_bal_annl_sale_and_str',
                  'type' => 'label',
                  'cell_css_class' => 'hide toggleCandidate span1',
                  'css' => 'dnb-bal-param-label',
                  'default_value' => 'LBL_DNB_AND',
                ),
                4 => 
                array (
                  'name' => 'dnb_bal_emp_grwth_high',
                  'type' => 'float',
                  'cell_css_class' => 'span1',
                  'no_required_placeholder' => true,
                  'required' => true,
                  'len' => 7,
                ),
                5 => 
                array (
                  'type' => 'rowaction',
                  'cell_css_class' => 'span1',
                  'icon' => 'icon-plus',
                  'css_class' => 'dnb-bal-add-btn btn',
                  'event' => 'dnb-bal-empgrwth-btn',
                ),
                6 => 
                array (
                  'type' => 'tagcontainer',
                  'cell_css_class' => 'tagcontainer span3',
                  'id' => 'dnb-bal-empgrwth-tags',
                ),
              ),
            ),
            3 => 
            array (
              'fields' => 
              array (
                0 => 
                array (
                  'type' => 'label',
                  'cell_css_class' => 'span2',
                  'default_value' => 'LBL_DNB_BAL_PARAM_MKT_CAP',
                  'tooltip' => 'LBL_TT_DNB_BAL_MILLIONS',
                  'css' => 'dnb-bal-param-label',
                ),
                1 => 
                array (
                  'name' => 'dnb_bal_mkt_cap',
                  'type' => 'enum',
                  'cell_css_class' => 'span3',
                  'searchBarThreshold' => -1,
                  'options' => 'dnb_bal_gte_lte_btw',
                ),
                2 => 
                array (
                  'name' => 'dnb_bal_mkt_cap_low',
                  'type' => 'float',
                  'tooltip' => 'LBL_TT_DNB_BAL_MILLIONS',
                  'cell_css_class' => 'hide toggleCandidate span2',
                  'no_required_placeholder' => true,
                  'required' => true,
                  'len' => 7,
                ),
                3 => 
                array (
                  'name' => 'dnb_bal_annl_sale_and_str',
                  'type' => 'label',
                  'cell_css_class' => 'hide toggleCandidate span1',
                  'css' => 'dnb-bal-param-label',
                  'default_value' => 'LBL_DNB_AND',
                ),
                4 => 
                array (
                  'name' => 'dnb_bal_mkt_cap_high',
                  'type' => 'float',
                  'tooltip' => 'LBL_TT_DNB_BAL_MILLIONS',
                  'cell_css_class' => 'span2',
                  'no_required_placeholder' => true,
                  'required' => true,
                  'len' => 7,
                ),
                5 => 
                array (
                  'type' => 'rowaction',
                  'cell_css_class' => 'span1',
                  'icon' => 'icon-plus',
                  'css_class' => 'dnb-bal-add-btn btn',
                  'event' => 'dnb-bal-mktcap-btn',
                ),
                6 => 
                array (
                  'type' => 'tagcontainer',
                  'cell_css_class' => 'tagcontainer span3',
                  'id' => 'dnb-mktcap-tags',
                ),
              ),
            ),
          ),
        ),
        3 => 
        array (
          'name' => 'panel_body',
          'title' => 'LBL_DNB_BAL_PARAM_COMP_INFORMATION',
          'label' => 'LBL_RECORD_BODY',
          'columns' => 2,
          'paramGrp' => 'companyInfo',
          'labelsOnTop' => true,
          'placeholders' => true,
          'rows' => 
          array (
            0 => 
            array (
              'fields' => 
              array (
                0 => 
                array (
                  'type' => 'label',
                  'cell_css_class' => 'span2',
                  'default_value' => 'LBL_DNB_BAL_ORG_NAME',
                  'css' => 'dnb-bal-param-label',
                ),
                1 => 
                array (
                  'name' => 'dnb_bal_org_name',
                  'tooltip' => 'LBL_TT_DNB_BAL_ORG_NAME',
                  'cell_css_class' => 'span2',
                  'no_required_placeholder' => true,
                  'required' => true,
                  'len' => 240,
                ),
                2 => 
                array (
                  'type' => 'rowaction',
                  'cell_css_class' => 'span1',
                  'icon' => 'icon-plus',
                  'css_class' => 'dnb-bal-add-btn btn',
                  'event' => 'dnb-bal-org-name-btn',
                ),
                3 => 
                array (
                  'type' => 'tagcontainer',
                  'cell_css_class' => 'tagcontainer span3',
                  'id' => 'dnb-org-name-tags',
                ),
              ),
            ),
            1 => 
            array (
              'fields' => 
              array (
                0 => 
                array (
                  'type' => 'label',
                  'cell_css_class' => 'span2',
                  'default_value' => 'LBL_DNB_BAL_YEAR_OF_FOUNDING',
                  'css' => 'dnb-bal-param-label',
                ),
                1 => 
                array (
                  'name' => 'dnb_bal_founding',
                  'type' => 'enum',
                  'cell_css_class' => 'span3',
                  'searchBarThreshold' => -1,
                  'options' => 'dnb_bal_gte_lte_btw',
                ),
                2 => 
                array (
                  'name' => 'dnb_bal_year_of_founding_low',
                  'type' => 'int',
                  'cell_css_class' => 'hide toggleCandidate span1',
                  'tooltip' => 'LBL_TT_DNB_BAL_YEAR_OF_FOUNDING',
                  'no_required_placeholder' => true,
                  'required' => true,
                  'len' => 4,
                ),
                3 => 
                array (
                  'name' => 'dnb_bal_year_of_founding_and_str',
                  'type' => 'label',
                  'cell_css_class' => 'hide toggleCandidate span1',
                  'css' => 'dnb-bal-param-label',
                  'default_value' => 'LBL_DNB_AND',
                ),
                4 => 
                array (
                  'name' => 'dnb_bal_year_of_founding_high',
                  'tooltip' => 'LBL_TT_DNB_BAL_YEAR_OF_FOUNDING',
                  'type' => 'int',
                  'cell_css_class' => 'span1',
                  'no_required_placeholder' => true,
                  'required' => true,
                  'len' => 4,
                ),
                5 => 
                array (
                  'type' => 'rowaction',
                  'cell_css_class' => 'span1',
                  'icon' => 'icon-plus',
                  'css_class' => 'dnb-bal-add-btn btn',
                  'event' => 'dnb-bal-year-founding-btn',
                ),
                6 => 
                array (
                  'type' => 'tagcontainer',
                  'cell_css_class' => 'tagcontainer span3',
                  'id' => 'dnb-year-of-founding-tags',
                ),
              ),
            ),
            2 => 
            array (
              'fields' => 
              array (
                0 => 
                array (
                  'type' => 'label',
                  'cell_css_class' => 'span2',
                  'default_value' => 'LBL_DNB_BAL_PRESCREEN_SCORE',
                  'css' => 'dnb-bal-param-label',
                  'name' => 'dnb_bal_presc_lbl',
                ),
                1 => 
                array (
                  'name' => 'dnb_bal_prescreen_score',
                  'type' => 'enum',
                  'cell_css_class' => 'span3',
                  'isMultiSelect' => true,
                  'tooltip' => 'LBL_TT_DNB_BAL_PRESCREEN_SCORE',
                  'searchBarThreshold' => -1,
                  'options' => 'dnb_bal_prescreen_options',
                ),
              ),
            ),
            3 => 
            array (
              'fields' => 
              array (
                0 => 
                array (
                  'type' => 'label',
                  'cell_css_class' => 'span2',
                  'default_value' => 'LBL_DNB_BAL_DUNS',
                  'css' => 'dnb-bal-param-label',
                ),
                1 => 
                array (
                  'name' => 'dnb_bal_duns',
                  'tooltip' => 'LBL_TT_DNB_BAL_DUNS',
                  'type' => 'int',
                  'cell_css_class' => 'span2',
                  'no_required_placeholder' => true,
                  'required' => true,
                  'len' => 15,
                ),
                2 => 
                array (
                  'type' => 'rowaction',
                  'cell_css_class' => 'span1',
                  'icon' => 'icon-plus',
                  'css_class' => 'dnb-bal-add-btn btn',
                  'event' => 'dnb-bal-duns-btn',
                ),
                3 => 
                array (
                  'type' => 'tagcontainer',
                  'cell_css_class' => 'tagcontainer span3',
                  'id' => 'dnb-duns-tags',
                ),
              ),
            ),
            4 => 
            array (
              'fields' => 
              array (
                0 => 
                array (
                  'type' => 'label',
                  'cell_css_class' => 'span2',
                  'default_value' => 'LBL_DNB_BAL_ORG_ID',
                  'css' => 'dnb-bal-param-label',
                ),
                1 => 
                array (
                  'name' => 'dnb_bal_org_id',
                  'tooltip' => 'LBL_TT_DNB_BAL_ORGID',
                  'type' => 'int',
                  'cell_css_class' => 'span2',
                  'no_required_placeholder' => true,
                  'required' => true,
                  'len' => 40,
                ),
                2 => 
                array (
                  'type' => 'rowaction',
                  'cell_css_class' => 'span1',
                  'icon' => 'icon-plus',
                  'css_class' => 'dnb-bal-add-btn btn',
                  'event' => 'dnb-bal-org-id-btn',
                ),
                3 => 
                array (
                  'type' => 'tagcontainer',
                  'cell_css_class' => 'tagcontainer span3',
                  'id' => 'dnb-bal-org-id-tags',
                ),
              ),
            ),
          ),
        ),
        4 => 
        array (
          'name' => 'panel_body',
          'title' => 'LBL_DNB_BAL_FINANCIAL_INFO',
          'label' => 'LBL_RECORD_BODY',
          'columns' => 2,
          'paramGrp' => 'financialInfo',
          'labelsOnTop' => true,
          'placeholders' => true,
          'rows' => 
          array (
            0 => 
            array (
              'fields' => 
              array (
                0 => 
                array (
                  'type' => 'label',
                  'cell_css_class' => 'span2',
                  'default_value' => 'LBL_DNB_BAL_NET_INCOME',
                  'tooltip' => 'LBL_TT_DNB_BAL_MILLIONS_EX',
                  'css' => 'dnb-bal-param-label',
                ),
                1 => 
                array (
                  'name' => 'dnb_bal_net_income',
                  'type' => 'enum',
                  'cell_css_class' => 'span3',
                  'searchBarThreshold' => -1,
                  'options' => 'dnb_bal_gte_lte_btw',
                ),
                2 => 
                array (
                  'name' => 'dnb_bal_net_income_low',
                  'type' => 'float',
                  'tooltip' => 'LBL_TT_DNB_BAL_MILLIONS_EX',
                  'cell_css_class' => 'hide toggleCandidate span2',
                  'no_required_placeholder' => true,
                  'required' => true,
                  'len' => 7,
                ),
                3 => 
                array (
                  'name' => 'dnb_bal_net_income_and_str',
                  'type' => 'label',
                  'cell_css_class' => 'hide toggleCandidate span1',
                  'css' => 'dnb-bal-param-label',
                  'default_value' => 'LBL_DNB_AND',
                ),
                4 => 
                array (
                  'name' => 'dnb_bal_net_income_high',
                  'type' => 'float',
                  'tooltip' => 'LBL_TT_DNB_BAL_MILLIONS_EX',
                  'cell_css_class' => 'span2',
                  'no_required_placeholder' => true,
                  'required' => true,
                  'len' => 7,
                ),
                5 => 
                array (
                  'type' => 'rowaction',
                  'cell_css_class' => 'span1',
                  'icon' => 'icon-plus',
                  'css_class' => 'dnb-bal-add-btn btn',
                  'event' => 'dnb-bal-net-income-btn',
                ),
                6 => 
                array (
                  'type' => 'tagcontainer',
                  'cell_css_class' => 'tagcontainer span3',
                  'id' => 'dnb-net-income-tags',
                ),
              ),
            ),
            1 => 
            array (
              'fields' => 
              array (
                0 => 
                array (
                  'type' => 'label',
                  'cell_css_class' => 'span2',
                  'default_value' => 'LBL_DNB_BAL_NET_INCOME_GROWTH',
                  'tooltip' => 'LBL_TT_DNB_BAL_NET_INCOME_GROWTH',
                  'css' => 'dnb-bal-param-label',
                ),
                1 => 
                array (
                  'name' => 'dnb_bal_net_income_growth',
                  'type' => 'enum',
                  'cell_css_class' => 'span3',
                  'searchBarThreshold' => -1,
                  'options' => 'dnb_bal_gte_lte_btw',
                ),
                2 => 
                array (
                  'name' => 'dnb_bal_net_income_growth_low',
                  'type' => 'float',
                  'tooltip' => 'LBL_TT_DNB_BAL_NET_INCOME_GROWTH',
                  'cell_css_class' => 'hide toggleCandidate span2',
                  'no_required_placeholder' => true,
                  'required' => true,
                  'len' => 7,
                ),
                3 => 
                array (
                  'name' => 'dnb_bal_net_income_growth_and_str',
                  'type' => 'label',
                  'cell_css_class' => 'hide toggleCandidate span1',
                  'css' => 'dnb-bal-param-label',
                  'default_value' => 'LBL_DNB_AND',
                ),
                4 => 
                array (
                  'name' => 'dnb_bal_net_income_growth_high',
                  'type' => 'float',
                  'tooltip' => 'LBL_TT_DNB_BAL_NET_INCOME_GROWTH',
                  'cell_css_class' => 'span2',
                  'no_required_placeholder' => true,
                  'required' => true,
                  'len' => 7,
                ),
                5 => 
                array (
                  'type' => 'rowaction',
                  'cell_css_class' => 'span1',
                  'icon' => 'icon-plus',
                  'css_class' => 'dnb-bal-add-btn btn',
                  'event' => 'dnb-bal-net-income-growth-btn',
                ),
                6 => 
                array (
                  'type' => 'tagcontainer',
                  'cell_css_class' => 'tagcontainer span3',
                  'id' => 'dnb-net-income-growth-tags',
                ),
              ),
            ),
            2 => 
            array (
              'fields' => 
              array (
                0 => 
                array (
                  'type' => 'label',
                  'cell_css_class' => 'span2',
                  'default_value' => 'LBL_DNB_BAL_ASSETS',
                  'tooltip' => 'LBL_TT_DNB_BAL_MILLIONS_EX',
                  'css' => 'dnb-bal-param-label',
                ),
                1 => 
                array (
                  'name' => 'dnb_bal_assets',
                  'type' => 'enum',
                  'cell_css_class' => 'span3',
                  'searchBarThreshold' => -1,
                  'options' => 'dnb_bal_gte_lte_btw',
                ),
                2 => 
                array (
                  'name' => 'dnb_bal_assets_low',
                  'type' => 'float',
                  'tooltip' => 'LBL_TT_DNB_BAL_MILLIONS_EX',
                  'cell_css_class' => 'hide toggleCandidate span2',
                  'no_required_placeholder' => true,
                  'required' => true,
                  'len' => 7,
                ),
                3 => 
                array (
                  'name' => 'dnb_bal_assets_and_str',
                  'type' => 'label',
                  'cell_css_class' => 'hide toggleCandidate span1',
                  'css' => 'dnb-bal-param-label',
                  'default_value' => 'LBL_DNB_AND',
                ),
                4 => 
                array (
                  'name' => 'dnb_bal_assets_high',
                  'type' => 'float',
                  'tooltip' => 'LBL_TT_DNB_BAL_MILLIONS_EX',
                  'cell_css_class' => 'span2',
                  'no_required_placeholder' => true,
                  'required' => true,
                  'len' => 7,
                ),
                5 => 
                array (
                  'type' => 'rowaction',
                  'cell_css_class' => 'span1',
                  'icon' => 'icon-plus',
                  'css_class' => 'dnb-bal-add-btn btn',
                  'event' => 'dnb-bal-assets-btn',
                ),
                6 => 
                array (
                  'type' => 'tagcontainer',
                  'cell_css_class' => 'tagcontainer span3',
                  'id' => 'dnb-net-assets-tags',
                ),
              ),
            ),
          ),
        ),
        5 => 
        array (
          'name' => 'panel_body',
          'title' => 'LBL_DNB_BAL_IPO_DATA',
          'label' => 'LBL_RECORD_BODY',
          'columns' => 2,
          'paramGrp' => 'ipoData',
          'labelsOnTop' => true,
          'placeholders' => true,
          'rows' => 
          array (
            0 => 
            array (
              'fields' => 
              array (
                0 => 
                array (
                  'type' => 'label',
                  'cell_css_class' => 'span2',
                  'default_value' => 'LBL_DNB_BAL_IPO_OFFER_AMT',
                  'tooltip' => 'LBL_TT_DNB_BAL_MILLIONS',
                  'css' => 'dnb-bal-param-label',
                ),
                1 => 
                array (
                  'name' => 'dnb_bal_offer_amt',
                  'type' => 'enum',
                  'cell_css_class' => 'span3',
                  'searchBarThreshold' => -1,
                  'options' => 'dnb_bal_gte_lte_btw',
                ),
                2 => 
                array (
                  'name' => 'dnb_bal_offer_amt_low',
                  'type' => 'float',
                  'tooltip' => 'LBL_TT_DNB_BAL_MILLIONS',
                  'cell_css_class' => 'hide toggleCandidate span2',
                  'no_required_placeholder' => true,
                  'required' => true,
                  'len' => 7,
                ),
                3 => 
                array (
                  'name' => 'dnb_bal_offer_amt_and_str',
                  'type' => 'label',
                  'cell_css_class' => 'hide toggleCandidate span1',
                  'css' => 'dnb-bal-param-label',
                  'default_value' => 'LBL_DNB_AND',
                ),
                4 => 
                array (
                  'name' => 'dnb_bal_offer_amt_high',
                  'type' => 'float',
                  'tooltip' => 'LBL_TT_DNB_BAL_MILLIONS',
                  'cell_css_class' => 'span2',
                  'no_required_placeholder' => true,
                  'required' => true,
                  'len' => 7,
                ),
                5 => 
                array (
                  'type' => 'rowaction',
                  'cell_css_class' => 'span1',
                  'icon' => 'icon-plus',
                  'css_class' => 'dnb-bal-add-btn btn',
                  'event' => 'dnb-bal-offer-amt-btn',
                ),
                6 => 
                array (
                  'type' => 'tagcontainer',
                  'cell_css_class' => 'tagcontainer span3',
                  'id' => 'dnb-offer-amt-tags',
                ),
              ),
            ),
            1 => 
            array (
              'fields' => 
              array (
                0 => 
                array (
                  'type' => 'label',
                  'cell_css_class' => 'span2',
                  'default_value' => 'LBL_DNB_BAL_IPO_PRICE_RANGE',
                  'tooltip' => 'LBL_TT_DNB_BAL_IPO_PRICE_RANGE',
                  'css' => 'dnb-bal-param-label',
                ),
                1 => 
                array (
                  'name' => 'dnb_bal_ipo_price_range',
                  'type' => 'enum',
                  'cell_css_class' => 'span3',
                  'searchBarThreshold' => -1,
                  'options' => 'dnb_bal_gte_lte_btw',
                ),
                2 => 
                array (
                  'name' => 'dnb_bal_ipo_price_range_low',
                  'type' => 'float',
                  'tooltip' => 'LBL_TT_DNB_BAL_IPO_PRICE_RANGE',
                  'cell_css_class' => 'hide toggleCandidate span2',
                  'no_required_placeholder' => true,
                  'required' => true,
                  'len' => 7,
                ),
                3 => 
                array (
                  'name' => 'dnb_bal_ipo_price_range_and_str',
                  'type' => 'label',
                  'cell_css_class' => 'hide toggleCandidate span1',
                  'css' => 'dnb-bal-param-label',
                  'default_value' => 'LBL_DNB_AND',
                ),
                4 => 
                array (
                  'name' => 'dnb_bal_ipo_price_range_high',
                  'type' => 'float',
                  'tooltip' => 'LBL_TT_DNB_BAL_IPO_PRICE_RANGE',
                  'cell_css_class' => 'span2',
                  'no_required_placeholder' => true,
                  'required' => true,
                  'len' => 7,
                ),
                5 => 
                array (
                  'type' => 'rowaction',
                  'cell_css_class' => 'span1',
                  'icon' => 'icon-plus',
                  'css_class' => 'dnb-bal-add-btn btn',
                  'event' => 'dnb-bal-ipo-price-range-btn',
                ),
                6 => 
                array (
                  'type' => 'tagcontainer',
                  'cell_css_class' => 'tagcontainer span3',
                  'id' => 'dnb-ipo-price-range-tags',
                ),
              ),
            ),
          ),
        ),
      ),
      'balSelector' => 
      array (
        'dnb-bal-sales-btn' => 
        array (
          'operator' => 'dnb_bal_sale',
          'lowerLimit' => 'dnb_bal_sales_low',
          'upperLimit' => 'dnb_bal_sales_high',
          'addBtn' => '.dnb-bal-sales-btn',
          'container' => '#dnb-annlsales-tags',
          'tagLimit' => 1,
          'modelKey' => 'annualSales',
          'lowKey' => 'SalesLowRangeAmount',
          'highKey' => 'SalesHighRangeAmount',
        ),
        'dnb-bal-year-founding-btn' => 
        array (
          'operator' => 'dnb_bal_founding',
          'lowerLimit' => 'dnb_bal_year_of_founding_low',
          'upperLimit' => 'dnb_bal_year_of_founding_high',
          'addBtn' => '.dnb-bal-year-founding-btn',
          'container' => '#dnb-year-of-founding-tags',
          'tagLimit' => 1,
          'modelKey' => 'foundingYear',
          'lowKey' => 'ControlOwnershipFromYear',
          'highKey' => 'ControlOwnershipToYear',
        ),
        'dnb-bal-offer-amt-btn' => 
        array (
          'operator' => 'dnb_bal_offer_amt',
          'lowerLimit' => 'dnb_bal_offer_amt_low',
          'upperLimit' => 'dnb_bal_offer_amt_high',
          'addBtn' => '.dnb-bal-offer-amt-btn',
          'container' => '#dnb-offer-amt-tags',
          'tagLimit' => 1,
          'modelKey' => 'ipoOfferAmt',
          'lowKey' => 'InitialPublicOfferingLowRangeAmount',
          'highKey' => 'InitialPublicOfferingHighRangeAmount',
        ),
        'dnb-bal-ipo-price-range-btn' => 
        array (
          'operator' => 'dnb_bal_ipo_price_range',
          'lowerLimit' => 'dnb_bal_ipo_price_range_low',
          'upperLimit' => 'dnb_bal_ipo_price_range_high',
          'addBtn' => '.dnb-bal-ipo-price-range-btn',
          'container' => '#dnb-ipo-price-range-tags',
          'tagLimit' => 1,
          'modelKey' => 'ipoPriceRange',
          'lowKey' => 'InitialPublicOfferingShareValueLowRangeAmount',
          'highKey' => 'InitialPublicOfferingShareValueHighRangeAmount',
        ),
        'dnb-bal-net-income-btn' => 
        array (
          'operator' => 'dnb_bal_net_income',
          'lowerLimit' => 'dnb_bal_net_income_low',
          'upperLimit' => 'dnb_bal_net_income_high',
          'addBtn' => '.dnb-bal-net-income-btn',
          'container' => '#dnb-net-income-tags',
          'tagLimit' => 1,
          'modelKey' => 'netIncome',
          'lowKey' => 'NetIncomeLowRangeAmount',
          'highKey' => 'NetIncomeHighRangeAmount',
        ),
        'dnb-bal-net-income-growth-btn' => 
        array (
          'operator' => 'dnb_bal_net_income_growth',
          'lowerLimit' => 'dnb_bal_net_income_growth_low',
          'upperLimit' => 'dnb_bal_net_income_growth_high',
          'addBtn' => '.dnb-bal-net-income-growth-btn',
          'container' => '#dnb-net-income-growth-tags',
          'tagLimit' => 1,
          'modelKey' => 'netIncomeGrowth',
          'lowKey' => 'NetIncomeGrowthLowRangePercentage',
          'highKey' => 'NetIncomeGrowthHighRangePercentage',
        ),
        'dnb-bal-assets-btn' => 
        array (
          'operator' => 'dnb_bal_assets',
          'lowerLimit' => 'dnb_bal_assets_low',
          'upperLimit' => 'dnb_bal_assets_high',
          'addBtn' => '.dnb-bal-assets-btn',
          'container' => '#dnb-net-assets-tags',
          'tagLimit' => 1,
          'modelKey' => 'assets',
          'lowKey' => 'TotalAssetLowRangeAmount',
          'highKey' => 'TotalAssetHighRangeAmount',
        ),
        'dnb-bal-empcnt-btn' => 
        array (
          'operator' => 'dnb_bal_emp_cnt',
          'lowerLimit' => 'dnb_bal_emp_cnt_low',
          'upperLimit' => 'dnb_bal_emp_cnt_high',
          'addBtn' => '.dnb-bal-empcnt-btn',
          'container' => '#dnb-empcnt-tags',
          'tagLimit' => 1,
          'keyType' => 'dnb_bal_emp_cnt_cat',
          'modelKey' => 'employeeCount',
          'singlesite' => 
          array (
            'lowKey' => 'IndividualEntityEmployeeLowRangeQuantity',
            'highKey' => 'IndividualEntityEmployeeHighRangeQuantity',
          ),
          'allsites' => 
          array (
            'lowKey' => 'ConsolidatedEmployeeLowRangeQuantity',
            'highKey' => 'ConsolidatedEmployeeHighRangeQuantity',
          ),
        ),
        'dnb-bal-empgrwth-btn' => 
        array (
          'operator' => 'dnb_bal_emp_grwth',
          'lowerLimit' => 'dnb_bal_emp_grwth_low',
          'upperLimit' => 'dnb_bal_emp_grwth_high',
          'addBtn' => '.dnb-bal-empgrwth-btn',
          'container' => '#dnb-bal-empgrwth-tags',
          'tagLimit' => 1,
          'modelKey' => 'employeeGrowth',
          'lowKey' => 'ConsolidatedEmployeesGrowthLowRangePercentage',
          'highKey' => 'ConsolidatedEmployeesGrowthHighRangePercentage',
        ),
        'dnb-bal-mktcap-btn' => 
        array (
          'operator' => 'dnb_bal_mkt_cap',
          'lowerLimit' => 'dnb_bal_mkt_cap_low',
          'upperLimit' => 'dnb_bal_mkt_cap_high',
          'addBtn' => '.dnb-bal-mktcap-btn',
          'container' => '#dnb-mktcap-tags',
          'tagLimit' => 1,
          'modelKey' => 'marketCap',
          'lowKey' => 'MarketCapitalizationLowRangeAmount',
          'highKey' => 'MarketCapitalizationHighRangeAmount',
        ),
        'dnb-bal-area-code-btn' => 
        array (
          'addBtn' => '.dnb-bal-area-code-btn',
          'container' => '#dnb-area-code-tags',
          'tagLimit' => 100,
          'inputKey' => 'dnb_bal_area_code',
          'modelKey' => 'phoneAreaCode',
          'modelSubKey' => 'TelephoneNumberAreaCode-',
        ),
        'dnb-bal-duns-btn' => 
        array (
          'addBtn' => '.dnb-bal-duns-btn',
          'container' => '#dnb-duns-tags',
          'tagLimit' => 10,
          'inputKey' => 'dnb_bal_duns',
          'modelKey' => 'dunsNum',
          'modelSubKey' => 'DUNSNumber-',
        ),
        'dnb-bal-org-name-btn' => 
        array (
          'addBtn' => '.dnb-bal-org-name-btn',
          'container' => '#dnb-org-name-tags',
          'tagLimit' => 1,
          'inputKey' => 'dnb_bal_org_name',
          'modelKey' => 'orgName',
          'modelSubKey' => 'OrganizationName',
        ),
        'dnb-bal-postal-code-btn' => 
        array (
          'addBtn' => '.dnb-bal-postal-code-btn',
          'container' => '#dnb-postal-code-tags',
          'tagLimit' => 10,
          'inputKey' => 'dnb_bal_postal_code',
          'modelKey' => 'postalCode',
          'modelSubKey' => 'PostalCode-',
        ),
        'dnb-bal-city-btn' => 
        array (
          'addBtn' => '.dnb-bal-city-btn',
          'container' => '#dnb-city-tags',
          'tagLimit' => 10,
          'inputKey' => 'dnb_bal_city',
          'modelKey' => 'city',
          'modelSubKey' => 'PrimaryTownName-',
        ),
        'dnb-bal-state-btn' => 
        array (
          'addBtn' => '.dnb-bal-state-btn',
          'container' => '#dnb-state-tags',
          'tagLimit' => 10,
          'inputKey' => 'dnb_bal_state',
          'modelKey' => 'state',
          'modelSubKey' => 'TerritoryName-',
        ),
        'dnb_bal_ctry' => 
        array (
          'modelSubKey' => 'CountryISOAlpha2Code-',
          'modelKey' => 'country',
          'multiple' => true,
        ),
        'dnb_bal_prescreen_score' => 
        array (
          'modelSubKey' => 'MarketingRiskClassCode-',
          'modelKey' => 'prescreenScore',
          'multiple' => true,
        ),
        'dnb-bal-ind-code-btn' => 
        array (
          'addBtn' => '.dnb-bal-ind-code-btn',
          'container' => '#dnb-ind-code-tags',
          'operator' => 
          array (
            0 => 'dnb_bal_ind_code_type',
            1 => 'dnb_bal_ind_filter',
          ),
          'tagLimit' => 10,
          'modelKey' => 'industryCode',
          'modelSubKey' => 
          array (
            0 => 'IndustryCodeTypeCode',
            1 => 'PrimaryIndustryCodeOnlyIndicator',
          ),
          'tagSource' => 'dnb_bal_ind_code_val',
          'tagDest' => 'IndustryCode-',
        ),
        'dnb-bal-rad-srch-btn' => 
        array (
          'addBtn' => '.dnb-bal-rad-srch-btn',
          'container' => '#dnb-rad-srch-tags',
          'operator' => 
          array (
            0 => 'dnb_bal_dist_ctry',
            1 => 'dnb_bal_distance_units',
            2 => 'dnb_bal_distance',
            3 => 'dnb_bal_distance_zip',
          ),
          'tagLimit' => 1,
          'modelKey' => 'radiusSearch',
          'modelSubKey' => 
          array (
            0 => 'RadiusSearchCountryISOAlpha2Code',
            1 => 'RadiusMeasurementUnitCode',
            2 => 'RadiusMeasurement',
            3 => 'RadiusSearchPostalCode',
          ),
        ),
        'dnb-bal-org-id-btn' => 
        array (
          'addBtn' => '.dnb-bal-org-id-btn',
          'container' => '#dnb-bal-org-id-tags',
          'tagLimit' => 10,
          'inputKey' => 'dnb_bal_org_id',
          'modelKey' => 'orgid',
          'modelSubKey' => 'OrganizationIdentificationNumber-',
        ),
      ),
      'balParamGroups' => 
      array (
        'companySize' => 
        array (
          'annualSales' => 
          array (
            'label' => 'LBL_DNB_BAL_PARAM_ANNL_SALES',
            'id' => 'dnb-annlsales-tags',
          ),
          'employeeCount' => 
          array (
            'label' => 'LBL_DNB_BAL_PARAM_EMP_CNT',
            'id' => 'dnb-empcnt-tags',
          ),
          'employeeGrowth' => 
          array (
            'label' => 'LBL_DNB_BAL_PARAM_EMP_GRWTH',
            'id' => 'dnb-bal-empgrwth-tags',
          ),
          'marketCap' => 
          array (
            'label' => 'LBL_DNB_BAL_PARAM_MKT_CAP',
            'id' => 'dnb-mktcap-tags',
          ),
        ),
        'companyLocation' => 
        array (
          'phoneAreaCode' => 
          array (
            'label' => 'LBL_DNB_BAL_AREA_CODE',
            'id' => 'dnb-area-code-tags',
          ),
          'postalCode' => 
          array (
            'label' => 'LBL_DNB_BAL_POSTAL_CODE',
            'id' => 'dnb-postal-code-tags',
          ),
          'city' => 
          array (
            'label' => 'LBL_DNB_CI_CITY',
            'id' => 'dnb-city-tags',
          ),
          'state' => 
          array (
            'label' => 'LBL_DNB_BAL_PARAM_STATES',
            'id' => 'dnb-state-tags',
          ),
          'country' => 
          array (
            'label' => 'LBL_DNB_COUNTRY',
            'select2' => 'dnb_bal_ctry',
          ),
          'radiusSearch' => 
          array (
            'label' => 'LBL_DNB_BAL_RADIUS_SRCH',
            'id' => 'dnb-rad-srch-tags',
          ),
        ),
        'financialInfo' => 
        array (
          'netIncome' => 
          array (
            'label' => 'LBL_DNB_BAL_NET_INCOME',
            'id' => 'dnb-net-income-tags',
          ),
          'netIncomeGrowth' => 
          array (
            'label' => 'LBL_DNB_BAL_NET_INCOME_GROWTH',
            'id' => 'dnb-net-income-growth-tags',
          ),
          'assets' => 
          array (
            'label' => 'LBL_DNB_BAL_ASSETS',
            'id' => 'dnb-net-assets-tags',
          ),
        ),
        'ipoData' => 
        array (
          'ipoOfferAmt' => 
          array (
            'label' => 'LBL_DNB_BAL_IPO_OFFER_AMT',
            'id' => 'dnb-offer-amt-tags',
          ),
          'ipoPriceRange' => 
          array (
            'label' => 'LBL_DNB_BAL_IPO_PRICE_RANGE',
            'id' => 'dnb-ipo-price-range-tags',
          ),
        ),
        'companyInfo' => 
        array (
          'orgName' => 
          array (
            'label' => 'LBL_DNB_BAL_ORG_NAME',
            'id' => 'dnb-org-name-tags',
          ),
          'foundingYear' => 
          array (
            'label' => 'LBL_DNB_BAL_YEAR_OF_FOUNDING',
            'id' => 'dnb-year-of-founding-tags',
          ),
          'prescreenScore' => 
          array (
            'label' => 'LBL_DNB_BAL_PRESCREEN_SCORE',
            'select2' => 'dnb_bal_prescreen_score',
          ),
          'dunsNum' => 
          array (
            'label' => 'LBL_DNB_BAL_DUNS',
            'id' => 'dnb-duns-tags',
          ),
          'orgid' => 
          array (
            'label' => 'LBL_DNB_BAL_ORG_ID',
            'id' => 'dnb-bal-org-id-tags',
          ),
        ),
        'industry' => 
        array (
          'industryCode' => 
          array (
            'id' => 'dnb-ind-code-tags',
          ),
        ),
      ),
    ),
  ),
  'dnb-bal-results' => 
  array (
    'templates' => 
    array (
      'dnb-bal-acct-rslt' => '
<div class="dashboard" data-dashboard="true">
    <div class="cols row-fluid">
        <div>
            <div class="preview-headerbar">
                <div class="headerpane">
                    <span class="record-cell">
                        <h1 class="dnb-account-create">
                            <span class="detail">
                                {{str "LBL_DNB_BAL_RSLT"}}
                            </span>
                        </h1>
                    </span>
                </div>
            </div>
        </div>
        <ul class="dashlets row-fluid">
            <li class="span12">
                <ul class="dashlet-row ui-sortable ui-sortable-disabled">
                    <li class="dashlet-container span12">
                        <div>
                            <div class="thumbnail dashlet dashlet-dnb-tall">
                                <div data-dashlet="toolbar">
                                    <div class="dashlet-header">
                                        <h4 data-toggle="dashlet">
                                            {{#if dnbBalRslt.count}}
                                                {{dnbBalRslt.count}}
                                            {{else}}
                                                {{str "LBL_DNB_BAL_PREVIEW" this.module}}
                                            {{/if}}
                                        </h4>
                                    </div>
                                </div>
                                <div data-dashlet="dashlet" class="dashlet-content">
                                    <div id="dnb-bal-result-loading" class="block-footer hide">
                                        {{str "LBL_DNB_BAL_LOAD"}} ...
                                    </div>
                                    <div id="dnb-bal-result" class="hide">
                                        {{#if dnbBalRslt.product}}
                                            <ul class="unstyled listed" id="dnb-results-list">
                                                {{#each dnbBalRslt.product}}
                                                    <li>
                                                        <div class=\'dnb-bal-rslt\'>
                                                            <a class="dnb-company-name" id="{{this.duns_num}}">
                                                                {{this.name}}
                                                            </a>
                                                            {{#if this.locationtype}}
                                                                <span class="label pull-right" data-placement="right">
                                                                    {{this.locationtype}}
                                                                </span>
                                                            {{/if}}
                                                        </div>
                                                        <div class="record-label dnb-bal-list">
                                                            {{#if this.billing_address_city}}
                                                                {{this.billing_address_city}},
                                                            {{/if}}
                                                            {{#if this.billing_address_state}}
                                                                {{this.billing_address_state}},
                                                            {{/if}}
                                                            {{#if this.billing_address_country}}
                                                                {{this.billing_address_country}}
                                                            {{/if}}
                                                            {{#if this.isDupe}}
                                                                <span class="label label-important pull-right" data-placement="right">
                                                                    {{str "LBL_DNB_DUPLICATE"}}
                                                                </span>
                                                            {{/if}}
                                                        </div>
                                                    </li>
                                                {{/each}}
                                            </ul>
                                        {{else}}
                                            <aside class=\'create-no-data\'>
                                                {{#if dnbBalRslt.errmsg}}
                                                    <em>{{dnbBalRslt.errmsg}}</em>
                                                {{else}}
                                                    <em>{{str "LBL_DNB_NO_DATA"}}</em>
                                                {{/if}}
                                            </aside>
                                        {{/if}}
                                    </div>
                                </div>
                                <div class="block-footer hide" id="dnb-page-ctrl">
                                    <button data-action="show-more" class="btn btn-link btn-invisible more">
                                        {{str "LBL_DNB_MORE_SRCH_RES"}}
                                    </button>
                                    <div class="loading">
                                        {{str "LBL_ALERT_TITLE_LOADING"}}
                                        <i class="l1 icon-circle"></i>
                                        <i class="l2 icon-circle"></i>
                                        <i class="l3 icon-circle"></i>
                                    </div>
                                </div>
                                <div class="swappable-dashlet icon-download-alt"></div>
                            </div>
                        </div>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</div>


',
      'dnb-company-details' => '
<div class="dashboard" data-dashboard="true">
    <div class="cols row-fluid">
        <div>
            <div class="preview-headerbar">
                <div class="headerpane">
                    <span class="record-cell">
                        <h1 class="dnb-account-create">
                            <span class="detail">
                                {{str "LBL_DNB_BAL_RSLT"}}
                            </span>
                        </h1>
                    </span>
                </div>
            </div>
        </div>
        <ul class="dashlets row-fluid">
            <li class="span12">
                <ul class="dashlet-row ui-sortable ui-sortable-disabled">
                    <li class="row-fluid sortable" data-sortable="1">
                        <div class="rows well well-invisible">
                            <ul class="dashlet-cell rows row-fluid">
                                <li class="dashlet-container span12">
                                    <div>
                                        <div class="thumbnail dashlet">
                                            <div data-dashlet="toolbar">
                                                <div class="dashlet-header">
                                                    <div class="btn-toolbar pull-right">
                                                    	<span sfuuid="1007" class="dashlet-toolbar">
                                                    		<a href="javascript:void(0);" data-dashletaction="importDNBData" class="btn btn-primary importDNBData">
                                                                {{str "LBL_DNB_IMPORT"}}
                                                            </a>
														</span>
                                                    </div>
                                                    <h4 data-toggle="dashlet">
                                                        {{str "LBL_DNB_COMP_INFO"}}
                                                    </h4>
                                                </div>
                                            </div>
                                            <div data-dashlet="dashlet" class="dashlet-content">
                                                <div id="dnb-company-detail-loading" class="block-footer">
                                                    {{str "LBL_DNB_COMP_INFO_LOAD"}} ...
                                                </div>
                                                <div id="dnb-company-details">
                                                    <div class="dnb-show-all">
                                                        {{#if dnbFirmo.product}}
                                                            <div class=\'dnb-company-details\'>
                                                                <ul class="unstyled listed">
                                                                    {{#each dnbFirmo.product}}
                                                                        <li>
                                                                            <div class=\'dnb-company-label\'>
                                                                                {{#if dnbLabel}}
                                                                                    {{{dnbLabel}}}
                                                                                {{else}}
                                                                                    {{str dataLabel}}
                                                                                {{/if}}
                                                                            </div>
                                                                            {{#if dataType}}
                                                                                {{#eq dataType \'link\'}}
                                                                                    <div class="url-txt importData">
                                                                                {{/eq}}
                                                                            {{else}}
                                                                                <div class="txt importData">
                                                                            {{/if}}
                                                                                {{{dataElement}}}
                                                                            </div>
                                                                        </li>
                                                                    {{/each}}
                                                                </ul>
                                                            </div>
                                                        {{else}}
                                                            <aside class=\'create-no-data\'>
                                                                {{#if dnbFirmo.errmsg}}
                                                                    <em>{{dnbFirmo.errmsg}}</em>
                                                                {{else}}
                                                                    <em>{{str "LBL_DNB_NO_DATA"}}</em>
                                                                {{/if}}
                                                            </aside>
                                                        {{/if}}
                                                    </div>
                                                    {{#if dnbFirmo.backToListLabel}}
                                                        <div class="dnb-show-more">
                                                            <a class="backToList"> {{dnbFirmo.backToListLabel}} <i class="icon-chevron-down"></i> </a>
                                                        </div>
                                                    {{/if}}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</div>
',
    ),
    'controller' => 
    array (
      'base' => '/*
     * Your installation or use of this SugarCRM file is subject to the applicable
     * terms available at
     * http://support.sugarcrm.com/06_Customer_Center/10_Master_Subscription_Agreements/.
     * If you do not agree to all of the applicable terms or do not have the
     * authority to bind the entity as an authorized representative, then do not
     * install or use this SugarCRM file.
     *
     * Copyright (C) SugarCRM Inc. All rights reserved.
     */
({extendsFrom:\'DnbBalResultsView\',events:{\'click .importDNBData\':\'importDNBData\',\'click a.dnb-company-name\':\'getCompanyDetails\',\'click .backToList\':\'backToCompanyList\',\'click [data-action="show-more"]\':\'invokePagination\'},selectors:{\'load\':\'#dnb-bal-result-loading\',\'rslt\':\'#dnb-bal-result\'},balAcctDD:null,initialize:function(options){this._super(\'initialize\',[options]);this.initDD();this.initDashlet();this.paginationCallback=this.baseAccountsBAL;},initDD:function(){this.balAcctDD={\'name\':this.searchDD.companyname,\'duns_num\':this.searchDD.duns_num,\'billing_address_street\':this.searchDD.streetaddr,\'billing_address_city\':this.searchDD.town,\'billing_address_state\':this.searchDD.territory,\'billing_address_country\':this.searchDD.ctrycd,\'recordNum\':{\'json_path\':\'DisplaySequence\'}};this.balAcctDD.locationtype=this.searchDD.locationtype;this.balAcctDD.isDupe=this.searchDD.isDupe;},loadData:function(options){this.checkConnector(\'ext_rest_dnb\',_.bind(this.loadDataWithValidConnector,this),_.bind(this.handleLoadError,this),[\'test_passed\']);},_render:function(){app.view.View.prototype._renderHtml.call(this);},buildAList:function(balParams){if(this.disposed){return;}
this.template=app.template.getView(this.name+\'.dnb-bal-acct-rslt\',this.module);if(this.dnbBalRslt&&this.dnbBalRslt.count){delete this.dnbBalRslt[\'count\'];}
this.render();this.$(this.selectors.load).removeClass(\'hide\');this.$(this.selectors.rslt).addClass(\'hide\');this.baseAccountsBAL(balParams,this.renderBAL);},renderBAL:function(dnbBalApiRsp){var dnbBalRslt={};if(this.resetPaginationFlag){this.initPaginationParams();}
if(dnbBalApiRsp.product){var apiCompanyList=this.getJsonNode(dnbBalApiRsp.product,this.commonJSONPaths.srchRslt);this.formattedRecordSet=this.formatSrchRslt(apiCompanyList,this.balAcctDD);this.recordCount=this.getJsonNode(dnbBalApiRsp.product,this.commonJSONPaths.srchCount);this.paginateRecords();dnbBalRslt.product=this.currentPage;if(this.recordCount){dnbBalRslt.count=this.recordCount;}}else if(dnbBalApiRsp.errmsg){dnbBalRslt.errmsg=dnbBalApiRsp.errmsg;}
this.renderPage(dnbBalRslt);},renderPage:function(pageData){if(this.disposed){return;}
this.template=this.template=app.template.getView(this.name+\'.dnb-bal-acct-rslt\',this.module);this.dnbBalRslt=pageData;if(_.isUndefined(pageData.count)){pageData.count=this.recordCount;}
if(pageData.product){this.dnbBalRslt.count=app.lang.get(\'LBL_DNB_BAL_ACCT_HEADER\')+" ("+this.formatSalesRevenue(pageData.count)+")";}else{delete this.dnbBalRslt[\'count\'];}
this.render();this.$(this.selectors.load).addClass(\'hide\');this.$(this.selectors.rslt).removeClass(\'hide\');if(pageData.product){this.renderPaginationControl();}},getCompanyDetails:function(evt){if(this.disposed){return;}
var duns_num=evt.target.id;if(duns_num){this.template=app.template.getView(this.name+\'.dnb-company-details\',this.module);this.render();this.$(\'div#dnb-company-details\').hide();this.$(\'.importDNBData\').hide();this.baseCompanyInformation(duns_num,this.compInfoProdCD.std,app.lang.get(\'LBL_DNB_BAL_LIST\'),this.renderCompanyDetails);}},renderCompanyDetails:function(companyDetails){if(this.disposed){return;}
var formattedFirmographics,dnbFirmo={};if(companyDetails.errmsg){this.$(\'.importDNBData\').hide();}else if(companyDetails.product){this.$(\'.importDNBData\').show();formattedFirmographics=this.formatCompanyInfo(companyDetails.product,this.accountsDD);dnbFirmo.product=formattedFirmographics;dnbFirmo.backToListLabel=companyDetails.backToListLabel;this.currentCompany=companyDetails.product;}
this.dnbFirmo=dnbFirmo;this.render();this.$(\'div#dnb-company-detail-loading\').hide();this.$(\'div#dnb-company-details\').show();},backToCompanyList:function(){if(this.disposed){return;}
if(this.dnbBalRslt&&this.dnbBalRslt.count){delete this.dnbBalRslt[\'count\'];}
this.template=app.template.getView(this.name+\'.dnb-bal-acct-rslt\',this.module);this.render();this.$(this.selectors.load).removeClass(\'hide\');this.$(this.selectors.rslt).addClass(\'hide\');var dupeCheckParams={\'type\':\'duns\',\'apiResponse\':this.currentPage,\'module\':\'dunsPage\'};this.baseDuplicateCheck(dupeCheckParams,this.renderPage);}})',
    ),
  ),
  'dupecheck-list' => 
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
              'name' => 'name',
              'width' => 49,
              'link' => true,
              'label' => 'LBL_LIST_ACCOUNT_NAME',
              'enabled' => true,
              'default' => true,
            ),
            1 => 
            array (
              'name' => 'billing_address_city',
              'width' => 13,
              'label' => 'LBL_LIST_CITY',
              'enabled' => true,
              'default' => true,
            ),
            2 => 
            array (
              'name' => 'billing_address_country',
              'width' => 13,
              'label' => 'LBL_BILLING_ADDRESS_COUNTRY',
              'enabled' => true,
              'default' => true,
            ),
            3 => 
            array (
              'name' => 'phone_office',
              'width' => '10%',
              'label' => 'LBL_LIST_PHONE',
              'enabled' => true,
              'default' => true,
            ),
            4 => 
            array (
              'name' => 'assigned_user_name',
              'width' => '10%',
              'label' => 'LBL_LIST_ASSIGNED_USER',
              'id' => 'ASSIGNED_USER_ID',
              'enabled' => true,
              'default' => false,
            ),
            5 => 
            array (
              'name' => 'email',
              'width' => '15%',
              'label' => 'LBL_EMAIL_ADDRESS',
              'enabled' => true,
              'default' => false,
            ),
            6 => 
            array (
              'name' => 'date_entered',
              'width' => 13,
              'type' => 'datetime',
              'label' => 'LBL_DATE_ENTERED',
              'enabled' => true,
              'default' => false,
              'readonly' => true,
            ),
          ),
        ),
      ),
    ),
  ),
  'panel-top-for-prospectlists' => 
  array (
    'meta' => 
    array (
      'type' => 'panel-top',
      'buttons' => 
      array (
        0 => 
        array (
          'type' => 'button',
          'css_class' => 'btn-invisible',
          'icon' => 'icon-chevron-up',
          'tooltip' => 'LBL_TOGGLE_VISIBILITY',
        ),
        1 => 
        array (
          'type' => 'actiondropdown',
          'name' => 'panel_dropdown',
          'css_class' => 'pull-right',
          'buttons' => 
          array (
            0 => 
            array (
              'type' => 'sticky-rowaction',
              'icon' => 'icon-plus',
              'name' => 'create_button',
              'label' => ' ',
              'acl_action' => 'create',
              'tooltip' => 'LBL_CREATE_BUTTON_LABEL',
            ),
            1 => 
            array (
              'type' => 'link-action',
              'name' => 'select_button',
              'label' => 'LBL_ASSOC_RELATED_RECORD',
            ),
            2 => 
            array (
              'type' => 'linkfromreportbutton',
              'name' => 'select_button',
              'label' => 'LBL_SELECT_REPORTS_BUTTON_LABEL',
              'initial_filter' => 'by_module',
              'initial_filter_label' => 'LBL_FILTER_ACCOUNTS_REPORTS',
              'filter_populate' => 
              array (
                'module' => 
                array (
                  0 => 'Accounts',
                ),
              ),
            ),
          ),
        ),
      ),
    ),
  ),
  'recordlist' => 
  array (
    'meta' => 
    array (
      'selection' => 
      array (
        'type' => 'multi',
        'actions' => 
        array (
          0 => 
          array (
            'name' => 'mass_email_button',
            'type' => 'mass-email-button',
            'label' => 'LBL_EMAIL_COMPOSE',
            'primary' => true,
            'events' => 
            array (
              'click' => 'list:massaction:hide',
            ),
            'acl_module' => 'Emails',
            'acl_action' => 'edit',
            'related_fields' => 
            array (
              0 => 'name',
              1 => 'email',
            ),
          ),
          1 => 
          array (
            'name' => 'edit_button',
            'type' => 'button',
            'label' => 'LBL_MASS_UPDATE',
            'primary' => true,
            'events' => 
            array (
              'click' => 'list:massupdate:fire',
            ),
            'acl_action' => 'massupdate',
          ),
          2 => 
          array (
            'name' => 'calc_field_button',
            'type' => 'button',
            'label' => 'LBL_UPDATE_CALC_FIELDS',
            'events' => 
            array (
              'click' => 'list:updatecalcfields:fire',
            ),
            'acl_action' => 'massupdate',
          ),
          3 => 
          array (
            'name' => 'addtolist_button',
            'type' => 'button',
            'label' => 'LBL_ADD_TO_PROSPECT_LIST_BUTTON_LABEL',
            'primary' => true,
            'events' => 
            array (
              'click' => 'list:massaddtolist:fire',
            ),
            'acl_module' => 'ProspectLists',
            'acl_action' => 'edit',
          ),
          4 => 
          array (
            'name' => 'merge_button',
            'type' => 'button',
            'label' => 'LBL_MERGE',
            'primary' => true,
            'events' => 
            array (
              'click' => 'list:mergeduplicates:fire',
            ),
            'acl_action' => 'edit',
          ),
          5 => 
          array (
            'name' => 'delete_button',
            'type' => 'button',
            'label' => 'LBL_DELETE',
            'acl_action' => 'delete',
            'primary' => true,
            'events' => 
            array (
              'click' => 'list:massdelete:fire',
            ),
          ),
          6 => 
          array (
            'name' => 'export_button',
            'type' => 'button',
            'label' => 'LBL_EXPORT',
            'acl_action' => 'export',
            'primary' => true,
            'events' => 
            array (
              'click' => 'list:massexport:fire',
            ),
          ),
        ),
      ),
    ),
  ),
  'resolve-conflicts-list' => 
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
              'name' => 'name',
              'width' => 49,
              'link' => true,
              'label' => 'LBL_LIST_ACCOUNT_NAME',
              'enabled' => true,
              'default' => true,
            ),
            1 => 
            array (
              'name' => 'billing_address_city',
              'width' => 13,
              'label' => 'LBL_LIST_CITY',
              'enabled' => true,
              'default' => true,
            ),
            2 => 
            array (
              'name' => 'billing_address_country',
              'width' => 13,
              'label' => 'LBL_BILLING_ADDRESS_COUNTRY',
              'enabled' => true,
              'default' => true,
            ),
            3 => 
            array (
              'name' => 'phone_office',
              'width' => '10%',
              'label' => 'LBL_LIST_PHONE',
              'enabled' => true,
              'default' => true,
            ),
            4 => 
            array (
              'name' => 'assigned_user_name',
              'width' => '10%',
              'label' => 'LBL_LIST_ASSIGNED_USER',
              'id' => 'ASSIGNED_USER_ID',
              'enabled' => true,
              'default' => false,
            ),
            5 => 
            array (
              'name' => 'email',
              'width' => '15%',
              'label' => 'LBL_EMAIL_ADDRESS',
              'enabled' => true,
              'default' => false,
            ),
            6 => 
            array (
              'name' => 'date_entered',
              'type' => 'datetime',
              'label' => 'LBL_DATE_ENTERED',
              'enabled' => true,
              'width' => 13,
              'default' => false,
              'readonly' => true,
            ),
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
          'name' => 'panel_header',
          'label' => 'LBL_PANEL_1',
          'fields' => 
          array (
            0 => 
            array (
              'name' => 'name',
              'width' => 49,
              'link' => true,
              'label' => 'LBL_LIST_ACCOUNT_NAME',
              'enabled' => true,
              'default' => true,
            ),
            1 => 
            array (
              'name' => 'billing_address_city',
              'width' => 13,
              'label' => 'LBL_LIST_CITY',
              'enabled' => true,
              'default' => true,
            ),
            2 => 
            array (
              'name' => 'billing_address_country',
              'width' => 13,
              'label' => 'LBL_BILLING_ADDRESS_COUNTRY',
              'enabled' => true,
              'default' => true,
            ),
            3 => 
            array (
              'name' => 'phone_office',
              'width' => '10%',
              'label' => 'LBL_LIST_PHONE',
              'enabled' => true,
              'default' => true,
            ),
            4 => 
            array (
              'name' => 'assigned_user_name',
              'width' => '10%',
              'label' => 'LBL_LIST_ASSIGNED_USER',
              'id' => 'ASSIGNED_USER_ID',
              'enabled' => true,
              'default' => false,
            ),
            5 => 
            array (
              'name' => 'email',
              'width' => '15%',
              'label' => 'LBL_EMAIL_ADDRESS',
              'enabled' => true,
              'default' => false,
            ),
            6 => 
            array (
              'name' => 'date_entered',
              'type' => 'datetime',
              'label' => 'LBL_DATE_ENTERED',
              'enabled' => true,
              'width' => 13,
              'default' => false,
              'readonly' => true,
            ),
          ),
        ),
      ),
    ),
  ),
  'subpanel-for-prospectlists' => 
  array (
    'meta' => 
    array (
      'type' => 'subpanel-list',
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
              'name' => 'name',
              'label' => 'LBL_NAME',
              'enabled' => true,
              'default' => true,
            ),
            1 => 
            array (
              'label' => 'LBL_LIST_PHONE',
              'enabled' => true,
              'default' => true,
              'name' => 'phone_office',
            ),
            2 => 
            array (
              'label' => 'LBL_LIST_EMAIL',
              'enabled' => true,
              'default' => true,
              'name' => 'email',
            ),
            3 => 
            array (
              'label' => 'LBL_ASSIGNED_TO',
              'enabled' => true,
              'default' => true,
              'name' => 'assigned_user_name',
            ),
          ),
        ),
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
              'default' => true,
              'label' => 'LBL_LIST_ACCOUNT_NAME',
              'enabled' => true,
              'name' => 'name',
              'link' => true,
            ),
            1 => 
            array (
              'default' => true,
              'label' => 'LBL_LIST_CITY',
              'enabled' => true,
              'name' => 'billing_address_city',
            ),
            2 => 
            array (
              'type' => 'varchar',
              'default' => true,
              'label' => 'LBL_BILLING_ADDRESS_COUNTRY',
              'enabled' => true,
              'name' => 'billing_address_country',
            ),
            3 => 
            array (
              'default' => true,
              'label' => 'LBL_LIST_PHONE',
              'enabled' => true,
              'name' => 'phone_office',
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
  '_hash' => '2007870beece84e0757e2f3f45c23756',
);

