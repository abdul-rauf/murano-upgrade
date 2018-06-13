<?php
// created: 2018-06-13 10:45:20
$viewdefs['Leads']['EditView'] = array (
  'templateMeta' => 
  array (
    'form' => 
    array (
      'hidden' => 
      array (
        0 => '<input type="hidden" name="prospect_id" value="{if isset($smarty.request.prospect_id)}{$smarty.request.prospect_id}{else}{$bean->prospect_id}{/if}">',
        1 => '<input type="hidden" name="account_id" value="{if isset($smarty.request.account_id)}{$smarty.request.account_id}{else}{$bean->account_id}{/if}">',
        2 => '<input type="hidden" name="contact_id" value="{if isset($smarty.request.contact_id)}{$smarty.request.contact_id}{else}{$bean->contact_id}{/if}">',
        3 => '<input type="hidden" name="opportunity_id" value="{if isset($smarty.request.opportunity_id)}{$smarty.request.opportunity_id}{else}{$bean->opportunity_id}{/if}">',
      ),
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
    'javascript' => '<script type="text/javascript" language="Javascript">function copyAddressRight(form)  {ldelim} form.alt_address_street.value = form.primary_address_street.value;form.alt_address_city.value = form.primary_address_city.value;form.alt_address_state.value = form.primary_address_state.value;form.alt_address_postalcode.value = form.primary_address_postalcode.value;form.alt_address_country.value = form.primary_address_country.value;return true; {rdelim} function copyAddressLeft(form)  {ldelim} form.primary_address_street.value =form.alt_address_street.value;form.primary_address_city.value = form.alt_address_city.value;form.primary_address_state.value = form.alt_address_state.value;form.primary_address_postalcode.value =form.alt_address_postalcode.value;form.primary_address_country.value = form.alt_address_country.value;return true; {rdelim} </script>',
    'syncDetailEditViews' => false,
    'tabDefs' => 
    array (
      'LBL_CONTACT_INFORMATION' => 
      array (
        'newTab' => false,
        'panelDefault' => 'expanded',
      ),
      'LBL_EDITVIEW_PANEL1' => 
      array (
        'newTab' => false,
        'panelDefault' => 'expanded',
      ),
      'LBL_PANEL_ADVANCED' => 
      array (
        'newTab' => false,
        'panelDefault' => 'expanded',
      ),
      'LBL_EDITVIEW_PANEL2' => 
      array (
        'newTab' => false,
        'panelDefault' => 'collapsed',
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
          'name' => 'first_name',
          'customCode' => '{html_options name="salutation" id="salutation" options=$fields.salutation.options selected=$fields.salutation.value}&nbsp;<input name="first_name"  id="first_name" size="25" maxlength="25" type="text" value="{$fields.first_name.value}">',
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
          'name' => 'last_name',
          'displayParams' => 
          array (
            'required' => true,
          ),
        ),
        1 => 
        array (
          'name' => 'phone_mobile',
          'comment' => 'Mobile phone number of the contact',
          'label' => 'LBL_MOBILE_PHONE',
        ),
      ),
      2 => 
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
      3 => 
      array (
        0 => 
        array (
          'name' => 'account_name',
          'type' => 'varchar',
          'validateDependency' => false,
          'customCode' => '<input name="account_name" id="EditView_account_name" {if ($fields.converted.value == 1)}disabled="true"{/if} size="30" maxlength="255" type="text" value="{$fields.account_name.value}">',
        ),
        1 => 
        array (
          'name' => 'website',
          'comment' => 'URL of website for the company',
          'label' => 'LBL_WEBSITE',
        ),
      ),
      4 => 
      array (
        0 => 
        array (
          'name' => 'con1',
          'comment' => 'The street address used for billing address',
          'label' => 'LBL_CONSULTANTS',
          'type' => 'consultants',
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
          'name' => 'affiliate_c',
          'label' => 'LBL_AFFILIATE',
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
        1 => 'email',
      ),
      8 => 
      array (
        0 => 
        array (
          'name' => 'primary_address_street',
          'hideLabel' => true,
          'type' => 'address',
          'displayParams' => 
          array (
            'key' => 'primary',
            'rows' => 2,
            'cols' => 30,
            'maxlength' => 150,
          ),
        ),
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
          'name' => 'weekly_investor_updates_c',
          'studio' => 'visible',
          'label' => 'LBL_WEEKLY_INVESTOR_UPDATES',
        ),
        1 => 
        array (
          'name' => 'go_on_web_c',
          'label' => 'LBL_GO_ON_WEB',
        ),
      ),
    ),
    'lbl_editview_panel1' => 
    array (
      0 => 
      array (
        0 => 
        array (
          'name' => 'allocating_c',
          'studio' => 'visible',
          'label' => 'LBL_ALLOCATING',
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
          'tabindex' => '2',
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
          'name' => 'targ_return_c',
          'label' => 'LBL_TARG_RETURN',
        ),
      ),
      7 => 
      array (
        0 => 
        array (
          'name' => 'min_track1_c',
          'label' => 'LBL_MIN_TRACK1_C',
        ),
        1 => 
        array (
          'name' => 'pref_liquid_1c_c',
          'label' => 'LBL_PREF_LIQUID_1C',
        ),
      ),
      8 => 
      array (
        0 => 
        array (
          'name' => 'req_aum_c',
          'label' => 'LBL_REQ_AUM',
        ),
        1 => 
        array (
          'name' => 'pref_liquid_c',
          'studio' => 'visible',
          'label' => 'LBL_PREF_LIQUID',
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
        ),
      ),
      2 => 
      array (
        0 => 
        array (
          'name' => 'assigned_user_name',
          'label' => 'LBL_ASSIGNED_TO',
        ),
      ),
      3 => 
      array (
        0 => 
        array (
          'name' => 'tempanalyst_c',
          'studio' => 'visible',
          'label' => 'LBL_TEMPANALYST',
        ),
        1 => '',
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
    'lbl_editview_panel2' => 
    array (
      0 => 
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
      1 => 
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
      2 => 
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
      3 => 
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
      4 => 
      array (
        0 => 
        array (
          'name' => 'trip9_c',
          'studio' => 'visible',
          'label' => 'LBL_TRIP9',
        ),
        1 => 
        array (
          'name' => 'feedback_c',
          'studio' => 'visible',
          'label' => 'LBL_FEEDBACK',
        ),
      ),
      5 => 
      array (
        0 => 
        array (
          'name' => 'feedback2_c',
          'studio' => 'visible',
          'label' => 'LBL_FEEDBACK2',
        ),
        1 => 
        array (
          'name' => 'feedback3_c',
          'studio' => 'visible',
          'label' => 'LBL_FEEDBACK3',
        ),
      ),
    ),
  ),
);