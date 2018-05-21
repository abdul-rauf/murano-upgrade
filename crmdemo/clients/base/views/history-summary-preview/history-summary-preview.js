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
({extendsFrom:'PreviewView',_renderPreview:function(model,collection,fetch,previewId){if(app.drawer&&!app.drawer.isActive(this.$el)){return;}
if(this.model&&model&&(this.model.get("id")===model.get("id")&&previewId===this.previewId)){app.events.trigger("list:preview:decorate",false);app.events.trigger('preview:close');return;}
if(app.metadata.getModule(model.module).isBwcEnabled){return;}
if(model){this.meta=_.extend({},app.metadata.getView(model.module,'record'),app.metadata.getView(model.module,'preview'));this.meta=this._previewifyMetadata(this.meta);}
if(fetch){var recordUrl=app.api.serverUrl+'/'+model.module+'/'+model.get('id'),callbacks={success:_.bind(function(newModel){newModel=app.data.createBean(model.module,newModel);newModel.module=model.module;this.renderPreview(newModel);},this)}
app.api.call('read',recordUrl,null,callbacks);}else{this.renderPreview(model,collection);}
this.previewId=previewId;}})