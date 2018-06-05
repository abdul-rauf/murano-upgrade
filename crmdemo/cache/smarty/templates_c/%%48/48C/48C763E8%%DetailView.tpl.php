<?php /* Smarty version 2.6.11, created on 2018-06-05 09:00:38
         compiled from include/SugarFields/Fields/Parent/DetailView.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'sugarvar', 'include/SugarFields/Fields/Parent/DetailView.tpl', 14, false),array('function', 'sugarvar_connector', 'include/SugarFields/Fields/Parent/DetailView.tpl', 20, false),)), $this); ?>
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
<?php if (! $this->_tpl_vars['nolink']): ?>
<input type="hidden" class="sugar_field" id="<?php echo smarty_function_sugarvar(array('key' => 'name'), $this);?>
" value="<?php echo smarty_function_sugarvar(array('key' => 'value'), $this);?>
">
<input type="hidden" class="sugar_field" id="<?php echo $this->_tpl_vars['vardef']['id_name']; ?>
" value="<?php echo smarty_function_sugarvar(array('key' => 'value','memberName' => 'vardef.id_name'), $this);?>
">
<a href="index.php?module=<?php echo smarty_function_sugarvar(array('objectName' => 'fields','memberName' => 'vardef.type_name','key' => 'value'), $this);?>
&action=DetailView&record=<?php echo smarty_function_sugarvar(array('key' => 'value','memberName' => 'vardef.id_name'), $this);?>
" class="tabDetailViewDFLink"><?php endif;  echo smarty_function_sugarvar(array('key' => 'value'), $this); if (! $this->_tpl_vars['nolink']): ?></a>
<?php endif;  if (! empty ( $this->_tpl_vars['displayParams']['enableConnectors'] )): ?>
{if !empty(<?php echo smarty_function_sugarvar(array('key' => 'value'), $this);?>
)}
<?php echo smarty_function_sugarvar_connector(array('view' => 'DetailView'), $this);?>

{/if}
<?php endif; ?>