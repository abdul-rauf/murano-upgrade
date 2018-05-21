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
({className:'filtered tabbable tabs-left',attributes:function(){return{'data-subpanel-link':this.options.context.get('link')};},HIDE_SHOW_KEY:'hide-show',HIDE_SHOW:{HIDE:'hide',SHOW:'show'},initialize:function(opts){app.view.Layout.prototype.initialize.call(this,opts);this.hideShowLastStateKey=app.user.lastState.key(this.HIDE_SHOW_KEY,this);this.on("panel:toggle",this.togglePanel,this);this.listenTo(this.collection,"reset",function(){var hideShowLastState=app.user.lastState.get(this.hideShowLastStateKey);if(_.isUndefined(hideShowLastState)){this.togglePanel(this.collection.length>0,false);}else{this.togglePanel(hideShowLastState===this.HIDE_SHOW.SHOW,false);}});this.listenTo(this.collection,"reset add remove",this._checkIfSubpanelEmpty,this);},_checkIfSubpanelEmpty:function(){this.$(".subpanel").toggleClass("empty",this.collection.length===0);},_placeComponent:function(component){this.$(".subpanel").append(component.el);this._hideComponent(component,false);},togglePanel:function(show,saveState){this.$(".subpanel").toggleClass("closed",!show);if(arguments.length===1||saveState){app.user.lastState.set(this.hideShowLastStateKey,show?this.HIDE_SHOW.SHOW:this.HIDE_SHOW.HIDE);}
_.each(this._components,function(component){this._hideComponent(component,show);},this);},_hideComponent:function(component,show){if(!component.$el.hasClass('subpanel-header')){if(show){component.show();}else{component.hide();}}}})