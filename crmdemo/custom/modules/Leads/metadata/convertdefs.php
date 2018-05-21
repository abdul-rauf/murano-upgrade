<?php
$viewdefs = array (
  'Contacts' => 
  array (
    'ConvertLead' => 
    array (
      'copyData' => true,
      'select' => false,
      'required' => true,
      'module' => 'Contacts',
      'templateMeta' => 
      array (
        'form' => 
        array (
          'hidden' => 
          array (
            0 => '<input type="hidden" name="opportunity_id" value="{$smarty.request.opportunity_id}">',
            1 => '<input type="hidden" name="case_id" value="{$smarty.request.case_id}">',
            2 => '<input type="hidden" name="bug_id" value="{$smarty.request.bug_id}">',
            3 => '<input type="hidden" name="email_id" value="{$smarty.request.email_id}">',
            4 => '<input type="hidden" name="inbound_email_id" value="{$smarty.request.inbound_email_id}">',
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
      ),
      'panels' => 
      array (
        'LNK_NEW_CONTACT' => 
        array (
          0 => 
          array (
            0 => 
            array (
              'name' => 'first_name',
              'customCode' => '{html_options name="Contactssalutation" options=$fields.salutation.options selected=$fields.salutation.value}&nbsp;<input name="Contactsfirst_name" size="25" maxlength="25" type="text" value="{$fields.first_name.value}">',
            ),
            1 => 
            array (
              'name' => 'title',
              'comment' => 'The title of the contact',
              'label' => 'LBL_TITLE',
            ),
          ),
          1 => 
          array (
            0 => 
            array (
              'name' => 'last_name',
              'comment' => 'Last name of the contact',
              'label' => 'LBL_LAST_NAME',
            ),
            1 => 
            array (
              'name' => 'account_name',
              'label' => 'LBL_ACCOUNT_NAME',
            ),
          ),
          2 => 
          array (
            0 => 
            array (
              'name' => 'primary_address_street',
              'label' => 'LBL_PRIMARY_ADDRESS',
            ),
            1 => 
            array (
              'name' => 'phone_work',
              'comment' => 'Work phone number of the contact',
              'label' => 'LBL_OFFICE_PHONE',
            ),
          ),
          3 => 
          array (
            0 => 
            array (
              'name' => 'primary_address_state',
              'label' => 'LBL_STATE',
            ),
            1 => 
            array (
              'name' => 'phone_mobile',
              'comment' => 'Mobile phone number of the contact',
              'label' => 'LBL_MOBILE_PHONE',
            ),
          ),
          4 => 
          array (
            0 => 
            array (
              'name' => 'primary_address_postalcode',
              'label' => 'LBL_POSTAL_CODE',
            ),
            1 => 
            array (
              'name' => 'phone_other',
              'comment' => 'Other phone number for the contact',
              'label' => 'LBL_OTHER_PHONE',
            ),
          ),
          5 => 
          array (
            0 => 
            array (
              'name' => 'primary_address_country',
              'label' => 'LBL_COUNTRY',
            ),
            1 => 
            array (
              'name' => 'phone_fax',
              'comment' => 'Contact fax number',
              'label' => 'LBL_FAX_PHONE',
            ),
          ),
          6 => 
          array (
            0 => 
            array (
              'name' => 'assistant',
              'comment' => 'Name of the assistant of the contact',
              'label' => 'LBL_ASSISTANT',
            ),
            1 => 
            array (
              'name' => 'assistant_phone',
              'comment' => 'Phone number of the assistant of the contact',
              'label' => 'LBL_ASSISTANT_PHONE',
            ),
          ),
          7 => 
          array (
            0 => 
            array (
              'name' => 'email1',
              'studio' => 
              array (
                'editField' => true,
              ),
              'label' => 'LBL_EMAIL_ADDRESS',
            ),
            1 => 
            array (
              'name' => 'lead_source',
              'comment' => 'How did the contact come about',
              'label' => 'LBL_LEAD_SOURCE',
            ),
          ),
          8 => 
          array (
            0 => 
            array (
              'name' => 'description',
              'comment' => 'Full text of the note',
              'label' => 'LBL_DESCRIPTION',
            ),
          ),
        ),
      ),
    ),
  ),
  'Accounts' => 
  array (
    'ConvertLead' => 
    array (
      'copyData' => true,
      'select' => 'account_name',
      'required' => true,
      'module' => 'Accounts',
      'default_action' => 'create',
      'relationship' => 'accounts_contacts',
      'templateMeta' => 
      array (
        'form' => 
        array (
          'hidden' => 
          array (
            0 => '<input type="hidden" name="opportunity_id" value="{$smarty.request.opportunity_id}">',
            1 => '<input type="hidden" name="case_id" value="{$smarty.request.case_id}">',
            2 => '<input type="hidden" name="bug_id" value="{$smarty.request.bug_id}">',
            3 => '<input type="hidden" name="email_id" value="{$smarty.request.email_id}">',
            4 => '<input type="hidden" name="inbound_email_id" value="{$smarty.request.inbound_email_id}">',
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
      ),
      'panels' => 
      array (
        'LNK_NEW_ACCOUNT' => 
        array (
          0 => 
          array (
            0 => 
            array (
              'name' => 'name',
              'comment' => 'Name of the Company',
              'label' => 'LBL_NAME',
            ),
            1 => 
            array (
              'name' => 'phone_office',
              'comment' => 'The office phone number',
              'label' => 'LBL_PHONE_OFFICE',
            ),
          ),
          1 => 
          array (
            0 => 
            array (
              'name' => 'website',
              'comment' => 'URL of website for the company',
              'label' => 'LBL_WEBSITE',
            ),
          ),
          2 => 
          array (
            0 => 
            array (
              'name' => 'description',
              'comment' => 'Full text of the note',
              'label' => 'LBL_DESCRIPTION',
            ),
          ),
          3 => 
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
          4 => 
          array (
            0 => 
            array (
              'name' => 'news_links_c',
              'studio' => 'visible',
              'label' => 'LBL_NEWS_LINKS',
            ),
            1 => 
            array (
              'name' => 'investment_geography_c',
              'studio' => 'visible',
              'label' => 'LBL_INVESTMENT_GEOGRAPHY',
            ),
          ),
          5 => 
          array (
            0 => 
            array (
              'name' => 'fund_strategy_c',
              'studio' => 'visible',
              'label' => 'LBL_FUND_STRATEGY',
            ),
            1 => 
            array (
              'name' => 'fundname_c',
              'label' => 'LBL_FUNDNAME',
            ),
          ),
          6 => 
          array (
            0 => 
            array (
              'name' => 'fundmanager_c',
              'label' => 'LBL_FUNDMANAGER ',
            ),
            1 => 
            array (
              'name' => 'fundtype_c',
              'studio' => 'visible',
              'label' => 'LBL_FUNDTYPE',
            ),
          ),
        ),
      ),
    ),
  ),
  'Opportunities' => 
  array (
    'ConvertLead' => 
    array (
      'copyData' => true,
      'select' => false,
      'required' => false,
      'module' => 'Opportunities',
      'templateMeta' => 
      array (
        'form' => 
        array (
          'hidden' => 
          array (
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
      ),
      'panels' => 
      array (
        'LNK_NEW_OPPORTUNITY' => 
        array (
          0 => 
          array (
            0 => 
            array (
              'name' => 'name',
              'comment' => 'Name of the opportunity',
              'label' => 'LBL_OPPORTUNITY_NAME',
            ),
          ),
          1 => 
          array (
            0 => 
            array (
              'name' => 'currency_id',
              'comment' => 'Currency used for display purposes',
              'label' => 'LBL_CURRENCY',
            ),
            1 => 
            array (
              'name' => 'amount',
              'comment' => 'Unconverted amount of the opportunity',
              'label' => 'LBL_AMOUNT',
            ),
          ),
          2 => 
          array (
            0 => 
            array (
              'name' => 'sales_stage',
              'comment' => 'Indication of progression towards closure',
              'label' => 'LBL_SALES_STAGE',
            ),
            1 => 
            array (
              'name' => 'next_step',
              'comment' => 'The next step in the sales process',
              'label' => 'LBL_NEXT_STEP',
            ),
          ),
          3 => 
          array (
            0 => 
            array (
              'name' => 'date_closed',
              'comment' => 'Expected or actual date the oppportunity will close',
              'label' => 'LBL_DATE_CLOSED',
            ),
            1 => 
            array (
              'name' => 'lead_source',
              'comment' => 'Source of the opportunity',
              'label' => 'LBL_LEAD_SOURCE',
            ),
          ),
          4 => 
          array (
            0 => 
            array (
              'name' => 'probability',
              'comment' => 'The probability of closure',
              'label' => 'LBL_PROBABILITY',
            ),
            1 => 
            array (
              'name' => 'team_name',
              'label' => 'LBL_TEAMS',
            ),
          ),
          5 => 
          array (
            0 => 
            array (
              'name' => 'description',
              'comment' => 'Full text of the note',
              'label' => 'LBL_DESCRIPTION',
            ),
          ),
        ),
      ),
    ),
  ),
  'Notes' => 
  array (
    'ConvertLead' => 
    array (
      'copyData' => false,
      'select' => false,
      'required' => false,
      'module' => 'Notes',
      'templateMeta' => 
      array (
        'form' => 
        array (
          'hidden' => 
          array (
            0 => '<input type="hidden" name="opportunity_id" value="{$smarty.request.opportunity_id}">',
            1 => '<input type="hidden" name="case_id" value="{$smarty.request.case_id}">',
            2 => '<input type="hidden" name="bug_id" value="{$smarty.request.bug_id}">',
            3 => '<input type="hidden" name="email_id" value="{$smarty.request.email_id}">',
            4 => '<input type="hidden" name="inbound_email_id" value="{$smarty.request.inbound_email_id}">',
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
      ),
      'panels' => 
      array (
        'LNK_NEW_NOTE' => 
        array (
          0 => 
          array (
            0 => 
            array (
              'name' => 'name',
              'displayParams' => 
              array (
                'size' => 90,
              ),
            ),
          ),
          1 => 
          array (
            0 => 
            array (
              'name' => 'description',
              'displayParams' => 
              array (
                'rows' => 10,
                'cols' => 90,
              ),
            ),
          ),
        ),
      ),
    ),
  ),
  'Calls' => 
  array (
    'ConvertLead' => 
    array (
      'copyData' => false,
      'select' => false,
      'required' => false,
      'module' => 'Calls',
      'templateMeta' => 
      array (
        'form' => 
        array (
          'hidden' => 
          array (
            0 => '<input type="hidden" name="opportunity_id" value="{$smarty.request.opportunity_id}">',
            1 => '<input type="hidden" name="case_id" value="{$smarty.request.case_id}">',
            2 => '<input type="hidden" name="bug_id" value="{$smarty.request.bug_id}">',
            3 => '<input type="hidden" name="email_id" value="{$smarty.request.email_id}">',
            4 => '<input type="hidden" name="inbound_email_id" value="{$smarty.request.inbound_email_id}">',
            5 => '<input type="hidden" name="Callsstatus" value="{sugar_translate label=\'call_status_default\'}">',
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
      ),
      'panels' => 
      array (
        'LNK_NEW_CALL' => 
        array (
          0 => 
          array (
            0 => 
            array (
              'name' => 'name',
              'displayParams' => 
              array (
                'size' => 90,
              ),
            ),
          ),
          1 => 
          array (
            0 => 'date_start',
            1 => 
            array (
              'name' => 'duration_hours',
              'label' => 'LBL_DURATION',
              'customCode' => '{literal}
<script type="text/javascript">
    function isValidCallsDuration() { 
        form = document.getElementById(\'ConvertLead\');
        if ( form.duration_hours.value + form.duration_minutes.value <= 0 ) {
            alert(\'{/literal}{sugar_translate label="NOTICE_DURATION_TIME" module="Calls"}{literal}\'); 
            return false;
        }
        return true; 
    }
</script>{/literal}
<input name="Callsduration_hours" tabindex="1" size="2" maxlength="2" type="text" value="{$fields.duration_hours.value}"/>
{php}$this->_tpl_vars["minutes_values"] = $this->_tpl_vars["bean"]->minutes_values;{/php}
{html_options name="Callsduration_minutes" options=$minutes_values selected=$fields.duration_minutes.value} &nbsp;
<span class="dateFormat">{sugar_translate label="LBL_HOURS_MINUTES" module="Calls"}',
              'displayParams' => 
              array (
                'required' => true,
              ),
            ),
          ),
          2 => 
          array (
            0 => 
            array (
              'name' => 'description',
              'displayParams' => 
              array (
                'rows' => 10,
                'cols' => 90,
              ),
            ),
          ),
        ),
      ),
    ),
  ),
  'Meetings' => 
  array (
    'ConvertLead' => 
    array (
      'copyData' => false,
      'select' => false,
      'required' => false,
      'module' => 'Meetings',
      'templateMeta' => 
      array (
        'form' => 
        array (
          'hidden' => 
          array (
            0 => '<input type="hidden" name="opportunity_id" value="{$smarty.request.opportunity_id}">',
            1 => '<input type="hidden" name="case_id" value="{$smarty.request.case_id}">',
            2 => '<input type="hidden" name="bug_id" value="{$smarty.request.bug_id}">',
            3 => '<input type="hidden" name="email_id" value="{$smarty.request.email_id}">',
            4 => '<input type="hidden" name="inbound_email_id" value="{$smarty.request.inbound_email_id}">',
            5 => '<input type="hidden" name="Meetingsstatus" value="{sugar_translate label=\'meeting_status_default\'}">',
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
      ),
      'panels' => 
      array (
        'LNK_NEW_MEETING' => 
        array (
          0 => 
          array (
            0 => 
            array (
              'name' => 'name',
              'displayParams' => 
              array (
                'size' => 90,
              ),
            ),
          ),
          1 => 
          array (
            0 => 'date_start',
            1 => 
            array (
              'name' => 'duration_hours',
              'label' => 'LBL_DURATION',
              'customCode' => '{literal}
<script type="text/javascript">
    function isValidMeetingsDuration() { 
        form = document.getElementById(\'ConvertLead\');
        if ( form.duration_hours.value + form.duration_minutes.value <= 0 ) {
            alert(\'{/literal}{sugar_translate label="NOTICE_DURATION_TIME" module="Calls"}{literal}\'); 
            return false;
        }
        return true; 
    }
</script>{/literal}
<input name="Meetingsduration_hours" tabindex="1" size="2" maxlength="2" type="text" value="{$fields.duration_hours.value}" />
{php}$this->_tpl_vars["minutes_values"] = $this->_tpl_vars["bean"]->minutes_values;{/php}
{html_options name="Meetingsduration_minutes" options=$minutes_values selected=$fields.duration_minutes.value} &nbsp;
<span class="dateFormat">{sugar_translate label="LBL_HOURS_MINUTES" module="Calls"}',
              'displayParams' => 
              array (
                'required' => true,
              ),
            ),
          ),
          2 => 
          array (
            0 => 
            array (
              'name' => 'description',
              'displayParams' => 
              array (
                'rows' => 10,
                'cols' => 90,
              ),
            ),
          ),
        ),
      ),
    ),
  ),
  'Tasks' => 
  array (
    'ConvertLead' => 
    array (
      'copyData' => false,
      'select' => false,
      'required' => false,
      'module' => 'Tasks',
      'templateMeta' => 
      array (
        'form' => 
        array (
          'hidden' => 
          array (
            0 => '<input type="hidden" name="opportunity_id" value="{$smarty.request.opportunity_id}">',
            1 => '<input type="hidden" name="case_id" value="{$smarty.request.case_id}">',
            2 => '<input type="hidden" name="bug_id" value="{$smarty.request.bug_id}">',
            3 => '<input type="hidden" name="email_id" value="{$smarty.request.email_id}">',
            4 => '<input type="hidden" name="inbound_email_id" value="{$smarty.request.inbound_email_id}">',
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
      ),
      'panels' => 
      array (
        'LNK_NEW_TASK' => 
        array (
          0 => 
          array (
            0 => 
            array (
              'name' => 'name',
              'displayParams' => 
              array (
                'size' => 90,
              ),
            ),
          ),
          1 => 
          array (
            0 => 'status',
            1 => 'priority',
          ),
          2 => 
          array (
            0 => 
            array (
              'name' => 'description',
              'displayParams' => 
              array (
                'rows' => 10,
                'cols' => 90,
              ),
            ),
          ),
        ),
      ),
    ),
  ),
);
?>
