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
{literal}
<style>
.menu{
	z-index:100;
}

.subDmenu{
	z-index:100;
}
</style>
{/literal}


<script type="text/javascript">
var numPages = {$numPages};
var theme = '{$theme}';
var loadedPages = new Array();
var activePage = {$activePage};
loadedPages[0] = '{$loadedPage}';
current_user_id = '{$current_user}';
jsChartsArray = new Array();
var moduleName = 'Home';
</script>

<script type="text/javascript" src="{sugar_getjspath file='cache/include/javascript/sugar_grp_yui_widgets.js'}"></script>
<script type="text/javascript" src="{sugar_getjspath file='include/javascript/dashlets.js'}"></script>
<script type='text/javascript' src='{sugar_getjspath file='include/MySugar/javascript/MySugar.js'}'></script>
<link rel='stylesheet' href='{sugar_getjspath file='include/javascript/yui/build/assets/skins/sam/skin.css'}'>


<!-- CSS Files -->
<link type="text/css" href="{sugar_getjspath file='custom/include/SugarCharts/js/Jit/Examples/css/base.css'}" rel="stylesheet" />
<link type="text/css" href="{sugar_getjspath file='custom/include/SugarCharts/js/Jit/css/Examples/BarChart.css'}" rel="stylesheet" />
<!--[if IE]><script language="javascript" type="text/javascript" src="{sugar_getjspath file='custom/include/SugarCharts/js/Jit/Extras/excanvas.js'}"></script><![endif]-->
<!-- JIT Library File -->
<script language="javascript" type="text/javascript" src="{sugar_getjspath file='custom/include/SugarCharts/js/Jit/jit.js'}"></script>

<ul class="subpanelTablist" id="tabList">
    {foreach from=$pages key=pageNum item=pageData}
    <li id="pageNum_{$pageNum}">
    <a id="pageNum_{$pageNum}_anchor" class="{$pageData.tabClass}" href="javascript:SUGAR.mySugar.togglePages('{$pageNum}');">
        <span id="pageNum_{$pageNum}_input_span" style="display:none;">
        <input type="hidden" id="pageNum_{$pageNum}_name_hidden_input" value="{$pageData.pageTitle}"/>
        <input type="text" id="pageNum_{$pageNum}_name_input" value="{$pageData.pageTitle}" size="10" onblur="SUGAR.mySugar.savePageTitle('{$pageNum}',this.value);"/>
        </span>
        <span id="pageNum_{$pageNum}_link_span">
        <span id="pageNum_{$pageNum}_title_text" ondblclick="SUGAR.mySugar.renamePage('{$pageNum}');">{$pageData.pageTitle}</span>&nbsp;
        <span id="pageNum_{$pageNum}_more_detail" {if $pageData.tabClass != 'current'}style="display:none;"{/if}>
        {sugar_getimage alt=$mod_strings.LBL_MORE_DETAIL name="MoreDetail" ext=".png" width="8" height="7" other_attributes='border="0" onclick="return SUGAR.mySugar.showTabContext(\'{$pageNum}\');" onmouseout="return nd(1000);" '}
		</span>
        </span>
    </a>
    </li>
    {/foreach}	
    <li id="addPageItem" style="background: #FFFFFF; border-color: #FFFFFF;">
    <a style="background: #FFFFFF; border-color: #FFFFFF; padding-left: 10px; text-decoration: none;" href="javascript:SUGAR.mySugar.showAddPageDialog();">+ {$lblAddPage}</a>
    </li>
</ul>

<div id="pageContainer">
	<div id="pageNum_{$activePage}_div">
<table width="100%" cellspacing="0" cellpadding="0" border="0" class="subpanelTabForm" style="border-top: 0px none; margin-bottom: 4px;">
 	<tr>
 		{if $numCols > 2}
	 	<td>
		&nbsp;
		</td>
	
		<td rowspan="3">
				{sugar_getimage alt=" " name="blank" ext=".gif" width="15" height="1" other_attributes='border="0" '}
		</td>
		{/if}
		{if $numCols > 1}
		<td>
		&nbsp;
		</td>
		<td rowspan="3">
				{sugar_getimage alt=" " name="blank" ext=".gif" width="15" height="1" other_attributes='border="0" '}
		</td>
		{/if}	
		<td align='right'>
		<!-- 
			<input id="add_dashlets" class="button" type="button" value="{$lblAddDashlets}" onclick="return SUGAR.mySugar.showDashletsTree();"/>
		-->
	 		<a href='index.php?module=Administration&action=SupportPortal&view=documentation&version={$sugarVersion}&edition={$sugarFlavor}&lang={$currentLanguage}&help_module=Home&help_action=index&key={$serverUniqueKey}' class='utilsLink' target='_blank'>
				{sugar_getimage name="help" ext=".gif" width="13" height="13" alt=$lblLnkHelp other_attributes='align="absmiddle" border="0" '}
            </a>
            <a href='index.php?module=Administration&action=SupportPortal&view=documentation&version={$sugarVersion}&edition={$sugarFlavor}&lang={$currentLanguage}&help_module=Home&help_action=index&key={$serverUniqueKey}' class='utilsLink' target='_blank'>
				{$lblLnkHelp}
			</a>
		</td>
	</tr>
	<tr>
		{counter assign=hiddenCounter start=0 print=false}
		{foreach from=$columns key=colNum item=data}
		<td valign='top' width='{$data.width}'>
			<ul class='noBullet' id='col_{$activePage}_{$colNum}'>
				<li id='page_{$activePage}_hidden{$hiddenCounter}b' style='height: 5px' class='noBullet'>&nbsp;&nbsp;&nbsp;</li>
		        {foreach from=$data.dashlets key=id item=dashlet}		
				<li class='noBullet' id='dashlet_{$id}'>
					<div id='dashlet_entire_{$id}'>
						{$dashlet.script}
						{$dashlet.display}
					</div>
				</li>
				{/foreach}
				<li id='page_{$activePage}_hidden{$hiddenCounter}' style='height: 5px' class='noBullet'>&nbsp;&nbsp;&nbsp;</li>
			</ul>
		</td>
		{counter}
		{/foreach}
	</tr>
</table>
	</div>
	
	{foreach from=$divPages key=divPageIndex item=divPageNum}
	<div id="pageNum_{$divPageNum}_div" style="display:none;">
	</div>
	{/foreach}

	<div id="addPageDialog" style="display:none;">
		<div class="hd">Add Page</div>
		<div class="bd">
			<form method="POST" action="index.php?module=Home&action=newTab&to_pdf=1">
				<label for="pageName">Page Name: </label><input type="textbox" name="pageName" /><br /><br />
				<label for="numColumns">Number of Columns:</label>
				<table align="center">
					<tr>
						<td><input type="radio" name="numColumns" value="1" />1</td>
						<td><input type="radio" name="numColumns" value="2" checked />2</td>
						<td><input type="radio" name="numColumns" value="3" />3</td>
					</tr>
				</table>
			</form>
		</div>
	</div>				

	<div id="changeLayoutDialog" style="display:none;">
		<div class="hd">Change Layout</div>
		<div class="bd">
			<form method="POST" action="index.php?module=Home&action=changeLayout&to_pdf=1">
				<label for="numColumns">Number of Columns:</label>
				<table align="center">
					<tr>
						<td><input type="radio" name="numColumns" value="1" />1</td>
						<td><input type="radio" name="numColumns" value="2" checked />2</td>
						<td><input type="radio" name="numColumns" value="3" />3</td>
					</tr>
				</table>
				<input type="hidden" name="changeLayoutParams" value="1" />
			</form>
		</div>
	</div>
	
	<div id="dashletsDialog">
		<div class="hd"></div>	
		<div class="bd">
			<form></form>
		</div>
	</div>
				
	
</div>

{if !$lock_homepage}
{literal}
<script type="text/javascript">
SUGAR.mySugar.maxCount = 	{/literal}{$maxCount}{literal};
SUGAR.mySugar.homepage_dd = new Array();
SUGAR.mySugar.init = function () {
	j = 0;
	{/literal}
	dashletIds = {$dashletIds};
	{literal}
	for(i in dashletIds) {
		SUGAR.mySugar.homepage_dd[j] = new ygDDList('dashlet_' + dashletIds[i]);
		SUGAR.mySugar.homepage_dd[j].setHandleElId('dashlet_header_' + dashletIds[i]);
		SUGAR.mySugar.homepage_dd[j].onMouseDown = SUGAR.mySugar.onDrag;  
		SUGAR.mySugar.homepage_dd[j].afterEndDrag = SUGAR.mySugar.onDrop;
		j++;
	}
	{/literal}
	{if $hiddenCounter > 0}
	for(var wp = 0; wp <= {$hiddenCounter}; wp++) {ldelim}
	    SUGAR.mySugar.homepage_dd[j++] = new ygDDListBoundary('page_'+activePage+'_hidden' + wp);
	{rdelim}
	{/if}
	{literal}

	YAHOO.util.DDM.mode = 1;

	SUGAR.mySugar.renderAddPageDialog();
	SUGAR.mySugar.renderDashletsTree();
	SUGAR.mySugar.renderChangeLayoutDialog();
}

YAHOO.util.Event.addListener(window, 'load', SUGAR.mySugar.init);

</script>
{/literal}
{/if}