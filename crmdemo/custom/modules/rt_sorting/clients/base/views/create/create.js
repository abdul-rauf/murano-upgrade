/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
({
    extendsFrom: 'CreateView',
    initialize: function (options) {
        this._super('initialize', [options]);
        this.events['click #add_client'] = 'addClient';
        this.events['click #question_mark'] = 'addToQmark';
        this.events['click #no'] = 'removeFromQuestionMarked';
        this.events['click #yes'] = 'moveToClients';
        this.events['focus input[name="name"]'] = 'makeReadonlySubject';
        this.model.on("change:assigned_team", this.autoPopulateSubject, this);
        this.model.set("assigned_team", "");
        if (typeof this.model.link != "undefined")
            this.model.set('description', this.model.link.bean.attributes.account_description);
    },
    addClient: function () {
        var data = this.model.get("confirmed_clients");
        var pclient = this.model.get("potential_clients");
        if (typeof data != "undefined") {
            var dataArray = data.split("\n");
            for (var i = 0; i < dataArray.length; i++) {
                if (dataArray[i].search(pclient) > -1) {
                    return;
                }
            }
        }

        if (typeof data != "undefined" && typeof pclient != "undefined" && pclient != "")
            data = pclient + "\n" + data;
        else {
            if (pclient != "" && typeof pclient != "undefined")
                data = pclient + "\n";
        }
        this.model.set("confirmed_clients", data);
    },
    addToQmark: function () {
        var self = this;
        var data = this.model.get("question_marks");
        var pclient = this.model.get("potential_clients");
        if (typeof data != "undefined" && typeof pclient != "undefined" && pclient != "")
            data = pclient + "? \n" + data;
        else {
            if (pclient != "" && typeof pclient != "undefined")
                data = pclient + "? \n";
        }
        this.model.set("question_marks", data);
    },
    autoPopulateSubject: function () {
        var team_value = this.model.get("assigned_team");
        var lead_id = this.model.get("rt_sorting_leadsleads_ida");
        if (team_value != "" && lead_id != "") {
            var getSubjectName = app.api.buildURL('Sorting/subjectCounter/' + team_value + '/' + lead_id);
            app.api.call('read', getSubjectName, null, {
                success: _.bind(function (data) {
                    this.model.set("name", data);
                }, this)
            });
        }

    },
    makeReadonlySubject: function () {
        if (app.user.get('type') != 'admin') {
            $("input[name='name']").attr('readonly', true);
        }
    },
    removeFromQuestionMarked: function () {
        var questionValue = this.model.get("question_marks");
        var pclient = this.model.get("potential_clients");
        pclient = pclient + '?';
        var dataArray = questionValue.split("\n");
        for (var i = 0; i < dataArray.length; i++) {
            if (dataArray[i].search(pclient) > -1) {
                dataArray.splice(i, 1);
                break;
            }
        }
        var updateValue = "";
        for (var i = 0; i < dataArray.length; i++) {
            if (dataArray[i] != "")
                updateValue += dataArray[i] + "\n";
        }
        this.model.set("question_marks", updateValue);
    },
    moveToClients: function () {
        var questionValue = this.model.get("question_marks");
        var pclient = this.model.get("potential_clients");
        pclient = pclient + '?';
        var dataArray = questionValue.split("\n");
        for (var i = 0; i < dataArray.length; i++) {
            if (dataArray[i].search(pclient) > -1) {
                dataArray.splice(i, 1);
                this.addClient();
                this.removeFromQuestionMarked();
            }
        }
    },
})

