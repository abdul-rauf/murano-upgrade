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
(function(app){app.events.on("app:init",function(){app.plugins.register('DisableDelete',["field"],{onAttach:function(component,plugin){this.on("render",this.removeDelete,this);},removeDelete:function(){var sales_stage_won=null,sales_stage_lost=null,closed_RLI_count=0,message=null,status=null,button=null;if(_.contains(["list:deleterow:fire","button:delete_button:click"],this.def.event)){sales_stage_won=app.metadata.getModule("Forecasts","config").sales_stage_won;sales_stage_lost=app.metadata.getModule("Forecasts","config").sales_stage_lost;if(_.isEmpty(status)){status=this.model.get("sales_stage");}
if(closed_RLI_count>0){message=app.lang.get("NOTICE_NO_DELETE_CLOSED_RLIS","Opportunities");}
if(_.contains(sales_stage_won,status)||_.contains(sales_stage_lost,status)){message=app.lang.getAppString("NOTICE_NO_DELETE_CLOSED");}
if(!_.isEmpty(message)){button=this.getFieldElement();button.addClass("disabled");button.attr("data-event","");button.tooltip({title:message});}}
return message;}})})})(SUGAR.App);