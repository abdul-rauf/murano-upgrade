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
(function(app){app.events.on('app:init',function(){app.plugins.register('FieldDuplicate',['field'],{_duplicateBeanId:null,_duplicateBeanModule:null,duplicateFromModel:function(id,module){this._duplicateBeanId=id;this._duplicateBeanModule=module;},_onFieldDuplicate:function(model){var id=null,module=null;if(model instanceof Backbone.Model){id=model.get('id');module=model.module;}
this.duplicateFromModel((this.model&&this.model.get('id')===id)?null:id,(this.module&&this.module===module)?null:module);if(_.isFunction(this.onFieldDuplicate)){this.onFieldDuplicate.call(this,model);}},_beforeFieldDuplicate:function(params){if(_.isFunction(this.beforeFieldDuplicate)){return this.beforeFieldDuplicate.call(this,params);}
return true;},_formatFieldForDuplicate:function(){if(!this.disposed&&_.isFunction(this.formatFieldForDuplicate)){this.formatFieldForDuplicate.call(this);this.render();}},_unformatFieldForDuplicate:function(){if(_.isFunction(this.unformatFieldForDuplicate)){this.unformatFieldForDuplicate.call(this);}},onAttach:function(component,plugin){this.on('init',function(){if(this.model){this.model.on('change:'+this.name,function(){this._onFieldDuplicate();},this);this.model.on('duplicate:field',this._onFieldDuplicate,this);this.model.on('duplicate:field:'+this.name,this._onFieldDuplicate,this);this.model.on('data:sync:start',function(method,options){if(!_.isNull(this._duplicateBeanId)&&(method=='update'||method=='create')){options.params=options.params||{};options.params[this.name+'_duplicateBeanId']=this._duplicateBeanId;}},this);this.model.on('duplicate:field:prepare:save',function(model){if(this.model.get(this.name)){model[this.name+'_duplicateBeanId']=this._duplicateBeanId;}},this);this.model.on('duplicate:format:field',this._formatFieldForDuplicate,this);this.model.on('duplicate:unformat:field',this._unformatFieldForDuplicate,this);}
if(this.view){this.view.before('duplicate:field',this._beforeFieldDuplicate,{},this);}});},onDetach:function(component,plugin){if(this.view){this.view.offBefore('duplicate:field');}}});});})(SUGAR.App);