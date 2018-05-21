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
(function(app){app.events.on("app:init",function(){app.plugins.register('DisableMassDelete',["view"],{onAttach:function(component,plugin){this.once('init',function(){this.layout.off('list:massdelete:fire',this.warnDelete,this);this.layout.on('list:massdelete:fire',this._warnDelete,this);},this);},_warnDelete:function(){var closedModels=[],sales_stage_won=null,sales_stage_lost=null,closed_RLI_count=0,message=null,status=null,massUpdateModel=this.getMassUpdateModel(this.module),progressView=this.getProgressView();sales_stage_won=app.metadata.getModule("Forecasts","config").sales_stage_won;sales_stage_lost=app.metadata.getModule("Forecasts","config").sales_stage_lost;closedModels=_.filter(massUpdateModel.models,function(model){status=null;if(_.isEmpty(status)){status=model.get("sales_stage");}
if(_.contains(sales_stage_won,status)||_.contains(sales_stage_lost,status)){message=app.lang.getAppString("WARNING_NO_DELETE_SELECTED");return true;}
if(closed_RLI_count>0){message=app.lang.get("WARNING_NO_DELETE_CLOSED_SELECTED","Opportunities");return true;}
return false;});if(closedModels.length>0){var massCollection=this.context.get('mass_collection');massCollection.remove(closedModels);_.each(closedModels,function(item){var id=item.module+"_"+item.id;$("[name='"+id+"'] input").attr("checked",false);});app.alert.show('delete_warning',{level:'warning',messages:message});progressView.dispose();this.layout.removeComponent(progressView);}else if(massUpdateModel.models.length>0){this.warnDelete();}
return message;}});});})(SUGAR.App);