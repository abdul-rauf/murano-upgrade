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


{literal}<SCRIPT>
if(typeof Forecast == 'undefined') { // since the dashlet can be included multiple times a page, don't redefine these functions
	Forecast = function() {
	    return {
	    
	    	/**
	    	 * Called when the forecast is committed
	    	 */	   	    
	        commit: function(theform, id, forecast_type, oppCount, weightValue, timeperiod_id, user_id) {
	        	ajaxStatus.showStatus('{/literal}{$saving}{literal}'); // show that AJAX call is happening
	        	// what data to post to the dashlet
				
	        	if (forecast_type == 'Direct')
	        	{
	        		best_case= (theform.direct_best_case.value!=""?theform.direct_best_case.value:0);
	        		likely_case = (theform.direct_likely_case.value!=""?theform.direct_likely_case.value:0);
	        		worst_case = (theform.direct_worst_case.value!=""?theform.direct_worst_case.value:0);
	        		
	        	}
	        	else if (forecast_type == 'Rollup')
	        	{
	        		best_case= (theform.rollup_best_case.value!=""?theform.rollup_best_case.value:0);
	        		likely_case = (theform.rollup_likely_case.value!=""?theform.rollup_likely_case.value:0);
	        		worst_case = (theform.rollup_worst_case.value!=""?theform.rollup_worst_case.value:0);
	        	}
				if (isNaN(parseInt(best_case)) || isNaN(best_case)) {
					window.alert("{/literal}{$MOD.ERR_FORECAST_AMOUNT}{literal}");
					return false;
				}
				if (isNaN(parseInt(likely_case)) || isNaN(likely_case)) {
					window.alert("{/literal}{$MOD.ERR_FORECAST_AMOUNT}{literal}");
					return false;
				}
				if (isNaN(parseInt(worst_case)) || isNaN(worst_case)) {
					window.alert("{/literal}{$MOD.ERR_FORECAST_AMOUNT}{literal}");
					return false;
				}
				
				
				//adjust the commit value if it has a fractional amount.
				if (parseFloat(best_case) != Math.floor(parseFloat(best_case))) {
					best_case = Math.round(parseFloat(best_case));
				}
				if (parseFloat(likely_case) != Math.floor(parseFloat(likely_case))) {
					likely_case = Math.round(parseFloat(likely_case));
				}
				if (parseFloat(worst_case) != Math.floor(parseFloat(worst_case))) {
					worst_case = Math.round(parseFloat(worst_case));
				}
				
				cnf_message="{/literal}{$MOD.LBL_COMMIT_MESSAGE}{literal}" + ' ' + best_case + ', '+ likely_case + ',' + worst_case + " ?";
			
				if (!confirm(cnf_message)) {
					return false;
				}
				
	        	
    	    	postData = 'to_pdf=1&module=Home&action=CallMethodDashlet&method=saveText&id=' + id + '&commit_forecast' + '=1' + 
    	    		'&forecast_type=' + forecast_type + '&best_case=' + best_case + '&likely_case=' +
    	    		likely_case + '&worst_case=' + worst_case + '&opp_count=' + oppCount + '&weight_value=' + weightValue +
    	    		'&timeperiod_id=' + timeperiod_id + '&user_id=' + user_id;
				var cObj = YAHOO.util.Connect.asyncRequest('POST','index.php', 
								  {success: Forecast.saved, failure: Forecast.saved}, postData);	        
	        },

	        updateTimeperiod: function(id, timeperiod_id) {
    	    	postData = 'to_pdf=1&module=Home&action=CallMethodDashlet&method=saveText&id=' + id + '&update_timeperiod' + '=1' + 
    	    		'&timeperiod_id=' + timeperiod_id;
				var cObj = YAHOO.util.Connect.asyncRequest('POST','index.php', 
								  {success: Forecast.saved, failure: Forecast.saved}, postData);	        
	        },
	        	    
	        showWorksheet: function(theform, forecast_type) {
				theform.action.value = 'index';	        
				theform.forecast_type.value = forecast_type;	
				theform.submit(theform);
	        },
	        
		    /**
	    	 * handle the response of the saveText method
	    	 */
	        saved: function(data) {
	        	eval(data.responseText);
	           	ajaxStatus.showStatus('{/literal}{$saved}{literal}');
	           	SUGAR.mySugar.retrieveDashlet(result['id']);
	           	window.setTimeout('ajaxStatus.hideStatus()', 2000);
	        }
	    };
	}();
}
</SCRIPT>{/literal}