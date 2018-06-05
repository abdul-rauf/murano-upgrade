<?php /* Smarty version 2.6.11, created on 2018-06-05 08:52:34
         compiled from custom/include/SugarFields/Fields/Phone/DetailView.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'sugarvar', 'custom/include/SugarFields/Fields/Phone/DetailView.tpl', 29, false),array('function', 'sugarvar_connector', 'custom/include/SugarFields/Fields/Phone/DetailView.tpl', 34, false),)), $this); ?>
{*
/*********************************************************************************
 * Name: Universal Click to Call by Epicom
 * Version: 1.0.0
 * Date: 2011-06-08
 * Author: Epicom Corp.
 * Maintainer: support@epicom.com
 * License: GPL version 2 or later
 ********************************************************************************/

*}
<script type="text/javascript">
//{literal}
    var callback = {
        success:function(o){
        	if ( o.responseText.substr(0,10) == 'Connecting' ) {
	        	ajaxStatus.flashStatus(o.responseText,10000);
        	} else {
	        	YAHOO.SUGAR.MessageBox.show({msg: o.responseText, title: 'Click to Call Error'});
        	}
        },
        failure:function(o){
        	ajaxStatus.flashStatus('Click to Call Failure',10000);
        }
    }
    //{/literal}
</script>

{if !empty(<?php echo smarty_function_sugarvar(array('key' => 'value','string' => true), $this);?>
)}
{assign var="phone_value" value=<?php echo smarty_function_sugarvar(array('key' => 'value','string' => true), $this);?>
 }
{sugar_UC2C value=$phone_value }
{/if}
<?php if (! empty ( $this->_tpl_vars['displayParams']['enableConnectors'] )):  echo smarty_function_sugarvar_connector(array('view' => 'DetailView'), $this);?>
 
<?php endif; ?>