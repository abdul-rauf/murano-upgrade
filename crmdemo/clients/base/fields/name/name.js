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
({plugins:['EllipsisInline'],'events':{'keyup input[name=name]':'handleKeyup'},_render:function(){if(this.view.name==='record'){this.def.link=false;}else if(this.view.name==='preview'){this.def.link=_.isUndefined(this.def.link)?true:this.def.link;}
this._super('_render');},handleKeyup:_.throttle(function(){var searchedValue=this.$('input.inherit-width').val();if(searchedValue&&searchedValue.length>=3){this.context.trigger('input:name:keyup',searchedValue);}},1000,{leading:false})})