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
<h2><a href="index.php?module=Administration&amp;action=index">Administration</a><span class="pointer">»</span>{$MOD.LBL_UC2C_ADMIN_TITLE}</h2>
</div>

<form name="UC2CSettings" method="POST" >
	<input type="hidden" name="module" value="Administration">
	<input type="hidden" name="action" value="UC2CAdmin">
	<input type="hidden" name="update" value="Update" />
	
	<hr style="margin: 4px 0;" />
	
	<div class='add_table' style='margin:0 5px 5px 5px'>
		<b style="display:block;margin-bottom: 4px;">Authentication Credentials</b>
		<table border="0" cellspacing="2" cellpadding="2">
			<tr>
				<td width="100px;">Username</td>
				<td><input type="text" name="UC2C_account_sid" id="UC2C_account_sid" value="{$ACCOUNT_SID}" size="42" maxlength="40" /></td>
			</tr>
			<tr>
				<td width="100">Password</td>
				<td><input type="text" name="UC2C_auth_token" id="UC2C_auth_token" value="{$AUTH_TOKEN}" size="42" maxlength="40" /></td>
			</tr>
		</table>
	</div>

	<table border="0" cellspacing="1" cellpadding="1">
		<tr>
			<td>
			<input title="{$APP.LBL_SAVE_BUTTON_LABEL}" accessKey="{$APP.LBL_SAVE_BUTTON_TITLE}" class="button primary" type="submit" name="button" value="{$APP.LBL_SAVE_BUTTON_LABEL}">
			<input title="{$APP.LBL_CANCEL_BUTTON_LABEL}" accessKey="{$APP.LBL_CANCEL_BUTTON_KEY}" class="button" onclick="document.UC2CSettings.action.value='';" type="submit" name="button" value="{$APP.LBL_CANCEL_BUTTON_LABEL}">
			</td>
			<td style="padding-left:30px;color:#488948;">{if $UPDATED}<b>Updated Successfully!</b>{/if}</td>
		</tr>
	</table>
	
</form>

<hr style="margin-bottom: 4px;" />
	
<div class='add_table' style='margin:0 5px 5px 5px'>
	<b style="display:block;margin-bottom: 4px;">Portal Access</b>
	<table border="0" cellspacing="2" cellpadding="2">
		<tr>
			<td width="100">Administrate</td>
			<td>
				<form method='post' action='https://cti.epicom.com/portal' target='blank'>
					<input type='hidden' name='api_key' value="{$ACCOUNT_SID}" />
					<input type='hidden' name='auth_token' value="{$AUTH_TOKEN}" />
					<input type="submit" class="primary button" value="Login to Portal"/>
				</form>	
			</td>
		</tr>
	</table>
</div>


<hr style="margin-bottom: 4px;" />
<div style='margin:0 5px 5px 5px'>
	<b style="display:block;margin-bottom: 4px;">Version Info</b>
	{if $version->tested}
		{if $version->up_to_date}
		<div>
			<img src="https://cti.epicom.com/content/img/check_mark.png" style="float:left"/>
			<b style="line-height:21px;float:left;padding-left:8px;">You have version {$version->installed}, which is up to date.</b>
		</div>
		{else}
		<div>
			<img src="https://cti.epicom.com/content/img/x_mark.png" style="float:left"/>
			<b style="line-height:21px;float:left;padding-left:8px;">You have version {$version->installed}. The latest version is {$version->latest}.</b><br/>
			<p style="clear:both;padding: 10px 5px;">Please have your System Administrator download and install the newest version. 
			<a href="https://cti.epicom.com/download/latest">Download Click-to-Call {$version->latest}</a></p>
		</div>
		{/if}
	{else}
		<div>
			<img src="https://cti.epicom.com/content/img/x_mark.png" style="float:left"/>
			<b style="line-height:21px;float:left;padding-left:8px;">Your system lacks the feature required for automatically checking if your version is up to date.</b><br/>
			<p style="clear:both;padding: 10px 5px;">You can check the current version by clicking  
			<a href="https://cti.epicom.com/version.txt" target="_blank">here</a>.</p>
		</div>
	{/if}
	<div style="clear:both"></div>
</div>

<hr style="margin-bottom: 4px;" />
<div style='margin:0 5px 5px 5px'>
	<b style="display:block;margin-bottom: 4px;">Format Phone Numbers Tool</b>
	<a href="{$site_url}/index.php?module=Administration&action=FormatPhoneNumbers&step=1">Choose Modules to Update</a>
</div>