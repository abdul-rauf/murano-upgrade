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
({events:{'click [data-action="show-more"]':'showMoreRecords'},initialize:function(options){this._super('initialize',[options]);this._initPagination();},_initPagination:function(){this.paginationComponent=_.find(this.layout._components,function(component){return _.contains(component.plugins,'Pagination');},this);},showMoreRecords:function(){if(!this.paginationComponent){return;}
this.paginateFetched=false;this.render();var options={};options.success=_.bind(function(){this.layout.trigger('list:paginate:success');this.paginateFetched=true;this.render();},this);this.paginationComponent.getNextPagination(options);},setShowMoreLabel:function(){var model=this.collection.at(0),module=model?model.module:this.context.get('module');this.showMoreLabel=app.lang.get('TPL_SHOW_MORE_MODULE',module,{module:app.lang.get('LBL_MODULE_NAME',module).toLowerCase(),count:this.collection.length,offset:this.collection.next_offset>=0});},onCollectionChange:function(){var prevCollection=this.context.previous('collection');if(prevCollection){prevCollection.off(null,null,this);}
this.collection=this.context.get('collection');this.collection.on('add remove reset',this.render,this);this.render();},bindDataChange:function(){this.context.on('change:collection',this.onCollectionChange,this);this.collection.on('add remove reset',this.render,this);this.before('render',function(){this.dataFetched=this.paginateFetched!==false&&this.collection.dataFetched;this.showLoadMsg=true;if(app.alert.$alerts[0].innerText){this.showLoadMsg=false;}
var nextOffset=this.collection.next_offset||-1;if(this.collection.dataFetched&&nextOffset===-1){this._invisible=true;this.hide();return false;}
this._invisible=false;this.show();this.setShowMoreLabel();},null,this);},show:function(){if(this._invisible){return;}
this._super('show');if(!this.paginationComponent){return;}
this.paginationComponent.layout.$el.addClass('pagination');},hide:function(){this._super('hide');if(!this.paginationComponent){return;}
this.paginationComponent.layout.$el.removeClass('pagination');}})