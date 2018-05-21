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


var rtl = rtl == "undefined" ? false : rtl;
var modals=new Array();
modals[0] = {
	target: "#moduleTab_AllHome", 
	title: SUGAR.language.get('Home', 'LBL_TOUR_HOME'),
	content: SUGAR.language.get('Home', 'LBL_TOUR_HOME_DESCRIPTION'),
	placement: "bottom"
};
modals[1] = {
	target: "#moduleTab_AllAccounts", 
	title: SUGAR.language.get('Home', 'LBL_TOUR_MODULES'),
	content: SUGAR.language.get('Home', 'LBL_TOUR_MODULES_DESCRIPTION'),
	placement: "bottom"
};
modals[2] = {
	target: "#moduleTabExtraMenuAll", 
	title: SUGAR.language.get('Home', 'LBL_TOUR_MORE'),
	content: SUGAR.language.get('Home', 'LBL_TOUR_MORE_DESCRIPTION'),
	placement: "bottom"
};
modals[3] = {
	target: "#dcmenuSearchDiv", 
	title: SUGAR.language.get('Home', 'LBL_TOUR_SEARCH'),
	content: SUGAR.language.get('Home', 'LBL_TOUR_SEARCH_DESCRIPTION'),
	placement: "bottom"
};
modals[4] = {
	target: $("#dcmenuSugarCube").length == 0 ? "#dcmenuSugarCubeEmpty" : "#dcmenuSugarCube",
	title: SUGAR.language.get('Home', 'LBL_TOUR_NOTIFICATIONS'),
	content: SUGAR.language.get('Home', 'LBL_TOUR_NOTIFICATIONS_DESCRIPTION'),
	placement: "bottom"
};
modals[5] = {
	target: "#globalLinksModule", 
	title: SUGAR.language.get('Home', 'LBL_TOUR_PROFILE'),
	content: SUGAR.language.get('Home', 'LBL_TOUR_PROFILE_DESCRIPTION'),
	placement: "bottom"
};
modals[6] = {
	target: "#quickCreate",
	title: SUGAR.language.get('Home', 'LBL_TOUR_QUICKCREATE'),
	content: SUGAR.language.get('Home', 'LBL_TOUR_QUICKCREATE_DESCRIPTION'),
	placement: "bottom right",
    leftOffset: rtl ? -40 : 40,
    topOffset: -10
};
modals[7] = {
	target: "#arrow",
	title: SUGAR.language.get('Home', 'LBL_TOUR_FOOTER'),
	content: SUGAR.language.get('Home', 'LBL_TOUR_FOOTER_DESCRIPTION'),
	placement: "top right",
    leftOffset: rtl ? -90 : 80,
    topOffset: -40
};
modals[8] = {
	target: "#integrations", 
	title: SUGAR.language.get('Home', 'LBL_TOUR_CUSTOM'),
	content: SUGAR.language.get('Home', 'LBL_TOUR_CUSTOM_DESCRIPTION'),
	placement: "top",
    leftOffset: rtl ? 30 : -30
};
modals[9] = {
	target: "#logo", 
	title: SUGAR.language.get('Home', 'LBL_TOUR_BRAND'),
	content: SUGAR.language.get('Home', 'LBL_TOUR_BRAND_DESCRIPTION'),
	placement: "top"
};



$(document).ready(function() {
	SUGAR.tour.init({
		id: 'tour',
		modals: modals,
		modalUrl: "index.php?module=Home&action=tour&to_pdf=1",
		prefUrl: "index.php?module=Users&action=UpdateTourStatus&to_pdf=true&viewed=true",
        className: 'whatsnew',
		onTourFinish: function() {
				$('#bootstrapJs').remove();
				$('#popoverext').remove();
				$('#bounce').remove();
				$('#bootstrapCss').remove();
				$('#tourCss').remove();
				$('#tourJs').remove();
				$('#whatsNewsJs').remove();
			}
		});	
});
	