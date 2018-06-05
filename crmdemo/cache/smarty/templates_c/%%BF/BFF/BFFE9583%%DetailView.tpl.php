<?php /* Smarty version 2.6.11, created on 2018-06-05 08:52:35
         compiled from include/SugarFields/Fields/Multienum/DetailView.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'sugarvar', 'include/SugarFields/Fields/Multienum/DetailView.tpl', 13, false),array('function', 'sugarvar_connector', 'include/SugarFields/Fields/Multienum/DetailView.tpl', 20, false),)), $this); ?>
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
{if !empty(<?php echo smarty_function_sugarvar(array('key' => 'value','string' => true), $this);?>
) && (<?php echo smarty_function_sugarvar(array('key' => 'value','string' => true), $this);?>
 != '^^')}
<input type="hidden" class="sugar_field" id="<?php echo smarty_function_sugarvar(array('key' => 'name'), $this);?>
" value="<?php echo smarty_function_sugarvar(array('key' => 'value'), $this);?>
">
{multienum_to_array string=<?php echo smarty_function_sugarvar(array('key' => 'value','string' => true), $this);?>
 assign="vals"}
{foreach from=$vals item=item}
<li style="margin-left:10px;">{ <?php echo smarty_function_sugarvar(array('key' => 'options','string' => true), $this);?>
.$item }</li>
{/foreach}
<?php if (! empty ( $this->_tpl_vars['displayParams']['enableConnectors'] )):  echo smarty_function_sugarvar_connector(array('view' => 'DetailView'), $this);?>

<?php endif; ?>
{/if}