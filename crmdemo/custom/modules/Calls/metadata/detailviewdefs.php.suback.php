<?php
$viewdefs['Calls'] = 
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
            // 'customCode' => '{if $fields.status.value != "Held"} <input type="hidden" name="isSaveAndNew" value="false">  <input type="hidden" name="status" value="">  <input type="hidden" name="isSaveFromDetailView" value="true">  <input title="{$APP.LBL_CLOSE_AND_CREATE_BUTTON_TITLE}"  accesskey="{$APP.LBL_CLOSE_AND_CREATE_BUTTON_KEY}"  class="button"  onclick="this.form.status.value=\'Held\'; this.form.action.value=\'Save\';this.form.return_module.value=\'Calls\';this.form.isDuplicate.value=true;this.form.isSaveAndNew.value=true;this.form.return_action.value=\'EditView\'; this.form.return_id.value=\'{$fields.id.value}\'"  name="button"  value="{$APP.LBL_CLOSE_AND_CREATE_BUTTON_TITLE}"  type="submit">{/if}',
          ),
          4 => 
          array (
            // 'customCode' => '{if $fields.status.value != "Held"} <input type="hidden" name="isSave" value="false">  <input title="{$APP.LBL_CLOSE_BUTTON_TITLE}"  accesskey="{$APP.LBL_CLOSE_BUTTON_KEY}"  class="button"  onclick="this.form.status.value=\'Held\'; this.form.action.value=\'Save\';this.form.return_module.value=\'Calls\';this.form.isSave.value=true;this.form.return_action.value=\'DetailView\'; this.form.return_id.value=\'{$fields.id.value}\'"  name="button1"  value="{$APP.LBL_CLOSE_BUTTON_TITLE}"  type="submit">{/if}',
          ),
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
            // 'customCode' => '{$fields.duration_hours.value}{$MOD.LBL_HOURS_ABBREV} {$fields.duration_minutes.value}{$MOD.LBL_MINSS_ABBREV}&nbsp;',
            'label' => 'LBL_DURATION',
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
            'label' => 'LBL_SUBJECT',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'parent_name',
            'customLabel' => '{sugar_translate label=\'LBL_MODULE_NAME\' module=$fields.parent_type.value}',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'status',
            'comment' => 'The status of the call (Held, Not Held, etc.)',
            'studio' => 
            array (
              'detailview' => false,
            ),
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
            // 'customCode' => '{$fields.assigned_user_name.value}',
            'label' => 'LBL_ASSIGNED_TO',
          ),
          1 => 
          array (
            'name' => 'team_name',
            'label' => 'LBL_TEAMS',
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
            // 'customCode' => '{$fields.date_start.value} {$fields.time_start.value}&nbsp;',
            'label' => 'LBL_DATE_TIME',
          ),
          1 => 
          array (
            'name' => 'direction',
            // 'customCode' => '{$fields.direction.options[$fields.direction.value]} {$fields.status.options[$fields.status.value]}',
            'label' => 'LBL_STATUS',
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
            // 'customCode' => '{$fields.date_entered.value} {$APP.LBL_BY} {$fields.created_by_name.value}&nbsp;',
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
