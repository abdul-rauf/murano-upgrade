<?php /* Smarty version 2.6.11, created on 2018-06-05 08:52:35
         compiled from include/SugarFields/Fields/Address/en_us.DetailView.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'sugarvar_connector', 'include/SugarFields/Fields/Address/en_us.DetailView.tpl', 27, false),)), $this); ?>
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
<table border='0' cellpadding='0' cellspacing='0' width='100%'>
<tr>
<td width='99%'>
<input type="hidden" class="sugar_field" id="<?php echo $this->_tpl_vars['displayParams']['key']; ?>
_address_street" value="{$fields.<?php echo $this->_tpl_vars['displayParams']['key']; ?>
_address_street.value|escape:'htmlentitydecode'|escape:'html'|url2html|nl2br}">
<input type="hidden" class="sugar_field" id="<?php echo $this->_tpl_vars['displayParams']['key']; ?>
_address_city" value="{$fields.<?php echo $this->_tpl_vars['displayParams']['key']; ?>
_address_city.value|escape:'htmlentitydecode'|escape:'html'|url2html|nl2br}">
<input type="hidden" class="sugar_field" id="<?php echo $this->_tpl_vars['displayParams']['key']; ?>
_address_state" value="{$fields.<?php echo $this->_tpl_vars['displayParams']['key']; ?>
_address_state.value|escape:'htmlentitydecode'|escape:'html'|url2html|nl2br}">
<input type="hidden" class="sugar_field" id="<?php echo $this->_tpl_vars['displayParams']['key']; ?>
_address_country" value="{$fields.<?php echo $this->_tpl_vars['displayParams']['key']; ?>
_address_country.value|escape:'htmlentitydecode'|escape:'html'|url2html|nl2br}">
<input type="hidden" class="sugar_field" id="<?php echo $this->_tpl_vars['displayParams']['key']; ?>
_address_postalcode" value="{$fields.<?php echo $this->_tpl_vars['displayParams']['key']; ?>
_address_postalcode.value|escape:'htmlentitydecode'|escape:'html'|url2html|nl2br}">
{$fields.<?php echo $this->_tpl_vars['displayParams']['key']; ?>
_address_street.value|escape:'htmlentitydecode'|escape:'html'|url2html|nl2br}<br>
{$fields.<?php echo $this->_tpl_vars['displayParams']['key']; ?>
_address_city.value|escape:'htmlentitydecode'|escape:'html'|url2html|nl2br} {$fields.<?php echo $this->_tpl_vars['displayParams']['key']; ?>
_address_state.value|escape:'htmlentitydecode'|strip_tags|url2html|nl2br}&nbsp;&nbsp;{$fields.<?php echo $this->_tpl_vars['displayParams']['key']; ?>
_address_postalcode.value|escape:'htmlentitydecode'|strip_tags|url2html|nl2br}<br>
{$fields.<?php echo $this->_tpl_vars['displayParams']['key']; ?>
_address_country.value|escape:'htmlentitydecode'|escape:'html'|url2html|nl2br}
</td>
<?php if (! empty ( $this->_tpl_vars['displayParams']['enableConnectors'] )): ?>
<td class="dataField">
<?php echo smarty_function_sugarvar_connector(array('view' => 'DetailView'), $this);?>
 
</td>
<?php endif; ?>
<td class='dataField' width='1%'>
{$custom_code_<?php echo $this->_tpl_vars['displayParams']['key']; ?>
}
</td>
</tr>
</table>