<?php
$viewdefs['Calls'] = 
array (
  'EditView' => 
  array (
    'templateMeta' => 
    array (
      'maxColumns' => '2',
      'form' => 
      array (
        'hidden' => 
        array (
          0 => '<input type="hidden" name="isSaveAndNew" value="false">',
          1 => '<input type="hidden" name="send_invites">',
          2 => '<input type="hidden" name="user_invitees">',
          3 => '<input type="hidden" name="lead_invitees">',
          4 => '<input type="hidden" name="contact_invitees">',
        ),
        'buttons' => 
        array (
          /*0 => 
          array (
            'customCode' => '<input title="{$APP.LBL_SAVE_BUTTON_TITLE}" accessKey="{$APP.LBL_SAVE_BUTTON_KEY}" class="button primary" onclick="fill_invitees();document.forms[\'EditView\'].action.value=\'Save\'; document.forms[\'EditView\'].return_action.value=\'DetailView\'; {if isset($smarty.request.isDuplicate) && $smarty.request.isDuplicate eq "true"}document.forms[\'EditView\'].return_id.value=\'\'; {/if}formSubmitCheck();;" type="button" name="button" value="{$APP.LBL_SAVE_BUTTON_LABEL}">',
          ),*/
          1 => 'CANCEL',
          /*2 => 
          array (
            'customCode' => '<input title="{$MOD.LBL_SEND_BUTTON_TITLE}" class="button" onclick="document.forms[\'EditView\'].send_invites.value=\'1\';fill_invitees();document.forms[\'EditView\'].action.value=\'Save\';document.forms[\'EditView\'].return_action.value=\'EditView\';document.forms[\'EditView\'].return_module.value=\'{$smarty.request.return_module}\';formSubmitCheck();;" type="button" name="button" value="{$MOD.LBL_SEND_BUTTON_LABEL}">',
          ),
          3 => 
          array (
            'customCode' => '{if $fields.status.value != "Held"}<input title="{$APP.LBL_CLOSE_AND_CREATE_BUTTON_TITLE}" accessKey="{$APP.LBL_CLOSE_AND_CREATE_BUTTON_KEY}" class="button" onclick="fill_invitees(); document.forms[\'EditView\'].status.value=\'Held\'; document.forms[\'EditView\'].action.value=\'Save\'; document.forms[\'EditView\'].return_module.value=\'Calls\'; document.forms[\'EditView\'].isDuplicate.value=true; document.forms[\'EditView\'].isSaveAndNew.value=true; document.forms[\'EditView\'].return_action.value=\'EditView\'; document.forms[\'EditView\'].return_id.value=\'{$fields.id.value}\'; formSubmitCheck();" type="button" name="button" value="{$APP.LBL_CLOSE_AND_CREATE_BUTTON_LABEL}">{/if}',
          ),*/
        ),
        'footerTpl' => 'modules/Calls/tpls/footer.tpl',
      ),
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
      'javascript' => '<script type="text/javascript" src="include/JSON.js?s=94932f0dc915603816562a2cc59dbcd0&c=1"></script>
<script type="text/javascript" src="include/jsolait/init.js?s=94932f0dc915603816562a2cc59dbcd0&c=1"></script>
<script type="text/javascript" src="include/jsolait/lib/urllib.js?s=94932f0dc915603816562a2cc59dbcd0&c=1"></script>
<script type="text/javascript">{$JSON_CONFIG_JAVASCRIPT}</script>
<script type="text/javascript" src="include/javascript/jsclass_base.js?s=94932f0dc915603816562a2cc59dbcd0&c=1"></script>
<script type="text/javascript" src="include/javascript/jsclass_async.js?s=94932f0dc915603816562a2cc59dbcd0&c=1"></script>
<script type="text/javascript" src="modules/Meetings/jsclass_scheduler.js?s=94932f0dc915603816562a2cc59dbcd0&c=1"></script>
<script>toggle_portal_flag();function toggle_portal_flag()  {ldelim} {$TOGGLE_JS} {rdelim} 
function formSubmitCheck(){ldelim}if(check_form(\'EditView\') && isValidDuration()){ldelim}document.forms[\'EditView\'].submit();{rdelim}{rdelim}</script>',
      'useTabs' => true,
      'tabDefs' => 
      array (
        'LBL_EDITVIEW_PANEL2' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
        'LBL_CALL_INFORMATION' => 
        array (
          'newTab' => true,
          'panelDefault' => 'expanded',
        ),
        'LBL_PANEL_ASSIGNMENT' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
        'LBL_EDITVIEW_PANEL1' => 
        array (
          'newTab' => true,
          'panelDefault' => 'expanded',
        ),
      ),
      'syncDetailEditViews' => true,
    ),
    'panels' => 
    array (
      'lbl_editview_panel2' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'email_reminder_time',
            'comment' => 'Specifies when a email reminder alert should be issued; -1 means no alert; otherwise the number of seconds prior to the start',
            'studio' => 
            array (
              'wirelesseditview' => false,
            ),
            'label' => 'LBL_EMAIL_REMINDER_TIME',
          ),
          1 => 
          array (
            'name' => 'duration_hours',
            'label' => 'LBL_DURATION',
            // 'customCode' => '{literal}<script type="text/javascript">function isValidDuration() { form = document.getElementById(\'EditView\'); if ( form.duration_hours.value + form.duration_minutes.value <= 0 ) { alert(\'{/literal}{$MOD.NOTICE_DURATION_TIME}{literal}\'); return false; } return true; }</script>{/literal}<input id="duration_hours" name="duration_hours" size="2" maxlength="2" type="text" value="{$fields.duration_hours.value}" onkeyup="SugarWidgetScheduler.update_time();"/>{$fields.duration_minutes.value}&nbsp;<span class="dateFormat">{$MOD.LBL_HOURS_MINUTES}</span>',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'reminder_time',
            // 'customCode' => '{include file="modules/Meetings/tpls/reminders.tpl"}',
            'label' => 'LBL_REMINDER',
          ),
          1 => 
          array (
            'name' => 'date_end',
            'comment' => 'Date is which call is scheduled to (or did) end',
            'studio' => 
            array (
              'wirelesseditview' => false,
            ),
            'label' => 'LBL_DATE_END',
          ),
        ),
      ),
      'lbl_call_information' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'name',
            0 => 
            array (
              'name' => 'status',
              'fields' => 
              array (
                0 => 
                array (
                  'name' => 'direction',
                ),
                1 => 
                array (
                  'name' => 'status',
                ),
              ),
            ),
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'parent_name',
            'label' => 'LBL_LIST_RELATED_TO',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'status',
            'comment' => 'The status of the call (Held, Not Held, etc.)',
            'label' => 'LBL_STATUS',
          ),
          1 => 
          array (
            'name' => 'vtsl_c',
            'label' => 'LBL_VTSL',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'description',
            'comment' => 'Full text of the note',
            'label' => 'LBL_DESCRIPTION',
          ),
          1 => 
          array (
            'name' => 'users_calls_1_name',
          ),
        ),
      ),
      'LBL_PANEL_ASSIGNMENT' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'assigned_user_name',
            'label' => 'LBL_ASSIGNED_TO_NAME',
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
      'lbl_editview_panel1' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'date_start',
            'displayParams' => 
            array (
              'updateCallback' => 'SugarWidgetScheduler.update_time();',
            ),
            'label' => 'LBL_DATE_TIME',
          ),
          1 => 
          array (
            'name' => 'direction',
            'comment' => 'Indicates whether call is inbound or outbound',
            'label' => 'LBL_DIRECTION',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'calling_c',
            'label' => 'LBL_CALLING',
          ),
          1 => 
          array (
            'name' => 'called_c',
            'label' => 'LBL_CALLED',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'ring_c',
            'label' => 'LBL_RING',
          ),
          1 => 
          array (
            'name' => 'answer_c',
            'studio' => 'visible',
            'label' => 'LBL_ANSWER',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'wait_c',
            'label' => 'LBL_WAIT',
          ),
          1 => 
          array (
            'name' => 'talk_c',
            'label' => 'LBL_TALK',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'extension_c',
            'label' => 'LBL_EXTENSION',
          ),
          1 => 
          array (
            'name' => 'site_c',
            'label' => 'LBL_SITE',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'class_of_service_c',
            'studio' => 'visible',
            'label' => 'LBL_CLASS_OF_SERVICE',
          ),
          1 => 
          array (
            'related_fields' => 
            array (
              0 => 'currency_id',
              1 => 'base_rate',
            ),
            'name' => 'cost_c',
            'label' => 'LBL_COST',
          ),
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'call_source_c',
            'label' => 'LBL_CALL_SOURCE',
          ),
          1 => 
          array (
            'name' => 'date_entered',
            'comment' => 'Date record created',
            'studio' => 
            array (
              'portaleditview' => false,
            ),
            'readonly' => true,
            'label' => 'LBL_DATE_ENTERED',
          ),
        ),
        7 => 
        array (
          0 => 
          array (
            'name' => 'charge_description_c',
            'studio' => 'visible',
            'label' => 'LBL_CHARGE_DESCRIPTION',
          ),
          1 => 
          array (
            'name' => 'call_hour_c',
            'label' => 'LBL_CALL_HOUR',
          ),
        ),
      ),
    ),
  ),
);
