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
({extendsFrom:'RecordlistView',fallbackFieldTemplate:'list',plugins:['ErrorDecoration','Editable','SugarLogic','Pagination','LinkedModel'],contextEvents:{"list:editall:fire":"toggleEdit","list:editrow:fire":"editClicked","list:unlinkrow:fire":"warnUnlink"},initialize:function(options){this.dataViewName=options.name||'subpanel-list';this._super("initialize",[options]);if(app.config.maxSubpanelResult){var options={limit:app.config.maxSubpanelResult};this.limit=options.limit;var collectionOptions=this.context.has('collectionOptions')?this.context.get('collectionOptions'):{};this.context.set('collectionOptions',_.extend(collectionOptions,options));}
this.rowTemplate=app.template.getView('recordlist.row');this.layout.on("hide",this.toggleList,this);this.listenTo(this.layout.layout,'filter:change',this.renderOnFilterChanged);this.listenTo(this.layout,'filter:record:linked',this.renderOnFilterChanged);app.routing.before("route",this.beforeRouteUnlink,this,true);$(window).on("beforeunload.unlink"+this.cid,_.bind(this.warnUnlinkOnRefresh,this));},renderOnFilterChanged:function(){this.collection.trigger('reset');this.render();},_initializeMetadata:function(){return _.extend({},app.metadata.getView(null,'subpanel-list',true),app.metadata.getView(this.options.module,'record-list',true),app.metadata.getView(this.options.module,'subpanel-list',true));},unlinkModel:function(){var self=this,model=this._modelToUnlink;model.destroy({showAlerts:{'process':true,'success':{messages:self.getUnlinkMessages(self._modelToUnlink).success}},relate:true,success:function(){var redirect=self._targetUrl!==self._currentUrl;self._modelToUnlink=null;self.collection.remove(model,{silent:redirect});if(redirect){self.unbindBeforeRouteUnlink();app.router.navigate(self._targetUrl,{trigger:true});return;}
self.collection.trigger('reset');self.render();}});},toggleList:function(show){this.$el[show?'show':'hide']();},beforeRouteUnlink:function(){if(this._modelToUnlink){this.warnUnlink(this._modelToUnlink);return false;}
return true;},getUnlinkMessages:function(model){var messages={};var name=Handlebars.Utils.escapeExpression(app.utils.getRecordName(model)).trim();var context=app.lang.get('LBL_MODULE_NAME_SINGULAR',model.module).toLowerCase()+' '+name;messages.confirmation=app.utils.formatString(app.lang.get('NTC_UNLINK_CONFIRMATION_FORMATTED'),[context]);messages.success=app.utils.formatString(app.lang.get('NTC_UNLINK_SUCCESS'),[context]);return messages;},warnUnlink:function(model){var self=this;this._modelToUnlink=model;self._targetUrl=Backbone.history.getFragment();if(self._targetUrl!==self._currentUrl){app.router.navigate(this._currentUrl,{trigger:false,replace:true});}
app.alert.show('unlink_confirmation',{level:'confirmation',messages:self.getUnlinkMessages(model).confirmation,onConfirm:_.bind(self.unlinkModel,self),onCancel:function(){self._modelToUnlink=null;}});},warnUnlinkOnRefresh:function(){if(this._modelToUnlink){return this.getUnlinkMessages(this._modelToUnlink).confirmation;}},unbindBeforeRouteUnlink:function(){app.routing.offBefore("route",this.beforeRouteUnlink,this);$(window).off("beforeunload.unlink"+this.cid);},_dispose:function(){this.unbindBeforeRouteUnlink();this._super('_dispose');}})