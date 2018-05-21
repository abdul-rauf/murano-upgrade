{*

/*********************************************************************************
 * By installing or using this file, you are confirming on behalf of the entity
 * subscribed to the SugarCRM Inc. product ("Company") that Company is bound by
 * the SugarCRM Inc. Master Subscription Agreement (“MSA”), which is viewable at:
 * http://www.sugarcrm.com/master-subscription-agreement
 *
 * If Company is not bound by the MSA, then by installing or using this file
 * you are agreeing unconditionally that Company will be bound by the MSA and
 * certifying that you have authority to bind Company accordingly.
 *
 * Copyright (C) 2004-2013 SugarCRM Inc.  All rights reserved.
 ********************************************************************************/




*}


<form action="index.php" method="get" id="form{$id}" >
	<input type="hidden" name="module" value="Forecasts">
	<input type="hidden" name="action" value="index">	
	<input type="hidden" name="return_module" value="Home">
	<input type="hidden" name="return_action" value="index">
	<input type="hidden" name="commit_forecast" value="0">	
	<input type="hidden" name="timeperiod_id" value="{$DATA.TIMEPERIOD_ID}">
	<input type="hidden" name="user_id" value="{$DATA.USER_ID}">
	<input type="hidden" name="forecast_type" value="">
    <select name='timeperiod_filter' language='JavaScript' onchange='Forecast.updateTimeperiod("{$id}", this.value);'>{$select_list}</select>  ({$FILTER_START} {$MOD.LBL_QC_HEADER_DELIM} {$FILTER_END})

{if $PROCESS_DIRECT}
	<p>
	
	<div id='forecasts{$id}' style="margin-bottom: 2px;"><input title="{$MOD.LBL_QC_WORKSHEET_BUTTON}" class="button" type = "button" onclick="Forecast.showWorksheet(this.form,'Direct');" name="directworksheet" value="{$MOD.LBL_QC_WORKSHEET_BUTTON}"></div>
	<table width="100%" border="0" cellspacing="0" cellpadding="0" class="list view">
	<tr>
		<td colspan="4" >{$MOD.LBL_QC_DIRECT_FORECAST}</td>
	</tr>
	<tr class="oddListRowS1">
		<td valign="top">{$MOD.LBL_QC_LAST_DATE_COMMITTED}</td>
		<td valign="top">{$LASTDIRECT.DATE_ENTERED}</td>
		<td valign="top">{$MOD.LBL_QC_LAST_BEST_CASE}</td>
		<td valign="top">{$LASTDIRECT.BEST_CASE}</td>
	</tr>
	
	<tr class="oddListRowS1">
		<td valign="top">{$MOD.LBL_QC_LAST_LIKELY_CASE}</td>
		<td id="last_direct_likely_case{$id}" valign="top">{$LASTDIRECT.LIKELY_CASE}</td>
		<td valign="top">{$MOD.LBL_QC_LAST_WORST_CASE}</td>
		<td id="last_direct_worst_case{$id}" valign="top">{$LASTDIRECT.WORST_CASE}</td>
	</tr>
	
	<tr class="evenListRowS1">
		<td valign="top">{$MOD.LBL_QC_OPPORTUNITY_COUNT}&nbsp;</td>
		<td valign="top">{$DATA.OPPORTUNITYCOUNT}</td>
		<td valign="top">{$MOD.LBL_QC_WEIGHT_VALUE}&nbsp;</td>
		<td valign="top">{$DATA.WEIGHTEDVALUE}</td>
	</tr>
	
	<tr class="oddListRowS1">
		<td valign="top"  >{$MOD.LBL_QC_COMMIT_BEST_CASE}</td>
		<td valign="top"  ><input name='direct_best_case'  size='14' maxlength='25' type="text" ></td>
		<td valign="top" >{$MOD.LBL_QC_COMMIT_LIKELY_CASE}</td>
		<td valign="top"  ><input name='direct_likely_case'  size='14' maxlength='25' type="text" ></td>
	</tr>
	
	<tr class="oddListRowS1">
		<td valign="top" >&nbsp;</td>
		<td valign="top" >&nbsp;</td>
		<td valign="top" >{$MOD.LBL_QC_COMMIT_WORST_CASE}</td>
		<td valign="top" ><input name='direct_worst_case'   size='14' maxlength='25' type="text" >&nbsp;
			<input title="{$MOD.LBL_QC_COMMIT_BUTTON}" class="button"  type = "button" onclick="Forecast.commit(this.form, '{$id}', 'Direct', {$DATA.OPPORTUNITYCOUNT},'{$DATA.WEIGHTEDVALUE}', '{$DATA.TIMEPERIOD_ID}', '{$DATA.USER_ID}');" name="directcommit" value="  {$MOD.LBL_QC_COMMIT_BUTTON} "></td>
	</tr>
	
	</table>
	</p>
{/if}

{if $PROCESS_ROLLUP}
	<p>
	
	<div style="margin-bottom: 2px;"><input title="{$MOD.LBL_QC_WORKSHEET_BUTTON}"  class="button"  type="button" onclick="Forecast.showWorksheet(this.form,'Rollup');" name="rollupworksheet" value="{$MOD.LBL_QC_WORKSHEET_BUTTON}"></div>
	<table width="100%" border="0" cellspacing="0" cellpadding="0" class="list view">
	<tr>
		<td colspan="4" >{$MOD.LBL_QC_ROLLUP_FORECAST}</td>
	</tr>
	<tr class="oddListRowS1">
		<td valign="top">{$MOD.LBL_QC_LAST_DATE_COMMITTED}</td>
		<td valign="top">{$LASTROLL.DATE_ENTERED}</td>
		<td valign="top">{$MOD.LBL_QC_LAST_BEST_CASE}</td>
		<td id="last_rollup_best_case{$id}" valign="top">{$LASTROLL.BEST_CASE}</td>
	</tr>
	
	<tr class="oddListRowS1">
		<td valign="top">{$MOD.LBL_QC_LAST_LIKELY_CASE}</td>
		<td id="last_rollup_likely_case{$id}" valign="top">{$LASTROLL.LIKELY_CASE}</td>
		<td valign="top">{$MOD.LBL_QC_LAST_WORST_CASE}</td>
		<td id="last_rollup_worst_case{$id}" valign="top">{$LASTROLL.WORST_CASE}</td>
	</tr>
	
	<tr class="evenListRowS1">
		<td valign="top">{$MOD.LBL_QC_OPPORTUNITY_COUNT}</td>
		<td valign="top">{$ROLLUPOPPORTUNITYCOUNT}</td>
		<td valign="top">{$MOD.LBL_QC_WEIGHT_VALUE}</td>
		<td valign="top">{$ROLLUPWEIGHTEDVALUE}</td>
	</tr>
	
	<tr class="oddListRowS1">
		<td valign="top">{$MOD.LBL_QC_ROLL_BEST_VALUE}</td>
		<td valign="top">{$ROLLCOMMITVALUEBEST}</td>
		<td valign="top">{$MOD.LBL_QC_ROLL_LIKELY_VALUE}</td>
		<td valign="top">{$ROLLCOMMITVALUELIKELY}</td>
	</tr>
	
	<tr class="oddListRowS1">
		<td valign="top">{$MOD.LBL_QC_ROLL_WORST_VALUE}</td>
		<td valign="top">{$ROLLCOMMITVALUEWORST}</td>
		<td valign="top">&nbsp;</td>
		<td valign="top">&nbsp;</td>
	</tr>
	
	<tr class="oddListRowS1">
		<td valign="top">{$MOD.LBL_QC_COMMIT_BEST_CASE}</td>
		<td valign="top"><input name='rollup_best_case'  size='14' maxlength='25' type="text" ></td>
		<td valign="top">{$MOD.LBL_QC_COMMIT_LIKELY_CASE}</td>
		<td valign="top"><input name='rollup_likely_case' size='14' maxlength='25' type="text" ></td>
	</tr>
	
	<tr class="oddListRowS1">
		<td valign="top">&nbsp;</td>
		<td valign="top">&nbsp;</td>
		<td valign="top">{$MOD.LBL_QC_COMMIT_WORST_CASE}</td>
		<td valign="top"><input name='rollup_worst_case'  size='14' maxlength='25' type="text" >&nbsp;
			<input title="{$MOD.LBL_QC_COMMIT_BUTTON}"  class="button" type="button" onclick="Forecast.commit(this.form, '{$id}', 'Rollup', {$ROLLUPOPPORTUNITYCOUNT}, '{$ROLLUPWEIGHTEDVALUE}', '{$DATA.TIMEPERIOD_ID}', '{$DATA.USER_ID}');" name="rollupcommit" value="  {$MOD.LBL_QC_COMMIT_BUTTON} "></td>
	</tr>
	
	</table>
	</p>
{/if}

</form>

