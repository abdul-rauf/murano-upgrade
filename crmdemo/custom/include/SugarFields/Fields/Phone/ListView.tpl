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

{capture name=getPhone assign=phone}{sugar_fetch object=$parentFieldArray key=$col}{/capture}
{sugar_UC2C value=$phone}
