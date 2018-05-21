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
({extendsFrom:'DnbView',duns_num:null,events:{'click .showMoreData':'showMoreData','click .showLessData':'showLessData'},initialize:function(options){this._super('initialize',[options]);if(this.layout.collapse){this.layout.collapse(true);}
this.layout.on('dashlet:collapse',this.loadFinancials,this);app.events.on('dnbcompinfo:duns_selected',this.collapseDashlet,this);this.layout.layout.context.on('dashboard:collapse:fire',this.loadFinancials,this);},loadData:function(options){if(this.model.get('duns_num')){this.duns_num=this.model.get('duns_num');}},financialDD:{'marketAnalysis':{'json_path':'ThirdPartyAssessment.ThirdPartyAssessment.0.ThirdPartyInformation.OtherInformation','label':'LBL_DNB_REC_MARK_ANALYSIS'},'finStmt':{'json_path':'Financial.KeyFinancialFiguresOverview','label':'LBL_DNB_FIN_STMT','sub_array':{'finStmtDate':'StatementHeaderDetails.FinancialStatementToDate.$','salesRevenue':'SalesRevenueAmount.0.$','salesUnits':'SalesRevenueAmount.0.@UnitOfSize'}},'stckSym':{'json_path':'OrganizationDetail.ControlOwnershipTypeText.$','label':'LBL_DNB_FIN_COMP_TYPE','sub_array':{'stckDet':'RegisteredDetail.StockExchangeDetails'}}},finConst:{'mktAnalysisPath':'OrderProductResponse.OrderProductResponseDetail.Product.Organization.ThirdPartyAssessment.ThirdPartyAssessment.0.ThirdPartyInformation.OtherInformation','finStmtPath':'OrderProductResponse.OrderProductResponseDetail.Product.Organization.Financial.KeyFinancialFiguresOverview','stckSymPath':'OrderProductResponse.OrderProductResponseDetail.Product.Organization.RegisteredDetail.StockExchangeDetails','ownTypePath':'OrderProductResponse.OrderProductResponseDetail.Product.Organization.OrganizationDetail.ControlOwnershipTypeText.$'},refreshClicked:function(){this.loadFinancials(false);},loadFinancials:function(isCollapsed){if(!isCollapsed){if(this.duns_num){this.getCompanyFinancials(this.duns_num);}else if(!_.isUndefined(app.controller.context.get('dnb_temp_duns_num'))){this.getCompanyFinancials(app.controller.context.get('dnb_temp_duns_num'));}else{this.template=app.template.get(this.name+'.dnb-no-duns');if(!this.disposed){this.render();}}}},getCompanyFinancials:function(duns_num){var self=this;self.template=app.template.get(self.name);if(!self.disposed){self.render();self.$('#dnb-financials-loading').show();self.$('#dnb-financials-details').hide();}
var cacheKey='dnb:financial:'+duns_num;if(app.cache.get(cacheKey)){self.renderFinancialDetails.call(self,app.cache.get(cacheKey));}else{var dnbFinancialsURL=app.api.buildURL('connector/dnb/financial/'+duns_num,'',{},{});var resultData={'product':null,'errmsg':null};app.api.call('READ',dnbFinancialsURL,{},{success:function(data){var responseCode=self.getJsonNode(data,self.appendSVCPaths.responseCode),responseMsg=self.getJsonNode(data,self.appendSVCPaths.responseMsg);if(responseCode&&responseCode===self.responseCodes.success){if(self.isDataExists(data)){resultData.product=data;}else{resultData.errmsg=app.lang.get('LBL_DNB_NO_DATA');}
app.cache.set(cacheKey,resultData);}else{resultData.errmsg=responseMsg||app.lang.get('LBL_DNB_SVC_ERR');}
self.renderFinancialDetails.call(self,resultData);},error:_.bind(self.checkAndProcessError,self)});}},isDataExists:function(financialDetails){if(!this.checkJsonNode(financialDetails,this.finConst.mktAnalysisPath)&&!this.checkJsonNode(financialDetails,this.finConst.annlIncPath)&&!this.checkJsonNode(financialDetails,this.finConst.stckSymPath)){return false;}else{return true;}},renderFinancialDetails:function(financialDetails){if(this.disposed){return;}
var formattedFinancials,dnbFin={};if(financialDetails.product){formattedFinancials=this.formatFinancials(financialDetails.product,this.financialDD);dnbFin.product=formattedFinancials;}
if(financialDetails.errmsg){dnbFin.errmsg=financialDetails.errmsg;}
this.dnbFin=dnbFin;this.render();this.$('#dnb-financials-loading').hide();this.$('#dnb-financials-details').show();this.$('.showLessData').hide();},formatFinancials:function(dnbApiResponse,financialDD){var frmtFinancials={};var marketAnalysis=this.getJsonNode(dnbApiResponse,this.finConst.mktAnalysisPath),finStmt=this.getJsonNode(dnbApiResponse,this.finConst.finStmtPath),stckSym=this.getJsonNode(dnbApiResponse,this.finConst.stckSymPath);if(marketAnalysis){frmtFinancials.marketAnalysis=marketAnalysis;}
if(finStmt){frmtFinStmtList=[];_.each(finStmt,function(finStmtObj){var frmtFinStmt=null;_.each(financialDD.finStmt.sub_array,function(value,key){var dataElement=this.getJsonNode(finStmtObj,value);if(dataElement){if(_.isNull(frmtFinStmt)){frmtFinStmt={};}
if(key==='salesRevenue'){dataElement=this.formatSalesRevenue(dataElement);}
frmtFinStmt[key]=dataElement;}},this);if(!_.isNull(frmtFinStmt)){frmtFinStmtList.push(frmtFinStmt);}},this);if(frmtFinStmtList.length>0){frmtFinancials.finStmt=frmtFinStmtList;}}
var ownerType=this.getJsonNode(dnbApiResponse,this.finConst.ownTypePath),frmtStckSymL={};if(ownerType){frmtStckSymL.ownerType=ownerType;}
if(stckSym){frmtStckSymL.stckSymList=stckSym;}
if(frmtStckSymL.ownerType||frmtStckSymL.stckSymList){frmtFinancials.stckSym=frmtStckSymL;}
return frmtFinancials;}})