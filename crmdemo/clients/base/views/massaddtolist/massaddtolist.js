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
({extendsFrom:'MassupdateView',addToListFieldName:'prospect_lists',listModule:'ProspectLists',massUpdateViewName:'massaddtolist-progress',className:'extend',initialize:function(options){var additionalEvents={};additionalEvents['click .btn[name=create_button]']='createAndSelectNewList';this.events=_.extend({},this.events,additionalEvents);this._super("initialize",[options]);},delegateListFireEvents:function(){this.layout.on("list:massaddtolist:fire",this.show,this);this.layout.on("list:massaction:hide",this.hide,this);},setMetadata:function(options){var moduleMetadata=app.metadata.getModule(options.module);if(!moduleMetadata){return;}
var addToListField=_.find(moduleMetadata.fields,function(field){return field.name===this.addToListFieldName;},this);if(addToListField){addToListField=app.utils.deepCopy(addToListField);addToListField.id_name=this.addToListFieldName+'_id';addToListField.name=this.addToListFieldName+'_name';addToListField.label=addToListField.label||addToListField.vname;addToListField.type='relate';addToListField.required=true;this.addToListField=addToListField;}},_render:function(){var result=this._super("_render");if(_.isUndefined(this.addToListField)){this.hide();}
return result;},setDefault:function(){this.defaultOption=this.addToListField;},getAttributes:function(){var attributes={};attributes[this.addToListFieldName]=[this.model.get(this.addToListField.id_name)];return attributes;},buildSaveSuccessMessages:function(massUpdateModel){var doneLabel='TPL_MASS_ADD_TO_LIST_SUCCESS',queuedLabel='TPL_MASS_ADD_TO_LIST_QUEUED',listName=this.model.get(this.addToListField.name),listId=this.model.get(this.addToListField.id_name),listUrl='#'+app.router.buildRoute(this.listModule,listId);return{done:app.lang.get(doneLabel,null,{listName:listName,listUrl:listUrl}),queued:app.lang.get(queuedLabel,null,{listName:listName,listUrl:listUrl})};},createAndSelectNewList:function(){app.drawer.open({layout:'create-nodupecheck',context:{create:true,module:this.listModule}},_.bind(this.selectNewlyCreatedList,this));},selectNewlyCreatedList:function(context,model){var relateField=this.getField('prospect_lists_name');if(relateField){model.value=model.get('name');relateField.setValue(model);}}})