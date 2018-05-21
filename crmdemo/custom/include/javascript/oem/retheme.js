/*********************************************************************************
 * This GitHub repository is restricted to access and use by SugarCRM’s OEM partners only.  The installation and use of
 * files and any related documentation available in this particular repository (the “OEM GitHub Repository”) are subject
 * to the terms in the contract(s) between your company and SugarCRM.  If you have any questions about your usage rights
 * or any restrictions for what’s in the OEM GitHub Repository, please contact the person in your company is responsible
 * for the SugarCRM relationship.  They can help advise you on the relevant contract terms.
 *
 * Copyright 2004-2014 SugarCRM Inc.  All rights reserved.
 *********************************************************************************/

/**
 * Temporary method for doing per-user theming until Theme Manager support is added to Sugar 7
 */
(function(app) {
    app.events.on("app:sync:complete", function() {
        var url = app.api.buildURL(
            'Users',
            null,
            {
                link: 'aclroles',
                id: app.user.id,
                relatedId: 'aclroles'
            },
            {
                fields: 'name'
            }
        );
        app.api.call('read', url, null, {
            success: _.bind(function(data) {
                if (_.isEmpty(data.records)) {
                    return;
                }
                _.each(data.records, function(model) {
                    if (model) {
                        //Implement branding depending on User's licensed tier
                        if(model.name === 'Basic') {
                            $('.home').css('background-color', 'green');
                        } else if(model.name === 'Standard') {
                            $('.home').css('background-color', '#dfdc1b');
                        } else if(model.name === 'Premium') {
                            $('.home').css('background-color', '#dc4a8d');
                        }
                    }
                }, this);
            }, this)
        });
    });
})(SUGAR.App);
