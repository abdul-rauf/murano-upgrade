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
(function(app){app.events.on("app:init",function(){app.plugins.register('QuickSearchFilter',['layout','view','field'],{_moduleQuickSearchMeta:{},_getQuickSearchMetaByPriority:function(searchModule){var meta=app.metadata.getModule(searchModule),filters=meta?meta.filters:[],fieldNames=[],priority=0,splitTerms=false;_.each(filters,function(value){if(value&&value.meta&&value.meta.quicksearch_field&&priority<value.meta.quicksearch_priority){fieldNames=value.meta.quicksearch_field;priority=value.meta.quicksearch_priority;if(_.isBoolean(value.meta.quicksearch_split_terms)){splitTerms=value.meta.quicksearch_split_terms;}}});return{fieldNames:fieldNames,splitTerms:splitTerms};},getModuleQuickSearchMeta:function(searchModule){this._moduleQuickSearchMeta[searchModule]=this._moduleQuickSearchMeta[searchModule]||this._getQuickSearchMetaByPriority(searchModule);return this._moduleQuickSearchMeta[searchModule];},getModuleQuickSearchFields:function(searchModule){return this.getModuleQuickSearchMeta(searchModule).fieldNames;},getFilterDef:function(searchModule,searchTerm){var searchFilter=[],returnFilter=[],searchMeta,fieldNames,terms;if(searchModule==='all_modules'){return returnFilter;}
searchMeta=this.getModuleQuickSearchMeta(searchModule);fieldNames=searchMeta.fieldNames;if(searchTerm){searchTerm=searchTerm.trim();if(fieldNames.length===2&&searchMeta.splitTerms){terms=searchTerm.split(' ');var firstTerm=_.first(terms.splice(0,1));var otherTerms=terms.join(' ');terms=otherTerms?[firstTerm,otherTerms]:null;}else if(fieldNames.length>2){app.logger.fatal('Filtering by 3 quicksearch fields is not yet supported.');}
_.each(fieldNames,function(name,index){var o={};if(terms){o[name]={'$starts':terms[index]};}else{o[name]={'$starts':searchTerm};}
searchFilter.push(o);});if(terms){returnFilter.push(searchFilter.length>1?{'$and':searchFilter}:searchFilter[0]);}else{returnFilter.push(searchFilter.length>1?{'$or':searchFilter}:searchFilter[0]);}
if(searchModule==='Users'||searchModule==='Employees'){returnFilter[0]=({'$and':[{'status':{'$not_equals':'Inactive'}},returnFilter[0]]});}}
return returnFilter;}});});})(SUGAR.App);