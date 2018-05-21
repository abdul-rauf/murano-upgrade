<?php
$clientCache['Home']['base']['view'] = array (
  'module-menu' => 
  array (
    'templates' => 
    array (
      'module-menu' => '
{{#if meta.short}}
    <a class="cube module-list-link" href="#{{buildRoute module=module}}" data-route="#{{buildRoute module=module}}" track="click:cube"><img src="{{buildUrl url=\'custom/themes/default/images/clogo.png\'}}" alt="{{str \'LBL_SUGAR_CUBE_ALT\' module}}"></a>
{{else}}
    <a class="cube btn btn-invisible btn-link" href="#{{buildRoute module=module}}" data-route="#{{buildRoute module=module}}" track="click:cube"><img src="{{buildUrl url=\'custom/themes/default/images/clogo.png\'}}" alt="{{str \'LBL_SUGAR_CUBE_ALT\' module}}"></a>
    {{#if actions}}
        <button type="button" title="{{str \'LBL_LINK_MORE\' module}}" data-toggle="dropdown" class="btn btn-invisible dropdown-toggle" track="click:cube-dropdown"><i class="icon-caret-down"></i></button>
        <div class="dropdown-menu scroll">
            <ul role="menu">
                {{#each actions}}
                    <li><a class="ellipsis_inline" tabindex="-1"
                           data-navbar-menu-item="{{label}}"
                        {{#if event}}
                           href="javascript:void(0);"
                           data-event="{{event}}"
                           track="click:{{event}}"
                        {{else}}
                           href="{{route}}"
                           data-route="{{route}}"
                           track="click:{{route}}"
                        {{/if}}>{{#if icon}}<i class="{{icon}}"></i>{{/if}}{{str label ../module}}</a>
                    </li>
                {{/each}}
                <li class="divider" data-container="dashboards"></li>
                {{#if ../dashboardBwcLink}}
                    <li class="divider" data-container="legacy-dashboards"></li>
                    <li><a class="ellipsis_inline" tabindex="-1" data-route="#{{../dashboardBwcLink}}" href="#{{../dashboardBwcLink}}"><i class="icon-time"></i>{{str \'LBL_DASHBOARD_BWC\' module}}</a></li>
                {{/if}}
                <li class="divider" data-container="recently-viewed"></li>
            </ul>
        </div>
    {{/if}}
{{/if}}',
      'dashboards' => '
{{#each collection.models}}
    <li{{#eq id ../active.id}} class="active"{{/eq}}><a class="ellipsis_inline" tabindex="-1" href="#{{buildRoute model=this}}" data-route="#{{buildRoute model=this}}"><i class="icon-dashboard"></i>{{getFieldValue this \'name\'}}</a></li>
{{/each}}
',
      'recently-viewed' => '
{{#each collection.models}}
    <li><a class="ellipsis_inline" tabindex="-1"
           href="#{{buildRoute model=this}}"
           data-route="#{{buildRoute model=this}}"><i
            class="icon-time active"></i>{{!FIXME this should be improved by SC-2622}}{{#if attributes.name}}{{fieldValue this "name"}}{{else}}{{str "LBL_MODULE_NAME_SINGULAR" attributes._module}}{{/if}}
    </a></li>
{{/each}}
{{#if showRecentToggle}}
    <li><a href="javascript:void(0);" class="btn-link btn-invisible toggle-recents" data-toggle="recently-viewed" tabindex="-1">
        {{#if open}}{{str \'LBL_SHOW_MORE_RECENTS\' module}}{{else}}{{str \'LBL_SHOW_LESS_RECENTS\' module}}{{/if}}
    </a></li>
{{/if}}
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
({extendsFrom:\'ModuleMenuView\',dashboards:null,recentlyViewed:null,_defaultSettings:{dashboards:20,favorites:3,recently_viewed:10,recently_viewed_toggle:3},TOGGLE_RECENTS_KEY:\'more\',_recentToggleKey:null,initialize:function(options){this._super(\'initialize\',[options]);this.events=_.extend({},this.events,{\'click [data-toggle="recently-viewed"]\':\'handleToggleRecentlyViewed\'});this._initCollections();this._initLegacyDashboards();this.meta.last_state={id:\'recent\'};this._recentToggleKey=app.user.lastState.key(this.TOGGLE_RECENTS_KEY,this);},_initCollections:function(){this.dashboards=app.data.createBeanCollection(\'Dashboards\');this.recentlyViewed=app.data.createMixedBeanCollection();return this;},_initLegacyDashboards:function(){if(app.config.enableLegacyDashboards&&app.config.enableLegacyDashboards===true){this.dashboardBwcLink=app.bwc.buildRoute(this.module,null,\'bwc_dashboard\');}
return this;},_renderHtml:function(){this._super(\'_renderHtml\');this.$el.attr(\'title\',app.lang.get(\'LBL_TABGROUP_HOME\',this.module));this.$el.addClass(\'home btn-group\');},populateMenu:function(){var pattern=/^(LBL|TPL|NTC|MSG)_(_|[a-zA-Z0-9])*$/;this.$(\'.active\').removeClass(\'active\');this.dashboards.fetch({\'limit\':this._settings[\'dashboards\'],\'showAlerts\':false,\'success\':_.bind(function(data){_.each(data.models,function(model){if(pattern.test(model.get(\'name\'))){model.set(\'name\',app.lang.get(model.get(\'name\'),model.module));}
model.module=\'Home\';});this._renderPartial(\'dashboards\',{collection:this.dashboards,active:this.context.get(\'module\')===\'Home\'&&this.context.get(\'model\')});},this),\'endpoint\':function(method,model,options,callbacks){app.api.records(method,\'Dashboards\',model.attributes,options.params,callbacks);}});this.populateRecentlyViewed(false);},populateRecentlyViewed:function(focusToggle){var visible=app.user.lastState.get(this._recentToggleKey),threshold=this._settings[\'recently_viewed_toggle\'],limit=this._settings[visible?\'recently_viewed\':\'recently_viewed_toggle\'];if(limit<=0){return;}
var modules=this._getModulesForRecentlyViewed();if(_.isEmpty(modules)){return;}
this.recentlyViewed.fetch({\'showAlerts\':false,\'fields\':[\'id\',\'name\'],\'date\':\'-7 DAY\',\'limit\':limit,\'module_list\':modules,\'success\':_.bind(function(data){this._renderPartial(\'recently-viewed\',{collection:this.recentlyViewed,open:!visible,showRecentToggle:data.models.length>threshold||data.next_offset!==-1});if(focusToggle&&this.isOpen()){this.$(\'[data-toggle="recently-viewed"]\').focus();}},this),\'endpoint\':function(method,model,options,callbacks){var url=app.api.buildURL(\'recent\',\'read\',options.attributes,options.params);app.api.call(method,url,null,callbacks,options.params);}});return;},_getModulesForRecentlyViewed:function(){var modules=app.metadata.getModuleNames({filter:\'visible\',access:\'list\'});modules=_.filter(modules,function(module){var view=app.metadata.getView(module,\'module-menu\');return!view||!view.settings||view.settings.recently_viewed>0;});return modules;},handleToggleRecentlyViewed:function(event){app.user.lastState.set(this._recentToggleKey,Number(!app.user.lastState.get(this._recentToggleKey)));this.populateRecentlyViewed(true);event.stopPropagation();}})',
    ),
    'meta' => 
    array (
      'settings' => 
      array (
        'favorites' => 0,
        'recently_viewed' => 10,
        'recently_viewed_toggle' => 3,
      ),
    ),
  ),
  'about-copyright' => 
  array (
    'templates' => 
    array (
      'about-copyright' => '
<p>Copyright {{{str \'LBL_SUGAR_COPYRIGHT_SUB\' module}}}</p>
',
    ),
  ),
  'about-headerpane' => 
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
({extendsFrom:\'HeaderpaneView\',_formatTitle:function(title){return app.lang.get(title,this.module,app.metadata.getServerInfo());}})',
    ),
    'meta' => 
    array (
      'template' => 'headerpane',
      'fields' => 
      array (
        0 => 
        array (
          'name' => 'title',
          'type' => 'label',
          'default_value' => 'TPL_ABOUT',
        ),
      ),
    ),
  ),
  'about-language-packs' => 
  array (
    'templates' => 
    array (
      'about-language-packs' => '
<h4>{{str "LBL_LANGUAGE_PACKS" module}}</h4>
<dl class="list">
    {{#each this.meta.providers}}
        <dt>{{language}}</dt>
        <dd>{{{str "TPL_LANGUAGE_PACKS_PROVIDED_BY" ../module this}}}</dd>
    {{/each}}
</dl>
',
      'link' => '
{{#if url}}<a target="_blank" href="{{url}}">{{name}}</a>{{else}}{{name}}{{/if}}
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
({linkTemplate:null,initialize:function(opts){app.view.View.prototype.initialize.call(this,opts);this.linkTemplate=app.template.getView(this.name+\'.link\',this.module);},_renderHtml:function(){_.each(this.meta.providers,function(provider){provider.link=this.linkTemplate(provider);},this);app.view.View.prototype._renderHtml.call(this);}})',
    ),
    'meta' => 
    array (
      'providers' => 
      array (
        0 => 
        array (
          'language' => 'Albanian',
          'name' => 'Unixitech Solutions',
          'url' => 'http://www.unixitech.com',
        ),
        1 => 
        array (
          'language' => 'Bulgarian',
          'name' => 'Bizlink',
          'url' => 'http://www.bizlink-solutions.eu',
        ),
        2 => 
        array (
          'language' => 'Catalan (Spanish)',
          'name' => 'REDK Ingenieria del Software, SL',
          'url' => 'http://redk.net',
        ),
        3 => 
        array (
          'language' => 'Chinese',
          'name' => 'SR Force',
          'url' => 'http://www.srforce.com',
        ),
        4 => 
        array (
          'language' => 'Czech',
          'name' => 'ExtendIT',
          'url' => 'http://extendit.cz',
        ),
        5 => 
        array (
          'language' => 'Dutch',
          'name' => 'BrixCRM',
          'url' => 'http://www.brixcrm.nl',
        ),
        6 => 
        array (
          'language' => 'English UK',
          'name' => 'Provident CRM',
          'url' => 'http://www.providentcrm.com',
        ),
        7 => 
        array (
          'language' => 'French',
          'name' => 'Synolia',
          'url' => 'http://www.synolia.com',
        ),
        8 => 
        array (
          'language' => 'German',
          'name' => 'Kinamu',
          'url' => 'http://www.kinamu.com',
        ),
        9 => 
        array (
          'language' => 'Greek',
          'name' => 'Qualisys',
          'url' => 'http://www.qualisys.gr',
        ),
        10 => 
        array (
          'language' => 'Hungarian',
          'name' => 'Infoteka',
          'url' => 'http://www.infoteka.hu',
        ),
        11 => 
        array (
          'language' => 'Italian',
          'name' => 'OpenSymbol',
          'url' => 'http://www.opensymbol.it',
        ),
        12 => 
        array (
          'language' => 'Japanese',
          'name' => 'CBA',
          'url' => 'http://www.cba-japan.com',
        ),
        13 => 
        array (
          'language' => 'Korean',
          'name' => 'Bhea Knowledge Technologies Ltd',
          'url' => 'http://www.bhea.co.in',
        ),
        14 => 
        array (
          'language' => 'Latvian',
          'name' => 'Exigen Services',
          'url' => 'http://www.exigenservices.com',
        ),
        15 => 
        array (
          'language' => 'Lithuanian',
          'name' => 'OptimusCRM',
          'url' => 'http://www.optimuscrm.lt',
        ),
        16 => 
        array (
          'language' => 'Norwegian',
          'name' => 'Redpill Linpro',
          'url' => 'http://www.redpill-linpro.se',
        ),
        17 => 
        array (
          'language' => 'Polish',
          'name' => 'eVolpe',
          'url' => 'http://www.evolpe.pl',
        ),
        18 => 
        array (
          'language' => 'Portuguese',
          'name' => 'DRI',
          'url' => 'http://www.dri.pt',
        ),
        19 => 
        array (
          'language' => 'Portuguese Brazilian',
          'name' => 'Lampada Global',
          'url' => 'http://www.lampadaglobal.com',
        ),
        20 => 
        array (
          'language' => 'Romanian',
          'name' => 'Mycroft System',
          'url' => 'http://www.mycroft-system.com',
        ),
        21 => 
        array (
          'language' => 'Russian',
          'name' => 'Richlode Solutions',
          'url' => 'http://www.richlodesolutions.com',
        ),
        22 => 
        array (
          'language' => 'Serbian',
          'name' => ' PS Tech',
          'url' => 'http://pstech.rs',
        ),
        23 => 
        array (
          'language' => 'Slovak',
          'name' => 'Open IT',
          'url' => 'http://www.openit.sk',
        ),
        24 => 
        array (
          'language' => 'Spanish',
          'name' => 'RedK',
          'url' => 'http://www.redk.net',
        ),
        25 => 
        array (
          'language' => 'Swedish',
          'name' => 'Redpill Linpro',
          'url' => 'http://www.redpill-linpro.com',
        ),
        26 => 
        array (
          'language' => 'Turkish',
          'name' => 'Advocotech',
          'url' => 'http://advocotek.com',
        ),
      ),
    ),
  ),
  'about-resources' => 
  array (
    'templates' => 
    array (
      'about-resources' => '
<h4>{{str "LBL_RESOURCES" module}}</h4>
<ul class="list">
    <li><a target="_blank" href="http://support.sugarcrm.com/02_Documentation/01_Sugar_Editions?utm_source=App&utm_medium=about&utm_content={{this.serverInfo.version}}&utm_campaign={{this.serverInfo.product_name}}">{{str "LBL_RESOURCES_DOCUMENTATION" module}}</a></li>
    <li><a target="_blank" href="http://support.sugarcrm.com/04_Find_Answers/03_Developers?utm_source=App&utm_medium=about&utm_content={{this.serverInfo.version}}&utm_campaign={{this.serverInfo.product_name}}">{{str "LBL_RESOURCES_DEVELOPERS" module}}</a></li>
    <li><a target="_blank" href="http://www.sugarcrm.com/company-overview?utm_source=App&utm_medium=about&utm_content={{this.serverInfo.version}}&utm_campaign={{this.serverInfo.product_name}}">{{str "LBL_RESOURCES_SUGAR_INFO" module}}</a></li>
</ul>
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
({initialize:function(opts){this.serverInfo=app.metadata.getServerInfo();app.view.View.prototype.initialize.call(this,opts);}})',
    ),
  ),
  'about-source-code' => 
  array (
    'templates' => 
    array (
      'about-source-code' => '
<h4>{{str "LBL_SOURCE_CODE" module}}</h4>
<dl class="list">
    <dt><a target="_blank" href="http://www.sugarcrm.com">Sugar</a> ({{str \'LBL_SUGAR_VERSION\' module}} {{serverInfo.version}})</dt>
    <dd>{{str \'LBL_SUGAR_SOURCECODE_DESC\' module}}</dd>
    <dt>{{str \'LBL_THIRD_PARTY_SOFTWARE_TITLE\' module}}</dt>
    <dd>{{str \'LBL_THIRD_PARTY_SOURCECODE\' module}} <a target="_blank" href="http://www.sugarcrm.com/third-party-software">http://www.sugarcrm.com/third-party-software</a>.</dd>
</dl>
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
({serverInfo:null,initialize:function(options){this._super(\'initialize\',[options]);this.serverInfo=app.metadata.getServerInfo();}})',
    ),
  ),
  'dashboard-headerpane' => 
  array (
    'templates' => 
    array (
      'dashboard-headerpane' => '
<div class="headerpane">
    <h1>
        {{#each meta.panels}}
            {{#each fields}}
                <span class="record-cell">
                    {{field ../../this model=../../this.model template=../../this.action}}
                </span>
            {{/each}}
        {{/each}}
        <div class="btn-toolbar pull-right dropdown">
            {{#each meta.buttons}}
                {{field ../this model=../this.model template="detail"}}
            {{/each}}
        </div>
    </h1>
</div>
',
    ),
    'meta' => 
    array (
      'buttons' => 
      array (
        0 => 
        array (
          'type' => 'actiondropdown',
          'primary' => true,
          'buttons' => 
          array (
            0 => 
            array (
              'name' => 'add_button',
              'type' => 'rowaction',
              'label' => 'LBL_CREATE_BUTTON_LABEL',
              'css_class' => 'btn btn-primary',
            ),
            1 => 
            array (
              'name' => 'edit_button',
              'type' => 'rowaction',
              'label' => 'LBL_EDIT_BUTTON',
            ),
          ),
          'showOn' => 'view',
        ),
        1 => 
        array (
          'name' => 'cancel_button',
          'type' => 'button',
          'label' => 'LBL_CANCEL_BUTTON_LABEL',
          'css_class' => 'btn-invisible btn-link',
          'showOn' => 'edit',
        ),
        2 => 
        array (
          'name' => 'delete_button',
          'type' => 'button',
          'label' => 'LBL_DELETE_BUTTON_LABEL',
          'css_class' => 'btn-danger',
          'showOn' => 'edit',
        ),
        3 => 
        array (
          'name' => 'save_button',
          'type' => 'button',
          'label' => 'LBL_SAVE_BUTTON_LABEL',
          'css_class' => 'btn-primary',
          'showOn' => 'edit',
        ),
        4 => 
        array (
          'name' => 'create_cancel_button',
          'type' => 'button',
          'label' => 'LBL_CANCEL_BUTTON_LABEL',
          'css_class' => 'btn-invisible btn-link',
          'showOn' => 'create',
        ),
        5 => 
        array (
          'name' => 'create_button',
          'type' => 'button',
          'label' => 'LBL_SAVE_BUTTON_LABEL',
          'css_class' => 'btn-primary',
          'showOn' => 'create',
        ),
      ),
      'panels' => 
      array (
        0 => 
        array (
          'name' => 'header',
          'fields' => 
          array (
            0 => 
            array (
              'type' => 'dashboardtitle',
              'name' => 'name',
              'placeholder' => 'LBL_DASHBOARD_TITLE',
            ),
            1 => 
            array (
              'type' => 'layoutbutton',
              'name' => 'layout',
              'showOn' => 'edit',
            ),
          ),
        ),
      ),
    ),
  ),
  'help-dashboard-headerpane' => 
  array (
    'meta' => 
    array (
      'type' => 'dashboard-headerpane',
      'buttons' => 
      array (
        0 => 
        array (
          'type' => 'actiondropdown',
          'primary' => true,
          'buttons' => 
          array (
            0 => 
            array (
              'name' => 'add_button',
              'type' => 'rowaction',
              'label' => 'LBL_CREATE_BUTTON_LABEL',
              'css_class' => 'btn btn-primary',
            ),
          ),
          'showOn' => 'view',
        ),
        1 => 
        array (
          'name' => 'cancel_button',
          'type' => 'button',
          'label' => 'LBL_CANCEL_BUTTON_LABEL',
          'css_class' => 'btn-invisible btn-link',
          'showOn' => 'edit',
        ),
        2 => 
        array (
          'name' => 'save_button',
          'type' => 'button',
          'label' => 'LBL_SAVE_BUTTON_LABEL',
          'css_class' => 'btn-primary',
          'showOn' => 'edit',
        ),
        3 => 
        array (
          'name' => 'create_cancel_button',
          'type' => 'button',
          'label' => 'LBL_CANCEL_BUTTON_LABEL',
          'css_class' => 'btn-invisible btn-link',
          'showOn' => 'create',
        ),
        4 => 
        array (
          'name' => 'create_button',
          'type' => 'button',
          'label' => 'LBL_SAVE_BUTTON_LABEL',
          'css_class' => 'btn-primary',
          'showOn' => 'create',
        ),
      ),
      'panels' => 
      array (
        0 => 
        array (
          'name' => 'header',
          'fields' => 
          array (
            0 => 
            array (
              'type' => 'dashboardtitle',
              'name' => 'name',
              'placeholder' => 'LBL_DASHBOARD_TITLE',
            ),
            1 => 
            array (
              'type' => 'layoutbutton',
              'name' => 'layout',
              'showOn' => 'edit',
            ),
          ),
        ),
      ),
    ),
  ),
  'top-activity-user' => 
  array (
    'templates' => 
    array (
      'top-activity-user' => '
<div class="dashlet-options">
    <div class="row-fluid">
        <div class="span6">
            {{#each this.dashletConfig.buttons}}
                {{field ../this model=../this.settings template="edit"}}
            {{/each}}
        </div>
    </div>
</div>
{{#each this.collection.models}}
    <div class="news-article">
        <p>
            <img src="{{getFieldValue this "pictureUrl"}}" class="avatar"> <a href="#{{buildRoute module=\'Employees\' id=this.attributes.user_id}}">{{getFieldValue this "name"}}</a>
        </p>
        <span class="details">
            <icon class="{{getFieldValue this "icon"}} icon-large"></icon> {{getFieldValue this "label"}}
        </span>
    </div>
{{/each}}
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
({plugins:[\'Dashlet\',\'GridBuilder\'],events:{\'change select[name=filter_duration]\':\'filterChanged\'},initDashlet:function(viewName){this.collection=new app.BeanCollection();if(!this.meta.config){this.collection.on("reset",this.render,this);}},_mapping:{meetings:{icon:\'icon-comments\',label:\'LBL_MOST_MEETING_HELD\'},inbound_emails:{icon:\'icon-envelope\',label:\'LBL_MOST_EMAILS_RECEIVED\'},outbound_emails:{icon:\'icon-envelope-alt\',label:\'LBL_MOST_EMAILS_SENT\'},calls:{icon:\'icon-phone\',label:\'LBL_MOST_CALLS_MADE\'}},loadData:function(params){if(this.meta.config){return;}
var url=app.api.buildURL(\'mostactiveusers\',null,null,{days:this.settings.get("filter_duration")}),self=this;app.api.call("read",url,null,{success:function(data){if(self.disposed){return;}
var models=[];_.each(data,function(attributes,module){if(_.isEmpty(attributes)){return;}
var model=new app.Bean(_.extend({id:_.uniqueId(\'aui\')},attributes));model.module=module;model.set("name",model.get("first_name")+\' \'+model.get("last_name"));model.set("icon",self._mapping[module][\'icon\']);var template=Handlebars.compile(app.lang.get(self._mapping[module][\'label\'],self.module));model.set("label",template({count:model.get("count")}));model.set("pictureUrl",app.api.buildFileURL({module:"Users",id:model.get("user_id"),field:"picture"}));models.push(model);},this);self.collection.reset(models);},complete:params?params.complete:null});},filterChanged:function(evt){this.loadData();},_dispose:function(){if(this.collection){this.collection.off("reset",null,this);}
app.view.View.prototype._dispose.call(this);}})',
    ),
    'meta' => 
    array (
      'dashlets' => 
      array (
        0 => 
        array (
          'label' => 'LBL_MOST_ACTIVE_COLLEAGUES',
          'description' => 'LBL_MOST_ACTIVE_COLLEAGUES_DESC',
          'config' => 
          array (
            'filter_duration' => '7',
            'module' => 'Home',
          ),
          'preview' => 
          array (
            'filter_duration' => '7',
            'module' => 'Home',
          ),
          'filter' => 
          array (
            'module' => 
            array (
              0 => 'Home',
            ),
            'view' => 'record',
          ),
        ),
      ),
      'panels' => 
      array (
        0 => 
        array (
          'name' => 'panel_body',
          'columns' => 1,
          'labelsOnTop' => true,
          'placeholders' => true,
          'fields' => 
          array (
            0 => 
            array (
              'name' => 'filter_duration',
              'label' => 'Filter',
              'type' => 'enum',
              'options' => 'activity_user_options',
            ),
          ),
        ),
      ),
      'buttons' => 
      array (
        0 => 
        array (
          'name' => 'filter_duration',
          'label' => 'Filter',
          'type' => 'enum',
          'options' => 'activity_user_options',
        ),
      ),
    ),
  ),
  'tutorial' => 
  array (
    'meta' => 
    array (
      'record' => 
      array (
        'version' => 1,
        'intro' => 'LBL_TOUR_INTRO',
        'content' => 
        array (
          0 => 
          array (
            'name' => '[href=#Home]',
            'text' => 'LBL_TOUR_CUBE',
            'full' => true,
            'horizAdj' => -11,
          ),
          1 => 
          array (
            'name' => '[data-route="#Accounts"]',
            'text' => 'LBL_TOUR_NAV_BAR',
            'full' => true,
            'vertAdj' => -5,
          ),
          2 => 
          array (
            'name' => '.search-query',
            'text' => 'LBL_TOUR_SEARCH',
            'full' => true,
          ),
          3 => 
          array (
            'name' => '.notification-list',
            'text' => 'LBL_TOUR_NOTIFICATIONS',
            'full' => true,
            'horizAdj' => -5,
            'vertAdj' => 8,
          ),
          4 => 
          array (
            'name' => '#userActions',
            'text' => 'LBL_TOUR_AVATAR',
            'full' => true,
            'vertAdj' => 8,
          ),
          5 => 
          array (
            'name' => '#createList',
            'text' => 'LBL_TOUR_ADD',
            'full' => true,
            'vertAdj' => 8,
          ),
          6 => 
          array (
            'name' => '#tour',
            'text' => 'LBL_TOUR_TOUR',
            'full' => true,
            'vertAdj' => -14,
          ),
        ),
      ),
    ),
  ),
  'twitter' => 
  array (
    'templates' => 
    array (
      'dashlet-config' => '
<div class="record">
    {{#each dashletConfig.config.fields}}
        <div class="row-fluid panel_body">
            <div class="record-cell">
                <div class="record-label">{{str label}}</div>
                {{field ../this model=../this.settings template=../this.action}}
            </div>
        </div>
    {{/each}}
</div>
',
      'twitter-need-configure' => '
<div class="block-footer">
    {{#if showGeneric}}
        {{str errorLBL}}
    {{/if}}
{{#if needConnect}}
    <a target="blank" class="connect-twitter" href="index.php?module=EAPM&refreshParentWindow=yesPlease&closeWhenDone=1&action=QuickSave&application=Twitter">
        {{str \'LBL_CONNECT_TWITTER\'}}
    </a>
{{/if}}
    {{#if needOAuth}}
        {{#if showAdmin}}
            <a href=\'#bwc/index.php?module=Connectors&action=ModifyProperties\'>
                {{str \'LBL_CONNECT_TWITTER_FOR_ADMIN\'}}
            </a>
        {{else}}
            <em>{{str \'LBL_CONFIGURE_TWITTER\'}}</em>
        {{/if}}
    {{/if}}
</div>
',
      'twitter' => '
{{#if tweets}}
    <div class="twitter-widget scroll">
        {{#each tweets}}
            <div class="news-article">
                <div class="row-fluid">
                    <div class="span1">
                        <a target="_blank" href="https://twitter.com/{{screen_name}}"><img src="{{profile_image_url}}" class="pull-right"></a>
                    </div>
                    <div class="span11">
                        <div class="row-fluid header">
                            <div class="span6">
                                <h5>
                                    <a target="_blank" href="https://twitter.com/{{screen_name}}"><strong>{{name}}</strong></a>
                                    <a target="_blank" href="https://twitter.com/{{screen_name}}">@{{screen_name}}</a>
                                </h5>
                            </div>
                            <div class="span6">
                                <a class="pull-right" target="_blank" href="https://twitter.com/{{screen_name}}/status/{{id}}">
                                    {{#if useAbsTime}}
                                        {{date}}
                                    {{else}}
                                        {{relativeTime date class=\'date\' rel=\'tooltip\'}}
                                    {{/if}}
                                </a>
                            </div>
                        </div>
                        <div class="body">
                            <p>{{{text}}}</p>
                        </div>
                        <div class="details">
                            <a class=""
                               target="twitter"
                               href="https://twitter.com/intent/tweet?in_reply_to={{id}}"
                               title="reply"><i
                                    class="icon-reply"></i> {{str "LBL_TWITTER_REPLY"}}
                            </a>
                            <a class=""
                               title="retweet" target="twitter"
                               href="https://twitter.com/intent/retweet?tweet_id={{id}}"><i
                                    class="icon-retweet"></i> {{str "LBL_TWITTER_RETWEET"}}
                            </a>
                            <a class="" target="twitter"
                               href="https://twitter.com/intent/favorite?tweet_id={{id}}"><i
                                    class="icon-star"></i> {{str "LBL_TWITTER_FAVORITE"}}
                            </a>
                            {{#if ../caseCreateAcl}}
                                {{#if ../../tweet2case}}
                                    <a class="create-case" data-screen_name="{{screen_name}}" data-url="https://twitter.com/{{screen_name}}/status/{{id}}" href="javascript: void(0);"><i
                                            class=" icon-plus"></i> {{str \'LNK_NEW_CASE\' \'Cases\'}}
                                    </a>
                                {{/if}}
                            {{/if}}
                        </div>
                    </div>
                </div>
            </div>
        {{/each}}
    </div>

{{else}}
    <div class="block-footer">{{str "LBL_NO_DATA_AVAILABLE"}}</div>
{{/if}}

{{#if current_twitter_user_name}}
<div class="block-footer">
    <div class="pull-left">  <i class="icon-twitter"></i> @{{current_twitter_user_name}} <img class="icon-large" src="{{current_twitter_user_pic}}"></div>
</div>
{{/if}}
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
({plugins:[\'Dashlet\',\'RelativeTime\',\'Connector\',\'Tooltip\'],limit:20,events:{\'click .connect-twitter\':\'onConnectTwitterClick\',\'click .create-case\':\'createCase\'},initDashlet:function(){this.initDashletConfig();var serverInfo=app.metadata.getServerInfo();this.tweet2case=serverInfo.system_tweettocase_on?true:false;var limit=this.settings.get(\'limit\')||this.limit;this.settings.set(\'limit\',limit);this.cacheKey=\'twitter.dashlet.current_user_cache\';var currentUserCache=app.cache.get(this.cacheKey);if(currentUserCache&&currentUserCache.current_twitter_user_name){self.current_twitter_user_name=currentUserCache.current_twitter_user_name;}
if(currentUserCache&&currentUserCache.current_twitter_user_pic){self.current_twitter_user_pic=currentUserCache.current_twitter_user_pic;}
this.caseCreateAcl=app.acl.hasAccess(\'edit\',\'Cases\');},initDashletConfig:function(){this.moduleType=app.controller.context.get(\'module\');this.layoutType=app.controller.context.get(\'layout\');if(this.meta.config&&this.layoutType===\'record\'){this.dashletConfig=app.metadata.getView(this.moduleType,this.name)||this.dashletConfig;if(this.moduleType!==\'Home\'&&this.dashletConfig.config&&this.dashletConfig.config.fields){this.dashletConfig.config.fields=_.filter(this.dashletConfig.config.fields,function(field){return field.name!==\'twitter\';});}}},onConnectTwitterClick:function(event){if(!_.isUndefined(event.currentTarget)){event.preventDefault();var href=this.$(event.currentTarget).attr(\'href\');app.bwc.login(false,function(response){window.open(href);});}},createCase:function(event){var module=\'Cases\';var layout=\'create\';var self=this;app.drawer.reset();app.drawer.open({layout:layout,context:{create:true,module:module}},function(refresh,createModelPointer){if(refresh){var collection=app.controller.context.get(\'collection\');if(collection&&collection.module===module){collection.fetch({showAlerts:false});}}});var createLayout=_.last(app.drawer._components),tweetId=this.$(event.target).data(\'url\').split(\'/\');tweetId=tweetId[tweetId.length-1];var createValues={\'source\':\'Twitter\',\'name\':app.lang.get(\'LBL_CASE_FROM_TWITTER_TITLE\',\'Cases\')+\' \'+tweetId+\' @\'+this.$(event.target).data(\'screen_name\'),\'description\':app.lang.get(\'LBL_TWITTER_SOURCE\',\'Cases\')+\' \'+this.$(event.target).data(\'url\')};this.createModel=createLayout.model;if(this.model){if(this.model.module==\'Accounts\'){createValues.account_name=this.model.get(\'name\');createValues.account_id=this.model.get(\'id\');}else{createValues.account_name=this.model.get(\'account_name\');createValues.account_id=this.model.get(\'account_id\');}}
this.setCreateModelFields(this.createModel,createValues);this.createModel.on(\'sync\',_.once(function(model){var activity=app.data.createBean(\'Activities\',{activity_type:"post",comment_count:0,data:{value:app.lang.get(\'LBL_TWITTER_SOURCE\')+\' \'+self.$(event.target).data(\'url\'),tags:[]},tags:[],value:app.lang.get(\'LBL_TWITTER_SOURCE\')+\' \'+self.$(event.target).data(\'url\'),deleted:"0",parent_id:model.id,parent_type:"Cases"});activity.save();var contacts=app.data.createBeanCollection(\'Contacts\');var options={filter:[{"twitter":{"$equals":self.$(event.target).data(\'screen_name\')}}],success:function(data){if(data&&data.models&&data.models[0]){var url=app.api.buildURL(\'Cases\',\'contacts\',{id:self.createModel.id,relatedId:data.models[0].id,link:true});app.api.call(\'create\',url);}}};contacts.fetch(options);}));},setCreateModelFields:function(model,fields){var action=\'edit\',module=\'Cases\',ownerId=app.user.get(\'id\');_.each(fields,function(value,fieldName){if(app.acl.hasAccess(action,module,ownerId,fieldName)){model.set(fieldName,value);}});return model;},_render:function(){if(this.tweets||this.meta.config){app.view.View.prototype._render.call(this);}},bindDataChange:function(){if(this.model){this.model.on(\'change\',this.loadData,this);}},getTwitterName:function(){var mapping=this.getConnectorModuleFieldMapping(\'ext_rest_twitter\',this.moduleType);var twitter=this.model.get(\'twitter\')||this.model.get(mapping.name)||this.model.get(\'name\')||this.model.get(\'account_name\')||this.model.get(\'full_name\');if(this.layoutType===\'records\'||this.moduleType===\'Home\'){twitter=this.settings.get(\'twitter\');}
if(!twitter){return false;}
twitter=twitter.replace(/ /g,\'\');this.twitter=twitter;return twitter;},loadData:function(options){if(this.disposed||this.meta.config){return;}
this.screen_name=this.settings.get(\'twitter\')||false;this.tried=false;if(this.viewName===\'config\'){return false;}
this.loadDataCompleteCb=options?options.complete:null;this.connectorCriteria=[\'eapm_bean\',\'test_passed\'];this.checkConnector(\'ext_rest_twitter\',_.bind(this.loadDataWithValidConnector,this),_.bind(this.handleLoadError,this),this.connectorCriteria);},loadDataWithValidConnector:function(connector){if(!this.getTwitterName()){if(_.isFunction(this.loadDataCompleteCb)){this.loadDataCompleteCb();}
return false;}
var limit=parseInt(this.settings.get(\'limit\'),10)||this.limit,self=this;var currentUserUrl=app.api.buildURL(\'connector/twitter/currentUser\',\'\',\'\',{connectorHash:connector.connectorHash});if(!this.current_twitter_user_name){app.api.call(\'READ\',currentUserUrl,{},{success:function(data){app.cache.set(self.cacheKey,{\'current_twitter_user_name\':data.screen_name,\'current_twitter_user_pic\':data.profile_image_url});self.current_twitter_user_name=data.screen_name;self.current_twitter_user_pic=data.profile_image_url;if(!this.disposed){self.render();}},complete:self.loadDataCompleteCb});}
var url=app.api.buildURL(\'connector/twitter\',\'\',{id:this.twitter},{count:limit,connectorHash:connector.connectorHash});app.api.call(\'READ\',url,{},{success:function(data){if(self.disposed){return;}
var tweets=[];if(data.success!==false){_.each(data,function(tweet){var time=new Date(tweet.created_at.replace(/^\\w+ (\\w+) (\\d+) ([\\d:]+) \\+0000 (\\d+)$/,\'$1 $2 $4 $3 UTC\')),date=app.date.format(time,\'Y/m/d H:i:s\'),text=tweet.retweeted_status?\'RT @\'+tweet.retweeted_status.user.screen_name+\': \'+tweet.retweeted_status.text:tweet.text,sourceUrl=tweet.source,id=tweet.id_str,name=tweet.user.name,tokenText=text.split(\' \'),screen_name=tweet.user.screen_name,profile_image_url=tweet.user.profile_image_url_https,j,rightNow=new Date(),diff=(rightNow.getTime()-time.getTime())/(1000*60*60*24),useAbsTime=diff>1;for(j=0;j<tokenText.length;j++){if(tokenText[j].charAt(0)==\'h\'&&tokenText[j].charAt(1)==\'t\'){tokenText[j]="<a class=\'googledoc-fancybox\' href="+\'"\'+tokenText[j]+\'"\'+"target=\'_blank\'>"+tokenText[j]+"</a>";}}
text=tokenText.join(\' \');tweets.push({id:id,name:name,screen_name:screen_name,profile_image_url:profile_image_url,text:text,source:sourceUrl,date:date,useAbsTime:useAbsTime});},this);}
self.tweets=tweets;if(!this.disposed){self.template=app.template.get(self.name+\'.Home\');self.render();}},error:function(data){if(self.tried===false){self.tried=true;var name=\'ext_rest_twitter\';var funcWrapper=function(){self.checkConnector(name,_.bind(self.loadDataWithValidConnector,self),_.bind(self.handleLoadError,self),self.connectorCriteria);};self.getConnectors(name,funcWrapper);}
else{self.handleLoadError(null);}},complete:self.loadDataCompleteCb});},handleLoadError:function(connector){if(this.disposed){return;}
this.showGeneric=true;this.errorLBL=app.lang.get(\'ERROR_UNABLE_TO_RETRIEVE_DATA\');this.template=app.template.get(this.name+\'.twitter-need-configure.Home\');if(connector===null){this.errorLBL=app.lang.get(\'LBL_ERROR_CANNOT_FIND_TWITTER\')+this.twitter;}
else if(!connector.test_passed&&connector.testing_enabled){this.needOAuth=true;this.needConnect=false;this.showGeneric=false;this.showAdmin=app.acl.hasAccess(\'admin\',\'Administration\');}
else if(!connector.eapm_bean){this.needOAuth=false;this.needConnect=true;this.showGeneric=false;this.showAdmin=app.acl.hasAccess(\'admin\',\'Administration\');}
app.view.View.prototype._render.call(this);if(_.isFunction(this.loadDataCompleteCb)){this.loadDataCompleteCb();}},_dispose:function(){if(this.model){this.model.off(\'change\',this.loadData,this);}
app.view.View.prototype._dispose.call(this);}})',
    ),
    'meta' => 
    array (
      'dashlets' => 
      array (
        0 => 
        array (
          'label' => 'LBL_TWITTER_NAME',
          'description' => 'LBL_TWITTER_DESCRIPTION',
          'config' => 
          array (
            'limit' => '20',
          ),
          'preview' => 
          array (
            'title' => 'LBL_TWITTER_MY_ACCOUNT',
            'twitter' => 'sugarcrm',
            'limit' => '3',
          ),
        ),
      ),
      'config' => 
      array (
        'fields' => 
        array (
          0 => 
          array (
            'type' => 'base',
            'name' => 'twitter',
            'label' => 'LBL_TWITTER_ID',
          ),
          1 => 
          array (
            'name' => 'limit',
            'label' => 'LBL_TWITTER_DISPLAY_ROWS',
            'type' => 'enum',
            'options' => 
            array (
              5 => 5,
              10 => 10,
              15 => 15,
              20 => 20,
              50 => 50,
            ),
          ),
        ),
      ),
    ),
  ),
  'webpage' => 
  array (
    'templates' => 
    array (
      'dashlet-config' => '
<div class="record">
    {{#each dashletConfig.config.fields}}
    <div class="row-fluid panel_body">
        <div class="record-cell">
            <div class="record-label">{{str label ../module}}</div>
            {{field ../this model=../this.settings template=../this.action}}
        </div>
    </div>
    {{/each}}
</div>
',
      'webpage' => '
{{#each this.dashletConfig.view_panel}}
    {{field ../this model=../this.settings}}
{{/each}}
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
({plugins:[\'Dashlet\'],_defaultOptions:{limit:10,},bindDataChange:function(){if(!this.meta.config){this.model.on("change",this.render,this);}},_render:function(){if(!this.meta.config){this.dashletConfig.view_panel[0].height=this.settings.get(\'limit\')*this.rowHeight;}
app.view.View.prototype._render.call(this);},initDashlet:function(view){this.viewName=view;var settings=_.extend({},this._defaultOptions,this.settings.attributes);this.settings.set(settings);},loadData:function(options){if(options&&options.complete){options.complete();}}})',
    ),
    'meta' => 
    array (
      'dashlets' => 
      array (
        0 => 
        array (
          'label' => 'LBL_DASHLET_WEBPAGE_NAME',
          'description' => 'LBL_DASHLET_WEBPAGE_DESC',
          'config' => 
          array (
            'url' => '',
            'module' => 'Home',
            'limit' => 3,
          ),
          'preview' => 
          array (
            'title' => 'LBL_DASHLET_WEBPAGE_NAME',
            'url' => '',
            'limit' => '3',
            'module' => 'Home',
          ),
        ),
      ),
      'config' => 
      array (
        'fields' => 
        array (
          0 => 
          array (
            'type' => 'iframe',
            'name' => 'url',
            'label' => 'LBL_DASHLET_WEBPAGE_URL',
            'help' => 'LBL_DASHLET_WEBPAGE_URL_HELP',
          ),
          1 => 
          array (
            'name' => 'limit',
            'label' => 'LBL_DASHLET_CONFIGURE_DISPLAY_ROWS',
            'type' => 'enum',
            'options' => 'dashlet_webpage_limit_options',
          ),
        ),
      ),
      'view_panel' => 
      array (
        0 => 
        array (
          'type' => 'iframe',
          'name' => 'url',
          'label' => 'LBL_DASHLET_WEBPAGE_URL',
          'width' => '100%',
        ),
      ),
    ),
  ),
  '_hash' => 'f21fd767adb992058d187056e0677449',
);

