<?php
// created: 2015-02-22 18:44:41
$viewdefs['Notes']['QuickCreate'] = array (
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
          'name' => 'team_name',
        ),
      ),
      2 => 
      array (
        0 => 
        array (
          'name' => 'name',
          'label' => 'LBL_SUBJECT',
          'displayParams' => 
          array (
            'size' => 100,
            'required' => true,
          ),
        ),
      ),
      3 => 
      array (
        0 => 'filename',
      ),
      4 => 
      array (
        0 => 
        array (
          'name' => 'description',
          'label' => 'LBL_NOTE_STATUS',
          'displayParams' => 
          array (
            'rows' => 6,
            'cols' => 75,
          ),
        ),
      ),
      5 => 
      array (
        0 => 
        array (
          'name' => 'portal_flag',
          'comment' => 'Portal flag indicator determines if note created via portal',
          'label' => 'LBL_PORTAL_FLAG',
          'displayParams' => 
          array (
            'required' => false,
          ),
        ),
      ),
    ),
  ),
);