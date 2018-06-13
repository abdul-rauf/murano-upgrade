/*
 * Your installation or use of this SugarCRM file is subject to the applicable
 * terms available at
 * http://support.sugarcrm.com/Resources/Master_Subscription_Agreements/.
 * If you do not agree to all of the applicable terms or do not have the
 * authority to bind the entity as an authorized representative, then do not
 * install or use this SugarCRM file.
 *
 * Copyright (C) SugarCRM Inc. All rights reserved.
 */
/**
 * @class View.Views.Base.Opportunities.CreateView
 * @alias SUGAR.App.view.views.OpportunitiesCreateView
 * @extends View.Views.Base.CreateView
 */
({
    extendsFrom: 'CreateView',


    /**
     * If subpanel models are valid
     */
    validSubpanelModels: true,

    /**
     * @inheritdoc
     */
    initialize: function(options) {
        this._super('initialize', [options]);
        app.utils.hideForecastCommitStageField(this.meta.panels);
    },

    /**
     * @inheritdoc
     */
    initiateSave: function(callback) {
        this.disableButtons();
        async.waterfall([
            _.bind(function(cb) {
                async.parallel([
                    _.bind(this.validateSubpanelModelsWaterfall, this),
                    _.bind(this.validateModelWaterfall, this)
                ], function(err) {
                    // err is undefined if no errors
                    cb(!_.isUndefined(err));
                });
            }, this),
            _.bind(this.dupeCheckWaterfall, this),
            _.bind(this.createRecordWaterfall, this)
        ], _.bind(function(error) {
            this.enableButtons();
            if (error && error.status == 412 && !error.request.metadataRetry) {
                this.handleMetadataSyncError(error);
            } else if (!error && !this.disposed) {
                this.context.lastSaveAction = null;
                callback();
            }
        }, this));
    },

    /**
     * Check to see if all fields are valid
     *
     * @inheritdoc
     */
    validateModelWaterfall: function(callback) {
        // override this.model.doValidate() to display error if subpanel model validation failed
        this.model.trigger('validation:start');
        this.model.isValidAsync(this.getFields(this.module), _.bind(function(isValid, errors) {
            if (this.validSubpanelModels && isValid) {
                this.model.trigger('validation:success');
            } else if (!this.validSubpanelModels) {
                this.model.trigger('error:validation');
            }
            this.model.trigger('validation:complete', this.model._processValidationErrors(errors));
            callback(!isValid);
        }, this));
    },

    /**
     * Check to see if there are subpanel create models on this view
     * And trigger an event to tell the subpanel to validate itself
     *
     * @inheritdoc
     */
    validateSubpanelModelsWaterfall: function(callback) {
        this.hasSubpanelModels = false;
        this.validSubpanelModels = true;
        _.each(this.context.children, function(child) {
            if (child.get('isCreateSubpanel')) {
                this.hasSubpanelModels = true;
                this.context.trigger('subpanel:validateCollection:' + child.get('link'),
                    _.bind(function(notValid) {
                        if (this.validSubpanelModels && notValid) {
                            this.validSubpanelModels = false;
                        }
                        callback(notValid);
                    }, this),
                    true
                );
            }
        }, this);

        // If there are no subpanel models, callback false so the waterfall can continue
        if (!this.hasSubpanelModels) {
            return callback(false);
        }
    },

})
