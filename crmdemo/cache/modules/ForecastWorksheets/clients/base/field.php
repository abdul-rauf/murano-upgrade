<?php
$clientCache['ForecastWorksheets']['base']['field'] = array (
  'currency' => 
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
({extendsFrom:\'CurrencyField\',initialize:function(options){this.plugins=_.clone(this.plugins)||[];this.plugins.push(\'ClickToEdit\');this._super("initialize",[options]);}})',
    ),
    'templates' => 
    array (
      'edit' => '
<div class="controls">
    <span class="error-tooltip hide" rel="tooltip" data-container="body">
        <i class="icon-exclamation-sign"></i>
    </span>
</div>
<input type="text" value="{{value}}" class="input-small tright" maxlength="26">
<span sfuuid="{{currencySfId}}" class="hide"></span>
',
      'list' => '
<div class="currency-field" data-placement="bottom" data-original-title="{{value}}">
{{#if transactionValue}}
    <label class="original">{{transactionValue}}</label><div class="converted">{{value}}</div>
{{else}}
    {{value}}
{{/if}}
</div>
',
    ),
  ),
  'date' => 
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
({extendsFrom:\'DateField\',_initPlugins:function(){this._super(\'_initPlugins\');this.plugins=_.union(this.plugins,[\'ClickToEdit\']);return this;}})',
    ),
    'templates' => 
    array (
      'edit' => '
<span class="edit">
    <div class="input-append date">
        <input type="text" data-type="date" class="input-small focused" value="{{value}}">
        <span class="add-on"><i class="icon-calendar"></i></span>
        <span class="error-tooltip hide" rel="tooltip" data-container="body">
            <i class="icon-exclamation-sign"></i>
        </span>
    </div>
</span>
',
    ),
  ),
  'enum' => 
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
({extendsFrom:\'EnumField\',initialize:function(options){this.plugins=_.clone(this.plugins)||[];this.plugins.push(\'ClickToEdit\');this._super("initialize",[options]);}})',
    ),
  ),
  'int' => 
  array (
    'templates' => 
    array (
      'edit' => '
{{#if def.auto_increment}}
    {{#eq value "NaN"}}--{{else}}{{value}}{{/eq}}
{{else}}
    <div class="controls">
        <span class="error-tooltip hide" rel="tooltip" data-container="body">
            <i class="icon-exclamation-sign"></i>
        </span>

    </div>
    <input type="text" value="{{value}}" class="input-mini tright" maxlength="5">
{{/if}}
',
    ),
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
({extendsFrom:\'IntField\',initialize:function(options){this.plugins=_.clone(this.plugins)||[];this.plugins.push(\'ClickToEdit\');this._super("initialize",[options]);}})',
    ),
  ),
  'parent' => 
  array (
    'templates' => 
    array (
      'deleted' => '
{{deleted_value}}
',
    ),
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
({extendsFrom:\'ParentField\',_render:function(){if(this.model.get(\'parent_deleted\')==1){this.deleted_value=this.model.get(\'name\');this.options.viewName=\'deleted\';}
this._super("_render");}})',
    ),
  ),
  'relate' => 
  array (
    'templates' => 
    array (
      'list' => '
<div class="ellipsis_inline" data-placement="bottom" title="{{value}}">
    {{#if href}}
        <a href="{{href}}">{{value}}</a>
    {{else}}
        {{value}}
    {{/if}}
</div>
',
    ),
  ),
  '_hash' => '140590ede805de2929c86a23deda44d5',
);

