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
({extendsFrom:'FlexListView',initialize:function(options){this.plugins=_.union(this.plugins,['ListColumnEllipsis','ListRemoveLinks']);options.context.set('skipFetch',true);options.meta=options.meta||{};this.oneToMany=options.context.get('recLink')?app.data.canHaveMany(app.controller.context.get('module'),options.context.get('recLink')):false;if(this.oneToMany){options.meta.selection={type:'multi',isLinkAction:true};}else{options.meta.selection={type:'single',label:'LBL_LINK_SELECT',isLinkAction:true};}
this._super('initialize',[options]);this.events=_.extend({},this.events,{'click .search-and-select .single':'triggerCheck'});if(this.oneToMany){var pageComponent=this.layout.getComponent('mass-link');if(!pageComponent){pageComponent=app.view.createView({context:this.context,name:'mass-link',module:this.module,primary:false,layout:this.layout});this.layout.addComponent(pageComponent);}
pageComponent.render();}
this.initializeEvents();},triggerCheck:function(event){if(!($(event.target).is('a,i,input'))){if(this.oneToMany){var checkbox=$(event.currentTarget).find('input[name="check"]');checkbox[0].click();}else{var radioButton=$(event.currentTarget).find('.selection[type="radio"]');radioButton[0].click();}}},initializeEvents:function(){if(this.oneToMany){this.context.on('selection-list:link:multi',this._selectMultipleAndClose,this);this.context.on('selection-list:select',this._refreshList,this);}else{this.context.on('change:selection_model',this._selectAndClose,this);this.context.on('selection-list:select',this._selectAndCloseImmediately,this);}},_refreshList:function(model){this.context.reloadData({recursive:false,error:function(error){app.alert.show('server-error',{level:'error',messages:'ERR_GENERIC_SERVER_ERROR'});}});},_selectMultipleAndClose:function(){var selections=this.context.get('mass_collection');if(selections){this.layout.once('list:masslink:complete',this._closeDrawer,this);this.layout.trigger('list:masslink:fire');}},_closeDrawer:function(model,data,response){app.drawer.close();var context=this.options.context.get('recContext'),view=this.options.context.get('recView'),collectionOptions=context.get('collectionOptions')||{};if(context.has('parentModel')){var parentModel=context.get('parentModel'),syncedAttributes=parentModel.getSyncedAttributes(),updatedAttributes=_.reduce(data.record,function(memo,val,key){if(!_.isEqual(syncedAttributes[key],val)){memo[key]=val;}
return memo;},{});parentModel.set(updatedAttributes);parentModel.setSyncedAttributes(data.record);}
context.get('collection').resetPagination();context.resetLoadFlag();context.set('skipFetch',false);if(collectionOptions.limit){context.set('limit',collectionOptions.limit);}
context.loadData({success:function(){view.layout.trigger('filter:record:linked');},error:function(error){app.alert.show('server-error',{level:'error',messages:'ERR_GENERIC_SERVER_ERROR'});}});},_selectAndClose:function(context,selectionModel){if(selectionModel){this.context.unset('selection_model',{silent:true});app.drawer.close(this._getModelAttributes(selectionModel));}},_selectAndCloseImmediately:function(model){if(model){app.drawer.closeImmediately(this._getModelAttributes(model));}},_getModelAttributes:function(model){var attributes={id:model.id,value:model.get('name')};_.each(model.attributes,function(value,field){if(app.acl.hasAccessToModel('view',model,field)){attributes[field]=attributes[field]||model.get(field);}},this);return attributes;},addActions:function(){this._super('addActions');if(this.meta.showPreview!==false){this.rightColumns.push({type:'preview-button',css_class:'btn',tooltip:'LBL_PREVIEW',event:'list:preview:fire',icon:'icon-eye-open'});}else{this.rightColumns.push({});}}})