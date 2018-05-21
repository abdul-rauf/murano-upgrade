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
({unformat:function(value){var unformattedValue=app.utils.unformatNumberStringLocale(value);if(_.isFinite(unformattedValue)&&this.def&&this.def.precision){unformattedValue=app.math.round(unformattedValue,this.def.precision,true);}
return _.isFinite(unformattedValue)?unformattedValue:value;},format:function(value){if(this.def.disable_num_format){return value;}
return app.utils.formatNumber(value,this.def.round||4,this.def.precision||4,app.user.getPreference('number_grouping_separator')||',',app.user.getPreference('decimal_separator')||'.');}})