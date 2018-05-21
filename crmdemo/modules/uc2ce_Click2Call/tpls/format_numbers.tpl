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

<div class="moduleTitle">
<h2><a href="index.php?module=Administration&amp;action=index">Administration</a><span class="pointer">»</span>{$MOD.LBL_UC2C_ADMIN_TITLE}<span class="pointer">»</span>Format Phone Numbers<span class="pointer">»</span>Step 1</h2>
</div>

<b>Select fields to update</b>
<hr style="margin: 4px 0;" />
<div style="padding-left: 10px;">
<form method="post" action="index.php?module=Administration&action=FormatPhoneNumbers&step=2">
	<input type="button" class="button" value="Select All" onclick="UC2C.select_all();"/>
	<input type="button" class="button" value="Deselect All" onclick="UC2C.deselect_all();"/>
	<input type="submit" class="button primary" value="Next" onclick="return UC2C.validate();" /><br/>
	{foreach from=$eligible_modules item=module key=mod_name}
	<b style="line-height: 24px;">{$mod_name}</b><br/>
		{foreach from=$module->fields item=field}
			<input type="checkbox" name="{$module->table}~{$field}~{$mod_name}" id="{$module->table}~{$field}~{$mod_name}" checked="checked" style="margin-left:7px;" />
			<label for="{$module->table}~{$field}~{$mod_name}" style="padding-left:7px;">{$module->label.$field} ({$field})</label><br/>
		{/foreach}
		<br/>
	{/foreach}
	
	<input type="button" class="button" value="Select All" onclick="UC2C.select_all();"/>
	<input type="button" class="button" value="Deselect All" onclick="UC2C.deselect_all();"/>
	<input type="submit" class="button primary" value="Next" onclick="return UC2C.validate();" />
</form>
</div>