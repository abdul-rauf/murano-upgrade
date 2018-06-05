<?php /* Smarty version 2.6.11, created on 2018-06-05 09:00:38
         compiled from include/SugarFields/Fields/Parent/EditView.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'sugarvar', 'include/SugarFields/Fields/Parent/EditView.tpl', 14, false),)), $this); ?>
{*
/*
 * Your installation or use of this SugarCRM file is subject to the applicable
 * terms available at
 * http://support.sugarcrm.com/06_Customer_Center/10_Master_Subscription_Agreements/.
 * If you do not agree to all of the applicable terms or do not have the
 * authority to bind the entity as an authorized representative, then do not
 * install or use this SugarCRM file.
 *
 * Copyright (C) SugarCRM Inc. All rights reserved.
 */
*}
<select name='parent_type' tabindex="<?php echo $this->_tpl_vars['tabindex']; ?>
" id='parent_type' title='<?php echo $this->_tpl_vars['vardef']['help']; ?>
'  <?php if (! empty ( $this->_tpl_vars['displayParams']['accesskey'] )): ?> accesskey='<?php echo $this->_tpl_vars['displayParams']['accesskey']; ?>
' <?php endif; ?>
onchange='document.{$form_name}.<?php echo smarty_function_sugarvar(array('key' => 'name'), $this);?>
.value="";document.{$form_name}.parent_id.value=""; changeParentQS("<?php echo smarty_function_sugarvar(array('key' => 'name'), $this);?>
"); checkParentType(document.{$form_name}.parent_type.value, document.{$form_name}.btn_<?php echo smarty_function_sugarvar(array('key' => 'name'), $this);?>
);'>
{html_options options=<?php echo smarty_function_sugarvar(array('key' => 'options','string' => true), $this);?>
 selected=$fields.parent_type.value sortoptions=true}
</select>

<?php if ($this->_tpl_vars['displayParams']['split']): ?>
<br>
<?php endif; ?>
{if empty(<?php echo smarty_function_sugarvar(array('key' => 'options','string' => true), $this);?>
[$fields.parent_type.value])}
	{assign var="keepParent" value = 0}
{else}
	{assign var="keepParent" value = 1}
{/if}
<input type="text" name="<?php echo smarty_function_sugarvar(array('key' => 'name'), $this);?>
" id="<?php echo smarty_function_sugarvar(array('key' => 'name'), $this);?>
" class="sqsEnabled" tabindex="<?php echo $this->_tpl_vars['tabindex']; ?>
"
    size="<?php echo $this->_tpl_vars['displayParams']['size']; ?>
" {if $keepParent}value="<?php echo smarty_function_sugarvar(array('key' => 'value'), $this);?>
"{/if} autocomplete="off"><input type="hidden" name="<?php echo smarty_function_sugarvar(array('memberName' => 'vardef.id_name','key' => 'name'), $this);?>
" id="<?php echo smarty_function_sugarvar(array('memberName' => 'vardef.id_name','key' => 'name'), $this);?>
"  
{if $keepParent}value="<?php echo smarty_function_sugarvar(array('memberName' => 'vardef.id_name','key' => 'value'), $this);?>
"{/if}>
<span class="id-ff multiple">
<button type="button" name="btn_<?php echo smarty_function_sugarvar(array('key' => 'name'), $this);?>
" id="btn_<?php echo smarty_function_sugarvar(array('key' => 'name'), $this);?>
" tabindex="<?php echo $this->_tpl_vars['tabindex']; ?>
"	
title="{sugar_translate label="<?php echo $this->_tpl_vars['displayParams']['accessKeySelectTitle']; ?>
"}" class="button firstChild" value="{sugar_translate label="<?php echo $this->_tpl_vars['displayParams']['accessKeySelectLabel']; ?>
"}"
onclick='open_popup(document.{$form_name}.parent_type.value, 600, 400, "", true, false, <?php echo $this->_tpl_vars['displayParams']['popupData']; ?>
, "single", true);' <?php if (isset ( $this->_tpl_vars['displayParams']['javascript']['btn'] )):  echo $this->_tpl_vars['displayParams']['javascript']['btn'];  endif; ?>><img src="{sugar_getimagepath file="id-ff-select.png"}"></button><?php if (empty ( $this->_tpl_vars['displayParams']['selectOnly'] )): ?><button type="button" name="btn_clr_<?php echo smarty_function_sugarvar(array('key' => 'name'), $this);?>
" id="btn_clr_<?php echo smarty_function_sugarvar(array('key' => 'name'), $this);?>
" tabindex="<?php echo $this->_tpl_vars['tabindex']; ?>
" title="{sugar_translate label="<?php echo $this->_tpl_vars['displayParams']['accessKeyClearTitle']; ?>
"}" class="button lastChild" onclick="this.form.<?php echo smarty_function_sugarvar(array('key' => 'name'), $this);?>
.value = ''; this.form.<?php echo smarty_function_sugarvar(array('memberName' => 'vardef.id_name','key' => 'name'), $this);?>
.value = '';" value="{sugar_translate label="<?php echo $this->_tpl_vars['displayParams']['accessKeyClearLabel']; ?>
"}" <?php if (isset ( $this->_tpl_vars['displayParams']['javascript']['btn_clear'] )):  echo $this->_tpl_vars['displayParams']['javascript']['btn_clear'];  endif; ?>><img src="{sugar_getimagepath file="id-ff-clear.png"}"></button>
</span>
<?php endif; ?>

{literal}
<script type="text/javascript">
if (typeof(changeParentQS) == 'undefined'){
function changeParentQS(field) {
    if(typeof sqs_objects == 'undefined') {
       return;
    }
	field = YAHOO.util.Dom.get(field);
    var form = field.form;
    var sqsId = form.id + "_" + field.id;
    if(sqs_objects[sqsId] == undefined){
    	return;
    }
    var typeField =  form.elements.parent_type;
    var new_module = typeField.value;
    if(typeof(disabledModules) != 'undefined' && typeof(disabledModules[new_module]) != 'undefined') {
		sqs_objects[sqsId]["disable"] = true;
		field.readOnly = true;
	} else {
		sqs_objects[sqsId]["disable"] = false;
		field.readOnly = false;
    }
	//Update the SQS globals to reflect the new module choice
    sqs_objects[sqsId]["modules"] = new Array(new_module);
    if (typeof(QSFieldsArray[sqsId]) != 'undefined')
    {
        QSFieldsArray[sqsId].sqs.modules = new Array(new_module);
    }
	if(typeof QSProcessedFieldsArray != 'undefined')
    {
	   QSProcessedFieldsArray[sqsId] = false;
    }
    enableQS(false);
}}
//change this in case it wasn't the default on editing existing items.
$(document).ready(function(){
	changeParentQS("parent_name")
});
</script>
<?php echo $this->_tpl_vars['displayParams']['disabled_parent_types']; ?>

<?php echo $this->_tpl_vars['quickSearchCode']; ?>

{/literal}