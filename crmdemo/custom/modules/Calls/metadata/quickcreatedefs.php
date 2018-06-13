<?php
// created: 2018-06-13 14:43:24
$viewdefs['Calls']['QuickCreate'] = array (
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
          'customCode' => '<input title="{$APP.LBL_SAVE_BUTTON_TITLE}" accessKey="{$APP.LBL_SAVE_BUTTON_KEY}" class="button" onclick="SUGAR.calls.fill_invitees();this.form.action.value=\'Save\'; this.form.return_action.value=\'DetailView\'; {if isset($smarty.request.isDuplicate) && $smarty.request.isDuplicate eq "true"}this.form.return_id.value=\'\'; {/if}return check_form(\'EditView\') && isValidDuration();" type="submit" name="button" value="{$APP.LBL_SAVE_BUTTON_LABEL}">',
        ),
        1 => 'CANCEL',
        2 => 
        array (
          'customCode' => '<input title="{$MOD.LBL_SEND_BUTTON_TITLE}" class="button" onclick="this.form.send_invites.value=\'1\';SUGAR.calls.fill_invitees();this.form.action.value=\'Save\';this.form.return_action.value=\'EditView\';this.form.return_module.value=\'{$smarty.request.return_module}\';return check_form(\'EditView\') && isValidDuration();" type="submit" name="button" value="{$MOD.LBL_SEND_BUTTON_LABEL}">',
        ),
        3 => 
        array (
          'customCode' => '{if $fields.status.value != "Held"}<input title="{$APP.LBL_CLOSE_AND_CREATE_BUTTON_TITLE}" class="button" onclick="SUGAR.calls.fill_invitees(); this.form.status.value=\'Held\'; this.form.action.value=\'Save\'; this.form.return_module.value=\'Calls\'; this.form.isDuplicate.value=true; this.form.isSaveAndNew.value=true; this.form.return_action.value=\'EditView\'; this.form.return_id.value=\'{$fields.id.value}\'; return check_form(\'EditView\') && isValidDuration();" type="submit" name="button" value="{$APP.LBL_CLOSE_AND_CREATE_BUTTON_LABEL}">{/if}',
        ),
      ),
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
    'javascript' => '<script type="text/javascript">{$JSON_CONFIG_JAVASCRIPT}</script><script>toggle_portal_flag();function toggle_portal_flag()  {literal} { {/literal} {$TOGGLE_JS} {literal} } {/literal} </script>',
    'useTabs' => false,
    'tabDefs' => 
    array (
      'DEFAULT' => 
      array (
        'newTab' => false,
        'panelDefault' => 'expanded',
      ),
    ),
  ),
  'panels' => 
  array (
    'default' => 
    array (
      0 => 
      array (
        0 => 
        array (
          'name' => 'name',
          'displayParams' => 
          array (
            'required' => true,
          ),
        ),
        1 => 
        array (
          'name' => 'assigned_user_name',
          'label' => 'LBL_ASSIGNED_TO_NAME',
        ),
      ),
      1 => 
      array (
        0 => 
        array (
          'name' => 'description',
          'comment' => 'Full text of the note',
          'label' => 'LBL_DESCRIPTION',
        ),
      ),
      2 => 
      array (
        0 => 
        array (
          'name' => 'parent_name',
          'label' => 'LBL_LIST_RELATED_TO',
        ),
      ),
      3 => 
      array (
        0 => 
        array (
          'name' => 'status',
          'displayParams' => 
          array (
            'required' => true,
          ),
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
        1 => 
        array (
          'name' => 'team_name',
        ),
      ),
    ),
  ),
);