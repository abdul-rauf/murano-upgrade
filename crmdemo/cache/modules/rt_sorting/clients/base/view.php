<?php
$clientCache['rt_sorting']['base']['view'] = array (
  'customCreate' => 
  array (
    'controller' => 
    array (
      'base' => '/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
({
    extendsFrom: \'CreateView\',
    initialize: function (options) {
        this._super(\'initialize\', [options]);
        this.events[\'click #add_client\'] = \'addClient\';
        this.events[\'click #question_mark\'] = \'addToQmark\';
        this.events[\'click #no\'] = \'removeFromQuestionMarked\';
        this.events[\'click #yes\'] = \'moveToClients\';
        this.events[\'focus input[name="name"]\'] = \'makeReadonlySubject\';
        this.model.on("change:assigned_team", this.autoPopulateSubject, this);
        this.model.set("assigned_team", "");
        if (typeof this.model.link != "undefined")
            this.model.set(\'description\', this.model.link.bean.attributes.account_description);
    },
    addClient: function () {
        var data = this.model.get("confirmed_clients");
        var pclient = this.model.get("potential_clients");
        if (typeof data != "undefined") {
            var dataArray = data.split("\\n");
            for (var i = 0; i < dataArray.length; i++) {
                if (dataArray[i].search(pclient) > -1) {
                    return;
                }
            }
        }

        if (typeof data != "undefined" && typeof pclient != "undefined" && pclient != "")
            data = pclient + "\\n" + data;
        else {
            if (pclient != "" && typeof pclient != "undefined")
                data = pclient + "\\n";
        }
        this.model.set("confirmed_clients", data);
    },
    addToQmark: function () {
        var self = this;
        var data = this.model.get("question_marks");
        var pclient = this.model.get("potential_clients");
        if (typeof data != "undefined" && typeof pclient != "undefined" && pclient != "")
            data = pclient + "? \\n" + data;
        else {
            if (pclient != "" && typeof pclient != "undefined")
                data = pclient + "? \\n";
        }
        this.model.set("question_marks", data);
    },
    autoPopulateSubject: function () {
        var team_value = this.model.get("assigned_team");
        var lead_id = this.model.get("rt_sorting_leadsleads_ida");
        if (team_value != "" && lead_id != "") {
            var getSubjectName = app.api.buildURL(\'Sorting/subjectCounter/\' + team_value + \'/\' + lead_id);
            app.api.call(\'read\', getSubjectName, null, {
                success: _.bind(function (data) {
                    this.model.set("name", data);
                }, this)
            });
        }

    },
    makeReadonlySubject: function () {
        if (app.user.get(\'type\') != \'admin\') {
            $("input[name=\'name\']").attr(\'readonly\', true);
        }
    },
    removeFromQuestionMarked: function () {
        var questionValue = this.model.get("question_marks");
        var pclient = this.model.get("potential_clients");
        pclient = pclient + \'?\';
        var dataArray = questionValue.split("\\n");
        for (var i = 0; i < dataArray.length; i++) {
            if (dataArray[i].search(pclient) > -1) {
                dataArray.splice(i, 1);
                break;
            }
        }
        var updateValue = "";
        for (var i = 0; i < dataArray.length; i++) {
            if (dataArray[i] != "")
                updateValue += dataArray[i] + "\\n";
        }
        this.model.set("question_marks", updateValue);
    },
    moveToClients: function () {
        var questionValue = this.model.get("question_marks");
        var pclient = this.model.get("potential_clients");
        pclient = pclient + \'?\';
        var dataArray = questionValue.split("\\n");
        for (var i = 0; i < dataArray.length; i++) {
            if (dataArray[i].search(pclient) > -1) {
                dataArray.splice(i, 1);
                this.addClient();
                this.removeFromQuestionMarked();
            }
        }
    },
})

',
    ),
  ),
  'customCreate-actions' => 
  array (
    'controller' => 
    array (
      'base' => '/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
({
    extendsFrom: \'CreateView\',
    initialize: function (options) {
        this._super(\'initialize\', [options]);
        this.events[\'click #add_client\'] = \'addClient\';
        this.events[\'click #question_mark\'] = \'addToQmark\';
        this.events[\'click #no\'] = \'removeFromQuestionMarked\';
        this.events[\'click #yes\'] = \'moveToClients\';
        this.events[\'focus input[name="name"]\'] = \'makeReadonlySubject\';
        this.model.on("change:assigned_team", this.autoPopulateSubject, this);
        this.model.set("assigned_team", "");
        if (typeof this.model.link != "undefined")
            this.model.set(\'description\', this.model.link.bean.attributes.account_description);
    },
    addClient: function () {
        var data = this.model.get("confirmed_clients");
        var pclient = this.model.get("potential_clients");
        if (typeof data != "undefined" && data != "") {
            var dataArray = data.split("\\n");
            for (var i = 0; i < dataArray.length; i++) {
                if (dataArray[i].search(pclient) > -1) {
                    return;
                }
            }
        }

        if (typeof data != "undefined" && typeof pclient != "undefined" && pclient != "")
            data = pclient + "\\n" + data;
        else {
            if (pclient != "" && typeof pclient != "undefined")
                data = pclient + "\\n";
        }
        this.model.set("confirmed_clients", data);
    },
    addToQmark: function () {
        var self = this;
        var data = this.model.get("question_marks");
        var pclient = this.model.get("potential_clients");
        if (typeof data != "undefined" && typeof pclient != "undefined" && pclient != "")
            data = pclient + "? \\n" + data;
        else {
            if (pclient != "" && typeof pclient != "undefined")
                data = pclient + "? \\n";
        }
        this.model.set("question_marks", data);
    },
    autoPopulateSubject: function () {
        var team_value = this.model.get("assigned_team");
        var lead_id = this.model.get("rt_sorting_leadsleads_ida");
        if (team_value != "" && lead_id != "") {
            var getSubjectName = app.api.buildURL(\'Sorting/subjectCounter/\' + team_value + \'/\' + lead_id);
            app.api.call(\'read\', getSubjectName, null, {
                success: _.bind(function (data) {
                    this.model.set("name", data);
                }, this)
            });
        }

    },
    makeReadonlySubject: function () {
        if (app.user.get(\'type\') != \'admin\') {
            $("input[name=\'name\']").attr(\'readonly\', true);
        }
    },
    removeFromQuestionMarked: function () {
        var questionValue = this.model.get("question_marks");
        var pclient = this.model.get("potential_clients");
        pclient = pclient + \'?\';
        var dataArray = questionValue.split("\\n");
        for (var i = 0; i < dataArray.length; i++) {
            if (dataArray[i].search(pclient) > -1) {
                dataArray.splice(i, 1);
                break;
            }
        }
        var updateValue = "";
        for (var i = 0; i < dataArray.length; i++) {
            if (dataArray[i] != "")
                updateValue += dataArray[i] + "\\n";
        }
        this.model.set("question_marks", updateValue);
    },
    moveToClients: function () {
        var questionValue = this.model.get("question_marks");
        var pclient = this.model.get("potential_clients");
        pclient = pclient + \'?\';
        var dataArray = questionValue.split("\\n");
        for (var i = 0; i < dataArray.length; i++) {
            if (dataArray[i].search(pclient) > -1) {
                dataArray.splice(i, 1);
                this.addClient();
                this.removeFromQuestionMarked();
            }
        }
    },
})


',
    ),
  ),
  'customDashablelist' => 
  array (
    'controller' => 
    array (
      'base' => '/*
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
    extendsFrom: \'DashablelistView\',
    initialize: function (options) {
        this._super(\'initialize\', [options]);
        this.events[\'click .ellipsis_inline_1\'] = \'openQuestionMarks\';
    },
    _getColumnsForDisplay: function () {
        var checkQuestions = "";
        var columns = [],
                fields = this.getFieldMetaForView(this._getListMeta(this.settings.get(\'module\')));
        if (!this.settings.get(\'display_columns\')) {
            this._updateDisplayColumns();
        }
        if (!this.settings.get(\'linked_fields\')) {
            this.updateLinkedFields(this.model.module);
        }
        _.each(this.settings.get(\'display_columns\'), function (name) {
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
            record_id: this.model.get(\'id\'),
        }, url = app.api.buildURL(\'rt_sorting/getsortingCount\', null, null, params);
        app.api.call(\'read\', url, null, {
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
        textArea.style.position = \'fixed\';
        textArea.style.top = 0;
        textArea.style.left = 0;
        textArea.style.width = \'2em\';
        textArea.style.height = \'2em\';
        textArea.style.padding = 0;
        textArea.style.border = \'none\';
        textArea.style.outline = \'none\';
        textArea.style.boxShadow = \'none\';
        textArea.style.background = \'transparent\';
        textArea.value = text;
        document.body.appendChild(textArea);
        textArea.select();
        try {
            var successful = document.execCommand(\'copy\');
            var msg = successful ? \'successful\' : \'unsuccessful\';
            console.log(\'Copying text command was \' + msg);
        } catch (err) {
            console.log(\'Oops, unable to copy\');
        }
        document.body.removeChild(textArea);
    },
    openQuestionMarks: function (e) {
        var self = this;
        var getQuestions = e.currentTarget.innerHTML;
        var getid1 = getQuestions.split("<");
        var sp_again = getid1[1].split("=");
        var spl_1 = sp_again[1].split(">");
        var spl_2 = spl_1[0].split("\\"");
        var spl_3 = spl_2[1].split("\\"");
        var clickid = spl_3[0];
        var pop_detail = "";
        for (var i = 0; i < self.collection.models.length; i++) {
            var loopid = self.collection.models[i].attributes.id;
            if (loopid == clickid) {
                var questiontStr = self.collection.models[i].attributes.question_marks;
                var firstSpt = questiontStr.split("\\n");
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
        app.alert.show(\'Question Marks Description\', {
            level: \'confirmation\',
            title: \'Question Marks Detail\' + self.changebuttontext(),
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
})   ',
    ),
  ),
  'list' => 
  array (
    'meta' => 
    array (
      'panels' => 
      array (
        0 => 
        array (
          'label' => 'LBL_PANEL_1',
          'fields' => 
          array (
            0 => 
            array (
              'name' => 'date_entered',
              'width' => '9%',
              'default' => true,
              'enabled' => true,
            ),
            1 => 
            array (
              'name' => 'rt_sorting_leads_name',
              'default' => true,
              'enabled' => true,
              'link' => true,
              'width' => '10%',
            ),
            2 => 
            array (
              'name' => 'assigned_user_name',
              'label' => 'LBL_ASSIGNED_TO_NAME',
              'width' => '9%',
              'default' => true,
              'enabled' => true,
              'link' => true,
            ),
            3 => 
            array (
              'name' => 'account_name',
              'label' => 'LBL_ACCOUNT_NAME',
              'enabled' => true,
              'sortable' => true,
              'width' => '10%',
              'default' => true,
            ),
            4 => 
            array (
              'name' => 'primary_address_country',
              'label' => 'LBL_PRIMARY_ADDRESS_COUNTRY',
              'enabled' => true,
              'width' => '10%',
              'default' => true,
            ),
            5 => 
            array (
              'name' => 'assigned_team',
              'label' => 'LBL_ASSIGNED_TEAM',
              'enabled' => true,
              'width' => '10%',
              'default' => true,
            ),
            6 => 
            array (
              'name' => 'spaces',
              'label' => 'LBL_SPACES',
              'enabled' => true,
              'width' => '10%',
              'default' => true,
            ),
            7 => 
            array (
              'name' => 'report_status',
              'label' => 'LBL_REPORT_STATUS',
              'enabled' => true,
              'width' => '10%',
              'default' => true,
            ),
            8 => 
            array (
              'name' => 'confirmed_clients',
              'label' => 'LBL_CONFIRMED_CLIENTS',
              'enabled' => true,
              'width' => '10%',
              'default' => true,
            ),
            9 => 
            array (
              'name' => 'email_timestamp',
              'label' => 'LBL_EMAIL_TIMESTAMP',
              'enabled' => true,
              'width' => '10%',
              'default' => true,
            ),
            10 => 
            array (
              'name' => 'feedback_received_c',
              'label' => 'LBL_FEEDBACK_RECEIVED',
              'enabled' => true,
              'sortable' => false,
              'width' => '10%',
              'default' => true,
            ),
            11 => 
            array (
              'name' => 'greenreport_c',
              'label' => 'LBL_GREENREPORT_C',
              'enabled' => true,
              'width' => '10%',
              'default' => true,
            ),
            12 => 
            array (
              'name' => 'total_point_c',
              'label' => 'LBL_TOTAL_POINT',
              'enabled' => true,
              'width' => '10%',
              'default' => true,
            ),
            13 => 
            array (
              'name' => 'amendments',
              'label' => 'LBL_AMENDMENTS',
              'enabled' => true,
              'sortable' => false,
              'width' => '10%',
              'default' => false,
            ),
            14 => 
            array (
              'name' => 'last_amended_modified',
              'label' => 'LBL_LAST_AMENDED_MODIFIED',
              'enabled' => true,
              'width' => '10%',
              'default' => false,
            ),
            15 => 
            array (
              'name' => 'name',
              'label' => 'LBL_NAME',
              'default' => false,
              'enabled' => true,
              'link' => true,
              'width' => '10%',
            ),
            16 => 
            array (
              'name' => 'potential_clients',
              'label' => 'LBL_POTENTIAL_CLIENTS',
              'enabled' => true,
              'width' => '10%',
              'default' => false,
            ),
            17 => 
            array (
              'name' => 'last_spoke_date',
              'label' => 'LBL_LAST_SPOKE_DATE',
              'enabled' => true,
              'width' => '10%',
              'default' => false,
            ),
            18 => 
            array (
              'name' => 'feedback_date1_c',
              'label' => 'LBL_FEEDBACK_DATE1_C',
              'enabled' => true,
              'width' => '10%',
              'default' => false,
            ),
            19 => 
            array (
              'name' => 'no_of_days_c',
              'label' => 'LBL_NO_OF_DAYS_C',
              'enabled' => true,
              'width' => '10%',
              'default' => false,
            ),
            20 => 
            array (
              'name' => 'feedback_points1_c',
              'label' => 'LBL_FEEDBACK_POINTS1_C',
              'enabled' => true,
              'width' => '10%',
              'default' => false,
            ),
            21 => 
            array (
              'name' => 'modified_by_name',
              'label' => 'LBL_MODIFIED',
              'enabled' => true,
              'readonly' => true,
              'id' => 'MODIFIED_USER_ID',
              'link' => true,
              'sortable' => false,
              'width' => '10%',
              'default' => false,
            ),
            22 => 
            array (
              'name' => 'question_marks',
              'label' => 'LBL_QUESTION_MARKS',
              'enabled' => true,
              'sortable' => false,
              'width' => '10%',
              'default' => false,
            ),
            23 => 
            array (
              'name' => 'description',
              'label' => 'LBL_DESCRIPTION',
              'enabled' => true,
              'sortable' => false,
              'width' => '10%',
              'default' => false,
            ),
            24 => 
            array (
              'name' => 'lead_status',
              'label' => 'LBL_LEAD_STATUS',
              'enabled' => true,
              'width' => '10%',
              'default' => false,
            ),
            25 => 
            array (
              'name' => 'created_by_name',
              'label' => 'LBL_CREATED',
              'enabled' => true,
              'readonly' => true,
              'id' => 'CREATED_BY',
              'link' => true,
              'sortable' => false,
              'width' => '10%',
              'default' => false,
            ),
            26 => 
            array (
              'name' => 'team_name',
              'label' => 'LBL_TEAM',
              'width' => '9%',
              'default' => false,
              'enabled' => true,
            ),
            27 => 
            array (
              'name' => 'date_modified',
              'label' => 'LBL_DATE_MODIFIED',
              'enabled' => true,
              'readonly' => true,
              'width' => '10%',
              'default' => false,
            ),
            28 => 
            array (
              'name' => 'points_c',
              'label' => 'LBL_POINTS',
              'enabled' => true,
              'width' => '10%',
              'default' => false,
            ),
            29 => 
            array (
              'name' => 'green_point_c',
              'label' => 'LBL_GREEN_POINT',
              'enabled' => true,
              'width' => '10%',
              'default' => false,
            ),
            30 => 
            array (
              'name' => 'amended_date',
              'label' => 'LBL_RECENT_TIME_CHANGED',
              'default' => false,
              'enabled' => true,
              'link' => true,
              'width' => '10%',
            ),
          ),
        ),
      ),
      'orderBy' => 
      array (
        'field' => 'date_modified',
        'direction' => 'desc',
      ),
    ),
  ),
  'customRecord' => 
  array (
    'controller' => 
    array (
      'base' => '/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
({
    extendsFrom: \'RecordView\',
    count: 0,
    initialize: function (options) {
        this._super(\'initialize\', [options]);
        this.events[\'click #add_client\'] = \'addClient\';
        this.events[\'click #question_mark\'] = \'addToQmark\';
        this.events[\'click #no\'] = \'removeFromQuestionMarked\';
        this.events[\'click #yes\'] = \'moveToClients\';
        this.events[\'focus input[name="name"]\'] = \'makeReadonlySubject\';
        this.model.on("change:assigned_team", this.autoPopulateSubject, this);
    },
    addClient: function () {
        var data = this.model.get("confirmed_clients");
        var pclient = this.model.get("potential_clients");

        var dataArray = data.split("\\n");
        for (var i = 0; i < dataArray.length; i++) {
            if (dataArray[i].search(pclient) > -1) {
                return;
            }
        }

        if (typeof data != "undefined" && typeof pclient != "undefined" && pclient != "")
            data = pclient + "\\n" + data;
        else {
            if (pclient != "" && typeof pclient != "undefined")
                data = pclient + "\\n";
        }
        this.model.set("confirmed_clients", data);
    },
    addToQmark: function () {
        var self = this;
        var data = this.model.get("question_marks");
        var pclient = this.model.get("potential_clients");
        if (typeof data != "undefined" && typeof pclient != "undefined" && pclient != "")
            data = pclient + "? \\n" + data;
        else {
            if (pclient != "" && typeof pclient != "undefined")
                data = pclient + "? \\n";
        }
        this.model.set("question_marks", data);
    },
    autoPopulateSubject: function () {
        this.count++;
        var team_value = this.model.get("assigned_team");
        var lead_id = this.model.get("rt_sorting_leadsleads_ida");
        if (team_value != "" && lead_id != "" && this.count > 1) {
            var getSubjectName = app.api.buildURL(\'Sorting/subjectCounter/\' + team_value + \'/\' + lead_id);
            app.api.call(\'read\', getSubjectName, null, {
                success: _.bind(function (data) {
                    this.model.set("name", data);
                }, this)
            });
        }
    },
    removeFromQuestionMarked: function () {
        var questionValue = this.model.get("question_marks");
        var pclient = this.model.get("potential_clients");
        pclient = pclient + \'?\';
        var dataArray = questionValue.split("\\n");
        for (var i = 0; i < dataArray.length; i++) {
            if (dataArray[i].search(pclient) > -1) {
                dataArray.splice(i, 1);
                break;
            }
        }
        var updateValue = "";
        for (var i = 0; i < dataArray.length; i++) {
            if (dataArray[i] != "")
                updateValue += dataArray[i] + "\\n";
        }
        this.model.set("question_marks", updateValue);
    },
    moveToClients: function () {
        var questionValue = this.model.get("question_marks");
        var pclient = this.model.get("potential_clients");
        pclient = pclient + \'?\';
        var dataArray = questionValue.split("\\n");
        for (var i = 0; i < dataArray.length; i++) {
            if (dataArray[i].search(pclient) > -1) {
                dataArray.splice(i, 1);
                this.addClient();
                this.removeFromQuestionMarked();
            }
        }
    },
    makeReadonlySubject: function () {
        if (app.user.get(\'type\') != \'admin\') {
            $("input[name=\'name\']").attr(\'readonly\', true);
        }
    },
})

',
    ),
  ),
  'record' => 
  array (
    'meta' => 
    array (
      'panels' => 
      array (
        0 => 
        array (
          'name' => 'panel_header',
          'label' => 'LBL_RECORD_HEADER',
          'header' => true,
          'fields' => 
          array (
            0 => 
            array (
              'name' => 'picture',
              'type' => 'avatar',
              'width' => 42,
              'height' => 42,
              'dismiss_label' => true,
              'readonly' => true,
            ),
            1 => 'name',
            2 => 
            array (
              'name' => 'favorite',
              'label' => 'LBL_FAVORITE',
              'type' => 'favorite',
              'readonly' => true,
              'dismiss_label' => true,
            ),
            3 => 
            array (
              'name' => 'follow',
              'label' => 'LBL_FOLLOW',
              'type' => 'follow',
              'readonly' => true,
              'dismiss_label' => true,
            ),
          ),
        ),
        1 => 
        array (
          'name' => 'panel_body',
          'label' => 'LBL_RECORD_BODY',
          'columns' => 2,
          'labelsOnTop' => true,
          'placeholders' => true,
          'newTab' => false,
          'panelDefault' => 'expanded',
          'fields' => 
          array (
            0 => 
            array (
              'name' => 'assigned_team',
              'studio' => 'visible',
              'label' => 'LBL_ASSIGNED_TEAM',
            ),
            1 => 
            array (
              'name' => 'lead_status',
              'studio' => 'visible',
              'label' => 'LBL_LEAD_STATUS',
            ),
            2 => 
            array (
              'name' => 'spaces',
              'studio' => 'visible',
              'label' => 'LBL_SPACES',
            ),
            3 => 
            array (
              'name' => 'report_status',
              'studio' => 'visible',
              'label' => 'LBL_REPORT_STATUS',
            ),
            4 => 
            array (
              'name' => 'potential_clients',
              'studio' => 'visible',
              'label' => 'LBL_POTENTIAL_CLIENTS',
              'type' => 'screening',
            ),
            5 => 
            array (
              'name' => 'confirmed_clients',
              'studio' => 'visible',
              'label' => 'LBL_CONFIRMED_CLIENTS',
            ),
            6 => 
            array (
            ),
            7 => 
            array (
              'name' => 'question_marks',
              'type' => 'question_marked',
              'studio' => 'visible',
              'label' => 'LBL_QUESTION_MARKS',
            ),
            8 => 
            array (
              'name' => 'rt_sorting_leads_name',
            ),
            9 => 
            array (
              'name' => 'amendments',
              'studio' => 'visible',
              'label' => 'LBL_AMENDMENTS',
            ),
            10 => 
            array (
              'name' => 'date_modified_by',
              'readonly' => true,
              'type' => 'fieldset',
              'label' => 'LBL_DATE_MODIFIED',
              'fields' => 
              array (
                0 => 
                array (
                  'name' => 'date_modified',
                ),
                1 => 
                array (
                  'type' => 'label',
                  'default_value' => 'LBL_BY',
                ),
                2 => 
                array (
                  'name' => 'modified_by_name',
                ),
              ),
            ),
            11 => 
            array (
              'name' => 'amendments_completed_c',
              'studio' => 'visible',
              'label' => 'LBL_AMENDMENTS_COMPLETED',
            ),
            12 => 
            array (
              'name' => 'modified_by_name',
              'readonly' => true,
              'label' => 'LBL_MODIFIED',
              'span' => 12,
            ),
          ),
        ),
        2 => 
        array (
          'name' => 'panel_hidden',
          'label' => 'LBL_SHOW_MORE',
          'hide' => true,
          'columns' => 2,
          'labelsOnTop' => true,
          'placeholders' => true,
          'newTab' => false,
          'panelDefault' => 'expanded',
          'fields' => 
          array (
            0 => 
            array (
              'name' => 'assigned_user_name',
            ),
            1 => 
            array (
            ),
            2 => 
            array (
            ),
            3 => 
            array (
              'name' => 'feedback_date1_c',
              'label' => 'LBL_FEEDBACK_DATE1_C',
            ),
            4 => 
            array (
            ),
            5 => 
            array (
              'name' => 'feedback_received_c',
              'studio' => 'visible',
              'label' => 'LBL_FEEDBACK_RECEIVED',
            ),
            6 => 
            array (
            ),
            7 => 
            array (
            ),
            8 => 
            array (
              'span' => 12,
            ),
          ),
        ),
      ),
      'templateMeta' => 
      array (
        'useTabs' => false,
      ),
    ),
  ),
  'customRecordlist' => 
  array (
    'controller' => 
    array (
      'base' => '/*
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
    extendsFrom: \'RecordlistView\',
    clientData: [],
    initialize: function (options) { 
        this._super("initialize", [options]);

        if (this.layout) {
            this.layout.on(\'list:composeclients:fire\', this.composeClientClicked, this);
        }
    },
    composeClientClicked: function () { 
        var self = this;
        var sortingCollection = this.context.get(\'mass_collection\');
        var sortingIds = [];
        for (var i = 0; i < sortingCollection.length; i++) {
            sortingIds.push(sortingCollection.models[i].attributes.id);
        }
        var getClients = app.api.buildURL(\'Sorting/getMultiConfirmedClients/\' + sortingIds);
        app.api.call(\'read\', getClients, null, {
            success: _.bind(function (data) {
                var index = 0;
                this.clientData = data; 
                if (data != "") {
                    self.closePopup(this.clientData[0], index, data.length);
                } else {
                    app.alert.show(\'message-id\', {
                        level: \'info\',
                        messages: \'No clients assigned to you\',
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
            layout: \'compose\',
            context: {
                create: true,
                prepopulate: {
                    to_addresses: toAddress,
                    cc_addresses: ccAddress,
                    bcc_addresses: bccAddress,
                    sorting_id: record["sortingId"],
                    client_id: record["id"],
                    subject: \'Murano Investor Report - \' + record["leadName"],
                    attachments: record[\'noteId\'],
                    attach_length:record[\'noteId\'],// Added against Reportboard_bug_fixes
                    type: \'document\',
                },
                module: \'Emails\',
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
                                var url = app.api.buildURL(\'Sorting/deleteDocs/\' + self.clientData[i][\'noteId\']);
                                app.api.call(\'read\', url, null, {
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
            value = value.replace(/\\s+/g, \'\');
            var emails = value.split(";");
            for (var i = 0; i < emails.length; i++) {
                var record = {
                    \'email\': emails[i],
                    \'module\': \'mur_client_n_list\',
                    \'name\': emails[i]
                };
                result.push(record);
            }
        }
        return result;
    },
})
',
    ),
  ),
  'recordlist' => 
  array (
    'meta' => 
    array (
      'favorite' => true,
      'following' => true,
      'selection' => 
      array (
        'type' => 'multi',
        'actions' => 
        array (
          0 => 
          array (
            'name' => 'edit_button',
            'type' => 'button',
            'label' => 'LBL_MASS_UPDATE',
            'primary' => true,
            'events' => 
            array (
              'click' => 'list:massupdate:fire',
            ),
            'acl_action' => 'massupdate',
          ),
          1 => 
          array (
            'name' => 'calc_field_button',
            'type' => 'button',
            'label' => 'LBL_UPDATE_CALC_FIELDS',
            'events' => 
            array (
              'click' => 'list:updatecalcfields:fire',
            ),
            'acl_action' => 'massupdate',
          ),
          2 => 
          array (
            'name' => 'merge_button',
            'type' => 'button',
            'label' => 'LBL_MERGE',
            'primary' => true,
            'events' => 
            array (
              'click' => 'list:mergeduplicates:fire',
            ),
            'acl_action' => 'edit',
          ),
          3 => 
          array (
            'name' => 'compose_client',
            'type' => 'button',
            'label' => 'LBL_COMPOSE_CLIENT',
            'acl_action' => 'edit',
            'primary' => true,
            'events' => 
            array (
              'click' => 'list:composeclients:fire',
            ),
          ),
          4 => 
          array (
            'name' => 'export_button',
            'type' => 'button',
            'label' => 'LBL_EXPORT',
            'acl_action' => 'export',
            'primary' => true,
            'events' => 
            array (
              'click' => 'list:massexport:fire',
            ),
          ),
        ),
      ),
      'rowactions' => 
      array (
        'actions' => 
        array (
          0 => 
          array (
            'type' => 'rowaction',
            'css_class' => 'btn',
            'tooltip' => 'LBL_PREVIEW',
            'event' => 'list:preview:fire',
            'icon' => 'icon-eye-open',
            'acl_action' => 'view',
          ),
          1 => 
          array (
            'type' => 'rowaction',
            'name' => 'edit_button',
            'label' => 'LBL_EDIT_BUTTON',
            'event' => 'list:editrow:fire',
            'acl_action' => 'edit',
          ),
          2 => 
          array (
            'type' => 'follow',
            'name' => 'follow_button',
            'event' => 'list:follow:fire',
            'acl_action' => 'view',
          ),
          3 => 
          array (
            'type' => 'rowaction',
            'name' => 'delete_button',
            'event' => 'list:deleterow:fire',
            'label' => 'LBL_DELETE_BUTTON',
            'acl_action' => 'delete',
          ),
        ),
      ),
      'last_state' => 
      array (
        'id' => 'record-list',
      ),
    ),
  ),
  'customSubpanel-list' => 
  array (
    'controller' => 
    array (
      'base' => '/*
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
    extendsFrom: \'SubpanelListView\',
    clientData: [],
    initialize: function (options) {
        this._super("initialize", [options]);
        this.context.on(\'list:composeclients:fire\', this.openPopups, this);

    },
    openPopups: function () {
        var self = this;
        var templateName = \'Murano Investor Report\';
        var sortingCollection = this.context.get(\'collection\');
        var sortingIds = [];
        for (var i = 0; i < sortingCollection.length; i++) {
            sortingIds.push(sortingCollection.models[i].attributes.id);
        }
        var leadId = sortingCollection.link.bean.attributes.id;
        var url = app.api.buildURL(\'Leads\' + \'/\' + \'generateWPDF/\' + leadId + \'/\' + templateName);
        app.api.call(\'GET\', url, null, {
            success: function (o) {
                var attachment = new Array();
                attachment[0] = o;
                var getClients = app.api.buildURL(\'Sorting/getConfirmedClients/\' + sortingIds);
                app.api.call(\'read\', getClients, null, {
                    success: _.bind(function (data) {
                        var index = 0;
                        self.clientData = data;
                        if (data != "") {
                            self.closePopup(self.clientData[0], index, data.length, attachment);
                        } else {
                            app.alert.show(\'message-id\', {
                                level: \'info\',
                                messages: \'No clients assigned to you\',
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
            layout: \'compose\',
            context: {
                create: true,
                prepopulate: {
                    to_addresses: toAddress,
                    cc_addresses: ccAddress,
                    bcc_addresses: bccAddress,
                    sorting_id: record[0]["sortingId"],
                    client_id: record[0]["id"],
                    subject: \'Murano Investor Report - \' + record[0]["leadName"],
                    attachments: attachment,
                    type: \'document\',
                },
                module: \'Emails\',
            }
        },
                function () {
                    if (index < length) {
                        index++;
                        if (typeof self.clientData[index] != "undefined") {
                            self.closePopup(self.clientData[index], index, length, attachment);

                        } else {
                            var docIds = [];
                            var url = app.api.buildURL(\'Sorting/deleteDocs/\' + attachment);
                            app.api.call(\'read\', url, null, {
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
            value = value.replace(/\\s+/g, \'\');
            var emails = value.split(";");
            for (var i = 0; i < emails.length; i++) {
                var record = {
                    \'email\': emails[i],
                    \'module\': \'mur_client_n_list\',
                    \'name\': emails[i]
                };
                result.push(record);
            }
        }
        return result;
    }
})

',
    ),
  ),
  'subpanel-list' => 
  array (
    'meta' => 
    array (
      'panels' => 
      array (
        0 => 
        array (
          'name' => 'panel_header',
          'label' => 'LBL_PANEL_1',
          'fields' => 
          array (
            0 => 
            array (
              'label' => 'LBL_NAME',
              'enabled' => true,
              'default' => true,
              'name' => 'name',
              'link' => true,
            ),
            1 => 
            array (
              'label' => 'Date Created',
              'enabled' => true,
              'default' => true,
              'name' => 'date_created',
            ),
            2 => 
            array (
              'label' => 'LBL_REPORT_STATUS',
              'enabled' => true,
              'default' => true,
              'name' => 'report_status',
            ),
            3 => 
            array (
              'label' => 'LBL_SPACES',
              'enabled' => true,
              'default' => true,
              'name' => 'spaces',
            ),
            4 => 
            array (
              'label' => 'LBL_LAST_AMENDED_MODIFIED',
              'enabled' => true,
              'default' => true,
              'name' => 'last_amended_modified',
            ),
            5 => 
            array (
              'label' => 'LBL_DATE_MODIFIED',
              'enabled' => true,
              'default' => true,
              'name' => 'date_modified',
            ),
          ),
        ),
      ),
      'rowactions' => 
      array (
        'actions' => 
        array (
          0 => 
          array (
            'type' => 'rowaction',
            'css_class' => 'btn',
            'tooltip' => 'LBL_PREVIEW',
            'event' => 'list:preview:fire',
            'icon' => 'fa-eye',
            'acl_action' => 'view',
          ),
          1 => 
          array (
            'type' => 'rowaction',
            'name' => 'edit_button',
            'icon' => 'fa-pencil',
            'label' => 'LBL_EDIT_BUTTON',
            'event' => 'list:editrow:fire',
            'acl_action' => 'edit',
          ),
          2 => 
          array (
            'type' => 'rowaction',
            'name' => 'compose_button',
            'icon' => 'fa-pencil',
            'label' => 'Compose To Clients',
            'event' => 'list:composeclients:fire',
            'acl_action' => 'view',
          ),
          3 => 
          array (
            'type' => 'unlink-action',
            'icon' => 'fa-chain-broken',
            'label' => 'LBL_UNLINK_BUTTON',
          ),
        ),
      ),
      'orderBy' => 
      array (
        'field' => 'date_modified',
        'direction' => 'desc',
      ),
    ),
  ),
  'massupdate' => 
  array (
    'meta' => 
    array (
      'buttons' => 
      array (
        0 => 
        array (
          'type' => 'button',
          'value' => 'cancel',
          'css_class' => 'btn-link btn-invisible cancel_button',
          'label' => 'LBL_CANCEL_BUTTON_LABEL',
          'primary' => false,
        ),
        1 => 
        array (
          'name' => 'update_button',
          'type' => 'button',
          'label' => 'LBL_UPDATE',
          'acl_action' => 'massupdate',
          'css_class' => 'btn-primary',
          'primary' => true,
        ),
      ),
      'panels' => 
      array (
        0 => 
        array (
          'fields' => 
          array (
          ),
        ),
      ),
    ),
  ),
  'selection-list' => 
  array (
    'meta' => 
    array (
      'panels' => 
      array (
        0 => 
        array (
          'label' => 'LBL_PANEL_1',
          'fields' => 
          array (
            0 => 
            array (
              'name' => 'name',
              'label' => 'LBL_NAME',
              'default' => true,
              'enabled' => true,
              'link' => true,
            ),
            1 => 
            array (
              'name' => 'team_name',
              'label' => 'LBL_TEAM',
              'width' => 9,
              'default' => true,
              'enabled' => true,
            ),
            2 => 
            array (
              'name' => 'assigned_user_name',
              'label' => 'LBL_ASSIGNED_TO_NAME',
              'width' => 9,
              'default' => true,
              'enabled' => true,
              'link' => true,
            ),
            3 => 
            array (
              'label' => 'LBL_DATE_MODIFIED',
              'enabled' => true,
              'default' => true,
              'name' => 'date_modified',
              'readonly' => true,
            ),
          ),
        ),
      ),
      'orderBy' => 
      array (
        'field' => 'date_modified',
        'direction' => 'desc',
      ),
    ),
  ),
  '_hash' => '6bfe736a8ca647354ce6e0c9b65e1614',
);

