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
({extendsFrom:'FieldsetField',plugins:['EllipsisInline'],formatMap:{'f':'first_name','l':'last_name','s':'salutation',},initialize:function(options){var context=options.view.context,module=context.get("module");if(module){var meta=app.metadata.getModule(module);if(meta&&meta.nameFormat){this.formatMap=meta.nameFormat;}}
var formatPlaceholder=app.user.getPreference('default_locale_name_format')||'';options.def.fields=_.reduce(formatPlaceholder.split(''),function(fields,letter){if(letter>='a'&&letter<='z'&&this.formatMap[letter]){fields.push(_.clone(meta.fields[this.formatMap[letter]]||this.formatMap[letter]));}
return fields;},[],this);options.def.fields=app.metadata._patchFields(module,meta,options.def.fields);this._super('initialize',[options]);if(!app.acl.hasAccessToModel('view',this.model)&&this.def){this.def.link=false;}},_loadTemplate:function(){this._super('_loadTemplate');if(this.def.link){var action=this.def.route&&this.def.route.action?this.def.route.action:'';this.href='#'+app.router.buildRoute(this.module||this.context.get('module'),this.model.id,action,this.def.bwcLink);}
var template=app.template.getField(this.type,this.view.name+'-'+this.tplName,this.model.module);if(!template&&this.view.meta&&this.view.meta.template){template=app.template.getField(this.type,this.view.meta.template+'-'+this.tplName,this.model.module);}
this.template=template||this.template;},getPlaceholder:function(){return app.view.Field.prototype.getPlaceholder.call(this);},_render:function(){_.each(this.fields,function(field){field.dispose();delete this.view.fields[field.sfId];},this);this.fields=[];app.view.Field.prototype._render.call(this);_.each(this.fields,function(field){field.setElement(this.$("span[sfuuid='"+field.sfId+"']"));field.render();},this);return this;},format:function(name){return app.utils.formatNameModel(this.model.module,this.model.attributes);},bindDataChange:function(){if(this.model){this.model.on("change:"+this.name,function(){if(this.fields.length===0){this.render();}},this);_.each(this.def.fields,function(field){this.model.on("change:"+field.name,this.updateValue,this);},this);}},updateValue:function(){this.model.set(this.name,this.format());},setMaxWidth:function(width){this.$('.record-cell').css({'max-width':width});},getCellPadding:function(){var padding=0,$cell=this.$('.record-cell');if(!_.isEmpty($cell)){padding=parseInt($cell.css('padding-left'),10)+parseInt($cell.css('padding-right'),10);}
return padding;}})