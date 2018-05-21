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
/**
 * @class View.Views.Base.Emails.ComposeView
 * @alias SUGAR.App.view.views.BaseEmailsComposeView
 * @extends View.Views.Base.RecordView
 */
({
    extendsFrom: 'BaseEmailsComposeView',
    initialize: function (options) {
        console.log("test");
        this._super("initialize", [options]);
    },
    _render: function () {
        this._super("_render");
        this.documentAttach();
    },
    sortingId: "",
    clientId: "",
    attachments: "",
    documentRevisionId: [],
    documentAttach: function () {
        var self = this;
        var attachmentsPop = this.context.get('prepopulate').attachments;
        _.each(attachmentsPop, function (attachment) {
            var sugarDocument = app.data.createBean('Documents', {id: attachment});
            sugarDocument.fetch({
                success: _.bind(function (model) {
                    self.documentRevisionId.push(model.get('document_revision_id'));
                    if (this.disposed === true)
                        return; //if view is already disposed, bail out
                    this.context.trigger("attachment:add", {
                        id: model.id,
                        name: model.get('filename'),
                        nameForDisplay: model.get('filename'),
                        type: this.ATTACH_TYPE_SUGAR_DOCUMENT
                    });
                }, this),
                error: _.bind(function (error) {
                    this._showServerError(error);
                }, this)
            });
        }, this);
    },
    /**
     * Build the backbone model to be sent to the Mail API with the appropriate status
     * Also display the appropriate alerts to give user indication of what is happening.
     *
     * @param status (draft or ready)
     * @param pendingMessage message to display while Mail API is being called
     * @param successMessage message to display when a successful Mail API response has been received
     * @param errorMessage message to display when Mail API call fails
     */
    saveModel: function (status, pendingMessage, successMessage, errorMessage) {

        var myURL,
                sendModel = this.initializeSendEmailModel();
        var self = this;
        this.setMainButtonsDisabled(true);
        app.alert.show('mail_call_status', {level: 'process', title: pendingMessage});
        sendModel.set('status', status);

        if (typeof sendModel.attributes.client_id != 'undefined') {
            var praentType = sendModel.attributes.parent_type;
            self.sortingId = sendModel.attributes.sorting_id;
            self.clientId = sendModel.attributes.client_id;
            self.attachments = sendModel.attributes.attachments;
            delete sendModel.attributes.sorting_id;
            delete sendModel.attributes.client_id;
//            delete sendModel.attributes.attachments;
        }
        myURL = app.api.buildURL('Mail');
        app.api.call('create', myURL, sendModel, {
            success: function () {
                if (self.sortingId != "") {
                    if (sendModel.changed.status != 'draft') {
                        var updateTimestamp = app.api.buildURL('Sorting/emailTimestamp/' + self.sortingId + '/' + self.clientId + '/' +self.attachments.length);
                        app.api.call('read', updateTimestamp, null, {
                            success: _.bind(function (data) {
//                                self.deleteAttachments(self.attachments);
                            }, this)
                        });
                    } else {
                        self.startDownload(self.attachments);
                    }
                }
                app.alert.dismiss('mail_call_status');
                app.alert.show('mail_call_status', {autoClose: true, level: 'success', messages: successMessage});
                app.drawer.close();
            },
            error: function (error) {
                var msg = {level: 'error'};
                if (error && _.isString(error.message)) {
                    msg.messages = error.message;
                }
                app.alert.dismiss('mail_call_status');
                app.alert.show('mail_call_status', msg);
            },
            complete: _.bind(function () {
                if (!this.disposed) {
                    this.setMainButtonsDisabled(false);
                }
            }, this)
        });
    },
    startDownload: function (notes) {
        var self = this;
        _.each(notes, function (note) {
            var url = app.api.buildFileURL({
                module: 'Documents',
                id: note.id,
                field: 'filename'
            }, {
                htmlJsonFormat: false,
                passOAuthToken: false,
                cleanCache: true,
                forceDownload: true
            });
            app.api.fileDownload(url, {
                error: function (data) {
                    // refresh token if it has expired
                    app.error.handleHttpError(data, {});
                },
                complete: _.bind(function () {
                }, this)
            }, {iframe: this.$el});
        });
    },
    downloadAttachments: function () {
        var attachments = this.context.get('prepopulate').attachments;
        _.each(attachments, function (attachment) {
            var sugarDocument = app.data.retrieveBean('Notes', {id: attachment});
            sugarDocument.fetch({
                success: _.bind(function (model) {
                    if (this.disposed === true)
                        return; //if view is already disposed, bail out
                    this.context.trigger("attachment:add", {
                        id: model.id,
                        name: model.get('filename'),
                        nameForDisplay: model.get('filename'),
                        type: this.ATTACH_TYPE_SUGAR_DOCUMENT
                    });
                }, this),
                error: _.bind(function (error) {
                    this._showServerError(error);
                }, this)
            });
        }, this);
    },

    
})
