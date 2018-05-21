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
({className:'subpanel-header',attributes:{'data-sortable-subpanel':'true'},events:{'click':'togglePanel','click a[name=create_button]:not(".disabled")':'createRelatedClicked',},plugins:['LinkedModel'],initialize:function(opts){app.view.View.prototype.initialize.call(this,opts);var context=this.context;this.parentModule=context.parent.get('module');context.parent.on('panel-top:refresh',function(link){if(context.get('link')===link){context.get('collection').fetch();}});},createRelatedClicked:function(event){this.createRelatedRecord(this.module)},togglePanel:function(e){var toggleSubpanel=!$(e.target).parents("span.actions").length;if(toggleSubpanel){this._toggleSubpanel();}},_toggleSubpanel:function(){if(!this.layout.disposed){var isHidden=this.layout.$(".subpanel").hasClass('closed');this.layout.trigger('panel:toggle',isHidden);}},bindDataChange:function(){if(this.collection){this.listenTo(this.collection,'reset',this.render);}}})