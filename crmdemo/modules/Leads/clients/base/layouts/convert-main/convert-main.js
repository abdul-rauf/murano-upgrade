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
({initialize:function(options){this.convertPanels={};this.associatedModels={};this.dependentModules={};this.noAccessRequiredModules=[];app.view.Layout.prototype.initialize.call(this,options);this.initializePanels(this.meta.modules);this.context.on('lead:convert-panel:complete',this.handlePanelComplete,this);this.context.on('lead:convert-panel:reset',this.handlePanelReset,this);this.context.on('lead:convert:save',this.handleSave,this);this.before('render',this.checkRequiredAccess);},initializePanels:function(modulesMetadata){var moduleNumber=1;_.each(modulesMetadata,function(moduleMeta,key,modulesList){if(!app.acl.hasAccess('create',moduleMeta.module)){if(moduleMeta.required===true){this.noAccessRequiredModules.push(moduleMeta.module);}
delete modulesList[key];return;}
moduleMeta.moduleNumber=moduleNumber++;var view=app.view.createLayout({context:this.context,name:'convert-panel',layout:this,meta:moduleMeta,type:'convert-panel',platform:this.options.platform});view.$el.addClass('accordion-group');view.$el.data('module',moduleMeta.module);this.addComponent(view);this.convertPanels[moduleMeta.module]=view;if(moduleMeta.dependentModules){this.dependentModules[moduleMeta.module]=moduleMeta.dependentModules;}},this);},checkRequiredAccess:function(){if(this.noAccessRequiredModules.length>0){this.denyUserAccess(this.noAccessRequiredModules);return false;}
return true;},denyUserAccess:function(noAccessRequiredModules){var translatedModuleNames=[];_.each(noAccessRequiredModules,function(module){translatedModuleNames.push(this.getModuleSingular(module));},this);app.alert.show('convert_access_denied',{level:'error',messages:app.lang.get('LBL_CONVERT_ACCESS_DENIED',this.module,{requiredModulesMissing:translatedModuleNames.join(', ')})});app.drawer.close();},getModuleSingular:function(module){var modulePlural=app.lang.getAppListStrings("moduleList")[module]||module;return(app.lang.getAppListStrings("moduleListSingular")[module]||modulePlural);},_render:function(){app.view.Layout.prototype._render.call(this);this.$el.addClass('accordion');this.$el.attr('id','convert-accordion');this.$(".collapse").collapse({toggle:false,parent:'#convert-accordion'});this.$(".collapse").on('shown hidden',_.bind(this.handlePanelCollapseEvent,this));this.context.get('leadsModel').fetch({success:_.bind(function(model){if(this.context){this.context.trigger("lead:convert:populate",model);}},this)});},handlePanelCollapseEvent:function(event){if(event.target!==event.currentTarget){return;}
var module=$(event.currentTarget).data('module');this.context.trigger('lead:convert:'+module+':'+event.type);},handlePanelComplete:function(module,model){this.associatedModels[module]=model;this.handlePanelUpdate();this.context.trigger('lead:convert:'+module+':complete',module,model);},handlePanelReset:function(module){delete this.associatedModels[module];this.handlePanelUpdate();this.context.trigger('lead:convert:'+module+':reset',module);},handlePanelUpdate:function(){this.checkDependentModules();this.checkRequired();},checkDependentModules:function(){_.each(this.dependentModules,function(dependencies,dependentModuleName){var isEnabled=_.all(dependencies,function(module,moduleName){return(this.associatedModels[moduleName]);},this);this.context.trigger("lead:convert:"+dependentModuleName+":enable",isEnabled);},this);},checkRequired:function(){var showSave=_.all(this.meta.modules,function(module){if(module.required){if(!this.associatedModels[module.module]){return false;}}
return true;},this);this.context.trigger('lead:convert-save:toggle',showSave);},handleSave:function(){var convertModel,myURL;this.context.trigger('lead:convert-save:toggle',false);app.alert.show('processing_convert',{level:'process',title:app.lang.getAppString('LBL_SAVING')});convertModel=new Backbone.Model(_.extend({},{'modules':this.parseEditableFields(this.associatedModels)}));myURL=app.api.buildURL('Leads','convert',{id:this.context.get('leadsModel').id});_.each(this.convertPanels,function(view,module){if(view&&view.createView&&convertModel.get('modules')[module]){view.createView.model.trigger('duplicate:field:prepare:save',convertModel.get('modules')[module]);}},this);app.api.call('create',myURL,convertModel,{success:_.bind(this.uploadAssociatedRecordFiles,this),error:_.bind(this.convertError,this)});},parseEditableFields:function(models){var filteredModels={};_.each(models,function(associatedModel,associatedModule){filteredModels[associatedModule]=app.data.getEditableFields(associatedModel);},this);return filteredModels;},uploadAssociatedRecordFiles:function(convertResults){if(this.disposed)return;var modulesToProcess=_.keys(this.associatedModels).length,failureCount=0;var completeFn=_.bind(function(){modulesToProcess--;if(modulesToProcess===0){if(failureCount>0){this.convertWarning();}else{this.convertSuccess();}}},this);_.each(this.associatedModels,function(associatedModel,associatedModule){var moduleResult=_.find(convertResults.modules,function(result){return(associatedModule===result._module);},this);if(moduleResult&&_.isEmpty(associatedModel.get('id'))){associatedModel.set('id',moduleResult.id);app.file.checkFileFieldsAndProcessUpload(this.convertPanels[associatedModule].createView,{success:function(){completeFn();},error:function(){failureCount++;completeFn();}},{deleteIfFails:false},false);}else{completeFn();}},this);},convertSuccess:function(){this.convertComplete('success','LBL_CONVERTLEAD_SUCCESS',true);},convertWarning:function(){this.convertComplete('warning','LBL_CONVERTLEAD_FILE_WARN',true);},convertError:function(){this.convertComplete('error','LBL_CONVERTLEAD_ERROR',false);if(!this.disposed){this.context.trigger('lead:convert-save:toggle',true);}},convertComplete:function(level,message,doClose){var leadsModel=this.context.get('leadsModel');app.alert.dismiss('processing_convert');app.alert.show('convert_complete',{level:level,messages:app.lang.get(message,this.module,{leadName:leadsModel.get('first_name')+' '+leadsModel.get('last_name')}),autoClose:(level==='success')});if(!this.disposed&&doClose){this.context.trigger('lead:convert:exit');app.drawer.close();app.navigate(this.context,leadsModel,'record');}},_dispose:function(){this.$(".collapse").off();app.view.Layout.prototype._dispose.call(this);}})