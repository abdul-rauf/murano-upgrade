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
({initialize:function(options){app.view.View.prototype.initialize.call(this,options);},_renderField:function(field){if(field.def.multi){field=this._setUpMultiselectField(field);}
app.view.View.prototype._renderField.call(this,field);field.$el.find('.chzn-container').css("width","100%");field.$el.find('.chzn-drop').css("width","100%");},_setUpMultiselectField:function(field){field.def.value=this.model.get(field.name);field.events=_.extend({"change select":"_updateSelections"},field.events);field.bindDomChange=function(){};field._updateSelections=function(event,input){var fieldValue=this.model.get(this.name);var id;if(_.has(input,"selected")){id=input.selected;if(!_.contains(fieldValue,id)){fieldValue=_.union(fieldValue,id);}}else if(_.has(input,"deselected")){id=input.deselected;if(_.contains(fieldValue,id)){fieldValue=_.without(fieldValue,id);}}
this.def.value=fieldValue;this.model.set(this.name,fieldValue);};return field;}})