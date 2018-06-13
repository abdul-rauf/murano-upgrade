<?php
// created: 2018-06-13 11:24:59
$viewdefs['Calls']['EditView'] = array (
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
        0 => 
        array (
        ),
        1 => 'CANCEL',
        2 => 
        array (
        ),
        3 => 
        array (
        ),
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
        ),
      ),
      1 => 
      array (
        0 => 
        array (
          'name' => 'reminder_time',
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
);