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
({
    extendsFrom: 'RecordlistView',
    clientData: [],
    initialize: function (options) {
        this._super("initialize", [options]);

        if (this.layout) {
            this.layout.on('list:composeclients:fire', this.composeClientClicked, this);
        }
    },
    composeClientClicked: function () {
        var self = this;
        var sortingCollection = this.context.get('mass_collection');
        var sortingIds = [];
        for (var i = 0; i < sortingCollection.length; i++) {
            sortingIds.push(sortingCollection.models[i].attributes.id);
        }
        var getClients = app.api.buildURL('Sorting/getMultiConfirmedClients/' + sortingIds);
        app.api.call('read', getClients, null, {
            success: _.bind(function (data) {
                var index = 0;
                this.clientData = data;
                if (data != "") {
                    self.closePopup(this.clientData[0], index, data.length);
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
    closePopup: function (record, index, length) {
        var self = this;
        var toAddress = this.emailObject(record["email_to"]);
        var ccAddress = this.emailObject(record["email_cc"]);
        var bccAddress = this.emailObject(record["email_bcc"]);
        app.drawer.open({
            layout: 'compose',
            context: {
                create: true,
                prepopulate: {
                    to_addresses: toAddress,
                    cc_addresses: ccAddress,
                    bcc_addresses: bccAddress,
                    sorting_id: record["sortingId"],
                    client_id: record["id"],
                    subject: 'Murano Investor Report - ' + record["leadName"],
                    attachments: record['noteId'],
                    type: 'document',
                },
                module: 'Emails',
            }
        },
                function () {
                    if (index < length) {
                        index++;
                        if (typeof self.clientData[index] != "undefined") {
                            self.closePopup(self.clientData[index], index, length);
                        } else {
                            var attac = [];
                            for (var i = 0; i < self.clientData.length; i++) {
                                var url = app.api.buildURL('Sorting/deleteDocs/' + self.clientData[i]['noteId']);
                                app.api.call('read', url, null, {
                                    success: _.bind(function (data) {
                                    }, this)
                                });
                            }
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
    },
})