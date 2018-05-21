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
({extendsFrom:'ButtonField',initialize:function(options){this.options.def.events=_.extend({},this.options.def.events,{'click .rowaction':'rowActionSelect'});this._super("initialize",[options]);},rowActionSelect:function(evt){if(this.isDisabled()){return;}
if(this.preventClick(evt)!==false){var target=this.view.context;if(this.def.target==='view'){target=this.view;}else if(this.def.target==='layout'){target=this.view.layout;}
if($(evt.currentTarget).data('event')){target.trigger($(evt.currentTarget).data('event'),this.model,this);}}}})