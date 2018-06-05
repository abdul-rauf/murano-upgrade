<?php
$clientCache['Filters']['base']['data'] = array (
  'collection' => 
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
({collection:null,_filterOptions:{},clearFilterOptions:function(){this._filterOptions={};return this;},comparator:function(model1,model2){if(model1.get(\'editable\')===false&&model2.get(\'editable\')!==false){return 1;}
if(model1.get(\'editable\')!==false&&model2.get(\'editable\')===false){return-1;}
if(this._getTranslatedFilterName(model1).toLowerCase()<this._getTranslatedFilterName(model2).toLowerCase()){return-1;}
return 1;},load:function(options){options=options||{};var module=this.moduleName,prototype=this._getPrototype(),collection;if(!module){app.logger.error(\'This Filters collection has no module defined.\');return;}
if(this.collection){this.collection.off();}
prototype._cache=prototype._cache||{};if(prototype._cache[module]){this._onSuccessCallback(options.success);return;}
this._resetFiltersCache(module);this._loadPredefinedFilters();if(!app.acl.hasAccess(\'list\',module)){app.logger.debug(\'No "list" access to \'+module+\' so skipping fetch.\');this._onSuccessCallback(options.success);return;}
prototype.fetch.call(this,{showAlerts:false,filter:[{\'created_by\':app.user.id},{\'module_name\':module}],success:_.bind(function(models){this._cacheFilters(models);this._onSuccessCallback(options.success);},this),error:function(){if(_.isFunction(options.error)){options.error();}else{app.logger.error(\'Unable to get filters from the server.\');}}});},setModuleName:function(module){this.moduleName=module;return this;},setFilterOptions:function(key,val){var options;if(_.isObject(key)){options=key;}else{(options={})[key]=val;}
this._filterOptions=_.extend({},this._filterOptions,options);return this;},_cacheFilters:function(models){if(!models){return;}
var filters=_.isFunction(models.toJSON)?models.toJSON():models;filters=_.isArray(filters)?filters:[filters];var prototype=this._getPrototype();_.each(filters,function(filter){if(filter.editable===false){prototype._cache[this.moduleName].predefined[filter.id]=filter;}else if(filter.is_template){prototype._cache[this.moduleName].template[filter.id]=filter;}else{prototype._cache[this.moduleName].user[filter.id]=filter;}},this);},_createCachedCollection:function(){var prototype=app.data.getCollectionClasses().Filters.prototype,module=this.moduleName,collection;prototype._cachedCollection=prototype._cachedCollection||Backbone.Collection.extend({model:app.data.getBeanClass(\'Filters\'),_setInitialFilter:this._setInitialFilter,comparator:this.comparator,_getPrototype:this._getPrototype,_getTranslatedFilterName:this._getTranslatedFilterName,_cacheFilters:this._cacheFilters,_updateFilterCache:this._updateFilterCache,_removeFilterCache:this._removeFilterCache,initialize:function(models,options){this.on(\'add\',this._cacheFilters,this);this.on(\'cache:update\',this._updateFilterCache,this);this.on(\'remove\',this._removeFilterCache,this);}});collection=new prototype._cachedCollection();collection.moduleName=module;collection._filterOptions=this._filterOptions;collection.defaultFilterFromMeta=prototype._cache[module].defaultFilterFromMeta;collection.add(_.toArray(prototype._cache[module].predefined),{silent:true});collection.add(_.toArray(prototype._cache[module].user),{silent:true});return collection;},_getTranslatedFilterName:function(model){var name=model.get(\'name\')||\'\';if(model.get(\'editable\')!==false&&!model.get(\'is_template\')){return name;}
var module=model.get(\'module_name\')||this.moduleName;var fallbackLangModules=model.langModules||[module,\'Filters\'];var moduleName=app.lang.get(\'LBL_MODULE_NAME\',module);var text=app.lang.get(name,fallbackLangModules)||\'\';return app.utils.formatString(text,[moduleName]);},_loadPredefinedFilters:function(){var cache=this._getPrototype()._cache[this.moduleName],moduleMeta=app.metadata.getModule(this.moduleName);if(!moduleMeta){app.logger.error(\'The module "\'+this.moduleName+\'" has no metadata.\');return;}
var moduleFilterMeta=moduleMeta.filters;if(!moduleFilterMeta){app.logger.error(\'The module "\'+this.moduleName+\'" has no filter metadata.\');return;}
_.each(moduleFilterMeta,function(template){if(!template||!template.meta){return;}
if(_.isArray(template.meta.filters)){this._cacheFilters(template.meta.filters);}
if(template.meta.default_filter){cache.defaultFilterFromMeta=template.meta.default_filter;}},this);},_onSuccessCallback:function(callback){this.collection=this._createCachedCollection();if(this._filterOptions.initial_filter){this.collection._setInitialFilter();}
if(_.isFunction(callback)){callback(this.collection);}},_setInitialFilter:function(){var filterId=this._filterOptions.initial_filter;if(!filterId){return;}
if(filterId===\'$relate\'){var filterDef={};_.each(this._filterOptions.filter_populate,function(value,key){filterDef[key]=\'\';});this.add([{\'id\':\'$relate\',\'editable\':true,\'is_template\':true,\'filter_definition\':[filterDef]}],{silent:true});}else{var prototype=this._getPrototype();var filter=prototype._cache[this.moduleName].template[filterId];if(!filter){return;}
this.add(filter,{silent:true});}
this.get(filterId).set(\'name\',this._filterOptions.initial_filter_label);this.get(filterId).langModules=this._filterOptions.initial_filter_lang_modules;},_updateFilterCache:function(model){if(!model){return;}
var attributes=_.isFunction(model.toJSON)?model.toJSON():model;if(attributes.is_template||attributes.editable===false){return;}
this._cacheFilters(model);},_removeFilterCache:function(model){var prototype=this._getPrototype();delete prototype._cache[this.moduleName].predefined[model.id];delete prototype._cache[this.moduleName].template[model.id];delete prototype._cache[this.moduleName].user[model.id];},_resetFiltersCache:function(){var prototype=this._getPrototype();prototype._cache=prototype._cache||{};prototype._cache[this.moduleName]={defaultFilterFromMeta:null,predefined:{},template:{},user:{}};},_getPrototype:function(){return app.data.getCollectionClasses().Filters.prototype;},dispose:function(){if(this.collection){this.collection.off();}
this.off();}})',
    ),
  ),
  'model' => 
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
({defaults:{editable:true},fieldTypeMap:{\'datetime\':\'date\',\'datetimecombo\':\'date\'},buildSearchTermFilter:function(moduleName,searchTerm){var searchFilter=[],returnFilter=[],searchMeta,fieldNames,terms,filter;if(moduleName===\'all_modules\'){return[];}
searchMeta=app.data.getBeanClass(\'Filters\').prototype.getModuleQuickSearchMeta(moduleName);fieldNames=searchMeta.fieldNames;if(searchTerm){searchTerm=searchTerm.trim();if(fieldNames.length===2&&searchMeta.splitTerms){terms=searchTerm.split(\' \');var firstTerm=_.first(terms.splice(0,1));var otherTerms=terms.join(\' \');terms=otherTerms?[firstTerm,otherTerms]:null;}else if(fieldNames.length>2){app.logger.fatal(\'Filtering by 3 quicksearch fields is not yet supported.\');}
_.each(fieldNames,function(name,index){var o={};if(terms){o[name]={\'$starts\':terms[index]};}else{o[name]={\'$starts\':searchTerm};}
searchFilter.push(o);});filter=searchFilter[0];if(searchFilter.length>1){filter=terms?{\'$and\':searchFilter}:{\'$or\':searchFilter};}
returnFilter.push(filter);if(moduleName===\'Users\'||moduleName===\'Employees\'){returnFilter[0]=({\'$and\':[{\'status\':{\'$not_equals\':\'Inactive\'}},returnFilter[0]]});}}
return returnFilter;},combineFilterDefinitions:function(baseFilter,searchTermFilter){var isBaseFilter=_.size(baseFilter)>0,isSearchTermFilter=_.size(searchTermFilter)>0;baseFilter=_.isArray(baseFilter)?baseFilter:[baseFilter];if(isBaseFilter&&isSearchTermFilter){baseFilter.push(searchTermFilter[0]);return[{\'$and\':baseFilter}];}else if(isBaseFilter){return baseFilter;}else if(isSearchTermFilter){return searchTermFilter;}
return[];},getFilterableFields:function(moduleName){var moduleMeta=app.metadata.getModule(moduleName),operatorMap=app.metadata.getFilterOperators(),fieldMeta=moduleMeta.fields,fields={};if(moduleMeta.filters){_.each(moduleMeta.filters,function(templateMeta){if(templateMeta.meta&&templateMeta.meta.fields){fields=_.extend(fields,templateMeta.meta.fields);}});}
_.each(fields,function(fieldFilterDef,fieldName){var fieldMetaData=app.utils.deepCopy(fieldMeta[fieldName]);if(_.isEmpty(fieldFilterDef)){fields[fieldName]=fieldMetaData||{};}else{fields[fieldName]=_.extend({name:fieldName},fieldMetaData,fieldFilterDef);}
delete fields[fieldName][\'readonly\'];});var validFields={};_.each(fields,function(value,key){var type=this.fieldTypeMap[value.type]||value.type;var hasAccess=app.acl.hasAccess(\'detail\',moduleName,null,key);if(hasAccess&&(operatorMap[type]||value.predefined_filter===true)){validFields[key]=value;}},this);return validFields;},getModuleQuickSearchMeta:function(moduleName){moduleName=moduleName||this.get(\'module_name\');var prototype=app.data.getBeanClass(\'Filters\').prototype;prototype._moduleQuickSearchMeta=prototype._moduleQuickSearchMeta||{};prototype._moduleQuickSearchMeta[moduleName]=prototype._moduleQuickSearchMeta[moduleName]||this._getQuickSearchMetaByPriority(moduleName);return prototype._moduleQuickSearchMeta[moduleName];},populateFilterDefinition:function(filterDef,populateObj){if(!populateObj){return filterDef;}
filterDef=app.utils.deepCopy(filterDef);_.each(filterDef,function(row){_.each(row,function(filter,field){var hasNoOperator=(_.isString(filter)||_.isNumber(filter));if(hasNoOperator){filter={\'$equals\':filter};}
var operator=_.keys(filter)[0],value=filter[operator],isValueEmpty=!_.isNumber(value)&&_.isEmpty(value);if(isValueEmpty&&populateObj&&!_.isUndefined(populateObj[field])){value=populateObj[field];}
if(hasNoOperator){row[field]=value;}else{row[field][operator]=value;}});});return filterDef;},_getQuickSearchMetaByPriority:function(searchModule){var meta=app.metadata.getModule(searchModule),filters=meta?meta.filters:[],fieldNames=[],priority=0,splitTerms=false;_.each(filters,function(value){if(value&&value.meta&&value.meta.quicksearch_field&&priority<value.meta.quicksearch_priority){fieldNames=value.meta.quicksearch_field;priority=value.meta.quicksearch_priority;if(_.isBoolean(value.meta.quicksearch_split_terms)){splitTerms=value.meta.quicksearch_split_terms;}}});return{fieldNames:fieldNames,splitTerms:splitTerms};}})',
    ),
  ),
  '_hash' => '48fc36fd0583c849f4b851f6d8b4b53e',
);

