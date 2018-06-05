<?php
$clientCache['ForecastManagerWorksheets']['base']['field'] = array (
  'commithistory' => 
  array (
    'controller' => 
    array (
      'base' => '/*
     * Your installation or use of this SugarCRM file is subject to the applicable
     * terms available at
     * http://support.sugarcrm.com/06_Customer_Center/10_Master_Subscription_Agreements/.
     * If you do not agree to all of the applicable terms or do not have the
     * authority to bind the entity as an authorized representative, then do not
     * install or use this SugarCRM file.
     *
     * Copyright (C) SugarCRM Inc. All rights reserved.
     */
({initialize:function(options){this._super(\'initialize\',[options]);this.on(\'render\',function(){this.loadData();},this);},loadData:function(){var ctx=this.context.parent||this.context,su=ctx.get(\'selectedUser\')||app.user.toJSON(),isManager=this.model.get(\'is_manager\'),showOpps=(su.id==this.model.get(\'user_id\'))?1:0,forecastType=app.utils.getForecastType(isManager,showOpps),args_filter=[],options={},url;args_filter.push({"user_id":this.model.get(\'user_id\')},{"forecast_type":forecastType},{"timeperiod_id":this.view.selectedTimeperiod});url={"url":app.api.buildURL(\'Forecasts\',\'filter\'),"filters":{"filter":args_filter}};options.success=_.bind(function(data){this.buildLog(data);},this);app.api.call(\'create\',url.url,url.filters,options,{context:this});},buildLog:function(data){data=data.records;var ctx=this.context.parent||this.context,forecastCommitDate=ctx.get(\'currentForecastCommitDate\'),commitDate=app.date(forecastCommitDate),newestModel=new Backbone.Model(_.first(data)),otherModels=_.last(data,data.length-1),oldestModel={},displayCommitDate=newestModel.get(\'date_modified\');for(var i=0;i<otherModels.length;i++){if(app.date(otherModels[i].date_modified)<=commitDate){oldestModel=new Backbone.Model(otherModels[i]);break;}}
var tpl=app.template.getField(this.type,\'log\',this.module);this.$el.html(tpl({commit:app.utils.createHistoryLog(oldestModel,newestModel).text,commit_date:displayCommitDate}));},_render:function(){this.$el=this.view.$(\'span[sfuuid="\'+this.sfId+\'"]\');this._super(\'_render\');}})',
    ),
    'templates' => 
    array (
      'list' => '
{{str "LBL_LOADING_COMMIT_HISTORY" "Forecasts"}}
',
      'log' => '
{{{commit}}}<br />
<span class="relativetime">
    {{str \'LBL_LAST_COMMIT\'}}{{relativeTime commit_date class=\'date\'}}
</span>
',
    ),
  ),
  'currency' => 
  array (
    'controller' => 
    array (
      'base' => '/*
     * Your installation or use of this SugarCRM file is subject to the applicable
     * terms available at
     * http://support.sugarcrm.com/06_Customer_Center/10_Master_Subscription_Agreements/.
     * If you do not agree to all of the applicable terms or do not have the
     * authority to bind the entity as an authorized representative, then do not
     * install or use this SugarCRM file.
     *
     * Copyright (C) SugarCRM Inc. All rights reserved.
     */
({extendsFrom:\'CurrencyField\',initialize:function(options){this.plugins=_.clone(this.plugins)||[];this.plugins.push(\'ClickToEdit\');this._super("initialize",[options]);}})',
    ),
    'templates' => 
    array (
      'edit' => '
<div class="controls">
    <span class="error-tooltip hide" rel="tooltip" data-container="body">
        <i class="icon-exclamation-sign"></i>
    </span>
</div>
<input type="text" value="{{value}}" class="input-small tright" maxlength="26">
<span sfuuid="{{currencySfId}}" class="hide"></span>
',
    ),
  ),
  'rowactions' => 
  array (
    'controller' => 
    array (
      'base' => '/*
     * Your installation or use of this SugarCRM file is subject to the applicable
     * terms available at
     * http://support.sugarcrm.com/06_Customer_Center/10_Master_Subscription_Agreements/.
     * If you do not agree to all of the applicable terms or do not have the
     * authority to bind the entity as an authorized representative, then do not
     * install or use this SugarCRM file.
     *
     * Copyright (C) SugarCRM Inc. All rights reserved.
     */
({extendsFrom:\'RowactionsField\',initialize:function(options){this._super("initialize",[options]);this.setPlaceholder=_.throttle(this.customSetPlaceholder,100);},getPlaceholder:function(){var placeholder=app.view.Field.prototype.getPlaceholder.call(this),$container=$(placeholder.toString()),$caret=$(\'<a class="btn dropdown-toggle" data-toggle="dropdown" href="javascript:void(0);"><i class="icon-caret-down"></i></a>\'),$dropdown=$(\'<ul class="dropdown-menu"></ul>\');if(this.def.primary){$caret.addClass(\'btn-primary\');}
_.each(this.def.buttons,function(fieldDef,index,list){var field=app.view.createField({def:fieldDef,view:this.view,viewName:this.options.viewName,model:this.model});this.fields.push(field);field.on(\'show hide\',this.setPlaceholder,this);field.parent=this;if(index==0){$container.append(field.getPlaceholder().toString());}else{if(index==1){$container.addClass(\'actions btn-group\');if(list.length>2){$container.append($caret).append($dropdown);}}
if(list.length>2){$dropdown.append(\'<li>\'+field.getPlaceholder().toString()+\'</li>\');}else{$container.append(field.getPlaceholder().toString());}}},this);return new Handlebars.SafeString($container.get(0).outerHTML);},customSetPlaceholder:function(){if(this.$el){var index=0;_.each(this.fields,function(field,idx,list){var fieldPlaceholder=this.$("span[sfuuid=\'"+field.sfId+"\']");if(field.isHidden){fieldPlaceholder.toggleClass(\'hide\',true);this.$el.append(fieldPlaceholder);}else{fieldPlaceholder.toggleClass(\'hide\',false);if(index==0||list.length==2){field.getFieldElement().addClass("btn");if(this.def.primary){field.getFieldElement().addClass("btn-primary");}
if(index==0){this.$el.prepend(fieldPlaceholder);}else{this.$el.append(fieldPlaceholder);}}else{field.getFieldElement().removeClass("btn btn-primary");this.$(".dropdown-menu").append($(\'<li>\').html(fieldPlaceholder));}
index++;}},this);if(index<=1){this.$(".dropdown-toggle").hide();this.$el.removeClass(\'btn-group\');}else{this.$(".dropdown-toggle").show();this.$el.addClass(\'btn-group\');}
this.$(".dropdown-menu").children("li").each(function(index,el){if($(el).html()===\'\'){$(el).remove();}});}}})',
    ),
  ),
  'userLink' => 
  array (
    'templates' => 
    array (
      'list' => '
<div class="ellipsis_inline" data-placement="right"
     title="{{#unless value}}{{#if def.placeholder}}{{str def.placeholder this.model.module}}{{/if}}{{/unless}}{{value}}">
    <a href="javascript:void(0)" class="worksheetManagerLink" data-uid="{{uid}}">{{{value}}}</a>
</div>
',
    ),
    'controller' => 
    array (
      'base' => '/*
     * Your installation or use of this SugarCRM file is subject to the applicable
     * terms available at
     * http://support.sugarcrm.com/06_Customer_Center/10_Master_Subscription_Agreements/.
     * If you do not agree to all of the applicable terms or do not have the
     * authority to bind the entity as an authorized representative, then do not
     * install or use this SugarCRM file.
     *
     * Copyright (C) SugarCRM Inc. All rights reserved.
     */
({events:{\'click a.worksheetManagerLink\':\'linkClicked\'},plugins:[\'EllipsisInline\'],uid:\'\',initialize:function(options){this.uid=this.model.get(\'user_id\');app.view.Field.prototype.initialize.call(this,options);return this;},format:function(value){var su=this.context.get(\'selectedUser\')||this.context.parent.get(\'selectedUser\')||app.user.toJSON();if(value==su.full_name&&su.id==app.user.get(\'id\')){var hb=Handlebars.compile("{{str key module context}}");value=hb({\'key\':\'LBL_MY_MANAGER_LINE\',\'module\':this.module,\'context\':su});}
return value;},linkClicked:function(event){var uid=$(event.target).data(\'uid\');var selectedUser={id:\'\',user_name:\'\',full_name:\'\',first_name:\'\',last_name:\'\',is_manager:false,showOpps:false,reportees:[]};var options={dataType:\'json\',success:_.bind(function(data){selectedUser.id=data.id;selectedUser.user_name=data.user_name;selectedUser.full_name=data.full_name;selectedUser.first_name=data.first_name;selectedUser.last_name=data.last_name;selectedUser.is_manager=data.is_manager;selectedUser.reports_to_id=data.reports_to_id;selectedUser.reports_to_name=data.reports_to_name;selectedUser.is_top_level_manager=data.is_top_level_manager||(data.is_manager&&_.isEmpty(data.reports_to_id));var su=this.context.get(\'selectedUser\')||this.context.parent.get(\'selectedUser\')||app.user.toJSON();selectedUser.showOpps=(su.id==data.id);this.context.parent.trigger("forecasts:user:changed",selectedUser,this.context.parent);},this)};myURL=app.api.buildURL(\'Forecasts\',\'user/\'+uid);app.api.call(\'read\',myURL,null,options);}})',
    ),
  ),
  '_hash' => '7c87834396b7cf135f4cd4df10aecb22',
);

