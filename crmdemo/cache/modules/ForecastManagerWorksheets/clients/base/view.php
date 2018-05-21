<?php
$clientCache['ForecastManagerWorksheets']['base']['view'] = array (
  'dupecheck-list' => 
  array (
    'meta' => 
    array (
      'css_class' => 'forecast-manager-worksheet',
      'panels' => 
      array (
        0 => 
        array (
          'label' => 'LBL_PANEL_1',
          'fields' => 
          array (
            0 => 
            array (
              'name' => 'name',
              'type' => 'userLink',
              'label' => 'LBL_NAME',
              'link' => true,
              'route' => 
              array (
                'recordID' => 'user_id',
              ),
              'sortable' => true,
              'default' => true,
              'enabled' => true,
              'related_fields' => 
              array (
                0 => 'user_id',
                1 => 'is_manager',
                2 => 'show_history_log',
                3 => 'draft',
                4 => 'pipeline_opp_count',
                5 => 'pipeline_amount',
                6 => 'closed_amount',
                7 => 'opp_count',
                8 => 'timeperiod_id',
              ),
            ),
            1 => 
            array (
              'name' => 'quota',
              'type' => 'currency',
              'label' => 'LBL_QUOTA_ADJUSTED',
              'sortable' => true,
              'default' => true,
              'enabled' => true,
              'convertToBase' => true,
              'related_fields' => 
              array (
                0 => 'base_rate',
                1 => 'currency_id',
              ),
              'align' => 'right',
              'click_to_edit' => true,
            ),
            2 => 
            array (
              'name' => 'worst_case',
              'type' => 'currency',
              'label' => 'LBL_WORST',
              'sortable' => true,
              'default' => true,
              'enabled' => true,
              'convertToBase' => true,
              'related_fields' => 
              array (
                0 => 'base_rate',
                1 => 'currency_id',
              ),
              'align' => 'right',
            ),
            3 => 
            array (
              'name' => 'worst_case_adjusted',
              'type' => 'currency',
              'label' => 'LBL_WORST_ADJUSTED',
              'sortable' => true,
              'default' => true,
              'enabled' => true,
              'convertToBase' => true,
              'related_fields' => 
              array (
                0 => 'base_rate',
                1 => 'currency_id',
              ),
              'align' => 'right',
              'click_to_edit' => true,
            ),
            4 => 
            array (
              'name' => 'likely_case',
              'type' => 'currency',
              'label' => 'LBL_LIKELY',
              'sortable' => true,
              'default' => false,
              'enabled' => true,
              'convertToBase' => true,
              'related_fields' => 
              array (
                0 => 'base_rate',
                1 => 'currency_id',
              ),
              'align' => 'right',
            ),
            5 => 
            array (
              'name' => 'likely_case_adjusted',
              'type' => 'currency',
              'label' => 'LBL_LIKELY_ADJUSTED',
              'sortable' => true,
              'default' => false,
              'enabled' => true,
              'convertToBase' => true,
              'related_fields' => 
              array (
                0 => 'base_rate',
                1 => 'currency_id',
              ),
              'align' => 'right',
              'click_to_edit' => true,
            ),
            6 => 
            array (
              'name' => 'best_case',
              'type' => 'currency',
              'label' => 'LBL_BEST',
              'sortable' => true,
              'default' => false,
              'enabled' => true,
              'convertToBase' => true,
              'related_fields' => 
              array (
                0 => 'base_rate',
                1 => 'currency_id',
              ),
              'align' => 'right',
            ),
            7 => 
            array (
              'name' => 'best_case_adjusted',
              'type' => 'currency',
              'label' => 'LBL_BEST_ADJUSTED',
              'sortable' => true,
              'default' => false,
              'enabled' => true,
              'convertToBase' => true,
              'related_fields' => 
              array (
                0 => 'base_rate',
                1 => 'currency_id',
              ),
              'align' => 'right',
              'click_to_edit' => true,
            ),
          ),
        ),
      ),
    ),
  ),
  'flex-list' => 
  array (
    'templates' => 
    array (
      'flex-list' => '
{{#each meta.panels}}
<div class="flex-list-view-content">
<table class="table table-striped dataTable{{#has "ReorderableColumns" ../plugins}} reorderable-columns{{/has}}">
    <thead>
    <tr>
        {{#each ../leftColumns}}
        <th{{#if name}} data-fieldname="{{name}}"{{/if}}>
            <span>
                {{field ../../this template="list-header"}}
            </span>
        </th>
        {{/each}}
        {{#each ../_fields.visible}}
            <th class="{{#isSortable ../../module this}}sorting{{#eq ../../../orderBy.field name}}_{{../../../../orderBy.direction}}{{/eq}} orderBy{{name}}{{/isSortable}}"
                {{#if name}} data-fieldname="{{name}}"{{/if}} data-orderby="{{orderBy}}">
                {{#has "ReorderableColumns" ../../plugins}}
                {{! Insert a <div> around all the inner element of the column.
                    This is a fix for firefox because the <th> does not support
                    a relative positioning.}}
                <div>
                    <div class="th-droppable-placeholder" data-droppableindex="{{@index}}"></div>
                    {{! Insert a <div> around the <span> containing the field label.
                        That <div> is the draggable element.
                        This is a fix for firefox because dragging a <th> is not
                        supported.}}
                    <div{{#has "ReorderableColumns" ../../../plugins}} data-draggable="true"{{/has}}>
                {{/has}}
                        <span>
                            {{str label ../../module}}
                        </span>
                {{#has "ReorderableColumns" ../../plugins}}
                    </div>
                    {{#if @last}}
                        <div class="th-droppable-placeholder th-droppable-placeholder-last" data-droppableindex="{{../../../../_fields.visible.length}}"></div>
                    {{/if}}
                </div>
                {{/has}}
            </th>
        {{/each}}
        {{#each ../rightColumns}}
            {{#if isColumnDropdown}}
            <th class="nosort morecol">
                <div class="dropdown">
                    <button class="btn btn-invisible" data-toggle="dropdown" rel="tooltip" title="{{str "LBL_COLUMNS"}}" data-placement="bottom" data-action="fields-toggle" track="click:morecol"><i class="icon-ellipsis-horizontal"></i></button>
                    <ul class="dropdown-menu left">
                    {{#each ../../../_fields.all}}
                        <li>
                            <button{{#if selected}} class="active"{{/if}} data-field-toggle="{{name}}" track="click:{{name}}">
                                {{#if selected}}<i class="icon icon-ok"></i> {{/if}}{{str label ../../../../module}}
                            </button>
                        </li>
                    {{/each}}
                    </ul>
                </div>
            </th>
            {{else}}
            <th{{#if name}} data-fieldname="{{name}}"{{/if}}>
                <span>
                    {{field ../../this template="list-header"}}
                </span>
            </th>
            {{/if}}
        {{/each}}
    </tr>
    <tr class="alert alert-warning hide">
        <td class="container"{{#if ../this.colSpan}} colspan="{{../../this.colSpan}}"{{/if}}></td>
    </tr>
    </thead>
    <tbody>
    {{#each ../collection.models}}
    <tr name="{{module}}_{{attributes.id}}" class="single">
        {{#each ../../leftColumns}}
        <td>
             {{field ../../../this model=../this template=../../../this.viewName}}
        </td>
        {{/each}}
        {{#each ../../_fields.visible}}
            <td{{#if this.align}} class="{{this.align}}{{#if click_to_edit}} editableColumn{{/if}}" {{/if}}{{#if this.maxWidth}} style="max-width:{{this.maxWidth}}"{{/if}} data-type="{{type}}">
              {{field ../../../this model=../this template=../../../this.viewName}}
            </td>
        {{/each}}
        {{#each ../../rightColumns}}
        <td>
             {{field ../../../this model=../this template=../../../this.viewName}}
        </td>
        {{/each}}
    </tr>
    {{/each}}
    </tbody>
</table>
<span class="scrollbar-landmark"></span>
</div>
<div class="uxs-scroll-bar" data-scroll-spy="flex-list-view-content"><div>&nbsp;</div></div>
{{/each}}
',
    ),
  ),
  'list' => 
  array (
    'meta' => 
    array (
      'css_class' => 'forecast-manager-worksheet',
      'panels' => 
      array (
        0 => 
        array (
          'label' => 'LBL_PANEL_1',
          'fields' => 
          array (
            0 => 
            array (
              'name' => 'name',
              'type' => 'userLink',
              'label' => 'LBL_NAME',
              'link' => true,
              'route' => 
              array (
                'recordID' => 'user_id',
              ),
              'sortable' => true,
              'default' => true,
              'enabled' => true,
              'related_fields' => 
              array (
                0 => 'user_id',
                1 => 'is_manager',
                2 => 'show_history_log',
                3 => 'draft',
                4 => 'pipeline_opp_count',
                5 => 'pipeline_amount',
                6 => 'closed_amount',
                7 => 'opp_count',
                8 => 'timeperiod_id',
              ),
            ),
            1 => 
            array (
              'name' => 'quota',
              'type' => 'currency',
              'label' => 'LBL_QUOTA_ADJUSTED',
              'sortable' => true,
              'default' => true,
              'enabled' => true,
              'convertToBase' => true,
              'skip_preferred_conversion' => true,
              'related_fields' => 
              array (
                0 => 'base_rate',
                1 => 'currency_id',
              ),
              'align' => 'right',
              'click_to_edit' => true,
            ),
            2 => 
            array (
              'name' => 'worst_case',
              'type' => 'currency',
              'label' => 'LBL_WORST',
              'sortable' => true,
              'default' => true,
              'enabled' => true,
              'convertToBase' => true,
              'skip_preferred_conversion' => true,
              'related_fields' => 
              array (
                0 => 'base_rate',
                1 => 'currency_id',
              ),
              'align' => 'right',
            ),
            3 => 
            array (
              'name' => 'worst_case_adjusted',
              'type' => 'currency',
              'label' => 'LBL_WORST_ADJUSTED',
              'sortable' => true,
              'default' => true,
              'enabled' => true,
              'convertToBase' => true,
              'skip_preferred_conversion' => true,
              'related_fields' => 
              array (
                0 => 'base_rate',
                1 => 'currency_id',
              ),
              'align' => 'right',
              'click_to_edit' => true,
            ),
            4 => 
            array (
              'name' => 'likely_case',
              'type' => 'currency',
              'label' => 'LBL_LIKELY',
              'sortable' => true,
              'default' => true,
              'enabled' => true,
              'convertToBase' => true,
              'skip_preferred_conversion' => true,
              'related_fields' => 
              array (
                0 => 'base_rate',
                1 => 'currency_id',
              ),
              'align' => 'right',
            ),
            5 => 
            array (
              'name' => 'likely_case_adjusted',
              'type' => 'currency',
              'label' => 'LBL_LIKELY_ADJUSTED',
              'sortable' => true,
              'default' => true,
              'enabled' => true,
              'convertToBase' => true,
              'skip_preferred_conversion' => true,
              'related_fields' => 
              array (
                0 => 'base_rate',
                1 => 'currency_id',
              ),
              'align' => 'right',
              'click_to_edit' => true,
            ),
            6 => 
            array (
              'name' => 'best_case',
              'type' => 'currency',
              'label' => 'LBL_BEST',
              'sortable' => true,
              'default' => true,
              'enabled' => true,
              'convertToBase' => true,
              'skip_preferred_conversion' => true,
              'related_fields' => 
              array (
                0 => 'base_rate',
                1 => 'currency_id',
              ),
              'align' => 'right',
            ),
            7 => 
            array (
              'name' => 'best_case_adjusted',
              'type' => 'currency',
              'label' => 'LBL_BEST_ADJUSTED',
              'sortable' => true,
              'default' => true,
              'enabled' => true,
              'convertToBase' => true,
              'skip_preferred_conversion' => true,
              'related_fields' => 
              array (
                0 => 'base_rate',
                1 => 'currency_id',
              ),
              'align' => 'right',
              'click_to_edit' => true,
            ),
          ),
        ),
      ),
    ),
  ),
  'recordlist' => 
  array (
    'templates' => 
    array (
      'commithistory' => '
<tr name="{{module}}_{{id}}_commit_history">
    <td colspan="{{colspan}}">{{placeholder}}</td>
</tr>
',
      'totals' => '

<tfoot>
<tr>
    {{#each this.leftColumns}}
        <td>&nbsp;</td>
    {{/each}}
    {{#if this.totals.name_display}}
    <td>{{str "LBL_TOTAL" "Forecasts"}}</td>
    {{/if}}
    {{#if this.totals.quota_display}}
    <td class="tright">
        {{#eq this.totals.display_total_label_in "quota"}}<div class="pull-left">{{str "LBL_TOTAL" "Forecasts"}}</div>{{/eq}}
        {{formatCurrency this.totals.quota}}
    </td>
    {{/if}}
    {{#if this.totals.worst_case_display}}
        <td class="tright">
        {{#eq this.totals.display_total_label_in "worst_case"}}<div class="pull-left">{{str "LBL_TOTAL" "Forecasts"}}</div>{{/eq}}
        {{formatCurrency this.totals.worst_case}}</td>
    {{/if}}
    {{#if this.totals.worst_case_adjusted_display}}
        <td class="tright">
        {{#eq this.totals.display_total_label_in "worst_case_adjusted"}}<div class="pull-left">{{str "LBL_TOTAL" "Forecasts"}}</div>{{/eq}}
        {{formatCurrency this.totals.worst_adjusted}}</td>
    {{/if}}
    {{#if this.totals.likely_case_display}}
        <td class="tright">
            {{#eq this.totals.display_total_label_in "likely_case"}}<div class="pull-left">{{str "LBL_TOTAL" "Forecasts"}}</div>{{/eq}}
            {{formatCurrency this.totals.likely_case}}
        </td>
    {{/if}}
    {{#if this.totals.likely_case_adjusted_display}}
        <td class="tright">
        {{#eq this.totals.display_total_label_in "likely_case_adjusted"}}<div class="pull-left">{{str "LBL_TOTAL" "Forecasts"}}</div>{{/eq}}
        {{formatCurrency this.totals.likely_adjusted}}</td>
    {{/if}}
    {{#if this.totals.best_case_display}}
        <td class="tright">
        {{#eq this.totals.display_total_label_in "best_case"}}<div class="pull-left">{{str "LBL_TOTAL" "Forecasts"}}</div>{{/eq}}
        {{formatCurrency this.totals.best_case}}</td>
    {{/if}}
    {{#if this.totals.best_case_adjusted_display}}
        <td class="tright">
        {{#eq this.totals.display_total_label_in "best_case_adjusted"}}<div class="pull-left">{{str "LBL_TOTAL" "Forecasts"}}</div>{{/eq}}
        {{formatCurrency this.totals.best_adjusted}}</td>
    {{/if}}
    {{#each this.rightColumns}}
    <td>&nbsp;</td>
    {{/each}}
</tr>
</tfoot>
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
({extendsFrom:\'RecordlistView\',worksheetType:\'manager\',selectedUser:{},canEdit:true,selectedTimeperiod:{},totals:{},defaultValues:{id:\'\',quota:\'0\',best_case:\'0\',best_case_adjusted:\'0\',likely_case:\'0\',likely_case_adjusted:\'0\',worst_case:\'0\',worst_case_adjusted:\'0\',show_history_log:0},navigationMessage:\'\',routeNavigationMessage:\'\',displayNavigationMessage:false,hasCheckedForDraftRecords:false,draftSaveType:undefined,isCollectionSyncing:false,isLoadingCommits:false,targetURL:\'\',currentURL:\'\',initialize:function(options){this.plugins=_.without(this.plugins,\'ReorderableColumns\');this.plugins.push(\'CteTabbing\');this.plugins.push(\'DirtyCollection\');this._super("initialize",[options]);this.template=app.template.getView(\'flex-list\',this.module);this.selectedUser=this.context.get(\'selectedUser\')||this.context.parent.get(\'selectedUser\')||app.user.toJSON();this.selectedTimeperiod=this.context.get(\'selectedTimePeriod\')||this.context.parent.get(\'selectedTimePeriod\')||\'\';this.context.set(\'skipFetch\',(this.selectedUser.is_manager&&this.selectedUser.showOpps));this.collection.sync=_.bind(this.sync,this);this.currentURL=Backbone.history.getFragment();},_dispose:function(){if(!_.isUndefined(this.context.parent)&&!_.isNull(this.context.parent)){this.context.parent.off(null,null,this);if(this.context.parent.has(\'collection\')){this.context.parent.get(\'collection\').off(null,null,this);}}
app.routing.offBefore(\'route\',this.beforeRouteHandler,this);$(window).off("beforeunload."+this.worksheetType);this._super("_dispose");},bindDataChange:function(){if(!_.isUndefined(this.context.parent)&&!_.isUndefined(this.context.parent.get(\'model\'))){if(this.context.parent.get(\'model\').module==\'Forecasts\'){this.context.parent.on(\'button:export_button:click\',function(){if(this.layout.isVisible()){this.exportCallback();}},this);this.before(\'render\',function(){return this.beforeRenderCallback();},true);this.on(\'render\',function(){this.renderCallback();},this);this.on(\'list:toggle:column\',function(column,isVisible,columnMeta){this.calculateTotals();},this);this.context.parent.on(\'button:save_draft_button:click\',function(){if(this.layout.isVisible()){this.context.parent.once(\'forecasts:worksheet:saved\',function(){this.setNavigationMessage(false,\'\',\'\');this.context.parent.trigger(\'forecasts:worksheet:needs_commit\',this.worksheetType);},this);this.draftSaveType=\'draft\';this.saveWorksheet(true);}},this);this.context.parent.on(\'button:commit_button:click\',function(){if(this.layout.isVisible()){this.context.parent.once(\'forecasts:worksheet:saved\',function(){this.context.parent.trigger(\'forecasts:worksheet:commit\',this.selectedUser,this.worksheetType,this.getCommitTotals())},this);this.draftSaveType=\'commit\';this.saveWorksheet(false);}},this);this.dirtyModels.on("add change reset",function(){if(this.layout.isVisible()){this.context.parent.trigger("forecasts:worksheet:dirty",this.worksheetType,this.dirtyModels.length>0);}},this);this.context.parent.on(\'change:selectedTimePeriod\',function(model,changed){this.updateSelectedTimeperiod(changed);},this);this.context.parent.on(\'forecasts:worksheet:totals\',function(totals,type){if(type==this.worksheetType){var tpl=app.template.getView(\'recordlist.totals\',this.module);this.$el.find(\'tfoot\').remove();this.$el.find(\'tbody\').after(tpl(this));}},this);this.context.parent.on(\'change:selectedUser\',function(model,changed){this.updateSelectedUser(changed);},this);this.context.parent.on(\'change:currentForecastCommitDate\',function(context,changed){if(this.layout.isVisible()){this.checkForDraftRows(changed);}},this);if(this.context.parent.has(\'collection\')){var parentCollection=this.context.parent.get(\'collection\');parentCollection.on(\'data:sync:start\',function(){this.isLoadingCommits=true;},this);parentCollection.on(\'data:sync:complete\',function(){this.isLoadingCommits=false;},this);}
this.collection.on(\'data:sync:start\',function(){this.isCollectionSyncing=true;},this);this.collection.on(\'data:sync:complete\',function(){this.isCollectionSyncing=false;},this);this.collection.on(\'reset\',function(){var ctx=this.context.parent||this.context;ctx.trigger(\'forecasts:worksheet:is_dirty\',this.worksheetType,false);if(this.isLoadingCommits===false){this.checkForDraftRows(ctx.get(\'currentForecastCommitDate\'));}},this);this.collection.on(\'change:quota\',function(model,changed){var ctx=this.context.parent||this.context;ctx.trigger(\'forecasts:worksheet:quota_changed\',this.worksheetType);},this);this.context.parent.on(\'forecasts:worksheet:committed\',function(){if(this.layout.isVisible()){var ctx=this.context.parent||this.context;ctx.trigger(\'forecasts:worksheet:is_dirty\',this.worksheetType,false);this.refreshData();this.hasCheckedForDraftRecords=true;}},this);this.context.parent.on(\'forecasts:worksheet:is_dirty\',function(worksheetType,is_dirty){if(this.worksheetType==worksheetType){if(is_dirty){this.setNavigationMessage(true,\'LBL_WARN_UNSAVED_CHANGES\',\'LBL_WARN_UNSAVED_CHANGES\');}else{this.cleanUpDirtyModels();this.setNavigationMessage(false,\'\',\'\');}}},this);this.context.parent.on(\'button:assign_quota:click\',function(){this.context.parent.once(\'forecasts:worksheet:saved\',function(){this.setNavigationMessage(false,\'\',\'\');this.context.parent.trigger(\'forecasts:assign_quota\',this.worksheetType,this.selectedUser,this.selectedTimeperiod);},this);app.alert.show(\'saving_quota\',{level:\'process\',title:app.lang.get(\'LBL_ASSIGNING_QUOTA\',\'Forecasts\')});this.draftSaveType=\'assign_quota\';this.saveWorksheet(true,true);},this);this.context.parent.on(\'forecasts:quota_assigned\',function(){this.refreshData();},this);app.routing.before(\'route\',this.beforeRouteHandler,{},this);$(window).bind("beforeunload."+this.worksheetType,_.bind(function(){if(!this.disposed){var ret=this.showNavigationMessage(\'window\');if(_.isString(ret)){return ret;}}},this));}}
if(!_.isUndefined(this.dirtyModels)){this.dirtyModels.on(\'add\',function(){var ctx=this.context.parent||this.context;ctx.trigger(\'forecasts:worksheet:is_dirty\',this.worksheetType,true);},this);}
this.context.on(\'list:history_log:fire\',function(model,e){var row_name=model.module+\'_\'+model.id;var log_row=this.$el.find(\'tr[name="\'+row_name+\'_commit_history"]\');var field;if(log_row.length==1){log_row.remove();field=_.find(this.fields,function(field,idx){return(field.name==row_name+\'_commit_history\');},this);field.dispose();}else{var rowTpl=app.template.getView(\'recordlist.commithistory\',this.module);field=app.view.createField({def:{\'type\':\'commithistory\',\'name\':row_name+\'_commit_history\'},view:this,model:model});this.$el.find(\'tr[name="\'+row_name+\'"]\').after(rowTpl({module:this.module,id:model.id,placeholder:field.getPlaceholder(),colspan:this._fields.visible.length+this.leftColumns.length+this.rightColumns.length}));field.render();}},this);this.before(\'list:orderby\',function(options){if(this.isDirty()){app.alert.show(\'leave_confirmation\',{level:\'confirmation\',messages:app.lang.get(\'LBL_WARN_UNSAVED_CHANGES_CONFIRM_SORT\',\'Forecasts\'),onConfirm:_.bind(function(){this._setOrderBy(options);},this)});return false;}
return true;},undefined,this);this.collection.on(\'reset change\',function(){this.calculateTotals();},this);this.layout.on(\'hide\',function(){this.totals={};},this);this._super("bindDataChange");},beforeRouteHandler:function(){return this.showNavigationMessage(\'router\');},defaultNavCallback:function(){this.displayNavigationMessage=false;app.router.navigate(this.targetURL,{trigger:true});},showNavigationMessage:function(type,callback){if(!_.isFunction(callback)){callback=this.defaultNavCallback;}
if(this.layout.isVisible()){var canEdit=this.dirtyCanEdit||this.canEdit;if(canEdit&&this.displayNavigationMessage){if(type==\'window\'){if(!_.isEmpty(this.routeNavigationMessage)){return app.lang.get(this.routeNavigationMessage,\'Forecasts\');}
return false;}
this.targetURL=Backbone.history.getFragment();app.router.navigate(this._currentUrl,{trigger:false,replace:true});app.alert.show(\'leave_confirmation\',{level:\'confirmation\',messages:app.lang.get(this.navigationMessage,\'Forecasts\').split(\'<br>\'),onConfirm:_.bind(function(){callback.call(this);},this)});return false;}}
return true;},setNavigationMessage:function(display,reload_label,route_label){this.displayNavigationMessage=display;this.navigationMessage=reload_label;this.routeNavigationMessage=route_label;this.context.parent.trigger("forecasts:worksheet:navigationMessage",this.navigationMessage);},refreshData:function(){this.displayLoadingMessage();this.collection.fetch();},displayLoadingMessage:function(){app.alert.show(\'workshet_loading\',{level:\'process\',title:app.lang.getAppString(\'LBL_LOADING\')});this.collection.once(\'reset\',function(){app.alert.dismiss(\'workshet_loading\');},this);},exportCallback:function(){if(this.canEdit&&this.isDirty()){app.alert.show(\'leave_confirmation\',{level:\'confirmation\',messages:app.lang.get(\'LBL_WORKSHEET_EXPORT_CONFIRM\',\'Forecasts\'),onConfirm:_.bind(function(){this.doExport();},this)});}else{this.doExport();}},doExport:function(){app.alert.show(\'massexport_loading\',{level:\'process\',title:app.lang.getAppString(\'LBL_LOADING\')});var params={timeperiod_id:this.selectedTimeperiod,user_id:this.selectedUser.id,platform:app.config.platform};var url=app.api.buildURL(this.module,\'export/\',null,params);app.api.fileDownload(url,{complete:function(data){app.alert.dismiss(\'massexport_loading\');}},{iframe:this.$el});},beforeRenderCallback:function(){var ret=true;if(_.isUndefined(this.selectedUser.is_manager)||this.selectedUser.is_manager==false){ret=false;}
if(ret){ret=!(this.selectedUser.showOpps);}
if(ret===false&&this.layout.isVisible()){this.layout.hide();}
var quotaLabel=_.isEmpty(this.selectedUser.reports_to_id)?\'LBL_QUOTA\':\'LBL_QUOTA_ADJUSTED\';_.each(this._fields,function(fields){_.each(fields,function(field){if(field.name==\'quota\'){field.label=quotaLabel;}});});this.leftColumns=[];return ret;},renderCallback:function(){var user=this.selectedUser||this.context.parent.get(\'selectedUser\')||app.user.toJSON();if(user.is_manager&&user.showOpps==false){if(!this.layout.isVisible()){this.layout.once(\'show\',this.calculateTotals,this);this.layout.show();}
if(!_.isEmpty(this.totals)&&this.layout.isVisible()){var tpl=app.template.getView(\'recordlist.totals\',this.module);this.$el.find(\'tfoot\').remove();this.$el.find(\'tbody\').after(tpl(this));}
this.setCommitLogButtonStates();var outerwidth=this.$el.find(\'span.isEditable\').outerWidth();}else{if(this.layout.isVisible()){this.layout.hide();}}},updateSelectedTimeperiod:function(changed){if(this.displayNavigationMessage){this.dirtyTimeperiod=this.selectedTimeperiod;}
this.selectedTimeperiod=changed;if(this.layout.isVisible()){this.refreshData();}},updateSelectedUser:function(changed){var doFetch=false;if(this.selectedUser.id!=changed.id){doFetch=true;}
if(!doFetch&&this.selectedUser.is_manager!=changed.is_manager){doFetch=true;}
if(!doFetch&&this.selectedUser.showOpps!=changed.showOpps){doFetch=!(changed.showOpps);}
if(this.displayNavigationMessage){this.dirtyUser=this.selectedUser;this.dirtyCanEdit=this.canEdit;}
this.selectedUser=changed;this.canEdit=(this.selectedUser.id==app.user.get(\'id\'));this.cleanUpDirtyModels();if(doFetch){this.refreshData();}else{if(this.selectedUser.is_manager&&this.selectedUser.showOpps&&this.layout.isVisible()){this.layout.hide();}}},checkForDraftRows:function(lastCommitDate){var isVisible=this.layout.isVisible();if(isVisible&&this.canEdit&&!_.isUndefined(lastCommitDate)&&this.collection.length!==0&&this.hasCheckedForDraftRecords===false&&this.isCollectionSyncing===false){this.hasCheckedForDraftRecords=true;this.collection.find(function(item){if(item.get(\'date_modified\')>lastCommitDate){this.context.parent.trigger(\'forecasts:worksheet:needs_commit\',this.worksheetType);return true;}
return false;},this);}else if(isVisible&&this.canEdit&&_.isUndefined(lastCommitDate)&&!this.collection.isEmpty){this.context.parent.trigger(\'forecasts:worksheet:needs_commit\',this.worksheetType);}else if(isVisible===false&&this.canEdit&&this.hasCheckedForDraftRecords===false){this.layout.once(\'show\',function(){this.checkForDraftRows(lastCommitDate);},this);}else if(this.isCollectionSyncing===true){this.collection.once(\'data:sync:complete\',function(){this.checkForDraftRows(lastCommitDate);},this);}},setCommitLogButtonStates:function(){_.each(this.fields,function(field){if(field.def.event===\'list:history_log:fire\'){field.setDisabled((field.model.get(\'show_history_log\')=="0"));if((field.model.get(\'show_history_log\')=="0")){field.$el.find("a.rowaction").attr("data-original-title",app.lang.get("LBL_NO_COMMIT","ForecastManagerWorksheets"));}}});},sync:function(method,model,options){if(!_.isUndefined(this.context.parent)&&!_.isUndefined(this.context.parent.get(\'selectedUser\'))){var sl=this.context.parent.get(\'selectedUser\');if(sl.is_manager==false){if(this.layout.isVisible()){this.layout.hide();}
return;}}
var callbacks,url;options=options||{};options.params=options.params||{};if(!_.isUndefined(this.selectedUser.id)){options.params.user_id=this.selectedUser.id;}
if(!_.isEmpty(this.selectedTimeperiod)){options.params.timeperiod_id=this.selectedTimeperiod;}
options.limit=1000;options=app.data.parseOptionsForSync(method,model,options);options.success=_.bind(function(model,data,options){this.collectionSuccess(data);},this);callbacks=app.data.getSyncCallbacks(method,model,options);this.collection.trigger("data:sync:start",method,model,options);url=app.api.buildURL("ForecastManagerWorksheets",null,null,options.params);app.api.call("read",url,null,callbacks);},collectionSuccess:function(data){var records=[],users=$.map(this.selectedUser.reportees,function(obj){return $.extend(true,{},obj);});users.unshift({id:this.selectedUser.id,name:this.selectedUser.full_name});var currency_id=app.currency.getBaseCurrencyId(),currency_base_rate=app.metadata.getCurrency(app.currency.getBaseCurrencyId()).conversion_rate;_.each(users,function(user){var row=_.find(data,function(rec){return(rec.user_id==this.id)},user);if(!_.isUndefined(row)){row.name=user.name;}else{row=_.clone(this.defaultValues);row.currency_id=currency_id;row.base_rate=currency_base_rate;row.user_id=user.id;row.assigned_user_id=this.selectedUser.id;row.draft=(this.selectedUser.id==app.user.id)?1:0;row.name=user.name;}
records.push(row);},this);if(!_.isUndefined(this.orderBy)){if(this.orderBy.field!==\'name\'){records=_.sortBy(records,function(item){var val=+item[this.orderBy.field];if(this.orderBy.direction=="desc"){return-val;}else{return val;}},this);}else{records.sort(_.bind(function(a,b){if(this.orderBy.direction==\'asc\'){if(a.name.toString()<b.name.toString())return 1;if(a.name.toString()>b.name.toString())return-1;}else{if(a.name.toString()<b.name.toString())return-1;if(a.name.toString()>b.name.toString())return 1;}
return 0;},this));}}
this.collection.isEmpty=(_.isEmpty(data));this.collection.reset(records);},calculateTotals:function(){if(this.layout.isVisible()){this.totals=this.getCommitTotals();this.totals[\'display_total_label_in\']=_.first(this._fields.visible).name;_.each(this._fields.visible,function(field){this.totals[field.name+\'_display\']=true;},this);var ctx=this.context.parent||this.context;ctx.trigger(\'forecasts:worksheet:totals\',this.totals,this.worksheetType);}},getCommitTotals:function(){var quota=0,best_case=0,best_case_adjusted=0,likely_case=0,likely_case_adjusted=0,worst_case_adjusted=0,worst_case=0,included_opp_count=0,pipeline_opp_count=0,pipeline_amount=0,closed_amount=0;this.collection.forEach(function(model){var base_rate=parseFloat(model.get(\'base_rate\')),mPipeline_opp_count=model.get("pipeline_opp_count"),mPipeline_amount=model.get("pipeline_amount"),mClosed_amount=model.get("closed_amount"),mOpp_count=model.get("opp_count");quota=app.math.add(app.currency.convertWithRate(model.get(\'quota\'),base_rate),quota);best_case=app.math.add(app.currency.convertWithRate(model.get(\'best_case\'),base_rate),best_case);best_case_adjusted=app.math.add(app.currency.convertWithRate(model.get(\'best_case_adjusted\'),base_rate),best_case_adjusted);likely_case=app.math.add(app.currency.convertWithRate(model.get(\'likely_case\'),base_rate),likely_case);likely_case_adjusted=app.math.add(app.currency.convertWithRate(model.get(\'likely_case_adjusted\'),base_rate),likely_case_adjusted);worst_case=app.math.add(app.currency.convertWithRate(model.get(\'worst_case\'),base_rate),worst_case);worst_case_adjusted=app.math.add(app.currency.convertWithRate(model.get(\'worst_case_adjusted\'),base_rate),worst_case_adjusted);included_opp_count+=(_.isUndefined(mOpp_count))?0:parseInt(mOpp_count);pipeline_opp_count+=(_.isUndefined(mPipeline_opp_count))?0:parseInt(mPipeline_opp_count);if(!_.isUndefined(mPipeline_amount)){pipeline_amount=app.math.add(pipeline_amount,mPipeline_amount);}
if(!_.isUndefined(mClosed_amount)){closed_amount=app.math.add(closed_amount,mClosed_amount);}});return{\'quota\':quota,\'best_case\':best_case,\'best_adjusted\':best_case_adjusted,\'likely_case\':likely_case,\'likely_adjusted\':likely_case_adjusted,\'worst_case\':worst_case,\'worst_adjusted\':worst_case_adjusted,\'included_opp_count\':included_opp_count,\'pipeline_opp_count\':pipeline_opp_count,\'pipeline_amount\':pipeline_amount,\'closed_amount\':closed_amount,\'closed_count\':(included_opp_count-pipeline_opp_count)};},parseFields:function(){var catalog=this._super("parseFields");_.each(catalog,function(group,i){if(_.isArray(group)){catalog[i]=_.filter(group,function(fieldMeta){return app.utils.getColumnVisFromKeyMap(fieldMeta.name,\'forecastsWorksheetManager\');});}else{_.each(group,function(fieldMeta){if(!app.utils.getColumnVisFromKeyMap(fieldMeta.name,\'forecastsWorksheetManager\')){delete group[fieldMeta.name];}});}});return catalog;},saveWorksheet:function(isDraft,suppressMessage){var saveObj={totalToSave:0,saveCount:0,model:undefined,isDraft:isDraft,suppressMessage:suppressMessage||false,timeperiod:this.dirtyTimeperiod,userId:this.dirtyUser},ctx=this.context.parent||this.context;if(this.layout.isVisible()){if(_.isUndefined(saveObj.userId)){saveObj.userId=this.selectedUser;}
saveObj.userId=saveObj.userId.id;if(this.isDirty()){saveObj.totalToSave=this.dirtyModels.length;this.dirtyModels.each(function(model){saveObj.model=model;this._worksheetSaveHelper(saveObj,ctx);},this);this.cleanUpDirtyModels();}else{if(isDraft&&saveObj.suppressMessage===false){app.alert.show(\'success\',{level:\'success\',autoClose:true,title:app.lang.get("LBL_FORECASTS_WIZARD_SUCCESS_TITLE","Forecasts")+":",messages:[app.lang.get("LBL_FORECASTS_WORKSHEET_SAVE_DRAFT_SUCCESS","Forecasts")]});}
ctx.trigger(\'forecasts:worksheet:saved\',saveObj.totalToSave,this.worksheetType,isDraft);}}
this.draftSaveType=undefined;return saveObj.totalToSave},_worksheetSaveHelper:function(saveObj,ctx){saveObj.model.set({id:saveObj.model.get(\'id\')||null,current_user:saveObj.userId||this.selectedUser.id,timeperiod_id:saveObj.timeperiod||this.selectedTimeperiod,draft_save_type:this.draftSaveType},{silent:true});saveObj.model.save({},{success:_.bind(function(){saveObj.saveCount++;if(saveObj.totalToSave===saveObj.saveCount){if(saveObj.isDraft&&saveObj.suppressMessage===false){app.alert.show(\'success\',{level:\'success\',autoClose:true,title:app.lang.get("LBL_FORECASTS_WIZARD_SUCCESS_TITLE","Forecasts")+":",messages:[app.lang.get("LBL_FORECASTS_WORKSHEET_SAVE_DRAFT_SUCCESS","Forecasts")]});}
ctx.trigger(\'forecasts:worksheet:saved\',saveObj.totalToSave,this.worksheetType,saveObj.isDraft);}},this),silent:true,alerts:{\'success\':false}});}})',
    ),
    'meta' => 
    array (
      'css_class' => 'forecast-manager-worksheet',
      'favorite' => false,
      'selection' => 
      array (
      ),
      'rowactions' => 
      array (
        'actions' => 
        array (
          0 => 
          array (
            'type' => 'rowaction',
            'css_class' => 'btn',
            'tooltip' => 'LBL_HISTORY_LOG',
            'event' => 'list:history_log:fire',
            'icon' => 'icon-exclamation-sign',
            'acl_action' => 'view',
          ),
        ),
      ),
    ),
  ),
  'resolve-conflicts-list' => 
  array (
    'meta' => 
    array (
      'css_class' => 'forecast-manager-worksheet',
      'panels' => 
      array (
        0 => 
        array (
          'label' => 'LBL_PANEL_1',
          'fields' => 
          array (
            0 => 
            array (
              'name' => 'name',
              'type' => 'userLink',
              'label' => 'LBL_NAME',
              'link' => true,
              'route' => 
              array (
                'recordID' => 'user_id',
              ),
              'sortable' => true,
              'default' => true,
              'enabled' => true,
              'related_fields' => 
              array (
                0 => 'user_id',
                1 => 'is_manager',
                2 => 'show_history_log',
                3 => 'draft',
                4 => 'pipeline_opp_count',
                5 => 'pipeline_amount',
                6 => 'closed_amount',
                7 => 'opp_count',
                8 => 'timeperiod_id',
              ),
            ),
            1 => 
            array (
              'name' => 'quota',
              'type' => 'currency',
              'label' => 'LBL_QUOTA_ADJUSTED',
              'sortable' => true,
              'default' => true,
              'enabled' => true,
              'convertToBase' => true,
              'related_fields' => 
              array (
                0 => 'base_rate',
                1 => 'currency_id',
              ),
              'align' => 'right',
              'click_to_edit' => true,
            ),
            2 => 
            array (
              'name' => 'worst_case',
              'type' => 'currency',
              'label' => 'LBL_WORST',
              'sortable' => true,
              'default' => true,
              'enabled' => true,
              'convertToBase' => true,
              'related_fields' => 
              array (
                0 => 'base_rate',
                1 => 'currency_id',
              ),
              'align' => 'right',
            ),
            3 => 
            array (
              'name' => 'worst_case_adjusted',
              'type' => 'currency',
              'label' => 'LBL_WORST_ADJUSTED',
              'sortable' => true,
              'default' => true,
              'enabled' => true,
              'convertToBase' => true,
              'related_fields' => 
              array (
                0 => 'base_rate',
                1 => 'currency_id',
              ),
              'align' => 'right',
              'click_to_edit' => true,
            ),
            4 => 
            array (
              'name' => 'likely_case',
              'type' => 'currency',
              'label' => 'LBL_LIKELY',
              'sortable' => true,
              'default' => false,
              'enabled' => true,
              'convertToBase' => true,
              'related_fields' => 
              array (
                0 => 'base_rate',
                1 => 'currency_id',
              ),
              'align' => 'right',
            ),
            5 => 
            array (
              'name' => 'likely_case_adjusted',
              'type' => 'currency',
              'label' => 'LBL_LIKELY_ADJUSTED',
              'sortable' => true,
              'default' => false,
              'enabled' => true,
              'convertToBase' => true,
              'related_fields' => 
              array (
                0 => 'base_rate',
                1 => 'currency_id',
              ),
              'align' => 'right',
              'click_to_edit' => true,
            ),
            6 => 
            array (
              'name' => 'best_case',
              'type' => 'currency',
              'label' => 'LBL_BEST',
              'sortable' => true,
              'default' => false,
              'enabled' => true,
              'convertToBase' => true,
              'related_fields' => 
              array (
                0 => 'base_rate',
                1 => 'currency_id',
              ),
              'align' => 'right',
            ),
            7 => 
            array (
              'name' => 'best_case_adjusted',
              'type' => 'currency',
              'label' => 'LBL_BEST_ADJUSTED',
              'sortable' => true,
              'default' => false,
              'enabled' => true,
              'convertToBase' => true,
              'related_fields' => 
              array (
                0 => 'base_rate',
                1 => 'currency_id',
              ),
              'align' => 'right',
              'click_to_edit' => true,
            ),
          ),
        ),
      ),
    ),
  ),
  'selection-list' => 
  array (
    'meta' => 
    array (
      'css_class' => 'forecast-manager-worksheet',
      'panels' => 
      array (
        0 => 
        array (
          'label' => 'LBL_PANEL_1',
          'fields' => 
          array (
            0 => 
            array (
              'name' => 'name',
              'type' => 'userLink',
              'label' => 'LBL_NAME',
              'link' => true,
              'route' => 
              array (
                'recordID' => 'user_id',
              ),
              'sortable' => true,
              'default' => true,
              'enabled' => true,
              'related_fields' => 
              array (
                0 => 'user_id',
                1 => 'is_manager',
                2 => 'show_history_log',
                3 => 'draft',
                4 => 'pipeline_opp_count',
                5 => 'pipeline_amount',
                6 => 'closed_amount',
                7 => 'opp_count',
                8 => 'timeperiod_id',
              ),
            ),
            1 => 
            array (
              'name' => 'quota',
              'type' => 'currency',
              'label' => 'LBL_QUOTA_ADJUSTED',
              'sortable' => true,
              'default' => true,
              'enabled' => true,
              'convertToBase' => true,
              'related_fields' => 
              array (
                0 => 'base_rate',
                1 => 'currency_id',
              ),
              'align' => 'right',
              'click_to_edit' => true,
            ),
            2 => 
            array (
              'name' => 'worst_case',
              'type' => 'currency',
              'label' => 'LBL_WORST',
              'sortable' => true,
              'default' => true,
              'enabled' => true,
              'convertToBase' => true,
              'related_fields' => 
              array (
                0 => 'base_rate',
                1 => 'currency_id',
              ),
              'align' => 'right',
            ),
            3 => 
            array (
              'name' => 'worst_case_adjusted',
              'type' => 'currency',
              'label' => 'LBL_WORST_ADJUSTED',
              'sortable' => true,
              'default' => true,
              'enabled' => true,
              'convertToBase' => true,
              'related_fields' => 
              array (
                0 => 'base_rate',
                1 => 'currency_id',
              ),
              'align' => 'right',
              'click_to_edit' => true,
            ),
            4 => 
            array (
              'name' => 'likely_case',
              'type' => 'currency',
              'label' => 'LBL_LIKELY',
              'sortable' => true,
              'default' => false,
              'enabled' => true,
              'convertToBase' => true,
              'related_fields' => 
              array (
                0 => 'base_rate',
                1 => 'currency_id',
              ),
              'align' => 'right',
            ),
            5 => 
            array (
              'name' => 'likely_case_adjusted',
              'type' => 'currency',
              'label' => 'LBL_LIKELY_ADJUSTED',
              'sortable' => true,
              'default' => false,
              'enabled' => true,
              'convertToBase' => true,
              'related_fields' => 
              array (
                0 => 'base_rate',
                1 => 'currency_id',
              ),
              'align' => 'right',
              'click_to_edit' => true,
            ),
            6 => 
            array (
              'name' => 'best_case',
              'type' => 'currency',
              'label' => 'LBL_BEST',
              'sortable' => true,
              'default' => false,
              'enabled' => true,
              'convertToBase' => true,
              'related_fields' => 
              array (
                0 => 'base_rate',
                1 => 'currency_id',
              ),
              'align' => 'right',
            ),
            7 => 
            array (
              'name' => 'best_case_adjusted',
              'type' => 'currency',
              'label' => 'LBL_BEST_ADJUSTED',
              'sortable' => true,
              'default' => false,
              'enabled' => true,
              'convertToBase' => true,
              'related_fields' => 
              array (
                0 => 'base_rate',
                1 => 'currency_id',
              ),
              'align' => 'right',
              'click_to_edit' => true,
            ),
          ),
        ),
      ),
    ),
  ),
  'massupdate' => 
  array (
    'meta' => 
    array (
      'buttons' => 
      array (
        0 => 
        array (
          'type' => 'button',
          'value' => 'cancel',
          'css_class' => 'btn-link btn-invisible cancel_button',
          'label' => 'LBL_CANCEL_BUTTON_LABEL',
          'primary' => false,
        ),
        1 => 
        array (
          'name' => 'update_button',
          'type' => 'button',
          'label' => 'LBL_UPDATE',
          'acl_action' => 'massupdate',
          'css_class' => 'btn-primary',
          'primary' => true,
        ),
      ),
      'panels' => 
      array (
        0 => 
        array (
          'fields' => 
          array (
          ),
        ),
      ),
    ),
  ),
  'record' => 
  array (
    'meta' => 
    array (
      'panels' => 
      array (
        0 => 
        array (
          'name' => 'panel_header',
          'label' => 'LBL_RECORD_HEADER',
          'header' => true,
          'fields' => 
          array (
            0 => 
            array (
              'name' => 'picture',
              'type' => 'avatar',
              'width' => 42,
              'height' => 42,
              'dismiss_label' => true,
              'readonly' => true,
            ),
            1 => 'name',
            2 => 
            array (
              'name' => 'favorite',
              'label' => 'LBL_FAVORITE',
              'type' => 'favorite',
              'readonly' => true,
              'dismiss_label' => true,
            ),
            3 => 
            array (
              'name' => 'follow',
              'label' => 'LBL_FOLLOW',
              'type' => 'follow',
              'readonly' => true,
              'dismiss_label' => true,
            ),
          ),
        ),
        1 => 
        array (
          'name' => 'panel_body',
          'label' => 'LBL_RECORD_BODY',
          'columns' => 2,
          'labelsOnTop' => true,
          'placeholders' => true,
          'fields' => 
          array (
            0 => 'assigned_user_name',
            1 => 'team_name',
          ),
        ),
        2 => 
        array (
          'name' => 'panel_hidden',
          'label' => 'LBL_SHOW_MORE',
          'hide' => true,
          'columns' => 2,
          'labelsOnTop' => true,
          'placeholders' => true,
          'fields' => 
          array (
            0 => 
            array (
              'name' => 'description',
              'span' => 12,
            ),
            1 => 
            array (
              'name' => 'date_modified_by',
              'readonly' => true,
              'type' => 'fieldset',
              'label' => 'LBL_DATE_MODIFIED',
              'fields' => 
              array (
                0 => 
                array (
                  'name' => 'date_modified',
                ),
                1 => 
                array (
                  'type' => 'label',
                  'default_value' => 'LBL_BY',
                ),
                2 => 
                array (
                  'name' => 'modified_by_name',
                ),
              ),
            ),
            2 => 
            array (
              'name' => 'date_entered_by',
              'readonly' => true,
              'type' => 'fieldset',
              'label' => 'LBL_DATE_ENTERED',
              'fields' => 
              array (
                0 => 
                array (
                  'name' => 'date_entered',
                ),
                1 => 
                array (
                  'type' => 'label',
                  'default_value' => 'LBL_BY',
                ),
                2 => 
                array (
                  'name' => 'created_by_name',
                ),
              ),
            ),
          ),
        ),
      ),
    ),
  ),
  'subpanel-list' => 
  array (
    'meta' => 
    array (
      'panels' => 
      array (
        0 => 
        array (
          'name' => 'panel_header',
          'label' => 'LBL_PANEL_1',
          'fields' => 
          array (
            0 => 
            array (
              'label' => 'LBL_NAME',
              'enabled' => true,
              'default' => true,
              'name' => 'name',
              'link' => true,
            ),
            1 => 
            array (
              'label' => 'LBL_DATE_MODIFIED',
              'enabled' => true,
              'default' => true,
              'name' => 'date_modified',
            ),
          ),
        ),
      ),
      'orderBy' => 
      array (
        'field' => 'date_modified',
        'direction' => 'desc',
      ),
    ),
  ),
  '_hash' => 'eddc6f8972300074ec27db9524ee2d44',
);

