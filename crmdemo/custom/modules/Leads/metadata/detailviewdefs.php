<?php
$viewdefs['Leads'] = 
array (
  'DetailView' => 
  array (
    'templateMeta' => 
    array (
      'form' => 
      array (
        'buttons' => 
        array (
          0 => 'EDIT',
          1 => 'DUPLICATE',
          2 => 'DELETE',
          3 => 
          array (
            'customCode' => '<input title="{$MOD.LBL_CONVERTLEAD_TITLE}" accessKey="{$MOD.LBL_CONVERTLEAD_BUTTON_KEY}" type="button" class="button" onClick="document.location=\'index.php?module=Leads&action=ConvertLead&record={$fields.id.value}\'" name="convert" value="{$MOD.LBL_CONVERTLEAD}">',
          ),
          4 => 
          array (
            'customCode' => '<input title="{$APP.LBL_DUP_MERGE}" accessKey="M" class="button" onclick="this.form.return_module.value=\'Leads\'; this.form.return_action.value=\'DetailView\';this.form.return_id.value=\'{$fields.id.value}\'; this.form.action.value=\'Step1\'; this.form.module.value=\'MergeRecords\';" type="submit" name="Merge" value="{$APP.LBL_DUP_MERGE}">',
          ),
          5 => 
          array (
            'customCode' => '<input title="{$APP.LBL_MANAGE_SUBSCRIPTIONS}" class="button" onclick="this.form.return_module.value=\'Leads\'; this.form.return_action.value=\'DetailView\';this.form.return_id.value=\'{$fields.id.value}\'; this.form.action.value=\'Subscriptions\'; this.form.module.value=\'Campaigns\'; this.form.module_tab.value=\'Leads\';" type="submit" name="Manage Subscriptions" value="{$APP.LBL_MANAGE_SUBSCRIPTIONS}">',
          ),
        ),
        'headerTpl' => 'modules/Leads/tpls/DetailViewHeader.tpl',
      ),
      'maxColumns' => '2',
      'useTabs' => true,
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
          'file' => 'modules/Leads/Lead.js',
        ),
      ),
      'syncDetailEditViews' => false,
      'tabDefs' => 
      array (
        'LBL_CONTACT_INFORMATION' => 
        array (
          'newTab' => true,
          'panelDefault' => 'expanded',
        ),
        'LBL_DETAILVIEW_PANEL1' => 
        array (
          'newTab' => true,
          'panelDefault' => 'expanded',
        ),
        'LBL_PANEL_ADVANCED' => 
        array (
          'newTab' => true,
          'panelDefault' => 'expanded',
        ),
        'LBL_DETAILVIEW_PANEL2' => 
        array (
          'newTab' => true,
          'panelDefault' => 'expanded',
        ),
      ),
    ),
    'panels' => 
    array (
      'LBL_CONTACT_INFORMATION' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'full_name',
            'label' => 'LBL_NAME',
          ),
          1 => 
          array (
            'name' => 'phone_work',
            'comment' => 'Work phone number of the contact',
            'label' => 'LBL_OFFICE_PHONE',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'title',
            'comment' => 'The title of the contact',
            'label' => 'LBL_TITLE',
          ),
          1 => 
          array (
            'name' => 'phone_other',
            'comment' => 'Other phone number for the contact',
            'label' => 'LBL_OTHER_PHONE',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'account_name',
            'comment' => 'Account name for lead',
            'label' => 'LBL_ACCOUNT_NAME',
            'displayParams' => 
            array (
              'enableConnectors' => true,
              'module' => 'Leads',
              'connectors' => 
              array (
                0 => 'ext_rest_twitter',
              ),
            ),
          ),
          1 => 'phone_mobile',
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'affiliate_c',
            'label' => 'LBL_AFFILIATE',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'con1',
            'comment' => 'The street address used for billing address',
            'label' => 'LBL_CONSULTANTS',
          ),
          1 => 
          array (
            'name' => 'assistant_phone',
            'comment' => 'Phone number of the assistant of the contact',
            'label' => 'LBL_ASSISTANT_PHONE',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'mifid_c',
            'studio' => 'visible',
            'label' => 'LBL_MIFID',
          ),
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'primary_address_street',
            'label' => 'LBL_PRIMARY_ADDRESS',
            'type' => 'address',
            'displayParams' => 
            array (
              'key' => 'primary',
            ),
          ),
          1 => 
          array (
            'name' => 'website',
            'comment' => 'URL of website for the company',
            'label' => 'LBL_WEBSITE',
          ),
        ),
        7 => 
        array (
          0 => 
          array (
            'name' => 'continent_c',
            'studio' => 'visible',
            'label' => 'LBL_CONTINENT',
          ),
          1 => 
          array (
            'name' => 'email1',
            'studio' => 
            array (
              'editField' => true,
            ),
            'label' => 'LBL_EMAIL_ADDRESS',
          ),
        ),
        8 => 
        array (
          0 => 
          array (
            'name' => 'difficulty_score_c',
            'label' => 'LBL_DIFFICULTY_SCORE',
          ),
          1 => '',
        ),
        9 => 
        array (
          0 => 
          array (
            'name' => 'further_information_c',
            'studio' => 'visible',
            'label' => 'LBL_FURTHER_INFORMATION',
          ),
          1 => 
          array (
            'name' => 'account_description',
            'comment' => 'Description of lead account',
            'label' => 'LBL_ACCOUNT_DESCRIPTION',
          ),
        ),
        10 => 
        array (
          0 => 
          array (
            'name' => 'generate_doc',
            'comment' => 'BUTTON FOR GENERATE DOC',
            'studio' => 
            array (
              'detailview' => true,
            ),
            'label' => 'LBL_GENERATE_DOC',
            'customCode' => '<input title="{$APP.LBL_DUP_MERGE}" accesskey="M"  onclick="document.DetailView.action.value=\'gen_doc\';document.DetailView.submit();" name="button" value="Investor Report" type="submit"> / <input title="{$APP.LBL_DUP_MERGE}" accesskey="M"  onclick="document.DetailView.action.value=\'gen_doc_new\';document.DetailView.submit();" name="button" value="New Investor Report(Test Version)" type="submit"> ',
          ),
          1 => 
          array (
            'name' => 'go_on_web_c',
            'label' => 'LBL_GO_ON_WEB',
          ),
        ),
        11 => 
        array (
          0 => 
          array (
            'name' => 'allocating_c',
            'studio' => 'visible',
            'label' => 'LBL_ALLOCATING',
          ),
          1 => 
          array (
            'name' => 'quick_email',
            'customCode' => '<input type="button" onClick="document.location.href=\'index.php?module=Leads&action=send_to&record={$fields.id.value}\'" value="Enquire">',
            'label' => 'LBL_SEND_QUICK_EMAIL',
          ),
        ),
      ),
      'lbl_detailview_panel1' => 
      array (
        0 => 
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
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'aum_c',
            'label' => 'LBL_AUM',
          ),
          1 => 
          array (
            'name' => 'peralloc_hf_c',
            'label' => 'LBL_PERALLOC_HF',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'fum_curr1_c',
            'studio' => 'visible',
            'label' => 'LBL_FUM_CURR1',
          ),
          1 => 
          array (
            'name' => 'typ_invest_c',
            'label' => 'LBL_TYP_INVEST',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'fund_type_c',
            'studio' => 'visible',
            'label' => 'LBL_FUND_TYPE',
          ),
          1 => 
          array (
            'name' => 'loc_pref_c',
            'studio' => 'visible',
            'label' => 'LBL_LOC_PREF',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'spec_strat_pref_c',
            'studio' => 'visible',
            'label' => 'LBL_SPEC_STRAT_PREF',
          ),
          1 => 
          array (
            'name' => 'vol_pref_c',
            'studio' => 'visible',
            'label' => 'LBL_VOL_PREF',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'investor_typ_c',
            'studio' => 'visible',
            'label' => 'LBL_INVESTOR_TYP',
          ),
          1 => 
          array (
            'name' => 'investment_geography_c',
            'studio' => 'visible',
            'label' => 'LBL_INVESTMENT_GEOGRAPHY',
          ),
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'min_track_c',
            'studio' => 'visible',
            'label' => 'LBL_MIN_TRACK',
          ),
          1 => 
          array (
            'name' => 'min_track1_c',
            'label' => 'LBL_MIN_TRACK1_C',
          ),
        ),
        7 => 
        array (
          0 => 
          array (
            'name' => 'targ_return_c',
            'label' => 'LBL_TARG_RETURN',
          ),
          1 => 
          array (
            'name' => 'req_aum_c',
            'label' => 'LBL_REQ_AUM',
          ),
        ),
        8 => 
        array (
          0 => 
          array (
            'name' => 'pref_liquid_c',
            'studio' => 'visible',
            'label' => 'LBL_PREF_LIQUID',
          ),
          1 => 
          array (
            'name' => 'pref_liquid_1c_c',
            'label' => 'LBL_PREF_LIQUID_1C',
          ),
        ),
        9 => 
        array (
          0 => 
          array (
            'name' => 'fund_structure_c',
            'studio' => 'visible',
            'label' => 'LBL_FUND_STRUCTURE',
          ),
          1 => 
          array (
            'name' => 'avg_time_monitored_c',
            'label' => 'LBL_AVG_TIME_MONITORED',
          ),
        ),
      ),
      'LBL_PANEL_ADVANCED' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'status',
            'comment' => 'Status of the lead',
            'label' => 'LBL_STATUS',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'status_description',
            'comment' => 'Description of the status of the lead',
            'label' => 'LBL_STATUS_DESCRIPTION',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'opportunity_amount',
            'comment' => 'Amount of the opportunity',
            'label' => 'LBL_OPPORTUNITY_AMOUNT',
          ),
          1 => 
          array (
            'name' => 'refered_by',
            'comment' => 'Identifies who refered the lead',
            'label' => 'LBL_REFERED_BY',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'assigned_user_name',
            'label' => 'LBL_ASSIGNED_TO',
          ),
          1 => 
          array (
            'name' => 'date_modified',
            'label' => 'LBL_DATE_MODIFIED',
            'customCode' => '{$fields.date_modified.value} {$APP.LBL_BY} {$fields.modified_by_name.value}',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'last_spoke_c',
            'label' => 'LBL_LAST_SPOKE',
          ),
          1 => 
          array (
            'name' => 'investor_rating_c',
            'studio' => 'visible',
            'label' => 'LBL_INVESTOR_RATING',
          ),
        ),
      ),
      'lbl_detailview_panel2' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'target_links',
            'studio' => 
            array (
              'listview' => true,
              'detailview' => true,
            ),
            'label' => 'All Target Lists',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'suitable_clients_2_c',
            'studio' => 'visible',
            'label' => 'LBL_SUITABLE_CLIENTS_2',
          ),
          1 => 
          array (
            'name' => 'trips_suitable2_c',
            'studio' => 'visible',
            'label' => 'LBL_TRIPS_SUITABLE2',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'trips_suitable3_c',
            'studio' => 'visible',
            'label' => 'LBL_TRIPS_SUITABLE3',
          ),
          1 => 
          array (
            'name' => 'trips_suitable4_c',
            'studio' => 'visible',
            'label' => 'LBL_TRIPS_SUITABLE4',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'trips_suitable5_c',
            'studio' => 'visible',
            'label' => 'LBL_TRIPS_SUITABLE5',
          ),
          1 => 
          array (
            'name' => 'trip6_c',
            'studio' => 'visible',
            'label' => 'LBL_TRIP6',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'trip7_c',
            'studio' => 'visible',
            'label' => 'LBL_TRIP7',
          ),
          1 => 
          array (
            'name' => 'trip8_c',
            'studio' => 'visible',
            'label' => 'LBL_TRIP8',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'trip9_c',
            'studio' => 'visible',
            'label' => 'LBL_TRIP9',
          ),
          1 => '',
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'inv_groups',
            'studio' => 
            array (
              'listview' => true,
              'detailview' => true,
            ),
            'label' => 'Client Trips',
          ),
          1 => 
          array (
            'name' => 'tempanalyst_c',
            'studio' => 'visible',
            'label' => 'LBL_TEMPANALYST',
          ),
        ),
      ),
    ),
  ),
);
