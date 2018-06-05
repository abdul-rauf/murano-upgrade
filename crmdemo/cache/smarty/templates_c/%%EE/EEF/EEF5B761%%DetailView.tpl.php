<?php /* Smarty version 2.6.11, created on 2018-06-05 08:52:36
         compiled from include/SugarFields/Fields/Link/DetailView.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'sugarvar', 'include/SugarFields/Fields/Link/DetailView.tpl', 13, false),array('function', 'sugarvar_connector', 'include/SugarFields/Fields/Link/DetailView.tpl', 23, false),array('modifier', 'replace', 'include/SugarFields/Fields/Link/DetailView.tpl', 15, false),)), $this); ?>
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
{capture name=getLink assign=link}<?php echo smarty_function_sugarvar(array('key' => 'value'), $this);?>
{/capture}
<?php if ($this->_tpl_vars['vardef']['gen']): ?>
{sugar_replace_vars subject='<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['vardef']['default'])) ? $this->_run_mod_handler('replace', true, $_tmp, '{', '[') : smarty_modifier_replace($_tmp, '{', '[')))) ? $this->_run_mod_handler('replace', true, $_tmp, '}', ']') : smarty_modifier_replace($_tmp, '}', ']')); ?>
' assign='link'}
<?php endif; ?>
{if !empty($link)}
{capture name=getStart assign=linkStart}{$link|substr:0:7}{/capture}
<span class="sugar_field" id="<?php echo smarty_function_sugarvar(array('key' => 'name'), $this);?>
">
<a href='{$link|to_url}' <?php if ($this->_tpl_vars['displayParams']['link_target']): ?>target='<?php echo $this->_tpl_vars['displayParams']['link_target']; ?>
'<?php elseif ($this->_tpl_vars['vardef']['link_target']): ?>target='<?php echo $this->_tpl_vars['vardef']['link_target']; ?>
'<?php endif; ?> ><?php if (! empty ( $this->_tpl_vars['displayParams']['title'] )): ?>{sugar_translate label='<?php echo $this->_tpl_vars['displayParams']['title']; ?>
' module=$module}<?php else: ?>{$link}<?php endif; ?></a>
</span>
<?php if (! empty ( $this->_tpl_vars['displayParams']['enableConnectors'] )):  echo smarty_function_sugarvar_connector(array('view' => 'DetailView'), $this);?>

<?php endif; ?>
{/if}