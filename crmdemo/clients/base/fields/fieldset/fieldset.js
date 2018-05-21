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
({fields:null,initialize:function(options){app.view.Field.prototype.initialize.call(this,options);this.fields=[];},getPlaceholder:function(){var placeholder='<span sfuuid="'+this.sfId+'">';_.each(this.def.fields,function(fieldDef){if(this.def.readonly){fieldDef.readonly=true;}
var field=app.view.createField({def:fieldDef,view:this.view,viewName:this.options.viewName,model:this.model});this.fields.push(field);field.parent=this;placeholder+=field.getPlaceholder();},this);placeholder+='</span>';return new Handlebars.SafeString(placeholder);},showNoData:function(){if(!this.def.readonly){return false;}
return!_.some(this.fields,function(field){return field.name&&field.model.has(field.name);});},_render:function(){this._loadTemplate();if(_.contains(this.fallbackActions,this.action)){this.$el.html(this.template(this)||'');}
if(this.def&&this.def.css_class){this.getFieldElement().addClass(this.def.css_class);}
this.focusIndex=0;this._addViewClass(this.action);return this;},focus:function(){if(this.focusIndex<0||!this.focusIndex){this.focusIndex=0;}
if(this.focusIndex>=this.fields.length){this.focusIndex=-1;return false;}else{if(this.fields[this.focusIndex]&&this.fields[this.focusIndex].isDisabled()){this.focusIndex++;return this.focus();}
if(_.isFunction(this.fields[this.focusIndex].focus)&&this.fields[this.focusIndex].focus()){}else{var field=this.fields[this.focusIndex];var $el=field.$(field.fieldTag+":first");$el.focus().val($el.val());this.focusIndex++;}
return true;}},setDisabled:function(disable){disable=_.isUndefined(disable)?true:disable;app.view.Field.prototype.setDisabled.call(this,disable);_.each(this.fields,function(field){field.setDisabled(disable);},this);},setViewName:function(view){app.view.Field.prototype.setViewName.call(this,view);_.each(this.fields,function(field){field.setViewName(view);},this);},setMode:function(name){this.focusIndex=0;app.view.Field.prototype.setMode.call(this,name);_.each(this.fields,function(field){field.setMode(name);},this);},bindDomChange:function(){},bindDataChange:function(){},unbindDom:function(){},_dispose:function(){_.each(this.fields,function(field){field.parent=null;field.dispose();});this.fields=null;app.view.Field.prototype._dispose.call(this);}})