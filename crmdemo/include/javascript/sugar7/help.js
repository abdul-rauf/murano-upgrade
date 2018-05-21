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
(function(app){app.augment("help",{_moduleLabelMap:undefined,get:function(module,view,context){var objModule=_.extend({'module_name':app.lang.getModuleSingular(module),'plural_module_name':app.lang.getAppListStrings('moduleList')[module]||module},context||{},this._getModuleLabelMap()),viewName=this._cleanupViewName(view).toUpperCase();return{'title':this._get('LBL_HELP_'+viewName+'_TITLE',module,objModule),'body':this._get('LBL_HELP_'+viewName,module,objModule),'more_help':this._get('LBL_HELP_MORE_INFO',module,objModule)};},_get:function(label,module,context){var text=app.lang.get(label,module,context);if(_.isEqual(label,text)){return undefined;}
return text;},_cleanupViewName:function(viewName){switch(viewName.toLowerCase()){case'list':return'records';case'detail':return'record';case'create-actions':return'create';default:return viewName;}},_getModuleLabelMap:function(){if(_.isUndefined(this._moduleLabelMap)){var singularModules={},modules={};_.each(app.lang.getAppListStrings('moduleListSingular'),function(module,key){singularModules[key.replace(/\s/g,'').toLowerCase()+'_singular_module']=module;},this);_.each(app.lang.getAppListStrings('moduleList'),function(module,key){modules[key.replace(/\s/g,'').toLowerCase()+'_module']=module;},this);this._moduleLabelMap=_.extend(singularModules,modules);}
return this._moduleLabelMap;},clearModuleLabelMap:function(){this._moduleLabelMap=undefined;}});app.events.on("app:sync:complete",function(){app.help.clearModuleLabelMap();});})(SUGAR.App);