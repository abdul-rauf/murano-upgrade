<?php /* Smarty version 2.6.11, created on 2017-06-29 13:04:39
         compiled from modules/Campaigns/WizardHome.html */ ?>
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
	<input type="hidden" id="module" name="module" value="Campaigns">
	<input type="hidden" id="action" name="action" = "WizardHome">
	<input type="hidden" id="process_form" name="process_form" value='false' >		
	<input type="hidden" id="return_module" name="return_module" value="<?php echo $this->_tpl_vars['RETURN_MODULE']; ?>
">
	<input type="hidden" id="return_id" name="return_id" value="<?php echo $this->_tpl_vars['RETURN_ID']; ?>
">
	<input type="hidden" id="return_action" name="return_action" value="<?php echo $this->_tpl_vars['RETURN_ACTION']; ?>
">
	<input type="hidden" id="record" name="record" value="<?php echo $this->_tpl_vars['ID']; ?>
">	
	<input type="hidden" id="direct_step" name="direct_step" value="1">		
	<input type="hidden" id="campaign_id" name="campaign_id" value="">			
	<input type="hidden" id="wiz_mass" name="wiz_mass" value="">			
	<input type="hidden" id="mode" name="mode" value="">					



<table class='other view' cellspacing="1">
<tr>
<td rowspan='2' width='10%' scope='row' style='vertical-align: top;'>
<div id='nav' >
<?php echo $this->_tpl_vars['NAV_ITEMS']; ?>


</div>

</td>

<td class='edit view' rowspan='2' width='100%'>
<?php echo $this->_tpl_vars['CAMPAIGN_DIAGNOSTIC_LINK']; ?>
<p>
<table  width="100%" border="0" cellspacing="1" cellpadding="0" >
	<tr><td>
		<div id='campaign_summary'><?php echo $this->_tpl_vars['CAMPAIGN_TBL']; ?>
</div><p>
	</td></tr>
	<tr><td>&nbsp;</td></tr>
	<tr><td>
		<p><div id='campaign_trackers'><?php echo $this->_tpl_vars['TRACKERS_TBL']; ?>
</div>
	</td></tr>
	<tr><td>&nbsp;</td></tr>			
	<tr><td>
		<p><div id='campaign_targets'><?php echo $this->_tpl_vars['TARGETS_TBL']; ?>
</div>
	</td></tr>
	<tr><td>&nbsp;</td></tr>
	<tr><td>
		<p><div id='campaign_marketing'><?php echo $this->_tpl_vars['MARKETING_TBL']; ?>
</div>
	</td></tr>
</table>		

		
</td></tr></table>
<script>
<?php echo $this->_tpl_vars['MSG_SCRIPT']; ?>

</script>
</form>
		