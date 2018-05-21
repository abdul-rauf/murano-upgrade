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
 * Custom RecordlistView used within Subpanel layouts.
 *
 * @class View.Views.Base.SubpanelListView
 * @alias SUGAR.App.view.views.BaseSubpanelListView
 * @extends View.Views.Base.RecordlistView
 */
({
    extendsFrom: 'SubpanelListView',
    clientData: [],
    initialize: function (options) {
        this._super("initialize", [options]);
        this.context.on('list:composeclients:fire', this.openPopups, this);

    },
    openPopups: function () {
        var self = this;
        var templateName = 'Murano Investor Report';
        var sortingCollection = this.context.get('collection');
        var sortingIds = [];
        for (var i = 0; i < sortingCollection.length; i++) {
            sortingIds.push(sortingCollection.models[i].attributes.id);
        }
        var leadId = sortingCollection.link.bean.attributes.id;
        var url = app.api.buildURL('Leads' + '/' + 'generateWPDF/' + leadId + '/' + templateName);
        app.api.call('GET', url, null, {
            success: function (o) {
                var attachment = new Array();
                attachment[0] = o;
                var getClients = app.api.buildURL('Sorting/getConfirmedClients/' + sortingIds);
                app.api.call('read', getClients, null, {
                    success: _.bind(function (data) {
                        var index = 0;
                        self.clientData = data;
                        if (data != "") {
                            self.closePopup(self.clientData[0], index, data.length, attachment);
                        } else {
                            app.alert.show('message-id', {
                                level: 'info',
                                messages: 'No clients assigned to you',
                                autoClose: true
                            });
                        }
                    }, this)
                });
            },
            error: function (e) {
                app.error.handleHttpError(e, {});
            },
        });
    },
    closePopup: function (record, index, length, attachment) {
        var self = this;
        var toAddress = this.emailObject(record[0]["email_to"]);
        var ccAddress = this.emailObject(record[0]["email_cc"]);
        var bccAddress = this.emailObject(record[0]["email_bcc"]);
        app.drawer.open({
            layout: 'compose',
            context: {
                create: true,
                prepopulate: {
                    to_addresses: toAddress,
                    cc_addresses: ccAddress,
                    bcc_addresses: bccAddress,
                    sorting_id: record[0]["sortingId"],
                    client_id: record[0]["id"],
                    subject: 'Murano Investor Report - ' + record[0]["leadName"],
                    attachments: attachment,
                    type: 'document',
                },
                module: 'Emails',
            }
        },
                function () {
                    if (index < length) {
                        index++;
                        if (typeof self.clientData[index] != "undefined") {
                            self.closePopup(self.clientData[index], index, length, attachment);

                        } else {
                            var docIds = [];
                            var url = app.api.buildURL('Sorting/deleteDocs/' + attachment);
                            app.api.call('read', url, null, {
                                success: _.bind(function (data) {
                                }, this)
                            });
                        }

                    }
                }
        );
    },
    emailObject: function (value) {
        var result = [];
        if (value != null) {
            value = value.replace(/\s+/g, '');
            var emails = value.split(";");
            for (var i = 0; i < emails.length; i++) {
                var record = {
                    'email': emails[i],
                    'module': 'mur_client_n_list',
                    'name': emails[i]
                };
                result.push(record);
            }
        }
        return result;
    }
})

