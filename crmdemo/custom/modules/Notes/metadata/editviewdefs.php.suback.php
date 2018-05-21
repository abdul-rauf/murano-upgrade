<?php
// created: 2015-01-11 07:07:58
$viewdefs['Notes']['EditView'] = array (
  'templateMeta' => 
  array (
    'form' => 
    array (
      'enctype' => 'multipart/form-data',
      'headerTpl' => 'modules/Notes/tpls/EditViewHeader.tpl',
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
    'javascript' => '<script type="text/javascript" src="include/javascript/dashlets.js?s={$SUGAR_VERSION}&c={$JS_CUSTOM_VERSION}"></script>
<script>
function deleteAttachmentCallBack(text) 
	{literal} { {/literal} 
	if(text == \'true\') {literal} { {/literal} 
		document.getElementById(\'new_attachment\').style.display = \'\';
		ajaxStatus.hideStatus();
		document.getElementById(\'old_attachment\').innerHTML = \'\'; 
	{literal} } {/literal} else {literal} { {/literal} 
		document.getElementById(\'new_attachment\').style.display = \'none\';
		ajaxStatus.flashStatus(SUGAR.language.get(\'Notes\', \'ERR_REMOVING_ATTACHMENT\'), 2000); 
	{literal} } {/literal}  
{literal} } {/literal} 
</script>
<script>toggle_portal_flag(); function toggle_portal_flag()  {literal} { {/literal} {$TOGGLE_JS} {literal} } {/literal} </script>',
    'useTabs' => false,
    'tabDefs' => 
    array (
      'LBL_NOTE_INFORMATION' => 
      array (
        'newTab' => false,
        'panelDefault' => 'expanded',
      ),
      'LBL_PANEL_ASSIGNMENT' => 
      array (
        'newTab' => false,
        'panelDefault' => 'expanded',
      ),
    ),
  ),
  'panels' => 
  array (
    'lbl_note_information' => 
    array (
      0 => 
      array (
        0 => 
        array (
          'name' => 'contact_name',
          'label' => 'LBL_CONTACT_NAME',
        ),
        1 => 
        array (
          'name' => 'parent_name',
          'label' => 'LBL_RELATED_TO',
        ),
      ),
      1 => 
      array (
        0 => 
        array (
          'name' => 'name',
          'displayParams' => 
          array (
            'size' => 60,
          ),
        ),
        1 => '',
      ),
      2 => 
      array (
        0 => 'filename',
        1 => 
        array (
          'name' => 'portal_flag',
          'displayParams' => 
          array (
            'required' => false,
          ),
          'customLabel' => '{if ($PORTAL_ENABLED)}{sugar_translate label="LBL_PORTAL_FLAG" module="Notes"}{/if}',
          'customCode' => ' {if ($PORTAL_ENABLED)}
											  {if $fields.portal_flag.value == "1"}
											  {assign var="checked" value="CHECKED"}
											  {else}
											  {assign var="checked" value=""}
											  {/if}
											  <input type="hidden" name="{$fields.portal_flag.name}" value="0"> 
											  <input type="checkbox" name="{$fields.portal_flag.name}" value="1" tabindex="1" {$checked}>
					        		          {/if}',
        ),
      ),
      3 => 
      array (
        0 => 
        array (
          'name' => 'description',
          'label' => 'LBL_NOTE_STATUS',
        ),
        1 => '',
      ),
    ),
    'LBL_PANEL_ASSIGNMENT' => 
    array (
      0 => 
      array (
        0 => 
        array (
          'name' => 'assigned_user_name',
          'label' => 'LBL_ASSIGNED_TO',
        ),
        1 => 
        array (
          'name' => 'team_name',
        ),
      ),
    ),
  ),
);