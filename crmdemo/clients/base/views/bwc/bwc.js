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
({className:'bwc-frame',moduleRegex:new RegExp('module=([^&]*)'),idRegex:new RegExp('record=([^&]*)'),actionRegex:new RegExp('action=([^&]*)'),plugins:['Editable','LinkedModel'],warnEnabledBwcActions:['editview','config'],url:'',_currentUrl:'',initialize:function(options){var url=options.context.get('url');if(url&&(url.search(/module=Home.*action=index/)>-1||url.search(/action=index.*module=Home/)>-1)){app.router.navigate('#Home',{trigger:true});return;}
app.events.on("api:refreshtoken:success",this._refreshSession,this);app.view.View.prototype.initialize.call(this,options);this.bwcModel=app.data.createBean('bwc');app.routing.before('route',this.beforeRoute,null,this);},hasUnsavedChanges:function(){var bwcWindow=this.$('iframe').get(0).contentWindow;if(_.isEmpty(this.bwcModel.attributes)||_.isUndefined(bwcWindow.EditView)||$(bwcWindow.EditView).data('disablebwchaschanged')){return false;}
if(!_.isUndefined(bwcWindow.asyncLoading)&&bwcWindow.asyncLoading){return false;}
var newAttributes=this.serializeObject(bwcWindow.EditView);return!_.isEmpty(this.bwcModel.changedAttributes(newAttributes));},serializeObject:function(theForm){var formArray=$(theForm).serializeArray();return _.reduce(formArray,function(acc,field){acc[field.name]=field.value;return acc;},{});},_render:function(){if(this.module==='Administration'&&!app.acl.hasAccessToAny('admin')&&!app.acl.hasAccessToAny('developer')){app.logger.info('Current user does not have access to this module view. name: '+
this.name+' module:'+this.module);app.error.handleRenderError(this,'view_render_denied');app.router.navigate('#Home',{trigger:true});return;}
app.view.View.prototype._render.call(this);return this;},_renderHtml:function(){var self=this;this.url=app.utils.addIframeMark(this.context.get('url')||'index.php?module='+this.module+'&action=index');app.view.View.prototype._renderHtml.call(this);this.$('iframe').load(function(){self.url='index.php'+this.contentWindow.location.search;self._setCurrentUrl();if(this.contentWindow.$===undefined){return;}
$(this.contentWindow).one('beforeunload',_.bind(self.unbindDom,self));self._setModule(this.contentWindow);self._setBwcModel(this.contentWindow);self._setModel(this.contentWindow);self._rewriteLinksForSidecar(this.contentWindow);self._rewriteNewWindowLinks(this.contentWindow);self._cloneBodyClasses(this.contentWindow);$('html',this.contentWindow.document).on('click.bwc.sugarcrm',function(){app.bwc.trigger('clicked');});});},_cloneBodyClasses:function(contentWindow){contentWindow.$('html').addClass($('html').prop('class'));},_setModule:function(contentWindow){var module=this.moduleRegex.exec(contentWindow.location.search);module=(_.isArray(module))?module[1]:null;if(!module){if(contentWindow.$&&contentWindow.$('input[name="module"]')&&contentWindow.$('input[name="module"]').val()){module=contentWindow.$('input[name="module"]').val();}else{return;}}
if(module==='Import'){var importModule=/import_module=([^&]*)/.exec(contentWindow.location.search);if(!_.isNull(importModule)&&!_.isEmpty(importModule[1])){module=importModule[1];}else if(contentWindow.$&&contentWindow.$('input[name="import_module"]')&&contentWindow.$('input[name="import_module"]').val()){module=contentWindow.$('input[name="import_module"]').val();}}
var app=window.parent.SUGAR.App;app.controller.context.set('module',module);app.events.trigger('app:view:change',this.layout,{module:module});},_setBwcModel:function(contentWindow){var action=this.actionRegex.exec(contentWindow.location.search);action=(_.isArray(action))?action[1].toLowerCase():null;if(contentWindow.EditView){action='editview';}
var attributes={};if(_.contains(this.warnEnabledBwcActions,action)){attributes=this.serializeObject(contentWindow.EditView);}
this.resetBwcModel(attributes);},_setModel:function(contentWindow){var action=this.actionRegex.exec(contentWindow.location.search);action=(_.isArray(action))?action[1].toLowerCase():null;if(action!=='detailview'){return;}
var id=this.idRegex.exec(this._currentUrl);if(!_.isArray(id)){return;}
this.model.set('id',id[1]);this.model.module=this.context.get('module');this.model.fetch();},openCreateDrawer:function(module,link){var parentModel=this.context.get('model'),model=this.createLinkModel(parentModel,link),self=this;app.drawer.open({layout:'create-actions',context:{create:true,module:model.module,model:model}},function(context,model){if(!model){return;}
self.$('iframe').get(0).contentWindow.location.reload(true);});},openArchiveEmailDrawer:function(){var self=this,parentModel=this.context.get('model');app.drawer.open({layout:'archive-email',context:{create:true,module:'Emails',prepopulate:{related:parentModel}}},function(model){if(model){self.$('iframe').get(0).contentWindow.location.reload(true);}});},_setCurrentUrl:function(){this._currentUrl=app.utils.rmIframeMark('#bwc/'+this.url);window.parent.location.hash=this._currentUrl;},revertBwcModel:function(){var bwcWindow=this.$('iframe').get(0).contentWindow;var newAttributes=this.serializeObject(bwcWindow.EditView);this.resetBwcModel(newAttributes);},resetBwcModel:function(attr){this.bwcModel.clear({silent:true}).set(attr);},convertToSidecarUrl:function(href){var module=this.moduleRegex.exec(href),id=this.idRegex.exec(href),action=this.actionRegex.exec(href);module=(_.isArray(module))?module[1]:null;if(!module){return'';}
if(app.metadata.getModule(module).isBwcEnabled){href=href.replace(/^.*\//,'');return"bwc/"+href;}
id=(_.isArray(id))?id[1]:null;action=(_.isArray(action))?action[1]:'';if(action.toLowerCase()==='detailview'){action='';}
if(!id&&action.toLowerCase()==='editview'){action='create';}
return app.router.buildRoute(module,id,action);},convertToSidecarLink:function(elem){elem=$(elem);var baseUrl=app.config.siteUrl||window.location.pathname;var href=elem.attr('href');var module=this.moduleRegex.exec(href);var dataSidecarRewrite=elem.attr('data-sidecar-rewrite');var action=this.actionRegex.exec(href);if(!_.isArray(module)||_.isEmpty(module[1])||_.isUndefined(app.metadata.getModule(module[1]))||module[1]==="Administration"||href.indexOf("javascript:")===0||dataSidecarRewrite==='false'||(_.isArray(action)&&action[1]==='sugarpdf')){return;}
var sidecarUrl=this.convertToSidecarUrl(href);elem.attr('href',baseUrl+'#'+sidecarUrl);elem.data('sidecarProcessed',true);if(elem.attr('target')==='_blank'){return;}
app.logger.debug('Bind event in BWC view');elem.on('click.bwc.sugarcrm',function(e){if(e.button!==0||e.ctrlKey||e.metaKey){return;}
e.stopPropagation();parent.SUGAR.App.router.navigate(sidecarUrl,{trigger:true});return false;});app.accessibility.run(elem,'click');},rewriteLinks:function(){app.logger.warn('Possible memory leak on BWC code');var frame=this.$('iframe').get(0).contentWindow;this._rewriteLinksForSidecar(frame);this._rewriteNewWindowLinks(frame);},_rewriteLinksForSidecar:function(frame){var self=this;frame.$('a[href*="module="]').each(function(i,elem){self.convertToSidecarLink(elem);});},_rewriteNewWindowLinks:function(frame){var ieOrigin,baseUrl,$links=frame.$('a[target="_blank"]').not('[href^="http"]').not('[href*="entryPoint=download"]');if(!window.location.origin){ieOrigin=window.location.protocol+"//"+window.location.hostname+(window.location.port?':'+window.location.port:'');}
baseUrl=app.config.siteUrl||(window.location.origin||ieOrigin)+window.location.pathname;$links.each(function(i,elem){var $elem=$(elem);if($elem.data('sidecarProcessed')){return;}
$elem.attr('href',baseUrl+'#bwc/'+$elem.attr('href'));});},unbindDom:function(){var bwcWindow=this.$('iframe').get(0).contentWindow;if(!bwcWindow||bwcWindow.$===undefined){return;}
this.confirmMemLeak(bwcWindow.document);$('a',bwcWindow.document).off('.bwc.sugarcrm');$('html',bwcWindow.document).off('.bwc.sugarcrm');},confirmMemLeak:function(target){app.logger.debug(function(){var registered=_.reduce($('a',target),function(memo,el){var events=$._data(el,'events');return memo+_.where(_.flatten(events),{namespace:'bwc.sugarcrm'}).length;},0);return'Clear '+registered+' event(s) in `bwc.sugarcrm`.'});},beforeRoute:function(route){var bwcUrl=route&&route.args&&route.args[0];if(bwcUrl&&this._currentUrl.replace('#bwc/','')===bwcUrl){return;}
this.unbindDom();},_dispose:function(){app.events.off("api:refreshtoken:success",this._refreshSession,this);app.routing.offBefore('route',this.beforeRoute,this);if(this.bwcModel){this.bwcModel.off();this.bwcModel=null;}
app.view.View.prototype._dispose.call(this);},_refreshSession:function(){app.bwc.login();}})