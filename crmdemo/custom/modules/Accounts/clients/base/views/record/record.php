<?php
// created: 2018-06-13 10:47:53
$viewdefs['Accounts']['base']['view']['record'] = array (
  'buttons' => 
  array (
    0 => 
    array (
      'type' => 'button',
      'name' => 'cancel_button',
      'label' => 'LBL_CANCEL_BUTTON_LABEL',
      'css_class' => 'btn-invisible btn-link',
      'showOn' => 'edit',
      'events' => 
      array (
        'click' => 'button:cancel_button:click',
      ),
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
        1 => 
        array (
          'name' => 'name',
          'events' => 
          array (
            'keyup' => 'update:account',
          ),
        ),
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
          'label' => 'LBL_PHONE_ALT',
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
          'inline' => true,
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
        14 => 
        array (
          'name' => 'tag',
          'span' => 12,
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
);