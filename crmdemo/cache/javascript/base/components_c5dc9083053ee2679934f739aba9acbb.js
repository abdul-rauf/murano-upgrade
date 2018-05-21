(function(app) {
 SUGAR.jssource = {"fields": {
"base": {
"actiondropdown": {"controller": /*
     * Your installation or use of this SugarCRM file is subject to the applicable
     * terms available at
     * http://support.sugarcrm.com/06_Customer_Center/10_Master_Subscription_Agreements/.
     * If you do not agree to all of the applicable terms or do not have the
     * authority to bind the entity as an authorized representative, then do not
     * install or use this SugarCRM file.
     *
     * Copyright (C) SugarCRM Inc. All rights reserved.
     */
({
	// Actiondropdown Field (base) 
extendsFrom:'FieldsetField',fields:null,dropdownFields:null,actionDropDownTag:'[data-toggle=dropdown]',selectDropdownTag:'[data-toggle=dropdownmenu]',events:{'click [data-toggle=dropdown]':'renderDropdown','mousedown [data-toggle=dropdownmenu]':'renderDropdown'},plugins:['Tooltip'],showNoData:false,initialize:function(options){this._super('initialize',[options]);this.dropdownFields=[];var actiondropdownField=app.view._getController({type:'field',name:'actiondropdown'});this.setPlaceholder=_.throttle(actiondropdownField.prototype.setPlaceholder,100);app.shortcuts.register('Dropdown:More','m',function(){var $primaryDropdown=this.$('.btn-primary[data-toggle=dropdown]');if($primaryDropdown.is(':visible')&&!$primaryDropdown.hasClass('disabled')){$primaryDropdown.click();}},this);},renderDropdown:function(){if(_.isEmpty(this.dropdownFields)||this.isDisabled()){return;}
_.each(this.dropdownFields,function(field){this.view.fields[field.sfId]=field;field.setElement(this.$('span[sfuuid="'+field.sfId+'"]'));if(this.def['switch_on_click']&&!this.def['no_default_action']){field.$el.on('click.'+this.cid,_.bind(this.switchButton,this));}
field.render();},this);this.dropdownFields=null;if(!this.def['switch_on_click']||this.def['no_default_action']){return;}
var firstField=_.first(this.fields);firstField.$el.on('click.'+this.cid,_.bind(this.switchButton,this));app.accessibility.run(firstField.$el,'click');},switchButton:function(evt){var sfId=parseInt(this.$(evt.currentTarget).attr('sfuuid'),10),index=-1;_.some(this.fields,function(field,idx){if(field.sfId===sfId){index=idx;return true;}
return false;},this);if(index<=0){return;}
var firstField=this.fields.shift(),selectedField=this.fields.splice(index-1,1,firstField).pop();this.fields.splice(0,0,selectedField);this.setPlaceholder();},getPlaceholder:function(){if(this.options.viewName==='list-header')return app.view.Field.prototype.getPlaceholder.call(this);var caretCss='btn dropdown-toggle';if(this.def['no_default_action']){caretCss+=' btn-invisible';}else if(this.def['primary']){caretCss+=' btn-primary';}
var cssClass=[],container='',caretIcon=this.def['icon']?this.def['icon']:'icon-caret-down',caret='<a track="click:actiondropdown" class="'+caretCss+'" data-toggle="dropdown" href="javascript:void(0);" data-placement="bottom" rel="tooltip" title="'+app.lang.get('LBL_LISTVIEW_ACTIONS')+'">'+'<span class="'+caretIcon+'"></span>'+'</a>',dropdown='<ul data-menu="dropdown" class="dropdown-menu" role="menu">';var index=this.def['no_default_action']?1:0;_.each(this.def.buttons,function(fieldDef){var field=app.view.createField({def:fieldDef,view:this.view,viewName:this.options.viewName,model:this.model});this.fields.push(field);field.on('show hide',this.setPlaceholder,this);field.parent=this;if(fieldDef.type==='divider'){return;}
if(index==0){container+=field.getPlaceholder();}else{delete this.view.fields[field.sfId];this.dropdownFields.push(field);if(index==1){cssClass.push('actions','btn-group');container+=caret;container+=dropdown;}
container+='<li>'+field.getPlaceholder()+'</li>';}
index++;},this);var cssName=cssClass.join(' '),placeholder='<span sfuuid="'+this.sfId+'" class="'+cssName+'">'+container;placeholder+=(_.size(this.def.buttons)>0)?'</ul></span>':'</span>';return new Handlebars.SafeString(placeholder);},_render:function(){this._super('_render');this.setPlaceholder();this._updateCaret();},_updateCaret:function(){if(_.isEmpty(this.dropdownFields)){return;}
var caretEnabled=_.some(this.dropdownFields,function(field){if(field.hasAccess()){if(field.def.css_class.indexOf('disabled')>-1){return false;}else if(field.isDisabled()){return false;}else{return true;}}
return false;});if(!caretEnabled){this.$('.icon-caret-down').closest('a').addClass('disabled');}},setPlaceholder:function(){if(this.disposed){return;}
var index=this.def['no_default_action']?1:0,visibleEl=document.createDocumentFragment(),hiddenEl=document.createDocumentFragment();_.each(this.fields,function(field){var cssClass=_.unique(field.def.css_class?field.def.css_class.split(' '):[]),fieldPlaceholder=this.$('span[sfuuid="'+field.sfId+'"]');if(field.type==='divider'){if(index<=1){return;}
var dividerEl=document.createElement('li');dividerEl.className='divider';visibleEl.appendChild(dividerEl);return;}
if(field.isVisible()&&field.hasAccess()){cssClass=_.without(cssClass,'hide');fieldPlaceholder.toggleClass('hide',false);if(index==0){if(field.def.icon&&field.closestComponent('subpanel')){field.setMode('small');}
cssClass.push('btn');field.getFieldElement().addClass('btn');if(this.def.primary){cssClass.push('btn-primary');field.getFieldElement().addClass('btn-primary');}
this.$el.prepend(fieldPlaceholder);}else{if(field._previousAction){field.setMode(field._previousAction);}
cssClass=_.without(cssClass,'btn','btn-primary');field.getFieldElement().removeClass('btn btn-primary');var dropdownEl=document.createElement('li');dropdownEl.appendChild(fieldPlaceholder.get(0));visibleEl.appendChild(dropdownEl);}
index++;}else{cssClass.push('hide');fieldPlaceholder.toggleClass('hide',true);hiddenEl.appendChild(fieldPlaceholder.get(0));}
cssClass=_.unique(cssClass);field.def.css_class=cssClass.join(' ');},this);if(index<=1){this.$(this.actionDropDownTag).hide();this.$el.removeClass('btn-group');}else{this.$(this.actionDropDownTag).show();this.$el.addClass('btn-group');}
this.$('[data-menu=dropdown]').children('li').remove();this.$('[data-menu=dropdown]').append(visibleEl);this.$el.append(hiddenEl);var firstButton=_.first(this.fields);if(firstButton&&!firstButton.isVisible()){this.renderDropdown();}},setDisabled:function(disable){this._super('setDisabled',[disable]);disable=_.isUndefined(disable)?true:disable;if(disable){this.$(this.actionDropDownTag).addClass('disabled');}else{this.$(this.actionDropDownTag).removeClass('disabled');}},_dispose:function(){_.each(this.fields,function(field){field.$el.off('click.'+this.cid);field.off('show hide',this.setPlaceholder,this);},this);this.dropdownFields=null;this._super('_dispose');},isVisible:function(){return!this.getFieldElement().is(':hidden');},setMode:function(mode){this._super('setMode',[mode]);_.each(this.fields,function(field,index){if(index===0&&mode==='list'&&field.def.icon&&field.closestComponent('subpanel')){field.setMode('small');}else{field.setMode(mode);}},this);}}) },
"actionmenu": {"controller": /*
     * Your installation or use of this SugarCRM file is subject to the applicable
     * terms available at
     * http://support.sugarcrm.com/06_Customer_Center/10_Master_Subscription_Agreements/.
     * If you do not agree to all of the applicable terms or do not have the
     * authority to bind the entity as an authorized representative, then do not
     * install or use this SugarCRM file.
     *
     * Copyright (C) SugarCRM Inc. All rights reserved.
     */
({
	// Actionmenu Field (base) 
events:{'click .checkall':'checkAll','click input[name="check"]':'check'},plugins:['Tooltip'],fieldTag:'input[name=check]',fields:null,actionDropDownTag:'[data-toggle=dropdown]',initialize:function(options){this._super('initialize',[options]);var massCollection=this.context.get('mass_collection');if(!massCollection){var MassCollection=app.BeanCollection.extend({reset:function(models,options){this.filterDef=null;this.entire=false;Backbone.Collection.prototype.reset.call(this,models,options);}});massCollection=new MassCollection();this.context.set('mass_collection',massCollection);}
this.def.disable_select_all_alert=!!this.def.disable_select_all_alert;this._initTemplates();if(this.options.viewName==='list-header'){app.shortcuts.register('SelectAll:Checkbox','ctrl+a',function(){if(!this.isDisabled()){this.$('.checkall:visible').click();}},this);app.shortcuts.register('SelectAll:Dropdown','m',function(){var $dropdown=this.$('[data-toggle=dropdown]');if($dropdown.is(':visible')&&!$dropdown.hasClass('disabled')){$dropdown.click();}},this);}},check:function(event){this.toggleSelect(this.$(this.fieldTag).is(':checked'));},checkAll:function(event){var checkbox=this.$(this.fieldTag);if(checkbox&&event.currentTarget===event.target){var isChecked=checkbox.is(':checked');checkbox.attr('checked',!isChecked);this.toggleSelect(!isChecked);}},toggleSelect:function(checked){var massCollection=this.context.get('mass_collection');if(!massCollection){return;}
if(checked){if(this.model.id){massCollection.add(this.model);}else{massCollection.reset(this.collection.models);massCollection.filterDef=this.collection.filterDef;}}else{if(this.model.id){if(massCollection.entire){massCollection.reset(this.collection.models);massCollection.remove(this.model);}else{massCollection.remove(this.model);}}else{massCollection.reset();}}},bindDataChange:function(){var massCollection=this.context.get('mass_collection');if(!massCollection){return;}
if(this.model.id){massCollection.on('add',function(model){if(this.model&&model.id===this.model.id){this.$(this.fieldTag).attr('checked',true);}},this);massCollection.on('remove',function(model){if(this.model&&model.id===this.model.id){this.$(this.fieldTag).attr('checked',false);}},this);massCollection.on('reset',function(){this.$(this.fieldTag).attr('checked',!!massCollection.get(this.model.id));},this);if(massCollection.get(this.model)||massCollection.entire){this.$(this.fieldTag).attr('checked',true);this.selected=true;}else{delete this.selected;}}else{if(this.collection){this.collection.on('reset',function(){if(massCollection.entire){massCollection.reset();}},this);this.collection.on('add',function(){if(massCollection.length<this.collection.length){this.$(this.fieldTag).attr('checked',false);this.view.layout.trigger('list:alert:hide');}},this);}
this.on('render',this.toggleSelectAll,this);massCollection.on('add',function(model){this.$(this.actionDropDownTag).removeClass('disabled');if(massCollection.length===this.collection.length){this.$(this.fieldTag).attr('checked',true);}
this.toggleSelectAll();},this);massCollection.on('remove reset',function(model){if(massCollection.length===0){this.$(this.actionDropDownTag).addClass('disabled');this.$(this.fieldTag).attr('checked',false);}else if(massCollection.length===this.collection.length){this.$(this.actionDropDownTag).removeClass('disabled');this.$(this.fieldTag).attr('checked',true);}
this.toggleSelectAll();},this);this.action_enabled=(massCollection.length>0);this.selected=(massCollection.entire);}},getTotalRecords:function(){var massCollection=this.context&&this.context.get('mass_collection'),filterDef,max_num,order,fields,params,url;if(!massCollection){return;}
filterDef=massCollection.filterDef||[];max_num=(this.def.isLinkAction&&app.config.maxRecordLinkFetchSize)?app.config.maxRecordLinkFetchSize:app.config.maxRecordFetchSize;order=this.context.get('collection').orderBy;if(!_.isArray(filterDef)){filterDef=[filterDef];}
fields=['id'];_.each(this.def.buttons,function(button){if(_.isArray(button.related_fields)){fields=_.union(fields,button.related_fields);}},this);params={fields:fields.join(','),max_num:max_num};if(order&&order.field){params.order_by=order.field+':'+order.direction;}
if(!_.isEmpty(filterDef)){params.filter=filterDef;}
url=app.api.buildURL(this.module,null,null,params);app.alert.show('totalrecord',{level:'process',title:app.lang.getAppString('LBL_LOADING'),autoClose:false});massCollection.fetched=false;massCollection.trigger('massupdate:estimate');app.api.call('read',url,null,{success:_.bind(function(data){if(this.disposed){return;}
app.alert.dismiss('totalrecord');this._processTotalRecords(data.records);this._alertTotalRecords(data.next_offset);},this)});},_processTotalRecords:function(collection){var massCollection=(this.context)?this.context.get('mass_collection'):null;if(!massCollection){return;}
massCollection.reset(collection);massCollection.entire=false;massCollection.fetched=true;massCollection.trigger('massupdate:estimate');},_alertTotalRecords:function(offset){var massCollection=this.context&&this.context.get('mass_collection');if(!massCollection){return;}
var allSelected=this._buildAlertForReset(massCollection,offset);this.view.layout.trigger('list:alert:show',allSelected);},toggleSelectAll:function(){var self=this,massCollection=this.context&&this.context.get('mass_collection');if(!massCollection){return;}
var showAlert=function(){var alert;if(self.collection.length===0){return;}
if(massCollection.length===self.collection.length){if(self.collection.next_offset>0){alert=self._buildAlertForEntire(massCollection);}else{alert=self._buildAlertForReset(massCollection);}}else if(massCollection.entire){alert=self._buildAlertForReset(massCollection);}
if(alert){self.view.layout.trigger('list:alert:show',alert);}else{self.view.layout.trigger('list:alert:hide');}};var setButtonsDisabled=function(fields){_.each(fields,function(field){if(field.def.minSelection||field.def.maxSelection){var min=field.def.minSelection||0,max=field.def.maxSelection||massCollection.length;if(massCollection.length<min||massCollection.length>max){field.setDisabled(true);}else{field.setDisabled(false);}}},self);};if(!this.def.disable_select_all_alert){showAlert();}
setButtonsDisabled(this.fields);},getPlaceholder:function(){var self=this,viewName=this.options.viewName||this.view.name;if(viewName==='list-header'&&!this.fields){this.fields=[];var actionMenu='<ul class="dropdown-menu" role="menu">';_.each(this.def.buttons,function(fieldDef){var field=app.view.createField({def:fieldDef,view:self.view,viewName:self.options.viewName,model:self.model});field.on('show hide',self.setPlaceholder,self);self.fields.push(field);field.parent=self;actionMenu+='<li>'+field.getPlaceholder()+'</li>';});actionMenu+='</ul>';self.actionPlaceHolder=new Handlebars.SafeString(actionMenu);var massCollection=this.context.get('mass_collection');massCollection.on('massupdate:estimate',this.onTotalEstimate,this);}
return this._super('getPlaceholder');},_loadTemplate:function(){this._super('_loadTemplate');if(this.view.action==='list'&&this.action==='edit'){this.template=app.template.empty;}},setPlaceholder:function(){var index=0;_.each(this.fields,function(field){var fieldPlaceholder=this.$('span[sfuuid="'+field.sfId+'"]');if(!field.isVisible()){fieldPlaceholder.toggleClass('hide',true);this.$el.append(fieldPlaceholder);}else{fieldPlaceholder.toggleClass('hide',false);this.$('.dropdown-menu').append($('<li>').append(fieldPlaceholder));index++;}},this);if(index<1){this.$('.dropdown-toggle').hide();}else{this.$('.dropdown-toggle').show();}
this.$('.dropdown-menu').children('li').each(function(index,el){if($(el).html()===''){$(el).remove();}});},onTotalEstimate:function(){var collection=this.context.get('mass_collection');this.setDropdownDisabled(!collection.fetched);},setDropdownDisabled:function(disable){this.$(this.actionDropDownTag).toggleClass('disabled',disable);},unbindData:function(){var collection=this.context.get('mass_collection');if(collection){var modelId=this.model.cid,cid=this.view.cid;collection.off(null,null,this);if(modelId){collection.off(null,null,modelId);}
if(cid){collection.off(null,null,cid);}}
if(this.collection){this.collection.off('reset',null,this);}
this.off('render',null,this);this._super('unbindData');},_dispose:function(){_.each(this.fields,function(field){field.parent=null;field.dispose();});this.fields=null;this._super('_dispose');},bindDomChange:function(){},unbindDom:function(){},_initTemplates:function(){this._selectedOffsetTpl=app.template.getView('list.selected-offset')||app.template.getView('list.selected-offset',this.module);this._selectAllLinkTpl=new Handlebars.SafeString('<button type="button" class="btn btn-link btn-inline" data-action="select-all">'+
app.lang.get('LBL_LISTVIEW_SELECT_ALL_RECORDS')+'</button>');this._selectAllTpl=app.template.compile(null,app.lang.get('TPL_LISTVIEW_SELECT_ALL_RECORDS'));return this;},_buildAlertForReset:function(massCollection,offset){var alert=$('<span></span>').append(this._selectedOffsetTpl({offset:offset,num:massCollection.length}));alert.find('[data-action=clear]').each(function(){var $el=$(this);$el.on('click',function(){massCollection.reset();});app.accessibility.run($el,'click');});return alert;},_buildAlertForEntire:function(massCollection){var self=this,alert=$('<span></span>').append(this._selectAllTpl({num:massCollection.length,link:this._selectAllLinkTpl}));alert.find('[data-action=select-all]').each(function(){var $el=$(this);$el.on('click',function(){massCollection.entire=true;self.getTotalRecords();$(this).off('click');});app.accessibility.run($el,'click');});return alert;}}) },
"attachments": {"controller": /*
     * Your installation or use of this SugarCRM file is subject to the applicable
     * terms available at
     * http://support.sugarcrm.com/06_Customer_Center/10_Master_Subscription_Agreements/.
     * If you do not agree to all of the applicable terms or do not have the
     * authority to bind the entity as an authorized representative, then do not
     * install or use this SugarCRM file.
     *
     * Copyright (C) SugarCRM Inc. All rights reserved.
     */
({
	// Attachments Field (base) 
fieldSelector:'.attachments',fileInputSelector:'.fileinput',$node:null,fileCounter:0,initialize:function(options){this.events=_.extend({},this.events,options.def.events,{'change .fileinput':'uploadFile'});app.view.Field.prototype.initialize.call(this,options);this.context.on('attachment:add',this.addAttachment,this);this.context.on('attachment:upload:remove',this.removeUploadedAttachment,this);this.context.on('attachments:remove-by-tag',this.removeAttachmentsByTag,this);this.context.on('attachments:remove-by-id',this.removeAttachmentsById,this);this.fileInputName='email_attachment';this.context.set('attachment_field_'+this.fileInputName,this.cid);this.clearUserAttachmentCache();},_keyHandler:function(e){if((event.keyCode==8||event.keyCode==46)){return true;}
return false;},_render:function(){var result=app.view.Field.prototype._render.call(this);this.$node=this.$(this.fieldSelector);this.$node.select2({allowClear:true,multiple:true,containerCssClass:'select2-choices-pills-close',containerCss:{'width':'100%'},tags:[],formatSelection:this.formatSelection,width:'off',escapeMarkup:function(m){return m;}});var inp=this.$el.find('.attachments.select2-container .select2-choices .select2-search-field .select2-input');if(inp&&inp[0]){$(inp[0]).keypress(this._keyHandler);$(inp[0]).keyup(this._keyHandler);$(inp[0]).keydown(this._keyHandler);}
this.refreshFromModel();return result;},addAttachment:function(attachment){this.addAttachmentToContainer(attachment);this.updateModel();},addAttachmentToContainer:function(attachment){var attachments=this.getDisplayedAttachments();if(attachment.replaceId){attachments=_.map(attachments,function(existing){return(existing.id==attachment.replaceId)?attachment:existing;});delete attachment.replaceId;}else{attachments.push(attachment);}
this.setDisplayedAttachments(attachments);},bindDomChange:function(){this.$node=this.$(this.fieldSelector);this.$node.on("select2-removing",_.bind(this.handleChange,this));this.$node.on("select2-opening",function(event){event.preventDefault();});},clearUserAttachmentCache:function(){var clearCacheUrl=app.api.buildURL('Mail/attachment',"cache");app.api.call('delete',clearCacheUrl);},formatSelection:function(attachment){var item='<span data-id="'+attachment.id+'">'+attachment.nameForDisplay+'</span>';if(attachment.showProgress){item+=' <i class="icon-refresh icon-spin"></i>';}
return item;},getDisplayedAttachments:function(){return this.$node.select2('data');},handleChange:function(event){if(event&&event.choice&&event.choice.id){this.removeAttachmentsById(event.choice.id);}
this.updateModel();this.notifyAttachmentsChanged();},notifyAttachmentRemoved:function(attachment){this.context.trigger('attachment:'+attachment.type+':remove',attachment);},notifyAttachmentsChanged:function(attachments){attachments=attachments||this.getDisplayedAttachments();this.context.trigger('attachments:updated',attachments);},refreshFromModel:function(){var attachments=[];if(this.model.has(this.name)){attachments=this.model.get(this.name);}
this.setDisplayedAttachments(attachments);},removeAttachmentsByIterator:function(iterator){var attachments=this.getDisplayedAttachments();attachments=_.reject(attachments,iterator);this.setDisplayedAttachments(attachments);this.updateModel();},removeAttachmentsById:function(id){this.removeAttachmentsByIterator(_.bind(function(attachment){if(attachment.id&&attachment.id===id){this.notifyAttachmentRemoved(attachment);return true;}},this));},removeAttachmentsByTag:function(tag){this.removeAttachmentsByIterator(_.bind(function(attachment){if(attachment.tag&&attachment.tag===tag){this.notifyAttachmentRemoved(attachment);return true;}},this));},removeUploadedAttachment:function(attachment){var deleteUrl=app.api.buildURL('Mail/attachment',"delete",{id:attachment.id});app.api.call('delete',deleteUrl);},setDisplayedAttachments:function(attachments){this.$node.select2('data',attachments);this.notifyAttachmentsChanged(attachments);},updateModel:function(){this.model.set(this.name,this.getDisplayedAttachments());},uploadFile:function(){var $fileInput=this.$(this.fileInputSelector),ajaxParams={files:$fileInput,iframe:true},fileId;if(_.isEmpty(this.getFileInputVal())){return;}
this.fileCounter++;fileId='upload'+this.fileCounter;this.addAttachmentToContainer({id:fileId,nameForDisplay:this.getFileInputVal().split('\\').pop(),showProgress:true});var myURL=app.api.buildURL('Mail/attachment',null,null,{format:'sugar-html-json'});app.api.call('create',myURL,null,{success:_.bind(function(result){if(this.disposed===true)return;if(!result.guid){this.handleUploadError(fileId);app.logger.error('Attachment Upload Failed - no guid returned from API');return;}
result.id=result.guid;delete result.guid;result.type='upload';result.replaceId=fileId;this.context.trigger('attachment:add',result);this.clearFileInputVal($fileInput);},this),error:_.bind(function(e){if(this.disposed===true)return;this.handleUploadError(fileId);app.logger.error('Attachment Upload Failed: '+e);},this)},ajaxParams);},getFileInputVal:function($fileInput){$fileInput=$fileInput||this.$(this.fileInputSelector);if(_.isUndefined($fileInput)){return null;}
return $fileInput.val();},clearFileInputVal:function($fileInput){$fileInput=$fileInput||this.$(this.fileInputSelector);if(!_.isUndefined($fileInput)){$fileInput.wrap('<form>').closest('form').get(0).reset();$fileInput.unwrap();}},handleUploadError:function(fileId){this.context.trigger('attachments:remove-by-id',fileId);app.alert.show('upload_error',{level:'error',messages:'LBL_EMAIL_ATTACHMENT_UPLOAD_FAILED'});},bindDataChange:$.noop,_dispose:function(){this.$node.select2('destroy');app.view.Field.prototype._dispose.call(this);}}) },
"avatar": {"controller": /*
     * Your installation or use of this SugarCRM file is subject to the applicable
     * terms available at
     * http://support.sugarcrm.com/06_Customer_Center/10_Master_Subscription_Agreements/.
     * If you do not agree to all of the applicable terms or do not have the
     * authority to bind the entity as an authorized representative, then do not
     * install or use this SugarCRM file.
     *
     * Copyright (C) SugarCRM Inc. All rights reserved.
     */
({
	// Avatar Field (base) 
extendsFrom:'ImageField',plugins:['File','FieldDuplicate','Tooltip'],MAPSIZECLASS:{'large':'label-module-lg','medium':'label-module-md','button':'label-module-btn','default':'','small':'label-module-sm','mini':'label-module-mini'},_render:function(){var template,className;this._super("_render");if(this.action!=='edit'||this.view.name==='merge-duplicates'){if(_.isEmpty(this.value)){className=_.isUndefined(this.MAPSIZECLASS[this.def.size])?this.MAPSIZECLASS['large']:this.MAPSIZECLASS[this.def.size];template=app.template.getField(this.type,'module-icon',this._getModuleName());if(template){this.$('.image_field').replaceWith(template({module:this._getModuleName(),labelSizeClass:className}));}}else{this.$('.image_field').addClass('image_rounded');}}
return this;},_getModuleName:function(){if(this.view.name==='history-summary'){return this.model.get('_module');}
return this.module;},_loadTemplate:function(){this.type='image';this._super("_loadTemplate");this.type=this.def.type;}}) },
"badge": {"controller": /*
     * Your installation or use of this SugarCRM file is subject to the applicable
     * terms available at
     * http://support.sugarcrm.com/06_Customer_Center/10_Master_Subscription_Agreements/.
     * If you do not agree to all of the applicable terms or do not have the
     * authority to bind the entity as an authorized representative, then do not
     * install or use this SugarCRM file.
     *
     * Copyright (C) SugarCRM Inc. All rights reserved.
     */
({
	// Badge Field (base) 
showNoData:false,initialize:function(options){options.def.readonly=true;app.view.Field.prototype.initialize.call(this,options);}}) },
"base": {"controller": /*
     * Your installation or use of this SugarCRM file is subject to the applicable
     * terms available at
     * http://support.sugarcrm.com/06_Customer_Center/10_Master_Subscription_Agreements/.
     * If you do not agree to all of the applicable terms or do not have the
     * authority to bind the entity as an authorized representative, then do not
     * install or use this SugarCRM file.
     *
     * Copyright (C) SugarCRM Inc. All rights reserved.
     */
({
	// Base Field (base) 
plugins:['EllipsisInline','Tooltip','MetadataEventDriven'],initialize:function(options){this.events=_.extend({},this.events,options.def.events);this._super('initialize',arguments);},_render:function(){var action='view';if(this.def.link&&this.def.route){action=this.def.route.action;}
if(!app.acl.hasAccessToModel(action,this.model)){this.def.link=false;}
if(this.def.link){this.href=this.buildHref();}
app.view.Field.prototype._render.call(this);},buildHref:function(){var defRoute=this.def.route?this.def.route:{},module=this.model.module||this.context.get('module');return'#'+app.router.buildRoute(module,this.model.id,defRoute.action,this.def.bwcLink);},unformat:function(value){return _.isString(value)?value.trim():value;}}) },
"bool": {"controller": /*
     * Your installation or use of this SugarCRM file is subject to the applicable
     * terms available at
     * http://support.sugarcrm.com/06_Customer_Center/10_Master_Subscription_Agreements/.
     * If you do not agree to all of the applicable terms or do not have the
     * authority to bind the entity as an authorized representative, then do not
     * install or use this SugarCRM file.
     *
     * Copyright (C) SugarCRM Inc. All rights reserved.
     */
({
	// Bool Field (base) 
select2fieldTag:'select',_render:function(){this._super('_render');this.$(this.select2fieldTag).select2({'minimumResultsForSearch':-1});},_getFallbackTemplate:function(viewName){if(viewName==='massupdate'){return'dropdown';}
return this._super('_getFallbackTemplate',[viewName]);},bindDomChange:function(){var $el=this.$(this.select2fieldTag);if(!$el.length){$el=this.$(this.fieldTag);}
$el.on('change',_.bind(function(){var value=$el.is(this.select2fieldTag)?$el.val():$el.prop('checked');this.model.set(this.name,this.unformat(value));},this));},bindDataChange:function(){if(!this.model){return;}
this.model.on('change:'+this.name,function(model,value){if(this.action==='massupdate'){this.$(this.select2fieldTag).val(this.format(value)?'1':'0');}else if(this.action==='edit'){this.$(this.fieldTag).prop('checked',this.format(value));}else{this.render();}},this);},unbindDom:function(){this.$(this.select2fieldTag).off();this._super('unbindDom');},unformat:function(value){if(_.isString(value)){value=value=='1';}
return value;},format:function(value){if(_.isString(value)){value=value=='1';}
return value;}}) },
"button": {"controller": /*
     * Your installation or use of this SugarCRM file is subject to the applicable
     * terms available at
     * http://support.sugarcrm.com/06_Customer_Center/10_Master_Subscription_Agreements/.
     * If you do not agree to all of the applicable terms or do not have the
     * authority to bind the entity as an authorized representative, then do not
     * install or use this SugarCRM file.
     *
     * Copyright (C) SugarCRM Inc. All rights reserved.
     */
({
	// Button Field (base) 
tagName:"span",fieldTag:"a",plugins:['Tooltip','MetadataEventDriven'],initialize:function(options){var self=this;this.events=_.extend({},this.events,options.def.events,{'click .disabled':'preventClick'});app.view.Field.prototype.initialize.call(this,options);this.before("render",function(){if(self.hasAccess()){this._show();return true;}
else{this.hide();return false;}});},_render:function(){this.fullRoute=_.isString(this.def.route)?this.def.route:null;app.view.Field.prototype._render.call(this);},getFieldElement:function(){return this.$(this.fieldTag);},setDisabled:function(disable){disable=_.isUndefined(disable)?true:disable;var orig_css=this.def.css_class||'';this.def.css_class=orig_css;var css_class=this.def.css_class.split(' ');if(disable){css_class.push('disabled');}else{css_class=_.without(css_class,'disabled');}
this.def.css_class=_.unique(_.compact(css_class)).join(' ');app.view.Field.prototype.setDisabled.call(this,disable);this.def.css_class=orig_css;},preventClick:function(evt){if(this.isDisabled()){return false;}},_show:function(){if(this.isHidden!==false){if(!this.triggerBefore("show")){return false;}
this.getFieldElement().removeClass("hide").show();this.isHidden=false;this.trigger('show');}},show:function(){if(this.hasAccess()){this._show();}else{this.isHidden=true;}},hide:function(){if(this.isHidden!==true){if(!this.triggerBefore("hide")){return false;}
this.getFieldElement().addClass("hide").hide();this.isHidden=true;this.trigger('hide');}},isVisible:function(){return!this.isHidden;},bindDomChange:function(){},bindDataChange:function(){},hasAccess:function(){var acl_module=this.def.acl_module,acl_action=this.def.acl_action;if(_.isBoolean(this.def.allow_bwc)&&!this.def.allow_bwc){var isBwc=app.metadata.getModule(acl_module||this.module).isBwcEnabled;if(isBwc){return false;}}
if(!acl_module){return app.acl.hasAccessToModel(acl_action,this.model,this);}else{return app.acl.hasAccess(acl_action,acl_module);}}}) },
"change-my-password": {"controller": /*
     * Your installation or use of this SugarCRM file is subject to the applicable
     * terms available at
     * http://support.sugarcrm.com/06_Customer_Center/10_Master_Subscription_Agreements/.
     * If you do not agree to all of the applicable terms or do not have the
     * authority to bind the entity as an authorized representative, then do not
     * install or use this SugarCRM file.
     *
     * Copyright (C) SugarCRM Inc. All rights reserved.
     */
({
	// Change-my-password Field (base) 
extendsFrom:'ChangePasswordField',fieldTag:'input',initialize:function(options){this._super("initialize",[options]);app.error.errorName2Keys['current_password']='ERR_PASSWORD_MISMATCH';app.error.errorName2Keys['new_password']='ERR_ENTER_NEW_PASSWORD';this.__extendModel();},__extendModel:function(){if(this.model&&!this.model._hasChangeMyPasswordModifs){var _proto=_.clone(this.model);this.model._hasChangeMyPasswordModifs=true;this.model._doValidateCurrentPassword=function(fields,errors,callback){var field=_.find(fields,function(field){return field.type==='change-my-password';});var current=this.get(field.name+'_current_password');var password=this.get(field.name+'_new_password'),confirmation=this.get(field.name+'_confirm_password');if(_.isEmpty(current)&&_.isEmpty(password)&&_.isEmpty(confirmation)){callback(null,fields,errors);return;}
if(!_.isEmpty(current)&&_.isEmpty(password)&&_.isEmpty(confirmation)){errors[field.name]=errors[field.name]||{};errors[field.name]['new_password']=true;callback(null,fields,errors);return;}
var alertOptions={title:app.lang.get("LBL_VALIDATING"),level:"process"};app.alert.show('validation',alertOptions);app.api.verifyPassword(current,{success:function(data){if(!data||!data.valid){errors[field.name]=errors[field.name]||{};errors[field.name]['current_password']=true;}},error:function(error){errors[field.name]=errors[field.name]||{};errors[field.name]['current_password']=true;},complete:function(){app.alert.dismiss('validation');callback(null,fields,errors);}});};this.model.addValidationTask('current_password',_.bind(this.model._doValidateCurrentPassword,this.model));this.model.revertAttributes=function(options){var attrs=_.clone(this.attributes);_.each(attrs,function(value,attr){if(attr.match('_current_password')){this.unset(attr);}},this);_proto.revertAttributes.call(this,options);};}},format:function(value){if(this.action==='edit'){this.currentPassword=this.model.get(this.name+'_current_password');value='';}else if(value===true){value='value_setvalue_set';}
return value;},decorateError:function(errors){var ftag=this.fieldTag;if(errors['current_password']){this.fieldTag='input[name=current_password]';app.view.Field.prototype.decorateError.call(this,{current_password:true});}
errors=_.omit(errors,'current_password');if(!_.isEmpty(errors)){this.fieldTag='input[name!=current_password]';app.view.Field.prototype.decorateError.call(this,errors);}
this.fieldTag=ftag;},clearErrorDecoration:function(){var self=this,ftag=this.fieldTag||'',$ftag=this.$(ftag);this.$('.add-on').remove();$ftag.each(function(index,el){var isWrapped=self.$(el).parent().hasClass('input-append');if(isWrapped){self.$(el).unwrap();}});this.$el.removeClass(ftag);this.$el.removeClass("error");this.$el.closest('.record-cell').removeClass("error");},}) },
"change-password": {"controller": /*
     * Your installation or use of this SugarCRM file is subject to the applicable
     * terms available at
     * http://support.sugarcrm.com/06_Customer_Center/10_Master_Subscription_Agreements/.
     * If you do not agree to all of the applicable terms or do not have the
     * authority to bind the entity as an authorized representative, then do not
     * install or use this SugarCRM file.
     *
     * Copyright (C) SugarCRM Inc. All rights reserved.
     */
({
	// Change-password Field (base) 
fieldTag:'input:not(:disabled)',events:{'click .togglePasswordFields':'togglePasswordFields'},initialize:function(options){app.view.Field.prototype.initialize.call(this,options);app.error.errorName2Keys['confirm_password']='ERR_REENTER_PASSWORDS';this._extendModel();},_extendModel:function(){if(this.model&&!this.model._hasChangePasswordModifs){var _proto=_.clone(this.model);this.model._hasChangePasswordModifs=true;this.model._doValidatePasswordConfirmation=function(fields,errors,callback){var changePasswordFields=_.filter(fields,function(field){return field.type==='change-password'||field.type==='change-my-password';});_.each(changePasswordFields,function(field){var password=this.get(field.name+'_new_password'),confirmation=this.get(field.name+'_confirm_password');if(password!==confirmation){errors[field.name]=errors[field.name]||{};errors[field.name]['confirm_password']=true;}else if(!errors[field.name]){this.unset(field.name+'_current_password');if(password!==''){this.unset(field.name+'_new_password');this.unset(field.name+'_confirm_password');this.set(field.name,password);}}},this);callback(null,fields,errors);};this.model.addValidationTask('password_confirmation',_.bind(this.model._doValidatePasswordConfirmation,this.model));this.model.revertAttributes=function(options){var attrs=_.clone(this.attributes);_.each(attrs,function(value,attr){if(attr.match('_new_password')||attr.match('_confirm_password')){this.unset(attr);}},this);_proto.revertAttributes.call(this,options);};}},_render:function(){if(this.model){this.newPassword=this.model.get(this.name+'_new_password');this.confirmPassword=this.model.get(this.name+'_confirm_password');this.showPasswordFields=this.showPasswordFields||!this.format(this.value)||!!(this.newPassword||this.confirmPassword);}
app.view.Field.prototype._render.call(this);this.showPasswordFields=false;this.$inputs=this.$(this.fieldTag);this.focusIndex=0;return this;},format:function(value){if(value===true)return'value_setvalue_set';return value;},unformat:function(value){if(value==='value_setvalue_set')return true;return value;},bindDomChange:function(){if(!(this.model instanceof Backbone.Model))return;var self=this;var el=this.$(self.fieldTag);el.on("change",function(){self.model.set(self.name+'_'+$(this).attr('name'),self.unformat($(this).val()));});el.on('focus',_.bind(this.handleFocus,this));},focus:function(){if(!this.$inputs.length){this.togglePasswordFields();}
if(this.focusIndex<0){this.focusIndex=0;}
if(this.focusIndex>=this.$inputs.length){this.focusIndex=-1;return false;}else{this.$inputs[this.focusIndex].focus();this.focusIndex++;return true;}},togglePasswordFields:function(event){this.showPasswordFields=true;this.render();}}) },
"chart": {"controller": /*
     * Your installation or use of this SugarCRM file is subject to the applicable
     * terms available at
     * http://support.sugarcrm.com/06_Customer_Center/10_Master_Subscription_Agreements/.
     * If you do not agree to all of the applicable terms or do not have the
     * authority to bind the entity as an authorized representative, then do not
     * install or use this SugarCRM file.
     *
     * Copyright (C) SugarCRM Inc. All rights reserved.
     */
({
	// Chart Field (base) 
chart_loaded:false,chart:null,chartType:'',bindDataChange:function(){this.model.on('change:rawChartData',function(model,newChartData){if(newChartData&&this.model.get('rawChartData').values.length>0){this.displayNoData(false);this.$('.nv-chart').attr('class','nv-chart nv-'+this.chartType);if(this.chart_loaded){this.$('#d3_'+this.cid+' svg').remove();}
this.generateD3Chart();}else{this.displayNoData(true);}},this);},generateD3Chart:function(){var chartId=this.cid,chartConfig=this.getChartConfig(),params={contentEl:chartId,minColumnWidth:120,margin:{top:0,right:10,bottom:10,left:10}},chart=new loadSugarChart(chartId,this.model.get('rawChartData'),[],chartConfig,params,_.bind(function(chart){this.chart=chart;this.chart_loaded=_.isFunction(chart.update);},this));app.events.on('preview:close',function(){if(_.isUndefined(app.drawer)||app.drawer.isActive(this.$el)){this.resize();}},this);this.view.layout.on('dashlet:collapse',function(collapse){if(!collapse){this.resize();}},this);this.view.layout.context.on('dashlet:draggable:stop',function(){this.resize();},this);$(window).on('resize.'+this.sfId,_.debounce(_.bind(this.resize,this),100));this.handlePrinting('on');this.$('.nv-chart').on('click',_.bind(function(e){this.chart.dispatch.chartClick();},this));},getChartConfig:function(){var chartConfig,chartData=this.model.get('rawChartData');switch(chartData.properties[0].type){case'pie chart':chartConfig={pieType:'basic',tip:'name',chartType:'pieChart'};break;case'line chart':chartConfig={lineType:'basic',tip:'name',chartType:'lineChart'};break;case'funnel chart 3D':chartConfig={funnelType:'basic',tip:'name',chartType:'funnelChart'};break;case'gauge chart':chartConfig={gaugeType:'basic',tip:'name',chartType:'gaugeChart'};break;case'stacked group by chart':chartConfig={orientation:'vertical',barType:'stacked',tip:'title',chartType:'barChart'};break;case'group by chart':chartConfig={orientation:'vertical',barType:'grouped',tip:'name',chartType:'barChart'};break;case'bar chart':chartConfig={orientation:'vertical',barType:'basic',tip:'label',chartType:'barChart'};break;case'horizontal group by chart':chartConfig={orientation:'horizontal',barType:'stacked',tip:'name',chartType:'barChart'};break;case'horizontal bar chart':case'horizontal':chartConfig={orientation:'horizontal',barType:'basic',tip:'label',chartType:'barChart'};break;default:chartConfig={orientation:'vertical',barType:'stacked',tip:'name',chartType:'barChart'};break;}
this.chartType=chartConfig.chartType;return chartConfig;},resize:function(){if(!this.chart_loaded){return;}
if(!this.view.$el||!this.view.$el.is(':visible')){return;}
this.chart.update();},handlePrinting:function(state){var self=this,mediaQueryList=window.matchMedia&&window.matchMedia('print'),pausecomp=function(millis){var date=new Date(),curDate=null;do{curDate=new Date();}while(curDate-date<millis);},printResize=function(mql){if(mql.matches){if(!_.isUndefined(self.chart.legend)&&_.isFunction(self.chart.legend.showAll)){self.chart.legend.showAll(true);}
self.chart.width(640).height(320).update();pausecomp(200);}else{browserResize();}},browserResize=function(){if(!_.isUndefined(self.chart.legend)&&_.isFunction(self.chart.legend.showAll)){self.chart.legend.showAll(false);}
self.chart.width(null).height(null).update();};if(state==='on'){if(window.matchMedia){mediaQueryList.addListener(printResize);}else if(window.attachEvent){window.attachEvent('onbeforeprint',printResize);window.attachEvent('onafterprint',browserResize);}else{window.onbeforeprint=printResize;window.onafterprint=browserResize;}}else{if(window.matchMedia){mediaQueryList.removeListener(printResize);}else if(window.detachEvent){window.detachEvent('onbeforeprint',printResize);window.detachEvent('onafterprint',browserResize);}else{window.onbeforeprint=null;window.onafterprint=null;}}},displayNoData:function(state){this.$('[data-content="chart"]').toggleClass('hide',state);this.$('[data-content="nodata"]').toggleClass('hide',!state);},_dispose:function(){if(this.view&&this.view.layout){this.view.layout.off(null,null,this);}
if(this.view&&this.view.layout){this.view.layout.context.off(null,null,this);}
this.$('.nv-chart').off('click');$(window).off('resize.'+this.sfId);this.handlePrinting('off');app.view.Field.prototype._dispose.call(this);}}) },
"closebutton": {"controller": /*
     * Your installation or use of this SugarCRM file is subject to the applicable
     * terms available at
     * http://support.sugarcrm.com/06_Customer_Center/10_Master_Subscription_Agreements/.
     * If you do not agree to all of the applicable terms or do not have the
     * authority to bind the entity as an authorized representative, then do not
     * install or use this SugarCRM file.
     *
     * Copyright (C) SugarCRM Inc. All rights reserved.
     */
({
	// Closebutton Field (base) 
extendsFrom:'RowactionField',closedStatus:'Completed',initialize:function(options){this.events=_.extend({},this.events,options.def.events,{'click [name="record-close"]':'closeClicked','click [name="record-close-new"]':'closeNewClicked'});this._super("initialize",[options]);this.type='rowaction';},closeClicked:function(event){this._close(false);},closeNewClicked:function(event){this._close(true);},hasAccess:function(){var acl=this._super("hasAccess");return acl&&this.model.get('status')!==this.closedStatus;},_close:function(createNew){var self=this;this.model.set('status',this.closedStatus);this.model.save({},{success:function(){self.showSuccessMessage();if(createNew){self.openDrawerToCreateNewRecord();}},error:function(error){self.showErrorMessage();app.logger.error('Record failed to close. '+error);self.model.revertAttributes();}});},openDrawerToCreateNewRecord:function(){var self=this,module=app.metadata.getModule(this.model.module),prefill=app.data.createBean(this.model.module);prefill.copy(this.model);if(module.fields.status&&module.fields.status['default']){prefill.set('status',module.fields.status['default']);}else{prefill.unset('status');}
app.drawer.open({layout:'create-actions',context:{create:true,model:prefill}},function(){if(self.parent){self.parent.render();}else{self.render();}});},showSuccessMessage:function(){},showErrorMessage:function(){app.alert.show('close_record_error',{level:'error',title:app.lang.getAppString('ERR_AJAX_LOAD')});},bindDataChange:function(){if(this.model){this.model.on("change:status",this.render,this);}}}) },
"copy": {"controller": /*
     * Your installation or use of this SugarCRM file is subject to the applicable
     * terms available at
     * http://support.sugarcrm.com/06_Customer_Center/10_Master_Subscription_Agreements/.
     * If you do not agree to all of the applicable terms or do not have the
     * authority to bind the entity as an authorized representative, then do not
     * install or use this SugarCRM file.
     *
     * Copyright (C) SugarCRM Inc. All rights reserved.
     */
({
	// Copy Field (base) 
'events':{'click input[type=checkbox]':'toggle','click button':'copyOnce'},_initialValues:null,_fields:null,_inSync:false,initialize:function(options){this._super('initialize',[options]);this._initialValues={};this._fields={};if(_.isUndefined(this.def.sync)){this.def.sync=true;}
this.before('render',function(){this.setDisabled(!this.hasAccess());return true;},this);},toggle:function(evt){this.sync($(evt.currentTarget).is(':checked'));},sync:function(enable){enable=this.hasAccess()&&(_.isUndefined(enable)||enable);if(this._inSync===enable){return;}
this._inSync=enable;if(!enable){this.syncCopy(false);this.restore();return;}
_.each(this.def.mapping,function(target,source){this.copy(source,target);var field=this.getField(target);if(!_.isUndefined(field)){field.setDisabled(true);}},this);this.syncCopy(true);},copyOnce:function(evt){_.each(this.def.mapping,function(target,source){this.copy(source,target);},this);},copy:function(from,to){if(!this.model.has(from)){return;}
if(_.isUndefined(this._initialValues[to])){this._initialValues[to]=this.model.get(to);}
if(app.acl.hasAccessToModel('edit',this.model,to)){this.model.set(to,this.model.get(from));}},restore:function(){_.each(this._initialValues,function(value,field){this.model.set(field,value);},this);_.each(this.def.mapping,function(target,source){var field=this.getField(target);if(!_.isUndefined(field)){field.setDisabled(false);}},this);this._initialValues={};},syncCopy:function(enable){if(!this.def.sync){return;}
if(!enable){this.model.off(null,this.copyChanged);return;}
var events=_.map(_.keys(this.def.mapping),function(field){return'change:'+field;});this.model.on(events.join(' '),this.copyChanged,this);},copyChanged:function(model,value){_.each(model.changedAttributes(),function(newValue,field){model.set(this.def.mapping[field],model.get(field));},this);},getField:function(name){if(_.isUndefined(this._fields[name])){this._fields[name]=_.find(this.view.fields,function(field){return field.name==name;});}
return this._fields[name];},unformat:function(value){return null;},format:function(value){if(_.isNull(value)){return this._inSync;}
return value;},bindDataChange:function(){if(this.model&&this.def.sync){var active=!_.isUndefined(this.def['default'])?this.def['default']:true;if(!active&&this.model.isNew()){return;}
var inSync=_.all(this.def.mapping,function(target,source){return this.model.get(source)===this.model.get(target);},this);this.sync(inSync);}},hasAccess:function(){return _.some(this.def.mapping||[],function(toField,fromField){return app.acl.hasAccessToModel('read',this.model,fromField)&&app.acl.hasAccessToModel('edit',this.model,toField);},this);}}) },
"currency": {"controller": /*
     * Your installation or use of this SugarCRM file is subject to the applicable
     * terms available at
     * http://support.sugarcrm.com/06_Customer_Center/10_Master_Subscription_Agreements/.
     * If you do not agree to all of the applicable terms or do not have the
     * authority to bind the entity as an authorized representative, then do not
     * install or use this SugarCRM file.
     *
     * Copyright (C) SugarCRM Inc. All rights reserved.
     */
({
	// Currency Field (base) 
'events':{'click':'updateCss'},transactionValue:'',_currencyField:null,hideCurrencyDropdown:false,_lastCurrencyId:null,plugins:['FieldDuplicate'],initialize:function(options){this._super('initialize',[options]);var currencyField=this.def.currency_field||'currency_id',currencyFieldValue,baseRateField,baseRateFieldValue;if(this.model.isNew()&&(!this.model.isCopy())){currencyFieldValue=app.user.getPreference('currency_id');this.model.set(currencyField,currencyFieldValue);baseRateField=this.def.base_rate_field||'base_rate';baseRateFieldValue=app.metadata.getCurrency(currencyFieldValue).conversion_rate;this.model.set(baseRateField,baseRateFieldValue);if(_.isFunction(this.model.setDefaultAttribute)){this.model.setDefaultAttribute(currencyField,currencyFieldValue);this.model.setDefaultAttribute(baseRateField,baseRateFieldValue);}}
this.hideCurrencyDropdown=this.view.action==='list';this._lastCurrencyId=this.model.get(currencyField);},_render:function(){if(this._currencyField){this._currencyField.dispose();this._currencyField=null;}
app.view.Field.prototype._render.call(this);if(this.hideCurrencyDropdown===false&&this.tplName==='edit'){this.getCurrencyField().setElement(this.$('span[sfuuid="'+this.currencySfId+'"]'));this.$el.find('div.select2-container').css('min-width','8px');this.getCurrencyField().render();}
return this;},bindDataChange:function(){this.model.on('change:'+this.name,this._valueChangeHandler,this);this.model.on('duplicate:field:'+this.name,this._valueChangeHandler,this);if(this.def.is_base_currency){return;}
var currencyField=this.def.currency_field||'currency_id';var baseRateField=this.def.base_rate_field||'base_rate';this.model.on('change:'+currencyField,function(model,currencyId,options){if(!currencyId||!this._lastCurrencyId){this._lastCurrencyId=currencyId;return;}
this.model.set(baseRateField,app.metadata.getCurrency(currencyId).conversion_rate);if(model.has(this.name)){var val=model.get(this.name);if(val===''){val=0;}
this.model.set(this.name,app.currency.convertAmount(val,this._lastCurrencyId,currencyId),{silent:true});var self=this;_.defer(function(){self.model.trigger('change:'+self.name,self.model,self.model.get(self.name));});}
this._lastCurrencyId=currencyId;},this);},_valueChangeHandler:function(model,value){if(this.action!='edit'){this.render();return;}
if(model.get('currency_id')!==this.model.get('currency_id')){value=app.currency.convertAmount(value,model.get('currency_id'),this.model.get('currency_id'));}
this.setCurrencyValue(value);},setCurrencyValue:function(value){this.$('[name='+this.name+']').val(app.utils.formatNumberLocale(value));},format:function(value){if(_.isNull(value)||_.isUndefined(value)||_.isNaN(value)){value='';}
if(this.tplName==='edit'){this.currencySfId=this.getCurrencyField().sfId;return app.utils.formatNumberLocale(value);}
var baseRate=this.model.get(this.def.base_rate_field||'base_rate');var transactionalCurrencyId=this.model.get(this.def.currency_field||'currency_id'),convertedCurrencyId=transactionalCurrencyId,origTransactionValue=value;this.transactionValue='';if(value===''){return value;}
if(this.def.is_base_currency){transactionalCurrencyId=convertedCurrencyId=app.currency.getBaseCurrencyId();}else{if(this.def.convertToBase&&transactionalCurrencyId!==app.currency.getBaseCurrencyId()){if(this.def.showTransactionalAmount){this.transactionValue=app.currency.formatAmountLocale(this.model.get(this.name)||0,transactionalCurrencyId);}
value=app.currency.convertWithRate(value,baseRate)||0;convertedCurrencyId=app.currency.getBaseCurrencyId();}}
if((this.def.is_base_currency||this.def.convertToBase)&&!this.def.skip_preferred_conversion&&app.user.get('preferences').currency_show_preferred){var userPreferredCurrencyId=app.user.getPreference('currency_id');if(userPreferredCurrencyId!==transactionalCurrencyId){convertedCurrencyId=userPreferredCurrencyId;value=app.currency.convertWithRate(value,'1.0',app.metadata.getCurrency(userPreferredCurrencyId).conversion_rate);}else{this.transactionValue='';convertedCurrencyId=transactionalCurrencyId;value=origTransactionValue;}}
return app.currency.formatAmountLocale(value,convertedCurrencyId);},unformat:function(value){var unformattedValue;if(this.tplName==='edit'){unformattedValue=app.utils.unformatNumberStringLocale(value);}else{unformattedValue=app.currency.unformatAmountLocale(value);}
if(_.isFinite(unformattedValue)&&this.def&&this.def.precision){unformattedValue=app.math.round(unformattedValue,this.def.precision,true);}
return _.isFinite(unformattedValue)?unformattedValue:value;},updateCss:function(){$('div.select2-drop.select2-drop-active').width('auto');},getCurrencyField:function(){if(!_.isNull(this._currencyField)){return this._currencyField;}
var currencyDef=this.model.fields[this.def.currency_field||'currency_id'];currencyDef.type='enum';currencyDef.options=app.currency.getCurrenciesSelector(Handlebars.compile('{{symbol}} ({{iso4217}})'));currencyDef.enum_width='100%';currencyDef.searchBarThreshold=this.def.searchBarThreshold||7;this._currencyField=app.view.createField({def:currencyDef,view:this.view,viewName:this.tplName,model:this.model});this._currencyField.defaultOnUndefined=false;return this._currencyField;},setMode:function(name){this._super('setMode',[name]);this.getCurrencyField().setMode(name);},dispose:function(){if(this._currencyField){this._currencyField.dispose();this._currencyField=null;}
app.view.Field.prototype.dispose.call(this);}}) },
"dashletaction": {"controller": /*
     * Your installation or use of this SugarCRM file is subject to the applicable
     * terms available at
     * http://support.sugarcrm.com/06_Customer_Center/10_Master_Subscription_Agreements/.
     * If you do not agree to all of the applicable terms or do not have the
     * authority to bind the entity as an authorized representative, then do not
     * install or use this SugarCRM file.
     *
     * Copyright (C) SugarCRM Inc. All rights reserved.
     */
({
	// Dashletaction Field (base) 
events:{'click [data-dashletaction]':'actionClicked'},extendsFrom:'ButtonField',actionClicked:function(evt){if(this.preventClick(evt)===false){return;}
var action=$(evt.currentTarget).data('dashletaction');this._runAction(evt,action);},_runAction:function(evt,action){if(!action){return;}
var dashlet=this.view.layout?_.first(this.view.layout._components):null;if(dashlet&&_.isFunction(dashlet[action])){dashlet[action](evt,this.def.params);}else if(_.isFunction(this.view[action])){this.view[action](evt,this.def.params);}}}) },
"date": {"controller": /*
     * Your installation or use of this SugarCRM file is subject to the applicable
     * terms available at
     * http://support.sugarcrm.com/06_Customer_Center/10_Master_Subscription_Agreements/.
     * If you do not agree to all of the applicable terms or do not have the
     * authority to bind the entity as an authorized representative, then do not
     * install or use this SugarCRM file.
     *
     * Copyright (C) SugarCRM Inc. All rights reserved.
     */
({
	// Date Field (base) 
plugins:['EllipsisInline','Tooltip'],fieldTag:'input[data-type=date]',events:{'hide':'handleHideDatePicker'},initialize:function(options){this._initPlugins();this._super('initialize',[options]);this._initEvents();this._initDefaultValue();this._initPlaceholderAttribute();},_initPlugins:function(){return this;},_initEvents:function(){return this;},_initDefaultValue:function(){if(!this.model.isNew()||this.model.get(this.name)||!this.def.display_default){return this;}
var value=app.date.parseDisplayDefault(this.def.display_default);if(!value){return this;}
value=this.unformat(app.date(value).format(app.date.convertFormat(this.getUserDateFormat())));this.model.set(this.name,value);this.model.setDefaultAttribute(this.name,value);return this;},_initPlaceholderAttribute:function(){var placeholder=app.date.toDatepickerFormat(this.getUserDateFormat());this.fieldPlaceholder=this.def.placeholder&&app.lang.get(this.def.placeholder,this.module,{format:placeholder})||placeholder;return this;},getUserDateFormat:function(){return app.user.getPreference('datepref');},_setupDatePicker:function(){var $field=this.$(this.fieldTag),userDateFormat=this.getUserDateFormat(),options={format:app.date.toDatepickerFormat(userDateFormat),languageDictionary:this._patchPickerMeta()};var appendToTarget=this._getAppendToTarget();if(appendToTarget){options['appendTo']=appendToTarget;}
$field.datepicker(options);},_getAppendToTarget:function(){if(this.$el.parents('div#drawers').length){return'div#drawers > .drawer:last';}
if(this.$el.parents('div#content').length){return'div#content .main-pane:first';}
return;},handleHideDatePicker:function(){var $field=this.$(this.fieldTag),value=this.unformat($field.val());if(!value){$field.val(value);}
this.model.set(this.name,value);},bindDomChange:function(){var $field=this.$(this.fieldTag);$field.on('focus',_.bind(this.handleFocus,this));$('.main-pane, .flex-list-view-content').on('scroll.'+this.cid,_.bind(function(){$field.datepicker('place');},this));},unbindDom:function(){this._super('unbindDom');$('.main-pane, .flex-list-view-content').off('scroll.'+this.cid);var $field=this.$(this.fieldTag),datePicker=$field.data('datepicker');if(datePicker&&!datePicker.hidden){$field.datepicker('hide');}},_patchPickerMeta:function(){var pickerMap=[],pickerMapKey,calMapIndex,mapLen,domCalKey,calProp,appListStrings,calendarPropsMap,i,filterIterator;appListStrings=app.metadata.getStrings('app_list_strings');filterIterator=function(v,k,l){return v[1]!=="";};calendarPropsMap=['dom_cal_day_long','dom_cal_day_short','dom_cal_month_long','dom_cal_month_short'];for(calMapIndex=0,mapLen=calendarPropsMap.length;calMapIndex<mapLen;calMapIndex++){domCalKey=calendarPropsMap[calMapIndex];calProp=appListStrings[domCalKey];if(!_.isUndefined(calProp)&&!_.isNull(calProp)){calProp=_.filter(calProp,filterIterator).map(function(prop){return prop[1];});calProp.push(calProp);}
switch(calMapIndex){case 0:pickerMapKey='day';break;case 1:pickerMapKey='daysShort';break;case 2:pickerMapKey='months';break;case 3:pickerMapKey='monthsShort';break;}
pickerMap[pickerMapKey]=calProp;}
return pickerMap;},format:function(value){if(!value){return value;}
value=app.date(value);if(!value.isValid()){return;}
return value.formatUser(true);},unformat:function(value){if(!value){return value;}
value=app.date(value,app.date.convertFormat(this.getUserDateFormat()),true);if(!value.isValid()){return;}
return value.formatServer(true);},_render:function(){this._super('_render');if(this.tplName!=='edit'&&this.tplName!=='massupdate'){return;}
this._setupDatePicker();},_dispose:function(){var $field=this.$(this.fieldTag);if($field.data('datepicker')){$(window).off('resize',$field.data('datepicker').place);}
this._super('_dispose');}}) },
"datetimecombo": {"controller": /*
     * Your installation or use of this SugarCRM file is subject to the applicable
     * terms available at
     * http://support.sugarcrm.com/06_Customer_Center/10_Master_Subscription_Agreements/.
     * If you do not agree to all of the applicable terms or do not have the
     * authority to bind the entity as an authorized representative, then do not
     * install or use this SugarCRM file.
     *
     * Copyright (C) SugarCRM Inc. All rights reserved.
     */
({
	// Datetimecombo Field (base) 
extendsFrom:'DateField',secondaryFieldTag:'input[data-type=time]',_initPlugins:function(){this._super('_initPlugins');this.plugins=_.union(this.plugins,['FieldDuplicate']);return this;},_initEvents:function(){this._super('_initEvents');_.extend(this.events,{'click [data-action="show-timepicker"]':'showTimePicker'});return this;},_initDefaultValue:function(){if(!this.model.isNew()||this.model.get(this.name)||!this.def.display_default){return this;}
var value=app.date.parseDisplayDefault(this.def.display_default);if(!value){return this;}
value=this.unformat(app.date(value).format(app.date.convertFormat(this.getUserDateTimeFormat())));this.model.set(this.name,value);this.model.setDefaultAttribute(this.name,value);return this;},_initPlaceholderAttribute:function(){this._super('_initPlaceholderAttribute');var placeholder=this.getTimePlaceHolder(this.getUserTimeFormat());this.secondaryFieldPlaceholder=this.def.placeholder&&app.lang.get(this.def.placeholder,this.module,{format:placeholder})||placeholder;return this;},showTimePicker:function(){this.$(this.secondaryFieldTag)[0].focus();},getUserTimeFormat:function(){return app.user.getPreference('timepref');},getUserDateTimeFormat:function(){return this.getUserDateFormat()+' '+this.getUserTimeFormat();},getTimePlaceHolder:function(format){var map={'H':'hh','h':'hh','i':'mm','a':'','A':''};return format.replace(/[HhiaA]/g,function(s){return map[s];});},_setupTimePicker:function(){var $field=this.$(this.secondaryFieldTag);$field.timepicker({timeFormat:this.getUserTimeFormat(),scrollDefaultNow:true,step:15,className:'prevent-mousedown',appendTo:this.view.$el});},handleDateTimeChanges:function(d,t){if(this.model.get(this.name)&&(!d||!t)){return'';}
var now=app.date();d=d||(t&&now.format(app.date.convertFormat(this.getUserDateFormat())));t=t||(d&&now.format(app.date.convertFormat(this.getUserTimeFormat())));return(d+' '+t).trim();},handleHideDatePicker:function(){var t=this.$(this.secondaryFieldTag).val(),d=this.$(this.fieldTag).val(),datetime=this.unformat(this.handleDateTimeChanges(d,t));this.model.set(this.name,datetime);},bindDomChange:function(){this._super('bindDomChange');var $dateField=this.$(this.fieldTag),$timeField=this.$(this.secondaryFieldTag);$timeField.timepicker().on({change:_.bind(function(){var t=$timeField.val().trim(),datetime='';if(t){var d=$dateField.val();datetime=this.unformat(this.handleDateTimeChanges(d,t));}
this.model.set(this.name,datetime);},this)});},unbindDom:function(){this._super('unbindDom');this.$(this.secondaryFieldTag).off();},bindDataChange:function(){if(!this.model){return;}
this.model.on('change:'+this.name,function(model,value){if(this.action!=='edit'&&this.action!=='massupdate'){this.render();return;}
value=this.format(value)||{'date':'','time':''};this.$(this.fieldTag).val(value['date']);this.$(this.secondaryFieldTag).val(value['time']);},this);},format:function(value){if(!value){return value;}
value=app.date(value);if(!value.isValid()){return;}
if(this.action==='edit'||this.action==='massupdate'){value={'date':value.format(app.date.convertFormat(this.getUserDateFormat())),'time':value.format(app.date.convertFormat(this.getUserTimeFormat()))};}else{value=value.formatUser(false);}
return value;},unformat:function(value){if(!value){return value;}
value=app.date(value,app.date.convertFormat(this.getUserDateTimeFormat()),true);if(!value.isValid()){return;}
return value.format();},decorateError:function(errors){var ftag=this.fieldTag||'',$ftag=this.$(ftag),errorMessages=[],$tooltip;this.$el.closest('.record-cell').addClass('error');this.$el.addClass('error');if(_.isString(errors)){errorMessages.push(errors);}else{_.each(errors,function(errorContext,errorName){errorMessages.push(app.error.getErrorString(errorName,errorContext));});}
$ftag.parent().addClass('error');$tooltip=[$(this.exclamationMarkTemplate(errorMessages)),$(this.exclamationMarkTemplate(errorMessages))];var self=this;$ftag.parent().children('input').each(function(index){$(this).after($tooltip[index]);self.createErrorTooltips($tooltip[index]);});},_render:function(){this._super('_render');if(this.action!=='edit'&&this.action!=='massupdate'){return;}
this._setupTimePicker();},_dispose:function(){if(this.$(this.secondaryFieldTag).timepicker){this.$(this.secondaryFieldTag).timepicker('remove');}
this._super('_dispose');}}) },
"dnbenum": {"controller": /*
     * Your installation or use of this SugarCRM file is subject to the applicable
     * terms available at
     * http://support.sugarcrm.com/06_Customer_Center/10_Master_Subscription_Agreements/.
     * If you do not agree to all of the applicable terms or do not have the
     * authority to bind the entity as an authorized representative, then do not
     * install or use this SugarCRM file.
     *
     * Copyright (C) SugarCRM Inc. All rights reserved.
     */
({
	// Dnbenum Field (base) 
extendsFrom:'EnumField',initialize:function(options){this._super('initialize',[options]);if(this.def&&this.def.options){this.items=app.lang.get(this.def.options,'Connectors');}}}) },
"editablelistbutton": {"controller": /*
     * Your installation or use of this SugarCRM file is subject to the applicable
     * terms available at
     * http://support.sugarcrm.com/06_Customer_Center/10_Master_Subscription_Agreements/.
     * If you do not agree to all of the applicable terms or do not have the
     * authority to bind the entity as an authorized representative, then do not
     * install or use this SugarCRM file.
     *
     * Copyright (C) SugarCRM Inc. All rights reserved.
     */
({
	// Editablelistbutton Field (base) 
events:{'click [name=inline-save]':'saveClicked','click [name=inline-cancel]':'cancelClicked'},extendsFrom:'ButtonField',initialize:function(options){this._super("initialize",[options]);if(this.name==='inline-save'){this.model.off("change",null,this);this.model.on("change",function(){this.changed=true;},this);}},_loadTemplate:function(){app.view.Field.prototype._loadTemplate.call(this);if(this.view.action==='list'&&_.indexOf(['edit','disabled'],this.action)>=0){this.template=app.template.getField('button','edit',this.module,'edit');}else{this.template=app.template.empty;}},_validationComplete:function(isValid){if(!isValid){this.setDisabled(false);return;}
if(!this.changed){this.cancelEdit();return;}
var self=this,successCallback=function(){self._save();};async.forEachSeries(this.view.rowFields[this.model.id],function(view,callback){app.file.checkFileFieldsAndProcessUpload(view,{success:function(response){if(response.record&&response.record.date_modified){self.model.set('date_modified',response.record.date_modified);}
callback.call();}},{deleteIfFails:false},true);},successCallback);},_save:function(){var self=this,successCallback=function(model){self.changed=false;self.view.toggleRow(model.id,false);self._refreshListView();},options={success:successCallback,error:function(error){if(error.status===409){app.utils.resolve409Conflict(error,self.model,function(model,isDatabaseData){if(model){if(isDatabaseData){successCallback(model);}else{self._save();}}});}},complete:function(){if(self.model.get('_unlinked')){self.collection.remove(self.model,{silent:true});self.collection.trigger('reset');self.view.render();}else{self.setDisabled(false);}},lastModified:self.model.get('date_modified'),showAlerts:{'process':true,'success':{messages:app.lang.get('LBL_RECORD_SAVED',self.module)}},relate:this.model.link?true:false};options=_.extend({params:{fields:this.context.get("fields")}},options,this.getCustomSaveOptions(options));this.model.save({},options);},getCustomSaveOptions:function(options){return{};},saveModel:function(){this.setDisabled(true);var fieldsToValidate=this.view.getFields(this.module,this.model);this.model.doValidate(fieldsToValidate,_.bind(this._validationComplete,this));},cancelEdit:function(){if(this.isDisabled()){this.setDisabled(false);}
this.changed=false;this.model.revertAttributes();this.view.clearValidationErrors();this.view.toggleRow(this.model.id,false);if(this.context.parent){this.context.parent.trigger('editablelist:cancel',this.model);}},saveClicked:function(evt){if(!$(evt.currentTarget).hasClass('disabled')){this.saveModel();}},cancelClicked:function(evt){this.cancelEdit();},_refreshListView:function(){var filterPanelLayout=this.view;while(filterPanelLayout&&filterPanelLayout.name!=='filterpanel'){filterPanelLayout=filterPanelLayout.layout;}
if(filterPanelLayout&&!filterPanelLayout.disposed&&this.collection){filterPanelLayout.applyLastFilter(this.collection);}}}) },
"email": {"controller": /*
     * Your installation or use of this SugarCRM file is subject to the applicable
     * terms available at
     * http://support.sugarcrm.com/06_Customer_Center/10_Master_Subscription_Agreements/.
     * If you do not agree to all of the applicable terms or do not have the
     * authority to bind the entity as an authorized representative, then do not
     * install or use this SugarCRM file.
     *
     * Copyright (C) SugarCRM Inc. All rights reserved.
     */
({
	// Email Field (base) 
events:{'change .existingAddress':'updateExistingAddress','click  .btn-edit':'toggleExistingAddressProperty','click  .removeEmail':'removeExistingAddress','click  .addEmail':'addNewAddress','change .newEmail':'addNewAddress'},_flag2Deco:{primary_address:{lbl:"LBL_EMAIL_PRIMARY",cl:"primary"},opt_out:{lbl:"LBL_EMAIL_OPT_OUT",cl:"opted-out"},invalid_email:{lbl:"LBL_EMAIL_INVALID",cl:"invalid"}},plugins:['Tooltip','ListEditable','EmailClientLaunch'],initialize:function(options){options=options||{};options.def=options.def||{};if(_.isUndefined(options.def.emailLink)){options.def.emailLink=true;}
if(options.model&&options.model.fields&&options.model.fields.email1&&options.model.fields.email1.required){options.def.required=options.model.fields.email1.required;}
if(options.view.action==='filter-rows'){options.viewName='filter-rows-edit';}
this._super('initialize',[options]);this.addEmailOptions({related:this.model});},bindDataChange:function(){this.model.on('change:'+this.name,function(){if(this.action!=='edit'){this.render();}},this);},_render:function(){var emailsHtml='';this._super("_render");if(this.tplName==='edit'){_.each(this.value,function(email){emailsHtml+=this._buildEmailFieldHtml(email);},this);this.$el.prepend(emailsHtml);}},_buildEmailFieldHtml:function(email){var editEmailFieldTemplate=app.template.getField('email','edit-email-field'),emails=this.model.get(this.name),index=_.indexOf(emails,email);return editEmailFieldTemplate({max_length:this.def.len,index:index===-1?emails.length-1:index,email_address:email.email_address,primary_address:email.primary_address,opt_out:email.opt_out,invalid_email:email.invalid_email});},addNewAddress:function(evt){if(!evt)return;var email=this.$(evt.currentTarget).val()||this.$('.newEmail').val(),currentValue,emailFieldHtml,$newEmailField;email=$.trim(email);if((email!=='')&&(this._addNewAddressToModel(email))){currentValue=this.model.get(this.name);emailFieldHtml=this._buildEmailFieldHtml({email_address:email,primary_address:currentValue&&(currentValue.length===1),opt_out:false,invalid_email:false});$newEmailField=this._getNewEmailField().closest('.email').before(emailFieldHtml);this.addPluginTooltips($newEmailField.prev());if(this.def.required&&this._shouldRenderRequiredPlaceholder()){var label=app.lang.get('LBL_REQUIRED_FIELD',this.module),el=this.$(this.fieldTag).last(),placeholder=el.prop('placeholder').replace('('+label+') ','');el.prop('placeholder',placeholder.trim()).removeClass('required');}}
this._clearNewAddressField();},updateExistingAddress:function(evt){if(!evt)return;var $inputs=this.$('.existingAddress'),$input=this.$(evt.currentTarget),index=$inputs.index($input),newEmail=$input.val(),primaryRemoved;newEmail=$.trim(newEmail);if(newEmail===''){primaryRemoved=this._removeExistingAddressInModel(index);$input.closest('.email').remove();if(primaryRemoved){if(this.view&&this.view.action==='list'){var addresses=this.model.get(this.name)||[];var primaryAddress=_.filter(addresses,function(address){if(address.primary_address){return true;}});if(primaryAddress[0]&&primaryAddress[0].email_address){app.alert.show('list_delete_email_info',{level:'info',autoClose:true,messages:app.lang.get('LBL_LIST_REMOVE_EMAIL_INFO')});$input.val(primaryAddress[0].email_address);}}
this.$('[data-emailproperty=primary_address]').first().addClass('active');}}else{this._updateExistingAddressInModel(index,newEmail);}},removeExistingAddress:function(evt){if(!evt)return;var $deleteButtons=this.$('.removeEmail'),$deleteButton=this.$(evt.currentTarget),index=$deleteButtons.index($deleteButton),primaryRemoved,$removeThisField;primaryRemoved=this._removeExistingAddressInModel(index);$removeThisField=$deleteButton.closest('.email');this.removePluginTooltips($removeThisField);$removeThisField.remove();if(primaryRemoved){this.$('[data-emailproperty=primary_address]').first().addClass('active');}
if(this.def.required&&_.isEmpty(this.model.get(this.name))){this.decorateRequired();}},toggleExistingAddressProperty:function(evt){if(!evt)return;var $property=this.$(evt.currentTarget),property=$property.data('emailproperty'),$properties=this.$('[data-emailproperty='+property+']'),index=$properties.index($property);if(property==='primary_address'){$properties.removeClass('active');}
this._toggleExistingAddressPropertyInModel(index,property);},_addNewAddressToModel:function(email){var existingAddresses=this.model.get(this.name)?app.utils.deepCopy(this.model.get(this.name)):[],dupeAddress=_.find(existingAddresses,function(address){return(address.email_address===email);}),success=false;if(_.isUndefined(dupeAddress)){existingAddresses.push({email_address:email,primary_address:(existingAddresses.length===0)});this.model.set(this.name,existingAddresses);success=true;}
return success;},_updateExistingAddressInModel:function(index,newEmail){var existingAddresses=app.utils.deepCopy(this.model.get(this.name));existingAddresses[index].email_address=newEmail;this.model.set(this.name,existingAddresses);},_toggleExistingAddressPropertyInModel:function(index,property){var existingAddresses=app.utils.deepCopy(this.model.get(this.name));if(property==='primary_address'){existingAddresses[index][property]=false;_.each(existingAddresses,function(email,i){if(email[property]){existingAddresses[i][property]=false;}});}
if(existingAddresses[index][property]){existingAddresses[index][property]=false;}else{existingAddresses[index][property]=true;}
this.model.set(this.name,existingAddresses);},_removeExistingAddressInModel:function(index){var existingAddresses=app.utils.deepCopy(this.model.get(this.name)),primaryAddressRemoved=!!existingAddresses[index]['primary_address'];existingAddresses=_.reject(existingAddresses,function(emailInfo,i){return i==index;});if(primaryAddressRemoved){var address=_.first(existingAddresses);if(address){address.primary_address=true;}}
this.model.set(this.name,existingAddresses);return primaryAddressRemoved;},_clearNewAddressField:function(){this._getNewEmailField().val('');},_getNewEmailField:function(){return this.$('.newEmail');},decorateError:function(errors){var emails;this.$el.closest('.record-cell').addClass("error");emails=this.$('input:not(.newEmail)');_.each(errors,function(errorContext,errorName){if(errorName==='email'||errorName==='duplicateEmail'){_.each(emails,function(e){var $email=this.$(e),email=$email.val();var isError=_.find(errorContext,function(emailError){return emailError===email;});if(!_.isUndefined(isError)){this._addErrorDecoration($email,errorName,[isError]);}},this);}else{var $email=this.$('input:first');this._addErrorDecoration($email,errorName,errorContext);}},this);},_addErrorDecoration:function($input,errorName,errorContext){var isWrapped=$input.parent().hasClass('input-append');if(!isWrapped)
$input.wrap('<div class="input-append error '+this.fieldTag+'">');$input.next('.error-tooltip').remove();$input.after(this.exclamationMarkTemplate([app.error.getErrorString(errorName,errorContext)]));this.createErrorTooltips($input.next('.error-tooltip'));},bindDomChange:function(){if(this.tplName==='list-edit'){this._super("bindDomChange");}},format:function(value){value=app.utils.deepCopy(value);if(_.isArray(value)&&value.length>0){_.each(value,function(email){email.hasAnchor=this.def.emailLink&&!email.opt_out&&!email.invalid_email;},this);}else if((_.isString(value)&&value!=="")||this.view.action==='list'){value=[{email_address:value,primary_address:true,hasAnchor:true}];}
value=this.addFlagLabels(value);return value;},addFlagLabels:function(value){var flagStr="",flagArray;_.each(value,function(emailObj){flagStr="";flagArray=_.map(emailObj,function(flagValue,key){if(!_.isUndefined(this._flag2Deco[key])&&this._flag2Deco[key].lbl&&flagValue){return app.lang.get(this._flag2Deco[key].lbl);}},this);flagArray=_.without(flagArray,undefined);if(flagArray.length>0){flagStr=flagArray.join(", ");}
emailObj.flagLabel=flagStr;},this);return value;},unformat:function(value){if(this.view.action==='list'){var emails=app.utils.deepCopy(this.model.get(this.name));if(!_.isArray(emails)){emails=[];}
emails=_.map(emails,function(email){if(email.primary_address&&email.email_address!==value){email.email_address=value;}
return email;},this);if(emails.length==0){emails.push({email_address:value,primary_address:true});}
return emails;}
if(this.view.action==='filter-rows'){return value;}},focus:function(){if(this.action!=='disabled'){this._getNewEmailField().focus();}},_retrieveEmailOptionsFromLink:function($link){return{to_addresses:[{email:$link.data('email-to'),bean:this.emailOptions.related}]};}}) },
"email-text": {"controller": /*
     * Your installation or use of this SugarCRM file is subject to the applicable
     * terms available at
     * http://support.sugarcrm.com/06_Customer_Center/10_Master_Subscription_Agreements/.
     * If you do not agree to all of the applicable terms or do not have the
     * authority to bind the entity as an authorized representative, then do not
     * install or use this SugarCRM file.
     *
     * Copyright (C) SugarCRM Inc. All rights reserved.
     */
({
	// Email-text Field (base) 
initialize:function(options){options=options||{};options.def=options.def||{};if(_.isUndefined(options.def.link)){options.def.link=true;}
app.view.Field.prototype.initialize.call(this,options);},format:function(value){if(_.isArray(value)){var primaryEmail=_.find(value,function(email){return email.primary_address&&email.primary_address!=="0";});return primaryEmail?primaryEmail.email_address:'';}
return value;},unformat:function(value){var self=this,emails=this.model.get('email'),changed=false;if(!_.isArray(emails)){emails=[];}
_.each(emails,function(email,index){if(email.primary_address&&email.primary_address!=="0"&&email.email_address!==value)
{changed=true;emails[index].email_address=value;}},this);if(emails.length==0){emails.push({email_address:value,primary_address:"1",hasAnchor:false,_wasNotArray:true});changed=true;}
if(changed){this.model.set(this.name,emails);this.model.trigger('change:'+this.name,this,emails);}
return emails;}}) },
"emailaction": {"controller": /*
     * Your installation or use of this SugarCRM file is subject to the applicable
     * terms available at
     * http://support.sugarcrm.com/06_Customer_Center/10_Master_Subscription_Agreements/.
     * If you do not agree to all of the applicable terms or do not have the
     * authority to bind the entity as an authorized representative, then do not
     * install or use this SugarCRM file.
     *
     * Copyright (C) SugarCRM Inc. All rights reserved.
     */
({
	// Emailaction Field (base) 
extendsFrom:'ButtonField',plugins:['EmailClientLaunch'],initialize:function(options){this._super("initialize",[options]);this._setEmailOptions();},_setEmailOptions:function(){var context=this.context.parent||this.context,parentModel=context.get('model');if(this.def.set_recipient_to_parent){this.addEmailOptions({to_addresses:[{bean:parentModel}]});}
if(this.def.set_related_to_parent){this.addEmailOptions({related:parentModel});}}}) },
"enum": {"controller": /*
     * Your installation or use of this SugarCRM file is subject to the applicable
     * terms available at
     * http://support.sugarcrm.com/06_Customer_Center/10_Master_Subscription_Agreements/.
     * If you do not agree to all of the applicable terms or do not have the
     * authority to bind the entity as an authorized representative, then do not
     * install or use this SugarCRM file.
     *
     * Copyright (C) SugarCRM Inc. All rights reserved.
     */
({
	// Enum Field (base) 
fieldTag:'input.select2',plugins:['EllipsisInline'],appendValueTag:'input[name=append_value]',defaultOnUndefined:true,BLANK_VALUE_ID:'___i_am_empty___',isFetchingOptions:false,items:null,_keysOrder:null,bindKeyDown:function(callback){var $el=this.$(this.fieldTag);if($el){$el.on('keydown.record',{field:this},callback);var plugin=$el.data('select2');if(plugin){if(plugin.focusser){plugin.focusser.on('keydown.record',{field:this},callback);}
plugin.search.on('keydown.record',{field:this},callback);}}},unbindKeyDown:function(callback){if(this.$el){var $el=this.$(this.fieldTag);if($el){$el.off('keydown.record',callback);var plugin=$el.data('select2');if(plugin){plugin.search.off('keydown.record',callback);}}}},_render:function(){var self=this;if(!this.items||_.isEmpty(this.items)){this.loadEnumOptions(false,function(){self.isFetchingOptions=false;if(!this.disposed){this.render();}});if(this.isFetchingOptions){return this;}}
if(this.def.isMultiSelect&&!_.isUndefined(this.items[''])&&this.items['']===''){var obj={};_.each(this.items,function(value,key){if(key!==''&&value!==''){obj[key]=value;}},this);this.items=obj;}
var optionsKeys=_.isObject(this.items)?_.keys(this.items):[];if(this.defaultOnUndefined&&!this.def.isMultiSelect&&_.isUndefined(this.model.get(this.name))&&app.acl.hasAccessToModel('write',this.model,this.name)){var defaultValue=this._getDefaultOption(optionsKeys);if(defaultValue){this.model.set(this.name,defaultValue,{silent:true});if(_.isFunction(this.model.setDefaultAttribute)){this.model.setDefaultAttribute(this.name,defaultValue);}}}
app.view.Field.prototype._render.call(this);if(this.tplName=='noaccess'){return this;}
var select2Options=this.getSelect2Options(optionsKeys);var $el=this.$(this.fieldTag);if(!_.isEmpty(optionsKeys)){if(this.tplName==='edit'||this.tplName==='list-edit'||this.tplName==='massupdate'){$el.select2(select2Options);var plugin=$el.data('select2');if(plugin&&plugin.focusser){plugin.focusser.on('select2-focus',_.bind(_.debounce(this.handleFocus,0),this));}
$el.select2("container").addClass("tleft");$el.on('change',function(ev){var value=ev.val;if(_.isUndefined(value)){return;}
if(self.model&&!(self.name=='currency_id'&&_.isUndefined(value))){self.model.set(self.name,self.unformat(value));if(_.isFunction(self.model.removeDefaultAttribute)){self.model.removeDefaultAttribute(self.name)}}});if(this.def.ordered){$el.select2("container").find("ul.select2-choices").sortable({containment:'parent',start:function(){$el.select2("onSortStart");},update:function(){$el.select2("onSortEnd");}});}}else if(this.tplName==='disabled'){$el.select2(select2Options);$el.select2('disable');}
if(!_.isUndefined(this.value)){if(!_.isArray(this.value)){this.value=[this.value];}
$el.select2('val',this.value);}}else{this.$el.html(app.lang.get("LBL_LOADING"));}
return this;},focus:function(){if(this.action!=='disabled'&&!this.def.isMultiSelect){this.$(this.fieldTag).select2('open');}},loadEnumOptions:function(fetch,callback){var self=this,meta=app.metadata.getModule(this.module,'fields'),fieldMeta=meta&&meta[this.name]?meta[this.name]:this.def;this.items=this.def.options||fieldMeta.options;fetch=fetch||false;if(fetch||!this.items){this.isFetchingOptions=true;var _key='request:'+this.module+':'+this.name;if(this.context.get(_key)){var request=this.context.get(_key);request.xhr.done(_.bind(function(o){if(this.items!==o){this.items=o;callback.call(this);}},this));}else{var request=app.api.enumOptions(self.module,self.name,{success:function(o){if(self.disposed){return;}
if(self.items!==o){self.items=o;fieldMeta.options=self.items;self.context.unset(_key);callback.call(self);}}});this.context.set(_key,request);}}else if(_.isString(this.items)){this.items=app.lang.getAppListStrings(this.items);}},getSelect2Options:function(optionsKeys){var select2Options={};var emptyIdx=_.indexOf(optionsKeys,"");if(emptyIdx!==-1){select2Options.allowClear=true;if(emptyIdx>1){this.hasBlank=true;}}
if(!this.def.isMultiSelect){select2Options.placeholder=app.lang.get("LBL_SEARCH_SELECT");}
if(_.isEmpty(optionsKeys)){select2Options.placeholder=app.lang.get("LBL_LOADING");}
select2Options.width=this.def.enum_width?this.def.enum_width:'100%';select2Options.dropdownCssClass=this.def.dropdown_class?this.def.dropdown_class:'';select2Options.containerCssClass=this.def.container_class?this.def.container_class:(this.def.isMultiSelect?'select2-choices-pills-close':'');if(this.def.dropdown_width){select2Options.dropdownCss={width:this.def.dropdown_width};}
select2Options.minimumResultsForSearch=this.def.searchBarThreshold?this.def.searchBarThreshold:7;if(this.def.isMultiSelect){select2Options.multiple=true;}
select2Options.separator=this.def.separator||',';if(this.def.separator){select2Options.tokenSeparators=[this.def.separator];}
select2Options.initSelection=_.bind(this._initSelection,this);select2Options.query=_.bind(this._query,this);select2Options.sortResults=_.bind(this._sortResults,this);return select2Options;},_initSelection:function($ele,callback){var data=[];var options=_.isString(this.items)?app.lang.getAppListStrings(this.items):this.items;var values=$ele.val();if(this.def.isMultiSelect){values=values.split(this.def.separator||',');}
_.each(_.pick(options,values),function(value,key){data.push({id:key,text:value});},this);if(data.length===1){callback(data[0]);}else{callback(data);}},_query:function(query){var options=_.isString(this.items)?app.lang.getAppListStrings(this.items):this.items;var data={results:[],more:false};if(_.isObject(options)){_.each(options,function(element,index){var text=""+element;if(query.matcher(query.term,text)){data.results.push({id:index,text:text});}});}else{options=null;}
query.callback(data);},_sortResults:function(results,container,query){var keys,sortedResults;if(this.def.sort_alpha){sortedResults=_.sortBy(results,function(item){return item.text;});return sortedResults;}
if(!this._keysOrder){this._keysOrder={};keys=_.map(app.lang.getAppListKeys(this.def.options),function(key){return key.toString();});if(!_.isEqual(keys,_.keys(this.items))){_.each(keys,function(key,index){return this._keysOrder[key]=index;},this);}}
if(_.isEmpty(this._keysOrder)){return results;}
sortedResults=results;if(!this.def.visibility_grid){sortedResults=_.sortBy(results,function(item){return this._keysOrder[item.id];},this);}
return sortedResults;},_getDefaultOption:function(optionsKeys){return _.first(optionsKeys);},unformat:function(value){if(this.def.isMultiSelect&&_.isArray(value)&&_.indexOf(value,this.BLANK_VALUE_ID)>-1){value=_.clone(value);delete value[this.BLANK_VALUE_ID];}
if(this.def.isMultiSelect&&_.isNull(value)){return[];}else{return value;}},format:function(value){if(this.def.isMultiSelect&&_.isArray(value)&&_.indexOf(value,'')>-1){value=_.clone(value);delete value[''];}
if(this.def.isMultiSelect&&_.isString(value)){return this.convertMultiSelectDefaultString(value);}else{return value;}},convertMultiSelectDefaultString:function(defaultString){var result=defaultString.split(",");_.each(result,function(value,key){if(value!=='^^'){result[key]=value.replace(/\^/g,"");}});return result;},bindDataChange:function(){if(this.model){this.model.on('change:'+this.name,function(){if(_.isEmpty(this.$(this.fieldTag).data('select2'))){this.render();}else{this.$(this.fieldTag).select2('val',this.model.get(this.name));}},this);}},bindDomChange:function(){var $el=this.$(this.appendValueTag);if($el.length){$el.on('change',_.bind(function(){this.appendValue=$el.prop('checked');this.model.set(this.name+'_replace',this.appendValue?'1':'0');},this));}},unbindDom:function(){this.$(this.appendValueTag).off();this.$(this.fieldTag).select2('destroy');this._super('unbindDom');},unbindData:function(){var _key='request:'+this.module+':'+this.name;this.context.unset(_key);app.view.Field.prototype.unbindData.call(this);},_dispose:function(){this.unbindKeyDown();this._super('_dispose');}}) },
"favorite": {"controller": /*
     * Your installation or use of this SugarCRM file is subject to the applicable
     * terms available at
     * http://support.sugarcrm.com/06_Customer_Center/10_Master_Subscription_Agreements/.
     * If you do not agree to all of the applicable terms or do not have the
     * authority to bind the entity as an authorized representative, then do not
     * install or use this SugarCRM file.
     *
     * Copyright (C) SugarCRM Inc. All rights reserved.
     */
({
	// Favorite Field (base) 
showNoData:false,'events':{'click .icon-favorite':'toggle'},plugins:['Tooltip'],initialize:function(options){options.def.readonly=true;app.view.Field.prototype.initialize.call(this,options);},_render:function(){if(!this.model.get('id')){return null;}
if(!app.metadata.getModule(this.model.module).favoritesEnabled){app.logger.error("Trying to use favorite field on a module that doesn't support it: '"+this.model.module+"'.");return null;}
return app.view.Field.prototype._render.call(this);},toggle:function(evt){var self=this,star=$(evt.currentTarget);var options={silent:true,alerts:false};if(self.view&&self.view.action==='list'){options.success=function(){self._refreshListView();};}
if(this.model.favorite(!this.model.isFavorite(),options)===false){app.logger.error("Unable to set '"+this.model.module+"' record '"+this.model.id+"' as favorite");return;}
if(this.model.isFavorite()){star.addClass('active');this.model.trigger("favorite:active");}
else{star.removeClass('active');}},format:function(){return this.model.isFavorite();},_refreshListView:function(){var filterPanelLayout=this.view;while(filterPanelLayout&&filterPanelLayout.name!=='filterpanel'){filterPanelLayout=filterPanelLayout.layout;}
if(filterPanelLayout&&!filterPanelLayout.disposed&&this.collection){filterPanelLayout.applyLastFilter(this.collection,'favorite');}}}) },
"fieldset": {"controller": /*
     * Your installation or use of this SugarCRM file is subject to the applicable
     * terms available at
     * http://support.sugarcrm.com/06_Customer_Center/10_Master_Subscription_Agreements/.
     * If you do not agree to all of the applicable terms or do not have the
     * authority to bind the entity as an authorized representative, then do not
     * install or use this SugarCRM file.
     *
     * Copyright (C) SugarCRM Inc. All rights reserved.
     */
({
	// Fieldset Field (base) 
fields:null,initialize:function(options){app.view.Field.prototype.initialize.call(this,options);this.fields=[];},getPlaceholder:function(){var placeholder='<span sfuuid="'+this.sfId+'">';_.each(this.def.fields,function(fieldDef){if(this.def.readonly){fieldDef.readonly=true;}
var field=app.view.createField({def:fieldDef,view:this.view,viewName:this.options.viewName,model:this.model});this.fields.push(field);field.parent=this;placeholder+=field.getPlaceholder();},this);placeholder+='</span>';return new Handlebars.SafeString(placeholder);},showNoData:function(){if(!this.def.readonly){return false;}
return!_.some(this.fields,function(field){return field.name&&field.model.has(field.name);});},_render:function(){this._loadTemplate();if(_.contains(this.fallbackActions,this.action)){this.$el.html(this.template(this)||'');}
if(this.def&&this.def.css_class){this.getFieldElement().addClass(this.def.css_class);}
this.focusIndex=0;this._addViewClass(this.action);return this;},focus:function(){if(this.focusIndex<0||!this.focusIndex){this.focusIndex=0;}
if(this.focusIndex>=this.fields.length){this.focusIndex=-1;return false;}else{if(this.fields[this.focusIndex]&&this.fields[this.focusIndex].isDisabled()){this.focusIndex++;return this.focus();}
if(_.isFunction(this.fields[this.focusIndex].focus)&&this.fields[this.focusIndex].focus()){}else{var field=this.fields[this.focusIndex];var $el=field.$(field.fieldTag+":first");$el.focus().val($el.val());this.focusIndex++;}
return true;}},setDisabled:function(disable){disable=_.isUndefined(disable)?true:disable;app.view.Field.prototype.setDisabled.call(this,disable);_.each(this.fields,function(field){field.setDisabled(disable);},this);},setViewName:function(view){app.view.Field.prototype.setViewName.call(this,view);_.each(this.fields,function(field){field.setViewName(view);},this);},setMode:function(name){this.focusIndex=0;app.view.Field.prototype.setMode.call(this,name);_.each(this.fields,function(field){field.setMode(name);},this);},bindDomChange:function(){},bindDataChange:function(){},unbindDom:function(){},_dispose:function(){_.each(this.fields,function(field){field.parent=null;field.dispose();});this.fields=null;app.view.Field.prototype._dispose.call(this);}}) },
"fieldset-with-labels": {"controller": /*
     * Your installation or use of this SugarCRM file is subject to the applicable
     * terms available at
     * http://support.sugarcrm.com/06_Customer_Center/10_Master_Subscription_Agreements/.
     * If you do not agree to all of the applicable terms or do not have the
     * authority to bind the entity as an authorized representative, then do not
     * install or use this SugarCRM file.
     *
     * Copyright (C) SugarCRM Inc. All rights reserved.
     */
({
	// Fieldset-with-labels Field (base) 
extendsFrom:'FieldsetField',initialize:function(options){this._super('initialize',[options]);app.logger.warn('FieldsetWithLabels field is deprecated and will be removed as part of 7.6.'+'Please use Fieldset field instead.');},_render:function(){if(_.isEmpty(this.fields)){this._createFields();this._renderNewFields();}else{this._renderExistingFields();}
if(this.def&&this.def.css_class){this.getFieldElement().addClass(this.def.css_class);}
return this;},_createFields:function(){this._loadTemplate();this.$el.html(this.template(this));},_renderNewFields:function(){_.each(this.def.fields,function(fieldDef){var field=this.view.getField(fieldDef.name);this.fields.push(field);field.setElement(this.$("span[sfuuid='"+field.sfId+"']"));field.render();},this);},_renderExistingFields:function(){_.each(this.fields,function(field){field.render();},this);},getPlaceholder:function(){return app.view.Field.prototype.getPlaceholder.call(this);},setMode:function(name){this.tplName=name;this._super("setMode",[name]);}}) },
"file": {"controller": /*
     * Your installation or use of this SugarCRM file is subject to the applicable
     * terms available at
     * http://support.sugarcrm.com/06_Customer_Center/10_Master_Subscription_Agreements/.
     * If you do not agree to all of the applicable terms or do not have the
     * authority to bind the entity as an authorized representative, then do not
     * install or use this SugarCRM file.
     *
     * Copyright (C) SugarCRM Inc. All rights reserved.
     */
({
	// File Field (base) 
fieldTag:'input[type=file]',supportedImageExtensions:{'image/jpeg':'jpg','image/png':'png','image/gif':'gif'},events:{'click [data-action=download]':'startDownload','click [data-action=delete]':'deleteFile'},fileUrl:'',plugins:['File','FieldDuplicate','EllipsisInline'],deleteFile:function(e){var self=this;if(this.model.isNew()){this.model.unset(this.name);if(this.disposed){return;}
this.render();return;}
app.alert.show('delete_file_confirmation',{level:'confirmation',messages:app.lang.get('LBL_FILE_DELETE_CONFIRM',self.module),onConfirm:function(){var data={module:self.module,id:self.model.id,field:self.name},callbacks={success:function(){self.model.set(self.name,'');self.model.save({},{showAlerts:{'process':true,'success':{messages:app.lang.get('LBL_FILE_DELETED',self.module)}},fields:[self.name]});if(self.disposed){return;}
self.render();},error:function(data){app.error.handleHttpError(data,{});}};app.api.file('delete',data,null,callbacks,{htmlJsonFormat:false});}});},_loadTemplate:function(){this._super('_loadTemplate');if(this.view.name==='merge-duplicates'){this.template=app.template.getField(this.type,'merge-duplicates-'+this.tplName,this.module,this.tplName)||app.template.empty;this.tplName='list';}},onFieldDuplicate:function(){if(this.disposed||this.view.name!=='merge-duplicates'||this.options.viewName!=='edit'){return;}
this.render();},_render:function(){this.model=this.model||this.view.model;app.view.Field.prototype._render.call(this);return this;},format:function(value){var attachments=[];if(_.isArray(value)){_.each(value,function(file){var fileObj={name:file.name,url:this.formatUri(file.uri)};attachments.push(fileObj);},this);}else if(value){var urlOpts={module:this.module,id:this.model.id,field:this.name},fileObj=this._createFileObj(value,urlOpts);attachments.push(fileObj);}
return attachments;},_createFileObj:function(value,urlOpts){var isImage=this._isImage(this.model.get('file_mime_type')),forceDownload=!isImage,mimeType=isImage?'image':'',docType=this.model.get('doc_type');return{name:value,mimeType:mimeType,docType:docType,url:app.api.buildFileURL(urlOpts,{htmlJsonFormat:false,passOAuthToken:false,cleanCache:true,forceDownload:forceDownload})};},formatUri:function(uri){return uri;},startDownload:function(e){var uri=this.$(e.currentTarget).data('url');app.api.fileDownload(uri,{error:function(data){app.error.handleHttpError(data,{});}},{iframe:this.$el});},bindDataChange:function(){if(!this.model){return;}
this.model.on('change:'+this.name,function(){if(_.isUndefined(this.options.viewName)||this.options.viewName!=='edit'){this.render();}},this);},unformat:function(value){return value.split('/').pop().split('\\').pop();},_isImage:function(mimeType){return!!this.supportedImageExtensions[mimeType];}}) },
"float": {"controller": /*
     * Your installation or use of this SugarCRM file is subject to the applicable
     * terms available at
     * http://support.sugarcrm.com/06_Customer_Center/10_Master_Subscription_Agreements/.
     * If you do not agree to all of the applicable terms or do not have the
     * authority to bind the entity as an authorized representative, then do not
     * install or use this SugarCRM file.
     *
     * Copyright (C) SugarCRM Inc. All rights reserved.
     */
({
	// Float Field (base) 
unformat:function(value){var unformattedValue=app.utils.unformatNumberStringLocale(value);if(_.isFinite(unformattedValue)&&this.def&&this.def.precision){unformattedValue=app.math.round(unformattedValue,this.def.precision,true);}
return _.isFinite(unformattedValue)?unformattedValue:value;},format:function(value){if(this.def.disable_num_format){return value;}
return app.utils.formatNumber(value,this.def.round||4,this.def.precision||4,app.user.getPreference('number_grouping_separator')||',',app.user.getPreference('decimal_separator')||'.');}}) },
"follow": {"controller": /*
     * Your installation or use of this SugarCRM file is subject to the applicable
     * terms available at
     * http://support.sugarcrm.com/06_Customer_Center/10_Master_Subscription_Agreements/.
     * If you do not agree to all of the applicable terms or do not have the
     * authority to bind the entity as an authorized representative, then do not
     * install or use this SugarCRM file.
     *
     * Copyright (C) SugarCRM Inc. All rights reserved.
     */
({
	// Follow Field (base) 
showNoData:false,events:{'click [data-event="list:follow:fire"]':'toggleFollowing'},extendsFrom:'RowactionField',initialize:function(options){this._super("initialize",[options]);this.format();},bindDataChange:function(){if(this.model){this.model.on("change:following",this.resetLabel,this);}
this.model.on("favorite:active",function(){this.model.set("following",true);},this);},format:function(value){value=this.model.get("following");if(this.tplName==="detail"){var label=value?"LBL_FOLLOWING":"LBL_FOLLOW";this.label=app.lang.get(label,this.module);}else{var label=value?"LBL_UNFOLLOW":"LBL_FOLLOW";this.label=app.lang.get(label,this.module);}
return value;},resetLabel:function(){this.render();this.trigger("show");},unbindDom:function(){this.$("[data-hover=true]").off();this._super("unbindDom");},_render:function(){var module,mouseoverText,mouseoverClass,self=this;module=app.metadata.getModule(this.model.module);if(!module.activityStreamEnabled){this.hide();}else{this._super("_render");if(this.tplName!=="detail"){return;}
if(this.model.get("following")){mouseoverText=app.lang.get("LBL_UNFOLLOW");mouseoverClass="label-important";}else{mouseoverText=app.lang.get("LBL_FOLLOW");mouseoverClass="label-success";}
this.$("[data-hover=true]").on("mouseover",function(){$(this).text(mouseoverText).attr("class","label").addClass(mouseoverClass);}).on("mouseout",function(){var kls=self.model.get("following")?"label-success":"";$(this).text(self.label).attr("class","label").addClass(kls);});}},toggleFollowing:function(event){var isFollowing=this.model.get("following");if(!_.isUndefined(isFollowing)){var options={alerts:false};if(this.model.follow(!isFollowing,options)===false){app.logger.error('Unable to follow "'+this.model.module+'" record "'+this.model.id);return;}}}}) },
"forecast-pareto-chart": {"controller": /*
     * Your installation or use of this SugarCRM file is subject to the applicable
     * terms available at
     * http://support.sugarcrm.com/06_Customer_Center/10_Master_Subscription_Agreements/.
     * If you do not agree to all of the applicable terms or do not have the
     * authority to bind the entity as an authorized representative, then do not
     * install or use this SugarCRM file.
     *
     * Copyright (C) SugarCRM Inc. All rights reserved.
     */
({
	// Forecast-pareto-chart Field (base) 
_serverData:undefined,state:"open",preview_open:false,collapsed:false,initialize:function(options){this.once('render',function(){this.renderChart();},this);this._super('initialize',[options]);if(this.view.layout){this.view.layout.on('dashlet:collapse',this.handleDashletCollapse,this);this.view.layout.context.on('dashboard:collapse:fire',this.handleDashletCollapse,this);this.view.layout.context.on('dashlet:draggable:stop',this.handleDashletCollapse,this);}},bindDataChange:function(){app.events.on('preview:open',function(){this.preview_open=true;},this);app.events.on('preview:close',function(){this.preview_open=false;this.renderDashletContents();},this);var defaultLayout=this.closestComponent('sidebar');if(defaultLayout){this.listenTo(defaultLayout,'sidebar:state:changed',function(state){this.state=state;this.renderDashletContents();});}
this.model.on('change',function(model){var changed=_.keys(model.changed);if(!_.isEmpty(_.intersection(['user_id','display_manager','timeperiod_id'],changed))){this.renderChart();}},this);this.model.on('change:group_by change:dataset change:ranges',this.renderDashletContents,this);},isDashletVisible:function(){return(!this.disposed&&this.state==='open'&&!this.preview_open&&!this.collapsed&&!_.isUndefined(this._serverData));},resize:function(){if(this.isDashletVisible()){this.paretoChart.update();}},renderDashletContents:function(){if(this.isDashletVisible()){this.convertDataToChartData();this.generateD3Chart();return true;}
return false;},handleDashletCollapse:function(collapsed){this.collapsed=collapsed;this.renderDashletContents();},handlePrinting:function(state){var self=this,mediaQueryList=window.matchMedia&&window.matchMedia('print'),pausecomp=function(millis){var date=new Date(),curDate=null;do{curDate=new Date();}while(curDate-date<millis);},printResize=function(mql){if(mql.matches){self.paretoChart.width(640).height(320).update();pausecomp(200);}else{browserResize();}},browserResize=function(){self.paretoChart.width(null).height(null).update();};if(state==='on'){if(window.matchMedia){mediaQueryList.addListener(printResize);}else if(window.attachEvent){window.attachEvent('onbeforeprint',printResize);window.attachEvent('onafterprint',printResize);}else{window.onbeforeprint=printResize;window.onafterprint=browserResize;}}else{if(window.matchMedia){mediaQueryList.removeListener(printResize);}else if(window.detachEvent){window.detachEvent('onbeforeprint',printResize);window.detachEvent('onafterprint',printResize);}else{window.onbeforeprint=null;window.onafterprint=null;}}},unbindData:function(){if(this.view.layout){this.view.layout.off('dashlet:collapse',null,this);this.view.layout.context.off('dashboard:collapse:fire',null,this);this.view.layout.context.off('dashlet:draggable:stop',null,this);}
app.events.off(null,null,this);this._super('unbindData');},renderChart:function(options){if(this.disposed||!this.triggerBefore('chart:pareto:render')||_.isUndefined(this.model.get('timeperiod_id'))||_.isUndefined(this.model.get('user_id'))){return;}
this._serverData=undefined;this.chartId=this.cid+'_chart';this.paretoChart=nv.models.paretoChart().margin({top:0,right:10,bottom:0,left:10}).showTitle(false).tooltips(true).tooltipQuota(function(key,x,y,e,graph){var val=app.currency.formatAmountLocale(e.val,app.currency.getBaseCurrencyId());return'<p><b>'+e.key+': <b>'+val+'</b></p>';}).tooltipLine(function(key,x,y,e,graph){var val=app.currency.formatAmountLocale(e.point.y,app.currency.getBaseCurrencyId());return'<p><b>'+app.lang.get('LBL_CUMULATIVE_TOTAL','Forecasts')+'</b></p><p>'+key+': <b>'+val+'</b></p>';}).tooltipBar(_.bind(function(key,x,y,e,graph){var val=app.currency.formatAmountLocale(e.value),lbl=app.lang.get('LBL_SALES_STAGE','Forecasts');if(this.model.get('group_by')=='probability'){lbl=app.lang.get('LBL_OW_PROBABILITY','Forecasts')+' (%)';}
return'<p>'+lbl+': <b>'+key+'</b></p>'+'<p>'+app.lang.get('LBL_AMOUNT','Forecasts')+': <b>'+val+'</b></p>'+'<p>'+app.lang.get('LBL_PERCENT','Forecasts')+': <b>'+x+'%</b></p>';},this)).colorData('default').colorFill('default').yAxisTickFormat(function(d){return app.currency.getCurrencySymbol(app.currency.getBaseCurrencyId())+d3.format(',.2s')(d);}).quotaTickFormat(function(d){return app.currency.getCurrencySymbol(app.currency.getBaseCurrencyId())+d3.format(',.3s')(d);}).id(this.chartId).strings({legend:{close:app.lang.getAppString('LBL_CHART_LEGEND_CLOSE'),open:app.lang.getAppString('LBL_CHART_LEGEND_OPEN')},noData:app.lang.getAppString('LBL_CHART_NO_DATA')});options=options||{};options.success=_.bind(function(data){if(this.model){this.model.set({title:data.title});this._serverData=data;this.convertDataToChartData();this.generateD3Chart();}},this);var read_options={};if(this.model.has('no_data')&&this.model.get('no_data')===true){read_options['no_data']=1;}
if(this.model.get('display_manager')){read_options['target_quota']=(this.model.get('show_target_quota'))?1:0;}
var url=app.api.buildURL(this.buildChartUrl(),null,null,read_options);app.api.call('read',url,{},options);},generateD3Chart:function(){var params=this.model.toJSON();if(!_.isEmpty(this.paretoChart)){$(window).off('resize.'+this.sfId);d3.select('#'+this.chartId+' svg').remove();}
this.paretoChart.stacked(!params.display_manager);if(this.d3Data.data.length>0){this.$('.nv-chart').toggleClass('hide',false);this.$('.block-footer').toggleClass('hide',true);d3.select('#'+this.chartId).append('svg').datum(this.d3Data).call(this.paretoChart);$(window).on('resize.'+this.sfId,_.debounce(_.bind(this.resize,this),100));this.handlePrinting('on');this.$('.nv-chart').on('click',_.bind(function(e){this.paretoChart.dispatch.chartClick();},this));}else{this.$('.nv-chart').toggleClass('hide',true);this.$('.block-footer').toggleClass('hide',false);}
this.trigger('chart:pareto:rendered');},convertDataToChartData:function(){if(this.state=='closed'||this.preview_open||this.collapsed||_.isUndefined(this._serverData)){return-1;}
if(this.model.get('display_manager')){this.convertManagerDataToChartData();}else{this.convertRepDataToChartData(this.model.get('group_by'));}},convertManagerDataToChartData:function(){var dataset=this.model.get('dataset'),records=this._serverData.data,chartData={'properties':{'name':this._serverData.title,'quota':parseFloat(this._serverData.quota),'quotaLabel':app.lang.get((this.model.get('show_target_quota'))?'LBL_QUOTA_ADJUSTED':'LBL_QUOTA','Forecasts'),'groupData':records.map(function(record,i){return{group:i,l:record.name,t:parseFloat(record[dataset])+parseFloat(record[dataset+'_adjusted'])};})},'data':[]},barData=[dataset,dataset+'_adjusted'].map(function(ds,seriesIdx){var vals=records.map(function(rec,recIdx){return{series:seriesIdx,x:recIdx+1,y:parseFloat(rec[ds]),y0:0};});return{key:this._serverData.labels['dataset'][ds],series:seriesIdx,type:'bar',values:vals,valuesOrig:vals};},this),lineData=[dataset,dataset+'_adjusted'].map(function(ds,seriesIdx){var vals=records.map(function(rec,recIdx){return{series:seriesIdx,x:recIdx+1,y:parseFloat(rec[ds])};});var addToLine=0;_.each(vals,function(val,i,list){list[i].y+=addToLine;addToLine=list[i].y;});return{key:this._serverData.labels['dataset'][ds],series:seriesIdx,type:'line',values:vals,valuesOrig:vals};},this);if(this.model.get('show_target_quota')){chartData.properties.targetQuota=+this._serverData.target_quota;chartData.properties.targetQuotaLabel=app.lang.get('LBL_QUOTA','Forecasts');}
chartData.data=barData.concat(lineData);this.d3Data=chartData;},convertRepDataToChartData:function(type){_.each(this._serverData.data,function(point){if(_.has(point,'likely')&&isNaN(point.likely)){point.likely=0;}
if(_.has(point,'best')&&isNaN(point.best)){point.best=0;}
if(_.has(point,'worst')&&isNaN(point.worst)){point.worst=0;}});var dataset=this.model.get('dataset'),ranges=this.model.get('ranges'),seriesIdx=0,barData=[],lineVals=this._serverData['x-axis'].map(function(axis,i){return{series:seriesIdx,x:i+1,y:0};}),line={'key':this._serverData.labels.dataset[dataset],'type':'line','series':seriesIdx,'values':[],'valuesOrig':[]},chartData={'properties':{'name':this._serverData.title,'quota':parseFloat(this._serverData.quota),'quotaLabel':app.lang.get('LBL_QUOTA','Forecasts'),'groupData':this._serverData['x-axis'].map(function(item,i){return{'group':i,'l':item.label,'t':0};})},'data':[]},records=this._serverData.data,data=(!_.isEmpty(ranges))?records.filter(function(rec){return _.contains(ranges,rec.forecast);}):records;_.each(this._serverData.labels[type],function(label,value){var td=data.filter(function(d){return(d[type]==value);});if(!_.isEmpty(td)){var barVal=this._serverData['x-axis'].map(function(axis,i){return{series:seriesIdx,x:i+1,y:0,y0:0};}),axis=this._serverData['x-axis'];_.each(td,function(record){for(var y=0;y<axis.length;y++){if(record.date_closed_timestamp>=axis[y].start_timestamp&&record.date_closed_timestamp<=axis[y].end_timestamp){var val=parseFloat(record[dataset]);barVal[y].y+=val;chartData.properties.groupData[y].t+=val;lineVals[y].y+=val;break;}}},this);barData.push({key:label,series:seriesIdx,type:'bar',values:barVal,valuesOrig:app.utils.deepCopy(barVal)});seriesIdx++;}},this);if(!_.isEmpty(barData)){var addToLine=0;_.each(lineVals,function(val,i,list){list[i].y+=addToLine;addToLine=list[i].y;});line.values=lineVals;line.valuesOrig=app.utils.deepCopy(lineVals);barData.push(line);chartData.data=barData;}
this.d3Data=chartData;},buildChartUrl:function(){var baseUrl=this.model.get('display_manager')?'ForecastManagerWorksheets':'ForecastWorksheets';return baseUrl+'/chart/'+this.model.get('timeperiod_id')+'/'+this.model.get('user_id');},hasServerData:function(){return!_.isUndefined(this._serverData);},getServerData:function(){return this._serverData;},setServerData:function(data,adjustLabels){this._serverData=data;if(adjustLabels===true){this.adjustProbabilityLabels();}
this.renderDashletContents();},adjustProbabilityLabels:function(){var probabilities=_.unique(_.map(this._serverData.data,function(item){return item.probability;})).sort();this._serverData.labels.probability=_.object(probabilities,probabilities);},_dispose:function(){this.handlePrinting('off');$(window).off('resize.'+this.sfId);this.$('.nv-chart').off('click');this._super('_dispose');}}) },
"fullname": {"controller": /*
     * Your installation or use of this SugarCRM file is subject to the applicable
     * terms available at
     * http://support.sugarcrm.com/06_Customer_Center/10_Master_Subscription_Agreements/.
     * If you do not agree to all of the applicable terms or do not have the
     * authority to bind the entity as an authorized representative, then do not
     * install or use this SugarCRM file.
     *
     * Copyright (C) SugarCRM Inc. All rights reserved.
     */
({
	// Fullname Field (base) 
extendsFrom:'FieldsetField',plugins:['EllipsisInline'],formatMap:{'f':'first_name','l':'last_name','s':'salutation',},initialize:function(options){var context=options.view.context,module=context.get("module");if(module){var meta=app.metadata.getModule(module);if(meta&&meta.nameFormat){this.formatMap=meta.nameFormat;}}
var formatPlaceholder=app.user.getPreference('default_locale_name_format')||'';options.def.fields=_.reduce(formatPlaceholder.split(''),function(fields,letter){if(letter>='a'&&letter<='z'&&this.formatMap[letter]){fields.push(_.clone(meta.fields[this.formatMap[letter]]||this.formatMap[letter]));}
return fields;},[],this);options.def.fields=app.metadata._patchFields(module,meta,options.def.fields);this._super('initialize',[options]);if(!app.acl.hasAccessToModel('view',this.model)&&this.def){this.def.link=false;}},_loadTemplate:function(){this._super('_loadTemplate');if(this.def.link){var action=this.def.route&&this.def.route.action?this.def.route.action:'';this.href='#'+app.router.buildRoute(this.module||this.context.get('module'),this.model.id,action,this.def.bwcLink);}
var template=app.template.getField(this.type,this.view.name+'-'+this.tplName,this.model.module);if(!template&&this.view.meta&&this.view.meta.template){template=app.template.getField(this.type,this.view.meta.template+'-'+this.tplName,this.model.module);}
this.template=template||this.template;},getPlaceholder:function(){return app.view.Field.prototype.getPlaceholder.call(this);},_render:function(){_.each(this.fields,function(field){field.dispose();delete this.view.fields[field.sfId];},this);this.fields=[];app.view.Field.prototype._render.call(this);_.each(this.fields,function(field){field.setElement(this.$("span[sfuuid='"+field.sfId+"']"));field.render();},this);return this;},format:function(name){return app.utils.formatNameModel(this.model.module,this.model.attributes);},bindDataChange:function(){if(this.model){this.model.on("change:"+this.name,function(){if(this.fields.length===0){this.render();}},this);_.each(this.def.fields,function(field){this.model.on("change:"+field.name,this.updateValue,this);},this);}},updateValue:function(){this.model.set(this.name,this.format());},setMaxWidth:function(width){this.$('.record-cell').css({'max-width':width});},getCellPadding:function(){var padding=0,$cell=this.$('.record-cell');if(!_.isEmpty($cell)){padding=parseInt($cell.css('padding-left'),10)+parseInt($cell.css('padding-right'),10);}
return padding;}}) },
"html": {"controller": /*
     * Your installation or use of this SugarCRM file is subject to the applicable
     * terms available at
     * http://support.sugarcrm.com/06_Customer_Center/10_Master_Subscription_Agreements/.
     * If you do not agree to all of the applicable terms or do not have the
     * authority to bind the entity as an authorized representative, then do not
     * install or use this SugarCRM file.
     *
     * Copyright (C) SugarCRM Inc. All rights reserved.
     */
({
	// Html Field (base) 
fieldSelector:'.htmlareafield',initialize:function(options){options.def.readonly=true;app.view.Field.prototype.initialize.call(this,options);},_render:function(){app.view.Field.prototype._render.call(this);this._getFieldElement().attr('name',this.name);this.setViewContent();},setViewContent:function(){var value=this.value||this.def.default_value;var field=this._getFieldElement();if(field&&field.get(0)&&!_.isEmpty(field.get(0).contentDocument)){if(field.contents().find('body').length>0){field.contents().find('body').html(value);}}},_getFieldElement:function(){return this.$el.find(this.fieldSelector);}}) },
"htmleditable_tinymce": {"controller": /*
     * Your installation or use of this SugarCRM file is subject to the applicable
     * terms available at
     * http://support.sugarcrm.com/06_Customer_Center/10_Master_Subscription_Agreements/.
     * If you do not agree to all of the applicable terms or do not have the
     * authority to bind the entity as an authorized representative, then do not
     * install or use this SugarCRM file.
     *
     * Copyright (C) SugarCRM Inc. All rights reserved.
     */
({
	// Htmleditable_tinymce Field (base) 
fieldSelector:'.htmleditable',_htmleditor:null,_isDirty:false,_saveOnSetContent:true,_render:function(){this.destroyTinyMCEEditor();app.view.Field.prototype._render.call(this);this._getHtmlEditableField().attr('name',this.name);if(this._isEditView()){this._renderEdit(this.options.def.tinyConfig||null);}else{this._renderView();}},bindDataChange:function(){this.model.on('change:'+this.name,function(model,value){if(this._isEditView()){this._saveOnSetContent=false;this.setEditorContent(value);}else{this.setViewContent(value)}},this);},setViewContent:function(value){var editable=this._getHtmlEditableField();if(editable&&!_.isEmpty(editable.get(0).contentDocument)){if(editable.contents().find('body').length>0){editable.contents().find('body').html(value);}}},_renderEdit:function(options){var self=this;this.initTinyMCEEditor(options);this._getHtmlEditableField().on('change',function(){self.model.set(self.name,self._getHtmlEditableField().val());});},_renderView:function(){this.setViewContent(this.value);},_isEditView:function(){return(this._getHtmlEditableField().prop('tagName')==='TEXTAREA');},getTinyMCEConfig:function(){return{script_url:'include/javascript/tiny_mce/tiny_mce.js',theme:"advanced",skin:"sugar7",plugins:"style,table,advhr,advimage,advlink,iespell,inlinepopups,media,searchreplace,print,contextmenu,paste,noneditable,visualchars,nonbreaking,xhtmlxtras",entity_encoding:"raw",browser_spellcheck:true,theme_advanced_buttons1:"code,|,bold,italic,underline,|,justifyleft,justifycenter,justifyright,justifyfull,fontsizeselect,|,insertlayer,moveforward,movebackward,absolute,|,styleprops,|,cite,abbr,acronym,del,ins,attribs,|,iespell,media,advhr,|,print,|",theme_advanced_buttons2:"cut,copy,paste,|,search,replace,|,bullist,numlist,|,outdent,indent,blockquote,|,undo,redo,|,link,unlink,anchor,image,|,forecolor,backcolor,tablecontrols,|,",theme_advanced_toolbar_location:"top",theme_advanced_toolbar_align:"left",theme_advanced_statusbar_location:"none",theme_advanced_resizing:true,schema:"html5",template_external_list_url:"lists/template_list.js",external_link_list_url:"lists/link_list.js",external_image_list_url:"lists/image_list.js",media_external_list_url:"lists/media_list.js",theme_advanced_path:false,theme_advanced_source_editor_width:500,theme_advanced_source_editor_height:400,inlinepopups_skin:"sugar7modal",relative_urls:false,remove_script_host:false};},initTinyMCEEditor:function(optConfig){var self=this;if(_.isEmpty(this._htmleditor)){var config=optConfig||this.getTinyMCEConfig();var __superSetup__=config.setup;config.setup=function(editor){if(_.isFunction(__superSetup__)){__superSetup__.call(this,editor);}
self._htmleditor=editor;self._htmleditor.onInit.add(function(ed){self.setEditorContent(self.getFormattedValue());$(ed.getWin()).blur(function(e){self._saveEditor();});});self._htmleditor.onDeactivate.add(function(ed){self._saveEditor();});self._htmleditor.onSetContent.add(function(ed){if(self._saveOnSetContent){self._saveEditor(true);}
self._saveOnSetContent=true;});self._htmleditor.onChange.add(function(ed,l){self._isDirty=true;});};config.oninit=function(inst){self.context.trigger('tinymce:oninit',inst);};$('.htmleditable').tinymce(config);}},destroyTinyMCEEditor:function(){if(!_.isNull(this._htmleditor)){this._saveEditor(true);this._htmleditor.remove();this._htmleditor.destroy();this._htmleditor=null;}},_saveEditor:function(force){var save=force|this._isDirty;if(save){this.model.set(this.name,this.getEditorContent(),{silent:true});this._isDirty=false;}},_getHtmlEditableField:function(){return this.$el.find(this.fieldSelector);},setEditorContent:function(value){if(_.isEmpty(value)){value="";}
if(this._isEditView()&&this._htmleditor&&this._htmleditor.dom){this._htmleditor.setContent(value);}},getEditorContent:function(){return this._htmleditor.getContent();},_dispose:function(){this.destroyTinyMCEEditor();app.view.Field.prototype._dispose.call(this);}}) },
"iframe": {"controller": /*
     * Your installation or use of this SugarCRM file is subject to the applicable
     * terms available at
     * http://support.sugarcrm.com/06_Customer_Center/10_Master_Subscription_Agreements/.
     * If you do not agree to all of the applicable terms or do not have the
     * authority to bind the entity as an authorized representative, then do not
     * install or use this SugarCRM file.
     *
     * Copyright (C) SugarCRM Inc. All rights reserved.
     */
({
	// Iframe Field (base) 
_render:function(){this._super('_render');if(this.tplName==='disabled'){this.$(this.fieldTag).attr('disabled','disabled');}},unformat:function(value){value=(value!==''&&value!='http://')?value.trim():'';return value;},format:function(value){if(_.isEmpty(value)){value=_.isString(this.def['default'])?this.def['default']:undefined;}
if(this.def.gen=='1'){var regex=/{(.+?)}/,result=null;do{result=regex.exec(value);if(result){value=value.replace(result[0],this.model.get(result[1]));}}while(result);}
if(_.isString(value)&&!value.match(/^(http|https):\/\//)){value='http://'+value.trim();}
return value;}}) },
"image": {"controller": /*
     * Your installation or use of this SugarCRM file is subject to the applicable
     * terms available at
     * http://support.sugarcrm.com/06_Customer_Center/10_Master_Subscription_Agreements/.
     * If you do not agree to all of the applicable terms or do not have the
     * authority to bind the entity as an authorized representative, then do not
     * install or use this SugarCRM file.
     *
     * Copyright (C) SugarCRM Inc. All rights reserved.
     */
({
	// Image Field (base) 
fieldTag:'input[type=file]',showNoData:false,events:{"click .delete":"delete","change input[type=file]":"selectImage"},plugins:['File','FieldDuplicate'],initialize:function(options){app.view.Field.prototype.initialize.call(this,options);if(_.isFunction(this.model.addValidationTask)&&!this.model.hasImageRequiredValidator){this.model.hasImageRequiredValidator=true;this.model.addValidationTask('image_required',_.bind(this._doValidateImageField,this));}},_dispose:function(){this.model.hasImageRequiredValidator=false;this.model._validationTasks=_.omit(this.model._validationTasks,'image_required');app.view.Field.prototype._dispose.call(this);},onFieldDuplicate:function(){if(this.disposed||this.view.name!=='merge-duplicates'){return;}
this.render();},_render:function(){this.model.fileField=this.name;app.view.Field.prototype._render.call(this);if(this.view&&this.view.meta&&this.view.meta.type==='list'){this.width=this.height=this.$el.parent().height()||42;this.def.width=this.def.height=undefined;}else{this.width=parseInt(this.def.width||this.def.height,10)||42;this.height=parseInt(this.def.height,10)||this.width;}
this.resizeWidth(this.width);this.resizeHeight(this.height);this.$('.image_field').removeClass('hide');this.$('img').addClass('hide').on('load',$.proxy(this.resizeWidget,this));return this;},format:function(value){if(value){value=this.buildUrl()+"&_hash="+value;}
return value;},bindDataChange:function(){var viewType=this.view.name||this.options.viewName;var ignoreViewType=["edit","create","create-actions"];if(_.indexOf(ignoreViewType,viewType)<0&&this.view.action!=="edit"){app.view.Field.prototype.bindDataChange.call(this);}},bindDomChange:function(){this.$(this.fieldTag).on('focus',_.bind(this.handleFocus,this));},selectImage:function(e){var self=this,$input=self.$('input[type=file]');self.preview=true;self.clearErrorDecoration();self.model.uploadFile(self.name,$input,{field:self.name,success:function(rsp){var fileId=(rsp[self.name])?rsp[self.name]['guid']:null;var url=app.api.buildFileURL({module:self.module,id:'temp',field:self.name,fileId:fileId});var image=$('<img>').addClass('hide').attr('src',url).on('load',$.proxy(self.resizeWidget,self));self.$('.image_preview').html(image);self.model.trigger("change","image");},error:function(error){var fieldError={},errors={};fieldError[error.responseText]={};errors[self.name]=fieldError;self.model.trigger('error:validation:'+this.field,fieldError);self.model.trigger('error:validation',errors);}},{temp:true});},'delete':function(e){var self=this;if(this.preview===true){self.preview=false;self.clearErrorDecoration();self.render();return;}
if(this._duplicateBeanId){self.model.unset(self.name);self.model.set(self.name,null);self.render();return;}
var confirmMessage=app.lang.get('LBL_IMAGE_DELETE_CONFIRM',self.module);if(confirm(confirmMessage)){app.api.call('delete',self.buildUrl({htmlJsonFormat:false}),{},{success:function(response){self.model.unset(self.name);self.model.set(self.name,null);if(response.record&&response.record.date_modified){self.model.set('date_modified',response.record.date_modified);}
if(!self.disposed){self.render();}},error:function(data){app.error.handleHttpError(data,{});}});}},buildUrl:function(options){return app.api.buildFileURL({module:this._duplicateBeanModule?this._duplicateBeanModule:this.module,id:this._duplicateBeanId?this._duplicateBeanId:this.model.id,field:this.name},options);},resizeWidget:function(){var image=this.$('.image_preview img, .image_detail img');if(!image[0])return;var isDefHeight=!_.isUndefined(this.def.height)&&this.def.height>0,isDefWidth=!_.isUndefined(this.def.width)&&this.def.width>0;if(isDefWidth){image.css('width',this.width);}
if(isDefHeight){image.css('height',this.height);}
if(!isDefHeight&&!isDefWidth)
image.css({'height':this.height,'width':this.width});this.resizeHeight(image.height());if(isDefHeight&&!isDefWidth){var newWidth=Math.floor((this.height / image[0].naturalHeight)*image[0].naturalWidth);image.css('width',newWidth);this.resizeWidth(newWidth);}
image.removeClass('hide');this.$('.delete').remove();var icon=this.preview===true?'remove':'trash';image.closest('label, a').after('<span class="image_btn delete icon-'+icon+' " />');},formatPX:function(size){size=parseInt(size,10);return size+'px';},resizeHeight:function(height){var $image_field=this.$('.image_field'),isEditAndIcon=this.$('.icon-plus').length>0;if(isEditAndIcon){var $image_btn=$image_field.find('.image_btn');var edit_btn_height=parseInt($image_btn.css('height'),10);var previewHeight=parseInt(height,10);previewHeight-=edit_btn_height?edit_btn_height:0;previewHeight=this.formatPX(previewHeight);$image_field.find('.icon-plus').css({lineHeight:previewHeight});}
var totalHeight=this.formatPX(height);$image_field.css({'height':totalHeight,minHeight:totalHeight,lineHeight:totalHeight});$image_field.find('label').css({lineHeight:totalHeight});},resizeWidth:function(width){var $image_field=this.$('.image_field'),width=this.formatPX(width),isInHeaderpane=$(this.el).closest('.headerpane').length>0,isInRowFluid=$(this.el).closest('.row-fluid').closest('.record').length>0;if(isInHeaderpane||!isInRowFluid){$image_field.css({'width':width});}else{$image_field.css({'maxWidth':width});}},_doValidateImageField:function(fields,errors,callback){var $input=this.$('input[type=file]');if(this.def.required&&(_.isEmpty($input)||_.isEmpty($input.val()))){errors[this.name]=errors[this.name]||{};errors[this.name].required=true;}
callback(null,fields,errors);},handleValidationError:function(errors){var errorMessages=[];if(this.action==='detail'){this.setMode('edit');}
this.$('.image_preview').html('<i class="icon-remove"></i>');this.$('label').after('<span class="image_btn delete icon-remove" />');this.$el.closest('.record-cell').addClass("error");this.$el.addClass('input-append error');_.each(errors,function(errorContext,errorName){errorMessages.push(app.error.getErrorString(errorName,errorContext));});this.$('.image_field').append(this.exclamationMarkTemplate(errorMessages));this.createErrorTooltips(this.$('.error-tooltip'));},clearErrorDecoration:function(){this.$('.delete').remove();this.$('.error-tooltip').remove();this.$el.closest('.record-cell').removeClass('error');this.$el.removeClass('input-append error');}}) },
"int": {"controller": /*
     * Your installation or use of this SugarCRM file is subject to the applicable
     * terms available at
     * http://support.sugarcrm.com/06_Customer_Center/10_Master_Subscription_Agreements/.
     * If you do not agree to all of the applicable terms or do not have the
     * authority to bind the entity as an authorized representative, then do not
     * install or use this SugarCRM file.
     *
     * Copyright (C) SugarCRM Inc. All rights reserved.
     */
({
	// Int Field (base) 
unformat:function(value){return app.utils.unformatNumberStringLocale(value,true);},format:function(value){var numberGroupSeparator='',decimalSeparator='';if(!this.def.disable_num_format){numberGroupSeparator=app.user.getPreference('number_grouping_separator')||',';decimalSeparator=app.user.getPreference('decimal_separator')||'.';}
return app.utils.formatNumber(value,0,0,numberGroupSeparator,decimalSeparator);}}) },
"invitation-actions": {"controller": /*
     * Your installation or use of this SugarCRM file is subject to the applicable
     * terms available at
     * http://support.sugarcrm.com/06_Customer_Center/10_Master_Subscription_Agreements/.
     * If you do not agree to all of the applicable terms or do not have the
     * authority to bind the entity as an authorized representative, then do not
     * install or use this SugarCRM file.
     *
     * Copyright (C) SugarCRM Inc. All rights reserved.
     */
({
	// Invitation-actions Field (base) 
plugins:['Tooltip'],events:{'click [data-action]':'toggleStatus'},toggleStatus:function(evt){var attr={};attr[this.name]=$(evt.currentTarget).data('action');this.model.save(attr,{relate:true});}}) },
"language": {"controller": /*
     * Your installation or use of this SugarCRM file is subject to the applicable
     * terms available at
     * http://support.sugarcrm.com/06_Customer_Center/10_Master_Subscription_Agreements/.
     * If you do not agree to all of the applicable terms or do not have the
     * authority to bind the entity as an authorized representative, then do not
     * install or use this SugarCRM file.
     *
     * Copyright (C) SugarCRM Inc. All rights reserved.
     */
({
	// Language Field (base) 
extendsFrom:'EnumField',initialize:function(options){this._super('initialize',[options]);if(!this.model.has(this.name)){this._setToDefault();}},_loadTemplate:function(){this.type='enum';app.view.Field.prototype._loadTemplate.call(this);this.type='language';},format:function(value){if(!this.items[value]){value=this._getDefaultOption();this._setToDefault();}
return value;},_getDefaultOption:function(optionsKeys){return app.lang.defaultLanguage;},_setToDefault:function(){var defaultValue=this._getDefaultOption();this.model.set(this.name,defaultValue);if(_.isFunction(this.model.setDefaultAttribute)){this.model.setDefaultAttribute(this.name,defaultValue);}}}) },
"link-action": {"controller": /*
     * Your installation or use of this SugarCRM file is subject to the applicable
     * terms available at
     * http://support.sugarcrm.com/06_Customer_Center/10_Master_Subscription_Agreements/.
     * If you do not agree to all of the applicable terms or do not have the
     * authority to bind the entity as an authorized representative, then do not
     * install or use this SugarCRM file.
     *
     * Copyright (C) SugarCRM Inc. All rights reserved.
     */
({
	// Link-action Field (base) 
extendsFrom:'StickyRowactionField',events:{'click a[name=select_button]':'openSelectDrawer'},openSelectDrawer:function(){if(this.isDisabled()){return;}
var parentModel=this.context.get('parentModel'),linkModule=this.context.get('module'),link=this.context.get('link'),self=this;app.drawer.open({layout:'selection-list',context:{module:linkModule,recParentModel:parentModel,recLink:link,recContext:this.context,recView:this.view}},function(model){if(!model){return;}
var relatedModel=app.data.createRelatedBean(parentModel,model.id,link),options={showAlerts:true,relate:true,success:function(model){self.context.get('collection').resetPagination();self.context.resetLoadFlag();self.context.set('skipFetch',false);var collectionOptions=self.context.get('collectionOptions')||{};if(collectionOptions.limit)self.context.set('limit',collectionOptions.limit);self.context.loadData({success:function(){self.view.layout.trigger('filter:record:linked');},error:function(error){app.alert.show('server-error',{level:'error',messages:'ERR_GENERIC_SERVER_ERROR'});}});},error:function(error){app.alert.show('server-error',{level:'error',messages:'ERR_GENERIC_SERVER_ERROR'});}};relatedModel.save(null,options);});},isDisabled:function(){if(this._super('isDisabled')){return true;}
var link=this.context.get('link'),parentModule=this.context.get('parentModule'),required=app.utils.isRequiredLink(parentModule,link);return required;}}) },
"linkfromreportbutton": {"controller": /*
     * Your installation or use of this SugarCRM file is subject to the applicable
     * terms available at
     * http://support.sugarcrm.com/06_Customer_Center/10_Master_Subscription_Agreements/.
     * If you do not agree to all of the applicable terms or do not have the
     * authority to bind the entity as an authorized representative, then do not
     * install or use this SugarCRM file.
     *
     * Copyright (C) SugarCRM Inc. All rights reserved.
     */
({
	// Linkfromreportbutton Field (base) 
extendsFrom:'StickyRowactionField',events:{'click a[name=select_button]':'openSelectDrawer'},openSelectDrawer:function(){if(this.isDisabled()){return;}
var filteredModule='Reports',filterOptions=new app.utils.FilterOptions().config(this.def);var thisContextModule=this.context.get('module');if(thisContextModule!==filteredModule){filterOptions.setLangModules([thisContextModule,filteredModule,'Filters']);}
app.drawer.open({layout:'selection-list',context:{module:'Reports',filterOptions:filterOptions.format(),parent:this.context}},_.bind(this.selectDrawerCallback,this));},selectDrawerCallback:function(model){if(!model||_.isEmpty(model.id)){return;}
if(model.module!=this.context.get('module')){app.alert.show('listfromreport-warning',{level:'warning',messages:app.lang.getAppString('LBL_LINK_FROM_REPORT_WRONG_MODULE'),autoClose:true});return;}
var recordListUrl=app.api.buildURL('Reports','record_list',{id:model.id}),self=this;app.alert.show('listfromreport_loading',{level:'process',title:app.lang.getAppString('LBL_LOADING')});app.api.call('create',recordListUrl,null,{success:_.bind(self.linkRecordList,self),error:function(error){app.alert.dismiss('listfromreport_loading');app.alert.show('server-error',{level:'error',title:app.lang.getAppString('ERR_INTERNAL_ERR_MSG'),messages:app.lang.getAppString('ERR_HTTP_500_TEXT')});}});},linkRecordList:function(response){var parentModel=this.context.get('parentModel'),parentModule=parentModel.get('module')||parentModel.get('_module'),link=this.context.get('link'),action='link/'+link+'/add_record_list',url=app.api.buildURL(parentModule,action,{id:parentModel.get('id'),relatedId:response.id});app.api.call('create',url,null,{success:_.bind(this.linkSuccessCallback,this),error:_.bind(this.linkErrorCallback,this),complete:function(data){app.alert.dismiss('listfromreport_loading');}});},linkSuccessCallback:function(results){var message,messageLevel;if(results.related_records.success.length>0){messageLevel='success';message=app.lang.get('LBL_LINK_FROM_REPORT_SUCCESS',null,{reportCount:results.related_records.success.length});}else{messageLevel='warning';message=app.lang.get('LBL_LINK_FROM_REPORT_NO_DATA');}
app.alert.show('server-success',{level:messageLevel,messages:message,autoClose:true});this.context.resetLoadFlag();this.context.set('skipFetch',false);this.context.loadData();},linkErrorCallback:function(error){app.alert.show('server-error',{level:'error',title:app.lang.getAppString('ERR_INTERNAL_ERR_MSG'),messages:app.lang.getAppString('ERR_HTTP_500_TEXT')});},isDisabled:function(){return!app.acl.hasAccess('view','Reports');}}) },
"manage-subscription": {"controller": /*
     * Your installation or use of this SugarCRM file is subject to the applicable
     * terms available at
     * http://support.sugarcrm.com/06_Customer_Center/10_Master_Subscription_Agreements/.
     * If you do not agree to all of the applicable terms or do not have the
     * authority to bind the entity as an authorized representative, then do not
     * install or use this SugarCRM file.
     *
     * Copyright (C) SugarCRM Inc. All rights reserved.
     */
({
	// Manage-subscription Field (base) 
extendsFrom:'RowactionField',initialize:function(options){this._super("initialize",[options]);this.type='rowaction';},rowActionSelect:function(){var route=app.bwc.buildRoute('Campaigns',this.model.id,'Subscriptions',{return_module:this.module,return_id:this.model.id});app.router.navigate(route,{trigger:true});}}) },
"mass-email-button": {"controller": /*
     * Your installation or use of this SugarCRM file is subject to the applicable
     * terms available at
     * http://support.sugarcrm.com/06_Customer_Center/10_Master_Subscription_Agreements/.
     * If you do not agree to all of the applicable terms or do not have the
     * authority to bind the entity as an authorized representative, then do not
     * install or use this SugarCRM file.
     *
     * Copyright (C) SugarCRM Inc. All rights reserved.
     */
({
	// Mass-email-button Field (base) 
extendsFrom:'ButtonField',initialize:function(options){this.plugins=_.union(this.plugins,['EmailClientLaunch']);this._super('initialize',[options]);},bindDataChange:function(){var massCollection=this.context.get('mass_collection');massCollection.on('add remove reset',this.render,this);this._super('bindDataChange');},unbindData:function(){var massCollection=this.context.get('mass_collection');if(massCollection){massCollection.off(null,null,this);}
this._super('unbindData');},_retrieveEmailOptionsFromLink:function(){var massCollection=this.context.get('mass_collection'),toAddresses=_.map(massCollection.models,function(model){return{bean:model};},this);return{to_addresses:toAddresses};}}) },
"module": {"controller": /*
     * Your installation or use of this SugarCRM file is subject to the applicable
     * terms available at
     * http://support.sugarcrm.com/06_Customer_Center/10_Master_Subscription_Agreements/.
     * If you do not agree to all of the applicable terms or do not have the
     * authority to bind the entity as an authorized representative, then do not
     * install or use this SugarCRM file.
     *
     * Copyright (C) SugarCRM Inc. All rights reserved.
     */
({
	// Module Field (base) 
format:function(value){value=app.lang.get('LBL_MODULE_NAME',value);return value;}}) },
"name": {"controller": /*
     * Your installation or use of this SugarCRM file is subject to the applicable
     * terms available at
     * http://support.sugarcrm.com/06_Customer_Center/10_Master_Subscription_Agreements/.
     * If you do not agree to all of the applicable terms or do not have the
     * authority to bind the entity as an authorized representative, then do not
     * install or use this SugarCRM file.
     *
     * Copyright (C) SugarCRM Inc. All rights reserved.
     */
({
	// Name Field (base) 
plugins:['EllipsisInline'],'events':{'keyup input[name=name]':'handleKeyup'},_render:function(){if(this.view.name==='record'){this.def.link=false;}else if(this.view.name==='preview'){this.def.link=_.isUndefined(this.def.link)?true:this.def.link;}
this._super('_render');},handleKeyup:_.throttle(function(){var searchedValue=this.$('input.inherit-width').val();if(searchedValue&&searchedValue.length>=3){this.context.trigger('input:name:keyup',searchedValue);}},1000,{leading:false})}) },
"overdue-badge": {"controller": /*
     * Your installation or use of this SugarCRM file is subject to the applicable
     * terms available at
     * http://support.sugarcrm.com/06_Customer_Center/10_Master_Subscription_Agreements/.
     * If you do not agree to all of the applicable terms or do not have the
     * authority to bind the entity as an authorized representative, then do not
     * install or use this SugarCRM file.
     *
     * Copyright (C) SugarCRM Inc. All rights reserved.
     */
({
	// Overdue-badge Field (base) 
_render:function(){var now=new Date(),date=new Date(this.model.get(this.name));this.model.set('overdue',date<now);this._super('_render');}}) },
"parent": {"controller": /*
     * Your installation or use of this SugarCRM file is subject to the applicable
     * terms available at
     * http://support.sugarcrm.com/06_Customer_Center/10_Master_Subscription_Agreements/.
     * If you do not agree to all of the applicable terms or do not have the
     * authority to bind the entity as an authorized representative, then do not
     * install or use this SugarCRM file.
     *
     * Copyright (C) SugarCRM Inc. All rights reserved.
     */
({
	// Parent Field (base) 
minChars:1,extendsFrom:'RelateField',fieldTag:'input.select2[name=parent_name]',typeFieldTag:'select.select2[name=parent_type]',_render:function(){var result,self=this;this._super("_render");var allowedTpls=['edit','massupdate'];if(_.contains(allowedTpls,this.tplName)){this.checkAcl('access',this.model.get('parent_type'));var inList=(this.view.name==='recordlist')?true:false;this.$(this.typeFieldTag).select2({dropdownCssClass:inList?'select2-narrow':'',containerCssClass:inList?'select2-narrow':'',width:inList?'off':'100%',minimumResultsForSearch:5}).on("change",function(e){var module=e.val;self.checkAcl.call(self,'edit',module);self.setValue({id:'',value:'',module:module});self.$(self.fieldTag).select2('val','');});var plugin=this.$(this.typeFieldTag).data('select2');if(plugin&&plugin.focusser){plugin.focusser.on('select2-focus',_.bind(_.debounce(this.handleFocus,0),this));}
var domParentTypeVal=this.$(this.typeFieldTag).val();if(this.model.get(this.def.type_name)!==domParentTypeVal){this.model.set(this.def.type_name,domParentTypeVal,{silent:true});this.model.setDefaultAttribute(this.def.type_name,domParentTypeVal);this._createFiltersCollection();}
if(app.acl.hasAccessToModel('edit',this.model,this.name)===false){this.$(this.typeFieldTag).select2("disable");}else{this.$(this.typeFieldTag).select2("enable");}}else if(this.tplName==='disabled'){this.$(this.typeFieldTag).select2('disable');}
return result;},_getRelateId:function(){return this.model.get("parent_id");},format:function(value){this.def.module=this.getSearchModule();var moduleString=app.lang.getAppListStrings('moduleListSingular'),module;if(this.def.module){if(!moduleString[this.def.module]){app.logger.error("Module '"+this.def.module+"' doesn't have singular translation.");module=this.def.module;}else{module=moduleString[this.def.module];}}
this.context.set('record_label',{field:this.name,label:(this.tplName==='detail')?module:app.lang.get(this.def.label,this.module)});var parentCtx=this.context&&this.context.parent,setFromCtx;setFromCtx=!value&&parentCtx&&this.view instanceof app.view.views.BaseCreateView&&_.contains(_.keys(app.lang.getAppListStrings(this.def.parent_type)),parentCtx.get('module'))&&this.module!==this.def.module;if(setFromCtx){var model=parentCtx.get('model');var attributes=model.toJSON();attributes.silent=true;this.setValue(attributes);value=this.model.get(this.name);}
return this._super('format',[value]);},checkAcl:function(action,module){if(app.acl.hasAccess(action,module)===false){this.$(this.typeFieldTag).select2("disable");}else{this.$(this.typeFieldTag).select2("enable");}},setValue:function(model){if(!model){return;}
var silent=model.silent||false,module=model.module||model._module;this._createFiltersCollection();if(app.acl.hasAccessToModel(this.action,this.model,this.name)){if(module){this.model.set('parent_type',module,{silent:silent});this.model.removeDefaultAttribute('parent_type');}
if(!_.isUndefined(model.id)){this.model.set('parent_id',model.id,{silent:silent});var value=model.value||model[this.def.rname||'name']||model['full_name'];this.model.set('parent_name',value,{silent:silent});}}},isAvailableParentType:function(module){var moduleFound=_.find(this.$(this.typeFieldTag).find('option'),function(dom){return $(dom).val()===module;});return!!moduleFound;},getSearchModule:function(){return this.model.get('parent_type')||this.$(this.typeFieldTag).val();},getPlaceHolder:function(){return app.lang.get('LBL_SEARCH_SELECT',this.module);},unbindDom:function(){this.$(this.typeFieldTag).select2('destroy');this._super("unbindDom");},bindDataChange:function(){this._super('bindDataChange');if(this.model){this.model.on('change:parent_type',function(){if(_.isEmpty(this.$(this.typeFieldTag).data('select2'))){this.render();}else{this.$(this.typeFieldTag).select2('val',this.model.get('parent_type'));}},this);}}}) },
"pdfaction": {"controller": /*
     * Your installation or use of this SugarCRM file is subject to the applicable
     * terms available at
     * http://support.sugarcrm.com/06_Customer_Center/10_Master_Subscription_Agreements/.
     * If you do not agree to all of the applicable terms or do not have the
     * authority to bind the entity as an authorized representative, then do not
     * install or use this SugarCRM file.
     *
     * Copyright (C) SugarCRM Inc. All rights reserved.
     */
({
	// Pdfaction Field (base) 
extendsFrom:'RowactionField',events:{'click [data-action=link]':'linkClicked','click [data-action=download]':'downloadClicked','click [data-action=email]':'emailClicked'},templateCollection:null,fetchCalled:false,initialize:function(options){this._super('initialize',[options]);this.templateCollection=app.data.createBeanCollection('PdfManager');},_render:function(){var emailClientPreference=app.user.getPreference('email_client_preference');if(this.def.action==='email'&&emailClientPreference.type!=='sugar'){this.hide();}else{this._super('_render');}},_fetchTemplate:function(){this.fetchCalled=true;var collection=this.templateCollection;collection.filterDef={'$and':[{'base_module':this.module},{'published':'yes'}]};collection.fetch();},_buildDownloadLink:function(templateId){var urlParams=$.param({'action':'sugarpdf','module':this.module,'sugarpdf':'pdfmanager','record':this.model.id,'pdf_template_id':templateId});return'?'+urlParams;},_buildEmailLink:function(templateId){return'#'+app.bwc.buildRoute(this.module,null,'sugarpdf',{'sugarpdf':'pdfmanager','record':this.model.id,'pdf_template_id':templateId,'to_email':'1'});},linkClicked:function(evt){evt.preventDefault();evt.stopPropagation();if(this.templateCollection.dataFetched){this.fetchCalled=!this.fetchCalled;}else{this._fetchTemplate();}
this.render();},emailClicked:function(evt){var templateId=this.$(evt.currentTarget).data('id');app.router.navigate(this._buildEmailLink(templateId),{trigger:true});},downloadClicked:function(evt){var templateId=this.$(evt.currentTarget).data('id');app.bwc.login(null,_.bind(function(){this._triggerDownload(this._buildDownloadLink(templateId));},this));},_triggerDownload:function(url){app.api.fileDownload(url,{error:function(data){app.error.handleHttpError(data,{});}},{iframe:this.$el});},bindDataChange:function(){this.templateCollection.on('reset',this.render,this);this._super('bindDataChange');},unbindData:function(){this.templateCollection.off(null,null,this);this.templateCollection=null;this._super('unbindData');},hasAccess:function(){var pdfAccess=app.acl.hasAccess('view','PdfManager');return pdfAccess&&this._super('hasAccess');}}) },
"phone": {"controller": /*
     * Your installation or use of this SugarCRM file is subject to the applicable
     * terms available at
     * http://support.sugarcrm.com/06_Customer_Center/10_Master_Subscription_Agreements/.
     * If you do not agree to all of the applicable terms or do not have the
     * authority to bind the entity as an authorized representative, then do not
     * install or use this SugarCRM file.
     *
     * Copyright (C) SugarCRM Inc. All rights reserved.
     */
({
	// Phone Field (base) 
plugins:['EllipsisInline'],initialize:function(options){var serverInfo=app.metadata.getServerInfo();this.skypeEnabled=serverInfo.system_skypeout_on?true:false;app.view.Field.prototype.initialize.call(this,options);},format:function(value){if((this.action==='list'||this.action==='detail'||this.action==='record')&&this.isSkypeFormatted(value)&&this.skypeEnabled){this.skypeValue=this.skypeFormat(value);}
return value;},isSkypeFormatted:function(value){if(_.isString(value)){return value.substr(0,1)==='+'||value.substr(0,2)==='00'||value.substr(0,3)==='011';}else{return false;}},skypeFormat:function(value){if(_.isString(value)){var number=value.replace(/[^\d\(\)\.\-\/ ]/g,'');if(null!==number.match(/[\-]/g)&&number.match(/[\-]/g).length>=2){number=number.replace(/[^\d\-]/g,'').replace(/(\d+)\-(\d+)\-([\d\-]+)/g,function($0,$1,$2,$3){return[$1,$2,$3.replace(/\D/g,'')].join('-');});}else if(null!==number.match(/[\.]/g)&&number.match(/[\.]/g).length>=2){number=number.replace(/[^\d\.]/g,'').replace(/(\d+)\.(\d+)\.([\d\.]+)/g,function($0,$1,$2,$3){return[$1,$2,$3.replace(/\D/g,'')].join('.');});}else if(null!==number.match(/\(\D*\d+\D*\)/g)){number=number.replace(/[^\d\(\)]+/g,'').replace(/(\d+)\((\d+)\)([0-9\(\)]+)/g,function($0,$1,$2,$3){return $1+'('+$2+')'+$3.replace(/\D/g,'');})}else if(null!==number.match(/[\/]/g)&&number.match(/[\/]/g).length>=2){number=number.replace(/[^\d\/]/g,'').replace(/(\d+)\/(\d+)\/([\d\/]+)/g,function($0,$1,$2,$3){return[$1,$2,$3.replace(/\D/g,'')].join('/');});}else if(null!==number.match(/\S+\s+\S+\s+[\S\s]+/g)){number=number.replace(/(\S+)\s+(\S+)\s+([\S\s]+)/g,function($0,$1,$2,$3){return _.map([$1,$2,$3],function(s){return s.replace(/\D/g,'');}).join(' ');})}else{number=number.replace(/\D/g,'');}
if(value.substr(0,1)==='+'||(number.substr(0,2)!=='00'&&number.substr(0,3)!=='011')){number='+'+number;}
return number;}else if(_.isNumber(value)){if(value.substr(0,2)!=='00'&&value.substr(0,3)!=='011'){value='+'+value;}}
return value;}}) },
"preview-button": {"controller": /*
     * Your installation or use of this SugarCRM file is subject to the applicable
     * terms available at
     * http://support.sugarcrm.com/06_Customer_Center/10_Master_Subscription_Agreements/.
     * If you do not agree to all of the applicable terms or do not have the
     * authority to bind the entity as an authorized representative, then do not
     * install or use this SugarCRM file.
     *
     * Copyright (C) SugarCRM Inc. All rights reserved.
     */
({
	// Preview-button Field (base) 
extendsFrom:'RowactionField',isBwcEnabled:undefined,tooltip:undefined,initialize:function(options){var fieldModule=options.model.get('_module');this.isBwcEnabled=app.metadata.getModule(fieldModule).isBwcEnabled;this._super('initialize',[options]);if(this.isBwcEnabled){this.tooltip='LBL_PREVIEW_BWC_TOOLTIP';}else{this.tooltip=this.def.tooltip;}}}) },
"quickcreate": {"controller": /*
     * Your installation or use of this SugarCRM file is subject to the applicable
     * terms available at
     * http://support.sugarcrm.com/06_Customer_Center/10_Master_Subscription_Agreements/.
     * If you do not agree to all of the applicable terms or do not have the
     * authority to bind the entity as an authorized representative, then do not
     * install or use this SugarCRM file.
     *
     * Copyright (C) SugarCRM Inc. All rights reserved.
     */
({
	// Quickcreate Field (base) 
events:{'click .actionLink[data-event="true"]':'_handleActionLink'},plugins:['LinkedModel'],initialize:function(options){app.view.Field.prototype.initialize.call(this,options);app.events.on("create:model:changed",this.createModelChanged,this);},createHasChanges:false,createModelChanged:function(hasChanged){this.createHasChanges=hasChanged;},_handleActionLink:function(evt){var $actionLink=$(evt.currentTarget),module=$actionLink.data('module'),moduleMeta=app.metadata.getModule(this.context.get('module'));this.actionLayout=$actionLink.data('layout');if(this.createHasChanges){app.alert.show('send_confirmation',{level:'confirmation',messages:'LBL_WARN_UNSAVED_CHANGES',onConfirm:_.bind(function(){app.drawer.reset(false);this.createRelatedRecord(module);},this)});}else if(moduleMeta&&moduleMeta.isBwcEnabled){this.createRelatedRecord(module);}else{app.drawer.reset();this.createRelatedRecord(module);}},routeToBwcCreate:function(module){var context=this.getRelatedContext(module);if(context){app.bwc.createRelatedRecord(module,this.context.get('model'),context.link);}else{var route=app.bwc.buildRoute(module,null,'EditView');app.router.navigate(route,{trigger:true});}},getRelatedContext:function(module){var meta=app.metadata.getModule(module),context;if(meta&&meta.menu.quickcreate.meta.related){var parentModel=this.context.get('model');if(parentModel.isNew()){return;}
context=_.find(meta.menu.quickcreate.meta.related,function(metadata){return metadata.module===parentModel.module;});}
return context;},openCreateDrawer:function(module){var relatedContext=this.getRelatedContext(module),model=null;if(relatedContext){model=this.createLinkModel(this.context.get('model'),relatedContext.link);}
app.drawer.open({layout:this.actionLayout||'create-actions',context:{create:true,module:module,model:model}},_.bind(function(refresh,model){if(refresh){if(model&&!model.id){app.router.refresh();return;}
if(model&&relatedContext){this.context.trigger('panel-top:refresh',relatedContext.link);return;}
this._loadContext(app.controller.context,module);if(app.controller.context.children){_.each(app.controller.context.children,function(context){this._loadContext(context,module);},this);}}},this));},_loadContext:function(context,module){var collection=context.get('collection');if(collection&&collection.module===module){var options={showAlerts:false};collection.resetPagination();context.resetLoadFlag(false);context.set('skipFetch',false);options=_.extend(options,context.get('collectionOptions'));context.loadData(options);}}}) },
"radioenum": {"controller": /*
     * Your installation or use of this SugarCRM file is subject to the applicable
     * terms available at
     * http://support.sugarcrm.com/06_Customer_Center/10_Master_Subscription_Agreements/.
     * If you do not agree to all of the applicable terms or do not have the
     * authority to bind the entity as an authorized representative, then do not
     * install or use this SugarCRM file.
     *
     * Copyright (C) SugarCRM Inc. All rights reserved.
     */
({
	// Radioenum Field (base) 
extendsFrom:'EnumField',plugins:["ListEditable"],fieldTag:"input",_render:function(){this.loadEnumOptions(false,function(){if(!this.disposed){this.render();}});app.view.Field.prototype._render.call(this);if(this.tplName==='list-edit'){this._super("_render");}},bindDomChange:function(){if(this.tplName==='list-edit'){this._super("bindDomChange");}else{if(!(this.model instanceof Backbone.Model))return;var self=this;var el=this.$el.find(this.fieldTag);el.on("change",function(){self.model.set(self.name,self.unformat(self.$(self.fieldTag+":radio:checked").val()));});}},format:function(value){if(this.tplName==='list-edit'){return this._super("format",[value]);}else{return app.view.Field.prototype.format.call(this,value);}},unformat:function(value){if(this.tplName==='list-edit'){return this._super("unformat",[value]);}else{return app.view.Field.prototype.unformat.call(this,value);}},decorateError:function(errors){if(this.tplName==='list-edit'){return this._super("decorateError",[errors]);}else{var errorMessages=[],$tooltip;this.$el.closest('.record-cell').addClass('error');this.$el.addClass('error');_.each(errors,function(errorContext,errorName){errorMessages.push(app.error.getErrorString(errorName,errorContext));});this.$(this.fieldTag).last().closest('p').append(this.exclamationMarkTemplate(errorMessages));$tooltip=this.$('.error-tooltip');if(_.isFunction($tooltip.tooltip)){var tooltipOpts={container:'body',placement:'top',trigger:'click'};$tooltip.tooltip(tooltipOpts);}}},clearErrorDecoration:function(){if(this.tplName==='list-edit'){return this._super("clearErrorDecoration");}else{var ftag=this.fieldTag||'';this.$('.add-on').remove();this.$el.removeClass(ftag);this.$el.removeClass("error");this.$el.closest('.record-cell').removeClass("error");}}}) },
"range": {"controller": /*
     * Your installation or use of this SugarCRM file is subject to the applicable
     * terms available at
     * http://support.sugarcrm.com/06_Customer_Center/10_Master_Subscription_Agreements/.
     * If you do not agree to all of the applicable terms or do not have the
     * authority to bind the entity as an authorized representative, then do not
     * install or use this SugarCRM file.
     *
     * Copyright (C) SugarCRM Inc. All rights reserved.
     */
({
	// Range Field (base) 
fieldTag:'.rangeSlider',_sliderTypeSettings:{single:{handles:1,connect:false},upper:{handles:1,connect:'upper'},lower:{handles:1,connect:'lower'},'double':{handles:2,connect:false},connected:{handles:2,connect:true}},_render:function(value){app.view.Field.prototype._render.call(this);this._setupSlider(this.$el.find(this.fieldTag));},unformat:function(value){var sliderType=this.def.sliderType||'single';switch(sliderType){case'single':return _.first(value);case'upper':return{min:_.first(value),max:this.def.maxRange||100};case'lower':return{min:this.def.minRange||0,max:_.last(value)};case'double':return[_.isNaN(_.first(value))?this.def.minRange||0:_.first(value),_.isNaN(_.last(value))?this.def.maxRange||100:_.last(value)];case'connected':default:return{min:_.isNaN(_.first(value))?this.def.minRange||0:_.first(value),max:_.isNaN(_.last(value))?this.def.maxRange||100:_.last(value)};}},format:function(value){var sliderType=this.def.sliderType||'single';switch(sliderType){case'single':return[value||this.def.rangeMin||0];case'upper':return[value.min||this.def.rangeMin||0];case'lower':return[value.max||this.def.rangeMax||100];case'double':return value;case'connected':default:if(value){return[value.min||this.def.rangeMin||0,value.max||this.def.rangeMax||100];}}
return[this.def.rangeMin||0,this.def.rangeMax||100];},_setupSlider:function(jqel){jqel.noUiSlider('init',{knobs:this._calculateHandles(),connect:this._setupHandleConnections(this.def.sliderType||'single'),scale:this._setupSliderEndpoints(),start:this._setupSliderStartPositions(),change:this._sliderChange,end:this._sliderChangeComplete,field:this});if(!this.def.hideStyle){this._addStyle(jqel);}
if(this.def.enabled==false||this.def.view!='edit'){jqel.noUiSlider('disable');}},_addStyle:function(jqel){var start=this._setupSliderStartPositions(),endpoints=this._setupSliderEndpoints();jqel.append(function(){var html="",segments=11,w=$(this).width(),segmentWidth=w/(segments-1),acum=0;for(i=0;i<segments;i++){acum=(segmentWidth*i)-2;html+="<div class='ticks' style='left:"+acum+"px'></div>";}
return html;}).find('.noUi-handle div').each(function(index){if(i>1){i=0;}
$(this).append('<div class="tooltip fade top in infoBox"><div class="tooltip-arrow"></div><div class="tooltip-inner">'+start[i]+'%'+'</div></div>');i++;});this.$('.noUiSliderEnds').attr('data-content-before',_.first(endpoints)+'%').attr('data-content-after',_.last(endpoints)+'%')},_calculateHandles:function(){var sliderType=this.def.sliderType||'single';return this._sliderTypeSettings[sliderType].handles;},_setupHandleConnections:function(sliderType){var sliderType=this.def.sliderType||'single';return this._sliderTypeSettings[sliderType].connect;},_setupSliderEndpoints:function(){var minRange=this.def.minRange||0,maxRange=this.def.maxRange||100;return[minRange,maxRange];},_setupSliderStartPositions:function(){var value;if(this.model){value=this.model.get(this.name);}
if(_.isUndefined(value)||(_.isArray(value)&&_.isEmpty(value))){return[this.def.minRange||0,this.def.maxRange||100];}
return this.format(value);},getSliderValues:function(jqel){var value=jqel.noUiSlider('value');return this.unformat(value);},_sliderChange:function(type){var field=this.data('api').options.field,values;if(field.def.updateOn&&(field.def.updateOn=='change'||field.def.updateOn=='both')){field.model.set(field.name,field.getSliderValues(this));}
if(!field.def.hideStyle){values=this.noUiSlider('value');this.find('.noUi-lowerHandle .infoBox .tooltip-inner').text(values[0]+"%");this.find('.noUi-upperHandle .infoBox .tooltip-inner').text(values[1]+"%");}
if(type!='move'&&_.isFunction(field.sliderChangeDelegate)){field.sliderChangeDelegate(field.getSliderValues(this));}},_sliderChangeComplete:function(type){var field=this.data('api').options.field;if(field.def.updateOn&&(field.def.updateOn=='done'||field.def.updateOn=='both')){field.model.set(field.name,field.getSliderValues(this));}
if(_.isFunction(field.sliderDoneDelegate)){field.sliderDoneDelegate(field.getSliderValues(this));}}}) },
"relate": {"controller": /*
     * Your installation or use of this SugarCRM file is subject to the applicable
     * terms available at
     * http://support.sugarcrm.com/06_Customer_Center/10_Master_Subscription_Agreements/.
     * If you do not agree to all of the applicable terms or do not have the
     * authority to bind the entity as an authorized representative, then do not
     * install or use this SugarCRM file.
     *
     * Copyright (C) SugarCRM Inc. All rights reserved.
     */
({
	// Relate Field (base) 
allow_single_deselect:true,minChars:1,fieldTag:'input.select2',plugins:['QuickSearchFilter','EllipsisInline'],initialize:function(options){this.minChars=options.def.minChars||this.minChars;app.view.Field.prototype.initialize.call(this,options);var populateMetadata=app.metadata.getModule(this.getSearchModule());if(_.isEmpty(populateMetadata)){return;}
_.each(this.def.populate_list,function(target,source){if(_.isUndefined(populateMetadata.fields[source])){app.logger.error('Fail to populate the related attributes: attempt to access undefined key - '+
this.getSearchModule()+'::'+source);}},this);this.model.on('change',function(){this.getFilterOptions(true);},this);this.filters=app.data.createBeanCollection('Filters');this.filters.setModuleName(this.getSearchModule());this.filters.setFilterOptions(this.getFilterOptions());this.filters.load();},_createFiltersCollection:function(){var searchModule=this.getSearchModule();if(app.metadata.getModule('Filters')&&searchModule){this.filters=app.data.createBeanCollection('Filters');this.filters.setModuleName(searchModule);this.filters.setFilterOptions(this.getFilterOptions());this.filters.load();}},bindKeyDown:function(callback){this.$(this.fieldTag).on('keydown.record',{field:this},callback);var plugin=this.$(this.fieldTag).data('select2');if(plugin){plugin.focusser.on('keydown.record',{field:this},callback);plugin.search.on('keydown.record',{field:this},callback);}},unbindKeyDown:function(callback){this.$(this.fieldTag).off('keydown.record',callback);var plugin=this.$(this.fieldTag).data('select2');if(plugin){plugin.search.off('keydown.record',callback);}},focus:function(){var self=this;if(this.action!=='disabled'){_.defer(function(){self.$(self.fieldTag).select2('open')});}},_render:function(){var self=this,searchModule=this.getSearchModule();if(searchModule&&!_.contains(app.metadata.getModuleNames(),searchModule)){return this;}
var result=this._super('_render');if(this.tplName==='edit'||this.tplName==='massupdate'){var inList=(this.view.name==='recordlist'),cssClasses=(inList?'select2-narrow':'')+(this.type==='parent'?' select2-parent':''),relatedModuleField=this.getRelatedModuleField();this.$(this.fieldTag).select2({width:inList?'off':'100%',dropdownCssClass:cssClasses,containerCssClass:cssClasses,initSelection:function(el,callback){var $el=$(el),id=$el.data('id'),text=$el.val();callback({id:id,text:text});},formatInputTooShort:function(){return'';},formatSearching:function(){return app.lang.get("LBL_LOADING",self.module);},placeholder:this.getPlaceHolder(),allowClear:self.allow_single_deselect,minimumInputLength:self.minChars,query:_.bind(this.search,this)}).on("select2-open",function(){var plugin=$(this).data('select2');if(!plugin.searchmore){var $content=$('<li class="select2-result">').append($('<div/>').addClass('select2-result-label').html(app.lang.get('LBL_SEARCH_FOR_MORE',self.module))).mousedown(function(){plugin.opts.element.trigger($.Event("searchmore"));plugin.close();});plugin.searchmore=$('<ul class="select2-results">').append($content);plugin.dropdown.append(plugin.searchmore);}}).on('searchmore',function(){$(this).select2('close');self.openSelectDrawer();}).on("change",function(e){var id=e.val,plugin=$(this).data('select2'),value=(id)?plugin.selection.find("span").text():$(this).data('id'),collection=plugin.context,attributes={};if(_.isUndefined(id)){return;}
plugin.opts.element.data("id",id);if(collection&&!_.isEmpty(id)){var model=collection.get(id);attributes.id=model.id;attributes.value=model.get('name');_.each(model.attributes,function(value,field){if(app.acl.hasAccessToModel('view',model,field)){attributes[field]=attributes[field]||model.get(field);}});}else if(e.currentTarget.value&&value){attributes.id=value;attributes.value=e.currentTarget.value;}else{attributes.id='';attributes.value='';}
self.setValue(attributes);});var plugin=this.$(this.fieldTag).data('select2');if(plugin&&plugin.focusser){plugin.focusser.on('select2-focus',_.bind(_.debounce(this.handleFocus,0),this));}}else if(this.tplName==='disabled'){this.$(this.fieldTag).select2({width:'100%',initSelection:function(el,callback){var $el=$(el),id=$el.data('id'),text=$el.val();callback({id:id,text:text});},formatInputTooShort:function(){return'';},formatSearching:function(){return app.lang.get("LBL_LOADING",self.module);},placeholder:this.getPlaceHolder(),allowClear:self.allow_single_deselect,minimumInputLength:self.minChars,query:_.bind(this.search,this)});this.$(this.fieldTag).select2('disable');}
return result;},buildRoute:function(module,id){var oldModule=module;if(module==='Users'&&this.context.get('module')!=='Users'){module='Employees';}
if(_.isEmpty(module)||(!_.isUndefined(this.def.link)&&!this.def.link)){return;}
var action=(this.def.link&&this.def.route)?this.def.route.action:"view";if(app.acl.hasAccess(action,oldModule)){this.href='#'+app.router.buildRoute(module,id);}},_buildRoute:function(){this.buildRoute(this.getSearchModule(),this._getRelateId());},_getRelateId:function(){return this.model.get(this.def.id_name);},format:function(value){var parentCtx=this.context&&this.context.parent,setFromCtx;setFromCtx=!value&&parentCtx&&this.view instanceof app.view.views.BaseCreateView&&parentCtx.get('module')===this.def.module&&this.module!==this.def.module;if(setFromCtx){var model=parentCtx.get('model');this.def.auto_populate=true;this.setValue(model.toJSON());}
this._buildRoute();return value;},unformat:function(value){return this.model.get(this.def.id_name);},setValue:function(model){if(!model){return;}
var silent=model.silent||false,values={};values[this.def.id_name]=model.id;values[this.def.name]=model[this.getRelatedModuleField()]||model.value;this.model.set(values,{silent:silent});if(this.model.get(this.def.link)){this.model.unset(this.def.link);}else{this.model.trigger("change:"+this.def.link);}
var newData={},self=this;_.each(this.def.populate_list,function(target,source){source=_.isNumber(source)?target:source;if(!_.isUndefined(model[source])&&app.acl.hasAccessToModel('edit',this.model,target)){var before=this.model.get(target),after=model[source];if(before!==after){newData[target]=model[source];}}},this);if(_.isEmpty(newData)){return;}
if(!_.isUndefined(this.def.auto_populate)&&this.def.auto_populate==true){if(!_.isUndefined(newData.currency_id)){this.model.set({currency_id:newData.currency_id});delete newData.currency_id;}
this.model.set(newData);return;}
var messageTplKey=this.def.populate_confirm_label||'TPL_OVERWRITE_POPULATED_DATA_CONFIRM',messageTpl=Handlebars.compile(app.lang.get(messageTplKey,this.getSearchModule())),fieldMessageTpl=app.template.getField(this.type,'overwrite-confirmation',this.model.module),messages=[],relatedModuleSingular=app.lang.getModuleSingular(this.def.module);_.each(newData,function(value,field){var before=this.model.get(field),after=value;if(before!==after){var def=this.model.fields[field];messages.push(fieldMessageTpl({before:before,after:after,field_label:app.lang.get(def.label||def.vname||field,this.module)}));}},this);app.alert.show('overwrite_confirmation',{level:'confirmation',messages:messageTpl({values:new Handlebars.SafeString(messages.join(', ')),moduleSingularLower:relatedModuleSingular.toLowerCase()}),onConfirm:function(){if(!_.isUndefined(newData.currency_id)){self.model.set({currency_id:newData.currency_id});delete newData.currency_id;}
self.model.set(newData);}});},openSelectDrawer:function(){app.drawer.open({layout:'selection-list',context:{module:this.getSearchModule(),fields:this.getSearchFields(),filterOptions:this.getFilterOptions()}},_.bind(this.setValue,this));},getSearchFields:function(){return _.union(['id',this.getRelatedModuleField()],_.keys(this.def.populate_list||{}));},getRelatedModuleField:function(){return this.def.rname||'name';},bindDomChange:function(){},getSearchModule:function(){if(this.def.module){return this.def.module;}
var link=this.def.link&&this.model.fields&&this.model.fields[this.def.link]||{};if(link.module){return link.module;}
return app.data.getRelatedModule(this.model.module,this.def.link);},getPlaceHolder:function(){var module,moduleString=app.lang.getAppListStrings('moduleListSingular');if(!moduleString[this.getSearchModule()]){app.logger.error("Module '"+this.getSearchModule()+"' doesn't have singular translation.");module=this.getSearchModule().toLocaleLowerCase();}else{module=moduleString[this.getSearchModule()].toLocaleLowerCase();}
return app.lang.get('LBL_SEARCH_SELECT_MODULE',this.module,{module:module});},getFilterOptions:function(force){if(this._filterOptions&&!force){return this._filterOptions;}
this._filterOptions=new app.utils.FilterOptions().config(this.def).setInitialFilter(this.def.initial_filter||'$relate').populateRelate(this.model).format();return this._filterOptions;},buildFilterDefinition:function(searchTerm){if(!app.metadata.getModule('Filters')||!this.filters){return[];}
var filterBeanClass=app.data.getBeanClass('Filters').prototype,filterOptions=this.getFilterOptions()||{},filter=this.filters.collection.get(filterOptions.initial_filter),filterDef,populate,searchTermFilter,searchModule;if(filter){populate=filter.get('is_template')&&filterOptions.filter_populate;filterDef=filterBeanClass.populateFilterDefinition(filter.get('filter_definition')||{},populate);searchModule=filter.moduleName;}
searchTermFilter=filterBeanClass.buildSearchTermFilter(searchModule||this.getSearchModule(),searchTerm);return filterBeanClass.combineFilterDefinitions(filterDef,searchTermFilter);},search:_.debounce(function(query){var term=query.term||'',self=this,searchCollection,searchModule=this.getSearchModule(),params={},limit=self.def.limit||5,relatedModuleField=this.getRelatedModuleField();searchCollection=query.context||app.data.createBeanCollection(searchModule);if(query.context){params.offset=searchCollection.next_offset;}
params.filter=self.buildFilterDefinition(term);searchCollection.fetch({showAlerts:false,update:true,remove:_.isUndefined(params.offset),fields:this.getSearchFields(),context:self,params:params,limit:limit,success:function(data){var fetch={results:[],more:data.next_offset>0,context:searchCollection};if(fetch.more){var fieldEl=self.$(self.fieldTag),plugin=(fieldEl.length>1)?$(fieldEl.get(self.currentIndex)).data("select2"):fieldEl.data("select2"),height=plugin.searchmore.children("li:first").children(":first").outerHeight(),maxHeight=height*(limit-.2);plugin.results.css("max-height",maxHeight);}
_.each(data.models,function(model,index){if(params.offset&&index<params.offset){return;}
fetch.results.push({id:model.id,text:model.get(relatedModuleField)+''});});query.callback(fetch);},error:function(){query.callback({results:[]});app.logger.error("Unable to fetch the bean collection.");}});},app.config.requiredElapsed||500),bindDataChange:function(){if(this.model){this.model.on('change:'+this.name,function(){if(!_.isEmpty(this.$(this.fieldTag).data('select2'))){this.$(this.fieldTag).select2('val',this.model.get(this.name));}
if(!this.disposed){this.render();}},this);}},unbindDom:function(){this.$(this.fieldTag).select2('destroy');app.view.Field.prototype.unbindDom.call(this);}}) },
"related-contact": {"controller": /*
     * Your installation or use of this SugarCRM file is subject to the applicable
     * terms available at
     * http://support.sugarcrm.com/06_Customer_Center/10_Master_Subscription_Agreements/.
     * If you do not agree to all of the applicable terms or do not have the
     * authority to bind the entity as an authorized representative, then do not
     * install or use this SugarCRM file.
     *
     * Copyright (C) SugarCRM Inc. All rights reserved.
     */
({
	// Related-contact Field (base) 
events:{'click a':'onLinkClicked'},linkRoute:'',buildHref:function(){var defRoute=this.def.route?this.def.route:{},module=this.model.module||this.context.get('module'),id=this.model.get('contact_id');this.linkRoute='#'+app.router.buildRoute(module,id,defRoute.action);return this.linkRoute;},onLinkClicked:function(evt){var currentRoute='#'+Backbone.history.getFragment();if(currentRoute===this.linkRoute){app.router.refresh();}}}) },
"rowaction": {"controller": /*
     * Your installation or use of this SugarCRM file is subject to the applicable
     * terms available at
     * http://support.sugarcrm.com/06_Customer_Center/10_Master_Subscription_Agreements/.
     * If you do not agree to all of the applicable terms or do not have the
     * authority to bind the entity as an authorized representative, then do not
     * install or use this SugarCRM file.
     *
     * Copyright (C) SugarCRM Inc. All rights reserved.
     */
({
	// Rowaction Field (base) 
extendsFrom:'ButtonField',initialize:function(options){this.options.def.events=_.extend({},this.options.def.events,{'click .rowaction':'rowActionSelect'});this._super("initialize",[options]);},rowActionSelect:function(evt){if(this.isDisabled()){return;}
if(this.preventClick(evt)!==false){var target=this.view.context;if(this.def.target==='view'){target=this.view;}else if(this.def.target==='layout'){target=this.view.layout;}
if($(evt.currentTarget).data('event')){target.trigger($(evt.currentTarget).data('event'),this.model,this);}}}}) },
"rowactions": {"controller": /*
     * Your installation or use of this SugarCRM file is subject to the applicable
     * terms available at
     * http://support.sugarcrm.com/06_Customer_Center/10_Master_Subscription_Agreements/.
     * If you do not agree to all of the applicable terms or do not have the
     * authority to bind the entity as an authorized representative, then do not
     * install or use this SugarCRM file.
     *
     * Copyright (C) SugarCRM Inc. All rights reserved.
     */
({
	// Rowactions Field (base) 
extendsFrom:'ActiondropdownField',_loadTemplate:function(){app.view.Field.prototype._loadTemplate.call(this);var template=app.template._getField(this.type,this.tplName,this.module,null,true)[1];if(template){this.$el.attr('class','');this.$el.html(template(this));}
if(this.view.action==='list'&&this.action==='edit'){this.$el.hide();}else{this.$el.show();}}}) },
"selection": {"controller": /*
     * Your installation or use of this SugarCRM file is subject to the applicable
     * terms available at
     * http://support.sugarcrm.com/06_Customer_Center/10_Master_Subscription_Agreements/.
     * If you do not agree to all of the applicable terms or do not have the
     * authority to bind the entity as an authorized representative, then do not
     * install or use this SugarCRM file.
     *
     * Copyright (C) SugarCRM Inc. All rights reserved.
     */
({
	// Selection Field (base) 
events:{'click input.selection':'toggleSelect'},toggleSelect:function(evt){var $el=$(evt.currentTarget).is(":checked");if($el){this.check();}else{this.uncheck();}},check:function(){if(this.model){this.context.set('selection_model',this.model);}},uncheck:function(){if(this.model){this.context.unset('selection_model');}},bindDomChange:function(){}}) },
"shareaction": {"controller": /*
     * Your installation or use of this SugarCRM file is subject to the applicable
     * terms available at
     * http://support.sugarcrm.com/06_Customer_Center/10_Master_Subscription_Agreements/.
     * If you do not agree to all of the applicable terms or do not have the
     * authority to bind the entity as an authorized representative, then do not
     * install or use this SugarCRM file.
     *
     * Copyright (C) SugarCRM Inc. All rights reserved.
     */
({
	// Shareaction Field (base) 
extendsFrom:'EmailactionField',plugins:['EmailClientLaunch'],shareTplSubject:null,shareTplBody:null,shareTplBodyHtml:null,initialize:function(options){this._super("initialize",[options]);this.type='emailaction';this._initShareTemplates();this._setShareOptions();},_initShareTemplates:function(){this.shareTplSubject=app.template.getView('share.subject',this.module)||app.template.getView('share.subject');this.shareTplBody=app.template.getView('share.body',this.module)||app.template.getView('share.body');this.shareTplBodyHtml=app.template.getView('share.body-html',this.module)||app.template.getView('share.body-html');},_setShareOptions:function(){var shareParams=this._getShareParams(),subject=this.shareTplSubject(shareParams),body=this.shareTplBody(shareParams),bodyHtml=this.shareTplBodyHtml(shareParams);this.addEmailOptions({subject:subject,html_body:bodyHtml||body,text_body:body});},_getShareParams:function(){var moduleString=app.lang.getAppListStrings('moduleListSingular');return _.extend({},this.model.attributes,{module:moduleString[this.module]||this.module,appId:app.config.appId,url:window.location.href,name:new Handlebars.SafeString(this.model.attributes.name||this.model.attributes.full_name)});},shareWithSugarEmailClient:function(){this.launchSugarEmailClient(this.emailOptions);},getShareMailtoUrl:function(){return this._buildMailToURL(this.emailOptions);}}) },
"sidebartoggle": {"controller": /*
     * Your installation or use of this SugarCRM file is subject to the applicable
     * terms available at
     * http://support.sugarcrm.com/06_Customer_Center/10_Master_Subscription_Agreements/.
     * If you do not agree to all of the applicable terms or do not have the
     * authority to bind the entity as an authorized representative, then do not
     * install or use this SugarCRM file.
     *
     * Copyright (C) SugarCRM Inc. All rights reserved.
     */
({
	// Sidebartoggle Field (base) 
events:{'click':'toggle'},_state:'open',initialize:function(options){this._super('initialize',[options]);var defaultLayout=this.closestComponent('sidebar');if(defaultLayout&&_.isFunction(defaultLayout.isSidePaneVisible)){this.toggleState(defaultLayout.isSidePaneVisible()?'open':'close');this.listenTo(defaultLayout,'sidebar:state:changed',this.toggleState);}
app.shortcuts.register('Sidebar:Toggle','t',this.toggle,this);},toggleState:function(state){if(state!=='open'&&state!=='close'){state=(this._state==='open')?'close':'open';}
this._state=state;if(!this.disposed){this.render();}},toggle:function(event){var defaultLayout=this.closestComponent('sidebar');if(defaultLayout){defaultLayout.trigger('sidebar:toggle');}}}) },
"status": {"controller": /*
     * Your installation or use of this SugarCRM file is subject to the applicable
     * terms available at
     * http://support.sugarcrm.com/06_Customer_Center/10_Master_Subscription_Agreements/.
     * If you do not agree to all of the applicable terms or do not have the
     * authority to bind the entity as an authorized representative, then do not
     * install or use this SugarCRM file.
     *
     * Copyright (C) SugarCRM Inc. All rights reserved.
     */
({
	// Status Field (base) 
cssClasses:'',initialize:function(options){this._super('initialize',[options]);this.buildCSSClasses();},buildCSSClasses:function(){var status=this.model.get(this.name);if(status){status=status.replace(' ','_');this.cssClasses='field_'+this.name+'_'+status;}}}) },
"sticky-rowaction": {"controller": /*
     * Your installation or use of this SugarCRM file is subject to the applicable
     * terms available at
     * http://support.sugarcrm.com/06_Customer_Center/10_Master_Subscription_Agreements/.
     * If you do not agree to all of the applicable terms or do not have the
     * authority to bind the entity as an authorized representative, then do not
     * install or use this SugarCRM file.
     *
     * Copyright (C) SugarCRM Inc. All rights reserved.
     */
({
	// Sticky-rowaction Field (base) 
extendsFrom:'RowactionField',initialize:function(options){this._super("initialize",[options]);this.type='rowaction';},_render:function(){if(this.isDisabled()){if(_.isUndefined(this.def.css_class)||this.def.css_class.indexOf('disabled')===-1){this.def.css_class=(this.def.css_class)?this.def.css_class+" disabled":"disabled";}
this.undelegateEvents();}
this._super("_render");},isDisabled:function(){return!this._super("hasAccess");},hasAccess:function(){return true;}}) },
"teamset": {"controller": /*
     * Your installation or use of this SugarCRM file is subject to the applicable
     * terms available at
     * http://support.sugarcrm.com/06_Customer_Center/10_Master_Subscription_Agreements/.
     * If you do not agree to all of the applicable terms or do not have the
     * authority to bind the entity as an authorized representative, then do not
     * install or use this SugarCRM file.
     *
     * Copyright (C) SugarCRM Inc. All rights reserved.
     */
({
	// Teamset Field (base) 
extendsFrom:'RelateField',minChars:1,allow_single_deselect:false,events:{'click .btn[name=add]':'addItem','click .btn[name=remove]':'removeItem','click .btn[name=primary]':'setPrimaryItem','change input.select2':'inputChanged'},plugins:['QuickSearchFilter','EllipsisInline','Tooltip','FieldDuplicate'],appendTeamTag:'input[name=append_team]',initialize:function(options){this._super("initialize",[options]);this._currentIndex=0;this.model.on("change:team_name_type",this.appendTeam,this);},bindDomChange:function(){var $el=this.$(this.appendTeamTag);if($el.length){$el.on('change',_.bind(function(){this.appendTeamValue=$el.prop('checked');this.model.set('team_name_type',this.appendTeamValue?'1':'0');},this));}
this._super('bindDomChange');},unbindDom:function(){this.$(this.appendTeamTag).off();this._super('unbindDom');},beforeFieldDuplicate:function(params){if(!params.model||!params.data){return false;}
if(this.name!==params.data.fieldName||params.model.get('id')!==this.model.get('id')){return true;}
var checked=params.data.checked||false,teamId=params.data.recordItemId||null,teams=this.model.get(this.name),team=_.findWhere(teams,{'id':teamId}),primaryTeam=_.findWhere(teams,{'primary':true}),checkedTeams=_.where(teams,{'checked':true}),newPrimaryTeam=null;if(checked===false&&checkedTeams.length===1){if(!this.disposed){this.render();}
return false;}
if(checked===false&&primaryTeam===team){newPrimaryTeam=_.find(checkedTeams,function(item){return item.id!==team.id;});if(newPrimaryTeam){team.primary=false;newPrimaryTeam.primary=true;}}
if(team){team.checked=checked;}
if(!this.disposed){this.render();}
return false;},formatFieldForDuplicate:function(){if(_.isUndefined(this.view.generatedValues)||_.isUndefined(this.view.generatedValues.teamsets)){return;}
var allTeams=this.view.generatedValues.teamsets[this.name];if(!(this.view.collection instanceof Backbone.Collection)){return;}
_.each(this.view.collection.models,function(model){var teamIds=_.compact(_.pluck(model.get(this.name),'id')),primaryTeam=_.findWhere(model.get(this.name),{primary:true}),teams=[];_.each(allTeams,function(team){if(model===this.view.primaryRecord||_.contains(teamIds,team.id)){teams.push(_.extend(app.utils.deepCopy(team),{checked:(model===this.view.primaryRecord&&_.contains(teamIds,team.id)===true),primary:(primaryTeam&&primaryTeam.id===team.id)}));}else{teams.push({checked:false,primary:false});}},this);model.set(this.name,teams,{silent:true});},this);},unformatFieldForDuplicate:function(){if(!this.view.primaryRecord){return;}
this.view.primaryRecord.set(this.name,_.where(this.view.primaryRecord.get(this.name),{'checked':true}),{silent:true});},_loadTemplate:function(){this._super("_loadTemplate");var template=app.template.getField(this.type,this.view.name+'-'+this.tplName,this.model.module);if(!template&&this.view.meta&&this.view.meta.template){template=app.template.getField(this.type,this.view.meta.template+'-'+this.tplName,this.model.module);}
if(!template&&this.view.action==='list'&&this.tplName==='edit'){this.template=app.template.getField(this.type,'list',this.module,this.tplName)||app.template.empty;this.tplName='list';}
this.template=template||this.template;},_render:function(){var self=this;if(_.isEmpty(this.value)&&this.action=='edit'){this.value=app.utils.deepCopy(app.user.getPreference('default_teams'));this._updateAndTriggerChange(this.value);}
this._super('_render');if(this.tplName==='edit'){this.$(this.fieldTag).each(function(index,el){var plugin=$(el).data("select2");if(!_.isUndefined(plugin)&&_.isUndefined(plugin.setTeamIndex)){plugin.setTeamIndex=function(){self._currentIndex=$(this).data("index");};plugin.opts.element.on("select2-open",plugin.setTeamIndex);}});}},setValue:function(model){if(!model){return;}
var index=this._currentIndex,team=this.value;team[index||0].id=model.id;team[index||0].name=model.value;this._updateAndTriggerChange(team);},format:function(value){if(this.model.isNew()&&(_.isEmpty(value)||this.model.get(this.name)!=value)){if(_.isEmpty(value)){value=app.utils.deepCopy(app.user.getPreference("default_teams"));this.model.set(this.name,value);this.model.setDefaultAttribute(this.name,value);}else{this.model.set(this.name,value);this.model.removeDefaultAttribute(this.name)}}
value=app.utils.deepCopy(value);if(!_.isArray(value)){value=[{name:value}];}
if(this.view.action==='list'&&this.view.name!=='merge-duplicates'){var primaryTeam=_.find(value,function(team){return team.primary;});return!_.isUndefined(primaryTeam)&&!_.isUndefined(primaryTeam.name)?primaryTeam.name:"";}
if(_.isArray(value)&&value.length>0){_.each(value,function(team){delete team.remove_button;delete team.add_button;});if(!value[this._currentIndex]){value[this._currentIndex]={};}
value[value.length-1].add_button=true;var numTeams=_.filter(value,function(team){return!_.isUndefined(team.id);}).length;_.each(value,function(team){if(_.isUndefined(team.id)||numTeams>1){team.remove_button=true;}});}
return value;},equals:function(other){var validateMap=function(item){return{id:item.id,primary:item.primary};};return _.isEqual(_.map(this.getFormattedValue(),validateMap),_.map(other.getFormattedValue(),validateMap));},addTeam:function(){this._currentIndex++;this._updateAndTriggerChange(this.value);},removeTeam:function(index){if(index===0&&this.value.length===1){return;}
if(this._currentIndex===this.value.length-1){this._currentIndex--;}
var removed=this.value.splice(index,1);if(removed&&removed.length>0&&removed[0].primary){this.setPrimary(0);}
this._updateAndTriggerChange(this.value);},appendTeam:function(){var appendTeam=this.model.get("team_name_type");if(appendTeam!=="1"){var primaryTeam=_.find(this.value,function(team){return team.primary;},this);if(_.isEmpty(primaryTeam)){this.setPrimary(0);}}},setPrimary:function(index){var previousPrimary=null,appendTeam=this.model.get("team_name_type");_.each(this.value,function(team,i){if(team.primary&&appendTeam==="1"){previousPrimary=i;}
team.primary=false;});if(previousPrimary!==index&&this.value[index].name){this.value[index].primary=true;}
this._updateAndTriggerChange(this.value);return(this.value[index])?this.value[index].primary:false;},inputChanged:function(evt){this._updateAndTriggerChange(this.value);},bindDataChange:function(){if(this.model){this.model.on('change:'+this.name,function(){this.render();if(!_.isEmpty(this.$(this.fieldTag).data('select2'))){this.$(this.$(this.fieldTag).get(this._currentIndex)).focus();}},this);}},_updateAndTriggerChange:function(value){_.each(value,function(team){delete team.add_button;delete team.remove_button;});this.model.unset(this.name,{silent:true}).set(this.name,value);this.model.trigger("change");},addItem:_.debounce(function(evt){var index=$(evt.currentTarget).data('index');if(!index||this.value[index].id){this.addTeam();}},0),removeItem:_.debounce(function(evt){var index=$(evt.currentTarget).data('index');if(_.isNumber(index)){this.removeTeam(index);}},0),setPrimaryItem:_.debounce(function(evt){var index=$(evt.currentTarget).data('index');if(!this.value[index]||!this.value[index].id){return;}
this.$(".btn[name=primary]").removeClass("active");if(this.setPrimary(index)){this.$(".btn[name=primary][data-index="+index+"]").addClass("active");}},0)}) },
"textarea": {"controller": /*
     * Your installation or use of this SugarCRM file is subject to the applicable
     * terms available at
     * http://support.sugarcrm.com/06_Customer_Center/10_Master_Subscription_Agreements/.
     * If you do not agree to all of the applicable terms or do not have the
     * authority to bind the entity as an authorized representative, then do not
     * install or use this SugarCRM file.
     *
     * Copyright (C) SugarCRM Inc. All rights reserved.
     */
({
	// Textarea Field (base) 
fieldTag:'textarea',_defaultSettings:{max_display_chars:450,collapsed:true},collapsed:undefined,_settings:{},plugins:['EllipsisInline'],events:{'click [data-action=toggle]':'toggleCollapsed'},initialize:function(options){this._super('initialize',[options]);this._initSettings();this.collapsed=this._settings.collapsed;},_initSettings:function(){this._settings=_.extend({},this._defaultSettings,this.def&&this.def.settings||{});return this;},setMode:function(name){var isList=(this.tplName==='list')&&_.contains(['edit','disabled'],name),mode=isList&&this.view.name!=='merge-duplicates'?this.tplName:name;this._super('setMode',[mode]);},format:function(value){if(this.tplName!=='edit'){var max=this._settings.max_display_chars;value={long:value};if(value.long&&value.long.length>max){value.short=value.long.substr(0,max).trim();}}
return value;},toggleCollapsed:function(){this.collapsed=!this.collapsed;this.render();}}) },
"timeperiod": {"controller": /*
     * Your installation or use of this SugarCRM file is subject to the applicable
     * terms available at
     * http://support.sugarcrm.com/06_Customer_Center/10_Master_Subscription_Agreements/.
     * If you do not agree to all of the applicable terms or do not have the
     * authority to bind the entity as an authorized representative, then do not
     * install or use this SugarCRM file.
     *
     * Copyright (C) SugarCRM Inc. All rights reserved.
     */
({
	// Timeperiod Field (base) 
extendsFrom:'EnumField',plugins:['EllipsisInline','Tooltip'],tooltipTemplate:'',tpCollection:undefined,tpTooltipMap:{},cssClassSelector:'',updateDefaultTooltip:false,initialize:function(options){this._super("initialize",[options]);this.tpCollection=app.data.createBeanCollection("TimePeriods");this.tpCollection.once('reset',this.formatTooltips,this);this.tpCollection.fetch({limit:100});this.tooltipTemplate=app.template.getField('timeperiod','tooltip',this.module);},bindDataChange:function(){this._super("bindDataChange");if(this.model){this.model.on('change:'+this.name,function(){this.initializeAllPluginTooltips();},this);}},formatTooltips:function(data){var usersDatePrefs=app.user.getPreference('datepref');data.each(function(model){this.tpTooltipMap[model.id]={start:app.date.format(app.date.parse(model.get('start_date')),usersDatePrefs),end:app.date.format(app.date.parse(model.get('end_date')),usersDatePrefs)}},this);this.tpCollection=undefined;if(this.updateDefaultTooltip){this.updateDefaultTooltip=false;var tooltipText=app.lang.get('LBL_DROPDOWN_TOOLTIP','TimePeriods',this.tpTooltipMap[this.value[0]]);this.$('[rel="tooltip"]').attr('data-original-title',tooltipText);}},_render:function(){this._super("_render");if(this.tplName=='noaccess'){return this;}
var $el=this.$(this.fieldTag);$el.on('select2-selected',_.bind(this.onSelectClear,this));$el.on('select2-open',_.bind(this.onSelectOpen,this));$el.on('select2-close',_.bind(this.onSelectClear,this));this.initializeAllPluginTooltips();return this;},onSelectOpen:function(){var $el=$('div.'+this.cssClassSelector);this.removePluginTooltips($el);this.addPluginTooltips($el);},onSelectClear:function(){var $el=$('div.'+this.cssClassSelector);this.removePluginTooltips($el);},getSelect2Options:function(optionsKeys){var options=this._super("getSelect2Options",[optionsKeys]);options.formatResult=_.bind(this.formatOption,this);options.formatSelection=_.bind(this.formatOption,this);if(_.isEmpty(options.dropdownCssClass)){options.dropdownCssClass='select2-timeperiod-dropdown-'+this.cid;}
this.cssClassSelector=options.dropdownCssClass;return options;},formatOption:function(object){this.updateDefaultTooltip=_.isUndefined(this.tpTooltipMap[object.id]);return this.tooltipTemplate({tooltip:this.tpTooltipMap[object.id],value:object.text});}}) },
"unlink-action": {"controller": /*
     * Your installation or use of this SugarCRM file is subject to the applicable
     * terms available at
     * http://support.sugarcrm.com/06_Customer_Center/10_Master_Subscription_Agreements/.
     * If you do not agree to all of the applicable terms or do not have the
     * authority to bind the entity as an authorized representative, then do not
     * install or use this SugarCRM file.
     *
     * Copyright (C) SugarCRM Inc. All rights reserved.
     */
({
	// Unlink-action Field (base) 
extendsFrom:'RowactionField',initialize:function(options){options.def.event=options.def.event||'list:unlinkrow:fire';this._super('initialize',[options]);this.type='rowaction';},hasAccess:function(){var parentModule=this.context.get('parentModule');if(parentModule==='Home'){return false;}
var link=this.context.get('link');if(link&&app.utils.isRequiredLink(parentModule,link)){return false;}
return this._super('hasAccess');}}) },
"url": {"controller": /*
     * Your installation or use of this SugarCRM file is subject to the applicable
     * terms available at
     * http://support.sugarcrm.com/06_Customer_Center/10_Master_Subscription_Agreements/.
     * If you do not agree to all of the applicable terms or do not have the
     * authority to bind the entity as an authorized representative, then do not
     * install or use this SugarCRM file.
     *
     * Copyright (C) SugarCRM Inc. All rights reserved.
     */
({
	// Url Field (base) 
plugins:['EllipsisInline'],initialize:function(options){this._super("initialize",arguments);if(app.utils.isTruthy(this.def.gen)){this.def.readonly=true;}},format:function(value){if(value&&!value.match(/^([a-zA-Z]+):\/\//)){value="http://"+value;}
return value;},unformat:function(value){value=(value!=''&&value!='http://')?value.trim():"";return value;},getFieldElement:function(){return this.$('a');},_render:function(){this.def.link_target=_.isUndefined(this.def.link_target)?'_blank':this.def.link_target;app.view.Field.prototype._render.call(this);}}) },
"vcard": {"controller": /*
     * Your installation or use of this SugarCRM file is subject to the applicable
     * terms available at
     * http://support.sugarcrm.com/06_Customer_Center/10_Master_Subscription_Agreements/.
     * If you do not agree to all of the applicable terms or do not have the
     * authority to bind the entity as an authorized representative, then do not
     * install or use this SugarCRM file.
     *
     * Copyright (C) SugarCRM Inc. All rights reserved.
     */
({
	// Vcard Field (base) 
extendsFrom:'RowactionField',initialize:function(options){this._super("initialize",[options]);this.type='rowaction';},rowActionSelect:function(){var url=app.api.buildURL(this.model.module,'vcard',{id:this.model.id},{platform:app.config.platform});if(_.isEmpty(url)){app.logger.error('Unable to get the vCard download uri.');return;}
app.api.fileDownload(url,{error:function(data){app.error.handleHttpError(data,{});}},{iframe:this.$el});},bindDataChange:function(){if(this.model){this.model.on('change',this.render,this);}}}) }
}}
,
"views": {
"base": {
"login": {"controller": /*
     * Your installation or use of this SugarCRM file is subject to the applicable
     * terms available at
     * http://support.sugarcrm.com/06_Customer_Center/10_Master_Subscription_Agreements/.
     * If you do not agree to all of the applicable terms or do not have the
     * authority to bind the entity as an authorized representative, then do not
     * install or use this SugarCRM file.
     *
     * Copyright (C) SugarCRM Inc. All rights reserved.
     */
({
	// Login View (base) 
plugins:['ErrorDecoration'],fallbackFieldTemplate:'edit',events:{'click [name=login_button]':'login','keypress':'handleKeypress'},_alertKeys:{adminOnly:'admin_only',invalidGrant:'invalid_grant_error',login:'login',needLogin:'needs_login_error',offsetProblem:'offset_problem',unsupportedBrowser:'unsupported_browser'},showPasswordReset:false,logoUrl:null,handleKeypress:function(event){if(event.keyCode===13){this.$('input').trigger('blur');this.login();}},_declareModel:function(meta){meta=meta||{};var fields={};_.each(_.flatten(_.pluck(meta.panels,'fields')),function(field){fields[field.name]=field;});app.data.declareModel('Login',{fields:fields});},initialize:function(options){if(app.progress){app.progress.hide();}
this._declareModel(options.meta);options.context.prepare(true);this._super('initialize',[options]);var config=app.metadata.getConfig();if(config&&app.config.forgotpasswordON===true){this.showPasswordReset=true;}
$(document).attr('title','SugarCRM');},_render:function(){this.logoUrl=app.metadata.getLogoUrl();this._super('_render');this.refreshAdditionalComponents();if(!this._isSupportedBrowser()){app.alert.show(this._alertKeys.unsupportedBrowser,{level:'warning',title:'',messages:[app.lang.getAppString('LBL_ALERT_BROWSER_NOT_SUPPORTED'),app.lang.getAppString('LBL_ALERT_BROWSER_SUPPORT')]});}
var config=app.metadata.getConfig(),level=config.system_status&&config.system_status.level;if(level==='maintenance'||level==='admin_only'){app.alert.show(this._alertKeys.adminOnly,{level:'warning',title:'',messages:['',app.lang.getAppString(config.system_status.message)]});}
app.alert.dismiss(this._alertKeys.offsetProblem);return this;},refreshAdditionalComponents:function(){_.each(app.additionalComponents,function(component){component.render();});},login:function(){this.model.set({password:this.$('input[name=password]').val(),username:this.$('input[name=username]').val()});this.model.doValidate(null,_.bind(function(isValid){if(isValid){app.$contentEl.hide();app.alert.show(this._alertKeys.login,{level:'process',title:app.lang.getAppString('LBL_LOADING'),autoClose:false});var args={password:this.model.get('password'),username:this.model.get('username')};app.login(args,null,{error:function(){app.$contentEl.show();app.logger.debug('login failed!');},success:_.bind(function(){app.logger.debug('logged in successfully!');app.alert.dismiss(this._alertKeys.invalidGrant);app.alert.dismiss(this._alertKeys.needLogin);app.events.on('app:sync:complete',function(){app.logger.debug('sync in successfully!');_.defer(_.bind(this.postLogin,this));},this);},this),complete:_.bind(function(){app.alert.dismiss(this._alertKeys.login);},this)});}},this));app.alert.dismiss('offset_problem');},postLogin:function(){if(!app.user.get('show_wizard')){this.refreshAdditionalComponents();if(new Date().getTimezoneOffset()!=(app.user.getPreference('tz_offset_sec')/-60)){var link=new Handlebars.SafeString('<a href="#'+
app.router.buildRoute('Users',app.user.id,'edit')+'">'+
app.lang.get('LBL_TIMEZONE_DIFFERENT_LINK')+'</a>');var message=app.lang.get('TPL_TIMEZONE_DIFFERENT',null,{link:link});app.alert.show(this._alertKeys.offsetProblem,{messages:message,closeable:true,level:'warning'});}}
app.$contentEl.show();},_isSupportedBrowser:function(){var supportedBrowsers={msie:{min:9,max:11},safari:{min:537},mozilla:{min:37},chrome:{min:537.36}};var current=parseFloat($.browser.version);if((/Trident\/7\./).test(navigator.userAgent)){var supported=supportedBrowsers['msie'];return current>=supported.min;}else{for(var b in supportedBrowsers){if($.browser[b]){var supported=supportedBrowsers[b];return current>=supported.min;}}}}}) },
"profileactions": {"controller": /*
     * Your installation or use of this SugarCRM file is subject to the applicable
     * terms available at
     * http://support.sugarcrm.com/06_Customer_Center/10_Master_Subscription_Agreements/.
     * If you do not agree to all of the applicable terms or do not have the
     * authority to bind the entity as an authorized representative, then do not
     * install or use this SugarCRM file.
     *
     * Copyright (C) SugarCRM Inc. All rights reserved.
     */
({
	// Profileactions View (base) 
plugins:['Dropdown','Tooltip'],events:{'click [data-action=link]':'linkClicked','click #userTab':'hideSubmenuItems','click #userActions':'closeSubmenu'},displaySubmenu:false,initialize:function(options){app.view.View.prototype.initialize.call(this,options);app.events.on("app:sync:complete",this.render,this);app.events.on("bwc:profile:entered",this.bwcProfileEntered,this);app.events.on("bwc:avatar:removed",this.bwcAvatarRemoved,this);app.user.on("change:picture",this.setCurrentUserData,this);},_renderHtml:function(){if(!app.router||!app.api.isAuthenticated()||app.config.appStatus==='offline'){return;}
if(!_.isEmpty(this.meta)){this.menulist=this.filterAvailableMenu(app.utils.deepCopy(this.meta));}
this._super('_renderHtml');},linkClicked:function(evt){evt.preventDefault();evt.stopPropagation();var $menuItem=this.$(evt.currentTarget),$submenu=$menuItem.closest('li').find('.dropdown-inset');$submenu.toggle();$menuItem.toggleClass("open");var maxHeight=330,currentHeight=this.$("#fullmenu").outerHeight();this.$('.dropdown-submenu').toggleClass('with-scroll',currentHeight>=maxHeight);},closeSubmenu:function(){this.$('.dropdown-submenu').removeClass("open");},hideSubmenuItems:function(){this.$('.dropdown-inset').hide();},filterAvailableMenu:function(menuMeta){var result=[];_.each(menuMeta,function(item){item=this.filterMenuProperties(item);if(!_.isEmpty(item['acl_module'])){if(app.acl.hasAccess(item.acl_action,item.acl_module)){result.push(item);}}else if(item['acl_action']==='admin'&&item['label']==='LBL_ADMIN'){if(app.acl.hasAccessToAny('developer')){result.push(item);}}else{if(app.acl.hasAccess('admin','Administration')||app.acl.hasAccessToAny('developer')||item['acl_action']!=='admin'){result.push(item);}}},this);return result;},filterMenuProperties:function(singleItem){if(singleItem['label']==='LBL_PROFILE'){singleItem['img_url']=this.pictureUrl;if(singleItem['route']==='#bwc/index.php?module=Users&action=DetailView&record='){singleItem['route']+=this.userId;}}
return singleItem;},bwcProfileEntered:function(){var self=this;app.user.load(function(){self.setCurrentUserData();});},bwcAvatarRemoved:function(){app.user.set("picture",'');this.setCurrentUserData();},setCurrentUserData:function(){this.fullName=app.user.get("full_name");this.userName=app.user.get("user_name");this.userId=app.user.get('id');var picture=app.user.get("picture");this.pictureUrl=picture?app.api.buildFileURL({module:"Users",id:this.userId,field:"picture"},{cleanCache:true}):'';this.render();},_dispose:function(){if(app.user)app.user.off(null,null,this);app.view.View.prototype._dispose.call(this);}}) },
"access-denied": {"controller": /*
     * Your installation or use of this SugarCRM file is subject to the applicable
     * terms available at
     * http://support.sugarcrm.com/06_Customer_Center/10_Master_Subscription_Agreements/.
     * If you do not agree to all of the applicable terms or do not have the
     * authority to bind the entity as an authorized representative, then do not
     * install or use this SugarCRM file.
     *
     * Copyright (C) SugarCRM Inc. All rights reserved.
     */
({
	// Access-denied View (base) 
className:'error-page',cubeOptions:{spin:false},events:{'click .sugar-cube':'spinCube'},spinCube:function(){this.cubeOptions.spin=!this.cubeOptions.spin;this.render();}}) },
"active-tasks": {"controller": /*
     * Your installation or use of this SugarCRM file is subject to the applicable
     * terms available at
     * http://support.sugarcrm.com/06_Customer_Center/10_Master_Subscription_Agreements/.
     * If you do not agree to all of the applicable terms or do not have the
     * authority to bind the entity as an authorized representative, then do not
     * install or use this SugarCRM file.
     *
     * Copyright (C) SugarCRM Inc. All rights reserved.
     */
({
	// Active-tasks View (base) 
extendsFrom:'TabbedDashletView',_defaultSettings:{limit:10,visibility:'user'},initialize:function(options){options.meta=options.meta||{};options.meta.template='tabbed-dashlet';this.plugins=_.union(this.plugins,['LinkedModel']);this.tbodyTag='ul[data-action="pagination-body"]';this._super('initialize',[options]);},_initEvents:function(){this._super('_initEvents');this.on('active-tasks:close-task:fire',this.closeTask,this);return this;},closeTask:function(model){var self=this;var name=Handlebars.Utils.escapeExpression(app.utils.getRecordName(model)).trim();var context=app.lang.get('LBL_MODULE_NAME_SINGULAR',model.module).toLowerCase()+' '+name;app.alert.show('complete_task_confirmation:'+model.get('id'),{level:'confirmation',messages:app.utils.formatString(app.lang.get('LBL_ACTIVE_TASKS_DASHLET_CONFIRM_CLOSE'),[context]),onConfirm:function(){model.save({status:'Completed'},{showAlerts:true,success:self._getRemoveModelCompleteCallback()});}});},_initTabs:function(){this._super("_initTabs");var today=new Date();today.setHours(23,59,59);today.toISOString();_.each(_.pluck(_.pluck(this.tabs,'filters'),'date_due'),function(filter){_.each(filter,function(value,operator){if(value==='today'){filter[operator]=today;}});});},createRecord:function(event,params){if(this.module!=='Home'){this.createRelatedRecord(params.module,params.link);}else{var self=this;app.drawer.open({layout:'create-actions',context:{create:true,module:params.module}},function(context,model){if(!model){return;}
self.context.resetLoadFlag();self.context.set('skipFetch',false);if(_.isFunction(self.loadData)){self.loadData();}else{self.context.loadData();}});}},bindCollectionAdd:function(model){var pictureUrl=app.api.buildFileURL({module:'Users',id:model.get('assigned_user_id'),field:'picture'});model.set('picture_url',pictureUrl);this._super('bindCollectionAdd',[model]);},_renderHtml:function(){if(this.meta.config){this._super('_renderHtml');return;}
var tab=this.tabs[this.settings.get('activeTab')];if(tab.overdue_badge){this.overdueBadge=tab.overdue_badge;}
this._super('_renderHtml');}}) },
"activitystream": {"controller": /*
     * Your installation or use of this SugarCRM file is subject to the applicable
     * terms available at
     * http://support.sugarcrm.com/06_Customer_Center/10_Master_Subscription_Agreements/.
     * If you do not agree to all of the applicable terms or do not have the
     * authority to bind the entity as an authorized representative, then do not
     * install or use this SugarCRM file.
     *
     * Copyright (C) SugarCRM Inc. All rights reserved.
     */
({
	// Activitystream View (base) 
events:{'change div[data-placeholder]':'checkPlaceholder','keydown div[data-placeholder]':'checkPlaceholder','keypress div[data-placeholder]':'checkPlaceholder','input div[data-placeholder]':'checkPlaceholder','click .reply':'showAddComment','click .reply-btn':'addComment','click .preview-btn:not(.disabled)':'previewRecord','click .comment-btn':'toggleReplyBar','click .more':'fetchComments'},tagName:"li",className:"activitystream-posts-comments-container",plugins:['RelativeTime','FileDragoff','QuickSearchFilter','Taggable','Tooltip'],cacheNamePrefix:"user:avatars:",cacheNameExpire:":expiry",expiryTime:36000000,thresholdRelativeTime:2,_unformattedPost:null,_unformattedComments:{},urlRegExp:/\b((?:https?:\/\/|www\d{0,3}[.]|[a-z0-9.\-]+[.][a-z]{2,4}\/)(?:[^\s()<>]+|\(([^\s()<>]+|(\([^\s()<>]+\)))*\))+(?:\(([^\s()<>]+|(\([^\s()<>]+\)))*\)|[^\s`!()\[\]{};:\'".,<>?«»“”‘’]))/ig,_attachImageSelector:'img[data-note-id]',initialize:function(options){this.opts={params:{}};this.readonly=!!options.readonly;this.nopreview=!!options.nopreview;app.view.View.prototype.initialize.call(this,options);var lastComment=this.model.get("last_comment");this.commentsCollection=app.data.createRelatedCollection(this.model,"comments");if(lastComment&&!_.isUndefined(lastComment.id)){this.commentsCollection.reset([lastComment]);}
this.model.set("comments",this.commentsCollection);var count=parseInt(this.model.get('comment_count'),10);this.remaining_comments=0;this.more_tpl="TPL_MORE_COMMENT";if(count){this.remaining_comments=count-1;if(count>2){this.more_tpl+="S";}}
this.preview=this.getPreviewData();var data=this.model.get('data');var activity_type=this.model.get('activity_type');this.tpl="TPL_ACTIVITY_"+activity_type.toUpperCase();switch(activity_type){case'post':if(!data.value){this.tpl=null;}
break;case'update':data.updateStr=this.processUpdateActivityTypeMessage(data.changes);this.model.set('data',data);break;case'attach':var url,urlAttributes={module:'Notes',id:data.noteId,field:'filename'};if(data.mimetype&&data.mimetype.indexOf("image/")===0){url=app.api.buildFileURL(urlAttributes,{htmlJsonFormat:false,passOAuthToken:false,cleanCache:true,forceDownload:false});data.embeds=[{type:"image",src:url,noteId:data.noteId}];}else{url=app.api.buildFileURL(urlAttributes);}
data.url=url;this.$el.data(data);this.model.set('data',data);this.model.set('display_parent_type','Files');break;}
this.processEmbed();this.resizeVideo=_.bind(_.throttle(this.resizeVideo,500),this);$(window).on('resize.'+this.cid,this.resizeVideo);this.setTaggableRecord(this.model.get('parent_type'),this.model.get('parent_id'));},processUpdateActivityTypeMessage:function(changes){var updateTpl=Handlebars.compile(app.lang.get('TPL_ACTIVITY_UPDATE_FIELD','Activities')),parentType=this.model.get("parent_type"),fields=app.metadata.getModule(parentType).fields,self=this,updateStr;updateStr=_.reduce(changes,function(memo,changeObj){var fieldMeta=fields[changeObj.field_name],field=app.view.createField({def:fieldMeta,view:self,model:self.model,viewName:'detail'});changeObj.before=field.format(changeObj.before);changeObj.after=field.format(changeObj.after);changeObj.field_label=app.lang.get(fields[changeObj.field_name].vname,parentType);if(memo){return updateTpl(changeObj)+', '+memo;}
return updateTpl(changeObj);},'');return updateStr;},processEmbed:function(){var data=this.model.get('data');if(!_.isEmpty(data.embeds)){this.embeds=[];_.each(data.embeds,function(embed){var typeParts=embed.type.split('.'),type=typeParts.shift(),embedTpl;_.each(typeParts,function(part){type=type+part.charAt(0).toUpperCase()+part.substr(1);});embedTpl=app.template.get(this.name+'.'+type+'Embed');if(embedTpl){this.embeds.push(embedTpl(embed));}},this);}},fetchComments:function(){var self=this;this.commentsCollection.fetch({showAlerts:false,relate:true,success:function(collection){self.remaining_comments=0;self.render();}});},showAddComment:function(e){var currentTarget=this.$(e.currentTarget);currentTarget.closest('li').find('.activitystream-comment').toggle();currentTarget.closest('li').find('.activitystream-comment').find('.sayit').focus();e.preventDefault();},addComment:function(event){var self=this,parentId=this.model.id,payload={parent_id:parentId,data:{}},bean;payload.data=this.getComment();if(payload.data.value&&(payload.data.value.length>0)){bean=app.data.createRelatedBean(this.model,null,'comments');bean.save(payload,{relate:true,success:_.bind(self.addCommentCallback,self)});}},addCommentCallback:function(model){var template,data;this.$('div.reply').empty().trigger('change');this.commentsCollection.add(model);this.toggleReplyBar();template=app.template.getView('activitystream.comment');data=model.get('data');data.value=this.formatTags(data.value);data.value=this.formatLinks(data.value);this.processAvatars();this.$('.comments').prepend(template(model.attributes));this.initializeAllPluginTooltips();this.context.trigger('activitystream:post:prepend',this.model);},previewRecord:function(event){var el=this.$(event.currentTarget),data=el.data(),module=data.module,id=data.id;if(module&&id){var model=app.data.createBean(module),collection=this.context.get("collection");model.set("id",id);app.events.trigger("preview:module:update",this.context.get("module"));app.events.trigger("preview:render",model,collection,true,this.cid);}
event.preventDefault();},_renderHtml:function(model){var isReplyBarOpen=this.$(".comment-btn").hasClass("active")&&this.$(".comment-btn").is(":visible"),replyVal=this.$(".reply").html();this.processAvatars();this.formatAllTagsAndLinks();this._setRelativeTimeAvailable();app.view.View.prototype._renderHtml.call(this);this.resizeVideo();if(isReplyBarOpen){this.toggleReplyBar();this.$(".reply").html(replyVal);}
this._addBrokenImageHandler();},_addBrokenImageHandler:function(){this.$(this._attachImageSelector).error(_.bind(function(event){var $brokenImg=$(event.currentTarget),linkSelector='a[data-note-id="'+$brokenImg.data('note-id')+'"]';this.$(linkSelector).contents().unwrap();$brokenImg.closest('div[class="embed"]').remove();},this));},_setRelativeTimeAvailable:function(){var diffInDays=app.date().diff(this.model.get('date_entered'),'days',true);this.useRelativeTime=(diffInDays<=this.thresholdRelativeTime);},formatAllTagsAndLinks:function(){var post=this.model.get('data');this.unformatAllTagsAndLinks();if(post){this._unformattedPost=post.value;post.value=this.formatLinks(post.value);post.value=this.formatTags(post.value);}
this.commentsCollection.each(function(model){var data=model.get('data');this._unformattedComments[model.get('id')]=data.value;data.value=this.formatLinks(data.value);data.value=this.formatTags(data.value);},this);},unformatAllTagsAndLinks:function(){var post=this.model.get('data');if(post){post.value=this._unformattedPost||post.value;}
this.commentsCollection.each(function(model){var data=model.get('data');data.value=this._unformattedComments[model.get('id')]||data.value;},this);},formatLinks:function(post){var formattedPost='';if(post&&(post.length>0)){formattedPost=post.replace(this.urlRegExp,function(url){var href=url;if((url.indexOf('http://')!==0)&&(url.indexOf('https://')!==0)){href='http://'+url;}
return'<a href="'+href+'" target="_blank">'+url+'</a>';});}
return formattedPost;},resizeVideo:function(){var data=this.model.get('data'),$embed=this.$('.embed'),$iframes=$embed.find('iframe'),videoCount=0,embedWidth;if(_.isArray(data.embeds)){embedWidth=$embed.width();_.each(data.embeds,function(embed){var $iframe,iframeWidth,iframeHeight;if(((embed.type==='video')||(embed.type==='rich'))&&($iframes.length>0)){$iframe=$iframes.eq(videoCount);iframeWidth=Math.min(embedWidth,480);iframeHeight=parseInt(embed.height,10)*(iframeWidth / parseInt(embed.width,10));$iframe.prop({width:iframeWidth,height:iframeHeight});videoCount++;}});}},processAvatars:function(){var comments=this.model.get('comments'),postPictureUrl;if(this.model.get('activity_type')==='post'&&!this.model.get('picture_url')){postPictureUrl=this.getAvatarUrlForUser(this.model,'post');this.model.set('picture_url',postPictureUrl);}
if(comments){comments.each(function(comment){var commentPictureUrl=this.getAvatarUrlForUser(comment,'comment');comment.set('picture_url',commentPictureUrl);},this);}},getAvatarUrlForUser:function(model,activityType){var createdBy=model.get('created_by'),hasPicture=this.checkUserHasPicture(model,activityType);return hasPicture?this.buildAvatarUrl(createdBy):'';},checkUserHasPicture:function(model,activityType){var createdBy=model.get('created_by'),hasPicture;if(createdBy===app.user.get('id')){hasPicture=!_.isEmpty(app.user.get('picture'));}else{hasPicture=this.getUserPictureStatus(createdBy);}
if(_.isUndefined(hasPicture)){this.fetchUserPicture(model,activityType);hasPicture=false;}
return hasPicture;},fetchUserPicture:function(model,activityType){var self=this,createdBy=model.get('created_by'),user=app.data.createBean('Users',{id:createdBy});user.fetch({fields:["picture"],success:function(){var pictureUrl=self.buildAvatarUrl(createdBy),hasPicture=!_.isEmpty(user.get('picture'));self.setUserPictureStatus(createdBy,hasPicture);if(hasPicture){self.$('#avatar-'+activityType+'-'+model.get('id')).html("<img src='"+pictureUrl+"' alt='"+model.get('created_by_name')+"'>");}},error:function(){self.setUserPictureStatus(createdBy,false);}});},getUserPictureStatus:function(userId){var hasPicture=app.cache.get(this.cacheNamePrefix+userId),cachedTTL=app.cache.get(this.cacheNamePrefix+userId+this.cacheNameExpire);return(cachedTTL<$.now())?undefined:hasPicture;},setUserPictureStatus:function(userId,hasPicture){app.cache.set(this.cacheNamePrefix+userId,hasPicture);app.cache.set(this.cacheNamePrefix+userId+this.cacheNameExpire,$.now()+this.expiryTime);},buildAvatarUrl:function(userId){return app.api.buildFileURL({module:'Users',id:userId,field:'picture'});},toggleReplyBar:function(){this.$(".comment-btn").toggleClass("active");this.$(".reply-area").toggleClass("hide");},getComment:function(){return this.unformatTags(this.$('div.reply'));},getPreviewData:function(){var parentModel,preview={enabled:true,label:'LBL_PREVIEW'},isBwcEnabled,module=this.model.get('display_parent_type');if(module){isBwcEnabled=true;var moduleMetadata=app.metadata.getModule(module);if(moduleMetadata&&_.has(moduleMetadata,'isBwcEnabled')){isBwcEnabled=moduleMetadata.isBwcEnabled;}}else{isBwcEnabled=false;}
if(isBwcEnabled){preview.enabled=false;preview.label='LBL_PREVIEW_BWC_TOOLTIP';}else if(this.model.get("activity_type")==='attach'){preview.enabled=false;preview.label='LBL_PREVIEW_DISABLED_ATTACHMENT';}else if(_.isEmpty(this.model.get('display_parent_id'))||_.isEmpty(this.model.get('display_parent_type'))){preview.enabled=false;preview.label='LBL_PREVIEW_DISABLED_NO_RECORD';}else if(!app.acl.hasAccess("view",this.model.get('display_parent_type'))){preview.enabled=false;preview.label='LBL_PREVIEW_DISABLED_NO_ACCESS';}else if(this.model.get('preview_enabled')===false){preview.enabled=false;preview.label=this.model.get('preview_disabled_reason');}else{parentModel=this._getParentModel('record',this.context);if(parentModel&&parentModel.module==this.model.get('display_parent_type')&&parentModel.id===this.model.get('display_parent_id')){preview.enabled=false;preview.label='LBL_PREVIEW_DISABLED_SAME_RECORD';}}
return preview;},_getParentModel:function(layoutName,context){if(context){if(context.get('layout')===layoutName){return context.get('model');}else{return this._getParentModel(layoutName,context.parent);}}else{return null;}},checkPlaceholder:function(e){var el=e.currentTarget;if(el.textContent){el.setAttribute('data-hide-placeholder','true');}else{el.removeAttribute('data-hide-placeholder');}},bindDataChange:function(){if(this.commentsCollection){this.commentsCollection.on("add",function(){this.model.set('comment_count',this.model.get('comment_count')+1);},this);}
app.view.View.prototype.bindDataChange.call(this);},unbindData:function(){if(this.commentsCollection){this.commentsCollection.off();}
app.view.View.prototype.unbindData.call(this);},_dispose:function(){$(window).off('resize.'+this.cid);this.$(this._attachImageSelector).off('error');app.view.View.prototype._dispose.call(this);this.commentsCollection=null;this.opts=null;}}) },
"activitystream-bottom": {"controller": /*
     * Your installation or use of this SugarCRM file is subject to the applicable
     * terms available at
     * http://support.sugarcrm.com/06_Customer_Center/10_Master_Subscription_Agreements/.
     * If you do not agree to all of the applicable terms or do not have the
     * authority to bind the entity as an authorized representative, then do not
     * install or use this SugarCRM file.
     *
     * Copyright (C) SugarCRM Inc. All rights reserved.
     */
({
	// Activitystream-bottom View (base) 
bindDataChange:function(){this.collection.on('reset',this.render,this);}}) },
"activitystream-dashlet": {"controller": /*
     * Your installation or use of this SugarCRM file is subject to the applicable
     * terms available at
     * http://support.sugarcrm.com/06_Customer_Center/10_Master_Subscription_Agreements/.
     * If you do not agree to all of the applicable terms or do not have the
     * authority to bind the entity as an authorized representative, then do not
     * install or use this SugarCRM file.
     *
     * Copyright (C) SugarCRM Inc. All rights reserved.
     */
({
	// Activitystream-dashlet View (base) 
plugins:['Dashlet'],events:{'click .addComment':'addComment'},className:'block filtered activitystream-layout',_defaultSettings:{limit:5,auto_refresh:0},omnibarView:null,initialize:function(opts){this.opts=opts;this.renderedActivities={};var moduleMeta=app.metadata.getModule(opts.context.parent.get('module'));this.activityStreamEnabled=moduleMeta.activityStreamEnabled;if(this.activityStreamEnabled&&this.activityStreamEnabled===true){this.plugins.push('Pagination');}
this._super('initialize',[opts]);this.setCollectionOptions();this.context.on('activitystream:post:prepend',this.prependPost,this);this.omnibarView=app.view.createView({context:this.context,name:'activitystream-omnibar',module:this.module,layout:this});if(this.meta.config){this.listenTo(this.layout,'init',this._addFilterComponent);this.layout.before('dashletconfig:save',function(){this.saveDashletFilter();},null,this);}},initDashlet:function()
{var options={};var self=this;options.limit=this.settings.get('limit')||this._defaultSettings.limit;this.settings.set('limit',options.limit);options.auto_refresh=this.settings.get('auto_refresh')||this._defaultSettings.auto_refresh;this.settings.set('auto_refresh',options.auto_refresh);options=_.extend({},this.context.get('collectionOptions'),options);this.context.set('collectionOptions',options);if(options.auto_refresh){if(this.timerId){clearInterval(this.timerId);}
this.timerId=setInterval(_.bind(function(){if(self.context){self.context.resetLoadFlag();self.loadData();}},this),options.auto_refresh*1000*60);}},_addFilterComponent:function(){var filterComponent=this.layout.getComponent('asdashlet-filter');if(filterComponent){return;}
this.layout._addComponentsFromDef([{layout:'asdashlet-filter'}]);},_getFilterDefFromMeta:function(id){if(!id){return;}
var moduleMeta=app.utils.deepCopy(app.metadata.getModule('Activities'));if(_.isObject(moduleMeta)){var filters=_.compact(_.flatten(_.pluck(_.compact(_.pluck(moduleMeta.filters,'meta')),'filters')));var filter=_.find(filters,function(filter){return filter.id===id;},this);if(filter){return filter;}}},setCollectionOptions:function(){var self=this;var endpoint=function(method,model,options,callbacks){var real_module=self.context.parent.get('module'),layoutType=self.context.parent.get('layout'),modelId=self.context.parent.get('modelId'),action=model.module,url;if(real_module=='Home'&&layoutType=='record'){real_module=self.module;layoutType='activities';}
switch(layoutType){case'activities':url=app.api.buildURL(real_module,null,{},options.params);break;case'records':url=app.api.buildURL(real_module,action,{},options.params);break;case'record':url=app.api.buildURL(real_module,'activities',{id:modelId,link:true},options.params);break;}
return app.api.call('read',url,null,callbacks);};this.context.set('collectionOptions',{endpoint:endpoint,success:function(collection){self.$el.find('.block-footer').toggleClass('hide',(collection.length>0));collection.each(function(model){self.renderPost(model);});},limit:this._defaultSettings.limit});},saveDashletFilter:function(){this.layout.trigger('asdashlet:config:save');},addComment:function()
{this.$el.find('.omnibar-dashlet').toggleClass('hide');},bindDataChange:function(){if(this.collection){this.collection.on('add',function(model){this.renderPost(model);},this);this.collection.on('reset',function(){this.disposeAllActivities();this.$el.find('.activitystream-list').html('');this.collection.each(function(post){this.renderPost(post);},this);},this);}
if(this.context.parent){var model=this.context.parent.get('model');this.listenTo(model,'sync',_.once(function(){this.listenTo(model,'sync',function(){var options=this.context.get('collectionOptions');var filterDef=this._getFilterDefFromMeta(this.meta.currentFilterId);if(filterDef){options.filter=filterDef.filter_definition;}
this.collection.fetch(options);});}));}},prependPost:function(model){var view=this.renderPost(model);view.$el.parent().prepend(view.$el);},loadData:function(options){if(_.isUndefined(this.context.parent.get('layout'))){return;}
if(!this.activityStreamEnabled){this.template=app.template.get(this.name+'.disabled');this._super('_render',[options]);return;}
options=_.extend({},options,this.context.get('collectionOptions'));if(this.collection){var filterDef=this._getFilterDefFromMeta(this.meta.currentFilterId);if(filterDef){options.filter=filterDef.filter_definition;}
this.collection.fetch(options);}},renderPost:function(model){var view;if(_.has(this.renderedActivities,model.id)){view=this.renderedActivities[model.id];}else{view=app.view.createView({context:this.context,name:'activitystream',module:this.module,layout:this,model:model,nopreview:true});this.$el.find('.activitystream-list').append(view.el);this.renderedActivities[model.id]=view;view.render();}
return view;},render:function(options)
{if(!this.rendered){this.rendered=true;this._super('render',[options]);this.$el.find('.omnibar-dashlet').append(this.omnibarView.el);this.omnibarView.render();}},unbindData:function(){var model,collection;if(this.context.parent){model=this.context.parent.get('model');collection=this.context.parent.get('collection');if(model){model.off('change sync',null,this);}
if(collection){collection.off('sync',null,this);}}
this._super('unbindData');},disposeAllActivities:function(){var nonActivities=[];_.each(this._components,function(component){if(component.name!=='activitystream'){nonActivities.push(component);}else{component.dispose();}});this._components=nonActivities;this.renderedActivities={};}}) },
"activitystream-omnibar": {"controller": /*
     * Your installation or use of this SugarCRM file is subject to the applicable
     * terms available at
     * http://support.sugarcrm.com/06_Customer_Center/10_Master_Subscription_Agreements/.
     * If you do not agree to all of the applicable terms or do not have the
     * authority to bind the entity as an authorized representative, then do not
     * install or use this SugarCRM file.
     *
     * Copyright (C) SugarCRM Inc. All rights reserved.
     */
({
	// Activitystream-omnibar View (base) 
events:{'click .addPost':'addPost','keyup .sayit':'_handleContentChange','change .sayit':'_handleContentChange','paste .sayit':'_handleContentPaste'},className:"omnibar",plugins:['DragdropAttachments','QuickSearchFilter','Taggable','Tooltip','Pagination'],initialize:function(options){this.nbspRegExp=new RegExp(String.fromCharCode(160),'g');app.view.View.prototype.initialize.call(this,options);this.user_id=app.user.get('id');this.full_name=app.user.get('full_name');this.picture_url=app.user.get('picture')?app.api.buildFileURL({module:'Users',id:this.user_id,field:'picture'}):'';this.toggleSubmitButton=_.debounce(this.toggleSubmitButton,200);this.on('attachments:add attachments:remove attachments:end',this.toggleSubmitButton,this);this.on('attachments:start',this.disableSubmitButton,this);},bindDataChange:function(){if(this.context.parent){this.context.parent.on('change',function(context){var moduleName=context.get('module'),modelId=context.get('model').get('id');this.setTaggableRecord(moduleName,modelId);},this);}
app.view.View.prototype.bindDataChange.call(this);},unbindData:function(){if(this.context.parent){this.context.parent.off(null,null,this);}
app.view.View.prototype.unbindData.call(this);},addPost:function(){var self=this,parentId=this.context.parent.get("model").id,parentType=this.context.parent.get("model").module,attachments=this.$('.activitystream-pending-attachment'),$submitButton=this.$('button.addPost'),bean;if(parentType=='Home'||parentType=='Activities'){parentType=null;parentId=null;}
var payload={activity_type:"post",parent_id:parentId||null,parent_type:parentType,data:{}};if(!$submitButton.hasClass('disabled')){payload.data=this.getPost();if(payload.data.value&&(payload.data.value.length>0)){$submitButton.addClass('disabled');bean=app.data.createBean('Activities');bean.save(payload,{success:function(model){self.$('div.sayit').empty().trigger('change').focus();model.set('picture',app.user.get('picture'));self.collection.add(model);self.context.trigger('activitystream:post:prepend',model);},complete:function(){$submitButton.removeClass('disabled');},showAlerts:true});}
this.trigger("attachments:process");}},getPost:function(){var post=this.unformatTags(this.$('div.sayit'));post.value=post.value.replace(this.nbspRegExp,' ');return post;},toggleSubmitButton:function(){var post=this.getPost(),attachments=this.getAttachments();if((post.value.length===0)&&(_.size(attachments)===0)){this.disableSubmitButton();}else{this.enableSubmitButton();}},enableSubmitButton:function(){this.$('.addPost').removeClass('disabled');},disableSubmitButton:function(){this.$('.addPost').addClass('disabled');},_handleContentChange:function(e){var el=e.currentTarget;if(el.textContent){el.setAttribute('data-hide-placeholder','true');}else{el.removeAttribute('data-hide-placeholder');}
this.toggleSubmitButton();},_handleContentPaste:function(e){_.defer(_.bind(this._handleContentChange,this),e);}}) },
"alert": {"controller": /*
     * Your installation or use of this SugarCRM file is subject to the applicable
     * terms available at
     * http://support.sugarcrm.com/06_Customer_Center/10_Master_Subscription_Agreements/.
     * If you do not agree to all of the applicable terms or do not have the
     * authority to bind the entity as an authorized representative, then do not
     * install or use this SugarCRM file.
     *
     * Copyright (C) SugarCRM Inc. All rights reserved.
     */
({
	// Alert View (base) 
extendsFrom:app.view.AlertView,className:'alert-wrapper',plugins:['Tooltip'],events:{'click [data-action=cancel]':'cancelClicked','click [data-action=confirm]':'confirmClicked','click [data-action=close]':'closeClicked','click a':'linkClick'},LEVEL:{PROCESS:'process',SUCCESS:'success',WARNING:'warning',INFO:'info',ERROR:'error',CONFIRMATION:'confirmation'},initialize:function(options){app.plugins.attach(this,'view');this.onConfirm=options.onConfirm;this.onCancel=options.onCancel;this.onLinkClick=options.onLinkClick;this.onClose=options.onClose;this.alertLevel=options.level;this.templateOptions=options.templateOptions;this.name='alert';},render:function(options){if(!this.triggerBefore('render')){return false;}
if(_.isUndefined(options)){return this;}
var template=this.getAlertTemplate(options.level,options.messages,options.title,this.templateOptions);this.$el.html(template);if(options.level==='confirmation'){this.bindCancelAndReturn();}
this.trigger('render');},cancel:function(){this.trigger('dismiss');app.alert.dismiss(this.key);},cancelClicked:function(){this.cancel();app.events.trigger('alert:cancel:clicked');if(_.isFunction(this.onCancel)){this.onCancel();}},confirmClicked:function(){this.cancel();app.events.trigger('alert:confirm:clicked');if(_.isFunction(this.onConfirm)){this.onConfirm();}},linkClick:function(event){if(_.isFunction(this.onLinkClick)){this.onLinkClick(event);}},closeClicked:function(event){if(_.isFunction(this.onClose)){this.onClose();}
app.alert.dismiss(this.key);},getAlertTemplate:function(level,messages,title,templateOptions){var template,alertClasses=this.getAlertClasses(level);title=title?title:this.getDefaultTitle(level);switch(level){case this.LEVEL.PROCESS:title=title.substr(-3)==='...'?title.substr(0,title.length-3):title;template=app.template.getView(this.name+'.process');break;case this.LEVEL.SUCCESS:case this.LEVEL.WARNING:case this.LEVEL.INFO:case this.LEVEL.ERROR:template=app.template.getView(this.name+'.error');break;case this.LEVEL.CONFIRMATION:template=app.template.getView(this.name+'.confirmation');break;default:template=app.template.empty;}
var seed=_.extend({},{alertClass:alertClasses,title:this.getTranslatedLabels(title),messages:this.getTranslatedLabels(messages)},templateOptions);return template(seed);},getAlertClasses:function(level){switch(level){case this.LEVEL.PROCESS:return'alert-process';case this.LEVEL.SUCCESS:return'alert-success';case this.LEVEL.WARNING:return'alert-warning';case this.LEVEL.INFO:return'alert-info';case this.LEVEL.ERROR:return'alert-danger';case this.LEVEL.CONFIRMATION:return'alert-warning';default:return'';}},getDefaultTitle:function(level){switch(level){case this.LEVEL.PROCESS:return'LBL_ALERT_TITLE_LOADING';case this.LEVEL.SUCCESS:return'LBL_ALERT_TITLE_SUCCESS';case this.LEVEL.WARNING:return'LBL_ALERT_TITLE_WARNING';case this.LEVEL.INFO:return'LBL_ALERT_TITLE_NOTICE';case this.LEVEL.ERROR:return'LBL_ALERT_TITLE_ERROR';case this.LEVEL.CONFIRMATION:return'LBL_ALERT_TITLE_WARNING';default:return'';}},getTranslatedLabels:function(stringOrArray){var result;if(_.isArray(stringOrArray)){result=_.map(stringOrArray,function(text){return new Handlebars.SafeString(app.lang.getAppString(text));});}else{result=new Handlebars.SafeString(app.lang.getAppString(stringOrArray));}
return result;},close:function(){this.unbindCancelAndReturn();this.$el.next('br').remove();this._super('close');},bindCancelAndReturn:function(){$(document).on('keydown.'+this.cid,_.bind(function(event){var keyReturn=13,keyEsc=27;if(_.indexOf([keyReturn,keyEsc],event.which)>-1){event.preventDefault();if(event.which===keyReturn){this.$('[data-action=confirm]').click();}else{this.$('[data-action=cancel]').click();}}},this));},unbindCancelAndReturn:function(){$(document).off('keydown.'+this.cid);},bindDataChange:function(){}}) },
"attachments": {"controller": /*
     * Your installation or use of this SugarCRM file is subject to the applicable
     * terms available at
     * http://support.sugarcrm.com/06_Customer_Center/10_Master_Subscription_Agreements/.
     * If you do not agree to all of the applicable terms or do not have the
     * authority to bind the entity as an authorized representative, then do not
     * install or use this SugarCRM file.
     *
     * Copyright (C) SugarCRM Inc. All rights reserved.
     */
({
	// Attachments View (base) 
plugins:['LinkedModel','Dashlet','Timeago','Pagination'],events:{'click [data-event=create_button]':'createRelatedNote','click [data-event=select_button]':'openSelectDrawer'},_defaultOptions:{limit:5,timer:0},initDashlet:function(viewName){this._initOptions();if(!this.meta.config&&this.context.get('collection')){this.context.set('skipFetch',false);this.context.set('limit',this.limit);}
if(!this.meta.config&&!this.meta.preview){this.context.on('attachment:view:fire',this.previewRecord,this);this.on('attachment:unlinkrow:fire',this.unlinkClicked,this);if(this.timer>0){this._disableAutoRefresh();this._enableAutoRefresh(this.timer);}}},_initOptions:function(){this.tbodyTag='ul[data-action="pagination-body"]';var options=_.extend(this._defaultOptions,this.settings.attributes||{});this.timer=parseInt(options['auto_refresh'],10)*60*1000;this.limit=options.limit;return this;},_disableAutoRefresh:function(){if(this.timerId){clearInterval(this.timerId);this.timerId=null;}
return this;},_enableAutoRefresh:function(msec){if(msec<=0){app.logger.error('Invalid interval timer: '+msec);return this;}
if(!_.isEmpty(this.timerId)){app.logger.error('Trying to enable an already enabled auto-refresh dashlet.');return this;}
this.timerId=setInterval(_.bind(function(){this.context.resetLoadFlag();this.layout.loadData();},this),msec);return this;},applySvgIcon:function(){var self=this,svgIconTemplate=app.template.get('attachments.svg-icon',this.module)||app.template.get('attachments.svg-icon');this.$('[data-mime]').each(function(){var mimeType=$(this).data('mime'),filetype=self.dashletConfig.supportedImageExtensions[mimeType]||self._getFileType(mimeType);$(this).attr('data-filetype',filetype).html(svgIconTemplate());});},_getFileType:function(mimeType){var filetype=mimeType.substr(mimeType.lastIndexOf('/')+1).toUpperCase();return filetype?filetype:this.dashletConfig.defaultType.toUpperCase();},bindDataChange:function(){if(this.collection){this.collection.on('reset',this.render,this);}
this.on('render',this.applySvgIcon,this);},openSelectDrawer:function(){var parentModel=this.context.get('parentModel'),linkModule=this.context.get('module'),link=this.context.get('link'),self=this;app.drawer.open({layout:'selection-list',context:{module:linkModule}},function(model){if(!model){return;}
var relatedModel=app.data.createRelatedBean(parentModel,model.id,link),options={showAlerts:true,relate:true,success:function(model){self.context.resetLoadFlag();self.context.set('skipFetch',false);self.context.loadData();},error:function(error){app.alert.show('server-error',{level:'error',messages:'ERR_GENERIC_SERVER_ERROR'});}};relatedModel.save(null,options);});},createRelatedNote:function(){var link=this.context.get('link'),parentModel=this.context.get('parentModel');this.createRelatedRecord(app.data.getRelatedModule(parentModel.module,link),link);},unlinkClicked:function(model){var self=this;var name=Handlebars.Utils.escapeExpression(app.utils.getRecordName(model)).trim();var context=app.lang.get('LBL_MODULE_NAME_SINGULAR',model.module).toLowerCase()+' '+name;app.alert.show(model.get('id')+':unlink_confirmation',{level:'confirmation',messages:app.utils.formatString(app.lang.get('NTC_UNLINK_CONFIRMATION_FORMATTED'),[context]),onConfirm:function(){model.destroy({showAlerts:true,relate:true,success:function(){if(self.disposed){return;}
self.collection.remove(model);self.render();}});}});},_dispose:function(){this._disableAutoRefresh();app.view.View.prototype._dispose.call(this);}}) },
"audit": {"controller": /*
     * Your installation or use of this SugarCRM file is subject to the applicable
     * terms available at
     * http://support.sugarcrm.com/06_Customer_Center/10_Master_Subscription_Agreements/.
     * If you do not agree to all of the applicable terms or do not have the
     * authority to bind the entity as an authorized representative, then do not
     * install or use this SugarCRM file.
     *
     * Copyright (C) SugarCRM Inc. All rights reserved.
     */
({
	// Audit View (base) 
extendsFrom:'FilteredListView',fallbackFieldTemplate:'list-header',initialize:function(options){this.action='list';if(options.context.parent){this.baseModule=options.context.parent.get('module');this.baseRecord=options.context.parent.get('modelId');}
this._super('initialize',[options]);if(!this.collection){this._initCollection();}},_initCollection:function(){var AuditCollection=app.BeanCollection.extend({module:'audit',baseModule:this.baseModule,baseRecordId:this.baseRecord,buildURL:function(params){params=params||{};var parts=[],url;parts.push(app.api.serverUrl);parts.push(this.baseModule);parts.push(this.baseRecordId);parts.push(this.module);url=parts.join('/');params=$.param(params);if(params.length>0){url+='?'+params;}
return url;},sync:function(method,model,options){var url=this.buildURL(options.params),callbacks=app.data.getSyncCallbacks(method,model,options);app.api.call(method,url,options.attributes,callbacks);}});this.collection=new AuditCollection();},loadData:function(){if(this.collection.dataFetched){return;}
this.collection.fetch();}}) },
"audit-footer": {"controller": /*
     * Your installation or use of this SugarCRM file is subject to the applicable
     * terms available at
     * http://support.sugarcrm.com/06_Customer_Center/10_Master_Subscription_Agreements/.
     * If you do not agree to all of the applicable terms or do not have the
     * authority to bind the entity as an authorized representative, then do not
     * install or use this SugarCRM file.
     *
     * Copyright (C) SugarCRM Inc. All rights reserved.
     */
({
	// Audit-footer View (base) 
initialize:function(options){this._super('initialize',[options]);if(this.context.parent){var baseModule=this.context.parent.get('module');this.auditedFields=this._getAuditedFields(baseModule);}},_getAuditedFields:function(baseModule){return _.chain(app.metadata.getModule(baseModule,'fields')).filter(function(o){return o.audited;}).map(function(o){return app.lang.get(o.vname,baseModule);}).value();}}) },
"audit-headerpane": {"controller": /*
     * Your installation or use of this SugarCRM file is subject to the applicable
     * terms available at
     * http://support.sugarcrm.com/06_Customer_Center/10_Master_Subscription_Agreements/.
     * If you do not agree to all of the applicable terms or do not have the
     * authority to bind the entity as an authorized representative, then do not
     * install or use this SugarCRM file.
     *
     * Copyright (C) SugarCRM Inc. All rights reserved.
     */
({
	// Audit-headerpane View (base) 
extendsFrom:'HeaderpaneView',events:{'click a[name=close_button]':'close'},initialize:function(options){this._super('initialize',[options]);app.shortcuts.register('AuditHeaderPanel:Close',['esc','ctrl+alt+l'],function(){var $closeButton=this.$('a[name=close_button]');if($closeButton.is(':visible')&&!$closeButton.hasClass('disabled')){$closeButton.click();}},this,true);},close:function(){app.drawer.close();}}) },
"baseedit": {"controller": /*
     * Your installation or use of this SugarCRM file is subject to the applicable
     * terms available at
     * http://support.sugarcrm.com/06_Customer_Center/10_Master_Subscription_Agreements/.
     * If you do not agree to all of the applicable terms or do not have the
     * authority to bind the entity as an authorized representative, then do not
     * install or use this SugarCRM file.
     *
     * Copyright (C) SugarCRM Inc. All rights reserved.
     */
({
	// Baseedit View (base) 
clearValidationError:function(model,fields){var self=this;if(!_.isEmpty(fields.changes)){_.each(fields.changes,function(num,key){var field=self.getField(key);if(field){var controlGroup=field.$el.parents('.control-group:first');if(controlGroup){controlGroup.removeClass("error");controlGroup.find('.add-on').remove();controlGroup.find('.help-block').html("");}}});}},handleValidationError:function(errors){var self=this;_.each(errors,function(fieldErrors,fieldName){var field=self.getField(fieldName);var ftag=this.fieldTag||'';if(field){var controlGroup=field.$el.parents('.control-group:first');if(controlGroup){controlGroup.addClass("error");controlGroup.find('.add-on').remove();controlGroup.find('.help-block').html("");if(field.$el.parent().parent().find('.input-append').length>0){field.$el.unwrap()}
field.$el.wrap('<div class="input-append  '+ftag+'">');_.each(fieldErrors,function(errorContext,errorName){controlGroup.find('.help-block').append(app.error.getErrorString(errorName,errorContext));});$('<span class="add-on"><i class="icon-exclamation-sign"></i></span>').insertBefore(controlGroup.find('.help-block'));}}});}}) },
"baseeditmodal": {"controller": /*
     * Your installation or use of this SugarCRM file is subject to the applicable
     * terms available at
     * http://support.sugarcrm.com/06_Customer_Center/10_Master_Subscription_Agreements/.
     * If you do not agree to all of the applicable terms or do not have the
     * authority to bind the entity as an authorized representative, then do not
     * install or use this SugarCRM file.
     *
     * Copyright (C) SugarCRM Inc. All rights reserved.
     */
({
	// Baseeditmodal View (base) 
events:{'click [name=save_button]':'saveButton','click [name=cancel_button]':'cancelButton'},saveButton:function(){var self=this,createModel=this.context.get('createModel');self.$('[name=save_button]').attr('data-loading-text',app.lang.get('LBL_LOADING'));self.$('[name=save_button]').button('loading');self.processModel(createModel);createModel.save(null,{relate:true,fieldsToValidate:this.getFields(this.module),success:function(){var view=_.extend({},self,{model:createModel});app.file.checkFileFieldsAndProcessUpload(view,{success:function(){self.saveComplete();}});},error:function(){self.resetButton();}});},processModel:function(model){},cancelButton:function(){if(Modernizr.touch){app.$contentEl.removeClass('content-overflow-visible');}
this.$('.modal').modal('hide').find('form').get(0).reset();if(this.context.has('createModel')){this.context.get('createModel').clear();}},saveComplete:function(){this.$('.modal').modal('hide').find('form').get(0).reset();this.resetButton();this.collection.fetch({relate:true});},resetButton:function(){this.$('[name=save_button]').button('reset');}}) },
"bubblechart": {"controller": /*
     * Your installation or use of this SugarCRM file is subject to the applicable
     * terms available at
     * http://support.sugarcrm.com/06_Customer_Center/10_Master_Subscription_Agreements/.
     * If you do not agree to all of the applicable terms or do not have the
     * authority to bind the entity as an authorized representative, then do not
     * install or use this SugarCRM file.
     *
     * Copyright (C) SugarCRM Inc. All rights reserved.
     */
({
	// Bubblechart View (base) 
plugins:['Dashlet','Tooltip','Chart'],tooltiptemplate:null,params:null,isManager:false,forecastBy:null,likelyField:null,initialize:function(options){this.isManager=app.user.get('is_manager');this._initPlugins();this._super('initialize',[options]);this.forecastBy=app.metadata.getModule('Forecasts','config').forecast_by||'Opportunities';var fields=['id','name','account_name','base_rate','currency_id','assigned_user_name','date_closed','probability','account_id','sales_stage','commit_stage'];var orderBy='';if(this.forecastBy==='Opportunities'){fields.push('amount');orderBy='amount:desc';this.likelyField='amount';}else{fields.push('likely_case');orderBy='likely_case:desc';this.likelyField='likely_case';}
this.params={'fields':fields.join(','),'max_num':10,'order_by':orderBy};this.tooltiptemplate=app.template.getView(this.name+'.tooltiptemplate');},initDashlet:function(view){var self=this;this.setDateRange();if(!this.isManager&&this.meta.config){this.meta.panels=_.chain(this.meta.panels).filter(function(panel){panel.fields=_.without(panel.fields,_.findWhere(panel.fields,{name:'visibility'}));return panel;}).value();}
this.chart=nv.models.bubbleChart().x(function(d){return d3.time.format('%Y-%m-%d').parse(d.x);}).y(function(d){return d.y;}).margin({top:0}).tooltipContent(function(key,x,y,e,graph){e.point.close_date=d3.time.format('%x')(d3.time.format('%Y-%m-%d').parse(e.point.x));e.point.amount=e.point.currency_symbol+d3.format(',.2d')(e.point.base_amount);return self.tooltiptemplate(e.point).replace(/(\r\n|\n|\r)/gm,'');}).showTitle(false).tooltips(true).showLegend(true).bubbleClick(function(e){self.chart.dispatch.tooltipHide(e);app.router.navigate(app.router.buildRoute(self.forecastBy,e.point.id),{trigger:true});}).colorData('class',{step:2}).groupBy(function(d){return(self.isManager&&self.getVisibility()==='user')?d.sales_stage_short:d.assigned_user_name;}).filterBy(function(d){return d.probability;}).strings({legend:{close:app.lang.getAppString('LBL_CHART_LEGEND_CLOSE'),open:app.lang.getAppString('LBL_CHART_LEGEND_OPEN')},noData:app.lang.getAppString('LBL_CHART_NO_DATA')});this.on('data-changed',function(){this.renderChart();},this);this.settings.on('change:filter_duration',this.changeFilter,this);},_initPlugins:function(){if(this.isManager){this.plugins=_.union(this.plugins,['ToggleVisibility']);}
return this;},renderChart:function(){if(!this.isChartReady()){return;}
this.$('svg#'+this.cid).children().remove();d3.select('svg#'+this.cid).datum(this.chartCollection).transition().duration(500).call(this.chart);this.chart_loaded=_.isFunction(this.chart.render);this.displayNoData(!this.chart_loaded);},chartResize:function(){this.chart.render();},evaluateResult:function(data){this.total=data.records.length;var statusOptions='sales_stage_dom',fieldMeta=app.metadata.getModule(this.forecastBy,'fields');if(fieldMeta){statusOptions=fieldMeta.sales_stage.options||statusOptions;}
this.chartCollection={data:data.records.map(function(d){var sales_stage=app.lang.getAppListStrings(statusOptions)[d.sales_stage]||d.sales_stage;if(_.isNull(d.probability)||d.probability===''){d.probability=0;}
if(_.isNull(d[this.likelyField])||d[this.likelyField]===''){d[this.likelyField]=0;}
return{id:d.id,x:d.date_closed,y:Math.round(parseInt(d[this.likelyField],10)/ parseFloat(d.base_rate)),shape:'circle',account_name:d.account_name,assigned_user_name:d.assigned_user_name,sales_stage:sales_stage,sales_stage_short:sales_stage,probability:parseInt(d.probability,10),base_amount:parseInt(d[this.likelyField],10),currency_symbol:app.currency.getCurrencySymbol(d.currency_id)};},this),properties:{title:app.lang.getAppString('LBL_DASHLET_TOP10_SALES_OPPORTUNITIES_NAME'),value:data.records.length}};},loadData:function(options){var self=this,_filter=[{'date_closed':{'$gte':self.dateRange.begin}},{'date_closed':{'$lte':self.dateRange.end}}];if(!this.isManager||this.getVisibility()==='user'){_filter.push({'$owner':''});}
var _local=_.extend({'filter':_filter},this.params);var url=app.api.buildURL(this.forecastBy,null,null,_local,this.params);app.api.call('read',url,null,{success:function(data){self.evaluateResult(data);if(!self.disposed){self.trigger('data-changed');}},error:_.bind(function(){this.displayNoData(true);},this),complete:options?options.complete:null});},setDateRange:function(){var now=new Date(),duration=parseInt(this.settings.get('filter_duration'),10),startMonth=Math.floor(now.getMonth()/ 3)*3,startDate=new Date(now.getFullYear(),(duration===12?0:startMonth+duration),1),endDate=new Date(now.getFullYear(),(duration===12?12:startDate.getMonth()+3),0);this.dateRange={'begin':app.date.format(startDate,'Y-m-d'),'end':app.date.format(endDate,'Y-m-d')};},changeFilter:function(){this.setDateRange();this.loadData();},_dispose:function(){this.off('data-changed');this.settings.off('change:filter_duration');this._super('_dispose');}}) },
"bwc": {"controller": /*
     * Your installation or use of this SugarCRM file is subject to the applicable
     * terms available at
     * http://support.sugarcrm.com/06_Customer_Center/10_Master_Subscription_Agreements/.
     * If you do not agree to all of the applicable terms or do not have the
     * authority to bind the entity as an authorized representative, then do not
     * install or use this SugarCRM file.
     *
     * Copyright (C) SugarCRM Inc. All rights reserved.
     */
({
	// Bwc View (base) 
className:'bwc-frame',moduleRegex:new RegExp('module=([^&]*)'),idRegex:new RegExp('record=([^&]*)'),actionRegex:new RegExp('action=([^&]*)'),plugins:['Editable','LinkedModel'],warnEnabledBwcActions:['editview','config'],url:'',_currentUrl:'',initialize:function(options){var url=options.context.get('url');if(url&&(url.search(/module=Home.*action=index/)>-1||url.search(/action=index.*module=Home/)>-1)){app.router.navigate('#Home',{trigger:true});return;}
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
app.view.View.prototype._dispose.call(this);},_refreshSession:function(){app.bwc.login();}}) },
"casessummary": {"controller": /*
     * Your installation or use of this SugarCRM file is subject to the applicable
     * terms available at
     * http://support.sugarcrm.com/06_Customer_Center/10_Master_Subscription_Agreements/.
     * If you do not agree to all of the applicable terms or do not have the
     * authority to bind the entity as an authorized representative, then do not
     * install or use this SugarCRM file.
     *
     * Copyright (C) SugarCRM Inc. All rights reserved.
     */
({
	// Casessummary View (base) 
events:{'shown.bs.tab a[data-toggle="tab"]':'resize',},plugins:['Dashlet','Chart','EllipsisInline'],className:'cases-summary-wrapper',tabData:null,tabClass:'',initialize:function(options){this._super('initialize',[options]);this.chart=nv.models.pieChart().x(function(d){return d.key;}).y(function(d){return d.value;}).margin({top:10,right:10,bottom:15,left:10}).donut(true).donutLabelsOutside(true).donutRatio(0.447).hole(this.total).showTitle(false).tooltips(true).showLegend(false).colorData('class').tooltipContent(function(key,x,y,e,graph){return'<p><b>'+key+' '+parseInt(y,10)+'</b></p>';}).strings({noData:app.lang.getAppString('LBL_CHART_NO_DATA')});},renderChart:function(){if(!this.isChartReady()){return;}
this.chart.hole(this.total);d3.select('svg#'+this.cid).datum(this.chartCollection).transition().duration(500).call(this.chart);this.chart_loaded=_.isFunction(this.chart.update);this.displayNoData(!this.chart_loaded);},addFavs:function(){var self=this;_.each(this.tabData,function(tabGroup){if(tabGroup.models&&tabGroup.models.length>0){_.each(tabGroup.models,function(model){var field=app.view.createField({def:{type:'favorite'},model:model,meta:{view:'detail'},viewName:'detail',view:self});field.setElement(self.$('.favTarget.[data-model-id="'+model.id+'"]'));field.render();});}});},evaluateResult:function(data){this.total=data.models.length;var countClosedCases=data.where({status:'Closed'}).concat(data.where({status:'Rejected'})).concat(data.where({status:'Duplicate'})).length,countOpenCases=this.total-countClosedCases;this.chartCollection={data:[],properties:{title:app.lang.getAppString('LBL_CASE_SUMMARY_CHART'),value:3,label:this.total}};this.chartCollection.data.push({key:app.lang.getAppString('LBL_DASHLET_CASESSUMMARY_CLOSE_CASES'),classes:'nv-fill-green',value:countClosedCases});this.chartCollection.data.push({key:app.lang.getAppString('LBL_DASHLET_CASESSUMMARY_OPEN_CASES'),classes:'nv-fill-red',value:countOpenCases});if(!_.isEmpty(data.models)){this.processCases(data);}},processCases:function(data){this.tabData=[];var status2css={'Rejected':'label-success','Closed':'label-success','Duplicate':'label-success'},stati=_.uniq(data.pluck('status')),statusOptions=app.metadata.getModule('Cases','fields').status.options||'case_status_dom';_.each(stati,function(status,index){if(!status2css[status]){this.tabData.push({index:index,status:status,statusLabel:app.lang.getAppListStrings(statusOptions)[status],models:data.where({'status':status}),cssClass:status2css[status]?status2css[status]:'label-important'});}},this);this.tabClass=['one','two','three','four','five'][this.tabData.length]||'four';},loadData:function(options){var self=this,oppID,accountBean,relatedCollection;if(this.meta.config){return;}
oppID=this.model.get('account_id');if(oppID){accountBean=app.data.createBean('Accounts',{id:oppID});}
relatedCollection=app.data.createRelatedCollection(accountBean||this.model,'cases');relatedCollection.fetch({relate:true,success:function(data){self.evaluateResult(data);if(!self.disposed){self.render();self.addFavs();}},error:_.bind(function(){this.displayNoData(true);},this),complete:options?options.complete:null});}}) },
"convert-results": {"controller": /*
     * Your installation or use of this SugarCRM file is subject to the applicable
     * terms available at
     * http://support.sugarcrm.com/06_Customer_Center/10_Master_Subscription_Agreements/.
     * If you do not agree to all of the applicable terms or do not have the
     * authority to bind the entity as an authorized representative, then do not
     * install or use this SugarCRM file.
     *
     * Copyright (C) SugarCRM Inc. All rights reserved.
     */
({
	// Convert-results View (base) 
associatedModels:null,events:{'click .preview-list-item':'previewRecord'},plugins:['Tooltip'],initialize:function(options){app.view.View.prototype.initialize.call(this,options);app.events.on("list:preview:decorate",this.decorateRow,this);this.associatedModels=app.data.createMixedBeanCollection();},bindDataChange:function(){this.model.on("change",this.populateResults,this);},populateResults:function(){this.associatedModels.reset();app.view.View.prototype.render.call(this);},previewRecord:function(e){var $el=this.$(e.currentTarget),data=$el.data(),model=app.data.createBean(data.module,{id:data.id});model.fetch({showAlerts:true,success:_.bind(function(model){model.module=data.module;app.events.trigger("preview:render",model,this.associatedModels);},this)});},decorateRow:function(model){this.$("tr.highlighted").removeClass("highlighted current above below");if(model){var rowName=model.module+"_"+model.get("id");var curr=this.$("tr[name='"+rowName+"']");curr.addClass("current highlighted");curr.prev("tr").addClass("highlighted above");curr.next("tr").addClass("highlighted below");}}}) },
"create": {"controller": /*
     * Your installation or use of this SugarCRM file is subject to the applicable
     * terms available at
     * http://support.sugarcrm.com/06_Customer_Center/10_Master_Subscription_Agreements/.
     * If you do not agree to all of the applicable terms or do not have the
     * authority to bind the entity as an authorized representative, then do not
     * install or use this SugarCRM file.
     *
     * Copyright (C) SugarCRM Inc. All rights reserved.
     */
({
	// Create View (base) 
extendsFrom:'RecordView',editAllMode:false,SAVEACTIONS:{SAVE_AND_CREATE:'saveAndCreate',SAVE_AND_VIEW:'saveAndView'},enableDuplicateCheck:false,dupecheckList:null,saveButtonName:'save_button',cancelButtonName:'cancel_button',saveAndCreateButtonName:'save_create_button',saveAndViewButtonName:'save_view_button',restoreButtonName:'restore_button',initialize:function(options){var createViewEvents={};createViewEvents['click a[name='+this.saveButtonName+']:not(.disabled)']='save';createViewEvents['click a[name='+this.cancelButtonName+']']='cancel';createViewEvents['click a[name='+this.saveAndCreateButtonName+']:not(.disabled)']='saveAndCreate';createViewEvents['click a[name='+this.saveAndViewButtonName+']:not(.disabled)']='saveAndView';createViewEvents['click a[name='+this.restoreButtonName+']:not(.disabled)']='restoreModel';this.events=_.extend({},this.events,createViewEvents);this.plugins=_.union(this.plugins||[],['FindDuplicates']);this.STATE=_.extend({},this.STATE,{CREATE:'create',SELECT:'select',DUPLICATE:'duplicate'});this._super("initialize",[options]);this.model.off("change",null,this);this.context.lastSaveAction=null;this.context.on('list:dupecheck-list-select-edit:fire',this.editExisting,this);this.meta=_.extend({},app.metadata.getView(this.module,'record'),this.meta);var moduleMetadata=app.metadata.getModule(this.module);this.enableDuplicateCheck=(moduleMetadata&&moduleMetadata.dupCheckEnabled)||false;if(!app.acl.hasAccess('list',this.module)){this.enableDuplicateCheck=false;}
var fields=(moduleMetadata&&moduleMetadata.fields)?moduleMetadata.fields:{};this.model.relatedAttributes=this.model.relatedAttributes||{};var assignedUserField=_.find(fields,function(field){return field.type==='relate'&&(field.name==='assigned_user_id'||field.id_name==='assigned_user_id');});if(assignedUserField){var isDuplicate=this.model.has('assigned_user_id')&&this.model.has('assigned_user_name');if(!isDuplicate){this.model.set('assigned_user_id',app.user.id);this.model.set('assigned_user_name',app.user.get('full_name'));this.model.setDefaultAttribute('assigned_user_id',app.user.id);this.model.setDefaultAttribute('assigned_user_name',app.user.get('full_name'));}
this.model.relatedAttributes.assigned_user_id=app.user.id;this.model.relatedAttributes.assigned_user_name=app.user.get('full_name');}
this.model.on("error:validation",function(){this.alerts.showInvalidModel();},this);this.on('sugarlogic:initialize',function(){this.model.setDefaultAttributes(this.model.attributes);},this);},hasUnsavedChanges:function(){if(this.resavingAfterMetadataSync){return false;}
var defaults=_.extend({},this.model._defaults,this.model.getDefaultAttributes());return this.model.isNew()&&!_.isEqual(defaults,this.model.attributes);},handleSync:function(){},delegateButtonEvents:function(){},_render:function(){this._super("_render");this.setButtonStates(this.STATE.CREATE);if(this.enableDuplicateCheck){this.renderDupeCheckList();}
app.events.trigger('create:model:changed',false);this.model.on('change',function(){app.events.trigger('create:model:changed',this.hasUnsavedChanges());},this);},save:function(){switch(this.context.lastSaveAction){case this.SAVEACTIONS.SAVE_AND_CREATE:this.saveAndCreate();break;case this.SAVEACTIONS.SAVE_AND_VIEW:this.saveAndView();break;default:this.saveAndClose();}},saveAndClose:function(){this.initiateSave(_.bind(function(){if(app.drawer){app.drawer.close(this.context,this.model);}},this));},cancel:function(){app.events.trigger('create:model:changed',false);this.$el.off();if(app.drawer){app.drawer.close(this.context);}},saveAndCreate:function(){this.context.lastSaveAction=this.SAVEACTIONS.SAVE_AND_CREATE;this.initiateSave(_.bind(function(){this.clear();this.model.set(_.extend(this.model.getDefaultAttributes(),this.model.relatedAttributes));this.resetDuplicateState();},this));},saveAndView:function(){this.context.lastSaveAction=this.SAVEACTIONS.SAVE_AND_VIEW;this.initiateSave(_.bind(function(){app.navigate(this.context,this.model);},this));},restoreModel:function(){this.model.clear();if(this._origAttributes){this.model.set(this._origAttributes);this.model.isCopied=true;}
this.createMode=true;if(!this.disposed){this.render();}
this.setButtonStates(this.STATE.CREATE);},initiateSave:function(callback){this.disableButtons();async.waterfall([_.bind(this.validateModelWaterfall,this),_.bind(this.dupeCheckWaterfall,this),_.bind(this.createRecordWaterfall,this)],_.bind(function(error){this.enableButtons();if(error&&error.status==412&&!error.request.metadataRetry){this.handleMetadataSyncError(error);}else if(!error&&!this.disposed){this.context.lastSaveAction=null;callback();}},this));},validateModelWaterfall:function(callback){this.model.doValidate(this.getFields(this.module),function(isValid){callback(!isValid);});},dupeCheckWaterfall:function(callback){var success=_.bind(function(collection){if(this.disposed){callback(true);}
if(collection.models.length>0){this.handleDuplicateFound(collection);callback(true);}else{this.resetDuplicateState();callback(false);}},this),error=_.bind(function(e){if(e.status==412&&!e.request.metadataRetry){this.handleMetadataSyncError(e);}else{this.alerts.showServerError();callback(true);}},this);if(this.skipDupeCheck()||!this.enableDuplicateCheck){callback(false);}else{this.checkForDuplicate(success,error);}},createRecordWaterfall:function(callback){var success=_.bind(function(){var acls=this.model.get('_acl');if(!_.isEmpty(acls)&&acls.access==='no'&&acls.view==='no'){this.alerts.showSuccessButDeniedAccess();callback(false);}else{app.alert.show('create-success',{level:'success',messages:this.buildSuccessMessage(this.model),autoClose:true,autoCloseDelay:10000,onLinkClick:function(){app.alert.dismiss('create-success');}});callback(false);}},this),error=_.bind(function(e){if(e.status==412&&!e.request.metadataRetry){this.handleMetadataSyncError(e);}else{this.alerts.showServerError();callback(true);}},this);this.saveModel(success,error);},checkForDuplicate:function(success,error){var options={showAlerts:true,success:success,error:error};this.context.trigger("dupecheck:fetch:fire",this.model,options);},handleDuplicateFound:function(){this.setButtonStates(this.STATE.DUPLICATE);this.dupecheckList.show();this.skipDupeCheck(true);},resetDuplicateState:function(){this.setButtonStates(this.STATE.CREATE);this.hideDuplicates();this.skipDupeCheck(false);},getCustomSaveOptions:function(options){return{};},saveModel:function(success,error){var self=this,options;success=_.wrap(success,function(func,model){app.file.checkFileFieldsAndProcessUpload(self,{success:function(){func();}},{deleteIfFails:true});});options={success:success,error:error,viewed:true,relate:(self.model.link)?true:null,showAlerts:{'process':true,'success':false,'error':false},lastSaveAction:this.context.lastSaveAction};this.applyAfterCreateOptions(options);options=_.extend({},options,self.getCustomSaveOptions(options));self.model.save(null,options);},applyAfterCreateOptions:function(options){var copiedFromModelId=this.context.get('copiedFromModelId');if(copiedFromModelId&&this.model.isCopy()){options.params=options.params||{};options.params.after_create={copy_rel_from:copiedFromModelId};}},buildSuccessMessage:function(model){var modelAttributes,successLabel='LBL_RECORD_SAVED_SUCCESS',successMessageContext;if(model&&model.attributes){modelAttributes=model.attributes;}else{modelAttributes={};successLabel='LBL_RECORD_SAVED';}
successMessageContext=_.extend({module:this.module,moduleSingularLower:this.moduleSingular.toLowerCase()},modelAttributes);return app.lang.get(successLabel,this.module,successMessageContext);},skipDupeCheck:function(skip){var skipDupeCheck,saveButton=this.buttons[this.saveButtonName].getFieldElement();if(_.isUndefined(skip)){skipDupeCheck=saveButton.data('skipDupeCheck');if(_.isUndefined(skipDupeCheck)){skipDupeCheck=false;}
return skipDupeCheck;}else{if(skip){saveButton.data('skipDupeCheck',true);}else{saveButton.data('skipDupeCheck',false);}}},clear:function(){this.model.clear();if(!this.disposed){this.render();}},editExisting:function(model){var origAttributes=this.saveFormData(),skipDupeCheck=this.skipDupeCheck();this.model.clear();this.model.set(this.extendModel(model,origAttributes));this.createMode=false;if(!this.disposed){this.render();}
this.toggleEdit(true);this.hideDuplicates();this.skipDupeCheck(skipDupeCheck);this.setButtonStates(this.STATE.SELECT);},extendModel:function(newModel,origAttributes){var modelAttributes=_.clone(newModel.attributes);_.each(modelAttributes,function(value,key){if(_.isUndefined(value)||_.isNull(value)||((_.isObject(value)||_.isArray(value)||_.isString(value))&&_.isEmpty(value))){delete modelAttributes[key];}});return _.extend({},origAttributes,modelAttributes);},saveFormData:function(){this._origAttributes=_.clone(this.model.attributes);return this._origAttributes;},setDupeCheckType:function(type){this.context.set('dupelisttype',type);},renderDupeCheckList:function(){this.setDupeCheckType('dupecheck-list-edit');this.context.set('collection',this.createDuplicateCollection(this.model));if(_.isNull(this.dupecheckList)){this.dupecheckList=app.view.createLayout({context:this.context,name:'create-dupecheck',module:this.module});this.addToLayoutComponents(this.dupecheckList);}
this.$('.headerpane').after(this.dupecheckList.$el);this.dupecheckList.hide();this.dupecheckList.render();},addToLayoutComponents:function(component){this.layout._components.push(component);},hideDuplicates:function(){if(this.dupecheckList){this.dupecheckList.hide();}},setButtonStates:function(state){this._super("setButtonStates",[state]);var $saveButtonEl=this.buttons[this.saveButtonName];if($saveButtonEl){switch(state){case this.STATE.CREATE:case this.STATE.SELECT:$saveButtonEl.getFieldElement().text(app.lang.get('LBL_SAVE_BUTTON_LABEL',this.module));break;case this.STATE.DUPLICATE:$saveButtonEl.getFieldElement().text(app.lang.get('LBL_IGNORE_DUPLICATE_AND_SAVE',this.module));break;}}},disableButtons:function(){this.toggleButtons(false);},enableButtons:function(){this.toggleButtons(true);},toggleButtons:function(enable){_.each(this.buttons,function(button){switch(button.type){case'button':case'rowaction':button.getFieldElement().toggleClass('disabled',!enable);break;case'actiondropdown':button.$(button.actionDropDownTag).toggleClass('disabled',!enable);break;}});},registerShortcuts:function(){this._super('registerShortcuts');app.shortcuts.register('Create:Save',['ctrl+s','ctrl+alt+a'],function(){var $saveButton=this.$('a[name='+this.saveButtonName+']');if($saveButton.is(':visible')&&!$saveButton.hasClass('disabled')){$saveButton.get(0).click();}},this,true);app.shortcuts.register('Create:Cancel',['esc','ctrl+alt+l'],function(){var $cancelButton=this.$('a[name='+this.cancelButtonName+']');if($cancelButton.is(':visible')&&!$cancelButton.hasClass('disabled')){$cancelButton.get(0).click();}},this,true);},alerts:{showInvalidModel:function(){app.alert.show('invalid-data',{level:'error',messages:'ERR_RESOLVE_ERRORS'});},showServerError:function(){app.alert.show('server-error',{level:'error',messages:'ERR_GENERIC_SERVER_ERROR'});},showSuccessButDeniedAccess:function(){app.alert.show('invalid-data',{level:'warning',messages:'LBL_RECORD_SAVED_ACCESS_DENIED',autoClose:true,autoCloseDelay:9000});}}}) },
"create-actions": {"controller": /*
     * Your installation or use of this SugarCRM file is subject to the applicable
     * terms available at
     * http://support.sugarcrm.com/06_Customer_Center/10_Master_Subscription_Agreements/.
     * If you do not agree to all of the applicable terms or do not have the
     * authority to bind the entity as an authorized representative, then do not
     * install or use this SugarCRM file.
     *
     * Copyright (C) SugarCRM Inc. All rights reserved.
     */
({
	// Create-actions View (base) 
extendsFrom:'CreateView'}) },
"create-nodupecheck": {"controller": /*
     * Your installation or use of this SugarCRM file is subject to the applicable
     * terms available at
     * http://support.sugarcrm.com/06_Customer_Center/10_Master_Subscription_Agreements/.
     * If you do not agree to all of the applicable terms or do not have the
     * authority to bind the entity as an authorized representative, then do not
     * install or use this SugarCRM file.
     *
     * Copyright (C) SugarCRM Inc. All rights reserved.
     */
({
	// Create-nodupecheck View (base) 
extendsFrom:'CreateView',initialize:function(options){this._super("initialize",[options]);this.enableDuplicateCheck=false;}}) },
"dashablelist": {"controller": /*
     * Your installation or use of this SugarCRM file is subject to the applicable
     * terms available at
     * http://support.sugarcrm.com/06_Customer_Center/10_Master_Subscription_Agreements/.
     * If you do not agree to all of the applicable terms or do not have the
     * authority to bind the entity as an authorized representative, then do not
     * install or use this SugarCRM file.
     *
     * Copyright (C) SugarCRM Inc. All rights reserved.
     */
({
	// Dashablelist View (base) 
extendsFrom:'ListView',plugins:['Dashlet','Pagination'],fallbackFieldTemplate:'list',_defaultSettings:{limit:5,filter_id:'assigned_to_me',intelligent:'0'},moduleBlacklist:['Home','Forecasts','ProductCategories','ProductTemplates'],_availableModules:{},_availableColumns:{},intelligent:null,moduleIsAvailable:true,initialize:function(options){options.meta=_.extend({},options.meta,{last_state:{id:'dashable-list'}});this.checkIntelligence();this._super('initialize',[options]);this._noAccessTemplate=app.template.get(this.name+'.noaccess');},checkIntelligence:function(){var isIntelligent=app.controller.context.get('layout')==='record'&&!_.contains(this.moduleBlacklist,app.controller.context.get('module'));this.intelligent=isIntelligent?'1':'0';return this.intelligent;},setLinkedFieldVisibility:function(visible,intelligent){var field=this.getField('linked_fields'),fieldEl;if(!field){return;}
intelligent=(intelligent===false||intelligent==='0')?'0':'1';fieldEl=this.$('[data-name=linked_fields]');if(visible==='1'&&intelligent==='1'&&!_.isEmpty(field.items)){fieldEl.show();}else{fieldEl.hide();}},initDashlet:function(view){if(this.meta.config){this.settings.on('change:module',function(model,moduleName){var label=(model.get('filter_id')==='assigned_to_me')?'TPL_DASHLET_MY_MODULE':'LBL_MODULE_NAME';model.set('label',app.lang.get(label,moduleName,{module:app.lang.getAppListStrings('moduleList')[moduleName]}));this.dashModel.set('module',moduleName);this.dashModel.set('filter_id','assigned_to_me');this.layout.trigger('dashlet:filter:reinitialize');this._updateDisplayColumns();this.updateLinkedFields(moduleName);},this);this.settings.on('change:intelligent',function(model,intelligent){this.setLinkedFieldVisibility('1',intelligent);},this);this.on('render',function(){var isVisible=!_.isEmpty(this.settings.get('linked_fields'))?'1':'0';this.setLinkedFieldVisibility(isVisible,this.settings.get('intelligent'));},this);}
this._initializeSettings();this.metaFields=this._getColumnsForDisplay();if(this.settings.get('intelligent')=='1'){var link=this.settings.get('linked_fields'),model=app.controller.context.get('model'),module=this.settings.get('module'),options={link:{name:link,bean:model},relate:true};this.collection=app.data.createBeanCollection(module,null,options);this.context.set('collection',this.collection);this.context.set('link',link);}else{this.context.unset('link');}
this.before('render',function(){if(!this.moduleIsAvailable){this.$el.html(this._noAccessTemplate());return false;}});if(this.meta.config){this._configureDashlet();this.listenTo(this.layout,'init',this._addFilterComponent);this.listenTo(this.layout.context,'filter:add',this.updateDashletFilterAndSave);this.layout.before('dashletconfig:save',function(){this.saveDashletFilter();return false;},null,this);}else if(this.moduleIsAvailable){var filterId=this.settings.get('filter_id');if(!filterId||this.meta.preview){this._displayDashlet();return;}
var filters=app.data.createBeanCollection('Filters');filters.setModuleName(this.settings.get('module'));filters.load({success:_.bind(function(){var filter=filters.collection.get(filterId);var filterDef=filter&&filter.get('filter_definition');this._displayDashlet(filterDef);},this),error:_.bind(function(err){this._displayDashlet();},this)});}},showMoreRecords:function(){this.getNextPagination(this.context.get('collectionOptions'));},getLabel:function(){var module=this.settings.get('module')||this.context.get('module'),moduleName=app.lang.getAppListStrings('moduleList')[module];return app.lang.get(this.settings.get('label'),module,{module:moduleName});},saveDashletFilter:function(){var context=this.layout.context;if(context.editingFilter){if(!context.editingFilter.get('name')){context.editingFilter.set('name',app.lang.get('LBL_DASHLET')+': '+this.settings.get('label'));}
context.trigger('filter:create:save');}else{var filterId=context.get('currentFilterId'),obj={id:filterId};this.updateDashletFilterAndSave(obj);}},updateDashletFilterAndSave:function(filterModel){var id=filterModel.id||filterModel.get('id');this.settings.set('filter_id',id);this.dashModel.set('filter_id',id);var componentType=this.dashModel.get('componentType')||'view';if(!this.dashModel.get('componentType')){this.dashModel.set('componentType',componentType);}
app.drawer.close(this.dashModel);app.events.trigger('dashlet:filter:save',this.dashModel.get('module'));},_initializeSettings:function(){if(this.intelligent==='0'){_.each(this.dashletConfig.panels,function(panel){panel.fields=panel.fields.filter(function(el){return el.name!=='intelligent';});},this);this.settings.set('intelligent','0');this.dashModel.set('intelligent','0');}else{if(_.isUndefined(this.settings.get('intelligent'))){this.settings.set('intelligent',this._defaultSettings.intelligent);}}
this.setLinkedFieldVisibility('1',this.settings.get('intelligent'));if(!this.settings.get('limit')){this.settings.set('limit',this._defaultSettings.limit);}
if(!this.settings.get('filter_id')){this.settings.set('filter_id',this._defaultSettings.filter_id);}
this._setDefaultModule();if(!this.settings.get('label')){this.settings.set('label','LBL_MODULE_NAME');}},_setDefaultModule:function(){var availableModules=_.keys(this._getAvailableModules()),module=this.settings.get('module')||this.context.get('module');if(_.contains(availableModules,module)){this.settings.set('module',module);}else if(this.meta.config){module=this.context.parent.get('module');if(_.contains(this.moduleBlacklist,module)){module=_.first(availableModules);}
this.settings.set('module',module);}else{this.moduleIsAvailable=false;}},_updateDisplayColumns:function(){var availableColumns=this._getAvailableColumns(),columnsFieldName='display_columns',columnsField=this.getField(columnsFieldName);if(columnsField){columnsField.items=availableColumns;}
this.settings.set(columnsFieldName,_.keys(availableColumns));},updateLinkedFields:function(moduleName){var linked=this.getLinkedFields(moduleName),displayColumn=this.getField('linked_fields'),intelligent=this.dashModel.get('intelligent');if(displayColumn){displayColumn.items=linked;this.setLinkedFieldVisibility('1',intelligent);}else{this.setLinkedFieldVisibility('0',intelligent);}
this.settings.set('linked_fields',_.keys(linked)[0]);},getLinkedFields:function(moduleName){var fieldDefs=app.metadata.getModule(this.layout.module).fields;var relates=_.filter(fieldDefs,function(field){if(!_.isUndefined(field.type)&&(field.type==='link')){if(app.data.getRelatedModule(this.layout.module,field.name)===moduleName){return true;}}
return false;},this),result={};_.each(relates,function(field){result[field.name]=app.lang.get(field.vname||field.name,[this.layout.module,moduleName]);},this);return result;},_configureDashlet:function(){var availableModules=this._getAvailableModules(),availableColumns=this._getAvailableColumns(),relates=this.getLinkedFields(this.module);_.each(this.getFieldMetaForView(this.meta),function(field){switch(field.name){case'module':field.options=availableModules;break;case'display_columns':field.options=availableColumns;break;case'linked_fields':field.options=relates;break;}});},_addFilterComponent:function(){var filterComponent=this.layout.getComponent('dashablelist-filter');if(filterComponent){return;}
this.layout._addComponentsFromDef([{layout:'dashablelist-filter'}]);},_getAvailableModules:function(){if(_.isEmpty(this._availableModules)||!_.isObject(this._availableModules)){this._availableModules={};var visibleModules=app.metadata.getModuleNames({filter:'visible',access:'read'}),allowedModules=_.difference(visibleModules,this.moduleBlacklist);_.each(allowedModules,function(module){var hasListView=!_.isEmpty(this.getFieldMetaForView(app.metadata.getView(module,'list')));if(hasListView){this._availableModules[module]=app.lang.get('LBL_MODULE_NAME',module);}},this);}
return this._availableModules;},_getListMeta:function(module){return app.metadata.getView(module,'list');},_getAvailableColumns:function(){var columns={},module=this.settings.get('module');if(!module){return columns;}
_.each(this.getFieldMetaForView(this._getListMeta(module)),function(field){columns[field.name]=app.lang.get(field.label||field.name,module);});return columns;},_displayDashlet:function(filterDef){var columns=this._getColumnsForDisplay();this.meta.panels=[{fields:columns}];this.context.set('skipFetch',false);this.context.set('limit',this.settings.get('limit'));this.context.set('fields',this.getFieldNames());if(filterDef){this._applyFilterDef(filterDef);this.context.reloadData({'recursive':false});}
this._startAutoRefresh();},_applyFilterDef:function(filterDef){if(filterDef){filterDef=_.isArray(filterDef)?filterDef:[filterDef];var specialField=/^\$/,meta=app.metadata.getModule(this.module);filterDef=_.filter(filterDef,function(def){var fieldName=_.keys(def).pop();return specialField.test(fieldName)||meta.fields[fieldName];},this);this.context.get('collection').filterDef=filterDef;}},_getColumnsForDisplay:function(){var columns=[],fields=this.getFieldMetaForView(this._getListMeta(this.settings.get('module')));if(!this.settings.get('display_columns')){this._updateDisplayColumns();}
if(!this.settings.get('linked_fields')){this.updateLinkedFields(this.model.module);}
_.each(this.settings.get('display_columns'),function(name){var field=_.find(fields,function(field){return field.name===name;},this);var column=_.extend({name:name,sortable:true},field||{});columns.push(column);},this);columns=app.metadata._patchFields(this.module,app.metadata.getModule(this.module),columns);return columns;},_startAutoRefresh:function(){var refreshRate=parseInt(this.settings.get('auto_refresh'),10);if(refreshRate){this._stopAutoRefresh();this._timerId=setInterval(_.bind(function(){this.context.resetLoadFlag();this.layout.loadData();},this),refreshRate*1000*60);}},_stopAutoRefresh:function(){if(this._timerId){clearInterval(this._timerId);}},_dispose:function(){this._stopAutoRefresh();this._super('_dispose');},getFieldMetaForView:function(meta){meta=_.isObject(meta)?meta:{};return!_.isUndefined(meta.panels)?_.flatten(_.pluck(meta.panels,'fields')):[];},sort:$.noop}) },
"dashboard-headerpane": {"controller": /*
     * Your installation or use of this SugarCRM file is subject to the applicable
     * terms available at
     * http://support.sugarcrm.com/06_Customer_Center/10_Master_Subscription_Agreements/.
     * If you do not agree to all of the applicable terms or do not have the
     * authority to bind the entity as an authorized representative, then do not
     * install or use this SugarCRM file.
     *
     * Copyright (C) SugarCRM Inc. All rights reserved.
     */
({
	// Dashboard-headerpane View (base) 
extendsFrom:'RecordView',buttons:null,editableFields:null,className:'preview-headerbar',events:{'click [name=edit_button]':'editClicked','click [name=cancel_button]':'cancelClicked','click [name=save_button]':'saveClicked','click [name=create_button]':'saveClicked','click [name=create_cancel_button]':'createCancelClicked','click [name=delete_button]':'deleteClicked','click [name=add_button]':'addClicked','click [name=collapse_button]':'collapseClicked','click [name=expand_button]':'expandClicked'},initialize:function(options){if(options.context.parent){options.meta=app.metadata.getView(options.context.parent.get("module"),options.name);options.template=app.template.getView(options.name);}
this._super("initialize",[options]);this.context.set('dataView','');this.model.on("change change:layout change:metadata",function(){if(this.inlineEditMode){this.changed=true;}},this);this.model.on("error:validation",this.handleValidationError,this);if(this.context.get("create")){this.changed=true;this.action='edit';this.inlineEditMode=true;}else{this.action='detail';}
this.buttons={};},editClicked:function(evt){this.previousModelState=app.utils.deepCopy(this.model.attributes);this.inlineEditMode=true;this.setButtonStates('edit');this.toggleEdit(true);this.model.trigger("setMode","edit");},cancelClicked:function(evt){this.changed=false;this.model.unset('updated');this.clearValidationErrors();this.setButtonStates('view');this.handleCancel();this.model.trigger("setMode","view");},hasUnsavedChanges:function(){if(this.model.get('updated')){return true;}
if(this.model.isNew()){return this.model.hasChanged();}
return!_.isEmpty(this.model.changedAttributes(this.model.getSyncedAttributes()));},saveClicked:function(evt){this.handleSave();},createCancelClicked:function(evt){if(this.context.parent){this.layout.navigateLayout('list');}else{app.navigate(this.context);}},deleteClicked:function(evt){this.handleDelete();},addClicked:function(evt){if(this.context.parent){this.layout.navigateLayout('create');}else{var route=app.router.buildRoute(this.module,null,'create');app.router.navigate(route,{trigger:true});}},collapseClicked:function(evt){this.context.trigger("dashboard:collapse:fire",true);},expandClicked:function(evt){this.context.trigger("dashboard:collapse:fire",false);},_render:function(){app.view.View.prototype._render.call(this);this.initButtons();this.setButtonStates(this.context.get("create")?'create':'view');this.setEditableFields();},handleSave:function(){this.inlineEditMode=false;var self=this;if(this.changed){this.model.save({},{showAlerts:true,fieldsToValidate:{'name':{required:true},'metadata':{required:true}},success:function(){self.model.unset('updated');if(self.context.get("create")){if(self.context.parent){self.layout.navigateLayout(self.model.id);}else{app.navigate(self.context,self.model);}}else{self.changed=false;self.setButtonStates('view');self.model.trigger("setMode","view");self.toggleEdit(false);}},error:function(){app.alert.show('error_while_save',{level:'error',title:app.lang.getAppString('ERR_INTERNAL_ERR_MSG'),messages:app.lang.getAppString('ERR_HTTP_500_TEXT')});}});}else{this.model.trigger("setMode","view");this.setButtonStates('view');this.toggleEdit(false);}},handleCancel:function(){this.inlineEditMode=false;if(!_.isEmpty(this.previousModelState)){this.model.set(this.previousModelState);}
this.toggleEdit(false);},handleDelete:function(){app.alert.show('delete_confirmation',{level:'confirmation',messages:app.lang.get('LBL_DELETE_DASHBOARD_CONFIRM',this.module),onConfirm:_.bind(function(){var message=app.lang.get('LBL_DELETE_DASHBOARD_SUCCESS',this.module,{name:app.lang.get(this.model.get('name'),this.module)});this.model.destroy({success:_.bind(function(){if(this.disposed){return;}
if(this.context.parent){this.layout.navigateLayout('list');}else{var route=app.router.buildRoute(this.module);app.router.navigate(route,{trigger:true});}},this),error:function(){app.alert.show('error_while_save',{level:'error',title:app.lang.getAppString('ERR_INTERNAL_ERR_MSG'),messages:app.lang.getAppString('ERR_HTTP_500_TEXT')});},showAlerts:{'process':true,'success':{messages:message}}});},this)});},bindDataChange:function(){},toggleEdit:function(isEdit){this.toggleFields(this.editableFields,isEdit);}}) },
"dashlet-cell-empty": {"controller": /*
     * Your installation or use of this SugarCRM file is subject to the applicable
     * terms available at
     * http://support.sugarcrm.com/06_Customer_Center/10_Master_Subscription_Agreements/.
     * If you do not agree to all of the applicable terms or do not have the
     * authority to bind the entity as an authorized representative, then do not
     * install or use this SugarCRM file.
     *
     * Copyright (C) SugarCRM Inc. All rights reserved.
     */
({
	// Dashlet-cell-empty View (base) 
events:{'click .dashlet.empty':'addClicked'},originalTemplate:null,initialize:function(options){app.view.View.prototype.initialize.call(this,options);this.model=this.layout.context.get("model");this.model.on("setMode",this.setMode,this);this.originalTemplate=this.template;this.setMode(this.model.mode);},addClicked:function(evt){var self=this;app.drawer.open({layout:'dashletselect',context:this.layout.context},function(model){if(!model)return;var conf=model.toJSON(),dash={context:{module:model.get("module"),link:model.get("link")}},type=conf.componentType;delete conf.config;delete conf.componentType;if(_.isEmpty(dash.context.module)&&_.isEmpty(dash.context.link)){delete dash.context;}
dash[type]=conf;self.layout.addDashlet(dash);});},setMode:function(type){if(type==='edit'){this.template=this.originalTemplate;}else if(type==='drag'){this.template=app.template.getView(this.name+'.drop')||this.originalTemplate;}else{this.template=app.template.getView(this.name+'.empty')||app.template.empty;}
this.render();},_dispose:function(){this.model.off("setMode",null,this);app.view.View.prototype._dispose.call(this);}}) },
"dashlet-row-empty": {"controller": /*
     * Your installation or use of this SugarCRM file is subject to the applicable
     * terms available at
     * http://support.sugarcrm.com/06_Customer_Center/10_Master_Subscription_Agreements/.
     * If you do not agree to all of the applicable terms or do not have the
     * authority to bind the entity as an authorized representative, then do not
     * install or use this SugarCRM file.
     *
     * Copyright (C) SugarCRM Inc. All rights reserved.
     */
({
	// Dashlet-row-empty View (base) 
events:{'click .add-dashlet':'layoutClicked','click .add-row.empty':'addClicked'},originalTemplate:null,columnOptions:[],initialize:function(options){app.view.View.prototype.initialize.call(this,options);this.model=this.layout.context.get("model");this.model.on("setMode",this.setMode,this);this.originalTemplate=this.template;this.setMode(this.model.mode);this.columnOptions=[];var parentLayoutWidth=12,parentLayout=this;while(parentLayout){if(parentLayout.type==='dashlet-row'){parentLayoutWidth=parentLayout.meta.width;}
parentLayout=parentLayout.layout;}
var allowColumnSize=_.max([1,Math.floor(parentLayoutWidth / this.model.minColumnSpanSize)]);_.times(allowColumnSize,function(index){var n=index+1;this.columnOptions.push({index:n,label:(n>1)?app.lang.get('LBL_DASHBOARD_ADD_'+n+'_COLUMNS',this.module):app.lang.get('LBL_DASHBOARD_ADD_'+n+'_COLUMN',this.module)});},this);},addClicked:function(evt){var self=this;this._addRowTimer=setTimeout(function(){self.addRow(1);},100);},layoutClicked:function(evt){var columns=$(evt.currentTarget).data('value');var addRow=_.bind(this.addRow,this);_.delay(addRow,0,columns);},addRow:function(columns){this.layout.addRow(columns);if(this._addRowTimer){clearTimeout(this._addRowTimer);}},setMode:function(model){if(model==='edit'){this.template=this.originalTemplate;}else{this.template=app.template.empty;}
this.render();},_dispose:function(){this.model.off("setMode",null,this);app.view.View.prototype._dispose.call(this);}}) },
"dashlet-toolbar": {"controller": /*
     * Your installation or use of this SugarCRM file is subject to the applicable
     * terms available at
     * http://support.sugarcrm.com/06_Customer_Center/10_Master_Subscription_Agreements/.
     * If you do not agree to all of the applicable terms or do not have the
     * authority to bind the entity as an authorized representative, then do not
     * install or use this SugarCRM file.
     *
     * Copyright (C) SugarCRM Inc. All rights reserved.
     */
({
	// Dashlet-toolbar View (base) 
className:'dashlet-header',cssIconDefault:'icon-cog',cssIconRefresh:'icon-refresh icon-spin',defaultActions:{'dashlet:edit:clicked':'editClicked','dashlet:refresh:clicked':'refreshClicked','dashlet:delete:clicked':'removeClicked','dashlet:toggle:clicked':'toggleMinify'},plugins:['Tooltip'],initialize:function(options){_.extend(options.meta,app.metadata.getView(null,'dashlet-toolbar'),options.meta.toolbar);app.view.View.prototype.initialize.call(this,options);},refreshClicked:function(){var $el=this.$("[data-action=loading]"),self=this,options={};if($el.length>0){$el.removeClass(this.cssIconDefault).addClass(this.cssIconRefresh);options.complete=function(){if(self.disposed){return;}
$el.removeClass(self.cssIconRefresh).addClass(self.cssIconDefault);};}
this.layout.reloadDashlet(options);},removeClicked:function(evt){app.alert.show('delete_confirmation',{level:'confirmation',messages:app.lang.get('LBL_REMOVE_DASHLET_CONFIRM',this.module),onConfirm:_.bind(function(){this.layout.removeDashlet();},this)});},editClicked:function(evt){this.layout.editDashlet();},toggleClicked:function(evt){var $btn=$(evt.currentTarget),expanded=_.isUndefined($btn.data('expanded'))?true:$btn.data('expanded'),label=expanded?'LBL_DASHLET_MAXIMIZE':'LBL_DASHLET_MINIMIZE';$btn.html(app.lang.get(label,this.module));this.layout.collapse(expanded);$btn.data('expanded',!expanded);},toggleMinify:function(evt){var $el=this.$('.dashlet-toggle > i'),collapsed=$el.is('.icon-chevron-up');this.layout.collapse(collapsed);this.layout.trigger('dashlet:collapse',collapsed);}}) },
"dashletconfiguration-headerpane": {"controller": /*
     * Your installation or use of this SugarCRM file is subject to the applicable
     * terms available at
     * http://support.sugarcrm.com/06_Customer_Center/10_Master_Subscription_Agreements/.
     * If you do not agree to all of the applicable terms or do not have the
     * authority to bind the entity as an authorized representative, then do not
     * install or use this SugarCRM file.
     *
     * Copyright (C) SugarCRM Inc. All rights reserved.
     */
({
	// Dashletconfiguration-headerpane View (base) 
plugins:['Editable','ErrorDecoration'],events:{"click a[name=cancel_button]":"close","click a[name=save_button]":"save"},_translatedLabel:null,initialize:function(options){this._super('initialize',[options]);this.before('save',function(model){return this.layout.triggerBefore('dashletconfig:save',model);},this);app.shortcuts.register('Dashlet:Config:Cancel',['esc','ctrl+alt+l'],function(){var $cancelButton=this.$('a[name=cancel_button]');if($cancelButton.is(':visible')&&!$cancelButton.hasClass('disabled')){$cancelButton.click();}},this,true);app.shortcuts.register('Dashlet:Config:Save',['ctrl+s','ctrl+alt+a'],function(){var $saveButton=this.$('a[name=save_button]');if($saveButton.is(':visible')&&!$saveButton.hasClass('disabled')){$saveButton.click();}},this,true);},hasUnsavedChanges:function(){var previousAttributes=_.extend(this.model.previousAttributes(),{label:this._translatedLabel});return!_.isEmpty(this.model.changedAttributes(previousAttributes));},save:function(){if(this.triggerBefore('save',this.model)===false){return false;}
var fields={};_.each(this.meta.panels[0].fields,function(field){fields[field.name]=field;});this.model.doValidate(fields,_.bind(function(isValid){if(isValid){app.drawer.close(this.model);}},this));},close:function(){app.drawer.close();},_renderHtml:function(){var label;this.model=this.context.get('model');label=app.lang.get(this.model.get('label'),this.model.get('module')||this.module,this.model.attributes);this._translatedLabel=label;this.model.set('label',label,{silent:true});app.view.View.prototype._renderHtml.call(this);}}) },
"dashletselect": {"controller": /*
     * Your installation or use of this SugarCRM file is subject to the applicable
     * terms available at
     * http://support.sugarcrm.com/06_Customer_Center/10_Master_Subscription_Agreements/.
     * If you do not agree to all of the applicable terms or do not have the
     * authority to bind the entity as an authorized representative, then do not
     * install or use this SugarCRM file.
     *
     * Copyright (C) SugarCRM Inc. All rights reserved.
     */
({
	// Dashletselect View (base) 
extendsFrom:'FilteredListView',initialize:function(options){var meta=app.metadata.getView(null,'dashletselect')||{};options.meta=_.extend({},meta,options.meta||{});this._super('initialize',[options]);this.context=_.extend(_.clone(this.context),{resetLoadFlag:function(){return;}});this.context.on('dashletlist:select-and-edit',function(model){this.selectDashlet(model.get('metadata'));},this);this.context.on('dashletlist:preview:fire',function(model){this.previewDashlet(model.get('metadata'));},this);},previewDashlet:function(metadata){var layout=this.layout,previewLayout;while(layout){if(layout.getComponent('preview-pane')){previewLayout=layout.getComponent('preview-pane').getComponent('dashlet-preview');previewLayout.showPreviewPanel();break;}
layout=layout.layout;}
if(previewLayout){if(!metadata.preview){metadata.preview=metadata.config;}
var previousComponent=_.last(previewLayout._components);if(previousComponent.name!=='dashlet-preview'){var index=previewLayout._components.length-1;previewLayout._components[index].dispose();previewLayout.removeComponent(index);}
var contextDef,component={label:app.lang.get(metadata.label,metadata.preview.module),type:metadata.type,preview:true};if(metadata.preview.module||metadata.preview.link){contextDef={skipFetch:false,forceNew:true,module:metadata.preview.module,link:metadata.preview.link};}else if(metadata.module){contextDef={module:metadata.module};}
component.view=_.extend({module:metadata.module},metadata.preview,component);if(contextDef){component.context=contextDef;}
previewLayout._addComponentsFromDef([{layout:{type:'dashlet',label:app.lang.get(metadata.preview.label||metadata.label,metadata.preview.module),preview:true,components:[component]}}],this.context.parent);previewLayout.loadData();previewLayout.render();}},selectDashlet:function(metadata){var model=new Backbone.Model();app.drawer.load({layout:{type:'dashletconfiguration',components:[{view:_.extend({},metadata.config,{label:app.lang.get(metadata.label,metadata.config.module),type:metadata.type,config:true,module:metadata.config.module||metadata.module})}]},context:{module:metadata.config.module||metadata.module,model:model,forceNew:true,skipFetch:true}});},getFilteredList:function(dashlets){var parentModule=app.controller.context.get('module'),parentView=app.controller.context.get('layout'),parentDashboard=this.model.get('dashboard_type')||this.context.get('dashboard_type')||'dashboard';return _.chain(dashlets).filter(function(dashlet){var filter=dashlet.filter;if(_.isUndefined(filter)){return(parentDashboard==='dashboard');}
var filterModules=filter.module||[parentModule],filterViews=filter.view||[parentView],filterDashboard=filter.dashboard||['dashboard'];if(_.isString(filterModules)){filterModules=[filterModules];}
if(_.isString(filterViews)){filterViews=[filterViews];}
if(_.isString(filterDashboard)){filterDashboard=[filterDashboard];}
return _.contains(filterModules,parentModule)&&_.contains(filterViews,parentView)&&_.contains(filterDashboard,parentDashboard);}).value();},_getDashlets:function(type,name,module,meta){var dashlets=[],hadDashlet=meta&&meta.dashlets&&app.view.componentHasPlugin({type:type,name:name,module:module,plugin:'Dashlet'});if(!hadDashlet){return dashlets;}
_.each(meta.dashlets,function(dashlet){if(!dashlet.config){return;}
var description=app.lang.get(dashlet.description,dashlet.config.module);if(!app.acl.hasAccess('access',module||dashlet.config.module)){return;}
dashlets.push({type:name,filter:dashlet.filter,metadata:_.extend({component:name,module:module,type:name},dashlet),title:app.lang.get(dashlet.label,dashlet.config.module),description:description});},this);return dashlets;},_addBaseViews:function(){var components=[];_.each(app.metadata.getView(),function(view,name){var dashlets=this._getDashlets('view',name,null,view.meta);if(!_.isEmpty(dashlets)){components=_.union(components,dashlets);}},this);return components;},_addModuleViews:function(){var components=[];_.each(app.metadata.getModuleNames({filter:'visible'}),function(module){_.each(app.metadata.getView(module),function(view,name){var dashlets=this._getDashlets('view',name,module,view.meta);if(!_.isEmpty(dashlets)){components=_.union(components,dashlets);}},this);},this);return components;},loadData:function(){if(this.collection.length){this.filteredCollection=this.collection.models;return;}
var dashletCollection=_.union(this._addBaseViews(),this._addModuleViews()),filteredDashletCollection=this.getFilteredList(dashletCollection);this.collection.comparator=function(model){return model.get('title');};this.collection.add(filteredDashletCollection);this.collection.dataFetched=true;this._renderData();},getFields:function(){return _.flatten(_.pluck(this.meta.panels,'fields'));}}) },
"dashletselect-headerpane": {"controller": /*
     * Your installation or use of this SugarCRM file is subject to the applicable
     * terms available at
     * http://support.sugarcrm.com/06_Customer_Center/10_Master_Subscription_Agreements/.
     * If you do not agree to all of the applicable terms or do not have the
     * authority to bind the entity as an authorized representative, then do not
     * install or use this SugarCRM file.
     *
     * Copyright (C) SugarCRM Inc. All rights reserved.
     */
({
	// Dashletselect-headerpane View (base) 
extendsFrom:'HeaderpaneView',events:{"click a[name=cancel_button]":"close"},initialize:function(options){this._super('initialize',[options]);app.shortcuts.register('Dashlet:Select:Cancel',['esc','ctrl+alt+l'],function(){var $cancelButton=this.$('a[name=cancel_button]');if($cancelButton.is(':visible')&&!$cancelButton.hasClass('disabled')){$cancelButton.click();}},this,true);},close:function(){app.drawer.close();}}) },
"dnb": {"controller": /*
     * Your installation or use of this SugarCRM file is subject to the applicable
     * terms available at
     * http://support.sugarcrm.com/06_Customer_Center/10_Master_Subscription_Agreements/.
     * If you do not agree to all of the applicable terms or do not have the
     * authority to bind the entity as an authorized representative, then do not
     * install or use this SugarCRM file.
     *
     * Copyright (C) SugarCRM Inc. All rights reserved.
     */
({
	// Dnb View (base) 
plugins:['Dashlet'],currentCompany:null,responseCodes:{success:'CM000'},commonConst:{'sic_code':3599,'hoovers_ind_code':25838,'sic_to_hic':3599,'connectorSettingsURL':'index.php#bwc/index.php?module=Connectors&action=ModifyProperties','systemSettingsURL':'index.php#bwc/index.php?module=Configurator&action=EditView'},accountsMap:{'name':'OrganizationName.OrganizationPrimaryName.0.OrganizationName.$','duns_num':'SubjectHeader.DUNSNumber','billing_address_street':'Location.PrimaryAddress.0.StreetAddressLine.0.LineText','billing_address_city':'Location.PrimaryAddress.0.PrimaryTownName','billing_address_state':'Location.PrimaryAddress.0.TerritoryAbbreviatedName','billing_address_country':'Location.PrimaryAddress.0.CountryISOAlpha2Code','billing_address_postalcode':'Location.PrimaryAddress.0.PostalCode','website':'Telecommunication.WebPageAddress.0.TelecommunicationAddress','phone_office':'Telecommunication.TelephoneNumber.0.TelecommunicationNumber','employees':'EmployeeFigures.IndividualEntityEmployeeDetails.TotalEmployeeQuantity','annual_revenue':'Financial.KeyFinancialFiguresOverview.0.SalesRevenueAmount.0.$','ownership':'OrganizationDetail.ControlOwnershipTypeText.$','sic_code':'primarySIC.IndustryCode.$'},compInfoProdCD:{'lite':'CST_PRD_1','std':'DCP_STD','prem':'DCP_PREM'},compinfoDD:{'compname':{'json_path':'OrganizationName.OrganizationPrimaryName.0.OrganizationName.$','label':'LBL_DNB_PRIM_NAME','desc':'LBL_DNB_PRIM_NAME_DESC','case_fmt':true},'tradename':{'json_path':'OrganizationName.TradeStyleName.0.OrganizationName.$','label':'LBL_DNB_TRD_NAME','desc':'LBL_DNB_TRD_NAME_DESC','case_fmt':true},'locationtype':{'json_path':'OrganizationDetail.FamilyTreeMemberRole.0.FamilyTreeMemberRoleText.$','label':'LBL_DNB_LOCATION_TYPE','desc':'LBL_DNB_LOCATION_TYPE_DESC','case_fmt':true},'cntrowndate':{'json_path':'OrganizationDetail.ControlOwnershipDate.$','label':'LBL_DNB_CNTRL_OWN_DATE','desc':'LBL_DNB_CNTRL_OWN_DATE_DESC'},'cntrowntype':{'json_path':'OrganizationDetail.ControlOwnershipTypeText.$','label':'LBL_DNB_CNTRL_TYP_TEXT','desc':'LBL_DNB_CNTRL_TYP_TEXT_DESC','case_fmt':true},'operstatus':{'json_path':'OrganizationDetail.OperatingStatusText.$','label':'LBL_DNB_OPERL_STA_TEXT','desc':'LBL_DNB_OPERL_STA_TEXT_DESC','case_fmt':true},'boneyardind':{'json_path':'OrganizationDetail.BoneyardOrganizationIndicator','label':'LBL_DNB_BONE_ORG_IND','desc':'LBL_DNB_BONE_ORG_IND_DESC'},'orgstartyear':{'json_path':'OrganizationDetail.OrganizationStartYear','label':'LBL_DNB_ORGS_STRT_YEAR','desc':'LBL_DNB_ORGS_STRT_YEAR_DESC'},'francoper':{'json_path':'OrganizationDetail.FranchiseOperationTypeText.$','label':'LBL_DNB_FRAN_TYP_TEXT','desc':'LBL_DNB_FRAN_TYP_TEXT_DESC','case_fmt':true},'primaddrstreet':{'json_path':'Location.PrimaryAddress.0.StreetAddressLine.0.LineText','label':'LBL_DNB_PRIM_STREET','desc':'LBL_DNB_PRIM_STREET_DESC','case_fmt':true},'primaddrcity':{'json_path':'Location.PrimaryAddress.0.PrimaryTownName','label':'LBL_DNB_PRIM_CITY','desc':'LBL_DNB_PRIM_CITY_DESC','case_fmt':true},'primaddrstateabbr':{'json_path':'Location.PrimaryAddress.0.TerritoryAbbreviatedName','label':'LBL_DNB_PRIM_STATE_ABBR','desc':'LBL_DNB_PRIM_STATE_ABBR_DESC'},'primaddrstate':{'json_path':'Location.PrimaryAddress.0.TerritoryOfficialName','label':'LBL_DNB_PRIM_STATE','desc':'LBL_DNB_PRIM_STATE_DESC'},'primaddrctrycd':{'json_path':'Location.PrimaryAddress.0.CountryISOAlpha2Code','label':'LBL_DNB_PRIM_CTRY_CD','desc':'LBL_DNB_PRIM_CTRY_CD_DESC'},'primaddrctrygrp':{'json_path':'Location.PrimaryAddress.0.CountryGroupName','label':'LBL_DNB_PRIM_CTRY_GRP','desc':'LBL_DNB_PRIM_CTRY_GRP_DESC'},'primaddrzip':{'json_path':'Location.PrimaryAddress.0.PostalCode','label':'LBL_DNB_PRIM_ZIP','desc':'LBL_DNB_PRIM_ZIP_DESC'},'primaddrcountyname':{'json_path':'Location.PrimaryAddress.0.CountyOfficialName','label':'LBL_DNB_PRIM_COUNTY_NAME','desc':'LBL_DNB_PRIM_COUNTY_NAME_DESC'},'uscensuscd':{'json_path':'Location.PrimaryAddress.0.MetropolitanStatisticalAreaUSCensusCode.0','label':'LBL_DNB_PRIM_CEN_CD','desc':'LBL_DNB_PRIM_CEN_CD_DESC'},'mailingaddrstreet':{'json_path':'Location.MailingAddress.0.StreetAddressLine.0.LineText','label':'LBL_DNB_MAIL_STREET','desc':'LBL_DNB_PRIM_STREET_DESC','case_fmt':true},'mailingaddrcity':{'json_path':'Location.MailingAddress.0.PrimaryTownName','label':'LBL_DNB_MAIL_CITY','desc':'LBL_DNB_PRIM_CITY_DESC','case_fmt':true},'mailingaddrstateabbr':{'json_path':'Location.MailingAddress.0.TerritoryAbbreviatedName','label':'LBL_DNB_MAIL_STATE_ABBR','desc':'LBL_DNB_PRIM_STATE_ABBR_DESC'},'mailingaddrzip':{'json_path':'Location.MailingAddress.0.PostalCode','label':'LBL_DNB_MAIL_ZIP','desc':'LBL_DNB_PRIM_ZIP_DESC'},'mailingaddrctrycd':{'json_path':'Location.MailingAddress.0.CountryISOAlpha2Code','label':'LBL_DNB_MAIL_CTRY_CD','desc':'LBL_DNB_PRIM_CTRY_CD_DESC'},'long':{'json_path':'Location.PrimaryAddress.0.LongitudeMeasurement','label':'LBL_DNB_LAT','desc':'LBL_DNB_LAT_DESC'},'lat':{'json_path':'Location.PrimaryAddress.0.LatitudeMeasurement','label':'LBL_DNB_LONG','desc':'LBL_DNB_LONG_DESC'},'phone':{'json_path':'Telecommunication.TelephoneNumber.0.TelecommunicationNumber','label':'LBL_DNB_PHONE','desc':'LBL_DNB_PHONE_DESC'},'fax':{'json_path':'Telecommunication.FacsimileNumber.0.TelecommunicationNumber','label':'LBL_DNB_FAX','desc':'LBL_DNB_FAX_DESC'},'webpage':{'json_path':'Telecommunication.WebPageAddress.0.TelecommunicationAddress','label':'LBL_DNB_WEBPAGE','desc':'LBL_DNB_WEBPAGE_DESC','type':'link'},'indempcnt':{'json_path':'EmployeeFigures.IndividualEntityEmployeeDetails.TotalEmployeeQuantity','label':'LBL_DNB_IND_EMP_CNT','desc':'LBL_DNB_IND_EMP_CNT_DESC'},'conempcnt':{'json_path':'EmployeeFigures.ConsolidatedEmployeeDetails.TotalEmployeeQuantity','label':'LBL_DNB_CON_EMP_CNT','desc':'LBL_DNB_CON_EMP_CNT_DESC'},'empdet':{'json_path':'PrincipalsAndManagement.CurrentPrincipal','label':'LBL_DNB_EMP_DET','desc':'LBL_DNB_EMP_DET_DESC','sub_array':{'data_type':'emp_det','job_title':'JobTitle.0.JobTitleText.$','full_name':'PrincipalName.FullName'}},'lob':{'json_path':'ActivitiesAndOperations.LineOfBusinessDetails.0.LineOfBusinessDescription.$','label':'LBL_DNB_LOB','desc':'LBL_DNB_LOB_DESC'},'impind':{'json_path':'ActivitiesAndOperations.ImportDetails.ImportIndicator','label':'LBL_DNB_IMP_IND','desc':'LBL_DNB_IMP_IND_DESC'},'expind':{'json_path':'ActivitiesAndOperations.ExportDetails.ExportIndicator','label':'LBL_DNB_EXP_IND','desc':'LBL_DNB_EXP_IND_DESC'},'agentind':{'json_path':'ActivitiesAndOperations.SubjectIsAgentDetails.AgentIndicator','label':'LBL_DNB_AGENT_IND','desc':'LBL_DNB_AGENT_IND_DESC'},'opertext':{'json_path':'ActivitiesAndOperations.OperationsText.0','label':'LBL_DNB_OPER_TEXT','desc':'LBL_DNB_OPER_TEXT_DESC'},'histrat':{'json_path':'Assessment.HistoryRatingText.$','label':'LBL_DNB_HIST_RAT','desc':'LBL_DNB_HIST_RAT_DESC'},'ccs':{'json_path':'Assessment.CommercialCreditScore.0.MarketingRiskClassText.$','label':'LBL_DNB_CCS','desc':'LBL_DNB_CCS_DESC'},'uspatriskscr':{'json_path':'Assessment.USPatriotActComplianceRiskScore.ComplianceRiskIndex','label':'LBL_DNB_USPAT_SCR','desc':'LBL_DNB_USPAT_SCR_DESC'},'tpa':{'json_path':'ThirdPartyAssessment.ThirdPartyAssessment','label':'LBL_DNB_TPA','desc':'LBL_DNB_TPA_DESC','sub_array':{'assmt_type':'AssessmentTypeValue','assmt':'AssessmentValue','data_type':'tpa'}},'minind':{'json_path':'SocioEconomicIdentification.MinorityOwnedIndicator','label':'LBL_DNB_MIN_IND','desc':'LBL_DNB_MIN_IND_DESC'},'smbind':{'json_path':'SocioEconomicIdentification.SmallBusinessIndicator','label':'LBL_DNB_SMB_IND','desc':'LBL_DNB_SMB_IND_DESC'},'ethn':{'json_path':'SocioEconomicIdentification.OwnershipEthnicity.0.EthnicityTypeText.$','label':'LBL_DNB_ETHN','desc':'LBL_DNB_ETHN_DESC','case_fmt':true},'femind':{'json_path':'SocioEconomicIdentification.FemaleOwnedIndicator','label':'LBL_DNB_FEM_IND','desc':'LBL_DNB_FEM_IND_DESC'},'smbdisadv':{'json_path':'SocioEconomicIdentification.SmallDisadvantagedBusinessIndicator','label':'LBL_DNB_SMBDISADV_IND','desc':'LBL_DNB_SMBDISADV_IND_DESC'},'alasnat':{'json_path':'SocioEconomicIdentification.AlaskanNativeCorporationIndicator','label':'LBL_DNB_ALASNAT_IND','desc':'LBL_DNB_ALASNAT_IND_DESC'},'smbcert':{'json_path':'SocioEconomicIdentification.CertifiedSmallBusinessIndicator','label':'LBL_DNB_SMB_CERT','desc':'LBL_DNB_SMB_CERT_DESC'},'mincoll':{'json_path':'SocioEconomicIdentification.MinorityCollegeIndicator','label':'LBL_DNB_MIN_COLL','desc':'LBL_DNB_MIN_COLL_DESC'},'disab':{'json_path':'SocioEconomicIdentification.DisabledOwnedIndicator','label':'LBL_DNB_DISAB_IND','desc':'LBL_DNB_DISAB_IND_DESC'},'svcdisabvet':{'json_path':'SocioEconomicIdentification.ServiceDisabledVeteranOwnedIndicator','label':'LBL_DNB_SVC_DISAB_VET','desc':'LBL_DNB_SVC_DISAB_VET_DESC'},'vietvet':{'json_path':'SocioEconomicIdentification.VietnamVeteranOwnedIndicator','label':'LBL_DNB_VIET_VET','desc':'LBL_DNB_VIET_VET_DESC'},'airprtdisadvent':{'json_path':'SocioEconomicIdentification.AirportConcessionDisadvantagedBusinessEnterpriseIndicator','label':'LBL_DNB_AIRPRT_DISADV_ENT','desc':'LBL_DNB_AIRPRT_DISADV_ENT_DESC'},'disabvetent':{'json_path':'SocioEconomicIdentification.DisabledVeteranBusinessEnterpriseIndicator','label':'LBL_DNB_DISAB_VET_ENT','desc':'LBL_DNB_DISAB_VET_ENT_DESC'},'disadvent':{'json_path':'SocioEconomicIdentification.DisadvantagedBusinessEnterpriseIndicator','label':'LBL_DNB_DISADV_ENT','desc':'LBL_DNB_DISADV_ENT_DESC'},'disadvvetent':{'json_path':'SocioEconomicIdentification.DisadvantagedVeteranEnterpriseIndicator','label':'LBL_DNB_DISADV_VET_ENT','desc':'LBL_DNB_DISADV_VET_ENT_DESC'},'minent':{'json_path':'SocioEconomicIdentification.MinorityBusinessEnterpriseIndicator','label':'LBL_DNB_MIN_ENT','desc':'LBL_DNB_MIN_ENT_DESC'},'fement':{'json_path':'SocioEconomicIdentification.FemaleOwnedBusinessEnterpriseIndicator','label':'LBL_DNB_FEM_ENT','desc':'LBL_DNB_FEM_ENT_DESC'},'hubcrt':{'json_path':'SocioEconomicIdentification.HUBZoneCertifiedBusinessIndicator','label':'LBL_DNB_HUB_CRT','desc':'LBL_DNB_HUB_CRT_DESC'},'eightacrt':{'json_path':'SocioEconomicIdentification.EightACertifiedBusinessIndicator','label':'LBL_DNB_EIGHTA_CRT','desc':'LBL_DNB_EIGHTA_CRT_DESC'},'vet_ind':{'json_path':'SocioEconomicIdentification.VeteranOwnedIndicator','label':'LBL_DNB_VET_IND','desc':'LBL_DNB_VET_IND_DESC'},'lsind':{'json_path':'SocioEconomicIdentification.LaborSurplusAreaIndicator','label':'LBL_DNB_LS_IND','desc':'LBL_DNB_LS_IND_DESC'},'vetent':{'json_path':'SocioEconomicIdentification.VeteranBusinessEnterpriseIndicator','label':'LBL_DNB_VET_ENT','desc':'LBL_DNB_VET_ENT_DESC'},'inqcnt':{'json_path':'SubjectHeader.TotalInquiriesCount','label':'LBL_DNB_INQ_CNT','desc':'LBL_DNB_INQ_CNT_DESC'},'transferdunsnbr':{'json_path':'SubjectHeader.TransferDUNSNumberRegistration.0.TransferredFromDUNSNumber','label':'LBL_DNB_TRNS_DUNS','desc':'LBL_DNB_TRNS_DUNS_DESC'},'lastupddate':{'json_path':'SubjectHeader.LastUpdateDate.$','label':'LBL_DNB_LAST_UPD_DATE','desc':'LBL_DNB_LAST_UPD_DATE_DESC'},'marketind':{'json_path':'SubjectHeader.MarketabilityIndicator','label':'LBL_DNB_MARKET_IND','desc':'LBL_DNB_MARKET_IND_DESC'},'dunsselfind':{'json_path':'SubjectHeader.DUNSSelfRequestIndicator','label':'LBL_DNB_DUNSSELF_IND','desc':'LBL_DNB_DUNSSELF_IND_DESC'},'nonmarkreastxt':{'json_path':'SubjectHeader.NonMarketableReasonText.0.$','label':'LBL_DNB_NONMARK_REAS_TXT','desc':'LBL_DNB_NONMARK_REAS_TXT_DESC','case_fmt':true},'indcodes':{'json_path':'IndustryCode.IndustryCode','label':'LBL_DNB_IND_CD','desc':'LBL_DNB_IND_CD_DESC','sub_array':{'data_type':'ind_codes','ind_code_type':'@TypeText','ind_code':'IndustryCode.$','ind_code_desc':'IndustryCodeDescription.0.$','disp_seq':'DisplaySequence'}}},searchDD:{'companyname':{'json_path':'OrganizationPrimaryName.OrganizationName.$','case_fmt':true},'duns_num':{'json_path':'DUNSNumber'},'locationtype':{'json_path':'locationtype','case_fmt':true},'streetaddr':{'json_path':'PrimaryAddress.StreetAddressLine.0.LineText','case_fmt':true},'town':{'json_path':'PrimaryAddress.PrimaryTownName','case_fmt':true},'territory':{'json_path':'PrimaryAddress.TerritoryOfficialName','case_fmt':true},'ctrycd':{'json_path':'PrimaryAddress.CountryISOAlpha2Code'},'isDupe':{'json_path':'isDupe'},'recordNum':{'json_path':'DisplaySequence'}},accountsDD:null,appendSVCPaths:{'responseCode':'OrderProductResponse.TransactionResult.ResultID','responseMsg':'OrderProductResponse.TransactionResult.ResultText','industry':'OrderProductResponse.OrderProductResponseDetail.Product.Organization.IndustryCode.IndustryCode','product':'OrderProductResponse.OrderProductResponseDetail.Product.Organization','duns':'OrderProductResponse.OrderProductResponseDetail.InquiryDetail.DUNSNumber'},commonJSONPaths:{'industryCode':'IndustryCode.$','industryType':'@DNBCodeValue','srchRespCode':'FindCompanyResponse.TransactionResult.ResultID','srchRespMsg':'FindCompanyResponse.TransactionResult.ResultText','srchRslt':'FindCompanyResponse.FindCompanyResponseDetail.FindCandidate','competitors':'FindCompetitorResponse.FindCompetitorResponseDetail.Competitor','industryprofile':'OrderProductResponse.OrderProductResponseDetail.Product.IndustryProfile','srchCount':'FindCompanyResponse.FindCompanyResponseDetail.CandidateMatchedQuantity'},commonErrorMap:{'ERROR_DNB_CONFIG':'LBL_DNB_NOT_CONFIGURED','ERROR_CURL_5':'LBL_DNB_ERROR_CURL_RESOLVE_PROXY','ERROR_CURL_6':'LBL_DNB_ERROR_CURL_RESOLVE_HOST','ERROR_CURL_7':'LBL_DNB_ERROR_CURL_CONNECTION_FAIL','ERROR_CURL_56':'LBL_DNB_ERROR_CURL_NETWORK_FAIL','ERROR_DNB_SVC_ERR':'LBL_DNB_SVC_ERR','ERROR_DNB_UNKNOWN':'LBL_DNB_UNKNOWN_ERROR','ERROR_EMPTY_PARAM':'LBL_DNB_EMPTY_PARAM','ERROR_BAD_REQUEST':'EXCEPTION_MISSING_PARAMTER','ERROR_INVALID_MODULE_NAME':'LBL_DNB_INVALID_MODULE_NAME'},formatTypeMap:null,contactConst:{'responseCode':'FindContactResponse.TransactionResult.ResultID','responseMsg':'FindContactResponse.TransactionResult.ResultText','contactsPath':'FindContactResponse.FindContactResponseDetail.FindCandidate','contactsDetailPath':'OrderProductResponse.OrderProductResponseDetail.Product.Organization.PrincipalsAndManagement.CurrentPrincipal.0','premCntct':'dnb-cnt-prem','stdCntct':'dnb-cnt-std','srchCount':'FindContactResponse.FindContactResponseDetail.CandidateMatchedQuantity','orgName':'OrderProductResponse.OrderProductResponseDetail.Product.Organization.OrganizationName.OrganizationPrimaryName.0.OrganizationName.$'},sidePaneDashlets:{'dnb-account-create':'LBL_DNB_ACC_CRT','dnb-bal-results':'LBL_DNB_BAL'},contactsListDD:{'jobTitle':{'json_path':'JobTitle.0.JobTitleText.$'},'fullName':{'json_path':'ContactName.FullName'},'principalId':{'json_path':'PrincipalIdentificationNumberDetail.0.PrincipalIdentificationNumber'},'emailInd':{'json_path':'DirectTelephoneInformationAvailableIndicator'},'phoneInd':{'json_path':'DirectEmailInformationAvailableIndicator'},'isDupe':{'json_path':'isDupe'},'companyName':{'json_path':'OrganizationPrimaryName.OrganizationName.$'},'dunsNum':{'json_path':'DUNSNumber'},'recordNum':{'json_path':'DisplaySequence'}},contactsDetailDD:{'full_name':{'json_path':'PrincipalName.FullName','label':'LBL_DNB_CONTACT_NAME'},'account_name':{'json_path':'orgName','label':'LBL_DNB_BAL_ORG_NAME'},'dnb_principal_id':{'json_path':'PrincipalIdentificationNumberDetail.PrincipalIdentificationNumber'},'title':{'json_path':'JobTitle','label':'LBL_DNB_CONTACT_JOBTITLE','sub_object':{'data_type':'job_hist','title':'JobTitleText.$','start_date':'StartDate.$','end_date':'EndDate.$'}},'department':{'json_path':'CurrentManagementResponsibility.0.ManagementResponsibilityText.$','label':'LBL_DNB_CONTACT_RESP'},'email':{'json_path':'Telecommunication.EmailAddress.0.TelecommunicationAddress','label':'LBL_DNB_CONTACT_EMAIL'},'phone_work':{'json_path':'Telecommunication.TelephoneNumber.0.TelecommunicationNumber','label':'LBL_DNB_CONTACT_PHONE'},'first_name':{'json_path':'PrincipalName.FirstName'},'last_name':{'json_path':'PrincipalName.LastName'},'salutation':{'json_path':'PrincipalName.NamePrefix.NamePrefixText'},'emp_bio':{'json_path':'EmploymentBiography.EmploymentBiographyText','label':'LBL_DNB_CONTACT_BIO'},'comp_hist':{'json_path':'FormerCompensation','sub_object':{'data_type':'comp_hist','comp_det':'CompensationDetail','comp_date':'CompensationDate.$','comp_type':'CompensationTypeText.$','comp_amt':'CompensationAmount.$','comp_curr':'CompensationAmount.@CurrencyISOAlpha3Code'}}},contactAttr:['email','phone_work','dnb_principal_id','first_name','last_name','full_name','department','title','salutation'],initDashlet:function(){this.accountsDD={'name':this.compinfoDD.compname,'billing_address_street':this.compinfoDD.primaddrstreet,'billing_address_city':this.compinfoDD.primaddrcity,'billing_address_state':this.compinfoDD.primaddrstateabbr,'billing_address_country':this.compinfoDD.primaddrctrycd,'billing_address_postalcode':this.compinfoDD.primaddrzip,'website':this.compinfoDD.webpage,'phone_office':this.compinfoDD.phone,'employees':this.compinfoDD.indempcnt,'annual_revenue':{'json_path':'Financial.KeyFinancialFiguresOverview.0','sub_object':{'data_type':'sales_rev','units':'SalesRevenueAmount.0.@UnitOfSize','currency_cd':'SalesRevenueAmount.0.@CurrencyISOAlpha3Code','financial_yr':'StatementHeaderDetails.FinancialStatementToDate.$','amount':'SalesRevenueAmount.0.$','label':'LBL_DNB_SALES_REVENUE'}},'ownership':this.compinfoDD.cntrowntype,'sic_code':{'json_path':'IndustryCode.IndustryCode','sub_object':{'data_type':'prim_sic','sic_type_code':3599,'ind_code':'IndustryCode.$','label':'LBL_DNB_SIC'}}};this.formatTypeMap={'emp_det':this.formatEmployeeDet,'ind_codes':this.formatIndCodes,'tpa':this.formatTPA,'sales_rev':this.formatAnnualSales,'prim_sic':this.formatPrimSic};this.leadsAttr=this.contactAttr.slice();this.leadsAttr.push('account_name');this.targetAttr=this.leadsAttr.slice();this.personTypeAttrList={'Contacts':this.contactAttr,'Leads':this.leadsAttr,'Prospects':this.targetAttr};},checkJsonNode:function(obj,path){var args=path.split('.');for(var i=0;i<args.length;i++){if(_.isNull(obj)||_.isUndefined(obj)||!obj.hasOwnProperty(args[i])){return false;}
obj=obj[args[i]];}
return true;},checkAndProcessError:function(xhr,status,error){if(this.disposed){return;}
this.dnbError={};var errorCode=xhr.code,errorMessage,errorLink;if(!_.isUndefined(errorCode)){app.logger.error('D&B API Error:'+errorCode);errorMessage=this.commonErrorMap[errorCode];if(_.isUndefined(errorMessage)){errorMessage=app.lang.get('LBL_DNB_API_ERR')+':'+errorCode;}
if(errorCode==='ERROR_DNB_CONFIG'){errorLink=this.commonConst.connectorSettingsURL;}else if(errorCode.indexOf('ERROR_CURL_')!==-1){errorLink=this.commonConst.systemSettingsURL;}}else{errorMessage=this.commonErrorMap['ERROR_DNB_UNKNOWN'];}
this.dnbError.errMsg=errorMessage;if(!_.isUndefined(errorLink)){this.dnbError.errorLink=errorLink;}
var dashletLabel=this.sidePaneDashlets[this.name];if(!_.isUndefined(dashletLabel)){this.template=app.template.get('dnb.dnb-sidepane-error');this.dnbError.label=dashletLabel;}else{this.template=app.template.get('dnb.dnb-error');}
this.render();this.$('div#error-display').show();this.$('.showLessData').hide();},getJsonNode:function(obj,path){var args=path.split('.');for(var i=0;i<args.length;i++){if(_.isNull(obj)||_.isUndefined(obj)||!obj.hasOwnProperty(args[i])){return;}
obj=obj[args[i]];}
return obj;},baseCompanyInformation:function(duns_num,prod_code,backToListLabel,renderFunction){var self=this;var firmoParams={'duns_num':duns_num,'prod_code':prod_code};var cacheKey='dnb:'+firmoParams.duns_num+':'+firmoParams.prod_code,resultData;var cacheContent=app.cache.get(cacheKey);if(cacheContent){resultData=cacheContent;if(backToListLabel){resultData.backToListLabel=backToListLabel;}
renderFunction.call(self,resultData);}else{var dnbProfileUrl=app.api.buildURL('connector/dnb/firmographic','',{},{});resultData={'product':null,'errmsg':null,'backToListLabel':null};app.api.call('create',dnbProfileUrl,{'qdata':firmoParams},{success:function(data){var responseCode=self.getJsonNode(data,self.appendSVCPaths.responseCode),responseMsg=self.getJsonNode(data,self.appendSVCPaths.responseMsg);if(!_.isUndefined(responseCode)&&responseCode==='CM000'){resultData.product=data;var industryCodeArray=self.getJsonNode(data,self.appendSVCPaths.industry);if(!_.isUndefined(industryCodeArray)){resultData.product.primarySIC=self.getPrimaryIndustry(industryCodeArray,self.commonConst.sic_code);}
app.cache.set(cacheKey,resultData);}else{resultData.errmsg=responseMsg||app.lang.get('LBL_DNB_SVC_ERR');}
if(!_.isUndefined(backToListLabel)){resultData.backToListLabel=backToListLabel;}
renderFunction.call(self,resultData);},error:_.bind(self.checkAndProcessError,self)});}},getPrimaryIndustry:function(industryArray,industryCode){return _.find(industryArray,function(industryObj){return industryObj['@DNBCodeValue']===industryCode&&industryObj['DisplaySequence']===1;});},formatCompanyInfo:function(firmoResponse,dataElementsMap){var productDetails=this.getJsonNode(firmoResponse,this.appendSVCPaths.product);var formattedDataElements=[];if(productDetails){_.each(dataElementsMap,function(value,key){var dnbDataElement=null,dnbDataObj;if(value.sub_array){dnbDataElement=this.getJsonNode(productDetails,value.json_path);_.each(dnbDataElement,function(dnbSubData){dnbDataObj=this.formatTypeMap[value.sub_array.data_type].call(this,dnbSubData,value.sub_array);if(!_.isNull(dnbDataObj)){formattedDataElements.push(dnbDataObj);}},this);}else if(value.sub_object){dnbDataElement=this.getJsonNode(productDetails,value.json_path);dnbDataObj=this.formatTypeMap[value.sub_object.data_type].call(this,dnbDataElement,value.sub_object);if(!_.isNull(dnbDataObj)){formattedDataElements.push(dnbDataObj);}}else{dnbDataElement=this.getJsonNode(productDetails,value.json_path);dnbDataObj={};if(dnbDataElement){if(value.case_fmt){dnbDataElement=this.properCase(dnbDataElement);}
dnbDataObj.dataElement=dnbDataElement;dnbDataObj.dataLabel=value.label;dnbDataObj.dataName=key;if(value.type==='link'){dnbDataObj.dataType='link';}
formattedDataElements.push(dnbDataObj);}}},this);}
return formattedDataElements;},formatEmployeeDet:function(employeeObj,empDD){var dnbDataObj=null;var jobTitle=this.getJsonNode(employeeObj,empDD.job_title);var empName=this.getJsonNode(employeeObj,empDD.full_name);if(empName){dnbDataObj={};dnbDataObj.dataElement=this.properCase(empName);if(jobTitle){jobTitle='<i class="icon-user"></i>'+this.properCase(jobTitle);}else{jobTitle='<i class="icon-user"></i>'+app.lang.get('LBL_DNB_ASSOCIATE');}
dnbDataObj.dnbLabel=jobTitle;}
return dnbDataObj;},formatTPA:function(tpaObj,tpaDD){var dnbDataObj=null;var assmt=this.getJsonNode(tpaObj,tpaDD.assmt);var assmt_type=this.getJsonNode(tpaObj,tpaDD.assmt_type);if(assmt&&assmt_type){dnbDataObj={};dnbDataObj.dataElement=this.properCase(assmt);dnbDataObj.dnbLabel=this.properCase(assmt_type);}
return dnbDataObj;},formatPrimSic:function(indCdArr,indSicDD){var dnbDataObj=null,primSicCode=null,primSicObj=this.getPrimaryIndustry(indCdArr,indSicDD.sic_type_code);if(primSicObj){primSicCode=this.getJsonNode(primSicObj,indSicDD.ind_code);if(primSicCode){dnbDataObj={};dnbDataObj.dataElement=primSicCode;dnbDataObj.dataLabel=indSicDD.label;dnbDataObj.dataName='sic_code';}}
return dnbDataObj;},formatIndCodes:function(indCodeObj,indDD){var dnbDataObj=null;var ind_code_type=this.getJsonNode(indCodeObj,indDD.ind_code_type);var ind_code_desc=this.getJsonNode(indCodeObj,indDD.ind_code_desc);var ind_code=this.getJsonNode(indCodeObj,indDD.ind_code);var disp_seq=this.getJsonNode(indCodeObj,indDD.disp_seq);var primaryHTML='<span class="label label-success pull-right" data-placement="right">'+app.lang.get('LBL_DNB_PRIMARY')+'</span>';if(ind_code_desc){dnbDataObj={};if(disp_seq&&disp_seq===1){dnbDataObj.dataElement=ind_code_desc+primaryHTML;}else{dnbDataObj.dataElement=ind_code_desc;}
dnbDataObj.dnbLabel=ind_code_type+':'+ind_code;}
return dnbDataObj;},formatSrchRslt:function(srchResults,searchDD){var formattedSrchRslts=[];_.each(srchResults,function(companyObj){if(companyObj.FamilyTreeMemberRole){var locationType=_.max(companyObj.FamilyTreeMemberRole,function(memberRole){return memberRole.FamilyTreeMemberRoleText['@DNBCodeValue'];});var ftRole=this.getJsonNode(locationType,'FamilyTreeMemberRoleText.$');if(!_.isUndefined(ftRole)&&ftRole!=='Parent'){companyObj.locationtype=ftRole;}}},this);_.each(srchResults,function(searchResultObj){var frmtSrchRsltObj={};_.each(searchDD,function(value,key){var dataElement=this.getJsonNode(searchResultObj,value.json_path);if(value.sub_object){var dnbDataObj=this.formatTypeMap[value.sub_object.data_type].call(this,dataElement,value.sub_object);if(!_.isNull(dnbDataObj)){frmtSrchRsltObj[key]=dnbDataObj;}}else{if(dataElement){if(value.case_fmt){dataElement=this.properCase(dataElement);}
frmtSrchRsltObj[key]=dataElement;}}},this);frmtSrchRsltObj.isChecked=true;formattedSrchRslts.push(frmtSrchRsltObj);},this);return formattedSrchRslts;},formatAnnualSales:function(annsalesObj,annsalesDD){var dnbDataObj=null;var amount=this.getJsonNode(annsalesObj,annsalesDD.amount);var units=this.getJsonNode(annsalesObj,annsalesDD.units);var currency_cd=this.getJsonNode(annsalesObj,annsalesDD.currency_cd);var financial_yr=this.getJsonNode(annsalesObj,annsalesDD.financial_yr);if(amount){dnbDataObj={};var finYrHTML=null,unitsStr=null,dnbLabel;if(financial_yr){finYrHTML='<span class="label label-success pull-right" data-placement="right">'+financial_yr+'</span>';}
if(units&&currency_cd){unitsStr='('+app.lang.get('LBL_DNB_IN')+' '+units+' '+currency_cd+')';}
dnbDataObj.dataElement=this.formatSalesRevenue(amount);dnbLabel=app.lang.get(annsalesDD.label);if(unitsStr){dnbLabel=dnbLabel+unitsStr;}
if(finYrHTML){dnbLabel=dnbLabel+finYrHTML;}
dnbDataObj.dnbLabel=dnbLabel;dnbDataObj.dataName='annual_revenue';}
return dnbDataObj;},renderCompanyDetails:function(companyDetails){if(this.disposed){return;}
var formattedFirmographics,dnbFirmo={};if(companyDetails.errmsg){if(this.layout.getComponent('dashlet-toolbar').getField('import_dnb_data')){this.layout.getComponent('dashlet-toolbar').getField('import_dnb_data').getFieldElement().hide();}}else if(companyDetails.product){if(this.layout.getComponent('dashlet-toolbar').getField('import_dnb_data')){this.layout.getComponent('dashlet-toolbar').getField('import_dnb_data').getFieldElement().show();}
if(companyDetails.product){formattedFirmographics=this.formatCompanyInfo(companyDetails.product,this.accountsDD);dnbFirmo.product=formattedFirmographics;dnbFirmo.backToListLabel=companyDetails.backToListLabel;}else if(companyDetails.errmsg){dnbFirmo.errmsg=companyDetails.errmsg;}
this.currentCompany=companyDetails.product;}
this.dnbFirmo=dnbFirmo;this.render();this.$('div#dnb-company-detail-loading').hide();this.$('div#dnb-company-details').show();},renderCompanyInformation:function(companyDetails){if(this.disposed){return;}
this.template=app.template.get('dnb.dnb-comp-info');var formattedFirmographics,dnbFirmo={};if(companyDetails.product){formattedFirmographics=this.formatCompanyInfo(companyDetails.product,this.filteredDD);dnbFirmo.product=formattedFirmographics;}else if(companyDetails.errmsg){dnbFirmo.errmsg=companyDetails.errmsg;}
this.dnbFirmo=dnbFirmo;this.render();this.$('div#dnb-compinfo-loading').hide();this.$('div#dnb-compinfo-details').show();this.$('.showLessData').hide();},importDNBData:function(){var accountsModel=this.getAccountsModel(this.currentCompany);if(!_.isUndefined(accountsModel)){var self=this;app.drawer.open({layout:'create-actions',context:{create:true,module:'Accounts',model:accountsModel}},function(accountsModel){if(!accountsModel){return;}
self.context.resetLoadFlag();self.context.set('skipFetch',false);self.context.loadData();});}},getAccountsModel:function(companyApiResponse){var organizationDetails=this.getJsonNode(companyApiResponse,this.appendSVCPaths.product);var accountsModel=null;if(!_.isUndefined(organizationDetails)){var accountsBean={};if(companyApiResponse.primarySIC){organizationDetails.primarySIC=companyApiResponse.primarySIC;}
_.each(this.accountsMap,function(dataElementPath,sugarColumnName){var dnbDataElement=this.getJsonNode(organizationDetails,dataElementPath);if(dnbDataElement){if(sugarColumnName==='annual_revenue'){dnbDataElement=this.formatSalesRevenue(dnbDataElement);}
accountsBean[sugarColumnName]=dnbDataElement;}},this);accountsModel=app.data.createBean('Accounts',accountsBean);}
return accountsModel;},collapseDashlet:function(){if(this.layout.collapse){this.layout.collapse(true);}},showMoreData:function(){this.$('.dnb-show-less').attr('class','dnb-show-all');this.$('.showLessData').show();this.$('.showMoreData').hide();},showLessData:function(){this.$('.dnb-show-all').attr('class','dnb-show-less');this.$('.showLessData').hide();this.$('.showMoreData').show();},formatSalesRevenue:function(amount){if(_.isNumber(amount)){amount=amount.toFixed(0).replace(/(\d)(?=(\d{3})+\b)/g,'$1,');}
return amount;},properCase:function(strParam){return strParam.replace(/\w\S*/g,function(txt){return txt.charAt(0).toUpperCase()+txt.substr(1).toLowerCase();});},importAccountsData:function(importFlag){var setModelFlag=true;if(_.isUndefined(importFlag)){importFlag=true;setModelFlag=false;}else if(importFlag){setModelFlag=false;}
var dnbCheckBox=this.$('.dnb_checkbox:checked');var accountsModel=this.model;var updatedData=[],newData=[],dnbPropertyName=null,dnbPropertyValue=null,dnbPropertySelector=null;_.each(dnbCheckBox,function(dataElement){dnbPropertyName=dataElement.id;if(dnbPropertyName){dnbPropertySelector=this.$('#'+dnbPropertyName).parent().siblings('.importData').clone();dnbPropertyValue=$.trim(dnbPropertySelector.children().remove().end().text());if(!_.isUndefined(accountsModel.get(dnbPropertyName))&&accountsModel.get(dnbPropertyName)!==''&&importFlag){updatedData.push({propName:dnbPropertyName,propVal:dnbPropertyValue});}else if(dnbPropertyValue!==''){newData.push({propName:dnbPropertyName,propVal:dnbPropertyValue});}}},this);if(newData.length>0){this.updateAccountsModel(newData,setModelFlag);}
if(updatedData.length>0){var confirmationMsgKey,confirmationMsgData;if(updatedData.length===1){var fieldName=app.lang.get(accountsModel.fields[updatedData[0].propName].vname,'Accounts');confirmationMsgKey='LBL_DNB_DATA_OVERRIDE_SINGLE_FIELD';confirmationMsgData={fieldName:fieldName.toLowerCase(),value:updatedData[0].propVal};}else{var fieldList=[app.lang.get(accountsModel.fields[updatedData[0].propName].vname,'Accounts').toLowerCase(),app.lang.get(accountsModel.fields[updatedData[1].propName].vname,'Accounts').toLowerCase()];if(updatedData.length===2){confirmationMsgKey='LBL_DNB_DATA_OVERRIDE_TWO_FIELDS';confirmationMsgData={fields:fieldList.join(' '+app.lang.get('LBL_DNB_AND')+' ')};}else{confirmationMsgKey='LBL_DNB_DATA_OVERRIDE_MULTIPLE_FIELDS';confirmationMsgData={fields:fieldList.join(', ')};}}
var confirmationMsgTpl=Handlebars.compile(app.lang.get(confirmationMsgKey));app.alert.show('dnb-import-warning',{level:'confirmation',title:'LBL_WARNING',messages:confirmationMsgTpl(confirmationMsgData),onConfirm:_.bind(this.updateAccountsModel,this,updatedData)});}},updateAccountsModel:function(updatedData,setFlag){var changedAttributes={};this.model.set('duns_num',this.duns_num);if(setFlag){_.each(updatedData,function(updatedAttribute){this.model.set(updatedAttribute.propName,updatedAttribute.propVal);},this);app.alert.show('dnb-import-success',{level:'success',title:app.lang.get('LBL_SUCCESS')+':',messages:app.lang.get('LBL_DNB_OVERRIDE_SUCCESS'),autoClose:true});}else{_.each(updatedData,function(updatedAttribute){changedAttributes[updatedAttribute.propName]=updatedAttribute.propVal;});this.model.save(changedAttributes,{success:function(){app.alert.show('dnb-import-success',{level:'success',title:app.lang.get('LBL_SUCCESS')+':',messages:app.lang.get('LBL_DNB_OVERRIDE_SUCCESS'),autoClose:true});}});this.context.loadData();}},baseFilterData:function(){this.filteredDD={};_.each(this.compinfoDD,function(value,key){var settingsFlag=this.settings.get(key);if(!_.isUndefined(settingsFlag)&&settingsFlag==='1'){this.filteredDD[key]=value;}else if(_.isUndefined(settingsFlag)){this.filteredDD[key]=value;this.settings.set(key,'1');}},this);},baseDuplicateCheck:function(dupeCheckParams,callBack){var dupeCheckURL=app.api.buildURL('connector/dnb/dupecheck','',{},{});var self=this;app.api.call('create',dupeCheckURL,{'qdata':dupeCheckParams},{success:function(data){callBack.call(self,{'product':data});},error:_.bind(self.checkAndProcessError,self)});},baseAccountsBAL:function(balParams,callBack){var balRslt={'product':null,'errmsg':null};var dnbBalURL=app.api.buildURL('connector/dnb/Accounts/bal','',{},{});var self=this;app.api.call('create',dnbBalURL,{'qdata':balParams},{success:function(data){var responseCode=self.getJsonNode(data,self.commonJSONPaths.srchRespCode),responseMsg=self.getJsonNode(data,self.commonJSONPaths.srchRespMsg);if(responseCode&&responseCode===self.responseCodes.success){balRslt.product=data;}else{balRslt.errmsg=responseMsg||app.lang.get('LBL_DNB_SVC_ERR');}
callBack.call(self,balRslt);},error:_.bind(self.checkAndProcessError,self)});},toggleImportBtn:function(btnName,isVisible){if(this.layout.getComponent('dashlet-toolbar').getField(btnName)){if(isVisible){this.layout.getComponent('dashlet-toolbar').getField(btnName).getFieldElement().show();this.layout.getComponent('dashlet-toolbar').getField(btnName).getFieldElement().removeClass('hide');}else{this.layout.getComponent('dashlet-toolbar').getField(btnName).getFieldElement().hide();}}},toggleDashletBtn:function(isEnabled,btnName){if(this.layout.getComponent('dashlet-toolbar').getField(btnName)){if(isEnabled){this.layout.getComponent('dashlet-toolbar').getField(btnName).setDisabled(false);this.layout.getComponent('dashlet-toolbar').getField(btnName).getFieldElement().removeClass('disabled');this.layout.getComponent('dashlet-toolbar').getField(btnName).getFieldElement().removeClass('hide');}else{this.layout.getComponent('dashlet-toolbar').getField(btnName).setDisabled(true);this.layout.getComponent('dashlet-toolbar').getField(btnName).getFieldElement().addClass('disabled');}}},baseContactsBAL:function(balParams,renderFunction){var self=this,balRslt={'product':null,'errmsg':null},dnbBalURL=app.api.buildURL('connector/dnb/Contacts/bal','',{},{});app.api.call('create',dnbBalURL,{'qdata':balParams},{success:function(data){var responseCode=self.getJsonNode(data,self.contactConst.responseCode),responseMsg=self.getJsonNode(data,self.contactConst.responseMsg);if(responseCode&&responseCode===self.responseCodes.success){balRslt.product=data;}else{balRslt.errmsg=responseMsg||app.lang.get('LBL_DNB_SVC_ERR');}
renderFunction.call(self,balRslt);},error:_.bind(self.checkAndProcessError,self)});},formatContactList:function(dnbApiResponse,contactsListDD){var frmtCntctList=[];_.each(dnbApiResponse,function(contactObj){var frmCntctObj={};_.each(contactsListDD,function(value,key){var dataElement=this.getJsonNode(contactObj,value.json_path);if(dataElement){frmCntctObj[key]=dataElement;}},this);if(frmCntctObj.principalId&&frmCntctObj.fullName){if(frmCntctObj.emailInd||frmCntctObj.phoneInd){frmCntctObj.contactType=this.contactConst.premCntct;}else{frmCntctObj.contactType=this.contactConst.stdCntct;}
frmtCntctList.push(frmCntctObj);}},this);return frmtCntctList;},baseGetContactDetails:function(evt){if(this.disposed){return;}
var contact_id=evt.target.id;var duns_num=this.$(evt.target).data('duns');var contact_name=evt.target.text,contact_type;if(this.$(evt.target).hasClass(this.contactConst.premCntct)){contact_type=this.contactConst.premCntct;}else if(this.$(evt.target).hasClass(this.contactConst.stdCntct)){contact_type=this.contactConst.stdCntct;}
if(this.name==='dnb-bal-results'){this.template=app.template.get(this.name+'.dnb-bal-contact-details');}else if(this.name==='dnb-contact-info'){this.template=app.template.get(this.name+'.dnb-contact-details');}
this.cntctLoadMsg={'contactName':contact_name};this.render();this.$('div#dnb-contact-details-loading').show();this.$('div#dnb-contact-details').hide();if(this.name==='dnb-bal-results'){this.$('.importContacts').hide();}else if(this.name==='dnb-contact-info'){this.toggleImportBtn('import_dnb_data',false);}
var contactParams={'duns_num':duns_num,'contact_id':contact_id,'contact_type':contact_type};var cacheKey='dnb:'+contactParams.contact_type+':'
+contactParams.duns_num+':'+contactParams.contact_id;var cacheContent=app.cache.get(cacheKey);if(cacheContent){this.currentContact=cacheContent.contactDetail;this.renderContactDetails(cacheContent);}else{var dnbContactDetailsURL=app.api.buildURL('connector/dnb/contacts','',{},{}),resultData={'contactDetail':null,'errmsg':null},self=this;this.currentContact=null;if(!_.isUndefined(this.dashletState)){this.dashletState.view='detail';this.dashletState.content=cacheKey;this.dashletState.params=null;}
app.api.call('create',dnbContactDetailsURL,{'qdata':contactParams},{success:function(data){var responseCode=self.getJsonNode(data,self.appendSVCPaths.responseCode),responseMsg=self.getJsonNode(data,self.appendSVCPaths.responseMsg);if(responseCode&&responseCode===self.responseCodes.success){var contactDetail=self.getJsonNode(data,self.contactConst.contactsDetailPath);if(contactDetail){var orgName=self.getJsonNode(data,self.contactConst.orgName);if(orgName){contactDetail.orgName=orgName;}
resultData.contactDetail=contactDetail;self.currentContact=resultData.contactDetail;app.cache.set(cacheKey,resultData);}else{resultData.errmsg=app.lang.get('LBL_DNB_NO_DATA');}}else{resultData.errmsg=responseMsg||app.lang.get('LBL_DNB_SVC_ERR');}
self.renderContactDetails(resultData);},error:_.bind(this.checkAndProcessError,self)});}},renderContactDetails:function(dnbApiResponse){if(this.disposed){return;}
if(this.name==='dnb-bal-results'){this.template=app.template.get(this.name+'.dnb-bal-contact-details');}else if(this.name==='dnb-contact-info'){this.template=app.template.get(this.name+'.dnb-contact-details');}
var frmtCntctDet,dnbCntctDet={};if(dnbApiResponse.contactDetail){frmtCntctDet=this.formatContactDetails(dnbApiResponse.contactDetail,this.contactsDetailDD);if(frmtCntctDet){dnbCntctDet.product=frmtCntctDet;if(!_.isUndefined(this.import_enabled_modules)){dnbCntctDet.product.import_enabled_modules=this.import_enabled_modules;}}else{dnbCntctDet.errmsg=app.lang.get('LBL_DNB_NO_DATA');}}else if(dnbApiResponse.errmsg){dnbCntctDet.errmsg=dnbApiResponse.errmsg;}
this.dnbCntctDet=dnbCntctDet;this.render();if(dnbCntctDet.errmsg){if(this.name==='dnb-bal-results'){this.$('.importContacts').hide();}}else if(dnbCntctDet.product){if(this.name==='dnb-bal-results'){this.$('.importContacts').show();}else if(this.name==='dnb-contact-info'){if(this.layout.getComponent('dashlet-toolbar').getField('import_dnb_data')){this.layout.getComponent('dashlet-toolbar').getField('import_dnb_data').getFieldElement().removeClass('hide');this.layout.getComponent('dashlet-toolbar').getField('import_dnb_data').getFieldElement().show();}}
this.currentContact=dnbCntctDet.product;}
this.$('div#dnb-contact-details-loading').hide();this.$('div#dnb-contact-details').show();},formatContactDetails:function(contactDetail,contactsDetailDD){var frmtCntctDet={};frmtCntctDet.contact_profile=[];_.each(contactsDetailDD,function(value,key){var dataElement=this.getJsonNode(contactDetail,value.json_path);if(dataElement){if(key==='title'){var frmtJobTitles=this.formatJobTitles(dataElement,value.sub_object);if(frmtJobTitles&&frmtJobTitles.length>0){frmtCntctDet[key]=frmtJobTitles[0].title;frmtCntctDet.contact_profile.push({'dataLabel':value.label,'dataElement':frmtJobTitles[0].title});if(frmtJobTitles.length>1){frmtJobTitles.splice(0,1);frmtCntctDet[value.sub_object.data_type]=frmtJobTitles;}}}else if(key==='comp_hist'){var frmtCompHist=this.formatCompHist(dataElement,value.sub_object);if(frmtCompHist&&frmtCompHist.length>0){frmtCntctDet[value.sub_object.data_type]=frmtCompHist;}}else{var maskedDataElement,dataObj={};if(key==='email'){maskedDataElement=this.emailMask(dataElement);}else if(key==='phone_work'){maskedDataElement=this.phoneMask(dataElement);}
dataObj.dataLabel=value.label;if(!_.isUndefined(maskedDataElement)){dataObj.dataElement=maskedDataElement;}else{dataObj.dataElement=dataElement;}
frmtCntctDet.contact_profile.push(dataObj);frmtCntctDet[key]=dataElement;}}},this);return frmtCntctDet;},formatJobTitles:function(jobTitles,jobTitleDD){var jobTitleArray=[];_.each(jobTitles,function(jobObj){var jobTitleObj={title:this.getJsonNode(jobObj,jobTitleDD.title),start_date:this.getJsonNode(jobObj,jobTitleDD.start_date),end_date:this.getJsonNode(jobObj,jobTitleDD.end_date)};if(jobTitleObj.title){jobTitleArray.push(jobTitleObj);}},this);return jobTitleArray;},formatCompHist:function(compHist,compHistDD){var frmtCompHist=[];_.each(compHist,function(compHistObj){var compDate=this.getJsonNode(compHistObj,compHistDD.comp_date),compDet=this.getJsonNode(compHistObj,compHistDD.comp_det),frmtCompHistObj={};var frmtCompDet=[];_.each(compDet,function(compDetObj){var frmtCompDetObj={'comp_type':this.getJsonNode(compDetObj,compHistDD.comp_type),'comp_amt':this.getJsonNode(compDetObj,compHistDD.comp_amt),'comp_curr':this.getJsonNode(compDetObj,compHistDD.comp_curr)};if(frmtCompDetObj.comp_amt){frmtCompDetObj.comp_amt=this.formatSalesRevenue(frmtCompDetObj.comp_amt);frmtCompDet.push(frmtCompDetObj);}},this);if(frmtCompDet.length>0&&compDate){frmtCompHistObj.comp_date=compDate;frmtCompHistObj.comp_det=frmtCompDet;frmtCompHist.push(frmtCompHistObj);}},this);return frmtCompHist;},emailMask:function(email){var match=email.match(/([A-Za-z]{2})(.*)(@)(.*)/);return match[1]+match[2].replace(/./g,'x')+match[3]+match[4];},phoneMask:function(phone){var match=phone.match(/([0-9]{2})(.*)([0-9]{2})/);return match[1]+match[2].replace(/./g,'x')+match[3];},baseImportContact:function(moduleName){var model=this.getModuleModel(this.currentContact,moduleName);var self=this;app.drawer.open({layout:'create-actions',context:{create:true,module:model.module,model:model}},function(model){if(!model){return;}
self.context.resetLoadFlag();self.context.set('skipFetch',false);self.context.loadData();_.each(app.controller.context.children,function(childContext){if(childContext.get('module')==='Contacts'){childContext.reloadData(true);}});});},getModuleModel:function(modelBean,moduleName){var module,moduleModel;if(moduleName==='LinkedContacts'){module='Contacts';}else{module=moduleName;}
var filteredModelBean=_.pick(modelBean,this.personTypeAttrList[module]);if(filteredModelBean.email){var emailObj={email_address:filteredModelBean.email,opt_out:false,primary_address:true,reply_to_address:false};filteredModelBean.email=[emailObj];}
if(module==='Leads'){filteredModelBean.lead_source=app.lang.get('LBL_DNB_OTHER');filteredModelBean.lead_source_description=app.lang.get('LBL_DNB_BAL');}
if(moduleName==='LinkedContacts'){filteredModelBean.account_id=this.model.get('id');filteredModelBean.account_name=this.model.get('name');moduleModel=app.data.createRelatedBean(this.model,null,'contacts',filteredModelBean);}else{moduleModel=app.data.createBean(module,filteredModelBean);}
return moduleModel;},getNextPage:function(recordSet,pageStart,pageEnd){return _.filter(recordSet,function(resultObj){return resultObj.recordNum>=pageStart&&resultObj.recordNum<=pageEnd;});},renderPaginationControl:function(){if(this.recordCount>this.endRecord){this.$('#dnb-page-ctrl').toggleClass('hide',false);this.$('[data-action="show-more"]').removeClass('hide');this.$('.loading').hide();}else{this.$('#dnb-page-ctrl').toggleClass('hide',true);}},displayPaginationLoading:function(){this.$('[data-action="show-more"]').addClass('hide');this.$('.loading').show();},setPaginationParams:function(){this.pageNo=this.pageNo+1;this.endRecord=this.pageNo*this.pageSize;this.startRecord=(this.endRecord-this.pageSize)+1;},paginateRecords:function(){var nextPage=this.getNextPage(this.formattedRecordSet,this.startRecord,this.endRecord);if(_.isUndefined(this.currentPage)||_.isNull(this.currentPage)){this.currentPage=nextPage;}else{this.currentPage=this.currentPage.concat(nextPage);}},initPaginationParams:function(){this.pageSize=10;this.pageNo=1;this.apiPageSize=2*this.pageSize;this.apiPageOffset=1;this.startRecord=1;this.endRecord=this.pageSize;this.apiPageEndRecord=(this.apiPageOffset+this.apiPageSize)-1;this.currentPage=null;this.resetPaginationFlag=true;},setApiPaginationParams:function(apiParams){apiParams.CandidatePerPageMaximumQuantity=this.apiPageSize;apiParams.CandidateDisplayStartSequenceNumber=this.apiPageOffset;return apiParams;}}) },
"dnb-account-create": {"controller": /*
     * Your installation or use of this SugarCRM file is subject to the applicable
     * terms available at
     * http://support.sugarcrm.com/06_Customer_Center/10_Master_Subscription_Agreements/.
     * If you do not agree to all of the applicable terms or do not have the
     * authority to bind the entity as an authorized representative, then do not
     * install or use this SugarCRM file.
     *
     * Copyright (C) SugarCRM Inc. All rights reserved.
     */
({
	// Dnb-account-create View (base) 
extendsFrom:'DnbView',duns_num:'',importFlag:false,companyList:null,keyword:null,plugins:['Connector'],events:{'click a.dnb-company-name':'dunsClickHandler','click .showMoreData':'showMoreData','click .showLessData':'showLessData','click .importDNBData':'importAccount','click .dnb_checkbox':'importCheckBox','click .clearDNBResults':'clearDNBResults','click .backToList':'backToCompanyList','click [data-action="show-more"]':'invokePagination'},configuredKey:'dnb:account:create:configured',initialize:function(options){this._super('initialize',[options]);this.initDashlet();this.loadData();this.initPaginationParams();this.paginationCallback=this.baseAccountsBAL;},loadData:function(){if(this.disposed){return;}
this.checkConnector('ext_rest_dnb',_.bind(this.loadDataWithValidConnector,this),_.bind(this.handleLoadError,this),['test_passed']);},loadDataWithValidConnector:function(){if(this.disposed)return;this.template=app.template.get(this.name+'.dnb-search-hint');this.render();this.context.on('input:name:keyup',this.dnbSearch,this);this.errmsg=null;},handleLoadError:function(connector){if(this.disposed)return;this.errmsg='LBL_DNB_NOT_CONFIGURED';this.template=app.template.get(this.name+'.dnb-need-configure');this.render();this.context.off('input:name:keyup',this.dnbSearch);},backToCompanyList:function(){if(this.disposed){return;}
this.template=app.template.get(this.name);this.render();this.$('div#dnb-company-list-loading').show();this.$('div#dnb-search-results').hide();this.$('.importDNBData').hide();var dupeCheckParams={'type':'duns','apiResponse':this.currentPage,'module':'dunsPage'};this.baseDuplicateCheck(dupeCheckParams,this.renderPage);},renderCompanyList:function(dnbSrchApiResponse){var dnbSrchResults={};if(this.resetPaginationFlag){this.initPaginationParams();}
if(dnbSrchApiResponse.product){var apiCompanyList=this.getJsonNode(dnbSrchApiResponse.product,this.commonJSONPaths.srchRslt);this.formattedRecordSet=this.formatSrchRslt(apiCompanyList,this.searchDD);this.recordCount=this.getJsonNode(dnbSrchApiResponse.product,this.commonJSONPaths.srchCount);this.paginateRecords();dnbSrchResults.product=this.currentPage;if(this.recordCount){dnbSrchResults.count=this.recordCount;}}else if(dnbSrchApiResponse.errmsg){dnbSrchResults.errmsg=dnbSrchApiResponse.errmsg;}
this.renderPage(dnbSrchResults);},renderPage:function(pageData){if(this.disposed){return;}
this.template=app.template.get(this.name);this.dnbSrchResults=pageData;if(_.isUndefined(pageData.count)){pageData.count=this.recordCount;}
if(pageData.product){this.dnbSrchResults.count=app.lang.get('LBL_DNB_BAL_ACCT_HEADER')+" ("+this.formatSalesRevenue(pageData.count)+")";}else{delete this.dnbSrchResults['count'];}
this.render();this.$('div#dnb-company-list-loading').hide();this.$('div#dnb-search-results').show();if(pageData.product){this.renderPaginationControl();}},invokePagination:function(){this.displayPaginationLoading();this.setPaginationParams();if(this.endRecord>this.apiPageEndRecord){this.apiPageEndRecord=(this.startRecord+this.apiPageSize)-1;this.resetPaginationFlag=false;this.apiPageOffset=this.startRecord;this.paginationCallback(this.setApiPaginationParams(this.balParams),this.renderCompanyList);}else{this.paginateRecords();var pageData={'product':this.currentPage,'count':this.recordCount};this.renderPage(pageData);}},dnbSearch:function(searchString){if(this.disposed){return;}
if(!this.keyword||(this.keyword&&this.keyword!==searchString)){this.keyword=searchString;this.template=app.template.get(this.name);if(this.dnbSrchResults&&this.dnbSrchResults.count){delete this.dnbSrchResults['count'];}
this.render();this.$('table#dnb_company_list').empty();this.$('div#dnb-search-results').hide();this.$('div#dnb-company-list-loading').show();this.$('.clearDNBResults').attr('disabled','disabled');this.$('.clearDNBResults').removeClass('enabled');this.$('.clearDNBResults').addClass('disabled');this.companyList=null;var balParams={'KeywordText':searchString};this.balParams=balParams;this.baseAccountsBAL(this.setApiPaginationParams(balParams),this.renderCompanyList);}},clearDNBResults:function(){this.$('table#dnb_company_list').empty();this.template=app.template.get(this.name+'.dnb-search-hint');this.render();},dunsClickHandler:function(evt){var duns_num=evt.target.id;this.dnbProduct=null;if(duns_num){this.template=app.template.get(this.name+'.dnb-company-details');this.render();this.$('div#dnb-company-detail-loading').show();this.$('div#dnb-company-details').hide();this.$('.importDNBData').hide();this.baseCompanyInformation(duns_num,this.compInfoProdCD.std,app.lang.get('LBL_DNB_BACK_TO_SRCH'),this.renderCompanyDetails);}},renderCompanyDetails:function(companyDetails){if(this.disposed){return;}
this.dnbProduct={};if(companyDetails.product){var duns_num=this.getJsonNode(companyDetails.product,this.appendSVCPaths.duns);if(!_.isUndefined(duns_num)){this.duns_num=duns_num;this.dnbProduct.product=this.formatCompanyInfo(companyDetails.product,this.accountsDD);}}
if(companyDetails.errmsg){this.dnbProduct.errmsg=companyDetails.errmsg;}
this.render();this.$('div#dnb-company-detail-loading').hide();this.$('div#dnb-company-details').show();if(this.dnbProduct.errmsg){this.$('.importDNBData').hide();}else{this.$('.importDNBData').show();}},importAccount:function(){this.importAccountsData(this.importFlag);this.importFlag=true;},importCheckBox:function(){var dnbCheckBoxes=this.$('.dnb_checkbox:checked');this.$('.importDNBData').toggleClass('disabled',dnbCheckBoxes.length===0);}}) },
"dnb-bal-header": {"controller": /*
     * Your installation or use of this SugarCRM file is subject to the applicable
     * terms available at
     * http://support.sugarcrm.com/06_Customer_Center/10_Master_Subscription_Agreements/.
     * If you do not agree to all of the applicable terms or do not have the
     * authority to bind the entity as an authorized representative, then do not
     * install or use this SugarCRM file.
     *
     * Copyright (C) SugarCRM Inc. All rights reserved.
     */
({
	// Dnb-bal-header View (base) 
events:{'click [name="reset_button"]':'triggerClearParams'},initialize:function(options){this._super('initialize',[options]);this.title=this.meta.title;this.render();},triggerClearParams:function(){this.layout.trigger('dnbbal:param:clear');}}) },
"dnb-bal-params": {"controller": /*
     * Your installation or use of this SugarCRM file is subject to the applicable
     * terms available at
     * http://support.sugarcrm.com/06_Customer_Center/10_Master_Subscription_Agreements/.
     * If you do not agree to all of the applicable terms or do not have the
     * authority to bind the entity as an authorized representative, then do not
     * install or use this SugarCRM file.
     *
     * Copyright (C) SugarCRM Inc. All rights reserved.
     */
({
	// Dnb-bal-params View (base) 
extendsFrom:'DnbView',plugins:['ErrorDecoration','Tooltip'],events:{'change [name="dnb_bal_sale"]':'toggleFormControls','change [name="dnb_bal_founding"]':'toggleFormControls','change [name="dnb_bal_offer_amt"]':'toggleFormControls','change [name="dnb_bal_ipo_price_range"]':'toggleFormControls','change [name="dnb_bal_emp_cnt"]':'toggleFormControls','change [name="dnb_bal_net_income"]':'toggleFormControls','change [name="dnb_bal_net_income_growth"]':'toggleFormControls','change [name="dnb_bal_assets"]':'toggleFormControls','change [name="dnb_bal_emp_grwth"]':'toggleFormControls','change [name="dnb_bal_mkt_cap"]':'toggleFormControls','change [name="dnb_bal_ipo_date_option_bef_aft"]':'toggleFormControls','click .dnb-bal-add-btn':'populateTagContainer','click .tagcontainer .select2-search-choice-close':'removeTag','change [name="dnb_bal_ctry"]':'mapSelect2Params','change [name="dnb_bal_prescreen_score"]':'mapSelect2Params','change [name="dnb_bal_job_fn"]':'mapSelect2Params','change [name="dnb_bal_ind_code_type"]':'modifyIndustryModel','shown #dnb_bal_accordian':'handlePanelShown','hidden #dnb_bal_accordian':'handlePanelHidden','mouseenter [rel="tooltip"]':'showTooltip','mouseleave [rel="tooltip"]':'hideTooltip'},initialize:function(options){this._super('initialize',[options]);this.balSelector=options.meta.balSelector;this.balParamGroups=options.meta.balParamGroups;app.events.register('dnbbal:invoke',this);app.error.errorName2Keys['comparison']='ERR_DNB_BAL_COMPARISON';app.error.errorName2Keys['taglimit']='LBL_DNB_BAL_PARAM_LIMIT_ERR';this.modelAttr=_.pluck(this.balSelector,'modelKey');this.model.addValidationTask('comparison_check',_.bind(this._doValidateComparison,this));var fields={};_.each(_.pluck(options.meta.panels,'rows'),function(rowObj){_.each(rowObj,function(fieldsList){_.each(_.flatten(fieldsList.fields),function(fieldObj){fields[fieldObj.name]=fieldObj;if(!_.isUndefined(fieldObj.tooltip)){fieldObj.tooltip=app.lang.get(fieldObj.tooltip);}});});});this.moduleFields=fields;var moduleNumber=1;_.each(options.meta.panels,function(panelItem){panelItem.moduleNumber=moduleNumber++;},this);app.events.register('dnbbal:param:add',this);app.events.register('dnbbal:param:remove',this);app.events.register('dnbbal:param:err',this);this.layout.on('dnbbal:param:add',this.setPanelComplete,this);this.layout.on('dnbbal:param:remove',this.setPanelIncomplete,this);this.layout.on('dnbbal:param:err',this.alertValidationError,this);this.layout.on('dnbbal:param:clear',this.clearParams,this);this.tagTmpl1=app.template.get(this.name+'.tagtmpl1');this.tagTmpl2=app.template.get(this.name+'.tagtmpl2');},loadData:function(){this.title=this.meta.title;this.render();},handlePanelShown:function(event){this.$(event.target).siblings('div').addClass('active');var paramHeader=this.$(event.target).siblings('div').children('.dnb-params-header');this.$(paramHeader).addClass('hide');},handlePanelHidden:function(event){this.$(event.target).siblings('div').removeClass('active');var paramGrpKey=this.$(event.target).data('paramgrp');if(this.balParamGroups[paramGrpKey]){var paramGrp=this.balParamGroups[paramGrpKey],panelHeader=[],tempStr;var setParamKeys=_.filter(_.keys(paramGrp),function(paramKey){return this.model.has(paramKey);},this);_.each(setParamKeys,function(paramKey){if(paramGrp[paramKey].id){if(paramGrp[paramKey].label){tempStr=app.lang.get(paramGrp[paramKey].label)+':'+this.model.get(paramKey+'Tags');}else{var industryCodeType=this.model.get(paramKey).IndustryCodeTypeCode,industryLabel;if(industryCodeType==='3599'){industryLabel=app.lang.get('LBL_DNB_BAL_SIC');}else if(industryCodeType==='700'){industryLabel=app.lang.get('LBL_DNB_BAL_NAICS');}
tempStr=industryLabel+':'+this.model.get(paramKey+'Tags');}}else if(paramGrp[paramKey].select2){var selector='[name="'+paramGrp[paramKey].select2+'"]';var select2Data=this.$(selector).select2('data'),selectedData;if(_.isArray(select2Data)){selectedData=_.map(select2Data,function(selectedObj){return selectedObj.text;},this);tempStr=app.lang.get(paramGrp[paramKey].label)+':'+selectedData.join(',');}else{selectedData=select2Data.text;tempStr=app.lang.get(paramGrp[paramKey].label)+':'+selectedData;}}
panelHeader.push(tempStr);},this);if(panelHeader.length>0){var panelHeaderStr=' : '+panelHeader.join(' , '),paramHeader=this.$(event.target).siblings('div').children('.dnb-params-header');this.$(paramHeader).removeClass('hide').text(panelHeaderStr);}}},toggleFormControls:function(event){var selector=event.currentTarget.name;if(selector){var formControls=this.$('[name="'+selector+'"]').closest('.record-cell').siblings('.toggleCandidate');_.each(formControls,function(frmCntrl){if(event.val==='btw'){this.$(frmCntrl).removeClass('hide');}else{this.$(frmCntrl).addClass('hide');}},this);}},populateTagContainer:function(event){var balSelectorName=this.$(event.currentTarget).data('event');if(balSelectorName){var paramMeta=this.balSelector[balSelectorName];if(_.isString(paramMeta.operator)){this.handleComparisonOperator(paramMeta);}else if(_.isString(paramMeta.modelSubKey)){this.handleFreeFormTags(paramMeta);}else if(_.isArray(paramMeta.operator)){this.handleMiscOperators(paramMeta);}}},appendTag:function(tagId,tagText,contSlct,tmpl,tagParent){var compiledTmpl=tmpl({'tagText':tagText,'tagId':tagId,'tagParent':tagParent});this.$(contSlct).append(compiledTmpl);},setPanelComplete:function(selector){if(!this.$(selector).hasClass('complete')){this.$(selector).addClass('complete');}},removeTag:function(event){var selector=event.currentTarget,tagContainer='#'+this.$(selector).closest('ul').attr('id');var modelKey=this.$(selector).siblings('div').attr('id'),parentKey=this.$(selector).siblings('div').data('parentkey'),triggerParam;if(selector){this.$(selector).closest('li').remove();}
if(this.model.has(modelKey)){this.model.unset(modelKey);triggerParam=modelKey;}else{var modelAttr=_.clone(this.model.get(parentKey));var tagCount=this.$(tagContainer).children().length;if(tagCount===0){this.model.unset(parentKey);triggerParam=parentKey;}else{delete modelAttr[modelKey];this.model.set(parentKey,modelAttr);triggerParam=modelKey;}}
var tags=_.map(this.$(tagContainer).children(),function(tag){return this.$(tag).children('div').text().trim();},this);if(tags.length>0){this.model.set(parentKey+'Tags',tags.join(','));}else{this.model.unset(parentKey+'Tags');}
this.triggerBAL();this.layout.trigger('dnbbal:param:remove',triggerParam);},setPanelIncomplete:function(modelKey){var disablePanelFlag=false,selector;var paramGrp=_.find(_.keys(this.balParamGroups),function(paramGrpKey){return _.has(this.balParamGroups[paramGrpKey],modelKey);},this);if(this.balParamGroups[paramGrp]){disablePanelFlag=_.find(_.keys(this.balParamGroups[paramGrp]),function(paramKey){return this.model.has(paramKey);},this);var balParamMeta=this.balParamGroups[paramGrp][modelKey];if(balParamMeta.id){selector=this.$('#'+balParamMeta.id).closest('.accordion-body').siblings('div').children('.step-circle');}else if(balParamMeta.select2){var select2Selector='[name="'+balParamMeta.select2+'"]';selector=this.$(select2Selector).closest('.accordion-body').siblings('div').children('.step-circle');}
if(_.isUndefined(disablePanelFlag)&&this.$(selector).hasClass('complete')){this.$(selector).removeClass('complete');}}},mapSelect2Params:function(event){var modelMeta=this.balSelector[event.target.name];var modelKey=modelMeta.modelKey,modelSubKey=modelMeta.modelSubKey,modelAttr;if(this.model.has(modelKey)){modelAttr=_.clone(this.model.get(modelKey));}else{modelAttr={};}
if(event.added){var paramIndex;if(_.isEmpty(modelAttr)){paramIndex=1;}else{paramIndex=_.keys(modelAttr).length+1;}
if(modelMeta.multiple){modelAttr[modelSubKey+paramIndex]=event.added.id;}else{modelAttr[modelSubKey]=event.added.id;}}else if(event.removed){var removedData=event.removed.id;_.each(modelAttr,function(value,key){if(value===removedData){delete modelAttr[key];}},this);}
var accordionHeader=this.$(event.target).closest('.accordion-body').siblings('.accordion-heading').children('.step-circle');if(!_.isEmpty(modelAttr)){this.model.set(modelKey,modelAttr);this.layout.trigger('dnbbal:param:add',accordionHeader);}else{this.model.unset(modelKey);this.layout.trigger('dnbbal:param:remove',modelKey);}
this.triggerBAL();},modifyIndustryModel:function(){if(this.model.has('industryCode')){app.alert.show('dnb-industry-warning',{level:'confirmation',title:'LBL_WARNING',messages:'LBL_DNB_BAL_INDUSTRY_WARN',onConfirm:_.bind(function(){this.model.unset('industryCode');this.model.unset('industryCodeTags');this.$('#dnb-ind-code-tags').empty();},this),onCancel:_.bind(function(){var changedIndustryCode=this.model.get('dnb_bal_ind_code_type');if(changedIndustryCode==='3599'){this.model.set('dnb_bal_ind_code_type','700');}else if(changedIndustryCode==='700'){this.model.set('dnb_bal_ind_code_type','3599');}},this)});}},handleComparisonOperator:function(paramMeta){var tagCount=this.$(paramMeta.container).children().length;if(tagCount<paramMeta.tagLimit){var fields={};var operatorKey=paramMeta.operator;fields[operatorKey]=this.moduleFields[operatorKey];fields[operatorKey].objType='operator';fields[paramMeta.upperLimit]=this.moduleFields[paramMeta.upperLimit];fields[paramMeta.upperLimit].objType='upperLimit';if(this.model.get(operatorKey)==='btw'){fields[paramMeta.lowerLimit]=this.moduleFields[paramMeta.lowerLimit];fields[paramMeta.lowerLimit].objType='lowerLimit';}
this.model.doValidate(fields,_.bind(function(isValid){if(isValid){this.mapComparisonToApi(paramMeta);}else{this.layout.trigger('dnbbal:param:err');}},this));}else{this.layout.trigger('dnbbal:param:err','taglimit');}},mapComparisonToApi:function(paramMeta){var modelAttr={},modelKey=paramMeta.modelKey;this.clearValidationErrors(this.moduleFields);var operator=this.model.get(paramMeta.operator),upperLimit=this.model.get(paramMeta.upperLimit),lowerLimit=this.model.get(paramMeta.lowerLimit),operatorSelector='[name="'+paramMeta.operator+'"]',lowKey,highKey;if(paramMeta.keyType){var keyType=this.model.get(paramMeta.keyType);lowKey=paramMeta[keyType].lowKey;highKey=paramMeta[keyType].highKey;}else{lowKey=paramMeta.lowKey;highKey=paramMeta.highKey;}
var tagText=this.$(operatorSelector).select2('data').text;if(operator==='btw'){tagText=tagText+' '+lowerLimit+' '+app.lang.get('LBL_DNB_AND')+' '+upperLimit;modelAttr[lowKey]=lowerLimit;modelAttr[highKey]=upperLimit;}else{tagText=tagText+' '+upperLimit;if(operator==='lte'){modelAttr[highKey]=upperLimit;}else if(operator==='gte'){modelAttr[lowKey]=upperLimit;}}
this.model.set(modelKey+'Tags',tagText);this.appendTag(modelKey,tagText,paramMeta.container,this.tagTmpl1);this.model.set(modelKey,modelAttr);this.triggerBAL();var accordionHeader=this.$(paramMeta.container).closest('.accordion-body').siblings('.accordion-heading').children('.step-circle');this.layout.trigger('dnbbal:param:add',accordionHeader);this.model.unset(paramMeta.upperLimit);this.model.unset(paramMeta.lowerLimit);},_doValidateComparison:function(fields,errors,callback){errors={};var comparisonField=_.find(fields,function(fieldObj){return fieldObj.objType==='operator';});if(!_.isUndefined(comparisonField)){var comparisonType=this.model.get(comparisonField.name);var upperLimitField=_.find(fields,function(fieldObj){return fieldObj.objType==='upperLimit';});var upperLimit=this.model.get(upperLimitField.name);if(_.isUndefined(upperLimit)){errors[upperLimitField.name]=errors[upperLimitField.name]||{};}
if(comparisonType==='btw'){var lowerLimitField=_.find(fields,function(fieldObj){return fieldObj.objType==='lowerLimit';});var lowerLimit=this.model.get(lowerLimitField.name);if(_.isUndefined(lowerLimit)){errors[lowerLimitField.name]=errors[lowerLimitField.name]||{};}else if(lowerLimit>=upperLimit){errors[lowerLimitField.name]=errors[lowerLimitField.name]||{};errors[lowerLimitField.name].comparison=true;}}}
callback(null,fields,errors);},handleFreeFormTags:function(paramMeta){var tagCount=this.$(paramMeta.container).children().length;if(tagCount<paramMeta.tagLimit){var fields={};fields[paramMeta.inputKey]=this.moduleFields[paramMeta.inputKey];fields[paramMeta.inputKey].objType='freeform';this.model.doValidate(fields,_.bind(function(isValid){if(isValid){this.mapFreeFormToApi(paramMeta,tagCount);}else{this.layout.trigger('dnbbal:param:err');}},this));}else{this.layout.trigger('dnbbal:param:err','taglimit');}},mapFreeFormToApi:function(paramMeta,tagCount){var modelAttr={},tagText,modelKey=paramMeta.modelKey,tagIndex;this.clearValidationErrors(this.moduleFields);tagIndex=tagCount+1;tagText=this.model.get(paramMeta.inputKey);var tagId=paramMeta.tagLimit>1?paramMeta.modelSubKey+tagIndex:paramMeta.modelSubKey;this.appendTag(tagId,tagText,paramMeta.container,this.tagTmpl2,modelKey);this.model.unset(paramMeta.inputKey);var tags=_.map(this.$(paramMeta.container).children(),function(tag){return this.$(tag).children('div').text().trim();},this);this.model.set(modelKey+'Tags',tags.join(','));_.each(tags,function(tagItem,index){var tagIndex=index+1;if(paramMeta.tagLimit>1){modelAttr[paramMeta.modelSubKey+tagIndex]=tagItem;}else{modelAttr[paramMeta.modelSubKey]=tagItem;}},this);this.model.set(modelKey,modelAttr);this.triggerBAL();var accordionHeader=this.$(paramMeta.container).closest('.accordion-body').siblings('.accordion-heading').children('.step-circle');this.layout.trigger('dnbbal:param:add',accordionHeader);},triggerBAL:function(){var balAttr=_.intersection(this.modelAttr,_.keys(this.model.attributes)),balParams={};_.each(balAttr,function(paramName){var tmpAttr=this.model.get(paramName);if(!_.isUndefined(tmpAttr)){_.each(_.keys(tmpAttr),function(key){balParams[key]=tmpAttr[key];});}},this);this.trigger('dnbbal:invoke',balParams);},handleMiscOperators:function(paramMeta){var tagCount=this.$(paramMeta.container).children().length;if(tagCount<paramMeta.tagLimit){var fields={};_.each(paramMeta.operator,function(operatorKey){fields[operatorKey]=this.moduleFields[operatorKey];},this);if(paramMeta.tagSource){fields[paramMeta.tagSource]=this.moduleFields[paramMeta.tagSource];}
this.model.doValidate(fields,_.bind(function(isValid){if(isValid){this.mapMiscOperatorToApi(paramMeta,tagCount);}else{this.layout.trigger('dnbbal:param:err');}},this));}else{this.layout.trigger('dnbbal:param:err','taglimit');}},mapMiscOperatorToApi:function(paramMeta,tagCount){var modelAttr={},tagText,modelKey=paramMeta.modelKey,tagIndex;this.clearValidationErrors(this.moduleFields);_.each(paramMeta.operator,function(operatorKey,index){modelAttr[paramMeta.modelSubKey[index]]=this.model.get(operatorKey);},this);var tagSource,tagId;if(paramMeta.tagSource){tagSource=paramMeta.tagSource;tagIndex=tagCount+1;tagText=this.model.get(tagSource);tagId=paramMeta.tagDest+tagIndex;}else{tagSource=_.last(paramMeta.operator);tagText=this.model.get(tagSource);tagId=modelKey;if(modelKey==='radiusSearch'){var tagTextParts=[];tagTextParts.push(this.model.get('dnb_bal_distance'));tagTextParts.push(this.$('[name="dnb_bal_distance_units"]').select2('data').text);tagTextParts.push(app.lang.get('LBL_DNB_FROM'));tagTextParts.push(tagText);tagText=tagTextParts.join(' ');this.model.unset('dnb_bal_distance');}}
this.appendTag(tagId,tagText,paramMeta.container,this.tagTmpl2,modelKey);this.model.unset(tagSource);var tags=_.map(this.$(paramMeta.container).children(),function(tag){return this.$(tag).children('div').text().trim();},this);if(modelKey==='radiusSearch'){this.model.set(modelKey+'Tags',tagText);}else{this.model.set(modelKey+'Tags',tags.join(','));}
if(paramMeta.tagDest){_.each(tags,function(tagItem,index){var tagIndex=index+1;if(paramMeta.tagDest==='IndustryCode-'){tagItem=tagItem+'*';}
modelAttr[paramMeta.tagDest+tagIndex]=tagItem;},this);}
this.model.set(modelKey,modelAttr);this.triggerBAL();var accordionHeader=this.$(paramMeta.container).closest('.accordion-body').siblings('.accordion-heading').children('.step-circle');this.layout.trigger('dnbbal:param:add',accordionHeader);},alertValidationError:function(errorType){var msg;if(_.isUndefined(errorType)){msg=app.lang.get('ERR_RESOLVE_ERRORS');}else{msg=app.lang.get(app.error.errorName2Keys[errorType]);}
app.alert.show('dnb-bal-param-warning',{level:'error',messages:msg});},showTooltip:function(e){this.$(e.currentTarget).tooltip('show');},hideTooltip:function(e){this.$(e.currentTarget).tooltip('hide');},unbindDom:function(){this.$('[rel="tooltip"]').each(function(){$(this).tooltip('destroy');});unbindTooltips('[rel="tooltip"]');this._super('unbindDom');},clearParams:function(){_.each(this.balSelector,function(balSlctObj){if(balSlctObj.container){this.$(balSlctObj.container).empty();}},this);this.clearValidationErrors(this.moduleFields);this.$('.step-circle').removeClass('complete');this.$('.dnb-params-header').empty();this.model.clear();this.triggerBAL();this.loadData();}}) },
"dnb-bal-results": {"controller": /*
     * Your installation or use of this SugarCRM file is subject to the applicable
     * terms available at
     * http://support.sugarcrm.com/06_Customer_Center/10_Master_Subscription_Agreements/.
     * If you do not agree to all of the applicable terms or do not have the
     * authority to bind the entity as an authorized representative, then do not
     * install or use this SugarCRM file.
     *
     * Copyright (C) SugarCRM Inc. All rights reserved.
     */
({
	// Dnb-bal-results View (base) 
extendsFrom:'DnbView',plugins:['Connector'],events:{'click .importContacts':'importContacts','click .backToContactsList':'backToContactsList','click .dnb-cnt-prem':'baseGetContactDetails','click .dnb-cnt-std':'baseGetContactDetails','click [data-action="show-more"]':'invokePagination'},selectors:{'load':'#dnb-bal-result-loading','rslt':'#dnb-bal-result','contactrslt':'#dnb-bal-contact-list'},initialize:function(options){this._super('initialize',[options]);this.initDashlet();app.events.on('dnbbal:invoke',this.invokeBAL,this);var originalMeta=app.metadata.getView('','dnb-bal-results');if(originalMeta.import_enabled_modules){this.import_enabled_modules=originalMeta.import_enabled_modules;}
this.paginationCallback=this.baseContactsBAL;},_render:function(){app.view.View.prototype._renderHtml.call(this);this.$('#importType').select2();},loadData:function(options){this.checkConnector('ext_rest_dnb',_.bind(this.loadDataWithValidConnector,this),_.bind(this.handleLoadError,this),['test_passed']);},loadDataWithValidConnector:function(){this.template=app.template.get(this.name+'.dnb-bal-hint');this.render();this.dnbError=null;this.initPaginationParams();},handleLoadError:function(connector){var showAdmin=app.acl.hasAccess('admin','Administration');if(showAdmin){this.dnbError={'errMsg':'LBL_DNB_NOT_CONFIGURED','errorLink':this.commonConst.connectorSettingsURL,'label':'LBL_DNB_BAL'};}else{this.dnbError={'errMsg':'LBL_DNB_CONNECTOR_ERR','label':'LBL_DNB_BAL'};}
this.template=app.template.get('dnb.dnb-sidepane-error');this.render();},invokeBAL:function(balParams){if(!_.isEmpty(balParams)){this.initPaginationParams();this.balParams=balParams;this.buildAList(this.setApiPaginationParams(balParams));}else{this.loadData();}},buildAList:function(balParams){if(this.disposed){return;}
this.template=app.template.get(this.name+'.dnb-bal-contacts-rslt');if(this.dnbContactsList&&this.dnbContactsList.count){delete this.dnbContactsList['count'];}
this.render();this.$(this.selectors.load).removeClass('hide');this.$(this.selectors.rslt).addClass('hide');balParams.contactType=this.module;this.baseContactsBAL(balParams,this.renderBAL);},renderBAL:function(dnbApiResponse){var dnbContactsList={};if(this.resetPaginationFlag){this.initPaginationParams();}
if(dnbApiResponse.product){var apiContactList=this.getJsonNode(dnbApiResponse.product,this.contactConst.contactsPath);this.formattedRecordSet=this.formatContactList(apiContactList,this.contactsListDD);this.recordCount=this.getJsonNode(dnbApiResponse.product,this.contactConst.srchCount);this.paginateRecords();dnbContactsList.product=this.currentPage;if(this.recordCount){dnbContactsList.count=this.recordCount;}}else if(dnbApiResponse.errmsg){dnbContactsList.errmsg=dnbApiResponse.errmsg;}
this.renderPage(dnbContactsList);},renderPage:function(pageData){if(this.disposed){return;}
this.template=app.template.get(this.name+'.dnb-bal-contacts-rslt');this.dnbContactsList=pageData;if(_.isUndefined(pageData.count)){pageData.count=this.recordCount;}
if(pageData.product){this.dnbContactsList.count=app.lang.get('LBL_DNB_BAL_RSLT_CNT',this.module)+" ("+this.formatSalesRevenue(pageData.count)+")";}else{delete this.dnbContactsList['count'];}
this.render();this.$(this.selectors.load).addClass('hide');this.$(this.selectors.rslt).removeClass('hide');if(pageData.product){this.renderPaginationControl();}},backToContactsList:function(){if(this.disposed){return;}
this.template=app.template.get(this.name+'.dnb-bal-contacts-rslt');if(this.dnbContactsList&&this.dnbContactsList.count){delete this.dnbContactsList['count'];}
this.render();this.$(this.selectors.load).removeClass('hide');this.$(this.selectors.rslt).addClass('hide');var dupeCheckParams={'type':this.module,'apiResponse':this.currentPage,'module':'contactsPage'};this.baseDuplicateCheck(dupeCheckParams,this.renderPage);},importContacts:function(){var module=this.$('#importType').val();this.baseImportContact(module);},invokePagination:function(){this.displayPaginationLoading();this.setPaginationParams();if(this.endRecord>this.apiPageEndRecord){this.apiPageEndRecord=(this.startRecord+this.apiPageSize)-1;this.resetPaginationFlag=false;this.apiPageOffset=this.startRecord;this.paginationCallback(this.setApiPaginationParams(this.balParams),this.renderBAL);}else{this.paginateRecords();var pageData={'product':this.currentPage,'count':this.recordCount};this.renderPage(pageData);}}}) },
"dnb-company-info": {"controller": /*
     * Your installation or use of this SugarCRM file is subject to the applicable
     * terms available at
     * http://support.sugarcrm.com/06_Customer_Center/10_Master_Subscription_Agreements/.
     * If you do not agree to all of the applicable terms or do not have the
     * authority to bind the entity as an authorized representative, then do not
     * install or use this SugarCRM file.
     *
     * Copyright (C) SugarCRM Inc. All rights reserved.
     */
({
	// Dnb-company-info View (base) 
extendsFrom:'DnbView',statesList:'',countryList:'',duns_num:null,selectedCountry:'Country',companyList:null,cleanseMatchDD:null,compInfoConst:{'responseCode':'GetCleanseMatchResponse.TransactionResult.ResultID','responseMsg':'GetCleanseMatchResponse.TransactionResult.ResultText','cmCandidates':'GetCleanseMatchResponse.GetCleanseMatchResponseDetail.MatchResponseDetail.MatchCandidate'},events:{'click a#dnb-lookup':'dnbSearch','click a.dnb-company-name':'dunsClickHandler','click .showMoreData':'showMoreData','click .showLessData':'showLessData','click .importDNBData':'importDNBData','click .dnb_checkbox':'importCheckBox','change #countryList':'changeState','change #stateList':'validateMatchParams','click #dnb-match-btn':'invokeCMRequest','click .backToList':'backToCompanyList','click .backToImportEnrich':'backToImportEnrich'},initialize:function(options){this._super('initialize',[options]);if(this.layout.collapse){this.layout.collapse(true);}
this.layout.on('dashlet:collapse',this.loadImportEnrich,this);app.events.register('dnbcompinfo:duns_selected',this);app.events.register('dnbcompinfo:industry_code',this);this.statesList=app.lang.get('dnb_states_iso','Connectors');this.countryList=app.lang.get('dnb_countries_iso','Connectors');this.cleanseMatchDD=this.searchDD;this.cleanseMatchDD.confidenceCode={'json_path':'MatchQualityInformation.ConfidenceCodeValue'};this.layout.layout.context.on('dashboard:collapse:fire',this.loadImportEnrich,this);},refreshClicked:function(){this.loadImportEnrich(false);},loadImportEnrich:function(isCollapsed){if(!isCollapsed){if(this.duns_num){this.getCompInfo(this.duns_num);}else{this.template=app.template.get(this.name+'.dnb-no-duns');if(!this.disposed){this.render();}}}else{this.toggleImportBtn(false,'dnb_import');}},backToImportEnrich:function(){if(this.disposed){return;}
this.template=app.template.get(this.name+'.dnb-no-duns');this.render();},_render:function(){app.view.View.prototype._renderHtml.call(this);this.$('#countryList').select2({placeholder:app.lang.get('LBL_DNB_SLCT_CTRY'),data:this.populateCountry(),containerCss:{'width':'100%'}});this.$('#stateList').select2({placeholder:app.lang.get('LBL_DNB_SLCT_STATE'),data:this.populateState(this.selectedCountry),containerCss:{'width':'100%'}});},getCompInfo:function(duns_num){if(this.disposed){return;}
this.template=app.template.get(this.name+'.dnb-company-details');this.render();this.$('div#dnb-company-detail-loading').show();this.$('div#dnb-company-details').hide();this.baseCompanyInformation(duns_num,this.compInfoProdCD.std,null,this.renderCompanyDetails);},loadData:function(options){if(this.model.get('duns_num')){this.duns_num=this.model.get('duns_num');}},backToCompanyList:function(){if(this.disposed){return;}
var dupeCheckParams={'type':'duns','apiResponse':this.companyList};if(this.companyList.GetCleanseMatchResponse){dupeCheckParams.module='cleansematch';this.template=app.template.get(this.name+'.dnb-cm-results');}else{dupeCheckParams.module='findcompany';this.template=app.template.get(this.name+'.dnb-company-list');}
this.render();this.$('div#dnb-company-list-loading').show();this.$('div#dnb-company-list').hide();var targetFields=['dnb_import','data_valid_ind'];_.each(targetFields,function(fieldName){if(!_.isUndefined(this.layout.getComponent('dashlet-toolbar').getField(fieldName))){this.layout.getComponent('dashlet-toolbar').getField(fieldName).getFieldElement().hide();}},this);this.baseDuplicateCheck(dupeCheckParams,this.renderCompanyList);},renderCompanyList:function(dnbApiResponse){if(this.disposed){return;}
var dnbCompanyList={};if(dnbApiResponse.product){this.companyList=dnbApiResponse.product;var apiCompanyList;if(dnbApiResponse.product.GetCleanseMatchResponse){this.template=app.template.get(this.name+'.dnb-cm-results');apiCompanyList=this.getJsonNode(dnbApiResponse.product,this.compInfoConst.cmCandidates);dnbCompanyList.product=this.formatSrchRslt(apiCompanyList,this.cleanseMatchDD);dnbCompanyList.product=this.formatConfidenceCodes(dnbCompanyList.product);}else{this.template=app.template.get(this.name+'.dnb-company-list');apiCompanyList=this.getJsonNode(dnbApiResponse.product,this.commonJSONPaths.srchRslt);dnbCompanyList.product=this.formatSrchRslt(apiCompanyList,this.searchDD);}}else if(dnbApiResponse.errmsg){dnbCompanyList.errmsg=dnbApiResponse.errmsg;}
this.dnbCompanyList=dnbCompanyList;this.render();this.$('div#dnb-company-list-loading').hide();this.$('div#dnb-company-list').show();this.toggleImportBtn(false,'dnb_import');},dnbSearch:function(){if(this.disposed){return;}
var companyName=this.model.get('name');if(companyName){this.template=app.template.get(this.name+'.dnb-company-list');this.render();this.$('div#dnb-company-list-loading').show();this.$('div#dnb-company-list').hide();this.companyList=null;var balParams={'KeywordText':companyName};this.baseAccountsBAL(balParams,this.renderCompanyList);}},dunsClickHandler:function(evt){if(this.disposed){return;}
var duns_num=evt.target.id;if(duns_num){this.template=app.template.get(this.name+'.dnb-company-details');this.render();this.$('div#dnb-company-detail-loading').show();this.$('div#dnb-company-details').hide();this.trigger('dnbcompinfo:duns_selected',duns_num);this.baseCompanyInformation(duns_num,this.compInfoProdCD.std,null,this.renderCompanyDetails);}},renderCompanyDetails:function(companyDetails){if(this.disposed){return;}
this.dnbProduct={};if(companyDetails.product){var duns_num=this.getJsonNode(companyDetails.product,this.appendSVCPaths.duns);if(!_.isUndefined(duns_num)){this.duns_num=duns_num;app.controller.context.set('dnb_temp_duns_num',this.duns_num);this.dnbProduct.product=this.formatCompanyInfo(companyDetails.product,this.accountsDD);this.dnbProduct.product=this.getDataIndicators(this.accountsDD,this.dnbProduct.product);var newDataElementsArray=_.filter(this.dnbProduct.product,function(dataElement){return dataElement.dataInd==='new'||dataElement.dataInd==='upd';});if(newDataElementsArray.length===0){this.dnbProduct.product=null;this.dnbProduct.errmsg=app.lang.get('LBL_DNB_UPTODATE_MSG');}else{this.toggleImportBtn('dnb_import',true);}}}else if(companyDetails.errmsg){this.dnbProduct.errmsg=companyDetails.errmsg;}
this.template=app.template.get(this.name+'.dnb-company-details');if(!this.model.get('duns_num')){this.dnbProduct.isNotLinked=true;}
this.render();this.$('div#dnb-company-detail-loading').hide();this.$('div#dnb-company-details').show();this.importCheckBox();},getDataIndicators:function(accountsDD,frmtCompInfo){var accountsModel=this.model;_.each(frmtCompInfo,function(dataObj){var sugarColumnName=dataObj.dataName;var dnbDataElement=dataObj.dataElement,sugarDataElement=accountsModel.get(sugarColumnName);if(dnbDataElement&&sugarDataElement){dnbDataElement=$.trim(dnbDataElement);sugarDataElement=$.trim(sugarDataElement);if(sugarDataElement==dnbDataElement){dataObj.dataInd='dup';}else if(sugarDataElement!=dnbDataElement){dataObj.dataInd='upd';}}else if(dnbDataElement){dataObj.dataInd='new';}},this);return frmtCompInfo;},importCheckBox:function(){var dnbCheckBoxes=$('.dnb_checkbox:checked');if(dnbCheckBoxes.length>0){this.toggleDashletBtn(true,'dnb_import');}else{this.toggleDashletBtn(false,'dnb_import');}},populateCountry:function(){var countryOptionsArray=[];_.each(this.countryList,function(element,index){countryOptionsArray.push({id:index,text:element});});return countryOptionsArray;},populateState:function(selectedCountry){var stateOptionsArray=[];var state_arr=this.statesList[selectedCountry];if(selectedCountry!=='Country'&&!_.isUndefined(state_arr)){_.each(state_arr,function(element,index){stateOptionsArray.push({id:state_arr[index].code,text:state_arr[index].name});});}
return stateOptionsArray;},changeState:function(){this.selectedCountry=this.$('#countryList').val();this.$('#dnb-match-btn').addClass('disabled');this.$('#countryList').select2('val',this.selectedCountry);this.$('#stateList').select2({placeholder:app.lang.get('LBL_DNB_SLCT_STATE'),data:this.populateState(this.selectedCountry),containerCss:{'width':'100%'}});},validateMatchParams:function(){var accountName=this.model.get('name');if(!_.isUndefined(accountName)&&this.$('#countryList').val()!=='Country'&&this.$('#statesList').val()!=='State'){this.$('#dnb-match-btn').removeClass('disabled');}},invokeCMRequest:function(evt){if(this.disposed){return;}
if(!$(evt.target).hasClass('disabled')){var self=this,townName=this.model.get('billing_address_city'),zipCode=this.model.get('billing_address_postalcode');var cmRequestParams={'IncludeCleansedAndStandardizedInformationIndicator':'true','CountryISOAlpha2Code':this.$('#countryList').val(),'cleansematch':'true','SubjectName':this.model.get('name'),'TerritoryName':this.$('#stateList').val()};if(townName){cmRequestParams.PrimaryTownName=townName;}
if(zipCode){cmRequestParams.FullPostalCode=zipCode;}
self.template=app.template.get(self.name+'.dnb-cm-results');self.render();self.$('div#dnb-company-list-loading').show();self.$('div#dnb-company-list').hide();var dnbCMRequestURL=app.api.buildURL('connector/dnb/cmRequest','',{},{});var cmResults={'product':null,'errmsg':null};app.api.call('create',dnbCMRequestURL,{'qdata':cmRequestParams},{success:function(data){var responseCode=self.getJsonNode(data,self.compInfoConst.responseCode),responseMsg=self.getJsonNode(data,self.compInfoConst.responseMsg);if(responseCode&&responseCode===self.responseCodes.success){cmResults.companies=self.getJsonNode(data,self.compInfoConst.cmCandidates);cmResults.product=data;}else{cmResults.errmsg=responseMsg||app.lang.get('LBL_DNB_SVC_ERR');}
self.renderCompanyList(cmResults);},error:_.bind(self.checkAndProcessError,self)});}},formatConfidenceCodes:function(dnbCompanyList){_.each(dnbCompanyList,function(compObj){var confidenceCode=compObj.confidenceCode,matchMeta={};if(confidenceCode>=8){matchMeta.confClass='label-success';matchMeta.confText=app.lang.get('LBL_DNB_HIGH_CONF');}else if(confidenceCode===7||confidenceCode===6){matchMeta.confClass='label-pending';matchMeta.confText=app.lang.get('LBL_DNB_MED_CONF');}else if(confidenceCode<6){matchMeta.confClass='label-important';matchMeta.confText=app.lang.get('LBL_DNB_LOW_CONF');}
compObj.matchMeta=matchMeta;},this);return dnbCompanyList;}}) },
"dnb-competitors": {"controller": /*
     * Your installation or use of this SugarCRM file is subject to the applicable
     * terms available at
     * http://support.sugarcrm.com/06_Customer_Center/10_Master_Subscription_Agreements/.
     * If you do not agree to all of the applicable terms or do not have the
     * authority to bind the entity as an authorized representative, then do not
     * install or use this SugarCRM file.
     *
     * Copyright (C) SugarCRM Inc. All rights reserved.
     */
({
	// Dnb-competitors View (base) 
extendsFrom:'DnbView',duns_num:null,competitorsList:null,events:{'click a.dnb-company-name':'getCompanyDetails','click .backToList':'backToCompanyList'},competitorsDD:{'dunsnum':{'json_path':'DUNSNumber'},'orgname':{'json_path':'OrganizationPrimaryName.OrganizationName.$','case_fmt':true},'town':{'json_path':'PrimaryAddress.PrimaryTownName','case_fmt':true},'ctrycd':{'json_path':'PrimaryAddress.CountryISOAlpha2Code','case_fmt':false},'territoryabbreviatedname':{'json_path':'PrimaryAddress.TerritoryAbbreviatedName','case_fmt':true},'countryofficialname':{'json_path':'PrimaryAddress.CountryOfficialName','case_fmt':true},'salesrevenueamt':{'json_path':'salesrevenueamt','case_fmt':false},'topcompetitorindicator':{'json_path':'TopCompetitorIndicator','case_fmt':false},'isDupe':{'json_path':'isDupe'}},competitorsConst:{'responseCode':'FindCompetitorResponse.TransactionResult.ResultID','responseMsg':'FindCompetitorResponse.TransactionResult.ResultText','competitorsPath':'FindCompetitorResponse.FindCompetitorResponseDetail.Competitor','salesRevenuePath':'SalesRevenueAmount.0.$'},initialize:function(options){this._super('initialize',[options]);if(this.layout.collapse){this.layout.collapse(true);}
this.layout.on('dashlet:collapse',this.loadCompetitors,this);app.events.on('dnbcompinfo:duns_selected',this.collapseDashlet,this);this.layout.layout.context.on('dashboard:collapse:fire',this.loadCompetitors,this);},loadData:function(options){if(this.model.get('duns_num')){this.duns_num=this.model.get('duns_num');}},refreshClicked:function(){this.loadCompetitors(false);},loadCompetitors:function(isCollapsed){if(!isCollapsed){if(this.duns_num){this.getDNBCompetitors(this.duns_num);}else if(!_.isUndefined(app.controller.context.get('dnb_temp_duns_num'))){this.getDNBCompetitors(app.controller.context.get('dnb_temp_duns_num'));}else{this.template=app.template.get(this.name+'.dnb-no-duns');if(!this.disposed){this.render();}}}},getDNBCompetitors:function(duns_num){var self=this;if(duns_num){self.template=app.template.get(self.name);if(!self.disposed){self.render();self.$('div#dnb-competitors-list').hide();self.$('div#dnb-no-data').hide();}
var cacheKey='dnb:competitors:'+duns_num;var cacheContent=app.cache.get(cacheKey);if(cacheContent){var dupeCheckParams={'type':'duns','apiResponse':cacheContent,'module':'competitors'};this.competitorsList=cacheContent;this.baseDuplicateCheck(dupeCheckParams,this.renderCompetitors);}else{var dnbCompetitorsURL=app.api.buildURL('connector/dnb/competitors/'+duns_num,'',{},{});var resultData={'product':null,'errmsg':null};app.api.call('READ',dnbCompetitorsURL,{},{success:function(data){var responseCode=self.getJsonNode(data,self.competitorsConst.responseCode),responseMsg=self.getJsonNode(data,self.competitorsConst.responseMsg);if(responseCode&&responseCode===self.responseCodes.success){resultData.product=data;app.cache.set(cacheKey,data);self.competitorsList=data;}else{resultData.errmsg=responseMsg||app.lang.get('LBL_DNB_SVC_ERR');}
self.renderCompetitors.call(self,resultData);},error:_.bind(self.checkAndProcessError,self)});}}else{self.template=app.template.get(self.name+'.dnb-no-duns');if(!self.disposed){self.render();}}},backToCompanyList:function(){if(this.disposed){return;}
this.template=app.template.get(this.name);this.render();this.$('div#dnb-competitors-loading').show();this.$('div#dnb-competitors-list').hide();if(this.layout.getComponent('dashlet-toolbar').getField('import_dnb_data')){this.layout.getComponent('dashlet-toolbar').getField('import_dnb_data').getFieldElement().hide();}
var dupeCheckParams={'type':'duns','apiResponse':this.competitorsList,'module':'competitors'};this.baseDuplicateCheck(dupeCheckParams,this.renderCompetitors);},renderCompetitors:function(competitorsList){this.template=app.template.get(this.name);if(this.disposed){return;}
this.template=app.template.get(this.name);this.dnbComp={};if(competitorsList.product){var competitors=this.getJsonNode(competitorsList.product,this.competitorsConst.competitorsPath);this.dnbComp.product=this.formatCompetitors(competitors,this.competitorsDD);}else{this.dnbComp.errmsg=competitorsList.errmsg;}
this.render();this.$('div#dnb-competitors-loading').hide();this.$('div#dnb-no-data').hide();this.$('div#dnb-competitors-list').show();if(this.layout.getComponent('dashlet-toolbar').getField('import_dnb_data')){this.layout.getComponent('dashlet-toolbar').getField('import_dnb_data').getFieldElement().hide();}},formatCompetitors:function(competitorsList,competitorsDD){var formattedCompetitors=[];var topCompGroup=_.groupBy(competitorsList,function(competitorObj){return competitorObj.TopCompetitorIndicator;});if(topCompGroup.hasOwnProperty('true')&&topCompGroup.hasOwnProperty('false')){competitorsList=_.union(topCompGroup.true,topCompGroup.false);}
_.each(competitorsList,function(competitorObj){var salesRevenue=this.getJsonNode(competitorObj,this.competitorsConst.salesRevenuePath);if(salesRevenue){competitorObj.salesrevenueamt='$'+this.formatSalesRevenue(salesRevenue)+app.lang.get('LBL_DNB_MILLION');}},this);_.each(competitorsList,function(competitorObj){var frmtCompetitorsObj={};_.each(competitorsDD,function(value,key){var dataElement=this.getJsonNode(competitorObj,value.json_path);if(dataElement){if(value.case_fmt){dataElement=this.properCase(dataElement);}
frmtCompetitorsObj[key]=dataElement;}},this);formattedCompetitors.push(frmtCompetitorsObj);},this);return formattedCompetitors;},getCompanyDetails:function(evt){if(this.disposed){return;}
var duns_num=evt.target.id;if(duns_num){this.template=app.template.get('dnb.dnb-company-details');this.render();this.$('div#dnb-company-details').hide();this.baseCompanyInformation(duns_num,this.compInfoProdCD.std,app.lang.get('LBL_DNB_COMPETITORS_LIST'),this.renderCompanyDetails);}}}) },
"dnb-contact-info": {"controller": /*
     * Your installation or use of this SugarCRM file is subject to the applicable
     * terms available at
     * http://support.sugarcrm.com/06_Customer_Center/10_Master_Subscription_Agreements/.
     * If you do not agree to all of the applicable terms or do not have the
     * authority to bind the entity as an authorized representative, then do not
     * install or use this SugarCRM file.
     *
     * Copyright (C) SugarCRM Inc. All rights reserved.
     */
({
	// Dnb-contact-info View (base) 
extendsFrom:'DnbView',duns_num:null,contactsList:null,cntctSrchParams:null,currentContact:null,dashletState:null,searchCacheKey:null,detailCacheKey:null,events:{'click .showMoreData':'showMoreData','click .showLessData':'showLessData','click .dnb-cnt-prem':'baseGetContactDetails','click .dnb-cnt-std':'baseGetContactDetails','click .backToContactsList':'backToContactsList','click #dnb-srch-clear':'clearSearchResults','click #dnb-cntct-srch-btn':'searchContacts','keyup .input-large':'validateSearchParams'},initialize:function(options){this._super('initialize',[options]);if(this.layout.collapse){this.layout.collapse(true);}
this.layout.on('dashlet:collapse',this.loadContacts,this);app.events.on('dnbcompinfo:duns_selected',this.collapseDashlet,this);this.dashletState={'view':null,'content':null,'params':null};this.layout.layout.context.on('dashboard:collapse:fire',this.loadContacts,this);},refreshClicked:function(){this.loadContacts(false);},loadData:function(options){if(this.model.get('duns_num')){this.duns_num=this.model.get('duns_num');}},loadContacts:function(isCollapsed){if(!isCollapsed){if(this.duns_num){this.renderDashletFromState(this.dashletState);}else if(!_.isUndefined(app.controller.context.get('dnb_temp_duns_num'))){this.getDNBContacts(app.controller.context.get('dnb_temp_duns_num'));}else{this.template=app.template.get(this.name+'.dnb-no-duns');if(!this.disposed){this.render();}}}else{this.toggleImportBtn('import_dnb_data',false);}},backToContactsList:function(){if(this.disposed){return;}
this.template=app.template.get(this.name);this.toggleImportBtn('import_dnb_data',false);this.render();this.$('#dnb-contact-list-loading').show();this.$('#dnb-contact-list').hide();var dupeCheckParams={'type':'Contacts','apiResponse':this.contactsList,'module':'contacts'};this.baseDuplicateCheck(dupeCheckParams,this.renderContactsList);},renderContactsList:function(dnbApiResponse){if(this.disposed){return;}
this.template=app.template.get(this.name);if(!_.isNull(this.searchCacheKey)){this.dashletState.view='search';this.dashletState.params=this.cntctSrchParams;this.dashletState.content=this.searchCacheKey;}else{this.dashletState.view='list';this.dashletState.params=null;this.dashletState.content=null;}
var dnbContactsList={};if(dnbApiResponse.product){this.contactsList=dnbApiResponse.product;var apiContactList=this.getJsonNode(dnbApiResponse.product,this.contactConst.contactsPath);dnbContactsList.product=this.formatContactList(apiContactList,this.contactsListDD);}else if(dnbApiResponse.errmsg){dnbContactsList.errmsg=dnbApiResponse.errmsg;}
this.dnbContactsList=dnbContactsList;this.render();this.$('#dnb-contact-list-loading').hide();this.$('#dnb-contact-list').show();this.toggleImportBtn('import_dnb_data',false);this.$('.showLessData').hide();if(this.dnbContactsList.product&&this.dnbContactsList.product.length<3){this.$('.showMoreData').hide();this.$('.dnb-show-less').attr('class','dnb-show-all');}},clearSearchResults:function(){this.cntctSrchParams={'fname':null,'lname':null,'jobTitle':null};this.getDNBContacts(this.duns_num);},getDNBContacts:function(duns_num){if(this.disposed){return;}
if(duns_num){this.duns_num=duns_num;this.template=app.template.get(this.name);this.render();this.$('#dnb-contact-list-loading').show();this.$('#dnb-contact-list').hide();var cacheKey='dnb:cntlist:'+duns_num;var cacheContent=app.cache.get(cacheKey);this.dashletState.view='list';this.dashletState.content=cacheKey;this.dashletState.params=null;this.searchCacheKey=null;if(cacheContent){this.contactsList=cacheContent;var dupeCheckParams={'type':'Contacts','apiResponse':cacheContent,'module':'contacts'};this.baseDuplicateCheck(dupeCheckParams,this.renderContactsList);}else{var balParams={'DUNSNumber-1':duns_num,'contactType':'Contacts'};this.baseContactsBAL(balParams,this.renderContactsList);}}else{this.template=app.template.get(this.name+'.dnb-no-duns');if(!this.disposed){this.render();}}},importDNBContact:function(){this.baseImportContact('LinkedContacts');},searchContacts:function(evt){if(this.disposed){return;}
if(!this.$(evt.target).hasClass('disabled')&&this.duns_num){var cntctSrchParams={},srchParams={'name':null,'jobTitle':null};var name=$.trim(this.$('#dnb-name').val()),jobTitle=$.trim(this.$('#dnb-job').val());if(name!==''){cntctSrchParams.ContactName=name;srchParams.name=name;}
if(jobTitle!==''){cntctSrchParams.KeywordContactText=jobTitle;cntctSrchParams.KeywordContactScopeText='Title';srchParams.jobTitle=jobTitle;}
cntctSrchParams['DUNSNumber-1']=this.duns_num;cntctSrchParams.contactType='Contacts';this.template=app.template.get(this.name);this.cntctSrchParams=srchParams;this.render();this.$('div#dnb-contact-list-loading').show();this.$('div#dnb-contact-list').hide();var cacheKey='dnb:cntlist';_.each(cntctSrchParams,function(val,key){cacheKey=cacheKey+':'+key+'_'+val;});var cacheContent=app.cache.get(cacheKey);this.dashletState.view='detail';this.dashletState.content=cacheKey;this.dashletState.params=null;if(cacheContent){this.contactsList=data;this.renderContactsList(cacheContent);}else{this.baseContactsBAL(cntctSrchParams,this.renderContactsList);}}},validateSearchParams:function(){this.$('#dnb-cntct-srch-btn').addClass('disabled');var searchInputsColl=this.$('.input-large');if(this.duns_num){_.each(searchInputsColl,function(searchInputObj){if($.trim($(searchInputObj).val())!==''){this.$('#dnb-cntct-srch-btn').removeClass('disabled');}},this);}},renderDashletFromState:function(dashletState){var cacheContent=app.cache.get(dashletState.content),view=dashletState.view,srchParams=dashletState.params;if(!_.isNull(cacheContent)&&!_.isNull(dashletState.view)){if(view==='detail'){this.renderContactDetails(cacheContent);}else if(view==='search'&&!_.isNull(srchParams)){this.renderContactsList({'product':cacheContent});this.cntctSrchParams=srchParams;}else{this.getDNBContacts(this.duns_num);}}else{this.getDNBContacts(this.duns_num);}}}) },
"dnb-family-tree": {"controller": /*
     * Your installation or use of this SugarCRM file is subject to the applicable
     * terms available at
     * http://support.sugarcrm.com/06_Customer_Center/10_Master_Subscription_Agreements/.
     * If you do not agree to all of the applicable terms or do not have the
     * authority to bind the entity as an authorized representative, then do not
     * install or use this SugarCRM file.
     *
     * Copyright (C) SugarCRM Inc. All rights reserved.
     */
({
	// Dnb-family-tree View (base) 
extendsFrom:'DnbView',idCounter:1,duns_num:null,currentFT:null,events:{'click .backToList':'backToFamilyTree'},initialize:function(options){this._super('initialize',[options]);if(this.layout.collapse){this.layout.collapse(true);}
this.layout.on('dashlet:collapse',this.loadFamilyTree,this);app.events.on('dnbcompinfo:duns_selected',this.collapseDashlet,this);this.layout.layout.context.on('dashboard:collapse:fire',this.loadFamilyTree,this);},loadData:function(options){if(this.model.get('duns_num'))
this.duns_num=this.model.get('duns_num');},refreshClicked:function(){this.loadFamilyTree(false);},loadFamilyTree:function(isCollapsed){if(!isCollapsed){if(this.duns_num){this.getDNBFamilyTree(this.duns_num,'LNK_FF');}else if(!_.isUndefined(app.controller.context.get('dnb_temp_duns_num'))){this.getDNBFamilyTree(app.controller.context.get('dnb_temp_duns_num'),'LNK_FF');}else{this.template=app.template.get(this.name+'.dnb-no-duns');if(!this.disposed){this.render();}}}},getDNBFamilyTree:function(duns_num,prod_code){var self=this;self.duns_num=duns_num;self.idCounter=1;self.template=app.template.get(self.name);if(!self.disposed){self.render();self.$('#dnb-family-tree-loading').show();self.$('#dnb-family-tree-details').hide();}
var ftParams={'duns_num':self.duns_num,'prod_code':prod_code};var cacheKey='dnb:familytree:'+ftParams.duns_num+':'+ftParams.prod_code;var cacheContent=app.cache.get(cacheKey);if(cacheContent){var dupeCheckParams={'type':'duns','apiResponse':cacheContent,'module':'familytree'};this.currentFT=cacheContent;this.baseDuplicateCheck(dupeCheckParams,this.renderFamilyTree);}else{var dnbFamilyTreeURL=app.api.buildURL('connector/dnb/familytree','',{},{});var resultData={'product':null,'errmsg':null};app.api.call('create',dnbFamilyTreeURL,{'qdata':ftParams},{success:function(data){var responseCode=self.getJsonNode(data,self.appendSVCPaths.responseCode),responseMsg=self.getJsonNode(data,self.appendSVCPaths.responseMsg);if(responseCode&&responseCode===self.responseCodes.success){resultData.product=data;self.currentFT=data;app.cache.set(cacheKey,data);}else{resultData.errmsg=responseMsg||app.lang.get('LBL_DNB_SVC_ERR');}
self.renderFamilyTree(resultData);},error:_.bind(self.checkAndProcessError,self)});}},backToFamilyTree:function(){if(this.disposed){return;}
this.template=app.template.get(this.name);this.render();this.$('#dnb-family-tree-loading').show();this.$('#dnb-family-tree-details').hide();if(this.layout.getComponent('dashlet-toolbar').getField('import_dnb_data')){this.layout.getComponent('dashlet-toolbar').getField('import_dnb_data').getFieldElement().hide();}
var dupeCheckParams={'type':'duns','apiResponse':this.currentFT,'module':'familytree'};this.baseDuplicateCheck(dupeCheckParams,this.renderFamilyTree);},dnbToJSTree:function(data){var jsTreeData={};jsTreeData.data=[];var jsonPath='OrderProductResponse.OrderProductResponseDetail.Product.Organization';if(this.checkJsonNode(data,jsonPath)){jsTreeData.data.push(this.getDataRecursive(data.OrderProductResponse.OrderProductResponseDetail.Product.Organization));}
return jsTreeData;},getDataRecursive:function(data){var intermediateData={};var orgNamePath='OrganizationName.OrganizationPrimaryName.OrganizationName.$';var cityNamePath='Location.PrimaryAddress.PrimaryTownName';var countryNamePath='Location.PrimaryAddress.CountryISOAlpha2Code';var stateNamePath='Location.PrimaryAddress.TerritoryOfficialName';var dunsPath='SubjectHeader.DUNSNumber';var childrenPath='Linkage.FamilyTreeMemberOrganization';var orgName=this.checkJsonNode(data,orgNamePath)?data.OrganizationName.OrganizationPrimaryName.OrganizationName['$']:'';var dunsNum=this.checkJsonNode(data,dunsPath)?data.SubjectHeader.DUNSNumber:'';var countryName=this.checkJsonNode(data,countryNamePath)?data.Location.PrimaryAddress.CountryISOAlpha2Code:'';var stateName=this.checkJsonNode(data,stateNamePath)?data.Location.PrimaryAddress.TerritoryOfficialName:'';var cityName=this.checkJsonNode(data,cityNamePath)?data.Location.PrimaryAddress.PrimaryTownName:'';var dunsHTML='&nbsp;&nbsp;<span class="label label-success pull-right">'+app.lang.get('LBL_DNB_DUNS')+'</span>',duplicateHTML='&nbsp;&nbsp;<span class="label label-important pull-right">'+app.lang.get('LBL_DNB_DUPLICATE')+'</span>';intermediateData.metadata={'id':this.idCounter};intermediateData.attr={'id':this.idCounter,'duns':dunsNum};this.idCounter++;intermediateData.data=orgName+((stateName!=''&&stateName!=null)?(', '+stateName):'')
+(countryName!=''?(', '+countryName):'');if(parseInt(dunsNum,10)==parseInt(this.duns_num,10)){intermediateData.data=intermediateData.data+dunsHTML;intermediateData.state='open';this.initialSelect=[1,intermediateData.metadata.id];this.initialOpen=[1,intermediateData.metadata.id];}else if(data.isDupe){intermediateData.data=intermediateData.data+duplicateHTML;}
if(intermediateData.metadata.id===1){intermediateData.state='open';}
if(this.checkJsonNode(data,childrenPath)&&data.Linkage.FamilyTreeMemberOrganization.length>0){var childRootData=data.Linkage.FamilyTreeMemberOrganization;intermediateData.children=_.map(childRootData,this.getDataRecursive,this);}
return intermediateData;},renderFamilyTree:function(familyTreeData){if(this.disposed){return;}
var self=this;self.template=app.template.get(self.name);self.render();if(!familyTreeData.errmsg&&familyTreeData.product){self.$('#dnb-family-tree').jstree({'json_data':self.dnbToJSTree(familyTreeData.product),'plugins':['json_data','ui','types'],'core':{'html_titles':true}}).bind('loaded.jstree',function(){self.$('#dnb-family-tree').addClass('jstree-sugar');self.$('#dnb-family-tree > ul').addClass('list');self.$('#dnb-family-tree > ul > li > a').addClass('jstree-clicked');}).bind('select_node.jstree',function(e,data){if(data.rslt.e.target.getAttribute('href')){var duns_num=data.rslt.obj.attr('duns');if(duns_num){self.getCompanyDetails(duns_num);}}else{data.inst.toggle_node(data.rslt.obj);}});}else if(familyTreeData.errmsg){self.dnbFamilyTree={};self.dnbFamilyTree.errmsg=familyTreeData.errmsg;self.render();}
self.$('#dnb-family-tree-loading').hide();self.$('#dnb-family-tree-details').show();if(self.layout.getComponent('dashlet-toolbar').getField('import_dnb_data')){self.layout.getComponent('dashlet-toolbar').getField('import_dnb_data').getFieldElement().hide();}},getCompanyDetails:function(duns_num){if(this.disposed){return;}
this.template=app.template.get('dnb.dnb-company-details');this.render();this.$('div#dnb-company-details').hide();this.baseCompanyInformation(duns_num,this.compInfoProdCD.std,app.lang.get('LBL_DNB_FAMILY_TREE_BACK'),this.renderCompanyDetails);}}) },
"dnb-financial-info": {"controller": /*
     * Your installation or use of this SugarCRM file is subject to the applicable
     * terms available at
     * http://support.sugarcrm.com/06_Customer_Center/10_Master_Subscription_Agreements/.
     * If you do not agree to all of the applicable terms or do not have the
     * authority to bind the entity as an authorized representative, then do not
     * install or use this SugarCRM file.
     *
     * Copyright (C) SugarCRM Inc. All rights reserved.
     */
({
	// Dnb-financial-info View (base) 
extendsFrom:'DnbView',duns_num:null,events:{'click .showMoreData':'showMoreData','click .showLessData':'showLessData'},initialize:function(options){this._super('initialize',[options]);if(this.layout.collapse){this.layout.collapse(true);}
this.layout.on('dashlet:collapse',this.loadFinancials,this);app.events.on('dnbcompinfo:duns_selected',this.collapseDashlet,this);this.layout.layout.context.on('dashboard:collapse:fire',this.loadFinancials,this);},loadData:function(options){if(this.model.get('duns_num')){this.duns_num=this.model.get('duns_num');}},financialDD:{'marketAnalysis':{'json_path':'ThirdPartyAssessment.ThirdPartyAssessment.0.ThirdPartyInformation.OtherInformation','label':'LBL_DNB_REC_MARK_ANALYSIS'},'finStmt':{'json_path':'Financial.KeyFinancialFiguresOverview','label':'LBL_DNB_FIN_STMT','sub_array':{'finStmtDate':'StatementHeaderDetails.FinancialStatementToDate.$','salesRevenue':'SalesRevenueAmount.0.$','salesUnits':'SalesRevenueAmount.0.@UnitOfSize'}},'stckSym':{'json_path':'OrganizationDetail.ControlOwnershipTypeText.$','label':'LBL_DNB_FIN_COMP_TYPE','sub_array':{'stckDet':'RegisteredDetail.StockExchangeDetails'}}},finConst:{'mktAnalysisPath':'OrderProductResponse.OrderProductResponseDetail.Product.Organization.ThirdPartyAssessment.ThirdPartyAssessment.0.ThirdPartyInformation.OtherInformation','finStmtPath':'OrderProductResponse.OrderProductResponseDetail.Product.Organization.Financial.KeyFinancialFiguresOverview','stckSymPath':'OrderProductResponse.OrderProductResponseDetail.Product.Organization.RegisteredDetail.StockExchangeDetails','ownTypePath':'OrderProductResponse.OrderProductResponseDetail.Product.Organization.OrganizationDetail.ControlOwnershipTypeText.$'},refreshClicked:function(){this.loadFinancials(false);},loadFinancials:function(isCollapsed){if(!isCollapsed){if(this.duns_num){this.getCompanyFinancials(this.duns_num);}else if(!_.isUndefined(app.controller.context.get('dnb_temp_duns_num'))){this.getCompanyFinancials(app.controller.context.get('dnb_temp_duns_num'));}else{this.template=app.template.get(this.name+'.dnb-no-duns');if(!this.disposed){this.render();}}}},getCompanyFinancials:function(duns_num){var self=this;self.template=app.template.get(self.name);if(!self.disposed){self.render();self.$('#dnb-financials-loading').show();self.$('#dnb-financials-details').hide();}
var cacheKey='dnb:financial:'+duns_num;if(app.cache.get(cacheKey)){self.renderFinancialDetails.call(self,app.cache.get(cacheKey));}else{var dnbFinancialsURL=app.api.buildURL('connector/dnb/financial/'+duns_num,'',{},{});var resultData={'product':null,'errmsg':null};app.api.call('READ',dnbFinancialsURL,{},{success:function(data){var responseCode=self.getJsonNode(data,self.appendSVCPaths.responseCode),responseMsg=self.getJsonNode(data,self.appendSVCPaths.responseMsg);if(responseCode&&responseCode===self.responseCodes.success){if(self.isDataExists(data)){resultData.product=data;}else{resultData.errmsg=app.lang.get('LBL_DNB_NO_DATA');}
app.cache.set(cacheKey,resultData);}else{resultData.errmsg=responseMsg||app.lang.get('LBL_DNB_SVC_ERR');}
self.renderFinancialDetails.call(self,resultData);},error:_.bind(self.checkAndProcessError,self)});}},isDataExists:function(financialDetails){if(!this.checkJsonNode(financialDetails,this.finConst.mktAnalysisPath)&&!this.checkJsonNode(financialDetails,this.finConst.annlIncPath)&&!this.checkJsonNode(financialDetails,this.finConst.stckSymPath)){return false;}else{return true;}},renderFinancialDetails:function(financialDetails){if(this.disposed){return;}
var formattedFinancials,dnbFin={};if(financialDetails.product){formattedFinancials=this.formatFinancials(financialDetails.product,this.financialDD);dnbFin.product=formattedFinancials;}
if(financialDetails.errmsg){dnbFin.errmsg=financialDetails.errmsg;}
this.dnbFin=dnbFin;this.render();this.$('#dnb-financials-loading').hide();this.$('#dnb-financials-details').show();this.$('.showLessData').hide();},formatFinancials:function(dnbApiResponse,financialDD){var frmtFinancials={};var marketAnalysis=this.getJsonNode(dnbApiResponse,this.finConst.mktAnalysisPath),finStmt=this.getJsonNode(dnbApiResponse,this.finConst.finStmtPath),stckSym=this.getJsonNode(dnbApiResponse,this.finConst.stckSymPath);if(marketAnalysis){frmtFinancials.marketAnalysis=marketAnalysis;}
if(finStmt){frmtFinStmtList=[];_.each(finStmt,function(finStmtObj){var frmtFinStmt=null;_.each(financialDD.finStmt.sub_array,function(value,key){var dataElement=this.getJsonNode(finStmtObj,value);if(dataElement){if(_.isNull(frmtFinStmt)){frmtFinStmt={};}
if(key==='salesRevenue'){dataElement=this.formatSalesRevenue(dataElement);}
frmtFinStmt[key]=dataElement;}},this);if(!_.isNull(frmtFinStmt)){frmtFinStmtList.push(frmtFinStmt);}},this);if(frmtFinStmtList.length>0){frmtFinancials.finStmt=frmtFinStmtList;}}
var ownerType=this.getJsonNode(dnbApiResponse,this.finConst.ownTypePath),frmtStckSymL={};if(ownerType){frmtStckSymL.ownerType=ownerType;}
if(stckSym){frmtStckSymL.stckSymList=stckSym;}
if(frmtStckSymL.ownerType||frmtStckSymL.stckSymList){frmtFinancials.stckSym=frmtStckSymL;}
return frmtFinancials;}}) },
"dnb-industry-info": {"controller": /*
     * Your installation or use of this SugarCRM file is subject to the applicable
     * terms available at
     * http://support.sugarcrm.com/06_Customer_Center/10_Master_Subscription_Agreements/.
     * If you do not agree to all of the applicable terms or do not have the
     * authority to bind the entity as an authorized representative, then do not
     * install or use this SugarCRM file.
     *
     * Copyright (C) SugarCRM Inc. All rights reserved.
     */
({
	// Dnb-industry-info View (base) 
extendsFrom:'DnbView',events:{'click .showMoreData':'showMoreData','click .showLessData':'showLessData'},industryInfoDD:{'industryExplanation':{'json_path':'IndustryCode.0.IndustryExplanationText','case_fmt':true},'industryChapters':{'json_path':'IndustryProfileChapterDetail','case_fmt':true}},industryConst:{'industryInfoPath':'OrderProductResponse.OrderProductResponseDetail.Product.IndustryProfile.IndustryProfileDetail.0'},initialize:function(options){this._super('initialize',[options]);if(this.layout.collapse){this.layout.collapse(true);}
this.layout.on('dashlet:collapse',this.loadIndustryInfo,this);app.events.on('dnbcompinfo:duns_selected',this.collapseDashlet,this);this.layout.layout.context.on('dashboard:collapse:fire',this.loadIndustryInfo,this);},loadData:function(options){if(this.model.get('duns_num')){this.duns_num=this.model.get('duns_num');}},refreshClicked:function(){this.loadIndustryInfo(false);},loadIndustryInfo:function(isCollapsed){if(!isCollapsed){if(!_.isUndefined(app.controller.context.get('dnb_temp_hoovers_ind_code'))){this.getDNBIndustryInfo(app.controller.context.get('dnb_temp_hoovers_ind_code'));}else if(this.model.get('sic_code')){var sicToHicParams={'industryType':this.commonConst.sic_to_hic,'industryCode':this.model.get('sic_code')};this.getDNBIndustryInfoFromSIC(sicToHicParams);}else{this.template=app.template.get(this.name+'.dnb-no-duns');if(!this.disposed){this.render();}}}},showDNBLoading:function(duns_num){this.template=app.template.get(this.name);if(this.disposed){return;}
this.render();this.$('#dnb-industry-list-loading').show();this.$('#dnb-industry-info').hide();},getDNBIndustryInfoFromSIC:function(sicToHicParams){var self=this;if(sicToHicParams.industryType===this.commonConst.sic_to_hic&&sicToHicParams.industryCode){self.template=app.template.get(self.name);if(!self.disposed){self.render();}
self.$('#dnb-industry-list-loading').show();self.$('#dnb-industry-info').hide();var cacheKey='dnb:industrydet:'+sicToHicParams.industryType+':'+sicToHicParams.industryCode;if(app.cache.get(cacheKey)){self.renderIndustryInfo.call(self,app.cache.get(cacheKey));}else{var dnbIndustryURL=app.api.buildURL('connector/dnb/industry','',{},{});var resultData={'product':null,'errmsg':null};app.api.call('create',dnbIndustryURL,{'qdata':sicToHicParams},{success:function(data){var responseCode=self.getJsonNode(data,self.appendSVCPaths.responseCode),responseMsg=self.getJsonNode(data,self.appendSVCPaths.responseMsg);if(responseCode&&responseCode===self.responseCodes.success){resultData.product=data;app.cache.set(cacheKey,resultData);}else{resultData.errmsg=responseMsg||app.lang.get('LBL_DNB_SVC_ERR');}
self.renderIndustryInfo.call(self,resultData);},error:_.bind(self.checkAndProcessError,self)});}}else{self.template=app.template.get(self.name+'.dnb-no-duns');if(!self.disposed){self.render();}}},getDNBIndustryInfo:function(industryCodeValue){var self=this;if(industryCodeValue){self.template=app.template.get(self.name);if(!self.disposed){self.render();}
self.$('#dnb-industry-list-loading').show();self.$('#dnb-industry-info').hide();var cacheKey='dnb:industrydet:'+industryCodeValue;if(app.cache.get(cacheKey)){self.renderIndustryInfo.call(self,app.cache.get(cacheKey));}else{var dnbIndustryURL=app.api.buildURL('connector/dnb/industry/'+industryCodeValue,'',{},{});var resultData={'product':null,'errmsg':null};app.api.call('READ',dnbIndustryURL,{},{success:function(data){var responseCode=self.getJsonNode(data,self.appendSVCPaths.responseCode),responseMsg=self.getJsonNode(data,self.appendSVCPaths.responseMsg);if(responseCode&&responseCode===self.responseCodes.success){resultData.product=data;app.cache.set(cacheKey,resultData);}else{resultData.errmsg=responseMsg||app.lang.get('LBL_DNB_SVC_ERR');}
self.renderIndustryInfo.call(self,resultData);},error:_.bind(self.checkAndProcessError,self)});}}else{self.template=app.template.get(self.name+'.dnb-no-duns');if(!self.disposed){self.render();}}},renderIndustryInfo:function(dnbApiResponse){if(this.disposed){return;}
var formattedIndustryInfo;this.dnbIndustryInfo={};if(dnbApiResponse.product){var industryProduct=this.getJsonNode(dnbApiResponse.product,this.industryConst.industryInfoPath);if(industryProduct){formattedIndustryInfo=this.formatIndustryInfo(industryProduct,this.industryInfoDD);if(!_.isNull(formattedIndustryInfo)){this.dnbIndustryInfo.product=formattedIndustryInfo;}else{this.dnbIndustryInfo.errmsg=app.lang.get('LBL_DNB_NO_DATA');}}else{this.dnbIndustryInfo.errmsg=app.lang.get('LBL_DNB_NO_DATA');}}else{this.dnbIndustryInfo.errmsg=dnbApiResponse.errmsg||app.lang.get('LBL_DNB_NO_DATA');}
this.template=app.template.get(this.name);this.render();this.$('#dnb-industry-list-loading').hide();this.$('#dnb-industry-info').show();this.$('.showLessData').hide();},formatIndustryInfo:function(industryDetails,industryInfoDD){var formattedIndustryInfo={};_.each(industryInfoDD,function(value,key){var dataElement=this.getJsonNode(industryDetails,value.json_path);if(dataElement){formattedIndustryInfo[key]=dataElement;}},this);if(formattedIndustryInfo.industryExplanation&&formattedIndustryInfo.industryChapters){return formattedIndustryInfo;}else{return null;}}}) },
"dnb-lite-company-info": {"controller": /*
     * Your installation or use of this SugarCRM file is subject to the applicable
     * terms available at
     * http://support.sugarcrm.com/06_Customer_Center/10_Master_Subscription_Agreements/.
     * If you do not agree to all of the applicable terms or do not have the
     * authority to bind the entity as an authorized representative, then do not
     * install or use this SugarCRM file.
     *
     * Copyright (C) SugarCRM Inc. All rights reserved.
     */
({
	// Dnb-lite-company-info View (base) 
extendsFrom:'DnbView',duns_num:null,filteredDD:null,events:{'click .showMoreData':'showMoreData','click .showLessData':'showLessData'},initDashlet:function(){this._super('initDashlet');this.baseFilterData();},initialize:function(options){this._super('initialize',[options]);if(this.disposed){return;}
if(this.layout.collapse){this.layout.collapse(true);}
this.layout.on('dashlet:collapse',this.loadCompanyInfo,this);app.events.on('dnbcompinfo:duns_selected',this.collapseDashlet,this);this.layout.layout.context.on('dashboard:collapse:fire',this.loadCompanyInfo,this);},loadData:function(options){if(this.model.get('duns_num')){this.duns_num=this.model.get('duns_num');}
this.baseFilterData();},refreshClicked:function(){this.loadCompanyInfo(false);},loadCompanyInfo:function(isCollapsed){if(!isCollapsed){if(this.duns_num){this.getDNBLiteCompanyDetails(this.duns_num);}else if(!_.isUndefined(app.controller.context.get('dnb_temp_duns_num'))){this.getDNBLiteCompanyDetails(app.controller.context.get('dnb_temp_duns_num'));}else{this.template=app.template.get(this.name+'.dnb-no-duns');if(!this.disposed){this.render();}}}},getDNBLiteCompanyDetails:function(duns_num){if(this.disposed){return;}
this.dnbFirmo={};this.template=app.template.get('dnb.dnb-comp-info');this.dnbFirmo.loading_label=app.lang.get('LBL_DNB_LITE_COMPANY_INFO_LOADING');this.render();this.$('div#dnb-compinfo-loading').show();this.$('div#dnb-compinfo-details').hide();this.baseCompanyInformation(duns_num,this.compInfoProdCD.lite,null,this.renderCompanyInformation);}}) },
"dnb-news-and-media": {"controller": /*
     * Your installation or use of this SugarCRM file is subject to the applicable
     * terms available at
     * http://support.sugarcrm.com/06_Customer_Center/10_Master_Subscription_Agreements/.
     * If you do not agree to all of the applicable terms or do not have the
     * authority to bind the entity as an authorized representative, then do not
     * install or use this SugarCRM file.
     *
     * Copyright (C) SugarCRM Inc. All rights reserved.
     */
({
	// Dnb-news-and-media View (base) 
extendsFrom:'DnbView',events:{'click .showMoreData':'showMoreData','click .showLessData':'showLessData','change #fb':'selectSocialMedia','change #youtube':'selectSocialMedia','change #twitter':'selectSocialMedia'},newsConst:{'newsPath':'OrderProductResponse.OrderProductResponseDetail.Product.Organization.News.NewsDetails','socialPath':'OrderProductResponse.OrderProductResponseDetail.Product.Organization.Telecommunication.SocialMediaDetail','socialMediaNamePath':'SocialMediaPlatformName.$','fburl':'https://www.facebook.com/','twitterurl':'https://twitter.com/','youtubeurl':'http://www.youtube.com/'},socialMediaMeta:{'youtube':{'code':25866,'url':'http://www.youtube.com/','label':'LBL_DNB_NEWS_YOUTUBE','list':null},'twitter':{'code':25867,'url':'https://twitter.com/','label':'LBL_DNB_NEWS_TWITTER','list':null},'wiki':{'code':25868,'url':'http://www.youtube.com/','label':'LBL_DNB_NEWS_WIKI','list':null},'fb':{'code':25869,'url':'https://www.facebook.com/','label':'LBL_DNB_NEWS_FACEBOOK','list':null}},socialMediaDD:{'mediaName':{'json_path':'SocialMediaPlatformName.$'},'contentKey':{'json_path':'UserContentKey'},'displayName':{'json_path':'UserDisplayName'}},initialize:function(options){this._super('initialize',[options]);if(this.layout.collapse){this.layout.collapse(true);}
this.layout.on('dashlet:collapse',this.loadNews,this);app.events.on('dnbcompinfo:duns_selected',this.collapseDashlet,this);this.layout.layout.context.on('dashboard:collapse:fire',this.loadNews,this);},loadData:function(options){if(this.model.get("duns_num")){this.duns_num=this.model.get("duns_num");}},loadData:function(options){if(this.model.get('duns_num')){this.duns_num=this.model.get('duns_num');}},_render:function(){app.view.View.prototype._renderHtml.call(this);_.each(this.socialMediaMeta,function(value,key){if(value.list&&value.list.length>0){var listSelector='#'+key;this.$(listSelector).select2({placeholder:app.lang.get(value.label),data:value.list,containerCss:{'width':'100%'}});}},this);},refreshClicked:function(){this.loadNews(false);},loadNews:function(isCollapsed){if(!isCollapsed){if(this.duns_num){this.getNewsandMediaInfo(this.duns_num);}else if(!_.isUndefined(app.controller.context.get('dnb_temp_duns_num'))){this.getNewsandMediaInfo(app.controller.context.get('dnb_temp_duns_num'));}else{this.template=app.template.get(this.name+'.dnb-no-duns');if(!this.disposed){this.render();}}}},selectSocialMedia:function(event){var selectedMedia=event.target.id;if(selectedMedia){var baseUrl=this.socialMediaMeta[selectedMedia].url;var selector='#'+selectedMedia;var contentKey=this.$(selector).val();window.open(baseUrl+contentKey);this.$(selector).val('');}},getNewsandMediaInfo:function(duns_num){var self=this;self.template=app.template.get(self.name);if(!self.disposed){self.render();}
self.$('div#dnb-news-detail-loading').show();self.$('div#dnb-news-detail').hide();if(duns_num&&duns_num!==''){var dnbNewInfoURL=app.api.buildURL('connector/dnb/news/'+duns_num,'',{},{});var resultData={'product':null,'errmsg':null};app.api.call('READ',dnbNewInfoURL,{},{success:function(data){var responseCode=self.getJsonNode(data,self.appendSVCPaths.responseCode),responseMsg=self.getJsonNode(data,self.appendSVCPaths.responseMsg);if(responseCode&&responseCode===self.responseCodes.success){var newsData=self.getJsonNode(data,self.newsConst.newsPath),socialData=self.getJsonNode(data,self.newsConst.socialPath);if(newsData||socialData){resultData.news={},resultData.social={};if(newsData){resultData.news.product=newsData;}
if(socialData){resultData.social.product=socialData;}}else{resultData.errmsg=app.lang.get('LBL_DNB_NO_DATA');}}else{resultData.errmsg=responseMsg||app.lang.get('LBL_DNB_SVC_ERR');}
self.renderNewsAndSocial(resultData);},error:_.bind(self.checkAndProcessError,self)});}},renderNewsAndSocial:function(dnbApiResponse){if(this.disposed){return;}
var dnbNews={};if(dnbApiResponse.news||dnbApiResponse.social){dnbNews.news={},dnbNews.social={};if(dnbApiResponse.news.product){dnbNews.news.product=dnbApiResponse.news.product;}else{dnbNews.news.errmsg=app.lang.get('LBL_DNB_NO_DATA');}
if(dnbApiResponse.social.product){dnbNews.social.product=this.formatSocial(dnbApiResponse.social.product,this.socialMediaDD);}else{dnbNews.social.errmsg=app.lang.get('LBL_DNB_NO_DATA');}}
if(dnbApiResponse.errmsg){dnbNews.errmsg=dnbApiResponse.errmsg;}
this.dnbNews=dnbNews;this.render();this.$('div#dnb-news-detail-loading').hide();this.$('div#dnb-news-detail').show();this.$('.showLessData').hide();},formatSocial:function(dnbApiResponse,socialDD){var socialMedia=_.groupBy(dnbApiResponse,function(socialObj){return socialObj.SocialMediaPlatformName['@DNBCodeValue'];});var formattedSocialData=[];_.each(this.socialMediaMeta,function(socialMetaValue,socialMetaKey){if(socialMedia[socialMetaValue.code]){formattedSocialData.push({'label':socialMetaValue.label,'mediaId':socialMetaKey});socialMetaValue.list=[];_.each(socialMedia[socialMetaValue.code],function(socialMediaDetails){var contentKey=this.getJsonNode(socialMediaDetails,this.socialMediaDD.contentKey.json_path),displayName=this.getJsonNode(socialMediaDetails,this.socialMediaDD.displayName.json_path);var dropDownData=null;dropDownData={id:contentKey,text:displayName||contentKey};socialMetaValue.list.push(dropDownData);},this);}},this);return formattedSocialData;}}) },
"dnb-premium-company-info": {"controller": /*
     * Your installation or use of this SugarCRM file is subject to the applicable
     * terms available at
     * http://support.sugarcrm.com/06_Customer_Center/10_Master_Subscription_Agreements/.
     * If you do not agree to all of the applicable terms or do not have the
     * authority to bind the entity as an authorized representative, then do not
     * install or use this SugarCRM file.
     *
     * Copyright (C) SugarCRM Inc. All rights reserved.
     */
({
	// Dnb-premium-company-info View (base) 
extendsFrom:'DnbView',duns_num:null,filteredDD:null,events:{'click .showMoreData':'showMoreData','click .showLessData':'showLessData'},initDashlet:function(){this._super('initDashlet');this.baseFilterData();},initialize:function(options){this._super('initialize',[options]);if(this.disposed){return;}
if(this.layout.collapse){this.layout.collapse(true);}
this.layout.on('dashlet:collapse',this.loadCompanyInfo,this);app.events.on('dnbcompinfo:duns_selected',this.collapseDashlet,this);this.layout.layout.context.on('dashboard:collapse:fire',this.loadCompanyInfo,this);},loadData:function(options){if(this.model.get('duns_num')){this.duns_num=this.model.get('duns_num');}
this.baseFilterData();},refreshClicked:function(){this.loadCompanyInfo(false);},loadCompanyInfo:function(isCollapsed){if(!isCollapsed){if(this.duns_num){this.getDNBPremCompanyDetails(this.duns_num);}else if(!_.isUndefined(app.controller.context.get('dnb_temp_duns_num'))){this.getDNBPremCompanyDetails(app.controller.context.get('dnb_temp_duns_num'));}else{this.template=app.template.get('dnb.dnb-no-duns');if(!this.disposed){this.render();}}}},getDNBPremCompanyDetails:function(duns_num){if(this.disposed){return;}
this.dnbFirmo={};this.template=app.template.get('dnb.dnb-comp-info');this.dnbFirmo.loading_label=app.lang.get('LBL_DNB_PREMIUM_COMPANY_INFO_LOADING');this.render();this.$('div#dnb-compinfo-loading').show();this.$('div#dnb-compinfo-details').hide();this.baseCompanyInformation(duns_num,this.compInfoProdCD.prem,null,this.renderCompanyInformation);}}) },
"dnb-standard-company-info": {"controller": /*
     * Your installation or use of this SugarCRM file is subject to the applicable
     * terms available at
     * http://support.sugarcrm.com/06_Customer_Center/10_Master_Subscription_Agreements/.
     * If you do not agree to all of the applicable terms or do not have the
     * authority to bind the entity as an authorized representative, then do not
     * install or use this SugarCRM file.
     *
     * Copyright (C) SugarCRM Inc. All rights reserved.
     */
({
	// Dnb-standard-company-info View (base) 
extendsFrom:'DnbView',duns_num:null,filteredDD:null,events:{'click .showMoreData':'showMoreData','click .showLessData':'showLessData'},initDashlet:function(){this._super('initDashlet');this.baseFilterData();},initialize:function(options){this._super('initialize',[options]);if(this.disposed){return;}
if(this.layout.collapse){this.layout.collapse(true);}
this.layout.on('dashlet:collapse',this.loadCompanyInfo,this);app.events.on('dnbcompinfo:duns_selected',this.collapseDashlet,this);this.layout.layout.context.on('dashboard:collapse:fire',this.loadCompanyInfo,this);},refreshClicked:function(){this.loadCompanyInfo(false);},loadData:function(options){if(this.model.get('duns_num')){this.duns_num=this.model.get('duns_num');}
this.baseFilterData();},loadCompanyInfo:function(isCollapsed){if(!isCollapsed){if(this.duns_num){this.getDNBStdCompanyDetails(this.duns_num);}else if(!_.isUndefined(app.controller.context.get('dnb_temp_duns_num'))){this.getDNBStdCompanyDetails(app.controller.context.get('dnb_temp_duns_num'));}else{this.template=app.template.get(this.name+'.dnb-no-duns');if(!this.disposed){this.render();}}}},getDNBStdCompanyDetails:function(duns_num){if(this.disposed){return;}
this.dnbFirmo={};this.template=app.template.get('dnb.dnb-comp-info');this.dnbFirmo.loading_label=app.lang.get('LBL_DNB_STD_COMPANY_INFO_LOADING');this.render();this.$('div#dnb-compinfo-loading').show();this.$('div#dnb-compinfo-details').hide();this.baseCompanyInformation(duns_num,this.compInfoProdCD.std,null,this.renderCompanyInformation);}}) },
"dupecheck-filter-dropdown": {"controller": /*
     * Your installation or use of this SugarCRM file is subject to the applicable
     * terms available at
     * http://support.sugarcrm.com/06_Customer_Center/10_Master_Subscription_Agreements/.
     * If you do not agree to all of the applicable terms or do not have the
     * authority to bind the entity as an authorized representative, then do not
     * install or use this SugarCRM file.
     *
     * Copyright (C) SugarCRM Inc. All rights reserved.
     */
({
	// Dupecheck-filter-dropdown View (base) 
extendsFrom:'FilterFilterDropdownView',labelAllRecordsFormatted:'LBL_DUPECHECK_FILTER_DEFAULT'}) },
"dupecheck-header": {"controller": /*
     * Your installation or use of this SugarCRM file is subject to the applicable
     * terms available at
     * http://support.sugarcrm.com/06_Customer_Center/10_Master_Subscription_Agreements/.
     * If you do not agree to all of the applicable terms or do not have the
     * authority to bind the entity as an authorized representative, then do not
     * install or use this SugarCRM file.
     *
     * Copyright (C) SugarCRM Inc. All rights reserved.
     */
({
	// Dupecheck-header View (base) 
initialize:function(options){app.view.View.prototype.initialize.call(this,options);this.context.on('dupecheck:collection:reset',this.updateCount,this);},updateCount:function(){var translatedString=app.lang.get('LBL_DUPLICATES_FOUND',this.module,{'duplicateCount':this.context.get('collection').length});this.$('span.duplicate_count').text(translatedString);}}) },
"dupecheck-list": {"controller": /*
     * Your installation or use of this SugarCRM file is subject to the applicable
     * terms available at
     * http://support.sugarcrm.com/06_Customer_Center/10_Master_Subscription_Agreements/.
     * If you do not agree to all of the applicable terms or do not have the
     * authority to bind the entity as an authorized representative, then do not
     * install or use this SugarCRM file.
     *
     * Copyright (C) SugarCRM Inc. All rights reserved.
     */
({
	// Dupecheck-list View (base) 
extendsFrom:'FlexListView',plugins:['ListColumnEllipsis','ListDisableSort','ListRemoveLinks','Pagination'],collectionSync:null,additionalTableClasses:null,initialize:function(options){var dupeListMeta=app.metadata.getView(null,'dupecheck-list')||{},moduleMeta=app.metadata.getView(options.module,'dupecheck-list')||{};options.meta=_.extend({},dupeListMeta,moduleMeta,options.meta||{});this._super('initialize',[options]);this.context.on('dupecheck:fetch:fire',this.fetchDuplicates,this);},bindDataChange:function(){this.collection.on('reset',function(){this.context.trigger('dupecheck:collection:reset');},this);this._super('bindDataChange');},_renderHtml:function(){var classesToAdd='duplicates highlight';this._super('_renderHtml');if(this.additionalTableClasses){classesToAdd=classesToAdd+' '+this.additionalTableClasses;}
this.$('table.table-striped').addClass(classesToAdd);},fetchDuplicates:function(model,options){this.collection.dupeCheckModel=model;this.collection.fetch(options);}}) },
"dupecheck-list-edit": {"controller": /*
     * Your installation or use of this SugarCRM file is subject to the applicable
     * terms available at
     * http://support.sugarcrm.com/06_Customer_Center/10_Master_Subscription_Agreements/.
     * If you do not agree to all of the applicable terms or do not have the
     * authority to bind the entity as an authorized representative, then do not
     * install or use this SugarCRM file.
     *
     * Copyright (C) SugarCRM Inc. All rights reserved.
     */
({
	// Dupecheck-list-edit View (base) 
extendsFrom:'DupecheckListView',additionalTableClasses:'duplicates-selectedit',addActions:function(){if(this.actionsAdded)return;this._super("addActions");var firstRightColumn=this.rightColumns[0];if(firstRightColumn&&_.isArray(firstRightColumn.fields)){firstRightColumn.fields.unshift({type:'rowaction',label:'LBL_LISTVIEW_SELECT_AND_EDIT',css_class:'btn btn-invisible btn-link',event:'list:dupecheck-list-select-edit:fire'});this.rightColumns[0]=firstRightColumn;}
this.actionsAdded=true;}}) },
"dupecheck-list-multiselect": {"controller": /*
     * Your installation or use of this SugarCRM file is subject to the applicable
     * terms available at
     * http://support.sugarcrm.com/06_Customer_Center/10_Master_Subscription_Agreements/.
     * If you do not agree to all of the applicable terms or do not have the
     * authority to bind the entity as an authorized representative, then do not
     * install or use this SugarCRM file.
     *
     * Copyright (C) SugarCRM Inc. All rights reserved.
     */
({
	// Dupecheck-list-multiselect View (base) 
extendsFrom:'DupecheckListView',additionalTableClasses:'duplicates-multiselect'}) },
"dupecheck-list-select": {"controller": /*
     * Your installation or use of this SugarCRM file is subject to the applicable
     * terms available at
     * http://support.sugarcrm.com/06_Customer_Center/10_Master_Subscription_Agreements/.
     * If you do not agree to all of the applicable terms or do not have the
     * authority to bind the entity as an authorized representative, then do not
     * install or use this SugarCRM file.
     *
     * Copyright (C) SugarCRM Inc. All rights reserved.
     */
({
	// Dupecheck-list-select View (base) 
extendsFrom:'DupecheckListView',additionalTableClasses:'duplicates-singleselect'}) },
"editmodal": {"controller": /*
     * Your installation or use of this SugarCRM file is subject to the applicable
     * terms available at
     * http://support.sugarcrm.com/06_Customer_Center/10_Master_Subscription_Agreements/.
     * If you do not agree to all of the applicable terms or do not have the
     * authority to bind the entity as an authorized representative, then do not
     * install or use this SugarCRM file.
     *
     * Copyright (C) SugarCRM Inc. All rights reserved.
     */
({
	// Editmodal View (base) 
extendsFrom:'BaseeditmodalView',fallbackFieldTemplate:'edit',initialize:function(options){app.view.View.prototype.initialize.call(this,options);if(this.layout){this.layout.on('app:view:activity:editmodal',function(){this.context.set('createModel',app.data.createRelatedBean(app.controller.context.get('model'),null,'notes',{}));this.render();this.$('.modal').modal({backdrop:'static'});this.$('.modal').modal('show');app.$contentEl.attr('aria-hidden',true);$('.modal-backdrop').insertAfter($('.modal'));this.context.get('createModel').on('error:validation',function(){this.resetButton();},this);},this);}
this.bindDataChange();},cancelButton:function(){this._super('cancelButton');app.$contentEl.removeAttr('aria-hidden');},saveComplete:function(){this._super('saveComplete');app.$contentEl.removeAttr('aria-hidden');}}) },
"error": {"controller": /*
     * Your installation or use of this SugarCRM file is subject to the applicable
     * terms available at
     * http://support.sugarcrm.com/06_Customer_Center/10_Master_Subscription_Agreements/.
     * If you do not agree to all of the applicable terms or do not have the
     * authority to bind the entity as an authorized representative, then do not
     * install or use this SugarCRM file.
     *
     * Copyright (C) SugarCRM Inc. All rights reserved.
     */
({
	// Error View (base) 
className:'error-page',cubeOptions:{spin:false},events:{'click .sugar-cube':'spinCube'},initialize:function(options){app.metadata.set(this._metadata);app.data.declareModels();app.controller.context.prepare(true);this.options.meta=this._metadata.modules[this.options.module].views[this.options.name].meta;app.view.View.prototype.initialize.call(this,options);},_render:function(){if(this.context.get('errorType')){var attributes=this.getErrorAttributes();this.model.set(attributes);}
app.view.View.prototype._render.call(this);},getErrorAttributes:function(){var errorType=this.context.get('errorType'),attributes;switch(errorType){case'400':attributes={title:'ERR_HTTP_400_TITLE',type:'ERR_HTTP_400_TYPE',messages:['ERR_HTTP_400_TEXT_LINE1','ERR_HTTP_400_TEXT_LINE2'],linkText:app.lang.get('ERR_HTTP_400_ACTION')};break;case'404':attributes={title:'ERR_HTTP_404_TITLE',type:'ERR_HTTP_404_TYPE',messages:['ERR_HTTP_404_TEXT'],linkText:app.lang.get('ERR_HTTP_404_ACTION')};break;case'422':attributes={title:'ERR_HTTP_DEFAULT_TEXT',type:error.status||'ERR_HTTP_DEFAULT_TYPE',messages:['ERR_CONTACT_TECH_SUPPORT'],linkText:app.lang.get('ERR_HTTP_DEFAULT_ACTION')};break;case'500':attributes={title:'ERR_HTTP_500_TITLE',type:'ERR_HTTP_500_TYPE',messages:['ERR_HTTP_500_TEXT'],linkText:app.lang.get('ERR_HTTP_500_ACTION')};break;default:var error=this.context.get('error')||{};var title=null;if(error.status&&error.errorThrown){title='HTTP: '+error.status+' '+error.errorThrown;}
attributes={title:title||'ERR_HTTP_DEFAULT_TITLE',type:error.status||'ERR_HTTP_DEFAULT_TYPE',messages:[error.message||'ERR_HTTP_DEFAULT_TEXT']};break;}
return attributes;},_metadata:{"modules":{"Error":{"views":{"error":{"meta":{}}},"layouts":{"error":{"meta":{"type":"simple","components":[{view:"error"}]}}}}},'module_tab_map':{'Error':''}},spinCube:function(){this.cubeOptions.spin=!this.cubeOptions.spin;this.render();}}) },
"filter-actions": {"controller": /*
     * Your installation or use of this SugarCRM file is subject to the applicable
     * terms available at
     * http://support.sugarcrm.com/06_Customer_Center/10_Master_Subscription_Agreements/.
     * If you do not agree to all of the applicable terms or do not have the
     * authority to bind the entity as an authorized representative, then do not
     * install or use this SugarCRM file.
     *
     * Copyright (C) SugarCRM Inc. All rights reserved.
     */
({
	// Filter-actions View (base) 
events:{'change input':'filterNameChanged','keyup input':'filterNameChanged','click a.reset_button':'triggerReset','click a.filter-close':'triggerClose','click a.save_button:not(.disabled)':'triggerSave','click a.delete_button:not(.hide)':'triggerDelete'},className:'filter-header',saveState:false,showActions:true,initialize:function(opts){this._super('initialize',[opts]);this.layout.on('filter:create:open',function(model){this.toggle(model);var name=model?model.get('name'):'';this.setFilterName(name);app.shortcuts.register('Filter:Close',['esc','ctrl+alt+l'],function(){this.$('a.filter-close').click();},this,true);app.shortcuts.register('Filter:Save',['ctrl+s','ctrl+alt+a'],function(){this.$('a.save_button:not(.disabled)').click();},this,true);app.shortcuts.register('Filter:Delete','d',function(){this.$('a.delete_button:not(.hide)').click();},this);app.shortcuts.register('Filter:Reset','r',function(){this.$('a.reset_button').click();},this);},this);this.listenTo(this.layout,'filter:toggle:savestate',this.toggleSave);this.listenTo(this.layout,'filter:set:name',this.setFilterName);this.listenTo(this.context,'change:filterOptions',this.render);this.before('render',this.setShowActions,null,this);},setShowActions:function(){var filterOptions=this.context.get('filterOptions')||{};this.showActions=!!filterOptions.show_actions;},getFilterName:function(){return this.$('input').val();},toggle:function(filter){this.$el.toggleClass('hide',!!filter.get('is_template'));},setFilterName:function(name){var input=this.$('input').val(name);if(_.isFunction(input.placeholder)){input.placeholder();}
this.toggleDelete(!_.isEmpty(name));},filterNameChanged:_.debounce(function(event){if(this.disposed||!this.context.editingFilter){return;}
var name=this.getFilterName();this.context.editingFilter.set('name',name);this.layout.trigger('filter:toggle:savestate',true);if(this.layout.getComponent('filter-rows')){this.layout.getComponent('filter-rows').saveFilterEditState();}},200),toggleDelete:function(enable){this.$('.delete_button').toggleClass('hide',!enable);},toggleSave:function(enable){this.saveState=_.isUndefined(enable)?!this.saveState:!!enable;var isEnabled=this.getFilterName()&&this.saveState;this.$('.save_button').toggleClass('disabled',!isEnabled);},triggerClose:function(){var filter=this.context.editingFilter,filterLayout=this.layout.getComponent('filter'),id=filter.get('id'),changedAttributes=filter.changedAttributes(filter.getSyncedAttributes());filter.revertAttributes();filterLayout.clearFilterEditState();if(changedAttributes&&changedAttributes.filter_definition){this.layout.trigger('filter:apply',null,filter.get('filter_definition'));}
if(!id){filterLayout.clearLastFilter(this.layout.currentModule,filterLayout.layoutType);filterLayout.trigger('filter:select:filter',filterLayout.filters.collection.defaultFilterFromMeta);return;}
this.layout.trigger('filter:create:close');},triggerReset:function(){this.layout.getComponent('filter-rows').resetFilterValues();},triggerSave:function(){var filterName=this.getFilterName();this.context.trigger('filter:create:save',filterName);},triggerDelete:function(){this.layout.trigger('filter:create:delete');}}) },
"filter-filter-dropdown": {"controller": /*
     * Your installation or use of this SugarCRM file is subject to the applicable
     * terms available at
     * http://support.sugarcrm.com/06_Customer_Center/10_Master_Subscription_Agreements/.
     * If you do not agree to all of the applicable terms or do not have the
     * authority to bind the entity as an authorized representative, then do not
     * install or use this SugarCRM file.
     *
     * Copyright (C) SugarCRM Inc. All rights reserved.
     */
({
	// Filter-filter-dropdown View (base) 
tagName:"span",className:"table-cell",events:{"click .choice-filter.choice-filter-clickable":"handleEditFilter","click .choice-filter-close":"handleClearFilter"},labelDropdownTitle:'LBL_FILTER',labelCreateNewFilter:'LBL_FILTER_CREATE_NEW',labelAllRecords:'LBL_FILTER_ALL_RECORDS',labelAllRecordsFormatted:null,initialize:function(opts){app.view.View.prototype.initialize.call(this,opts);this._select2formatSelectionTemplate=app.template.get("filter-filter-dropdown.selection-partial");this._select2formatResultTemplate=app.template.get("filter-filter-dropdown.result-partial");this.listenTo(this.layout,"filter:select:filter",this.handleSelect);this.listenTo(this.layout,"filter:change:module",this.handleModuleChange);this.listenTo(this.layout,"filter:render:filter",this._renderHtml);},filterDropdownEnabled:true,_renderHtml:function(){if(!this.layout.filters){return;}
this._super('_renderHtml');this.filterList=this.getFilterList();this._renderDropdown(this.filterList);},getFilterList:function(){var filters=[];if(this.layout.canCreateFilter()){filters.push({id:"create",text:app.lang.get(this.labelCreateNewFilter)});}
if(this.layout.filters.collection.get('all_records')&&this.labelAllRecordsFormatted){this.layout.filters.collection.get('all_records').set('name',this.labelAllRecordsFormatted);this.layout.filters.collection.sort();}
var firstNonEditable=false;this.layout.filters.collection.each(function(model){var opts={id:model.id,text:this.layout.filters.collection._getTranslatedFilterName(model)};if(model.get("editable")===false&&!firstNonEditable){opts.firstNonUserFilter=true;firstNonEditable=true;}
filters.push(opts);},this);return filters;},_renderDropdown:function(data){var self=this;this.filterNode=this.$(".search-filter");this.filterNode.select2({data:data,multiple:false,minimumResultsForSearch:7,formatSelection:_.bind(this.formatSelection,this),formatResult:_.bind(this.formatResult,this),formatResultCssClass:_.bind(this.formatResultCssClass,this),dropdownCss:{width:'auto'},dropdownCssClass:'search-filter-dropdown',initSelection:_.bind(this.initSelection,this),escapeMarkup:function(m){return m;},shouldFocusInput:function(){return false;},width:'off'});app.shortcuts.register('Filter:Create',['f c','ctrl+alt+8'],function(){this.filterNode.select2('val','create',true);},this);app.shortcuts.register('Filter:Edit','f e',function(){this.$('.choice-filter.choice-filter-clickable').click();},this);app.shortcuts.register('Filter:Show','f m',function(){this.filterNode.select2('open');},this);if(!this.filterDropdownEnabled){this.filterNode.select2("disable");}
this.filterNode.off("change");this.filterNode.on("change",function(e){self.layout.trigger('filter:change:filter',e.val);});},handleSelect:function(id){this.filterNode.select2('val',id,true);},initSelection:function(el,callback){var data,model,val=el.val();if(val==='create'){data={id:"create",text:app.lang.get(this.labelCreateNewFilter)};}else{model=this.layout.filters.collection.get(val);if(!model){data={id:"all_records",text:app.lang.get(this.labelAllRecords)};}else if(val==="all_records"){data=this.formatAllRecordsFilter(null,model);}else{data={id:model.id,text:this.layout.filters.collection._getTranslatedFilterName(model)};}}
callback(data);},formatSelection:function(item){var ctx={},safeString;item=_.clone(item);this.toggleFilterCursor(this.isFilterEditable(item.id));if(item.id==='all_records'){item=this.formatAllRecordsFilter(item);}
safeString=Handlebars.Utils.escapeExpression(item.text);this.$('.choice-filter-label').html(safeString);if(item.id!=='all_records'){this.$('.choice-filter-close').show();}else{this.$('.choice-filter-close').hide();}
ctx.label=app.lang.get(this.labelDropdownTitle);ctx.enabled=this.filterDropdownEnabled;return this._select2formatSelectionTemplate(ctx);},formatResult:function(option){if(option.id===this.layout.getLastFilter(this.layout.layout.currentModule,this.layout.layoutType)){option.icon='icon-ok';}else if(option.id==='create'){option.icon='icon-plus';}else{option.icon=undefined;}
return this._select2formatResultTemplate(option);},formatResultCssClass:function(item){if(item.id==='create'){return'select2-result-border-bottom';}
if(item.firstNonUserFilter){return'select2-result-border-top';}},isFilterEditable:function(id){if(!this.layout.canCreateFilter()||!this.filterDropdownEnabled||this.layout.showingActivities){return false;}
if(id==="create"||id==='all_records'){return true;}else{return!this.layout.filters.collection.get(id)||this.layout.filters.collection.get(id).get('editable')!==false;}},toggleFilterCursor:function(editable){if(editable){this.$('.choice-filter').css("cursor","pointer").addClass('choice-filter-clickable');}else{this.$('.choice-filter').css("cursor","not-allowed").removeClass('choice-filter-clickable');}},formatAllRecordsFilter:function(item,model){item=item||{id:'all_records'};var allRelatedModules=_.indexOf([this.module,'all_modules'],this.layout.layout.currentModule)>-1;if(this.isFilterEditable(item.id)){item.text=app.lang.get(this.labelCreateNewFilter);}else if(this.layout.layoutType==='record'&&allRelatedModules){item.text=app.lang.get(this.labelAllRecords);this.toggleFilterCursor(false);}else if(model){item.text=this.layout.filters.collection._getTranslatedFilterName(model);}
return item;},handleEditFilter:function(){var filterId=this.filterNode.val(),filterModel;if(filterId==='all_records'){this.layout.trigger("filter:select:filter",'create');}else{filterModel=this.layout.filters.collection.get(filterId);}
if(filterModel&&filterModel.get("editable")!==false){this.layout.trigger("filter:create:open",filterModel);}},handleModuleChange:function(linkModuleName,linkName){this.filterDropdownEnabled=(linkName!=="all_modules");},handleClearFilter:function(evt){evt.stopPropagation();this.layout.clearLastFilter(this.layout.layout.currentModule,this.layout.layoutType);var filterId;if(this.context.get('currentFilterId')===this.layout.filters.collection.defaultFilterFromMeta){filterId='all_records';}else{filterId=this.layout.filters.collection.defaultFilterFromMeta;}
this.layout.trigger('filter:select:filter',filterId);},_dispose:function(){if(!_.isEmpty(this.filterNode)){this.filterNode.select2('destroy');}
app.view.View.prototype._dispose.call(this);}}) },
"filter-module-dropdown": {"controller": /*
     * Your installation or use of this SugarCRM file is subject to the applicable
     * terms available at
     * http://support.sugarcrm.com/06_Customer_Center/10_Master_Subscription_Agreements/.
     * If you do not agree to all of the applicable terms or do not have the
     * authority to bind the entity as an authorized representative, then do not
     * install or use this SugarCRM file.
     *
     * Copyright (C) SugarCRM Inc. All rights reserved.
     */
({
	// Filter-module-dropdown View (base) 
tagName:"span",className:"table-cell",initialize:function(options){this._super('initialize',[options]);this._select2formatSelectionTemplate=app.template.get("filter-module-dropdown.selection-partial");this._select2formatResultTemplate=app.template.get("filter-module-dropdown.result-partial");this.listenTo(this.layout,"filter:change:module",this.handleChange);this.listenTo(this.layout,"filter:render:module",this._render);},_render:function(){this._super('_render');if(this.layout.showingActivities){this.filterList=this.getModuleListForActivities();}else if(this.layout.layoutType==="record"){this.filterList=this.getModuleListForSubpanels();}else{this.$el.hide();return this;}
this._renderDropdown(this.filterList);},_renderDropdown:function(data){var self=this;this.filterNode=this.$(".related-filter");this.filterNode.select2({data:data,multiple:false,minimumResultsForSearch:7,formatSelection:_.bind(this.formatSelection,this),formatResult:_.bind(this.formatResult,this),dropdownCss:{width:'auto'},dropdownCssClass:'search-related-dropdown',initSelection:_.bind(this.initSelection,this),escapeMarkup:function(m){return m;},width:'off'});if(this.layout.layoutType!=="record"||this.layout.showingActivities){this.filterNode.select2("disable");}
this.filterNode.off("change");this.filterNode.on("change",function(e){var linkModule=e.val;if(self.layout.layoutType==="record"&&linkModule!=="all_modules"){linkModule=app.data.getRelatedModule(self.module,linkModule);}
self.layout.trigger("filter:change:module",linkModule,e.val);});},handleChange:function(linkModuleName,linkName,silent){var cacheKey=app.user.lastState.key('subpanels-last',this.layout);if(linkName==="all_modules"){this.layout.trigger("subpanel:change");app.user.lastState.remove(cacheKey);}else if(linkName){this.layout.trigger("subpanel:change",linkName);app.user.lastState.set(cacheKey,linkName);}
this.context.set('currentFilterId',null);if(this.filterNode){this.filterNode.select2("val",linkName||linkModuleName);}
if(!silent){this.layout.layout.trigger("filter:change",linkModuleName,linkName);this.layout.trigger('filter:get',linkModuleName,linkName);this.layout.trigger('filter:clear:quicksearch');}},getModuleListForSubpanels:function(){var filters=[];filters.push({id:"all_modules",text:app.lang.get("LBL_MODULE_ALL")});var subpanels=this.pullSubpanelRelationships();subpanels=this._pruneHiddenModules(subpanels);if(subpanels){_.each(subpanels,function(value,key){var module=app.data.getRelatedModule(this.module,value);if(app.acl.hasAccess("list",module)){filters.push({id:value,text:app.lang.get(key,this.module)});}},this);}
return filters;},getModuleListForActivities:function(){var filters=[],label;if(this.module=="Activities"){label=app.lang.get("LBL_MODULE_ALL");}else{label=app.lang.get('LBL_MODULE_NAME',this.module);}
filters.push({id:'Activities',text:label});return filters;},pullSubpanelRelationships:function(){return app.utils.getSubpanelList(this.module);},_pruneHiddenModules:function(subpanels){var hiddenSubpanels=_.map(app.metadata.getHiddenSubpanels(),function(subpanel){return subpanel.toLowerCase();});var pruned=_.reduce(subpanels,function(obj,value,key){var relatedModule=app.data.getRelatedModule(this.module,value);if(relatedModule&&!_.contains(hiddenSubpanels,relatedModule.toLowerCase())){obj[key]=value;}
return obj;},{},this);return pruned;},initSelection:function(el,callback){var selection,label;if(el.val()==="all_modules"){label=(this.layout.layoutType==="record")?app.lang.get("LBL_MODULE_ALL"):app.lang.get("LBL_MODULE_NAME",this.module);selection={id:"all_modules",text:label};}else if(_.findWhere(this.filterList,{id:el.val()})){selection=_.findWhere(this.filterList,{id:el.val()});}else if(this.filterList&&this.filterList.length>0){selection=this.filterList[0];}
callback(selection);},formatSelection:function(item){var selectionLabel,safeString;safeString=Handlebars.Utils.escapeExpression(item.text);this.$('.choice-related').html(safeString);if(this.layout.layoutType!=="record"||this.layout.showingActivities){selectionLabel=app.lang.get("LBL_MODULE");}else{selectionLabel=app.lang.get("LBL_RELATED")+'<i class="icon-caret-down"></i>';}
return this._select2formatSelectionTemplate(selectionLabel);},formatResult:function(option){return this._select2formatResultTemplate(option.text);},_dispose:function(){if(!_.isEmpty(this.filterNode)){this.filterNode.select2('destroy');}
this._super('_dispose');}}) },
"filter-quicksearch": {"controller": /*
     * Your installation or use of this SugarCRM file is subject to the applicable
     * terms available at
     * http://support.sugarcrm.com/06_Customer_Center/10_Master_Subscription_Agreements/.
     * If you do not agree to all of the applicable terms or do not have the
     * authority to bind the entity as an authorized representative, then do not
     * install or use this SugarCRM file.
     *
     * Copyright (C) SugarCRM Inc. All rights reserved.
     */
({
	// Filter-quicksearch View (base) 
events:{'keyup':'throttledSearch','paste':'throttledSearch'},plugins:['QuickSearchFilter'],className:'table-cell full-width',initialize:function(opts){app.view.View.prototype.initialize.call(this,opts);this.listenTo(this.layout,'filter:clear:quicksearch',this.clearInput);this.listenTo(this.layout,'filter:change:module',this.updatePlaceholder);app.shortcuts.register('Filter:Search',['f i','ctrl+alt+9'],function(){if(this.$el.is(':visible')){this.$el.focus();}},this);},_renderHtml:function(){this._super('_renderHtml');this.setElement(this.$('input'));},throttledSearch:_.debounce(function(e){var newSearch=this.$el.val();if(this.currentSearch!==newSearch){this.currentSearch=newSearch;this.layout.trigger('filter:apply',newSearch);}},400),getFieldLabels:function(moduleName,fields){var moduleMeta=app.metadata.getModule(moduleName);var labels=[];_.each(fields,function(fieldName){var fieldMeta=moduleMeta.fields[fieldName];labels.push(app.lang.get(fieldMeta.vname,moduleName).toLowerCase());});return labels;},updatePlaceholder:function(linkModuleName,linkModule){var label;this.toggleInput();if(!this.$el.hasClass('hide')&&linkModule!=='all_modules'){var fields=this.getModuleQuickSearchFields(linkModuleName),fieldLabels=this.getFieldLabels(linkModuleName,fields);label=app.lang.get('LBL_SEARCH_BY')+' '+fieldLabels.join(', ')+'...';}else{label=app.lang.get('LBL_BASIC_QUICK_SEARCH');}
var input=this.$el.attr('placeholder',label);if(_.isFunction(input.placeholder)){input.placeholder();}},toggleInput:function(){this.$el.toggleClass('hide',!!this.layout.showingActivities);},clearInput:function(){this.toggleInput();var input=this.$el.val('');if(_.isFunction(input.placeholder)){input.placeholder();}
this.currentSearch='';this.layout.trigger('filter:apply');}}) },
"filter-rows": {"controller": /*
     * Your installation or use of this SugarCRM file is subject to the applicable
     * terms available at
     * http://support.sugarcrm.com/06_Customer_Center/10_Master_Subscription_Agreements/.
     * If you do not agree to all of the applicable terms or do not have the
     * authority to bind the entity as an authorized representative, then do not
     * install or use this SugarCRM file.
     *
     * Copyright (C) SugarCRM Inc. All rights reserved.
     */
({
	// Filter-rows View (base) 
events:{'click [data-action=add]':'addRow','click [data-action=remove]':'removeRow','change [data-filter=field] input[type=hidden]':'handleFieldSelected','change [data-filter=operator] input[type=hidden]':'handleOperatorSelected'},className:'filter-definition-container',filterFields:[],lastFilterDef:[],fieldTypeMap:{'datetime':'date','datetimecombo':'date'},initialize:function(opts){this.formRowTemplate=app.template.get("filter-rows.filter-row-partial");var operators=app.metadata.getFilterOperators();if(_.isEmpty(operators)){app.logger.error('Filter operators not found.');operators={};}
this.filterOperatorMap=operators;app.view.View.prototype.initialize.call(this,opts);this.listenTo(this.layout,"filterpanel:change:module",this.handleFilterChange);this.listenTo(this.layout,"filter:create:open",this.openForm);this.listenTo(this.layout,"filter:create:close",this.render);this.listenTo(this.context,"filter:create:save",this.saveFilter);this.listenTo(this.layout,"filter:create:delete",this.confirmDelete);},handleFilterChange:function(moduleName){var moduleMeta=app.metadata.getModule(moduleName);if(!moduleMeta){return;}
this.fieldList=app.data.getBeanClass('Filters').prototype.getFilterableFields(moduleName);this.filterFields={};this.moduleName=moduleName;_.each(this.fieldList,function(value,key){this.filterFields[key]=app.lang.get(value.vname,moduleName);},this);},openForm:_.debounce(function(filterModel){var template=filterModel.get('filter_template')||filterModel.get('filter_definition');if(_.isEmpty(template)){this.render();this.addRow();}else{this.populateFilter();}
this.saveFilterEditState();app.shortcuts.register('Filter:Add','+',function(){this.$('[data-action=add]').last().click();},this);app.shortcuts.register('Filter:Remove','-',function(){this.$('[data-action=remove]').last().click();},this);},100,true),saveFilter:function(name){var self=this,obj={filter_definition:this.buildFilterDef(true),filter_template:this.buildFilterDef(),name:name||this.context.editingFilter.get('name'),module_name:this.moduleName},message=app.lang.get('TPL_FILTER_SAVE',this.moduleName,{name:name});this.context.editingFilter.save(obj,{success:function(model){self.context.trigger('filter:add',model);self.layout.trigger('filter:toggle:savestate',false);},showAlerts:{'success':{title:app.lang.getAppString('LBL_SUCCESS'),messages:message}}});},confirmDelete:function(){app.alert.show('delete_confirmation',{level:'confirmation',messages:app.lang.get('LBL_DELETE_FILTER_CONFIRMATION',this.moduleName),onConfirm:_.bind(this.deleteFilter,this)});},deleteFilter:function(){var self=this,name=this.context.editingFilter.get('name'),message=app.lang.get('TPL_DELETE_FILTER_SUCCESS',this.moduleName,{name:name});this.context.editingFilter.destroy({success:function(model){self.layout.trigger('filter:remove',model);},showAlerts:{'success':{title:app.lang.getAppString('LBL_SUCCESS'),messages:message}}});this.layout.trigger('filter:create:close');},getFilterableFields:function(moduleName){var moduleMeta=app.metadata.getModule(moduleName),fieldMeta=moduleMeta.fields,fields={};if(moduleMeta.filters){_.each(moduleMeta.filters,function(templateMeta){if(templateMeta.meta&&templateMeta.meta.fields){fields=_.extend(fields,templateMeta.meta.fields);}});}
_.each(fields,function(fieldFilterDef,fieldName){var fieldMetaData=app.utils.deepCopy(fieldMeta[fieldName]);if(_.isEmpty(fieldFilterDef)){fields[fieldName]=fieldMetaData||{};}else{fields[fieldName]=_.extend({name:fieldName},fieldMetaData,fieldFilterDef);}
delete fields[fieldName]['readonly'];});return fields;},createField:function(model,def){var obj={meta:{view:"edit"},def:def,model:model,context:app.controller.context,viewName:"edit",view:this};var field=app.view.createField(obj);field.action='detail';return field;},addRow:function(e){var $row,model,field,$fieldValue,$fieldContainer;if(e){$row=this.$(e.currentTarget).closest('[data-filter=row]');$row.after(this.formRowTemplate());$row=$row.next();this.layout.trigger('filter:toggle:savestate',true);}else{$row=$(this.formRowTemplate()).appendTo(this.$el);}
model=app.data.createBean(this.moduleName);field=this.createField(model,{type:'enum',options:this.filterFields});$fieldValue=$row.find('[data-filter=field]');$fieldContainer=$(field.getPlaceholder().string);$fieldContainer.appendTo($fieldValue);$row.data('nameField',field);this._renderField(field,$fieldContainer);return $row;},removeRow:function(e){var $row=this.$(e.currentTarget).closest('[data-filter=row]'),fieldOpts=[{'field':'nameField','value':'name'},{'field':'operatorField','value':'operator'},{'field':'valueField','value':'value'}];this._disposeRowFields($row,fieldOpts);$row.remove();this.layout.trigger('filter:toggle:savestate',true);if(this.$('[data-filter=row]').length===0){this.addRow();}},validateRows:function(rows){return _.every(rows,this.validateRow,this);},validateRow:function(row){var $row=$(row),data=$row.data();if(data.isDateRange||data.isPredefinedFilter){return true;}
if(_.contains(['$between','$dateBetween'],data.operator)){if(!_.isArray(data.value)||data.value.length!==2){return false;}
switch(data.operator){case'$between':return!(_.isNaN(parseFloat(data.value[0]))||_.isNaN(parseFloat(data.value[1])));case'$dateBetween':return!_.isEmpty(data.value[0])&&!_.isEmpty(data.value[1]);default:return false;}}
return _.isNumber(data.value)||!_.isEmpty(data.value);},populateFilter:function(){var name=this.context.editingFilter.get('name'),filterOptions=this.context.get('filterOptions')||{},populate=this.context.editingFilter.get('is_template')&&filterOptions.filter_populate,filterDef=this.context.editingFilter.get('filter_template')||this.context.editingFilter.get('filter_definition');this.render();this.layout.trigger('filter:set:name',name);if(populate){filterDef=app.data.getBeanClass('Filters').prototype.populateFilterDefinition(filterDef,populate);}
_.each(filterDef,function(row){this.populateRow(row);},this);this.lastFilterDef=this.buildFilterDef(true);this.lastFilterTemplate=this.buildFilterDef();},populateRow:function(rowObj){var $row=this.addRow(),moduleMeta=app.metadata.getModule(this.layout.currentModule),fieldMeta=moduleMeta.fields;_.each(rowObj,function(value,key){var isPredefinedFilter=(this.fieldList[key]&&this.fieldList[key].predefined_filter===true);if(key==="$or"){var keys=_.reduce(value,function(memo,obj){return memo.concat(_.keys(obj));},[]);key=_.find(_.keys(this.fieldList),function(key){if(_.has(this.fieldList[key],'dbFields')){return _.isEqual(this.fieldList[key].dbFields.sort(),keys.sort());}},this);value=_.values(value[0])[0];}else if(!fieldMeta[key]&&!isPredefinedFilter){$row.remove();return;}
if(!this.fieldList[key]){var relate=_.find(this.fieldList,function(field){return field.id_name===key;});if(!relate){$row.remove();return;}
key=relate.name;}
$row.find('[data-filter=field] input[type=hidden]').select2('val',key).trigger('change');if(_.isString(value)||_.isNumber(value)){value={"$equals":value};}
_.each(value,function(value,operator){$row.data('value',value);$row.find('[data-filter=operator] input[type=hidden]').select2('val',operator==='$dateRange'?value:operator).trigger('change');});},this);},handleFieldSelected:function(e){var $el=this.$(e.currentTarget),$row=$el.parents('[data-filter=row]'),$fieldWrapper=$row.find('[data-filter=operator]'),data=$row.data(),fieldName=$el.val(),fieldOpts=[{'field':'operatorField','value':'operator'},{'field':'valueField','value':'value'}];this._disposeRowFields($row,fieldOpts);data['name']=fieldName;if(!fieldName){return;}
data.id_name=this.fieldList[fieldName].id_name;if(this.fieldList[fieldName].predefined_filter===true){data.isPredefinedFilter=true;this.fireSearch();return;}
var fieldType=this.fieldTypeMap[this.fieldList[fieldName].type]||this.fieldList[fieldName].type,payload={},types=_.keys(this.filterOperatorMap[fieldType]);$fieldWrapper.removeClass('hide').empty();$row.find('[data-filter=value]').addClass('hide').empty();_.each(types,function(operand){payload[operand]=app.lang.get(this.filterOperatorMap[fieldType][operand],[this.layout.moduleName,'Filters']);},this);var model=app.data.createBean(this.moduleName);var field=this.createField(model,{type:'enum',searchBarThreshold:9999,options:payload}),$field=$(field.getPlaceholder().string);$field.appendTo($fieldWrapper);data['operatorField']=field;this._renderField(field,$field);},handleOperatorSelected:function(e){var $el=this.$(e.currentTarget),$row=$el.parents('[data-filter=row]'),data=$row.data(),operation=$el.val(),fieldOpts=[{'field':'valueField','value':'value'}];this._disposeRowFields($row,fieldOpts);data['operator']=operation;if(!operation){return;}
var moduleName=this.moduleName,module=app.metadata.getModule(moduleName),fields=app.metadata._patchFields(moduleName,module,app.utils.deepCopy(this.fieldList));var fieldName=$row.find('[data-filter=field] input[type=hidden]').select2('val'),fieldType=this.fieldTypeMap[this.fieldList[fieldName].type]||this.fieldList[fieldName].type,fieldDef=fields[fieldName];switch(fieldType){case'enum':fieldDef.isMultiSelect=true;fieldDef.searchBarThreshold=-1;break;case'bool':fieldDef.type='enum';fieldDef.options=fieldDef.options||'filter_checkbox_dom';break;case'int':fieldDef.auto_increment=false;if(operation==='$in'){fieldDef.type='varchar';fieldDef.len=200;if(_.isArray($row.data('value'))){$row.data('value',$row.data('value').join(','));}}
break;case'teamset':fieldDef.type='relate';break;case'datetimecombo':case'date':fieldDef.type='date';data.isDate=true;if(operation.charAt(0)!=='$'){data.isDateRange=true;this.fireSearch();return;}
break;case'relate':fieldDef.auto_populate=true;break;}
fieldDef.required=false;fieldDef.readonly=false;var model=app.data.createBean(moduleName);var $fieldValue=$row.find('[data-filter=value]');$fieldValue.removeClass('hide').empty();var _keyUpCallback=function(e){if($(e.currentTarget).is(".select2-input")){return;}
this.value=$(e.currentTarget).val();model.set(this.name,this.unformat($(e.currentTarget).val()),{silent:true});model.trigger('change');};if(operation==='$between'||operation==='$dateBetween'){var minmax=[],value=$row.data('value')||[];model.set(fieldName+'_min',value[0]||'');model.set(fieldName+'_max',value[1]||'');minmax.push(this.createField(model,_.extend({},fieldDef,{name:fieldName+'_min'})));minmax.push(this.createField(model,_.extend({},fieldDef,{name:fieldName+'_max'})));if(operation==='$dateBetween'){minmax[0].label=app.lang.get('LBL_FILTER_DATEBETWEEN_FROM');minmax[1].label=app.lang.get('LBL_FILTER_DATEBETWEEN_TO');}else{minmax[0].label=app.lang.get('LBL_FILTER_BETWEEN_FROM');minmax[1].label=app.lang.get('LBL_FILTER_BETWEEN_TO');}
data['valueField']=minmax;_.each(minmax,function(field){var fieldContainer=$(field.getPlaceholder().string);$fieldValue.append(fieldContainer);this.listenTo(field,'render',function(){field.$('input, select, textarea').addClass('inherit-width');field.$('.input-append').prepend('<span class="add-on">'+field.label+'</span>');field.$('.input-append').addClass('input-prepend');field.$('.input-append').removeClass('date');field.$('input, textarea').on('keyup',_.debounce(_.bind(_keyUpCallback,field),400));});this._renderField(field,fieldContainer);},this);}else{model.set(fieldDef.id_name||fieldName,$row.data('value'));var field=this.createField(model,_.extend({},fieldDef,{name:fieldName})),fieldContainer=$(field.getPlaceholder().string);$fieldValue.append(fieldContainer);data['valueField']=field;this.listenTo(field,'render',function(){field.$('input, select, textarea').addClass('inherit-width');field.$('.input-append').removeClass('date');field.$('input, textarea').on('keyup',_.debounce(_.bind(_keyUpCallback,field),400));});if(fieldDef.type==='relate'&&$row.data('value')){var self=this,findRelatedName=app.data.createBeanCollection(fieldDef.module);findRelatedName.fetch({fields:[fieldDef.rname],params:{filter:[{'id':$row.data('value')}]},complete:function(){if(!self.disposed){if(findRelatedName.first()){model.set(fieldName,findRelatedName.first().get(fieldDef.rname),{silent:true});}
if(!field.disposed){self._renderField(field,fieldContainer);}}}});}else{this._renderField(field,fieldContainer);}}
this.listenTo(model,"change",function(){this._updateFilterData($row);this.fireSearch();});var modelValue=model.get(fieldDef.id_name||fieldName);if(!_.isEmpty(modelValue)&&modelValue!==$row.data('value')){model.trigger('change');}},_updateFilterData:function($row){var data=$row.data(),field=data['valueField'],name=data['name'],valueForFilter;if(this.fieldList[name]&&this.fieldList[name].id_name){name=this.fieldList[name].id_name;}
if(_.isArray(field)){valueForFilter=[];_.each(field,function(field){var value=!field.disposed&&field.model.has(field.name)?field.model.get(field.name):'';value=$row.data('isDate')?(app.date.stripIsoTimeDelimterAndTZ(value)||''):value;valueForFilter.push(value);});}else{var value=!field.disposed&&field.model.has(name)?field.model.get(name):'';valueForFilter=$row.data('isDate')?(app.date.stripIsoTimeDelimterAndTZ(value)||''):value;}
$row.data("value",valueForFilter);},fireSearch:_.debounce(function(){var filterDef=this.buildFilterDef(true),filterTemplate=this.buildFilterDef(),defHasChanged=!_.isEqual(this.lastFilterDef,filterDef),templateHasChanged=!_.isEqual(this.lastFilterTemplate,filterTemplate);if(defHasChanged||templateHasChanged){this.saveFilterEditState(filterDef,filterTemplate);this.lastFilterDef=filterDef;this.lastFilterTemplate=filterTemplate;this.layout.trigger('filter:toggle:savestate',true);}
if(!defHasChanged){return;}
if(this.context.get('applyFilter')!==false){this.layout.trigger('filter:apply',null,filterDef);}},400),saveFilterEditState:function(filterDef,templateDef){if(!this.context.editingFilter){return;}
this.context.editingFilter.set({'filter_definition':filterDef||this.buildFilterDef(true),'filter_template':templateDef||this.buildFilterDef()});var filter=this.context.editingFilter.toJSON();if(this.layout.getComponent('filter-actions')&&this.layout.getComponent('filter-actions').$('input').length===1){filter.name=this.layout.getComponent('filter-actions').getFilterName();}
this.layout.getComponent('filter').saveFilterEditState(filter);},buildFilterDef:function(onlyValidRows){var $rows=this.$('[data-filter=row]'),filter=[];_.each($rows,function(row){var rowFilter=this.buildRowFilterDef($(row),onlyValidRows);if(rowFilter){filter.push(rowFilter);}},this);return filter;},buildRowFilterDef:function($row,onlyIfValid){var data=$row.data();if(onlyIfValid&&!this.validateRow($row)){return;}
var operator=data['operator'],value=data['value']||'',name=data['id_name']||data['name'],filter={};if(_.isEmpty(name)){return;}
if(data.isPredefinedFilter||!this.fieldList){filter[name]='';return filter;}else{if(this.fieldList[name]&&_.has(this.fieldList[name],'dbFields')){var subfilters=[];_.each(this.fieldList[name].dbFields,function(dbField){var filter={};filter[dbField]={};filter[dbField][operator]=value;subfilters.push(filter);});filter['$or']=subfilters;}else{if(operator==='$equals'){filter[name]=value;}else if(data.isDateRange){filter[name]={};filter[name].$dateRange=operator;}else if(operator==='$in'||operator==='$not_in'){filter[name]={};if(_.isArray(value)){filter[name][operator]=value;}else if(!_.isEmpty(value)){filter[name][operator]=(value+'').split(',');}else{filter[name][operator]=[];}}else{filter[name]={};filter[name][operator]=value;}}
return filter;}},resetFilterValues:function(){var $rows=this.$('[data-filter=row]');_.each($rows,function(row){var $row=$(row);var valueField=$row.data('valueField');if(!valueField||valueField.disposed){return;}
if(!_.isArray(valueField)){valueField.model.clear();return;}
_.each(valueField,function(field){field.model.clear();});});},_disposeRowFields:function($row,opts){var data=$row.data(),model;if(_.isObject(data)&&_.isArray(opts)){_.each(opts,function(val){if(data[val.field]){var fields=_.isArray(data[val.field])?data[val.field]:[data[val.field]];data[val.value]='';_.each(fields,function(field){model=field.model;if(val.field==="valueField"&&model){model.clear({silent:true});this.stopListening(model);}
field.dispose();field=null;},this);return;}
if(data.isDateRange&&val.value==='value'){data.value='';}},this);}
data.isDate=false;data.isDateRange=false;data.isPredefinedFilter=false;$row.data(data);this.fireSearch();}}) },
"filtered-list": {"controller": /*
     * Your installation or use of this SugarCRM file is subject to the applicable
     * terms available at
     * http://support.sugarcrm.com/06_Customer_Center/10_Master_Subscription_Agreements/.
     * If you do not agree to all of the applicable terms or do not have the
     * authority to bind the entity as an authorized representative, then do not
     * install or use this SugarCRM file.
     *
     * Copyright (C) SugarCRM Inc. All rights reserved.
     */
({
	// Filtered-list View (base) 
extendsFrom:'ListView',filteredCollection:[],searchTerm:'',_patternToReg:{startsWith:'^(term)',endsWith:'(term)$',contains:'(term)'},_initFilter:function(){var filter=this._filter||_.chain(this.getFields()).filter(function(field){return field.filter;}).map(function(field){return{name:field.name,label:app.lang.get(field.label,this.module),filter:field.filter};},this).value();this.context.trigger('filteredlist:filter:set',_.pluck(filter,'label'));if(_.isEmpty(filter)){return;}
this._filter=filter;},filterCollection:function(){var term=this.searchTerm,filter=this._filter;if(!_.isEmpty(term)&&_.isString(term)){this.filteredCollection=this.collection.filter(function(model){return _.some(filter,function(params){var pattern=this._patternToReg[params.filter].replace('term',term),tester=new RegExp(pattern,'i');return tester.test(model.get(params.name));},this);},this);}},setSearchTerm:function(term){this.searchTerm=term;this._renderData();},setOrderBy:function(event){this._super('setOrderBy',[event]);this.collection.comparator=function(model){return model.get(this.orderBy.field);};if(this.orderBy.direction==='desc'){this.collection.sort({silent:true});this.collection.models.reverse();this.collection.trigger('sort',this.collection);}else{this.collection.sort();}},bindDataChange:function(){this.on('render',this._initFilter,this);if(this.collection){this.collection.on('reset sort',this._renderData,this);}
this.context.on('filteredlist:search:fired',this.setSearchTerm,this);},_renderData:function(){this.filteredCollection=this.collection.models;this.filterCollection();this.render();}}) },
"filtered-search": {"controller": /*
     * Your installation or use of this SugarCRM file is subject to the applicable
     * terms available at
     * http://support.sugarcrm.com/06_Customer_Center/10_Master_Subscription_Agreements/.
     * If you do not agree to all of the applicable terms or do not have the
     * authority to bind the entity as an authorized representative, then do not
     * install or use this SugarCRM file.
     *
     * Copyright (C) SugarCRM Inc. All rights reserved.
     */
({
	// Filtered-search View (base) 
events:{'keyup [data-searchfield]':'searchFired'},bindDataChange:function(){this.context.on('filteredlist:filter:set',this.setFilter,this);},setFilter:function(filter){var label=app.lang.get('LBL_SEARCH_BY')+' '+filter.join(', ')+'...';this.$('[data-searchfield]').attr('placeholder',label);},searchFired:_.debounce(function(evt){var value=$(evt.currentTarget).val();this.context.trigger('filteredlist:search:fired',value);},100)}) },
"find-duplicates-headerpane": {"controller": /*
     * Your installation or use of this SugarCRM file is subject to the applicable
     * terms available at
     * http://support.sugarcrm.com/06_Customer_Center/10_Master_Subscription_Agreements/.
     * If you do not agree to all of the applicable terms or do not have the
     * authority to bind the entity as an authorized representative, then do not
     * install or use this SugarCRM file.
     *
     * Copyright (C) SugarCRM Inc. All rights reserved.
     */
({
	// Find-duplicates-headerpane View (base) 
extendsFrom:'HeaderpaneView',events:{'click a[name=cancel_button]':'cancel','click a[name=merge_duplicates_button]:not(".disabled")':'mergeDuplicatesClicked'},plugins:['MergeDuplicates'],bindDataChange:function(){this._super("bindDataChange");this.on('mergeduplicates:complete',this.mergeComplete,this);this.context.on('change:mass_collection',this.addMassCollectionListener,this);},unbindData:function(){var massCollection=this.context.get('mass_collection');if(massCollection){massCollection.off(null,null,this);}
app.view.View.prototype.unbindData.call(this);},addMassCollectionListener:function(){var massCollection=this.context.get('mass_collection');massCollection.on('add remove reset',this.toggleMergeButton,this);},toggleMergeButton:function(){var disabled;if(this.context.get('mass_collection').length>0){disabled=false;}else{disabled=true;}
this.$("[name='merge_duplicates_button']").toggleClass('disabled',disabled);},cancel:function(){app.drawer.close();},mergeComplete:function(primaryRecord){app.drawer.closeImmediately(true,primaryRecord);},mergeDuplicatesClicked:function(){this.mergeDuplicates(this.context.get('mass_collection'),this.collection.dupeCheckModel);}}) },
"flex-list": {"controller": /*
     * Your installation or use of this SugarCRM file is subject to the applicable
     * terms available at
     * http://support.sugarcrm.com/06_Customer_Center/10_Master_Subscription_Agreements/.
     * If you do not agree to all of the applicable terms or do not have the
     * authority to bind the entity as an authorized representative, then do not
     * install or use this SugarCRM file.
     *
     * Copyright (C) SugarCRM Inc. All rights reserved.
     */
({
	// Flex-list View (base) 
extendsFrom:'ListView',className:'flex-list-view',_previewed:null,_allListViewsFieldListKey:null,_thisListViewFieldListKey:null,initialize:function(options){this.plugins=_.union(this.plugins,['Tooltip']);this._super('initialize',[options]);this.leftColumns=[];this.rightColumns=[];this.addActions();this.template=app.template.getView('flex-list');this.events=_.clone(this.events);this._allListViewsFieldListKey=app.user.lastState.buildKey('field-list','list-views',this.module);this._thisListViewFieldListKey=app.user.lastState.key('visible-fields',this);this._fields=this.parseFields();this.addPreviewEvents();this.resize=_.bind(_.debounce(this.resize,200),this);this.bindResize();if(this.rightColumns.length){this.events=_.extend({},this.events,{'hidden.bs.dropdown .flex-list-view .actions':'resetDropdownDelegate','shown.bs.dropdown .flex-list-view .actions':'delegateDropdown'});}
this.on('list:reorder:columns',this.reorderCatalog,this);this.on('list:toggle:column',this.saveCurrentState,this);this.on('list:save:laststate',this.saveCurrentState,this);},resetDropdownDelegate:function(e){var $b=this.$(e.currentTarget).first();$b.parent('.list').removeClass('open');$b.off('resetDropdownDelegate.right-actions');},delegateDropdown:function(e){var $buttonGroup=this.$(e.currentTarget).first(),windowHeight=$(window).height()-65;var needsDropupClass=function($b){var menuHeight=$b.height()+$b.children('ul').first().height();return(windowHeight<$b.offset().top+menuHeight);};$buttonGroup.parent('.list').addClass('open');$buttonGroup.toggleClass('dropup',needsDropupClass($buttonGroup));$buttonGroup.on('resetDropdownDelegate.right-actions',this.resetDropdownDelegate);$buttonGroup.parents('.main-pane').on('scroll.right-actions',_.bind(_.debounce(function(){$buttonGroup.toggleClass('dropup',needsDropupClass($buttonGroup));},30),this));},addPreviewEvents:function(){this.context.on("list:preview:fire",function(model){app.events.trigger("preview:render",model,this.collection,true);},this);app.events.on("list:preview:decorate",this.decorateRow,this);if(this.layout){this.layout.on("list:sort:fire",function(){app.events.trigger("preview:close");},this);this.layout.on("list:paginate:success",function(){app.events.trigger("preview:collection:change",this.collection);if(this._previewed){this.decorateRow(this._previewed);}},this);}},parseFields:function(){var fields=_.flatten(_.pluck(this.meta.panels,'fields'));var catalog=this._createCatalog(fields);this._thisListViewFieldList=this._getFieldsLastState();if(this._thisListViewFieldList){catalog=this._toggleFields(catalog,this._thisListViewFieldList,false);catalog=this.reorderCatalog(catalog,this._thisListViewFieldList.position,false);}
return catalog;},_getFieldsLastState:function(){if(!this._thisListViewFieldListKey){return;}
var data=app.user.lastState.get(this._thisListViewFieldListKey);if(_.isUndefined(data)){return;}
if(!_.isArray(data)||_.isEmpty(data)){app.logger.error('The format of "'+this._thisListViewFieldListKey+'" is unexpected, skipping.');return;}
if(_.isString(data[0])){return this._convertFromOldFormat(data);}
return this._decodeCacheData(data);},_createCatalog:function(fields){var catalog={};catalog._byId={};catalog.visible=[];catalog.all=[];_.each(fields,function(fieldMeta,i){catalog._byId[fieldMeta.name]=this._patchField(fieldMeta,i);},this);catalog.all=_.toArray(catalog._byId);catalog.visible=_.where(catalog.all,{selected:true});return catalog;},_patchField:function(fieldMeta,index){var isVisible=(fieldMeta['default']!==false);return _.extend({selected:isVisible,position:index+1},fieldMeta);},_toggleFields:function(catalog,fields,saveLastState){if(_.isEmpty(fields)||(_.isEmpty(fields.visible)&&_.isEmpty(fields.hidden))){return catalog;}
saveLastState=_.isUndefined(saveLastState)?true:saveLastState;_.each(fields.visible,function(fieldName){var f=catalog._byId[fieldName];if(f){f.selected=true;}},this);_.each(fields.hidden,function(fieldName){var f=catalog._byId[fieldName];if(f){f.selected=false;}},this);catalog.all=_.sortBy(_.toArray(catalog._byId),function(f){return f.position;});catalog.visible=_.where(catalog.all,{selected:true});if(saveLastState){this.trigger('list:save:laststate');}
return catalog;},reorderCatalog:function(catalog,order,saveLastState){saveLastState=_.isUndefined(saveLastState)?true:saveLastState;order=_.union(order,_.pluck(catalog.all,'name'));_.each(order,function(fieldName,i){var f=catalog._byId[fieldName];if(f){f.position=++i;}});catalog.all=_.sortBy(_.toArray(catalog._byId),function(f){return f.position;});catalog.visible=_.where(catalog.all,{selected:true});if(saveLastState){this.trigger('list:save:laststate');}
return catalog;},_decodeCacheData:function(encodedData){var decodedData={visible:[],hidden:[],position:[]};var fieldList=this._appendFieldsToAllListViewsFieldList();_.each(encodedData,function(fieldArray,i){if(!_.isArray(fieldArray)){return;}
var name=fieldList[i];if(fieldArray[0]){decodedData.visible.push(name);}else{decodedData.hidden.push(name);}
decodedData.position[fieldArray[1]]=name;});decodedData.position=_.difference(decodedData.position,[undefined]);return decodedData;},_encodeCacheData:function(decodedData){var encodedData=[];var fieldList=this._appendFieldsToAllListViewsFieldList();_.each(fieldList,function(fieldName){var value=0;if(_.contains(decodedData.position,fieldName)){value=[_.contains(decodedData.visible,fieldName)?1:0,_.indexOf(decodedData.position,fieldName)+1];}
encodedData.push(value);});return encodedData;},_appendFieldsToAllListViewsFieldList:function(){this._allListViewsFieldList=app.user.lastState.get(this._allListViewsFieldListKey)||[];var obj={};_.each(this._allListViewsFieldList,function(fieldName){obj[fieldName]=fieldName;});_.each(this.meta.panels,function(panel){_.each(panel.fields,function(fieldMeta,i){obj[fieldMeta.name]=fieldMeta.name;},this);},this);this._allListViewsFieldList=_.keys(obj);app.user.lastState.set(this._allListViewsFieldListKey,this._allListViewsFieldList);return this._allListViewsFieldList;},_convertFromOldFormat:function(visibleFieldList){var thisViewFieldList=_.reduce(_.map(this.meta.panels,function(panel){return _.pluck(panel.fields,'name');}),function(memo,field){return memo.concat(field);},[]);var decoded={visible:[],hidden:[],position:[]};_.each(thisViewFieldList,function(fieldName,i){if(_.contains(visibleFieldList,fieldName)){decoded.visible.push(fieldName);}else{decoded.hidden.push(fieldName);}
decoded.position.push(fieldName);});app.user.lastState.set(this._thisListViewFieldListKey,this._encodeCacheData(decoded));return decoded;},saveCurrentState:function(){if(!this._thisListViewFieldListKey){return;}
var allFields=_.pluck(this._fields.all,'name'),visibleFields=_.pluck(this._fields.visible,'name');var decoded={visible:visibleFields,hidden:_.difference(allFields,visibleFields),position:allFields};app.user.lastState.set(this._thisListViewFieldListKey,this._encodeCacheData(decoded));},addActions:function(){var meta=this.meta;if(_.isObject(meta.selection)){this.isLinkAction=meta.selection.isLinkAction;switch(meta.selection.type){case'single':this.addSingleSelectionAction();break;case'multi':this.addMultiSelectionAction();break;default:break;}}
if(meta&&_.isObject(meta.rowactions)){this.addRowActions();}},addSingleSelectionAction:function(){var _generateMeta=function(name,label){return{'type':'selection','name':name,'sortable':false,'label':label||''};};var def=this.meta.selection;this.leftColumns.push(_generateMeta(def.name||this.module+'_select',def.label));},addMultiSelectionAction:function(){var _generateMeta=function(buttons,disableSelectAllAlert,isLinkAction){return{'type':'fieldset','fields':[{'type':'actionmenu','buttons':buttons||[],'disable_select_all_alert':!!disableSelectAllAlert,'isLinkAction':!!isLinkAction}],'value':false,'sortable':false};};var buttons=this.meta.selection.actions,disableSelectAllAlert=!!this.meta.selection.disable_select_all_alert,isLinkAction=!!this.meta.selection.isLinkAction;this.leftColumns.push(_generateMeta(buttons,disableSelectAllAlert,isLinkAction));},addRowActions:function(){var _generateMeta=function(label,css_class,buttons){return{'type':'fieldset','fields':[{'type':'rowactions','label':label||'','css_class':css_class,'buttons':buttons||[]}],'value':false,'sortable':false};};var def=this.meta.rowactions;this.rightColumns.push(_generateMeta(def.label,def.css_class,def.actions));},decorateRow:function(model){if(_.isUndefined(app.drawer)||app.drawer.isActive(this.$el)){this._previewed=model;this.$("tr.highlighted").removeClass("highlighted current above below");if(model){var rowName=model.module+"_"+model.get("id");var curr=this.$("tr[name='"+rowName+"']");curr.addClass("current highlighted");curr.prev("tr").addClass("highlighted above");curr.next("tr").addClass("highlighted below");}}},_renderHtml:function(){this.colSpan=this._fields.visible.length||0;if(this.leftColumns.length){this.colSpan++;}
if(this.rightColumns.length){this.colSpan++;}
if(this.colSpan<2){this.colSpan=null;}
this._super('_renderHtml');if(this.leftColumns.length){this.$el.addClass('left-actions');}
if(this.rightColumns.length){this.$el.addClass('right-actions');}
this.resize();},_render:function(){this._super('_render');if(this.closestComponent('sidebar')&&!(app.drawer.count())){this._setHelperScrollBar();}},_setHelperScrollBar:function(){this.$helper=this.$('[data-scroll-spy]');if(this.$helper.length===0){return;}
this.$spy=this.$('.'+this.$helper.data('scrollSpy'));this.$helper.find('div').width(this.$spy.get(0).scrollWidth);this._updateHelperWidth();this.listenTo(this.closestComponent('sidebar'),'sidebar:toggle',_.bind(this._updateHelperWidth,this));this.$helper.on('scroll.'+this.cid,_.bind(function(){this.$spy.scrollLeft(this.$helper.scrollLeft());},this));this.$spy.on('scroll.'+this.cid,_.bind(function(){this.$helper.scrollLeft(this.$spy.scrollLeft());},this));$('#content').on('scroll.'+this.cid,_.bind(function(){this._toggleScrollHelper();},this));$('.main-pane').on('scroll.'+this.cid,_.bind(function(){this._toggleScrollHelper();},this));},_toggleScrollHelper:function(){if(this.$spy.get(0).scrollWidth<=this.$spy.width()||this.$('tbody').offset().top+this.$helper.height()>$('footer').offset().top){this.$helper.toggle(false);return;}
this.$helper.toggle(!(this.$('.scrollbar-landmark').offset().top<$('footer').offset().top));if(this.$helper.css('display')!=='none'){this.$helper.scrollLeft(this.$spy.scrollLeft());}},_updateHelperWidth:function(){if(this.$helper.length===0){return;}
this.$helper.toggleClass('dash-collapsed',!$('.side.sidebar-content').is(':visible'));},unbind:function(){$('#content, .main-pane').off('scroll.'+this.cid);$(this).parents('.main-pane').off('scroll.right-actions');this.$('.flex-list-view .actions').trigger('resetDropdownDelegate.right-actions');$(window).off('resize.flexlist-'+this.cid);if(this.$helper){this.$helper.off('scroll.'+this.cid);}
if(this.$spy){this.$spy.off('scroll.'+this.cid);}
this._super('unbind');},bindResize:function(){$(window).on("resize.flexlist-"+this.cid,_.bind(this.resize,this));},resize:function(){if(this.disposed){return;}
var $content=this.$('.flex-list-view-content');if(!$content.length){return;}
var toggle=$content.get(0).scrollWidth>$content.width()+1;this.$el.toggleClass('scroll-width',toggle);if(this.$helper&&this.$helper.length>0){this.$helper.find('div').width(this.$spy.get(0).scrollWidth);this.$helper.scrollLeft(this.$spy.scrollLeft());this._toggleScrollHelper();}}}) },
"footer-actions": {"controller": /*
     * Your installation or use of this SugarCRM file is subject to the applicable
     * terms available at
     * http://support.sugarcrm.com/06_Customer_Center/10_Master_Subscription_Agreements/.
     * If you do not agree to all of the applicable terms or do not have the
     * authority to bind the entity as an authorized representative, then do not
     * install or use this SugarCRM file.
     *
     * Copyright (C) SugarCRM Inc. All rights reserved.
     */
({
	// Footer-actions View (base) 
events:{'click [data-action=shortcuts]':'shortcuts','click [data-action=tour]':'showTutorialClick','click [data-action=feedback]':'feedback','click [data-action=support]':'support','click [data-action=help]':'help'},tagName:'span',layoutName:'',watchingForDashboard:false,helpBtnDisabledLayouts:['about','first-login-wizard'],handleViewChange:function(layout,params){var module=params&&params.module?params.module:null;this.layoutName=_.isObject(layout)?layout.name:layout;this.disableHelpButton(true);if(app.tutorial.hasTutorial(this.layoutName,module)){this.enableTourButton();if(params.module==='Home'&&params.layout==='record'&&params.action==='detail'){var serverInfo=app.metadata.getServerInfo(),currentKeyValue=serverInfo.build+'-'+serverInfo.flavor+'-'+serverInfo.version,lastStateKey=app.user.lastState.key('toggle-show-tutorial',this),lastKeyValue=app.user.lastState.get(lastStateKey);if(currentKeyValue!==lastKeyValue){app.user.lastState.set(lastStateKey,currentKeyValue);this.showTutorial({showTooltip:true});}}}else{this.disableTourButton();}},handleRouteChange:function(route,params){this.routeParams={'route':route,'params':params};},enableTourButton:function(){this.$('[data-action=tour]').removeClass('disabled');this.events['click [data-action=tour]']='showTutorialClick';this.undelegateEvents();this.delegateEvents();},disableTourButton:function(){this.$('[data-action=tour]').addClass('disabled');delete this.events['click [data-action=tour]'];this.undelegateEvents();this.delegateEvents();},initialize:function(options){app.view.View.prototype.initialize.call(this,options);app.events.on('app:view:change',this.handleViewChange,this);var self=this;app.utils.doWhen(function(){return!_.isUndefined(app.router);},function(){self.listenTo(app.router,'route',self.handleRouteChange);});app.events.on('app:help:shown',function(){this.toggleHelpButton(true);this.disableHelpButton(false);},this);app.events.on('app:help:hidden',function(){this.toggleHelpButton(false);this.disableHelpButton(true);},this);app.events.on('alert:cancel:clicked',function(){this.disableHelpButton(this.shouldHelpBeDisabled());},this);this._watchForDashboard();app.shortcuts.register(app.shortcuts.GLOBAL+'Help','?',this.shortcuts,this);app.user.lastState.preserve(app.user.lastState.key('toggle-show-tutorial',this));},_watchForDashboard:function(){if(this.watchingForDashboard===false){this.watchingForDashboard=true;app.utils.doWhen(function(){var layout=app.controller.layout;if(!_.isUndefined(layout)){if(layout.module=='Home'||layout.name==='bwc'){return true;}else{var sidebar=layout.getComponent('sidebar');if(sidebar){var dashboard=sidebar.getComponent('dashboard-pane');if(dashboard){return(dashboard.$('.dashlets').length>0||dashboard.$('.container-fluid').length==1);}}}}
return false;},_.bind(function(){this.watchingForDashboard=false;this.disableHelpButton(false);},this));}},shouldHelpBeDisabled:function(){return(_.indexOf(this.helpBtnDisabledLayouts,this.layoutName)!==-1);},_renderHtml:function(){this.isAuthenticated=app.api.isAuthenticated();app.view.View.prototype._renderHtml.call(this);},feedback:function(){window.open('http://www.sugarcrm.com/sugar7survey','_blank');},support:function(){window.open('http://support.sugarcrm.com','_blank');},help:function(event){if(this.layoutName==='bwc'||this.layoutName==='about'){this.bwcHelpClicked();}else{var button=$(event.currentTarget),buttonDisabled=button.hasClass('disabled'),buttonAppEvent=button.hasClass('active')?'app:help:hide':'app:help:show';if(!buttonDisabled){button.addClass('disabled');app.events.trigger(buttonAppEvent);}}},disableHelpButton:function(disable){disable=_.isUndefined(disable)?true:disable;var button=this.$('[data-action=help]');if(button){button.toggleClass('disabled',disable);}
if(disable){this._watchForDashboard();}
return disable;},toggleHelpButton:function(active,button){if(_.isUndefined(button)){button=this.$('[data-action=help]');}
if(button){button.toggleClass('active',active);}},shortcuts:function(event){var activeDrawerLayout=app.drawer.getActiveDrawerLayout();if(activeDrawerLayout.type!=='shortcuts'){app.drawer.open({layout:'shortcuts'});}},showTutorialClick:function(e){this.showTutorial();},showTutorial:function(prefs){app.tutorial.resetPrefs(prefs);app.tutorial.show(app.controller.context.get('layout'),{module:app.controller.context.get('module')});},bwcHelpClicked:function(){var serverInfo=app.metadata.getServerInfo(),lang=app.lang.getLanguage(),module=app.controller.context.get('module'),route=this.routeParams.route,url='http://www.sugarcrm.com/crm/product_doc.php?edition='+serverInfo.flavor+'&version='+serverInfo.version+'&lang='+lang+'&module='+module+'&route='+route;if(route=='bwc'){var action=window.location.hash.match(/#bwc.*action=(\w*)/i);if(action&&!_.isUndefined(action[1])){url+='&action='+action[1];}}
app.logger.info("help URL: "+url);window.open(url);}}) },
"forecast-pareto": {"controller": /*
     * Your installation or use of this SugarCRM file is subject to the applicable
     * terms available at
     * http://support.sugarcrm.com/06_Customer_Center/10_Master_Subscription_Agreements/.
     * If you do not agree to all of the applicable terms or do not have the
     * authority to bind the entity as an authorized representative, then do not
     * install or use this SugarCRM file.
     *
     * Copyright (C) SugarCRM Inc. All rights reserved.
     */
({
	// Forecast-pareto View (base) 
plugins:['Dashlet','Tooltip'],className:'forecasts-chart-wrapper',displayTimeperiodPivot:true,isManager:false,isTopLevelManager:false,validChangedFields:['amount','likely_case','best_case','worst_case','assigned_user_id','date_closed','date_closed_timestamp','probability','commit_stage','sales_stage'],initOptions:null,forecastsNotSetUpMsg:undefined,initialize:function(options){this.isManager=app.user.get('is_manager');this._initPlugins();if(this.isManager){this.isTopLevelManager=app.user.get('is_top_level_manager');}
this.initOptions=options;this.forecastConfig=app.metadata.getModule('Forecasts','config');this.isForecastSetup=this.forecastConfig.is_setup;this.forecastsConfigOK=app.utils.checkForecastConfig();if(this.isForecastSetup&&this.forecastsConfigOK){this.initOptions.meta.template=undefined;if(!options.meta.config){app.api.call('GET',app.api.buildURL('Forecasts/init'),null,{success:_.bind(this.forecastInitCallback,this),complete:this.initOptions?this.initOptions.complete:null});}
this.displayTimeperiodPivot=(options.context.get('module')==='Home');}else{this.initOptions.meta.template='forecast-pareto.no-access';var isAdmin=_.isUndefined(app.user.getAcls()['Forecasts'].admin);this.forecastsNotSetUpMsg=app.utils.getForecastNotSetUpMessage(isAdmin);}
app.view.View.prototype.initialize.call(this,this.initOptions);},getLabel:function(){return app.lang.get(this.meta.label);},initDashlet:function(){if(!this.isManager&&this.meta.config){this.meta.panels=_.chain(this.meta.panels).filter(function(panel){panel.fields=_.without(panel.fields,_.findWhere(panel.fields,{name:'visibility'}));return panel;}).value();}
if(this.isForecastSetup&&this.forecastsConfigOK){this.settings.module='Forecasts';}
var fieldOptions=app.lang.getAppListStrings(this.dashletConfig.dataset.options),cfg=app.metadata.getModule('Forecasts','config');this.dashletConfig.dataset.options={};if(cfg.show_worksheet_worst&&app.acl.hasAccess('view','ForecastWorksheets',app.user.get('id'),'worst_case')){this.dashletConfig.dataset.options['worst']=fieldOptions['worst'];}
if(cfg.show_worksheet_likely){this.dashletConfig.dataset.options['likely']=fieldOptions['likely'];}
if(cfg.show_worksheet_best&&app.acl.hasAccess('view','ForecastWorksheets',app.user.get('id'),'best_case')){this.dashletConfig.dataset.options['best']=fieldOptions['best'];}},forecastInitCallback:function(initData){if(this.disposed){return;}
var defaultOptions={user_id:app.user.get('id'),display_manager:this.isDisplayManager(),show_target_quota:(this.isManager&&!this.isTopLevelManager),selectedTimePeriod:initData.defaultSelections.timeperiod_id.id,timeperiod_id:initData.defaultSelections.timeperiod_id.id,timeperiod_label:initData.defaultSelections.timeperiod_id.label,dataset:initData.defaultSelections.dataset,group_by:initData.defaultSelections.group_by,ranges:_.keys(app.lang.getAppListStrings(this.forecastConfig.buckets_dom))};var model=this._getNonForecastModel();if(model&&!this.displayTimeperiodPivot&&model.has('date_closed_timestamp')&&model.get('date_closed_timestamp')!=0){defaultOptions.timeperiod_id=model.get('date_closed_timestamp');}else{this.layout.setTitle(this.getLabel()+' '+defaultOptions.timeperiod_label);}
this.settings.set(defaultOptions);},loadData:function(options){if(options&&_.isFunction(options.complete)){options.complete();}},_render:function(){this.settings.set('display_manager',this.isDisplayManager());this._super("_render");var chartField=this.getField('paretoChart');if(!_.isUndefined(chartField)){chartField.renderChart();chartField.once('chart:pareto:rendered',function(){this.addRowToChart();},this);}},toggleRepOptionsVisibility:function(){var mgrToggleOffset;if(this.settings.get('display_manager')===true){mgrToggleOffset=6;this.$el.find('div.groupByOptions').addClass('hide');}else{mgrToggleOffset=3;this.$el.find('div.groupByOptions').removeClass('hide');}
if(this.displayTimeperiodPivot){mgrToggleOffset=mgrToggleOffset-3;}
if(this.isManager){var el=this.$el.find('#'+this.cid+'-mgr-toggle');if(el.length>0){var classes=el.attr("class").split(" ").filter(function(item){return item.indexOf("offset")===-1?item:"";});if(mgrToggleOffset!=0){classes.push('offset'+mgrToggleOffset);}
el.attr("class",classes.join(" "));}}},visibilitySwitcher:function(event){this.settings.set({display_manager:this.isDisplayManager(),show_target_quota:(this.isDisplayManager()&&!this.isTopLevelManager)});},isDisplayManager:function(){return this.isManager?(this.getVisibility()==='group'):false;},bindDataChange:function(){var meta=this.meta||this.initOptions.meta;if(meta.config){return;}
if(_.isUndefined(this.context)){return;}
if(this.isForecastSetup&&this.forecastsConfigOK){this.on('render',function(){var chartField=this.getField('paretoChart'),dashletToolbar=this.layout.getComponent('dashlet-toolbar');if(chartField&&dashletToolbar){chartField.before('chart:pareto:render',function(){this.$("[data-action=loading]").removeClass(this.cssIconDefault).addClass(this.cssIconRefresh)},{},dashletToolbar);chartField.on('chart:pareto:rendered',function(){this.$("[data-action=loading]").removeClass(this.cssIconRefresh).addClass(this.cssIconDefault)},dashletToolbar);}},this);this.settings.on('change:title',function(model,title){this.layout.setTitle(this.getLabel()+title);},this);this.settings.on('change:display_manager',this.toggleRepOptionsVisibility,this);if(!this.displayTimeperiodPivot){this.findModelToListen();this.listenModel.on('change',this.handleDataChange,this);}else{this.settings.on('change:selectedTimePeriod',function(context,timeperiod){this.settings.set({timeperiod_id:timeperiod});},this);}}},findModelToListen:function(){this.listenModel=this._getNonForecastModel();},_getNonForecastModel:function(){if(this.model.module=='Forecasts'){return this.context.parent.get('model');}
return this.model;},handleDataChange:function(model){model=model||this._getNonForecastModel();var changed=model.changed,changedField=_.keys(changed),validChangedFields=_.intersection(this.validChangedFields,_.keys(changed)),changedCurrencyFields=_.intersection(['amount','best_case','likely_case','worst_case'],validChangedFields),assigned_user=model.get('assigned_user_id');if(!_.isEmpty(changedCurrencyFields)){_.each(changedCurrencyFields,function(field){if(parseFloat(model.get(field))==parseFloat(model.previous(field))){validChangedFields=_.without(validChangedFields,field);}});}
if(_.isEmpty(validChangedFields)){return;}
if(this.settings.get('display_manager')===false&&assigned_user==app.user.get('id')){var field=this.getField('paretoChart'),serverData=field.getServerData();if(!field.hasServerData()){return;}
if(changedField.length==1&&changedField[0]=='date_closed'){changedField.push('date_closed_timestamp');changed.date_closed_timestamp=Math.round(+app.date.parse(changed.date_closed).getTime()/ 1000);model.set('date_closed_timestamp',changed.date_closed_timestamp,{silent:true});}
if(_.contains(changedField,'date_closed_timestamp')){if(!(model.get('date_closed_timestamp')>=_.first(serverData['x-axis']).start_timestamp&&model.get('date_closed_timestamp')<=_.last(serverData['x-axis']).end_timestamp)){if(this.listenModel instanceof Backbone.Collection){if(this.listenModel.length>1){this.removeRowFromChart(model);return;}}
field.once('chart:pareto:rendered',function(){this[0].addRowToChart(this[1]);},[this,model]);this.settings.set('timeperiod_id',model.get('date_closed_timestamp'));return;}}
if(_.contains(changedField,'amount')){changed.likely=this._convertCurrencyValue(changed.amount,model.get('base_rate'));delete changed.amount;}
if(_.contains(changedField,'likely_case')){changed.likely=this._convertCurrencyValue(changed.likely_case,model.get('base_rate'));delete changed.likely_case;}
if(_.contains(changedField,'best_case')){changed.best=this._convertCurrencyValue(changed.best_case,model.get('base_rate'));delete changed.best_case;}
if(_.contains(changedField,'worst_case')){changed.worst=this._convertCurrencyValue(changed.worst_case,model.get('base_rate'));delete changed.worst_case;}
if(_.contains(changedField,'commit_stage')){changed.forecast=changed.commit_stage;delete changed.commit_stage;}
var record=_.find(serverData.data,function(record,i,list){if(model.get('id')==record.record_id){list[i]=_.extend({},record,changed);return true;}
return false;});if(_.isEmpty(record)){this.addRowToChart(model);}else{field.setServerData(serverData,_.contains(changedField,'probability'));}}else if(_.contains(changedField,'assigned_user_id')){if(assigned_user===app.user.get('id')){this.addRowToChart(model)}else{this.removeRowFromChart(model);}}},addRowToChart:function(model){model=model||this._getNonForecastModel();if(model.get('assigned_user_id')==app.user.get('id')&&!this.settings.get('display_manager')){var field=this.getField('paretoChart'),serverData=field.getServerData(),found=_.find(serverData.data,function(record){return(record.record_id==model.get('id'));}),base_rate=model.get('base_rate');if(_.isEmpty(found)){serverData.data.push({best:this._convertCurrencyValue(model.get('best_case'),base_rate),likely:this._convertCurrencyValue(model.has('amount')?model.get('amount'):model.get('likely_case'),base_rate),worst:this._convertCurrencyValue(model.get('worst_case'),base_rate),record_id:model.get('id'),date_closed_timestamp:model.get('date_closed_timestamp'),probability:model.get('probability'),sales_stage:model.get('sales_stage'),forecast:model.get('commit_stage')});field.setServerData(serverData,true);}}},_convertCurrencyValue:function(value,base_rate){return app.currency.convertWithRate(value,base_rate);},removeRowFromChart:function(model){model=model||this._getNonForecastModel();var field=this.getField('paretoChart'),serverData=field.getServerData();_.find(serverData.data,function(record,i,list){if(model.get('id')==record.record_id){list.splice(i,1);return true;}
return false;});field.setServerData(serverData,true);},unbindData:function(){var ctx=this.context.parent;if(ctx){ctx.off(null,null,this);}
if(this.listenModel)this.listenModel.off(null,null,this);if(this.context)this.context.off(null,null,this);app.view.View.prototype.unbindData.call(this);},_initPlugins:function(){if(this.isManager){this.plugins=_.union(this.plugins,['ToggleVisibility']);}
return this;}}) },
"forecastdetails": {"controller": /*
     * Your installation or use of this SugarCRM file is subject to the applicable
     * terms available at
     * http://support.sugarcrm.com/06_Customer_Center/10_Master_Subscription_Agreements/.
     * If you do not agree to all of the applicable terms or do not have the
     * authority to bind the entity as an authorized representative, then do not
     * install or use this SugarCRM file.
     *
     * Copyright (C) SugarCRM Inc. All rights reserved.
     */
({
	// Forecastdetails View (base) 
plugins:['Dashlet','EllipsisInline'],likelyTotal:0,bestTotal:0,worstTotal:0,shouldRollup:false,selectedUser:{},isForecastSetup:false,isForecastAdmin:false,subDetailsTpl:{},detailsMsgTpl:{},detailsDataSet:{},forecastConfig:{},showTimeperiod:true,forecastsConfigOK:false,serverData:{},currentModule:'',spanCSS:'',initDataLoaded:false,events:{'click #forecastsProgressDisplayOptions div.datasetOptions label.radio':'changeDisplayOptions'},oldTotals:{},quotaCollection:undefined,noDataAccessTemplate:undefined,fieldDataAccess:{},showTargetQuota:false,forecastsNotSetUpMsg:undefined,initialize:function(options){this._super('initialize',[options]);this.currentModule=app.controller.context.get("module");this.forecastConfig=app.metadata.getModule('Forecasts','config');this.isForecastSetup=this.forecastConfig.is_setup;this.forecastsConfigOK=app.utils.checkForecastConfig();this.isForecastAdmin=_.isUndefined(app.user.getAcls()['Forecasts'].admin);if(!this.isForecastSetup){this.forecastsNotSetUpMsg=app.utils.getForecastNotSetUpMessage(this.isForecastAdmin);}
if(this.isForecastSetup&&this.forecastsConfigOK){this.serverData=new Backbone.Model();var aclModule=this.forecastConfig.forecast_by,likelyFieldName=(aclModule=='RevenueLineItems')?'likely_case':'amount';this.fieldDataAccess={likely:app.acl.hasAccess('read',aclModule,app.user.get('id'),likelyFieldName),best:app.acl.hasAccess('read',aclModule,app.user.get('id'),'best_case'),worst:app.acl.hasAccess('read',aclModule,app.user.get('id'),'worst_case')};var hasAccess=(this.fieldDataAccess.likely&&this.fieldDataAccess.best&&this.fieldDataAccess.worst);if(hasAccess===false){this.noDataAccessTemplate=app.template.getField('base','noaccess')(this);}
this.resetModel();this.context.get('model').module='Forecasts';this.selectedUser=app.user.toJSON();if(this.currentModule!='Home'){this.shouldRollup=this.isManagerView();}else{this.shouldRollup=this.selectedUser.is_manager;}
this.checkShowTargetQuota();this.subDetailsTpl=app.template.getView('forecastdetails.sub-details');this.detailsMsgTpl=app.template.getView('forecastdetails.details-msg');this.detailsDataSet=this.setUpShowDetailsDataSet(this.forecastConfig);this.checkSpanCSS();}},initDashlet:function(){this.settings.module='Forecasts';},checkSpanCSS:function(){var ct=0;_.each([this.forecastConfig.show_worksheet_likely,this.forecastConfig.show_worksheet_best,this.forecastConfig.show_worksheet_worst],function(val)
{if(val){ct++;}});switch(ct){case 3:this.spanCSS='4';break;case 2:this.spanCSS='6';break;case 1:this.spanCSS='12';break;case 0:this.spanCSS='';break;}
this.model.set({spanCSS:this.spanCSS},{silent:true});},setUpShowDetailsDataSet:function(cfg){var ds=app.metadata.getStrings('app_list_strings')['forecasts_options_dataset']||[];var returnDs={};_.each(ds,function(value,key){if(cfg['show_worksheet_'+key]==1){returnDs[key]=value}},this);return returnDs;},resetModel:function(){var model={opportunities:0,closed_amount:undefined,quota_amount:undefined,target_quota_amount:undefined,deficit_amount:undefined,worst_details:undefined,likely_details:undefined,best_details:undefined,show_details_likely:this.forecastConfig.show_worksheet_likely,show_details_best:this.forecastConfig.show_worksheet_best,show_details_worst:this.forecastConfig.show_worksheet_worst,spanCSS:this.spanCSS,quota_amount_str:undefined,target_quota_amount_str:undefined,closed_amount_str:undefined,deficit_class:undefined,deficit_amount_str:undefined,isForecastSetup:this.isForecastSetup,isForecastAdmin:this.isForecastAdmin};if(this.context.get('model')){this.context.get('model').set(model)}else{this.model.set(model);}},getProjectedURL:function(){var method=this.shouldRollup?'progressManager':'progressRep',url='Forecasts/'+this.model.get('selectedTimePeriod')+'/'+method+'/'+this.selectedUser.id,params={};if(this.shouldRollup){params={target_quota:(this.showTargetQuota)?1:0};}
return app.api.buildURL(url,'create',null,params);},bindDataChange:function(){if(this.meta.config){return;}
var ctx=this.model;if(this.currentModule=='Forecasts'){ctx=this.context.parent||this.context;this.showTimeperiod=false;}else if(this.currentModule=='Home'){this.settings.on('change:selectedTimePeriod',function(model){this.updateDetailsForSelectedTimePeriod(model.get('selectedTimePeriod'));this.loadData({});},this);}
ctx.on('change:selectedTimePeriod',function(model){if(this.currentModule=='Forecasts'){this.updateDetailsForSelectedTimePeriod(model.get('selectedTimePeriod'));}
this.loadData({});},this);if(this.currentModule=='Forecasts'){this.quotaCollection=app.utils.getSubpanelCollection(ctx,'ForecastManagerWorksheets');this.quotaCollection.on('reset',this.processQuotaCollection,this);this.quotaCollection.on('change:quota',function(data){var oldQuota=(this.getOldTotalFromCollectionById(data.get('user_id')))?this.getOldTotalFromCollectionById(data.get('user_id')).quota:0,newQuota=data.get('quota'),diff=app.math.sub(data.get('quota'),oldQuota),newQuotaTotal=app.math.add(this.serverData.get('quota_amount'),diff);this.setOldTotalFromCollectionById(data.get('user_id'),{quota:newQuota});this.calculateData({quota_amount:newQuotaTotal});},this);this.processQuotaCollection();ctx.on('change:selectedUser',function(model){this.updateDetailsForSelectedUser(model.get('selectedUser'));this.loadData({});},this);ctx.on('forecasts:worksheet:totals',function(data){this.calculateData(this.mapAllTheThings(data,true),true);},this);if(!_.has(ctx.attributes,'lhsData')){ctx.set({lhsData:{quotas:this.oldTotals}});}}},unbindData:function(){var ctx;if(this.currentModule){if(this.currentModule=='Forecasts'){ctx=this.context.parent||this.context;if(this.quotaCollection){this.quotaCollection.off(null,null,this);}}else{ctx=this.model;}
if(ctx){ctx.off(null,null,this);}
if(this.currentModule=='Home'){this.settings.off(null,null,this);}}
this._super('unbindData');},loadData:function(options){if(this.meta.config||!this.forecastsConfigOK||!this.isForecastSetup){return;}
if(!this.initDataLoaded){this.getInitData(options);}
if(!_.isEmpty(this.model.get('selectedTimePeriod'))){var url=this.getProjectedURL(),cb={context:this,success:_.bind(function(options,data){if(options&&options.beforeParseData){data=options.beforeParseData(data);data.parsedData=true;}
this.handleNewDataFromServer(data)},this,options),complete:options?options.complete:null};app.api.call('read',url,null,null,cb);}},getInitData:function(options){app.api.call('GET',app.api.buildURL('TimePeriods/current'),null,{success:_.bind(function(currentTP){if(this.model){this.initDataLoaded=true;this.model.set({selectedTimePeriod:currentTP.id},{silent:true});this.settings.set({selectedTimePeriod:currentTP.id},{silent:true});this.loadData();}},this),error:_.bind(function(){},this),complete:options?options.complete:null});},processQuotaCollection:function(){var model=this.context.get('model')||this.model,newQuota=0,oldQuota=model.get('quota_amount'),quota=0;this.oldTotals.models=new Backbone.Model();_.each(this.quotaCollection.models,function(model){quota=model.get('quota');newQuota=app.math.add(newQuota,quota);this.setOldTotalFromCollectionById(model.get('user_id'),{quota:quota});},this);if(oldQuota!==newQuota){this.calculateData({quota_amount:newQuota});}},getOldTotalFromCollectionById:function(id){return this.oldTotals.models.get(id);},setOldTotalFromCollectionById:function(id,totals){this.oldTotals.models.set(id,totals);},_render:function(){this._super('_render');this.renderSubDetails();},renderSubDetails:function(){if(this.$el&&this.subDetailsTpl){var subEl=this.$el.find('.forecast-details'),model=this.context.get('model')||this.model;if(!_.isUndefined(model.get('closed_amount'))&&!_.isUndefined(model.get('quota_amount'))){subEl.html(this.subDetailsTpl(model.toJSON()));this.renderCSSChanges(model);}else{subEl.html('');}}},renderCSSChanges:function(model){model=model||this.context.get('model')||this.model;var isDeficit=model.get('is_deficit');if(isDeficit){this.$el.find('.deficitRow').addClass(this.getClassBasedOnAmount(0,1,'color'));}else{this.$el.find('.deficitRow').addClass(this.getClassBasedOnAmount(1,0,'color'));}
this.checkPropertySetCSS('worst',model);this.checkPropertySetCSS('likely',model);this.checkPropertySetCSS('best',model);},checkPropertySetCSS:function(prop,model){model=model||this.context.get('model')||this.model;if(this.forecastConfig['show_worksheet_'+prop]&&(this.shouldRollup||(!this.shouldRollup&&this.fieldDataAccess[prop]))){var css=this.getClassBasedOnAmount(app.math.add(this.serverData.get(prop),this.serverData.get('closed_amount')),model.get('quota_amount'),'background-color');this.$el.find('#forecast_details_'+prop+'_feedback').addClass(css);}},mapAllTheThings:function(data,fromModel){if(this.shouldRollup){data.likely=data.likely_adjusted||data.likely_case;data.best=data.best_adjusted||data.best_case;data.worst=data.worst_adjusted||data.worst_case;}else{if(fromModel){data.likely=data.likely_case;}else{data.likely=data.amount;}
data.best=data.best_case;data.worst=data.worst_case;data.closed_amount=data.won_amount;if(_.isUndefined(data.closed_amount)){delete data.closed_amount;}}
if(fromModel){data.worst=app.math.sub(data.worst,(data.closed_amount||0));data.likely=app.math.sub(data.likely,(data.closed_amount||0));data.best=app.math.sub(data.best,(data.closed_amount||0));}
return data;},handleNewDataFromServer:function(data){if(this.currentModule=='Forecasts'&&this.context&&this.shouldRollup){var lhsData=this.context.get('lhsData');if(!lhsData&&_.has(this.context,'parent')&&!_.isNull(this.context.parent)){lhsData=this.context.parent.get('lhsData');}
if(lhsData&&!_.isEmpty(lhsData.quotas.models.attributes)){var lhsTotal=0;_.each(lhsData.quotas.models.attributes,function(val,key){lhsTotal=app.math.add(lhsTotal,val.quota);},this);if(lhsTotal!=parseFloat(data.quota_amount)){data.quota_amount=app.math.sub(data.quota_amount,app.math.sub(data.quota_amount,lhsTotal));}}}
this.calculateData(this.mapAllTheThings(data,false));},calculateData:function(data,fromModel){fromModel=fromModel||false;this.serverData.set(data);var d=_.extend({},data,this.serverData.toJSON());this.likelyTotal=d.likely;this.bestTotal=d.best;this.worstTotal=d.worst;d.quota_amount_str=app.currency.formatAmountLocale(d.quota_amount);d.closed_amount_str=app.currency.formatAmountLocale(d.closed_amount);if(this.showTargetQuota){d.target_quota_amount_str=app.currency.formatAmountLocale(d.target_quota_amount);}else{this.serverData.unset('target_quota_amount_str');}
d.showTargetQuota=this.showTargetQuota;d.deficit_amount=Math.abs(app.math.sub(d.quota_amount,d.closed_amount));d.deficit_amount_str=app.currency.formatAmountLocale(d.deficit_amount);d.is_deficit=(parseFloat(d.quota_amount)>parseFloat(d.closed_amount));var deficitLabelKey=(d.is_deficit)?'LBL_FORECAST_DETAILS_DEFICIT':'LBL_FORECAST_DETAILS_SURPLUS';d.deficit_label=app.lang.get(deficitLabelKey,'Forecasts');d.worst_details=this.detailsMsgTpl(this.getDetailsForCase('worst',this.worstTotal,d.quota_amount,d.closed_amount,fromModel));d.likely_details=this.detailsMsgTpl(this.getDetailsForCase('likely',this.likelyTotal,d.quota_amount,d.closed_amount,fromModel));d.best_details=this.detailsMsgTpl(this.getDetailsForCase('best',this.bestTotal,d.quota_amount,d.closed_amount,fromModel));if(this.shouldRollup&&!_.isEmpty(this.selectedUser.reports_to_id)){d.quota_label=app.lang.get('LBL_QUOTA_ADJUSTED','Forecasts');}else{d.quota_label=app.lang.get('LBL_QUOTA','Forecasts');}
if(this.context||this.model){var model=this.context.get('model')||this.model;if(model){model.set(d);this.renderSubDetails();}}},getDetailsForCase:function(caseStr,caseValue,stageValue,closedAmt,fromModel){var params={},caseValueN=app.math.add(caseValue,closedAmt),stageValueN=parseFloat(stageValue),openPipeline=0,calcValue=0;params.label=app.lang.get('LBL_'+caseStr.toUpperCase(),'Forecasts');params.spanCSS=this.spanCSS;params.case=caseStr;params.shortOrExceed='&nbsp;';params.openPipeline='&nbsp;';params.feedbackLn1='';params.feedbackLn2='';var hasAccess=true;if(!this.shouldRollup&&!this.fieldDataAccess[caseStr]){hasAccess=false;}
if(hasAccess)
{if(caseValue){params.amount=app.currency.formatAmountLocale(caseValue);params.labelAmount=params.label+': '+params.amount.toString();}
if(caseValueN==0&&stageValueN==0){params.amount=app.lang.get('LBL_FORECAST_DETAILS_NO_DATA',"Forecasts");}else if(caseValueN!=0&&stageValueN!=0&&caseValueN==stageValueN){params.shortOrExceed=app.lang.get('LBL_FORECAST_DETAILS_MEETING_QUOTA',"Forecasts");}else{if(caseValueN>stageValueN){params.shortOrExceed=app.lang.get('LBL_FORECAST_DETAILS_EXCEED',"Forecasts");calcValue=app.math.sub(caseValueN,stageValueN);}else{params.shortOrExceed=app.lang.get('LBL_FORECAST_DETAILS_SHORT',"Forecasts");calcValue=app.math.sub(stageValueN,caseValueN);}
params.percent=this.getPercent(calcValue,stageValueN);params.openPipeline='('+app.currency.formatAmountLocale(calcValue)+')';}
params.feedbackLn1=params.shortOrExceed;if(params.percent){params.feedbackLn1+=' '+params.percent;}
params.feedbackLn2=params.openPipeline;}else{params.amount=this.noDataAccessTemplate;params.labelAmount=params.label+': '+app.lang.get('LBL_NO_FIELD_ACCESS');}
return params;},getAbsDifference:function(caseValue,stageValue){return app.currency.formatAmountLocale(Math.abs(stageValue-caseValue));},getClassBasedOnAmount:function(caseValue,stageValue,type){var cssClass='';caseValue=parseFloat(caseValue);stageValue=parseFloat(stageValue);if(type=='color'){if(caseValue==stageValue){}else if(caseValue>stageValue){cssClass='font-green';}else{cssClass='font-red'}}else if(type=='background-color'){if(caseValue==stageValue){cssClass='grayLight';}else if(caseValue>stageValue){cssClass='green';}else{cssClass='red';}}
return cssClass;},getPercent:function(caseValue,stageValue){var percent=0,calcValue=caseValue;if(stageValue>0&&caseValue>0){percent=(calcValue / stageValue)*100;if(percent>1){percent=Math.round(percent);}else{percent=Math.round(percent*100)/100;}}
return Math.abs(percent)+'%';},checkShowTargetQuota:function(){if(this.shouldRollup&&this.selectedUser.is_manager&&!this.selectedUser.is_top_level_manager){this.showTargetQuota=true;}else{this.showTargetQuota=false;}},isManagerView:function(){var isMgrView=false;if(this.currentModule=='Forecasts'){if(this.context&&this.context.parent&&this.context.parent.has('model')){isMgrView=this.context.parent.get('model').get('forecastType')=='Rollup';}}else if(this.selectedUser.is_manager==true&&(this.selectedUser.showOpps==undefined||this.selectedUser.showOpps===false))
{isMgrView=true;}
return isMgrView;},updateDetailsForSelectedTimePeriod:function(timePeriod){this.model.set({selectedTimePeriod:timePeriod});},updateDetailsForSelectedUser:function(selectedUser){this.selectedUser.last_name=selectedUser.last_name;this.selectedUser.first_name=selectedUser.first_name;this.selectedUser.full_name=selectedUser.full_name;this.selectedUser.id=selectedUser.id;this.selectedUser.is_manager=selectedUser.is_manager;this.selectedUser.reportees=selectedUser.reportees;this.selectedUser.showOpps=selectedUser.showOpps;this.selectedUser.user_name=selectedUser.user_name;this.selectedUser.reports_to_id=selectedUser.reports_to_id;this.selectedUser.reports_to_name=selectedUser.reports_to_name;this.selectedUser.is_top_level_manager=selectedUser.is_top_level_manager;this.shouldRollup=this.isManagerView();this.checkShowTargetQuota();this.model.set({selectedUser:selectedUser});},changeDisplayOptions:function(evt){evt.preventDefault();this.handleOptionChange(evt);},handleOptionChange:function(evt){var $el=$(evt.currentTarget),changedSegment=$el.attr('data-set');if($el.hasClass('checked')){$el.removeClass('checked');$('div .projected_'+changedSegment).hide();}else{$el.addClass('checked');$('div .projected_'+changedSegment).show();}}}) },
"forgotpassword": {"controller": /*
     * Your installation or use of this SugarCRM file is subject to the applicable
     * terms available at
     * http://support.sugarcrm.com/06_Customer_Center/10_Master_Subscription_Agreements/.
     * If you do not agree to all of the applicable terms or do not have the
     * authority to bind the entity as an authorized representative, then do not
     * install or use this SugarCRM file.
     *
     * Copyright (C) SugarCRM Inc. All rights reserved.
     */
({
	// Forgotpassword View (base) 
plugins:['ErrorDecoration'],events:{'click [name=cancel_button]':'cancel','click [name=forgotPassword_button]':'forgotPassword','change select[name=country]':'render'},_declareModel:function(meta){meta=meta||{};var fields={};_.each(_.flatten(_.pluck(meta.panels,"fields")),function(field){fields[field.name]=field;});app.data.declareModel('Forgotpassword',{fields:fields});},initialize:function(options){this._declareModel(options.meta);options.context.prepare(true);app.view.View.prototype.initialize.call(this,options);this._showResult=false;},_render:function(){if(!(app.config&&app.config.forgotpasswordON===true)){return;}
this.logoUrl=app.metadata.getLogoUrl();app.view.View.prototype._render.call(this);return this;},cancel:function(){app.router.goBack();},forgotPassword:function(){var self=this;self.model.doValidate(null,function(isValid){if(isValid){if(app.config.honeypot_on&&app.config.honeypot_on===true&&(self.$('input[name="first_name"]').val()||self.model.get('first_name')))return;app.$contentEl.hide();app.alert.show('forgotPassword',{level:'process',title:app.lang.getAppString('LBL_LOADING'),autoClose:false});var emails=self.model.get('email');var params={username:self.model.get('username')};if(emails&&emails[0]&&emails[0].email_address){params.email=emails[0].email_address;}
var url=app.api.buildURL('password/request','',{},params);app.api.call('READ',url,{},{success:function(response){self._showSuccess=true;self._showResult=true;self.resultLabel="LBL_PASSWORD_REQUEST_SENT";self.model.clear();if(!self.disposed){self.render();}},error:function(err){self._showSuccess=false;self._showResult=true;self.resultLabel=err.message||'LBL_PASSWORD_REQUEST_ERROR';if(!self.disposed){self.render();}},complete:function(){app.alert.dismiss('forgotPassword');app.$contentEl.show();}})}},self);},_backButton:[{name:'cancel_button',type:'button',label:'LBL_BACK',value:'forgotPassword',primary:false}]}) },
"globalsearch": {"controller": /*
     * Your installation or use of this SugarCRM file is subject to the applicable
     * terms available at
     * http://support.sugarcrm.com/06_Customer_Center/10_Master_Subscription_Agreements/.
     * If you do not agree to all of the applicable terms or do not have the
     * authority to bind the entity as an authorized representative, then do not
     * install or use this SugarCRM file.
     *
     * Copyright (C) SugarCRM Inc. All rights reserved.
     */
({
	// Globalsearch View (base) 
id:'searchForm',preTag:'<strong>',postTag:'</strong>',plugins:['Dropdown'],dropdownItemSelector:'[data-action="select-module"]',searchModules:[],events:{'click .typeahead a':'clearSearch','click [data-action=search]':'showResults','click [data-advanced=options]':'persistMenu','click [data-action="select-module"]':'selectModule'},initialize:function(options){app.view.View.prototype.initialize.call(this,options);app.events.on('app:sync:complete',this.populateModules,this);app.shortcuts.register(app.shortcuts.GLOBAL+'Search',['s','ctrl+alt+0'],function(){this.$('input.search-query').focus();},this);},selectModule:function(event){var module=this.$(event.currentTarget).data('module'),searchAll=this.$('input:checkbox[data-module="all"]'),searchAllLabel=searchAll.closest('label'),checkedModules=this.$('input:checkbox:checked[data-module!="all"]');if(module==='all'){searchAll.attr('checked',true);searchAllLabel.addClass('active');checkedModules.removeAttr('checked');checkedModules.closest('label').removeClass('active');}else{var currentTarget=this.$(event.currentTarget),currentTargetLabel=currentTarget.closest('label');currentTarget.attr('checked')?currentTargetLabel.addClass('active'):currentTargetLabel.removeClass('active');if(checkedModules.length){searchAll.removeAttr('checked');searchAllLabel.removeClass('active');}
else{searchAll.attr('checked',true);searchAllLabel.addClass('active');}}
event.stopPropagation();},populateModules:function(){if(this.disposed){return;}
this.searchModules=[];var modules=app.metadata.getModules()||{};this.searchModules=this.populateSearchableModules({modules:modules,acl:app.acl,checkFtsEnabled:true,checkGlobalSearchEnabled:true});this.render();},populateSearchableModules:function(options){var modules=options.modules,moduleNames=options.moduleNames||null,acl=options.acl,searchModules=[];_.each(modules,function(meta,module){var goodToAdd=true;if(moduleNames&&!_.contains(moduleNames,module)){goodToAdd=false;}
if(goodToAdd&&acl.hasAccess.call(acl,'view',module)){if(options.checkGlobalSearchEnabled&&!meta.globalSearchEnabled){goodToAdd=false;}
if(goodToAdd&&options.checkFtsEnabled&&!meta.ftsEnabled){goodToAdd=false;}
if(goodToAdd){searchModules.push(module);}}},this);return searchModules;},_renderHtml:function(){if(!app.api.isAuthenticated()||app.config.appStatus=='offline')return;app.view.View.prototype._renderHtml.call(this);var self=this,menuTemplate=app.template.getView(this.name+'.result');this.$('.search-query').searchahead({request:function(term){self.fireSearchRequest.call(self,term,this);},compiler:menuTemplate,throttleMillis:(app.config.requiredElapsed||500),throttle:function(callback,millis){if(!self.debounceFunction){self.debounceFunction=_.debounce(function(){callback();},millis||500);}
self.debounceFunction();},onEnterFn:function(hrefOrTerm,isHref){if(isHref&&this.$menu.is(':visible')){app.router.navigate(hrefOrTerm,{trigger:true});}else{var term=$.trim(self.$('.search-query').attr('value'));if(!_.isEmpty(term)){self.fireSearchRequest.call(self,term,this);}}}});this.$('.navbar-search').submit(function(){return false;});},_escapeSearchResults:function(html){var highlightedSpanRe=/<strong>.*?<\/strong>/g,higlightSpanTagsRe=/(<strong>)|(<\/strong>)/g,escape=Handlebars.Utils.escapeExpression,result=escape(html),highlightedSpan=html.match(highlightedSpanRe),highlightedContent,self=this;_.each(highlightedSpan,function(part){highlightedContent=part.replace(higlightSpanTagsRe,'');highlightedContent=escape(highlightedContent);result=result.replace(escape(part),self.preTag+highlightedContent+self.postTag);});return new Handlebars.SafeString(result);},_getSearchModuleNames:function(){if(this.$('input:checkbox[data-module="all"]').attr('checked')){return[];}
else{var searchModuleNames=[],checkedModules=this.$('input:checkbox:checked[data-module!="all"]');_.each(checkedModules,function(val,index){searchModuleNames.push(val.getAttribute('data-module'));},this);return searchModuleNames;}},fireSearchRequest:function(term,plugin){var searchModuleNames=this._getSearchModuleNames(),moduleList=searchModuleNames.join(','),self=this,maxNum=app.config&&app.config.maxSearchQueryResult?app.config.maxSearchQueryResult:5,params={q:term,fields:'name, id',module_list:moduleList,max_num:maxNum};app.api.search(params,{success:function(data){var formattedRecords=[];_.each(data.records,function(record){if(!record.id){return;}
var formattedRecord={id:record.id,name:record.name,module:record._module,link:'#'+app.router.buildRoute(record._module,record.id)};if((record._search.highlighted)){_.each(record._search.highlighted,function(val,key){var safeString=self._escapeSearchResults(val.text);if(key!=='name'){formattedRecord.field_name=app.lang.get(val.label,val.module);formattedRecord.field_value=safeString;}else{formattedRecord.name=safeString;}});}
formattedRecords.push(formattedRecord);});plugin.provide({next_offset:data.next_offset,records:formattedRecords,module_list:moduleList});},error:function(error){app.error.handleHttpError(error,plugin);app.logger.error("Failed to fetch search results in search ahead. "+error);}});},showResults:function(evt){var $searchBox=this.$('[data-provide=typeahead]');if(!$searchBox.is(':visible')){var body=$('body');this.$el.addClass('active');body.on('click.globalsearch.data-api',_.bind(function(event){if(!$.contains(this.el,event.target)){this.$el.removeClass('active');body.off('click.globalsearch.data-api');}},this));app.accessibility.run(body,'click');$searchBox.focus();return;}
var e=jQuery.Event('keyup',{keyCode:$.ui.keyCode.ENTER});$searchBox.focus();$searchBox.trigger(e);},clearSearch:function(){this.$('.search-query').val('');},persistMenu:function(e){e.stopPropagation();},unbind:function(){$('body').off('click.globalsearch.data-api');this._super('unbind');}}) },
"headerpane": {"controller": /*
     * Your installation or use of this SugarCRM file is subject to the applicable
     * terms available at
     * http://support.sugarcrm.com/06_Customer_Center/10_Master_Subscription_Agreements/.
     * If you do not agree to all of the applicable terms or do not have the
     * authority to bind the entity as an authorized representative, then do not
     * install or use this SugarCRM file.
     *
     * Copyright (C) SugarCRM Inc. All rights reserved.
     */
({
	// Headerpane View (base) 
initialize:function(options){this._super('initialize',[options]);this.meta=_.extend({},app.metadata.getView(null,'headerpane'),this.meta);this._title=this.meta.title;this.context.on('headerpane:title',function(title){this._title=title;if(!this.disposed)this.render();},this);app.shortcuts.register('Headerpane:Cancel',['esc','ctrl+alt+l'],function(){var $cancelButton=this.$('a[name=cancel_button]'),$closeButton=this.$('a[name=close]');if($cancelButton.is(':visible')&&!$cancelButton.hasClass('disabled')){$cancelButton.click();}else if($closeButton.is(':visible')&&!$closeButton.hasClass('disabled')){$closeButton.click();}},this,true);app.shortcuts.register('Headerpane:Save',['ctrl+s','ctrl+alt+a'],function(){var $saveButton=this.$('a[name=save_button]');if($saveButton.is(':visible')&&!$saveButton.hasClass('disabled')){$saveButton.click();}},this,true);},_renderHtml:function(){this.title=!_.isUndefined(this._title)?this._formatTitle(this._title):this.title;this.meta.fields=_.map(this.meta.fields,function(field){if(field.name==='title'){field['formatted_value']=this.title||this._formatTitle(field['default_value']);}
return field;},this);this._super('_renderHtml');},_formatTitle:function(title){if(!title){return'';}
return app.lang.get(title,this.module);}}) },
"help-dashlet": {"controller": /*
     * Your installation or use of this SugarCRM file is subject to the applicable
     * terms available at
     * http://support.sugarcrm.com/06_Customer_Center/10_Master_Subscription_Agreements/.
     * If you do not agree to all of the applicable terms or do not have the
     * authority to bind the entity as an authorized representative, then do not
     * install or use this SugarCRM file.
     *
     * Copyright (C) SugarCRM Inc. All rights reserved.
     */
({
	// Help-dashlet View (base) 
plugins:['Dashlet'],helpObject:undefined,initialize:function(options){this._super('initialize',[options]);var helpUrl={more_info_url:this.createMoreHelpLink(),more_info_url_close:'</a>'},ctx=this.context&&this.context.parent||this.context,layout=(this.meta.preview)?'preview':ctx.get('layout');this.helpObject=app.help.get(ctx.get('module'),layout,helpUrl);if(_.isEmpty(this.helpObject.title)){this.helpObject.title=app.lang.get(this.meta.label);}},initDashlet:function(){this.settings.set({label:this.helpObject.title});},getLabel:function(){return this.helpObject.title;},createMoreHelpLink:function(){var serverInfo=app.metadata.getServerInfo(),lang=app.lang.getLanguage(),module=app.controller.context.get('module'),route=this.context.get('layout');if(route=='records'){route='list';}
var url='http://www.sugarcrm.com/crm/product_doc.php?edition='+serverInfo.flavor
+'&version='+serverInfo.version+'&lang='+lang+'&module='+module+'&route='+route;if(route=='bwc'){var action=window.location.hash.match(/#bwc.*action=(\w*)/i);if(action&&!_.isUndefined(action[1])){url+='&action='+action[1];}}
return'<a href="'+url+'" target="_blank">';},_renderHtml:function(){this._super('_renderHtml',[this.helpObject,this.options]);}}) },
"history": {"controller": /*
     * Your installation or use of this SugarCRM file is subject to the applicable
     * terms available at
     * http://support.sugarcrm.com/06_Customer_Center/10_Master_Subscription_Agreements/.
     * If you do not agree to all of the applicable terms or do not have the
     * authority to bind the entity as an authorized representative, then do not
     * install or use this SugarCRM file.
     *
     * Copyright (C) SugarCRM Inc. All rights reserved.
     */
({
	// History View (base) 
extendsFrom:'TabbedDashletView',_defaultSettings:{filter:7,limit:10,visibility:'user'},initialize:function(options){options.meta=options.meta||{};options.meta.template='tabbed-dashlet';this._super('initialize',[options]);this.tbodyTag='ul[data-action="pagination-body"]';},_getFilters:function(index){var filterStr=app.date().subtract('days',this.settings.get('filter')).format('YYYY-MM-DD');var tab=this.tabs[index],filter={},filters=[];filter[tab.filter_applied_to]={$gte:filterStr};filters.push(filter);return filters;},bindCollectionAdd:function(model){var pictureUrl=app.api.buildFileURL({module:'Users',id:model.get('assigned_user_id'),field:'picture'});model.set('picture_url',pictureUrl);this._super('bindCollectionAdd',[model]);},_dispose:function(){this.$('.select2').select2('destroy');this._super("_dispose");},archiveEmail:function(event,params){var self=this;app.drawer.open({layout:'archive-email',context:{create:true,module:'Emails',prepopulate:{related:this.model,to_addresses:[{bean:this.model}]}}},function(model){if(model){self.layout.reloadDashlet();self.context.parent.trigger('panel-top:refresh','emails');self.context.parent.trigger('panel-top:refresh','archived_emails');}});}}) },
"history-summary": {"controller": /*
     * Your installation or use of this SugarCRM file is subject to the applicable
     * terms available at
     * http://support.sugarcrm.com/06_Customer_Center/10_Master_Subscription_Agreements/.
     * If you do not agree to all of the applicable terms or do not have the
     * authority to bind the entity as an authorized representative, then do not
     * install or use this SugarCRM file.
     *
     * Copyright (C) SugarCRM Inc. All rights reserved.
     */
({
	// History-summary View (base) 
extendsFrom:'FlexListView',activityModules:[],allActivityModules:['Calls','Emails','Meetings','Notes','Tasks'],baseModule:'',baseRecord:'',initialize:function(options){this.plugins=_.union(this.plugins,['ReorderableColumns','ListColumnEllipsis']);if(options.context.parent){this.baseModule=options.context.parent.get('module');this.baseRecord=options.context.parent.get('modelId');}
this.setActivityModulesToFetch();var HistoryCollection=app.BeanCollection.extend({module:'history',activityModules:this.activityModules,buildURL:_.bind(function(params){params=params||{};var url=app.api.serverUrl+'/'
+this.baseModule+'/'
+this.baseRecord+'/'
+'link/history';params.module_list=this.activityModules.join(',');params=$.param(params);if(params.length>0){url+='?'+params;}
return url;},this),sync:function(method,model,options){options=app.data.parseOptionsForSync(method,model,options);if(options.params.fields){delete options.params.fields;}
var url=this.buildURL(options.params),callbacks=app.data.getSyncCallbacks(method,model,options);app.api.call(method,url,options.attributes,callbacks);}});options.collection=new HistoryCollection();this._super('initialize',[options]);this.template=app.template.getView(this.meta.template);this.context.set({collection:this.collection});$('html').addClass('print-drawer');},_initOrderBy:function(){var lastStateOrderBy=app.user.lastState.get(this.orderByLastStateKey)||{},lastOrderedFieldMeta=this.getFieldMeta(lastStateOrderBy.field);if(_.isEmpty(lastOrderedFieldMeta)||!lastOrderedFieldMeta.isSortable){lastStateOrderBy={};}
return _.extend({field:'',direction:'desc'},this.meta.orderBy,lastStateOrderBy);},setActivityModulesToFetch:function(){this.activityModules=this.allActivityModules;},loadData:function(options){if(this.collection.dataFetched){return;}
this.collection.fetch(options);},_renderField:function(field){var fieldName=field.name,fieldModule=field.model.get('_module'),fieldType=field.def.type||'default';if(fieldName==='name'){field.model.module=fieldModule;}else if(fieldName==='module'){field.model.set({module:field.model.get('moduleNameSingular')});}else if(fieldName==='related_contact'){var contact,contactId;field.model.module='Contacts';switch(fieldModule){case'Emails':contact='';contactId='';break;case'Notes':case'Calls':case'Meetings':case'Tasks':contact=field.model.get('contact_name');contactId=field.model.get('contact_id');break;}
field.model.set({related_contact:contact,related_contact_id:contactId});}else if(fieldName==='status'&&fieldModule==='Emails'){var fieldStatus=field.model.get('status'),emailStatusDom=app.lang.getAppListStrings('dom_email_status');if(!_.contains(emailStatusDom,fieldStatus)){fieldStatus=emailStatusDom[fieldStatus]}
field.model.set({status:fieldStatus});}else if(fieldType==='preview-button'){field.model.module=fieldModule;}
this._super("_renderField",[field]);},_setOrderBy:function(options){if(this.orderByLastStateKey){app.user.lastState.set(this.orderByLastStateKey,this.orderBy);}
options.orderBy=this.orderBy;this.collection.dataFetched=false;this.collection.skipFetch=false;this.loadData(options);},_dispose:function(){$('html').removeClass('print-drawer');this._super('_dispose');}}) },
"history-summary-headerpane": {"controller": /*
     * Your installation or use of this SugarCRM file is subject to the applicable
     * terms available at
     * http://support.sugarcrm.com/06_Customer_Center/10_Master_Subscription_Agreements/.
     * If you do not agree to all of the applicable terms or do not have the
     * authority to bind the entity as an authorized representative, then do not
     * install or use this SugarCRM file.
     *
     * Copyright (C) SugarCRM Inc. All rights reserved.
     */
({
	// History-summary-headerpane View (base) 
extendsFrom:'HeaderpaneView',events:{'click a[name=cancel_button]':'cancel'},initialize:function(options){this._super('initialize',[options]);this.model=this.context.parent&&this.context.parent.get('model')||this.model;},_formatTitle:function(title){var parent=this._getParentModel();var recordName=this._getParentModelName();if(parent&&recordName){return app.lang.get(title,parent.module,{name:recordName});}
return title;},_getParentModel:function(){return this.context.parent.get('model');},_getParentModelName:function(){var parent=this._getParentModel();return app.utils.formatNameModel(parent.module,parent.attributes)||parent.get('name');},cancel:function(){app.drawer.close();}}) },
"history-summary-list-bottom": {"controller": /*
     * Your installation or use of this SugarCRM file is subject to the applicable
     * terms available at
     * http://support.sugarcrm.com/06_Customer_Center/10_Master_Subscription_Agreements/.
     * If you do not agree to all of the applicable terms or do not have the
     * authority to bind the entity as an authorized representative, then do not
     * install or use this SugarCRM file.
     *
     * Copyright (C) SugarCRM Inc. All rights reserved.
     */
({
	// History-summary-list-bottom View (base) 
extendsFrom:'ListBottomView',setShowMoreLabel:function(){this.showMoreLabel=app.lang.get('LBL_MORE_HISTORY');}}) },
"history-summary-preview": {"controller": /*
     * Your installation or use of this SugarCRM file is subject to the applicable
     * terms available at
     * http://support.sugarcrm.com/06_Customer_Center/10_Master_Subscription_Agreements/.
     * If you do not agree to all of the applicable terms or do not have the
     * authority to bind the entity as an authorized representative, then do not
     * install or use this SugarCRM file.
     *
     * Copyright (C) SugarCRM Inc. All rights reserved.
     */
({
	// History-summary-preview View (base) 
extendsFrom:'PreviewView',_renderPreview:function(model,collection,fetch,previewId){if(app.drawer&&!app.drawer.isActive(this.$el)){return;}
if(this.model&&model&&(this.model.get("id")===model.get("id")&&previewId===this.previewId)){app.events.trigger("list:preview:decorate",false);app.events.trigger('preview:close');return;}
if(app.metadata.getModule(model.module).isBwcEnabled){return;}
if(model){this.meta=_.extend({},app.metadata.getView(model.module,'record'),app.metadata.getView(model.module,'preview'));this.meta=this._previewifyMetadata(this.meta);}
if(fetch){var recordUrl=app.api.serverUrl+'/'+model.module+'/'+model.get('id'),callbacks={success:_.bind(function(newModel){newModel=app.data.createBean(model.module,newModel);newModel.module=model.module;this.renderPreview(newModel);},this)}
app.api.call('read',recordUrl,null,callbacks);}else{this.renderPreview(model,collection);}
this.previewId=previewId;}}) },
"history-summary-preview-header": {"controller": /*
     * Your installation or use of this SugarCRM file is subject to the applicable
     * terms available at
     * http://support.sugarcrm.com/06_Customer_Center/10_Master_Subscription_Agreements/.
     * If you do not agree to all of the applicable terms or do not have the
     * authority to bind the entity as an authorized representative, then do not
     * install or use this SugarCRM file.
     *
     * Copyright (C) SugarCRM Inc. All rights reserved.
     */
({
	// History-summary-preview-header View (base) 
extendsFrom:'PreviewHeaderView'}) },
"inactive-tasks": {"controller": /*
     * Your installation or use of this SugarCRM file is subject to the applicable
     * terms available at
     * http://support.sugarcrm.com/06_Customer_Center/10_Master_Subscription_Agreements/.
     * If you do not agree to all of the applicable terms or do not have the
     * authority to bind the entity as an authorized representative, then do not
     * install or use this SugarCRM file.
     *
     * Copyright (C) SugarCRM Inc. All rights reserved.
     */
({
	// Inactive-tasks View (base) 
extendsFrom:'TabbedDashletView',_defaultSettings:{limit:10,visibility:'user'},initialize:function(options){options.meta=options.meta||{};options.meta.template='tabbed-dashlet';this.plugins=_.union(this.plugins,['LinkedModel']);this.tbodyTag='ul[data-action="pagination-body"]';this._super('initialize',[options]);},createRecord:function(event,params){if(this.module!=='Home'){this.createRelatedRecord(params.module,params.link);}else{var self=this;app.drawer.open({layout:'create-actions',context:{create:true,module:params.module}},function(context,model){if(!model){return;}
self.context.resetLoadFlag();self.context.set('skipFetch',false);if(_.isFunction(self.loadData)){self.loadData();}else{self.context.loadData();}});}},bindCollectionAdd:function(model){var pictureUrl=app.api.buildFileURL({module:'Users',id:model.get('assigned_user_id'),field:'picture'});model.set('picture_url',pictureUrl);this._super('bindCollectionAdd',[model]);}}) },
"interactionschart": {"controller": /*
     * Your installation or use of this SugarCRM file is subject to the applicable
     * terms available at
     * http://support.sugarcrm.com/06_Customer_Center/10_Master_Subscription_Agreements/.
     * If you do not agree to all of the applicable terms or do not have the
     * authority to bind the entity as an authorized representative, then do not
     * install or use this SugarCRM file.
     *
     * Copyright (C) SugarCRM Inc. All rights reserved.
     */
({
	// Interactionschart View (base) 
plugins:['Dashlet'],events:{'click .interactions-chart':'switchChart'},legend:{},initialize:function(options){app.view.View.prototype.initialize.call(this,options);this.dataset={};this.params={list:'all',limit:0};this.legend={calls:app.lang.getAppString('LBL_CALLS'),emailsSent:app.lang.getAppString('LBL_EMAILS')+' ('+app.lang.getAppString('LBL_EMAIL_SENT')+')',emailsRecv:app.lang.getAppString('LBL_EMAILS')+' ('+app.lang.getAppString('LBL_EMAIL_RECV')+')',meetings:app.lang.getAppString('LBL_MEETINGS')};this.on("data-changed",function(){this.updateChart();},this);this.settings.on("change:filter_duration",this.changeFilter,this);},bindDataChange:function(){if(!this.meta.config){this.model.on("change",this.loadData,this);}},updateChart:function(){var self=this;nv.addGraph(function(){var canvas=self.$el.find("svg"),chart=nv.models.multiBarChart().tooltips(false).showControls(false).reduceXTicks(false).showLegend(self.params.list=="all").stacked(true).strings({legend:{close:app.lang.getAppString('LBL_CHART_LEGEND_CLOSE'),open:app.lang.getAppString('LBL_CHART_LEGEND_OPEN')},noData:app.lang.getAppString('LBL_CHART_NO_DATA')});canvas.children().remove();chart.xAxis.tickFormat(d3.format(',r'));chart.yAxis.tickFormat(d3.format(',i'));d3.select(canvas[0]).datum(self.dataset).transition().duration(500).call(chart);return chart;});},evaluateGroupResult:function(data){var self=this,users=_.chain(data).pluck('data').toArray().flatten().map(function(record){return _.pick(record,'assigned_user_id','assigned_user_name')}).uniq(function(o){return o.assigned_user_id}).sortBy(function(o){return o.assigned_user_id;}).value(),countById=_.object(_.pluck(users,'assigned_user_id'),_.map(users,function(){return 0;})),preparedData=_.chain(data).map(function(c,k){return{key:self.legend[k],type:'bar',color:self.meta.ui.colors[k],values:_.chain(c.data).countBy(function(record){return record.assigned_user_id;}).defaults(countById).map(function(count,uid){return{x:uid,y:count}}).sortBy(function(o){return o.x;}).value()};}).sortBy(function(o){return _.toArray(self.legend).indexOf(o.key);}).value(),userNames=_.map(users,function(u){return{l:u.assigned_user_name};});this.dataset={data:preparedData,properties:{labels:userNames}};},evaluatePersonalResult:function(data){var total=_.reduce(data,function(total,collection){return total+collection.count;},0),preparedData=[{type:'bar',color:this.meta.ui.colors['default'],values:[]}],labels=_.toArray(this.legend);if(total)
{_.each(this.legend,function(l,k){preparedData[0].values.push({y:parseInt(data[k].count),x:labels.indexOf(l)});});}
this.dataset={data:preparedData,properties:{labels:_.map(labels,function(label){return{l:label};})}};},loadData:function(options){var self=this,params=_.extend({"id":app.controller.context.get("model").id},this.params),url=app.api.buildURL(this.model.module,"interactions",params);var querystring=$.param(this.params);if(querystring.length>0){url+="?"+querystring;}
app.api.call("read",url,null,{success:function(data){if(self.params.list=="all"){self.evaluateGroupResult(data);}else{self.evaluatePersonalResult(data);}
self.trigger("data-changed");},complete:(options)?options.complete:null});},changeFilter:function(){this.params.filter=this.model.get("filter_duration");this.loadData();},switchChart:function(e){if(this.params.list==e.currentTarget.value)return;this.params.list=e.currentTarget.value;this.loadData();},_dispose:function(){this.model.off("change",null,this);this.on("data-changed",null,this);app.view.View.prototype._dispose.call(this);}}) },
"language-actions": {"controller": /*
     * Your installation or use of this SugarCRM file is subject to the applicable
     * terms available at
     * http://support.sugarcrm.com/06_Customer_Center/10_Master_Subscription_Agreements/.
     * If you do not agree to all of the applicable terms or do not have the
     * authority to bind the entity as an authorized representative, then do not
     * install or use this SugarCRM file.
     *
     * Copyright (C) SugarCRM Inc. All rights reserved.
     */
({
	// Language-actions View (base) 
events:{'click [data-action=languageList] .dropdown-menu a':'setLanguage'},tagName:"span",plugins:['Dropdown'],initialize:function(options){app.events.on("app:sync:complete",this.render,this);app.events.on("app:login:success",this.render,this);app.events.on("app:logout",this.render,this);app.view.View.prototype.initialize.call(this,options);$(window).on('resize',_.debounce(_.bind(this.adjustMenuHeight,this),100));},_renderHtml:function(){this.isAuthenticated=app.api.isAuthenticated();this.currentLang=app.lang.getLanguage()||"en_us";this.languageList=this.formatLanguageList();app.view.View.prototype._renderHtml.call(this);this.$('[data-toggle="dropdown"]').dropdown();this.adjustMenuHeight();},setLanguage:function(e){var $li=this.$(e.currentTarget),langKey=$li.data("lang-key");app.alert.show('language',{level:'warning',title:app.lang.getAppString('LBL_LOADING_LANGUAGE'),autoclose:false});app.lang.setLanguage(langKey,function(){app.alert.dismiss('language');});},adjustMenuHeight:function(){if(this.$('[data-action=languageList]').length===0){return;}
var linkButton=this.$('[data-action=languageList]'),dropupMenu=this.$('[data-action=languageList] .dropdown-menu.bottom-up'),linkBottomPosition=parseInt($('footer').height()-linkButton.height()-linkButton.position().top,10),dropupOffset=parseInt(dropupMenu.css('bottom'),10),borderTop=parseInt(dropupMenu.css('border-top-width'),10),menuHeight=Math.round($(window).height()-borderTop-dropupOffset-linkBottomPosition);dropupMenu.css('max-height',menuHeight);},formatLanguageList:function(){var list=[],languages=app.lang.getAppListStrings('available_language_dom');_.each(languages,function(label,key){if(key!==''){list.push({key:key,value:label});}});return list;},_dispose:function(){$(window).off('resize');app.view.View.prototype._dispose.call(this);}}) },
"learning-resources": {"controller": /*
     * Your installation or use of this SugarCRM file is subject to the applicable
     * terms available at
     * http://support.sugarcrm.com/06_Customer_Center/10_Master_Subscription_Agreements/.
     * If you do not agree to all of the applicable terms or do not have the
     * authority to bind the entity as an authorized representative, then do not
     * install or use this SugarCRM file.
     *
     * Copyright (C) SugarCRM Inc. All rights reserved.
     */
({
	// Learning-resources View (base) 
tagName:'ul',className:'resource-list',plugins:['Dashlet'],resources:{},_renderHtml:function(){this.resources=this.dashletConfig.resources;this._super('_renderHtml');}}) },
"link-moduleselect": {"controller": /*
     * Your installation or use of this SugarCRM file is subject to the applicable
     * terms available at
     * http://support.sugarcrm.com/06_Customer_Center/10_Master_Subscription_Agreements/.
     * If you do not agree to all of the applicable terms or do not have the
     * authority to bind the entity as an authorized representative, then do not
     * install or use this SugarCRM file.
     *
     * Copyright (C) SugarCRM Inc. All rights reserved.
     */
({
	// Link-moduleselect View (base) 
linkModules:[],events:{'click label[for=relationship]':'setFocus'},initialize:function(options){app.view.View.prototype.initialize.call(this,options);this.linkModules=this.context.get("linkModules");},setFocus:function(e){this.$("#relationship").select2("open");},_renderHtml:function(ctx,options){var self=this;app.view.View.prototype._renderHtml.call(this,ctx,options);this.$(".select2").select2({width:'100%',allowClear:true,placeholder:app.lang.get("LBL_SEARCH_SELECT")}).on("change",function(e){if(_.isEmpty(e.val)){self.context.trigger("link:module:select",null);}else{var meta=self.linkModules[e.val];self.context.trigger("link:module:select",{link:meta.link,module:meta.module});}});},_dispose:function(){this.$(".select2").select2('destroy');app.view.View.prototype._dispose.call(this);}}) },
"list": {"controller": /*
     * Your installation or use of this SugarCRM file is subject to the applicable
     * terms available at
     * http://support.sugarcrm.com/06_Customer_Center/10_Master_Subscription_Agreements/.
     * If you do not agree to all of the applicable terms or do not have the
     * authority to bind the entity as an authorized representative, then do not
     * install or use this SugarCRM file.
     *
     * Copyright (C) SugarCRM Inc. All rights reserved.
     */
({
	// List View (base) 
className:'list-view',plugins:['Pagination'],events:{'click [class*="orderBy"]':'setOrderBy'},defaultLayoutEvents:{"list:search:fire":"fireSearch","list:filter:toggled":"filterToggled","list:alert:show":"showAlert","list:alert:hide":"hideAlert","list:sort:fire":"sort"},defaultContextEvents:{},_previewed:null,_leftActions:[],_rowActions:[],_fields:{},initialize:function(options){var listViewMeta=app.metadata.getView(options.module,'list')||{};options.meta=_.extend({},listViewMeta,options.meta||{});options.meta.type=options.meta.type||'list';options.meta.action='list';options=this.parseFieldMetadata(options);app.view.View.prototype.initialize.call(this,options);this.attachEvents();this.orderByLastStateKey=app.user.lastState.key('order-by',this);this.orderBy=this._initOrderBy();if(this.collection){this.collection.orderBy=this.orderBy;}
this.limit=this.context.has('limit')?this.context.get('limit'):null;this.metaFields=this.meta.panels?_.first(this.meta.panels).fields:[];this.registerShortcuts();},_initOrderBy:function(){var lastStateOrderBy=app.user.lastState.get(this.orderByLastStateKey)||{},lastOrderedFieldMeta=this.getFieldMeta(lastStateOrderBy.field);if(_.isEmpty(lastOrderedFieldMeta)||!app.utils.isSortable(this.module,lastOrderedFieldMeta)){lastStateOrderBy={};}
return _.extend({field:'',direction:'desc'},this.meta.orderBy,lastStateOrderBy);},_render:function(){app.view.View.prototype._render.call(this);if(!app.acl.hasAccessToModel(this.action,this.model)){this._noAccessTemplate=this._noAccessTemplate||app.template.get("list.noaccess");this.$el.html(this._noAccessTemplate());}},parseFieldMetadata:function(options){_.each(options.meta.panels,function(panel,panelIdx){_.each(panel.fields,function(field,fieldIdx){if(!_.isUndefined(field.align)){var alignClass='';if(_.contains(['left','center','right'],field.align)){alignClass='t'+field.align;}
options.meta.panels[panelIdx].fields[fieldIdx].align=alignClass;}
if(!_.isUndefined(field.width)){var parts=field.width.toString().match(/^(\d{0,3})\%$/);var widthValue='';if(parts){if(parseInt(parts[1])<100){widthValue=parts[0];}}
options.meta.panels[panelIdx].fields[fieldIdx].width=widthValue;}},this);},this);return options;},attachEvents:function(){this.layoutEventsMap=_.extend(this.defaultLayoutEvents,this.layoutEvents);this.contextEventsMap=_.extend(this.defaultContextEvents,this.contextEvents);if(this.layout){_.each(this.layoutEventsMap,function(callback,event){this.layout.on(event,this[callback],this);},this);}
if(this.context){_.each(this.contextEventsMap,function(callback,event){this.context.on(event,this[callback],this);},this);}},sort:function(){app.events.trigger("preview:close");},showAlert:function(message){this.$("[data-target=alert]").html(message);this.$("[data-target=alert-container]").removeClass("hide");},hideAlert:function(){this.$("[data-target=alert-container]").addClass("hide");this.$("[data-target=alert]").empty();},filterToggled:function(isOpened){this.filterOpened=isOpened;},fireSearch:function(term){term=term||"";var options={limit:this.limit||null,query:term};this.context.get("collection").resetPagination();this.context.resetLoadFlag(false);this.context.set('skipFetch',false);this.context.loadData(options);},setOrderBy:function(event){if($(event.currentTarget).find('ui-draggable-dragging').length){return;}
var collection,options,eventTarget,orderBy;var self=this;collection=self.collection;eventTarget=self.$(event.currentTarget);orderBy=eventTarget.data('orderby');if(!orderBy){orderBy=eventTarget.data('fieldname');}
if(orderBy===self.orderBy.field){self.orderBy.direction=self.orderBy.direction==='desc'?'asc':'desc';}else{self.orderBy.field=orderBy;self.orderBy.direction='desc';}
collection.orderBy=self.orderBy;collection.resetPagination();options=self.getSortOptions(collection);if(this.triggerBefore('list:orderby',options)){self._setOrderBy(options);}},_setOrderBy:function(options){if(this.orderByLastStateKey){app.user.lastState.set(this.orderByLastStateKey,this.orderBy);}
this.context.resetLoadFlag(false);this.context.set('skipFetch',false);this.context.loadData(options);},getSortOptions:function(collection){var self=this,options={};options=self.filterOpened?self.getSearchOptions():{};options.showAlerts=true;options.limit=self.limit||null;options.success=function(collection,response,options){self.layout.trigger("list:sort:fire",collection,self);};if(collection.offset){options.limit=collection.offset;options.offset=0;}
return options;},getSearchOptions:function(){var collection,options,previousTerms,term='';collection=this.context.get('collection');if(app.cache.has('previousTerms')){previousTerms=app.cache.get('previousTerms');if(previousTerms){term=previousTerms[this.module];}}
options={params:{},fields:collection.fields?collection.fields:this.collection};if(term){options.params.q=term;}
if(this.context.get('link')){options.relate=true;}
return options;},bindDataChange:function(){if(this.collection){this.collection.on("reset",this.render,this);}},_dispose:function(){this._fields=null;app.view.View.prototype._dispose.call(this);},selectRow:function(down){var $rows=this.$('.dataTable tbody tr'),$selected,$next;if($rows.hasClass('selected')){$selected=$rows.filter('.selected');$next=down?$selected.next():$selected.prev();if($next.length>0){$selected.removeClass('selected');$next.addClass('selected');this.makeRowVisible($next);}}else{$rows.first().addClass('selected');this.makeRowVisible();}},makeRowVisible:function($selected){var $mainpane=this.$el.closest('.main-pane'),mainpaneHeight,selectedHeight,selectedTopPosition,selectedOffsetParent;if(_.isUndefined($selected)){$mainpane.scrollTop(0);return;}
mainpaneHeight=$mainpane.height();selectedHeight=$selected.height();selectedOffsetParent=$selected.offsetParent();selectedTopPosition=$selected.position().top+selectedOffsetParent.position().top;if((selectedTopPosition+selectedHeight)>mainpaneHeight){$mainpane.scrollTop($mainpane.scrollTop()+mainpaneHeight/2);}
if(selectedTopPosition<0){$mainpane.scrollTop($mainpane.scrollTop()-mainpaneHeight/2);}},scrollHorizontally:function(right){var $scrollableDiv=this.$('.flex-list-view-content'),scrollEnabled=this.$el.hasClass('scroll-width'),nextScrollPosition,increment=60;if(scrollEnabled){if(right){nextScrollPosition=$scrollableDiv.scrollLeft()+increment;}else{nextScrollPosition=$scrollableDiv.scrollLeft()-increment;}
$scrollableDiv.scrollLeft(nextScrollPosition);}},registerShortcuts:function(){app.shortcuts.register('List:Select:Down','j',function(){this.selectRow(true);},this);app.shortcuts.register('List:Select:Up','k',function(){this.selectRow(false);},this);app.shortcuts.register('List:Scroll:Left','h',function(){this.scrollHorizontally(false);},this);app.shortcuts.register('List:Scroll:Right','l',function(){this.scrollHorizontally(true);},this);app.shortcuts.register('List:Select:Open','o',function(){if(this.$('.selected [data-type=name] a:visible').length>0){this.$('.selected [data-type=name] a:visible').get(0).click();}else if(this.$('.selected [data-type=fullname] a:visible').length>0){this.$('.selected [data-type=fullname] a:visible').get(0).click();}},this);}}) },
"list-bottom": {"controller": /*
     * Your installation or use of this SugarCRM file is subject to the applicable
     * terms available at
     * http://support.sugarcrm.com/06_Customer_Center/10_Master_Subscription_Agreements/.
     * If you do not agree to all of the applicable terms or do not have the
     * authority to bind the entity as an authorized representative, then do not
     * install or use this SugarCRM file.
     *
     * Copyright (C) SugarCRM Inc. All rights reserved.
     */
({
	// List-bottom View (base) 
events:{'click [data-action="show-more"]':'showMoreRecords'},initialize:function(options){this._super('initialize',[options]);this._initPagination();},_initPagination:function(){this.paginationComponent=_.find(this.layout._components,function(component){return _.contains(component.plugins,'Pagination');},this);},showMoreRecords:function(){if(!this.paginationComponent){return;}
this.paginateFetched=false;this.render();var options={};options.success=_.bind(function(){this.layout.trigger('list:paginate:success');this.paginateFetched=true;this.render();},this);this.paginationComponent.getNextPagination(options);},setShowMoreLabel:function(){var model=this.collection.at(0),module=model?model.module:this.context.get('module');this.showMoreLabel=app.lang.get('TPL_SHOW_MORE_MODULE',module,{module:app.lang.get('LBL_MODULE_NAME',module).toLowerCase(),count:this.collection.length,offset:this.collection.next_offset>=0});},onCollectionChange:function(){var prevCollection=this.context.previous('collection');if(prevCollection){prevCollection.off(null,null,this);}
this.collection=this.context.get('collection');this.collection.on('add remove reset',this.render,this);this.render();},bindDataChange:function(){this.context.on('change:collection',this.onCollectionChange,this);this.collection.on('add remove reset',this.render,this);this.before('render',function(){this.dataFetched=this.paginateFetched!==false&&this.collection.dataFetched;this.showLoadMsg=true;if(app.alert.$alerts[0].innerText){this.showLoadMsg=false;}
var nextOffset=this.collection.next_offset||-1;if(this.collection.dataFetched&&nextOffset===-1){this._invisible=true;this.hide();return false;}
this._invisible=false;this.show();this.setShowMoreLabel();},null,this);},show:function(){if(this._invisible){return;}
this._super('show');if(!this.paginationComponent){return;}
this.paginationComponent.layout.$el.addClass('pagination');},hide:function(){this._super('hide');if(!this.paginationComponent){return;}
this.paginationComponent.layout.$el.removeClass('pagination');}}) },
"list-headerpane": {"controller": /*
     * Your installation or use of this SugarCRM file is subject to the applicable
     * terms available at
     * http://support.sugarcrm.com/06_Customer_Center/10_Master_Subscription_Agreements/.
     * If you do not agree to all of the applicable terms or do not have the
     * authority to bind the entity as an authorized representative, then do not
     * install or use this SugarCRM file.
     *
     * Copyright (C) SugarCRM Inc. All rights reserved.
     */
({
	// List-headerpane View (base) 
extendsFrom:'HeaderpaneView',initialize:function(options){this._super('initialize',[options]);app.shortcuts.register('List:Headerpane:Create','a',function(){var $createButton=this.$('a[name=create_button]');if($createButton.is(':visible')&&!$createButton.hasClass('disabled')){$createButton.get(0).click();}},this);}}) },
"logout": {"controller": /*
     * Your installation or use of this SugarCRM file is subject to the applicable
     * terms available at
     * http://support.sugarcrm.com/06_Customer_Center/10_Master_Subscription_Agreements/.
     * If you do not agree to all of the applicable terms or do not have the
     * authority to bind the entity as an authorized representative, then do not
     * install or use this SugarCRM file.
     *
     * Copyright (C) SugarCRM Inc. All rights reserved.
     */
({
	// Logout View (base) 
events:{"click [name=login_button]":"login","click [name=login_form_button]":"login_form"},_render:function(){this.logoUrl=app.metadata.getLogoUrl();app.view.View.prototype._render.call(this);this.refreshAddtionalComponents();return this;},refreshAddtionalComponents:function(){_.each(app.additionalComponents,function(component){component.render();});},login:function(){app.router.login();},login_form:function(){app.controller.loadView({module:"Login",layout:"login",create:true});}}) },
"mass-link": {"controller": /*
     * Your installation or use of this SugarCRM file is subject to the applicable
     * terms available at
     * http://support.sugarcrm.com/06_Customer_Center/10_Master_Subscription_Agreements/.
     * If you do not agree to all of the applicable terms or do not have the
     * authority to bind the entity as an authorized representative, then do not
     * install or use this SugarCRM file.
     *
     * Copyright (C) SugarCRM Inc. All rights reserved.
     */
({
	// Mass-link View (base) 
extendsFrom:'MassupdateView',massUpdateViewName:'masslink-progress',_defaultLinkSettings:{mass_link_chunk_size:20},initialize:function(options){this._super('initialize',[options]);var configSettings=(app.config.massActions&&app.config.massActions.massLinkChunkSize)?{mass_link_chunk_size:app.config.massActions.massLinkChunkSize}:{};this._settings=_.extend({},this._defaultLinkSettings,configSettings,this.meta&&this.meta.settings||{});},delegateListFireEvents:function(){this.layout.on('list:masslink:fire',_.bind(this.beginMassLink,this));},beginMassLink:function(options){var parentModel=this.context.get('recParentModel'),link=this.context.get('recLink'),massLink=this.getMassUpdateModel(this.module),progressView=this.getProgressView();massLink.setChunkSize(this._settings.mass_link_chunk_size);massLink=_.extend({},massLink,{maxLinkAllowAttempt:options&&options.maxLinkAllowAttempt||this.maxAllowAttempt,link:function(options){this.updateChunk();var model=this,apiMethod='create',linkCmd='link',parentData={id:parentModel.id},url=app.api.buildURL(parentModel.module,linkCmd,parentData),linkData={link_name:link,ids:_.pluck(this.chunks,'id')},callbacks={success:function(data,response){model.attempt=0;model.updateProgress();if(model.length===0){model.trigger('massupdate:end');if(_.isFunction(options.success)){options.success(model,data,response);}}else{model.trigger('massupdate:always');model.link(options);}},error:function(){model.attempt++;model.trigger('massupdate:fail');if(model.attempt<=this.maxLinkAllowAttempt){model.link(options);}else{app.alert.show('error_while_mass_link',{level:'error',title:app.lang.getAppString('ERR_INTERNAL_ERR_MSG'),messages:app.lang.getAppString('ERR_HTTP_500_TEXT')});}}};app.api.call(apiMethod,url,linkData,callbacks);}});progressView.initCollection(massLink);massLink.link({success:_.bind(function(model,data,response){this.layout.trigger('list:masslink:complete',model,data,response);},this)});}}) },
"massaddtolist": {"controller": /*
     * Your installation or use of this SugarCRM file is subject to the applicable
     * terms available at
     * http://support.sugarcrm.com/06_Customer_Center/10_Master_Subscription_Agreements/.
     * If you do not agree to all of the applicable terms or do not have the
     * authority to bind the entity as an authorized representative, then do not
     * install or use this SugarCRM file.
     *
     * Copyright (C) SugarCRM Inc. All rights reserved.
     */
({
	// Massaddtolist View (base) 
extendsFrom:'MassupdateView',addToListFieldName:'prospect_lists',listModule:'ProspectLists',massUpdateViewName:'massaddtolist-progress',className:'extend',initialize:function(options){var additionalEvents={};additionalEvents['click .btn[name=create_button]']='createAndSelectNewList';this.events=_.extend({},this.events,additionalEvents);this._super("initialize",[options]);},delegateListFireEvents:function(){this.layout.on("list:massaddtolist:fire",this.show,this);this.layout.on("list:massaction:hide",this.hide,this);},setMetadata:function(options){var moduleMetadata=app.metadata.getModule(options.module);if(!moduleMetadata){return;}
var addToListField=_.find(moduleMetadata.fields,function(field){return field.name===this.addToListFieldName;},this);if(addToListField){addToListField=app.utils.deepCopy(addToListField);addToListField.id_name=this.addToListFieldName+'_id';addToListField.name=this.addToListFieldName+'_name';addToListField.label=addToListField.label||addToListField.vname;addToListField.type='relate';addToListField.required=true;this.addToListField=addToListField;}},_render:function(){var result=this._super("_render");if(_.isUndefined(this.addToListField)){this.hide();}
return result;},setDefault:function(){this.defaultOption=this.addToListField;},getAttributes:function(){var attributes={};attributes[this.addToListFieldName]=[this.model.get(this.addToListField.id_name)];return attributes;},buildSaveSuccessMessages:function(massUpdateModel){var doneLabel='TPL_MASS_ADD_TO_LIST_SUCCESS',queuedLabel='TPL_MASS_ADD_TO_LIST_QUEUED',listName=this.model.get(this.addToListField.name),listId=this.model.get(this.addToListField.id_name),listUrl='#'+app.router.buildRoute(this.listModule,listId);return{done:app.lang.get(doneLabel,null,{listName:listName,listUrl:listUrl}),queued:app.lang.get(queuedLabel,null,{listName:listName,listUrl:listUrl})};},createAndSelectNewList:function(){app.drawer.open({layout:'create-nodupecheck',context:{create:true,module:this.listModule}},_.bind(this.selectNewlyCreatedList,this));},selectNewlyCreatedList:function(context,model){var relateField=this.getField('prospect_lists_name');if(relateField){model.value=model.get('name');relateField.setValue(model);}}}) },
"massaddtolist-progress": {"controller": /*
     * Your installation or use of this SugarCRM file is subject to the applicable
     * terms available at
     * http://support.sugarcrm.com/06_Customer_Center/10_Master_Subscription_Agreements/.
     * If you do not agree to all of the applicable terms or do not have the
     * authority to bind the entity as an authorized representative, then do not
     * install or use this SugarCRM file.
     *
     * Copyright (C) SugarCRM Inc. All rights reserved.
     */
({
	// Massaddtolist-progress View (base) 
extendsFrom:'MassupdateProgressView',_labelSet:{'update':{PROGRESS_STATUS:'TPL_MASSADDTOLIST_PROGRESS_STATUS',DURATION_FORMAT:'TPL_MASSADDTOLIST_DURATION_FORMAT',FAIL_TO_ATTEMPT:'TPL_MASSADDTOLIST_FAIL_TO_ATTEMPT',WARNING_CLOSE:'TPL_MASSADDTOLIST_WARNING_CLOSE',WARNING_INCOMPLETE:'TPL_MASSADDTOLIST_WARNING_INCOMPLETE',SUCCESS:'TPL_MASSADDTOLIST_SUCCESS',TITLE:'TPL_MASSADDTOLIST_TITLE'}}}) },
"masslink-progress": {"controller": /*
     * Your installation or use of this SugarCRM file is subject to the applicable
     * terms available at
     * http://support.sugarcrm.com/06_Customer_Center/10_Master_Subscription_Agreements/.
     * If you do not agree to all of the applicable terms or do not have the
     * authority to bind the entity as an authorized representative, then do not
     * install or use this SugarCRM file.
     *
     * Copyright (C) SugarCRM Inc. All rights reserved.
     */
({
	// Masslink-progress View (base) 
extendsFrom:'MassupdateProgressView',_labelSet:{'update':{PROGRESS_STATUS:'TPL_MASSLINK_PROGRESS_STATUS',DURATION_FORMAT:'TPL_MASSLINK_DURATION_FORMAT',FAIL_TO_ATTEMPT:'TPL_MASSLINK_FAIL_TO_ATTEMPT',WARNING_CLOSE:'TPL_MASSLINK_WARNING_CLOSE',WARNING_INCOMPLETE:'TPL_MASSLINK_WARNING_INCOMPLETE',SUCCESS:'TPL_MASSLINK_SUCCESS',TITLE:'TPL_MASSLINK_TITLE'}}}) },
"massupdate": {"controller": /*
     * Your installation or use of this SugarCRM file is subject to the applicable
     * terms available at
     * http://support.sugarcrm.com/06_Customer_Center/10_Master_Subscription_Agreements/.
     * If you do not agree to all of the applicable terms or do not have the
     * authority to bind the entity as an authorized representative, then do not
     * install or use this SugarCRM file.
     *
     * Copyright (C) SugarCRM Inc. All rights reserved.
     */
({
	// Massupdate View (base) 
events:{'click [data-action="add"]':'addItem','click [data-action="remove"]':'removeItem','click .btn[name=update_button]':'saveClicked','click .btn.cancel_button':'cancelClicked'},visible:false,fieldOptions:null,fieldValues:null,defaultOption:null,fieldPlaceHolderTag:'[name=fieldPlaceHolder]',massUpdateViewName:'massupdate-progress',className:'extend',plugins:['Tooltip'],_defaultSettings:{max_records_to_merge:5,mass_delete_chunk_size:20,mass_update_chunk_size:20},fallbackFieldTemplate:'edit',initialize:function(options){var genericMeta=_.omit(app.metadata.getView(null,options.name),'panels');options.meta=_.extend({},genericMeta,options.meta);this.fieldValues=[{}];this.setMetadata(options);this._super('initialize',[options]);this._initSettings();this.setDefault();this.delegateListFireEvents();this.before('render',this.isVisible);app.routing.before("route",this.beforeRouteDelete,this,true);$(window).on("beforeunload.delete"+this.cid,_.bind(this.warnDeleteOnRefresh,this));},_initSettings:function(){var configSettings=app.config.massActions&&{mass_delete_chunk_size:app.config.massActions.massDeleteChunkSize,mass_update_chunk_size:app.config.massActions.massUpdateChunkSize};this._settings=_.extend({},this._defaultSettings,configSettings,this.meta&&this.meta.settings||{});return this;},delegateListFireEvents:function(){this.layout.on("list:massupdate:fire",this.show,this);this.layout.on("list:massaction:hide",this.hide,this);this.layout.on("list:massdelete:fire",this.warnDelete,this);this.layout.on("list:massexport:fire",this.massExport,this);this.layout.on("list:updatecalcfields:fire",this.updateCalcFields,this);},setMetadata:function(options){var fieldList,massFields=[],metadataModule=app.metadata.getModule(options.module);if(!metadataModule){app.logger.error('Failed to get module '+options.module);return;}
options.meta.panels=options.meta.panels||[{fields:[]}];fieldList=metadataModule.fields;if(!_.isEmpty(options.meta.panels[0].fields)){fieldList=_.map(options.meta.panels[0].fields,function(fieldDef){var def=_.extend({},fieldList[fieldDef.name],fieldDef);return def;});}
_.each(fieldList,function(field){if(!field.massupdate||field.readonly){return;}
var cloneField=app.utils.deepCopy(field);cloneField.label=cloneField.label||cloneField.vname;if(cloneField.type==='multienum'){cloneField.type='enum';}
massFields.push(cloneField);});options.meta.panels[0].fields=massFields;},_render:function(){var result=app.view.View.prototype._render.call(this),self=this;if(this.$(".select2.mu_attribute")){this.$(".select2.mu_attribute").select2({width:'100%',minimumResultsForSearch:5}).on("change",function(evt){var $el=$(this),name=$el.select2('val'),index=$el.data('index');var option=_.find(self.fieldOptions,function(field){return field.name==name;});self.replaceUpdateField(option,index);self.placeField($el);});this.$(".select2.mu_attribute").each(function(){self.placeField($(this));});}
if(this.fields.length==0){this.hide();}
return result;},isVisible:function(){return this.visible;},placeField:function($el){var name=$el.select2('val'),index=$el.data('index'),fieldEl=this.getField(name).$el;if($el.not(".disabled")&&fieldEl){var holder=this.$(this.fieldPlaceHolderTag+"[index="+index+"]");this.$("#fieldPlaceHolders").append(holder.children());holder.html(fieldEl);}},addItem:function(evt){if(!$(evt.currentTarget).hasClass("disabled")){this.addUpdateField();this.render();}},removeItem:function(evt){var index=$(evt.currentTarget).data('index');this.removeUpdateField(index);this.render();},addUpdateField:function(){this.fieldValues.splice(this.fieldValues.length-1,0,this.defaultOption);this.defaultOption=null;this.setDefault();},removeUpdateField:function(index){var fieldValue=this.fieldValues[index];if(fieldValue){if(fieldValue.name){this.model.unset(fieldValue.name);this.fieldValues.splice(index,1);}else{var removed=this.fieldValues.splice(index-1,1);this.defaultOption=removed[0];}
this.setDefault();}},replaceUpdateField:function(selectedOption,targetIndex){var fieldValue=this.fieldValues[targetIndex];if(fieldValue.name){this.model.unset(fieldValue.name);this.fieldOptions.push(fieldValue);this.fieldValues[targetIndex]=selectedOption;}else{this.model.unset(this.defaultOption.name);this.fieldOptions.push(this.defaultOption);this.defaultOption=selectedOption;}},setDefault:function(){var assignedValues=_.pluck(this.fieldValues,'name');if(this.defaultOption){assignedValues=assignedValues.concat(this.defaultOption.name);}
this.fieldOptions=(this.meta)?_.reject(_.flatten(_.pluck(this.meta.panels,'fields')),function(field){return(field)?_.contains(assignedValues,field.name):false;}):[];this.defaultOption=this.defaultOption||this.fieldOptions.splice(0,1)[0];},getProgressView:function(){var progressView=this.layout.getComponent(this.massUpdateViewName);if(!progressView){progressView=app.view.createView({context:this.context,name:this.massUpdateViewName,layout:this.layout});this.layout._components.push(progressView);this.layout.$el.append(progressView.$el);}
progressView.render();return progressView;},getMassUpdateModel:function(baseModule){var massModel=this.context.get('mass_collection'),progressView=this.getProgressView(),massCollection=massModel?_.extend({},massModel,{defaultMethod:'update',module:'MassUpdate',baseModule:baseModule,maxAllowAttempt:3,chunks:null,discards:[],attempt:0,paused:false,_chunkSize:20,setChunkSize:function(chunkSize){this._chunkSize=parseInt(chunkSize,10);},resetProgress:function(){massModel.reset();this.length=0;},updateProgress:function(){this.remove(this.chunks.splice(0));massModel.length=this.length;},updateChunk:function(){if(!this.chunks){this.chunks=this.slice(0,this._chunkSize);this.trigger('massupdate:start');}
if(_.isEmpty(this.chunks)){this.chunks=this.slice(0,this._chunkSize);}},resumeFetch:function(){if(!this._pauseOptions){return;}
this.paused=false;this.trigger('massupdate:resume');this.fetch(this._pauseOptions);},pauseFetch:function(){this.paused=true;},sync:function(default_method,model,options){if(model.paused){this._pauseOptions=options;this.trigger('massupdate:pause');return;}
this.method=options.method;this.updateChunk();var callbacks={success:function(data,response){model.attempt=0;model.updateProgress();model.trigger('massupdate:done');if(model.length===0){model.trigger('massupdate:end');if(_.isFunction(options.success)){options.success(model,null,response);}}else{model.fetch(options);}},error:function(xhr,status,error){model.attempt++;model.trigger('massupdate:fail');if(model.attempt<=model.maxAllowAttempt){model.fetch(options);}else if(_.isFunction(options.error)){model.trigger('massupdate:end');options.error(xhr,status,error);}},complete:function(xhr,status){model.trigger('massupdate:always');if(_.isFunction(options.complete)){options.complete(xhr,status);}}},method=options.method||this.defaultMethod,data=this.getAttributes(options.attributes,method),url=app.api.buildURL(baseModule,this.module,data,options.params);app.api.call(method,url,data,callbacks);},getAttributes:function(attributes,action){return{massupdate_params:_.extend({'uid':this.getAvailableList(action)},attributes)};},getAvailableList:function(action){var action2permission={'update':'edit','delete':'delete'},list=[];_.each(this.chunks,function(model){if(app.acl.hasAccessToModel(action2permission[action],model)!==false){list.push(model.id);}else{this.discards.push(model.id);}},this);return list;}}):null;progressView.initCollection(massCollection);return massCollection;},warnDelete:function(){this._modelsToDelete=this.getMassUpdateModel(this.module);this._modelsToDelete.setChunkSize(this._settings.mass_delete_chunk_size);this._targetUrl=Backbone.history.getFragment();if(this._targetUrl!==this._currentUrl){app.router.navigate(this._currentUrl,{trigger:false,replace:true});}
this.hideAll();app.alert.show('delete_confirmation',{level:'confirmation',messages:app.lang.get('NTC_DELETE_CONFIRMATION_MULTIPLE'),onConfirm:_.bind(this.deleteModels,this),onCancel:_.bind(function(){this._modelsToDelete=null;app.router.navigate(this._targetUrl,{trigger:false,replace:true});},this)});},warnDeleteOnRefresh:function(){if(this._modelsToDelete){return app.lang.get('NTC_DELETE_CONFIRMATION_MULTIPLE');}},deleteModels:function(){var self=this,collection=self._modelsToDelete;var lastSelectedModels=_.clone(collection.models);if(collection){collection.fetch({showAlerts:false,method:'delete',error:function(){app.alert.show('error_while_mass_update',{level:'error',title:app.lang.getAppString('ERR_INTERNAL_ERR_MSG'),messages:app.lang.getAppString('ERR_HTTP_500_TEXT')});},success:function(data,response,options){self.layout.trigger("list:records:deleted",lastSelectedModels);var redirect=self._targetUrl!==self._currentUrl;if(options.status==='done'){self.layout.context.reloadData({showAlerts:false});}else if(options.status==='queued'){app.alert.show('jobqueue_notice',{level:'success',title:app.lang.getAppString('LBL_MASS_UPDATE_JOB_QUEUED'),autoClose:true});}
self._modelsToDelete=null;if(redirect){self.unbindBeforeRouteDelete();app.router.navigate(self._targetUrl,{trigger:true});}}});}},beforeRouteDelete:function(){if(this._modelsToDelete){this.warnDelete(this._modelsToDelete);return false;}
return true;},updateCalcFields:function(){this.hideAll();this.save(true);},massExport:function(){this.hideAll();var massExport=this.context.get("mass_collection");if(massExport){app.alert.show('massexport_loading',{level:'process',title:app.lang.getAppString('LBL_LOADING')});app.api.exportRecords({module:this.module,uid:massExport.pluck('id')},this.$el,{complete:function(data){app.alert.dismiss('massexport_loading');}});}},save:function(forCalcFields){forCalcFields=!!forCalcFields;var massUpdate=this.getMassUpdateModel(this.module),self=this;massUpdate.setChunkSize(this._settings.mass_update_chunk_size);this.once('massupdate:validation:complete',function(validate){var errors=validate.errors,emptyValues=validate.emptyValues,confirmMessage=app.lang.getAppString('LBL_MASS_UPDATE_EMPTY_VALUES'),attributes=validate.attributes||this.getAttributes();this.$(".fieldPlaceHolder .error").removeClass("error");this.$(".fieldPlaceHolder .help-block").hide();if(_.isEmpty(errors)){confirmMessage+='<br>['+emptyValues.join(',')+']<br>'+app.lang.getAppString('LBL_MASS_UPDATE_EMPTY_CONFIRM')+'<br>';if(massUpdate){var fetchMassupdate=_.bind(function(){var successMessages=this.buildSaveSuccessMessages(massUpdate);massUpdate.fetch({showAlerts:true,attributes:attributes,error:function(){app.alert.show('error_while_mass_update',{level:'error',title:app.lang.getAppString('ERR_INTERNAL_ERR_MSG'),messages:app.lang.getAppString('ERR_HTTP_500_TEXT')});},success:function(data,response,options){self.hide();if(options.status==='done'){self.collection.fetch({showAlerts:false,remove:true,relate:!!self.layout.collection.link});}else if(options.status==='queued'){app.alert.show('jobqueue_notice',{level:'success',messages:successMessages[options.status],autoClose:true});}}});},this);if(emptyValues.length===0){fetchMassupdate.call(this);}else{app.alert.show('empty_confirmation',{level:'confirmation',messages:confirmMessage,onConfirm:fetchMassupdate});}}}else{this.handleValidationError(errors);}},this);if(forCalcFields){this.trigger('massupdate:validation:complete',{errors:[],emptyValues:[],attributes:{}});}else{this.checkValidationError();}},buildSaveSuccessMessages:function(massUpdateModel){return{done:app.lang.getAppString('LBL_MASS_UPDATE_SUCCESS'),queued:app.lang.getAppString('LBL_MASS_UPDATE_JOB_QUEUED')};},getAttributes:function(){var values=[this.defaultOption].concat(this.fieldValues),attributes=[],fieldFilter=function(field){return field&&field.name;};values=_.chain(values).union(_.chain(values).pluck("fields").compact().flatten().value()).uniq(fieldFilter).filter(fieldFilter).value();_.each(values,function(value){attributes=_.union(attributes,_.values(_.pick(value,'name','id_name')));if(value.name==='parent_name'){attributes.push('parent_id','parent_type');}else if(value.name==='team_name'){attributes.push('team_name_type');}else if(value.isMultiSelect){attributes.push(value.name+'_replace');}},this);return _.pick(this.model.attributes,attributes);},checkValidationError:function(){var self=this,emptyValues=[],errors={},validator={},fields=_.initial(this.fieldValues).concat(this.defaultOption),i=0;var fieldsToValidate=_.filter(fields,function(f){return f.name;});if(_.size(fieldsToValidate)){_.each(fieldsToValidate,function(field){i++;validator={};validator[field.name]=field;field.required=(_.isBoolean(field.required)&&field.required)||(field.required&&field.required=='true')||false;var value=this.model.get(field.name);if(!_.isBoolean(value)&&!value){emptyValues.push(app.lang.get(field.label,this.model.module));this.model.set(field.name,'',{silent:true});if(field.id_name){this.model.set(field.id_name,'',{silent:true});}}
this.model._doValidate(validator,errors,function(didItFail,fields,errors,callback){if(i===_.size(fieldsToValidate)){self.trigger('massupdate:validation:complete',{errors:errors,emptyValues:emptyValues});}});},this);}else{this.trigger('massupdate:validation:complete',{errors:errors,emptyValues:emptyValues});}
return;},handleValidationError:function(errors){var self=this;_.each(errors,function(fieldErrors,fieldName){var fieldEl=self.getField(fieldName).$el,errorEl=fieldEl.find(".help-block");fieldEl.addClass("error");if(errorEl.length==0){errorEl=$("<span>").addClass("help-block");errorEl.appendTo(fieldEl);}
errorEl.show().html("");_.each(fieldErrors,function(errorContext,errorName){errorEl.append(app.error.getErrorString(errorName,errorContext));});});},show:function(){this.hideAll();this.visible=true;this.defaultOption=null;this.model.clear();var defaults=_.extend({},this.model._defaults,this.model.getDefaultAttributes());this.model.set(defaults);this.setDefault();var massModel=this.context.get('mass_collection');massModel.off(null,null,this);massModel.on('add remove reset massupdate:estimate',this.setDisabled,this);massModel.on('massupdate:start massupdate:end',this.setDisabledOnUpdate,this);this.$el.show();this.render();this.createShortcutSession();this.registerShortcuts();},hideAll:function(){this.layout.trigger("list:massaction:hide");},hide:function(){if(this.disposed){return;}
this.visible=false;this.$el.hide();this.clearAndRestorePreviousShortcuts();},createShortcutSession:function(){app.shortcuts.saveSession();app.shortcuts.createSession(['MassUpdate:Add','MassUpdate:Remove','MassUpdate:Cancel','MassUpdate:Update'],this);},registerShortcuts:function(){app.shortcuts.register('MassUpdate:Add','+',function(){this.$('[data-action=add]').last().click();},this);app.shortcuts.register('MassUpdate:Remove','-',function(){this.$('[data-action=remove]').last().click();},this);app.shortcuts.register('MassUpdate:Cancel',['esc','ctrl+alt+l'],function(){this.$('a.cancel_button').click();},this,true);app.shortcuts.register('MassUpdate:Update',['ctrl+s','ctrl+alt+a'],function(){this.$('[name=update_button]:not(.disabled)').click();},this,true);},clearAndRestorePreviousShortcuts:function(){var activeShortcutSession=app.shortcuts.getCurrentSession();if(activeShortcutSession&&(activeShortcutSession.layout===this)){app.shortcuts.restoreSession();}},setDisabledOnUpdate:function(){var massUpdate=this.context.get('mass_collection');if(massUpdate.length==0){this.$('.btn[name=update_button]').removeClass('disabled');}else{this.$('.btn[name=update_button]').addClass('disabled');}},setDisabled:function(){var massUpdate=this.context.get('mass_collection');if(massUpdate.isEmpty()||massUpdate.fetched===false){this.$('.btn[name=update_button]').addClass('disabled');}else{this.$('.btn[name=update_button]').removeClass('disabled');}},saveClicked:function(evt){if(this.$(".btn[name=update_button]").hasClass("disabled")===false){this.save();}},cancelClicked:function(evt){this.hide();},unbindData:function(){var massModel=this.context.get("mass_collection");if(massModel){massModel.off(null,null,this);}
app.view.View.prototype.unbindData.call(this);},unbindBeforeRouteDelete:function(){app.routing.offBefore("route",this.beforeRouteDelete,this);$(window).off("beforeunload.delete"+this.cid);},_dispose:function(){this.unbindBeforeRouteDelete();this.$('.select2.mu_attribute').select2('destroy');app.view.View.prototype._dispose.call(this);}}) },
"massupdate-progress": {"controller": /*
     * Your installation or use of this SugarCRM file is subject to the applicable
     * terms available at
     * http://support.sugarcrm.com/06_Customer_Center/10_Master_Subscription_Agreements/.
     * If you do not agree to all of the applicable terms or do not have the
     * authority to bind the entity as an authorized representative, then do not
     * install or use this SugarCRM file.
     *
     * Copyright (C) SugarCRM Inc. All rights reserved.
     */
({
	// Massupdate-progress View (base) 
plugins:['Editable'],events:{'click [name=btn-stop]':'pauseUpdate'},totalRecord:0,_startTime:0,_velocity:0,$holders:{},_labelSet:{'update':{PROGRESS_STATUS:'TPL_MASSUPDATE_PROGRESS_STATUS',DURATION_FORMAT:'TPL_MASSUPDATE_DURATION_FORMAT',FAIL_TO_ATTEMPT:'TPL_MASSUPDATE_FAIL_TO_ATTEMPT',WARNING_CLOSE:'TPL_MASSUPDATE_WARNING_CLOSE',WARNING_INCOMPLETE:'TPL_MASSUPDATE_WARNING_INCOMPLETE',SUCCESS:'TPL_MASSUPDATE_SUCCESS',TITLE:'TPL_MASSUPDATE_TITLE'},'delete':{PROGRESS_STATUS:'TPL_MASSDELETE_PROGRESS_STATUS',DURATION_FORMAT:'TPL_MASSDELETE_DURATION_FORMAT',FAIL_TO_ATTEMPT:'TPL_MASSDELETE_FAIL_TO_ATTEMPT',WARNING_CLOSE:'TPL_MASSDELETE_WARNING_CLOSE',WARNING_INCOMPLETE:'TPL_MASSDELETE_WARNING_INCOMPLETE',SUCCESS:'TPL_MASSDELETE_SUCCESS',TITLE:'TPL_MASSDELETE_TITLE'}},hasUnsavedChanges:function(){return(this.totalRecord>0);},initCollection:function(collection){this.unbindData();this.collection=collection;this.hide();this.bindDataChange();},initLabels:function(){this.LABELSET=this._labelSet[this.collection.method||this.collection.defaultMethod];},initHolders:function(){var self=this;self.$holders={};this.$('[data-holder]').each(function(holder){var $el=$(this);self.$holders[$el.data('holder')]=$el;});},unbindData:function(){this.offBefore('start');this.off('render',null,this);app.view.View.prototype.unbindData.call(this);},bindDataChange:function(){if(!this.collection){return;}
this.on('render',this.initHolders,this);this.before('start',this.checkAvailable,this,true);this.collection.on('massupdate:always',this.updateProgress,this);this.collection.on('massupdate:start',this.showProgress,this);this.collection.on('massupdate:end',this.hideProgress,this);this.collection.on('massupdate:fail',this.checkError,this);this.collection.on('massupdate:resume',this.resumeProcess,this);this.collection.on('massupdate:pause',this.pauseProcess,this);},checkAvailable:function(){if(this.collection.chunks.length===this.collection.length){this.unbindData();this.collection.on('massupdate:end',this.hideProgress,this);return false;}
return true;},checkError:function(){if(this.collection.attempt===0){this.$holders.bar.addClass('progress-info').removeClass('progress-danger');return;}else if(this.collection.attempt>this.collection.maxAllowAttempt){return;}
this.$holders.bar.removeClass('progress-info').addClass('progress-danger');app.alert.dismiss('stop_confirmation');app.alert.show('stop_confirmation',{level:'error',messages:app.lang.get(this.LABELSET['FAIL_TO_ATTEMPT'],this.module,{num:this.collection.attempt,total:this.collection.maxAllowAttempt})});},getEstimate:function(){if(!this.collection.chunks){return 0;}
var chunkSize=this.collection.chunks.length,remainSize=this.collection.length,duration=(new Date().getTime()-this._startTime)/ 1000;this._startTime=new Date().getTime();this._velocity=chunkSize / duration;return parseInt(remainSize / this._velocity,10);},getRelativeTime:function(elapsed){var msPerMinute=60,msPerHour=msPerMinute*60,msPerDay=msPerHour*24,unitString='',relateTime=0;if(elapsed<=0){return'';}
if(elapsed<msPerMinute){relateTime=elapsed;unitString=app.lang.get('LBL_DURATION_SECONDS');}else if(elapsed<msPerHour){relateTime=Math.round(elapsed / msPerMinute);unitString=app.lang.get('LBL_DURATION_MINUTES');}else if(elapsed<msPerDay){relateTime=Math.round(elapsed / msPerHour);unitString=app.lang.get('LBL_DURATION_HOUR');}else{return'';}
return app.lang.get(this.LABELSET['DURATION_FORMAT'],this.collection.baseModule,{time:relateTime,unit:unitString});},getTotalRecords:function(){return this.collection.length;},getRemainder:function(){var chunkSize=_.isEmpty(this.collection.chunks)?0:this.collection.chunks.length,size=_.min([this.collection.models.length,this.collection.length+chunkSize]);return size;},getProgressSize:function(){var chunkSize=_.isEmpty(this.collection.chunks)?0:this.collection.chunks.length,size=_.min([this.totalRecord,this.totalRecord-this.collection.length+chunkSize]);return size;},getCompleteRecords:function(){return this.totalRecord-this.collection.length;},resumeUpdate:function(){this.collection.resumeFetch();},pauseUpdate:function(){var stopButton=this.getField('btn-stop');stopButton.setDisabled(true);this.collection.pauseFetch();},pauseProcess:function(){this.$holders.bar.removeClass('active');app.alert.dismiss('stop_confirmation');app.alert.show('stop_confirmation',{level:'confirmation',messages:app.lang.get(this.LABELSET['WARNING_CLOSE'],this.module,{num:this.getRemainder()}),onConfirm:_.bind(this.hideProgress,this),onCancel:_.bind(this.resumeUpdate,this),autoClose:false});},resumeProcess:function(){this.$holders.bar.addClass('active');var stopButton=this.getField('btn-stop');stopButton.setDisabled(false);},showProgress:function(){this.initLabels();this.totalRecord=this.getTotalRecords();if(this.triggerBefore('start')===false){return false;}
this._startTime=new Date().getTime();var stopButton=this.getField('btn-stop');if(stopButton){stopButton.setDisabled(false);}
var title=app.lang.get(this.LABELSET.TITLE,this.module,{module:this.module});this.$holders.title.text(title);this.updateProgress();this.show();},hideProgress:function(){var size=this.getCompleteRecords(),discardSize=this.collection.discards.length;if(discardSize>0){var message=app.lang.get(this.LABELSET['SUCCESS'],this.module,{num:this.totalRecord-discardSize});message+=app.lang.get('TPL_MASSUPDATE_WARNING_PERMISSION',this.module,{remain:discardSize});app.alert.show('massupdate_final_notice',{level:'warning',messages:message,autoClose:true,autoCloseDelay:8000});}else if(this.totalRecord!==size){app.alert.show('massupdate_final_notice',{level:'warning',messages:app.lang.get(this.LABELSET['WARNING_INCOMPLETE'],this.module,{num:this.getRemainder()}),autoClose:true,autoCloseDelay:8000});}else{app.alert.show('massupdate_final_notice',{level:'success',messages:app.lang.get(this.LABELSET['SUCCESS'],this.module,{num:size}),autoClose:true,autoCloseDelay:8000});}
this.totalRecord=0;this.collection.resetProgress();this.hide();},updateProgress:function(){if(!this.collection||this.collection.length===0){return;}
var estimate=this.getEstimate(),estimateMessage=this.getRelativeTime(estimate),size=this.getProgressSize(),percent=(size*100 / this.totalRecord),message=app.lang.get(this.LABELSET['PROGRESS_STATUS'],this.module,{num:size,percent:Math.round(percent),total:this.totalRecord});if(!_.isEmpty(estimateMessage)){this.$holders.estimate.text(estimateMessage);}
this.checkError();this.$holders.message.text(message);this.$holders.progressbar.css({'width':percent+'%'});}}) },
"merge-duplicates": {"controller": /*
     * Your installation or use of this SugarCRM file is subject to the applicable
     * terms available at
     * http://support.sugarcrm.com/06_Customer_Center/10_Master_Subscription_Agreements/.
     * If you do not agree to all of the applicable terms or do not have the
     * authority to bind the entity as an authorized representative, then do not
     * install or use this SugarCRM file.
     *
     * Copyright (C) SugarCRM Inc. All rights reserved.
     */
({
	// Merge-duplicates View (base) 
plugins:['Editable','ErrorDecoration','Tooltip','EllipsisInline','MergeDuplicates'],extendsFrom:'ListView',events:{'click [data-mode=preview]':'togglePreview','click [data-action=copy]':'triggerCopy','click [data-action=delete]':'triggerDelete'},_defaultSettings:{merge_relate_fetch_concurrency:2,merge_relate_fetch_timeout:90000,merge_relate_fetch_limit:20,merge_relate_update_concurrency:4,merge_relate_update_timeout:90000,merge_relate_max_attempt:3},mergeFields:[],rowFields:{},primaryRecord:{},toggled:false,isPreviewOpen:false,relatedFieldsMap:['id_name','type_name'],fieldNameBlacklist:['date_entered','date_modified','modified_user_id','created_by','deleted'],fieldTypesBlacklist:['team_list','link','id','password'],relatesBlacklist:['assigned_user_link','modified_user_link','created_by_link','teams','team_link','team_count_link','campaigns','campaign_link','archived_emails','email_addresses','email_addresses_primary','forecastworksheets','currencies'],relatesBlacklistForModule:{Accounts:['revenuelineitems'],Opportunities:['accounts'],Leads:['oldmeetings','oldcalls'],Prospects:['tasks'],Bugs:['project'],RevenueLineItems:['campaign_revenuelineitems']},mergeStat:null,mergeProgressModel:null,mergeRelatedCollection:null,validArrayAttributes:[{type:'datetimecombo',source:'db'},{type:'datetime',source:'db'},{type:'varchar',source:'db'},{type:'enum',source:'db'},{type:'multienum',source:'db'},{type:'text',source:'db'},{type:'date',source:'db'},{type:'time',source:'db'},{type:'currency',source:'db',calculated:false},{type:'int',source:'db'},{type:'long',source:'db'},{type:'double',source:'db'},{type:'float',source:'db'},{type:'short',source:'db'},{dbType:'varchar',source:'db'},{dbType:'double',source:'db'},{type:'relate'},{type:'parent'},{type:'image'},{type:'teamset'},{type:'email'}],flattenFieldTypes:['fieldset','fullname'],generatedValues:null,initialize:function(options){this._super('initialize',[options]);this._initSettings();this._initializeMergeFields();this._initializeMergeCollection(this._prepareRecords());this.action='list';this.layout.on('mergeduplicates:save:fire',this.triggerSave,this);},_initSettings:function(){var configSettings=app.config.mergeDuplicates&&{merge_relate_fetch_concurrency:app.config.mergeDuplicates.mergeRelateFetchConcurrency,merge_relate_fetch_timeout:app.config.mergeDuplicates.mergeRelateFetchTimeout,merge_relate_fetch_limit:app.config.mergeDuplicates.mergeRelateFetchLimit,merge_relate_update_concurrency:app.config.mergeDuplicates.mergeRelateUpdateConcurrency,merge_relate_update_timeout:app.config.mergeDuplicates.mergeRelateUpdateTimeout,merge_relate_max_attempt:app.config.mergeDuplicates.mergeRelateMaxAttempt};this._settings=_.extend(this._defaultSettings,configSettings,this.meta&&this.meta.settings||{});return this;},_prepareRecords:function(){var records=this._validateModelsForMerge(this.context.get('selectedDuplicates'));this.setPrimaryRecord(this._findPrimary(records));return records;},_findPrimary:function(models){var primary=this.context.has('primaryRecord')&&_.findWhere(models,{id:this.context.get('primaryRecord').id});return primary||_.find(models,function(model){return app.acl.hasAccessToModel('edit',model);});},_initializeMergeFields:function(){var meta=app.metadata.getView(this.module,'record'),fieldDefs=app.metadata.getModule(this.module).fields;this.mergeFields=_.chain(meta.panels).map(function(panel){return this.flattenFieldsets(panel.fields);},this).flatten().filter(function(field){return field.name&&this.validMergeField(fieldDefs[field.name]);},this).value();},_initializeMergeCollection:function(records){var ids=(_.pluck(records,'id'));if(this.collection){this.collection.filterDef=[];this.collection.filterDef.push({'id':{'$in':ids}});this.collection.comparator=function(model){return _.indexOf(ids,model.get('id'));};}},triggerSave:function(){var self=this,alternativeModels=_.without(this.collection.models,this.primaryRecord),alternativeModelNames=[];_.each(alternativeModels,function(model){alternativeModelNames.push(app.utils.getRecordName(model));},this);this.clearValidationErrors(this.getFieldNames());app.alert.show('merge_confirmation',{level:'confirmation',messages:app.lang.get('LBL_MERGE_DUPLICATES_CONFIRM')+' '+
alternativeModelNames.join(', ')+'. '+
app.lang.get('LBL_MERGE_DUPLICATES_PROCEED'),onConfirm:_.bind(this._savePrimary,this)});},_savePrimary:function(){var self=this,fields=this.getFieldNames().filter(function(field){return app.acl.hasAccessToModel('edit',this.primaryRecord,field);},this);this.primaryRecord.trigger('duplicate:unformat:field');this.primaryRecord.save({},{fieldsToValidate:fields,success:function(){self.primaryRecord.trigger('duplicate:format:field');self.primaryRecord.trigger('mergeduplicates:primary:saved');},error:function(error){if(error.status===409){app.utils.resolve409Conflict(error,self.primaryRecord,function(model,isDatabaseData){if(model){if(isDatabaseData){self.resetRadioSelection(model.id);}else{self._savePrimary();}}});}},lastModified:this.primaryRecord.get('date_modified'),showAlerts:true,viewed:true});},_removeMerged:function(){var self=this,models=_.without(this.collection.models,this.primaryRecord);async.forEach(models,function(model,callback){self.collection.remove(model);model.destroy({success:function(){callback.call();}});},function(){self.primaryRecord.trigger('mergeduplicates:primary:merged');});},getFieldNames:function(){var fields=[],fieldDefs=app.metadata.getModule(this.module).fields;_.each(this.mergeFields,function(mergeField){var def=fieldDefs[mergeField.name];_.each(this.relatedFieldsMap,function(relatedField){if(!_.isUndefined(def[relatedField])&&!_.isUndefined((fieldDefs[def[relatedField]].name))){fields.push(fieldDefs[def[relatedField]].name);}});var related_fields=mergeField.related_fields||def.related_fields||undefined;if(!_.isUndefined(related_fields)&&_.isArray(related_fields)){_.each(related_fields,function(rField){fields.push(rField);});}
fields.push(def.name);},this);return _.unique(fields);},_generateMetadata:function(fields){this.generatedValues={teamsets:[]};_.each(fields,function(field){if(field.type==='teamset'){var teams={};this.collection.each(function(model){_.each(model.get(field.name),function(team){teams[team.id]=team;});});this.generatedValues.teamsets[field.name]=_.values(teams);field.maxHeight=_.size(teams);field.noRadioBox=true;}},this);var models=this.collection.without(this.primaryRecord);fields=_.sortBy(fields,function(field){return _.every(models,function(model){return _.isEqual(this.primaryRecord.get(field.name),model.get(field.name));},this);},this);return{type:'list',panels:[{fields:fields}]};},_isSimilar:function(primary,models){return _.every(models,function(model){var modelFields=this.rowFields[model.id],primaryFields=this.rowFields[primary.id];return _.every(modelFields,function(field,index){return field.equals(primaryFields[index]);},this);},this);},validMergeField:function(fieldDef){if(!fieldDef||fieldDef.auto_increment===true||!this._validMergeFieldName(fieldDef)||!this._validMergeFieldType(fieldDef)||this._isDuplicateMergeDisabled(fieldDef)){return false;}
if(this._isDuplicateMergeEnabled(fieldDef)){return true;}
return this._validMergeFieldAttributes(fieldDef);},_validMergeFieldName:function(defs){return!_.contains(this.fieldNameBlacklist,defs.name);},_validMergeFieldType:function(defs){return!_.contains(this.fieldTypesBlacklist,defs.type);},_isDuplicateMergeDisabled:function(defs){if(!_.isUndefined(defs.duplicate_merge)&&(defs.duplicate_merge==='disabled'||defs.duplicate_merge===false)){return true;}
return false;},_isDuplicateMergeEnabled:function(defs){if(!_.isUndefined(defs.duplicate_merge)&&(defs.duplicate_merge==='enabled'||defs.duplicate_merge===true)){return true;}
return false;},_validMergeFieldAttributes:function(defs){defs.dbType=defs.dbType||defs.type;defs.source=defs.source||'db';defs.calculated=defs.calculated||false;if(defs.calculated!==false){return false;}
return _.some(this.validArrayAttributes,function(o){return _.chain(o).keys().every(function(key){return o[key]===defs[key];}).value();});},flattenFieldsets:function(defs){var fieldsetFilter=function(field){return(field.type&&_.isArray(field.fields)&&_.contains(this.flattenFieldTypes,field.type));},fields=_.reject(defs,fieldsetFilter,this),fieldsets=_.filter(defs,fieldsetFilter,this),sort=_.chain(defs).pluck('name').value()||[],sortTemp=[];while(fieldsets.length){var fieldsNames=_.chain(fieldsets).pluck('fields').flatten().pluck('name').value();sortTemp=[];_.each(sort,function(value){if(value===_.first(fieldsets).name){sortTemp=sortTemp.concat(fieldsNames);}else{sortTemp=sortTemp.concat(value);}},this);sort=sortTemp;fieldsets=_.chain(fieldsets).pluck('fields').flatten().value();fields=fields.concat(_.reject(fieldsets,fieldsetFilter));fieldsets=_.filter(fieldsets,fieldsetFilter);}
fields=_.sortBy(fields,function(value,index){var result=index,name=value;if(!_.isUndefined(value.name)){name=value.name;_.each(sort,function(valueSort,indexSort){if(valueSort==name){result=indexSort;}});}
return result;});return fields;},togglePreview:function(evt){if(this.isPreviewOpen){app.events.trigger('preview:close');}else{this.updatePreviewRecord(this.primaryRecord);}
this.isPreviewOpen=!this.isPreviewOpen;$(evt.currentTarget).toggleClass('on',this.isPreviewOpen);},updatePreviewRecord:function(model){var module=model.module||model.get('module');var previewCollection=app.data.createBeanCollection(module,[model]);app.events.trigger('preview:render',model,previewCollection,false);},updatePrimaryTitle:function(title){this.$('[data-container=primary-title]').text(title);},_renderHtml:function(){this.meta=this._generateMetadata(this.mergeFields);this._super("_renderHtml");this.rowFields={};_.each(this.fields,function(field){if(field.model.id&&_.isUndefined(field.parent)){this.rowFields[field.model.id]=this.rowFields[field.model.id]||[];this.rowFields[field.model.id].push(field);}},this);this.setPrimaryEditable(this.primaryRecord.id);this.setDraggable();this._showAlertIfIdentical();},_showAlertIfIdentical:function(){if(!this.collection.length){return;}
var self=this,alternatives=this.collection.without(this.primaryRecord);if(this._isSimilar(this.primaryRecord,alternatives)){app.alert.show('merge_confirmation_identical',{level:'confirmation',messages:app.lang.get('TPL_MERGE_DUPLICATES_IDENTICAL',this.module),onConfirm:function(){self.layout.trigger('mergeduplicates:save:fire');}});}},setDraggable:function(){var self=this,mergeContainer=this.$('[data-container=merge-container]');mergeContainer.find('[data-container=primary-label]').sortable({connectWith:self.$('[data-container=primary-label]'),appendTo:mergeContainer,axis:'x',disableSelection:true,cursor:'move',placeholder:'primary-lbl-placeholder-span',start:function(event,ui){self.$('[data-container=primary-label]').addClass('primary-lbl-placeholder');},stop:_.bind(self._onStopSorting,self)});mergeContainer.find('[data-container=primary-label].disabled').sortable('option','disabled',true);},_onStopSorting:function(event,ui){var self=this,droppedTo=ui.item.parents('[data-record-id]');self.$('[data-container=primary-label]').removeClass('primary-lbl-placeholder');if(droppedTo.length===0){self.$('[data-container=primary-label]').sortable('cancel');return;}
if(self.primaryRecord&&self.primaryRecord.id!==droppedTo.data('record-id')){var changedAttributes=self.primaryRecord.changedAttributes(self.primaryRecord.getSyncedAttributes());if(!_.isEmpty(changedAttributes)){app.alert.show('change_primary_confirmation',{level:'confirmation',messages:app.lang.get('LBL_MERGE_UNSAVED_CHANGES'),onConfirm:function(){self.primaryRecord.revertAttributes();self.setPrimaryEditable(droppedTo.data('record-id'));},onCancel:function(){self.$('[data-record-id='+self.primaryRecord.get('id')+'] '+'[data-container=primary-label]').sortable('cancel');}});return;}
self.setPrimaryEditable(droppedTo.data('record-id'));}},checkCopyRadioButtons:function(){if(!this.primaryRecord){return;}
_.each(this.mergeFields,function(field){var model=this.primaryRecord,element=this.$('[data-field-name='+field.name+'][data-record-id='+model.id+']'),others=this.$('[data-field-name='+field.name+'][data-record-id!='+model.id+']'),editAccess=app.acl.hasAccessToModel('edit',model,field.name);element.prop('disabled',!editAccess||field.readonly);if(!editAccess||field.readonly){others.prop('disabled',true);return;}
_.each(others,function(domElement){var el=$(domElement),readAccess=app.acl.hasAccessToModel('read',this.collection.get(el.data('record-id')),field.name);el.prop('disabled',!readAccess);},this);},this);},setPrimaryEditable:function(id){var oldPrimaryRecord=this.primaryRecord,newPrimaryRecord=this.collection.get(id||null);if(!_.isUndefined(newPrimaryRecord)&&newPrimaryRecord!==oldPrimaryRecord){this.setPrimaryRecord(newPrimaryRecord);}
if(!this.primaryRecord){return;}
if(oldPrimaryRecord&&oldPrimaryRecord!==this.primaryRecord){this.toggleFields(this.rowFields[oldPrimaryRecord.id],false);}
this.primaryRecord.trigger('duplicate:format:field');this.toggleFields(this.rowFields[this.primaryRecord.id],true);this.updatePrimaryTitle(app.utils.getRecordName(this.primaryRecord));if(this.isPreviewOpen){this.updatePreviewRecord(this.primaryRecord);}
this.$('.primary-edit-mode').removeClass('primary-edit-mode');this.$('[data-record-id='+this.primaryRecord.id+']').addClass('primary-edit-mode');this.resetRadioSelection(this.primaryRecord.id);this.checkCopyRadioButtons();this._disableRemovePrimary();if(this.collection.length<=2){this.$('[data-action=delete]').css('visibility','hidden');}},_disableRemovePrimary:function(){var disableRemovePrimary=!_.some(this.collection.models,function(model){return model!==this.primaryRecord&&app.acl.hasAccessToModel('edit',model);},this);this.$('[data-record-id='+this.primaryRecord.get('id')+']').find('[data-action=delete]').css('visibility',(disableRemovePrimary?'hidden':'visible'));},resetRadioSelection:function(modelId){this.$('[data-record-id='+modelId+'] input[type=radio]').attr('checked',true);},setPrimaryRecord:function(model){if(this.primaryRecord===model){return;}
if(this.primaryRecord instanceof Backbone.Model){this.primaryRecord.off(null,null,this);}
this.primaryRecord=model;this.primaryRecord.on('change',function(model){this.updatePrimaryTitle(app.utils.getRecordName(this.primaryRecord));},this);this.primaryRecord.on('mergeduplicates:primary:saved',function(){this._mergeRelatedRecords();},this);this.primaryRecord.on('mergeduplicates:related:merged',function(){this._onRelatedMerged();},this);this.primaryRecord.on('mergeduplicates:primary:merged',function(){app.alert.dismiss('mergeduplicates_merging');this._showSuccessMessage();app.drawer.close(true,this.primaryRecord);},this);},triggerCopy:function(evt){var currentTarget=this.$(evt.currentTarget),recordId=currentTarget.data('record-id'),recordItemId=currentTarget.data('record-item-id'),fieldName=currentTarget.data('field-name'),fieldDefs=app.metadata.getModule(this.module).fields,model;if(_.isUndefined(this.primaryRecord)||_.isUndefined(this.primaryRecord.id)||_.isUndefined(recordId)||_.isUndefined(fieldName)||_.isUndefined(fieldDefs[fieldName])){return;}
model=this.collection.get(recordId);if(_.isUndefined(model)){return;}
if(!app.acl.hasAccessToModel('edit',this.primaryRecord,fieldName)||!app.acl.hasAccessToModel('read',model,fieldName)){return;}
var data=_.extend({},currentTarget.data(),{checked:currentTarget.prop('type')==='checkbox'?currentTarget.prop('checked'):true});if(this.triggerBefore('duplicate:field',{model:model,data:data})===false){return;}
if(model===this.primaryRecord){this.revert(fieldName);}else{this.copy(fieldName,model);}},copy:function(fieldName,model){this._setRelatedFields(fieldName,model);this.primaryRecord.set(fieldName,model.get(fieldName));this.primaryRecord.trigger('duplicate:field:'+fieldName,model!==this.primaryRecord?model:null,model!==this.primaryRecord?model.get(fieldName):null);},revert:function(fieldName){var syncedAttributes=this.primaryRecord.getSyncedAttributes();this._setRelatedFields(fieldName,this.primaryRecord,true);this.primaryRecord.set(fieldName,!_.isUndefined(syncedAttributes[fieldName])?syncedAttributes[fieldName]:this.primaryRecord.get(fieldName));this.primaryRecord.trigger('duplicate:field:'+fieldName,this.primaryRecord,this.primaryRecord.get(fieldName));},triggerDelete:function(evt){var recordId=this.$(evt.currentTarget).closest('[data-record-id]').data('recordId'),model=this.collection.get(recordId),self=this;if(this.collection.length<=2||!recordId||!model){return;}
if(model===this.primaryRecord){var allow=_.some(this.collection.models,function(model){return model!==this.primaryRecord&&app.acl.hasAccessToModel('edit',model);},this);if(!allow){return;}}
app.alert.show('record-delete-confirm',{level:'confirmation',messages:app.lang.get('LBL_MERGE_DUPLICATES_REMOVE',this.module),onConfirm:function(){self.deleteFromMerge(model);}});},deleteFromMerge:function(model){this.collection.remove(model,{silent:true});var selModelEl='[data-container=merge-record][data-record-id='+model.get('id')+']';if(model===this.primaryRecord){var primary=this._findPrimary(this.collection.models),selNewPrimaryEl='[data-container=merge-record][data-record-id='+primary.get('id')+']',primaryEl=this.$(selNewPrimaryEl).find('[data-container=primary-label]'),primaryLabel=this.$(selModelEl).find('[data-container=primary-label-span]');primaryEl.append(primaryLabel);this.setPrimaryEditable(primary.get('id'));}
this.$(selModelEl).remove();if(this.collection.length<=2){this.$('[data-action=delete]').css('visibility','hidden');}},_setRelatedFields:function(fieldName,model,synced){synced=synced||false;var fieldDefs=app.metadata.getModule(this.module).fields;defs=fieldDefs[fieldName],syncedAttributes=synced?model.getSyncedAttributes():{},fields=_.union(defs.populate_list,defs.related_fields);_.each(this.relatedFieldsMap,function(field){if(!_.isUndefined(defs[field])&&!_.isUndefined(fieldDefs[defs[field]].name)){fields.push(fieldDefs[defs[field]].name);};});_.each(fields,function(relatedField){if(_.isUndefined(fieldDefs[relatedField])){return;}
this.primaryRecord.set(relatedField,!_.isUndefined(syncedAttributes[relatedField])?syncedAttributes[relatedField]:model.get(relatedField));},this);},_getRelatedLinks:function(){var fieldDefs=app.metadata.getModule(this.module).fields,excludedLinks=this._getExcludedRelatedLinks();return _.filter(fieldDefs,function(field){return!_.isUndefined(field.type)&&field.type==='link'&&!_.contains(excludedLinks,field.name)&&this._isValidRelateLink(field)&&this._isValidRelateLinkType(field);},this);},_getExcludedRelatedLinks:function(){var excludedLinks=[],fieldDefs=app.metadata.getModule(this.module).fields;_.each(this.mergeFields,function(mergeField){var def=fieldDefs[mergeField.name];if(def.type==='relate'&&!_.isUndefined(def.link)){excludedLinks.push(def.link);}},this);return excludedLinks;},_isValidRelateLink:function(link){if(!link||!link.name){return false;}
var module=app.data.getRelatedModule(this.module,link.name);if(_.isEmpty(app.metadata.getModule(module))){return false;}
if(_.contains(this.relatesBlacklist,link.name)){return false;}
if(!_.isUndefined(this.relatesBlacklistForModule[this.module])&&_.contains(this.relatesBlacklistForModule[this.module],link.name)){return false;}
if(!_.isUndefined(link.duplicate_merge)&&(link.duplicate_merge==='disabled'||link.duplicate_merge==='false'||link.duplicate_merge===false)){return false;}
return true;},_isValidRelateLinkType:function(link){if(!_.isUndefined(link.link_type)&&link.link_type==='one'){return false;}
return true;},_mergeRelatedRecords:function(){var self=this,alternativeModels=_.without(this.collection.models,this.primaryRecord),relatedLinks=_.pluck(this._getRelatedLinks(),'name'),progressView,queue,tasks=[];this.mergeStat={records:this.collection.models.length,total:0,total_errors:0,total_fetch_errors:0};this.mergeProgressModel=new Backbone.Model({isStopped:false});this.mergeRelatedCollection=this.getMergeRelatedCollection();if(!alternativeModels||!alternativeModels.length){self.primaryRecord.trigger('mergeduplicates:related:merged');return;}
if(!relatedLinks||!_.isArray(relatedLinks)||!relatedLinks.length){self.primaryRecord.trigger('mergeduplicates:related:merged');return;}
progressView=this._getProgressView();progressView.reset();progressView.setTotalRecords(alternativeModels.length*relatedLinks.length);this.mergeProgressModel.trigger('massupdate:start');_.each(relatedLinks,function(link){_.each(alternativeModels,function(model){tasks.push({collection:self._createRelatedCollection(model,link)});});});queue=async.queue(function(task,callback){if(self.mergeProgressModel.get('isStopped')){callback.call();return;}
self._mergeRelatedCollection(task.collection,callback);},this._settings.merge_relate_fetch_concurrency);queue.drain=function(){var finishMerge=function(){self.mergeProgressModel.trigger('massupdate:end');if(!self.mergeProgressModel.get('isStopped')){self.primaryRecord.trigger('mergeduplicates:related:merged');}};self.mergeRelatedCollection.queue.running()?self.mergeRelatedCollection.queue.drain=finishMerge:finishMerge();};queue.push(tasks,function(err){});},getMergeRelatedCollection:function(){var constructor=Backbone.Collection.extend({method:'create',queue:null,view:null,id:this.primaryRecord.id,module:this.primaryRecord.module,attempt:0,initialize:function(models,options){this.view=options.view;this.queue=async.queue(_.bind(function(task,callback){this.sync('update',this,{chunk:task,queueSuccess:callback});},this),this.view._settings.merge_relate_update_concurrency);this.on('add',function(model,options){this.queue.push({link_name:model.link.name,ids:_.pluck(this.models,'id')},function(err){});this.reset();},this);},sync:function(method,model,options){var apiMethod=options.method||this.method,url=app.api.buildURL(this.module,method,{link:true,id:this.id},options.params),callbacks={success:function(data,response){model.view.mergeStat.total=model.view.mergeStat.total+options.chunk.ids.length;options.queueSuccess();if(_.isFunction(options.success)){options.success(model,data,response);}},error:function(xhr,status,error){model.attempt=model.attempt+1;model.view.mergeProgressModel.trigger('massupdate:item:attempt',model);if(model.attempt<=(model.view._settings.merge_relate_max_attempt)){app.api.call(apiMethod,url,options.chunk,callbacks);}else{model.attempt=0;model.view.mergeStat.total_errors=model.view.mergeStat.total_errors+1;model.view.mergeProgressModel.trigger('massupdate:item:fail',model);}},complete:function(xhr,status){if(_.isFunction(options.complete)){options.complete(xhr,status);}}};app.api.call(apiMethod,url,options.chunk,callbacks);}}),collection=new constructor([],{view:this});return collection;},_onRelatedMerged:function(){var self=this;if(this.mergeStat.total_fetch_errors>0||this.mergeStat.total_errors>0){app.alert.show('final_confirmation',{level:'confirmation',messages:app.lang.get('LBL_MERGE_DUPLICATES_FAIL_PROCESS',this.module),onConfirm:function(){self._onMergeRelatedCompleted();},onCancel:function(){self.mergeProgressModel.trigger('massupdate:end');},autoClose:false});return;}
this._onMergeRelatedCompleted();},_onMergeRelatedCompleted:function(){app.alert.show('mergeduplicates_merging',{level:'process',title:app.lang.get('LBL_SAVING',this.module)});this._removeMerged();},_createRelatedCollection:function(model,link){var relatedCollection=app.data.createRelatedCollection(model,link);return _.extend(relatedCollection,{attempt:0,maxAllowAttempt:this._settings.merge_relate_max_attempt,objectName:app.data.getRelatedModule(this.primaryRecord.module,link)});},_mergeRelatedCollection:function(collection,callback,offset){if(this.mergeProgressModel.get('isStopped')){callback.call();return;}
offset=offset||0;var self=this,onCollectionMerged=function(){self.mergeProgressModel.trigger('massupdate:item:processed');callback.call();};collection.fetch({relate:true,limit:this._settings.merge_relate_fetch_limit,offset:offset,fields:['id'],apiOptions:{timeout:this._settings.merge_relate_fetch_timeout,skipMetadataHash:true},success:function(data,response,options){if(!data||!data.models||!data.models.length){onCollectionMerged.call();return;}
self.mergeRelatedCollection.add(data.models);if(!_.isUndefined(data.next_offset)&&data.next_offset!==-1){self._mergeRelatedCollection(collection,callback,data.next_offset);}else{onCollectionMerged.call();}},error:function(){collection.attempt=collection.attempt+1;self.mergeProgressModel.trigger('massupdate:item:attempt',collection);if(collection.attempt<=collection.maxAllowAttempt){self._mergeRelatedCollection(collection,callback,offset);}else{self.mergeStat.total_fetch_errors=self.mergeStat.total_fetch_errors+1;self.mergeProgressModel.trigger('massupdate:item:fail',collection);onCollectionMerged.call();}}});},_getProgressView:function(){var progressView=this.layout.getComponent('merge-duplicates-progress');if(!progressView){progressView=app.view.createView({context:this.context,name:'merge-duplicates-progress',layout:this.layout,model:this.mergeProgressModel});this.layout._components.push(progressView);this.layout.$el.append(progressView.$el);}
progressView.render();return progressView;},_showSuccessMessage:function(){app.alert.show('mergerelated_final_notice',{level:'success',messages:app.lang.get('TPL_MERGE_DUPLICATES_STAT',this.module,{stat:this.mergeStat}),autoClose:true,autoCloseDelay:8000});},bindDataChange:function(){if(!this.collection){return;}
this.collection.on('reset',function(coll){if(coll.length){_.each(coll.models,function(model){model.readonly=!app.acl.hasAccessToModel('edit',model);},this);this.setPrimaryRecord(this._findPrimary(coll.models));}
if(this.disposed){return;}
this.render();},this);},_dispose:function(){if(!_.isEmpty(this.primaryRecord)){this.primaryRecord.off(null,null,this);}
this._super('_dispose');}}) },
"merge-duplicates-headerpane": {"controller": /*
     * Your installation or use of this SugarCRM file is subject to the applicable
     * terms available at
     * http://support.sugarcrm.com/06_Customer_Center/10_Master_Subscription_Agreements/.
     * If you do not agree to all of the applicable terms or do not have the
     * authority to bind the entity as an authorized representative, then do not
     * install or use this SugarCRM file.
     *
     * Copyright (C) SugarCRM Inc. All rights reserved.
     */
({
	// Merge-duplicates-headerpane View (base) 
extendsFrom:'HeaderpaneView',events:{'click a[name=cancel_button]':'cancel','click a[name=save_button]':'save'},_formatTitle:function(title){var records=this.context.get('selectedDuplicates');return app.lang.get(title,this.module,{mergeCount:records.length});},cancel:function(){app.drawer.close();},save:function(){this.layout.trigger('mergeduplicates:save:fire');}}) },
"merge-duplicates-progress": {"controller": /*
     * Your installation or use of this SugarCRM file is subject to the applicable
     * terms available at
     * http://support.sugarcrm.com/06_Customer_Center/10_Master_Subscription_Agreements/.
     * If you do not agree to all of the applicable terms or do not have the
     * authority to bind the entity as an authorized representative, then do not
     * install or use this SugarCRM file.
     *
     * Copyright (C) SugarCRM Inc. All rights reserved.
     */
({
	// Merge-duplicates-progress View (base) 
extendsFrom:'MassupdateProgressView',plugins:['editable'],_labelSet:{TITLE:'LBL_MERGE_DUPLICATES_TITLE',PROGRESS_STATUS:'TPL_MERGE_DUPLICATES_PROGRESS_STATUS',FAIL_TO_ATTEMPT:'TPL_MERGE_DUPLICATES_FAIL_TO_ATTEMPT',FAIL:'TPL_MERGE_DUPLICATES_FAIL'},processedCount:0,failsCount:0,initLabels:function(){this.LABELSET=this._labelSet;},reset:function(){this.processedCount=0;this.failsCount=0;this.totalRecord=0;},checkAvailable:function(){return true;},getEstimate:function(){return 0;},setTotalRecords:function(total){this.totalRecord=total;},getTotalRecords:function(){return this.totalRecord;},getRemainder:function(){return'';},setProgressSize:function(count){this.processedCount;},incrementProgressSize:function(){this.processedCount=this.processedCount+1;},getProgressSize:function(){return this.processedCount;},checkError:function(context){if(_.isUndefined(context)||_.isUndefined(context.attempt)){return;}
if(context.attempt===0||context.attempt>(context.maxAllowAttempt||3)){return;}
app.alert.dismiss('check_error_message');app.alert.show('check_error_message',{level:'warning',messages:app.lang.get(this.LABELSET['FAIL_TO_ATTEMPT'],this.module,{objectName:context.objectName||'',num:context.attempt,total:(context.maxAllowAttempt||3)}),autoClose:true,autoCloseDelay:8000});},_onDrawerReset:function(){this.showProgress();return false;},showProgress:function(){app.drawer.before('reset',this._onDrawerReset,this,true);this._super('showProgress');},pauseProgress:function(){var stopButton=this.getField('btn-stop');if(stopButton){stopButton.setDisabled(true);}
this.$holders.bar.removeClass('active');this.model.trigger('massupdate:pause:completed');},resumeProgress:function(){var stopButton=this.getField('btn-stop');if(stopButton){stopButton.setDisabled(false);}
this.model.trigger('massupdate:resume:completed');},stopProgress:function(){this.model.trigger('massupdate:stop:completed');},hideProgress:function(){app.drawer.offBefore('reset',this._onDrawerReset,this);this.hide();app.alert.dismiss('stop_confirmation');app.alert.dismiss('check_error_message');this.model.trigger('massupdate:end:completed');},onItemProcessed:function(){this.incrementProgressSize();this.updateProgress();this.model.trigger('massupdate:item:processed:completed');},onNextAttept:function(context){this.checkError(context);this.model.trigger('massupdate:item:attempt:completed');},onItemFail:function(context){this.failsCount=this.failsCount+1;this.$holders.bar.removeClass('progress-info').addClass('progress-danger');app.alert.dismiss('fail_message');app.alert.show('fail_message',{level:'error',messages:app.lang.get(this.LABELSET['FAIL'],this.module,{objectName:context.objectName||''})});this.model.trigger('massupdate:item:fail:completed');},bindDataChange:function(){if(!this.model){return;}
this.on('render',this.initHolders,this);this.before('start',this.checkAvailable,this,true);this.model.on('massupdate:always',this.updateProgress,this);this.model.on('massupdate:start',this.showProgress,this);this.model.on('massupdate:end',this.hideProgress,this);this.model.on('massupdate:fail',this.checkError,this);this.model.on('massupdate:resume',this.resumeProgress,this);this.model.on('massupdate:pause',this.pauseProgress,this);this.model.on('massupdate:stop',this.stopProgress,this);this.model.on('massupdate:item:processed',this.onItemProcessed,this);this.model.on('massupdate:item:attempt',this.onNextAttept,this);this.model.on('massupdate:item:fail',this.onItemFail,this);}}) },
"mobile-action": {"controller": /*
     * Your installation or use of this SugarCRM file is subject to the applicable
     * terms available at
     * http://support.sugarcrm.com/06_Customer_Center/10_Master_Subscription_Agreements/.
     * If you do not agree to all of the applicable terms or do not have the
     * authority to bind the entity as an authorized representative, then do not
     * install or use this SugarCRM file.
     *
     * Copyright (C) SugarCRM Inc. All rights reserved.
     */
({
	// Mobile-action View (base) 
tagName:'span',events:{'click [data-action=mobile]':'navigateToMobile'},navigateToMobile:function(){if(document.cookie.indexOf('sugar_mobile=')!==-1){document.cookie='sugar_mobile=; expires=Thu, 01 Jan 1970 00:00:01 GMT;';}
window.location=app.utils.buildUrl('mobile/')+window.location.hash;}}) },
"modal-confirm": {"controller": /*
     * Your installation or use of this SugarCRM file is subject to the applicable
     * terms available at
     * http://support.sugarcrm.com/06_Customer_Center/10_Master_Subscription_Agreements/.
     * If you do not agree to all of the applicable terms or do not have the
     * authority to bind the entity as an authorized representative, then do not
     * install or use this SugarCRM file.
     *
     * Copyright (C) SugarCRM Inc. All rights reserved.
     */
({
	// Modal-confirm View (base) 
events:{'click [name=close_button]':'close','click [name=ok_button]':'ok'},initialize:function(options){this.message=options.layout.confirmMessage;app.view.View.prototype.initialize.call(this,options);},close:function(evt){this.layout.context.trigger("modal:close");},ok:function(evt){this.layout.context.trigger("modal:callback");}}) },
"modal-header": {"controller": /*
     * Your installation or use of this SugarCRM file is subject to the applicable
     * terms available at
     * http://support.sugarcrm.com/06_Customer_Center/10_Master_Subscription_Agreements/.
     * If you do not agree to all of the applicable terms or do not have the
     * authority to bind the entity as an authorized representative, then do not
     * install or use this SugarCRM file.
     *
     * Copyright (C) SugarCRM Inc. All rights reserved.
     */
({
	// Modal-header View (base) 
events:{'click .close':'close'},close:function(){this.layout.hide();},setTitle:function(title){this.title=title;},setButton:function(buttons){this.buttons=buttons;}}) },
"module-menu": {"controller": /*
     * Your installation or use of this SugarCRM file is subject to the applicable
     * terms available at
     * http://support.sugarcrm.com/06_Customer_Center/10_Master_Subscription_Agreements/.
     * If you do not agree to all of the applicable terms or do not have the
     * authority to bind the entity as an authorized representative, then do not
     * install or use this SugarCRM file.
     *
     * Copyright (C) SugarCRM Inc. All rights reserved.
     */
({
	// Module-menu View (base) 
tagName:'span',events:{'click [data-event]':'handleMenuEvent','click [data-route]':'handleRouteEvent'},actions:[],_defaultSettings:{favorites:3,recently_viewed:3},_settings:{},initialize:function(options){options.meta=_.extend({},options.meta,app.metadata.getView(null,options.name),app.metadata.getView(options.module,options.name));options.collection=options.collection||app.data.createBeanCollection(options.module);this._super('initialize',[options]);this._initSettings();this.events=_.extend({},this.events,{'shown.bs.dropdown':'populateMenu'});},_initSettings:function(){this._settings=_.extend({},this._defaultSettings,this.meta&&this.meta.settings||{});return this;},_renderHtml:function(){var meta=app.metadata.getModule(this.module)||{};this.actions=this.filterByAccess(meta.menu&&meta.menu.header&&meta.menu.header.meta);this._super('_renderHtml');if(!this.meta.short){this.$el.addClass('btn-group');}},filterByAccess:function(meta){var result=[];_.each(meta,function(menuItem){if(app.acl.hasAccess(menuItem.acl_action,menuItem.acl_module)){result.push(menuItem);}});return result;},populateMenu:function(){var meta=app.metadata.getModule(this.module)||{};if(_.isEmpty(_.omit(meta.fields,'_hash'))){return;}
if(meta.favoritesEnabled){this.populate('favorites',[{'$favorite':''}],this._settings.favorites);}
this.populate('recently-viewed',[{'$tracker':'-7 DAY'}],this._settings.recently_viewed);},isOpen:function(){return!!this.$el.hasClass('open');},populate:function(tplName,filter,limit){if(limit<=0){return;}
this.collection.fetch({'showAlerts':false,'fields':['id','name'],'filter':filter,'limit':limit,'success':_.bind(function(){this._renderPartial(tplName);},this)});},_renderPartial:function(tplName,options){var tpl,$placeholder,$old,focusedRoute,focusSelector,$new,$newFocus;if(this.disposed||!this.isOpen()){return;}
options=options||{};tpl=app.template.getView(this.name+'.'+tplName,this.module)||app.template.getView(this.name+'.'+tplName);$placeholder=this.$('[data-container="'+tplName+'"]');$old=$placeholder.nextUntil('.divider');focusedRoute=$old.find(document.activeElement).data('route');$old.remove();$placeholder.after(tpl(_.extend({'collection':this.collection},options)));if(focusedRoute){$new=$placeholder.nextUntil('.divider');focusSelector='[data-route="'+focusedRoute+'"]';$newFocus=$new.find(focusSelector);if($newFocus.length>0){$newFocus.focus();}}},handleMenuEvent:function(evt){var $currentTarget=this.$(evt.currentTarget);app.events.trigger($currentTarget.data('event'),this.module,evt);},handleRouteEvent:function(event){var currentRoute,$currentTarget=this.$(event.currentTarget),route=$currentTarget.data('route');event.preventDefault();if((!_.isUndefined(event.button)&&event.button!==0)||event.ctrlKey||event.metaKey){event.stopPropagation();window.open(route,'_blank');return false;}
currentRoute='#'+Backbone.history.getFragment();(currentRoute===route)?app.router.refresh():app.router.navigate(route,{trigger:true});}}) },
"news": {"controller": /*
     * Your installation or use of this SugarCRM file is subject to the applicable
     * terms available at
     * http://support.sugarcrm.com/06_Customer_Center/10_Master_Subscription_Agreements/.
     * If you do not agree to all of the applicable terms or do not have the
     * authority to bind the entity as an authorized representative, then do not
     * install or use this SugarCRM file.
     *
     * Copyright (C) SugarCRM Inc. All rights reserved.
     */
({
	// News View (base) 
plugins:['Dashlet'],initDashlet:function(){if(this.meta.config){var limit=this.settings.get("limit")||"5";this.settings.set("limit",limit);}
this.model.on("change:name",this.loadData,this);},loadData:function(options){var name,limit;if(_.isUndefined(this.model)){return;}
var name=this.model.get("account_name")||this.model.get('name')||this.model.get('full_name'),limit=parseInt(this.settings.get('limit')||5,10);if(_.isEmpty(name)){return;}
$.ajax({url:'https://ajax.googleapis.com/ajax/services/search/news?v=1.0&q='+
name.toLowerCase()+'&rsz='+limit,dataType:'jsonp',success:function(data){if(this.disposed){return;}
_.extend(this,data);this.render();},context:this,complete:options?options.complete:null});}}) },
"notifications": {"controller": /*
     * Your installation or use of this SugarCRM file is subject to the applicable
     * terms available at
     * http://support.sugarcrm.com/06_Customer_Center/10_Master_Subscription_Agreements/.
     * If you do not agree to all of the applicable terms or do not have the
     * authority to bind the entity as an authorized representative, then do not
     * install or use this SugarCRM file.
     *
     * Copyright (C) SugarCRM Inc. All rights reserved.
     */
({
	// Notifications View (base) 
plugins:['Dropdown','RelativeTime','EllipsisInline','Tooltip'],collection:null,_alertsCollections:{},dateStarted:null,_remindersIntervalId:null,_intervalId:null,_defaultOptions:{delay:5,limit:4},events:{'click [data-action=is-read-handler]':'isReadHandler'},initialize:function(options){options.module='Notifications';this._super('initialize',[options]);app.events.on('app:sync:complete',this._bootstrap,this);app.events.on('app:logout',this.stopPulling,this);},_bootstrap:function(){this._initOptions();this._initCollection();this._initReminders();this.startPulling();this.collection.on('change:is_read',this.render,this);return this;},_initOptions:function(){var options=_.extend(this._defaultOptions,this.meta||{});this.delay=options.delay*60*1000;this.limit=options.limit;return this;},_initCollection:function(){this.collection=app.data.createBeanCollection(this.module);this.collection.options={params:{order_by:'date_entered:desc'},limit:this.limit,myItems:true,fields:['date_entered','id','is_read','name','severity']};this.collection.filterDef=[{is_read:{$equals:false}}];this.collection.sync=_.wrap(this.collection.sync,function(sync,method,model,options){options=options||{};options.endpoint=function(method,model,options,callbacks){var url=app.api.buildURL(model.module,'pull',{},options.params);return app.api.call('read',url,{},callbacks);};sync(method,model,options);});return this;},_initReminders:function(){var timeOptions=_.keys(app.lang.getAppListStrings('reminder_time_options')),max=_.max(timeOptions,function(key){return parseInt(key,10);});this.reminderMaxTime=parseInt(max,10)+this.delay / 1000;this.reminderDelay=30*1000;_.each(['Calls','Meetings'],function(module){this._alertsCollections[module]=app.data.createBeanCollection(module);this._alertsCollections[module].options={limit:this.meta.remindersLimit,fields:['date_start','id','name','reminder_time','location','parent_name']};},this);return this;},startPulling:function(){if(!_.isNull(this._intervalId)){return this;}
this.dateStarted=new Date().getTime();this.pull();this._pullReminders();this._intervalId=window.setTimeout(_.bind(this._pullAction,this),this.delay);this._remindersIntervalId=window.setTimeout(_.bind(this.checkReminders,this),this.reminderDelay);return this;},_pullAction:function(){if(!app.api.isAuthenticated()){this.stopPulling();return;}
var diff=this.delay-(new Date().getTime()-this.dateStarted)%this.delay;this._intervalId=window.setTimeout(_.bind(this._pullAction,this),diff);this.pull();this._pullReminders();},stopPulling:function(){if(!_.isNull(this._intervalId)){window.clearInterval(this._intervalId);this._intervalId=null;}
if(!_.isNull(this._remindersIntervalId)){window.clearInterval(this._remindersIntervalId);this._remindersIntervalId=null;}
return this;},pull:function(){if(this.disposed||this.isOpen()){return this;}
var self=this;this.collection.fetch({success:function(){if(self.disposed||self.isOpen()){return this;}
self.render();}});return this;},_pullReminders:function(){if(this.disposed||!_.isFinite(this.reminderMaxTime)){return this;}
var date=new Date(),startDate=date.toISOString(),endDate;date.setTime(date.getTime()+this.reminderMaxTime*1000);endDate=date.toISOString();_.each(['Calls','Meetings'],function(module){this._alertsCollections[module].filterDef=_.extend({},this.meta.remindersFilterDef||{},{'date_start':{'$dateBetween':[startDate,endDate]},'users.id':{'$equals':app.user.get('id')}});this._alertsCollections[module].fetch({silent:true,merge:true,apiOptions:{skipMetadataHash:true}});},this);return this;},checkReminders:function(){if(!app.api.isAuthenticated()){this.stopPulling();return this;}
var date=new Date(),diff=this.reminderDelay-(date.getTime()-this.dateStarted)%this.reminderDelay;this._remindersIntervalId=window.setTimeout(_.bind(this.checkReminders,this),diff);_.each(this._alertsCollections,function(collection){_.chain(collection.models).filter(function(model){var needDate=new Date(model.get('date_start'))-parseInt(model.get('reminder_time'),10)*1000;return needDate>date&&needDate-date<=diff;},this).each(this._showReminderAlert,this);},this);return this;},_showReminderAlert:function(model){var url=app.router.buildRoute(model.module,model.id),dateFormat=app.user.getPreference('datepref')+' '+app.user.getPreference('timepref'),dateValue=app.date.format(new Date(model.get('date_start')),dateFormat),template=app.template.getView('notifications.notifications-alert'),message=template({title:app.lang.get('LBL_REMINDER_TITLE',model.module),module:model.module,model:model,location:model.get('location'),description:model.get('description'),dateStart:dateValue,parentName:model.get('parent_name')});_.defer(function(){if(confirm(message)){app.router.navigate(url,{trigger:true});}});},isOpen:function(){return this.$('[data-name=notifications-list-button]').hasClass('open');},isReadHandler:function(event){var element=$(event.currentTarget),id=element.data('id'),notification=this.collection.get(id),isRead=notification.get('is_read');if(!isRead){notification.set({is_read:true});}},_renderHtml:function(){if(!app.api.isAuthenticated()||app.config.appStatus==='offline'){return;}
this._super('_renderHtml');},_dispose:function(){this.stopPulling();this._alertsCollections={};this._super('_dispose');}}) },
"opportunity-metrics": {"controller": /*
     * Your installation or use of this SugarCRM file is subject to the applicable
     * terms available at
     * http://support.sugarcrm.com/06_Customer_Center/10_Master_Subscription_Agreements/.
     * If you do not agree to all of the applicable terms or do not have the
     * authority to bind the entity as an authorized representative, then do not
     * install or use this SugarCRM file.
     *
     * Copyright (C) SugarCRM Inc. All rights reserved.
     */
({
	// Opportunity-metrics View (base) 
plugins:['Dashlet','Chart'],className:'opportunity-metrics-wrapper',metricsCollection:null,initialize:function(options){this._super('initialize',[options]);this.chart=nv.models.pieChart().x(function(d){return d.key;}).y(function(d){return d.value;}).margin({top:5,right:20,bottom:20,left:20}).donut(true).donutLabelsOutside(true).donutRatio(0.447).hole(this.total).showTitle(false).tooltips(true).showLegend(false).colorData('class').tooltipContent(function(key,x,y,e,graph){return'<p><b>'+key+' '+parseInt(y,10)+'</b></p>';}).strings({noData:app.lang.getAppString('LBL_CHART_NO_DATA')});},renderChart:function(){if(!this.isChartReady()){return;}
this.chart.hole(this.total);d3.select(this.el).select('svg#'+this.cid).datum(this.chartCollection).transition().duration(500).call(this.chart);this.chart_loaded=_.isFunction(this.chart.update);this.displayNoData(!this.chart_loaded);},evaluateResult:function(data){var total=0;_.each(data,function(value,key){data[key].formattedAmount=app.currency.formatAmountLocale(value.amount_usdollar,null,0);data[key].icon=key==='won'?'caret-up':(key==='lost'?'caret-down':'minus');data[key].cssClass=key==='won'?'won':(key==='lost'?'lost':'active');data[key].dealLabel=key;data[key].stageLabel=app.lang.getAppListStrings('opportunity_metrics_dom')[key];total+=value.count;});this.total=total;this.metricsCollection=data;this.chartCollection={data:_.map(this.metricsCollection,function(value,key){return{'key':value.stageLabel,'value':value.count,'classes':key};}),properties:{title:app.lang.getAppString('LBL_DASHLET_OPPORTUNITY_NAME'),value:3,label:total}};},loadData:function(options){var self=this,url;if(this.meta.config){return;}
url=app.api.buildURL(this.model.module,'opportunity_stats',{id:this.model.get('id')});app.api.call('read',url,null,{success:function(data){self.evaluateResult(data);if(!self.disposed){self.render();}},error:_.bind(function(){this.displayNoData(true);},this),complete:options?options.complete:null});}}) },
"orgchart": {"controller": /*
     * Your installation or use of this SugarCRM file is subject to the applicable
     * terms available at
     * http://support.sugarcrm.com/06_Customer_Center/10_Master_Subscription_Agreements/.
     * If you do not agree to all of the applicable terms or do not have the
     * authority to bind the entity as an authorized representative, then do not
     * install or use this SugarCRM file.
     *
     * Copyright (C) SugarCRM Inc. All rights reserved.
     */
({
	// Orgchart View (base) 
events:{'click .zoom-control':'zoomChart','click .toggle-control':'toggleChart'},plugins:['Dashlet','Tooltip','Chart'],nodetemplate:null,reporteesEndpoint:'',zoomExtents:null,nodeSize:null,jsTree:null,slider:null,sliderZoomIn:null,sliderZoomOut:null,initialize:function(options){var self=this;this._super('initialize',[options]);this.nodetemplate=app.template.getView(this.name+'.orgchartnode');this.reporteesEndpoint=app.api.buildURL('Forecasts','orgtree/'+app.user.get('id'),null,{'level':2});this.zoomExtents={'min':0.25,'max':1.75};this.nodeSize={'width':124,'height':56};this.chart=nv.models.tree().duration(300).nodeSize(this.nodeSize).nodeRenderer(function(d){return self.nodetemplate(d.metadata);}).zoomExtents(self.zoomExtents).zoomCallback(function(scale){self.moveSlider(scale);}).horizontal(false).getId(function(d){return d.metadata.id;});},_buildUserUrl:function(id){return'#'+app.bwc.buildRoute('Employees',id);},renderChart:function(){var self=this;if(!this.isChartReady()){return;}
if(!this.slider){this.slider=this.$('.btn-slider .noUiSlider');this.sliderZoomIn=this.$('.btn-slider i[data-control="zoom-in"]');this.sliderZoomOut=this.$('.btn-slider i[data-control="zoom-out"]');this.slider.noUiSlider('init',{start:100,knobs:1,scale:[this.zoomExtents.min*100,this.zoomExtents.max*100],connect:false,step:25,change:function(moveType){var values,scale;if(!self.chart_loaded){return;}
if(moveType==='slide'){values=self.slider.noUiSlider('value');scale=self.chart.zoomLevel(values[0]/ 100);}else{scale=self.chart.zoomScale();}
self.sliderZoomIn.toggleClass('disabled',(scale===self.zoomExtents.max));self.sliderZoomOut.toggleClass('disabled',(scale===self.zoomExtents.min));}});}
this.moveSlider();if(this.jsTree){this.jsTree.jstree('destroy');}
this.jsTree=this.$('div[data-control="org-jstree"]').jstree({'json_data':{'data':this.chartCollection},'plugins':['json_data','ui','types'],'core':{'animation':0},'ui':{'initially_select':['jstree_node_'+app.user.get('user_name')]}}).on('loaded.jstree',function(e){self.$('div[data-control="org-jstree"]').addClass('jstree-sugar');self.$('div[data-control="org-jstree"] > ul').addClass('list');self.$('div[data-control="org-jstree"] > ul > li > a').addClass('jstree-clicked');}).on('click.jstree',function(e){e.stopPropagation();e.preventDefault();}).on('select_node.jstree',function(event,data){var jsData=data.inst.get_json();self.chart.filter(jQuery.data(data.rslt.obj[0],'id'));self.forceRepaint();self.moveSlider();self.$('div[data-control="org-jstree-dropdown"] .jstree-label').text(data.inst.get_text());data.inst.toggle_node(data.rslt.obj);});app.accessibility.run(this.jsTree,'click');d3.select('svg#'+this.cid).datum(this.chartCollection[0]).transition().duration(500).call(this.chart);this.chart.reset();this.$('img').error(function(){$(this).attr('src','include/images/user.svg');});this.forceRepaint();this.$('.nv-expcoll').on('click',function(e){self.forceRepaint();self.moveSlider();});this.chart_loaded=_.isFunction(this.chart.resize);this.displayNoData(!this.chart_loaded);},forceRepaint:function(){this.$('.rep-avatar').on('load',function(){$(this).removeClass('loaded').addClass('loaded');});this.$('img').error(function(){$(this).attr('src','include/images/user.svg');});},moveSlider:function(scale){var s=scale||1;if(this.slider){this.slider.noUiSlider('move',{to:s*100});}},hasChartData:function(){return!_.isEmpty(this.chartCollection);},chartResize:function(){this.moveSlider();this.chart.resize();},_postProcessTree:function(data){var root=[],self=this;if(_.isArray(data)&&data.length==2){root.push(data[0]);root[0].children.push(data[1]);}else{root.push(data);}
if(_.isEmpty(root[0].metadata.id)){return null;}
_.each(root,function(entry){var adopt=[];if(!entry.data){return;}
entry.metadata.url=self._buildUserUrl(entry.metadata.id);if(!entry.metadata.picture||entry.metadata.picture===''){entry.metadata.img='include/images/user.svg';}else{entry.metadata.img=app.api.buildFileURL({module:'Employees',id:entry.metadata.id,field:'picture'});}
if(!entry.children){return;}
_.each(entry.children,function(childEntry){var newChild;if(entry.metadata.id!==childEntry.metadata.id){newChild=self._postProcessTree(childEntry);if(!_.isEmpty(newChild)){adopt.push(newChild[0]);}}},this);entry.children=adopt;},this);return root;},zoomChart:function(e){var button,step,scale;if(!this.chart_loaded){return;}
button=$(e.target).data('control');step=0.25*(button==='zoom-in'?1:-1);scale=this.chart.zoomStep(step);this.moveSlider(scale);},toggleChart:function(e){var button;if(!this.chart_loaded){return;}
button=$(e.currentTarget).hasClass('btn')?$(e.currentTarget):$(e.currentTarget).parent('.btn');switch(button.data('control')){case'orientation':this.chart.orientation();button.find('i').toggleClass('icon-arrow-right icon-arrow-down');break;case'show-all-nodes':this.chart.showall();this.forceRepaint();break;case'zoom-to-fit':this.chart.resize();break;default:}
this.moveSlider();},loadData:function(options){var self=this;app.api.call('get',this.reporteesEndpoint,null,{success:function(data){self.chartCollection=self._postProcessTree(data);if(!self.disposed){self.renderChart();}},complete:options?options.complete:null});},_dispose:function(){if(this.jsTree){this.jsTree.jstree('destroy');}
if(this.slider){this.slider.off('move');}
this._super('_dispose');}}) },
"panel-top": {"controller": /*
     * Your installation or use of this SugarCRM file is subject to the applicable
     * terms available at
     * http://support.sugarcrm.com/06_Customer_Center/10_Master_Subscription_Agreements/.
     * If you do not agree to all of the applicable terms or do not have the
     * authority to bind the entity as an authorized representative, then do not
     * install or use this SugarCRM file.
     *
     * Copyright (C) SugarCRM Inc. All rights reserved.
     */
({
	// Panel-top View (base) 
className:'subpanel-header',attributes:{'data-sortable-subpanel':'true'},events:{'click':'togglePanel','click a[name=create_button]:not(".disabled")':'createRelatedClicked',},plugins:['LinkedModel'],initialize:function(opts){app.view.View.prototype.initialize.call(this,opts);var context=this.context;this.parentModule=context.parent.get('module');context.parent.on('panel-top:refresh',function(link){if(context.get('link')===link){context.get('collection').fetch();}});},createRelatedClicked:function(event){this.createRelatedRecord(this.module)},togglePanel:function(e){var toggleSubpanel=!$(e.target).parents("span.actions").length;if(toggleSubpanel){this._toggleSubpanel();}},_toggleSubpanel:function(){if(!this.layout.disposed){var isHidden=this.layout.$(".subpanel").hasClass('closed');this.layout.trigger('panel:toggle',isHidden);}},bindDataChange:function(){if(this.collection){this.listenTo(this.collection,'reset',this.render);}}}) },
"password-expired": {"controller": /*
     * Your installation or use of this SugarCRM file is subject to the applicable
     * terms available at
     * http://support.sugarcrm.com/06_Customer_Center/10_Master_Subscription_Agreements/.
     * If you do not agree to all of the applicable terms or do not have the
     * authority to bind the entity as an authorized representative, then do not
     * install or use this SugarCRM file.
     *
     * Copyright (C) SugarCRM Inc. All rights reserved.
     */
({
	// Password-expired View (base) 
plugins:['ErrorDecoration'],events:{'click [name=save_button]':'savePassword'},initialize:function(options){var meta=options.meta||{},fields={};_.each(_.flatten(_.pluck(meta.panels,"fields")),function(field){fields[field.name]=field;});this.fieldsToValidate=fields;app.view.View.prototype.initialize.call(this,options);},_render:function(){var self=this;var message=app.lang.getAppString('LBL_PASSWORD_EXPIRATION_LOGIN');app.alert.dismissAll();this.logoUrl=app.metadata.getLogoUrl();this._showPasswordRequirements=false;this.passwordRequirements=[];if(app.user&&app.user.has('password_requirements')){this._showPasswordRequirements=true;var preqs=app.user.get('password_requirements');_.each(preqs,function(val,key){self.passwordRequirements.push(val);});}
app.view.View.prototype._render.call(this);if(app.user&&app.user.has('password_expired_message')){message=app.user.get('password_expired_message');}
this.$('.password-reqs-status').text(message);return this;},savePassword:function(){var self=this,callbacks,newPass,oldPass=self.$('[name=current_password]').val();self.model.doValidate(this.fieldsToValidate,function(isValid){if(isValid){if(app.config.honeypot_on&&app.config.honeypot_on===true&&(self.$('input[name="name_field"]').val()||self.model.get('name_field')))return;newPass=self.model.get('expired_password_update');if(newPass){app.alert.dismiss('changePassword');app.alert.show('passreset',{level:'process',title:app.lang.get('LBL_CHANGE_PASSWORD'),messages:app.lang.get('LBL_PROCESSING'),autoClose:false});app.api.updatePassword(oldPass,newPass,{success:function(data){app.alert.dismiss('passreset');app.$contentEl.show();if(data&&data.valid){callbacks=self.context.get("callbacks");if(callbacks&&callbacks.complete){callbacks.complete();}}else if(data.message){app.alert.show('password-invalid',{level:'error',title:data.message});}else{app.alert.show('password-invalid',{level:'error',title:app.lang.get('ERR_GENERIC_TITLE')+': '+
app.lang.get('ERR_CONTACT_TECH_SUPPORT')});}},error:function(error){app.alert.dismiss('passreset');app.error.handleHttpError(error,self);}});}}},self);}}) },
"passwordmodal": {"controller": /*
     * Your installation or use of this SugarCRM file is subject to the applicable
     * terms available at
     * http://support.sugarcrm.com/06_Customer_Center/10_Master_Subscription_Agreements/.
     * If you do not agree to all of the applicable terms or do not have the
     * authority to bind the entity as an authorized representative, then do not
     * install or use this SugarCRM file.
     *
     * Copyright (C) SugarCRM Inc. All rights reserved.
     */
({
	// Passwordmodal View (base) 
extendsFrom:'BaseeditmodalView',fallbackFieldTemplate:'edit',initialize:function(options){app.view.View.prototype.initialize.call(this,options);if(this.layout){this.layout.on("app:view:password:editmodal",function(){this.model=this.context.get('model');this.render();this.$('.modal').modal('show');this.model.on("error:validation",function(){this.resetButton();},this);},this);}
this.bindDataChange();},_renderHtml:function(){this.saveButtonWasClicked=false;this.events=_.clone(this.events);_.extend(this.events,{"focusin input[name=new_password]":"verifyCurrentPassword","focusin input[name=confirm_password]":"verifyCurrentPassword"});app.view.View.prototype._renderHtml.call(this);},verifyCurrentPassword:function(){var self=this,currentPassword;currentPassword=self.$('[name=current_password]').val();if(currentPassword&&currentPassword.length&&!self.saveButtonWasClicked){app.api.verifyPassword(currentPassword,{success:function(data){if(!self.checkUpdatePassWorked(data)){app.alert.show('pass_verification_failed',{level:'error',title:app.lang.get('LBL_PASSWORD',self.module),messages:app.lang.get('ERR_PASSWORD_MISMATCH',self.module)});self.$('[name=current_password]').val('');self.$('[name=current_password]').focus();}else{app.alert.dismiss('pass_verification_failed');}},error:function(error){app.error.handleHttpError(error,self);self.resetButton();}});}},handleCustomValidationError:function(field,errorMsg){field=field.parents('.control-group')
field.addClass('error');field.find('.help-block').html("");field.find('.help-block').append(errorMsg);field.find('.add-on').remove();field.find('input:last').after('<span class="add-on"><i class="icon-exclamation-sign"></i></span>');},setLoading:function(){this.$('[name=save_button]').attr('data-loading-text',app.lang.get('LBL_LOADING'));this.$('[name=save_button]').button('loading');},verify:function(){var self=this,currentPassword,password,confirmPassword,confirmPasswordField,isError=false,passwordField,maxLen,currentPasswordField;self.setLoading();currentPasswordField=this.$('[name=current_password]');currentPassword=currentPasswordField.val();passwordField=this.$('[name=new_password]');password=passwordField.val();confirmPasswordField=this.$('[name=confirm_password]');confirmPassword=confirmPasswordField.val();if(!currentPassword){self.handleCustomValidationError(currentPasswordField,app.lang.get('ERR_ENTER_OLD_PASSWORD',self.module));isError=true;}
if(!password){self.handleCustomValidationError(passwordField,app.lang.get('ERR_ENTER_NEW_PASSWORD',self.module));isError=true;}
if(!confirmPassword){self.handleCustomValidationError(confirmPasswordField,app.lang.get('ERR_ENTER_CONFIRMATION_PASSWORD',self.module));isError=true;}
if(password!==confirmPassword){self.setLoading();self.handleCustomValidationError(confirmPasswordField,app.lang.get('ERR_REENTER_PASSWORDS'),self.module);isError=true;}
var passwordField=self.context.get('passwordField'),mod=app.metadata.getModule(self.module);maxLen=mod[passwordField]?parseInt(mod[passwordField].len,10):0;if(maxLen>0&&confirmPassword.length>maxLen){self.handleCustomValidationError(confirmPasswordField,app.error.getErrorString('ERROR_MAX_FIELD_LENGTH',maxLen));isError=true;}
return!isError;},saveButton:function(){if(this.verify()){this.saveModel();}else{this.resetButton();}},saveModel:function(){var self=this,oldPass=self.model.get('current_password'),newPass=self.model.get('new_password');this.saveButtonWasClicked=true;app.alert.show('passreset',{level:'process',title:app.lang.get('LBL_PASSWORD',self.module),messages:app.lang.get('LBL_PROCESSING',self.module),autoClose:false});app.api.updatePassword(oldPass,newPass,{success:function(data){app.alert.dismiss('passreset');if(self.checkUpdatePassWorked(data)){self.saveComplete();}else{app.alert.show('pass_update_failed',{level:'error',title:app.lang.get('LBL_PASSWORD',self.module),messages:app.lang.get('LBL_CANNOT_SEND_PASSWORD')});self.$('.modal').modal().find('input:text, input:password').val('');self.resetButton();}},error:function(error){app.alert.dismiss('passreset');app.error.handleHttpError(error,self);self.resetButton();}});},checkUpdatePassWorked:function(data){if(!data||!data.valid){app.logger.error("Failed to update password.");return false;}
return true;},saveComplete:function(){var self=this;self.model.unset('current_password',{silent:true});self.model.unset('confirm_password',{silent:true});self.model.unset('new_password',{silent:true});self.$('.modal').modal('hide').find('form').get(0).reset();self.resetButton();app.alert.show('pass_successfully_changes',{level:'success',title:app.lang.get('LBL_PASSWORD',self.module),messages:app.lang.get('LBL_NEW_USER_PASSWORD_1',self.module),autoClose:true});}}) },
"planned-activities": {"controller": /*
     * Your installation or use of this SugarCRM file is subject to the applicable
     * terms available at
     * http://support.sugarcrm.com/06_Customer_Center/10_Master_Subscription_Agreements/.
     * If you do not agree to all of the applicable terms or do not have the
     * authority to bind the entity as an authorized representative, then do not
     * install or use this SugarCRM file.
     *
     * Copyright (C) SugarCRM Inc. All rights reserved.
     */
({
	// Planned-activities View (base) 
extendsFrom:'HistoryView',_defaultSettings:{date:'today',limit:10,visibility:'user'},initDashlet:function(){this._super('initDashlet');if(!this.meta.last_state){this.meta.last_state={id:this.dashModel.get('id')+':'+this.name,defaults:{}};}
this.settings.on('change:date',function(model,value){var specificDateKey=app.user.lastState.key('date',this);app.user.lastState.set(specificDateKey,value);},this);this.settings.set('date',this.getDate());this.tbodyTag='ul[data-action="pagination-body"]';},_initEvents:function(){this.events=_.extend(this.events,{'click [data-action=date-switcher]':'dateSwitcher'});this._super('_initEvents');this.on('planned-activities:close-record:fire',this.heldActivity,this);this.before('render:rows',function(data){this.updateInvitation(this.collection,data);return false;},null,this);return this;},updateInvitation:function(collection,data){var tab=this.tabs[this.settings.get('activeTab')];if(!data.length||!tab.invitations){return;}
this._fetchInvitationActions(tab,_.pluck(data,'id'));},heldActivity:function(model){var self=this;var name=Handlebars.Utils.escapeExpression(app.utils.getRecordName(model)).trim();var context=app.lang.get('LBL_MODULE_NAME_SINGULAR',model.module).toLowerCase()+' '+name;app.alert.show('close_activity_confirmation:'+model.get('id'),{level:'confirmation',messages:app.utils.formatString(app.lang.get('LBL_PLANNED_ACTIVITIES_DASHLET_CONFIRM_CLOSE'),[context]),onConfirm:function(){model.save({status:'Held'},{showAlerts:true,success:self._getRemoveModelCompleteCallback()});}});},createRecord:function(event,params){var bwcExceptions=['Emails'],meta=app.metadata.getModule(params.module)||{};if(meta.isBwcEnabled&&!_.contains(bwcExceptions,params.module)){this._createBwcRecord(params.module,params.link);return;}
this.createRelatedRecord(params.module,params.link);},_createBwcRecord:function(module,link){if(this.module!=='Home'){app.bwc.createRelatedRecord(module,this.model,link);return;}
var params={return_module:this.module,return_id:this.model.id};var route=app.bwc.buildRoute(module,null,'EditView',params);app.router.navigate(route,{trigger:true});},_openCreateDrawer:function(module,layout){layout=layout||'create-actions';app.drawer.open({layout:layout,context:{create:true,module:module,prepopulate:this._prePopulateDrawer(module)}},_.bind(function(context,newModel){if(newModel&&newModel.id){this.layout.loadData();}},this));},_prePopulateDrawer:function(module){var data={related:this.model};if(module==='Emails'){data['to_addresses']=this.model;}
return data;},_initTabs:function(){this._super("_initTabs");_.each(this.tabs,function(tab){if(!tab.invitation_actions){return;}
tab.invitations=this._createInvitationsCollection(tab);},this);return this;},_createInvitationsCollection:function(tab){return app.data.createBeanCollection(tab.module,null,{link:{name:tab.module.toLowerCase(),bean:app.data.createBean('Users',{id:app.user.get('id')})}});},_getRecordsTemplate:function(module){this._recordsTpl=this._recordsTpl||{};if(!this._recordsTpl[module]){this._recordsTpl[module]=app.template.getView(this.name+'.records',module)||app.template.getView(this.name+'.records',this.module)||app.template.getView(this.name+'.records')||app.template.getView('history.records',this.module)||app.template.getView('history.records')||app.template.getView('tabbed-dashlet.records',this.module)||app.template.getView('tabbed-dashlet.records');}
return this._recordsTpl[module];},_getFilters:function(index){var today=app.date().format('YYYY-MM-DD'),tab=this.tabs[index],filter={},filters=[],defaultFilters={today:{$lte:today},future:{$gt:today}};filter[tab.filter_applied_to]=defaultFilters[this.getDate()];filters.push(filter);return filters;},tabSwitcher:function(event){var tab=this.tabs[this.settings.get('activeTab')];if(tab.invitations){tab.invitations.dataFetched=false;}
this._super('tabSwitcher',[event]);},dateSwitcher:function(event){var date=this.$(event.currentTarget).val();if(date===this.getDate()){return;}
this.settings.set('date',date);this.layout.loadData();},getDate:function(){var date=app.user.lastState.get(app.user.lastState.key('date',this),this);return date||this.settings.get('date')||this._defaultSettings.date;},loadData:function(options){if(this.disposed||this.meta.config){return;}
var tab=this.tabs[this.settings.get('activeTab')];if(tab.invitations){tab.invitations.dataFetched=false;}
this._super('loadData',[options]);},_fetchInvitationActions:function(tab,addedIds){this.invitationActions=tab.invitation_actions;tab.invitations.filterDef={'id':{'$in':addedIds||this.collection.pluck('id')}};tab.invitations.fetch({relate:true,success:_.bind(function(collection){if(this.disposed){return;}
_.each(collection.models,function(invitation){var model=this.collection.get(invitation.get('id'));model.set('invitation',invitation);},this);if(!_.isEmpty(addedIds)){_.each(addedIds,function(id){var model=this.collection.get(id);this._renderRow(model);},this);return;}
this.render();},this),complete:function(){tab.invitations.dataFetched=true;}});},_renderHtml:function(){if(this.meta.config){this._super("_renderHtml");return;}
var tab=this.tabs[this.settings.get('activeTab')];if(tab.overdue_badge){this.overdueBadge=tab.overdue_badge;}
if(!this.collection.length||!tab.invitations||tab.invitations.dataFetched){this._super('_renderHtml');return;}
this._fetchInvitationActions(tab);}}) },
"preview": {"controller": /*
     * Your installation or use of this SugarCRM file is subject to the applicable
     * terms available at
     * http://support.sugarcrm.com/06_Customer_Center/10_Master_Subscription_Agreements/.
     * If you do not agree to all of the applicable terms or do not have the
     * authority to bind the entity as an authorized representative, then do not
     * install or use this SugarCRM file.
     *
     * Copyright (C) SugarCRM Inc. All rights reserved.
     */
({
	// Preview View (base) 
plugins:['ToggleMoreLess'],fallbackFieldTemplate:'detail',switching:false,hiddenPanelExists:false,initialize:function(options){app.view.View.prototype.initialize.call(this,options);this.action='detail';app.events.on('preview:open',this.openPreview,this);app.events.on("preview:render",this._renderPreview,this);app.events.on("preview:collection:change",this.updateCollection,this);app.events.on("preview:close",this.closePreview,this);app.events.on("preview:module:update",this.updatePreviewModule,this);if(this.layout){this.layout.on("preview:pagination:fire",this.switchPreview,this);}
this.collection=app.data.createBeanCollection(this.module);},updateCollection:function(collection){if(this.collection){this.collection.reset(collection.models);this.showPreviousNextBtnGroup();}},updatePreviewModule:function(module){this.previewModule=module;},filterCollection:function(){this.collection.remove(_.filter(this.collection.models,function(model){return!app.acl.hasAccessToModel("view",model);},this),{silent:true});},_renderHtml:function(){this.showPreviousNextBtnGroup();app.view.View.prototype._renderHtml.call(this);},showPreviousNextBtnGroup:function(){if(!this.model||!this.layout||!this.collection){return;}
var collection=this.collection;if(!collection.size()){this.layout.hideNextPrevious=true;}
var recordIndex=collection.indexOf(collection.get(this.model.id));this.layout.previous=collection.models[recordIndex-1]?collection.models[recordIndex-1]:undefined;this.layout.next=collection.models[recordIndex+1]?collection.models[recordIndex+1]:undefined;this.layout.hideNextPrevious=_.isUndefined(this.layout.previous)&&_.isUndefined(this.layout.next);this.layout.trigger("preview:pagination:update");},_renderPreview:function(model,collection,fetch,previewId){var self=this;if(app.drawer&&!app.drawer.isActive(this.$el)){return;}
if(this.model&&model&&(this.model.get("id")==model.get("id")&&previewId==this.previewId)){app.events.trigger("list:preview:decorate",false);app.events.trigger('preview:close');return;}
if(app.metadata.getModule(model.module).isBwcEnabled){return;}
if(model){var viewName='preview',previewMeta=app.metadata.getView(model.module,'preview'),recordMeta=app.metadata.getView(model.module,'record');if(_.isEmpty(previewMeta)||_.isEmpty(previewMeta.panels)){viewName='record';}
this.meta=this._previewifyMetadata(_.extend({},recordMeta,previewMeta));if(fetch){model.fetch({showAlerts:true,success:function(model){self.renderPreview(model,collection);},view:viewName});}else{this.renderPreview(model,collection);}}
this.previewId=previewId;},bindUpdates:function(sourceModel){if(this.sourceModel){this.stopListening(this.sourceModel);}
this.sourceModel=sourceModel;this.listenTo(this.sourceModel,'sync',function(model){if(!this.model){return;}
this.model=model;this.renderPreview(this.model);},this);this.listenTo(this.sourceModel,'change',function(){if(!this.model){return;}
this.model.set(this.sourceModel.attributes);},this);this.listenTo(this.sourceModel,'destroy',function(model){if(model&&this.model&&(this.model.get("id")==model.get("id"))){app.events.trigger("list:preview:decorate",false);app.events.trigger('preview:close');return;}},this);},renderPreview:function(model,newCollection){if(newCollection){this.collection.reset(newCollection.models);}
if(model){this.bindUpdates(model);this.model=app.data.createBean(model.module,model.toJSON());this.listenTo(this.model,'change',function(){this.sourceModel.set(this.model.attributes);},this);this.render();if(this.previewModule&&this.previewModule==="Activities"){this.layout.hideNextPrevious=true;this.layout.trigger("preview:pagination:update");}
app.events.trigger("preview:open",this);app.events.trigger("list:preview:decorate",this.model,this);}},_previewifyMetadata:function(meta){this.hiddenPanelExists=false;_.each(meta.panels,function(panel){if(panel.header){panel.header=false;panel.fields=_.filter(panel.fields,function(field){return field.type!='favorite'&&field.type!='follow';});}
if(!this.hiddenPanelExists&&panel.hide){this.hiddenPanelExists=true;}},this);return meta;},switchPreview:function(data,index,id,module){var self=this,currID=id||this.model.get("id"),currIndex=index||_.indexOf(this.collection.models,this.collection.get(currID));if(this.switching||this.collection.models.length<2){return;}
this.switching=true;if(data.direction==="left"&&(currID===_.first(this.collection.models).get("id"))||data.direction==="right"&&(currID===_.last(this.collection.models).get("id"))){this.switching=false;return;}else{data.direction==="left"?currIndex-=1:currIndex+=1;var currModule=module||this.collection.models[currIndex].module;var moduleMeta=app.metadata.getModule(currModule);this.model=app.data.createBean(currModule);this.bindUpdates(this.collection.models[currIndex]);this.model.set("id",this.collection.models[currIndex].get("id"));this.model.fetch({showAlerts:true,success:function(model){model.module=currModule;self.model=null;app.events.trigger("preview:render",model,null,false);self.switching=false;}});}},openPreview:function(){var defaultLayout=this.closestComponent('sidebar');if(defaultLayout){defaultLayout.trigger('sidebar:toggle',true);}},closePreview:function(){if(_.isUndefined(app.drawer)||app.drawer.isActive(this.$el)){this.switching=false;delete this.model;this.collection.reset();this.$el.empty();}},bindDataChange:function(){if(this.collection){this.collection.on("reset",this.filterCollection,this);this.collection.on("remove",function(model){if(model&&this.model&&(this.model.get("id")==model.get("id"))){app.events.trigger("list:preview:decorate",false);app.events.trigger('preview:close');}},this);}}}) },
"preview-header": {"controller": /*
     * Your installation or use of this SugarCRM file is subject to the applicable
     * terms available at
     * http://support.sugarcrm.com/06_Customer_Center/10_Master_Subscription_Agreements/.
     * If you do not agree to all of the applicable terms or do not have the
     * authority to bind the entity as an authorized representative, then do not
     * install or use this SugarCRM file.
     *
     * Copyright (C) SugarCRM Inc. All rights reserved.
     */
({
	// Preview-header View (base) 
className:'preview-headerbar',events:{'click [data-direction]':'triggerPagination','click .preview-headerbar .closeSubdetail':'triggerClose'},initialize:function(options){app.view.View.prototype.initialize.call(this,options);if(this.layout){this.layout.off("preview:pagination:update",null,this);this.layout.on("preview:pagination:update",this.render,this);}},triggerPagination:function(e){var direction=this.$(e.currentTarget).data();this.layout.trigger("preview:pagination:fire",direction);},triggerClose:function(){app.events.trigger("list:preview:decorate",null,this);app.events.trigger("preview:close");}}) },
"quickcreate": {"controller": /*
     * Your installation or use of this SugarCRM file is subject to the applicable
     * terms available at
     * http://support.sugarcrm.com/06_Customer_Center/10_Master_Subscription_Agreements/.
     * If you do not agree to all of the applicable terms or do not have the
     * authority to bind the entity as an authorized representative, then do not
     * install or use this SugarCRM file.
     *
     * Copyright (C) SugarCRM Inc. All rights reserved.
     */
({
	// Quickcreate View (base) 
plugins:['Dropdown','Tooltip'],initialize:function(options){app.events.on("app:sync:complete",this.render,this);app.view.View.prototype.initialize.call(this,options);app.shortcuts.register(app.shortcuts.GLOBAL+'Create','c',function(){this.$('[data-toggle=dropdown]').click();},this);},_renderHtml:function(){if(!app.api.isAuthenticated()||app.config.appStatus=='offline'){return;}
if(app.isSynced){this.createMenuItems=this._getMenuMeta(app.metadata.getModuleNames({filter:'quick_create',access:'create'}));app.view.View.prototype._renderHtml.call(this);}},_getMenuMeta:function(modules){var returnList=[];_.each(modules,function(name){var meta=app.metadata.getModule(name);if(meta&&meta.menu&&meta.menu.quickcreate){var menuItem=_.clone(meta.menu.quickcreate.meta);if(menuItem.visible===true){menuItem.module=name;menuItem.type=menuItem.type||'quickcreate';if(!("icon"in menuItem)){menuItem.icon="icon-plus";}
menuItem.model=app.data.createBean(name);returnList.push(menuItem);}}},this);return this._sortByOrder(returnList);},_sortByOrder:function(moduleList){return moduleList.sort(function(a,b){var order=a['order']-b['order'];return(order==0)?(a['label']>b['label']):order;});}}) },
"record": {"controller": /*
     * Your installation or use of this SugarCRM file is subject to the applicable
     * terms available at
     * http://support.sugarcrm.com/06_Customer_Center/10_Master_Subscription_Agreements/.
     * If you do not agree to all of the applicable terms or do not have the
     * authority to bind the entity as an authorized representative, then do not
     * install or use this SugarCRM file.
     *
     * Copyright (C) SugarCRM Inc. All rights reserved.
     */
({
	// Record View (base) 
inlineEditMode:false,createMode:false,plugins:['SugarLogic','ErrorDecoration','GridBuilder','Editable','Audit','FindDuplicates','ToggleMoreLess','Tooltip'],enableHeaderButtons:true,enableHeaderPane:true,events:{'click .record-edit-link-wrapper':'handleEdit','click a[name=cancel_button]':'cancelClicked','click [data-action=scroll]':'paginateRecord','click .record-panel-header':'togglePanel','click #recordTab > .tab > a:not(.dropdown-toggle)':'setActiveTab','click .tab .dropdown-menu a':'triggerNavTab'},buttons:null,STATE:{EDIT:'edit',VIEW:'view'},currentState:null,noEditFields:null,_containerWidth:0,initialize:function(options){_.bindAll(this);options.meta=_.extend({},app.metadata.getView(null,'record'),options.meta);app.view.View.prototype.initialize.call(this,options);this.buttons={};this.createMode=this.context.get('create')?true:false;this.action='detail';this.context.on('change:record_label',this.setLabel,this);this.context.set('viewed',true);this.context.set('dataView','record');this.model.on('duplicate:before',this.setupDuplicateFields,this);this.on('editable:keydown',this.handleKeyDown,this);this.on('editable:mousedown',this.handleMouseDown,this);this.on('field:error',this.handleFieldError,this);app.routing.before('route',this.beforeRouteDelete,this,true);$(window).on('beforeunload.delete'+this.cid,_.bind(this.warnDeleteOnRefresh,this));this.delegateButtonEvents();if(this.createMode){this.model.isNotEmpty=true;}
this.noEditFields=[];this.MORE_LESS_KEY=app.user.lastState.key(this.MORE_LESS_KEY,this);this.adjustHeaderpane=_.bind(_.debounce(this.adjustHeaderpane,50),this);$(window).on('resize.'+this.cid,this.adjustHeaderpane);$(window).on('resize.'+this.cid,this.overflowTabs);this.on('append',function(){this.overflowTabs();this.handleActiveTab();});this.on('render',this.registerShortcuts,this);},hasUnsavedChanges:function(){var changedAttributes,editableFieldNames=[],unsavedFields,self=this,setAsEditable=function(fieldName){if(fieldName&&_.indexOf(self.noEditFields,fieldName)===-1){editableFieldNames.push(fieldName);}};if(this.resavingAfterMetadataSync)
return false;changedAttributes=this.model.changedAttributes(_.extend({},this.model.getSyncedAttributes(),this.model.getDefaultAttributes()));if(_.isEmpty(changedAttributes)){return false;}
_.each(this.meta.panels,function(panel){_.each(panel.fields,function(field){if(!field.readonly){if(field.fields&&_.isArray(field.fields)){_.each(field.fields,function(field){setAsEditable(field.name);});}else{setAsEditable(field.name);}}});});unsavedFields=_.intersection(_.keys(changedAttributes),editableFieldNames);return!_.isEmpty(unsavedFields);},setupDuplicateFields:function(prefill){},setLabel:function(context,value){this.$('.record-label[data-name="'+value.field+'"]').text(value.label);},validationComplete:function(isValid){if(isValid){this.setButtonStates(this.STATE.VIEW);this.handleSave();}},delegateButtonEvents:function(){this.context.on('button:edit_button:click',this.editClicked,this);this.context.on('button:save_button:click',this.saveClicked,this);this.context.on('button:delete_button:click',this.deleteClicked,this);this.context.on('button:duplicate_button:click',this.duplicateClicked,this);},_render:function(){this._buildGridsFromPanelsMetadata(this.meta.panels);if(this.meta&&this.meta.panels){this._initTabsAndPanels();}
app.view.View.prototype._render.call(this);if(this.context.get('record_label')){this.setLabel(this.context,this.context.get('record_label'));}
_.each(this.fields,function(field){var toggleLabel=_.bind(function(){this.toggleLabelByField(field,this.createMode);},this);field.off('render',toggleLabel);if(field.$el.closest('.headerpane').length>0){field.on('render',toggleLabel);}
if(field.def.readonly&&field.name&&-1==_.indexOf(this.noEditFields,field.name)){this.$('.record-edit-link-wrapper[data-name='+field.name+']').remove();}},this);this.toggleHeaderLabels(this.createMode);this.initButtons();this.setButtonStates(this.STATE.VIEW);this.setEditableFields();if(this.createMode){this.toggleFields(this.editableFields,true);}
if($.contains(document,this.$el[0])){this.handleActiveTab();this.overflowTabs();}},_initTabsAndPanels:function(){this.meta.firstPanelIsTab=this.checkFirstPanel();this.meta.lastPanelIndex=this.meta.panels.length-1;_.each(this.meta.panels,function(panel,i){if(panel.header){this.meta.firstNonHeaderPanelIndex=(i+1);}},this);var headerExists=0;if(_.first(this.meta.panels).header){headerExists=1;}
this.meta.useTabsAndPanels=false;for(i=headerExists;i<this.meta.panels.length;i++){if(this.meta.panels[i].newTab){this.meta.useTabsAndPanels=true;}}
if(this.meta.panels.length>(2+headerExists)){this.meta.useTabsAndPanels=true;}
_.each(this.meta.panels,function(panel){var panelKey=app.user.lastState.key(panel.name+':tabState',this);var panelState=app.user.lastState.get(panelKey);panel.panelState=panelState||panel.panelDefault;},this);},handleActiveTab:function(){var activeTabHref=this.getActiveTab(),activeTab=this.$('#recordTab > .tab > a[href="'+activeTabHref+'"]');if(this.createMode){this.$('#recordTab a:first').tab('show');return;}
if(activeTabHref&&activeTab){activeTab.tab('show');}else if(this.meta.useTabsAndPanels&&this.checkFirstPanel()){this.$('#recordTab a:first').tab('show');}},getActiveTab:function(){var activeTabHref=app.user.lastState.get(app.user.lastState.key('activeTab',this));if(!activeTabHref){activeTabHref=this.$('#recordTab > .tab:first-child > a').attr('href')||'';app.user.lastState.set(app.user.lastState.key('activeTab',this),activeTabHref.substring(0,activeTabHref.indexOf(this.cid)));}
else{activeTabHref+=this.cid;}
return activeTabHref;},setActiveTab:function(event){if(this.createMode){return;}
var tabTarget=this.$(event.currentTarget).attr('href'),tabKey=app.user.lastState.key('activeTab',this),cidIndex=tabTarget.indexOf(this.cid);tabTarget=tabTarget.substring(0,cidIndex);app.user.lastState.set(tabKey,tabTarget);},savePanelState:function(panelID,state){if(this.createMode){return;}
var panelKey=app.user.lastState.key(panelID+':tabState',this);app.user.lastState.set(panelKey,state);},setEditableFields:function(){delete this.editableFields;this.editableFields=[];var previousField,firstField;_.each(this.fields,function(field){var readonlyField=field.def.readonly||_.indexOf(this.noEditFields,field.def.name)>=0||field.parent||(field.name&&this.buttons[field.name]);if(readonlyField){return;}
if(previousField){previousField.nextField=field;field.prevField=previousField;}else{firstField=field;}
previousField=field;this.editableFields.push(field);},this);if(previousField){previousField.nextField=firstField;firstField.prevField=previousField;}},initButtons:function(){if(this.options.meta&&this.options.meta.buttons){_.each(this.options.meta.buttons,function(button){this.registerFieldAsButton(button.name);if(button.buttons){var dropdownButton=this.getField(button.name);if(!dropdownButton){return;}
_.each(dropdownButton.fields,function(ddButton){this.buttons[ddButton.name]=ddButton;},this);}},this);}},showPreviousNextBtnGroup:function(){var listCollection=this.context.get('listCollection')||new app.data.createBeanCollection(this.module);var recordIndex=listCollection.indexOf(listCollection.get(this.model.id));if(listCollection&&listCollection.models&&listCollection.models.length<=1){this.showPrevNextBtnGroup=false;}else{this.showPrevNextBtnGroup=true;}
if(this.collection&&listCollection.length!==0){this.showPrevious=listCollection.hasPreviousModel(this.model);this.showNext=listCollection.hasNextModel(this.model);}},registerFieldAsButton:function(buttonName){var button=this.getField(buttonName);if(button){this.buttons[buttonName]=button;}},_renderHtml:function(){this.showPreviousNextBtnGroup();app.view.View.prototype._renderHtml.call(this);this.adjustHeaderpane();},bindDataChange:function(){this.model.on('change',function(fieldType){if(this.inlineEditMode){this.setButtonStates(this.STATE.EDIT);}
if(this.model.isNotEmpty!==true&&fieldType!=='image'){this.model.isNotEmpty=true;if(!this.disposed){this.render();}}},this);},duplicateClicked:function(){var self=this,prefill=app.data.createBean(this.model.module);prefill.copy(this.model);self.model.trigger('duplicate:before',prefill);prefill.unset('id');app.drawer.open({layout:'create-actions',context:{create:true,model:prefill,copiedFromModelId:this.model.get('id')}},function(context,newModel){if(newModel&&newModel.id){app.router.navigate(self.model.module+'/'+newModel.id,{trigger:true});}});prefill.trigger('duplicate:field',self.model);},editClicked:function(){this.setButtonStates(this.STATE.EDIT);this.toggleEdit(true);},saveClicked:function(){this.model.doValidate(this.getFields(this.module),_.bind(this.validationComplete,this));},cancelClicked:function(){this.handleCancel();this.setButtonStates(this.STATE.VIEW);this.clearValidationErrors(this.editableFields);},deleteClicked:function(){this.warnDelete();},toggleEdit:function(isEdit){this.$('.record-edit-link-wrapper').toggle(!isEdit);this.$('.headerpane .record-label').toggle(isEdit);this.toggleFields(this.editableFields,isEdit);this.toggleViewButtons(isEdit);this.adjustHeaderpane();},handleEdit:function(e,cell){var target,cellData,field;if(e){target=this.$(e.target);cell=target.parents('.record-cell');}
cellData=cell.data();field=this.getField(cellData.name);this.inlineEditMode=true;this.setButtonStates(this.STATE.EDIT);this.toggleField(field);if(cell.closest('.headerpane').length>0){this.toggleViewButtons(true);this.adjustHeaderpaneFields();}},toggleHeaderLabels:function(isEdit){this.$('.headerpane .record-label').toggle(isEdit);this.toggleViewButtons(isEdit);this.adjustHeaderpane();},toggleViewButtons:function(isEdit){this.$('.headerpane span[data-type="badge"]').toggleClass('hide',isEdit);this.$('.headerpane span[data-type="favorite"]').toggleClass('hide',isEdit);this.$('.headerpane span[data-type="follow"]').toggleClass('hide',isEdit);this.$('.headerpane .btn-group-previous-next').toggleClass('hide',isEdit);},toggleLabelByField:function(field,inCreate){if(field.action==='edit'||(field.action==='disabled'&&inCreate)){field.$el.closest('.record-cell').addClass('edit').find('.record-label').show();}else{field.$el.closest('.record-cell').removeClass('edit').find('.record-label').hide();}},handleSave:function(){var self=this;self.inlineEditMode=false;app.file.checkFileFieldsAndProcessUpload(self,{success:function(response){if(response.record&&response.record.date_modified){self.model.set('date_modified',response.record.date_modified);}
self._saveModel();}},{deleteIfFails:false});self.$('.record-save-prompt').hide();if(!self.disposed){self.render();}},_saveModel:function(){var options,successCallback=_.bind(function(){_.each(this.context.children,function(child){if(!_.isUndefined(child.attributes)&&!_.isUndefined(child.attributes.isSubpanel)){if(child.attributes.isSubpanel&&!child.attributes.hidden){child.attributes.collection.fetch();}}});if(this.createMode){app.navigate(this.context,this.model);}else if(!this.disposed){this.render();}},this);this.turnOffEvents(this.fields);options={showAlerts:true,success:successCallback,error:_.bind(function(error){if(error.status===412&&!error.request.metadataRetry){this.handleMetadataSyncError(error);}else if(error.status===409){app.utils.resolve409Conflict(error,this.model,_.bind(function(model,isDatabaseData){if(model){if(isDatabaseData){successCallback();}else{this._saveModel();}}},this));}else{this.editClicked();}},this),lastModified:this.model.get('date_modified'),viewed:true};options=_.extend({},options,this.getCustomSaveOptions(options));this.model.save({},options);},handleMetadataSyncError:function(error){var self=this;self.resavingAfterMetadataSync=true;app.once('app:sync:complete',function(){error.request.metadataRetry=true;self.model.once('sync',function(){self.resavingAfterMetadataSync=false;app.router.refresh();});error.request.execute(null,app.api.getMetadataHash());});},getCustomSaveOptions:function(options){return{};},handleCancel:function(){this.model.revertAttributes();this.toggleEdit(false);this.inlineEditMode=false;},beforeRouteDelete:function(){if(this._modelToDelete){this.warnDelete();return false;}
return true;},getDeleteMessages:function(){var messages={};var model=this.model;var name=Handlebars.Utils.escapeExpression(app.utils.getRecordName(model)).trim();var context=app.lang.get('LBL_MODULE_NAME_SINGULAR',model.module).toLowerCase()+' '+name;messages.confirmation=app.utils.formatString(app.lang.get('NTC_DELETE_CONFIRMATION_FORMATTED'),[context]);messages.success=app.utils.formatString(app.lang.get('NTC_DELETE_SUCCESS'),[context]);return messages;},warnDelete:function(){var self=this;this._modelToDelete=true;self._targetUrl=Backbone.history.getFragment();if(self._targetUrl!==self._currentUrl){app.router.navigate(self._currentUrl,{trigger:false,replace:true});}
app.alert.show('delete_confirmation',{level:'confirmation',messages:self.getDeleteMessages().confirmation,onConfirm:_.bind(self.deleteModel,self),onCancel:function(){self._modelToDelete=false;}});},warnDeleteOnRefresh:function(){if(this._modelToDelete){return this.getDeleteMessages().confirmation;}},deleteModel:function(){var self=this;self.model.destroy({showAlerts:{'process':true,'success':{messages:self.getDeleteMessages().success}},success:function(){var redirect=self._targetUrl!==self._currentUrl;self._modelToDelete=false;self.context.trigger('record:deleted');if(redirect){self.unbindBeforeRouteDelete();app.router.navigate(self._targetUrl,{trigger:true});return;}
app.router.navigate(self.module,{trigger:true});}});},handleKeyDown:function(e,field){if(e.which===9){e.preventDefault();this.nextField(field,e.shiftKey?'prevField':'nextField');this.adjustHeaderpane();}},handleMouseDown:function(){this.toggleViewButtons(false);this.adjustHeaderpaneFields();},handleFieldError:function(field,hasError){if(!hasError){return;}
var tabLink,fieldTab=field.$el.closest('.tab-pane'),fieldPanel=field.$el.closest('.record-panel-content');if(field.view.meta&&field.view.meta.useTabsAndPanels){if(fieldTab.length>0){tabLink=this.$('[href="#'+fieldTab.attr('id')+'"].[data-toggle="tab"]');tabLink.tab('show');if(tabLink.find('.icon-exclamation-sign').length===0){tabLink.append(' <i class="icon-exclamation-sign tab-warning"></i>');}}
if(fieldPanel&&fieldPanel.is(':hidden')){fieldPanel.toggle();var fieldPanelArrow=fieldPanel.prev().find('i');fieldPanelArrow.toggleClass('icon-chevron-up icon-chevron-down');}}else if(field.$el.is(':hidden')){this.$('.more[data-moreless]').trigger('click');app.user.lastState.set(this.SHOW_MORE_KEY,this.$('.less[data-moreless]'));}
else if(field.$el.closest('.panel_hidden.hide').length>0){this.toggleMoreLess(this.MORE_LESS_STATUS.MORE,true);}},setButtonStates:function(state){this.currentState=state;_.each(this.buttons,function(field){var showOn=field.def.showOn;if(_.isUndefined(showOn)||(showOn===state)){field.show();}else{field.hide();}},this);},setTitle:function(title){var $title=this.$('.headerpane .module-title');if($title.length>0){$title.text(title);}else{this.$('.headerpane h1').prepend('<div class="record-cell"><span class="module-title">'+title+'</span></div>');}},unbindBeforeRouteDelete:function(){app.routing.offBefore('route',this.beforeRouteDelete,this);$(window).off('beforeunload.delete'+this.cid);},_dispose:function(){this.unbindBeforeRouteDelete();_.each(this.editableFields,function(field){field.nextField=null;field.prevField=null;});this.buttons=null;this.editableFields=null;this.off('editable:keydown',this.handleKeyDown,this);$(window).off('resize.'+this.cid);app.view.View.prototype._dispose.call(this);},_buildGridsFromPanelsMetadata:function(panels){var lastTabIndex=0;this.noEditFields=[];_.each(panels,function(panel){_.each(panel.fields,function(field,index){if(_.isString(field)){panel.fields[index]=field={name:field};}
var keys=_.keys(field);if(keys.length===1&&keys[0]==='span'){field.readonly=true;}
if(field.type==='fieldset'){if(field.readonly||_.every(field.fields,function(field){return!app.acl.hasAccessToModel('edit',this.model,field.name);},this)){this.noEditFields.push(field.name);}}else if(field.readonly||!app.acl.hasAccessToModel('edit',this.model,field.name)){this.noEditFields.push(field.name);}},this);if(panel.hide){this.hiddenPanelExists=true;}
if(_.isUndefined(panel.labels)){panel.labels=true;}
if(_.isFunction(this.getGridBuilder)){var options={fields:panel.fields,columns:panel.columns,labels:panel.labels,labelsOnTop:panel.labelsOnTop,tabIndex:lastTabIndex},gridResults=this.getGridBuilder(options).build();panel.grid=gridResults.grid;lastTabIndex=gridResults.lastTabIndex;}},this);},paginateRecord:function(evt){var el=$(evt.currentTarget),data=el.data();if(data.id){var list=this.context.get('listCollection'),model=list.get(data.id);this._doPaginate(model,data.actionType);}},_doPaginate:function(model,actionType){var list=this.context.get('listCollection');switch(actionType){case'next':list.getNext(model,this.navigateModel);break;case'prev':list.getPrev(model,this.navigateModel);break;default:this._disablePagination(el);}},navigateModel:function(model,actionType){if(model&&model.id){if(app.acl.hasAccessToModel('view',model)){app.router.navigate(app.router.buildRoute(this.module,model.id),{trigger:true});}else{this._doPaginate(model,actionType);}}else{var el=this.$el.find('[data-action=scroll][data-action-type='+actionType+']');this._disablePagination(el);}},_disablePagination:function(el){app.logger.error('Wrong data for record pagination. Pagination is disabled.');el.addClass('disabled');el.data('id','');},adjustHeaderpane:function(){this.setContainerWidth();this.adjustHeaderpaneFields();},getContainerWidth:function(){return this._containerWidth;},setContainerWidth:function(){this._containerWidth=this._getParentLayoutWidth(this.layout);},_getParentLayoutWidth:function(layout){if(!layout){return 0;}else if(_.isFunction(layout.getPaneWidth)){return layout.getPaneWidth(this);}
return this._getParentLayoutWidth(layout.layout);},adjustHeaderpaneFields:function(){var $ellipsisCell,ellipsisCellWidth,$recordCells;if(this.disposed){return;}
$recordCells=this.$('.headerpane h1').children('.record-cell, .btn-toolbar');if(!_.isEmpty($recordCells)&&this.getContainerWidth()>0){$ellipsisCell=$(this._getCellToEllipsify($recordCells));if(!_.isEmpty($ellipsisCell)){if($ellipsisCell.hasClass('edit')){$ellipsisCell.css({'width':'100%'});}else{ellipsisCellWidth=this._calculateEllipsifiedCellWidth($recordCells,$ellipsisCell);this._setMaxWidthForEllipsifiedCell($ellipsisCell,ellipsisCellWidth);this._widenLastCell($recordCells);}}}},_getCellToEllipsify:function($cells){var fieldTypesToEllipsify=['fullname','name','text','base','enum','url','dashboardtitle'];return _.find($cells,function(cell){return(_.indexOf(fieldTypesToEllipsify,$(cell).data('type'))!==-1);});},_calculateEllipsifiedCellWidth:function($cells,$ellipsisCell){var width=this.getContainerWidth();_.each($cells,function(cell){var $cell=$(cell);if($cell.is($ellipsisCell)){width-=(parseInt($ellipsisCell.css('padding-left'),10)+
parseInt($ellipsisCell.css('padding-right'),10));}else if($cell.is(':visible')){$cell.css({'width':'auto'});width-=$cell.outerWidth();}
$cell.css({'width':''});});return width;},_setMaxWidthForEllipsifiedCell:function($ellipsisCell,width){var ellipsifiedCell,fieldType=$ellipsisCell.data('type');if(fieldType==='fullname'||fieldType==='dashboardtitle'){ellipsifiedCell=this.getField($ellipsisCell.data('name'));width-=ellipsifiedCell.getCellPadding();ellipsifiedCell.setMaxWidth(width);}else{$ellipsisCell.css({'max-width':width});}},_widenLastCell:function($cells){var $cellToWiden;_.each($cells,function(cell){var $cell=$(cell);if($cell.hasClass('record-cell')&&(!$cell.hasClass('hide')||$cell.is(':visible'))){$cellToWiden=$cell;}});if($cellToWiden){$cellToWiden.css({'width':'100%'});}},getFieldNames:function(module,onlyDataFields){var fields=onlyDataFields?[]:this._super('getFieldNames',arguments),favorite=_.find(this.meta.panels,function(panel){return _.find(panel.fields,function(field){return field.type==='favorite';});}),follow=_.find(this.meta.panels,function(panel){return _.find(panel.fields,function(field){return field.type==='follow';});});if(favorite){fields=_.union(fields,['my_favorite']);}
if(follow){fields=_.union(fields,['following']);}
return fields;},togglePanel:function(e){var $panelHeader=this.$(e.currentTarget);if($panelHeader&&$panelHeader.next()){$panelHeader.next().toggle();$panelHeader.toggleClass('panel-inactive panel-active');}
if($panelHeader&&$panelHeader.find('i')){$panelHeader.find('i').toggleClass('icon-chevron-up icon-chevron-down');}
var panelName=this.$(e.currentTarget).parent().data('panelname');var state='collapsed';if(this.$(e.currentTarget).next().is(":visible")){state='expanded';}
this.savePanelState(panelName,state);},checkFirstPanel:function(){if(this.meta&&this.meta.panels){if(this.meta.panels[0]&&this.meta.panels[0].newTab&&!this.meta.panels[0].header){return true;}
if(this.meta.panels[1]&&this.meta.panels[1].newTab){return true;}}
return false;},overflowTabs:function(){var $tabs=this.$('#recordTab > .tab:not(.dropdown)'),$dropdownList=this.$('#recordTab .dropdown'),$dropdownTabs=this.$('#recordTab .dropdown-menu li'),navWidth=this.$('#recordTab').width(),activeTabHref=this.getActiveTab(),$activeTab=this.$('#recordTab > .tab > a[href="'+activeTabHref+'"]').parent(),width=$activeTab.outerWidth()+$dropdownList.outerWidth();$tabs.each(_.bind(function(index,elem){var $tab=$(elem),overflow;if($tab.hasClass('active')){overflow=false;}
else{width+=$tab.outerWidth();overflow=width>=navWidth;}
$tab.toggleClass('hidden',overflow);this.$($dropdownTabs[index]).toggleClass('hidden',!overflow);},this));$dropdownList.toggleClass('hidden',!$tabs.is(':hidden'));},triggerNavTab:function(e){var tabTarget=e.currentTarget.hash,activeTab=this.$('#recordTab > .tab > a[href="'+tabTarget+'"]');e.preventDefault();activeTab.trigger('click');this.overflowTabs();},registerShortcuts:function(){app.shortcuts.register('Record:Edit',['e','ctrl+alt+i'],function(){var $editButton=this.$('.headerpane [name=edit_button]');if($editButton.is(':visible')&&!$editButton.hasClass('disabled')){$editButton.click();}},this);app.shortcuts.register('Record:Delete',['d','ctrl+alt+d'],function(){this.$('.headerpane [data-toggle=dropdown]:visible').click().blur();this.$('.headerpane [name=delete_button]:visible').click();},this);app.shortcuts.register('Record:Save',['ctrl+s','ctrl+alt+a'],function(){var $saveButton=this.$('a[name=save_button]');if($saveButton.is(':visible')&&!$saveButton.hasClass('disabled')){$saveButton.click();}},this,true);app.shortcuts.register('Record:Cancel',['esc','ctrl+alt+l'],function(){var $cancelButton=this.$('a[name=cancel_button]');if($cancelButton.is(':visible')&&!$cancelButton.hasClass('disabled')){$cancelButton.click();}},this,true);app.shortcuts.register('Record:Previous','h',function(){var $previous=this.$('.btn.previous-row');if($previous.is(':visible')&&!$previous.hasClass('disabled')){$previous.click();}},this);app.shortcuts.register('Record:Next','l',function(){var $next=this.$('.btn.next-row');if($next.is(':visible')&&!$next.hasClass('disabled')){$next.click();}},this);app.shortcuts.register('Record:Favorite','f a',function(){this.$('.headerpane .icon-favorite:visible').click();},this);app.shortcuts.register('Record:Follow','f o',function(){this.$('.headerpane [name=follow]:visible').click();},this);app.shortcuts.register('Record:Copy',['shift+c','ctrl+alt+u'],function(){this.$('.headerpane [data-toggle=dropdown]:visible').click().blur();this.$('.headerpane [name=duplicate_button]:visible').click();},this);app.shortcuts.register('Record:Action:More','m',function(){var $primaryDropdown=this.$('.headerpane .btn-primary[data-toggle=dropdown]:visible');if(($primaryDropdown.length>0)&&!$primaryDropdown.hasClass('disabled')){$primaryDropdown.click();}},this);}}) },
"recordlist": {"controller": /*
     * Your installation or use of this SugarCRM file is subject to the applicable
     * terms available at
     * http://support.sugarcrm.com/06_Customer_Center/10_Master_Subscription_Agreements/.
     * If you do not agree to all of the applicable terms or do not have the
     * authority to bind the entity as an authorized representative, then do not
     * install or use this SugarCRM file.
     *
     * Copyright (C) SugarCRM Inc. All rights reserved.
     */
({
	// Recordlist View (base) 
extendsFrom:'FlexListView',plugins:['SugarLogic','ReorderableColumns','ListColumnEllipsis','ErrorDecoration','Editable','MergeDuplicates','Pagination','LinkedModel'],toggledModels:null,rowFields:{},dataViewName:'list',contextEvents:{"list:editall:fire":"toggleEdit","list:editrow:fire":"editClicked","list:deleterow:fire":"warnDelete"},initialize:function(options){var recordListMeta=this._initializeMetadata(options.context);options.meta=this._filterMeta(_.extend({},recordListMeta,options.meta||{}),options);this._super("initialize",[options]);this.events=_.extend({},this.events,{'click [name=inline-cancel]':'resize'});this.on('render',this._setRowFields,this);this.context.set('dataView',this.dataViewName);this.on('list:toggle:column',this.resize,this);this.on('mergeduplicates:complete',this.refreshCollection,this);this.on('field:focus:location',this.setPanelPosition,this);if(this.layout){this.layout.on('list:mergeduplicates:fire',this.mergeDuplicatesClicked,this);this.layout.on('list:filter:toggled',this.filterToggled,this);}
this.toggledModels={};this.context._recordListFields=this.getFieldNames(null,true);this._currentUrl=Backbone.history.getFragment();app.routing.before("route",this.beforeRouteDelete,this,true);$(window).on("beforeunload.delete"+this.cid,_.bind(this.warnDeleteOnRefresh,this));},filterToggled:function(isOpened){this.context.set('filterOpened',isOpened);},getPaginationOptions:function(){var options=this.context.get('filterOpened')?this.getSearchOptions():{};if(this.context.get('limit')){options.limit=this.context.get('limit');}
options=_.extend({},this.context.get('collectionOptions'),options);return options;},getSearchOptions:function(){var collection,options,previousTerms,term='';collection=this.context.get('collection');if(app.cache.has('previousTerms')){previousTerms=app.cache.get('previousTerms');if(previousTerms){term=previousTerms[this.module];}}
options={params:{q:term},fields:collection.fields?collection.fields:this.collection};return options;},_initializeMetadata:function(){return app.metadata.getView(null,'recordlist')||{};},_filterMeta:function(meta,options){var context=options.context,isDeveloper=app.acl.hasAccess("developer",context.get("module")),hasCalcFields=context&&context.get("model")&&!!_.find(context.get("model").fields,function(def){return def&&def.calculated&&def.calculated!="false";});if((!isDeveloper||!hasCalcFields)&&meta.selection&&meta.selection.actions){meta.selection.actions=_.reject(meta.selection.actions,function(action){return action.name=="calc_field_button";});}
return meta;},refreshCollection:function(){this.collection.fetch();},addActions:function(){if(this.actionsAdded)return;this._super("addActions");if(_.isUndefined(this.leftColumns[0])){this.leftColumns.push({'type':'fieldset','label':'','sortable':false,'fields':[]});}
this.addFavorite();var firstLeftColumn=this.leftColumns[0];if(firstLeftColumn&&_.isArray(firstLeftColumn.fields)){firstLeftColumn.fields.push({type:'editablelistbutton',label:'LBL_CANCEL_BUTTON_LABEL',name:'inline-cancel',css_class:'btn-link btn-invisible inline-cancel'});this.leftColumns[0]=firstLeftColumn;}
var firstRightColumn=this.rightColumns[0];if(firstRightColumn&&_.isArray(firstRightColumn.fields)){firstRightColumn.css_class='overflow-visible';firstRightColumn.fields.push({type:'editablelistbutton',label:'LBL_SAVE_BUTTON_LABEL',name:'inline-save',css_class:'btn-primary'});this.rightColumns[0]=firstRightColumn;}
this.actionsAdded=true;},addFavorite:function(){var favoritesEnabled=app.metadata.getModule(this.module,"favoritesEnabled");if(favoritesEnabled!==false&&this.meta.favorite&&this.leftColumns[0]&&_.isArray(this.leftColumns[0].fields)){this.leftColumns[0].fields.push({type:'favorite'});}},_setRowFields:function(){this.rowFields={};_.each(this.fields,function(field){if(field.model.id&&_.isUndefined(field.parent)){this.rowFields[field.model.id]=this.rowFields[field.model.id]||[];this.rowFields[field.model.id].push(field);}},this);},_getLeftBorderPosition:function(){if(!this._leftBorderPosition){var scrollPanel=this.$('.flex-list-view-content');this._leftBorderPosition=scrollPanel.find('thead tr:first th:first').outerWidth();}
return this._leftBorderPosition;},_getRightBorderPosition:function(){if(!this._rightBorderPosition){var scrollPanel=this.$('.flex-list-view-content');this._rightBorderPosition=scrollPanel.find('thead tr:first th:last').position().left;}
return this._rightBorderPosition;},setPanelPosition:function(location){var leftBorderPosition=this._getLeftBorderPosition(),rightBorderPosition=this._getRightBorderPosition(),relativeLeft=location.left,relativeRight=location.right;if(relativeRight<=rightBorderPosition&&relativeLeft>=leftBorderPosition){return;}
this.setScrollAtRightBorder(location.right);},setScrollAtLeftBorder:function(left){var scrollPanel=this.$('.flex-list-view-content'),leftBorderPosition=this._getLeftBorderPosition(),scrollLeft=scrollPanel.scrollLeft();left+=scrollLeft-leftBorderPosition;scrollPanel.scrollLeft(left);},setScrollAtRightBorder:function(right){var scrollPanel=this.$('.flex-list-view-content'),rightBorderPosition=this._getRightBorderPosition(),scrollLeft=scrollPanel.scrollLeft();right+=scrollLeft-rightBorderPosition;scrollPanel.scrollLeft(right);},deleteModel:function(){var self=this,model=this._modelToDelete;model.destroy({showAlerts:{'process':true,'success':{messages:self.getDeleteMessages(self._modelToDelete).success}},success:function(){var redirect=self._targetUrl!==self._currentUrl;self._modelToDelete=null;self.collection.remove(model,{silent:redirect});if(redirect){self.unbindBeforeRouteDelete();app.router.navigate(self._targetUrl,{trigger:true});return;}
app.events.trigger("preview:close");if(!self.disposed){self.render();}
self.layout.trigger("list:record:deleted",model);}});},beforeRouteDelete:function(){if(this._modelToDelete){this.warnDelete(this._modelToDelete);return false;}
return true;},getDeleteMessages:function(model){var messages={};var name=Handlebars.Utils.escapeExpression(app.utils.getRecordName(model)).trim();var context=app.lang.get('LBL_MODULE_NAME_SINGULAR',model.module).toLowerCase()+' '+name;messages.confirmation=app.utils.formatString(app.lang.get('NTC_DELETE_CONFIRMATION_FORMATTED'),[context]);messages.success=app.utils.formatString(app.lang.get('NTC_DELETE_SUCCESS'),[context]);return messages;},warnDelete:function(model){var self=this;this._modelToDelete=model;self._targetUrl=Backbone.history.getFragment();if(self._targetUrl!==self._currentUrl){app.router.navigate(self._currentUrl,{trigger:false,replace:true});}
app.alert.show('delete_confirmation',{level:'confirmation',messages:self.getDeleteMessages(model).confirmation,onConfirm:_.bind(self.deleteModel,self),onCancel:function(){self._modelToDelete=null;}});},warnDeleteOnRefresh:function(){if(this._modelToDelete){return this.getDeleteMessages(this._modelToDelete).confirmation;}},hasUnsavedChanges:function(){var firstKey=_.first(_.keys(this.rowFields)),formFields=[];_.each(this.rowFields[firstKey],function(field){if(field.name){formFields.push(field.name);}
if(field.def.fields){formFields=_.chain(field.def.fields).pluck('name').compact().union(formFields).value();}},this);return _.some(_.values(this.toggledModels),function(model){var changedAttributes=model.changedAttributes(model.getSyncedAttributes());if(_.isEmpty(changedAttributes)){return false;}
var unsavedFields=_.intersection(_.keys(changedAttributes),formFields);return!_.isEmpty(unsavedFields);},this);},mergeDuplicatesClicked:function(){this.mergeDuplicates(this.context.get('mass_collection'));},editClicked:function(model,field){if(field.def.full_form){this.createRelatedRecord(this.module,this.context.get('link'),model.id);}else{this.toggleRow(model.id,true);this.resize();}},toggleRow:function(modelId,isEdit){if(isEdit){this.toggledModels[modelId]=this.collection.get(modelId);}else{delete this.toggledModels[modelId];}
this.$('tr[name='+this.module+'_'+modelId+']').toggleClass('tr-inline-edit',isEdit);this.toggleFields(this.rowFields[modelId],isEdit);},toggleEdit:function(isEdit){var self=this;this.viewName=isEdit?'edit':'list';_.each(this.rowFields,function(editableFields,modelId){_.defer(function(modelId){self.toggleRow(modelId,isEdit);},modelId);},this);},unbindBeforeRouteDelete:function(){app.routing.offBefore("route",this.beforeRouteDelete,this);$(window).off("beforeunload.delete"+this.cid);},_dispose:function(){this.unbindBeforeRouteDelete();this._super('_dispose');this.rowFields=null;},getFieldNames:function(module,onlyDataFields){var fields=onlyDataFields?[]:this._super('getFieldNames',arguments);if(this.meta.favorite){fields=_.union(fields,['my_favorite']);}
if(this.meta.following){fields=_.union(fields,['following']);}
return fields;},registerShortcuts:function(){this._super('registerShortcuts');app.shortcuts.register('List:Inline:Edit','e',function(){var self=this;if(this.$('.selected [name=inline-cancel]:visible').length===0){this.$('.selected [data-toggle=dropdown]:visible').click();this.$('.selected [name=edit_button]:visible').click();_.defer(function(){self.$('.selected input:first').focus();});}},this);app.shortcuts.register('List:Delete','d',function(){if(this.$('.selected [name=inline-cancel]:visible').length===0){this.$('.selected [data-toggle=dropdown]:visible').click().blur();this.$('.selected [name=delete_button]:visible').click();}},this);app.shortcuts.register('List:Inline:Cancel',['esc','ctrl+alt+l'],function(){var $cancelButton=this.$('.selected [name=inline-cancel]');if(($cancelButton.length>0)&&$cancelButton.is(':visible')&&!$cancelButton.hasClass('disabled')){$cancelButton.click();}},this,true);app.shortcuts.register('List:Inline:Save',['ctrl+s','ctrl+alt+a'],function(){var $saveButton=this.$('.selected [name=inline-save]');if(($saveButton.length>0)&&$saveButton.is(':visible')&&!$saveButton.hasClass('disabled')){$saveButton.click();}},this,true);app.shortcuts.register('List:Favorite','f a',function(){this.$('.selected .icon-favorite:visible').click();},this);app.shortcuts.register('List:Follow','f o',function(){this.$('.selected [data-toggle=dropdown]:visible').click().blur();this.$('.selected [name=follow_button]:visible').click();},this);app.shortcuts.register('List:Preview','p',function(){var $preview=this.$('.selected [data-event="list:preview:fire"]:visible');if($preview.is(':visible')&&!$preview.hasClass('disabled')){$preview.click();}},this);app.shortcuts.register('List:Select','x',function(){var $checkbox=this.$('.selected input[type=checkbox]:first');if($checkbox.is(':visible')&&!$checkbox.hasClass('disabled')){$checkbox.get(0).click();}},this);}}) },
"resolve-conflicts-headerpane": {"controller": /*
     * Your installation or use of this SugarCRM file is subject to the applicable
     * terms available at
     * http://support.sugarcrm.com/06_Customer_Center/10_Master_Subscription_Agreements/.
     * If you do not agree to all of the applicable terms or do not have the
     * authority to bind the entity as an authorized representative, then do not
     * install or use this SugarCRM file.
     *
     * Copyright (C) SugarCRM Inc. All rights reserved.
     */
({
	// Resolve-conflicts-headerpane View (base) 
extendsFrom:'HeaderpaneView',initialize:function(options){this.events=_.extend({},this.events,{'click [name=select_button]':'selectClicked','click [name=cancel_button]':'cancelClicked'});this._super('initialize',[options]);this.context.on("change:selection_model",this.enableSelectButton,this);},_formatTitle:function(title){var modelToSave=this.context.get('modelToSave'),name=modelToSave.get('name')||modelToSave.get('full_name');return app.lang.get(title,this.module,{name:name});},selectClicked:function(event){var selected=this.context.get('selection_model'),modelToSave=this.context.get('modelToSave'),dataInDb=this.context.get('dataInDb'),origin;if(selected instanceof Backbone.Model){origin=selected.get('_dataOrigin');if(origin==='client'){modelToSave.set('date_modified',dataInDb.date_modified);app.drawer.close(modelToSave,false);}else if(origin==='database'){modelToSave.set(dataInDb);modelToSave.trigger('sync');app.drawer.close(modelToSave,true);}}},enableSelectButton:function(context,selected){if(selected){this.$('[name=select_button]').removeClass('disabled');}},cancelClicked:function(event){app.drawer.close();}}) },
"resolve-conflicts-list": {"controller": /*
     * Your installation or use of this SugarCRM file is subject to the applicable
     * terms available at
     * http://support.sugarcrm.com/06_Customer_Center/10_Master_Subscription_Agreements/.
     * If you do not agree to all of the applicable terms or do not have the
     * authority to bind the entity as an authorized representative, then do not
     * install or use this SugarCRM file.
     *
     * Copyright (C) SugarCRM Inc. All rights reserved.
     */
({
	// Resolve-conflicts-list View (base) 
extendsFrom:'FlexListView',plugins:['ListColumnEllipsis','ListRemoveLinks'],initialize:function(options){options.meta=options.meta||{};options.meta.selection={type:'single',label:'LBL_LINK_SELECT'};this._super('initialize',[options]);this.context._fetchCalled=true;this._buildList();},parseFields:function(){},_buildList:function(){var dataInDb=this.context.get('dataInDb'),modelToSave=this.context.get('modelToSave'),modelInDb,copyOfModelToSave,originalId;if(!_.isEmpty(dataInDb)&&!_.isEmpty(modelToSave)){modelInDb=app.data.createBean(modelToSave.module,dataInDb);copyOfModelToSave=app.data.createBean(modelToSave.module);originalId=modelToSave.get('id');copyOfModelToSave.set(app.utils.deepCopy(modelToSave.attributes));this._buildFieldDefinitions(copyOfModelToSave,modelInDb);copyOfModelToSave.set('id',originalId+'-client');modelInDb.set('id',originalId+'-database');copyOfModelToSave.set('_dataOrigin','client');modelInDb.set('_dataOrigin','database');copyOfModelToSave.set('_modified_by',app.lang.get('LBL_YOU'));modelInDb.set('_modified_by',modelInDb.get('modified_by_name'));this._populateMissingDataFromDatabase(copyOfModelToSave,modelInDb);this.collection.add([copyOfModelToSave,modelInDb]);}},_buildFieldDefinitions:function(modelToSave,modelInDb){var fieldsThatDiffer,fieldDefinition,modifiedByColumnDef={name:'_modified_by',type:'base',label:'LBL_MODIFIED',sortable:false};fieldsThatDiffer=app.utils.compareBeans(modelToSave,modelInDb);fieldsThatDiffer=_.filter(fieldsThatDiffer,function(name){return name!=='modified_by_name';});fieldDefinition=this._getFieldViewDefinition(fieldsThatDiffer);fieldDefinition=_.union([modifiedByColumnDef],fieldDefinition);this._fields=this._createCatalog(fieldDefinition);},_patchField:function(fieldMeta,i){var isVisible=(fieldMeta.name!=='date_modified');return _.extend({sortable:false,selected:isVisible,position:++i},fieldMeta,{sortable:false});},_getFieldViewDefinition:function(fieldNames){var fieldDefs=[],moduleViewDefs=app.metadata.getView(this.module,'record'),addFieldDefinition=function(definition){if(definition.name&&(_.indexOf(fieldNames,definition.name)!==-1)){fieldDefs.push(app.utils.deepCopy(definition));}};_.each(moduleViewDefs.panels,function(panel){_.each(panel.fields,function(field){if(field.fields&&_.isArray(field.fields)){_.each(field.fields,function(field){addFieldDefinition(field);});}else{addFieldDefinition(field);}});});return fieldDefs;},_populateMissingDataFromDatabase:function(modelToSave,modelInDb){_.each(modelInDb.attributes,function(value,attribute){if(!modelToSave.has(attribute)||!app.utils.hasDefaultValueChanged(attribute,modelToSave)){modelToSave.set(attribute,value);}})},addPreviewEvents:function(){this._super("addPreviewEvents");this.context.off('list:preview:fire',null,this);this.context.on('list:preview:fire',function(model){app.events.trigger('preview:render',model,this.collection,false,undefined,false);app.events.trigger('preview:pagination:hide');},this);},addActions:function(){this._super("addActions");this.rightColumns.push({type:'rowaction',css_class:'btn',tooltip:'LBL_PREVIEW',event:'list:preview:fire',icon:'icon-eye-open'});}}) },
"saved-reports-chart": {"controller": /*
     * Your installation or use of this SugarCRM file is subject to the applicable
     * terms available at
     * http://support.sugarcrm.com/06_Customer_Center/10_Master_Subscription_Agreements/.
     * If you do not agree to all of the applicable terms or do not have the
     * authority to bind the entity as an authorized representative, then do not
     * install or use this SugarCRM file.
     *
     * Copyright (C) SugarCRM Inc. All rights reserved.
     */
({
	// Saved-reports-chart View (base) 
plugins:['Dashlet'],reportData:undefined,chartField:undefined,reportOptions:undefined,reportAcls:undefined,timerId:undefined,events:{'click a[name=editReport]':'editSavedReport'},initDashlet:function(view){if(this.meta.config){this.meta.panels=this.dashletConfig.dashlet_config_panels;this.getAllSavedReports();}else{var autoRefresh=this.settings.get("auto_refresh");if(autoRefresh>0){if(this.timerId){clearTimeout(this.timerId);}
this._scheduleReload(autoRefresh*1000*60);}}},_scheduleReload:function(delay){this.timerId=setTimeout(_.bind(function(){this.context.resetLoadFlag();this.loadData({success:function(){this._scheduleReload(delay);}});},this),delay);},initialize:function(options){this.reportData=new Backbone.Model();app.view.View.prototype.initialize.call(this,options);},editSavedReport:function(){var currentTargetId=this.dashModel.get('saved_report_id'),params={dashletEdit:1},route=app.bwc.buildRoute('Reports',currentTargetId,'ReportsWizard',params);if(!currentTargetId){return;}
app.alert.show('navigate_confirmation',{level:'confirmation',messages:'LBL_NAVIGATE_TO_REPORTS',onConfirm:_.bind(function(){this.currentLocation=Backbone.history.getFragment();$(window).one('dashletEdit',_.bind(this.postEditListener,this));var dashletEditVisited=false;app.router.on('route',function(){var routeLocation=Backbone.history.getFragment();if(routeLocation.indexOf('dashletEdit=1')>=0){dashletEditVisited=true;}
if(routeLocation.indexOf('dashletEdit=1')<0&&dashletEditVisited){app.router.off('route');$(window).off('dashletEdit');}});app.router.navigate(route,{trigger:true});},this)});},postEditListener:function(event){if(this.currentLocation){app.router.navigate(this.currentLocation,{trigger:true});}},bindDataChange:function(){if(this.meta.config){this.settings.on('change:saved_report_id',function(model){var reportTitle=this.reportOptions[model.get('saved_report_id')];this.settings.set({label:reportTitle});$('[name="label"]').val(reportTitle);this.updateEditLink(model.get('saved_report_id'));},this);}},updateEditLink:function(reportId){var acls=this.reportAcls[reportId||this.settings.get('saved_report_id')];if(acls&&acls['edit']==='no'){$('[name="editReport"]').hide();}
else{$('[name="editReport"]').show();}},loadData:function(options){options=options||{};this.getSavedReportById(this.settings.get('saved_report_id'),options);},getAllSavedReports:function(){var params={has_charts:true},url=app.api.buildURL('Reports/saved_reports',null,null,params);app.api.call('read',url,null,{success:_.bind(this.parseAllSavedReports,this)});},parseAllSavedReports:function(reports){this.reportOptions={};this.reportAcls={};_.each(reports,function(report){this.reportOptions[report.id]=report.name;this.reportAcls[report.id]=report._acl;},this);var reportsField=_.find(this.fields,function(field){return field.name=='saved_report_id';});if(reportsField){if(reports&&!this.settings.has('saved_report_id')){this.settings.set({saved_report_id:_.first(reports).id});}
reportsField.items=this.reportOptions;reportsField._render();this.updateEditLink();}},getSavedReportById:function(reportId,options){var dt=this.layout.getComponent('dashlet-toolbar');if(dt){this.$("[data-action=loading]").removeClass(dt.cssIconDefault).addClass(dt.cssIconRefresh);}
app.api.call('create',app.api.buildURL('Reports/chart/'+reportId),null,{success:_.bind(function(serverData){this.reportData.set({rawChartData:serverData.chartData});if(options&&options.success){options.success.apply(this,arguments);}},this),complete:options?options.complete:null});},_render:function(){if(this.meta.config||_.isUndefined(this.chartField)){app.view.View.prototype._render.call(this);}},_renderField:function(field){app.view.View.prototype._renderField.call(this,field);if(_.isUndefined(this.chartField)&&field.name=='chart'){this.chartField=field;}}}) },
"selection-headerpane": {"controller": /*
     * Your installation or use of this SugarCRM file is subject to the applicable
     * terms available at
     * http://support.sugarcrm.com/06_Customer_Center/10_Master_Subscription_Agreements/.
     * If you do not agree to all of the applicable terms or do not have the
     * authority to bind the entity as an authorized representative, then do not
     * install or use this SugarCRM file.
     *
     * Copyright (C) SugarCRM Inc. All rights reserved.
     */
({
	// Selection-headerpane View (base) 
extendsFrom:'HeaderpaneView',initialize:function(options){var moduleMeta=app.metadata.getModule(options.module),isBwcEnabled=(moduleMeta&&moduleMeta.isBwcEnabled),buttonsToRemove=[],additionalEvents={};if(isBwcEnabled){buttonsToRemove.push('create_button');}else{additionalEvents['click .btn[name=create_button]']='createAndSelect';this.events=_.extend({},this.events,additionalEvents);}
this.isMultiLink=options.context.has('recLink');if(!this.isMultiLink){buttonsToRemove.push('link_button');}
options=this._removeButtons(options,buttonsToRemove);this._super('initialize',[options]);},_renderHtml:function(){this._super('_renderHtml');this.layout.on('selection:closedrawer:fire',_.once(_.bind(function(){this.$el.off();app.drawer.close();},this)));if(this.isMultiLink){this.layout.on('selection:link:fire',function(){this.context.trigger('selection-list:link:multi');});}},_formatTitle:function(title){var moduleName=app.lang.get('LBL_MODULE_NAME',this.module);return app.lang.get(title,this.module,{module:moduleName});},createAndSelect:function(){app.drawer.open({layout:'create-nodupecheck',context:{module:this.module,create:true}},_.bind(function(context,model){if(model){this.context.trigger('selection-list:select',model);}},this));},_removeButtons:function(options,buttons){if(options&&options.meta&&options.meta.buttons){options.meta.buttons=_.filter(options.meta.buttons,function(button){return!_.contains(buttons,button.name);});}
return options;}}) },
"selection-list": {"controller": /*
     * Your installation or use of this SugarCRM file is subject to the applicable
     * terms available at
     * http://support.sugarcrm.com/06_Customer_Center/10_Master_Subscription_Agreements/.
     * If you do not agree to all of the applicable terms or do not have the
     * authority to bind the entity as an authorized representative, then do not
     * install or use this SugarCRM file.
     *
     * Copyright (C) SugarCRM Inc. All rights reserved.
     */
({
	// Selection-list View (base) 
extendsFrom:'FlexListView',initialize:function(options){this.plugins=_.union(this.plugins,['ListColumnEllipsis','ListRemoveLinks']);options.context.set('skipFetch',true);options.meta=options.meta||{};this.oneToMany=options.context.get('recLink')?app.data.canHaveMany(app.controller.context.get('module'),options.context.get('recLink')):false;if(this.oneToMany){options.meta.selection={type:'multi',isLinkAction:true};}else{options.meta.selection={type:'single',label:'LBL_LINK_SELECT',isLinkAction:true};}
this._super('initialize',[options]);this.events=_.extend({},this.events,{'click .search-and-select .single':'triggerCheck'});if(this.oneToMany){var pageComponent=this.layout.getComponent('mass-link');if(!pageComponent){pageComponent=app.view.createView({context:this.context,name:'mass-link',module:this.module,primary:false,layout:this.layout});this.layout.addComponent(pageComponent);}
pageComponent.render();}
this.initializeEvents();},triggerCheck:function(event){if(!($(event.target).is('a,i,input'))){if(this.oneToMany){var checkbox=$(event.currentTarget).find('input[name="check"]');checkbox[0].click();}else{var radioButton=$(event.currentTarget).find('.selection[type="radio"]');radioButton[0].click();}}},initializeEvents:function(){if(this.oneToMany){this.context.on('selection-list:link:multi',this._selectMultipleAndClose,this);this.context.on('selection-list:select',this._refreshList,this);}else{this.context.on('change:selection_model',this._selectAndClose,this);this.context.on('selection-list:select',this._selectAndCloseImmediately,this);}},_refreshList:function(model){this.context.reloadData({recursive:false,error:function(error){app.alert.show('server-error',{level:'error',messages:'ERR_GENERIC_SERVER_ERROR'});}});},_selectMultipleAndClose:function(){var selections=this.context.get('mass_collection');if(selections){this.layout.once('list:masslink:complete',this._closeDrawer,this);this.layout.trigger('list:masslink:fire');}},_closeDrawer:function(model,data,response){app.drawer.close();var context=this.options.context.get('recContext'),view=this.options.context.get('recView'),collectionOptions=context.get('collectionOptions')||{};if(context.has('parentModel')){var parentModel=context.get('parentModel'),syncedAttributes=parentModel.getSyncedAttributes(),updatedAttributes=_.reduce(data.record,function(memo,val,key){if(!_.isEqual(syncedAttributes[key],val)){memo[key]=val;}
return memo;},{});parentModel.set(updatedAttributes);parentModel.setSyncedAttributes(data.record);}
context.get('collection').resetPagination();context.resetLoadFlag();context.set('skipFetch',false);if(collectionOptions.limit){context.set('limit',collectionOptions.limit);}
context.loadData({success:function(){view.layout.trigger('filter:record:linked');},error:function(error){app.alert.show('server-error',{level:'error',messages:'ERR_GENERIC_SERVER_ERROR'});}});},_selectAndClose:function(context,selectionModel){if(selectionModel){this.context.unset('selection_model',{silent:true});app.drawer.close(this._getModelAttributes(selectionModel));}},_selectAndCloseImmediately:function(model){if(model){app.drawer.closeImmediately(this._getModelAttributes(model));}},_getModelAttributes:function(model){var attributes={id:model.id,value:model.get('name')};_.each(model.attributes,function(value,field){if(app.acl.hasAccessToModel('view',model,field)){attributes[field]=attributes[field]||model.get(field);}},this);return attributes;},addActions:function(){this._super('addActions');if(this.meta.showPreview!==false){this.rightColumns.push({type:'preview-button',css_class:'btn',tooltip:'LBL_PREVIEW',event:'list:preview:fire',icon:'icon-eye-open'});}else{this.rightColumns.push({});}}}) },
"setup-complete-wizard-page": {"controller": /*
     * Your installation or use of this SugarCRM file is subject to the applicable
     * terms available at
     * http://support.sugarcrm.com/06_Customer_Center/10_Master_Subscription_Agreements/.
     * If you do not agree to all of the applicable terms or do not have the
     * authority to bind the entity as an authorized representative, then do not
     * install or use this SugarCRM file.
     *
     * Copyright (C) SugarCRM Inc. All rights reserved.
     */
({
	// Setup-complete-wizard-page View (base) 
extendsFrom:"WizardPageView",wizardName:"",initialize:function(options){this.events=_.extend({},this.events,{"click a.thumbnail":"linkClicked","click [name=start_sugar_button]:not(.disabled)":"next"});this._super("initialize",[options]);this.wizardName=this.context.get("wizardName")||"user";},isPageComplete:function(){return true;},linkClicked:function(ev){var href,redirectUrl,target=this.$(ev.currentTarget);if(this.$(target).attr("target")!=="_blank"){ev.preventDefault();$("#header").show();href=this.$(target).attr("href");if(href.indexOf('#bwc/')===0){redirectUrl=href.split('#bwc/')[1];app.bwc.login(redirectUrl);}else{app.router.navigate($(ev.currentTarget).attr("href"),{trigger:true});}}},_render:function(){this._super('_render');app.user.unset("show_wizard");}}) },
"subpanel-list": {"controller": /*
     * Your installation or use of this SugarCRM file is subject to the applicable
     * terms available at
     * http://support.sugarcrm.com/06_Customer_Center/10_Master_Subscription_Agreements/.
     * If you do not agree to all of the applicable terms or do not have the
     * authority to bind the entity as an authorized representative, then do not
     * install or use this SugarCRM file.
     *
     * Copyright (C) SugarCRM Inc. All rights reserved.
     */
({
	// Subpanel-list View (base) 
extendsFrom:'RecordlistView',fallbackFieldTemplate:'list',plugins:['ErrorDecoration','Editable','SugarLogic','Pagination','LinkedModel'],contextEvents:{"list:editall:fire":"toggleEdit","list:editrow:fire":"editClicked","list:unlinkrow:fire":"warnUnlink"},initialize:function(options){this.dataViewName=options.name||'subpanel-list';this._super("initialize",[options]);if(app.config.maxSubpanelResult){var options={limit:app.config.maxSubpanelResult};this.limit=options.limit;var collectionOptions=this.context.has('collectionOptions')?this.context.get('collectionOptions'):{};this.context.set('collectionOptions',_.extend(collectionOptions,options));}
this.rowTemplate=app.template.getView('recordlist.row');this.layout.on("hide",this.toggleList,this);this.listenTo(this.layout.layout,'filter:change',this.renderOnFilterChanged);this.listenTo(this.layout,'filter:record:linked',this.renderOnFilterChanged);app.routing.before("route",this.beforeRouteUnlink,this,true);$(window).on("beforeunload.unlink"+this.cid,_.bind(this.warnUnlinkOnRefresh,this));},renderOnFilterChanged:function(){this.collection.trigger('reset');this.render();},_initializeMetadata:function(){return _.extend({},app.metadata.getView(null,'subpanel-list',true),app.metadata.getView(this.options.module,'record-list',true),app.metadata.getView(this.options.module,'subpanel-list',true));},unlinkModel:function(){var self=this,model=this._modelToUnlink;model.destroy({showAlerts:{'process':true,'success':{messages:self.getUnlinkMessages(self._modelToUnlink).success}},relate:true,success:function(){var redirect=self._targetUrl!==self._currentUrl;self._modelToUnlink=null;self.collection.remove(model,{silent:redirect});if(redirect){self.unbindBeforeRouteUnlink();app.router.navigate(self._targetUrl,{trigger:true});return;}
self.collection.trigger('reset');self.render();}});},toggleList:function(show){this.$el[show?'show':'hide']();},beforeRouteUnlink:function(){if(this._modelToUnlink){this.warnUnlink(this._modelToUnlink);return false;}
return true;},getUnlinkMessages:function(model){var messages={};var name=Handlebars.Utils.escapeExpression(app.utils.getRecordName(model)).trim();var context=app.lang.get('LBL_MODULE_NAME_SINGULAR',model.module).toLowerCase()+' '+name;messages.confirmation=app.utils.formatString(app.lang.get('NTC_UNLINK_CONFIRMATION_FORMATTED'),[context]);messages.success=app.utils.formatString(app.lang.get('NTC_UNLINK_SUCCESS'),[context]);return messages;},warnUnlink:function(model){var self=this;this._modelToUnlink=model;self._targetUrl=Backbone.history.getFragment();if(self._targetUrl!==self._currentUrl){app.router.navigate(this._currentUrl,{trigger:false,replace:true});}
app.alert.show('unlink_confirmation',{level:'confirmation',messages:self.getUnlinkMessages(model).confirmation,onConfirm:_.bind(self.unlinkModel,self),onCancel:function(){self._modelToUnlink=null;}});},warnUnlinkOnRefresh:function(){if(this._modelToUnlink){return this.getUnlinkMessages(this._modelToUnlink).confirmation;}},unbindBeforeRouteUnlink:function(){app.routing.offBefore("route",this.beforeRouteUnlink,this);$(window).off("beforeunload.unlink"+this.cid);},_dispose:function(){this.unbindBeforeRouteUnlink();this._super('_dispose');}}) },
"tabbed-dashlet": {"controller": /*
     * Your installation or use of this SugarCRM file is subject to the applicable
     * terms available at
     * http://support.sugarcrm.com/06_Customer_Center/10_Master_Subscription_Agreements/.
     * If you do not agree to all of the applicable terms or do not have the
     * authority to bind the entity as an authorized representative, then do not
     * install or use this SugarCRM file.
     *
     * Copyright (C) SugarCRM Inc. All rights reserved.
     */
({
	// Tabbed-dashlet View (base) 
plugins:['Dashlet','RelativeTime','ToggleVisibility','Tooltip','Pagination'],events:{'click [data-action=show-more]':'showMore','click [data-action=tab-switcher]':'tabSwitcher'},_defaultSettings:{},initDashlet:function(){this._initSettings();if(this.meta.config){return;}
this.collection=new Backbone.Collection();this.context=this.context.getChildContext({forceNew:true,model:this.context.parent&&this.context.parent.get('model'),collection:this.collection,name:'tabbed-dashlet'});this.context.set('parentModule',this.module);this._initMaxHeightTarget();this._initEvents();this._initTabs();this._initTemplates();},_initMaxHeightTarget:function(){this.maxHeightTarget=this.meta.max_height_target||'div.tab-content';return this;},_initEvents:function(){this.settings.on('change:filter',this.loadData,this);this.on('tabbed-dashlet:unlink-record:fire',this.unlinkRecord,this);this.context.on('tabbed-dashlet:refresh',this.refreshTabsForModule,this);this.context.on('change:collection',this.onCollectionChange,this);return this;},_initTabs:function(){this.tabs=[];_.each(this.dashletConfig.tabs,function(tab,index){if(tab.active){this.settings.set('activeTab',index);}
var collection=this._createCollection(tab);if(_.isNull(collection)){return;}
collection.on('add',this.bindCollectionAdd,this);collection.on('reset',this.bindCollectionReset,this);this.tabs[index]=tab;this.tabs[index].collection=collection;this.tabs[index].relate=_.isObject(collection.link);this.tabs[index].record_date=tab.record_date||'date_entered';this.tabs[index].include_child_items=tab.include_child_items||false;},this);return this;},_initTemplates:function(){this._tabsTpl=app.template.getView(this.name+'.tabs',this.module)||app.template.getView(this.name+'.tabs')||app.template.getView('tabbed-dashlet.tabs',this.module)||app.template.getView('tabbed-dashlet.tabs');this._toolbarTpl=app.template.getView(this.name+'.toolbar',this.module)||app.template.getView(this.name+'.toolbar')||app.template.getView('tabbed-dashlet.toolbar',this.module)||app.template.getView('tabbed-dashlet.toolbar');return this;},_initSettings:function(){var settings=_.extend({},this._defaultSettings,this.settings.attributes);this.settings.set(settings);return this;},bindCollectionAdd:function(model){var tab=this._getTab(model.collection);model.set('record_date',model.get(tab.record_date));},bindCollectionReset:function(collection){_.each(collection.models,this.bindCollectionAdd,this);},onCollectionChange:function(){var prevCollection=this.context.previous('collection');if(prevCollection){prevCollection.off(null,this.updateCollectionCount,this);}
this.collection=this.context.get('collection');this.collection.on('add remove reset',_.debounce(this.updateCollectionCount,100),this);},updateCollectionCount:function(){var tabIndex=this.settings.get('activeTab'),count=this.collection.length;if(this.collection.next_offset>=0){count+='+';}
this.$('[data-action=tab-switcher][data-index='+tabIndex+']').children('[data-action=count]').text(count);},_getRecordsTemplate:function(module){this._recordsTpl=this._recordsTpl||{};if(!this._recordsTpl[module]){this._recordsTpl[module]=app.template.getView(this.name+'.records',module)||app.template.getView(this.name+'.records',this.module)||app.template.getView(this.name+'.records')||app.template.getView('tabbed-dashlet.records',this.module)||app.template.getView('tabbed-dashlet.records');}
return this._recordsTpl[module];},_createCollection:function(tab){if(this.context.parent){var module=this.context.parent.get('module');}else{var module=this.module;}
var meta=app.metadata.getModule(module);if(_.isUndefined(meta)){return null;}
var options={};if(meta.fields[tab.link]&&meta.fields[tab.link].type==='link'){options={link:{name:tab.link,bean:this.model}};}
var collection=app.data.createBeanCollection(tab.module,null,options);return collection;},_getCollectionOptions:function(index){var tab=this.tabs[index],options={limit:this.settings.get('limit'),offset:0,params:{order_by:tab.order_by||null,include_child_items:tab.include_child_items||null}};if(tab.module!='Meetings'&&tab.module!='Calls'){options.myItems=this.getVisibility()==='user';}
return options;},_getCollectionFilters:function(index){var tab=this.tabs[index],filters=[];_.each(tab.filters,function(condition,field){var filter={};filter[field]=condition;filters.push(filter);});if((tab.module==='Meetings'||tab.module==='Calls')&&this.getVisibility()==='user'){filters.push({"$or":[{"assigned_user_id":app.user.id},{"users.id":app.user.id}]});}
return filters;},_getTab:function(collection){return _.find(this.tabs,function(tab){return tab.collection===collection;},this);},_getFilters:function(index){return[];},loadData:function(options){if(this.disposed||this.meta.config){return;}
this.loadDataForTabs(this.tabs,options);},refreshTabsForModule:function(module){var toRefresh=[];_.each(this.tabs,function(tab){if(tab.module===module){toRefresh.push(tab);}});this.loadDataForTabs(toRefresh,{});},loadDataForTabs:function(tabs,options){options=options||{};var self=this;var loadDataRequests=[];_.each(tabs,function(tab,index){loadDataRequests.push(function(callback){tab.collection.options=self._getCollectionOptions(index);tab.collection.filterDef=_.union(self._getCollectionFilters(index),self._getFilters(index));tab.collection.fetch({relate:tab.relate,complete:function(){tab.collection.dataFetched=true;callback(null);}});});},this);if(!_.isEmpty(loadDataRequests)){async.parallel(loadDataRequests,function(){if(self.disposed){return;}
self.collection=self.tabs[self.settings.get('activeTab')].collection;self.context.set('collection',self.collection);self.render();if(_.isFunction(options.complete)){options.complete.call(self);}});}},_getRemoveModelCompleteCallback:function(){return _.bind(function(model){if(this.disposed){return;}
this.collection.remove(model);this.render();this.context.trigger("tabbed-dashlet:refresh",model.module);},this);},showMore:function(){this.getNextPagination({showAlerts:true,limit:this.settings.get('limit')});},tabSwitcher:function(event){var index=this.$(event.currentTarget).data('index');if(index===this.settings.get('activeTab')){return;}
this.settings.set('activeTab',index);this.collection=this.tabs[index].collection;this.context.set('collection',this.collection);this.render();},unlinkRecord:function(model){var self=this;var name=Handlebars.Utils.escapeExpression(app.utils.getRecordName(model)).trim();var context=app.lang.get('LBL_MODULE_NAME_SINGULAR',model.module).toLowerCase()+' '+name;app.alert.show(model.get('id')+':unlink_confirmation',{level:'confirmation',messages:app.utils.formatString(app.lang.get('NTC_UNLINK_CONFIRMATION_FORMATTED'),[context]),onConfirm:function(){model.destroy({showAlerts:true,relate:true,success:self._getRemoveModelCompleteCallback()});}});},_renderHtml:function(){if(this.meta.config){this._super('_renderHtml');return;}
var tab=this.tabs[this.settings.get('activeTab')];var recordsTpl=this._getRecordsTemplate(tab.module);this.toolbarHtml=this._toolbarTpl(this);this.tabsHtml=this._tabsTpl(this);this.recordsHtml=recordsTpl(this);this.row_actions=tab.row_actions;this._super('_renderHtml');},_dispose:function(){_.each(this.tabs,function(tab){tab.collection.off(null,null,this);});this._super('_dispose');}}) },
"themerollerpreview": {"controller": /*
     * Your installation or use of this SugarCRM file is subject to the applicable
     * terms available at
     * http://support.sugarcrm.com/06_Customer_Center/10_Master_Subscription_Agreements/.
     * If you do not agree to all of the applicable terms or do not have the
     * authority to bind the entity as an authorized representative, then do not
     * install or use this SugarCRM file.
     *
     * Copyright (C) SugarCRM Inc. All rights reserved.
     */
({
	// Themerollerpreview View (base) 
initialize:function(options){app.view.View.prototype.initialize.call(this,options);this.customTheme="default";this.context.on("change:colors",this.reloadIframeBootstrap,this);},reloadIframeBootstrap:function(){var self=this;var params={preview:new Date().getTime(),platform:app.config.platform,themeName:this.customTheme};_.extend(params,this.context.attributes.colors);var cssLink=app.api.buildURL('css/preview','',{},params);$('iframe#previewTheme').hide();self.$(".ajaxLoading").show();$.get(cssLink).success(function(data){$('iframe#previewTheme').contents().find('style').html(data);self.$(".ajaxLoading").hide();$('iframe#previewTheme').show();});$('iframe').contents().find('body').css("backgroundColor","transparent");},_renderHtml:function(){if(!app.acl.hasAccess('admin','Administration')){return;}
this._super('_renderHtml');}}) },
"tutorial": {"controller": /*
     * Your installation or use of this SugarCRM file is subject to the applicable
     * terms available at
     * http://support.sugarcrm.com/06_Customer_Center/10_Master_Subscription_Agreements/.
     * If you do not agree to all of the applicable terms or do not have the
     * authority to bind the entity as an authorized representative, then do not
     * install or use this SugarCRM file.
     *
     * Copyright (C) SugarCRM Inc. All rights reserved.
     */
({
	// Tutorial View (base) 
extendsFrom:app.view.TutorialView,className:'',initialize:function(options){this.resizeCallback=_.debounce(_.bind(function(){this.highlightItem(this.index);},this),400);$(window).on('resize',this.resizeCallback);this.keyupCallback=_.bind(this.processKeyCode,this);$(document).on('keyup',this.keyupCallback);app.view.TutorialView.prototype.initialize.call(this,options);app.events.on("cache:clean",function(callback){callback(["tutorialPrefs"]);});},processKeyCode:function(e){switch(e.which){case 37:this.back(e);break;case 39:this.next(e);break;case 27:this.hide(e);break;default:return;}
e.preventDefault();},remove:function(){$(window).off('resize',this.resizeCallback);$(document).off('keyup',this.keyupCallback);app.view.TutorialView.prototype.remove.call(this);var prefs=app.cache.get('tutorialPrefs')||{};if(prefs.showTooltip){this.showTooltip();this.removeTooltip(3000);}},showTooltip:function(){$('[data-action=tour]').tooltip({container:'body',trigger:'manual'}).tooltip('show');},removeTooltip:function(delayTime){if(!delayTime){$('[data-action=tour]').tooltip('hide');}else{_.delay(function(){$('[data-action=tour]').tooltip('hide');},delayTime);}}}) },
"user-locale-wizard-page": {"controller": /*
     * Your installation or use of this SugarCRM file is subject to the applicable
     * terms available at
     * http://support.sugarcrm.com/06_Customer_Center/10_Master_Subscription_Agreements/.
     * If you do not agree to all of the applicable terms or do not have the
     * authority to bind the entity as an authorized representative, then do not
     * install or use this SugarCRM file.
     *
     * Copyright (C) SugarCRM Inc. All rights reserved.
     */
({
	// User-locale-wizard-page View (base) 
extendsFrom:"UserWizardPageView",TIME_ZONE_KEY:'timezone',TIME_PREF_KEY:'timepref',DATE_PREF_KEY:'datepref',NAME_FORMAT_KEY:'default_locale_name_format',initialize:function(options){var self=this;options.template=app.template.getView("wizard-page");this._super("initialize",[options]);if(this.model){this.model.set(this.TIME_ZONE_KEY,(app.user.getPreference(this.TIME_ZONE_KEY)||''));this.model.set(this.TIME_PREF_KEY,(app.user.getPreference(this.TIME_PREF_KEY)||''));this.model.set(this.DATE_PREF_KEY,(app.user.getPreference(this.DATE_PREF_KEY)||''));this.model.set(this.NAME_FORMAT_KEY,(app.user.getPreference(this.NAME_FORMAT_KEY)||''));}},_render:function(){var self=this;this._prepareFields(function(){if(!self.disposed){self.fieldsToValidate=self._fieldsToValidate(self.meta);self._super("_render");}});},_prepareFields:function(callback){var self=this;app.user.loadLocale(function(localeOptions){_.each(self.meta.panels[0].fields,function(fieldDef){var opts=localeOptions[fieldDef.name];if(opts){fieldDef.options=opts;}});callback();});},beforeNext:function(callback){this.getField("next_button").setDisabled(true);this.model.doValidate(this.fieldsToValidate,_.bind(function(isValid){var self=this;if(isValid){var payload=this._prepareRequestPayload();app.alert.show('wizardlocale',{level:'process',title:app.lang.getAppString('LBL_LOADING'),autoClose:false});payload['ut']=true;app.user.updatePreferences(payload,function(err){app.alert.dismiss('wizardlocale');self.updateButtons();if(err){app.logger.debug("Wizard locale update failed: "+err);callback(false);}else{callback(true);}});}else{callback(false);}},this));}}) },
"user-wizard-page": {"controller": /*
     * Your installation or use of this SugarCRM file is subject to the applicable
     * terms available at
     * http://support.sugarcrm.com/06_Customer_Center/10_Master_Subscription_Agreements/.
     * If you do not agree to all of the applicable terms or do not have the
     * authority to bind the entity as an authorized representative, then do not
     * install or use this SugarCRM file.
     *
     * Copyright (C) SugarCRM Inc. All rights reserved.
     */
({
	// User-wizard-page View (base) 
extendsFrom:"WizardPageView",initialize:function(options){options.template=app.template.getView("wizard-page");this._super("initialize",[options]);this.fieldsToValidate=this._fieldsToValidate(this.options.meta);},isPageComplete:function(){return this.areAllRequiredFieldsNonEmpty;},_prepareRequestPayload:function(){var payload={},self=this,fields=_.keys(this.fieldsToValidate);_.each(fields,function(key){payload[key]=self.model.get(key);});return payload;},beforeNext:function(callback){var self=this;this.getField("next_button").setDisabled(true);this.model.doValidate(this.fieldsToValidate,_.bind(function(isValid){var self=this;if(isValid){var payload=self._prepareRequestPayload();app.alert.show('wizardprofile',{level:'process',title:app.lang.getAppString('LBL_LOADING'),autoClose:false});app.user.updateProfile(payload,function(err){app.alert.dismiss('wizardprofile');self.updateButtons();if(err){app.logger.debug("Wizard profile update failed: "+err);callback(false);}else{callback(true);}});}else{callback(false);}},self));}}) },
"vcard-import": {"controller": /*
     * Your installation or use of this SugarCRM file is subject to the applicable
     * terms available at
     * http://support.sugarcrm.com/06_Customer_Center/10_Master_Subscription_Agreements/.
     * If you do not agree to all of the applicable terms or do not have the
     * authority to bind the entity as an authorized representative, then do not
     * install or use this SugarCRM file.
     *
     * Copyright (C) SugarCRM Inc. All rights reserved.
     */
({
	// Vcard-import View (base) 
initialize:function(options){app.view.View.prototype.initialize.call(this,options);this.context.off("vcard:import:finish",null,this);this.context.on("vcard:import:finish",this.importVCard,this);},_renderField:function(field){app.view.View.prototype._renderField.call(this,field);if(field.name==='vcard_import'){field.setMode('edit');}},importVCard:function(){var self=this,vcardFile=$('[name=vcard_import]');if(_.isEmpty(vcardFile.val())){app.alert.show('error_validation_vcard',{level:'error',messages:'LBL_EMPTY_VCARD'});}else{app.file.checkFileFieldsAndProcessUpload(self,{success:function(data){var route=app.router.buildRoute(self.module,data.vcard_import);app.router.navigate(route,{trigger:true});app.alert.show('vcard-import-saved',{level:'success',messages:app.lang.get('LBL_IMPORT_VCARD_SUCCESS',self.module),autoClose:true});},error:function(error){app.alert.show('error_validation_vcard',{level:'error',messages:app.lang.get('TPL_IMPORT_VCARD_FAILURE',self.module,{module:self.module})});}},{deleteIfFails:true,htmlJsonFormat:true});}}}) },
"vcard-import-headerpane": {"controller": /*
     * Your installation or use of this SugarCRM file is subject to the applicable
     * terms available at
     * http://support.sugarcrm.com/06_Customer_Center/10_Master_Subscription_Agreements/.
     * If you do not agree to all of the applicable terms or do not have the
     * authority to bind the entity as an authorized representative, then do not
     * install or use this SugarCRM file.
     *
     * Copyright (C) SugarCRM Inc. All rights reserved.
     */
({
	// Vcard-import-headerpane View (base) 
extendsFrom:'HeaderpaneView',events:{'click [name=vcard_finish_button]':'initiateFinish','click [name=vcard_cancel_button]':'initiateCancel'},initiateFinish:function(){this.context.trigger('vcard:import:finish');},initiateCancel:function(){app.drawer.close();}}) },
"wizard-page": {"controller": /*
     * Your installation or use of this SugarCRM file is subject to the applicable
     * terms available at
     * http://support.sugarcrm.com/06_Customer_Center/10_Master_Subscription_Agreements/.
     * If you do not agree to all of the applicable terms or do not have the
     * authority to bind the entity as an authorized representative, then do not
     * install or use this SugarCRM file.
     *
     * Copyright (C) SugarCRM Inc. All rights reserved.
     */
({
	// Wizard-page View (base) 
plugins:['GridBuilder','ErrorDecoration'],events:{'click [name=previous_button]:not(.disabled)':'previous','click [name=next_button]:not(.disabled)':'next'},progress:null,areAllRequiredFieldsNonEmpty:false,initialize:function(options){this.fieldsToValidate=this._fieldsToValidate(options.meta);Handlebars.registerPartial("wizard-page.header",app.template.get("wizard-page.header"));Handlebars.registerPartial("wizard-page.footer",app.template.get("wizard-page.footer"));this._super('initialize',[options]);},_render:function(){this._buildGridsFromPanelsMetadata(this.meta.panels);this.progress=this.layout.getProgress();this.percentComplete=this._getPercentageComplete();this.wizardCompleted=(this.progress.page===this.progress.lastPage)?true:false;this._super('_render');this.checkIfPageComplete();this.layout.trigger("wizard-page:render:complete");},bindDataChange:function(){var self=this;if(this.model){this.listenTo(this.model,"sync",function(){self.checkIfPageComplete();});_.each(this.fieldsToValidate,function(field){if(field&&field.required){self.listenTo(self.model,'change:'+field.name,function(){self.checkIfPageComplete();});}});}},_buildGridsFromPanelsMetadata:function(panels){_.each(panels,function(panel){if(_.isFunction(this.getGridBuilder)){var options={fields:panel.fields,columns:panel.columns,labels:panel.labels,labelsOnTop:panel.labelsOnTop},gridResults=this.getGridBuilder(options).build();panel.grid=gridResults.grid;}},this);},_getPercentageComplete:function(){return Math.floor(this.progress.page / this.progress.lastPage*100);},updateButtons:function(){var prevBtn=this.getField("previous_button");if(prevBtn){if(this.progress&&this.progress.page>1){prevBtn.show();}else{prevBtn.hide();}}
var nextBtn=this.getField("next_button");if(nextBtn){nextBtn.setDisabled(!this.isPageComplete());}},showPage:function(){return app.acl.hasAccessToModel(this.action,this.model);},isPageComplete:function(){return true;},checkIfPageComplete:function(evt){var self=this;this.areAllRequiredFieldsNonEmpty=true;_.each(this.fields,function(field){if(!field.def.required)return;var value=field.$(field.fieldTag+".required").val();var invalid=app.validation.requiredValidator(field.def,field.name,field.model,value);if(invalid){self.areAllRequiredFieldsNonEmpty=false;}});this.updateButtons();},_fieldsToValidate:function(meta){meta=meta||{};var fields={};_.each(_.flatten(_.pluck(meta.panels,"fields")),function(field){fields[field.name]=field;});return fields;},next:function(){var self=this;if(this.progress.page!==this.progress.lastPage){this.beforeNext(function(success){if(success){self.progress=self.layout.nextPage();}else{app.logger.debug("There was an unknown issue after calling beforeNext from wizard");}});}else{this.beforeFinish(function(success){if(success){self.finish();}else{app.logger.debug("There was an unknown issue after calling beforeFinish from wizard");}});}},beforeNext:function(callback){app.logger.debug("wizard's beforeNext called directly. Derived controllers should have overridden this!");callback(true);},beforeFinish:function(callback){app.logger.debug("wizard's beforeFinish called directly. Derived controller should have overridden this!");callback(true);},previous:function(){this.progress=this.layout.previousPage();},finish:function(){this.layout.finished();}}) }
}}
,
"layouts": {
"base": {
"footer": {"controller": /*
     * Your installation or use of this SugarCRM file is subject to the applicable
     * terms available at
     * http://support.sugarcrm.com/06_Customer_Center/10_Master_Subscription_Agreements/.
     * If you do not agree to all of the applicable terms or do not have the
     * authority to bind the entity as an authorized representative, then do not
     * install or use this SugarCRM file.
     *
     * Copyright (C) SugarCRM Inc. All rights reserved.
     */
({
	// Footer Layout (base) 
events:{'click [data-action=home]':'home'},_placeComponent:function(component){this.$el.find('.btn-toolbar').append(component.$el);},_render:function(){this.logoUrl=app.metadata.getLogoUrl();this.$el.html(this.template(this));_.each(this._components,function(component){this._placeComponent(component);},this);app.view.Layout.prototype._render.call(this);},home:function(){app.router.navigate('#Home',{trigger:true});}}) },
"header": {"controller": /*
     * Your installation or use of this SugarCRM file is subject to the applicable
     * terms available at
     * http://support.sugarcrm.com/06_Customer_Center/10_Master_Subscription_Agreements/.
     * If you do not agree to all of the applicable terms or do not have the
     * authority to bind the entity as an authorized representative, then do not
     * install or use this SugarCRM file.
     *
     * Copyright (C) SugarCRM Inc. All rights reserved.
     */
({
	// Header Layout (base) 
initialize:function(options){app.view.Layout.prototype.initialize.call(this,options);this.on("header:update:route",this.resize,this);app.events.on("app:sync:complete",this.resize,this);app.events.on("app:view:change",this.resize,this);app.events.on("router:reauth:load",this.hideMenu,this);app.events.on("router:reauth:success",this.showMenu,this);var resize=_.bind(this.resize,this);$(window).off("resize",resize).on("resize",resize);},_placeComponent:function(component){this.$el.find('.nav-collapse').append(component.$el);},resize:function(){var totalWidth=0,modulelist,maxMenuWidth,componentElement,container=this.$('.navbar-inner');_.each(this._components,function(component){componentElement=component.$el.children().first();if(component.name!=='module-list'){if(componentElement.is(':visible')){totalWidth+=component.$el.outerWidth(true);}}else{modulelist=component.$el;}});maxMenuWidth=container.parent('.navbar-fixed-top').width();this.trigger('view:resize',maxMenuWidth-totalWidth);},_render:function(){this._super('_render');if(app.api.isAuthenticated()){this.showMenu();}else{this.hideMenu();}},showMenu:function(){this.$el.show();this.resize();},hideMenu:function(){this.$el.hide();}}) },
"activitystream": {"controller": /*
     * Your installation or use of this SugarCRM file is subject to the applicable
     * terms available at
     * http://support.sugarcrm.com/06_Customer_Center/10_Master_Subscription_Agreements/.
     * If you do not agree to all of the applicable terms or do not have the
     * authority to bind the entity as an authorized representative, then do not
     * install or use this SugarCRM file.
     *
     * Copyright (C) SugarCRM Inc. All rights reserved.
     */
({
	// Activitystream Layout (base) 
className:"block filtered activitystream-layout",initialize:function(opts){this.opts=opts;this.renderedActivities={};app.view.Layout.prototype.initialize.call(this,opts);this.setCollectionOptions();this.exposeDataTransfer();this.context.on("activitystream:post:prepend",this.prependPost,this);},setCollectionOptions:function(){var self=this;var endpoint=function(method,model,options,callbacks){var real_module=self.context.parent.get('module'),layoutType=self.context.parent.get('layout'),modelId=self.context.parent.get('modelId'),action=model.module,url;switch(layoutType){case"activities":url=app.api.buildURL(real_module,null,{},options.params);break;case"records":url=app.api.buildURL(real_module,action,{},options.params);break;case"record":url=app.api.buildURL(real_module,"activities",{id:modelId,link:true},options.params);break;}
return app.api.call("read",url,null,callbacks);};this.context.set("collectionOptions",{endpoint:endpoint,success:function(collection){collection.each(function(model){self.renderPost(model);});},error:function(error){self.collection.dataFetched=true;self.collection.reset();}});},exposeDataTransfer:function(){jQuery.event.props.push('dataTransfer');},bindDataChange:function(){if(this.collection){this.collection.on('add',function(model){this.renderPost(model);},this);this.collection.on('reset',function(){this.disposeAllActivities();this.collection.each(function(post){this.renderPost(post);},this);},this);}
if(this.context.parent){var model=this.context.parent.get("model");this.listenTo(model,"sync",_.once(function(){this.listenTo(model,"sync",function(){var options=this.context.get("collectionOptions");this.collection.fetch(options);});}));}},prependPost:function(model){var view=this.renderPost(model);view.$el.parent().prepend(view.$el);},loadData:function(options){var parentCol=this.context.parent.get("collection");if(parentCol.isEmpty()){parentCol.once("sync",function(){this._load(options);},this);}else{this._load(options);}},_load:function(options){if(_.isUndefined(this.context.parent.get('layout'))){return;}
options=_.extend({},options,this.context.get('collectionOptions'));this.collection.fetch(options);},renderPost:function(model,readonly){var view;if(_.has(this.renderedActivities,model.id)){view=this.renderedActivities[model.id];}else{view=app.view.createView({context:this.context,name:"activitystream",module:this.module,layout:this,model:model,readonly:readonly});this.addComponent(view);this.renderedActivities[model.id]=view;view.render();}
return view;},_placeComponent:function(component){if(this.disposed)
return;if(component.name==="activitystream"){this.$el.find(".activitystream-list").append(component.el);}else if(_.contains(['activitystream-bottom','list-bottom'],component.name)){this.$el.append(component.el);component.render();}else{this.$el.prepend(component.el);}},unbindData:function(){var model,collection;if(this.context.parent){model=this.context.parent.get("model");collection=this.context.parent.get("collection");if(model){model.off("change sync",null,this);}
if(collection){collection.off("sync",null,this);}}
app.view.Layout.prototype.unbindData.call(this);},disposeAllActivities:function(){var nonActivities=[];_.each(this._components,function(component){if(component.name!=='activitystream'){nonActivities.push(component);}else{component.dispose();}});this._components=nonActivities;this.renderedActivities={};}}) },
"asdashlet-filter": {"controller": /*
     * Your installation or use of this SugarCRM file is subject to the applicable
     * terms available at
     * http://support.sugarcrm.com/06_Customer_Center/10_Master_Subscription_Agreements/.
     * If you do not agree to all of the applicable terms or do not have the
     * authority to bind the entity as an authorized representative, then do not
     * install or use this SugarCRM file.
     *
     * Copyright (C) SugarCRM Inc. All rights reserved.
     */
({
	// Asdashlet-filter Layout (base) 
className:'dashablelist-filter',initialize:function(options){this._super('initialize',[options]);this.listenTo(this.layout,'asdashlet:config:save',this.saveFilterToDashlet);},saveFilterToDashlet:function(){var filterPanelLayout=this.getComponent('filterpanel');if(!filterPanelLayout){return;}
this.model.set('currentFilterId',filterPanelLayout.context.get('currentFilterId'));}}) },
"audit": {"controller": /*
     * Your installation or use of this SugarCRM file is subject to the applicable
     * terms available at
     * http://support.sugarcrm.com/06_Customer_Center/10_Master_Subscription_Agreements/.
     * If you do not agree to all of the applicable terms or do not have the
     * authority to bind the entity as an authorized representative, then do not
     * install or use this SugarCRM file.
     *
     * Copyright (C) SugarCRM Inc. All rights reserved.
     */
({
	// Audit Layout (base) 
plugins:['ShortcutSession'],shortcuts:['AuditHeaderPanel:Close']}) },
"bwc": {"controller": /*
     * Your installation or use of this SugarCRM file is subject to the applicable
     * terms available at
     * http://support.sugarcrm.com/06_Customer_Center/10_Master_Subscription_Agreements/.
     * If you do not agree to all of the applicable terms or do not have the
     * authority to bind the entity as an authorized representative, then do not
     * install or use this SugarCRM file.
     *
     * Copyright (C) SugarCRM Inc. All rights reserved.
     */
({
	// Bwc Layout (base) 
className:'bwc layout',loadData:function(){}}) },
"create": {"controller": /*
     * Your installation or use of this SugarCRM file is subject to the applicable
     * terms available at
     * http://support.sugarcrm.com/06_Customer_Center/10_Master_Subscription_Agreements/.
     * If you do not agree to all of the applicable terms or do not have the
     * authority to bind the entity as an authorized representative, then do not
     * install or use this SugarCRM file.
     *
     * Copyright (C) SugarCRM Inc. All rights reserved.
     */
({
	// Create Layout (base) 
plugins:['ShortcutSession'],shortcuts:['Sidebar:Toggle','Create:Save','Create:Cancel']}) },
"create-actions": {"controller": /*
     * Your installation or use of this SugarCRM file is subject to the applicable
     * terms available at
     * http://support.sugarcrm.com/06_Customer_Center/10_Master_Subscription_Agreements/.
     * If you do not agree to all of the applicable terms or do not have the
     * authority to bind the entity as an authorized representative, then do not
     * install or use this SugarCRM file.
     *
     * Copyright (C) SugarCRM Inc. All rights reserved.
     */
({
	// Create-actions Layout (base) 
plugins:['ShortcutSession'],shortcuts:['Sidebar:Toggle','Create:Save','Create:Cancel','Dropdown:More']}) },
"create-nodupecheck": {"controller": /*
     * Your installation or use of this SugarCRM file is subject to the applicable
     * terms available at
     * http://support.sugarcrm.com/06_Customer_Center/10_Master_Subscription_Agreements/.
     * If you do not agree to all of the applicable terms or do not have the
     * authority to bind the entity as an authorized representative, then do not
     * install or use this SugarCRM file.
     *
     * Copyright (C) SugarCRM Inc. All rights reserved.
     */
({
	// Create-nodupecheck Layout (base) 
plugins:['ShortcutSession'],shortcuts:['Sidebar:Toggle','Create:Save','Create:Cancel']}) },
"dashablelist-filter": {"controller": /*
     * Your installation or use of this SugarCRM file is subject to the applicable
     * terms available at
     * http://support.sugarcrm.com/06_Customer_Center/10_Master_Subscription_Agreements/.
     * If you do not agree to all of the applicable terms or do not have the
     * authority to bind the entity as an authorized representative, then do not
     * install or use this SugarCRM file.
     *
     * Copyright (C) SugarCRM Inc. All rights reserved.
     */
({
	// Dashablelist-filter Layout (base) 
className:'dashablelist-filter',initialize:function(options){this._super('initialize',[options]);var filterPanelLayout=this.getComponent('filterpanel');if(filterPanelLayout){filterPanelLayout.before('render',this._reinitializeFilterPanel,null,this);this.listenTo(this.layout,'dashlet:filter:reinitialize',filterPanelLayout.render);}},_reinitializeFilterPanel:function(){var filterPanelLayout=this.getComponent('filterpanel');if(!filterPanelLayout){return;}
var moduleName=this.model.get('module'),id=this.model.get('filter_id');filterPanelLayout.currentModule=moduleName;this.context.set('currentFilterId',id);}}) },
"dashboard": {"controller": /*
     * Your installation or use of this SugarCRM file is subject to the applicable
     * terms available at
     * http://support.sugarcrm.com/06_Customer_Center/10_Master_Subscription_Agreements/.
     * If you do not agree to all of the applicable terms or do not have the
     * authority to bind the entity as an authorized representative, then do not
     * install or use this SugarCRM file.
     *
     * Copyright (C) SugarCRM Inc. All rights reserved.
     */
({
	// Dashboard Layout (base) 
className:'row-fluid',dashboardLayouts:{'record':'record-dashboard','records':'list-dashboard'},events:{'click [data-action=create]':'createClicked'},error:{handleNotFoundError:function(error){var currentRoute=Backbone.history.getFragment();if(currentRoute.substr(0,5)==='Home/'){app.router.redirect('#Home');return false;}},handleValidationError:function(error){return false;}},dashboardVisibleState:'open',initialize:function(options){var context=options.context,module=context.parent&&context.parent.get('module')||context.get('module');if(options.meta&&options.meta.method&&options.meta.method==='record'&&!context.get('modelId')){context.set('create',true);}
var model=this._getNewDashboardObject('model',context);if(context.get('modelId')){model.set('id',context.get('modelId'),{silent:true});}
context.set({model:model,collection:this._getNewDashboardObject('collection',context)});this._super('initialize',[options]);this.model.on('setMode',function(mode){if(mode==='edit'||mode==='create'){this.$('.dashboard').addClass('edit');}else{this.$('.dashboard').removeClass('edit');}},this);app.events.on('app:help:show',this.openHelpDashboard,this);app.events.on('app:help:hide',this.closeHelpDashboard,this);var defaultLayout=this.closestComponent('sidebar');if(defaultLayout){this.listenTo(defaultLayout,'sidebar:state:changed',function(state){this.dashboardVisibleState=state;if(state==='open'&&this.isHelpDashboard()){app.events.trigger('app:help:shown');}else{app.events.trigger('app:help:hidden');}},this);try{this.dashboardVisibleState=defaultLayout.isSidePaneVisible()?'open':'close';}catch(error){}}
this.model.on('sync',function(){if(this.dashboardVisibleState==='open'&&this.isHelpDashboard()){app.events.trigger('app:help:shown');if(this.module==='Home'){var list=this.getComponent('list'),headerpane=(!_.isUndefined(list))?list.getComponent('dashboard-headerpane'):undefined;if(headerpane){var help_headerpane_meta=app.metadata.getView(this.module,'help-dashboard-headerpane');help_headerpane_meta.last_state=headerpane.meta.last_state;headerpane.meta=help_headerpane_meta;headerpane.render();}}}},this);if(module==='Home'&&context.has('modelId')){var lastVisitedStateKey=this.getLastStateKey();app.user.lastState.set(lastVisitedStateKey,context.get('modelId'));}
if(module==='Activities'&&!context.has('modelId')&&_.isUndefined(this.model.mode)){this.once('render',function(){this.collection.fetch({silent:true,success:_.bind(this.setDefaultDashboard,this)});},this);}},openHelpDashboard:function(){if(this.dashboardVisibleState==='close'){var defaultLayout=this.closestComponent('sidebar');if(defaultLayout){defaultLayout.toggleSidePane(true);}}
if(!this.isHelpDashboard()){this.collection.fetch({silent:true,success:_.bind(this.showHelpDashboard,this)});}},closeHelpDashboard:function(){if(this.isHelpDashboard()){this.collection.fetch({silent:true,success:_.bind(this.hideHelpDashboard,this)});}},showHelpDashboard:function(collection){var dashboard=_.find(collection.models,function(model){return(model.get('dashboard_type')==='help-dashboard');});this._navigate(dashboard);},hideHelpDashboard:function(collection){var dashboard=_.find(collection.models,function(model){return(model.get('dashboard_type')!='help-dashboard');});app.user.lastState.set(this.getLastStateKey(),'');this._navigate(dashboard);},isHelpDashboard:function(){return(this.model.get('dashboard_type')==='help-dashboard');},loadData:function(options,setFields){if(this.context.parent&&!this.context.parent.isDataFetched()){var parent=this.context.parent.get('modelId')?this.context.parent.get('model'):this.context.parent.get('collection');if(parent){parent.once('sync',function(){this._super('loadData',[options,setFields]);},this);}}else{this._super('loadData',[options,setFields]);}},createClicked:function(evt){if(this.model.dashboardModule==='Home'){var route=app.router.buildRoute(this.module,null,'create');app.router.navigate(route,{trigger:true});}else{this.navigateLayout('create');}},_placeComponent:function(component){var dashboardEl=this.$('[data-dashboard]'),css=this.context.get('create')?' edit':'';if(dashboardEl.length===0){dashboardEl=$('<div></div>').attr({'class':'cols row-fluid'});this.$el.append($('<div></div>').addClass('dashboard'+css).attr({'data-dashboard':'true'}).append(dashboardEl));}else{dashboardEl=dashboardEl.children('.row-fluid');}
dashboardEl.append(component.el);},bindDataChange:function(){var modelId=this.context.get('modelId');if(!(modelId&&this.context.get('create'))&&this.collection){this.collection.on('reset',this.setDefaultDashboard,this);}},setDefaultDashboard:function(){if(this.disposed){return;}
var lastVisitedStateKey=this.getLastStateKey(),lastViewed=app.user.lastState.get(lastVisitedStateKey),hasHelpOnly=(this.collection.models.length==1&&_.first(this.collection.models).get('dashboard_type')==='help-dashboard'),helpLastShown=(hasHelpOnly&&lastViewed===_.first(this.collection.models).get('id'));if(hasHelpOnly&&!helpLastShown){this._renderEmptyTemplate();}else if(this.collection.models.length>0){var currentModule=this.context.get('module'),model;if(currentModule!=='Home'){model=_.first(this.collection.models);}else{model=this.collection.find(function(dash){return dash.get('dashboard_type')==='dashboard';});}
if(lastViewed){var lastVisitedModel=this.collection.get(lastViewed);if(!_.isEmpty(lastVisitedModel)){app.user.lastState.set(lastVisitedStateKey,'');model=lastVisitedModel;}}
if(currentModule=='Home'&&_.isString(lastViewed)&&lastViewed.indexOf('bwc_dashboard')!==-1){app.router.navigate(lastViewed,{trigger:true});}else{this._navigate(model);}}else{var _initDashboard=this._getInitialDashboardMetadata();if(_initDashboard&&!_.isEmpty(_initDashboard.metadata)){_.each(_initDashboard.metadata['components'],function(component,component_key){_.each(component['rows'],function(row,row_key){_initDashboard.metadata['components'][component_key]['rows'][row_key]=_.filter(row,function(cell){var module=(cell.context&&cell.context.module)?cell.context.module:this.module;return(!app.acl.hasAccess('access',module));});},this);_initDashboard.metadata['components'][component_key]['rows']=_.filter(_initDashboard.metadata['components'][component_key]['rows'],function(row){return(row.length>0);});},this);}
_.each(_initDashboard,function(dash){var model=this._getNewDashboardObject('model',this.context);model.set(dash);if(this.context.get('modelId')){model.set('id',this.context.get('modelId'),{silent:true});}
if(!_.isUndefined(model.get('metadata'))){model.save({},this._getDashboardModelSaveParams());}},this);}},_getInitialDashboardMetadata:function(){var layoutName=this.dashboardLayouts[this.context.parent&&this.context.parent.get('layout')||'record'],initDash=app.metadata.getLayout(this.model.dashboardModule,layoutName)||{};if(_.has(initDash,'metadata')){initDash.dashboard_type=initDash.dashboard_type||'dashboard';}
return this.addHelpDashboardMetadata(initDash);},addHelpDashboardMetadata:function(_initDashboard){var _helpDB=app.metadata.getLayout(this.model.dashboardModule,'help-dashboard');if(_.has(_initDashboard,'metadata')){_initDashboard=[_helpDB,_initDashboard];}else{_initDashboard=[_helpDB];}
return _initDashboard;},getLastStateKey:function(){if(this._lastStateKey){return this._lastStateKey;}
var model=this.context.get('model'),view=model.get('view_name'),module=model.dashboardModule,key=module+'.'+view;this._lastStateKey=app.user.lastState.key(key,this);return this._lastStateKey;},_navigate:function(dashboard){if(this.disposed){return;}
var hasParentContext=(this.context&&this.context.parent),hasModelId=(dashboard&&dashboard.has('id')),actualModule=(hasParentContext)?this.context.parent.get('module'):this.module,isHomeModule=(actualModule==='Home');if(hasParentContext&&hasModelId){this._navigateLayout(dashboard.get('id'),dashboard.get('dashboard_type'));}else if(hasParentContext&&!hasModelId){this._navigateLayout('list');}else if(!hasParentContext&&hasModelId&&isHomeModule){app.navigate(this.context,dashboard);}else if(isHomeModule){var route=app.router.buildRoute(this.module);app.router.navigate(route,{trigger:true});}},_navigateLayout:function(dashboard,type){var onConfirm=_.bind(function(){this.navigateLayout(dashboard,type);},this),headerpane=this.getComponent('dashboard-headerpane');if(headerpane&&headerpane.changed){return headerpane.warnUnsavedChanges(onConfirm,undefined,_.bind(function(){this.collection.reset([],{silent:true});},this));}
onConfirm();},navigateLayout:function(id,type){var layout=this.layout,lastVisitedStateKey=this.getLastStateKey(),type=(_.isUndefined(type))?'dashboard':type;this.dispose();if(!_.contains(['dashboard','help-dashboard'],type)){type='dashboard';}
if(!_.contains(['create','list'],id)){app.user.lastState.set(lastVisitedStateKey,id);}
var ctxVars={dashboard_type:'dashboard'};if(id==='create'){ctxVars.create=true;}else if(id!=='list'){ctxVars.modelId=id;}
layout._addComponentsFromDef([{layout:{type:'dashboard',components:(id==='list')?[]:[{view:type+'-headerpane'},{layout:'dashlet-main'}],last_state:{id:'last-visit'}},context:_.extend({module:'Home',forceNew:true},ctxVars)}]);layout.removeComponent(0);layout.loadData({},false);layout.render();},unbindData:function(){var model,collection;if(this.collection){this.collection.off('reset',this.setDefaultDashboard,this);}
if(this.context.parent){model=this.context.parent.get('model');collection=this.context.parent.get('collection');if(model){model.off('sync',null,this);}
if(collection){collection.off('sync',null,this);}}
this._super('unbindData');},_getNewDashboardObject:function(modelOrCollection,context){var obj,ctx=context&&context.parent||context,module=ctx.get('module')||context.get('module'),layoutName=ctx.get('layout')||'',sync=function(method,model,options){options=app.data.parseOptionsForSync(method,model,options);if(options&&options.params){options.params.max_num=-1;}
var callbacks=app.data.getSyncCallbacks(method,model,options),path=(this.dashboardModule==='Home'||model.id)?this.apiModule:this.apiModule+'/'+this.dashboardModule;if(method==='read'){options.params.view_name=layoutName;}
app.api.records(method,path,model.attributes,options.params,callbacks);};if(module==='Home'){layoutName='';}
switch(modelOrCollection){case'model':obj=this._getNewDashboardModel(module,layoutName,sync);break;case'collection':obj=this._getNewDashboardCollection(module,layoutName,sync);break;}
return obj;},_getNewDashboardModel:function(module,layoutName,syncFn,getNew){getNew=(_.isUndefined(getNew))?true:getNew;var Dashboard=app.Bean.extend({sync:syncFn,apiModule:'Dashboards',module:'Home',dashboardModule:module,maxColumns:(module==='Home')?3:1,minColumnSpanSize:(module==='Home')?4:12,defaults:{view_name:layoutName}});return(getNew)?new Dashboard():Dashboard;},_getNewDashboardCollection:function(module,layoutName,syncFn,getNew){getNew=(_.isUndefined(getNew))?true:getNew;var Dashboard=this._getNewDashboardModel(module,layoutName,syncFn,false),DashboardCollection=app.BeanCollection.extend({sync:syncFn,apiModule:'Dashboards',module:'Home',dashboardModule:module,model:Dashboard});return(getNew)?new DashboardCollection():DashboardCollection;},_getDashboardModelSaveParams:function(){var params={silent:true,showAlerts:false};params.error=_.bind(this._renderEmptyTemplate,this);params.success=_.bind(function(model){if(!this.disposed){if(model.get('dashboard_module')!=='Home'){if(model.get('dashboard_type')==='help-dashboard'){this._navigate(model);}}else{if(model.get('dashboard_type')==='dashboard'){this._navigate(model);}}}},this);return params;},_renderEmptyTemplate:function(){var tplName=this.type||this.name,template=app.template.getLayout(tplName+'.dashboard-empty');this.$el.html(template(this));},_dispose:function(){app.events.trigger('app:help:hidden');var defaultLayout=this.closestComponent('sidebar');if(defaultLayout){this.stopListening(defaultLayout);}
this.dashboardLayouts=null;this._super('_dispose');}}) },
"dashlet": {"controller": /*
     * Your installation or use of this SugarCRM file is subject to the applicable
     * terms available at
     * http://support.sugarcrm.com/06_Customer_Center/10_Master_Subscription_Agreements/.
     * If you do not agree to all of the applicable terms or do not have the
     * authority to bind the entity as an authorized representative, then do not
     * install or use this SugarCRM file.
     *
     * Copyright (C) SugarCRM Inc. All rights reserved.
     */
({
	// Dashlet Layout (base) 
dashboard:undefined,initialize:function(options){this.index=options.meta.index;this._super('initialize',[options]);if(!(this.meta.preview||this.meta.empty)){this.dashboard=this.findLayout('dashboard',options.layout);}
this.on("render",function(){this.model.trigger("applyDragAndDrop");},this);this.context.on("dashboard:collapse:fire",this.collapse,this);},findLayout:function(name,layout){return(layout.name==name||layout.type==name)?layout:this.findLayout(name,layout.layout);},_addComponentsFromDef:function(components){if(!(this.meta.preview||this.meta.empty)){var dashletDef=_.first(components),dashletMeta,dashletModule,toolbar={},pattern=/^(LBL|TPL|NTC|MSG)_(_|[a-zA-Z0-9])*$/,label=this.meta.label;if(dashletDef.view){toolbar=dashletDef.view['custom_toolbar']||{};dashletMeta=app.metadata.getView(dashletDef.view.module,dashletDef.view.name||dashletDef.view.type);dashletModule=dashletDef.view.module?dashletDef.view.module:null;}else if(dashletDef.layout){toolbar=dashletDef.view['custom_toolbar']||{};dashletMeta=app.metadata.getLayout(dashletDef.layout.module,dashletDef.layout.name||dashletDef.layout.type);dashletModule=dashletDef.layout.module?dashletDef.layout.module:null;}
if(!dashletModule&&dashletDef.context&&dashletDef.context.module){dashletModule=dashletDef.context.module;}
if(pattern.test(this.meta.label)){label=app.lang.get(label,dashletModule,dashletDef.view||dashletDef.layout);}
if(_.isEmpty(toolbar)&&dashletMeta&&dashletMeta['custom_toolbar']){toolbar=dashletMeta['custom_toolbar'];}
if(toolbar!=="no"){components.push({view:{type:'dashlet-toolbar',label:label,toolbar:toolbar},context:{module:'Home',skipFetch:true}});}}
if(this.meta.empty){this.$el.html(app.template.empty(this));}else{this.$el.html(this.template(this));}
var context=this.context.parent||this.context;this._super('_addComponentsFromDef',[components,context,context.get("module")]);},createComponentFromDef:function(def,context,module){if(def.view&&!_.isUndefined(def.view.toolbar)){var dashlet=_.first(this._components);if(_.isFunction(dashlet.getLabel)){def.view.label=dashlet.getLabel();}
context=dashlet.context;}
var skipFetch=def.view?def.view.skipFetch:def.layout.skipFetch;if(def.context&&skipFetch!==false){def.context.skipFetch=true;}
return this._super('createComponentFromDef',[def,context,module]);},setInvisible:function(){if(this._invisible===true){return;}
var comp=_.first(this._components);this.model.on("setMode",this.setMode,this);this._invisible=true;this.$el.addClass('hide');this.listenTo(comp,"render",this.unsetInvisible,this);},unsetInvisible:function(){if(this._invisible!==true){return;}
var comp=_.first(this._components);comp.trigger("show");this._invisible=false;this.model.off("setMode",null,this);this.$el.removeClass('hide');this.stopListening(comp,"render");},_placeComponent:function(comp,def){if(this.meta.empty){this.$el.append(comp.el);}else if(this.meta.preview){this.$el.addClass('preview-data');this.$('[data-dashlet=dashlet]').append(comp.el);}else if(_.isUndefined(def)){this.$('[data-dashlet=dashlet]').after(comp.el);}else if(def.view&&!_.isUndefined(def.view.toolbar)){this.$('[data-dashlet=toolbar]').append(comp.el);}else{this.$('[data-dashlet=dashlet]').append(comp.el);}},setDashletMetadata:function(meta){var metadata=this.model.get("metadata"),component=this.getCurrentComponent(metadata,this.index);_.each(meta,function(value,key){this[key]=value;},component);this.model.set("metadata",app.utils.deepCopy(metadata),{silent:true});this.model.trigger("change:layout");if(this.model.mode==='view'){this.model.save(null,{silent:true,showAlerts:true,success:_.bind(function(){this.model.unset('updated');},this)});}
return component;},getCurrentComponent:function(metadata,tracekey){var position=tracekey.split(''),component=metadata.components;_.each(position,function(index){component=component.rows?component.rows[index]:component[index];},this);return component;},addDashlet:function(meta){var component=this.setDashletMetadata(meta),def=component.view||component.layout||component;this.meta.empty=false;this.meta.label=def.label||def.name||"";_.each(this._components,function(component){component.layout=null;component.dispose();},this);this._components=[];if(component.context){_.extend(component.context,{forceNew:true})}
this.meta.components=[component];this._addComponentsFromDef(this.meta.components);this.trigger('init');this.model.set('updated',true);this.loadData();this.render();},removeDashlet:function(){var cellLayout=this.layout,rowLayout=cellLayout.layout;if(this.model.mode==='view'&&cellLayout._components.length===1){var dashletRow=this.closestComponent('dashlet-row');dashletRow.removeRow(this.layout.index.split('').pop());dashletRow.model.save(null,{showAlerts:true});return;}
var metadata=this.model.get("metadata"),component=this.getCurrentComponent(metadata,this.index);_.each(component,function(value,key){if(key!=='width'){delete component[key];}},this);this.model.set("metadata",app.utils.deepCopy(metadata),{silent:true});this.model.trigger("change:layout");if(this.model.mode==='view'){this.model.save(null,{showAlerts:true});}else{this.model.set('updated',true);}
this.meta.empty=true;_.each(this._components,function(component){component.layout=null;component.dispose();},this);this._components=[];this._addComponentsFromDef([{view:'dashlet-cell-empty',context:{module:'Home',skipFetch:true}}]);this.render();},addRow:function(columns){this.layout.addRow(columns);},reloadDashlet:function(options){var component=_.first(this._components),context=component.context;context.resetLoadFlag();component.loadData(options);},editDashlet:function(evt){var self=this,meta=app.utils.deepCopy(_.first(this.meta.components)),type=meta.layout?"layout":"view";if(_.isString(meta[type])){meta[type]={name:meta[type],config:true};}else{meta[type].config=true;}
meta[type]=_.extend({},meta[type],meta.context);if(meta.context){meta.context.skipFetch=true;delete meta.context.link;}
app.drawer.open({layout:{name:'dashletconfiguration',components:[meta]},context:{model:new app.Bean(),forceNew:true}},function(model){if(!model)return;var conf=model.toJSON(),dash={context:{module:model.get("module")||(meta.context?meta.context.module:null),link:model.get("link")||null}};delete conf.config;if(_.isEmpty(dash.context.module)&&_.isEmpty(dash.context.link)){delete dash.context;}
dash[type]=conf;self.addDashlet(dash);});},collapse:function(collapsed){this.$(".dashlet-toggle > i").toggleClass("icon-chevron-down",collapsed);this.$(".dashlet-toggle > i").toggleClass("icon-chevron-up",!collapsed);this.$(".thumbnail").toggleClass("collapsed",collapsed);this.$("[data-dashlet=dashlet]").toggleClass("hide",collapsed);},setMode:function(type){if(!this._invisible){return;}
if(type==='edit'||type==='drag'){this.show();}else{this.hide();}},setTitle:function(title){if(this.$el){var $titleEl=this.$('h4.dashlet-title');if($titleEl.length){$titleEl.html(title);}}},_dispose:function(){this.model.off("setMode",null,this);this.off("render");this.context.off("dashboard:collapse:fire",null,this);this._super('_dispose');}}) },
"dashlet-cell": {"controller": /*
     * Your installation or use of this SugarCRM file is subject to the applicable
     * terms available at
     * http://support.sugarcrm.com/06_Customer_Center/10_Master_Subscription_Agreements/.
     * If you do not agree to all of the applicable terms or do not have the
     * authority to bind the entity as an authorized representative, then do not
     * install or use this SugarCRM file.
     *
     * Copyright (C) SugarCRM Inc. All rights reserved.
     */
({
	// Dashlet-cell Layout (base) 
extendsFrom:'DashletRowLayout',tagName:'ul',className:'dashlet-cell rows row-fluid',_placeComponent:function(comp,def){var span='dashlet-container span'+(def.width||12),self=this;this.$el.append($("<li>",{'class':span}).data("index",function(){var index=def.layout.index.split('').pop();return self.index+''+index;}).append(comp.el));},setMetadata:function(meta){meta.components=meta.components||[];_.each(meta.components,function(component,index){if(!(component.view||component.layout)){meta.components[index]=_.extend({},{layout:{type:'dashlet',index:this.index+''+index,empty:true,components:[{view:'dashlet-cell-empty',context:{module:'Home',create:true}}]}},component);}else{var def=component.view||component.layout;if(!_.isObject(def)){def=component;}
if(component.context){_.extend(component.context,{forceNew:true})}
meta.components[index]={layout:{type:'dashlet',index:this.index+''+index,label:def.label||def.name||"",components:[component]},width:component.width};}},this);return meta;}}) },
"dashlet-main": {"controller": /*
     * Your installation or use of this SugarCRM file is subject to the applicable
     * terms available at
     * http://support.sugarcrm.com/06_Customer_Center/10_Master_Subscription_Agreements/.
     * If you do not agree to all of the applicable terms or do not have the
     * authority to bind the entity as an authorized representative, then do not
     * install or use this SugarCRM file.
     *
     * Copyright (C) SugarCRM Inc. All rights reserved.
     */
({
	// Dashlet-main Layout (base) 
tagName:"ul",className:"dashlets row-fluid",bindDataChange:function(){if(this.model){this.model.on("change:metadata",this.setMetadata,this);this.model.on("change:layout",this.setWidth,this);this.model.on("applyDragAndDrop",this.applyDragAndDrop,this);this.model.on("setMode",function(mode){this.model._previousMode=this.model.mode;this.model.mode=mode;},this);this.model.trigger('setMode',this.context.get("create")?'edit':'view');}},setMetadata:function(){if(!this.model.get("metadata"))return;_.each(this._components,function(component){component.dispose();},this);this._components=[];this.$el.children().remove();var components=app.utils.deepCopy(this.model.get("metadata")).components;_.each(components,function(component,index){this._addComponentsFromDef([{layout:{type:'dashlet-row',width:component.width,components:component.rows,index:index+''}}]);},this);this.loadData();this.render();},setWidth:function(){var metadata=this.model.get("metadata"),$el=this.$el.children();_.each(metadata.components,function(component,index){$el.get(index).className=$el.get(index).className.replace(/span\d+\s*/,'');$($el.get(index)).addClass("span"+component.width);},this);},applyDragAndDrop:function(){var self=this;this.$('.dashlet:not(.empty)').draggable({revert:'invalid',handle:'h4',scroll:true,scrollSensitivity:100,appendTo:this.$el,start:function(event,ui){$(this).css({visibility:'hidden'});self.model.trigger("setMode","drag");self.context.trigger('dashlet:draggable:start');},stop:function(){self.model.trigger("setMode",self.model._previousMode);self.$(".dashlet.ui-draggable").attr("style","");self.context.trigger('dashlet:draggable:stop');},helper:function(){var $clone=$(this).clone();$clone.addClass('helper').css({opacity:0.8}).width($(this).width());$clone.find('.btn-toolbar').remove();return $clone;}});this.$('.dashlet-container').droppable({activeClass:'ui-droppable-active',hoverClass:'active',tolerance:'pointer',accept:function($el){return $el.data('type')==='dashlet'&&self.$(this).find('[data-action=droppable]').length===1;},drop:function(event,ui){var sourceIndex=ui.draggable.parents(".dashlet-container:first").data('index')(),targetIndex=self.$(this).data('index')();self.switchComponent(targetIndex,sourceIndex);}});},getCurrentComponent:function(metadata,tracekey){var position=tracekey.split(''),component=metadata.components;_.each(position,function(index){component=component.rows?component.rows[index]:component[index];},this);var layout=this;_.each(position,function(index){layout=layout._components[index];},this);return{metadata:component,layout:layout};},switchComponent:function(target,source){if(target===source){return;}
var metadata=this.model.get("metadata"),targetComponent=this.getCurrentComponent(metadata,target),sourceComponent=this.getCurrentComponent(metadata,source);var cloneMeta=app.utils.deepCopy(targetComponent.metadata);_.each(targetComponent.metadata,function(value,key){if(key!=='width'){delete targetComponent.metadata[key];}},this);_.each(sourceComponent.metadata,function(value,key){if(key!=='width'){targetComponent.metadata[key]=value;delete sourceComponent.metadata[key];}},this);_.each(cloneMeta,function(value,key){if(key!=='width'){sourceComponent.metadata[key]=value;}},this);this.model.set("metadata",app.utils.deepCopy(metadata),{silent:true});this.model.trigger("change:layout");if(this.model._previousMode==='view'){this.model.save(null,{showAlerts:true});}
var targetDashlet=targetComponent.layout._components.splice(0),sourceDashlet=sourceComponent.layout._components.splice(0);var targetMeta=app.utils.deepCopy(targetComponent.layout.meta),sourceMeta=app.utils.deepCopy(sourceComponent.layout.meta);targetComponent.layout.meta=sourceMeta;sourceComponent.layout.meta=targetMeta;_.each(targetDashlet,function(comp){sourceComponent.layout._components.push(comp);comp.layout=sourceComponent.layout;},this);_.each(sourceDashlet,function(comp){targetComponent.layout._components.push(comp);comp.layout=targetComponent.layout;},this);var targetInvisible=targetComponent.layout._invisible,sourceInvisible=sourceComponent.layout._invisible;if(targetInvisible){sourceComponent.layout.setInvisible();}else{sourceComponent.layout.unsetInvisible();}
if(sourceInvisible){targetComponent.layout.setInvisible();}else{targetComponent.layout.unsetInvisible();}
var cloneEl=targetComponent.layout.$el.children(":first").get(0);targetComponent.layout.$el.append(sourceComponent.layout.$el.children(":not(.helper)").get(0));sourceComponent.layout.$el.append(cloneEl);},_dispose:function(){this.$('.dashlet').draggable('destroy');this.$('.dashlet-container').droppable('destroy');this._super('_dispose');}}) },
"dashlet-row": {"controller": /*
     * Your installation or use of this SugarCRM file is subject to the applicable
     * terms available at
     * http://support.sugarcrm.com/06_Customer_Center/10_Master_Subscription_Agreements/.
     * If you do not agree to all of the applicable terms or do not have the
     * authority to bind the entity as an authorized representative, then do not
     * install or use this SugarCRM file.
     *
     * Copyright (C) SugarCRM Inc. All rights reserved.
     */
({
	// Dashlet-row Layout (base) 
tagName:'li',events:{'click .remove-row':'removeClicked'},plugins:['Tooltip'],initialize:function(options){this.index=options.meta.index;options.meta=this.setMetadata(options.meta);this._super('initialize',[options]);this.model.on("setMode",this.setMode,this);this.model.on("applyDragAndDrop",this.applyDragAndDrop,this);this.setMode(this.model.mode);},setMetadata:function(meta){meta.components=meta.components||[];_.each(meta.components,function(component,index){meta.components[index]={layout:{type:'dashlet-cell',index:this.index+''+index,components:component}};},this);var addRowDashlet={layout:{type:'dashlet',index:this.index+''+meta.components.length,empty:true,components:[{view:'dashlet-row-empty',context:{module:'Home',forceNew:true,create:true}}]}};meta.components.push(addRowDashlet);if(meta.css_class)meta.css_class+=' ';meta.css_class='span'+(meta.width||12);return meta;},_placeComponent:function(comp,def,prepend){var $body=this.$el.children(".dashlet-row");if($body.length===0){$body=$("<ul></ul>").addClass("dashlet-row");this.$el.append($body);}
var headerTemplate=app.template.getLayout(this.name+'.header')||app.template.empty,$container=$("<div></div>",{'class':'rows well well-invisible'}).append(headerTemplate()).append(comp.el),$el=$("<li></li>",{'class':'row-fluid','data-sortable':'1'}).data('index',function(){return comp.index+'';}).append($container);if(prepend){$body.children("li:last").before($el);}else{$body.append($el);}},addComponent:function(component,def){if(this.prependComponent){if(!component.layout)component.layout=this;this._components.splice(this._components.length-1,0,component);this._placeComponent(component,def,true);this.prependComponent=false;}else{this._super('addComponent',[component,def]);}},addRow:function(columns){var span=12 / columns,components=[];_.times(columns,function(){components.push({width:span});});var metadata=this.model.get('metadata'),position=this.index.split(''),component=metadata.components;_.each(position,function(index){component=component.rows?component.rows[index]:component[index];},this);component.rows.push(app.utils.deepCopy(components));this.model.set("metadata",metadata,{silent:true});this.model.trigger("change:layout");this.prependComponent=true;_.each(this._components,function(component){component.index++;},this);this._addComponentsFromDef([{layout:{type:'dashlet-cell',index:this.index+''+(this._components.length-1),components:components}}]);_.each(this._components,function(component,index){component.index=this.index+''+index;},this);this.render();this.setMode(this.model.mode);},removeClicked:function(evt){var cell=$(evt.currentTarget).closest('.row-fluid'),index=(cell.data('index')()).split('').pop();if(!cell.find('[data-dashlet]').length){this.removeRow(index);return;}
app.alert.show('delete_confirmation',{level:'confirmation',messages:app.lang.get('LBL_REMOVE_DASHLET_ROW_CONFIRM',this.module),onConfirm:_.bind(function(){this.removeRow(index);},this)});},removeRow:function(index){var metadata=this.model.get("metadata"),position=this.index.split(''),component=metadata.components;_.each(position,function(index){component=component.rows?component.rows[index]:component[index];},this);component.rows.splice(index,1);this._components[index].dispose();this._components.splice(index,1);_.each(this._components,function(component,index){component.index=this.index+''+index;_.each(component._components,function(cell,cellIndex){cell.index=component.index+''+cellIndex;});},this);this.model.set("metadata",app.utils.deepCopy(metadata),{silent:true});this.model.trigger("change:layout");this.$el.children(".dashlet-row").children("li:eq("+index+")").remove();},setMode:function(type){if(type==='edit'||(this.model._previousMode==='edit'&&type==='drag')){this.$el.children(".dashlet-row").sortable("enable");this.$el.children(".dashlet-row").children("li").not(":last").addClass("sortable").children(".rows").removeClass("well-invisible").children(".btn-link").toggleClass("hide",false);}else{this.$el.children(".dashlet-row").sortable("disable");this.$el.children(".dashlet-row").children("li").not(":last").addClass("sortable").children(".rows").addClass("well-invisible").children(".btn-link").toggleClass("hide",true);}},applyDragAndDrop:function(){var self=this;this.$el.children(".dashlet-row").sortable({axis:"y",items:"li.sortable",handle:".move",forcePlaceholderSize:true,placeholder:"placeholder",update:function(event,ui){var sourceIndex=ui.item.first().data('index')(),targetIndex=ui.item.first().next().data('index')();self.switchComponent(targetIndex,sourceIndex);}});this.setMode(this.model.mode);},switchComponent:function(target,source){var metadata=this.model.get("metadata"),position=this.index.split(''),component=metadata.components,targetIndex=target.split('').pop(),sourceIndex=source.split('').pop();_.each(position,function(index){component=component.rows?component.rows[index]:component[index];},this);var sourceMetadata=component.rows[sourceIndex],sourceComponent=this._components[sourceIndex];if(sourceIndex>targetIndex){component.rows.splice(sourceIndex,1);component.rows.splice(targetIndex,0,sourceMetadata);this._components.splice(sourceIndex,1);this._components.splice(targetIndex,0,sourceComponent);}else{component.rows.splice(targetIndex,0,sourceMetadata);component.rows.splice(sourceIndex,1);this._components.splice(targetIndex,0,sourceComponent);this._components.splice(sourceIndex,1);}
_.each(this._components,function(component,index){component.index=this.index+''+index;},this);this.model.set("metadata",app.utils.deepCopy(metadata),{silent:true});this.model.trigger("change:layout");},_dispose:function(){this.$el.children(".dashlet-row").sortable("destroy");this.model.off("applyDragAndDrop",null,this);this.model.off("setMode",null,this);this._super('_dispose');}}) },
"dashletconfiguration": {"controller": /*
     * Your installation or use of this SugarCRM file is subject to the applicable
     * terms available at
     * http://support.sugarcrm.com/06_Customer_Center/10_Master_Subscription_Agreements/.
     * If you do not agree to all of the applicable terms or do not have the
     * authority to bind the entity as an authorized representative, then do not
     * install or use this SugarCRM file.
     *
     * Copyright (C) SugarCRM Inc. All rights reserved.
     */
({
	// Dashletconfiguration Layout (base) 
plugins:['ShortcutSession'],shortcuts:['Dashlet:Config:Cancel','Dashlet:Config:Save'],initialize:function(options){var meta=app.metadata.getLayout(options.module,options.name),main_panel;_.each(meta.components,function(component){main_panel=_.find(component.layout.components,function(childComponent){return childComponent.layout&&childComponent.layout.name==='main-pane';},this);},this);if(main_panel){main_panel.layout.components=_.union(main_panel.layout.components,options.meta.components);}
options.meta=meta;app.view.Layout.prototype.initialize.call(this,options);}}) },
"dashletselect": {"controller": /*
     * Your installation or use of this SugarCRM file is subject to the applicable
     * terms available at
     * http://support.sugarcrm.com/06_Customer_Center/10_Master_Subscription_Agreements/.
     * If you do not agree to all of the applicable terms or do not have the
     * authority to bind the entity as an authorized representative, then do not
     * install or use this SugarCRM file.
     *
     * Copyright (C) SugarCRM Inc. All rights reserved.
     */
({
	// Dashletselect Layout (base) 
plugins:['ShortcutSession'],shortcuts:['Dashlet:Select:Cancel']}) },
"default": {"controller": /*
     * Your installation or use of this SugarCRM file is subject to the applicable
     * terms available at
     * http://support.sugarcrm.com/06_Customer_Center/10_Master_Subscription_Agreements/.
     * If you do not agree to all of the applicable terms or do not have the
     * authority to bind the entity as an authorized representative, then do not
     * install or use this SugarCRM file.
     *
     * Copyright (C) SugarCRM Inc. All rights reserved.
     */
({
	// Default Layout (base) 
className:'row-fluid',HIDE_KEY:'hide',_hideLastStateKey:null,initialize:function(options){this._super('initialize',[options]);this.processDef();this.on('sidebar:toggle',this.toggleSidePane,this);this.meta.last_state=this.meta.last_state||{id:'default'};this._hideLastStateKey=app.user.lastState.key(this.HIDE_KEY,this);this._toggleVisibility(this.isSidePaneVisible());},isSidePaneVisible:function(){var hideLastState=app.user.lastState.get(this._hideLastStateKey);return _.isUndefined(hideLastState);},toggleSidePane:function(visible){var isVisible=this.isSidePaneVisible();visible=_.isUndefined(visible)?!isVisible:visible;if(isVisible===visible){return;}
if(visible){app.user.lastState.remove(this._hideLastStateKey);}else{app.user.lastState.set(this._hideLastStateKey,1);}
this._toggleVisibility(visible);},_toggleVisibility:function(visible){this.$('.main-pane').toggleClass('span12',!visible).toggleClass('span8',visible);this.$('.side').toggleClass('side-collapsed',!visible);$(window).trigger('resize');this.trigger('sidebar:state:changed',visible?'open':'close');},processDef:function(){this.$('.main-pane').addClass('span'+this.meta.components[0]['layout'].span);this.$('.side').addClass('span'+this.meta.components[1]['layout'].span);},_placeComponent:function(component){if(component.meta.name){this.$('.'+component.meta.name).append(component.$el);}},getPaneWidth:function(component){if(!this.$el){return 0;}
var paneSelectors=['.main-pane','.side'],pane=_.find(paneSelectors,function(selector){return($.contains(this.$(selector).get(0),component.el));},this);return this.$(pane).width()||0;}}) },
"drawer": {"controller": /*
     * Your installation or use of this SugarCRM file is subject to the applicable
     * terms available at
     * http://support.sugarcrm.com/06_Customer_Center/10_Master_Subscription_Agreements/.
     * If you do not agree to all of the applicable terms or do not have the
     * authority to bind the entity as an authorized representative, then do not
     * install or use this SugarCRM file.
     *
     * Copyright (C) SugarCRM Inc. All rights reserved.
     */
({
	// Drawer Layout (base) 
backdropHtml:'<div class="drawer-backdrop"></div>',plugins:['Tooltip'],onCloseCallback:null,scrollTopPositions:[],pixelsFromFooter:60,initialize:function(options){if(!this.$el.is('#drawers')){app.logger.error('Drawer layout can only be included as an Additional Component.');return;}
app.drawer=this;this.onCloseCallback=[];this.name='drawer';app.routing.before("route",this.reset,this,true);app.view.Layout.prototype.initialize.call(this,options);},open:function(layoutDef,onClose){var layout,parentContext;app.shortcuts.saveSession();if(!app.triggerBefore('app:view:change')){return;}
if(_.isUndefined(onClose)){this.onCloseCallback.push(function(){});}else{this.onCloseCallback.push(onClose);}
if(_.isUndefined(layoutDef.context)){layoutDef.context={};}
if(_.isUndefined(layoutDef.context.forceNew)){layoutDef.context.forceNew=true;}
if(!(layoutDef.context instanceof app.Context)&&layoutDef.context.parent instanceof app.Context){parentContext=layoutDef.context.parent;delete layoutDef.context.parent;}
this._addComponentsFromDef([layoutDef],parentContext);layout=_.last(this._components);this._scrollToTop();this._animateOpenDrawer(_.bind(function(){if(layout.context){app.trigger("app:view:change",layout.options.name,layout.context.attributes);}},this));layout.loadData();layout.render();},close:function(){var self=this,args=Array.prototype.slice.call(arguments,0);if(!Modernizr.csstransitions){this.closeImmediately.apply(this,args);return;}
if(this._components.length>0){if(!app.triggerBefore('app:view:change')){return;}
this._animateCloseDrawer(function(){var layout;var topDrawer=self._components.pop();if(topDrawer&&topDrawer.dispose){topDrawer.dispose();}
layout=_.last(self._components);self._scrollBackToOriginal(layout);if(layout){app.trigger("app:view:change",layout.options.name,layout.context.attributes);}else{app.trigger("app:view:change",app.controller.context.get("layout"),app.controller.context.attributes);}
app.shortcuts.restoreSession();(self.onCloseCallback.pop()).apply(this,args);});}},closeImmediately:function(){if(this._components.length>0){var args=Array.prototype.slice.call(arguments,0),drawers=this._getDrawers(false),drawerHeight=this._determineDrawerHeight();drawers.$top.removeClass('transition active');drawers.$bottom.removeClass('transition inactive').addClass('active').removeAttr('aria-hidden');if(drawers.$next){drawers.$next.removeClass('transition');}
drawers.$bottom.css('top','');if(drawers.$next){drawers.$next.css('top',this._isMainAppContent(drawers.$next)?drawerHeight:drawers.$next.offset().top-drawerHeight);}
this._cleanUpAfterClose(drawers);drawers.$bottom.addClass('transition');if(drawers.$next){drawers.$next.addClass('transition');}
this._components.pop().dispose();this._scrollBackToOriginal(_.last(this._components));(this.onCloseCallback.pop()).apply(window,args);}},load:function(layoutDef){var layout=this._components.pop(),top=layout.$el.css('top'),height=layout.$el.css('height'),drawers;layout.dispose();if(!app.triggerBefore('app:view:change')){return;}
this._addComponentsFromDef([layoutDef]);drawers=this._getDrawers(true);drawers.$next.addClass('drawer transition active').css({top:top,height:height});this._removeTabAndBackdrop(drawers.$top);this._createTabAndBackdrop(drawers.$next,drawers.$top);layout=_.last(this._components);layout.loadData();layout.render();},count:function(){return this._components.length;},isActive:function(el){return((this.count()===0)||($(el).parents('.drawer.active').length>0));},getActiveDrawerLayout:function(){if(this.count()===0){return app.controller.layout;}else{return _.last(this._components);}},reset:function(triggerBefore){triggerBefore=triggerBefore===false?false:true;if(triggerBefore&&!this.triggerBefore("reset",{drawer:this})){return false;}
var $main=app.$contentEl.children().first();_.each(this._components,function(component){component.dispose();},this);this._components=[];this.onCloseCallback=[];if($main.hasClass('drawer')){$main.removeClass('drawer transition inactive').removeAttr('aria-hidden').css('top','');this._removeTabAndBackdrop($main);}
$('body').removeClass('noscroll');app.$contentEl.removeClass('noscroll');},_animateOpenDrawer:function(callback){if(this._components.length===0){return;}
var drawers=this._getDrawers(true),drawerHeight=this._determineDrawerHeight();if(this._isMainAppContent(drawers.$top)){drawers.$top.addClass('drawer');$('body').addClass('noscroll');app.$contentEl.addClass('noscroll');}
this._createTabAndBackdrop(drawers.$next,drawers.$top);drawers.$next.addClass('drawer');drawers.$next.css('height',drawerHeight);drawers.$next.css('top',drawers.$top.offset().top-drawerHeight);_.defer(_.bind(function(){if(drawers.$bottom){drawers.$bottom.addClass('transition').css('top',drawers.$bottom.offset().top+drawerHeight);}
drawers.$top.addClass('transition inactive').removeClass('active').attr('aria-hidden',true).css('top',this._isMainAppContent(drawers.$top)?drawerHeight:drawers.$top.offset().top+drawerHeight);drawers.$next.addClass('transition active').css('top','');if(this._components.length===1){$(window).on('resize.drawer',_.bind(this._resizeDrawer,this));}
if(_.isFunction(callback)){callback();}},this));this.trigger('drawer:resize',drawerHeight);},_animateCloseDrawer:function(callback){if(this._components.length===0){return;}
var drawers=this._getDrawers(false),drawerHeight=this._determineDrawerHeight(),transitionEndEvents='webkitTransitionEnd oTransitionEnd otransitionend transitionend msTransitionEnd';drawers.$bottom.one(transitionEndEvents,_.bind(function(){drawers.$bottom.off(transitionEndEvents);this._cleanUpAfterClose(drawers);callback();},this));drawers.$top.removeClass('active').css('top',drawers.$top.offset().top-drawerHeight);drawers.$bottom.removeClass('inactive').addClass('active').removeAttr('aria-hidden').css('top','');_.delay(function(){drawers.$bottom.trigger('transitionend');},400);if(drawers.$next){drawers.$next.css('top',this._isMainAppContent(drawers.$next)?drawerHeight:drawers.$next.offset().top-drawerHeight);}},_getDrawers:function(open){var $main=app.$contentEl.children().first(),$nextDrawer,$topDrawer,$bottomDrawer,open=_.isUndefined(open)?true:open,drawerCount=this._components.length;switch(drawerCount){case 0:break;case 1:$nextDrawer=open?this._components[drawerCount-1].$el:undefined;$topDrawer=open?$main:this._components[drawerCount-1].$el;$bottomDrawer=open?undefined:$main;break;case 2:$nextDrawer=open?this._components[drawerCount-1].$el:$main;$topDrawer=open?this._components[drawerCount-2].$el:this._components[drawerCount-1].$el;$bottomDrawer=open?$main:this._components[drawerCount-2].$el;break;default:$nextDrawer=open?this._components[drawerCount-1].$el:this._components[drawerCount-3].$el;$topDrawer=open?this._components[drawerCount-2].$el:this._components[drawerCount-1].$el;$bottomDrawer=open?this._components[drawerCount-3].$el:this._components[drawerCount-2].$el;}
return{$next:$nextDrawer,$top:$topDrawer,$bottom:$bottomDrawer};},_isMainAppContent:function($layout){return!$layout.parent().is(this.$el);},_determineDrawerHeight:function(){var windowHeight=$(window).height(),headerHeight=$('#header .navbar').outerHeight(),footerHeight=$('footer').outerHeight();return windowHeight-headerHeight-footerHeight-this.pixelsFromFooter;},_determineCollapsedHeight:function(){return $(window).height()/2;},_createTabAndBackdrop:function($top,$bottom){var $drawerTab;this.expandTpl=app.template.getLayout(this.name+'.expand');this.expandTabHtml=this.expandTpl();$bottom.append(this.expandTabHtml).append(this.backdropHtml);$drawerTab=$bottom.find('.drawer-tab');this.addPluginTooltips($drawerTab);$drawerTab.on('click',_.bind(function(event){if($('i',event.currentTarget).hasClass('icon-chevron-up')){this._collapseDrawer($top,$bottom);}else{this._expandDrawer($top,$bottom);}
return false;},this));app.accessibility.run($drawerTab,'click');},_removeTabAndBackdrop:function($drawer){var $drawerTab=$drawer.find('.drawer-tab').off('click').remove();this.removePluginTooltips($drawerTab);$drawer.find('.drawer-backdrop').remove();},_cleanUpAfterClose:function(drawers){this._removeTabAndBackdrop(drawers.$bottom);if(this._isMainAppContent(drawers.$bottom)){drawers.$bottom.removeClass('drawer transition active');$('body').removeClass('noscroll');app.$contentEl.removeClass('noscroll');}else{this._expandDrawer(drawers.$bottom,drawers.$next);}
if(this._components.length===1){$(window).off('resize.drawer');}},_expandDrawer:function($top,$bottom){var expandHeight=this._determineDrawerHeight();$top.css('height',expandHeight);if($bottom.closest('#drawers').length>0){$bottom.css('top',expandHeight+$top.offset().top);}else{$bottom.css('top',expandHeight);}
$bottom.find('.drawer-tab i').removeClass('icon-chevron-down').addClass('icon-chevron-up');this.trigger('drawer:resize',expandHeight);},_collapseDrawer:function($top,$bottom){var collapseHeight=this._determineCollapsedHeight();$top.css('height',collapseHeight);if($bottom.closest('#drawers').length>0){$bottom.css('top',collapseHeight+$top.offset().top);}else{$bottom.css('top',collapseHeight);}
$bottom.find('.drawer-tab i').removeClass('icon-chevron-up').addClass('icon-chevron-down');this.trigger('drawer:resize',collapseHeight);},_scrollToTop:function(){var drawers=this._getDrawers(true),$mainpane=drawers.$top.find('.main-pane'),$sidepane=drawers.$top.find('.sidebar-content'),$content=app.$contentEl;this.scrollTopPositions.push({main:$mainpane.scrollTop(),side:$sidepane.scrollTop(),content:$content.scrollTop()});$mainpane.scrollTop(0);$sidepane.scrollTop(0);$content.scrollTop(0);},_scrollBackToOriginal:function(drawerLayout){var scrollPositions=this.scrollTopPositions.pop();if(!scrollPositions)return;if(drawerLayout){drawerLayout.$('.main-pane').scrollTop(scrollPositions.main);drawerLayout.$('.sidebar-content').scrollTop(scrollPositions.side);}else{app.$contentEl.find('.main-pane').scrollTop(scrollPositions.main);app.$contentEl.find('.sidebar-content').scrollTop(scrollPositions.side);app.$contentEl.scrollTop(scrollPositions.content)}},getHeight:function(){if(_.isEmpty(this._components)){return 0;}
var $top=this._getDrawers(false).$top;return $top.height();},_dispose:function(){app.routing.offBefore("route",this.reset,this);this.reset();$(window).off('resize.drawer');this._super('_dispose');},_resizeDrawer:_.throttle(function(){var drawers=this._getDrawers(false);if(drawers.$top){this._expandDrawer(drawers.$top,drawers.$bottom);}},300)}) },
"dupecheck": {"controller": /*
     * Your installation or use of this SugarCRM file is subject to the applicable
     * terms available at
     * http://support.sugarcrm.com/06_Customer_Center/10_Master_Subscription_Agreements/.
     * If you do not agree to all of the applicable terms or do not have the
     * authority to bind the entity as an authorized representative, then do not
     * install or use this SugarCRM file.
     *
     * Copyright (C) SugarCRM Inc. All rights reserved.
     */
({
	// Dupecheck Layout (base) 
initialize:function(options){if(options.context.has('dupelisttype')){options.meta=this.switchListView(options.meta,options.context.get('dupelisttype'));}
app.view.Layout.prototype.initialize.call(this,options);},switchListView:function(meta,dupelisttype){var listView=_.find(meta.components,function(component){return(component.name==='dupecheck-list');});listView.view=dupelisttype;return meta;}}) },
"dupecheck-filter": {"controller": /*
     * Your installation or use of this SugarCRM file is subject to the applicable
     * terms available at
     * http://support.sugarcrm.com/06_Customer_Center/10_Master_Subscription_Agreements/.
     * If you do not agree to all of the applicable terms or do not have the
     * authority to bind the entity as an authorized representative, then do not
     * install or use this SugarCRM file.
     *
     * Copyright (C) SugarCRM Inc. All rights reserved.
     */
({
	// Dupecheck-filter Layout (base) 
extendsFrom:'FilterLayout',initialFilter:'all_records',initialize:function(options){this._super('initialize',[options]);this.name='filter';this.setLastFilter(this.module,this.layoutType,this.initialFilter);},getRelevantContextList:function(){return[this.context];},getLastFilter:function(){var lastFilter=this._super('getLastFilter',arguments);return(_.isUndefined(lastFilter))?this.initialFilter:lastFilter;}}) },
"filter": {"controller": /*
     * Your installation or use of this SugarCRM file is subject to the applicable
     * terms available at
     * http://support.sugarcrm.com/06_Customer_Center/10_Master_Subscription_Agreements/.
     * If you do not agree to all of the applicable terms or do not have the
     * authority to bind the entity as an authorized representative, then do not
     * install or use this SugarCRM file.
     *
     * Copyright (C) SugarCRM Inc. All rights reserved.
     */
({
	// Filter Layout (base) 
className:'filter-view search',plugins:['QuickSearchFilter'],events:{'click .add-on.icon-remove':function(){this.trigger('filter:clear:quicksearch');}},filters:null,initialize:function(opts){var filterLayout=app.view._getController({type:'layout',name:'filter'});filterLayout.loadedModules=filterLayout.loadedModules||{};app.view.Layout.prototype.initialize.call(this,opts);this.layoutType=app.utils.deepCopy(this.options.meta.layoutType)||this.context.get('layout')||this.context.get('layoutName')||app.controller.context.get('layout');this.aclToCheck=(this.layoutType==='record')?'view':'list';if(this.layoutType==='records'){this.context.set('skipFetch',true);}else{if(this.context.parent){this.context.parent.set('skipFetch',true);}
this.context.on('context:child:add',function(childCtx){if(childCtx.get('link')){childCtx.set('skipFetch',true);}},this);}
this.on('filter:apply',this.applyFilter,this);this.on('filter:create:close',function(){if(!this.createPanelIsOpen()){return;}
this.layout.trigger('filter:create:close');if(this.getLastFilter(this.layout.currentModule,this.layoutType)==='create'){this.clearLastFilter(this.layout.currentModule,this.layoutType);this.layout.trigger("filter:reinitialize");}
this.context.editingFilter=null;},this);this.on('filter:create:open',function(filterModel){this.context.editingFilter=filterModel;this.layout.trigger('filter:create:open',filterModel);},this);this.on('subpanel:change',function(linkName){this.layout.trigger('subpanel:change',linkName);},this);this.on('filter:get',this.initializeFilterState,this);this.on('filter:change:filter',this.handleFilterChange,this);this.layout.on('filter:apply',function(query,def){this.trigger('filter:apply',query,def);},this);this.layout.on('filterpanel:change',this.handleFilterPanelChange,this);this.layout.on('filterpanel:toggle:button',this.toggleFilterButton,this);this.context.on('filter:add',this.addFilter,this);this.layout.on('filter:remove',this.removeFilter,this);this.layout.on('filter:reinitialize',function(){this.initializeFilterState(this.layout.currentModule,this.layout.currentLink);},this);this.listenTo(app.events,'dashlet:filter:save',this.refreshDropdown);},refreshDropdown:function(module){if(module===this.layout.currentModule){var filterLayout=app.view._getController({type:'layout',name:'filter'});filterLayout.loadedModules[module]=false;this.layout.trigger('filter:reinitialize');}},removeFilter:function(model){this.filters.collection.remove(model);this.context.set('currentFilterId',null);this.clearLastFilter(this.layout.currentModule,this.layoutType);this.layout.trigger('filter:reinitialize');},setLastFilter:function(filterModule,layoutName,filterId){var filterOptions=this.context.get('filterOptions')||{};this.context.set('currentFilterId',filterId);if(filterOptions.stickiness!==false){var key=app.user.lastState.key('last-'+filterModule+'-'+layoutName,this);app.user.lastState.set(key,filterId);}},getLastFilter:function(filterModule,layoutName){var filter=this.context.get('currentFilterId');if(!_.isEmpty(filter)){return filter;}
var filterOptions=this.context.get('filterOptions')||{};if(filterOptions.stickiness!==false){var key=app.user.lastState.key('last-'+filterModule+'-'+layoutName,this);filter=app.user.lastState.get(key);}
if(_.isEmpty(filter)&&filterOptions.initial_filter){filter=filterOptions.initial_filter;}
this.context.set('currentFilterId',filter);return filter;},clearLastFilter:function(filterModule,layoutName){var filterOptions=this.context.get('filterOptions')||{};if(filterOptions.stickiness!==false){var key=app.user.lastState.key('last-'+filterModule+'-'+layoutName,this);app.user.lastState.remove(key);}
this.clearFilterEditState();},retrieveFilterEditState:function(){var filterOptions=this.context.get('filterOptions')||{};if(filterOptions.stickiness!==false){var key=app.user.lastState.key('edit-'+this.layout.currentModule+'-'+this.layoutType,this);return app.user.lastState.get(key);}},saveFilterEditState:function(filter){var filterOptions=this.context.get('filterOptions')||{};if(filterOptions.stickiness!==false){var key=app.user.lastState.key('edit-'+this.layout.currentModule+'-'+this.layoutType,this);app.user.lastState.set(key,filter);}},clearFilterEditState:function(){var filterOptions=this.context.get('filterOptions')||{};if(filterOptions.stickiness!==false){var key=app.user.lastState.key('edit-'+this.layout.currentModule+'-'+this.layoutType,this);app.user.lastState.remove(key);}},removeDeprecatedCache:function(module){app.user.lastState.remove(app.user.lastState.key('saved-'+module,this));var layoutModule=this.module;this.module=module;app.user.lastState.remove(app.user.lastState.key('saved-filters',this));this.module=layoutModule;},addFilter:function(model){var id=model.get('id');this.filters.collection.add(model,{merge:true});this.filters.collection.trigger('cache:update',model);this.setLastFilter(this.layout.currentModule,this.layoutType,id);this.context.set('currentFilterId',id);this.clearFilterEditState();this.layout.trigger('filter:reinitialize');},toggleFilterButton:function(toggleDataView,on){var toggleButtons=this.layout.$('.toggle-actions a.btn');_.each(toggleButtons,function(btn){if($(btn).data('view')===toggleDataView){if(on){$(btn).removeAttr('disabled').removeClass('disabled');}else{$(btn).attr('disabled','disabled').addClass('disabled');$(btn).attr('title',app.lang.get('LBL_NO_DATA_AVAILABLE'));}}});},handleFilterPanelChange:function(name,silent,setLastViewed){this.showingActivities=name==='activitystream';var module=this.showingActivities?"Activities":this.module;var link;this.$el.css('visibility',app.acl.hasAccess(this.aclToCheck,module)?'visible':'hidden');if(this.layoutType==='record'&&!this.showingActivities){module=link=app.user.lastState.get(app.user.lastState.key("subpanels-last",this))||'all_modules';if(link!=='all_modules'){module=app.data.getRelatedModule(this.module,link);}}else{link=null;}
if(!silent){this.trigger("filter:render:module");this.trigger("filter:change:module",module,link);}
if(setLastViewed){this.layout.trigger('filterpanel:lastviewed:set',name);}},handleFilterChange:function(id){this.setLastFilter(this.layout.currentModule,this.layoutType,id);var filter,editState=this.retrieveFilterEditState();filter=this.filters.collection.get(id)||app.data.createBean('Filters',{module_name:this.moduleName});if(editState&&(editState.id===id||(id==='create'&&!editState.id))){filter.set(editState);}else{editState=false;}
this.context.set('currentFilterId',filter.get('id'));var editable=filter.get('editable')!==false;var isIncompleteFilter=filter.get('filter_template')&&JSON.stringify(filter.get('filter_definition'))!==JSON.stringify(filter.get('filter_template'));var isTemplateFilter=filter.get('is_template');var modelHasChanged=!_.isEmpty(filter.changedAttributes(filter.getSyncedAttributes()));if(editable&&(isIncompleteFilter||isTemplateFilter||editState||id==='create'||modelHasChanged)){this.layout.trigger('filter:set:name','');this.trigger('filter:create:open',filter);this.layout.trigger('filter:toggle:savestate',true);}else{this.layout.trigger('filter:create:close');}
var ctxList=this.getRelevantContextList();var clear=false;_.each(ctxList,function(ctx){var filterDef=filter.get('filter_definition');var orig=ctx.get('collection').origFilterDef;ctx.get('collection').origFilterDef=filterDef;if(_.isUndefined(orig)||!_.isEqual(orig,filterDef)){clear=true;}});if(clear){_.each(ctxList,function(ctx){ctx.get('collection').resetPagination();ctx.get('collection').reset(null,{silent:true});});this.trigger('filter:clear:quicksearch');}},applyFilter:function(query,dynamicFilterDef){var filterOptions=this.context.get('filterOptions')||{};if(filterOptions.auto_apply===false){return;}
this._toggleClearQuickSearchIcon(!_.isEmpty(query));var massCollection=this.context.get('mass_collection');if(massCollection&&massCollection.models&&massCollection.models.length>0){massCollection.reset([],{silent:true});}
var self=this,ctxList=this.getRelevantContextList();_.each(ctxList,function(ctx){var ctxCollection=ctx.get('collection'),origFilterDef=dynamicFilterDef||ctxCollection.origFilterDef||[],filterDef=self.buildFilterDef(origFilterDef,query,ctx),options={showAlerts:true,success:function(collection,response,options){app.events.trigger('preview:close');}};ctxCollection.filterDef=filterDef;ctxCollection.origFilterDef=origFilterDef;ctxCollection.resetPagination();options=_.extend(options,ctx.get('collectionOptions'));ctx.resetLoadFlag(false);if(!_.isEmpty(ctx._recordListFields)){ctx.set('fields',ctx._recordListFields);}
ctx.set('skipFetch',false);ctx.loadData(options);});},getRelevantContextList:function(){var contextList=[];if(this.showingActivities){_.each(this.layout._components,function(component){var ctx=component.context;if(component.name=='activitystream'&&!ctx.get('modelId')&&ctx.get('collection')){contextList.push(ctx);}});}else{if(this.layoutType==='records'){var ctx=this.context;if(!ctx.get('modelId')&&ctx.get('collection')){contextList.push(ctx);}}else{_.each(this.context.children,function(ctx){if(ctx.get('isSubpanel')&&!ctx.get('hidden')&&!ctx.get('modelId')&&ctx.get('collection')){contextList.push(ctx);}});}}
return _.uniq(contextList);},buildFilterDef:function(oSelectedFilter,searchTerm,context){var selectedFilter=app.utils.deepCopy(oSelectedFilter),isSelectedFilter=_.size(selectedFilter)>0,module=context.get('module'),searchFilter=this.getFilterDef(module,searchTerm),isSearchFilter=_.size(searchFilter)>0;selectedFilter=_.isArray(selectedFilter)?selectedFilter:[selectedFilter];var specialField=/^\$/,meta=app.metadata.getModule(module);selectedFilter=_.filter(selectedFilter,function(def){var fieldName=_.keys(def).pop();return specialField.test(fieldName)||meta.fields[fieldName];},this);if(isSelectedFilter&&isSearchFilter){selectedFilter.push(searchFilter[0]);return[{'$and':selectedFilter}];}else if(isSelectedFilter){return selectedFilter;}else if(isSearchFilter){return searchFilter;}
return[];},initializeFilterState:function(moduleName,linkName,filterId){if(this.showingActivities){moduleName='Activities';linkName=null;}else{moduleName=moduleName||this.module;if(this.layoutType==='record'){linkName=app.user.lastState.get(app.user.lastState.key('subpanels-last',this))||linkName||'all_modules';if(linkName!=='all_modules'&&this.layout.module===moduleName){moduleName=app.data.getRelatedModule(moduleName,linkName)||moduleName;}}}
filterId=filterId||this.getLastFilter(moduleName,this.layoutType);this.layout.trigger('filterpanel:change:module',moduleName,linkName);this.trigger('filter:change:module',moduleName,linkName,true);this.getFilters(moduleName,filterId);},getFilters:function(moduleName,defaultId){if(moduleName==='all_modules'){this.selectFilter('all_records');return;}
var filterOptions=this.context.get('filterOptions')||{};if(this.filters){this.filters.dispose();}
this.removeDeprecatedCache(moduleName);this.filters=app.data.createBeanCollection('Filters');this.filters.setModuleName(moduleName);this.filters.setFilterOptions(filterOptions);this.filters.load({success:_.bind(function(){if(this.disposed){return;}
defaultId=defaultId||this.filters.collection.defaultFilterFromMeta;this.selectFilter(defaultId);},this)});},selectFilter:function(filterId){var possibleFilters,selectedFilterId=filterId;if(selectedFilterId!=='create'){possibleFilters=[selectedFilterId,this.filters.collection.defaultFilterFromMeta,'all_records'];possibleFilters=_.filter(possibleFilters,this.filters.collection.get,this.filters.collection);selectedFilterId=_.first(possibleFilters);}
this.trigger('filter:render:filter');this.trigger('filter:select:filter',selectedFilterId);return selectedFilterId;},createPanelIsOpen:function(){return!this.layout.$(".filter-options").is(":hidden");},canCreateFilter:function(){var contexts=this.getRelevantContextList(),creatable=app.acl.hasAccess("create","Filters"),meta;if(creatable&&contexts.length===1){meta=app.metadata.getModule(contexts[0].get("module"));if(meta&&_.isObject(meta.filters)){_.each(meta.filters,function(value){if(_.isObject(value)){creatable=creatable&&value.meta.create!==false;}});}}
return creatable;},_toggleClearQuickSearchIcon:function(addIt){if(addIt&&!this.$('.add-on.icon-remove')[0]){this.$el.append('<i class="add-on icon-remove"></i>');}else if(!addIt){this.$('.add-on.icon-remove').remove();}},_render:function(){if(app.acl.hasAccess(this.aclToCheck,this.module)){app.view.Layout.prototype._render.call(this);}},unbind:function(){if(this.filters){this.filters.dispose();}
this.filters=null;app.view.Layout.prototype.unbind.call(this);}}) },
"filterpanel": {"controller": /*
     * Your installation or use of this SugarCRM file is subject to the applicable
     * terms available at
     * http://support.sugarcrm.com/06_Customer_Center/10_Master_Subscription_Agreements/.
     * If you do not agree to all of the applicable terms or do not have the
     * authority to bind the entity as an authorized representative, then do not
     * install or use this SugarCRM file.
     *
     * Copyright (C) SugarCRM Inc. All rights reserved.
     */
({
	// Filterpanel Layout (base) 
extendsFrom:'TogglepanelLayout',initialize:function(opts){var defaultOptions={'auto_apply':true,'stickiness':true,'show_actions':true};var moduleMeta=app.metadata.getModule(opts.module)||{};this.disableActivityStreamToggle(opts.module,moduleMeta,opts.meta||{});this.on("filterpanel:change:module",function(module,link){this.currentModule=module;this.currentLink=link;},this);this.on('filter:create:open',_.debounce(function(){this.$('.filter-options').removeClass('hide');var activeShortcutSession=app.shortcuts.getCurrentSession();if(_.isNull(activeShortcutSession)||(activeShortcutSession&&activeShortcutSession.layout!==this)){app.shortcuts.saveSession();app.shortcuts.createSession(['Filter:Add','Filter:Remove','Filter:Close','Filter:Save','Filter:Delete','Filter:Reset'],this);}},100,true),this);this.on('filter:create:close',function(){this.$('.filter-options').addClass('hide');var activeShortcutSession=app.shortcuts.getCurrentSession();if(activeShortcutSession&&(activeShortcutSession.layout===this)){app.shortcuts.restoreSession();}},this);this.on('filterpanel:lastviewed:set',function(viewed){this.toggleViewLastStateKey=this.toggleViewLastStateKey||app.user.lastState.key('toggle-view',this);var lastViewed=app.user.lastState.get(this.toggleViewLastStateKey);if(lastViewed!==viewed){app.user.lastState.set(this.toggleViewLastStateKey,viewed);}},this);this._super("initialize",[opts]);this.context.editingFilter=null;var filterOptions=_.extend(defaultOptions,this.meta.filter_options,this.context.get('filterOptions'));this.context.set('filterOptions',filterOptions);var lastViewed=app.user.lastState.get(this.toggleViewLastStateKey),defaultModule=this.module||this.model.get('module')||this.context.get('module');this.trigger('filterpanel:change:module',(moduleMeta.activityStreamEnabled&&lastViewed==='activitystream')?'Activities':defaultModule);},applyLastFilter:function(collection,condition){var triggerFilter=true;if(_.size(collection.origFilterDef)){if(condition==='favorite'){triggerFilter=!_.isUndefined(_.find(collection.origFilterDef,function(value,key){return key==='$favorite'||(value&&!_.isUndefined(value.$favorite));}));}
if(triggerFilter){var query=this.$('.search input.search-name').val();this.trigger('filter:apply',query,collection.origFilterDef);}}},disableActivityStreamToggle:function(moduleName,moduleMeta,viewMeta){if(moduleName!=='Activities'&&!moduleMeta.activityStreamEnabled){_.each(viewMeta.availableToggles,function(toggle){if(toggle.name==='activitystream'){toggle.disabled=true;toggle.label='LBL_ACTIVITY_STREAM_DISABLED';}});}},_render:function(){this._super('_render');this.trigger('filter:reinitialize');}}) },
"find-duplicates": {"controller": /*
     * Your installation or use of this SugarCRM file is subject to the applicable
     * terms available at
     * http://support.sugarcrm.com/06_Customer_Center/10_Master_Subscription_Agreements/.
     * If you do not agree to all of the applicable terms or do not have the
     * authority to bind the entity as an authorized representative, then do not
     * install or use this SugarCRM file.
     *
     * Copyright (C) SugarCRM Inc. All rights reserved.
     */
({
	// Find-duplicates Layout (base) 
plugins:['ShortcutSession'],shortcuts:['Headerpane:Cancel','Sidebar:Toggle']}) },
"fluid": {"controller": /*
     * Your installation or use of this SugarCRM file is subject to the applicable
     * terms available at
     * http://support.sugarcrm.com/06_Customer_Center/10_Master_Subscription_Agreements/.
     * If you do not agree to all of the applicable terms or do not have the
     * authority to bind the entity as an authorized representative, then do not
     * install or use this SugarCRM file.
     *
     * Copyright (C) SugarCRM Inc. All rights reserved.
     */
({
	// Fluid Layout (base) 
_placeComponent:function(comp,def){var compdef=def.layout||def.view,size=compdef.span||4;if(!this.$el.children()[0]){this.$el.addClass("container-fluid").append('<div class="row-fluid"></div>');}
$().add("<div></div>").addClass("span"+size).append(comp.el).appendTo(this.$el.find("div.row-fluid")[0]);}}) },
"history-default": {"controller": /*
     * Your installation or use of this SugarCRM file is subject to the applicable
     * terms available at
     * http://support.sugarcrm.com/06_Customer_Center/10_Master_Subscription_Agreements/.
     * If you do not agree to all of the applicable terms or do not have the
     * authority to bind the entity as an authorized representative, then do not
     * install or use this SugarCRM file.
     *
     * Copyright (C) SugarCRM Inc. All rights reserved.
     */
({
	// History-default Layout (base) 
extendsFrom:'DefaultLayout',isSidePaneVisible:function(){if(this._isSidePaneVisibleCalledOnce!==true){this._isSidePaneVisibleCalledOnce=true;app.user.lastState.set(this._hideLastStateKey,1);return false;}
return this._super('isSidePaneVisible');},_dispose:function(){app.user.lastState.remove(this._hideLastStateKey);this._super('_dispose');}}) },
"history-summary-preview": {"controller": /*
     * Your installation or use of this SugarCRM file is subject to the applicable
     * terms available at
     * http://support.sugarcrm.com/06_Customer_Center/10_Master_Subscription_Agreements/.
     * If you do not agree to all of the applicable terms or do not have the
     * authority to bind the entity as an authorized representative, then do not
     * install or use this SugarCRM file.
     *
     * Copyright (C) SugarCRM Inc. All rights reserved.
     */
({
	// History-summary-preview Layout (base) 
extendsFrom:'PreviewLayout'}) },
"list": {"controller": /*
     * Your installation or use of this SugarCRM file is subject to the applicable
     * terms available at
     * http://support.sugarcrm.com/06_Customer_Center/10_Master_Subscription_Agreements/.
     * If you do not agree to all of the applicable terms or do not have the
     * authority to bind the entity as an authorized representative, then do not
     * install or use this SugarCRM file.
     *
     * Copyright (C) SugarCRM Inc. All rights reserved.
     */
({
	// List Layout (base) 
_placeComponent:function(comp,def){var size=def.size||12;function createLayoutContainers(self){if(!self.$el.children()[0]){comp.$el.addClass('list');}}
createLayoutContainers(this);this.$el.append(comp.el);}}) },
"merge-duplicates": {"controller": /*
     * Your installation or use of this SugarCRM file is subject to the applicable
     * terms available at
     * http://support.sugarcrm.com/06_Customer_Center/10_Master_Subscription_Agreements/.
     * If you do not agree to all of the applicable terms or do not have the
     * authority to bind the entity as an authorized representative, then do not
     * install or use this SugarCRM file.
     *
     * Copyright (C) SugarCRM Inc. All rights reserved.
     */
({
	// Merge-duplicates Layout (base) 
plugins:['ShortcutSession'],shortcuts:['Headerpane:Cancel','Headerpane:Save','Sidebar:Toggle']}) },
"modal": {"controller": /*
     * Your installation or use of this SugarCRM file is subject to the applicable
     * terms available at
     * http://support.sugarcrm.com/06_Customer_Center/10_Master_Subscription_Agreements/.
     * If you do not agree to all of the applicable terms or do not have the
     * authority to bind the entity as an authorized representative, then do not
     * install or use this SugarCRM file.
     *
     * Copyright (C) SugarCRM Inc. All rights reserved.
     */
({
	// Modal Layout (base) 
baseComponents:[{'view':'modal-header'}],initialize:function(options,skipModalJsCheck){var self=this,showEvent=options.meta.showEvent;if(!skipModalJsCheck){if(!_.isFunction(this.$el.modal)){app.logger.error("Unable to load modal.js: Needs bootstrap modal plugin.");}}
this.metaComponents=options.meta.components;options.meta.components=this.baseComponents;if(options.meta.before){_.each(options.meta.before,function(callback,event){self.before(event,callback);});}
app.view.Layout.prototype.initialize.call(this,options);options.meta.components=this.metaComponents;if(showEvent){if(_.isArray(showEvent)){_.each(showEvent,function(evt,index){self._bindShowEvent(evt);});}else{self._bindShowEvent(showEvent);}}},_bindShowEvent:function(event,delegate){var self=this;if(_.isObject(event))
{delegate=event.delegate;event=event.event;}
if(delegate){self.layout.events=self.layout.events||{};self.layout.events[event]=function(params,callback){self.show(params,callback)};self.layout.delegateEvents();}else{self.layout.on(event,function(params,callback){self.show(params,callback);},self);}},getBodyComponents:function(){return _.rest(this._components,this._initComponentSize);},_placeComponent:function(comp,def){if(this.$('.modal:first').length==0){this.$el.append($('<div>',{'class':'modal hide'}).append(this.$body));}
if(def.bodyComponent){if(_.isUndefined(this.$body)){this.$body=$('<div>',{'class':'modal-body'});this.$('.modal:first').append(this.$body);}
this.$body.append(comp.el);}else{this.$('.modal:first').append(comp.el);}},_buildComponentsBeforeShow:function(params,callback){var self=this,params=params||{},buttons=params.buttons||[],message=params.message||'',components=(params.components||this.metaComponents||[]),title=(params.title||this.meta.title)+'';if(message&&components.length==0){this.confirmMessage=message;components.push({view:'modal-confirm'});}
if(components.length==0){app.logger.error("Unable to display modal dialog: no components or message");return false;}
var header_view=self.getComponent('modal-header');if(header_view){header_view.setTitle(title);header_view.setButton(buttons);}
if(self._initComponentSize){for(var i=0;i<self._components.length;i++){self._components[self._components.length-1].$el.remove();self.removeComponent(self._components.length-1);}}else{self._initComponentSize=self._components.length;}
this._addComponentsFromDef(components);self.context.off("modal:callback");self.context.on("modal:callback",function(model){callback(model);self.hide();},self);self.context.off("modal:close");self.context.on("modal:close",self.hide,self);},show:function(params,callback){if(!this.triggerBefore("show")||this.disposed)return false;var self=this;if(params.before){_.each(params.before,function(callback,event){self.offBefore(event);self.before(event,callback);});}
if(this._buildComponentsBeforeShow(params,callback)===false)
return false;this.loadData();this.render();var width=params?params.width:null,options=params?params.options||{}:{},modal_container=this.$(".modal:first");modal_container.attr("style","");if(_.isNumber(width)){modal_container.width(width);modal_container.css('marginLeft',-(width/2)+'px');}
if(!_.isFunction(modal_container.modal)){app.logger.error("Unable to load modal.js: Needs bootstrap modal plugin.");return false;}
modal_container.modal(_.extend({keyboard:false,backdrop:'static'},options.modal));modal_container.modal('show');this.trigger("show");return true;},hide:function(event){if(!this.triggerBefore("hide"))return false;var modal_container=this.$(".modal:first");modal_container.scrollTop(0);if(!_.isFunction(modal_container.modal)){app.logger.error("Unable to load modal.js: Needs bootstrap modal plugin.");return false;}
modal_container.modal('hide');this.trigger("hide");return true;}}) },
"module-list": {"controller": /*
     * Your installation or use of this SugarCRM file is subject to the applicable
     * terms available at
     * http://support.sugarcrm.com/06_Customer_Center/10_Master_Subscription_Agreements/.
     * If you do not agree to all of the applicable terms or do not have the
     * authority to bind the entity as an authorized representative, then do not
     * install or use this SugarCRM file.
     *
     * Copyright (C) SugarCRM Inc. All rights reserved.
     */
({
	// Module-list Layout (base) 
className:'module-list',plugins:['Dropdown'],_catalog:{},_$moreModulesDD:undefined,initialize:function(options){app.events.on('app:sync:complete',this._resetMenu,this);app.events.on('app:view:change',this.handleViewChange,this);this._super('initialize',[options]);if(this.layout){this.layout.on('view:resize',this.resize,this);}},handleViewChange:function(){this._setActiveModule(app.controller.context.get('module'));this.layout.trigger('header:update:route');},_placeComponent:function(component){if(component.name!=='module-menu'){this.$el.append(component.el);return;}
var tpl=app.template.getLayout(this.name+'.list',component.module)||app.template.getLayout(this.name+'.list'),$content=$(tpl({module:component.module})).append(component.el);this._catalog[component.module]=this._catalog[component.module]||{};if(component.meta&&component.meta.short){$content.addClass('hidden');this._catalog[component.module].short=$content;this._$moreModulesDD.find('[data-container="overflow"]').append($content);}else{this._catalog[component.module].long=$content;this.$('[data-action="more-modules"]').before($content);}},_resetMenu:function(){this._components=[];this._catalog={};this.$el.html(this.template(this,this.options));this._$moreModulesDD=this.$('[data-action="more-modules"]');this._addDefaultMenus();this._setActiveModule(app.controller.context.get('module'));this.render();},_addDefaultMenus:function(){var moduleList=app.metadata.getModuleNames({filter:'display_tab',access:'read'});_.each(moduleList,function(module){this._addMenu(module,true);},this);},_addMenu:function(module,sticky){var menu={};var def={view:{name:'module-menu',sticky:sticky,short:false}};menu.long=this.createComponentFromDef(def,null,module);this.addComponent(menu.long,def);if(!sticky){return menu;}
def={view:{name:'module-menu',short:true}};menu.short=this.createComponentFromDef(def,null,module);this.addComponent(menu.short,def);return menu;},resize:function(width){if(width<=0||_.isEmpty(this._components)){return;}
var $moduleList=this.$('[data-container=module-list]'),$dropdown=this._$moreModulesDD.find('[data-container=overflow]');if($moduleList.outerWidth(true)>=width){this.removeModulesFromList($moduleList,width);}else{this.addModulesToList($moduleList,width);}
this._$moreModulesDD.toggleClass('hidden',$dropdown.children('li').not('.hidden').length===0);},addModulesToList:function($modules,width){var $dropdown=this._$moreModulesDD.find('[data-container=overflow]'),$toHide=$dropdown.children('li').not('.hidden').first(),currentWidth=$modules.outerWidth(true);while(currentWidth<width&&$toHide.length>0){this.toggleModule($toHide.data('module'),true);$toHide=$dropdown.children('li').not('.hidden').first();currentWidth=$modules.outerWidth(true);}
if(currentWidth>=width){this.removeModulesFromList($modules,width);}},removeModulesFromList:function($modules,width){var $toHide=this._$moreModulesDD.prev();while($modules.outerWidth(true)>=width&&$toHide.length>0){if(!this.isRemovableModule($toHide.data('module'))){$toHide=$toHide.prev();continue;}
this.toggleModule($toHide.data('module'),false);$toHide=$toHide.prev();}},toggleModule:function(module,state){if(!this._catalog[module].short){state=!_.isUndefined(state)?!state:undefined;this._catalog[module].long.toggleClass('hidden',state);return this;}
var newState=this._catalog[module].short.toggleClass('hidden',state).hasClass('hidden');this._catalog[module].long.toggleClass('hidden',!newState);return this;},_setActiveModule:function(module){if(_.isEmpty(this._components)){return this;}
var tabMap=app.metadata.getModuleTabMap(),mappedModule=_.isUndefined(tabMap[module])?module:tabMap[module],$activeModule=this.$('[data-container=module-list]').children('.active').removeClass('active'),activeModule=$activeModule.data('module');if(this._catalog[activeModule]&&!this._catalog[activeModule].short){this.toggleModule(activeModule,false);}
if(!mappedModule){return this;}
if(!this._catalog[mappedModule]){this._addMenu(mappedModule,false).long.render();}
this._catalog[mappedModule].long.addClass('active');this.toggleModule(mappedModule,true);return this;},isRemovableModule:function(module){return!(module==='Home'||this.isActiveModule(module));},isActiveModule:function(module){return this._catalog[module].long.hasClass('active');}}) },
"panel": {"controller": /*
     * Your installation or use of this SugarCRM file is subject to the applicable
     * terms available at
     * http://support.sugarcrm.com/06_Customer_Center/10_Master_Subscription_Agreements/.
     * If you do not agree to all of the applicable terms or do not have the
     * authority to bind the entity as an authorized representative, then do not
     * install or use this SugarCRM file.
     *
     * Copyright (C) SugarCRM Inc. All rights reserved.
     */
({
	// Panel Layout (base) 
className:'filtered tabbable tabs-left',attributes:function(){return{'data-subpanel-link':this.options.context.get('link')};},HIDE_SHOW_KEY:'hide-show',HIDE_SHOW:{HIDE:'hide',SHOW:'show'},initialize:function(opts){app.view.Layout.prototype.initialize.call(this,opts);this.hideShowLastStateKey=app.user.lastState.key(this.HIDE_SHOW_KEY,this);this.on("panel:toggle",this.togglePanel,this);this.listenTo(this.collection,"reset",function(){var hideShowLastState=app.user.lastState.get(this.hideShowLastStateKey);if(_.isUndefined(hideShowLastState)){this.togglePanel(this.collection.length>0,false);}else{this.togglePanel(hideShowLastState===this.HIDE_SHOW.SHOW,false);}});this.listenTo(this.collection,"reset add remove",this._checkIfSubpanelEmpty,this);},_checkIfSubpanelEmpty:function(){this.$(".subpanel").toggleClass("empty",this.collection.length===0);},_placeComponent:function(component){this.$(".subpanel").append(component.el);this._hideComponent(component,false);},togglePanel:function(show,saveState){this.$(".subpanel").toggleClass("closed",!show);if(arguments.length===1||saveState){app.user.lastState.set(this.hideShowLastStateKey,show?this.HIDE_SHOW.SHOW:this.HIDE_SHOW.HIDE);}
_.each(this._components,function(component){this._hideComponent(component,show);},this);},_hideComponent:function(component,show){if(!component.$el.hasClass('subpanel-header')){if(show){component.show();}else{component.hide();}}}}) },
"preview": {"controller": /*
     * Your installation or use of this SugarCRM file is subject to the applicable
     * terms available at
     * http://support.sugarcrm.com/06_Customer_Center/10_Master_Subscription_Agreements/.
     * If you do not agree to all of the applicable terms or do not have the
     * authority to bind the entity as an authorized representative, then do not
     * install or use this SugarCRM file.
     *
     * Copyright (C) SugarCRM Inc. All rights reserved.
     */
({
	// Preview Layout (base) 
events:{"click .closeSubdetail":"hidePreviewPanel"},initialize:function(opts){app.view.Layout.prototype.initialize.call(this,opts);app.events.on("preview:open",this.showPreviewPanel,this);app.events.on("preview:close",this.hidePreviewPanel,this);app.events.on("preview:pagination:hide",this.hidePagination,this);},showPreviewPanel:function(event){if(_.isUndefined(app.drawer)||app.drawer.isActive(this.$el)){var layout=this.$el.parents(".sidebar-content");layout.find(".side-pane").removeClass("active");layout.find(".dashboard-pane").hide();layout.find(".preview-pane").addClass("active");var defaultLayout=this.closestComponent('sidebar');if(defaultLayout){defaultLayout.trigger('sidebar:toggle',true);}}},hidePreviewPanel:function(event){if(_.isUndefined(app.drawer)||app.drawer.isActive(this.$el)){var layout=this.$el.parents(".sidebar-content");layout.find(".side-pane").addClass("active");layout.find(".dashboard-pane").show();layout.find(".preview-pane").removeClass("active");}},hidePagination:function(){if(_.isUndefined(app.drawer)||app.drawer.isActive(this.$el)){this.hideNextPrevious=true;this.trigger('preview:pagination:update');}}}) },
"preview-activitystream": {"controller": /*
     * Your installation or use of this SugarCRM file is subject to the applicable
     * terms available at
     * http://support.sugarcrm.com/06_Customer_Center/10_Master_Subscription_Agreements/.
     * If you do not agree to all of the applicable terms or do not have the
     * authority to bind the entity as an authorized representative, then do not
     * install or use this SugarCRM file.
     *
     * Copyright (C) SugarCRM Inc. All rights reserved.
     */
({
	// Preview-activitystream Layout (base) 
extendsFrom:'ActivitystreamLayout',_previewOpened:false,initialize:function(options){this._super("initialize",[options]);app.events.on("preview:render",this.fetchActivities,this);app.events.on('preview:open',function(){this._previewOpened=true;},this);app.events.on('preview:close',function(){this._previewOpened=false;this.disposeAllActivities();},this);},fetchActivities:function(model,collection,fetch,previewId,showActivities){if(app.metadata.getModule(model.module).isBwcEnabled){return;}
this.disposeAllActivities();this.collection.dataFetched=false;this.$el.hide();showActivities=_.isUndefined(showActivities)?true:showActivities;if(showActivities){this.collection.reset();this.collection.resetPagination();this.collection.fetch({endpoint:function(method,collection,options,callbacks){var url=app.api.buildURL(model.module,'activities',{id:model.get('id'),link:true},options.params);return app.api.call('read',url,null,callbacks);},success:_.bind(this.renderActivities,this)});}},renderActivities:function(collection){var self=this;if(this.disposed){return;}
if(this._previewOpened){if(collection.length===0){this.$el.hide();}else{this.$el.show();collection.each(function(activity){self.renderPost(activity,true);});}}else{_.delay(function(){self.renderActivities(collection);},500);}},setCollectionOptions:function(){},exposeDataTransfer:function(){},loadData:function(){},bindDataChange:function(){this.collection.on('add',function(activity){if(!this.disposed){this.renderPost(activity);}},this);}}) },
"record": {"controller": /*
     * Your installation or use of this SugarCRM file is subject to the applicable
     * terms available at
     * http://support.sugarcrm.com/06_Customer_Center/10_Master_Subscription_Agreements/.
     * If you do not agree to all of the applicable terms or do not have the
     * authority to bind the entity as an authorized representative, then do not
     * install or use this SugarCRM file.
     *
     * Copyright (C) SugarCRM Inc. All rights reserved.
     */
({
	// Record Layout (base) 
plugins:['ShortcutSession'],shortcuts:['Sidebar:Toggle','Record:Edit','Record:Delete','Record:Save','Record:Cancel','Record:Previous','Record:Next','Record:Favorite','Record:Follow','Record:Copy','Record:Action:More']}) },
"records": {"controller": /*
     * Your installation or use of this SugarCRM file is subject to the applicable
     * terms available at
     * http://support.sugarcrm.com/06_Customer_Center/10_Master_Subscription_Agreements/.
     * If you do not agree to all of the applicable terms or do not have the
     * authority to bind the entity as an authorized representative, then do not
     * install or use this SugarCRM file.
     *
     * Copyright (C) SugarCRM Inc. All rights reserved.
     */
({
	// Records Layout (base) 
plugins:['ShortcutSession'],shortcuts:['Sidebar:Toggle','List:Headerpane:Create','List:Select:Down','List:Select:Up','List:Scroll:Left','List:Scroll:Right','List:Select:Open','List:Inline:Edit','List:Delete','List:Inline:Cancel','List:Inline:Save','List:Favorite','List:Follow','List:Preview','List:Select','SelectAll:Checkbox','SelectAll:Dropdown','Filter:Search','Filter:Create','Filter:Edit','Filter:Show']}) },
"resolve-conflicts": {"controller": /*
     * Your installation or use of this SugarCRM file is subject to the applicable
     * terms available at
     * http://support.sugarcrm.com/06_Customer_Center/10_Master_Subscription_Agreements/.
     * If you do not agree to all of the applicable terms or do not have the
     * authority to bind the entity as an authorized representative, then do not
     * install or use this SugarCRM file.
     *
     * Copyright (C) SugarCRM Inc. All rights reserved.
     */
({
	// Resolve-conflicts Layout (base) 
plugins:['ShortcutSession'],shortcuts:['Headerpane:Cancel','Sidebar:Toggle']}) },
"selection-list": {"controller": /*
     * Your installation or use of this SugarCRM file is subject to the applicable
     * terms available at
     * http://support.sugarcrm.com/06_Customer_Center/10_Master_Subscription_Agreements/.
     * If you do not agree to all of the applicable terms or do not have the
     * authority to bind the entity as an authorized representative, then do not
     * install or use this SugarCRM file.
     *
     * Copyright (C) SugarCRM Inc. All rights reserved.
     */
({
	// Selection-list Layout (base) 
plugins:['ShortcutSession'],shortcuts:['Headerpane:Cancel','Sidebar:Toggle'],loadData:function(options){var fields=_.union(this.getFieldNames(),(this.context.get('fields')||[]));this.context.set('fields',fields);this._super('loadData',[options,false]);}}) },
"shortcuts": {"controller": /*
     * Your installation or use of this SugarCRM file is subject to the applicable
     * terms available at
     * http://support.sugarcrm.com/06_Customer_Center/10_Master_Subscription_Agreements/.
     * If you do not agree to all of the applicable terms or do not have the
     * authority to bind the entity as an authorized representative, then do not
     * install or use this SugarCRM file.
     *
     * Copyright (C) SugarCRM Inc. All rights reserved.
     */
({
	// Shortcuts Layout (base) 
plugins:['ShortcutSession'],shortcuts:['Shortcuts:Help:Close'],events:{'click [name=cancel_button]':'close'},shortcutsHelpTableTemplate:'',initialize:function(options){app.view.Layout.prototype.initialize.call(this,options);this.shortcutsHelpTableTemplate=app.template.getLayout(this.name+'.shortcuts-help-table');this.$('[data-display=global]').append(this.buildGlobalHelpTable().children());this.$('[data-display=contextual]').append(this.buildContextualHelpTable().children());app.shortcuts.register('Shortcuts:Help:Close',['esc','ctrl+alt+l'],function(){this.close();},this);},close:function(){app.drawer.close();},buildGlobalHelpTable:function(){var $html=$('<div></div>'),globalShortcuts=app.shortcuts.getRegisteredGlobalShortcuts(),help=this.prepareShorcutsHelpDataForDisplay(globalShortcuts);$html.append(this.shortcutsHelpTableTemplate(help));return $html;},buildContextualHelpTable:function(){var $html=$('<div></div>'),lastShortcutSession=app.shortcuts.getLastSavedSession(),contextualShortcuts,help;if(lastShortcutSession){contextualShortcuts=lastShortcutSession.getRegisteredShortcuts();if(contextualShortcuts){help=this.prepareShorcutsHelpDataForDisplay(contextualShortcuts);$html.append(this.shortcutsHelpTableTemplate(help));}}
return $html;},prepareShorcutsHelpDataForDisplay:function(shortcuts){var help=[];_.each(shortcuts,function(shortcut){help.push({keys:this.getKeyString(shortcut.keys),help:this.getHelpString(shortcut.id)});},this);return help;},getKeyString:function(keys){return keys.join(', ');},getHelpString:function(shortcutId){if(this.meta.help&&this.meta.help[shortcutId]){return app.lang.getAppString(this.meta.help[shortcutId]);}else{return'';}},loadData:function(options){}}) },
"subpanel": {"controller": /*
     * Your installation or use of this SugarCRM file is subject to the applicable
     * terms available at
     * http://support.sugarcrm.com/06_Customer_Center/10_Master_Subscription_Agreements/.
     * If you do not agree to all of the applicable terms or do not have the
     * authority to bind the entity as an authorized representative, then do not
     * install or use this SugarCRM file.
     *
     * Copyright (C) SugarCRM Inc. All rights reserved.
     */
({
	// Subpanel Layout (base) 
extendsFrom:'PanelLayout',dataView:'subpanel-list',initialize:function(options){options.type='panel';if(options.meta&&options.def&&options.def.override_subpanel_list_view){_.each(options.meta.components,function(def){if(def.view&&def.view=='subpanel-list'){def.view=options.def.override_subpanel_list_view;}});this.dataView=options.def.override_subpanel_list_view;if(options.meta.last_state.id){options.meta.last_state.id=options.def.override_subpanel_list_view;}}
if(options.meta&&options.def&&options.def.override_paneltop_view){_.each(options.meta.components,function(def){if(def.view&&def.view=='panel-top'){def.view=options.def.override_paneltop_view;}});}
this._super('initialize',[options]);if(this.dataView!=='subpanel-list'){this.context.set('dataView',this.dataView);}
if(this.context.parent){this.context.parent.on('subpanel:reload',function(args){if(!_.isUndefined(args)&&_.isArray(args.links)&&_.contains(args.links,this.context.get('link'))){this.context.reloadData({recursive:false});}},this);}}}) },
"subpanel-with-massupdate": {"controller": /*
     * Your installation or use of this SugarCRM file is subject to the applicable
     * terms available at
     * http://support.sugarcrm.com/06_Customer_Center/10_Master_Subscription_Agreements/.
     * If you do not agree to all of the applicable terms or do not have the
     * authority to bind the entity as an authorized representative, then do not
     * install or use this SugarCRM file.
     *
     * Copyright (C) SugarCRM Inc. All rights reserved.
     */
({
	// Subpanel-with-massupdate Layout (base) 
extendsFrom:"SubpanelLayout",_hideComponent:function(component,show){if(component.name!="panel-top"&&component.name!='massupdate'){if(show){component.show();}else{component.hide();}}}}) },
"subpanels": {"controller": /*
     * Your installation or use of this SugarCRM file is subject to the applicable
     * terms available at
     * http://support.sugarcrm.com/06_Customer_Center/10_Master_Subscription_Agreements/.
     * If you do not agree to all of the applicable terms or do not have the
     * authority to bind the entity as an authorized representative, then do not
     * install or use this SugarCRM file.
     *
     * Copyright (C) SugarCRM Inc. All rights reserved.
     */
({
	// Subpanels Layout (base) 
className:'subpanels-layout',_defaultSettings:{showAlerts:true,sortable:true},_settings:{},initialize:function(options){this._super('initialize',[options]);this._initSettings();if(this.layout){this.listenTo(this.layout,'subpanel:change',this.showSubpanel);this.listenTo(this.layout,'filter:change',function(linkModuleName,linkName){this.trigger('filter:change',linkModuleName,linkName);});}
this.on('subpanels:reordered',this._saveNewOrder,this);},_initSettings:function(){this._settings=_.extend({},this._defaultSettings,this.meta&&this.meta.settings||{});return this;},_initSortablePlugin:function(){if(this._settings&&this._settings.sortable===true){this.$el.sortable({axis:'y',containment:this.$el,handle:'[data-sortable-subpanel=true]',helper:'clone',tolerance:'pointer',scrollSensitivity:50,scrollSpeed:15,update:_.bind(this.handleSort,this)});}
return this;},_render:function(){this._super('_render');this._initSortablePlugin();},_dispose:function(){if(!_.isEmpty(this.$el.data('sortable'))){this.$el.sortable('destroy');}
this._super('_dispose');},_saveNewOrder:function(component,order){var key=app.user.lastState.buildKey('order','subpanels',this.module);app.user.lastState.set(key,order);if(this._settings.showAlerts===true){app.alert.show('subpanel_order_updated',{level:'success',messages:app.lang.get('LBL_SAVED_LAYOUT',this.module),autoClose:true});}},handleSort:function(evt,ui){var newOrder=this.$el.sortable('toArray',{attribute:'data-subpanel-link'});this.trigger('subpanels:reordered',this,newOrder);},_pruneNoAccessComponents:function(components){var prunedComponents=[];var layoutFromContext=this.context?this.context.get('layout')||this.context.get('layoutName'):null;this.layoutType=layoutFromContext?layoutFromContext:app.controller.context.get('layout');this.aclToCheck=this.aclToCheck||'list';_.each(components,function(component){var relatedModule,link=component.context?component.context.link:null;if(link){relatedModule=app.data.getRelatedModule(this.module,link);if(!relatedModule||relatedModule&&app.acl.hasAccess(this.aclToCheck,relatedModule)){prunedComponents.push(component);}}},this);return prunedComponents;},_pruneHiddenComponents:function(components){var hiddenSubpanels=app.metadata.getHiddenSubpanels();var visibleSubpanels=_.filter(components,function(component){var relatedModule=app.data.getRelatedModule(this.module,component.context.link);return _.isEmpty(_.find(hiddenSubpanels,function(hiddenPanel){if(relatedModule!==false){return hiddenPanel.toLowerCase()===relatedModule.toLowerCase();}
return true;}));},this);return visibleSubpanels;},_addComponentsFromDef:function(components,context,module){var allowedComponents=this._pruneHiddenComponents(components);allowedComponents=this._pruneNoAccessComponents(allowedComponents);allowedComponents=this.reorderSubpanels(allowedComponents);this._super('_addComponentsFromDef',[allowedComponents,context,module]);this._markComponentsAsSubpanels();this._disableSubpanelToggleButton(allowedComponents);},reorderSubpanels:function(components){var key=app.user.lastState.buildKey('order','subpanels',this.module),order=app.user.lastState.get(key);if(_.isEmpty(order)){return components;}
var componentOrder=_.pluck(_.pluck(components,'context'),'link');order=_.intersection(order,componentOrder);_.each(order,function(link,index){var comp=_.find(components,function(comp){return comp.context.link===link;});comp.position=++index;});components=_.sortBy(components,function(comp){return comp.position;});return components;},_disableSubpanelToggleButton:function(allowedComponents){if(!this.layout||!_.isEmpty(allowedComponents)){return;}
this.layout.trigger('filterpanel:change','activitystream',true,true);this.layout.trigger('filterpanel:toggle:button','subpanels',false);},showSubpanel:function(linkName){var self=this,cacheKey=app.user.lastState.key('subpanels-last',this.layout);if(linkName){app.user.lastState.set(cacheKey,linkName);}
_.each(this._components,function(component){var link=component.context.get('link');if(!linkName||linkName===link){component.context.set("hidden",false);component.show();}else{component.context.set("hidden",true);component.hide();}});},_markComponentsAsSubpanels:function(){_.each(this._components,function(component){component.context.set("isSubpanel",true);});},loadData:function(options){var self=this,load=function(){_.each(this._components,function(component){component.loadData(options);});};if(self.context.parent&&!self.context.parent.isDataFetched()){var parent=this.context.parent.get("model");parent.once("sync",load);}
else{load();}}}) },
"tabbed-layout": {"controller": /*
     * Your installation or use of this SugarCRM file is subject to the applicable
     * terms available at
     * http://support.sugarcrm.com/06_Customer_Center/10_Master_Subscription_Agreements/.
     * If you do not agree to all of the applicable terms or do not have the
     * authority to bind the entity as an authorized representative, then do not
     * install or use this SugarCRM file.
     *
     * Copyright (C) SugarCRM Inc. All rights reserved.
     */
({
	// Tabbed-layout Layout (base) 
initialize:function(options){this.firstIsActive=false;this.template=app.template.get("l.tabbed-layout");this.renderHtml();app.view.Layout.prototype.initialize.call(this,options);},renderHtml:function(){this.$el.html(this.template(this));},_placeComponent:function(comp,def){var id=_.uniqueId('record-bottom'),nav=$('<li/>').html('<a href="#'+id+'" onclick="return false;" data-toggle="tab">'+app.lang.get(def.layout.name,this.module)+'</a>'),content=$('<div/>').addClass('tab-pane').attr('id',id).html(comp.el);if(!this.firstIsActive){nav.addClass('active');content.addClass('active');}
this.firstIsActive=true;this.$('.tab-content').append(content);this.$('.nav').append(nav);}}) },
"toggle": {"controller": /*
     * Your installation or use of this SugarCRM file is subject to the applicable
     * terms available at
     * http://support.sugarcrm.com/06_Customer_Center/10_Master_Subscription_Agreements/.
     * If you do not agree to all of the applicable terms or do not have the
     * authority to bind the entity as an authorized representative, then do not
     * install or use this SugarCRM file.
     *
     * Copyright (C) SugarCRM Inc. All rights reserved.
     */
({
	// Toggle Layout (base) 
availableToggles:{},defaultToggle:null,initialize:function(options){this.toggleComponents=[];this.componentsList={};this.availableToggles=this.options.meta.available_toggles||this.availableToggles;this.defaultToggle=this.options.meta.default_toggle||this.defaultToggle;app.view.Layout.prototype.initialize.call(this,options);if(this.defaultToggle){this.showComponent(this.defaultToggle);}
this.on('toggle:showcomponent',this.showComponent,this);},_placeComponent:function(component){if(!_.isUndefined(this.availableToggles[component.name])){this.toggleComponents.push(component);this.componentsList[component.name]=component;this._components.splice(this._components.indexOf(component),1);}else{component.render();this.getContainer(component).append(component.el);}},getContainer:function(component){return this.$el;},showComponent:function(name){var oldToggle=this.currentToggle;if(this.componentsList[name]){this.componentsList[name].render();this._components.push(this.componentsList[name]);this.getContainer(this.componentsList[name]).append(this.componentsList[name].el);this.componentsList[name].trigger("append");this.componentsList[name]=null;}
_.each(this.toggleComponents,function(component){if(component.name===name){component.show();}else{component.hide();}},this);this.currentToggle=name;this.trigger('toggle:change',name,oldToggle);},_dispose:function(){_.each(this.componentsList,function(component){if(component){component.dispose();}});this.componentsList={};this.toggleComponents=null;app.view.Layout.prototype._dispose.call(this);}}) },
"togglepanel": {"controller": /*
     * Your installation or use of this SugarCRM file is subject to the applicable
     * terms available at
     * http://support.sugarcrm.com/06_Customer_Center/10_Master_Subscription_Agreements/.
     * If you do not agree to all of the applicable terms or do not have the
     * authority to bind the entity as an authorized representative, then do not
     * install or use this SugarCRM file.
     *
     * Copyright (C) SugarCRM Inc. All rights reserved.
     */
({
	// Togglepanel Layout (base) 
events:{"click .toggle-actions a.btn":"toggleView"},plugins:['Tooltip'],initialize:function(opts){this.toggleComponents=[];this.componentsList={};this.processToggles();app.view.Layout.prototype.initialize.call(this,opts);},_render:function(){this._super('_render');this.toggleViewLastStateKey=app.user.lastState.key('toggle-view',this);var lastViewed=app.user.lastState.get(this.toggleViewLastStateKey);if(_.isUndefined(lastViewed)||this.isToggleButtonDisabled(lastViewed)){var enabledToggles=_.filter(this.toggles,function(toggle){return!toggle.disabled;});if(enabledToggles.length>0){lastViewed=_.first(enabledToggles).toggle;}}
this.showComponent(lastViewed,true);this.$('[data-view="'+lastViewed+'"]').button('toggle');},isToggleButtonDisabled:function(name){var disabled=false,toggleButton;toggleButton=_.find(this.toggles,function(toggle){return toggle.toggle===name;});if(toggleButton){disabled=toggleButton.disabled;}
return disabled;},processToggles:function(){this.toggles=[];var temp={};_.each(this.options.meta.components,function(component){var toggle;if(component.view){toggle=component.view;}else if(component.layout){toggle=(_.isString(component.layout))?component.layout:component.layout.name;}
var availableToggle=_.find(this.options.meta.availableToggles,function(curr){return curr.name===toggle;},this);if(toggle&&availableToggle){var disabled=!!availableToggle.disabled;temp[toggle]={toggle:toggle,title:availableToggle.label,'class':availableToggle.icon,disabled:disabled};}},this);if(this.options.meta.availableToggles){for(var i=0;i<this.options.meta.availableToggles.length;i++){var curr=this.options.meta.availableToggles[i];if(temp[curr.name]){this.toggles.push(temp[curr.name]);}}}},_placeComponent:function(component,def){if(def&&def.targetEl){if(def.position=='prepend'){this.$(def.targetEl).prepend(component.el);return;}else{this.$(def.targetEl).append(component.el);}}else{var toggleAvailable=_.isObject(_.find(this.options.meta.availableToggles,function(curr){return curr.name===component.name;}));if(toggleAvailable){this.toggleComponents.push(component);this.componentsList[component.name]=component;this._components.splice(this._components.indexOf(component),1);}else{component.render();this.$(".main-content").append(component.el);}}},toggleView:function(e){var $el=this.$(e.currentTarget);if($el.attr('disabled')==='disabled'){e.preventDefault();e.stopPropagation();return;}
if(!$el.hasClass("active")){var data=$el.data();app.user.lastState.set(this.toggleViewLastStateKey,data.view);this.showComponent(data.view);this.reloadData(data.view);}},showComponent:function(name,silent){if(!name)return;if(this.componentsList[name]){this.componentsList[name].render();this._components.push(this.componentsList[name]);this.$(".main-content").append(this.componentsList[name].el);}
_.each(this.toggleComponents,function(comp){if(comp.name==name){comp.show();}else{comp.hide();}},this);this.trigger('filterpanel:change',name,silent);},reloadData:function(name){var layout=this.componentsList[name];if(layout){layout.context.resetLoadFlag(true);layout.loadData();}},_dispose:function(){_.each(this.componentsList,function(component){if(component){component.dispose();}});this.componentsList={};this.toggleComponents=null;app.view.Layout.prototype._dispose.call(this);}}) },
"wizard": {"controller": /*
     * Your installation or use of this SugarCRM file is subject to the applicable
     * terms available at
     * http://support.sugarcrm.com/06_Customer_Center/10_Master_Subscription_Agreements/.
     * If you do not agree to all of the applicable terms or do not have the
     * authority to bind the entity as an authorized representative, then do not
     * install or use this SugarCRM file.
     *
     * Copyright (C) SugarCRM Inc. All rights reserved.
     */
({
	// Wizard Layout (base) 
_currentIndex:0,initialize:function(options){this._super('initialize',[options]);$(window).on('keypress.'+this.cid,_.bind(this.handleKeypress,this));},_placeComponent:function(component){if(component==this._components[this._currentIndex]){this.$el.append(component.el);}},addComponent:function(component,def){component=this._addButtonsForComponent(component);if(component.showPage()){this._super('addComponent',[component,def]);}},_addButtonsForComponent:function(component){var buttons=[];component.meta=component.meta||{};_.each(this.meta.components,function(comp,i){if(comp.view===component.name){if(i===0){buttons.push(this.meta.buttons[1]);}else if(i===this.meta.components.length-1){buttons.push(this.meta.buttons[0]);buttons.push(this.meta.buttons[2]);}else{buttons.push(this.meta.buttons[0]);buttons.push(this.meta.buttons[1]);}}},this);component.meta.buttons=buttons;return component;},setPage:function(newIndex){if(newIndex!==this._currentIndex&&(newIndex>=0&&newIndex<this._components.length)){this._components[this._currentIndex].$el.detach();this._currentIndex=newIndex;this.$el.append(this._components[this._currentIndex].el);this.on('wizard-page:render:complete',function(){$(window).on('keypress.'+this.cid,_.bind(this.handleKeypress,this));});this._components[this._currentIndex].render();}
return this.getProgress();},_render:function(){if(Modernizr.touch){app.$contentEl.addClass('content-overflow-visible');}
if(this._components){this._components[this._currentIndex].render();}},getProgress:function(){return{page:this._currentIndex+1,lastPage:this._components.length};},previousPage:function(){$(window).off('keypress.'+this.cid);return this.setPage(this._currentIndex-1);},nextPage:function(){$(window).off('keypress.'+this.cid);return this.setPage(this._currentIndex+1);},finished:function(){if(Modernizr.touch){app.$contentEl.removeClass('content-overflow-visible');}
var callbacks=this.context.get("callbacks");this.dispose();if(callbacks&&callbacks.complete){callbacks.complete();}},handleKeypress:function(e){var wizardPage=this._components[this._currentIndex];if(wizardPage){if(e.keyCode===13){document.activeElement.blur();if(wizardPage.isPageComplete()){$(window).off('keypress.'+this.cid);wizardPage.next();}}}},_dispose:function(){$(window).off('keypress.'+this.cid);this._super('_dispose');}}) }
}}

,
	"modules":{
		"Login":{
}
	}}})(SUGAR.App);