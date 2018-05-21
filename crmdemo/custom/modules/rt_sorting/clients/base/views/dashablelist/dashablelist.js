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
    extendsFrom: 'DashablelistView',
    initialize: function (options) {
        this._super('initialize', [options]);
        this.events['click .ellipsis_inline_1'] = 'openQuestionMarks';
    },
    _getColumnsForDisplay: function () {
        var checkQuestions = "";
        var columns = [],
                fields = this.getFieldMetaForView(this._getListMeta(this.settings.get('module')));
        if (!this.settings.get('display_columns')) {
            this._updateDisplayColumns();
        }
        if (!this.settings.get('linked_fields')) {
            this.updateLinkedFields(this.model.module);
        }
        _.each(this.settings.get('display_columns'), function (name) {
            var field = _.find(fields, function (field) {
                return field.name === name;
            }, this);
            var column = _.extend({
                name: name,
                sortable: true
            }, field || {
            });
            if(name == "question_marks"){
                this.customquestionMarks(columns);
            }
            columns.push(column);
        }, this);
        columns = app.metadata._patchFields(this.module, app.metadata.getModule(this.module), columns);
        return columns;
    },
    customquestionMarks: function (columns) {
        var self = this;
        var params = {
            record_id: this.model.get('id'),
        }, url = app.api.buildURL('rt_sorting/getsortingCount', null, null, params);
        app.api.call('read', url, null, {
            success: function (serverData) {
                var indx;
                var auto_number = 1;
                for (indx = 0; indx < serverData.column_count; indx++) {
                    var check = {default: true, enabled: true, label: "Client Name " + auto_number, link: true, name: "client" + auto_number, sortable: false, type: "client", width: "10%"};
                    columns.push(check);
                    auto_number++;
                }
                self.render();

            },
        });
    },
    changebuttontext: function () {
        var emptyStr = "";
        setTimeout(function () {
            $(".alert-btn-cancel").text("Close");
            $(".alert-btn-confirm").text("Copy");
        }, 100);
        return emptyStr;
    },
    copyTextToClipboard: function (text) {
        var textArea = document.createElement("textarea");
        textArea.style.position = 'fixed';
        textArea.style.top = 0;
        textArea.style.left = 0;
        textArea.style.width = '2em';
        textArea.style.height = '2em';
        textArea.style.padding = 0;
        textArea.style.border = 'none';
        textArea.style.outline = 'none';
        textArea.style.boxShadow = 'none';
        textArea.style.background = 'transparent';
        textArea.value = text;
        document.body.appendChild(textArea);
        textArea.select();
        try {
            var successful = document.execCommand('copy');
            var msg = successful ? 'successful' : 'unsuccessful';
            console.log('Copying text command was ' + msg);
        } catch (err) {
            console.log('Oops, unable to copy');
        }
        document.body.removeChild(textArea);
    },
    openQuestionMarks: function (e) {
        var self = this;
        var getQuestions = e.currentTarget.innerHTML;
        var getid1 = getQuestions.split("<");
        var sp_again = getid1[1].split("=");
        var spl_1 = sp_again[1].split(">");
        var spl_2 = spl_1[0].split("\"");
        var spl_3 = spl_2[1].split("\"");
        var clickid = spl_3[0];
        var pop_detail = "";
        for (var i = 0; i < self.collection.models.length; i++) {
            var loopid = self.collection.models[i].attributes.id;
            if (loopid == clickid) {
                var questiontStr = self.collection.models[i].attributes.question_marks;
                var firstSpt = questiontStr.split("\n");
                var auto_nbr = 1;
                for (indx = 0; indx < firstSpt.length; indx++) {
                    var secSplit = firstSpt[indx].split("?");
                    if (secSplit[0] == e.toElement.innerText) {
                        pop_detail = secSplit[1];
                    }
                    auto_nbr++;
                }
            }
        }
        app.alert.show('Question Marks Description', {
            level: 'confirmation',
            title: 'Question Marks Detail' + self.changebuttontext(),
            messages: app.lang.get(pop_detail, self.module),
            autoClose: false,
            onConfirm: function () {
                self.copyTextToClipboard(pop_detail);
            },
            onCancel: function () {
                //Do Nothing
            }
        });
    },
})   