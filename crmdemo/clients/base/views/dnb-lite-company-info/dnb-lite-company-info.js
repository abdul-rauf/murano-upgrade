/*
     * Your installation or use of this SugarCRM file is subject to the applicable
     * terms available at
     * http://support.sugarcrm.com/06_Customer_Center/10_Master_Subscription_Agreements/.
     * If you do not agree to all of the applicable terms or do not have the
     * authority to bind the entity as an authorized representative, then do not
     * install or use this SugarCRM file.
     *
     * Copyright (C) SugarCRM Inc. All rights reserved.
     */
({extendsFrom:'DnbView',duns_num:null,filteredDD:null,events:{'click .showMoreData':'showMoreData','click .showLessData':'showLessData'},initDashlet:function(){this._super('initDashlet');this.baseFilterData();},initialize:function(options){this._super('initialize',[options]);if(this.disposed){return;}
if(this.layout.collapse){this.layout.collapse(true);}
this.layout.on('dashlet:collapse',this.loadCompanyInfo,this);app.events.on('dnbcompinfo:duns_selected',this.collapseDashlet,this);this.layout.layout.context.on('dashboard:collapse:fire',this.loadCompanyInfo,this);},loadData:function(options){if(this.model.get('duns_num')){this.duns_num=this.model.get('duns_num');}
this.baseFilterData();},refreshClicked:function(){this.loadCompanyInfo(false);},loadCompanyInfo:function(isCollapsed){if(!isCollapsed){if(this.duns_num){this.getDNBLiteCompanyDetails(this.duns_num);}else if(!_.isUndefined(app.controller.context.get('dnb_temp_duns_num'))){this.getDNBLiteCompanyDetails(app.controller.context.get('dnb_temp_duns_num'));}else{this.template=app.template.get(this.name+'.dnb-no-duns');if(!this.disposed){this.render();}}}},getDNBLiteCompanyDetails:function(duns_num){if(this.disposed){return;}
this.dnbFirmo={};this.template=app.template.get('dnb.dnb-comp-info');this.dnbFirmo.loading_label=app.lang.get('LBL_DNB_LITE_COMPANY_INFO_LOADING');this.render();this.$('div#dnb-compinfo-loading').show();this.$('div#dnb-compinfo-details').hide();this.baseCompanyInformation(duns_num,this.compInfoProdCD.lite,null,this.renderCompanyInformation);}})