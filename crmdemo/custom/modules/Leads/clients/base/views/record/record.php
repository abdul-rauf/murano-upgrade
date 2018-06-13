<?php
// created: 2018-06-13 15:14:56
$viewdefs['Leads']['base']['view']['record'] = array (
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
          'type' => 'convertbutton',
          'name' => 'lead_convert_button',
          'label' => 'LBL_CONVERT_BUTTON_LABEL',
          'acl_action' => 'edit',
        ),
        6 => 
        array (
          'type' => 'manage-subscription',
          'name' => 'manage_subscription_button',
          'label' => 'LBL_MANAGE_SUBSCRIPTIONS',
          'acl_action' => 'view',
        ),
        7 => 
        array (
          'type' => 'vcard',
          'name' => 'vcard_button',
          'label' => 'LBL_VCARD_DOWNLOAD',
          'acl_action' => 'view',
        ),
        8 => 
        array (
          'type' => 'divider',
        ),
        9 => 
        array (
          'type' => 'rowaction',
          'event' => 'button:find_duplicates_button:click',
          'name' => 'find_duplicates_button',
          'label' => 'LBL_DUP_MERGE',
          'acl_action' => 'edit',
        ),
        10 => 
        array (
          'type' => 'rowaction',
          'event' => 'button:duplicate_button:click',
          'name' => 'duplicate_button',
          'label' => 'LBL_DUPLICATE_BUTTON_LABEL',
          'acl_module' => 'Leads',
          'acl_action' => 'create',
        ),
        11 => 
        array (
          'type' => 'rowaction',
          'event' => 'button:historical_summary_button:click',
          'name' => 'historical_summary_button',
          'label' => 'LBL_HISTORICAL_SUMMARY',
          'acl_action' => 'view',
        ),
        12 => 
        array (
          'type' => 'rowaction',
          'event' => 'button:audit_button:click',
          'name' => 'audit_button',
          'label' => 'LNK_VIEW_CHANGE_LOG',
          'acl_action' => 'view',
        ),
        13 => 
        array (
          'type' => 'divider',
        ),
        14 => 
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
      'header' => true,
      'fields' => 
      array (
        0 => 
        array (
          'name' => 'picture',
          'type' => 'avatar',
          'size' => 'large',
          'dismiss_label' => true,
        ),
        1 => 
        array (
          'type' => 'favorite',
        ),
        2 => 
        array (
          'type' => 'follow',
          'readonly' => true,
        ),
        3 => 
        array (
          'name' => 'converted',
          'type' => 'badge',
          'dismiss_label' => true,
          'readonly' => true,
          'related_fields' => 
          array (
            0 => 'account_id',
            1 => 'account_name',
            2 => 'contact_id',
            3 => 'contact_name',
            4 => 'opportunity_id',
            5 => 'opportunity_name',
          ),
        ),
        4 => 
        array (
          'name' => 'name',
          'type' => 'fullname',
          'label' => 'LBL_NAME',
          'dismiss_label' => true,
          'fields' => 
          array (
            0 => 
            array (
              'name' => 'salutation',
              'type' => 'enum',
              'enum_width' => 'auto',
              'searchBarThreshold' => 7,
            ),
            1 => 'first_name',
            2 => 'last_name',
          ),
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
        0 => 'phone_work',
        1 => 'title',
        2 => 
        array (
          'name' => 'phone_other',
          'comment' => 'Other phone number for the contact',
          'label' => 'LBL_OTHER_PHONE',
        ),
        3 => 'account_name',
        4 => 'phone_mobile',
        5 => 
        array (
          'name' => 'affiliate_c',
          'label' => 'LBL_AFFILIATE',
        ),
        6 => 
        array (
          'name' => 'con1',
          'comment' => 'The street address used for billing address',
          'label' => 'LBL_CONSULTANTS',
        ),
        7 => 
        array (
          'name' => 'assistant_phone',
          'comment' => 'Phone number of the assistant of the contact',
          'label' => 'LBL_ASSISTANT_PHONE',
        ),
        8 => 
        array (
          'name' => 'mifid_c',
          'studio' => 'visible',
          'label' => 'LBL_MIFID',
        ),
        9 => 
        array (
          'name' => 'primary_address',
          'type' => 'fieldset',
          'css_class' => 'address',
          'label' => 'LBL_PRIMARY_ADDRESS',
          'fields' => 
          array (
            0 => 
            array (
              'name' => 'primary_address_street',
              'css_class' => 'address_street',
              'placeholder' => 'LBL_PRIMARY_ADDRESS_STREET',
            ),
            1 => 
            array (
              'name' => 'primary_address_city',
              'css_class' => 'address_city',
              'placeholder' => 'LBL_PRIMARY_ADDRESS_CITY',
            ),
            2 => 
            array (
              'name' => 'primary_address_state',
              'css_class' => 'address_state',
              'placeholder' => 'LBL_PRIMARY_ADDRESS_STATE',
            ),
            3 => 
            array (
              'name' => 'primary_address_postalcode',
              'css_class' => 'address_zip',
              'placeholder' => 'LBL_PRIMARY_ADDRESS_POSTALCODE',
            ),
            4 => 
            array (
              'name' => 'primary_address_country',
              'css_class' => 'address_country',
              'placeholder' => 'LBL_PRIMARY_ADDRESS_COUNTRY',
            ),
          ),
        ),
        10 => 'website',
        11 => 
        array (
          'name' => 'continent_c',
          'studio' => 'visible',
          'label' => 'LBL_CONTINENT',
        ),
        12 => 'email',
        13 => 
        array (
          'name' => 'further_information_c',
          'studio' => 'visible',
          'label' => 'LBL_FURTHER_INFORMATION',
        ),
        14 => 
        array (
          'name' => 'account_description',
          'comment' => 'Description of lead account',
          'label' => 'LBL_ACCOUNT_DESCRIPTION',
        ),
        15 => 
        array (
          'name' => 'generate_doc',
          'comment' => 'BUTTON FOR GENERATE DOC',
          'studio' => 
          array (
            'detailview' => true,
          ),
          'label' => 'LBL_GENERATE_DOC',
        ),
        16 => 
        array (
          'name' => 'go_on_web_c',
          'label' => 'LBL_GO_ON_WEB',
        ),
        17 => 
        array (
          'name' => 'allocating_c',
          'studio' => 'visible',
          'label' => 'LBL_ALLOCATING',
        ),
        18 => 
        array (
          'name' => 'quick_email',
          'comment' => 'BUTTON FOR QUICK EMAIL',
          'label' => 'LBL_SEND_QUICK_EMAIL',
          'span' => 12,
        ),
        19 => 'twitter',
        20 => 
        array (
          'name' => 'dnb_principal_id',
          'readonly' => true,
        ),
        21 => 
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
          'name' => 'fsa_c',
          'studio' => 'visible',
          'label' => 'LBL_FSA',
        ),
        1 => 
        array (
          'name' => 'required_aum_c',
          'studio' => 'visible',
          'label' => 'LBL_REQUIRED_AUM',
        ),
        2 => 
        array (
          'name' => 'aum_c',
          'label' => 'LBL_AUM',
        ),
        3 => 
        array (
          'name' => 'peralloc_hf_c',
          'label' => 'LBL_PERALLOC_HF',
        ),
        4 => 
        array (
          'name' => 'fum_curr1_c',
          'studio' => 'visible',
          'label' => 'LBL_FUM_CURR1',
        ),
        5 => 
        array (
          'name' => 'typ_invest_c',
          'label' => 'LBL_TYP_INVEST',
        ),
        6 => 
        array (
          'name' => 'fund_type_c',
          'studio' => 'visible',
          'label' => 'LBL_FUND_TYPE',
        ),
        7 => 
        array (
          'name' => 'loc_pref_c',
          'studio' => 'visible',
          'label' => 'LBL_LOC_PREF',
        ),
        8 => 
        array (
          'name' => 'spec_strat_pref_c',
          'studio' => 'visible',
          'label' => 'LBL_SPEC_STRAT_PREF',
        ),
        9 => 
        array (
          'name' => 'vol_pref_c',
          'studio' => 'visible',
          'label' => 'LBL_VOL_PREF',
        ),
        10 => 
        array (
          'name' => 'investor_typ_c',
          'studio' => 'visible',
          'label' => 'LBL_INVESTOR_TYP',
        ),
        11 => 
        array (
          'name' => 'investment_geography_c',
          'studio' => 'visible',
          'label' => 'LBL_INVESTMENT_GEOGRAPHY',
        ),
        12 => 
        array (
          'name' => 'min_track_c',
          'studio' => 'visible',
          'label' => 'LBL_MIN_TRACK',
        ),
        13 => 
        array (
          'name' => 'targ_return_c',
          'label' => 'LBL_TARG_RETURN',
        ),
        14 => 
        array (
          'name' => 'req_aum_c',
          'label' => 'LBL_REQ_AUM',
        ),
        15 => 
        array (
          'name' => 'pref_liquid_c',
          'studio' => 'visible',
          'label' => 'LBL_PREF_LIQUID',
        ),
        16 => 
        array (
          'name' => 'avg_time_monitored_c',
          'label' => 'LBL_AVG_TIME_MONITORED',
          'span' => 12,
        ),
      ),
      'newTab' => true,
      'panelDefault' => 'expanded',
    ),
    3 => 
    array (
      'name' => 'lbl_panel_advanced',
      'label' => 'LBL_PANEL_ADVANCED',
      'columns' => 2,
      'labels' => true,
      'labelsOnTop' => true,
      'placeholders' => true,
      'fields' => 
      array (
        0 => 
        array (
          'name' => 'status',
          'type' => 'status',
        ),
        1 => 
        array (
          'name' => 'lead_source_cp',
          'comment' => 'Lead source (ex: Web, print)',
          'studio' => 
          array (
            'detailview' => true,
            'editview' => true,
          ),
          'label' => 'LBL_LEAD_SOURCE',
        ),
        2 => 'status_description',
        3 => 
        array (
          'name' => 'lead_source_description_cp',
          'comment' => 'BUTTON FOR QUICK EMAIL',
          'studio' => 
          array (
            'detailview' => true,
            'editview' => true,
          ),
          'label' => 'LBL_LEAD_SOURCE_DESCRIPTION',
        ),
        4 => 'opportunity_amount',
        5 => 
        array (
          'name' => 'refered_by',
          'comment' => 'Identifies who refered the lead',
          'label' => 'LBL_REFERED_BY',
        ),
        6 => 'assigned_user_name',
        7 => 
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
        8 => 
        array (
          'name' => 'last_spoke_c',
          'label' => 'LBL_LAST_SPOKE',
        ),
        9 => 
        array (
          'name' => 'investor_rating_c',
          'studio' => 'visible',
          'label' => 'LBL_INVESTOR_RATING',
        ),
      ),
      'newTab' => true,
      'panelDefault' => 'expanded',
    ),
    4 => 
    array (
      'name' => 'lbl_detailview_panel2',
      'label' => 'LBL_DETAILVIEW_PANEL2',
      'columns' => 2,
      'labels' => true,
      'labelsOnTop' => true,
      'placeholders' => true,
      'fields' => 
      array (
        0 => 
        array (
          'name' => 'client_list_c',
          'studio' => 'visible',
          'label' => 'LBL_CLIENT_LIST',
        ),
        1 => 'phone_fax',
        2 => 
        array (
          'name' => 'alt_address',
          'type' => 'fieldset',
          'css_class' => 'address',
          'label' => 'LBL_ALT_ADDRESS',
          'fields' => 
          array (
            0 => 
            array (
              'name' => 'alt_address_street',
              'css_class' => 'address_street',
              'placeholder' => 'LBL_ALT_ADDRESS_STREET',
            ),
            1 => 
            array (
              'name' => 'alt_address_city',
              'css_class' => 'address_city',
              'placeholder' => 'LBL_ALT_ADDRESS_CITY',
            ),
            2 => 
            array (
              'name' => 'alt_address_state',
              'css_class' => 'address_state',
              'placeholder' => 'LBL_ALT_ADDRESS_STATE',
            ),
            3 => 
            array (
              'name' => 'alt_address_postalcode',
              'css_class' => 'address_zip',
              'placeholder' => 'LBL_ALT_ADDRESS_POSTALCODE',
            ),
            4 => 
            array (
              'name' => 'alt_address_country',
              'css_class' => 'address_country',
              'placeholder' => 'LBL_ALT_ADDRESS_COUNTRY',
            ),
            5 => 
            array (
              'name' => 'copy',
              'label' => 'NTC_COPY_PRIMARY_ADDRESS',
              'type' => 'copy',
              'mapping' => 
              array (
                'primary_address_street' => 'alt_address_street',
                'primary_address_city' => 'alt_address_city',
                'primary_address_state' => 'alt_address_state',
                'primary_address_postalcode' => 'alt_address_postalcode',
                'primary_address_country' => 'alt_address_country',
              ),
            ),
          ),
        ),
        3 => 
        array (
          'name' => 'weekly_investor_updates_c',
          'studio' => 'visible',
          'label' => 'LBL_WEEKLY_INVESTOR_UPDATES',
        ),
        4 => 'team_name',
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