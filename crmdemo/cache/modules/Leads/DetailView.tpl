

{assign var=preForm value="<table width='100%' border='1' cellspacing='0' cellpadding='0'><tr><td><table width='100%'><tr><td>"}
{assign var=displayPreform value=false}
{if isset($bean->contact_id) && !empty($bean->contact_id)}
{assign var=displayPreform value=true}
{assign var=preForm value=$preForm|cat:$MOD.LBL_CONVERTED_CONTACT}
{assign var=preForm value=$preForm|cat:"&nbsp;<a href='index.php?module=Contacts&action=DetailView&record="}
{assign var=preForm value=$preForm|cat:$bean->contact_id}
{assign var=preForm value=$preForm|cat:"'>"}
{assign var=preForm value=$preForm|cat:$bean->contact_name}
{assign var=preForm value=$preForm|cat:"</a>"}
{/if}
{assign var=preForm value=$preForm|cat:"</td><td>"}
{if isset($bean->account_id) && !empty($bean->account_id)}
{assign var=displayPreform value=true}
{assign var=preForm value=$preForm|cat:$MOD.LBL_CONVERTED_ACCOUNT}
{assign var=preForm value=$preForm|cat:"&nbsp;<a href='index.php?module=Accounts&action=DetailView&record="}
{assign var=preForm value=$preForm|cat:$bean->account_id}
{assign var=preForm value=$preForm|cat:"'>"}
{assign var=preForm value=$preForm|cat:$bean->account_name}
{assign var=preForm value=$preForm|cat:"</a>"}
{/if}
{assign var=preForm value=$preForm|cat:"</td><td>"}
{if isset($bean->opportunity_id) && !empty($bean->opportunity_id)}
{assign var=displayPreform value=true}
{assign var=preForm value=$preForm|cat:$MOD.LBL_CONVERTED_OPP}
{assign var=preForm value=$preForm|cat:"&nbsp;<a href='index.php?module=Opportunities&action=DetailView&record="}
{assign var=preForm value=$preForm|cat:$bean->opportunity_id}
{assign var=preForm value=$preForm|cat:"'>"}
{assign var=preForm value=$preForm|cat:$bean->opportunity_name}
{assign var=preForm value=$preForm|cat:"</a>"}
{/if}
{assign var=preForm value=$preForm|cat:"</td></tr></table></td></tr></table>"}
{if $displayPreform}
{$preForm}
<br>
{/if}

<script type="text/javascript" src="{sugar_getjspath file='include/EditView/Panels.js'}"></script>
<script language="javascript">
{literal}
SUGAR.util.doWhen(function(){
    return $("#contentTable").length == 0 && YAHOO.util.Event.DOMReady;
}, SUGAR.themes.actionMenu);
{/literal}
</script>
<table cellpadding="0" cellspacing="0" border="0" width="100%" id="">
<tr>
<td class="buttons" align="left" NOWRAP width="80%">
<div class="actionsContainer">
<form action="index.php" method="post" name="DetailView" id="formDetailView">
<input type="hidden" name="module" value="{$module}">
<input type="hidden" name="record" value="{$fields.id.value}">
<input type="hidden" name="return_action">
<input type="hidden" name="return_module">
<input type="hidden" name="return_id">
<input type="hidden" name="module_tab">
<input type="hidden" name="isDuplicate" value="false">
<input type="hidden" name="offset" value="{$offset}">
<input type="hidden" name="action" value="EditView">
<input type="hidden" name="sugar_body_only">
</form>
<ul id="detail_header_action_menu" class="clickMenu fancymenu" name ><li class="sugar_action_button" >{if $bean->aclAccess("edit")}<input title="{$APP.LBL_EDIT_BUTTON_TITLE}" accessKey="{$APP.LBL_EDIT_BUTTON_KEY}" class="button primary" onclick="var _form = document.getElementById('formDetailView'); _form.return_module.value='Leads'; _form.return_action.value='DetailView'; _form.return_id.value='{$id}'; _form.action.value='EditView';SUGAR.ajaxUI.submitForm(_form);" type="button" name="Edit" id="edit_button" value="{$APP.LBL_EDIT_BUTTON_LABEL}">{/if} <ul id class="subnav" ><li>{if $bean->aclAccess("edit")}<input title="{$APP.LBL_DUPLICATE_BUTTON_TITLE}" accessKey="{$APP.LBL_DUPLICATE_BUTTON_KEY}" class="button" onclick="var _form = document.getElementById('formDetailView'); _form.return_module.value='Leads'; _form.return_action.value='DetailView'; _form.isDuplicate.value=true; _form.action.value='EditView'; _form.return_id.value='{$id}';SUGAR.ajaxUI.submitForm(_form);" type="button" name="Duplicate" value="{$APP.LBL_DUPLICATE_BUTTON_LABEL}" id="duplicate_button">{/if} </li><li>{if $bean->aclAccess("delete")}<input title="{$APP.LBL_DELETE_BUTTON_TITLE}" accessKey="{$APP.LBL_DELETE_BUTTON_KEY}" class="button" onclick="var _form = document.getElementById('formDetailView'); _form.return_module.value='Leads'; _form.return_action.value='ListView'; _form.action.value='Delete'; if(confirm('{$APP.NTC_DELETE_CONFIRMATION}')) SUGAR.ajaxUI.submitForm(_form);" type="submit" name="Delete" value="{$APP.LBL_DELETE_BUTTON_LABEL}" id="delete_button">{/if} </li><li><input title="{$MOD.LBL_CONVERTLEAD_TITLE}" accessKey="{$MOD.LBL_CONVERTLEAD_BUTTON_KEY}" type="button" class="button" onClick="document.location='index.php?module=Leads&action=ConvertLead&record={$fields.id.value}'" name="convert" value="{$MOD.LBL_CONVERTLEAD}"/></li><li><input title="{$APP.LBL_DUP_MERGE}" accessKey="M" class="button" onclick="var _form = document.getElementById('formDetailView');_form.return_module.value='Leads'; _form.return_action.value='DetailView';_form.return_id.value='{$fields.id.value}'; _form.action.value='Step1'; _form.module.value='MergeRecords';_form.submit();" type="button" name="Merge" value="{$APP.LBL_DUP_MERGE}"/></li><li><input title="{$APP.LBL_MANAGE_SUBSCRIPTIONS}" class="button" onclick="var _form = document.getElementById('formDetailView');_form.return_module.value='Leads'; _form.return_action.value='DetailView';_form.return_id.value='{$fields.id.value}'; _form.action.value='Subscriptions'; _form.module.value='Campaigns'; _form.module_tab.value='Leads';_form.submit();" type="button" name="Manage Subscriptions" value="{$APP.LBL_MANAGE_SUBSCRIPTIONS}"/></li><li>{sugar_button module="$module" id="REALPDFVIEW" view="$view" form_id="formDetailView" record=$fields.id.value}</li><li>{sugar_button module="$module" id="REALPDFEMAIL" view="$view" form_id="formDetailView" record=$fields.id.value}</li><li>{if $bean->aclAccess("detail")}{if !empty($fields.id.value) && $isAuditEnabled}<input id="btn_view_change_log" title="{$APP.LNK_VIEW_CHANGE_LOG}" class="button" onclick='open_popup("Audit", "600", "400", "&record={$fields.id.value}&module_name=Leads", true, false,  {ldelim} "call_back_function":"set_return","form_name":"EditView","field_to_name_array":[] {rdelim} ); return false;' type="button" value="{$APP.LNK_VIEW_CHANGE_LOG}">{/if}{/if}</li></ul></li></ul>
</div>
</td>
<td align="right" width="20%">{$ADMIN_EDIT}
{$PAGINATION}
</td>
</tr>
</table>{sugar_include include=$includes}
<div id="Leads_detailview_tabs"
class="yui-navset detailview_tabs"
>

<ul class="yui-nav">

<li><a id="tab0" href="javascript:void(0)"><em>{sugar_translate label='LBL_CONTACT_INFORMATION' module='Leads'}</em></a></li>

<li><a id="tab1" href="javascript:void(0)"><em>{sugar_translate label='LBL_DETAILVIEW_PANEL1' module='Leads'}</em></a></li>

<li><a id="tab2" href="javascript:void(0)"><em>{sugar_translate label='LBL_PANEL_ADVANCED' module='Leads'}</em></a></li>

<li><a id="tab3" href="javascript:void(0)"><em>{sugar_translate label='LBL_DETAILVIEW_PANEL2' module='Leads'}</em></a></li>
</ul>
<div class="yui-content">
<div id='tabcontent0'>
<div id='detailpanel_1' class='detail view  detail508 expanded'>
{counter name="panelFieldCount" start=0 print=false assign="panelFieldCount"}
<table id='LBL_CONTACT_INFORMATION' class="panelContainer" cellspacing='{$gridline}'>
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{counter name="fieldsHidden" start=0 print=false assign="fieldsHidden"}
{capture name="tr" assign="tableRow"}
<tr>
{if $fields.full_name.acl > 0}
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.full_name.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_NAME' module='Leads'}{/capture}
{$label|strip_semicolon}:
{else}
{counter name="fieldsHidden"}
{/if}
</td>
<td width='37.5%'  >
{if !$fields.full_name.hidden}
{counter name="panelFieldCount"}

{if strlen($fields.full_name.value) <= 0}
{assign var="value" value=$fields.full_name.default_value }
{else}
{assign var="value" value=$fields.full_name.value }
{/if}
<span id='{$fields.full_name.name}'>{$fields.full_name.value}</span>
&nbsp;&nbsp;
<span class="id-ff">
<a id="btn_vCardButton" title="{$APP.LBL_VCARD}" href="#">{sugar_getimage alt=$app_strings.LBL_ID_FF_VCARD name="id-ff-vcard" ext=".png"}</a>
</span>
{literal}
<script type="text/javascript">
    $("#btn_vCardButton").click(function(e){
        {/literal}
        window.location.assign('index.php?module={$module}&action=vCard&record={$fields.id.value}&to_pdf=true');
        {literal}

        if (e.preventDefault) {
            e.preventDefault();
        }
    });
</script>
{/literal}
{/if}
</td>
{else}
<td>&nbsp;</td><td>&nbsp;</td>
{/if}
{if $fields.phone_work.acl > 0}
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.phone_work.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_OFFICE_PHONE' module='Leads'}{/capture}
{$label|strip_semicolon}:
{else}
{counter name="fieldsHidden"}
{/if}
</td>
<td width='37.5%'  class="phone">
{if !$fields.phone_work.hidden}
{counter name="panelFieldCount"}

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
{if !empty($fields.phone_work.value)}
{assign var="phone_value" value=$fields.phone_work.value }
{sugar_UC2C value=$phone_value }
{/if}
{/if}
</td>
{else}
<td>&nbsp;</td><td>&nbsp;</td>
{/if}
</tr>
{/capture}
{if $fieldsUsed > 0 && $fieldsUsed != $fieldsHidden}
{$tableRow}
{/if}
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{counter name="fieldsHidden" start=0 print=false assign="fieldsHidden"}
{capture name="tr" assign="tableRow"}
<tr>
{if $fields.title.acl > 0}
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.title.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_TITLE' module='Leads'}{/capture}
{$label|strip_semicolon}:
{else}
{counter name="fieldsHidden"}
{/if}
</td>
<td width='37.5%'  >
{if !$fields.title.hidden}
{counter name="panelFieldCount"}

{if strlen($fields.title.value) <= 0}
{assign var="value" value=$fields.title.default_value }
{else}
{assign var="value" value=$fields.title.value }
{/if} 
<span class="sugar_field" id="{$fields.title.name}">{$fields.title.value}</span>
{/if}
</td>
{else}
<td>&nbsp;</td><td>&nbsp;</td>
{/if}
{if $fields.phone_other.acl > 0}
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.phone_other.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_OTHER_PHONE' module='Leads'}{/capture}
{$label|strip_semicolon}:
{else}
{counter name="fieldsHidden"}
{/if}
</td>
<td width='37.5%'  class="phone">
{if !$fields.phone_other.hidden}
{counter name="panelFieldCount"}

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
{if !empty($fields.phone_other.value)}
{assign var="phone_value" value=$fields.phone_other.value }
{sugar_UC2C value=$phone_value }
{/if}
{/if}
</td>
{else}
<td>&nbsp;</td><td>&nbsp;</td>
{/if}
</tr>
{/capture}
{if $fieldsUsed > 0 && $fieldsUsed != $fieldsHidden}
{$tableRow}
{/if}
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{counter name="fieldsHidden" start=0 print=false assign="fieldsHidden"}
{capture name="tr" assign="tableRow"}
<tr>
{if $fields.account_name.acl > 0}
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.account_name.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_ACCOUNT_NAME' module='Leads'}{/capture}
{$label|strip_semicolon}:
{else}
{counter name="fieldsHidden"}
{/if}
</td>
<td width='37.5%'  >
{if !$fields.account_name.hidden}
{counter name="panelFieldCount"}

{if strlen($fields.account_name.value) <= 0}
{assign var="value" value=$fields.account_name.default_value }
{else}
{assign var="value" value=$fields.account_name.value }
{/if} 
<span class="sugar_field" id="{$fields.account_name.name}">{$fields.account_name.value}</span>
{if !empty($value)}
<!--not_in_theme!--><img id="dswidget_img" border="0" src="modules/Connectors/connectors/formatters/ext/rest/twitter/tpls/twitter.gif?v=Q1j_DmbG-g_EHbMMCDXHoQ" alt="ext_rest_twitter" onclick="show_ext_rest_twitter(event);"><script type='text/javascript' src='{sugar_getjspath file='include/connectors/formatters/default/company_detail.js'}'></script>
<script src="//widgets.twimg.com/j/2/widget.js" type="text/javascript"></script>
<script type="text/javascript" src="{sugar_getjspath file='include/connectors/formatters/default/company_detail.js'}"></script>
<script type="text/javascript">
function show_ext_rest_twitter(event)
{literal} 
{
    var xCoordinate = event.clientX;
    var yCoordinate = event.clientY;
    var isIE = document.all?true:false;
      
    if(isIE) 
    {
        xCoordinate = xCoordinate + document.body.scrollLeft;
        yCoordinate = yCoordinate + document.body.scrollTop;
    }

{/literal}

    cd = new CompanyDetailsDialog("twitter_popup_div", '<div id="twitter_div" name="twitter_div">' + SUGAR.language.get('app_strings', 'LBL_TWITTER_DATA_LOADING') + '</div>', xCoordinate, yCoordinate);
    cd.setHeader("{$fields.account_name.value|trim}");
    cd.display();

    mapping_name_value = "{$fields.account_name.value|trim}";

    if (mapping_name_value.length > 0) 
    {ldelim}
        twitter_popup = new TWTR.Widget({literal}{
          id: 'twitter_div',
          version: 2,
          type: 'profile',
          rpp: 4,
          interval: 6000,
          width: 250,
          height: 300,
          theme: {
            shell: {
              background: '#ffffff',
              color: '#000000'
            },
            tweets: {
              background: '#ffffff',
              color: '#000000',
              links: '#0b578f'
            }
          },
          features: {
            scrollbar: true,
            loop: false,
            live: true,
            hashtags: true,
            timestamp: true,
            avatars: false,
            behavior: 'all'
          }
        }{/literal}).render().setUser('{$fields.account_name.value}').start();
    {rdelim} 
    else 
    {ldelim}
        document.getElementById('twitter_div').innerHTML = SUGAR.language.get('app_strings', 'LBL_TWITTER_DATA_EMPTY');
    {rdelim}
{rdelim}
</script>
{/if}
{/if}
</td>
{else}
<td>&nbsp;</td><td>&nbsp;</td>
{/if}
{if $fields.phone_mobile.acl > 0}
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.phone_mobile.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_MOBILE_PHONE' module='Leads'}{/capture}
{$label|strip_semicolon}:
{else}
{counter name="fieldsHidden"}
{/if}
</td>
<td width='37.5%'  class="phone">
{if !$fields.phone_mobile.hidden}
{counter name="panelFieldCount"}

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
{if !empty($fields.phone_mobile.value)}
{assign var="phone_value" value=$fields.phone_mobile.value }
{sugar_UC2C value=$phone_value }
{/if}
{/if}
</td>
{else}
<td>&nbsp;</td><td>&nbsp;</td>
{/if}
</tr>
{/capture}
{if $fieldsUsed > 0 && $fieldsUsed != $fieldsHidden}
{$tableRow}
{/if}
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{counter name="fieldsHidden" start=0 print=false assign="fieldsHidden"}
{capture name="tr" assign="tableRow"}
<tr>
{if $fields.affiliate_c.acl > 0}
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.affiliate_c.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_AFFILIATE' module='Leads'}{/capture}
{$label|strip_semicolon}:
{else}
{counter name="fieldsHidden"}
{/if}
</td>
<td width='37.5%' colspan='3' >
{if !$fields.affiliate_c.hidden}
{counter name="panelFieldCount"}

{if strlen($fields.affiliate_c.value) <= 0}
{assign var="value" value=$fields.affiliate_c.default_value }
{else}
{assign var="value" value=$fields.affiliate_c.value }
{/if} 
<span class="sugar_field" id="{$fields.affiliate_c.name}">{$fields.affiliate_c.value}</span>
{/if}
</td>
{else}
<td>&nbsp;</td><td>&nbsp;</td>
{/if}
</tr>
{/capture}
{if $fieldsUsed > 0 && $fieldsUsed != $fieldsHidden}
{$tableRow}
{/if}
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{counter name="fieldsHidden" start=0 print=false assign="fieldsHidden"}
{capture name="tr" assign="tableRow"}
<tr>
{if $fields.con1.acl > 0}
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.con1.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_CONSULTANTS' module='Leads'}{/capture}
{$label|strip_semicolon}:
{else}
{counter name="fieldsHidden"}
{/if}
</td>
<td width='37.5%'  >
{if !$fields.con1.hidden}
{counter name="panelFieldCount"}

{if !empty($fields.con1.value) && ($fields.con1.value != '^^')}
<input type="hidden" class="sugar_field" id="{$fields.con1.name}" value="{$fields.con1.value}">
{multienum_to_array string=$fields.con1.value assign="vals"}
{foreach from=$vals item=item}
<li style="margin-left:10px;">{ $fields.con1.options.$item }</li>
{/foreach}
{/if}
{/if}
</td>
{else}
<td>&nbsp;</td><td>&nbsp;</td>
{/if}
{if $fields.assistant_phone.acl > 0}
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.assistant_phone.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_ASSISTANT_PHONE' module='Leads'}{/capture}
{$label|strip_semicolon}:
{else}
{counter name="fieldsHidden"}
{/if}
</td>
<td width='37.5%'  class="phone">
{if !$fields.assistant_phone.hidden}
{counter name="panelFieldCount"}

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
{if !empty($fields.assistant_phone.value)}
{assign var="phone_value" value=$fields.assistant_phone.value }
{sugar_UC2C value=$phone_value }
{/if}
{/if}
</td>
{else}
<td>&nbsp;</td><td>&nbsp;</td>
{/if}
</tr>
{/capture}
{if $fieldsUsed > 0 && $fieldsUsed != $fieldsHidden}
{$tableRow}
{/if}
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{counter name="fieldsHidden" start=0 print=false assign="fieldsHidden"}
{capture name="tr" assign="tableRow"}
<tr>
{if $fields.mifid_c.acl > 0}
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.mifid_c.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_MIFID' module='Leads'}{/capture}
{$label|strip_semicolon}:
{else}
{counter name="fieldsHidden"}
{/if}
</td>
<td width='37.5%' colspan='3' >
{if !$fields.mifid_c.hidden}
{counter name="panelFieldCount"}


{if is_string($fields.mifid_c.options)}
<input type="hidden" class="sugar_field" id="{$fields.mifid_c.name}" value="{ $fields.mifid_c.options }">
{ $fields.mifid_c.options }
{else}
<input type="hidden" class="sugar_field" id="{$fields.mifid_c.name}" value="{ $fields.mifid_c.value }">
{ $fields.mifid_c.options[$fields.mifid_c.value]}
{/if}
{/if}
</td>
{else}
<td>&nbsp;</td><td>&nbsp;</td>
{/if}
</tr>
{/capture}
{if $fieldsUsed > 0 && $fieldsUsed != $fieldsHidden}
{$tableRow}
{/if}
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{counter name="fieldsHidden" start=0 print=false assign="fieldsHidden"}
{capture name="tr" assign="tableRow"}
<tr>
{if $fields.primary_address_street.acl > 0}
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.primary_address_street.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_PRIMARY_ADDRESS' module='Leads'}{/capture}
{$label|strip_semicolon}:
{else}
{counter name="fieldsHidden"}
{/if}
</td>
<td width='37.5%'  >
{if !$fields.primary_address_street.hidden}
{counter name="panelFieldCount"}

<table border='0' cellpadding='0' cellspacing='0' width='100%'>
<tr>
<td width='99%'>
<input type="hidden" class="sugar_field" id="primary_address_street" value="{$fields.primary_address_street.value|escape:'htmlentitydecode'|escape:'html'|url2html|nl2br}">
<input type="hidden" class="sugar_field" id="primary_address_city" value="{$fields.primary_address_city.value|escape:'htmlentitydecode'|escape:'html'|url2html|nl2br}">
<input type="hidden" class="sugar_field" id="primary_address_state" value="{$fields.primary_address_state.value|escape:'htmlentitydecode'|escape:'html'|url2html|nl2br}">
<input type="hidden" class="sugar_field" id="primary_address_country" value="{$fields.primary_address_country.value|escape:'htmlentitydecode'|escape:'html'|url2html|nl2br}">
<input type="hidden" class="sugar_field" id="primary_address_postalcode" value="{$fields.primary_address_postalcode.value|escape:'htmlentitydecode'|escape:'html'|url2html|nl2br}">
{$fields.primary_address_street.value|escape:'htmlentitydecode'|escape:'html'|url2html|nl2br}<br>
{$fields.primary_address_city.value|escape:'htmlentitydecode'|escape:'html'|url2html|nl2br} {$fields.primary_address_state.value|escape:'htmlentitydecode'|strip_tags|url2html|nl2br}&nbsp;&nbsp;{$fields.primary_address_postalcode.value|escape:'htmlentitydecode'|strip_tags|url2html|nl2br}<br>
{$fields.primary_address_country.value|escape:'htmlentitydecode'|escape:'html'|url2html|nl2br}
</td>
<td class='dataField' width='1%'>
{$custom_code_primary}
</td>
</tr>
</table>
{/if}
</td>
{else}
<td>&nbsp;</td><td>&nbsp;</td>
{/if}
{if $fields.website.acl > 0}
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.website.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_WEBSITE' module='Leads'}{/capture}
{$label|strip_semicolon}:
{else}
{counter name="fieldsHidden"}
{/if}
</td>
<td width='37.5%'  >
{if !$fields.website.hidden}
{counter name="panelFieldCount"}

{capture name=getLink assign=link}{$fields.website.value}{/capture}
{if !empty($link)}
{capture name=getStart assign=linkStart}{$link|substr:0:7}{/capture}
<span class="sugar_field" id="{$fields.website.name}">
<a href='{$link|to_url}' target='_blank' >{$link}</a>
</span>
{/if}
{/if}
</td>
{else}
<td>&nbsp;</td><td>&nbsp;</td>
{/if}
</tr>
{/capture}
{if $fieldsUsed > 0 && $fieldsUsed != $fieldsHidden}
{$tableRow}
{/if}
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{counter name="fieldsHidden" start=0 print=false assign="fieldsHidden"}
{capture name="tr" assign="tableRow"}
<tr>
{if $fields.continent_c.acl > 0}
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.continent_c.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_CONTINENT' module='Leads'}{/capture}
{$label|strip_semicolon}:
{else}
{counter name="fieldsHidden"}
{/if}
</td>
<td width='37.5%'  >
{if !$fields.continent_c.hidden}
{counter name="panelFieldCount"}


{if is_string($fields.continent_c.options)}
<input type="hidden" class="sugar_field" id="{$fields.continent_c.name}" value="{ $fields.continent_c.options }">
{ $fields.continent_c.options }
{else}
<input type="hidden" class="sugar_field" id="{$fields.continent_c.name}" value="{ $fields.continent_c.value }">
{ $fields.continent_c.options[$fields.continent_c.value]}
{/if}
{/if}
</td>
{else}
<td>&nbsp;</td><td>&nbsp;</td>
{/if}
{if $fields.email1.acl > 0}
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.email1.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_EMAIL_ADDRESS' module='Leads'}{/capture}
{$label|strip_semicolon}:
{else}
{counter name="fieldsHidden"}
{/if}
</td>
<td width='37.5%'  >
{if !$fields.email1.hidden}
{counter name="panelFieldCount"}
<span id='email1_span'>
{$fields.email1.value}
</span>
{/if}
</td>
{else}
<td>&nbsp;</td><td>&nbsp;</td>
{/if}
</tr>
{/capture}
{if $fieldsUsed > 0 && $fieldsUsed != $fieldsHidden}
{$tableRow}
{/if}
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{counter name="fieldsHidden" start=0 print=false assign="fieldsHidden"}
{capture name="tr" assign="tableRow"}
<tr>
{if $fields.difficulty_score_c.acl > 0}
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.difficulty_score_c.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_DIFFICULTY_SCORE' module='Leads'}{/capture}
{$label|strip_semicolon}:
{else}
{counter name="fieldsHidden"}
{/if}
</td>
<td width='37.5%'  >
{if !$fields.difficulty_score_c.hidden}
{/if}
</td>
{else}
<td>&nbsp;</td><td>&nbsp;</td>
{/if}
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
&nbsp;
</td>
<td width='37.5%'  >
</td>
</tr>
{/capture}
{if $fieldsUsed > 0 && $fieldsUsed != $fieldsHidden}
{$tableRow}
{/if}
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{counter name="fieldsHidden" start=0 print=false assign="fieldsHidden"}
{capture name="tr" assign="tableRow"}
<tr>
{if $fields.further_information_c.acl > 0}
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.further_information_c.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_FURTHER_INFORMATION' module='Leads'}{/capture}
{$label|strip_semicolon}:
{else}
{counter name="fieldsHidden"}
{/if}
</td>
<td width='37.5%'  >
{if !$fields.further_information_c.hidden}
{counter name="panelFieldCount"}

<span class="sugar_field" id="{$fields.further_information_c.name|escape:'html'|url2html|nl2br}">{$fields.further_information_c.value|escape:'htmlentitydecode'|escape:'html'|url2html|nl2br}</span>
{/if}
</td>
{else}
<td>&nbsp;</td><td>&nbsp;</td>
{/if}
{if $fields.account_description.acl > 0}
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.account_description.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_ACCOUNT_DESCRIPTION' module='Leads'}{/capture}
{$label|strip_semicolon}:
{else}
{counter name="fieldsHidden"}
{/if}
</td>
<td width='37.5%'  >
{if !$fields.account_description.hidden}
{counter name="panelFieldCount"}

<span class="sugar_field" id="{$fields.account_description.name|escape:'html'|url2html|nl2br}">{$fields.account_description.value|escape:'htmlentitydecode'|escape:'html'|url2html|nl2br}</span>
{/if}
</td>
{else}
<td>&nbsp;</td><td>&nbsp;</td>
{/if}
</tr>
{/capture}
{if $fieldsUsed > 0 && $fieldsUsed != $fieldsHidden}
{$tableRow}
{/if}
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{counter name="fieldsHidden" start=0 print=false assign="fieldsHidden"}
{capture name="tr" assign="tableRow"}
<tr>
{if $fields.generate_doc.acl > 0}
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.generate_doc.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_GENERATE_DOC' module='Leads'}{/capture}
{$label|strip_semicolon}:
{else}
{counter name="fieldsHidden"}
{/if}
</td>
<td width='37.5%'  >
{if !$fields.generate_doc.hidden}
{counter name="panelFieldCount"}
<span id="generate_doc" class="sugar_field"><input title="{$APP.LBL_DUP_MERGE}" accesskey="M"  onclick="document.DetailView.action.value='gen_doc';document.DetailView.submit();" name="button" value="Investor Report" type="submit"> / <input title="{$APP.LBL_DUP_MERGE}" accesskey="M"  onclick="document.DetailView.action.value='gen_doc_new';document.DetailView.submit();" name="button" value="New Investor Report(Test Version)" type="submit"> </span>
{/if}
</td>
{else}
<td>&nbsp;</td><td>&nbsp;</td>
{/if}
{if $fields.go_on_web_c.acl > 0}
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.go_on_web_c.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_GO_ON_WEB' module='Leads'}{/capture}
{$label|strip_semicolon}:
{else}
{counter name="fieldsHidden"}
{/if}
</td>
<td width='37.5%'  >
{if !$fields.go_on_web_c.hidden}
{counter name="panelFieldCount"}

{if strval($fields.go_on_web_c.value) == "1" || strval($fields.go_on_web_c.value) == "yes" || strval($fields.go_on_web_c.value) == "on"} 
{assign var="checked" value="CHECKED"}
{else}
{assign var="checked" value=""}
{/if}
<input type="checkbox" class="checkbox" name="{$fields.go_on_web_c.name}" id="{$fields.go_on_web_c.name}" value="$fields.go_on_web_c.value" disabled="true" {$checked}>
{/if}
</td>
{else}
<td>&nbsp;</td><td>&nbsp;</td>
{/if}
</tr>
{/capture}
{if $fieldsUsed > 0 && $fieldsUsed != $fieldsHidden}
{$tableRow}
{/if}
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{counter name="fieldsHidden" start=0 print=false assign="fieldsHidden"}
{capture name="tr" assign="tableRow"}
<tr>
{if $fields.allocating_c.acl > 0}
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.allocating_c.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_ALLOCATING' module='Leads'}{/capture}
{$label|strip_semicolon}:
{else}
{counter name="fieldsHidden"}
{/if}
</td>
<td width='37.5%'  >
{if !$fields.allocating_c.hidden}
{counter name="panelFieldCount"}


{if is_string($fields.allocating_c.options)}
<input type="hidden" class="sugar_field" id="{$fields.allocating_c.name}" value="{ $fields.allocating_c.options }">
{ $fields.allocating_c.options }
{else}
<input type="hidden" class="sugar_field" id="{$fields.allocating_c.name}" value="{ $fields.allocating_c.value }">
{ $fields.allocating_c.options[$fields.allocating_c.value]}
{/if}
{/if}
</td>
{else}
<td>&nbsp;</td><td>&nbsp;</td>
{/if}
{if $fields.quick_email.acl > 0}
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.quick_email.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_SEND_QUICK_EMAIL' module='Leads'}{/capture}
{$label|strip_semicolon}:
{else}
{counter name="fieldsHidden"}
{/if}
</td>
<td width='37.5%'  >
{if !$fields.quick_email.hidden}
{counter name="panelFieldCount"}
<span id="quick_email" class="sugar_field"><input type="button" onClick="document.location.href='index.php?module=Leads&action=send_to&record={$fields.id.value}'" value="Enquire"></span>
{/if}
</td>
{else}
<td>&nbsp;</td><td>&nbsp;</td>
{/if}
</tr>
{/capture}
{if $fieldsUsed > 0 && $fieldsUsed != $fieldsHidden}
{$tableRow}
{/if}
</table>
</div>
{if $panelFieldCount == 0}
<script>document.getElementById("LBL_CONTACT_INFORMATION").style.display='none';</script>
{/if}
</div>    <div id='tabcontent1'>
<div id='detailpanel_2' class='detail view  detail508 expanded'>
{counter name="panelFieldCount" start=0 print=false assign="panelFieldCount"}
<table id='LBL_DETAILVIEW_PANEL1' class="panelContainer" cellspacing='{$gridline}'>
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{counter name="fieldsHidden" start=0 print=false assign="fieldsHidden"}
{capture name="tr" assign="tableRow"}
<tr>
{if $fields.fsa_c.acl > 0}
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.fsa_c.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_FSA' module='Leads'}{/capture}
{$label|strip_semicolon}:
{else}
{counter name="fieldsHidden"}
{/if}
</td>
<td width='37.5%'  >
{if !$fields.fsa_c.hidden}
{counter name="panelFieldCount"}


{if is_string($fields.fsa_c.options)}
<input type="hidden" class="sugar_field" id="{$fields.fsa_c.name}" value="{ $fields.fsa_c.options }">
{ $fields.fsa_c.options }
{else}
<input type="hidden" class="sugar_field" id="{$fields.fsa_c.name}" value="{ $fields.fsa_c.value }">
{ $fields.fsa_c.options[$fields.fsa_c.value]}
{/if}
{/if}
</td>
{else}
<td>&nbsp;</td><td>&nbsp;</td>
{/if}
{if $fields.required_aum_c.acl > 0}
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.required_aum_c.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_REQUIRED_AUM' module='Leads'}{/capture}
{$label|strip_semicolon}:
{else}
{counter name="fieldsHidden"}
{/if}
</td>
<td width='37.5%'  >
{if !$fields.required_aum_c.hidden}
{counter name="panelFieldCount"}


{if is_string($fields.required_aum_c.options)}
<input type="hidden" class="sugar_field" id="{$fields.required_aum_c.name}" value="{ $fields.required_aum_c.options }">
{ $fields.required_aum_c.options }
{else}
<input type="hidden" class="sugar_field" id="{$fields.required_aum_c.name}" value="{ $fields.required_aum_c.value }">
{ $fields.required_aum_c.options[$fields.required_aum_c.value]}
{/if}
{/if}
</td>
{else}
<td>&nbsp;</td><td>&nbsp;</td>
{/if}
</tr>
{/capture}
{if $fieldsUsed > 0 && $fieldsUsed != $fieldsHidden}
{$tableRow}
{/if}
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{counter name="fieldsHidden" start=0 print=false assign="fieldsHidden"}
{capture name="tr" assign="tableRow"}
<tr>
{if $fields.aum_c.acl > 0}
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.aum_c.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_AUM' module='Leads'}{/capture}
{$label|strip_semicolon}:
{else}
{counter name="fieldsHidden"}
{/if}
</td>
<td width='37.5%'  >
{if !$fields.aum_c.hidden}
{counter name="panelFieldCount"}

{if strlen($fields.aum_c.value) <= 0}
{assign var="value" value=$fields.aum_c.default_value }
{else}
{assign var="value" value=$fields.aum_c.value }
{/if} 
<span class="sugar_field" id="{$fields.aum_c.name}">{$fields.aum_c.value}</span>
{/if}
</td>
{else}
<td>&nbsp;</td><td>&nbsp;</td>
{/if}
{if $fields.peralloc_hf_c.acl > 0}
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.peralloc_hf_c.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_PERALLOC_HF' module='Leads'}{/capture}
{$label|strip_semicolon}:
{else}
{counter name="fieldsHidden"}
{/if}
</td>
<td width='37.5%'  >
{if !$fields.peralloc_hf_c.hidden}
{counter name="panelFieldCount"}

{if strlen($fields.peralloc_hf_c.value) <= 0}
{assign var="value" value=$fields.peralloc_hf_c.default_value }
{else}
{assign var="value" value=$fields.peralloc_hf_c.value }
{/if} 
<span class="sugar_field" id="{$fields.peralloc_hf_c.name}">{$fields.peralloc_hf_c.value}</span>
{/if}
</td>
{else}
<td>&nbsp;</td><td>&nbsp;</td>
{/if}
</tr>
{/capture}
{if $fieldsUsed > 0 && $fieldsUsed != $fieldsHidden}
{$tableRow}
{/if}
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{counter name="fieldsHidden" start=0 print=false assign="fieldsHidden"}
{capture name="tr" assign="tableRow"}
<tr>
{if $fields.fum_curr1_c.acl > 0}
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.fum_curr1_c.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_FUM_CURR1' module='Leads'}{/capture}
{$label|strip_semicolon}:
{else}
{counter name="fieldsHidden"}
{/if}
</td>
<td width='37.5%'  >
{if !$fields.fum_curr1_c.hidden}
{counter name="panelFieldCount"}


{if is_string($fields.fum_curr1_c.options)}
<input type="hidden" class="sugar_field" id="{$fields.fum_curr1_c.name}" value="{ $fields.fum_curr1_c.options }">
{ $fields.fum_curr1_c.options }
{else}
<input type="hidden" class="sugar_field" id="{$fields.fum_curr1_c.name}" value="{ $fields.fum_curr1_c.value }">
{ $fields.fum_curr1_c.options[$fields.fum_curr1_c.value]}
{/if}
{/if}
</td>
{else}
<td>&nbsp;</td><td>&nbsp;</td>
{/if}
{if $fields.typ_invest_c.acl > 0}
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.typ_invest_c.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_TYP_INVEST' module='Leads'}{/capture}
{$label|strip_semicolon}:
{else}
{counter name="fieldsHidden"}
{/if}
</td>
<td width='37.5%'  >
{if !$fields.typ_invest_c.hidden}
{counter name="panelFieldCount"}

{if strlen($fields.typ_invest_c.value) <= 0}
{assign var="value" value=$fields.typ_invest_c.default_value }
{else}
{assign var="value" value=$fields.typ_invest_c.value }
{/if} 
<span class="sugar_field" id="{$fields.typ_invest_c.name}">{$fields.typ_invest_c.value}</span>
{/if}
</td>
{else}
<td>&nbsp;</td><td>&nbsp;</td>
{/if}
</tr>
{/capture}
{if $fieldsUsed > 0 && $fieldsUsed != $fieldsHidden}
{$tableRow}
{/if}
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{counter name="fieldsHidden" start=0 print=false assign="fieldsHidden"}
{capture name="tr" assign="tableRow"}
<tr>
{if $fields.fund_type_c.acl > 0}
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.fund_type_c.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_FUND_TYPE' module='Leads'}{/capture}
{$label|strip_semicolon}:
{else}
{counter name="fieldsHidden"}
{/if}
</td>
<td width='37.5%'  >
{if !$fields.fund_type_c.hidden}
{counter name="panelFieldCount"}

{if !empty($fields.fund_type_c.value) && ($fields.fund_type_c.value != '^^')}
<input type="hidden" class="sugar_field" id="{$fields.fund_type_c.name}" value="{$fields.fund_type_c.value}">
{multienum_to_array string=$fields.fund_type_c.value assign="vals"}
{foreach from=$vals item=item}
<li style="margin-left:10px;">{ $fields.fund_type_c.options.$item }</li>
{/foreach}
{/if}
{/if}
</td>
{else}
<td>&nbsp;</td><td>&nbsp;</td>
{/if}
{if $fields.loc_pref_c.acl > 0}
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.loc_pref_c.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_LOC_PREF' module='Leads'}{/capture}
{$label|strip_semicolon}:
{else}
{counter name="fieldsHidden"}
{/if}
</td>
<td width='37.5%'  >
{if !$fields.loc_pref_c.hidden}
{counter name="panelFieldCount"}

{if !empty($fields.loc_pref_c.value) && ($fields.loc_pref_c.value != '^^')}
<input type="hidden" class="sugar_field" id="{$fields.loc_pref_c.name}" value="{$fields.loc_pref_c.value}">
{multienum_to_array string=$fields.loc_pref_c.value assign="vals"}
{foreach from=$vals item=item}
<li style="margin-left:10px;">{ $fields.loc_pref_c.options.$item }</li>
{/foreach}
{/if}
{/if}
</td>
{else}
<td>&nbsp;</td><td>&nbsp;</td>
{/if}
</tr>
{/capture}
{if $fieldsUsed > 0 && $fieldsUsed != $fieldsHidden}
{$tableRow}
{/if}
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{counter name="fieldsHidden" start=0 print=false assign="fieldsHidden"}
{capture name="tr" assign="tableRow"}
<tr>
{if $fields.spec_strat_pref_c.acl > 0}
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.spec_strat_pref_c.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_SPEC_STRAT_PREF' module='Leads'}{/capture}
{$label|strip_semicolon}:
{else}
{counter name="fieldsHidden"}
{/if}
</td>
<td width='37.5%'  >
{if !$fields.spec_strat_pref_c.hidden}
{counter name="panelFieldCount"}

{if !empty($fields.spec_strat_pref_c.value) && ($fields.spec_strat_pref_c.value != '^^')}
<input type="hidden" class="sugar_field" id="{$fields.spec_strat_pref_c.name}" value="{$fields.spec_strat_pref_c.value}">
{multienum_to_array string=$fields.spec_strat_pref_c.value assign="vals"}
{foreach from=$vals item=item}
<li style="margin-left:10px;">{ $fields.spec_strat_pref_c.options.$item }</li>
{/foreach}
{/if}
{/if}
</td>
{else}
<td>&nbsp;</td><td>&nbsp;</td>
{/if}
{if $fields.vol_pref_c.acl > 0}
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.vol_pref_c.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_VOL_PREF' module='Leads'}{/capture}
{$label|strip_semicolon}:
{else}
{counter name="fieldsHidden"}
{/if}
</td>
<td width='37.5%'  >
{if !$fields.vol_pref_c.hidden}
{counter name="panelFieldCount"}

{if !empty($fields.vol_pref_c.value) && ($fields.vol_pref_c.value != '^^')}
<input type="hidden" class="sugar_field" id="{$fields.vol_pref_c.name}" value="{$fields.vol_pref_c.value}">
{multienum_to_array string=$fields.vol_pref_c.value assign="vals"}
{foreach from=$vals item=item}
<li style="margin-left:10px;">{ $fields.vol_pref_c.options.$item }</li>
{/foreach}
{/if}
{/if}
</td>
{else}
<td>&nbsp;</td><td>&nbsp;</td>
{/if}
</tr>
{/capture}
{if $fieldsUsed > 0 && $fieldsUsed != $fieldsHidden}
{$tableRow}
{/if}
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{counter name="fieldsHidden" start=0 print=false assign="fieldsHidden"}
{capture name="tr" assign="tableRow"}
<tr>
{if $fields.investor_typ_c.acl > 0}
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.investor_typ_c.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_INVESTOR_TYP' module='Leads'}{/capture}
{$label|strip_semicolon}:
{else}
{counter name="fieldsHidden"}
{/if}
</td>
<td width='37.5%'  >
{if !$fields.investor_typ_c.hidden}
{counter name="panelFieldCount"}

{if !empty($fields.investor_typ_c.value) && ($fields.investor_typ_c.value != '^^')}
<input type="hidden" class="sugar_field" id="{$fields.investor_typ_c.name}" value="{$fields.investor_typ_c.value}">
{multienum_to_array string=$fields.investor_typ_c.value assign="vals"}
{foreach from=$vals item=item}
<li style="margin-left:10px;">{ $fields.investor_typ_c.options.$item }</li>
{/foreach}
{/if}
{/if}
</td>
{else}
<td>&nbsp;</td><td>&nbsp;</td>
{/if}
{if $fields.investment_geography_c.acl > 0}
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.investment_geography_c.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_INVESTMENT_GEOGRAPHY' module='Leads'}{/capture}
{$label|strip_semicolon}:
{else}
{counter name="fieldsHidden"}
{/if}
</td>
<td width='37.5%'  >
{if !$fields.investment_geography_c.hidden}
{counter name="panelFieldCount"}

{if !empty($fields.investment_geography_c.value) && ($fields.investment_geography_c.value != '^^')}
<input type="hidden" class="sugar_field" id="{$fields.investment_geography_c.name}" value="{$fields.investment_geography_c.value}">
{multienum_to_array string=$fields.investment_geography_c.value assign="vals"}
{foreach from=$vals item=item}
<li style="margin-left:10px;">{ $fields.investment_geography_c.options.$item }</li>
{/foreach}
{/if}
{/if}
</td>
{else}
<td>&nbsp;</td><td>&nbsp;</td>
{/if}
</tr>
{/capture}
{if $fieldsUsed > 0 && $fieldsUsed != $fieldsHidden}
{$tableRow}
{/if}
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{counter name="fieldsHidden" start=0 print=false assign="fieldsHidden"}
{capture name="tr" assign="tableRow"}
<tr>
{if $fields.min_track_c.acl > 0}
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.min_track_c.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_MIN_TRACK' module='Leads'}{/capture}
{$label|strip_semicolon}:
{else}
{counter name="fieldsHidden"}
{/if}
</td>
<td width='37.5%'  >
{if !$fields.min_track_c.hidden}
{counter name="panelFieldCount"}


{if is_string($fields.min_track_c.options)}
<input type="hidden" class="sugar_field" id="{$fields.min_track_c.name}" value="{ $fields.min_track_c.options }">
{ $fields.min_track_c.options }
{else}
<input type="hidden" class="sugar_field" id="{$fields.min_track_c.name}" value="{ $fields.min_track_c.value }">
{ $fields.min_track_c.options[$fields.min_track_c.value]}
{/if}
{/if}
</td>
{else}
<td>&nbsp;</td><td>&nbsp;</td>
{/if}
{if $fields.min_track1_c.acl > 0}
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.min_track1_c.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_MIN_TRACK1_C' module='Leads'}{/capture}
{$label|strip_semicolon}:
{else}
{counter name="fieldsHidden"}
{/if}
</td>
<td width='37.5%'  >
{if !$fields.min_track1_c.hidden}
{/if}
</td>
{else}
<td>&nbsp;</td><td>&nbsp;</td>
{/if}
</tr>
{/capture}
{if $fieldsUsed > 0 && $fieldsUsed != $fieldsHidden}
{$tableRow}
{/if}
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{counter name="fieldsHidden" start=0 print=false assign="fieldsHidden"}
{capture name="tr" assign="tableRow"}
<tr>
{if $fields.targ_return_c.acl > 0}
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.targ_return_c.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_TARG_RETURN' module='Leads'}{/capture}
{$label|strip_semicolon}:
{else}
{counter name="fieldsHidden"}
{/if}
</td>
<td width='37.5%'  >
{if !$fields.targ_return_c.hidden}
{counter name="panelFieldCount"}

{if strlen($fields.targ_return_c.value) <= 0}
{assign var="value" value=$fields.targ_return_c.default_value }
{else}
{assign var="value" value=$fields.targ_return_c.value }
{/if} 
<span class="sugar_field" id="{$fields.targ_return_c.name}">{$fields.targ_return_c.value}</span>
{/if}
</td>
{else}
<td>&nbsp;</td><td>&nbsp;</td>
{/if}
{if $fields.req_aum_c.acl > 0}
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.req_aum_c.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_REQ_AUM' module='Leads'}{/capture}
{$label|strip_semicolon}:
{else}
{counter name="fieldsHidden"}
{/if}
</td>
<td width='37.5%'  >
{if !$fields.req_aum_c.hidden}
{counter name="panelFieldCount"}

{if strlen($fields.req_aum_c.value) <= 0}
{assign var="value" value=$fields.req_aum_c.default_value }
{else}
{assign var="value" value=$fields.req_aum_c.value }
{/if} 
<span class="sugar_field" id="{$fields.req_aum_c.name}">{$fields.req_aum_c.value}</span>
{/if}
</td>
{else}
<td>&nbsp;</td><td>&nbsp;</td>
{/if}
</tr>
{/capture}
{if $fieldsUsed > 0 && $fieldsUsed != $fieldsHidden}
{$tableRow}
{/if}
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{counter name="fieldsHidden" start=0 print=false assign="fieldsHidden"}
{capture name="tr" assign="tableRow"}
<tr>
{if $fields.pref_liquid_c.acl > 0}
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.pref_liquid_c.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_PREF_LIQUID' module='Leads'}{/capture}
{$label|strip_semicolon}:
{else}
{counter name="fieldsHidden"}
{/if}
</td>
<td width='37.5%'  >
{if !$fields.pref_liquid_c.hidden}
{counter name="panelFieldCount"}


{if is_string($fields.pref_liquid_c.options)}
<input type="hidden" class="sugar_field" id="{$fields.pref_liquid_c.name}" value="{ $fields.pref_liquid_c.options }">
{ $fields.pref_liquid_c.options }
{else}
<input type="hidden" class="sugar_field" id="{$fields.pref_liquid_c.name}" value="{ $fields.pref_liquid_c.value }">
{ $fields.pref_liquid_c.options[$fields.pref_liquid_c.value]}
{/if}
{/if}
</td>
{else}
<td>&nbsp;</td><td>&nbsp;</td>
{/if}
{if $fields.pref_liquid_1c_c.acl > 0}
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.pref_liquid_1c_c.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_PREF_LIQUID_1C' module='Leads'}{/capture}
{$label|strip_semicolon}:
{else}
{counter name="fieldsHidden"}
{/if}
</td>
<td width='37.5%'  >
{if !$fields.pref_liquid_1c_c.hidden}
{/if}
</td>
{else}
<td>&nbsp;</td><td>&nbsp;</td>
{/if}
</tr>
{/capture}
{if $fieldsUsed > 0 && $fieldsUsed != $fieldsHidden}
{$tableRow}
{/if}
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{counter name="fieldsHidden" start=0 print=false assign="fieldsHidden"}
{capture name="tr" assign="tableRow"}
<tr>
{if $fields.fund_structure_c.acl > 0}
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.fund_structure_c.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_FUND_STRUCTURE' module='Leads'}{/capture}
{$label|strip_semicolon}:
{else}
{counter name="fieldsHidden"}
{/if}
</td>
<td width='37.5%'  >
{if !$fields.fund_structure_c.hidden}
{counter name="panelFieldCount"}

{if !empty($fields.fund_structure_c.value) && ($fields.fund_structure_c.value != '^^')}
<input type="hidden" class="sugar_field" id="{$fields.fund_structure_c.name}" value="{$fields.fund_structure_c.value}">
{multienum_to_array string=$fields.fund_structure_c.value assign="vals"}
{foreach from=$vals item=item}
<li style="margin-left:10px;">{ $fields.fund_structure_c.options.$item }</li>
{/foreach}
{/if}
{/if}
</td>
{else}
<td>&nbsp;</td><td>&nbsp;</td>
{/if}
{if $fields.avg_time_monitored_c.acl > 0}
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.avg_time_monitored_c.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_AVG_TIME_MONITORED' module='Leads'}{/capture}
{$label|strip_semicolon}:
{else}
{counter name="fieldsHidden"}
{/if}
</td>
<td width='37.5%'  >
{if !$fields.avg_time_monitored_c.hidden}
{counter name="panelFieldCount"}

{if strlen($fields.avg_time_monitored_c.value) <= 0}
{assign var="value" value=$fields.avg_time_monitored_c.default_value }
{else}
{assign var="value" value=$fields.avg_time_monitored_c.value }
{/if} 
<span class="sugar_field" id="{$fields.avg_time_monitored_c.name}">{$fields.avg_time_monitored_c.value}</span>
{/if}
</td>
{else}
<td>&nbsp;</td><td>&nbsp;</td>
{/if}
</tr>
{/capture}
{if $fieldsUsed > 0 && $fieldsUsed != $fieldsHidden}
{$tableRow}
{/if}
</table>
</div>
{if $panelFieldCount == 0}
<script>document.getElementById("LBL_DETAILVIEW_PANEL1").style.display='none';</script>
{/if}
</div>    <div id='tabcontent2'>
<div id='detailpanel_3' class='detail view  detail508 expanded'>
{counter name="panelFieldCount" start=0 print=false assign="panelFieldCount"}
<table id='LBL_PANEL_ADVANCED' class="panelContainer" cellspacing='{$gridline}'>
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{counter name="fieldsHidden" start=0 print=false assign="fieldsHidden"}
{capture name="tr" assign="tableRow"}
<tr>
{if $fields.status.acl > 0}
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.status.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_STATUS' module='Leads'}{/capture}
{$label|strip_semicolon}:
{else}
{counter name="fieldsHidden"}
{/if}
</td>
<td width='37.5%' colspan='3' >
{if !$fields.status.hidden}
{counter name="panelFieldCount"}


{if is_string($fields.status.options)}
<input type="hidden" class="sugar_field" id="{$fields.status.name}" value="{ $fields.status.options }">
{ $fields.status.options }
{else}
<input type="hidden" class="sugar_field" id="{$fields.status.name}" value="{ $fields.status.value }">
{ $fields.status.options[$fields.status.value]}
{/if}
{/if}
</td>
{else}
<td>&nbsp;</td><td>&nbsp;</td>
{/if}
</tr>
{/capture}
{if $fieldsUsed > 0 && $fieldsUsed != $fieldsHidden}
{$tableRow}
{/if}
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{counter name="fieldsHidden" start=0 print=false assign="fieldsHidden"}
{capture name="tr" assign="tableRow"}
<tr>
{if $fields.status_description.acl > 0}
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.status_description.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_STATUS_DESCRIPTION' module='Leads'}{/capture}
{$label|strip_semicolon}:
{else}
{counter name="fieldsHidden"}
{/if}
</td>
<td width='37.5%' colspan='3' >
{if !$fields.status_description.hidden}
{counter name="panelFieldCount"}

<span class="sugar_field" id="{$fields.status_description.name|escape:'html'|url2html|nl2br}">{$fields.status_description.value|escape:'htmlentitydecode'|escape:'html'|url2html|nl2br}</span>
{/if}
</td>
{else}
<td>&nbsp;</td><td>&nbsp;</td>
{/if}
</tr>
{/capture}
{if $fieldsUsed > 0 && $fieldsUsed != $fieldsHidden}
{$tableRow}
{/if}
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{counter name="fieldsHidden" start=0 print=false assign="fieldsHidden"}
{capture name="tr" assign="tableRow"}
<tr>
{if $fields.opportunity_amount.acl > 0}
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.opportunity_amount.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_OPPORTUNITY_AMOUNT' module='Leads'}{/capture}
{$label|strip_semicolon}:
{else}
{counter name="fieldsHidden"}
{/if}
</td>
<td width='37.5%'  >
{if !$fields.opportunity_amount.hidden}
{counter name="panelFieldCount"}

{if strlen($fields.opportunity_amount.value) <= 0}
{assign var="value" value=$fields.opportunity_amount.default_value }
{else}
{assign var="value" value=$fields.opportunity_amount.value }
{/if} 
<span class="sugar_field" id="{$fields.opportunity_amount.name}">{$fields.opportunity_amount.value}</span>
{/if}
</td>
{else}
<td>&nbsp;</td><td>&nbsp;</td>
{/if}
{if $fields.refered_by.acl > 0}
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.refered_by.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_REFERED_BY' module='Leads'}{/capture}
{$label|strip_semicolon}:
{else}
{counter name="fieldsHidden"}
{/if}
</td>
<td width='37.5%'  >
{if !$fields.refered_by.hidden}
{counter name="panelFieldCount"}

{if strlen($fields.refered_by.value) <= 0}
{assign var="value" value=$fields.refered_by.default_value }
{else}
{assign var="value" value=$fields.refered_by.value }
{/if} 
<span class="sugar_field" id="{$fields.refered_by.name}">{$fields.refered_by.value}</span>
{/if}
</td>
{else}
<td>&nbsp;</td><td>&nbsp;</td>
{/if}
</tr>
{/capture}
{if $fieldsUsed > 0 && $fieldsUsed != $fieldsHidden}
{$tableRow}
{/if}
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{counter name="fieldsHidden" start=0 print=false assign="fieldsHidden"}
{capture name="tr" assign="tableRow"}
<tr>
{if $fields.assigned_user_name.acl > 0}
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.assigned_user_name.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_ASSIGNED_TO' module='Leads'}{/capture}
{$label|strip_semicolon}:
{else}
{counter name="fieldsHidden"}
{/if}
</td>
<td width='37.5%'  >
{if !$fields.assigned_user_name.hidden}
{counter name="panelFieldCount"}

<span id="assigned_user_id" class="sugar_field" data-id-value="{$fields.assigned_user_id.value}">{$fields.assigned_user_name.value}</span>
{/if}
</td>
{else}
<td>&nbsp;</td><td>&nbsp;</td>
{/if}
{if $fields.date_modified.acl > 0}
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.date_modified.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_DATE_MODIFIED' module='Leads'}{/capture}
{$label|strip_semicolon}:
{else}
{counter name="fieldsHidden"}
{/if}
</td>
<td width='37.5%'  >
{if !$fields.date_modified.hidden}
{counter name="panelFieldCount"}
<span id="date_modified" class="sugar_field">{$fields.date_modified.value} {$APP.LBL_BY} {$fields.modified_by_name.value}</span>
{/if}
</td>
{else}
<td>&nbsp;</td><td>&nbsp;</td>
{/if}
</tr>
{/capture}
{if $fieldsUsed > 0 && $fieldsUsed != $fieldsHidden}
{$tableRow}
{/if}
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{counter name="fieldsHidden" start=0 print=false assign="fieldsHidden"}
{capture name="tr" assign="tableRow"}
<tr>
{if $fields.last_spoke_c.acl > 0}
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.last_spoke_c.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_LAST_SPOKE' module='Leads'}{/capture}
{$label|strip_semicolon}:
{else}
{counter name="fieldsHidden"}
{/if}
</td>
<td width='37.5%'  >
{if !$fields.last_spoke_c.hidden}
{counter name="panelFieldCount"}


{if strlen($fields.last_spoke_c.value) <= 0}
{assign var="value" value=$fields.last_spoke_c.default_value }
{else}
{assign var="value" value=$fields.last_spoke_c.value }
{/if}
<span class="sugar_field" id="{$fields.last_spoke_c.name}">{$value}</span>
{/if}
</td>
{else}
<td>&nbsp;</td><td>&nbsp;</td>
{/if}
{if $fields.investor_rating_c.acl > 0}
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.investor_rating_c.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_INVESTOR_RATING' module='Leads'}{/capture}
{$label|strip_semicolon}:
{else}
{counter name="fieldsHidden"}
{/if}
</td>
<td width='37.5%'  >
{if !$fields.investor_rating_c.hidden}
{counter name="panelFieldCount"}


{if is_string($fields.investor_rating_c.options)}
<input type="hidden" class="sugar_field" id="{$fields.investor_rating_c.name}" value="{ $fields.investor_rating_c.options }">
{ $fields.investor_rating_c.options }
{else}
<input type="hidden" class="sugar_field" id="{$fields.investor_rating_c.name}" value="{ $fields.investor_rating_c.value }">
{ $fields.investor_rating_c.options[$fields.investor_rating_c.value]}
{/if}
{/if}
</td>
{else}
<td>&nbsp;</td><td>&nbsp;</td>
{/if}
</tr>
{/capture}
{if $fieldsUsed > 0 && $fieldsUsed != $fieldsHidden}
{$tableRow}
{/if}
</table>
</div>
{if $panelFieldCount == 0}
<script>document.getElementById("LBL_PANEL_ADVANCED").style.display='none';</script>
{/if}
</div>    <div id='tabcontent3'>
<div id='detailpanel_4' class='detail view  detail508 expanded'>
{counter name="panelFieldCount" start=0 print=false assign="panelFieldCount"}
<table id='LBL_DETAILVIEW_PANEL2' class="panelContainer" cellspacing='{$gridline}'>
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{counter name="fieldsHidden" start=0 print=false assign="fieldsHidden"}
{capture name="tr" assign="tableRow"}
<tr>
{if $fields.target_links.acl > 0}
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.target_links.hidden}
{capture name="label" assign="label"}{sugar_translate label='All Target Lists' module='Leads'}{/capture}
{$label|strip_semicolon}:
{else}
{counter name="fieldsHidden"}
{/if}
</td>
<td width='37.5%' colspan='3' >
{if !$fields.target_links.hidden}
{counter name="panelFieldCount"}

<span class="sugar_field" id="{$fields.target_links.name|escape:'html'|url2html|nl2br}">{$fields.target_links.value|escape:'htmlentitydecode'|escape:'html'|url2html|nl2br}</span>
{/if}
</td>
{else}
<td>&nbsp;</td><td>&nbsp;</td>
{/if}
</tr>
{/capture}
{if $fieldsUsed > 0 && $fieldsUsed != $fieldsHidden}
{$tableRow}
{/if}
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{counter name="fieldsHidden" start=0 print=false assign="fieldsHidden"}
{capture name="tr" assign="tableRow"}
<tr>
{if $fields.suitable_clients_2_c.acl > 0}
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.suitable_clients_2_c.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_SUITABLE_CLIENTS_2' module='Leads'}{/capture}
{$label|strip_semicolon}:
{else}
{counter name="fieldsHidden"}
{/if}
</td>
<td width='37.5%'  >
{if !$fields.suitable_clients_2_c.hidden}
{counter name="panelFieldCount"}

{if !empty($fields.suitable_clients_2_c.value) && ($fields.suitable_clients_2_c.value != '^^')}
<input type="hidden" class="sugar_field" id="{$fields.suitable_clients_2_c.name}" value="{$fields.suitable_clients_2_c.value}">
{multienum_to_array string=$fields.suitable_clients_2_c.value assign="vals"}
{foreach from=$vals item=item}
<li style="margin-left:10px;">{ $fields.suitable_clients_2_c.options.$item }</li>
{/foreach}
{/if}
{/if}
</td>
{else}
<td>&nbsp;</td><td>&nbsp;</td>
{/if}
{if $fields.trips_suitable2_c.acl > 0}
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.trips_suitable2_c.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_TRIPS_SUITABLE2' module='Leads'}{/capture}
{$label|strip_semicolon}:
{else}
{counter name="fieldsHidden"}
{/if}
</td>
<td width='37.5%'  >
{if !$fields.trips_suitable2_c.hidden}
{counter name="panelFieldCount"}

{if !empty($fields.trips_suitable2_c.value) && ($fields.trips_suitable2_c.value != '^^')}
<input type="hidden" class="sugar_field" id="{$fields.trips_suitable2_c.name}" value="{$fields.trips_suitable2_c.value}">
{multienum_to_array string=$fields.trips_suitable2_c.value assign="vals"}
{foreach from=$vals item=item}
<li style="margin-left:10px;">{ $fields.trips_suitable2_c.options.$item }</li>
{/foreach}
{/if}
{/if}
</td>
{else}
<td>&nbsp;</td><td>&nbsp;</td>
{/if}
</tr>
{/capture}
{if $fieldsUsed > 0 && $fieldsUsed != $fieldsHidden}
{$tableRow}
{/if}
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{counter name="fieldsHidden" start=0 print=false assign="fieldsHidden"}
{capture name="tr" assign="tableRow"}
<tr>
{if $fields.trips_suitable3_c.acl > 0}
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.trips_suitable3_c.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_TRIPS_SUITABLE3' module='Leads'}{/capture}
{$label|strip_semicolon}:
{else}
{counter name="fieldsHidden"}
{/if}
</td>
<td width='37.5%'  >
{if !$fields.trips_suitable3_c.hidden}
{counter name="panelFieldCount"}

{if !empty($fields.trips_suitable3_c.value) && ($fields.trips_suitable3_c.value != '^^')}
<input type="hidden" class="sugar_field" id="{$fields.trips_suitable3_c.name}" value="{$fields.trips_suitable3_c.value}">
{multienum_to_array string=$fields.trips_suitable3_c.value assign="vals"}
{foreach from=$vals item=item}
<li style="margin-left:10px;">{ $fields.trips_suitable3_c.options.$item }</li>
{/foreach}
{/if}
{/if}
</td>
{else}
<td>&nbsp;</td><td>&nbsp;</td>
{/if}
{if $fields.trips_suitable4_c.acl > 0}
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.trips_suitable4_c.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_TRIPS_SUITABLE4' module='Leads'}{/capture}
{$label|strip_semicolon}:
{else}
{counter name="fieldsHidden"}
{/if}
</td>
<td width='37.5%'  >
{if !$fields.trips_suitable4_c.hidden}
{counter name="panelFieldCount"}

{if !empty($fields.trips_suitable4_c.value) && ($fields.trips_suitable4_c.value != '^^')}
<input type="hidden" class="sugar_field" id="{$fields.trips_suitable4_c.name}" value="{$fields.trips_suitable4_c.value}">
{multienum_to_array string=$fields.trips_suitable4_c.value assign="vals"}
{foreach from=$vals item=item}
<li style="margin-left:10px;">{ $fields.trips_suitable4_c.options.$item }</li>
{/foreach}
{/if}
{/if}
</td>
{else}
<td>&nbsp;</td><td>&nbsp;</td>
{/if}
</tr>
{/capture}
{if $fieldsUsed > 0 && $fieldsUsed != $fieldsHidden}
{$tableRow}
{/if}
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{counter name="fieldsHidden" start=0 print=false assign="fieldsHidden"}
{capture name="tr" assign="tableRow"}
<tr>
{if $fields.trips_suitable5_c.acl > 0}
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.trips_suitable5_c.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_TRIPS_SUITABLE5' module='Leads'}{/capture}
{$label|strip_semicolon}:
{else}
{counter name="fieldsHidden"}
{/if}
</td>
<td width='37.5%'  >
{if !$fields.trips_suitable5_c.hidden}
{counter name="panelFieldCount"}

{if !empty($fields.trips_suitable5_c.value) && ($fields.trips_suitable5_c.value != '^^')}
<input type="hidden" class="sugar_field" id="{$fields.trips_suitable5_c.name}" value="{$fields.trips_suitable5_c.value}">
{multienum_to_array string=$fields.trips_suitable5_c.value assign="vals"}
{foreach from=$vals item=item}
<li style="margin-left:10px;">{ $fields.trips_suitable5_c.options.$item }</li>
{/foreach}
{/if}
{/if}
</td>
{else}
<td>&nbsp;</td><td>&nbsp;</td>
{/if}
{if $fields.trip6_c.acl > 0}
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.trip6_c.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_TRIP6' module='Leads'}{/capture}
{$label|strip_semicolon}:
{else}
{counter name="fieldsHidden"}
{/if}
</td>
<td width='37.5%'  >
{if !$fields.trip6_c.hidden}
{counter name="panelFieldCount"}

{if !empty($fields.trip6_c.value) && ($fields.trip6_c.value != '^^')}
<input type="hidden" class="sugar_field" id="{$fields.trip6_c.name}" value="{$fields.trip6_c.value}">
{multienum_to_array string=$fields.trip6_c.value assign="vals"}
{foreach from=$vals item=item}
<li style="margin-left:10px;">{ $fields.trip6_c.options.$item }</li>
{/foreach}
{/if}
{/if}
</td>
{else}
<td>&nbsp;</td><td>&nbsp;</td>
{/if}
</tr>
{/capture}
{if $fieldsUsed > 0 && $fieldsUsed != $fieldsHidden}
{$tableRow}
{/if}
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{counter name="fieldsHidden" start=0 print=false assign="fieldsHidden"}
{capture name="tr" assign="tableRow"}
<tr>
{if $fields.trip7_c.acl > 0}
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.trip7_c.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_TRIP7' module='Leads'}{/capture}
{$label|strip_semicolon}:
{else}
{counter name="fieldsHidden"}
{/if}
</td>
<td width='37.5%'  >
{if !$fields.trip7_c.hidden}
{counter name="panelFieldCount"}

{if !empty($fields.trip7_c.value) && ($fields.trip7_c.value != '^^')}
<input type="hidden" class="sugar_field" id="{$fields.trip7_c.name}" value="{$fields.trip7_c.value}">
{multienum_to_array string=$fields.trip7_c.value assign="vals"}
{foreach from=$vals item=item}
<li style="margin-left:10px;">{ $fields.trip7_c.options.$item }</li>
{/foreach}
{/if}
{/if}
</td>
{else}
<td>&nbsp;</td><td>&nbsp;</td>
{/if}
{if $fields.trip8_c.acl > 0}
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.trip8_c.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_TRIP8' module='Leads'}{/capture}
{$label|strip_semicolon}:
{else}
{counter name="fieldsHidden"}
{/if}
</td>
<td width='37.5%'  >
{if !$fields.trip8_c.hidden}
{counter name="panelFieldCount"}

{if !empty($fields.trip8_c.value) && ($fields.trip8_c.value != '^^')}
<input type="hidden" class="sugar_field" id="{$fields.trip8_c.name}" value="{$fields.trip8_c.value}">
{multienum_to_array string=$fields.trip8_c.value assign="vals"}
{foreach from=$vals item=item}
<li style="margin-left:10px;">{ $fields.trip8_c.options.$item }</li>
{/foreach}
{/if}
{/if}
</td>
{else}
<td>&nbsp;</td><td>&nbsp;</td>
{/if}
</tr>
{/capture}
{if $fieldsUsed > 0 && $fieldsUsed != $fieldsHidden}
{$tableRow}
{/if}
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{counter name="fieldsHidden" start=0 print=false assign="fieldsHidden"}
{capture name="tr" assign="tableRow"}
<tr>
{if $fields.trip9_c.acl > 0}
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.trip9_c.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_TRIP9' module='Leads'}{/capture}
{$label|strip_semicolon}:
{else}
{counter name="fieldsHidden"}
{/if}
</td>
<td width='37.5%'  >
{if !$fields.trip9_c.hidden}
{counter name="panelFieldCount"}

{if !empty($fields.trip9_c.value) && ($fields.trip9_c.value != '^^')}
<input type="hidden" class="sugar_field" id="{$fields.trip9_c.name}" value="{$fields.trip9_c.value}">
{multienum_to_array string=$fields.trip9_c.value assign="vals"}
{foreach from=$vals item=item}
<li style="margin-left:10px;">{ $fields.trip9_c.options.$item }</li>
{/foreach}
{/if}
{/if}
</td>
{else}
<td>&nbsp;</td><td>&nbsp;</td>
{/if}
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
&nbsp;
</td>
<td width='37.5%'  >
</td>
</tr>
{/capture}
{if $fieldsUsed > 0 && $fieldsUsed != $fieldsHidden}
{$tableRow}
{/if}
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{counter name="fieldsHidden" start=0 print=false assign="fieldsHidden"}
{capture name="tr" assign="tableRow"}
<tr>
{if $fields.inv_groups.acl > 0}
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.inv_groups.hidden}
{capture name="label" assign="label"}{sugar_translate label='Client Trips' module='Leads'}{/capture}
{$label|strip_semicolon}:
{else}
{counter name="fieldsHidden"}
{/if}
</td>
<td width='37.5%'  >
{if !$fields.inv_groups.hidden}
{counter name="panelFieldCount"}

<span class="sugar_field" id="{$fields.inv_groups.name|escape:'html'|url2html|nl2br}">{$fields.inv_groups.value|escape:'htmlentitydecode'|escape:'html'|url2html|nl2br}</span>
{/if}
</td>
{else}
<td>&nbsp;</td><td>&nbsp;</td>
{/if}
{if $fields.tempanalyst_c.acl > 0}
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.tempanalyst_c.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_TEMPANALYST' module='Leads'}{/capture}
{$label|strip_semicolon}:
{else}
{counter name="fieldsHidden"}
{/if}
</td>
<td width='37.5%'  >
{if !$fields.tempanalyst_c.hidden}
{counter name="panelFieldCount"}


{if is_string($fields.tempanalyst_c.options)}
<input type="hidden" class="sugar_field" id="{$fields.tempanalyst_c.name}" value="{ $fields.tempanalyst_c.options }">
{ $fields.tempanalyst_c.options }
{else}
<input type="hidden" class="sugar_field" id="{$fields.tempanalyst_c.name}" value="{ $fields.tempanalyst_c.value }">
{ $fields.tempanalyst_c.options[$fields.tempanalyst_c.value]}
{/if}
{/if}
</td>
{else}
<td>&nbsp;</td><td>&nbsp;</td>
{/if}
</tr>
{/capture}
{if $fieldsUsed > 0 && $fieldsUsed != $fieldsHidden}
{$tableRow}
{/if}
</table>
</div>
{if $panelFieldCount == 0}
<script>document.getElementById("LBL_DETAILVIEW_PANEL2").style.display='none';</script>
{/if}
</div>
</div>
</div>

</form>
<script>SUGAR.util.doWhen("document.getElementById('form') != null",
function(){ldelim}SUGAR.util.buildAccessKeyLabels();{rdelim});
</script><script type='text/javascript' src='{sugar_getjspath file='include/javascript/popup_helper.js'}'></script>
<script type="text/javascript" src="{sugar_getjspath file='cache/include/javascript/sugar_grp_yui_widgets.js'}"></script>
<script type="text/javascript">
var Leads_detailview_tabs = new YAHOO.widget.TabView("Leads_detailview_tabs");
Leads_detailview_tabs.selectTab(0);
</script>
<script type="text/javascript">
SUGAR.util.doWhen("typeof collapsePanel == 'function'",
        function(){ldelim}
            var sugar_panel_collase = Get_Cookie("sugar_panel_collase");
            if(sugar_panel_collase != null) {ldelim}
                sugar_panel_collase = YAHOO.lang.JSON.parse(sugar_panel_collase);
                for(panel in sugar_panel_collase['Leads_d'])
                    if(sugar_panel_collase['Leads_d'][panel])
                        collapsePanel(panel);
                    else
                        expandPanel(panel);
            {rdelim}
        {rdelim});
</script>{literal}
<script type=text/javascript>
SUGAR.util.doWhen('!SUGAR.util.ajaxCallInProgress()', function(){
SUGAR.forms.AssignmentHandler.registerView('DetailView');
SUGAR.forms.AssignmentHandler.LINKS['DetailView'] = {"favorite_link":{"relationship":"leads_favorite"},"following_link":{"relationship":"leads_following"},"created_by_link":{"relationship":"leads_created_by","module":"Users","id_name":"created_by"},"modified_user_link":{"relationship":"leads_modified_user","module":"Users","id_name":"modified_user_id"},"activities":{"relationship":"lead_activities","module":"Activities"},"assigned_user_link":{"relationship":"leads_assigned_user","module":"Users","id_name":"assigned_user_id"},"email_addresses_primary":{"relationship":"leads_email_addresses_primary"},"email_addresses":{"relationship":"leads_email_addresses"},"reports_to_link":{"relationship":"lead_direct_reports"},"reportees":{"relationship":"lead_direct_reports"},"contacts":{"relationship":"contact_leads","module":"Contacts","id_name":"contact_id"},"accounts":{"relationship":"account_leads"},"contact":{"relationship":"contact_leads"},"opportunity":{"relationship":"opportunity_leads"},"campaign_leads":{"relationship":"campaign_leads","id_name":"campaign_id","module":"Campaigns"},"tasks":{"relationship":"lead_tasks"},"notes":{"relationship":"lead_notes"},"meetings":{"relationship":"meetings_leads"},"calls":{"relationship":"calls_leads"},"oldmeetings":{"relationship":"lead_meetings"},"oldcalls":{"relationship":"lead_calls"},"campaigns":{"relationship":"lead_campaign_log","module":"CampaignLog"},"prospect_lists":{"relationship":"prospect_list_leads","module":"ProspectLists"},"prospect":{"relationship":"lead_prospect","module":"Prospects"},"mr_consultant_leads":{"relationship":"mr_consultant_leads"},"cl_client_list_leads":{"relationship":"cl_client_list_leads","id_name":"cl_client_2c69nt_list_ida","module":"cl_Client_list"},"cl_client_list_leads_right":{"relationship":"cl_client_list_leads"},"mur_group_client_tasks_leads_1":{"relationship":"mur_group_client_tasks_leads_1","module":"mur_group_client_tasks"},"rt_sorting_leads":{"relationship":"rt_sorting_leads","module":"rt_sorting"}}
var suitable_test123_cDDDdep = new SUGAR.forms.Dependency(new SUGAR.forms.Trigger(['accept_status_name'], 'true'), [new SUGAR.forms.SetOptionsAction('suitable_test123_c','getListWhere($accept_status_name, enum(enum("Turtle_Miami_Feb_2016", enum("black_circle")),enum("Multitude_Cincinnati_Jan_2016", enum("Cart")),enum("Astranaut_New York_Jan_2016", enum("")),enum("Astranaut_San Francisco_Jan_2016", enum("")),enum("Portico_Luxembourg_Feb_2016", enum("")),enum("Premiere_London_Jan_2016", enum("")),enum("Quant_London_Jan_2016", enum("")),enum("Premiere_Netherlands_Feb_2016", enum("")),enum("Phoenix_Sweden_Switzerland_Jan_2016", enum(""))))', '"suitable"')],[],true,'DetailView');

YAHOO.util.Event.onContentReady('Leads_detailview_tabs', SUGAR.forms.AssignmentHandler.loadComplete);});</script>{/literal}
