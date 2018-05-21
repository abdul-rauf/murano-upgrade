<?php /* Smarty version 2.6.11, created on 2018-05-21 12:03:31
         compiled from custom/include/SugarFields/Fields/Phone/ListView.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'sugar_fetch', 'custom/include/SugarFields/Fields/Phone/ListView.tpl', 29, false),array('function', 'sugar_UC2C', 'custom/include/SugarFields/Fields/Phone/ListView.tpl', 30, false),)), $this); ?>
<script type="text/javascript">
//<?php echo '
    var callback = {
        success:function(o){
        	if ( o.responseText.substr(0,10) == \'Connecting\' ) {
	        	ajaxStatus.flashStatus(o.responseText,10000);
        	} else {
	        	YAHOO.SUGAR.MessageBox.show({msg: o.responseText, title: \'Click to Call Error\'});
        	}
        },
        failure:function(o){
        	ajaxStatus.flashStatus(\'Click to Call Failure\',10000);
        }
    }
    //'; ?>

</script>

<?php ob_start();  echo smarty_function_sugar_fetch(array('object' => $this->_tpl_vars['parentFieldArray'],'key' => $this->_tpl_vars['col']), $this); $this->_smarty_vars['capture']['getPhone'] = ob_get_contents();  $this->assign('phone', ob_get_contents());ob_end_clean();  echo smarty_function_sugar_UC2C(array('value' => $this->_tpl_vars['phone']), $this);?>
