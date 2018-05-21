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
({extendsFrom:'FieldsetField',initialize:function(options){this._super('initialize',[options]);app.logger.warn('FieldsetWithLabels field is deprecated and will be removed as part of 7.6.'+'Please use Fieldset field instead.');},_render:function(){if(_.isEmpty(this.fields)){this._createFields();this._renderNewFields();}else{this._renderExistingFields();}
if(this.def&&this.def.css_class){this.getFieldElement().addClass(this.def.css_class);}
return this;},_createFields:function(){this._loadTemplate();this.$el.html(this.template(this));},_renderNewFields:function(){_.each(this.def.fields,function(fieldDef){var field=this.view.getField(fieldDef.name);this.fields.push(field);field.setElement(this.$("span[sfuuid='"+field.sfId+"']"));field.render();},this);},_renderExistingFields:function(){_.each(this.fields,function(field){field.render();},this);},getPlaceholder:function(){return app.view.Field.prototype.getPlaceholder.call(this);},setMode:function(name){this.tplName=name;this._super("setMode",[name]);}})