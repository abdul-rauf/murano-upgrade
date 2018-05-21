<?php /* Smarty version 2.6.11, created on 2017-03-08 11:58:15
         compiled from modules/Campaigns/CampaignDiagnostic.html */ ?>
<!--
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
-->
<form id="wizform" name="wizform" method="POST" action="index.php">
	<input type="hidden" name="module" value="Campaigns">
	<input type="hidden" name="action" = "CampaignDiagnostic">
	<input type="hidden" name="return_module" value="<?php echo $this->_tpl_vars['RETURN_MODULE']; ?>
">
	<input type="hidden" name="return_id" value="<?php echo $this->_tpl_vars['RETURN_ID']; ?>
">
	<input type="hidden" name="return_action" value="<?php echo $this->_tpl_vars['RETURN_ACTION']; ?>
">
		


<div id="diagnose" class="contentdiv"> 
<form name="form1" method="post" action="">

<table class="h3Row" border="0" cellpadding="0" cellspacing="0" width="100%"><tbody><tr><td nowrap="nowrap"><h3><?php echo $this->_tpl_vars['EMAIL_IMAGE'];  echo $this->_tpl_vars['EMAIL_COMPONENTS']; ?>
</h3></td></tr></table>

	<div id="email" >

          <?php echo $this->_tpl_vars['EMAIL_SETTINGS_CONFIGURED_MESSAGE']; ?>

		  <?php echo $this->_tpl_vars['MAILBOXES_DETECTED_MESSAGE']; ?>


	</div>
<p><?php echo $this->_tpl_vars['EMAIL_SETUP_WIZ_LINK']; ?>
</p>

<p>&nbsp;</p>
<table class="h3Row" border="0" cellpadding="0" cellspacing="0" width="100%"><tbody><tr><td nowrap="nowrap"><h3><?php echo $this->_tpl_vars['SCHEDULE_IMAGE']; ?>
  <?php echo $this->_tpl_vars['SCHEDULER_COMPONENTS']; ?>
</h3></td></tr></table>

	<div id="schedule">

          <?php echo $this->_tpl_vars['SCHEDULER_EMAILS_MESSAGE']; ?>


	</div>	
</p>
<p><div id='submit'><input name="Re-Check" onclick="this.form.action.value='CampaignDiagnostic';" class='button' value="<?php echo $this->_tpl_vars['RECHECK_BTN']; ?>
" type="submit"></div>
</form></div>	



		