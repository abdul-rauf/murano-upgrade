{*
/*********************************************************************************
 * SugarCRM Community Edition is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2012 SugarCRM Inc.
 * 
 * This program is free software; you can redistribute it and/or modify it under
 * the terms of the GNU Affero General Public License version 3 as published by the
 * Free Software Foundation with the addition of the following permission added
 * to Section 15 as permitted in Section 7(a): FOR ANY PART OF THE COVERED WORK
 * IN WHICH THE COPYRIGHT IS OWNED BY SUGARCRM, SUGARCRM DISCLAIMS THE WARRANTY
 * OF NON INFRINGEMENT OF THIRD PARTY RIGHTS.
 * 
 * This program is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE.  See the GNU Affero General Public License for more
 * details.
 * 
 * You should have received a copy of the GNU Affero General Public License along with
 * this program; if not, see http://www.gnu.org/licenses or write to the Free
 * Software Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA
 * 02110-1301 USA.
 * 
 * You can contact SugarCRM, Inc. headquarters at 10050 North Wolfe Road,
 * SW2-130, Cupertino, CA 95014, USA. or at email address contact@sugarcrm.com.
 * 
 * The interactive user interfaces in modified source and object code versions
 * of this program must display Appropriate Legal Notices, as required under
 * Section 5 of the GNU Affero General Public License version 3.
 * 
 * In accordance with Section 7(b) of the GNU Affero General Public License version 3,
 * these Appropriate Legal Notices must retain the display of the "Powered by
 * SugarCRM" logo. If the display of the logo is not reasonably feasible for
 * technical reasons, the Appropriate Legal Notices must display the words
 * "Powered by SugarCRM".
 ********************************************************************************/

*}
{literal}
<script src="include/javascript/popup_parent_helper.js" type="text/javascript">
</script>
{/literal}
<div id="main"><div id="content">
<div class="moduleTitle">
</div> </h2>
<span class="utils">&nbsp;

</span><div class="clear"></div></div>
<table cellpadding="0" cellspacing="0" border="0" width="100%" id="">
<form name="Quick_email" method="POST" action="index.php?action=send_email&module={$module}">
<input type="hidden" name="from" id="from" value="{$id}">
<input type="hidden" name="action" id="action" value="send_email">
<input type="hidden" name="module" id="module" value="{$module}">
<input type="hidden" name="object" id="object" value="{$object}">
<tr>
<td>
<div id="Contacts_detailview_tabs" class="yui-navset detailview_tabs yui-navset-top">
<ul class="yui-nav">

<li class="selected" title="active"><a id="tab0" href="javascript:void(0)"><em>Overview</em></a></li>
</ul>
<div class="yui-content">
        
<div id="tabcontent0">
<div id="detailpanel_1" class="detail view  detail508 ">
<table id="LBL_CONTACT_INFORMATION" class="panelContainer" cellspacing="0">
<tbody>

<tr>
<td width="12.5%" scope="col">
Lead:
</td>
<td width="37.5%">
<a href="index.php?module=Leads&action=DetailView&record={$id}">{$name}</a>
</td>
</tr>
<tr>
<td width="12.5%" scope="col">
Client:
</td>
<td width="37.5%">
<input type="text" name="to"   id="to" size="10" value=""  autocomplete="off">
<input type="hidden" name="to_hidden" id="to_hidden" value="">
<span class="id-ff multiple">
<button type="button" name="btn_to" id="btn_to" title="{sugar_translate label="{{$displayParams.accessKeySelectTitle}}"}" class="button firstChild" value="{sugar_translate label="{{$displayParams.accessKeySelectLabel}}"}"
onclick='open_popup(
    "mur_client_n_list", 
	600, 
	400, 
	"", 
	true, 
	false, 
	{$popup_link}, 
	"single", 
	true
);' ><img src="{sugar_getimagepath file="id-ff-select.png"}"></button><button type="button" name="btn_clr_to" id="btn_clr_to" class="button lastChild"
onclick="SUGAR.clearRelateField(this.form, 'to', 'to');"  value="{sugar_translate label="To"}"><img src="{sugar_getimagepath file="id-ff-clear.png"}"></button>

</span>


<input type="hidden" name="to_allow_new_value" id="to_allow_new_value" value="true">

</td>
</tr>
<tr>
<td width="12.5%" scope="col">
Click to Send
</td>
<td width="37.5%">
<input type="submit" value="Send Email">
</td>
</tr>

</div>
</div></div>
</tr>
<form name="Quick_email">
</table>
</div></div>

<script type="text/javascript">
//SUGAR.util.doWhen(
//		"typeof(sqs_objects) != 'undefined' && typeof(sqs_objects['{$form_name}_to']) != 'undefined'",
//		enableQS
//);
</script>
