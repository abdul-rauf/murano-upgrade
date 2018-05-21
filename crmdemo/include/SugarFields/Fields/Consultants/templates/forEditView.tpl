{*
/*********************************************************************************
 * The contents of this file are subject to the SugarCRM Master Subscription
 * Agreement ("License") which can be viewed at
 * http://www.sugarcrm.com/crm/master-subscription-agreement
 * By installing or using this file, You have unconditionally agreed to the
 * terms and conditions of the License, and You may not use this file except in
 * compliance with the License.  Under the terms of the license, You shall not,
 * among other things: 1) sublicense, resell, rent, lease, redistribute, assign
 * or otherwise transfer Your rights to the Software, and 2) use the Software
 * for timesharing or service bureau purposes such as hosting the Software for
 * commercial gain and/or for the benefit of a third party.  Use of the Software
 * may be subject to applicable fees and any use of the Software without first
 * paying applicable fees is strictly prohibited.  You do not have the right to
 * remove SugarCRM copyrights from the source code or user interface.
 *
 * All copies of the Covered Code must include on each user interface screen:
 *  (i) the "Powered by SugarCRM" logo and
 *  (ii) the SugarCRM copyright notice
 * in the same form as they appear in the distribution.  See full license for
 * requirements.
 *
 * Your Warranty, Limitations of liability and Indemnity are expressly stated
 * in the License.  Please refer to the License for the specific language
 * governing these rights and limitations under the License.  Portions created
 * by SugarCRM are Copyright (C) 2004-2012 SugarCRM, Inc.; All Rights Reserved.
 ********************************************************************************/

*}
<script type='text/javascript' src='{sugar_getjspath file='include/javascript/sugar_3.js'}'></script>

<script type="text/javascript" language="javascript">
var ConsultantsWidgetLoaded = false;
</script>
<script type="text/javascript" src="include/SugarFields/Fields/Consultants/SugarConsultants.js"></script>
<script type="text/javascript">
	var module = '{$module}';
</script>
<table style="border-spacing: 0pt;">
	<tr>
		<td  valign="top" NOWRAP>
			<table id="LeadsConsultantsTable1" class="emailaddresses">
				<tbody id="targetBody"></tbody>
				<tr>
					<td scope="row" NOWRAP>
<input type="hidden" id="{$fields.con1.name}_multiselect" name="{$fields.con1.name}_multiselect" value="true" >
{multienum_to_array string=$fields.con1.value default=$fields.con1.default assign="values"}

					 <select name="{$fields.con1.name}[]" id="{$fields.con1.name}" title='' multiple="true" size='6' style="width:150">
{if isset($fields.con1.value) && $fields.con1.value != ''}
{html_options options=$fields.con1.options selected=$values}
{else}
{html_options options=$fields.con1.options selected=$fields.con1.default}
{/if}
</select>
					</td>
				
					
					
					
					
				</tr>
			</table>
		</td>
	</tr>
</table>
<table style="border-spacing: 0pt;">
	<tr>
		<td  valign="top" NOWRAP>
			<table id="LeadsConsultantsTable" class="emailaddresses">
				<tbody id="targetBody"></tbody>
				<tr>
					<td scope="row" NOWRAP>
					    <input type=hidden id="{$module}_con_widget_id" name="{$module}_con_widget_id" value="">
						<input type=hidden id='ConsultantsWidget' name='ConsultantsWidget' value='1'>
					 <input type=hidden id='number_con' name='number_con' value='0'>

                        {capture assign="other_attributes"}id="{$module}{$index}_con_widget_add" onclick="javascript:SUGAR.ConsultantsWidget.instances.{$module}{$index}.addConsultants('{$module}ConsultantsTable{$index}','','');"{/capture}
                        <button type="button" {$other_attributes}>{sugar_getimage name="id-ff-add" alt="$app_strings.LBL_ID_FF_ADD" ext=".png"}</button>
					</td>
				
					
					
					
					
				</tr>
			</table>
		</td>
	</tr>
</table>

<input type="hidden" name="useEmailWidget" value="true">
<script type="text/javascript" language="javascript">
SUGAR_callsInProgress++;
function initLead(){ldelim}
	if(ConsultantsWidgetLoaded || SUGAR.ConsultantsWidget){ldelim}
		var table = YAHOO.util.Dom.get("{$module}ConsultantsTable{$index}");
	    var eaw = SUGAR.ConsultantsWidget.instances.{$module}{$index} = new SUGAR.ConsultantsWidget("{$module}");
		eaw.emailView = '{$emailView}';
	    eaw.tabIndex = '{$tabindex}';
	    var prefillConsultants = '{$prefillConsultants}';
	    if(prefillConsultants == 'true') {ldelim}
	        eaw.prefillConsultants('{$module}ConsultantsTable{$index}', prefillData);
		{rdelim} else if(addDefaultAddress == 'true') {ldelim}
	        eaw.addConsultants('{$module}ConsultantsTable{$index}');
		{rdelim}
		if('{$module}_email_widget_id') {ldelim}
		   document.getElementById('{$module}_email_widget_id').value = eaw.count;
		{rdelim}
		SUGAR_callsInProgress--;
        //if the form has already been registered, re-register it with the new element
        var form = Dom.getAncestorByTagName(table, "form");
        if (SUGAR.forms.AssignmentHandler.VARIABLE_MAP[form.name])
            SUGAR.forms.AssignmentHandler.registerForm(form.name, form);
	{rdelim}else{ldelim}
		setTimeout("init{$module}mr_consultant{$index}();", 500);
	{rdelim}
{rdelim}

YAHOO.util.Event.onDOMReady(initLead);
</script>