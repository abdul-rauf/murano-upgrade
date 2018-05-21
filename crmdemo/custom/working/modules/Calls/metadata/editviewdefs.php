<?php
$viewdefs ['Calls'] = 
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
          0 => 
          array (
            'customCode' => '<input title="{$APP.LBL_SAVE_BUTTON_TITLE}" accessKey="{$APP.LBL_SAVE_BUTTON_KEY}" class="button primary" onclick="fill_invitees();document.forms[\'EditView\'].action.value=\'Save\'; document.forms[\'EditView\'].return_action.value=\'DetailView\'; {if isset($smarty.request.isDuplicate) && $smarty.request.isDuplicate eq "true"}document.forms[\'EditView\'].return_id.value=\'\'; {/if}formSubmitCheck();;" type="button" name="button" value="{$APP.LBL_SAVE_BUTTON_LABEL}">',
          ),
          1 => 'CANCEL',
          2 => 
          array (
            'customCode' => '<input title="{$MOD.LBL_SEND_BUTTON_TITLE}" class="button" onclick="document.forms[\'EditView\'].send_invites.value=\'1\';fill_invitees();document.forms[\'EditView\'].action.value=\'Save\';document.forms[\'EditView\'].return_action.value=\'EditView\';document.forms[\'EditView\'].return_module.value=\'{$smarty.request.return_module}\';formSubmitCheck();;" type="button" name="button" value="{$MOD.LBL_SEND_BUTTON_LABEL}">',
          ),
          3 => 
          array (
            'customCode' => '{if $fields.status.value != "Held"}<input title="{$APP.LBL_CLOSE_AND_CREATE_BUTTON_TITLE}" accessKey="{$APP.LBL_CLOSE_AND_CREATE_BUTTON_KEY}" class="button" onclick="fill_invitees(); document.forms[\'EditView\'].status.value=\'Held\'; document.forms[\'EditView\'].action.value=\'Save\'; document.forms[\'EditView\'].return_module.value=\'Calls\'; document.forms[\'EditView\'].isDuplicate.value=true; document.forms[\'EditView\'].isSaveAndNew.value=true; document.forms[\'EditView\'].return_action.value=\'EditView\'; document.forms[\'EditView\'].return_id.value=\'{$fields.id.value}\'; formSubmitCheck();" type="button" name="button" value="{$APP.LBL_CLOSE_AND_CREATE_BUTTON_LABEL}">{/if}',
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
      'useTabs' => false,
    ),
    'panels' => 
    array (
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
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'description',
            'comment' => 'Full text of the note',
            'label' => 'LBL_DESCRIPTION',
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
    ),
  ),
);
?>
