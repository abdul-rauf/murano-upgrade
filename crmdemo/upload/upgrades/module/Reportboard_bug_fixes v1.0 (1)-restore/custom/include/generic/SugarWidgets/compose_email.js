/* 
 * Open EMail Drawers and populate To, CC, BCc fields 
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

var clientData = [];
function openPopups(module_name, record_id, leadId) {
    var app = window.parent.SUGAR.App;
    var templateName = 'Murano Investor Report';

    var url = app.api.buildURL('Leads' + '/' + 'generateWPDF/' + leadId + '/' + templateName);
    app.api.call('GET', url, null, {
        success: function (o) {
            var attachment = new Array();
            attachment[0] = o;
            var getClients = app.api.buildURL('Sorting/getConfirmedClients/' + record_id);
            app.api.call('read', getClients, null, {
                success: _.bind(function (data) {
                    var index = 0;
                    clientData = data;
                    if (data != "") {
                        closePopup(clientData[0], index, data.length, attachment);
                    } else {
                        app.alert.show('message-id', {
                            level: 'info',
                            messages: 'No clients assigned to you',
                            autoClose: true
                        });
                    }
                }, this)
            });
//            console.log(o);
        },
        error: function (e) {
            app.error.handleHttpError(e, {});
        },
    });

}
function closePopup(record, index, length, attachment) {
    var app = window.parent.SUGAR.App;
    var toAddress = emailObject(record[0]["email_to"]);
    var ccAddress = emailObject(record[0]["email_cc"]);
    var bccAddress = emailObject(record[0]["email_bcc"]);
    var app = window.parent.SUGAR.App;
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
                console.log("dsa");
                if (index < length) {
                    console.log("d133sa");
                    index++;
                    if (typeof clientData[index] != "undefined") {
                        closePopup(clientData[index], index, length, attachment);

                    } else {
                        var docIds = [];
                        console.log("else");
                        console.log(attachment);
                        var url = app.api.buildURL('Sorting/deleteDocs/' + attachment);
                        app.api.call('read', url, null, {
                            success: _.bind(function (data) {
                            }, this)
                        });
                    }

                }
            }
    );
}
function emailObject(value) {
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