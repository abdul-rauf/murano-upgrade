<?php
// created: 2018-06-05 08:49:01
$metadata = array (
  'modules' => 
  array (
    'Login' => 
    array (
      'fields' => 
      array (
      ),
    ),
  ),
  'fields' => 
  array (
    'actionmenu' => 
    array (
      'templates' => 
      array (
        'list-header' => '

{{#if def.buttons}}
<div class="btn-group">
    <div class="btn checkall"><input type="checkbox" name="check" class="toggle-all" {{#if selected}}checked{{/if}}></div>
    <a class="btn dropdown-toggle {{#unless action_enabled}}disabled{{/unless}}" data-toggle="dropdown" href="javascript:void(0);" rel="tooltip" title="{{str "LBL_LISTVIEW_ACTIONS"}}" track="click:listactiondropdown"><span class="icon-caret-down"></span></a>
    {{actionPlaceHolder}}
</div>
{{else}}
    <div class="btn checkall"><input type="checkbox" name="check" class="toggle-all" {{#if selected}}checked{{/if}}></div>
{{/if}}
',
        'list' => '
<input type="checkbox" name="check" {{#if selected}}checked{{/if}}>',
      ),
    ),
    'actionslink' => 
    array (
      'templates' => 
      array (
        'detail' => '
<div class="btn-group hide" data-toggle="buttons-checkbox">
    <a href="#{{buildRoute model=model}}" class="btn btn-mini"><i class="icon-list-alt"></i></a>
    <a href="#{{buildRoute model=model action="edit"}}" class="btn btn-mini"><i class="icon-pencil"></i></a>
    <a href="#{{buildRoute model=model action="delete"}}" class="btn btn-mini"><i class="icon-trash"></i></a>
</div>',
      ),
    ),
    'attachments' => 
    array (
      'templates' => 
      array (
        'edit' => '
<input type="hidden" class="attachments select2 select2-choices-pills-close" value="">
<input type="file" name="{{fileInputName}}" class="fileinput hidden" id="{{cid}}"{{#if def.tabindex}} tabindex="{{def.tabindex}}"{{/if}}>
',
      ),
    ),
    'avatar' => 
    array (
      'templates' => 
      array (
        'module-icon' => '
<span class="label label-module {{#if labelSizeClass}}{{labelSizeClass}} {{/if}}label-{{module}}" rel="tooltip" title="{{moduleIconToolTip module}}" data-placement="right">
    {{moduleIconLabel module}}
</span>
',
      ),
    ),
    'badge' => 
    array (
      'templates' => 
      array (
        'detail' => '
{{#if this.model.id}}
{{#eq this.model.attributes.quote_id ""}}<span class="label">{{str "LBL_NOT_QUOTED" this.module}}</span>{{/eq}}
{{#notEq this.model.attributes.quote_id ""}}<span class="label label-success">{{str "LBL_QUOTED" this.module}}</span>{{/notEq}}
{{/if}}
',
      ),
    ),
    'base' => 
    array (
      'templates' => 
      array (
        'detail' => '
{{#if value}}
<div class="ellipsis_inline" data-placement="bottom" title="{{value}}">
    {{value}}
</div>
{{/if}}
',
        'disabled' => '
        <input type="text" name="{{name}}" value="{{value}}"{{#if def.placeholder}} placeholder="{{str def.placeholder this.model.module}}"{{/if}} class="inherit-width" disabled>
        {{#unless hideHelp}}{{#if def.help}}<p class="help-block">{{str def.help module}}</p>{{/if}}{{/unless}}
',
        'edit' => '
        <input type="text" name="{{name}}" value="{{value}}"{{#if def.len}} maxlength="{{def.len}}"{{/if}}{{#if def.tabindex}} tabindex="{{def.tabindex}}"{{/if}}{{#if def.placeholder}} placeholder="{{str def.placeholder this.model.module}}"{{/if}} class="inherit-width">
        {{#unless hideHelp}}{{#if def.help}}<p class="help-block">{{str def.help module}}</p>{{/if}}{{/unless}}
',
        'list-header' => '
{{str label module}}',
        'list' => '
<div class="ellipsis_inline" data-placement="bottom" title="{{#unless value}}{{#if def.placeholder}}{{str def.placeholder this.model.module}}{{/if}}{{/unless}}{{value}}" >
    {{#if def.link}}<a href="{{#if def.events}}javascript:void(0);{{else}}{{href}}{{/if}}">{{value}}</a>{{else}}{{value}}{{/if}}
    </div>',
        'modal' => '
<input type="text" class="center" value="{{value}}" placeholder="{{label}}">
{{#unless hideHelp}}{{#if def.help}}<p class="help-block">{{str def.help module}}</p>{{/if}}{{/unless}}
',
        'noaccess' => '
<span class="label">{{str "LBL_NO_FIELD_ACCESS" this.module}}</span>
{{#if def.link}}
    <a href="{{href}}"
       class="btn btn-invisible btn-link"
       rel="tooltip"
       data-placement="bottom"
       title="{{str \'LBL_FOLLOW_LINK\' this.module}}">
        <i class="icon-link"></i>
    </a>
{{/if}}
',
        'nodata' => '
{{str "LBL_NO_DATA" this.model.module}}
',
        'table' => '
{{#if def.link}}<a href="#{{href}}">{{value}}</a>{{else}}{{value}}{{/if}}
',
      ),
    ),
    'bool' => 
    array (
      'templates' => 
      array (
        'detail' => '
<input type="checkbox"{{#if value}} checked{{/if}} disabled>
',
        'dropdown' => '
<select>
    <option value="0">{{str \'LBL_NO\' module}}</option>
    <option {{#if value}}selected {{/if}}value="1">{{str \'LBL_YES\' module}}</option>
</select>
',
        'edit' => '
{{#if def.text}}
    <label>
{{/if}}
<input type="checkbox"{{#eq action \'disabled\'}} disabled{{/eq}}{{#if value}} checked{{/if}}{{#if def.tabindex}} tabindex="{{def.tabindex}}"{{/if}}>
{{#if def.text}}
    {{str def.text this.module}}</label>
{{/if}}
{{#unless hideHelp}}{{#if def.help}}<p class="help-block">{{str def.help module}}</p>{{/if}}{{/unless}}
',
        'list' => '
<input type="checkbox"{{#if value}} checked{{/if}} disabled>
',
      ),
    ),
    'button' => 
    array (
      'templates' => 
      array (
        'detail' => '
<a class="btn{{#if def.primary}} btn-primary{{/if}}"
   href="{{#if fullRoute}}#{{fullRoute}}{{else}}{{#if def.route}}#{{buildRoute context=context model=model action=def.route.action}}{{else}}javascript:void(0);{{/if}}{{/if}}"
   track="click:{{name}}"
   {{#if def.tooltip}}
      rel="tooltip"
      data-placement="bottom"
      title="{{str def.tooltip module}}"
   {{/if}}
   name="{{name}}">
{{#if def.icon}}<i class="{{def.icon}}"></i> {{/if}}{{label}}</a>

',
        'edit' => '
<a class="btn{{#if def.primary}} btn-primary{{/if}}"
   href="{{#if fullRoute}}#{{fullRoute}}{{else}}{{#if def.route}}#{{buildRoute context=context model=model action=def.route.action}}{{else}}javascript:void(0);{{/if}}{{/if}}"
   name="{{name}}"{{#if def.tabindex}} tabindex="{{def.tabindex}}"{{/if}}>
{{#if def.icon}}<i class="{{def.icon}}"></i> {{/if}}{{label}}</a>
',
        'list-bottom' => '
<a class="btn{{#if def.primary}} btn-primary{{/if}}"
   href="{{#if fullRoute}}#{{fullRoute}}{{else}}{{#if def.route}}#{{buildRoute context=context model=model action=def.route.action}}{{else}}javascript:void(0);{{/if}}{{/if}}"
   name="{{name}}">
{{#if def.icon}}<i class="{{def.icon}}"></i> {{/if}}{{label}}</a>
',
        'list-header' => '
<a href="{{#if fullRoute}}#{{fullRoute}}{{else}}{{#if def.route}}#{{buildRoute context=context model=model action=def.route.action}}{{else}}javascript:void(0);{{/if}}{{/if}}"
   name="{{name}}">
{{#if def.icon}}<i class="{{def.icon}}"></i> {{/if}}{{label}}</a>
',
        'modal-header' => '
<a href="{{#if fullRoute}}#{{fullRoute}}{{else}}{{#if def.route}}#{{buildRoute context=context model=model action=def.route.action}}{{else}}javascript:void(0);{{/if}}{{/if}}"
   name="{{name}}"
   title="{{def.label}}">
{{#if def.icon}}<i class="{{def.icon}} icon-sm"></i> {{/if}}{{label}}</a>
',
        'modal' => '
<a class="btn{{#if def.primary}} btn-primary{{/if}}"
   href="{{#if fullRoute}}#{{fullRoute}}{{else}}{{#if def.route}}#{{buildRoute context=context model=model action=def.route.action}}{{else}}javascript:void(0);{{/if}}{{/if}}"
   name="{{name}}">
{{#if def.icon}}<i class="{{def.icon}}"></i> {{/if}}{{label}}</a>
',
      ),
    ),
    'change-my-password' => 
    array (
      'templates' => 
      array (
        'detail' => '
{{#each value}}*{{/each}}
',
        'edit' => '

{{#if showPasswordFields}}
    <input type="password" name="current_password" value="{{currentPassword}}" placeholder="{{str "LBL_CURRENT_PASSWORD" module}}" class="inherit-width">
    <input type="password" name="new_password" value="{{newPassword}}" placeholder="{{str "LBL_NEW_PASSWORD1" module}}" class="inherit-width">
    <input type="password" name="confirm_password" value="{{confirmPassword}}" placeholder="{{str "LBL_NEW_PASSWORD2" module}}" class="inherit-width">
    {{#unless hideHelp}}{{#if def.help}}<p class="help-block">{{str def.help module}}</p>{{/if}}{{/unless}}
{{else}}
    <a class="togglePasswordFields" href="javascript:void(0)">{{str "LBL_CHANGE_PASSWORD"}}</a>
{{/if}}
',
      ),
    ),
    'change-password' => 
    array (
      'templates' => 
      array (
        'detail' => '
{{#each value}}*{{/each}}
',
        'edit' => '
    <input type="password" name="current_password" value="{{value}}" class="inherit-width" disabled>
{{#if showPasswordFields}}
    <input type="password" name="new_password" value="{{newPassword}}" placeholder="{{str "LBL_NEW_PASSWORD1" module}}" class="inherit-width">
    <input type="password" name="confirm_password" value="{{confirmPassword}}" placeholder="{{str "LBL_NEW_PASSWORD2" module}}" class="inherit-width">
    {{#unless hideHelp}}{{#if def.help}}<p class="help-block">{{str def.help module}}</p>{{/if}}{{/unless}}
{{else}}
    <a class="togglePasswordFields" href="javascript:void(0)">{{str "LBL_CHANGE_PASSWORD"}}</a>
{{/if}}
',
      ),
    ),
    'chart' => 
    array (
      'templates' => 
      array (
        'detail' => '
<div id="d3_{{cid}}" class="nv-chart" data-content="chart"></div>
<div class="block-footer hide" data-content="nodata">{{str "LBL_NO_DATA_AVAILABLE"}}</div>
',
      ),
    ),
    'copy' => 
    array (
      'templates' => 
      array (
        'detail' => '
 
',
        'disabled' => '
{{#if def.sync}}
    <label><input type="checkbox"{{#if value}} checked{{/if}} disabled="disabled"/>{{label}}</label>
{{else}}
    <button type="button" class="btn" disabled="disabled">{{label}}</button>
{{/if}}
{{#unless hideHelp}}{{#if def.help}}<p class="help-block">{{str def.help module}}</p>{{/if}}{{/unless}}
',
        'edit' => '
{{#if def.sync}}
<label><input type="checkbox"{{#if value}} checked{{/if}}/>{{label}}</label>
{{else}}
<button type="button" class="btn">{{label}}</button>
{{/if}}
{{#unless hideHelp}}{{#if def.help}}<p class="help-block">{{str def.help module}}</p>{{/if}}{{/unless}}
',
      ),
    ),
    'currency' => 
    array (
      'templates' => 
      array (
        'detail' => '
<div class="currency-field">
{{#if transactionValue}}
    <label class="original">{{transactionValue}}</label><div class="converted">{{value}}</div>
{{else}}
    {{value}}
{{/if}}
</div>
',
        'disabled' => '
<input type="text" name="{{name}}" value="{{value}}" class="input-large" disabled>
',
        'edit' => '
{{#if hideCurrencyDropdown}}
    <input type="text" name="{{name}}" value="{{value}}" class="inherit-width"{{#if def.tabindex}} tabindex="{{def.tabindex}}"{{/if}}>
{{else}}
    <div class="select2-addon">
        <span sfuuid="{{currencySfId}}" class="currency edit"></span>
        <input type="text" name="{{name}}" value="{{value}}"{{#if def.tabindex}} tabindex="{{def.tabindex}}"{{/if}}>
    </div>
{{/if}}
{{#unless hideHelp}}{{#if def.help}}<p class="help-block">{{str def.help module}}</p>{{/if}}{{/unless}}
',
        'list' => '
<div class="currency-field ellipsis_inline" data-placement="bottom" data-original-title="{{value}}">
{{#if transactionValue}}
    <label class="original">{{transactionValue}}</label><div class="converted">{{value}}</div>
{{else}}
    {{value}}
{{/if}}
</div>
',
      ),
    ),
    'dashletaction' => 
    array (
      'templates' => 
      array (
        'detail' => '
<a href="{{#if fullRoute}}#{{fullRoute}}{{else}}{{#if def.route}}#{{buildRoute context=context model=model action=def.route.action}}{{else}}javascript:void(0);{{/if}}{{/if}}"
   track="click:{{name}}"
{{#if def.action}}
   data-dashletaction="{{def.action}}" track="click:dashletSettings_{{def.action}}"
{{/if}}
    {{#if def.tooltip}}
   rel="tooltip"
   data-placement="bottom"
   title="{{str def.tooltip module}}"
    {{/if}}
   name="{{name}}">
    {{#if def.icon}}<i class="{{def.icon}}"></i>{{/if}}{{str label}}</a>
',
      ),
    ),
    'date' => 
    array (
      'templates' => 
      array (
        'edit' => '
<div class="input-append date">
    <input type="text" data-type="date" class="datepicker" value="{{value}}"{{#if def.tabindex}} tabindex="{{def.tabindex}}"{{/if}} placeholder="{{fieldPlaceholder}}">
    <span class="add-on"><i class="icon-calendar"></i></span>
    {{#unless hideHelp}}{{#if def.help}}<p class="help-block">{{str def.help module}}</p>{{/if}}{{/unless}}
</div>

',
      ),
    ),
    'datetimecombo' => 
    array (
      'templates' => 
      array (
        'edit' => '
<div class="input-append date datetime">
    <input type="text" data-type="date" class="datepicker" value="{{value.date}}"{{#if def.tabindex}} tabindex="{{def.tabindex}}"{{/if}} placeholder="{{fieldPlaceholder}}">
    <span class="add-on date"><i class="icon-calendar"></i></span>
    <input type="text" data-type="time" value="{{value.time}}" autocomplete="off"{{#if def.tabindex}} tabindex="{{def.tabindex}}"{{/if}} placeholder="{{secondaryFieldPlaceholder}}">
    <span class="add-on time" data-action="show-timepicker"><i class="icon-time"></i></span>
    {{#unless hideHelp}}{{#if def.help}}<p class="help-block">{{str def.help module}}</p>{{/if}}{{/unless}}
</div>
',
      ),
    ),
    'dnbenum' => 
    array (
      'templates' => 
      array (
        'detail' => '
{{#if this.def.isMultiSelect}}
    {{#if value}}
        <div class="ellipsis_inline" data-placement="bottom" title="{{#each value}}{{#eachOptions ../items}}{{#eq key ../this}}{{#notEq @index 0}}, {{/notEq}}{{value}}{{/eq}}{{/eachOptions}}{{/each}}">{{#each value}}{{#eachOptions ../items}}{{#eq key ../this}}{{#notEq @index 0}}, {{/notEq}}{{value}}{{/eq}}{{/eachOptions}}{{/each}}</div>
    {{/if}}
{{else}}
    {{#if value}}
        {{#eachOptions items}}
            {{#eq this.key ../value}}
                <div class="ellipsis_inline" data-placement="bottom" title="{{value}}">
                    {{value}}
                </div>
            {{/eq}}
        {{/eachOptions}}
    {{/if}}
{{/if}}
',
        'disabled' => '
<input type="hidden" name="{{name}}" class="select2" disabled="disabled">
{{#unless hideHelp}}{{#if def.help}}<p class="help-block">{{str def.help module}}</p>{{/if}}{{/unless}}
',
        'edit' => '
<input type="hidden" class="select2" name="{{name}}"{{#if def.tabindex}} tabindex="{{def.tabindex}}"{{/if}}>
{{#unless hideHelp}}{{#if def.help}}<p class="help-block">{{str def.help module}}</p>{{/if}}{{/unless}}
',
      ),
    ),
    'email' => 
    array (
      'templates' => 
      array (
        'detail' => '
{{#each value}}
    {{#if hasAnchor}}
	    <a rel="tooltip" title="{{email_address}}{{#notEq flagLabel \'\'}} ({{flagLabel}}){{/notEq}}" data-placement="bottom" class="ellipsis_inline" href="javascript:void(0);" data-action="email" data-email-to="{{email_address}}">{{email_address}}</a>
    {{else}}
	    {{#if invalid_email}}
		    <del rel="tooltip" title="{{email_address}} ({{flagLabel}})" data-placement="bottom" class="ellipsis_inline">{{email_address}}</del>
	    {{else}}
	        <span rel="tooltip" title="{{email_address}}{{#notEq flagLabel \'\'}} ({{flagLabel}}){{/notEq}}" data-placement="bottom" class="ellipsis_inline">{{email_address}}</span>
	    {{/if}}
    {{/if}}
{{/each}}
',
        'disabled' => '
{{#each value}}
    <div class="control-group email" data-emailaddress="{{email_address}}">
        <div class="input-append">
            <input type="text" class="existingAddress" data-id="{{email_address}}" value="{{email_address}}" disabled>
        </div>
        <div class="btn-toolbar prevent-mousedown">
            <div class="btn-group" data-parentEmail="{{email_address}}">
                <button type="button" class="{{#if primary_address}}active {{/if}}is_primary btn" disabled><i class="icon-star"></i></button>
                <button type="button" class="{{#if opt_out}}active {{/if}}btn" disabled><i class="icon-ban-circle"></i></button>
                <button type="button" class="{{#if invalid_email}}active {{/if}}btn" disabled><i class="icon-exclamation-sign"></i></button>
            </div>
        </div>
    </div>
{{/each}}
',
        'edit-email-field' => '
<div class="control-group email">
    <input type="text" class="existingAddress" {{#if max_length}} maxlength="{{max_length}}"{{/if}} placeholder="{{str "LBL_EMAIL_TITLE"}}" value="{{email_address}}">
    <div class="btn-toolbar prevent-mousedown">
        <div class="btn-group" data-toggle="buttons-checkbox">
            <button type="button" class="{{#if primary_address}}active {{/if}}is_primary btn btn-edit" data-emailproperty="primary_address" rel="tooltip" title="{{str "LBL_EMAIL_PRIMARY"}}"><i class="icon-star"></i></button>
            <button type="button" class="{{#if opt_out}}active {{/if}}btn btn-edit" data-emailproperty="opt_out" rel="tooltip" title="{{str "LBL_EMAIL_OPT_OUT"}}"><i class="icon-ban-circle"></i></button>
            <button type="button" class="{{#if invalid_email}}active {{/if}}btn btn-edit" rel="tooltip" data-emailproperty="invalid_email" title="{{str "LBL_EMAIL_INVALID"}}"><i class="icon-exclamation-sign"></i></button>
        </div>
        <div class="btn-group prevent-mousedown">
            <a href="javascript:void(0)" class="btn removeEmail" rel="tooltip" title="{{str "LBL_REMOVE"}}"><i class="icon-minus"></i></a>
        </div>
    </div>
</div>
',
        'edit' => '
<div class="control-group email">
    <input type="text" class="newEmail input-append" maxlength="{{def.len}}" placeholder="{{str "LBL_EMAIL_ADD"}}"{{#if def.tabindex}} tabindex="{{def.tabindex}}"{{/if}}>
    <div class="btn-toolbar prevent-mousedown">
       <div class="btn-group">
          <a href="javascript:void(0)" class="btn addEmail" rel="tooltip" title="{{str "LBL_EMAIL_ADD"}}"><i class="icon-plus"></i></a>
       </div>
    </div>
</div>
{{#unless hideHelp}}{{#if def.help}}<p class="help-block">{{str def.help module}}</p>{{/if}}{{/unless}}
',
        'filter-rows-edit' => '
{{#if value}}
    {{#if value.[0]}}
        {{#each value}}
            <input type="text" name="{{name}}" value="{{email_address}}"{{#if def.len}} maxlength="{{def.len}}"{{/if}} class="inherit-width">
        {{/each}}
    {{else}}
        <input type="text" name="{{name}}" value="{{value}}"{{#if def.len}} maxlength="{{def.len}}"{{/if}} class="inherit-width">
    {{/if}}
{{else}}
    <input type="text" name="{{name}}" value=""{{#if def.len}} maxlength="{{def.len}}"{{/if}} class="inherit-width">
{{/if}}
',
        'list-disabled' => '
<input type="text" name="{{name}}" value="{{value}}"{{#if def.placeholder}} placeholder="{{str def.placeholder this.model.module}}"{{/if}} class="inherit-width" disabled>
{{#unless hideHelp}}{{#if def.help}}<p class="help-block">{{str def.help module}}</p>{{/if}}{{/unless}}
',
        'list-edit' => '
{{#each value}}
{{#if primary_address}}
<input type="text" name="{{../../name}}" value="{{../email_address}}"{{#if ../../def.len}} maxlength="{{../../def.len}}"{{/if}}{{#if ../../def.placeholder}} placeholder="{{str ../../../def.placeholder ../../../model.module}}"{{/if}} class="inherit-width existingAddress">
{{/if}}
{{/each}}
',
        'list' => '
{{#each value}}
    {{#if primary_address}}
        {{#if hasAnchor}}
            <div class="ellipsis_inline" rel="tooltip" title="{{email_address}}" data-placement="bottom">
                <a href="javascript:void(0);" data-action="email" data-email-to="{{email_address}}">{{email_address}}</a>
            </div>
        {{else}}
            {{#if invalid_email}}
                <del rel="tooltip" title="{{email_address}} ({{flagLabel}})" data-placement="bottom" class="ellipsis_inline">{{email_address}}</del>
            {{else}}
                <span rel="tooltip" title="{{email_address}}{{#notEq flagLabel \'\'}} ({{flagLabel}}){{/notEq}}" data-placement="bottom" class="ellipsis_inline">{{email_address}}</span>
            {{/if}}
        {{/if}}
    {{/if}}
{{/each}}
',
        'noaccess' => '
<span class="label">{{str "LBL_NO_FIELD_ACCESS" this.module}}</span>
',
      ),
    ),
    'emailaction' => 
    array (
      'templates' => 
      array (
        'detail' => '
<a data-action="email" href="javascript:void(0);"
{{#if def.tooltip}}
    rel="tooltip"
    data-placement="bottom"
    title="{{str def.tooltip module}}"
{{/if}}
    name="{{name}}"
    track="click:{{#if name}}{{name}}{{else}}{{label}}{{/if}}">
{{#if def.icon}}<i class="{{def.icon}}"></i>{{/if}}{{str label}}</a>
',
      ),
    ),
    'enum' => 
    array (
      'templates' => 
      array (
        'detail' => '
{{#if this.def.isMultiSelect}}
    {{#if value}}
        <div class="ellipsis_inline" data-placement="bottom" title="{{#each value}}{{#eachOptions ../items}}{{#eq key ../this}}{{#notEq @index 0}}, {{/notEq}}{{value}}{{/eq}}{{/eachOptions}}{{/each}}">{{#each value}}{{#eachOptions ../items}}{{#eq key ../this}}{{#notEq @index 0}}, {{/notEq}}{{value}}{{/eq}}{{/eachOptions}}{{/each}}</div>
    {{/if}}
{{else}}
    {{#if value}}
        {{#eachOptions items}}
            {{#eq this.key ../value}}
                <div class="ellipsis_inline" data-placement="bottom" title="{{value}}">
                    {{value}}
                </div>
            {{/eq}}
        {{/eachOptions}}
    {{/if}}
{{/if}}
',
        'disabled' => '
<input type="hidden" name="{{name}}" class="select2" disabled="disabled">
{{#unless hideHelp}}{{#if def.help}}<p class="help-block">{{str def.help module}}</p>{{/if}}{{/unless}}
',
        'edit' => '
<input type="hidden" class="select2" name="{{name}}"{{#if def.tabindex}} tabindex="{{def.tabindex}}"{{/if}}>
{{#unless hideHelp}}{{#if def.help}}<p class="help-block">{{str def.help module}}</p>{{/if}}{{/unless}}
',
        'list' => '
{{#if this.def.isMultiSelect}}
    {{#if value}}
        <div class="ellipsis_inline" data-placement="bottom"
             title="{{#each value}}{{#eachOptions ../items}}{{#eq key ../this}}{{#notEq @index 0}}, {{/notEq}}{{value}}{{/eq}}{{/eachOptions}}{{/each}}">
            {{#each value}}{{#eachOptions ../items}}{{#eq key ../this}}{{#notEq @index 0}}, {{/notEq}}{{value}}{{/eq}}{{/eachOptions}}{{/each}}
        </div>
    {{/if}}
{{else}}
    {{#if value}}
        {{#eachOptions items}}
            {{#eq this.key ../value}}
                <div class="ellipsis_inline" data-placement="bottom" title="{{value}}">
                    {{value}}
                </div>
            {{/eq}}
        {{/eachOptions}}
    {{/if}}
{{/if}}
',
        'massupdate' => '
<div class="massupdate row-fluid">
    {{#if def.isMultiSelect}}<div class="span9">{{/if}}
        {{! This part is directly from `edit.hbs`
            FIXME: use the `partial` hbs helper for this once INT-394 is available.
        }}
        <input type="hidden" class="select2" name="{{name}}"{{#if def.tabindex}} tabindex="{{def.tabindex}}"{{/if}}>
        {{#unless hideHelp}}{{#if def.help}}<p class="help-block">{{str def.help module}}</p>{{/if}}{{/unless}}
    {{#if def.isMultiSelect}}
    </div>
        <label class="span3">
            <input type="checkbox" name="append_value"{{#if appendValue}} checked{{/if}}> {{str \'LBL_SELECT_APPEND_VALUES\'}}
        </label>
    {{/if}}
</div>
',
      ),
    ),
    'favorite' => 
    array (
      'templates' => 
      array (
        'detail' => '
<i class="icon-favorite{{#if value}} active{{/if}}" rel="tooltip" title="{{str \'LBL_FAVORITE\' this.module}}" data-placement="bottom"></i>
',
        'edit' => '
 
',
        'list' => '
<i class="icon-favorite{{#if value}} active{{/if}}" rel="tooltip" title="{{str \'LBL_FAVORITE\' this.module}}"></i>
',
      ),
    ),
    'fieldset-with-labels' => 
    array (
      'templates' => 
      array (
        'detail' => '
{{#with def}}
    {{#each fields}}
        <span class="record-cell" data-name="{{name}}" data-type="{{type}}">
            {{#unless ../dismiss_label}}
            <div class="record-label" data-name="{{name}}">{{str label ../../../module}}</div>
            {{/unless}}
            <span data-fieldname="{{name}}">
                {{field ../../view model=../../model template=../../options.viewName}}
            </span>
        </span>
    {{/each}}
{{/with}}
',
        'preview' => '
{{#with def}}
    {{#each fields}}
        <span class="record-cell" data-name="{{name}}" data-type="{{type}}">
            <span data-fieldname="{{name}}">
                {{field ../../view model=../../model template=../../options.viewName}}
            </span>
        </span>
    {{/each}}
{{/with}}
',
      ),
    ),
    'file' => 
    array (
      'templates' => 
      array (
        'detail' => '
{{#each value}}
    {{#eq mimeType \'image\'}}
        <a class="ellipsis_inline" data-placement="bottom" title="{{name}}" href="{{url}}" target="_blank">{{name}}</a>
    {{/eq}}
    {{#notEq mimeType \'image\'}}
        <a class="ellipsis_inline" data-placement="bottom" title="{{name}}" href="javascript:void(0);" data-url="{{url}}" data-action="download">{{name}}</a>
    {{/notEq}}
{{/each}}
',
        'edit' => '
{{#if value.length}}
    {{#each value}}
        <div class="row-fluid file-field">
            {{#eq mimeType \'image\'}}
                <a class="span10 ellipsis_inline" data-placement="bottom" title="{{name}}" href="{{url}}" target="_blank">{{name}}</a>
            {{/eq}}
            {{#notEq mimeType \'image\'}}
                <a class="span10 ellipsis_inline" data-placement="bottom" title="{{name}}" href="javascript:void(0);" data-url="{{url}}" data-action="download">{{name}}</a>
            {{/notEq}}
            <button class="btn icon-remove-sign" data-action="delete"></button>
        </div>
    {{/each}}
{{else}}
    <input type="file" name="{{name}}"{{#if def.tabindex}} tabindex="{{def.tabindex}}"{{/if}} />
{{/if}}
{{#unless hideHelp}}{{#if def.help}}<p class="help-block">{{str def.help module}}</p>{{/if}}{{/unless}}
',
        'list' => '
{{#if value}}
    {{#if value.[0]}}
        {{#with value.[0]}}
            {{#notEq mimeType \'image\'}}
                {{#eq docType \'Sugar\'}}
                    <a class="ellipsis_inline" data-placement="bottom" title="{{name}}" href="javascript:void(0);" data-url="{{url}}" data-action="download">{{name}}</a>
                {{/eq}}
                {{#notEq docType \'Sugar\'}}
                    <a class="ellipsis_inline" data-placement="bottom" title="{{name}}" href="{{url}}" target="_blank">{{name}}</a>
                {{/notEq}}
            {{/notEq}}
            {{#eq mimeType \'image\'}}
                <a class="ellipsis_inline" data-placement="bottom" title="{{name}}" href="{{url}}" target="_blank">{{name}}</a>
            {{/eq}}
        {{/with}}
    {{/if}}
{{/if}}
',
        'merge-duplicates-edit' => '
{{#if value}}
    {{#with value}}
        <div class="ellipsis_inline"
             data-placement="bottom"
             data-container="body"
             data-original-title="{{name}}">
            {{name}}
        </div>
    {{/with}}
{{/if}}
',
        'merge-duplicates-list' => '
{{#if value}}
    {{#with value}}
        <div class="ellipsis_inline"
             data-placement="bottom"
             data-container="body"
             data-original-title="{{name}}">
            {{name}}
        </div>
    {{/with}}
{{/if}}
',
      ),
    ),
    'follow' => 
    array (
      'templates' => 
      array (
        'detail' => '
{{#if model.id}}
    <a href="javascript:void(0);" name="{{name}}" class="label{{#if value}} label-success{{/if}}" data-hover="true" data-event="list:follow:fire">{{label}}</a>
{{/if}}
',
        'list' => '
<a href="javascript:void(0);" class="rowaction" data-event="{{def.event}}" name="{{def.name}}">{{label}}</a>
',
      ),
    ),
    'forecast-pareto-chart' => 
    array (
      'templates' => 
      array (
        'detail' => '

<div id="{{cid}}_chart" class="nv-chart nv-pareto"></div>
<div class="block-footer hide">{{str "LBL_NO_DATA_AVAILABLE"}}</div>
',
      ),
    ),
    'fullname' => 
    array (
      'templates' => 
      array (
        'detail' => '
<div class="ellipsis_inline"{{#if value}} data-placement="bottom" title="{{value}}"{{/if}}>
    {{#if def.link}}<a href="#{{buildRoute model=model}}">{{value}}</a>{{else}}{{value}}{{/if}}
</div>
',
        'edit' => '
{{#with def}}
    {{#each fields}}
        <span class="record-cell" data-name="{{name}}" data-type="{{type}}">
            {{#unless dismiss_label}}
                <div class="record-label" data-name="{{name}}">{{str label ../../../module}}</div>
            {{/unless}}
            <span data-fieldname="{{name}}">
                {{field ../../view model=../../model template=../../options.viewName parent=../../this}}
            </span>
        </span>
    {{/each}}
{{/with}}
',
        'record-detail' => '
<span class="record-cell" data-name="{{name}}" data-type="{{type}}">
    {{#unless def.dismiss_label}}
        <div class="record-label" data-name="{{name}}">{{str label ../module}}</div>
    {{/unless}}
    <span class="ellipsis_inline" rel="tooltip" title="{{value}}" data-placement="bottom" data-fieldname="{{name}}">
        {{value}}
    </span>
</span>
',
        'recordlist-edit' => '
{{#with def}}
    {{#each fields}}
        <span class="edit-cell" data-name="{{name}}" data-type="{{type}}">
            {{field ../../view model=../../model template=../../options.viewName parent=../../this}}
        </span>
    {{/each}}
{{/with}}
',
      ),
    ),
    'hr' => 
    array (
      'templates' => 
      array (
        'default' => '
<hr>
',
      ),
    ),
    'html' => 
    array (
      'templates' => 
      array (
        'detail' => '
<span class="htmlareafield">{{#if value}}{{{value}}}{{else}}{{{def.default_value}}}{{/if}}</span>
',
      ),
    ),
    'htmleditable_tinymce' => 
    array (
      'templates' => 
      array (
        'default' => '
<iframe class="htmleditable {{#if this.options.def.span}}span{{this.options.def.span}}{{/if}}" frameborder="0"></iframe>
',
        'detail' => '
<iframe class="htmleditable {{#if this.options.def.span}}span{{this.options.def.span}}{{/if}}" frameborder="0"></iframe>
',
        'edit' => '
<textarea class="htmleditable"{{#if def.tabindex}} tabindex="{{def.tabindex}}"{{/if}}></textarea>
',
        'list' => '
<iframe class="htmleditable" frameborder="0"></iframe>
',
      ),
    ),
    'iframe' => 
    array (
      'templates' => 
      array (
        'detail' => '
{{#if value}}
    {{#notEq value \'http://\'}}
        <iframe src="{{value}}" height="{{def.height}}" width="100%"></iframe>
    {{/notEq}}
{{/if}}
',
        'edit' => '
{{#if def.gen}}
    {{! Render nothing since URL is generated }}
{{else}}
<input type="text" name="{{name}}" value="{{value}}"{{#if def.len}} maxlength="{{def.len}}"{{/if}}{{#if def.tabindex}} tabindex="{{def.tabindex}}"{{/if}}{{#if def.placeholder}} placeholder=\'{{str def.placeholder this.model.module}}\'{{/if}} class="input-large">
{{#unless hideHelp}}{{#if def.help}}<p class="help-block">{{str def.help module}}</p>{{/if}}{{/unless}}
{{/if}}
',
      ),
    ),
    'image' => 
    array (
      'templates' => 
      array (
        'detail' => '
<div class="image_field image_detail hide">
    <div class="image_preview">
        <img src="{{value}}" />
    </div>
</div>
',
        'edit' => '
<div class="image_field image_edit hide">
    <label>
        <span class="image_input"><input type="file" name="{{name}}"></span>
        <span class="image_btn image_btn_label">{{str "LBL_EDIT_BUTTON"}}</span>
        <span class="image_preview">{{#if value}}<img src="{{value}}">{{else}}<i class="icon-plus"></i>{{/if}}</span>
    </label>
</div>
{{#unless hideHelp}}{{#if def.help}}<p class="help-block">{{str def.help module}}</p>{{/if}}{{/unless}}
',
        'list' => '
<div class="image_field image_detail hide">
    <div class="image_preview">
        <img src="{{value}}" />
    </div>
</div>
',
      ),
    ),
    'invitation-actions' => 
    array (
      'templates' => 
      array (
        'edit' => '
<div class="btn-group" data-record-id="{{getFieldValue this.model \'id\'}}" data-toggle="buttons-radio">
    <button type="button" class="{{#eq value \'accept\'}}active {{/eq}}btn btn-mini" data-action="accept"
            rel="tooltip" data-container="body"
            data-original-title="{{getDDLabel \'accept\' def.options}}"><i class="icon-ok-sign"></i></button>
    <button type="button" class="{{#eq value \'tentative\'}}active {{/eq}}btn btn-mini" data-action="tentative"
            rel="tooltip" data-container="body"
            data-original-title="{{getDDLabel \'tentative\' def.options}}"><i class="icon-question-sign"></i></button>
    <button type="button" class="{{#eq value \'decline\'}}active {{/eq}}btn btn-mini" data-action="decline"
            rel="tooltip" data-container="body"
            data-original-title="{{getDDLabel \'decline\' def.options}}"><i class="icon-ban-circle"></i></button>
</div>
',
      ),
    ),
    'label' => 
    array (
      'templates' => 
      array (
        'detail' => '
{{#if def.formatted_value}}
    {{def.formatted_value}}
{{else}}
    {{str def.default_value this.module}}
{{/if}}
',
      ),
    ),
    'mass-email-button' => 
    array (
      'templates' => 
      array (
        'list-header' => '
<a data-action="email" href="javascript:void(0);" name="{{name}}">
{{#if def.icon}}<i class="{{def.icon}}"></i> {{/if}}{{label}}</a>
',
      ),
    ),
    'name' => 
    array (
      'templates' => 
      array (
        'detail' => '
{{#if value}}
<div class="ellipsis_inline" data-placement="bottom" title="{{value}}">
    {{#if def.link}}<a href="{{#if def.events}}javascript:void(0);{{else}}{{href}}{{/if}}">{{value}}</a>{{else}}{{value}}{{/if}}
</div>
{{/if}}

',
        'disabled' => '
        <input type="text" name="{{name}}" value="{{value}}"{{#if def.placeholder}} placeholder="{{str def.placeholder this.model.module}}"{{/if}} class="inherit-width" disabled>
        {{#unless hideHelp}}{{#if def.help}}<p class="help-block">{{str def.help module}}</p>{{/if}}{{/unless}}
',
        'edit' => '
        <input type="text" name="{{name}}" value="{{value}}"{{#if def.len}} maxlength="{{def.len}}"{{/if}}{{#if def.placeholder}} placeholder="{{str def.placeholder this.model.module}}"{{/if}} class="inherit-width">
        {{#unless hideHelp}}{{#if def.help}}<p class="help-block">{{str def.help module}}</p>{{/if}}{{/unless}}
',
      ),
    ),
    'navelement' => 
    array (
      'templates' => 
      array (
        'default' => '
<a href="{{#if def.route}}#{{buildRoute context=context model=model action=def.route.action}}
{{else}}javascript:void(0){{/if}}" name="{{def.name}}" class="{{def.class}} {{#eq name "show_more_button_forward"}}{{#eq ../collection.next_offset "-1"}}hide{{/eq}}{{/eq}}{{#eq name "show_more_button_back"}}{{#eq ../collection.page "1"}}hide{{/eq}}{{/eq}}">
{{#if def.icon}}<i class="{{def.icon}}"></i>{{/if}}{{label}}</a>
',
      ),
    ),
    'overdue-badge' => 
    array (
      'templates' => 
      array (
        'detail' => '
{{#if this.model.attributes.overdue}}
    <span class="label label-important">{{str "LBL_OVERDUE" this.module}}</span>
{{/if}}
',
      ),
    ),
    'parent' => 
    array (
      'templates' => 
      array (
        'detail' => '
{{#eq value hiddenValue}}
{{value}}
{{/eq}}
{{#notEq value hiddenValue}}
{{#if href}}<a class="ellipsis_inline" href="{{href}}">{{value}}</a>{{else}}{{value}}{{/if}}
{{/notEq}}
',
        'edit' => '
<div class="span5">
    <select class="select2 inherit-width" name="parent_type"{{#if def.tabindex}} tabindex="{{def.tabindex}}"{{/if}}>
        {{#eachOptions def.options}}
        <option value="{{{this.key}}}" {{#eq this.key ../def.module}}selected{{/eq}}>{{this.value}}</option>
        {{/eachOptions}}
    </select>
</div>
<div class="span7">
    <input type="hidden" name="{{name}}" class="select2 select2-parent inherit-width" value="{{value}}" data-id="{{getFieldValue this.model "parent_id"}}">
</div>
{{#unless hideHelp}}{{#if def.help}}<p class="help-block">{{str def.help module}}</p>{{/if}}{{/unless}}
',
        'list' => '
<div class="ellipsis_inline" data-placement="bottom"
     title="{{#unless value}}{{#if def.placeholder}}{{str def.placeholder this.model.module}}{{/if}}{{/unless}}{{value}}">
    {{# if href}}<a href="{{href}}">{{value}}</a>{{else}}{{value}}{{/if}}
</div>
',
        'options' => '
{{#each selectOptions}}
<option value="{{getFieldValue this "id"}}" {{#eq @index 0}}selected="selected"{{/eq}}>{{getFieldValue this "name"}}</option>
{{/each}}
{{#eq selectOptions.length 0}}
<option data-empty="true">{{str "MSG_LIST_VIEW_NO_RESULTS_BASIC"}}</option>
{{/eq}}
<option data-searchmore="true" value="{{str "LBL_SEARCH_FOR_MORE"}}" class="more">{{str "LBL_SEARCH_FOR_MORE"}}</option>',
      ),
    ),
    'password' => 
    array (
      'templates' => 
      array (
        'detail' => '
<input type="password" class="input-xlarge" id="" value="{{value}}" disabled>',
        'edit' => '
<input type="password" name="{{name}}" value="{{value}}"{{#if def.placeholder}} placeholder="{{str def.placeholder this.model.module}}"{{/if}}{{#if def.tabindex}} tabindex="{{def.tabindex}}"{{/if}}>
{{#unless hideHelp}}{{#if def.help}}<p class="help-block">{{str def.help module}}</p>{{/if}}{{/unless}}
',
      ),
    ),
    'pdfaction' => 
    array (
      'templates' => 
      array (
        'detail' => '
<a class="rowaction" href="javascript:void(0);"
   data-action="link"
    {{#if def.tooltip}}
   rel="tooltip"
   data-container="body"
   data-placement="bottom"
   data-original-title="{{str def.tooltip module}}"
    {{/if}}
   name="{{name}}">
    {{#if def.icon}}<i class="{{def.icon}}"></i>{{/if}}{{str label}}</a>
{{#if fetchCalled}}
    {{#if templateCollection.length}}
        <ul class="dropdown-inset">
            {{#each templateCollection.models}}
                <li>
                    <a href="javascript:void(0);" data-action="{{../../../def.action}}" data-id="{{attributes.id}}">{{attributes.name}}</a>
                </li>
            {{/each}}
        </ul>
    {{else}}
        <ul class="dropdown-inset">
            <li>
                {{#if templateCollection.dataFetched}}
                    <a href="javascript:void(0);" class="disabled"><em>{{str "LBL_NO_PDF_TEMPLATE" this.module}}</em></a>
                {{else}}
                    <div class="alert-process">
                        <strong>{{str "LBL_LOADING"}}</strong>
                        <div class="loading">
                            <span class="l1"></span><span class="l2"></span><span class="l3"></span>
                        </div>
                    </div>
                {{/if}}
            </li>
        </ul>
    {{/if}}
{{/if}}
',
      ),
    ),
    'phone' => 
    array (
      'templates' => 
      array (
        'detail' => '
{{#if value}}
<div class="ellipsis_inline" data-placement="bottom" title="{{value}}">
    {{#if skypeValue}}
        <a href="callto:{{skypeValue}}">{{value}}</a>
    {{else}}{{value}}{{/if}}
</div>
{{/if}}
',
        'disabled' => '
<input type="text" name="{{name}}" value="{{value}}"{{#if def.len}} maxlength="{{def.len}}"{{/if}}{{#if def.tabindex}} tabindex="{{def.tabindex}}"{{/if}}{{#if def.placeholder}} placeholder="{{str def.placeholder this.model.module}}"{{/if}} class="inherit-width" disabled>
{{#unless hideHelp}}{{#if def.help}}<p class="help-block">{{str def.help module}}</p>{{/if}}{{/unless}}
',
        'edit' => '
        <input type="text" name="{{name}}" value="{{value}}"{{#if def.len}} maxlength="{{def.len}}"{{/if}}{{#if def.tabindex}} tabindex="{{def.tabindex}}"{{/if}}{{#if def.placeholder}} placeholder="{{str def.placeholder this.model.module}}"{{/if}} class="inherit-width">
        {{#unless hideHelp}}{{#if def.help}}<p class="help-block">{{str def.help module}}</p>{{/if}}{{/unless}}
',
        'list' => '
<div class="ellipsis_inline" data-placement="bottom" title="{{#unless value}}{{#if def.placeholder}}{{str def.placeholder this.model.module}}{{/if}}{{/unless}}{{value}}" >
    {{#if skypeValue}}<a href="callto:{{skypeValue}}">{{value}}</a>{{else}}{{value}}{{/if}}
</div>',
      ),
    ),
    'preview-button' => 
    array (
      'templates' => 
      array (
        'detail' => '
<a class="rowaction" href="{{#if fullRoute}}#{{fullRoute}}{{else}}{{#if def.route}}#{{buildRoute context=context model=model action=def.route.action}}{{else}}javascript:void(0);{{/if}}{{/if}}"
{{#if def.event}}
   data-event="{{def.event}}"
{{/if}}
{{#if tooltip}}
   rel="tooltip"
   data-placement="bottom"
   title="{{str tooltip module}}"
{{/if}}
   name="{{name}}" track="click:{{#if name}}{{name}}{{else}}{{label}}{{/if}}">
{{#if def.icon}}<i class="{{def.icon}}"></i>{{/if}}{{str label}}</a>
',
        'list' => '
<a class="rowaction {{#if isBwcEnabled}}disabled{{/if}}" href="{{#if fullRoute}}#{{fullRoute}}{{else}}{{#if def.route}}#{{buildRoute context=context model=model action=def.route.action}}{{else}}javascript:void(0);{{/if}}{{/if}}"
{{#if def.event}}
   data-event="{{def.event}}"
{{/if}}
{{#if tooltip}}
   rel="tooltip"
   data-placement="bottom"
   title="{{str tooltip module}}"
{{/if}}
   name="{{name}}" track="click:{{#if name}}{{name}}{{else}}{{label}}{{/if}}">
    {{#if tooltip}}
        {{#if def.icon}}
            <i class="{{def.icon}}"></i>
        {{/if}}
    {{/if}}
    {{str label}}
</a>
',
        'small' => '
<a class="rowaction" href="{{#if fullRoute}}#{{fullRoute}}{{else}}{{#if def.route}}#{{buildRoute context=context model=model action=def.route.action}}{{else}}javascript:void(0);{{/if}}{{/if}}"
    {{#if def.event}}
   data-event="{{def.event}}"
    {{/if}}
    {{#if tooltip}}
   rel="tooltip"
   data-placement="bottom"
   title="{{str tooltip module}}"
    {{else}}
        {{#if label}}
   rel="tooltip"
   data-placement="bottom"
   title="{{str label module}}"
        {{/if}}
    {{/if}}
   name="{{name}}" track="click:{{#if name}}{{name}}{{else}}{{label}}{{/if}}">
    <i class="{{def.icon}}"></i></a>
',
      ),
    ),
    'quickcreate' => 
    array (
      'templates' => 
      array (
        'quickcreate' => '
<a class="actionLink" data-module="{{def.module}}" data-layout="{{def.layout}}" {{#if def.href}}href="{{def.href}}"{{else}}data-event="true" href="javascript:void(0);"{{/if}} track="click:quickCreate-{{def.module}}" tabindex="-1">{{#if def.icon}}<i class="{{def.icon}}"></i>{{/if}}{{label}}</a>
',
      ),
    ),
    'radioenum' => 
    array (
      'templates' => 
      array (
        'detail' => '
{{#eachOptions items}}
{{#has this.key ../value}}{{value}}{{/has}}
{{/eachOptions}}
',
        'edit' => '
        {{#eachOptions items}}
        <p><label><input type="radio" name="{{../name}}" value="{{key}}"{{#if def.tabindex}} tabindex="{{def.tabindex}}"{{/if}} {{#eq key ../value}}checked{{/eq}}> {{value}}</label></p>
        {{/eachOptions}}
        {{#unless hideHelp}}{{#if def.help}}<p class="help-block">{{str def.help module}}</p>{{/if}}{{/unless}}
',
        'list-edit' => '
<input type="hidden" name="{{name}}">
',
        'list' => '
{{#eachOptions items}}
{{#has this.key ../value}}{{value}}{{/has}}
{{/eachOptions}}
',
      ),
    ),
    'range' => 
    array (
      'templates' => 
      array (
        'detail' => '
<div class="noUiSliderEnds">
    <div class="rangeSlider noUiSlider"></div>
</div>',
        'edit' => '
<div class="noUiSliderEnds">
    <div class="rangeSlider noUiSlider"></div>
</div>',
      ),
    ),
    'relate' => 
    array (
      'templates' => 
      array (
        'detail' => '
{{#if href}}<a class="ellipsis_inline" data-placement="bottom" title="{{value}}" href="{{href}}">{{value}}</a>{{else}}{{value}}{{/if}}
',
        'edit' => '
<input type="hidden" name="{{name}}" class="select2 inherit-width" value="{{value}}"{{#if def.tabindex}} tabindex="{{def.tabindex}}"{{/if}} data-id="{{getFieldValue this.model this.def.id_name}}">
{{#unless hideHelp}}{{#if def.help}}<p class="help-block">{{str def.help module}}</p>{{/if}}{{/unless}}
',
        'list' => '
<div class="ellipsis_inline" data-placement="bottom" data-container="body"
     title="{{#unless value}}{{#if def.placeholder}}{{str def.placeholder this.model.module}}{{/if}}{{/unless}}{{value}}">
    {{# if href}}
        <a href="{{href}}">{{value}}</a>
    {{else}}
        {{value}}
    {{/if}}
</div>
',
        'noaccess' => '
<span class="label">{{str "LBL_NO_FIELD_ACCESS" this.module}}</span>
',
        'options' => '
{{#each selectOptions}}
    <option value="{{getFieldValue this "id"}}" {{#eq @index 0}}selected="selected"{{/eq}}>{{getFieldValue this "name"}}</option>
{{/each}}
{{#eq selectOptions.length 0}}
    <option data-empty="true">{{str "MSG_LIST_VIEW_NO_RESULTS_BASIC"}}</option>
{{/eq}}
<option data-searchmore="true" value="{{str "LBL_SEARCH_FOR_MORE"}}" class="more">{{str "LBL_SEARCH_FOR_MORE"}}</option>',
        'overwrite-confirmation' => '
<span class="information-underline"
      rel="tooltip"
      data-container="body" data-placement="bottom" data-html="true" data-trigger="click"
      title="{{str \'LBL_OVERWRITE_POPULATED_DATA_FROM\'}}: {{before}} <br> {{str \'LBL_OVERWRITE_POPULATED_DATA_TO\'}}: {{after}}">
    {{field_label}}
</span>
',
      ),
    ),
    'rowaction' => 
    array (
      'templates' => 
      array (
        'detail' => '
<a class="rowaction" href="{{#if fullRoute}}#{{fullRoute}}{{else}}{{#if def.route}}#{{buildRoute context=context model=model action=def.route.action}}{{else}}javascript:void(0);{{/if}}{{/if}}"
{{#if def.event}}
   data-event="{{def.event}}"
{{/if}}
{{#if def.tooltip}}
   rel="tooltip"
   data-placement="bottom"
   title="{{str def.tooltip module}}"
{{/if}}
   name="{{name}}" track="click:{{#if name}}{{name}}{{else}}{{label}}{{/if}}">
{{#if def.icon}}<i class="{{def.icon}}"></i>{{/if}}{{str label}}</a>
',
        'list' => '
<a class="rowaction" href="{{#if fullRoute}}#{{fullRoute}}{{else}}{{#if def.route}}#{{buildRoute context=context model=model action=def.route.action}}{{else}}javascript:void(0);{{/if}}{{/if}}"
{{#if def.event}}
   data-event="{{def.event}}"
{{/if}}
{{#if def.tooltip}}
   rel="tooltip"
   data-placement="bottom"
   title="{{str def.tooltip module}}"
{{/if}}
   name="{{name}}" track="click:{{#if name}}{{name}}{{else}}{{label}}{{/if}}">
    {{#if def.tooltip}}
        {{#if def.icon}}
            <i class="{{def.icon}}"></i>
        {{/if}}
    {{/if}}
    {{str label}}
</a>
',
        'small' => '
<a class="rowaction" href="{{#if fullRoute}}#{{fullRoute}}{{else}}{{#if def.route}}#{{buildRoute context=context model=model action=def.route.action}}{{else}}javascript:void(0);{{/if}}{{/if}}"
    {{#if def.event}}
   data-event="{{def.event}}"
    {{/if}}
    {{#if def.tooltip}}
   rel="tooltip"
   data-placement="bottom"
   title="{{str def.tooltip module}}"
    {{else}}
        {{#if label}}
   rel="tooltip"
   data-placement="bottom"
   title="{{str label module}}"
        {{/if}}
    {{/if}}
   name="{{name}}" track="click:{{#if name}}{{name}}{{else}}{{label}}{{/if}}">
    <i class="{{def.icon}}"></i></a>
',
      ),
    ),
    'rowactions' => 
    array (
      'templates' => 
      array (
        'list-header' => '
{{str label module}}
',
      ),
    ),
    'selection' => 
    array (
      'templates' => 
      array (
        'list' => '
<input name="{{name}}" id="{{name}}_{{this.model.id}}" class="selection" type="radio">
',
      ),
    ),
    'sidebartoggle' => 
    array (
      'templates' => 
      array (
        'detail' => '
<button class="btn btn-invisible sidebar-toggle"
   rel="tooltip"
   title="{{str \'LBL_DASHBOARD_TOGGLE\' module}}"
   data-placement="left"
   track="click:togglesidebar">
    <i class="{{#eq _state \'open\'}}icon-double-angle-right{{else}}icon-double-angle-left{{/eq}}"></i>
</button>
',
      ),
    ),
    'status' => 
    array (
      'templates' => 
      array (
        'list' => '
<div class="ellipsis_inline {{cssClasses}}" data-placement="bottom"
    title="{{#unless value}}{{#if def.placeholder}}{{str def.placeholder this.model.module}}{{/if}}{{/unless}}{{value}}">
    {{#if def.link}}
        <a href="{{#if def.events}}javascript:void(0);{{else}}{{href}}{{/if}}">{{value}}</a>{{else}}{{value}}
    {{/if}}
</div>
',
      ),
    ),
    'sugar-cube' => 
    array (
      'templates' => 
      array (
        'detail' => '
<svg class="sugar-cube{{#if spin}} icon-spin{{/if}}" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512" enable-background="new 0 0 512 512">
    <defs>
    <filter id="punch">
        <feOffset in="SourceGraphic" dx="0" dy="0" result="image"></feOffset>
        <feFlood flood-color="#F3F3F3" flood-opacity="1" result="tint"></feFlood>
        <feComposite in="tint" in2="image" operator="in" result="punch-background"></feComposite>

        <feMorphology in="SourceAlpha" radius="2" operator="dilate"></feMorphology>
        <feGaussianBlur stdDeviation="2" result="blur"></feGaussianBlur>

        <feOffset in="blur" dx="7" dy="7" result="blur-black"></feOffset>
        <feFlood flood-color="#FFF"></feFlood>
        <feComposite in2="blur-black" operator="in" result="shadow-black"></feComposite>

        <feOffset in="blur" dx="8" dy="8" result="blur-white"></feOffset>
        <feFlood flood-color="#FFF"></feFlood>
        <feComposite in2="blur-white" operator="in" result="shadow-white"></feComposite>

        <feComposite in="shadow-white" in2="shadow-black" operator="in" result="punch-shadows"></feComposite>
        <feComposite in="SourceGraphic" in2="punch-shadows" operator="xor" result="punch-shadow"></feComposite>

        <feComposite in="punch-shadow" in2="punch-background" operator="over" result="punch"></feComposite>
    </filter>
    </defs>
    <g class="sides">
        <path class="sc-top" d="M272.24,175c-10.35,4.079-27.267,4.079-37.579,0L48.178,101.127c-10.326-4.093-10.326-10.782,0-14.877 l186.483-73.841c10.312-4.097,27.229-4.097,37.579,0L458.712,86.25c10.325,4.096,10.325,10.784,0,14.877L272.24,175z" style="filter:url(#punch)"></path>
        <path class="sc-left" d="M243.068,477.624c0,11.132-8.449,16.852-18.79,12.792L37.797,416.574 c-10.327-4.096-18.789-16.508-18.789-27.649V129.978c0-11.091,8.462-16.847,18.789-12.759l186.482,73.863 c10.34,4.074,18.79,16.518,18.79,27.646V477.624z" style="filter:url(#punch)"></path>
        <path class="sc-right" d="M263.78,477.55c0,11.132,8.46,16.841,18.812,12.783l186.465-73.851c10.336-4.099,18.79-16.547,18.79-27.642 V129.918c0-11.119-8.454-16.885-18.79-12.784l-186.465,73.836c-10.352,4.103-18.812,16.551-18.812,27.646V477.55z" style="filter:url(#punch)"></path>
    </g>
</svg>
',
      ),
    ),
    'teamset' => 
    array (
      'templates' => 
      array (
        'detail' => '
{{#each value}}
<div class="control-group teamset">
     {{name}} {{name_2}} {{#if primary}}<label>({{str "LBL_COLLECTION_PRIMARY"}})</label>{{/if}}
</div>
{{/each}}
',
        'edit' => '
{{#each value}}
    <div class="control-group">
        <div class="controls controls-three btn-fit">
            <input type="hidden" name="{{../name}}" class="select2 inherit-width" value="{{name}} {{name_2}}" data-id="{{id}}" data-index="{{@index}}">
            <button type="button"{{#if def.tabindex}} tabindex="{{def.tabindex}}"{{/if}} class="btn third {{#if primary}}active{{/if}}" name="primary" data-index="{{@index}}" rel="tooltip" title="{{str "LBL_TEAM_PRIMARY"}}"><i class="icon-star"></i></button>
        {{#if remove_button}}
            <button type="button" class="btn second" name="remove" data-index="{{@index}}" rel="tooltip" title="{{str "LBL_TEAM_REMOVE"}}"><i class="icon-minus"></i></button>
        {{/if}}
        {{#if add_button}}
            <button type="button" class="btn first" name="add" data-index="{{@index}}" rel="tooltip" title="{{str "LBL_TEAM_ADD"}}"><i class="icon-plus"></i></button>
        {{/if}}
        </div>
    </div>
{{/each}}
{{#unless hideHelp}}{{#if def.help}}<p class="help-block">{{str def.help module}}</p>{{/if}}{{/unless}}
',
        'list' => '
{{value}}',
        'massupdate' => '
<div class="massupdate row-fluid">
    <div class="span9">
        {{! This part is directly from `edit.hbs`
            FIXME: use the `partial` hbs helper for this once INT-394 is available
        }}
        {{#each value}}
            <div class="control-group">
                <div class="controls controls-three btn-fit">
                    <input type="hidden" name="{{../name}}" class="select2 inherit-width" value="{{name}}" data-id="{{id}}" data-index="{{@index}}">
                    <button type="button"{{#if def.tabindex}} tabindex="{{def.tabindex}}"{{/if}} class="btn third {{#if primary}}active{{/if}}" name="primary" data-index="{{@index}}" rel="tooltip" title="{{str \'LBL_TEAM_PRIMARY\'}}"><i class="icon-star"></i></button>
                    {{#if remove_button}}
                        <button type="button" class="btn second" name="remove" data-index="{{@index}}" rel="tooltip" title="{{str \'LBL_TEAM_REMOVE\'}}"><i class="icon-minus"></i></button>
                    {{/if}}
                    {{#if add_button}}
                        <button type="button" class="btn first" name="add" data-index="{{@index}}" rel="tooltip" title="{{str \'LBL_TEAM_ADD\'}}"><i class="icon-plus"></i></button>
                    {{/if}}
                </div>
            </div>
        {{/each}}
        {{#unless hideHelp}}{{#if def.help}}<p class="help-block">{{str def.help module}}</p>{{/if}}{{/unless}}
    </div>
    <div class="span3">
        <label>
            <input type="checkbox" name="append_team"{{#if appendTeamValue}} checked{{/if}}> {{str \'LBL_SELECT_APPEND_TEAMS\'}}
        </label>
    </div>
</div>
',
        'merge-duplicates-edit' => '
{{#each value}}
    <div class="merge-row control-group">
        <div class="controls">
            {{#if id}}
                <input type="checkbox" name="copy_{{../../name}}_{{@index}}"
                       class="copy"
                       data-action="copy"
                       data-field-name="{{../../name}}"
                       data-record-id="{{../../model.attributes.id}}"
                       data-record-item-id="{{id}}" {{#if checked}}checked="checked"{{/if}} />
                <label>{{name}}</label>
                {{#if checked}}
                    <button type="button"
                            class="btn third {{#if primary}}active{{/if}}" name="primary"
                            data-index="{{@index}}" rel="tooltip"
                            data-placement="right"
                            data-original-title="{{str "LBL_TEAM_PRIMARY"}}">
                        <i class="icon-star"></i>
                    </button>
                {{/if}}
            {{/if}}
        </div>
    </div>
{{/each}}
',
        'merge-duplicates-list' => '
{{#each value}}
    <div class="merge-row control-group">
        <div class="controls">
            <label>{{name}}</label>
        </div>
    </div>
{{/each}}
',
        'options' => '
{{#each selectOptions}}
    <option value="{{getFieldValue this "id"}}" {{#eq @index 0}}selected="selected"{{/eq}}>{{getFieldValue this "name"}}</option>
{{/each}}
{{#eq selectOptions.length 0}}
    <option data-empty="true">{{str "MSG_LIST_VIEW_NO_RESULTS_BASIC"}}</option>
{{/eq}}
<option data-searchmore="true" value="{{str "LBL_SEARCH_FOR_MORE"}}" class="more">{{str "LBL_SEARCH_FOR_MORE"}}</option>',
      ),
    ),
    'textarea' => 
    array (
      'templates' => 
      array (
        'detail' => '
<div>
    {{#if value.short}}
        {{#if collapsed}}
            {{nl2br value.short}}&hellip;
        {{else}}
            {{nl2br value.long}}
        {{/if}}
        <button data-action="toggle" class="btn btn-link btn-invisible toggle-text">
            {{#if collapsed}}
                {{str \'LBL_TEXTAREA_MORE\' module}}
            {{else}}
                {{str \'LBL_TEXTAREA_LESS\' module}}
            {{/if}}
        </button>
    {{else}}
        {{nl2br value.long}}
    {{/if}}
</div>
',
        'disabled' => '
<textarea disabled="disabled" rows="{{def.rows}}" cols="{{def.cols}}" name="{{name}}"{{#if def.placeholder}}
          placeholder="{{str def.placeholder module}}"{{/if}}
          class="input-xlarge wide tleft"{{#if def.tabindex}} tabindex="{{def.tabindex}}"{{/if}}>
    {{value.long}}
</textarea>
{{#unless hideHelp}}{{#if def.help}}<p class="help-block">{{str def.help module}}</p>{{/if}}{{/unless}}
',
        'edit' => '
<textarea rows="{{def.rows}}" cols="{{def.cols}}" name="{{name}}"{{#if def.placeholder}}
          placeholder="{{str def.placeholder module}}"{{/if}}
          class="input-xlarge wide tleft"{{#if def.tabindex}} tabindex="{{def.tabindex}}"{{/if}}>{{value}}</textarea>
{{#unless hideHelp}}{{#if def.help}}<p class="help-block">{{str def.help module}}</p>{{/if}}{{/unless}}
',
        'list' => '
<div class="ellipsis_inline" data-placement="bottom" title="{{value.long}}">{{value.long}}</div>
',
      ),
    ),
    'timeperiod' => 
    array (
      'templates' => 
      array (
        'detail' => '
{{#if this.def.isMultiSelect}}
    {{#if value}}
        <div class="ellipsis_inline" data-placement="bottom" title="{{#each value}}{{#eachOptions ../items}}{{#eq key ../this}}{{#notEq @index 0}}, {{/notEq}}{{value}}{{/eq}}{{/eachOptions}}{{/each}}">{{#each value}}{{#eachOptions ../items}}{{#eq key ../this}}{{#notEq @index 0}}, {{/notEq}}{{value}}{{/eq}}{{/eachOptions}}{{/each}}</div>
    {{/if}}
{{else}}
    {{#if value}}
        {{#eachOptions items}}
            {{#eq this.key ../value}}
                <div class="ellipsis_inline" data-placement="bottom" title="{{value}}">
                    {{value}}
                </div>
            {{/eq}}
        {{/eachOptions}}
    {{/if}}
{{/if}}
',
        'disabled' => '
<input type="hidden" name="{{name}}" disabled="disabled">
{{#unless hideHelp}}{{#if def.help}}<p class="help-block">{{str def.help module}}</p>{{/if}}{{/unless}}
',
        'edit' => '
<input type="hidden" class="select2" name="{{name}}">
{{#unless hideHelp}}{{#if def.help}}<p class="help-block">{{str def.help module}}</p>{{/if}}{{/unless}}
',
        'list' => '
{{#if this.def.isMultiSelect}}
    {{#if value}}
        <div class="ellipsis_inline" data-placement="bottom"
             title="{{#each value}}{{#eachOptions ../items}}{{#eq key ../this}}{{#notEq @index 0}}, {{/notEq}}{{value}}{{/eq}}{{/eachOptions}}{{/each}}">
            {{#each value}}{{#eachOptions ../items}}{{#eq key ../this}}{{#notEq @index 0}}, {{/notEq}}{{value}}{{/eq}}{{/eachOptions}}{{/each}}
        </div>
    {{/if}}
{{else}}
    {{#if value}}
        {{#eachOptions items}}
            {{#eq this.key ../value}}
                <div class="ellipsis_inline" data-placement="bottom" title="{{value}}">
                    {{value}}
                </div>
            {{/eq}}
        {{/eachOptions}}
    {{/if}}
{{/if}}
',
        'tooltip' => '
<div rel="tooltip" data-placement="right" data-original-title="{{str "LBL_DROPDOWN_TOOLTIP" "TimePeriods" tooltip}}">
    {{value}}
</div>
',
      ),
    ),
    'url' => 
    array (
      'templates' => 
      array (
        'detail' => '
{{#if value}}
    <a class="ellipsis_inline" data-placement="bottom" title="{{value}}" {{#if def.link_target}}target="{{def.link_target}}"{{/if}} href="{{value}}">{{value}}</a>
{{/if}}
',
        'edit' => '
<input type="text" name="{{name}}" value="{{value}}"{{#if def.len}} maxlength="{{def.len}}"{{/if}}{{#if def.tabindex}} tabindex="{{def.tabindex}}"{{/if}}{{#if def.placeholder}} placeholder=\'{{str def.placeholder this.model.module}}\'{{/if}} class="input-large">
{{#unless hideHelp}}{{#if def.help}}<p class="help-block">{{str def.help module}}</p>{{/if}}{{/unless}}
',
      ),
    ),
    '_hash' => '6bf76b86ed0244b0e744b8678ba726b6',
  ),
  'views' => 
  array (
    'login' => 
    array (
      'templates' => 
      array (
        'login' => '
<div class="welcome">
    <div class="thumbnail login">
        <div class="tcenter">
            {{!
                Include a custom OEM logo on the login page
            }}
            <img style=\'vertical-align: middle; 130px; height: 65px; padding-bottom: 10px;\' src=\'custom/themes/default/images/clogo.png\' alt=\'Logo\'>
        </div>
        <form name=\'{{name}}\' class="tcenter">
            {{#each meta.panels}}
                {{#each fields}}
                    <div class="control-group">{{field ../../this model=../../model}}</div>
                {{/each}}
                <p class="help-block">
                    {{#if ../showPasswordReset}}
                        <a href="#forgotpassword" class="btn btn-link btn-invisible">{{str "LBL_LOGIN_FORGOT_PASSWORD"}}</a>
                    {{/if}}
                </p>
            {{/each}}
            <div class="login-footer">
                {{#each meta.buttons}}
                    {{field ../this model=../model}}
                {{/each}}
            </div>
        </form>
    </div>
</div>
',
      ),
      'meta' => 
      array (
        'action' => 'edit',
        'buttons' => 
        array (
          0 => 
          array (
            'name' => 'login_button',
            'type' => 'button',
            'label' => 'LBL_LOGIN_BUTTON_LABEL',
            'primary' => true,
          ),
        ),
        'panels' => 
        array (
          0 => 
          array (
            'label' => 'LBL_PANEL_DEFAULT',
            'fields' => 
            array (
              0 => 
              array (
                'name' => 'username',
                'type' => 'text',
                'placeholder' => 'LBL_LIST_USER_NAME',
                'no_required_placeholder' => true,
                'required' => true,
              ),
              1 => 
              array (
                'name' => 'password',
                'type' => 'password',
                'placeholder' => 'LBL_PASSWORD',
                'no_required_placeholder' => true,
                'required' => true,
              ),
            ),
          ),
        ),
      ),
    ),
    'profileactions' => 
    array (
      'meta' => 
      array (
        0 => 
        array (
          'route' => '#bwc/index.php?module=Users&action=DetailView&record=',
          'label' => 'LBL_PROFILE',
          'css_class' => 'profileactions-profile',
          'acl_action' => 'view',
          'icon' => 'icon-user',
          'submenu' => '',
        ),
        1 => 
        array (
          'route' => '#bwc/index.php?module=Employees&action=index&query=true',
          'label' => 'LBL_EMPLOYEES',
          'css_class' => 'profileactions-employees',
          'acl_action' => 'list',
          'icon' => 'icon-group',
          'submenu' => '',
        ),
        2 => 
        array (
          'route' => '#bwc/index.php?module=Administration&action=index',
          'label' => 'LBL_ADMIN',
          'css_class' => 'administration',
          'acl_action' => 'admin',
          'icon' => 'icon-cogs',
          'submenu' => '',
        ),
        3 => 
        array (
          'route' => '#logout/?clear=1',
          'label' => 'LBL_LOGOUT',
          'css_class' => 'profileactions-logout',
          'icon' => 'icon-signout',
          'submenu' => '',
        ),
        4 => 
        array (
          'route' => '#about',
          'label' => 'LNK_ABOUT',
          'css_class' => 'profileactions-about',
          'acl_action' => 'view',
          'icon' => 'icon-info-sign',
          'submenu' => '',
        ),
      ),
      'templates' => 
      array (
        'profileactions' => '
<ul class="nav megamenu" id="userList">
    <li class="dropdown" id="userActions" data-menu="user-actions">
        <div class="btn-group">
            <button id="userTab" data-toggle="dropdown" class="btn btn-invisible btn-link dropdown-toggle" rel="tooltip" data-placement="bottom" title="{{userName}}" track="click:userActions" aria-label="{{str \'LBL_USER_MENU\'}}">
                {{#if pictureUrl}}
                    <img src="{{pictureUrl}}" alt="{{userName}}" class="avatar avatar-btn">
                {{else}}
                    <i class="icon-user icon-3X"></i>
                {{/if}}
                <i class="icon-caret-down"></i>
            </button>
            <div class="dropdown-menu scroll pull-right">
                <ul role="menu" id="fullmenu">
                    {{#each menulist}}
                        {{#if css_class}}<li class="{{css_class}}">{{else}}<li>{{/if}}
                            <a href="{{route}}" {{#unless submenu}}{{#if openwindow}}target="_blank"{{/if}}{{/unless}} track="click:userAction-{{label}}" tabindex="-1">
                                {{#if img_url}}<img src="{{img_url}}" alt="{{../../userName}}" class="avatar avatar-sm">{{else}}{{#if icon}}<i class="{{icon}}"></i>{{/if}}{{/if}}{{str label}}
                                {{#if submenu}}
                                <button href="javascript:void(0)" data-action="link" class="btn btn-invisible dropdown-submenu" tabindex="-1">
                                    <i class="icon-caret-down"></i>
                                </button>
                                {{/if}}
                            </a>
                            {{#if submenu.length}}
                                <ul class="dropdown-inset">
                                    {{#each submenu}}
                                        <li {{#if css_class}}class="{{css_class}}"{{/if}}>
                                            <a href="{{route}}" {{#if openwindow}}target="_blank"{{/if}} tabindex="-1">
                                                {{#if icon}}<i class="{{icon}}"></i>{{/if}}{{str label}}
                                            </a>
                                        </li>
                                    {{/each}}
                                </ul>
                            {{/if}}
                        </li>
                    {{/each}}
                </ul>
            </div>
        </div>
    </li>
</ul>
',
      ),
    ),
    'access-denied' => 
    array (
      'templates' => 
      array (
        'access-denied' => '
<div class="error-message">
    <h1>{{str \'ERR_NO_VIEW_ACCESS_TITLE\'}}</h1>
    <p>{{str \'ERR_NO_VIEW_ACCESS_REASON\'}}</p>
    <p>{{{str \'ERR_NO_VIEW_ACCESS_ACTION\'}}}</p>
</div>
<div class="sugar-cube-wrapper">
    {{{subFieldTemplate \'sugar-cube\' \'detail\' cubeOptions}}}
</div>
',
      ),
    ),
    'active-tasks' => 
    array (
      'meta' => 
      array (
        'dashlets' => 
        array (
          0 => 
          array (
            'label' => 'LBL_ACTIVE_TASKS_DASHLET',
            'description' => 'LBL_ACTIVE_TASKS_DASHLET_DESCRIPTION',
            'config' => 
            array (
              'limit' => 10,
              'visibility' => 'user',
            ),
            'preview' => 
            array (
              'limit' => 10,
              'visibility' => 'user',
            ),
            'filter' => 
            array (
              'module' => 
              array (
                0 => 'Accounts',
                1 => 'Bugs',
                2 => 'Cases',
                3 => 'Contacts',
                4 => 'Home',
                5 => 'Leads',
                6 => 'Opportunities',
                7 => 'Prospects',
                8 => 'RevenueLineItems',
              ),
              'view' => 'record',
            ),
          ),
        ),
        'custom_toolbar' => 
        array (
          'buttons' => 
          array (
            0 => 
            array (
              'type' => 'actiondropdown',
              'no_default_action' => true,
              'icon' => 'icon-plus',
              'buttons' => 
              array (
                0 => 
                array (
                  'type' => 'dashletaction',
                  'action' => 'createRecord',
                  'params' => 
                  array (
                    'module' => 'Tasks',
                    'link' => 'tasks',
                  ),
                  'label' => 'LBL_CREATE_TASK',
                  'acl_action' => 'create',
                  'acl_module' => 'Tasks',
                ),
              ),
            ),
            1 => 
            array (
              'dropdown_buttons' => 
              array (
                0 => 
                array (
                  'type' => 'dashletaction',
                  'action' => 'editClicked',
                  'label' => 'LBL_DASHLET_CONFIG_EDIT_LABEL',
                ),
                1 => 
                array (
                  'type' => 'dashletaction',
                  'action' => 'refreshClicked',
                  'label' => 'LBL_DASHLET_REFRESH_LABEL',
                ),
                2 => 
                array (
                  'type' => 'dashletaction',
                  'action' => 'toggleClicked',
                  'label' => 'LBL_DASHLET_MINIMIZE',
                  'event' => 'minimize',
                ),
                3 => 
                array (
                  'type' => 'dashletaction',
                  'action' => 'removeClicked',
                  'label' => 'LBL_DASHLET_REMOVE_LABEL',
                ),
              ),
            ),
          ),
        ),
        'panels' => 
        array (
          0 => 
          array (
            'name' => 'panel_body',
            'columns' => 2,
            'labelsOnTop' => true,
            'placeholders' => true,
            'fields' => 
            array (
              0 => 
              array (
                'name' => 'visibility',
                'label' => 'LBL_DASHLET_CONFIGURE_MY_ITEMS_ONLY',
                'type' => 'enum',
                'options' => 'tasks_visibility_options',
              ),
              1 => 
              array (
                'name' => 'limit',
                'label' => 'LBL_DASHLET_CONFIGURE_DISPLAY_ROWS',
                'type' => 'enum',
                'options' => 'tasks_limit_options',
              ),
            ),
          ),
        ),
        'tabs' => 
        array (
          0 => 
          array (
            'active' => true,
            'filters' => 
            array (
              'status' => 
              array (
                '$not_in' => 
                array (
                  0 => 'Completed',
                  1 => 'Deferred',
                ),
              ),
              'date_due' => 
              array (
                '$lte' => 'today',
              ),
            ),
            'label' => 'LBL_ACTIVE_TASKS_DASHLET_DUE_NOW',
            'link' => 'tasks',
            'module' => 'Tasks',
            'order_by' => 'date_due:asc',
            'record_date' => 'date_due',
            'row_actions' => 
            array (
              0 => 
              array (
                'type' => 'rowaction',
                'icon' => 'icon-remove-circle',
                'css_class' => 'btn btn-mini',
                'event' => 'active-tasks:close-task:fire',
                'target' => 'view',
                'tooltip' => 'LBL_ACTIVE_TASKS_DASHLET_COMPLETE_TASK',
                'acl_action' => 'edit',
              ),
              1 => 
              array (
                'type' => 'unlink-action',
                'icon' => 'icon-unlink',
                'css_class' => 'btn btn-mini',
                'event' => 'tabbed-dashlet:unlink-record:fire',
                'target' => 'view',
                'tooltip' => 'LBL_UNLINK_BUTTON',
                'acl_action' => 'edit',
              ),
            ),
            'overdue_badge' => 
            array (
              'name' => 'date_due',
              'type' => 'overdue-badge',
              'css_class' => 'pull-right',
            ),
          ),
          1 => 
          array (
            'filters' => 
            array (
              'status' => 
              array (
                '$not_in' => 
                array (
                  0 => 'Completed',
                  1 => 'Deferred',
                ),
              ),
              'date_due' => 
              array (
                '$gt' => 'today',
              ),
            ),
            'label' => 'LBL_ACTIVE_TASKS_DASHLET_UPCOMING',
            'link' => 'tasks',
            'module' => 'Tasks',
            'order_by' => 'date_due:asc',
            'record_date' => 'date_due',
            'row_actions' => 
            array (
              0 => 
              array (
                'type' => 'rowaction',
                'icon' => 'icon-remove-circle',
                'css_class' => 'btn btn-mini',
                'event' => 'active-tasks:close-task:fire',
                'target' => 'view',
                'tooltip' => 'LBL_ACTIVE_TASKS_DASHLET_COMPLETE_TASK',
                'acl_action' => 'edit',
              ),
              1 => 
              array (
                'type' => 'unlink-action',
                'icon' => 'icon-unlink',
                'css_class' => 'btn btn-mini',
                'event' => 'tabbed-dashlet:unlink-record:fire',
                'target' => 'view',
                'tooltip' => 'LBL_UNLINK_BUTTON',
                'acl_action' => 'edit',
              ),
            ),
          ),
          2 => 
          array (
            'filters' => 
            array (
              'status' => 
              array (
                '$not_in' => 
                array (
                  0 => 'Completed',
                  1 => 'Deferred',
                ),
              ),
              'date_due' => 
              array (
                '$is_null' => '',
              ),
            ),
            'label' => 'LBL_ACTIVE_TASKS_DASHLET_TODO',
            'link' => 'tasks',
            'module' => 'Tasks',
            'order_by' => 'date_entered:asc',
            'row_actions' => 
            array (
              0 => 
              array (
                'type' => 'rowaction',
                'icon' => 'icon-remove-circle',
                'css_class' => 'btn btn-mini',
                'event' => 'active-tasks:close-task:fire',
                'target' => 'view',
                'tooltip' => 'LBL_ACTIVE_TASKS_DASHLET_COMPLETE_TASK',
                'acl_action' => 'edit',
              ),
              1 => 
              array (
                'type' => 'unlink-action',
                'icon' => 'icon-unlink',
                'css_class' => 'btn btn-mini',
                'event' => 'tabbed-dashlet:unlink-record:fire',
                'target' => 'view',
                'tooltip' => 'LBL_UNLINK_BUTTON',
                'acl_action' => 'edit',
              ),
            ),
          ),
        ),
        'visibility_labels' => 
        array (
          'user' => 'LBL_ACTIVE_TASKS_DASHLET_USER_BUTTON_LABEL',
          'group' => 'LBL_ACTIVE_TASKS_DASHLET_GROUP_BUTTON_LABEL',
        ),
      ),
      'templates' => 
      array (
        'records' => '
<div class="tab-pane active">
    {{#if collection.length}}
        <ul class="unstyled listed" data-action="pagination-body">
            {{#each collection.models}}
                <li>
                    {{#if ../../row_actions}}
                        <div class="actions pull-right">
                            {{#each ../../row_actions}}
                                {{field ../../../this model=../this}}
                            {{/each}}
                        </div>
                    {{/if}}
                    {{#if ../overdueBadge}}
                        {{#with ../../overdueBadge}}
                            {{field ../../../this model=../../this template=\'detail\'}}
                        {{/with}}
                    {{/if}}
                    <p>
                        {{#if attributes.assigned_user_id}}
                            <a href="#{{buildRoute module="Employees" id=attributes.assigned_user_id action="detail"}}" class="pull-left avatar avatar-md" data-title="{{getFieldValue this "assigned_user_name"}}">
                                <img src="{{getFieldValue this "picture_url"}}" alt="{{getFieldValue this "assigned_user_name"}}">
                            </a>
                        {{else}}
                            <span class="icon-stack pull-left">
                                <i class="icon-user icon-stack-base"></i>
                                <i class="icon-question-sign icon-light"></i>
                            </span>
                        {{/if}}
                        <a href="#{{buildRoute model=this action="detail"}}">{{getFieldValue this "name"}}</a>
                    </p>
                    <div class="details">
                        {{#if attributes.assigned_user_id}}
                            <a href="#{{buildRoute module="Employees" id=attributes.assigned_user_id action="detail"}}">{{getFieldValue this "assigned_user_name"}}</a>&#44;
                        {{else}}
                            {{str "LBL_UNASSIGNED" this.module}}&#44;
                        {{/if}}
                        {{relativeTime attributes.record_date class=\'date\'}}
                    </div>
                </li>
            {{/each}}
        </ul>
    {{else}}
        <div class="block-footer">{{#if ../collection.dataFetched}}{{str "LBL_NO_DATA_AVAILABLE" this.module}}{{else}}{{str "LBL_LOADING" this.module}}{{/if}}</div>
    {{/if}}
</div>
',
        'row' => '
{{#with rowModel}}
    <li>
        {{#if ../row_actions}}
            <div class="actions pull-right">
                {{#each ../../row_actions}}
                    {{field ../../../this model=../this}}
                {{/each}}
            </div>
        {{/if}}
        <p>
            {{#if attributes.assigned_user_id}}
                <a href="#{{buildRoute module="Employees" id=attributes.assigned_user_id action="detail"}}" class="pull-left avatar avatar-md" data-title="{{getFieldValue this "assigned_user_name"}}">
                    <img src="{{getFieldValue this "picture_url"}}" alt="{{getFieldValue this "assigned_user_name"}}">
                </a>
            {{else}}
                <span class="icon-stack pull-left">
                                <i class="icon-user icon-stack-base"></i>
                                <i class="icon-question-sign icon-light"></i>
                            </span>
            {{/if}}
            <a href="#{{buildRoute model=this action="detail"}}">{{getFieldValue this "name"}}</a>
        </p>
        {{#if ../overdueBadge}}
            {{#with ../../overdueBadge}}
                {{field ../../../this model=../../this template=\'detail\'}}
            {{/with}}
        {{/if}}
        <div class="details">
            {{#if attributes.assigned_user_id}}
                <a href="#{{buildRoute module="Employees" id=attributes.assigned_user_id action="detail"}}">
                    {{getFieldValue this "assigned_user_name"}}&#44;
                </a>
            {{else}}
                {{str "LBL_UNASSIGNED" this.module}}&#44;
            {{/if}}
            {{relativeTime attributes.record_date class=\'date\'}}
        </div>
    </li>
{{/with}}
',
      ),
    ),
    'activitystream' => 
    array (
      'templates' => 
      array (
        'activitystream' => '
{{#eq model.attributes.activity_type "post"}}
    <a href="#{{buildRoute module="Employees" id=model.attributes.created_by}}" id="avatar-post-{{model.attributes.id}}" class="pull-left avatar avatar-md" rel="tooltip" data-title="{{model.attributes.created_by_name}}" data-placement="right">
        {{#if model.attributes.picture_url}}
            <img src="{{model.attributes.picture_url}}" alt="{{model.attributes.created_by_name}}">
        {{else}}
            <i class="icon-user icon-2x" alt="{{model.attributes.created_by_name}}"></i>
        {{/if}}
    </a>
{{else}}
    <div class="label label-module label-module-md label-{{model.attributes.display_parent_type}} pull-left" rel="tooltip" data-placement="right" title="{{moduleIconToolTip model.attributes.display_parent_type}}">
        {{moduleIconLabel model.attributes.display_parent_type}}
    </div>
{{/eq}}
<p>
    {{#if tpl}}
        <div><span class="tagged">{{{str tpl "Activities" model.attributes.data}}}</span></div>
    {{/if}}
    {{#if embeds}}
        <div class="embed">
            {{#each embeds}}
                <div>{{{this}}}</div>
            {{/each}}
        </div>
    {{/if}}
</p>
<span class="details">
    <a href="#{{buildRoute module="Employees" id=model.attributes.created_by}}">{{model.attributes.created_by_name}}</a>
    <date class="date">
        <span class="relativetime">
            {{#if useRelativeTime}}
                {{relativeTime model.attributes.date_entered class=\'date\' rel=\'tooltip\'}}
            {{else}}
                {{str "LBL_ACTIVITYSTREAM_RELATIVETIME_ON"}}{{formatDate model.attributes.date_entered}}
            {{/if}}
        </span>
    </date>
</span>
<ul class="comments">
    {{#if model.attributes.comment_count}}
        {{#each model.attributes.comments.models}}
            {{#with attributes}}
                {{{subViewTemplate "activitystream.comment" this useRelativeTime=../../useRelativeTime}}}
            {{/with}}
        {{/each}}
        {{#if remaining_comments}}
            <li class="comment more-comments">
                <a class="more">
                    {{str more_tpl "Activities" remaining_comments}}
                </a>
            </li>
        {{/if}}
    {{/if}}
    {{#unless readonly}}
        <li class="comment reply-area hide">
            <div class="reply-input">
                <div data-placeholder="{{str "LBL_ACTIVITYSTREAM_COMMENT_PLACEHOLDER"}}" class="reply taggable" contenteditable="true"></div>
                <button class="btn btn-primary reply-btn">{{str "LBL_EMAIL_REPLY"}}</button>
            </div>
        </li>
    {{/unless}}
</ul>
{{#unless readonly}}
    <div class="actions btn-group">
        <a class="btn btn-mini comment-btn" rel="tooltip" title="{{str \'LBL_COMMENT\'}}">
            <i class="icon-comment"></i>
        </a>
        {{#unless nopreview}}
            <a class="btn btn-mini preview-btn {{#unless preview.enabled}}disabled{{/unless}}" rel="tooltip" title="{{str preview.label}}" data-module="{{model.attributes.display_parent_type}}" data-id="{{model.attributes.display_parent_id}}">
                <i class="icon-eye-open"></i>
            </a>
        {{/unless}}
    </div>
{{/unless}}
',
        'comment' => '
<li class="comment">
    <a href="#{{buildRoute module="Employees" id=created_by}}" id="avatar-comment-{{id}}" class="pull-left avatar" rel="tooltip" data-placement="right" title="{{created_by_name}}">
        {{#if picture_url}}
            <img src="{{picture_url}}" alt="{{created_by_name}}">
        {{else}}
            <i class="icon-user"></i>
        {{/if}}
    </a>
    <p>
        <span class="tagged">{{{str "TPL_COMMENT" "Activities" data}}}</span>
        <br />
        <a href="#{{buildRoute module="Employees" id=created_by}}">{{created_by_name}}</a>
        <date class="date">
            <span class="relativetime">
                {{#if @useRelativeTime}}
                    {{relativeTime date_entered class=\'date\' rel=\'tooltip\'}}
                {{else}}
                    {{str "LBL_ACTIVITYSTREAM_RELATIVETIME_ON"}}{{formatDate date_entered}}
                {{/if}}
            </span>
        </date>
    </p>
</li>
',
        'imageEmbed' => '
<img src="{{src}}" data-note-id="{{noteId}}"/>
',
        'richEmbed' => '
{{{html}}}
',
        'videoEmbed' => '
{{{html}}}
',
      ),
    ),
    'activitystream-bottom' => 
    array (
      'templates' => 
      array (
        'activitystream-bottom' => '
{{#if collection.dataFetched}}
    {{#unless collection.length}}
        <div class="block-footer">
            {{str "LBL_NO_DATA_AVAILABLE"}}
        </div>
    {{/unless}}
{{/if}}
',
      ),
    ),
    'activitystream-dashlet' => 
    array (
      'templates' => 
      array (
        'activitystream-dashlet' => '
<div class="omnibar-dashlet hide"></div>
<ul class="activitystream-list results"></ul>
<div class="block-footer {{#unless collection.length}}hide{{/unless}}">
    {{str "LBL_NO_DATA_AVAILABLE"}}
</div>
',
        'dashlet-config' => '
<div class="record">
    {{#each dashletConfig.config.fields}}
        <div class="row-fluid panel_body">
            <div class="span6 record-cell">
                <div class="record-label">{{str label}}</div>
                {{field ../this model=../this.settings template=../this.action}}
            </div>
        </div>
    {{/each}}
</div>
',
        'disabled' => '

<div class="block-footer">
    {{str \'LBL_ACTIVITY_STREAM_DISABLED_MODULE\'}}
</div>
',
      ),
      'meta' => 
      array (
        'dashlets' => 
        array (
          0 => 
          array (
            'label' => 'LBL_ACTIVITY_STREAM_DASHLET_NAME',
            'description' => 'LBL_ACTIVITY_STREAM_DASHLET_DESCRIPTION',
            'config' => 
            array (
              'module' => 'Activities',
              'limit' => 5,
            ),
            'preview' => 
            array (
              'module' => 'Activities',
              'limit' => 5,
            ),
            'filter' => 
            array (
              'view' => 
              array (
                0 => 'record',
                1 => 'records',
              ),
            ),
          ),
        ),
        'custom_toolbar' => 
        array (
          'buttons' => 
          array (
            0 => 
            array (
              'type' => 'dashletaction',
              'css_class' => 'btn btn-invisible addComment',
              'icon' => 'icon-plus',
              'action' => 'addComment',
              'tooltip' => 'New comment',
            ),
            1 => 
            array (
              'type' => 'dashletaction',
              'css_class' => 'dashlet-toggle btn btn-invisible minify',
              'icon' => 'icon-chevron-up',
              'action' => 'toggleMinify',
              'tooltip' => 'LBL_DASHLET_MINIMIZE',
            ),
            2 => 
            array (
              'dropdown_buttons' => 
              array (
                0 => 
                array (
                  'type' => 'dashletaction',
                  'action' => 'editClicked',
                  'label' => 'LBL_DASHLET_CONFIG_EDIT_LABEL',
                ),
                1 => 
                array (
                  'type' => 'dashletaction',
                  'action' => 'refreshClicked',
                  'label' => 'LBL_DASHLET_REFRESH_LABEL',
                ),
                2 => 
                array (
                  'type' => 'dashletaction',
                  'action' => 'toggleClicked',
                  'label' => 'LBL_DASHLET_MINIMIZE',
                  'event' => 'minimize',
                ),
                3 => 
                array (
                  'type' => 'dashletaction',
                  'action' => 'removeClicked',
                  'label' => 'LBL_DASHLET_REMOVE_LABEL',
                ),
              ),
            ),
          ),
        ),
        'config' => 
        array (
          'fields' => 
          array (
            0 => 
            array (
              'name' => 'limit',
              'label' => 'LBL_DASHLET_CONFIGURE_DISPLAY_ROWS',
              'type' => 'enum',
              'options' => 'dashlet_limit_options',
            ),
            1 => 
            array (
              'name' => 'auto_refresh',
              'label' => 'LBL_REPORT_AUTO_REFRESH',
              'type' => 'enum',
              'options' => 'sugar7_dashlet_auto_refresh_options',
            ),
          ),
        ),
      ),
    ),
    'activitystream-omnibar' => 
    array (
      'templates' => 
      array (
        'activitystream-omnibar' => '

<div class="inputwrapper">
    <div contenteditable="true" class="sayit attachable taggable" data-placeholder="{{str "LBL_ACTIVITYSTREAM_POST_PLACEHOLDER"}}" />
    <div class="inputactions">
        <button class="pull-right btn btn-primary addPost disabled" track="click:addPost">{{str \'LBL_SUBMIT_BUTTON_LABEL\'}}</button>
    </div>
</div>
',
      ),
    ),
    'alert' => 
    array (
      'templates' => 
      array (
        'confirmation' => '
<div class="alert-page-overlay"></div>
<div class="alert-confirmation">
    <div class="alert {{alertClass}} alert-block">
        {{#if title}}<strong>{{title}}</strong>{{/if}}
        <div class="alert-messages">{{#each messages}}{{./this}}{{/each}}</div>
        <div class="row-fluid">
            <a class="span6 alert-btn-cancel" data-action="cancel">{{str \'LBL_CANCEL_BUTTON_LABEL\'}}</a>
            <a class="span6 alert-btn-confirm" data-action="confirm">{{str \'LBL_CONFIRM_BUTTON_LABEL\'}}</a>
        </div>
    </div>
</div>
',
        'error' => '
<div class="alert {{alertClass}} alert-block">
    <button class="close" data-action="close"><i class="icon-remove"></i></button>
    {{#if title}}<strong>{{title}}</strong>{{/if}}
    {{#each messages}}{{./this}}{{/each}}
</div>
',
        'process' => '
<div class="alert {{alertClass}}">
    <strong>{{title}}</strong>
    <div class="loading">
        <i class="l1 icon-circle"></i><i class="l2 icon-circle"></i><i class="l3 icon-circle"></i>
    </div>
</div>
',
      ),
    ),
    'attachments' => 
    array (
      'templates' => 
      array (
        'attachments' => '
{{#if collection.dataFetched}}
    <ul class="unstyled listed" data-action="pagination-body">
    {{#each this.collection.models}}
        <li>
            <div class="actions pull-right">
                {{#each ../../dashletConfig.rowactions}}
                    {{field ../../../this model=../this}}
                {{/each}}
            </div>
            {{#if attributes.filename}}
                <span class="filetype-thumbnail pull-left" data-mime="{{attributes.file_mime_type}}"></span>
            {{else}}
                <div class="label label-module label-{{../module}} pull-left">{{moduleIconLabel ../module}}</div>
            {{/if}}
            <p>
                <a href="#{{buildRoute model=this}}">{{getFieldValue this "name"}}</a>
            </p>
            <div class="details">
                <date class="date">
                    <a href="#{{buildRoute module="Employees" id=this.attributes.assigned_user_id action="detail"}}">{{this.attributes.assigned_user_name}}</a>&#44;
                    {{timeago this.attributes.date_entered}}
                </date>
            </div>
        </li>
    {{/each}}
    </ul>
    {{#unless collection.length}}
    <div class="block-footer">{{str "LBL_NO_DATA_AVAILABLE" this.module}}</div>
    {{/unless}}
{{/if}}
',
        'row' => '
{{#with rowModel}}
    <li>
        <div class="actions pull-right">
            {{#each ../dashletConfig.rowactions}}
                {{field ../../this model=../this}}
            {{/each}}
        </div>
        {{#if attributes.filename}}
            <span class="filetype-thumbnail pull-left" data-mime="{{attributes.file_mime_type}}"></span>
        {{else}}
            <div class="label label-module label-{{../module}} pull-left">{{moduleIconLabel ../module}}</div>
        {{/if}}
        <p>
            <a href="#{{buildRoute model=this}}">{{getFieldValue this "name"}}</a>
        </p>
        <div class="details">
            <date class="date">
                <a href="#{{buildRoute module="Employees" id=this.attributes.assigned_user_id action="detail"}}">{{this.attributes.assigned_user_name}}</a>&#44;
                {{timeago this.attributes.date_entered}}
            </date>
        </div>
    </li>
{{/with}}
',
        'svg-icon' => '
<svg xmlns:svg="http://www.w3.org/2000/svg" xmlns="http://www.w3.org/2000/svg" version="1.1" width="28" height="33" id="filetype-svg2">
	<g id="layer1">
		<path d="m 1,1 19,0 7,7 0,24 -26,0 z" id="rect2985" style="fill:#ececec;stroke:#000000;stroke-width:1px;stroke-linecap:butt;stroke-linejoin:miter;stroke-miterlimit:4" />
		<path d="m 20,1 0,7 7,0 z" style="fill:#cccccc;stroke:#000000;stroke-width:1px;stroke-linecap:square;stroke-linejoin:round;" />
	</g>
</svg>',
      ),
      'meta' => 
      array (
        'dashlets' => 
        array (
          0 => 
          array (
            'label' => 'LBL_DASHLET_ATTACHMENTS_NAME',
            'description' => 'LBL_DASHLET_ATTACHMENTS_DESCRIPTION',
            'config' => 
            array (
              'auto_refresh' => '0',
              'module' => 'Notes',
              'link' => 'notes',
            ),
            'preview' => 
            array (
              'module' => 'Notes',
              'link' => 'notes',
            ),
            'filter' => 
            array (
              'module' => 
              array (
                0 => 'Accounts',
                1 => 'Contacts',
                2 => 'Opportunities',
                3 => 'Leads',
                4 => 'Bugs',
                5 => 'Cases',
                6 => 'RevenueLineItems',
              ),
              'view' => 'record',
            ),
          ),
        ),
        'custom_toolbar' => 
        array (
          'buttons' => 
          array (
            0 => 
            array (
              'type' => 'actiondropdown',
              'icon' => 'icon-plus',
              'no_default_action' => true,
              'buttons' => 
              array (
                0 => 
                array (
                  'type' => 'dashletaction',
                  'css_class' => '',
                  'label' => 'LBL_CREATE_RELATED_RECORD',
                  'action' => 'openCreateDrawer',
                ),
                1 => 
                array (
                  'type' => 'dashletaction',
                  'css_class' => '',
                  'label' => 'LBL_ASSOC_RELATED_RECORD',
                  'action' => 'openSelectDrawer',
                ),
              ),
            ),
            1 => 
            array (
              'dropdown_buttons' => 
              array (
                0 => 
                array (
                  'type' => 'dashletaction',
                  'action' => 'editClicked',
                  'label' => 'LBL_DASHLET_CONFIG_EDIT_LABEL',
                ),
                1 => 
                array (
                  'type' => 'dashletaction',
                  'action' => 'refreshClicked',
                  'label' => 'LBL_DASHLET_REFRESH_LABEL',
                ),
                2 => 
                array (
                  'type' => 'dashletaction',
                  'action' => 'toggleClicked',
                  'label' => 'LBL_DASHLET_MINIMIZE',
                  'event' => 'minimize',
                ),
                3 => 
                array (
                  'type' => 'dashletaction',
                  'action' => 'removeClicked',
                  'label' => 'LBL_DASHLET_REMOVE_LABEL',
                ),
              ),
            ),
          ),
        ),
        'rowactions' => 
        array (
          0 => 
          array (
            'type' => 'rowaction',
            'icon' => 'icon-unlink',
            'css_class' => 'btn btn-mini',
            'event' => 'attachment:unlinkrow:fire',
            'target' => 'view',
            'tooltip' => 'LBL_UNLINK_BUTTON',
            'acl_action' => 'edit',
          ),
        ),
        'panels' => 
        array (
          0 => 
          array (
            'name' => 'panel_body',
            'columns' => 2,
            'labelsOnTop' => true,
            'placeholders' => true,
            'fields' => 
            array (
              0 => 
              array (
                'name' => 'limit',
                'label' => 'Display Rows',
                'type' => 'enum',
                'options' => 
                array (
                  5 => 5,
                  10 => 10,
                  15 => 15,
                  20 => 20,
                ),
              ),
              1 => 
              array (
                'name' => 'auto_refresh',
                'label' => 'Auto Refresh',
                'type' => 'enum',
                'options' => 'sugar7_dashlet_auto_refresh_options',
              ),
            ),
          ),
        ),
        'supportedImageExtensions' => 
        array (
          'image/jpeg' => 'JPG',
          'image/gif' => 'GIF',
          'image/png' => 'PNG',
        ),
        'defaultType' => 'txt',
      ),
    ),
    'audit' => 
    array (
      'meta' => 
      array (
        'template' => 'filtered-list',
        'panels' => 
        array (
          0 => 
          array (
            'fields' => 
            array (
              0 => 
              array (
                'type' => 'fieldtype',
                'name' => 'field_name',
                'label' => 'LBL_FIELD_NAME',
                'sortable' => true,
                'filter' => 'startsWith',
              ),
              1 => 
              array (
                'type' => 'base',
                'name' => 'before',
                'label' => 'LBL_OLD_NAME',
                'sortable' => false,
                'filter' => 'contains',
              ),
              2 => 
              array (
                'type' => 'base',
                'name' => 'after',
                'label' => 'LBL_NEW_VALUE',
                'sortable' => false,
                'filter' => 'contains',
              ),
              3 => 
              array (
                'type' => 'base',
                'name' => 'created_by_username',
                'label' => 'LBL_CREATED_BY',
                'sortable' => true,
              ),
              4 => 
              array (
                'type' => 'datetimecombo',
                'name' => 'date_created',
                'label' => 'LBL_LIST_DATE',
                'options' => 'date_range_search_dom',
                'sortable' => true,
              ),
            ),
          ),
        ),
      ),
    ),
    'audit-footer' => 
    array (
      'templates' => 
      array (
        'audit-footer' => '
<div class="inline-drawer">
    <article class="inline-drawer-header row-fluid">
        <div class="span12">
            {{#if auditedFields}}
                {{str "LBL_AUDITED_FIELDS" this.module}}
                {{arrayJoin auditedFields ", "}}
            {{else}}
                {{str "LBL_NO_AUDITED_FIELDS_TEXT" this.module}}
            {{/if}}
        </div>
    </article>
</div>
',
      ),
    ),
    'audit-headerpane' => 
    array (
      'meta' => 
      array (
        'template' => 'headerpane',
        'fields' => 
        array (
          0 => 
          array (
            'name' => 'title',
            'type' => 'label',
            'default_value' => 'LBL_AUDIT_TITLE',
          ),
        ),
        'buttons' => 
        array (
          0 => 
          array (
            'name' => 'close_button',
            'type' => 'button',
            'label' => 'LBL_CLOSE_BUTTON_TITLE',
            'css_class' => 'btn-invisible btn-link',
          ),
        ),
      ),
    ),
    'bubblechart' => 
    array (
      'templates' => 
      array (
        'bubblechart' => '
<div class="dashlet-options">
    <div class="row-fluid">
        <div class="span8">
            {{#each dashletConfig.filter_duration}}
                {{field ../this model=../this.settings template="edit"}}
            {{/each}}
        </div>
        {{#if isManager}}
            <div class="span4">
                <div data-toggle="buttons-radio" class="btn-group pull-right dashlet-group">
                    <button class="btn toggle-control {{#eq settings.attributes.visibility "user"}}active{{/eq}}" value="user" data-action="visibility-switcher" rel="tooltip" data-placement="bottom" title="{{str "LBL_TOP10_OPPORTUNITIES_MY_OPP"}}" track="click:viewMyUserBubbleChart">
                        <i class="icon-user"></i>
                    </button>
                    <button class="btn toggle-control {{#eq settings.attributes.visibility "group"}}active{{/eq}}" value="group" data-action="visibility-switcher" rel="tooltip" data-placement="bottom" title="{{str "LBL_TOP10_OPPORTUNITIES_MY_TEAMS_OPP"}}" track="click:viewMyTeamsBubbleChart">
                        <i class="icon-group"></i>
                    </button>
                </div>
            </div>
        {{/if}}
    </div>
</div>
<div class="nv-chart nv-chart-bubble" data-content="chart">
    <svg id="{{cid}}"></svg>
</div>
<div class="block-footer hide" data-content="nodata">{{str "LBL_NO_DATA_AVAILABLE"}}</div>
',
        'tooltiptemplate' => '
<p>{{str \'LBL_CREATED\' \'Opportunities\'}}: <b>{{assigned_user_name}}</b></p>
<p>{{str \'LBL_LIKELY\' \'Opportunities\'}}: <b>{{amount}}</b></p>
<p>{{str \'LBL_DATE_CLOSED\' \'Opportunities\'}}: <b>{{close_date}}</b></p>
<p>{{str \'LBL_PROBABILITY\' \'Opportunities\'}}: <b>{{probability}}%</b></p>
<p>{{str \'LBL_ACCOUNTS\' \'Opportunities\'}}: <b>{{account_name}}</b></p>
',
      ),
      'meta' => 
      array (
        'dashlets' => 
        array (
          0 => 
          array (
            'label' => 'LBL_DASHLET_TOP10_SALES_OPPORTUNITIES_NAME',
            'description' => 'LBL_TOP10_OPPORTUNITIES_CHART_DESC',
            'config' => 
            array (
              'filter_duration' => '0',
            ),
            'preview' => 
            array (
            ),
            'filter' => 
            array (
              'module' => 
              array (
                0 => 'Home',
                1 => 'Accounts',
                2 => 'Contacts',
                3 => 'Leads',
                4 => 'Opportunities',
                5 => 'RevenueLineItems',
              ),
              'view' => 
              array (
                0 => 'record',
                1 => 'records',
              ),
            ),
          ),
        ),
        'panels' => 
        array (
          0 => 
          array (
            'name' => 'panel_body',
            'columns' => 2,
            'labelsOnTop' => true,
            'placeholders' => true,
            'fields' => 
            array (
              0 => 
              array (
                'name' => 'filter_duration',
                'label' => 'LBL_TOP10_OPPORTUNITIES_FILTER_DURATIONS',
                'type' => 'enum',
                'options' => 'top10_opportunities_duration_options',
                'enum_width' => 'auto',
              ),
              1 => 
              array (
                'name' => 'visibility',
                'label' => 'LBL_TOP10_OPPORTUNITIES_DEFAULT_DATASET',
                'type' => 'enum',
                'options' => 'top10_opportunities_visibility_options',
                'enum_width' => 'auto',
              ),
            ),
          ),
        ),
        'filter_duration' => 
        array (
          0 => 
          array (
            'name' => 'filter_duration',
            'label' => 'LBL_TOP10_OPPORTUNITIES_FILTER_DURATIONS',
            'type' => 'enum',
            'options' => 'top10_opportunities_duration_options',
            'enum_width' => 'auto',
          ),
        ),
      ),
    ),
    'bwc' => 
    array (
      'templates' => 
      array (
        'bwc' => '
<iframe class="bwc-frame" id="bwc-frame" src="{{url}}"></iframe>
',
      ),
    ),
    'casessummary' => 
    array (
      'templates' => 
      array (
        'casessummary' => '
<div class="tabbable tabs-full {{tabClass}}" data-content="chart">
    <ul id="tab" class="nav nav-tabs">
        <li class="active"><a class="ellipsis_inline" data-original-title="{{str "LBL_DASHLET_CASESSUMMARY_SUMMARY"}}" href="#tab-chart" data-toggle="tab">{{str "LBL_DASHLET_CASESSUMMARY_SUMMARY"}}<br><span class="label count nv-fill00">{{total}}</span></a></li>
        {{#each tabData}}
            <li><a class="ellipsis_inline" data-original-title="{{statusLabel}}" href="#tab-{{index}}" data-toggle="tab">{{statusLabel}}<br><span class="label count {{cssClass}}">{{models.length}}</span></a></li>
        {{/each}}
    </ul>
    <div id="myTabContent" class="tab-content">
        <div class="tab-pane active" id="tab-chart">
            <div id="casesSummaryPie" class="nv-chart nv-chart-cases">
                <svg id="{{cid}}"></svg>
            </div>
        </div>
        {{#each tabData}}
            <div class="tab-pane fade" id="tab-{{index}}">
                <ul class="listed">
                {{#each models}}
                    <li><span data-model-id="{{getFieldValue this "id"}}" class="favTarget"></span>&nbsp;<a href="#{{buildRoute model=this}}">{{attributes.name}}</a></li>
                {{/each}}
                </ul>
            </div>
        {{/each}}
    </div>
</div>
<div class="block-footer hide" data-content="nodata">{{str "LBL_NO_DATA_AVAILABLE"}}</div>
',
      ),
      'meta' => 
      array (
        'dashlets' => 
        array (
          0 => 
          array (
            'label' => 'LBL_CASE_SUMMARY_CHART',
            'description' => 'LBL_CASE_SUMMARY_CHART_DESC',
            'config' => 
            array (
            ),
            'preview' => 
            array (
            ),
            'filter' => 
            array (
              'module' => 
              array (
                0 => 'Accounts',
              ),
              'view' => 'record',
            ),
          ),
        ),
      ),
    ),
    'convert-results' => 
    array (
      'templates' => 
      array (
        'convert-results' => '
{{#if associatedModels.length}}
<table class="table dataTable converted-results">
        <tbody role="alert" aria-live="polite" aria-relevant="all">
            {{#each associatedModels.models}}
            <tr name="{{module}}_{{attributes.id}}" class="single">
                <td>
                    <div>{{attributes.row_title}}: <a href="#{{buildRoute model=this}}">{{attributes.name}}</a></div>
                </td>
                <td class="preview-list-cell">
                    <a class="preview-list-item btn pull-right" rel="tooltip" data-placement="bottom" title="{{str "LBL_PREVIEW"}}" data-module="{{module}}" data-id="{{attributes.id}}">
                        <i class="icon-eye-open"></i>
                    </a>
                </td>
            </tr>
            {{/each}}
        </tbody>
</table>
{{/if}}
',
      ),
    ),
    'create' => 
    array (
      'meta' => 
      array (
        'template' => 'record',
        'buttons' => 
        array (
          0 => 
          array (
            'name' => 'cancel_button',
            'type' => 'button',
            'label' => 'LBL_CANCEL_BUTTON_LABEL',
            'css_class' => 'btn-invisible btn-link',
          ),
          1 => 
          array (
            'name' => 'restore_button',
            'type' => 'button',
            'label' => 'LBL_RESTORE',
            'css_class' => 'btn-invisible btn-link',
            'showOn' => 'select',
          ),
          2 => 
          array (
            'name' => 'save_button',
            'type' => 'button',
            'label' => 'LBL_SAVE_BUTTON_LABEL',
            'primary' => true,
          ),
          3 => 
          array (
            'name' => 'sidebar_toggle',
            'type' => 'sidebartoggle',
          ),
        ),
      ),
    ),
    'create-actions' => 
    array (
      'meta' => 
      array (
        'template' => 'record',
        'buttons' => 
        array (
          0 => 
          array (
            'name' => 'cancel_button',
            'type' => 'button',
            'label' => 'LBL_CANCEL_BUTTON_LABEL',
            'css_class' => 'btn-invisible btn-link',
          ),
          1 => 
          array (
            'name' => 'restore_button',
            'type' => 'button',
            'label' => 'LBL_RESTORE',
            'css_class' => 'btn-invisible btn-link',
            'showOn' => 'select',
          ),
          2 => 
          array (
            'type' => 'actiondropdown',
            'name' => 'main_dropdown',
            'primary' => true,
            'switch_on_click' => true,
            'buttons' => 
            array (
              0 => 
              array (
                'type' => 'rowaction',
                'name' => 'save_button',
                'label' => 'LBL_SAVE_BUTTON_LABEL',
              ),
              1 => 
              array (
                'type' => 'rowaction',
                'name' => 'save_view_button',
                'label' => 'LBL_SAVE_AND_VIEW',
                'showOn' => 'create',
              ),
              2 => 
              array (
                'type' => 'rowaction',
                'name' => 'save_create_button',
                'label' => 'LBL_SAVE_AND_CREATE_ANOTHER',
                'showOn' => 'create',
              ),
            ),
          ),
          3 => 
          array (
            'name' => 'sidebar_toggle',
            'type' => 'sidebartoggle',
          ),
        ),
      ),
    ),
    'create-nodupecheck' => 
    array (
      'meta' => 
      array (
        'template' => 'record',
        'buttons' => 
        array (
          0 => 
          array (
            'name' => 'cancel_button',
            'type' => 'button',
            'label' => 'LBL_CANCEL_BUTTON_LABEL',
            'css_class' => 'btn-invisible btn-link',
          ),
          1 => 
          array (
            'name' => 'save_button',
            'type' => 'button',
            'label' => 'LBL_SAVE_BUTTON_LABEL',
            'primary' => true,
          ),
          2 => 
          array (
            'name' => 'sidebar_toggle',
            'type' => 'sidebartoggle',
          ),
        ),
      ),
    ),
    'dashablelist' => 
    array (
      'templates' => 
      array (
        'dashablelist' => '
{{#if collection.dataFetched}}
    {{#each meta.panels}}
        <table class="table table-striped dataTable">
            <thead>
                <tr>
                    {{#each fields}}
                        <th class="{{#isSortable ../../module this}}sorting sorting_{{#eq ../../../collection.orderBy.field name}}{{../../../../orderBy.direction}}{{/eq}} orderBy{{name}}{{/isSortable}}"{{#if name}} data-fieldname="{{name}}"{{/if}} data-orderby="{{orderBy}}">
                            <span>{{str label ../../module}}</span>
                        </th>
                    {{/each}}
                </tr>
            </thead>
            <tbody>
                {{#each ../collection.models}}
                    <tr class="single">
                        {{#each ../fields}}
                            <td>{{field ../../../this model=../this template=../../../this.viewName}}</td>
                        {{/each}}
                    </tr>
                {{/each}}
            </tbody>
        </table>
    {{/each}}
    {{#unless collection.length}}
        <div class="block-footer">
            {{str "LBL_NO_DATA_AVAILABLE"}}
        </div>
    {{/unless}}
{{/if}}
',
        'noaccess' => '
<div class="block-footer">
    {{str "LBL_DASHLET_MODULE_UNAVAILABLE"}}
</div>
',
        'row' => '
{{#with rowModel}}
    <tr class="single">
        {{#each ../metaFields}}
            <td>{{field ../../this model=../this template=../../this.viewName}}</td>
        {{/each}}
    </tr>
{{/with}}
',
      ),
      'meta' => 
      array (
        'template' => 'list',
        'dashlets' => 
        array (
          0 => 
          array (
            'label' => 'LBL_DASHLET_LISTVIEW_NAME',
            'description' => 'LBL_DASHLET_LISTVIEW_DESCRIPTION',
            'config' => 
            array (
            ),
            'preview' => 
            array (
              'module' => 'Accounts',
              'label' => 'LBL_MODULE_NAME',
              'display_columns' => 
              array (
                0 => 'name',
                1 => 'phone_office',
                2 => 'billing_address_country',
              ),
            ),
          ),
        ),
        'panels' => 
        array (
          0 => 
          array (
            'name' => 'dashlet_settings',
            'columns' => 2,
            'labelsOnTop' => true,
            'placeholders' => true,
            'fields' => 
            array (
              0 => 
              array (
                'name' => 'module',
                'label' => 'LBL_MODULE',
                'type' => 'enum',
                'span' => 12,
                'sort_alpha' => true,
              ),
              1 => 
              array (
                'name' => 'display_columns',
                'label' => 'LBL_COLUMNS',
                'type' => 'enum',
                'isMultiSelect' => true,
                'ordered' => true,
                'span' => 12,
                'hasBlank' => true,
                'options' => 
                array (
                  '' => '',
                ),
              ),
              2 => 
              array (
                'name' => 'limit',
                'label' => 'LBL_DASHLET_CONFIGURE_DISPLAY_ROWS',
                'type' => 'enum',
                'options' => 'dashlet_limit_options',
              ),
              3 => 
              array (
                'name' => 'auto_refresh',
                'label' => 'Auto Refresh',
                'type' => 'enum',
                'options' => 'sugar7_dashlet_auto_refresh_options',
              ),
              4 => 
              array (
                'name' => 'intelligent',
                'label' => 'LBL_DASHLET_CONFIGURE_INTELLIGENT',
                'type' => 'bool',
              ),
              5 => 
              array (
                'name' => 'linked_fields',
                'label' => 'LBL_DASHLET_CONFIGURE_LINKED',
                'type' => 'enum',
                'required' => true,
              ),
            ),
          ),
        ),
      ),
    ),
    'dashboard-headerpane' => 
    array (
      'templates' => 
      array (
        'dashboard-headerpane' => '
<div class="headerpane">
    <h1>
        {{#each meta.panels}}
            {{#each fields}}
                <span class="record-cell" data-type="{{type}}" data-name="{{name}}">
                    {{field ../../this model=../../this.model template=../../this.action}}
                </span>
            {{/each}}
        {{/each}}
        <div class="btn-toolbar">
            {{#each meta.buttons}}
                {{field ../this model=../this.model template="detail"}}
            {{/each}}
        </div>
    </h1>
</div>
',
      ),
      'meta' => 
      array (
        'buttons' => 
        array (
          0 => 
          array (
            'type' => 'actiondropdown',
            'buttons' => 
            array (
              0 => 
              array (
                'name' => 'add_button',
                'type' => 'rowaction',
                'label' => 'LBL_CREATE_BUTTON_LABEL',
                'css_class' => 'btn',
              ),
              1 => 
              array (
                'name' => 'edit_button',
                'type' => 'rowaction',
                'label' => 'LBL_EDIT_BUTTON',
              ),
              2 => 
              array (
                'name' => 'collapse_button',
                'type' => 'rowaction',
                'label' => 'LBL_DASHLET_MINIMIZE_ALL',
              ),
              3 => 
              array (
                'name' => 'expand_button',
                'type' => 'rowaction',
                'label' => 'LBL_DASHLET_MAXIMIZE_ALL',
              ),
            ),
            'showOn' => 'view',
          ),
          1 => 
          array (
            'name' => 'cancel_button',
            'type' => 'button',
            'label' => 'LBL_CANCEL_BUTTON_LABEL',
            'css_class' => 'btn-invisible btn-link',
            'showOn' => 'edit',
          ),
          2 => 
          array (
            'name' => 'delete_button',
            'type' => 'button',
            'label' => 'LBL_DELETE_BUTTON_LABEL',
            'css_class' => 'btn-danger',
            'showOn' => 'edit',
          ),
          3 => 
          array (
            'name' => 'save_button',
            'type' => 'button',
            'label' => 'LBL_SAVE_BUTTON_LABEL',
            'css_class' => 'btn-primary',
            'showOn' => 'edit',
          ),
          4 => 
          array (
            'name' => 'create_cancel_button',
            'type' => 'button',
            'label' => 'LBL_CANCEL_BUTTON_LABEL',
            'css_class' => 'btn-invisible btn-link',
            'showOn' => 'create',
          ),
          5 => 
          array (
            'name' => 'create_button',
            'type' => 'button',
            'label' => 'LBL_SAVE_BUTTON_LABEL',
            'css_class' => 'btn-primary',
            'showOn' => 'create',
          ),
        ),
        'panels' => 
        array (
          0 => 
          array (
            'name' => 'header',
            'fields' => 
            array (
              0 => 
              array (
                'type' => 'dashboardtitle',
                'name' => 'name',
                'placeholder' => 'LBL_DASHBOARD_TITLE',
              ),
              1 => 
              array (
                'type' => 'layoutbutton',
                'name' => 'layout',
              ),
            ),
          ),
        ),
      ),
    ),
    'dashlet-cell-empty' => 
    array (
      'templates' => 
      array (
        'dashlet-cell-empty' => '
<div class="dashlet empty" data-action="addDashlet">
    <p>{{str "LBL_DASHLET_ADD" module}}</p>
    <div class="add-dashlet"><strong><i class="icon-plus"></i></strong></div>
</div>
',
        'drop' => '
<div class="dashlet empty" data-action="droppable">
    <p>{{str "LBL_DASHLET_DROP_HERE"}}</p>
    <div class="add-dashlet"><strong><i class="icon-download-alt"></i></strong></div>
</div>
',
        'empty' => '
<div class="empty" style="background: transparent; border:transparent 3px solid; cursor:default;">
    <p>&nbsp;</p>
    <div class="add-dashlet"><strong>&nbsp;</strong></div>
</div>
',
      ),
    ),
    'dashlet-row-empty' => 
    array (
      'templates' => 
      array (
        'dashlet-row-empty' => '
<div class="add-row empty" target="click:addDashletRow">
    <p>{{str "LBL_DASHBOARD_ADD_ROW" module}}</p>
    <p class="options">
        {{#each columnOptions}}
        <a class="add-dashlet" data-value="{{index}}" target="click:addDashletRow{{index}}Col"><small>{{label}}</small></a>
        {{/each}}
    </p>
</div>
',
      ),
    ),
    'dashlet-toolbar' => 
    array (
      'templates' => 
      array (
        'dashlet-toolbar' => '
<div class="btn-toolbar pull-right">
{{#each meta.buttons}}
    {{#if type}}
        {{field ../../this model=../../this.model}}
    {{else}}
        {{#if dropdown_buttons}}
        <div class="btn-group">
            <a data-toggle="dropdown" rel="tooltip" title="{{str "LBL_DASHLET_CONFIGURE"}}" class="dropdown-toggle btn btn-invisible" data-placement="bottom"><i data-action="loading" class="icon-cog" track="click:dashletToolbarCog"></i></a>
            <ul class="dropdown-menu left">
                <div>
                    {{#each dropdown_buttons}}
                        <li>{{field ../../../../this model=../../../../this.model}}</li>
                    {{/each}}
                </div>
            </ul>
        </div>
        {{/if}}
    {{/if}}
{{/each}}
</div>
<h4 data-toggle="dashlet" class="dashlet-title">{{meta.label}}</h4>
',
      ),
      'meta' => 
      array (
        'buttons' => 
        array (
          0 => 
          array (
            'type' => 'dashletaction',
            'css_class' => 'dashlet-toggle btn btn-invisible minify',
            'icon' => 'icon-chevron-up',
            'action' => 'toggleMinify',
            'tooltip' => 'LBL_DASHLET_TOGGLE',
          ),
          1 => 
          array (
            'dropdown_buttons' => 
            array (
              0 => 
              array (
                'type' => 'dashletaction',
                'action' => 'editClicked',
                'label' => 'LBL_DASHLET_CONFIG_EDIT_LABEL',
              ),
              1 => 
              array (
                'type' => 'dashletaction',
                'action' => 'refreshClicked',
                'label' => 'LBL_DASHLET_REFRESH_LABEL',
              ),
              2 => 
              array (
                'type' => 'dashletaction',
                'action' => 'removeClicked',
                'label' => 'LBL_DASHLET_REMOVE_LABEL',
              ),
            ),
          ),
        ),
      ),
    ),
    'dashletconfiguration-edit' => 
    array (
      'templates' => 
      array (
        'dashletconfiguration-edit' => '
<div>
    {{#if model.isNotEmpty}}
        <div class="record">
            {{#each meta.panels}}
                {{#unless header}}
                    {{#if ../labelsOnTop}}
                        {{#each grid}}
                            <div class="row-fluid {{../name}}{{#if ../hide}} hide{{/if}}">
                                {{#each this}}
                                    <div class="span{{span}} record-cell{{#if cell_css_class}} {{cell_css_class}}{{/if}}" data-type="{{type}}" data-name="{{name}}">
                                        {{#if ../../labels}}
                                            {{#unless dismiss_label}}
                                                <div class="record-label" data-name="{{name}}">{{#if label}}{{str label ../../../../../../../../module}}{{/if}}</div>
                                            {{/unless}}
                                        {{/if}}
                                        {{#if name}}
                                            <span class="normal{{#if css}} {{css}}{{/if}} index{{index}}"{{#if name}} data-fieldname="{{name}}"{{/if}} data-index="{{index}}">
                                                {{field ../../../../../../this model=../../../../../../settings template=../../../../../../action}}
                                            </span>
                                        {{/if}}
                                        {{#unless ../../../../../../createMode}}
                                            {{#notHas name ../../../../../../../noEditFields}}
                                                <span class="record-edit-link-wrapper" data-name="{{name}}">
                                                    <a class="record-edit-link btn btn-invisible" data-type="{{type}}" data-name="{{name}}"><i class="icon-pencil"></i></a>
                                                </span>
                                            {{/notHas}}
                                        {{/unless}}
                                    </div>
                                {{/each}}
                            </div>
                        {{/each}}
                    {{else}}
                        <div class="form-horizontal">
                            <fieldset class="card2">
                                {{#each grid}}
                                    <div class="row-fluid control-group {{../name}}{{#if ../hide}} hide{{/if}}">
                                        {{#each this}}
                                            {{#if ../../labels}}
                                                {{#unless dismiss_label}}
                                                    <div class="control-label span{{labelSpan}} {{label_css_class}}">
                                                        <div class="control-label-background span{{labelSpan}}">
                                                            <label class="tright record-label" data-name="{{name}}">{{str label ../../../../../../../module}}</label>
                                                        </div>
                                                    </div>
                                                {{/unless}}
                                            {{/if}}
                                            <div class="controls span{{span}} record-cell {{cell_css_class}}" data-type="{{type}}" data-name="{{name}}">
                                                {{#if name}}
                                                    <span class="normal{{#if css}} {{css}}{{/if}} index{{index}}"{{#if name}} data-fieldname="{{name}}"{{/if}} data-index="{{index}}">
                                                        {{field ../../../../../../this model=../../../../../../settings template=../../../../../../action}}
                                                    </span>
                                                {{/if}}
                                                {{#unless ../../../../../../createMode}}
                                                    {{#notHas name ../../../../../../../noEditFields}}
                                                        <span class="record-edit-link-wrapper" data-name="{{name}}">
                                                            <a class="record-edit-link btn btn-invisible" data-type="{{type}}" data-name="{{name}}"><i class="icon-pencil"></i></a>
                                                        </span>
                                                    {{/notHas}}
                                                {{/unless}}
                                            </div>
                                        {{/each}}
                                    </div>
                                {{/each}}
                            </fieldset>
                        </div>
                    {{/if}}
                {{/unless}}
            {{/each}}
        </div>
    {{/if}}
</div>
',
      ),
    ),
    'dashletconfiguration-headerpane' => 
    array (
      'templates' => 
      array (
        'dashletconfiguration-headerpane' => '
<div class="headerpane">
    <h1>
        {{#each meta.panels}}
            {{#each fields}}
                <span class="record-cell">
                    {{field ../../this model=../../this.model template="edit"}}
                </span>
            {{/each}}
        {{/each}}
        <div class="btn-toolbar pull-right dropdown">
            {{#each meta.buttons}}
                {{field ../this model=../this.model template="detail"}}
            {{/each}}
        </div>
    </h1>
</div>
',
      ),
      'meta' => 
      array (
        'buttons' => 
        array (
          0 => 
          array (
            'name' => 'cancel_button',
            'type' => 'button',
            'label' => 'LBL_CANCEL_BUTTON_LABEL',
            'css_class' => 'btn-invisible btn-link',
          ),
          1 => 
          array (
            'name' => 'save_button',
            'type' => 'button',
            'label' => 'LBL_SAVE_BUTTON_LABEL',
            'css_class' => 'btn-primary',
          ),
        ),
        'panels' => 
        array (
          0 => 
          array (
            'name' => 'header',
            'fields' => 
            array (
              0 => 
              array (
                'type' => 'base',
                'name' => 'label',
                'placeholder' => 'LBL_NAME',
                'required' => true,
              ),
            ),
          ),
        ),
      ),
    ),
    'dashletselect' => 
    array (
      'meta' => 
      array (
        'template' => 'filtered-list',
        'panels' => 
        array (
          0 => 
          array (
            'fields' => 
            array (
              0 => 
              array (
                'label' => 'LBL_DASHLET_CONFIGURE_TITLE',
                'name' => 'title',
                'type' => 'text',
                'link' => true,
                'events' => 
                array (
                  'click a' => 'dashletlist:select-and-edit',
                ),
                'filter' => 'startsWith',
                'sortable' => true,
              ),
              1 => 
              array (
                'label' => 'LBL_DESCRIPTION',
                'name' => 'description',
                'type' => 'text',
                'filter' => 'contains',
                'sortable' => true,
              ),
              2 => 
              array (
                'type' => 'rowaction',
                'tooltip' => 'LBL_PREVIEW',
                'event' => 'dashletlist:preview:fire',
                'css_class' => 'btn',
                'icon' => 'icon-eye-open',
                'width' => '7%',
                'sortable' => false,
              ),
            ),
          ),
        ),
      ),
    ),
    'dashletselect-headerpane' => 
    array (
      'meta' => 
      array (
        'template' => 'headerpane',
        'fields' => 
        array (
          0 => 
          array (
            'name' => 'title',
            'type' => 'label',
            'default_value' => 'LBL_DASHLET_ADD',
          ),
        ),
        'buttons' => 
        array (
          0 => 
          array (
            'name' => 'cancel_button',
            'type' => 'button',
            'label' => 'LBL_CANCEL_BUTTON_LABEL',
            'css_class' => 'btn-invisible btn-link',
          ),
        ),
      ),
    ),
    'dnb' => 
    array (
      'templates' => 
      array (
        'dnb-acct-create-error' => '
<div class="dashboard" data-dashboard="true">
    <div class="cols row-fluid">
        <div>
            <div class="preview-headerbar">
                <div class="headerpane">
                    <span class="record-cell">
                        <h1><span class="detail">{{str "LBL_DNB_ACC_CRT"}}</span></h1>
                    </span>
                    <span class="record-cell">
                        <h1><span class="detail"></span></h1>
                    </span>
                </div>
            </div>
        </div>
        <ul class="dashlets row-fluid">
            <li class="span12">
                <ul class="dashlet-row ui-sortable ui-sortable-disabled">
                    <li class="row-fluid sortable" data-sortable="1">
                        <div class="rows well well-invisible">
                            <a data-toggle="dropdown"  class="btn btn-invisible btn-link hide">
                                <i class="icon-cog"></i></a>
                            <a class="move btn btn-invisible btn-link hide">
                                <i class="icon-resize-vertical"></i></a>
                            <ul class="dashlet-cell rows row-fluid">
                                <li class="dashlet-container span12">
                                    <div>
                                        <div class="thumbnail dashlet">
                                            <div data-dashlet="toolbar">
                                                <div class="dashlet-header">
                                                    <div class="btn-toolbar pull-right">
                                                    </div>
                                                    <h4 data-toggle="dashlet">{{str "LBL_DNB_CI_SRCH"}}</h4>
                                                </div>
                                            </div>
                                            <div data-dashlet="dashlet" class="dashlet-content">
                                                <div class="block show_less create-acc">
                                                    <br/>
                                                    <div class="error-display" align="center">
                                                        {{#eq errmsg \'LBL_DNB_NOT_CONFIGURED\'}}
                                                            <a class="connect-twitter" href="index.php#bwc/index.php?module=Connectors&action=ModifyProperties">
                                                        {{/eq}}
                                                        {{#match errmsg \'ERROR_CURL_*\'}}
                                                            <a class="connect-twitter" href="index.php#bwc/index.php?module=Configurator&action=EditView">
                                                        {{/match}}
                                                        <em>{{str errmsg}}</em>
                                                        {{#eq errmsg \'LBL_DNB_NOT_CONFIGURED\'}}
                                                            </a>
                                                        {{/eq}}
                                                        {{#match errmsg \'ERROR_CURL_*\'}}
                                                            </a>
                                                        {{/match}}
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swappable-dashlet icon-download-alt"></div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="row-fluid" data-sortable="1">
                        <div class="rows well well-invisible">
                            <a data-toggle="dropdown" class="btn btn-invisible btn-link hide">
                                <i class="icon-cog"></i>
                            </a>
                            <a class="move btn btn-invisible btn-link hide">
                                <i class="icon-resize-vertical"></i>
                            </a>
                        </div>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</div>
',
        'dnb-comp-info' => '
<div id="dnb-compinfo-loading" class="block-footer">
    {{str dnbFirmo.loading_label}}
</div>
<div id="dnb-compinfo-details">
    {{#if dnbFirmo.product}}
        <div class=\'dnb-show-less\'>
            <ul class="unstyled listed">
                {{#each dnbFirmo.product}}
                    <li>
                        <div class=\'dnb-company-label\'>
                            {{#if dnbLabel}}
                                {{{dnbLabel}}}
                            {{else}}
                                {{str dataLabel}}
                            {{/if}}
                        </div>
                        <div class=\'txt import-data\'>
                            {{{dataElement}}}
                        </div>
                    </li>
                {{/each}}
            </ul>
        </div>
        <div class="dnb-show-more">
            <a class="showMoreData more">{{str "LBL_DNB_SHOW_MORE"}} <i class="icon-chevron-down"></i></a>
            <a class="showLessData less">{{str "LBL_DNB_SHOW_LESS"}} <i class="icon-chevron-up"></i></a>
        </div>
    {{else}}
        <aside class=\'create-no-data\'>
            {{#if dnbFirmo.errmsg}}
                <em>{{dnbFirmo.errmsg}}</em>
            {{else}}
                <em>{{str "LBL_DNB_NO_DATA"}}</em>
            {{/if}}
        </aside>
    {{/if}}
</div>
',
        'dnb-company-details' => '
<div id="dnb-company-detail-loading" class="block-footer">
    {{str "LBL_DNB_COMP_INFO_LOAD"}} ...
</div>
<div id="dnb-company-details">
    <div class="dnb-show-all">
        {{#if dnbFirmo.product}}
            <div class=\'dnb-company-details\'>
                <ul class="unstyled listed">
                    {{#each dnbFirmo.product}}
                        <li>
                            <div class=\'dnb-company-label\'>
                                {{#if dnbLabel}}
                                    {{{dnbLabel}}}
                                {{else}}
                                    {{str dataLabel}}
                                {{/if}}
                            </div>
                            {{#if dataType}}
                                {{#eq dataType \'link\'}}
                                <div class="url-txt importData">
                                {{/eq}}
                            {{else}}
                            <div class="txt importData">
                            {{/if}}
                            {{{dataElement}}}
                        </div>
                        </li>
                    {{/each}}
                </ul>
            </div>
        {{else}}
            <aside class=\'create-no-data\'>
                {{#if dnbFirmo.errmsg}}
                    <em>{{dnbFirmo.errmsg}}</em>
                {{else}}
                    <em>{{str "LBL_DNB_NO_DATA"}}</em>
                {{/if}}
            </aside>
        {{/if}}
    </div>
    {{#if dnbFirmo.backToListLabel}}
        <div class="dnb-show-more">
            <a class="backToList"> {{dnbFirmo.backToListLabel}} <i class="icon-chevron-down"></i> </a>
        </div>
    {{/if}}
</div>',
        'dnb-error' => '
<br/>
<div class="error-display" align="center">
    {{#if dnbError.errorLink}}
        <a class="connect-twitter" href="{{dnbError.errorLink}}">
            <em>{{str dnbError.errMsg}}</em>
        </a>
    {{else}}
        <em>{{str dnbError.errMsg}}</em>
    {{/if}}
</div>',
        'dnb-no-duns' => '
<div id="dnb-no-duns" class="block-footer">
    <aside>
        <em>{{str "LBL_DNB_NO_DUNS"}}</em>
    </aside>
</div>',
        'dnb-sidepane-error' => '
<div class="dashboard" data-dashboard="true">
    <div class="cols row-fluid">
        <div>
            <div class="preview-headerbar">
                <div class="headerpane">
                    <span class="record-cell">
                        <h1>
                            <span class="detail">
                                {{str this.dnbError.label}}
                            </span>
                        </h1>
                    </span>
                </div>
            </div>
        </div>
        <ul class="dashlets row-fluid">
            <li class="span12">
                <ul class="dashlet-row ui-sortable ui-sortable-disabled">
                    <li class="row-fluid sortable" data-sortable="1">
                        <div class="rows well well-invisible">
                            <ul class="dashlet-cell rows row-fluid">
                                <li class="dashlet-container span12">
                                    <div>
                                        <div class="thumbnail dashlet">
                                            <div data-dashlet="toolbar">
                                                <div class="dashlet-header">
                                                    <h4 data-toggle="dashlet">
                                                        {{str this.dnbError.label}}
                                                    </h4>
                                                </div>
                                            </div>
                                            <div data-dashlet="dashlet" class="dashlet-content">
                                                <div class="block show_less create-acc">
                                                    <br/>
                                                    <div class="error-display" align="center">
                                                        {{#if dnbError.errorLink}}
                                                            <a class="connect-twitter" href="{{dnbError.errorLink}}">
                                                                <em>{{str dnbError.errMsg}}</em>
                                                            </a>
                                                        {{else}}
                                                            <em>{{str dnbError.errMsg}}</em>
                                                        {{/if}}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="row-fluid" data-sortable="1">
                        <div class="rows well well-invisible">
                            <a data-toggle="dropdown" class="btn btn-invisible btn-link hide">
                                <i class="icon-cog"></i>
                            </a>
                            <a class="move btn btn-invisible btn-link hide">
                                <i class="icon-resize-vertical"></i>
                            </a>
                        </div>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</div>
',
      ),
    ),
    'dnb-account-create' => 
    array (
      'templates' => 
      array (
        'dnb-account-create' => '
<div class="dashboard" data-dashboard="true">
    <div class="cols row-fluid">
        <div>
            <div class="preview-headerbar">
                <div class="headerpane">
                    <span class="record-cell">
                        <h1 class="dnb-account-create"><span class="detail">{{str "LBL_DNB_ACC_CRT"}}</span></h1>
                    </span>
                    <span class="record-cell">
                        <h1><span class="detail"></span></h1>
                    </span>
                </div>
            </div>
        </div>
        <ul class="dashlets row-fluid">
            <li class="span12">
                <ul class="dashlet-row ui-sortable ui-sortable-disabled">
                    <li class="row-fluid sortable" data-sortable="1">
                        <div class="rows well well-invisible">
                            <a data-toggle="dropdown"  class="btn btn-invisible btn-link hide">
                                <i class="icon-cog"></i></a>
                            <ul class="dropdown-menu left carettop">
                                <div>
                                    <li><a class="remove-row">{{str "LBL_REMOVE"}}</a></li>
                                </div>
                            </ul>
                            <a class="move btn btn-invisible btn-link hide">
                                <i class="icon-resize-vertical"></i></a>
                            <ul class="dashlet-cell rows row-fluid">
                                <li class="dashlet-container span12">
                                    <div>
                                        <div class="thumbnail dashlet dashlet-dnb-tall">
                                            <div data-dashlet="toolbar">
                                                <div class="dashlet-header">
                                                    <h4 data-toggle="dashlet">
                                                        {{#if dnbSrchResults.count}}
                                                            {{dnbSrchResults.count}}
                                                        {{else}}
                                                            {{str "LBL_DNB_SRCH_RES"}}
                                                        {{/if}}
                                                    </h4>
                                                </div>
                                            </div>
                                            <div data-dashlet="dashlet" class="dashlet-content">
                                                <div id="dnb-company-list-loading"class="block-footer">
                                                    {{str "LBL_DNB_SRCH_LOAD"}} ...
                                                </div>
                                                <div id="dnb-search-results">
                                                    {{#if dnbSrchResults.product}}
                                                    <div>
                                                        <ul class="unstyled listed" id="dnb-results-list">
                                                            {{#each dnbSrchResults.product}}
                                                                <li>
                                                                    <div class=\'dnb-company-label\'>
                                                                        <a class="dnb-company-name" id="{{this.duns_num}}">
                                                                            {{this.companyname}}
                                                                        </a>
                                                                        {{#if this.locationtype}}
                                                                            <span class="label pull-right" data-placement="right">
                                                                                {{this.locationtype}}
                                                                            </span>
                                                                        {{/if}}
                                                                    </div>
                                                                    <div class="record-label dnb-company-list">
                                                                        {{#if this.streetaddr}}
                                                                            {{this.streetaddr}}
                                                                        {{/if}}
                                                                        {{#if this.town}}
                                                                            {{this.town}},
                                                                        {{/if}}
                                                                        {{#if this.territory}}
                                                                            {{this.territory}},
                                                                        {{/if}}
                                                                        {{#if this.ctrycd}}
                                                                            {{this.ctrycd}}
                                                                        {{/if}}
                                                                        {{#if this.isDupe}}
                                                                            <span class="label label-important pull-right" data-placement="right">{{str "LBL_DNB_DUPLICATE"}}</span>
                                                                        {{/if}}
                                                                    </div>
                                                                </li>
                                                            {{/each}}
                                                        </ul>
                                                    </div>
                                                {{else}}
                                                    <aside class=\'create-no-data\'>
                                                        {{#if dnbSrchResults.errmsg}}
                                                            <em>{{dnbSrchResults.errmsg}}</em>
                                                        {{else}}
                                                            <em>{{str "LBL_DNB_NO_DATA"}}</em>
                                                        {{/if}}
                                                    </aside>
                                                {{/if}}
                                                </div>
                                            </div>
                                            <div class="block-footer hide" id="dnb-page-ctrl">
                                                <button data-action="show-more" class="btn btn-link btn-invisible more">
                                                    {{str "LBL_DNB_MORE_SRCH_RES"}}
                                                </button>
                                                <div class="loading">
                                                    {{str "LBL_ALERT_TITLE_LOADING"}}
                                                    <i class="l1 icon-circle"></i>
                                                    <i class="l2 icon-circle"></i>
                                                    <i class="l3 icon-circle"></i>
                                                </div>
                                            </div>
                                            <div class="swappable-dashlet icon-download-alt"></div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="row-fluid" data-sortable="1">
                        <div class="rows well well-invisible">
                            <a data-toggle="dropdown" class="btn btn-invisible btn-link hide">
                                <i class="icon-cog"></i>
                            </a>
                            <a class="move btn btn-invisible btn-link hide">
                                <i class="icon-resize-vertical"></i>
                            </a>
                        </div>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</div>
',
        'dnb-company-details' => '
<div class="dashboard" data-dashboard="true">
    <div class="cols row-fluid">
        <div>
            <div class="preview-headerbar">
                <div class="headerpane">
                    <span class="record-cell">
                        <h1 class="dnb-account-create"><span class="detail">{{str "LBL_DNB_ACC_CRT"}}</span></h1>
                    </span>
                    <span class="record-cell">
                        <h1><span class="detail"></span></h1>
                    </span>
                </div>
            </div>
        </div>
        <ul class="dashlets row-fluid">
            <li class="span12">
                <ul class="dashlet-row ui-sortable ui-sortable-disabled">
                    <li class="row-fluid sortable" data-sortable="1">
                        <div class="rows well well-invisible">
                            <a data-toggle="dropdown"  class="btn btn-invisible btn-link hide">
                                <i class="icon-cog"></i>
                            </a>
                            <ul class="dropdown-menu left carettop">
                                <div>
                                    <li><a class="remove-row">{{str "LBL_REMOVE"}}</a></li>
                                </div>
                            </ul>
                            <a class="move btn btn-invisible btn-link hide">
                                <i class="icon-resize-vertical"></i></a>
                            <ul class="dashlet-cell rows row-fluid">
                                <li class="dashlet-container span12">
                                    <div>
                                        <div class="thumbnail dashlet">
                                            <div data-dashlet="toolbar">
                                                <div class="dashlet-header">
                                                    <div class="btn-toolbar pull-right">
                                                    	<span sfuuid="1007" class="dashlet-toolbar">
                                                    		<a onclick="return false;" href="javascript:void(0);" data-dashletaction="importDNBData" name="" class="btn btn-primary importDNBData">
                                                                {{str "LBL_DNB_IMPORT"}}
                                                            </a>
														</span>
                                                    </div>
                                                    <h4 data-toggle="dashlet">{{str "LBL_DNB_COMP_INFO"}}</h4>
                                                </div>
                                            </div>
                                            <div data-dashlet="dashlet" class="dashlet-content">
                                                <div id="dnb-company-detail-loading" class="block-footer">
                                                    {{str "LBL_DNB_COMP_INFO_LOAD"}} ...
                                                </div>
                                                <div id="dnb-company-details">
                                                    <div class="dnb-show-all">
                                                        {{#if dnbProduct.product}}
                                                            <div class=\'dnb-company-details\'>
                                                                <table class="table table-striped table-condensed">
                                                                    {{#each dnbProduct.product}}
                                                                        <tr>
                                                                            <td>
                                                                                <div class=\'dnb-checkbox-nav\'>
                                                                                    <input type="checkbox" name="{{this.dataName}}" id="{{this.dataName}}" class="dnb_checkbox" checked />
                                                                                </div>
                                                                                <div class="dnb-company-label">
                                                                                    {{#if this.dnbLabel}}
                                                                                        {{{this.dnbLabel}}}
                                                                                    {{else}}
                                                                                        {{str this.dataLabel}}
                                                                                    {{/if}}
                                                                                </div>
                                                                                {{#if this.dataType}}
                                                                                    {{#eq this.dataType \'link\'}}
                                                                                        <div class="url-txt importData">
                                                                                    {{/eq}}
                                                                                {{else}}
                                                                                    <div class="txt importData">
                                                                                {{/if}}
                                                                                {{this.dataElement}}
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                    {{/each}}
                                                                </table>
                                                            </div>
                                                        {{else}}
                                                            <aside class=\'create-no-data\'>
                                                                <em>{{dnbProduct.errmsg}}</em>
                                                            </aside>
                                                        {{/if}}
                                                    </div>
                                                    <div class="dnb-show-more">
                                                        <a class="backToList"> {{str "LBL_DNB_BACK_TO_SRCH"}} <i class="icon-chevron-down"></i> </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swappable-dashlet icon-download-alt"></div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="row-fluid" data-sortable="1">
                        <div class="rows well well-invisible">
                            <a data-toggle="dropdown" class="btn btn-invisible btn-link hide">
                                <i class="icon-cog"></i>
                            </a>
                            <a class="move btn btn-invisible btn-link hide">
                                <i class="icon-resize-vertical"></i>
                            </a>
                        </div>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</div>
',
        'dnb-need-configure' => '
<div class="dashboard" data-dashboard="true">
    <div class="cols row-fluid">
        <div>
            <div class="preview-headerbar">
                <div class="headerpane">
                    <span class="record-cell">
                        <h1><span class="detail">{{str "LBL_DNB_ACC_CRT"}}</span></h1>
                    </span>
                    <span class="record-cell">
                        <h1><span class="detail"></span></h1>
                    </span>
                </div>
            </div>
        </div>
        <ul class="dashlets row-fluid">
            <li class="span12">
                <ul class="dashlet-row ui-sortable ui-sortable-disabled">
                    <li class="row-fluid sortable" data-sortable="1">
                        <div class="rows well well-invisible">
                            <a data-toggle="dropdown"  class="btn btn-invisible btn-link hide">
                                <i class="icon-cog"></i></a>
                            <ul class="dropdown-menu left carettop">
                                <div>
                                    <li><a class="remove-row">Remove</a></li>
                                </div>
                            </ul>
                            <a class="move btn btn-invisible btn-link hide">
                                <i class="icon-resize-vertical"></i></a>
                            <ul class="dashlet-cell rows row-fluid">
                                <li class="dashlet-container span12">
                                    <div>
                                        <div class="thumbnail dashlet">
                                            <div data-dashlet="toolbar">
                                                <div class="dashlet-header">
                                                    <div class="btn-toolbar pull-right">
                                                    </div>
                                                    <h4 data-toggle="dashlet">{{str "LBL_DNB_CI_SRCH"}}</h4>
                                                </div>
                                            </div>
                                            <div data-dashlet="dashlet" class="dashlet-content">
                                                <div class="block-footer" align="center">
                                                    <a class="connect-twitter" href="index.php#bwc/index.php?module=Connectors&action=ModifyProperties">
                                                        {{str errmsg}}
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="swappable-dashlet icon-download-alt"></div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="row-fluid" data-sortable="1">
                        <div class="rows well well-invisible">
                            <a data-toggle="dropdown" class="btn btn-invisible btn-link hide">
                                <i class="icon-cog"></i>
                            </a>
                            <a class="move btn btn-invisible btn-link hide">
                                <i class="icon-resize-vertical"></i>
                            </a>
                        </div>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</div>
',
        'dnb-search-hint' => '
<div class="dashboard" data-dashboard="true">
    <div class="cols row-fluid">
        <div>
            <div class="preview-headerbar">
                <div class="headerpane">
                    <span class="record-cell">
                        <h1><span class="detail">{{str "LBL_DNB_ACC_CRT"}}</span></h1>
                    </span>
                    <span class="record-cell">
                        <h1><span class="detail"></span></h1>
                    </span>
                </div>
            </div>
        </div>
        <ul class="dashlets row-fluid">
            <li class="span12">
                <ul class="dashlet-row ui-sortable ui-sortable-disabled">
                    <li class="row-fluid sortable" data-sortable="1">
                        <div class="rows well well-invisible">
                            <a data-toggle="dropdown"  class="btn btn-invisible btn-link hide">
                                <i class="icon-cog"></i></a>
                            <ul class="dropdown-menu left carettop">
                                <div>
                                    <li><a class="remove-row">Remove</a></li>
                                </div>
                            </ul>
                            <a class="move btn btn-invisible btn-link hide">
                                <i class="icon-resize-vertical"></i></a>
                            <ul class="dashlet-cell rows row-fluid">
                                <li class="dashlet-container span12">
                                    <div>
                                        <div class="thumbnail dashlet">
                                            <div data-dashlet="toolbar">
                                                <div class="dashlet-header">
                                                    <div class="btn-toolbar pull-right">
                                                    </div>
                                                    <h4 data-toggle="dashlet">{{str "LBL_DNB_CI_SRCH"}}</h4>
                                                </div>
                                            </div>
                                            <div data-dashlet="dashlet" class="dashlet-content">
                                                <div class="block show_less create-acc">
                                                    <div class="globe-chart-wrapper">
                                                        <div id="dnb-search-hint" class="block-footer">
                                                            <aside>
                                                                <em>{{str "LBL_DNB_CI_SRCH_HINT"}}</em>
                                                            </aside>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swappable-dashlet icon-download-alt"></div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="row-fluid" data-sortable="1">
                        <div class="rows well well-invisible">
                            <a data-toggle="dropdown" class="btn btn-invisible btn-link hide">
                                <i class="icon-cog"></i>
                            </a>
                            <a class="move btn btn-invisible btn-link hide">
                                <i class="icon-resize-vertical"></i>
                            </a>
                        </div>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</div>
',
      ),
      'meta' => 
      array (
        'dashlets' => 
        array (
          0 => 
          array (
            'label' => 'LBL_DNB_ACC_CRT',
            'description' => 'LBL_DNB_ACC_CRT_DESC',
            'config' => 
            array (
            ),
            'preview' => 
            array (
            ),
            'filter' => 
            array (
              'module' => 
              array (
                0 => 'DnbNoDisplay',
              ),
              'view' => 'DnbNoDisplay',
            ),
          ),
        ),
      ),
    ),
    'dnb-bal-header' => 
    array (
      'templates' => 
      array (
        'dnb-bal-header' => '
<div class="headerpane">
    <h1>
        <div class="record-cell">
            <img src="modules/Connectors/connectors/sources/ext/rest/dnb/images/DNB_corp30_pos.png" class="avatar">
            <span class="module-title">{{str meta.title}}</span>
        </div>
        <div class="btn-toolbar pull-right dropdown">
            {{#each meta.buttons}}
                {{field ../this}}
            {{/each}}
        </div>
    </h1>
</div>

',
      ),
      'meta' => 
      array (
        'title' => 'LBL_DNB_BAL',
        'buttons' => 
        array (
          0 => 
          array (
            'name' => 'reset_button',
            'type' => 'button',
            'label' => 'LBL_RESET',
            'css_class' => 'btn-invisible btn-link',
          ),
        ),
      ),
    ),
    'dnb-bal-params' => 
    array (
      'templates' => 
      array (
        'dnb-bal-params' => '
<div class="accordion" id="dnb_bal_accordian">
    {{#each meta.panels}}
        <div class="accordion-group">
            <div class="accordion-heading enabled {{#eq @index 0}}active{{/eq}}"
                 data-toggle="collapse" data-parent="#dnb_bal_accordian" data-target="#dnb_bal_param_tab_{{@index}}">
                <span class="pull-left step-circle">
                    <span>{{moduleNumber}}</span>
                    <i class="icon-ok-sign"></i>
                </span>
                <span class="btn btn-invisible active-indicator pull-right"><i class="icon-chevron-down"></i></span>
                <span class="title">{{str title}}</span>
                <span class="hide dnb-params-header"></span>
            </div>
            <div id="dnb_bal_param_tab_{{@index}}" class="accordion-body collapse {{#eq @index 0}}in{{/eq}}"
                 {{#if paramGrp}}data-paramgrp="{{paramGrp}}"{{/if}}>
                <div class="accordion-inner">
                    <div class="record">
                        {{#each rows}}
                            <div class="row-fluid {{../../name}}">
                            {{#each this.fields}}
                                <div class="record-cell{{#if cell_css_class}} {{cell_css_class}}{{/if}}"
                                     data-type="{{type}}" data-name="{{name}}">
                                    {{#notEq this.type \'tagcontainer\'}}
                                        <span class="{{#notEq type \'label\'}}normal{{/notEq}}{{#if css}} {{css}}{{/if}} index{{index}}"
                                              data-fieldname="{{name}}" data-index="{{index}}"
                                            {{#if this.tooltip}}data-placement="right" rel="tooltip" data-title="{{this.tooltip}}"{{/if}}>
                                            {{field ../../../../this model=../../../../model template=../../../../this.action}}
                                        </span>
                                    {{/notEq}}
                                    {{#eq this.type \'tagcontainer\'}}
                                        <div class="select2-container select2-container-multi select2-choices-pills-close select2 inherit-width" style="width: 100%;">
                                            <ul class="select2-choices" id="{{#if id}}{{id}}{{/if}}"></ul>
                                        </div>
                                    {{/eq}}
                                </div>
                            {{/each}}
                            </div>
                        {{/each}}
                    </div>
                </div>
            </div>
        </div>
    {{/each}}
</div>
',
        'tagtmpl1' => '
<li class=\'select2-search-choice\'>
    <div id=\'{{tagId}}\'>
        {{tagText}}
    </div>
    <a href=\'#\' onclick=\'return false;\' class=\'select2-search-choice-close\' tabindex=\'-1\'></a>
</li>
',
        'tagtmpl2' => '
<li class=\'select2-search-choice\'>
    <div id=\'{{tagId}}\' data-parentkey=\'{{tagParent}}\'>
        {{tagText}}
    </div>
    <a href=\'#\' onclick=\'return false;\' class=\'select2-search-choice-close\' tabindex=\'-1\'></a>
</li>
',
      ),
      'meta' => 
      array (
        'action' => 'edit',
        'panels' => 
        array (
          0 => 
          array (
            'name' => 'panel_body',
            'title' => 'LBL_DNB_BAL_PARAM_PEOPLE',
            'label' => 'LBL_RECORD_BODY',
            'columns' => 2,
            'paramGrp' => 'people',
            'labelsOnTop' => true,
            'placeholders' => true,
            'rows' => 
            array (
              0 => 
              array (
                'fields' => 
                array (
                  0 => 
                  array (
                    'type' => 'label',
                    'cell_css_class' => 'span2',
                    'default_value' => 'LBL_DNB_BAL_PARAM_JOB_FN',
                    'name' => 'dnb_bal_job_fn_lbl',
                    'css' => 'dnb-bal-param-label',
                  ),
                  1 => 
                  array (
                    'name' => 'dnb_bal_job_fn',
                    'type' => 'dnbenum',
                    'options' => 'dnb_job_codes',
                    'cell_css_class' => 'span3',
                  ),
                ),
              ),
              1 => 
              array (
                'fields' => 
                array (
                  0 => 
                  array (
                    'type' => 'label',
                    'cell_css_class' => 'span2',
                    'default_value' => 'LBL_DNB_BAL_PARAM_KEYWORD',
                    'css' => 'dnb-bal-param-label',
                    'name' => 'dnb_bal_param_kw_lbl',
                  ),
                  1 => 
                  array (
                    'name' => 'dnb_bal_kw_scope',
                    'type' => 'enum',
                    'cell_css_class' => 'span2',
                    'options' => 'dnb_contact_kw_scope',
                  ),
                  2 => 
                  array (
                    'name' => 'dnb_bal_kw',
                    'cell_css_class' => 'span3',
                    'placeholder' => 'LBL_DNB_BAL_PARAM_KEYWORD',
                    'no_required_placeholder' => true,
                    'required' => true,
                    'len' => 30,
                  ),
                  3 => 
                  array (
                    'type' => 'rowaction',
                    'cell_css_class' => 'span1',
                    'icon' => 'icon-plus',
                    'css_class' => 'dnb-bal-add-btn btn',
                    'event' => 'dnb-bal-kw-scope-btn',
                  ),
                  4 => 
                  array (
                    'type' => 'tagcontainer',
                    'cell_css_class' => 'tagcontainer span3',
                    'id' => 'dnb-kw-tags',
                  ),
                ),
              ),
            ),
          ),
          1 => 
          array (
            'name' => 'panel_body',
            'title' => 'LBL_DNB_BAL_PARAM_COMP',
            'label' => 'LBL_RECORD_BODY',
            'columns' => 2,
            'paramGrp' => 'companyLocation',
            'labelsOnTop' => true,
            'placeholders' => true,
            'rows' => 
            array (
              0 => 
              array (
                'fields' => 
                array (
                  0 => 
                  array (
                    'type' => 'label',
                    'cell_css_class' => 'span2',
                    'default_value' => 'LBL_DNB_COUNTRY',
                    'name' => 'dnb_bal_ctry_lbl',
                    'css' => 'dnb-bal-param-label',
                  ),
                  1 => 
                  array (
                    'name' => 'dnb_bal_ctry',
                    'type' => 'dnbenum',
                    'isMultiSelect' => true,
                    'options' => 'dnb_countries_iso',
                    'cell_css_class' => 'span3',
                  ),
                ),
              ),
              1 => 
              array (
                'fields' => 
                array (
                  0 => 
                  array (
                    'type' => 'label',
                    'cell_css_class' => 'span2',
                    'default_value' => 'LBL_DNB_BAL_PARAM_STATES',
                    'tooltip' => 'LBL_TT_DNB_BAL_STATES',
                    'css' => 'dnb-bal-param-label',
                    'name' => 'dnb_bal_state_lbl',
                  ),
                  1 => 
                  array (
                    'name' => 'dnb_bal_state',
                    'cell_css_class' => 'span2',
                    'placeholder' => 'LBL_DNB_BAL_PARAM_STATES',
                    'no_required_placeholder' => true,
                    'required' => true,
                    'len' => 64,
                  ),
                  2 => 
                  array (
                    'type' => 'rowaction',
                    'cell_css_class' => 'span1',
                    'icon' => 'icon-plus',
                    'css_class' => 'dnb-bal-add-btn btn',
                    'event' => 'dnb-bal-state-btn',
                  ),
                  3 => 
                  array (
                    'type' => 'tagcontainer',
                    'cell_css_class' => 'tagcontainer span3',
                    'id' => 'dnb-state-tags',
                  ),
                ),
              ),
              2 => 
              array (
                'fields' => 
                array (
                  0 => 
                  array (
                    'type' => 'label',
                    'cell_css_class' => 'span2',
                    'default_value' => 'LBL_DNB_CI_CITY',
                    'css' => 'dnb-bal-param-label',
                  ),
                  1 => 
                  array (
                    'name' => 'dnb_bal_city',
                    'cell_css_class' => 'span2',
                    'placeholder' => 'LBL_DNB_CI_CITY',
                    'no_required_placeholder' => true,
                    'required' => true,
                    'len' => 240,
                  ),
                  2 => 
                  array (
                    'type' => 'rowaction',
                    'cell_css_class' => 'span1',
                    'icon' => 'icon-plus',
                    'css_class' => 'dnb-bal-add-btn btn',
                    'event' => 'dnb-bal-city-btn',
                  ),
                  3 => 
                  array (
                    'type' => 'tagcontainer',
                    'cell_css_class' => 'tagcontainer span3',
                    'id' => 'dnb-city-tags',
                  ),
                ),
              ),
              3 => 
              array (
                'fields' => 
                array (
                  0 => 
                  array (
                    'type' => 'label',
                    'cell_css_class' => 'span2',
                    'default_value' => 'LBL_DNB_BAL_AREA_CODE',
                    'tooltip' => 'LBL_TT_DNB_BAL_AREA_CODE',
                    'css' => 'dnb-bal-param-label',
                  ),
                  1 => 
                  array (
                    'name' => 'dnb_bal_area_code',
                    'cell_css_class' => 'span2',
                    'placeholder' => 'LBL_DNB_BAL_AREA_CODE',
                    'no_required_placeholder' => true,
                    'required' => true,
                    'len' => 16,
                  ),
                  2 => 
                  array (
                    'type' => 'rowaction',
                    'cell_css_class' => 'span1',
                    'icon' => 'icon-plus',
                    'css_class' => 'dnb-bal-add-btn btn',
                    'event' => 'dnb-bal-area-code-btn',
                  ),
                  3 => 
                  array (
                    'type' => 'tagcontainer',
                    'cell_css_class' => 'tagcontainer span3',
                    'id' => 'dnb-area-code-tags',
                  ),
                ),
              ),
              4 => 
              array (
                'fields' => 
                array (
                  0 => 
                  array (
                    'type' => 'label',
                    'cell_css_class' => 'span2',
                    'default_value' => 'LBL_DNB_BAL_POSTAL_CODE',
                    'tooltip' => 'LBL_TT_DNB_BAL_POSTAL_CODE',
                    'css' => 'dnb-bal-param-label',
                  ),
                  1 => 
                  array (
                    'name' => 'dnb_bal_postal_code',
                    'cell_css_class' => 'span2',
                    'placeholder' => 'LBL_DNB_BAL_POSTAL_CODE',
                    'no_required_placeholder' => true,
                    'required' => true,
                    'len' => 16,
                  ),
                  2 => 
                  array (
                    'type' => 'rowaction',
                    'cell_css_class' => 'span1',
                    'icon' => 'icon-plus',
                    'css_class' => 'dnb-bal-add-btn btn',
                    'event' => 'dnb-bal-postal-code-btn',
                  ),
                  3 => 
                  array (
                    'type' => 'tagcontainer',
                    'cell_css_class' => 'tagcontainer span3',
                    'id' => 'dnb-postal-code-tags',
                  ),
                ),
              ),
              5 => 
              array (
                'fields' => 
                array (
                  0 => 
                  array (
                    'type' => 'label',
                    'cell_css_class' => 'span2',
                    'default_value' => 'LBL_DNB_BAL_RADIUS_SRCH',
                    'tooltip' => 'LBL_TT_DNB_BAL_RADIUS_SRCH',
                    'css' => 'dnb-bal-param-label',
                    'name' => 'dnb_bal_rad_srch_lbl',
                  ),
                  1 => 
                  array (
                    'name' => 'dnb_bal_dist_ctry',
                    'type' => 'enum',
                    'options' => 'dnb_countries_radius_iso',
                    'placeholder' => 'LBL_DNB_SLCT_CTRY',
                    'cell_css_class' => 'span2',
                  ),
                  2 => 
                  array (
                    'name' => 'dnb_bal_distance',
                    'type' => 'float',
                    'placeholder' => 'LBL_DNB_BAL_DISTANCE',
                    'cell_css_class' => 'span2',
                    'no_required_placeholder' => true,
                    'required' => true,
                    'len' => 5,
                  ),
                  3 => 
                  array (
                    'name' => 'dnb_bal_distance_units',
                    'type' => 'enum',
                    'cell_css_class' => 'span2',
                    'options' => 'dnb_bal_miles_km',
                  ),
                  4 => 
                  array (
                    'name' => 'dnb_bal_distance_zip',
                    'placeholder' => 'LBL_DNB_BAL_ZIP',
                    'cell_css_class' => 'span2',
                    'no_required_placeholder' => true,
                    'required' => true,
                    'len' => 16,
                  ),
                  5 => 
                  array (
                    'type' => 'rowaction',
                    'cell_css_class' => 'span1',
                    'icon' => 'icon-plus',
                    'css_class' => 'dnb-bal-add-btn btn',
                    'event' => 'dnb-bal-rad-srch-btn',
                  ),
                ),
              ),
              6 => 
              array (
                'fields' => 
                array (
                  0 => 
                  array (
                    'type' => 'tagcontainer',
                    'cell_css_class' => 'tagcontainer offset2 span3',
                    'id' => 'dnb-rad-srch-tags',
                  ),
                ),
              ),
            ),
          ),
          2 => 
          array (
            'name' => 'panel_body',
            'title' => 'LBL_DNB_BAL_INDUSTRY',
            'paramGrp' => 'industry',
            'label' => 'LBL_RECORD_BODY',
            'columns' => 2,
            'labelsOnTop' => true,
            'placeholders' => true,
            'rows' => 
            array (
              0 => 
              array (
                'fields' => 
                array (
                  0 => 
                  array (
                    'name' => 'dnb_bal_ind_code_type',
                    'label' => 'LBL_DNB_BAL_IND_CODE_TYPE',
                    'tooltip' => 'LBL_TT_DNB_BAL_CODE_TYPE',
                    'type' => 'enum',
                    'cell_css_class' => 'span2',
                    'placeholder' => 'LBL_DNB_BAL_IND_CODE_TYPE',
                    'searchBarThreshold' => -1,
                    'options' => 'dnb_sic_naics_code',
                  ),
                  1 => 
                  array (
                    'name' => 'dnb_bal_ind_filter',
                    'label' => 'LBL_DNB_BAL_IND_CODE_TYPE_PRI_SEC',
                    'type' => 'enum',
                    'cell_css_class' => 'span3',
                    'placeholder' => 'LBL_DNB_BAL_IND_CODE_TYPE_PRI_SEC',
                    'searchBarThreshold' => -1,
                    'options' => 'dnb_bal_primary_secondary',
                  ),
                  2 => 
                  array (
                    'name' => 'dnb_bal_ind_code_val',
                    'tooltip' => 'LBL_TT_DNB_BAL_IND_CODE',
                    'type' => 'int',
                    'cell_css_class' => 'span2',
                    'no_required_placeholder' => true,
                    'required' => true,
                    'len' => 16,
                  ),
                  3 => 
                  array (
                    'type' => 'rowaction',
                    'cell_css_class' => 'span1',
                    'icon' => 'icon-plus',
                    'css_class' => 'dnb-bal-add-btn btn',
                    'event' => 'dnb-bal-ind-code-btn',
                  ),
                  4 => 
                  array (
                    'type' => 'tagcontainer',
                    'cell_css_class' => 'tagcontainer span3',
                    'id' => 'dnb-ind-code-tags',
                  ),
                  5 => 
                  array (
                    'type' => 'label',
                    'cell_css_class' => 'span10',
                    'default_value' => 'LBL_DNB_BAL_SIC_NAICS_EXAMPLE',
                    'css' => 'dnb-bal-param-label',
                  ),
                ),
              ),
            ),
          ),
          3 => 
          array (
            'name' => 'panel_body',
            'title' => 'LBL_DNB_BAL_PARAM_COMP_SZ',
            'label' => 'LBL_RECORD_BODY',
            'columns' => 5,
            'paramGrp' => 'companySize',
            'labelsOnTop' => true,
            'placeholders' => true,
            'rows' => 
            array (
              0 => 
              array (
                'fields' => 
                array (
                  0 => 
                  array (
                    'type' => 'label',
                    'cell_css_class' => 'span2',
                    'tooltip' => 'LBL_TT_DNB_BAL_MILLIONS',
                    'default_value' => 'LBL_DNB_BAL_PARAM_ANNL_SALES',
                    'css' => 'dnb-bal-param-label',
                  ),
                  1 => 
                  array (
                    'name' => 'dnb_bal_sale',
                    'type' => 'enum',
                    'cell_css_class' => 'span3',
                    'searchBarThreshold' => -1,
                    'options' => 'dnb_bal_gte_lte_btw',
                  ),
                  2 => 
                  array (
                    'name' => 'dnb_bal_sales_low',
                    'type' => 'float',
                    'tooltip' => 'LBL_TT_DNB_BAL_MILLIONS',
                    'cell_css_class' => 'hide toggleCandidate span2',
                    'no_required_placeholder' => true,
                    'required' => true,
                    'len' => 7,
                  ),
                  3 => 
                  array (
                    'name' => 'dnb_bal_annl_sale_and_str',
                    'type' => 'label',
                    'cell_css_class' => 'hide toggleCandidate span1',
                    'css' => 'dnb-bal-param-label',
                    'default_value' => 'LBL_DNB_AND',
                  ),
                  4 => 
                  array (
                    'name' => 'dnb_bal_sales_high',
                    'type' => 'float',
                    'tooltip' => 'LBL_TT_DNB_BAL_MILLIONS',
                    'cell_css_class' => 'span2',
                    'no_required_placeholder' => true,
                    'required' => true,
                    'len' => 7,
                  ),
                  5 => 
                  array (
                    'type' => 'rowaction',
                    'cell_css_class' => 'span1',
                    'icon' => 'icon-plus',
                    'css_class' => 'dnb-bal-add-btn btn',
                    'event' => 'dnb-bal-sales-btn',
                  ),
                  6 => 
                  array (
                    'type' => 'tagcontainer',
                    'cell_css_class' => 'tagcontainer span3',
                    'id' => 'dnb-annlsales-tags',
                  ),
                ),
              ),
              1 => 
              array (
                'fields' => 
                array (
                  0 => 
                  array (
                    'type' => 'label',
                    'cell_css_class' => 'span2',
                    'default_value' => 'LBL_DNB_BAL_PARAM_EMP_CNT',
                    'css' => 'dnb-bal-param-label',
                  ),
                  1 => 
                  array (
                    'name' => 'dnb_bal_emp_cnt_cat',
                    'type' => 'enum',
                    'cell_css_class' => 'span2',
                    'searchBarThreshold' => -1,
                    'options' => 'dnb_bal_single_all',
                  ),
                  2 => 
                  array (
                    'name' => 'dnb_bal_emp_cnt',
                    'type' => 'enum',
                    'cell_css_class' => 'span3',
                    'searchBarThreshold' => -1,
                    'options' => 'dnb_bal_gte_lte_btw',
                  ),
                  3 => 
                  array (
                    'name' => 'dnb_bal_emp_cnt_low',
                    'type' => 'int',
                    'cell_css_class' => 'hide toggleCandidate span1',
                    'no_required_placeholder' => true,
                    'required' => true,
                    'len' => 7,
                  ),
                  4 => 
                  array (
                    'name' => 'dnb_bal_annl_sale_and_str',
                    'type' => 'label',
                    'cell_css_class' => 'hide toggleCandidate span1',
                    'css' => 'dnb-bal-param-label',
                    'default_value' => 'LBL_DNB_AND',
                  ),
                  5 => 
                  array (
                    'name' => 'dnb_bal_emp_cnt_high',
                    'type' => 'int',
                    'cell_css_class' => 'span1',
                    'no_required_placeholder' => true,
                    'required' => true,
                    'len' => 7,
                  ),
                  6 => 
                  array (
                    'type' => 'rowaction',
                    'cell_css_class' => 'span1',
                    'icon' => 'icon-plus',
                    'css_class' => 'dnb-bal-add-btn btn',
                    'event' => 'dnb-bal-empcnt-btn',
                  ),
                  7 => 
                  array (
                    'type' => 'tagcontainer',
                    'cell_css_class' => 'tagcontainer span3',
                    'id' => 'dnb-empcnt-tags',
                  ),
                ),
              ),
              2 => 
              array (
                'fields' => 
                array (
                  0 => 
                  array (
                    'type' => 'label',
                    'cell_css_class' => 'span2',
                    'default_value' => 'LBL_DNB_BAL_PARAM_EMP_GRWTH',
                    'css' => 'dnb-bal-param-label',
                  ),
                  1 => 
                  array (
                    'name' => 'dnb_bal_emp_grwth',
                    'type' => 'enum',
                    'cell_css_class' => 'span3',
                    'searchBarThreshold' => -1,
                    'options' => 'dnb_bal_gte_lte_btw',
                  ),
                  2 => 
                  array (
                    'name' => 'dnb_bal_emp_grwth_low',
                    'type' => 'float',
                    'cell_css_class' => 'hide toggleCandidate span1',
                    'no_required_placeholder' => true,
                    'required' => true,
                    'len' => 7,
                  ),
                  3 => 
                  array (
                    'name' => 'dnb_bal_annl_sale_and_str',
                    'type' => 'label',
                    'cell_css_class' => 'hide toggleCandidate span1',
                    'css' => 'dnb-bal-param-label',
                    'default_value' => 'LBL_DNB_AND',
                  ),
                  4 => 
                  array (
                    'name' => 'dnb_bal_emp_grwth_high',
                    'type' => 'float',
                    'cell_css_class' => 'span1',
                    'no_required_placeholder' => true,
                    'required' => true,
                    'len' => 7,
                  ),
                  5 => 
                  array (
                    'type' => 'rowaction',
                    'cell_css_class' => 'span1',
                    'icon' => 'icon-plus',
                    'css_class' => 'dnb-bal-add-btn btn',
                    'event' => 'dnb-bal-empgrwth-btn',
                  ),
                  6 => 
                  array (
                    'type' => 'tagcontainer',
                    'cell_css_class' => 'tagcontainer span3',
                    'id' => 'dnb-bal-empgrwth-tags',
                  ),
                ),
              ),
              3 => 
              array (
                'fields' => 
                array (
                  0 => 
                  array (
                    'type' => 'label',
                    'cell_css_class' => 'span2',
                    'default_value' => 'LBL_DNB_BAL_PARAM_MKT_CAP',
                    'tooltip' => 'LBL_TT_DNB_BAL_MILLIONS',
                    'css' => 'dnb-bal-param-label',
                  ),
                  1 => 
                  array (
                    'name' => 'dnb_bal_mkt_cap',
                    'type' => 'enum',
                    'cell_css_class' => 'span3',
                    'searchBarThreshold' => -1,
                    'options' => 'dnb_bal_gte_lte_btw',
                  ),
                  2 => 
                  array (
                    'name' => 'dnb_bal_mkt_cap_low',
                    'type' => 'float',
                    'tooltip' => 'LBL_TT_DNB_BAL_MILLIONS',
                    'cell_css_class' => 'hide toggleCandidate span2',
                    'no_required_placeholder' => true,
                    'required' => true,
                    'len' => 7,
                  ),
                  3 => 
                  array (
                    'name' => 'dnb_bal_annl_sale_and_str',
                    'type' => 'label',
                    'cell_css_class' => 'hide toggleCandidate span1',
                    'css' => 'dnb-bal-param-label',
                    'default_value' => 'LBL_DNB_AND',
                  ),
                  4 => 
                  array (
                    'name' => 'dnb_bal_mkt_cap_high',
                    'type' => 'float',
                    'tooltip' => 'LBL_TT_DNB_BAL_MILLIONS',
                    'cell_css_class' => 'span2',
                    'no_required_placeholder' => true,
                    'required' => true,
                    'len' => 7,
                  ),
                  5 => 
                  array (
                    'type' => 'rowaction',
                    'cell_css_class' => 'span1',
                    'icon' => 'icon-plus',
                    'css_class' => 'dnb-bal-add-btn btn',
                    'event' => 'dnb-bal-mktcap-btn',
                  ),
                  6 => 
                  array (
                    'type' => 'tagcontainer',
                    'cell_css_class' => 'tagcontainer span3',
                    'id' => 'dnb-mktcap-tags',
                  ),
                ),
              ),
            ),
          ),
          4 => 
          array (
            'name' => 'panel_body',
            'title' => 'LBL_DNB_BAL_PARAM_COMP_INFORMATION',
            'label' => 'LBL_RECORD_BODY',
            'columns' => 2,
            'paramGrp' => 'companyInfo',
            'labelsOnTop' => true,
            'placeholders' => true,
            'rows' => 
            array (
              0 => 
              array (
                'fields' => 
                array (
                  0 => 
                  array (
                    'type' => 'label',
                    'cell_css_class' => 'span2',
                    'default_value' => 'LBL_DNB_BAL_ORG_NAME',
                    'css' => 'dnb-bal-param-label',
                  ),
                  1 => 
                  array (
                    'name' => 'dnb_bal_org_name',
                    'tooltip' => 'LBL_TT_DNB_BAL_ORG_NAME',
                    'cell_css_class' => 'span2',
                    'no_required_placeholder' => true,
                    'required' => true,
                    'len' => 240,
                  ),
                  2 => 
                  array (
                    'type' => 'rowaction',
                    'cell_css_class' => 'span1',
                    'icon' => 'icon-plus',
                    'css_class' => 'dnb-bal-add-btn btn',
                    'event' => 'dnb-bal-org-name-btn',
                  ),
                  3 => 
                  array (
                    'type' => 'tagcontainer',
                    'cell_css_class' => 'tagcontainer span3',
                    'id' => 'dnb-org-name-tags',
                  ),
                ),
              ),
              1 => 
              array (
                'fields' => 
                array (
                  0 => 
                  array (
                    'type' => 'label',
                    'cell_css_class' => 'span2',
                    'default_value' => 'LBL_DNB_BAL_YEAR_OF_FOUNDING',
                    'css' => 'dnb-bal-param-label',
                  ),
                  1 => 
                  array (
                    'name' => 'dnb_bal_founding',
                    'type' => 'enum',
                    'cell_css_class' => 'span3',
                    'searchBarThreshold' => -1,
                    'options' => 'dnb_bal_gte_lte_btw',
                  ),
                  2 => 
                  array (
                    'name' => 'dnb_bal_year_of_founding_low',
                    'type' => 'int',
                    'cell_css_class' => 'hide toggleCandidate span1',
                    'tooltip' => 'LBL_TT_DNB_BAL_YEAR_OF_FOUNDING',
                    'no_required_placeholder' => true,
                    'required' => true,
                    'len' => 4,
                  ),
                  3 => 
                  array (
                    'name' => 'dnb_bal_year_of_founding_and_str',
                    'type' => 'label',
                    'cell_css_class' => 'hide toggleCandidate span1',
                    'css' => 'dnb-bal-param-label',
                    'default_value' => 'LBL_DNB_AND',
                  ),
                  4 => 
                  array (
                    'name' => 'dnb_bal_year_of_founding_high',
                    'tooltip' => 'LBL_TT_DNB_BAL_YEAR_OF_FOUNDING',
                    'type' => 'int',
                    'cell_css_class' => 'span1',
                    'no_required_placeholder' => true,
                    'required' => true,
                    'len' => 4,
                  ),
                  5 => 
                  array (
                    'type' => 'rowaction',
                    'cell_css_class' => 'span1',
                    'icon' => 'icon-plus',
                    'css_class' => 'dnb-bal-add-btn btn',
                    'event' => 'dnb-bal-year-founding-btn',
                  ),
                  6 => 
                  array (
                    'type' => 'tagcontainer',
                    'cell_css_class' => 'tagcontainer span3',
                    'id' => 'dnb-year-of-founding-tags',
                  ),
                ),
              ),
              2 => 
              array (
                'fields' => 
                array (
                  0 => 
                  array (
                    'type' => 'label',
                    'cell_css_class' => 'span2',
                    'default_value' => 'LBL_DNB_BAL_PRESCREEN_SCORE',
                    'css' => 'dnb-bal-param-label',
                    'name' => 'dnb_bal_presc_lbl',
                  ),
                  1 => 
                  array (
                    'name' => 'dnb_bal_prescreen_score',
                    'type' => 'enum',
                    'cell_css_class' => 'span3',
                    'isMultiSelect' => true,
                    'tooltip' => 'LBL_TT_DNB_BAL_PRESCREEN_SCORE',
                    'searchBarThreshold' => -1,
                    'options' => 'dnb_bal_prescreen_options',
                  ),
                ),
              ),
              3 => 
              array (
                'fields' => 
                array (
                  0 => 
                  array (
                    'type' => 'label',
                    'cell_css_class' => 'span2',
                    'default_value' => 'LBL_DNB_BAL_DUNS',
                    'css' => 'dnb-bal-param-label',
                  ),
                  1 => 
                  array (
                    'name' => 'dnb_bal_duns',
                    'tooltip' => 'LBL_TT_DNB_BAL_DUNS',
                    'type' => 'int',
                    'cell_css_class' => 'span2',
                    'no_required_placeholder' => true,
                    'required' => true,
                    'len' => 15,
                  ),
                  2 => 
                  array (
                    'type' => 'rowaction',
                    'cell_css_class' => 'span1',
                    'icon' => 'icon-plus',
                    'css_class' => 'dnb-bal-add-btn btn',
                    'event' => 'dnb-bal-duns-btn',
                  ),
                  3 => 
                  array (
                    'type' => 'tagcontainer',
                    'cell_css_class' => 'tagcontainer span3',
                    'id' => 'dnb-duns-tags',
                  ),
                ),
              ),
              4 => 
              array (
                'fields' => 
                array (
                  0 => 
                  array (
                    'type' => 'label',
                    'cell_css_class' => 'span2',
                    'default_value' => 'LBL_DNB_BAL_ORG_ID',
                    'css' => 'dnb-bal-param-label',
                  ),
                  1 => 
                  array (
                    'name' => 'dnb_bal_org_id',
                    'tooltip' => 'LBL_TT_DNB_BAL_ORGID',
                    'type' => 'int',
                    'cell_css_class' => 'span2',
                    'no_required_placeholder' => true,
                    'required' => true,
                    'len' => 40,
                  ),
                  2 => 
                  array (
                    'type' => 'rowaction',
                    'cell_css_class' => 'span1',
                    'icon' => 'icon-plus',
                    'css_class' => 'dnb-bal-add-btn btn',
                    'event' => 'dnb-bal-org-id-btn',
                  ),
                  3 => 
                  array (
                    'type' => 'tagcontainer',
                    'cell_css_class' => 'tagcontainer span3',
                    'id' => 'dnb-bal-org-id-tags',
                  ),
                ),
              ),
            ),
          ),
          5 => 
          array (
            'name' => 'panel_body',
            'title' => 'LBL_DNB_BAL_FINANCIAL_INFO',
            'label' => 'LBL_RECORD_BODY',
            'columns' => 2,
            'paramGrp' => 'financialInfo',
            'labelsOnTop' => true,
            'placeholders' => true,
            'rows' => 
            array (
              0 => 
              array (
                'fields' => 
                array (
                  0 => 
                  array (
                    'type' => 'label',
                    'cell_css_class' => 'span2',
                    'default_value' => 'LBL_DNB_BAL_NET_INCOME',
                    'tooltip' => 'LBL_TT_DNB_BAL_MILLIONS_EX',
                    'css' => 'dnb-bal-param-label',
                  ),
                  1 => 
                  array (
                    'name' => 'dnb_bal_net_income',
                    'type' => 'enum',
                    'cell_css_class' => 'span3',
                    'searchBarThreshold' => -1,
                    'options' => 'dnb_bal_gte_lte_btw',
                  ),
                  2 => 
                  array (
                    'name' => 'dnb_bal_net_income_low',
                    'type' => 'float',
                    'tooltip' => 'LBL_TT_DNB_BAL_MILLIONS_EX',
                    'cell_css_class' => 'hide toggleCandidate span2',
                    'no_required_placeholder' => true,
                    'required' => true,
                    'len' => 7,
                  ),
                  3 => 
                  array (
                    'name' => 'dnb_bal_net_income_and_str',
                    'type' => 'label',
                    'cell_css_class' => 'hide toggleCandidate span1',
                    'css' => 'dnb-bal-param-label',
                    'default_value' => 'LBL_DNB_AND',
                  ),
                  4 => 
                  array (
                    'name' => 'dnb_bal_net_income_high',
                    'type' => 'float',
                    'tooltip' => 'LBL_TT_DNB_BAL_MILLIONS_EX',
                    'cell_css_class' => 'span2',
                    'no_required_placeholder' => true,
                    'required' => true,
                    'len' => 7,
                  ),
                  5 => 
                  array (
                    'type' => 'rowaction',
                    'cell_css_class' => 'span1',
                    'icon' => 'icon-plus',
                    'css_class' => 'dnb-bal-add-btn btn',
                    'event' => 'dnb-bal-net-income-btn',
                  ),
                  6 => 
                  array (
                    'type' => 'tagcontainer',
                    'cell_css_class' => 'tagcontainer span3',
                    'id' => 'dnb-net-income-tags',
                  ),
                ),
              ),
              1 => 
              array (
                'fields' => 
                array (
                  0 => 
                  array (
                    'type' => 'label',
                    'cell_css_class' => 'span2',
                    'default_value' => 'LBL_DNB_BAL_NET_INCOME_GROWTH',
                    'tooltip' => 'LBL_TT_DNB_BAL_NET_INCOME_GROWTH',
                    'css' => 'dnb-bal-param-label',
                  ),
                  1 => 
                  array (
                    'name' => 'dnb_bal_net_income_growth',
                    'type' => 'enum',
                    'cell_css_class' => 'span3',
                    'searchBarThreshold' => -1,
                    'options' => 'dnb_bal_gte_lte_btw',
                  ),
                  2 => 
                  array (
                    'name' => 'dnb_bal_net_income_growth_low',
                    'type' => 'float',
                    'tooltip' => 'LBL_TT_DNB_BAL_NET_INCOME_GROWTH',
                    'cell_css_class' => 'hide toggleCandidate span2',
                    'no_required_placeholder' => true,
                    'required' => true,
                    'len' => 7,
                  ),
                  3 => 
                  array (
                    'name' => 'dnb_bal_net_income_growth_and_str',
                    'type' => 'label',
                    'cell_css_class' => 'hide toggleCandidate span1',
                    'css' => 'dnb-bal-param-label',
                    'default_value' => 'LBL_DNB_AND',
                  ),
                  4 => 
                  array (
                    'name' => 'dnb_bal_net_income_growth_high',
                    'type' => 'float',
                    'tooltip' => 'LBL_TT_DNB_BAL_NET_INCOME_GROWTH',
                    'cell_css_class' => 'span2',
                    'no_required_placeholder' => true,
                    'required' => true,
                    'len' => 7,
                  ),
                  5 => 
                  array (
                    'type' => 'rowaction',
                    'cell_css_class' => 'span1',
                    'icon' => 'icon-plus',
                    'css_class' => 'dnb-bal-add-btn btn',
                    'event' => 'dnb-bal-net-income-growth-btn',
                  ),
                  6 => 
                  array (
                    'type' => 'tagcontainer',
                    'cell_css_class' => 'tagcontainer span3',
                    'id' => 'dnb-net-income-growth-tags',
                  ),
                ),
              ),
              2 => 
              array (
                'fields' => 
                array (
                  0 => 
                  array (
                    'type' => 'label',
                    'cell_css_class' => 'span2',
                    'default_value' => 'LBL_DNB_BAL_ASSETS',
                    'tooltip' => 'LBL_TT_DNB_BAL_MILLIONS_EX',
                    'css' => 'dnb-bal-param-label',
                  ),
                  1 => 
                  array (
                    'name' => 'dnb_bal_assets',
                    'type' => 'enum',
                    'cell_css_class' => 'span3',
                    'searchBarThreshold' => -1,
                    'options' => 'dnb_bal_gte_lte_btw',
                  ),
                  2 => 
                  array (
                    'name' => 'dnb_bal_assets_low',
                    'type' => 'float',
                    'tooltip' => 'LBL_TT_DNB_BAL_MILLIONS_EX',
                    'cell_css_class' => 'hide toggleCandidate span2',
                    'no_required_placeholder' => true,
                    'required' => true,
                    'len' => 7,
                  ),
                  3 => 
                  array (
                    'name' => 'dnb_bal_assets_and_str',
                    'type' => 'label',
                    'cell_css_class' => 'hide toggleCandidate span1',
                    'css' => 'dnb-bal-param-label',
                    'default_value' => 'LBL_DNB_AND',
                  ),
                  4 => 
                  array (
                    'name' => 'dnb_bal_assets_high',
                    'type' => 'float',
                    'tooltip' => 'LBL_TT_DNB_BAL_MILLIONS_EX',
                    'cell_css_class' => 'span2',
                    'no_required_placeholder' => true,
                    'required' => true,
                    'len' => 7,
                  ),
                  5 => 
                  array (
                    'type' => 'rowaction',
                    'cell_css_class' => 'span1',
                    'icon' => 'icon-plus',
                    'css_class' => 'dnb-bal-add-btn btn',
                    'event' => 'dnb-bal-assets-btn',
                  ),
                  6 => 
                  array (
                    'type' => 'tagcontainer',
                    'cell_css_class' => 'tagcontainer span3',
                    'id' => 'dnb-net-assets-tags',
                  ),
                ),
              ),
            ),
          ),
          6 => 
          array (
            'name' => 'panel_body',
            'title' => 'LBL_DNB_BAL_IPO_DATA',
            'label' => 'LBL_RECORD_BODY',
            'columns' => 2,
            'paramGrp' => 'ipoData',
            'labelsOnTop' => true,
            'placeholders' => true,
            'rows' => 
            array (
              0 => 
              array (
                'fields' => 
                array (
                  0 => 
                  array (
                    'type' => 'label',
                    'cell_css_class' => 'span2',
                    'default_value' => 'LBL_DNB_BAL_IPO_OFFER_AMT',
                    'tooltip' => 'LBL_TT_DNB_BAL_MILLIONS',
                    'css' => 'dnb-bal-param-label',
                  ),
                  1 => 
                  array (
                    'name' => 'dnb_bal_offer_amt',
                    'type' => 'enum',
                    'cell_css_class' => 'span3',
                    'searchBarThreshold' => -1,
                    'options' => 'dnb_bal_gte_lte_btw',
                  ),
                  2 => 
                  array (
                    'name' => 'dnb_bal_offer_amt_low',
                    'type' => 'float',
                    'tooltip' => 'LBL_TT_DNB_BAL_MILLIONS',
                    'cell_css_class' => 'hide toggleCandidate span2',
                    'no_required_placeholder' => true,
                    'required' => true,
                    'len' => 7,
                  ),
                  3 => 
                  array (
                    'name' => 'dnb_bal_offer_amt_and_str',
                    'type' => 'label',
                    'cell_css_class' => 'hide toggleCandidate span1',
                    'css' => 'dnb-bal-param-label',
                    'default_value' => 'LBL_DNB_AND',
                  ),
                  4 => 
                  array (
                    'name' => 'dnb_bal_offer_amt_high',
                    'type' => 'float',
                    'tooltip' => 'LBL_TT_DNB_BAL_MILLIONS',
                    'cell_css_class' => 'span2',
                    'no_required_placeholder' => true,
                    'required' => true,
                    'len' => 7,
                  ),
                  5 => 
                  array (
                    'type' => 'rowaction',
                    'cell_css_class' => 'span1',
                    'icon' => 'icon-plus',
                    'css_class' => 'dnb-bal-add-btn btn',
                    'event' => 'dnb-bal-offer-amt-btn',
                  ),
                  6 => 
                  array (
                    'type' => 'tagcontainer',
                    'cell_css_class' => 'tagcontainer span3',
                    'id' => 'dnb-offer-amt-tags',
                  ),
                ),
              ),
              1 => 
              array (
                'fields' => 
                array (
                  0 => 
                  array (
                    'type' => 'label',
                    'cell_css_class' => 'span2',
                    'default_value' => 'LBL_DNB_BAL_IPO_PRICE_RANGE',
                    'tooltip' => 'LBL_TT_DNB_BAL_IPO_PRICE_RANGE',
                    'css' => 'dnb-bal-param-label',
                  ),
                  1 => 
                  array (
                    'name' => 'dnb_bal_ipo_price_range',
                    'type' => 'enum',
                    'cell_css_class' => 'span3',
                    'searchBarThreshold' => -1,
                    'options' => 'dnb_bal_gte_lte_btw',
                  ),
                  2 => 
                  array (
                    'name' => 'dnb_bal_ipo_price_range_low',
                    'type' => 'float',
                    'tooltip' => 'LBL_TT_DNB_BAL_IPO_PRICE_RANGE',
                    'cell_css_class' => 'hide toggleCandidate span2',
                    'no_required_placeholder' => true,
                    'required' => true,
                    'len' => 7,
                  ),
                  3 => 
                  array (
                    'name' => 'dnb_bal_ipo_price_range_and_str',
                    'type' => 'label',
                    'cell_css_class' => 'hide toggleCandidate span1',
                    'css' => 'dnb-bal-param-label',
                    'default_value' => 'LBL_DNB_AND',
                  ),
                  4 => 
                  array (
                    'name' => 'dnb_bal_ipo_price_range_high',
                    'type' => 'float',
                    'tooltip' => 'LBL_TT_DNB_BAL_IPO_PRICE_RANGE',
                    'cell_css_class' => 'span2',
                    'no_required_placeholder' => true,
                    'required' => true,
                    'len' => 7,
                  ),
                  5 => 
                  array (
                    'type' => 'rowaction',
                    'cell_css_class' => 'span1',
                    'icon' => 'icon-plus',
                    'css_class' => 'dnb-bal-add-btn btn',
                    'event' => 'dnb-bal-ipo-price-range-btn',
                  ),
                  6 => 
                  array (
                    'type' => 'tagcontainer',
                    'cell_css_class' => 'tagcontainer span3',
                    'id' => 'dnb-ipo-price-range-tags',
                  ),
                ),
              ),
            ),
          ),
        ),
        'balSelector' => 
        array (
          'dnb-bal-sales-btn' => 
          array (
            'operator' => 'dnb_bal_sale',
            'lowerLimit' => 'dnb_bal_sales_low',
            'upperLimit' => 'dnb_bal_sales_high',
            'addBtn' => '.dnb-bal-sales-btn',
            'container' => '#dnb-annlsales-tags',
            'tagLimit' => 1,
            'modelKey' => 'annualSales',
            'lowKey' => 'SalesLowRangeAmount',
            'highKey' => 'SalesHighRangeAmount',
          ),
          'dnb-bal-year-founding-btn' => 
          array (
            'operator' => 'dnb_bal_founding',
            'lowerLimit' => 'dnb_bal_year_of_founding_low',
            'upperLimit' => 'dnb_bal_year_of_founding_high',
            'addBtn' => '.dnb-bal-year-founding-btn',
            'container' => '#dnb-year-of-founding-tags',
            'tagLimit' => 1,
            'modelKey' => 'foundingYear',
            'lowKey' => 'ControlOwnershipFromYear',
            'highKey' => 'ControlOwnershipToYear',
          ),
          'dnb-bal-offer-amt-btn' => 
          array (
            'operator' => 'dnb_bal_offer_amt',
            'lowerLimit' => 'dnb_bal_offer_amt_low',
            'upperLimit' => 'dnb_bal_offer_amt_high',
            'addBtn' => '.dnb-bal-offer-amt-btn',
            'container' => '#dnb-offer-amt-tags',
            'tagLimit' => 1,
            'modelKey' => 'ipoOfferAmt',
            'lowKey' => 'InitialPublicOfferingLowRangeAmount',
            'highKey' => 'InitialPublicOfferingHighRangeAmount',
          ),
          'dnb-bal-ipo-price-range-btn' => 
          array (
            'operator' => 'dnb_bal_ipo_price_range',
            'lowerLimit' => 'dnb_bal_ipo_price_range_low',
            'upperLimit' => 'dnb_bal_ipo_price_range_high',
            'addBtn' => '.dnb-bal-ipo-price-range-btn',
            'container' => '#dnb-ipo-price-range-tags',
            'tagLimit' => 1,
            'modelKey' => 'ipoPriceRange',
            'lowKey' => 'InitialPublicOfferingShareValueLowRangeAmount',
            'highKey' => 'InitialPublicOfferingShareValueHighRangeAmount',
          ),
          'dnb-bal-net-income-btn' => 
          array (
            'operator' => 'dnb_bal_net_income',
            'lowerLimit' => 'dnb_bal_net_income_low',
            'upperLimit' => 'dnb_bal_net_income_high',
            'addBtn' => '.dnb-bal-net-income-btn',
            'container' => '#dnb-net-income-tags',
            'tagLimit' => 1,
            'modelKey' => 'netIncome',
            'lowKey' => 'NetIncomeLowRangeAmount',
            'highKey' => 'NetIncomeHighRangeAmount',
          ),
          'dnb-bal-net-income-growth-btn' => 
          array (
            'operator' => 'dnb_bal_net_income_growth',
            'lowerLimit' => 'dnb_bal_net_income_growth_low',
            'upperLimit' => 'dnb_bal_net_income_growth_high',
            'addBtn' => '.dnb-bal-net-income-growth-btn',
            'container' => '#dnb-net-income-growth-tags',
            'tagLimit' => 1,
            'modelKey' => 'netIncomeGrowth',
            'lowKey' => 'NetIncomeGrowthLowRangePercentage',
            'highKey' => 'NetIncomeGrowthHighRangePercentage',
          ),
          'dnb-bal-assets-btn' => 
          array (
            'operator' => 'dnb_bal_assets',
            'lowerLimit' => 'dnb_bal_assets_low',
            'upperLimit' => 'dnb_bal_assets_high',
            'addBtn' => '.dnb-bal-assets-btn',
            'container' => '#dnb-net-assets-tags',
            'tagLimit' => 1,
            'modelKey' => 'assets',
            'lowKey' => 'TotalAssetLowRangeAmount',
            'highKey' => 'TotalAssetHighRangeAmount',
          ),
          'dnb-bal-empcnt-btn' => 
          array (
            'operator' => 'dnb_bal_emp_cnt',
            'lowerLimit' => 'dnb_bal_emp_cnt_low',
            'upperLimit' => 'dnb_bal_emp_cnt_high',
            'addBtn' => '.dnb-bal-empcnt-btn',
            'container' => '#dnb-empcnt-tags',
            'tagLimit' => 1,
            'keyType' => 'dnb_bal_emp_cnt_cat',
            'modelKey' => 'employeeCount',
            'singlesite' => 
            array (
              'lowKey' => 'IndividualEntityEmployeeLowRangeQuantity',
              'highKey' => 'IndividualEntityEmployeeHighRangeQuantity',
            ),
            'allsites' => 
            array (
              'lowKey' => 'ConsolidatedEmployeeLowRangeQuantity',
              'highKey' => 'ConsolidatedEmployeeHighRangeQuantity',
            ),
          ),
          'dnb-bal-empgrwth-btn' => 
          array (
            'operator' => 'dnb_bal_emp_grwth',
            'lowerLimit' => 'dnb_bal_emp_grwth_low',
            'upperLimit' => 'dnb_bal_emp_grwth_high',
            'addBtn' => '.dnb-bal-empgrwth-btn',
            'container' => '#dnb-bal-empgrwth-tags',
            'tagLimit' => 1,
            'modelKey' => 'employeeGrowth',
            'lowKey' => 'ConsolidatedEmployeesGrowthLowRangePercentage',
            'highKey' => 'ConsolidatedEmployeesGrowthHighRangePercentage',
          ),
          'dnb-bal-mktcap-btn' => 
          array (
            'operator' => 'dnb_bal_mkt_cap',
            'lowerLimit' => 'dnb_bal_mkt_cap_low',
            'upperLimit' => 'dnb_bal_mkt_cap_high',
            'addBtn' => '.dnb-bal-mktcap-btn',
            'container' => '#dnb-mktcap-tags',
            'tagLimit' => 1,
            'modelKey' => 'marketCap',
            'lowKey' => 'MarketCapitalizationLowRangeAmount',
            'highKey' => 'MarketCapitalizationHighRangeAmount',
          ),
          'dnb-bal-area-code-btn' => 
          array (
            'addBtn' => '.dnb-bal-area-code-btn',
            'container' => '#dnb-area-code-tags',
            'tagLimit' => 100,
            'inputKey' => 'dnb_bal_area_code',
            'modelKey' => 'phoneAreaCode',
            'modelSubKey' => 'TelephoneNumberAreaCode-',
          ),
          'dnb-bal-duns-btn' => 
          array (
            'addBtn' => '.dnb-bal-duns-btn',
            'container' => '#dnb-duns-tags',
            'tagLimit' => 10,
            'inputKey' => 'dnb_bal_duns',
            'modelKey' => 'dunsNum',
            'modelSubKey' => 'DUNSNumber-',
          ),
          'dnb-bal-org-name-btn' => 
          array (
            'addBtn' => '.dnb-bal-org-name-btn',
            'container' => '#dnb-org-name-tags',
            'tagLimit' => 1,
            'inputKey' => 'dnb_bal_org_name',
            'modelKey' => 'orgName',
            'modelSubKey' => 'OrganizationName',
          ),
          'dnb-bal-postal-code-btn' => 
          array (
            'addBtn' => '.dnb-bal-postal-code-btn',
            'container' => '#dnb-postal-code-tags',
            'tagLimit' => 10,
            'inputKey' => 'dnb_bal_postal_code',
            'modelKey' => 'postalCode',
            'modelSubKey' => 'PostalCode-',
          ),
          'dnb-bal-city-btn' => 
          array (
            'addBtn' => '.dnb-bal-city-btn',
            'container' => '#dnb-city-tags',
            'tagLimit' => 10,
            'inputKey' => 'dnb_bal_city',
            'modelKey' => 'city',
            'modelSubKey' => 'PrimaryTownName-',
          ),
          'dnb-bal-state-btn' => 
          array (
            'addBtn' => '.dnb-bal-state-btn',
            'container' => '#dnb-state-tags',
            'tagLimit' => 10,
            'inputKey' => 'dnb_bal_state',
            'modelKey' => 'state',
            'modelSubKey' => 'TerritoryName-',
          ),
          'dnb_bal_ctry' => 
          array (
            'modelSubKey' => 'CountryISOAlpha2Code-',
            'modelKey' => 'country',
            'multiple' => true,
          ),
          'dnb_bal_prescreen_score' => 
          array (
            'modelSubKey' => 'MarketingRiskClassCode-',
            'modelKey' => 'prescreenScore',
            'multiple' => true,
          ),
          'dnb-bal-ind-code-btn' => 
          array (
            'addBtn' => '.dnb-bal-ind-code-btn',
            'container' => '#dnb-ind-code-tags',
            'operator' => 
            array (
              0 => 'dnb_bal_ind_code_type',
              1 => 'dnb_bal_ind_filter',
            ),
            'tagLimit' => 10,
            'modelKey' => 'industryCode',
            'modelSubKey' => 
            array (
              0 => 'IndustryCodeTypeCode',
              1 => 'PrimaryIndustryCodeOnlyIndicator',
            ),
            'tagSource' => 'dnb_bal_ind_code_val',
            'tagDest' => 'IndustryCode-',
          ),
          'dnb-bal-rad-srch-btn' => 
          array (
            'addBtn' => '.dnb-bal-rad-srch-btn',
            'container' => '#dnb-rad-srch-tags',
            'operator' => 
            array (
              0 => 'dnb_bal_dist_ctry',
              1 => 'dnb_bal_distance_units',
              2 => 'dnb_bal_distance',
              3 => 'dnb_bal_distance_zip',
            ),
            'tagLimit' => 1,
            'modelKey' => 'radiusSearch',
            'modelSubKey' => 
            array (
              0 => 'RadiusSearchCountryISOAlpha2Code',
              1 => 'RadiusMeasurementUnitCode',
              2 => 'RadiusMeasurement',
              3 => 'RadiusSearchPostalCode',
            ),
          ),
          'dnb-bal-org-id-btn' => 
          array (
            'addBtn' => '.dnb-bal-org-id-btn',
            'container' => '#dnb-bal-org-id-tags',
            'tagLimit' => 10,
            'inputKey' => 'dnb_bal_org_id',
            'modelKey' => 'orgid',
            'modelSubKey' => 'OrganizationIdentificationNumber-',
          ),
          'dnb-bal-kw-scope-btn' => 
          array (
            'addBtn' => '.dnb-bal-kw-scope-btn',
            'container' => '#dnb-kw-tags',
            'operator' => 
            array (
              0 => 'dnb_bal_kw_scope',
              1 => 'dnb_bal_kw',
            ),
            'tagLimit' => 1,
            'modelKey' => 'contactKw',
            'modelSubKey' => 
            array (
              0 => 'KeywordContactScopeText',
              1 => 'KeywordContactText',
            ),
          ),
          'dnb_bal_job_fn' => 
          array (
            'modelSubKey' => 'ManagementResponsibilityCode',
            'modelKey' => 'jobCode',
            'multiple' => false,
          ),
        ),
        'balParamGroups' => 
        array (
          'companySize' => 
          array (
            'annualSales' => 
            array (
              'label' => 'LBL_DNB_BAL_PARAM_ANNL_SALES',
              'id' => 'dnb-annlsales-tags',
            ),
            'employeeCount' => 
            array (
              'label' => 'LBL_DNB_BAL_PARAM_EMP_CNT',
              'id' => 'dnb-empcnt-tags',
            ),
            'employeeGrowth' => 
            array (
              'label' => 'LBL_DNB_BAL_PARAM_EMP_GRWTH',
              'id' => 'dnb-bal-empgrwth-tags',
            ),
            'marketCap' => 
            array (
              'label' => 'LBL_DNB_BAL_PARAM_MKT_CAP',
              'id' => 'dnb-mktcap-tags',
            ),
          ),
          'companyLocation' => 
          array (
            'phoneAreaCode' => 
            array (
              'label' => 'LBL_DNB_BAL_AREA_CODE',
              'id' => 'dnb-area-code-tags',
            ),
            'postalCode' => 
            array (
              'label' => 'LBL_DNB_BAL_POSTAL_CODE',
              'id' => 'dnb-postal-code-tags',
            ),
            'city' => 
            array (
              'label' => 'LBL_DNB_CI_CITY',
              'id' => 'dnb-city-tags',
            ),
            'state' => 
            array (
              'label' => 'LBL_DNB_BAL_PARAM_STATES',
              'id' => 'dnb-state-tags',
            ),
            'country' => 
            array (
              'label' => 'LBL_DNB_COUNTRY',
              'select2' => 'dnb_bal_ctry',
            ),
            'radiusSearch' => 
            array (
              'label' => 'LBL_DNB_BAL_RADIUS_SRCH',
              'id' => 'dnb-rad-srch-tags',
            ),
          ),
          'financialInfo' => 
          array (
            'netIncome' => 
            array (
              'label' => 'LBL_DNB_BAL_NET_INCOME',
              'id' => 'dnb-net-income-tags',
            ),
            'netIncomeGrowth' => 
            array (
              'label' => 'LBL_DNB_BAL_NET_INCOME_GROWTH',
              'id' => 'dnb-net-income-growth-tags',
            ),
            'assets' => 
            array (
              'label' => 'LBL_DNB_BAL_ASSETS',
              'id' => 'dnb-net-assets-tags',
            ),
          ),
          'ipoData' => 
          array (
            'ipoOfferAmt' => 
            array (
              'label' => 'LBL_DNB_BAL_IPO_OFFER_AMT',
              'id' => 'dnb-offer-amt-tags',
            ),
            'ipoPriceRange' => 
            array (
              'label' => 'LBL_DNB_BAL_IPO_PRICE_RANGE',
              'id' => 'dnb-ipo-price-range-tags',
            ),
          ),
          'companyInfo' => 
          array (
            'orgName' => 
            array (
              'label' => 'LBL_DNB_BAL_ORG_NAME',
              'id' => 'dnb-org-name-tags',
            ),
            'foundingYear' => 
            array (
              'label' => 'LBL_DNB_BAL_YEAR_OF_FOUNDING',
              'id' => 'dnb-year-of-founding-tags',
            ),
            'prescreenScore' => 
            array (
              'label' => 'LBL_DNB_BAL_PRESCREEN_SCORE',
              'select2' => 'dnb_bal_prescreen_score',
            ),
            'dunsNum' => 
            array (
              'label' => 'LBL_DNB_BAL_DUNS',
              'id' => 'dnb-duns-tags',
            ),
            'orgid' => 
            array (
              'label' => 'LBL_DNB_BAL_ORG_ID',
              'id' => 'dnb-bal-org-id-tags',
            ),
          ),
          'industry' => 
          array (
            'industryCode' => 
            array (
              'id' => 'dnb-ind-code-tags',
            ),
          ),
          'people' => 
          array (
            'jobCode' => 
            array (
              'label' => 'LBL_DNB_BAL_PARAM_JOB_FN',
              'select2' => 'dnb_bal_job_fn',
            ),
            'contactKw' => 
            array (
              'label' => 'LBL_DNB_BAL_PARAM_KEYWORD',
              'id' => 'dnb-kw-tags',
            ),
          ),
        ),
      ),
    ),
    'dnb-bal-results' => 
    array (
      'templates' => 
      array (
        'dnb-bal-contact-details' => '
<div class="dashboard" data-dashboard="true">
    <div class="cols row-fluid">
        <div>
            <div class="preview-headerbar">
                <div class="headerpane">
                    <span class="record-cell">
                        <h1 class="dnb-account-create">
                            <span class="detail">
                                {{str "LBL_DNB_BAL_RSLT"}}
                            </span>
                        </h1>
                    </span>
                </div>
            </div>
        </div>
        <ul class="dashlets row-fluid">
            <li class="span12">
                <ul class="dashlet-row ui-sortable ui-sortable-disabled">
                    <li class="row-fluid sortable" data-sortable="1">
                        <div class="rows well well-invisible">
                            <ul class="dashlet-cell rows row-fluid">
                                <li class="dashlet-container span12">
                                    <div>
                                        <div class="thumbnail dashlet">
                                            <div data-dashlet="toolbar">
                                                <div class="dashlet-header">
                                                    <div class="btn-toolbar pull-right">
                                                    	<span sfuuid="1007" class="dashlet-toolbar">
                                                    		<a href="javascript:void(0);" data-dashletaction="importContacts" class="btn btn-primary importContacts">
                                                                {{str "LBL_DNB_IMPORT"}}
                                                            </a>
														</span>
                                                    </div>
                                                    <h4 data-toggle="dashlet">
                                                        {{str "LBL_DNB_BAL_RSLT_HEADER" this.module}}
                                                    </h4>
                                                </div>
                                            </div>
                                            <div data-dashlet="dashlet" class="dashlet-content">
                                                <div id="dnb-contact-details-loading" class="block-footer">
                                                    {{str "LBL_DNB_CONTACT_LOADING"}} {{cntctLoadMsg.contactName}}...
                                                </div>
                                                <div id="dnb-contact-details">
                                                    {{#if dnbCntctDet.product}}
                                                        {{#with dnbCntctDet.product}}
                                                            <div>
                                                                <span class="pull-right" data-placement="right">
                                                                    {{str "LBL_DNB_BAL_IMPORT_AS"}}&nbsp;&nbsp;
                                                                   <select id="importType">
                                                                        {{#each import_enabled_modules}}
                                                                            <option value={{this}}>
                                                                                {{str \'LBL_MODULE_NAME\' this}}
                                                                            </option>
                                                                        {{/each}}
                                                                    </select>
                                                                </span>
                                                            </div>
                                                            <div class="accordian dnb-show-all" id="dnb_cntct_det_accordian">
                                                                <!-- Contact Profile Details -->
                                                                <div class="accordion-group">
                                                                    <div class="accordion-heading">
                                                                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#dnb_cntct_det_accordian" href="#prof_tab">
                                                                            {{str "LBL_DNB_CONTACT_EMP_PROF"}}
                                                                        </a>
                                                                    </div>
                                                                    <div id="prof_tab" class="accordion-body collapse in">
                                                                        <div class="accordion-inner">
                                                                            <ul class="unstyled listed">
                                                                                {{#each this.contact_profile}}
                                                                                    {{#if this.dataLabel}}
                                                                                        <li>
                                                                                            <div class="dnb-company-label"> {{str this.dataLabel}} </div>
                                                                                            <div class="txt importData"> {{this.dataElement}} </div>
                                                                                        </li>
                                                                                    {{/if}}
                                                                                {{/each}}
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                {{#if this.job_hist}}
                                                                    <!-- Job History -->
                                                                    <div class="accordion-group">
                                                                        <div class="accordion-heading">
                                                                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#dnb_cntct_det_accordian" href="#jobhist_tab">
                                                                                {{str "LBL_DNB_CONTACT_JOB_HIST"}}
                                                                            </a>
                                                                        </div>
                                                                        <div id="jobhist_tab" class="accordion-body collapse">
                                                                            <div class="accordion-inner">
                                                                                <table class="table table-striped table-condensed">
                                                                                    <thead>
                                                                                    <tr>
                                                                                        <th>{{str "LBL_DNB_CONTACT_JOBTITLE"}}</th>
                                                                                        <th>{{str "LBL_DNB_CONTACT_FROM"}}</th>
                                                                                        <th>{{str "LBL_DNB_CONTACT_TO"}}</th>
                                                                                    </tr>
                                                                                    </thead>
                                                                                    <tbody>
                                                                                    {{#each this.job_hist}}
                                                                                        <tr>
                                                                                            <td>{{this.title}}</td>
                                                                                            <td>{{this.start_date}}</td>
                                                                                            <td>{{this.end_date}}</td>
                                                                                        </tr>
                                                                                    {{/each}}
                                                                                    </tbody>
                                                                                </table>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                {{/if}}
                                                                {{#if this.comp_hist}}
                                                                    <!-- Compensation History -->
                                                                    <div class="accordion-group">
                                                                        <div class="accordion-heading">
                                                                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#dnb_cntct_det_accordian" href="#comphist_tab">
                                                                                {{str "LBL_DNB_CONTACT_COMP_HIST"}}
                                                                            </a>
                                                                        </div>
                                                                        <div id="comphist_tab" class="accordion-body collapse">
                                                                            <div class="accordion-inner">
                                                                                <table class="table table-striped table-condensed">
                                                                                    {{#each this.comp_hist}}
                                                                                        <tr>
                                                                                            <td colspan="2">
                                                                                                <div class="txt importData">
                                                                                                    {{str "LBL_DNB_CONTACT_COMP_HIST"}}&nbsp;&nbsp;&nbsp;({{str "LBL_DNB_IN"}}&nbsp;&nbsp;&nbsp;{{this.comp_date}})
                                                                                                </div>
                                                                                            </td>
                                                                                        </tr>
                                                                                        {{#each this.comp_det}}
                                                                                            <tr>
                                                                                                <td>{{this.comp_type}}</td>
                                                                                                <td>
                                                                                                    {{this.comp_amt}}
                                                                                                    &nbsp;&nbsp;&nbsp;({{str "LBL_DNB_IN"}}&nbsp;&nbsp;&nbsp;{{this.comp_curr}})
                                                                                                </td>
                                                                                            </tr>
                                                                                        {{/each}}
                                                                                    {{/each}}
                                                                                </table>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                {{/if}}
                                                            </div>
                                                        {{/with}}
                                                    {{else}}
                                                        <aside class=\'create-no-data\'>
                                                            {{#if dnbCntctDet.errmsg}}
                                                                <em>{{dnbCntctDet.errmsg}}</em>
                                                            {{else}}
                                                                <em>{{str "LBL_DNB_NO_DATA"}}</em>
                                                            {{/if}}
                                                        </aside>
                                                    {{/if}}
                                                    <div class="dnb-show-more">
                                                        <a class="backToContactsList"> {{str "LBL_DNB_CONTACT_LIST"}} <i class="icon-chevron-down"></i> </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</div>
',
        'dnb-bal-contacts-rslt' => '
<div class="dashboard" data-dashboard="true">
    <div class="cols row-fluid">
        <div>
            <div class="preview-headerbar">
                <div class="headerpane">
                    <span class="record-cell">
                        <h1 class="dnb-account-create">
                            <span class="detail">
                                {{str "LBL_DNB_BAL_RSLT"}}
                            </span>
                        </h1>
                    </span>
                </div>
            </div>
        </div>
        <ul class="dashlets row-fluid">
            <li class="span12">
                <ul class="dashlet-row ui-sortable ui-sortable-disabled">
                    <li class="row-fluid sortable" data-sortable="1">
                        <div class="rows well well-invisible">
                            <a data-toggle="dropdown"  class="btn btn-invisible btn-link hide">
                                <i class="icon-cog"></i></a>
                            <ul class="dropdown-menu left carettop">
                                <div>
                                    <li><a class="remove-row">{{str "LBL_REMOVE"}}</a></li>
                                </div>
                            </ul>
                            <a class="move btn btn-invisible btn-link hide">
                                <i class="icon-resize-vertical"></i></a>
                            <ul class="dashlet-cell rows row-fluid">
                                <li class="dashlet-container span12">
                                    <div>
                                        <div class="thumbnail dashlet dashlet-dnb-tall">
                                            <div data-dashlet="toolbar">
                                                <div class="dashlet-header">
                                                    <h4 data-toggle="dashlet">
                                                        {{#if dnbContactsList.count}}
                                                            {{dnbContactsList.count}}
                                                        {{else}}
                                                            {{str "LBL_DNB_BAL_PREVIEW" this.module}}
                                                        {{/if}}
                                                    </h4>
                                                </div>
                                            </div>
                                            <div data-dashlet="dashlet" class="dashlet-content">
                                                <div id="dnb-bal-result-loading" class="block-footer hide">
                                                    {{str "LBL_DNB_BAL_LOAD"}} ...
                                                </div>
                                                <div id="dnb-bal-result" class="hide">
                                                    {{#if dnbContactsList.product}}
                                                        <ul class="unstyled listed" id="dnb-results-list">
                                                            {{#each dnbContactsList.product}}
                                                                <li>
                                                                    <div class="dnb-company-label dnb-company-list">
                                                                        <a class="{{this.contactType}}" id="{{this.principalId}}"
                                                                           data-duns="{{this.dunsNum}}">
                                                                            {{this.fullName}}
                                                                        </a>
                                                                        {{#eq this.contactType \'dnb-cnt-prem\'}}
                                                                            <span class="label label-success pull-right" data-placement="right">
                                                                                {{str "LBL_DNB_PREMIUM"}}
                                                                            </span>
                                                                        {{/eq}}
                                                                    </div>
                                                                    <div class=\'dnb-company-label\'>
                                                                        {{this.companyName}}
                                                                    </div>
                                                                    <div class=\'dnb-company-label\'>
                                                                        {{#if this.jobTitle}}
                                                                            {{this.jobTitle}}
                                                                        {{else}}
                                                                            {{str "LBL_DNB_ASSOCIATE"}}
                                                                        {{/if}}
                                                                        {{#if this.isDupe}}
                                                                            <span class="label label-important pull-right" data-placement="right">
                                                                                {{str "LBL_DNB_DUPLICATE"}}
                                                                            </span>
                                                                        {{/if}}
                                                                    </div>
                                                                </li>
                                                            {{/each}}
                                                        </ul>
                                                    {{else}}
                                                        <aside class=\'create-no-data\'>
                                                            {{#if dnbContactsList.errmsg}}
                                                                <em>{{dnbContactsList.errmsg}}</em>
                                                            {{else}}
                                                                <em>{{str "LBL_DNB_NO_DATA"}}</em>
                                                            {{/if}}
                                                        </aside>
                                                    {{/if}}
                                                </div>
                                            </div>
                                            <div class="block-footer hide" id="dnb-page-ctrl">
                                                <button data-action="show-more" class="btn btn-link btn-invisible more">
                                                    {{str "LBL_DNB_MORE_SRCH_RES"}}
                                                </button>
                                                <div class="loading">
                                                    {{str "LBL_ALERT_TITLE_LOADING"}}
                                                    <i class="l1 icon-circle"></i>
                                                    <i class="l2 icon-circle"></i>
                                                    <i class="l3 icon-circle"></i>
                                                </div>
                                            </div>
                                            <div class="swappable-dashlet icon-download-alt"></div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="row-fluid" data-sortable="1">
                        <div class="rows well well-invisible">
                            <a data-toggle="dropdown" class="btn btn-invisible btn-link hide">
                                <i class="icon-cog"></i>
                            </a>
                            <a class="move btn btn-invisible btn-link hide">
                                <i class="icon-resize-vertical"></i>
                            </a>
                        </div>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</div>
',
        'dnb-bal-hint' => '
<div class="dashboard" data-dashboard="true">
    <div class="cols row-fluid">
        <div>
            <div class="preview-headerbar">
                <div class="headerpane">
                    <span class="record-cell">
                        <h1 class="dnb-account-create">
                            <span class="detail">
                                {{str "LBL_DNB_BAL_RSLT"}}
                            </span>
                        </h1>
                    </span>
                </div>
            </div>
        </div>
        <ul class="dashlets row-fluid">
            <li class="span12">
                <ul class="dashlet-row ui-sortable ui-sortable-disabled">
                    <li class="row-fluid sortable" data-sortable="1">
                        <div class="rows well well-invisible">
                            <a data-toggle="dropdown"  class="btn btn-invisible btn-link hide">
                                <i class="icon-cog"></i></a>
                            <ul class="dropdown-menu left carettop">
                                <div>
                                    <li><a class="remove-row">{{str "LBL_REMOVE"}}</a></li>
                                </div>
                            </ul>
                            <a class="move btn btn-invisible btn-link hide">
                                <i class="icon-resize-vertical"></i></a>
                            <ul class="dashlet-cell rows row-fluid">
                                <li class="dashlet-container span12">
                                    <div>
                                        <div class="thumbnail dashlet">
                                            <div data-dashlet="toolbar">
                                                <div class="dashlet-header">
                                                    <h4 data-toggle="dashlet">
                                                        {{str "LBL_DNB_BAL_PREVIEW" this.module}}
                                                    </h4>
                                                </div>
                                            </div>
                                            <div data-dashlet="dashlet" class="dashlet-content">
                                                <div id="dnb-search-hint" class="block-footer">
                                                    <aside>
                                                        <em>{{str "LBL_DNB_BAL_HINT"}}</em>
                                                    </aside>
                                                </div>
                                            </div>
                                            <div class="swappable-dashlet icon-download-alt"></div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="row-fluid" data-sortable="1">
                        <div class="rows well well-invisible">
                            <a data-toggle="dropdown" class="btn btn-invisible btn-link hide">
                                <i class="icon-cog"></i>
                            </a>
                            <a class="move btn btn-invisible btn-link hide">
                                <i class="icon-resize-vertical"></i>
                            </a>
                        </div>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</div>
',
      ),
      'meta' => 
      array (
        'import_enabled_modules' => 
        array (
          0 => 'Contacts',
          1 => 'Leads',
          2 => 'Prospects',
        ),
        'dashlets' => 
        array (
          0 => 
          array (
            'label' => 'LBL_DNB_BAL_RSLT',
            'description' => 'LBL_DNB_BAL_RSLT',
            'config' => 
            array (
            ),
            'preview' => 
            array (
            ),
            'filter' => 
            array (
              'module' => 
              array (
                0 => 'DnbNoDisplay',
              ),
              'view' => 'DnbNoDisplay',
            ),
          ),
        ),
      ),
    ),
    'dnb-company-info' => 
    array (
      'templates' => 
      array (
        'dashlet-config' => '
<div class="record">
    <aside class=\'txt\'>
        {{str "LBL_DASHLET_COMPANY_INFO_LONG_DESC"}}
    </aside>
</div>
',
        'dnb-cm-results' => '
<div id="dnb-company-list-loading" class="block-footer">
    {{str "LBL_DNB_CM_LOADING"}}
</div>
<div id="dnb-company-list">
    {{#if dnbCompanyList.product}}
        <div>
            <ul class="unstyled listed" id="dnb_company_list">
                {{#each dnbCompanyList.product}}
                    <li>
                        <a class="dnb-company-name" id="{{this.duns_num}}">
                            {{this.companyname}}
                        </a>
                        {{#if this.matchMeta}}
                            <span class="label {{this.matchMeta.confClass}} pull-right" data-placement="right">
                                {{this.matchMeta.confText}}
                            </span>
                        {{/if}}
                        <br/>
                        <div class="record-label dnb-company-list">
                            {{#if this.streetaddr}}
                                {{this.streetaddr}},
                            {{/if}}
                            {{#if this.town}}
                                {{this.town}},
                            {{/if}}
                            {{#if this.territory}}
                                {{this.territory}},
                            {{/if}}
                            {{#if this.ctrycd}}
                                {{this.ctrycd}}
                            {{/if}}
                            {{#if this.isDupe}}
                                <span class="label label-important pull-right" data-placement="right">{{str "LBL_DNB_DUPLICATE"}}</span>
                            {{/if}}
                        </div>
                    </li>
                {{/each}}
            </ul>
        </div>
    {{else}}
        <aside class=\'create-no-data\'>
            {{#if dnbCompanyList.errmsg}}
                <em>{{dnbCompanyList.errmsg}}</em>
            {{/if}}
            <a id="dnb-lookup">{{str "LBL_DNB_KEYWORD_SEARCH_HINT"}}</a>
        </aside>
    {{/if}}
    <div class="dnb-show-more">
        <a class="backToImportEnrich">
            {{str "LBL_DNB_BACK_TO_IMPORT_ENRICH"}}
        </a>
    </div>
</div>',
        'dnb-company-details' => '
<div id="dnb-company-detail-loading" class="block-footer">
    {{str "LBL_DNB_COMPANY_INFO_LOADING"}}
</div>
<div id="dnb-company-details">
    {{#if dnbProduct.product}}
        <div class=\'dnb-show-all\'>
            <table class="table table-striped table-condensed">
                {{#each dnbProduct.product}}
                    {{#notEq this.dataInd \'dup\'}}
                        <tr>
                            <td align="center">
                                <div class=\'dnb-checkbox-nav\'>
                                    <input type=\'checkbox\' name=\'{{this.dataName}}\' id=\'{{this.dataName}}\' class=\'dnb_checkbox\' checked/>
                                </div>
                                <div class="dnb-company-label">
                                    {{#if this.dnbLabel}}
                                        {{{this.dnbLabel}}}
                                    {{else}}
                                        {{str this.dataLabel}}
                                    {{/if}}
                                </div>
                                {{#if this.dataType}}
                                    {{#eq this.dataType \'link\'}}
                                        <div class="url-txt importData">
                                    {{/eq}}
                                {{else}}
                                    <div class="txt importData">
                                {{/if}}
                                {{this.dataElement}}
                                {{#eq this.dataInd \'new\'}}
                                    <span class="label label-important pull-right" data-placement="right">
                                        {{str "LBL_DNB_UPLOAD"}}
                                    </span>
                                {{/eq}}
                                </div>
                            </td>
                        </tr>
                    {{/notEq}}
                {{/each}}
            </table>
        </div>
    {{else}}
        <aside class=\'create-no-data\'>
            <em>{{dnbProduct.errmsg}}</em>
        </aside>
    {{/if}}
    {{#if dnbProduct.isNotLinked}}
        <div class="dnb-show-more">
            <a class="backToList">{{str "LBL_DNB_BACK_TO_SRCH"}} <i class="icon-chevron-down"></i></a>
        </div>
    {{/if}}
</div>',
        'dnb-company-info' => '
<div id="dnb-no-duns" class="block-footer">
    <div id="dnb-refresh-loading">
        {{str "LBL_DNB_RFR_LOADING"}}...
    </div>
    <div id="dnb-refresh-details">
        {{#if uptodate}}
            <aside>
                <em>{{str "LBL_DNB_UPTODATE_MSG"}}</em>
            </aside>
        {{else}}
            {{#if errmsg}}
                <aside>
                    <em>{{errmsg}}</em>
                </aside>
            {{else}}
                <aside>
                    <em>{{str "LBL_DNB_OUTOFDATE_MSG"}}</em>
                </aside>
                <a id="dnb-refresh">
                    {{str "LBL_DNB_RFR_HINT"}}
                </a>
            {{/if}}
        {{/if}}
    </div>
</div>',
        'dnb-company-list' => '
<div id="dnb-company-list-loading" class="block-footer">
    {{str "LBL_DNB_SEARCH_LOADING"}}
</div>
<div id="dnb-company-list">
    {{#if dnbCompanyList.product}}
        <div>
            <ul class="unstyled listed" id="dnb_company_list">
                {{#each dnbCompanyList.product}}
                    <li>
                    <div class=\'dnb-company-label\'>
                        <a class="dnb-company-name" id="{{this.duns_num}}">
                            {{this.companyname}}
                        </a>
                        {{#if this.locationtype}}
                            <span class="label pull-right" data-placement="right">
                                {{this.locationtype}}
                            </span>
                        {{/if}}
                    </div>
                    <div class="record-label dnb-company-list">
                        {{#if this.streetaddr}}
                            {{this.streetaddr}},
                        {{/if}}
                        {{#if this.town}}
                            {{this.town}},
                        {{/if}}
                        {{#if this.territory}}
                            {{this.territory}},
                        {{/if}}
                        {{#if this.ctrycd}}
                            {{this.ctrycd}}
                        {{/if}}
                        {{#if this.isDupe}}
                            <span class="label label-important pull-right" data-placement="right">
                                {{str "LBL_DNB_DUPLICATE"}}
                            </span>
                        {{/if}}
                    </div>
                    </li>
                {{/each}}
            </ul>
        </div>
    {{else}}
        <aside class=\'create-no-data\'>
            {{#if dnbCompanyList.errmsg}}
                <em>{{dnbCompanyList.errmsg}}</em>
            {{else}}
                <em>{{str "LBL_DNB_NO_DATA"}}</em>
            {{/if}}
        </aside>
    {{/if}}
    <div class="dnb-show-more">
        <a class="backToImportEnrich">
            {{str "LBL_DNB_BACK_TO_IMPORT_ENRICH"}}
        </a>
    </div>
</div>',
        'dnb-no-duns' => '
<div id="dnb-no-duns" class="block-footer">
    <aside>
        <em>{{str "LBL_DNB_NO_DUNS"}}</em>
        <br/>
    </aside>
    <div class="row-fluid">
        <div class="span6 record-cell" data-type="enum">
            <div class="record-label">
                {{str "LBL_DNB_COUNTRY"}}
            </div>
            <span class="normal">
                <input type=\'hidden\' id=\'countryList\'/>
            </span>
        </div>
        <div class="span6 record-cell" data-type="enum">
            <div class="record-label">
                <td>{{str "LBL_DNB_STATE"}}</td>
            </div>
            <span class="normal">
                <input type=\'hidden\' id=\'stateList\'/>
            </span>
        </div>
    </div>
    <br/>
    <a href="javascript:void(0);" class="btn btn-primary disabled" id="dnb-match-btn">
        {{str "LBL_DNB_CM_MATCH"}}
    </a>
    <br/>
    <a id="dnb-lookup">
        {{str "LBL_DNB_KEYWORD_SEARCH_HINT"}}
    </a>
</div>',
      ),
      'meta' => 
      array (
        'dashlets' => 
        array (
          0 => 
          array (
            'label' => 'LBL_DASHLET_COMPANY_INFO',
            'description' => 'LBL_DASHLET_COMPANY_INFO_DESC',
            'filter' => 
            array (
              'module' => 
              array (
                0 => 'Accounts',
              ),
              'view' => 'record',
            ),
            'config' => 
            array (
            ),
            'preview' => 
            array (
            ),
          ),
        ),
        'custom_toolbar' => 
        array (
          'buttons' => 
          array (
            0 => 
            array (
              'type' => 'dashletaction',
              'css_class' => 'btn btn-primary disabled importDNBData hide',
              'action' => 'importAccountsData',
              'label' => 'LBL_DNB_IMPORT',
              'name' => 'dnb_import',
            ),
            1 => 
            array (
              'dropdown_buttons' => 
              array (
                0 => 
                array (
                  'type' => 'dashletaction',
                  'action' => 'editClicked',
                  'label' => 'LBL_DASHLET_CONFIG_EDIT_LABEL',
                ),
                1 => 
                array (
                  'type' => 'dashletaction',
                  'action' => 'refreshClicked',
                  'label' => 'LBL_DASHLET_REFRESH_LABEL',
                ),
                2 => 
                array (
                  'type' => 'dashletaction',
                  'action' => 'removeClicked',
                  'label' => 'LBL_DASHLET_REMOVE_LABEL',
                ),
              ),
            ),
            2 => 
            array (
              'type' => 'dashletaction',
              'css_class' => 'dashlet-toggle btn btn-invisible minify',
              'icon' => 'icon-chevron-down',
              'action' => 'toggleMinify',
              'tooltip' => 'LBL_DASHLET_MAXIMIZE',
            ),
          ),
        ),
      ),
    ),
    'dnb-competitors' => 
    array (
      'templates' => 
      array (
        'dashlet-config' => '
<div class="record">
    <aside class=\'txt\'>
        {{str "LBL_DNB_COMPETITORS_LONG_DESC"}}
    </aside>
</div>
',
        'dnb-competitors' => '

<div id="dnb-competitors-loading" class="block-footer">
    {{str "LBL_DNB_COMPETITORS_LOADING"}}
</div>
<div id="dnb-competitors-list">
    {{#if dnbComp.product}}
        <div>
            <ul class="unstyled listed">
                {{#each dnbComp.product}}
                    <li>
                        <a class="dnb-company-name" id="{{this.dunsnum}}">
                            {{this.orgname}}
                        </a>
                        {{#if this.topcompetitorindicator}}
                            <span class="label label-warning pull-right" data-placement="right">{{str "LBL_DNB_COMPETITORS_TOP"}}</span>
                        {{/if}}
                        <div class=\'record-label dnb-company-list\'>
                            {{#if territoryabbreviatedname}}
                                {{this.territoryabbreviatedname}},
                            {{/if}}
                            {{#if town}}
                                {{this.town}},
                            {{/if}}
                            {{#if this.countryofficialname}}
                                {{this.countryofficialname}},
                            {{/if}}
                            {{#if salesrevenueamt}}
                                <b>Sales:</b>
                                {{this.salesrevenueamt}}
                            {{/if}}
                            {{#if this.isDupe}}
                                <span class="label label-important pull-right" data-placement="right">
                                    {{str "LBL_DNB_DUPLICATE"}}
                                </span>
                            {{/if}}
                        </div>
                    </li>
                {{/each}}
            </ul>
        </div>
    {{else}}
        <aside class=\'create-no-data\'>
            <em>{{dnbComp.errmsg}}</em>
        </aside>
    {{/if}}
</div>
',
        'dnb-desc' => '
<div id="dnb-no-data" class="block-footer">
    <aside>
        <em>{{str "LBL_DNB_COMPETITORS_DESC"}}</em>
    </aside>
</div>',
        'dnb-no-duns' => '
<div id="dnb-no-data" class="block-footer">
    <aside>
        <em>{{str "LBL_DNB_NO_DUNS"}}</em>
    </aside>
</div>',
      ),
      'meta' => 
      array (
        'dashlets' => 
        array (
          0 => 
          array (
            'label' => 'LBL_DNB_COMPETITORS',
            'description' => 'LBL_DNB_COMPETITORS_DESC',
            'filter' => 
            array (
              'module' => 
              array (
                0 => 'Accounts',
              ),
              'view' => 'record',
            ),
            'config' => 
            array (
            ),
            'preview' => 
            array (
            ),
          ),
        ),
        'custom_toolbar' => 
        array (
          'buttons' => 
          array (
            0 => 
            array (
              'type' => 'dashletaction',
              'css_class' => 'btn btn-primary importDNBData hide',
              'name' => 'import_dnb_data',
              'action' => 'importDNBData',
              'label' => 'LBL_DNB_IMPORT',
            ),
            1 => 
            array (
              'dropdown_buttons' => 
              array (
                0 => 
                array (
                  'type' => 'dashletaction',
                  'action' => 'editClicked',
                  'label' => 'LBL_DASHLET_CONFIG_EDIT_LABEL',
                ),
                1 => 
                array (
                  'type' => 'dashletaction',
                  'action' => 'refreshClicked',
                  'label' => 'LBL_DASHLET_REFRESH_LABEL',
                ),
                2 => 
                array (
                  'type' => 'dashletaction',
                  'action' => 'removeClicked',
                  'label' => 'LBL_DASHLET_REMOVE_LABEL',
                ),
              ),
            ),
            2 => 
            array (
              'type' => 'dashletaction',
              'css_class' => 'dashlet-toggle btn btn-invisible minify',
              'icon' => 'icon-chevron-down',
              'action' => 'toggleMinify',
              'tooltip' => 'LBL_DASHLET_MAXIMIZE',
            ),
          ),
        ),
      ),
    ),
    'dnb-contact-info' => 
    array (
      'templates' => 
      array (
        'dashlet-config' => '
<div class="record">
    <aside class=\'txt\'>
        {{str "LBL_DNB_CONTACT_LONG_DESC"}}
    </aside>
</div>
',
        'dnb-contact-details' => '
<div id="dnb-contact-details-loading" class="block-footer">
    {{str "LBL_DNB_CONTACT_LOADING"}} {{cntctLoadMsg.contactName}}...
</div>
<div id="dnb-contact-details">
    {{#if dnbCntctDet.product}}
        {{#with dnbCntctDet.product}}
            <div class="accordian dnb-show-all" id="dnb_cntct_det_accordian">
                <!-- Contact Profile Details -->
                <div class="accordion-group">
                    <div class="accordion-heading">
                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#dnb_cntct_det_accordian" href="#prof_tab">
                            {{str "LBL_DNB_CONTACT_EMP_PROF"}}
                        </a>
                    </div>
                    <div id="prof_tab" class="accordion-body collapse in">
                        <div class="accordion-inner">
                            <ul class="unstyled listed">
                                {{#each this.contact_profile}}
                                    {{#if this.dataLabel}}
                                        <li>
                                            <div class="dnb-company-label"> {{str this.dataLabel}} </div>
                                            <div class="txt importData"> {{this.dataElement}} </div>
                                        </li>
                                    {{/if}}
                                {{/each}}
                            </ul>
                        </div>
                    </div>
                </div>
                {{#if this.job_hist}}
                    <!-- Job History -->
                    <div class="accordion-group">
                        <div class="accordion-heading">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#dnb_cntct_det_accordian" href="#jobhist_tab">
                                {{str "LBL_DNB_CONTACT_JOB_HIST"}}
                            </a>
                        </div>
                        <div id="jobhist_tab" class="accordion-body collapse">
                            <div class="accordion-inner">
                                <table class="table table-striped table-condensed">
                                    <thead>
                                    <tr>
                                        <th>{{str "LBL_DNB_CONTACT_JOBTITLE"}}</th>
                                        <th>{{str "LBL_DNB_CONTACT_FROM"}}</th>
                                        <th>{{str "LBL_DNB_CONTACT_TO"}}</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    {{#each this.job_hist}}
                                        <tr>
                                            <td>{{this.title}}</td>
                                            <td>{{this.start_date}}</td>
                                            <td>{{this.end_date}}</td>
                                        </tr>
                                    {{/each}}
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                {{/if}}
                {{#if this.comp_hist}}
                    <!-- Compensation History -->
                    <div class="accordion-group">
                        <div class="accordion-heading">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#dnb_cntct_det_accordian" href="#comphist_tab">
                                {{str "LBL_DNB_CONTACT_COMP_HIST"}}
                            </a>
                        </div>
                        <div id="comphist_tab" class="accordion-body collapse">
                            <div class="accordion-inner">
                                <table class="table table-striped table-condensed">
                                    {{#each this.comp_hist}}
                                        <tr>
                                            <td colspan="2">
                                                <div class="txt importData">
                                                    {{str "LBL_DNB_CONTACT_COMP_HIST"}}&nbsp;&nbsp;&nbsp;({{str "LBL_DNB_IN"}}&nbsp;&nbsp;&nbsp;{{this.comp_date}})
                                                </div>
                                            </td>
                                        </tr>
                                        {{#each this.comp_det}}
                                            <tr>
                                                <td>{{this.comp_type}}</td>
                                                <td>
                                                    {{this.comp_amt}}
                                                    &nbsp;&nbsp;&nbsp;({{str "LBL_DNB_IN"}}&nbsp;&nbsp;&nbsp;{{this.comp_curr}})
                                                </td>
                                            </tr>
                                        {{/each}}
                                    {{/each}}
                                </table>
                            </div>
                        </div>
                    </div>
                {{/if}}
            </div>
        {{/with}}
    {{else}}
        <aside class=\'create-no-data\'>
            {{#if dnbCntctDet.errmsg}}
                <em>{{dnbCntctDet.errmsg}}</em>
            {{else}}
                <em>{{str "LBL_DNB_NO_DATA"}}</em>
            {{/if}}
        </aside>
    {{/if}}
    <div class="dnb-show-more">
        <a class="backToContactsList"> {{str "LBL_DNB_CONTACT_LIST"}} <i class="icon-chevron-down"></i> </a>
    </div>
</div>',
        'dnb-contact-info' => '
<div id="dnb-cntct-srch">
    <table class="table dnb-cntct-srch-frm">
        <tr>
            <td>
                <div class="dnb-company-label">{{str "LBL_DNB_CONTACT_NAME"}}</div>
                <input type="text" id="dnb-name" class="input-large" value="{{cntctSrchParams.name}}">
            </td>
            <td>
                <div class="dnb-company-label">{{str "LBL_DNB_CONTACT_JOBTITLE"}}</div>
                <input type="text" id="dnb-job" class="input-large" value="{{cntctSrchParams.jobTitle}}">
            </td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td class="btns">
                <a href="javascript:void(0);" class="btn btn-primary disabled" id="dnb-cntct-srch-btn">
                    {{str "LBL_DNB_SRCH"}}
                </a>
                &nbsp;&nbsp;
                <a href="javascript:void(0);" class="btn" id="dnb-srch-clear">
                    {{str "LBL_DNB_CLEAR"}}
                </a>
            </td>
        </tr>
    </table>
    <div id="dnb-contact-list-loading" class="block-footer">
        {{str "LBL_DNB_CNTCT_LOADING"}} ...
    </div>
    <div id="dnb-contact-list">
        {{#if dnbContactsList.product}}
            <div class="dnb-show-less">
                <ul class="unstyled listed dnb-result-list">
                    {{#each dnbContactsList.product}}
                        <li>
                            <div class=\'dnb-company-label\'>
                                {{#if this.jobTitle}}
                                    {{this.jobTitle}}
                                {{else}}
                                    {{str "LBL_DNB_ASSOCIATE"}}
                                {{/if}}
                                {{#eq this.contactType \'dnb-cnt-prem\'}}
                                    <span class="label label-success pull-right" data-placement="right">
                                        {{str "LBL_DNB_PREMIUM"}}
                                    </span>
                                {{/eq}}
                            </div>
                            <div class="dnb-company-label dnb-company-list">
                                <a class="{{this.contactType}}" id="{{this.principalId}}"
                                   data-duns="{{this.dunsNum}}">
                                    {{this.fullName}}
                                </a>
                                {{#if this.isDupe}}
                                    <span class="label label-important pull-right" data-placement="right">
                                        {{str "LBL_DNB_DUPLICATE"}}
                                    </span>
                                {{/if}}
                            </div>
                        </li>
                    {{/each}}
                </ul>
            </div>
            <div class="dnb-show-more">
                <a class="showMoreData">{{str "LBL_DNB_CONTACT_SHOW_MORE"}} <i class="icon-chevron-down"></i></a>
                <a class="showLessData">{{str "LBL_DNB_SHOW_LESS"}} <i class="icon-chevron-up"></i></a>
            </div>
        {{else}}
            <aside class=\'create-no-data\'>
                {{#if dnbContactsList.errmsg}}
                    <em>{{dnbContactsList.errmsg}}</em>
                {{else}}
                    <em>{{str "LBL_DNB_NO_DATA"}}</em>
                {{/if}}
            </aside>
        {{/if}}
    </div>
</div>
',
        'dnb-desc' => '
<div id="dnb-no-data" class="block-footer">
    <aside>
        <em>{{str "LBL_DNB_CONTACT_DESC"}}</em>
    </aside>
</div>',
        'dnb-no-duns' => '
<div id="dnb-no-data" class="block-footer">
    <aside>
        <em>{{str "LBL_DNB_NO_DUNS"}}</em>
    </aside>
</div>',
      ),
      'meta' => 
      array (
        'dashlets' => 
        array (
          0 => 
          array (
            'label' => 'LBL_DNB_CONTACT',
            'description' => 'LBL_DNB_CONTACT_DESC',
            'filter' => 
            array (
              'module' => 
              array (
                0 => 'Accounts',
              ),
              'view' => 'record',
            ),
            'config' => 
            array (
            ),
            'preview' => 
            array (
            ),
          ),
        ),
        'custom_toolbar' => 
        array (
          'buttons' => 
          array (
            0 => 
            array (
              'type' => 'dashletaction',
              'css_class' => 'btn btn-primary importDNBData hide',
              'name' => 'import_dnb_data',
              'action' => 'importDNBContact',
              'label' => 'LBL_DNB_IMPORT',
            ),
            1 => 
            array (
              'dropdown_buttons' => 
              array (
                0 => 
                array (
                  'type' => 'dashletaction',
                  'action' => 'editClicked',
                  'label' => 'LBL_DASHLET_CONFIG_EDIT_LABEL',
                ),
                1 => 
                array (
                  'type' => 'dashletaction',
                  'action' => 'refreshClicked',
                  'label' => 'LBL_DASHLET_REFRESH_LABEL',
                ),
                2 => 
                array (
                  'type' => 'dashletaction',
                  'action' => 'removeClicked',
                  'label' => 'LBL_DASHLET_REMOVE_LABEL',
                ),
              ),
            ),
            2 => 
            array (
              'type' => 'dashletaction',
              'css_class' => 'dashlet-toggle btn btn-invisible minify',
              'icon' => 'icon-chevron-down',
              'action' => 'toggleMinify',
              'tooltip' => 'LBL_DASHLET_MAXIMIZE',
            ),
          ),
        ),
      ),
    ),
    'dnb-family-tree' => 
    array (
      'templates' => 
      array (
        'dashlet-config' => '
<div class="record">
    <aside class=\'txt\'>
        {{str "LBL_DNB_FAMILY_TREE_DESC"}}
    </aside>
</div>
',
        'dnb-desc' => '
<div id="dnb-no-data" class="block-footer">
    <aside>
        <em>{{str "LBL_DNB_FAMILY_TREE_DESC"}}</em>
    </aside>
</div>',
        'dnb-family-tree' => '
<div id="dnb-family-tree-loading" class="block-footer">
	{{str "LBL_DNB_FAMILY_TREE_LOADING"}}...
</div>
<div id="dnb-family-tree-details">
	{{#if dnbFamilyTree.errmsg}}
		<div>
			<aside class="txt">
					<em>{{dnbFamilyTree.errmsg}}</em>
			</aside>
		</div>
	{{else}}
		<div id="dnb-family-tree"></div>
	{{/if}}
</div>
',
        'dnb-no-duns' => '
<div id="dnb-no-duns" class="block-footer">
    <aside>
        <em>{{str "LBL_DNB_NO_DUNS"}}</em>
    </aside>
</div>',
      ),
      'meta' => 
      array (
        'dashlets' => 
        array (
          0 => 
          array (
            'label' => 'LBL_DNB_FAMILY_TREE',
            'description' => 'LBL_DNB_FAMILY_TREE_DESC',
            'filter' => 
            array (
              'module' => 
              array (
                0 => 'Accounts',
              ),
              'view' => 'record',
            ),
            'config' => 
            array (
            ),
            'preview' => 
            array (
            ),
          ),
        ),
        'custom_toolbar' => 
        array (
          'buttons' => 
          array (
            0 => 
            array (
              'type' => 'dashletaction',
              'css_class' => 'btn btn-primary importDNBData hide',
              'name' => 'import_dnb_data',
              'action' => 'importDNBData',
              'label' => 'LBL_DNB_IMPORT',
            ),
            1 => 
            array (
              'dropdown_buttons' => 
              array (
                0 => 
                array (
                  'type' => 'dashletaction',
                  'action' => 'editClicked',
                  'label' => 'LBL_DASHLET_CONFIG_EDIT_LABEL',
                ),
                1 => 
                array (
                  'type' => 'dashletaction',
                  'action' => 'refreshClicked',
                  'label' => 'LBL_DASHLET_REFRESH_LABEL',
                ),
                2 => 
                array (
                  'type' => 'dashletaction',
                  'action' => 'removeClicked',
                  'label' => 'LBL_DASHLET_REMOVE_LABEL',
                ),
              ),
            ),
            2 => 
            array (
              'type' => 'dashletaction',
              'css_class' => 'dashlet-toggle btn btn-invisible minify',
              'icon' => 'icon-chevron-down',
              'action' => 'toggleMinify',
              'tooltip' => 'LBL_DASHLET_MAXIMIZE',
            ),
          ),
        ),
      ),
    ),
    'dnb-financial-info' => 
    array (
      'templates' => 
      array (
        'dashlet-config' => '
<div class="record">
    <aside class=\'txt\'>
        {{str "LBL_DNB_FINANCIAL_DESC"}}
    </aside>
</div>
',
        'dnb-desc' => '
<div id="dnb-no-duns" class="block-footer">
    <aside>
        <em>{{str "LBL_DNB_FINANCIAL_DESC"}}</em>
    </aside>
</div>',
        'dnb-financial-info' => '
<div id="dnb-financials-loading" class="block-footer">
    {{str "LBL_DNB_FINANCIAL_LOADING"}} ...
</div>
<div id="dnb-financials-details">
    {{#if dnbFin.product}}
        <div class="accordian dnb-show-less" id="dnb-financials-accordian">
            <!-- Recent Market Analysis -->
            {{#if dnbFin.product.marketAnalysis}}
                <div class="accordion-group">
                    <div class="accordion-heading">
                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#dnb-financials-accordian" href="#recent-market-analysis">
                            {{str "LBL_DNB_REC_MARK_ANALYSIS"}}
                        </a>
                    </div>
                    <div id="recent-market-analysis" class="accordion-body collapse in">
                        <div class="accordion-inner">
                            <table class="table table-striped table-condensed">
                                {{#each dnbFin.product.marketAnalysis}}
                                    <tr>
                                        <td>
                                            {{{this.InformationDescription}}}
                                        </td>
                                        <td>
                                            {{this.InformationValue}}
                                        </td>
                                    </tr>
                                {{/each}}
                            </table>
                        </div>
                    </div>
                </div>
            {{/if}}
            <!-- Annual Income Statements -->
            {{#if dnbFin.product.finStmt}}
                <div class="accordion-group">
                    <div class="accordion-heading">
                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#dnb-financials-accordian" href="#ann-inc-stmt">
                            {{str "LBL_DNB_FIN_STMT"}}
                        </a>
                    </div>
                    <div id="ann-inc-stmt" class="accordion-body collapse">
                        <div class="accordion-inner">
                            <table class="table table-striped table-condensed">
                                <thead>
                                <tr>
                                    <th> {{str "LBL_DNB_FINANCIAL_PERIOD"}}</th>
                                    <th> {{str "LBL_DNB_SALES_REVENUE"}}</th>
                                </tr>
                                </thead>
                                <tbody>
                                {{#each dnbFin.product.finStmt}}
                                    <tr>
                                        <td>{{this.finStmtDate}}</td>
                                        <td>
                                            {{this.salesRevenue}}&nbsp;&nbsp;({{str "LBL_DNB_IN"}} {{this.salesUnits}})
                                        </td>
                                    </tr>
                                {{/each}}
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            {{/if}}
            <!-- Basic Financial Information -->
            {{#if dnbFin.product.stckSym}}
                <div class="accordion-group">
                    <div class="accordion-heading">
                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#dnb-financials-accordian" href="#basic-fin-info">
                            {{str "LBL_DNB_BASIC_FIN_INF"}}
                        </a>
                    </div>
                    <div id="basic-fin-info" class="accordion-body collapse">
                        <div class="accordion-inner dnb-inner-nav">
                            <table class="table table-striped dataTable">
                                {{#if dnbFin.product.stckSym.ownerType}}
                                    <tr>
                                        <td>
                                            <b> {{str "LBL_DNB_FIN_COMP_TYPE"}}: </b>
                                        </td>
                                        <td>
                                            {{dnbFin.product.stckSym.ownerType}}
                                        </td>
                                    </tr>
                                {{/if}}
                                {{#if dnbFin.product.stckSym.ownerType}}
                                    <tr>
                                        <td class=\'dnb-stock-exchange\'>
                                            <b> {{str "LBL_DNB_FIN_STCK_EXCH"}} </b>
                                        </td>
                                        <td>
                                            <b> {{str "LBL_DNB_FIN_STCK_SYM"}} </b>
                                        </td>
                                    </tr>
                                    {{#each dnbFin.product.stckSym.stckSymList}}
                                        {{#if this.StockExchangeName.$}}
                                            <tr>
                                                <td>
                                                    {{this.StockExchangeName.$}}
                                                </td>
                                                <td>
                                                    {{this.StockExchangeTickerName}}
                                                </td>
                                            </tr>
                                        {{/if}}
                                    {{/each}}
                                {{/if}}
                            </table>
                        </div>
                    </div>
                </div>
            {{/if}}
        </div>
        <div class="dnb-show-more">
            <a class="showMoreData">{{str "LBL_DNB_SHOW_MORE"}}... <i class="icon-chevron-down"></i></a>
            <a class="showLessData">{{str "LBL_DNB_SHOW_LESS"}}... <i class="icon-chevron-up"></i></a>
        </div>
    {{else}}
        <div>
            <aside class="txt">
                <em>{{dnbFin.errmsg}}</em>
            </aside>
        </div>
    {{/if}}
</div>',
        'dnb-no-duns' => '
<div id="dnb-no-duns" class="block-footer">
    <aside>
        <em>{{str "LBL_DNB_NO_DUNS"}}</em>
    </aside>
</div>',
      ),
      'meta' => 
      array (
        'dashlets' => 
        array (
          0 => 
          array (
            'label' => 'LBL_DNB_FINANCIAL',
            'description' => 'LBL_DNB_FINANCIAL_DESC',
            'filter' => 
            array (
              'module' => 
              array (
                0 => 'Accounts',
              ),
              'view' => 'record',
            ),
            'config' => 
            array (
            ),
            'preview' => 
            array (
            ),
          ),
        ),
        'custom_toolbar' => 
        array (
          'buttons' => 
          array (
            0 => 
            array (
              'dropdown_buttons' => 
              array (
                0 => 
                array (
                  'type' => 'dashletaction',
                  'action' => 'editClicked',
                  'label' => 'LBL_DASHLET_CONFIG_EDIT_LABEL',
                ),
                1 => 
                array (
                  'type' => 'dashletaction',
                  'action' => 'refreshClicked',
                  'label' => 'LBL_DASHLET_REFRESH_LABEL',
                ),
                2 => 
                array (
                  'type' => 'dashletaction',
                  'action' => 'removeClicked',
                  'label' => 'LBL_DASHLET_REMOVE_LABEL',
                ),
              ),
            ),
            1 => 
            array (
              'type' => 'dashletaction',
              'css_class' => 'dashlet-toggle btn btn-invisible minify',
              'icon' => 'icon-chevron-down',
              'action' => 'toggleMinify',
              'tooltip' => 'LBL_DASHLET_MAXIMIZE',
            ),
          ),
        ),
      ),
    ),
    'dnb-industry-info' => 
    array (
      'templates' => 
      array (
        'dashlet-config' => '
<div class="record">
    <aside clss=\'txt\'>
        {{str "LBL_DNB_INDUSTRY_INFO_DESC"}}
    </aside>
</div>
',
        'dnb-desc' => '
<div id="dnb-no-data" class="block-footer">
    <aside>
        <em>{{str "LBL_DNB_INDUSTRY_INFO_DESC"}}</em>
    </aside>
</div>',
        'dnb-industry-info' => '
<div id="dnb-industry-list-loading" class="block-footer">
    {{str "LBL_DNB_IND_INF_LOAD"}}...
</div>
<div id="dnb-industry-info">
    {{#if dnbIndustryInfo.product}}
        <div class="accordian dnb-show-less" id="dnb_industry_accordian">
            <div class="accordion-group">
                <div class="accordion-heading">
                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#dnb_industry_accordian" href="#industry_tab_100">
                        {{str "LBL_DNB_INF_INF_OVERVIEW"}}
                    </a>
                </div>
                <div id="industry_tab_100" class="accordion-body collapse in">
                    <div class="accordion-inner">
                        <p>{{dnbIndustryInfo.product.industryExplanation}}</p>
                    </div>
                </div>
            </div>
            {{#each dnbIndustryInfo.product.industryChapters}}
                <div class="accordion-group">
                    <div class="accordion-heading">
                        {{#if this.ChapterName}}
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#dnb_industry_accordian" href="#industry_tab_{{@index}}">
                                {{this.ChapterName}}
                            </a>
                        {{/if}}
                    </div>
                    <div id="industry_tab_{{@index}}" class="accordion-body collapse">
                        <div class="accordion-inner">
                            {{#each  this.ChapterContentDetail}}
                                {{#if this.SubChapterDetail}}
                                    {{#each  this.SubChapterDetail}}
                                        <h3 class=\'sub\'> {{this.SubChapterName}}</h3> <br/>
                                        {{#each  this.SubChapterContentDetail}}
                                            <b>{{this.TitleText}}</b>
                                            <div class=\'content\'>{{{this.ContentText}}} </div>
                                        {{/each}}
                                    {{/each}}
                                {{else}}
                                    {{#if this.TitleText}}
                                        <b> {{this.TitleText}}</b>
                                    {{/if}}
                                    <div class=\'content\'>{{{this.ContentText}}} </div>
                                {{/if}}
                            {{/each}}
                        </div>
                    </div>
                </div>
            {{/each}}
        </div>
        <div class="dnb-show-more">
            <a class="showMoreData">{{str "LBL_DNB_SHOW_MORE"}}... <i class="icon-chevron-down"></i></a>
            <a class="showLessData">{{str "LBL_DNB_SHOW_LESS"}}... <i class="icon-chevron-up"></i></a>
        </div>
    {{else}}
        <div>
            <aside class="txt">
                <em>{{dnbIndustryInfo.errmsg}}</em>
            </aside>
        </div>
    {{/if}}
</div>',
        'dnb-no-duns' => '
<div id="dnb-no-data" class="block-footer">
    <aside>
        <em>{{str "LBL_DNB_NO_INDUSTRY"}}</em>
    </aside>
</div>',
      ),
      'meta' => 
      array (
        'dashlets' => 
        array (
          0 => 
          array (
            'label' => 'LBL_DNB_INDUSTRY_INFO',
            'description' => 'LBL_DNB_INDUSTRY_INFO_DESC',
            'filter' => 
            array (
              'module' => 
              array (
                0 => 'Accounts',
              ),
              'view' => 'record',
            ),
            'config' => 
            array (
            ),
            'preview' => 
            array (
            ),
          ),
        ),
        'custom_toolbar' => 
        array (
          'buttons' => 
          array (
            0 => 
            array (
              'dropdown_buttons' => 
              array (
                0 => 
                array (
                  'type' => 'dashletaction',
                  'action' => 'editClicked',
                  'label' => 'LBL_DASHLET_CONFIG_EDIT_LABEL',
                ),
                1 => 
                array (
                  'type' => 'dashletaction',
                  'action' => 'refreshClicked',
                  'label' => 'LBL_DASHLET_REFRESH_LABEL',
                ),
                2 => 
                array (
                  'type' => 'dashletaction',
                  'action' => 'removeClicked',
                  'label' => 'LBL_DASHLET_REMOVE_LABEL',
                ),
              ),
            ),
            1 => 
            array (
              'type' => 'dashletaction',
              'css_class' => 'dashlet-toggle btn btn-invisible minify',
              'icon' => 'icon-chevron-down',
              'action' => 'toggleMinify',
              'tooltip' => 'LBL_DASHLET_MAXIMIZE',
            ),
          ),
        ),
      ),
    ),
    'dnb-lite-company-info' => 
    array (
      'templates' => 
      array (
        'dashlet-config' => '
<div class="record">
    <div class="accordian" id="dnb_lit_config">
        {{#each dashletConfig.config.fields}}
            {{#if header}}
                <div class="accordion-group">
                    <div class="accordion-heading">
                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#dnb_lit_config" href="#dnb_config_{{@index}}">
                            {{str header}}
                        </a>
                    </div>
                <div id="dnb_config_{{@index}}" class="accordion-body collapse">
                    <div class="accordion-inner">
                        <p>{{str header_desc}}</p>
                    <table class="table">
            {{/if}}
            <tr>
                <td>
                    {{field ../this model=../this.settings template=../this.action}}
                </td>
                <td>
                    {{str label}}
                </td>
                <td>
                    {{str desc}}
                </td>
            </tr>
            {{#if last}}
                            </table>
                        </div>
                    </div>
                </div>
            {{/if}}
        {{/each}}
        </table>
    </div>
</div>
',
        'dnb-desc' => '
<div id="dnb-no-data" class="block-footer">
    <aside>
        <em>{{str "LBL_DNB_LITE_COMPANY_INFO_DESC"}}</em>
    </aside>
</div>',
        'dnb-lite-company-info' => '
<div id="dnb-lite-company-detail-loading" class="block-footer">
    {{str "LBL_DNB_LITE_COMPANY_INFO_LOADING"}}
</div>
<div id="dnb-lite-company-details">
    {{#if product}}
        <div class=\'dnb-show-less\'>
        <ul class="unstyled listed">
            {{#if product.Organization.SubjectHeader.TransferDUNSNumberRegistration.0.TransferredFromDUNSNumber}}
                <li>
                    <div class="dnb-company-label">{{str "LBL_DNB_TF_DUNS"}}</div>
                    <div class="txt import-data">
                        {{product.Organization.SubjectHeader.TransferDUNSNumberRegistration.0.TransferredFromDUNSNumber}}
                    </div>
                </li>
            {{/if}}
        <!--Total Inquires Count -->
            {{#if product.Organization.SubjectHeader.TotalInquiriesCount}}
            <li>
                <div class="dnb-company-label">
                    {{str "LBL_DNB_TOTAL_INQUIRY_COUNT"}}
                </div>
                <div class="txt import-data">
                    {{product.Organization.SubjectHeader.TotalInquiriesCount}}<br/>
                </div>
            </li>
        {{/if}}
        <!--Marketability Indicator -->
            {{#if product.Organization.SubjectHeader.MarketabilityIndicator}}
                <li>
                    <div class=\'dnb-company-label\'>{{str "LBL_DNB_MARKETABILITY_INDICATOR"}}</div>
                    <div class=\'txt import-data\'>
                        {{product.Organization.SubjectHeader.MarketabilityIndicator}}
                    </div>
                </li>
            {{/if}}
        <!-- Non Marketable Reason Text -->
            {{#if product.Organization.SubjectHeader.NonMarketableReasonText.0.$}}
                <li>
                    <div class=\'dnb-company-label\'>
                        {{str "LBL_DNB_NON_MARKETABILITY_INDICATOR"}}
                    </div>
                    <div class=\'txt import-data\'>
                        {{product.Organization.SubjectHeader.NonMarketableReasonText.0.$}}
                    </div>
                </li>
            {{/if}}
            <!-- Industry Code -->
            {{#if product.Organization.IndustryCode.IndustryCode}}
                {{#each product.Organization.IndustryCode.IndustryCode}}
                    <li>
                        <div class=\'dnb-company-label\'>
                            {{this.[@TypeText]}}:{{this.IndustryCode.$}}
                            {{#if this.DisplaySequence}}
                                {{#eq this.DisplaySequence \'1\'}}
                                    <span class="label label-success pull-right" data-placement="right">{{str "LBL_DNB_PRIMARY"}}</span>
                                {{/eq}}
                            {{/if}}
                        </div>
                        <div class=\'txt import-data\'>
                            {{this.IndustryCodeDescription.0.$}}
                        </div>
                    </li>
                {{/each}}
            {{/if}}
            <!-- Registered Address Indicator -->
            {{#if product.Organization.Location.PrimaryAddress.0.RegisteredAddressIndicator}}
                <li>
                    <div class=\'dnb-company-label\'>
                        {{str "LBL_DNB_REGISTERED_ADDRESS_INDICATOR"}}
                    </div>
                    <div class=\'txt import-data\'>
                        {{product.Organization.Location.PrimaryAddress.0.RegisteredAddressIndicator}}
                    </div>
                </li>
            {{/if}}
            <!-- Residential Address Indicator-->
            {{#if product.Organization.Location.PrimaryAddress.0.ResidentialAddressIndicator}}
                <li>
                    <div class=\'dnb-company-label\'>
                        {{str "LBL_DNB_RESIDENTIAL_ADDRESS_INDICATOR"}}
                    </div>
                    <div class=\'txt import-data\'>
                        {{product.Organization.Location.PrimaryAddress.0.ResidentialAddressIndicator}}
                    </div>
                </li>
            {{/if}}
            <!-- Last Update Date -->
            {{#if product.Organization.SubjectHeader.LastUpdateDate.$}}
                <li>
                    <div class=\'dnb-company-label\'>
                        {{str "LBL_DNB_LAST_UPDATE"}}
                    </div>
                    <div class=\'txt import-data\'>
                        {{product.Organization.SubjectHeader.LastUpdateDate.$}}
                    </div>
                </li>
            {{/if}}
            <!-- Street Address Line Text -->
            {{#if product.Organization.Location.PrimaryAddress.0.StreetAddressLine.0.LineText}}
                <li>
                    <div class=\'dnb-company-label\'>
                        {{str "LBL_DNB_STREET_ADDRESSLINE"}}
                    </div>
                    <div class=\'txt import-data\'>
                        {{product.Organization.Location.PrimaryAddress.0.StreetAddressLine.0.LineText}}
                    </div>
                </li>
            {{/if}}
            <!-- County Official Name-->
            {{#if product.Organization.Location.PrimaryAddress.0.CountyOfficialName}}
                <li>
                    <div class=\'dnb-company-label\'>
                        {{str "LBL_DNB_COUNTRY_OFFICIAL_NAME"}}
                    </div>
                    <div class=\'txt import-data\'>
                        {{product.Organization.Location.PrimaryAddress.0.CountyOfficialName}}
                    </div>
                </li>
            {{/if}}
            <!-- Territory Official Name -->
            {{#if product.Organization.Location.PrimaryAddress.0.TerritoryOfficialName}}
                <li>
                    <div class=\'dnb-company-label\'>
                        {{str "LBL_DNB_TERRITORY_OFFICIAL_NAME"}}
                    </div>
                    <div class=\'txt import-data\'>
                        {{product.Organization.Location.PrimaryAddress.0.TerritoryOfficialName}}
                    </div>
                </li>
            {{/if}}
            <!-- Territory Abbreviated Name -->
            {{#if product.Organization.Location.PrimaryAddress.0.TerritoryAbbreviatedName}}
                <li>
                    <div class=\'dnb-company-label\'>
                        {{str "LBL_DNB_TERRITORY_ABBREVIATED_NAME"}}
                    </div>
                    <div class=\'txt import-data\'>
                        {{product.Organization.Location.PrimaryAddress.0.TerritoryAbbreviatedName}}
                    </div>
                </li>
            {{/if}}
            <!-- Country Group Name -->
            {{#if product.Organization.Location.PrimaryAddress.0.CountryGroupName}}
                <li>
                    <div class=\'dnb-company-label\'>
                        {{str "LBL_DNB_COUNTRY_GROUP_NAME"}}
                    </div>
                    <div class=\'txt import-data\'>
                        {{product.Organization.Location.PrimaryAddress.0.CountryGroupName}}
                    </div>
                </li>
            {{/if}}
            <!-- Geographical Precision Text -->
            {{#if product.Organization.Location.PrimaryAddress.0.GeographicalPrecisionText.$}}
                <li>
                    <div class=\'dnb-company-label\'>
                        {{str "LBL_DNB_GEOGRAPHICAL_NAME"}}
                    </div>
                    <div class=\'txt import-data\'>
                        {{product.Organization.Location.PrimaryAddress.0.GeographicalPrecisionText.$}}
                    </div>
                </li>
            {{/if}}
            <!-- Metropolitan Stat Code -->
            {{#if product.Organization.Location.PrimaryAddress.0.MetropolitanStatisticalAreaUSCensusCode}}
                <li>
                    <div class=\'dnb-company-label\'>
                        {{str "LBL_DNB_METROPOLITAN_STAT_CODE"}}
                    </div>
                    <div class=\'txt import-data\'>
                        {{product.Organization.Location.PrimaryAddress.0.MetropolitanStatisticalAreaUSCensusCode}}
                    </div>
                </li>
            {{/if}}
            <!-- Telecommunication Number -->
            {{#if product.Organization.Telecommunication.TelephoneNumber.0.TelecommunicationNumber}}
                <li>
                    <div class=\'dnb-company-label\'>
                        {{str "LBL_DNB_TELECOMMUNICATION_NUMBER"}}
                    </div>
                    <div class=\'txt import-data\'>
                        {{product.Organization.Telecommunication.TelephoneNumber.0.TelecommunicationNumber}}
                    </div>
                </li>
            {{/if}}
            <!-- Facsimile Number-->
            {{#if product.Organization.Telecommunication.FacsimileNumber.0.TelecommunicationNumber}}
                <li>
                    <div class=\'dnb-company-label\'>
                        {{str "LBL_DNB_FACSIMILE_NUMBER"}}
                    </div>
                    <div class=\'txt import-data\'>
                        {{product.Organization.Telecommunication.FacsimileNumber.0.TelecommunicationNumber}}
                    </div>
                </li>
            {{/if}}
            <!-- Latitude Measurement-->
            {{#if product.Organization.Location.PrimaryAddress.0.LatitudeMeasurement}}
                <li>
                    <div class=\'dnb-company-label\'>
                        {{str "LBL_DNB_LATITUDE_MEASUREMENT"}}
                    </div>
                    <div class=\'txt import-data\'>
                        {{product.Organization.Location.PrimaryAddress.0.LatitudeMeasurement}}
                    </div>
                </li>
            {{/if}}
            <!-- Longitude Measurement-->
            {{#if product.Organization.Location.PrimaryAddress.0.LongitudeMeasurement}}
                <li>
                    <div class=\'dnb-company-label\'>
                        {{str "LBL_DNB_LATITUDE_MEASUREMENT"}}
                    </div>
                    <div class=\'txt import-data\'>
                        {{product.Organization.Location.PrimaryAddress.0.LongitudeMeasurement}}
                    </div>
                </li>
            {{/if}}
            <!-- International Dialling Code -->
            {{#if product.Organization.Telecommunication.TelephoneNumber.0.InternationalDialingCode}}
                <li>
                    <div class=\'dnb-company-label\'>
                        {{str "LBL_DNB_INT_DIALLING_CODE"}}
                    </div>
                    <div class=\'txt import-data\'>
                        {{product.Organization.Telecommunication.TelephoneNumber.0.InternationalDialingCode}}
                    </div>
                </li>
            {{/if}}
            <!-- Incorporation Year-->
            {{#if product.Organization.RegisteredDetail.IncorporationYear}}
                <li>
                    <div class=\'dnb-company-label\'>
                        {{str "LBL_DNB_INCORPORATION_YEAR"}}
                    </div>
                    <div class=\'txt import-data\'>
                        {{product.Organization.RegisteredDetail.IncorporationYear}}
                    </div>
                </li>
            {{/if}}
            <!-- Organization Identification Number-->
            {{#if product.Organization.RegisteredDetail.OrganizationIdentificationNumberDetail.0.OrganizationIdentificationNumber}}
                <li>
                    <div class=\'dnb-company-label\'>
                        {{str "LBL_DNB_ORGANISATION_IDENTIFICATION_NUMBER"}}
                    </div>
                    <div class=\'txt import-data\'>
                        {{product.Organization.RegisteredDetail.OrganizationIdentificationNumberDetail.0.OrganizationIdentificationNumber}}
                    </div>
                </li>
            {{/if}}
            <!-- Organisation Identification Number Start Date -->
            {{#if product.Organization.RegisteredDetail.OrganizationIdentificationNumberDetail.0.StartDate.$}}
                <li>
                    <div class=\'dnb-company-label\'>
                        {{str "LBL_DNB_ORGANISATION_IDENTIFICATION_START_DATE"}}
                    </div>
                    <div class=\'txt import-data\'>
                        {{product.Organization.RegisteredDetail.OrganizationIdentificationNumberDetail.0.StartDate.$}}
                    </div>
                </li>
            {{/if}}
            <!-- Filling Organization Name -->
            {{#if product.Organization.RegisteredDetail.OrganizationIdentificationNumberDetail.0.FilingOrganizationName}}
                <li>
                    <div class=\'dnb-company-label\'>
                        {{str "LBL_DNB_FILLING_ORGANISATION_NAME"}}
                    </div>
                    <div class=\'txt import-data\'>
                        {{product.Organization.RegisteredDetail.OrganizationIdentificationNumberDetail.0.FilingOrganizationName}}
                    </div>
                </li>
            {{/if}}
            <!-- Stock Exchange Ticker Name -->
            {{#if product.Organization.RegisteredDetail.StockExchangeDetails0.StockExchangeTickerName}}
                <li>
                    <div class=\'dnb-company-label\'>
                        {{str "LBL_DNB_STOCK_EXCHANGE_TICKER__NAME"}}
                    </div>
                    <div class=\'txt import-data\'>
                        {{product.Organization.RegisteredDetail.StockExchangeDetails0.StockExchangeTickerName}}
                    </div>
                </li>
            {{/if}}
            <!-- Country ISO Alpha 2 Code -->
            {{#if product.Organization.Location.PrimaryAddress.0.CountryISOAlpha2Code}}
                <li>
                    <div class=\'dnb-company-label\'>
                        {{str "LBL_DNB_CI_CTRY"}}
                    </div>
                    <div class=\'txt\'>
                        {{product.Organization.Location.PrimaryAddress.0.CountryISOAlpha2Code}}
                    </div>
                </li>
            {{/if}}
            <!-- Line of Business Description -->
            {{#if product.Organization.ActivitiesAndOperations.LineOfBusinessDetails.0.LineOfBusinessDescription.$}}
                <li>
                    <div class=\'dnb-company-label\'>
                        {{str "LBL_DNB_LINE_OF_BUSINESS_DESCRIPTION"}}
                    </div>
                    <div class=\'txt import-data\'>
                        {{product.Organization.ActivitiesAndOperations.LineOfBusinessDetails.0.LineOfBusinessDescription.$}}
                    </div>
                </li>
            {{/if}}
            <!-- Import Indicator-->
            {{#if product.Organization.ActivitiesAndOperations.ImportDetails.ImportIndicator}}
                <li>
                    <div class=\'dnb-company-label\'>
                        {{str "LBL_DNB_IMPORT_DETAILS_INDICATOR"}}
                    </div>
                    <div class=\'txt import-data\'>
                        {{product.Organization.ActivitiesAndOperations.ImportDetails.ImportIndicator}}
                    </div>
                </li>
            {{/if}}
            <!-- Export Indicator-->
            {{#if product.Organization.ActivitiesAndOperations.ExportDetails.ExportIndicator}}
                <li>
                    <div class=\'dnb-company-label\'>
                        {{str "LBL_DNB_EXPORT_DETAILS_INDICATOR"}}
                    </div>
                    <div class=\'txt import-data\'>
                        {{product.Organization.ActivitiesAndOperations.ExportDetails.ExportIndicator}}
                    </div>
                </li>
            {{/if}}
            <!-- Agent Indicator-->
            {{#if product.Organization.ActivitiesAndOperations.SubjectIsAgentDetails.AgentIndicator}}
                <li>
                    <div class=\'dnb-company-label\'>
                        {{str "LBL_DNB_AGENT_INDICATOR"}}
                    </div>
                    <div class=\'txt import-data\'>
                        {{product.Organization.ActivitiesAndOperations.SubjectIsAgentDetails.AgentIndicator}}
                    </div>
                </li>
            {{/if}}
            <!-- Total Employee Quantity-->
            {{#if product.Organization.EmployeeFigures.IndividualEntityEmployeeDetails.TotalEmployeeQuantity}}
                <li>
                    <div class=\'dnb-company-label\'>
                        {{str "LBL_DNB_TOTAL_EMPLOYEE_QUANTITY"}}
                    </div>
                    <div class=\'txt import-data\'>
                        {{product.Organization.EmployeeFigures.IndividualEntityEmployeeDetails.TotalEmployeeQuantity}}
                    </div>
                </li>
            {{/if}}
            <!-- Sales Revenue-->
            {{#if product.Organization.Financial.KeyFinancialFiguresOverview.0.SalesRevenueAmount.0.$}}
                <li>
                    <div class=\'dnb-company-label\'>
                        {{str "LBL_DNB_ANNUAL_SALES_US_DOLLAR"}}
                    </div>
                    <div class=\'txt\'>
                        {{product.Organization.Financial.KeyFinancialFiguresOverview.0.SalesRevenueAmount.0.$}}
                    </div>
                </li>
            {{/if}}
            <!-- Family Tree Member Role-->
            {{#if product.Organization.OrganizationDetail.FamilyTreeMemberRole.0.FamilyTreeMemberRoleText.$}}
                <li>
                    <div class=\'dnb-company-label\'>
                        {{str "LBL_DNB_FAMILY_TREE_MEMBER_ROLE"}}
                    </div>
                    <div class=\'txt\'>
                        {{product.Organization.OrganizationDetail.FamilyTreeMemberRole.0.FamilyTreeMemberRoleText.$}}
                    </div>
                </li>
            {{/if}}
            <!-- Principal Name-->
            {{#if product.Organization.PrincipalsAndManagement.CurrentPrincipal.0.PrincipalName.FullName}}
                <li>
                    <div class=\'dnb-company-label\'>
                        {{str "LBL_DNB_CURRENT_PRINCIPAL_FULL_NAME"}}
                    </div>
                    <div class=\'txt import-data\'>
                        {{product.Organization.PrincipalsAndManagement.CurrentPrincipal.0.PrincipalName.FullName}}
                    </div>
                </li>
            {{/if}}
            <!-- Job Title-->
            {{#if product.Organization.PrincipalsAndManagement.CurrentPrincipal.0.JobTitle.0.JobTitleText.$}}
                <li>
                    <div class=\'dnb-company-label\'>
                        {{str "LBL_DNB_JOB_TITLE_TEXT"}}
                    </div>
                    <div class=\'txt\'>
                        {{product.Organization.PrincipalsAndManagement.CurrentPrincipal.0.JobTitle.0.JobTitleText.$}}
                    </div>
                </li>
            {{/if}}
            <!-- Primary Town Name-->
            {{#if product.Organization.Location.PrimaryAddress.0.PrimaryTownName}}
                <li>
                    <div class=\'dnb-company-label\'>
                        {{str "LBL_DNB_CI_CITY"}}
                    </div>
                    <div class=\'txt\'>
                        {{product.Organization.Location.PrimaryAddress.0.PrimaryTownName}}
                    </div>
                </li>
            {{/if}}
            <!-- Duns Number-->
            {{#if OrderProductResponse.OrderProductResponseDetail.InquiryDetail.DUNSNumber}}
                <li>
                    <div class=\'dnb-company-label\'>
                        {{str "LBL_DNB_DUNS_NUMBER"}}
                    </div>
                    <div class=\'txt\'>
                        {{OrderProductResponse.OrderProductResponseDetail.InquiryDetail.DUNSNumber}}
                    </div>
                </li>
            {{/if}}
            <!-- Country ISO Alpha Code-->
            {{#if product.Organization.Location.MailingAddress.0.CountryISOAlpha2Code}}
                <li>
                    <div class=\'dnb-company-label\'>
                        {{str "LBL_DNB_CI_CTRY"}}
                    </div>
                    <div class=\'txt\'>
                        {{product.Organization.Location.MailingAddress.0.CountryISOAlpha2Code}}
                    </div>
                </li>
            {{/if}}
            <!-- Industry Code-->
            {{#if product.Organization.IndustryCode.IndustryCode.0.["@TypeText"]}}
                <li>
                    <div class=\'dnb-company-label\'>
                        {{str "LBL_DNB_PRIMARY_SIC_TYPE"}}
                    </div>
                    <div class=\'txt\'>
                        {{product.Organization.IndustryCode.IndustryCode.0.["@TypeText"]}}
                    </div>
                </li>
            {{/if}}
            <!-- Postal Code-->
            {{#if product.Organization.Location.PrimaryAddress.0.PostalCode}}
                <li>
                    <div class=\'dnb-company-label\'>
                        {{str "LBL_DNB_CI_POSTAL_CD"}}
                    </div>
                    <div class=\'txt\'>
                        {{product.Organization.Location.PrimaryAddress.0.PostalCode}}
                    </div>
                </li>
            {{/if}}
            <!-- Organization Summary Text -->
            {{#if product.Organization.SubjectHeader.OrganizationSummaryText}}
                <li>
                    <div class=\'dnb-company-label\'>
                        {{str "LBL_DNB_SUMMARY"}}
                    </div>
                    <div class=\'txt import-data\'>
                        {{{product.Organization.SubjectHeader.OrganizationSummaryText}}}
                    </div>
                </li>
            {{/if}}
            <!-- Duns Self Request Indicator-->
            {{#if product.Organization.SubjectHeader.DUNSSelfRequestIndicator}}
                <li>
                    <div class=\'dnb-company-label\'>
                        {{str "LBL_DNB_SELF_REQUEST_INDICATOR"}}
                    </div>
                    <div class=\'txt import-data\'>
                        {{product.Organization.SubjectHeader.DUNSSelfRequestIndicator}}
                    </div>
                </li>
            {{/if}}
            <!-- Country ISO Alpha Code-->
            {{#if product.Organization.RegisteredDetail.StockExchangeDetails.0.CountryISOAlpha2Code}}
                <li>
                    <div class=\'dnb-company-label\'>
                        {{str "LBL_DNB_STOCK_EXCHANGE_COUNTRY_ISO_ALPHA_CODE"}}
                    </div>
                    <div class=\'txt import-data\'>
                        {{product.Organization.RegisteredDetail.StockExchangeDetails.0.CountryISOAlpha2Code}}
                    </div>
                </li>
            {{/if}}
        </ul>
        </div>
        <div class="dnb-show-more">
            <a class="showMoreData more">{{str "LBL_DNB_SHOW_MORE"}} <i class="icon-chevron-down"></i></a>
            <a class="showLessData less">{{str "LBL_DNB_SHOW_LESS"}} <i class="icon-chevron-up"></i></a>
        </div>
    {{else}}
        <aside class=\'create-no-data\'>
            {{#if errmsg}}
                <em>{{errmsg}}</em>
            {{else}}
                <em>{{str "LBL_DNB_NO_DATA"}}</em>
            {{/if}}
        </aside>
    {{/if}}
</div>
',
        'dnb-no-duns' => '
<div id="dnb-no-duns" class="block-footer">
    <aside>
        <em>{{str "LBL_DNB_NO_DUNS"}}</em>
    </aside>
</div>',
      ),
      'meta' => 
      array (
        'dashlets' => 
        array (
          0 => 
          array (
            'label' => 'LBL_DNB_LITE_COMPANY_INFO',
            'description' => 'LBL_DNB_LITE_COMPANY_INFO_DESC',
            'filter' => 
            array (
              'module' => 
              array (
                0 => 'Accounts',
              ),
              'view' => 'record',
            ),
            'config' => 
            array (
              'compname' => '1',
              'tradename' => '1',
              'locationtype' => '1',
              'primaddrstreet' => '1',
              'primaddrcity' => '1',
              'primaddrstateabbr' => '1',
              'primaddrstate' => '1',
              'primaddrctrycd' => '1',
              'primaddrctrygrp' => '1',
              'primaddrzip' => '1',
              'uscensuscd' => '1',
              'mailingaddrstreet' => '1',
              'mailingaddrcity' => '1',
              'mailingaddrstateabbr' => '1',
              'mailingaddrzip' => '1',
              'mailingaddrctrycd' => '1',
              'long' => '1',
              'lat' => '1',
              'phone' => '1',
              'fax' => '1',
              'webpage' => '1',
              'indempcnt' => '1',
              'conempcnt' => '1',
              'lob' => '1',
              'lastupddate' => '1',
              'marketind' => '1',
              'indcodes' => '1',
            ),
            'preview' => 
            array (
              'compname' => '1',
              'tradename' => '1',
              'locationtype' => '1',
              'primaddrstreet' => '1',
              'primaddrcity' => '1',
              'primaddrstateabbr' => '1',
              'primaddrstate' => '1',
              'primaddrctrycd' => '1',
              'primaddrctrygrp' => '1',
              'primaddrzip' => '1',
              'uscensuscd' => '1',
              'mailingaddrstreet' => '1',
              'mailingaddrcity' => '1',
              'mailingaddrstateabbr' => '1',
              'mailingaddrzip' => '1',
              'mailingaddrctrycd' => '1',
              'long' => '1',
              'lat' => '1',
              'phone' => '1',
              'fax' => '1',
              'webpage' => '1',
              'indempcnt' => '1',
              'conempcnt' => '1',
              'lob' => '1',
              'lastupddate' => '1',
              'marketind' => '1',
              'indcodes' => '1',
            ),
          ),
        ),
        'custom_toolbar' => 
        array (
          'buttons' => 
          array (
            0 => 
            array (
              'dropdown_buttons' => 
              array (
                0 => 
                array (
                  'type' => 'dashletaction',
                  'action' => 'editClicked',
                  'label' => 'LBL_DASHLET_CONFIG_EDIT_LABEL',
                ),
                1 => 
                array (
                  'type' => 'dashletaction',
                  'action' => 'refreshClicked',
                  'label' => 'LBL_DASHLET_REFRESH_LABEL',
                ),
                2 => 
                array (
                  'type' => 'dashletaction',
                  'action' => 'removeClicked',
                  'label' => 'LBL_DASHLET_REMOVE_LABEL',
                ),
              ),
            ),
            1 => 
            array (
              'type' => 'dashletaction',
              'css_class' => 'dashlet-toggle btn btn-invisible minify',
              'icon' => 'icon-chevron-down',
              'action' => 'toggleMinify',
              'tooltip' => 'LBL_DASHLET_MAXIMIZE',
            ),
          ),
        ),
        'config' => 
        array (
          'fields' => 
          array (
            0 => 
            array (
              'name' => 'compname',
              'label' => 'LBL_DNB_PRIM_NAME',
              'desc' => 'LBL_DNB_PRIM_NAME_DESC',
              'header' => 'LBL_DNB_ORG_NAME',
              'header_desc' => 'LBL_DNB_ORG_NAME_DESC',
              'type' => 'bool',
            ),
            1 => 
            array (
              'name' => 'tradename',
              'label' => 'LBL_DNB_TRD_NAME',
              'desc' => 'LBL_DNB_TRD_NAME_DESC',
              'last' => '1',
              'type' => 'bool',
            ),
            2 => 
            array (
              'name' => 'locationtype',
              'label' => 'LBL_DNB_LOCATION_TYPE',
              'desc' => 'LBL_DNB_LOCATION_TYPE_DESC',
              'header' => 'LBL_DNB_ORG_DET',
              'header_desc' => 'LBL_DNB_ORG_DET_DESC',
              'last' => '1',
              'type' => 'bool',
            ),
            3 => 
            array (
              'name' => 'primaddrstreet',
              'label' => 'LBL_DNB_PRIM_STREET',
              'desc' => 'LBL_DNB_PRIM_STREET_DESC',
              'header' => 'LBL_DNB_LOC',
              'header_desc' => 'LBL_DNB_LOC_DESC',
              'type' => 'bool',
            ),
            4 => 
            array (
              'name' => 'primaddrcity',
              'label' => 'LBL_DNB_PRIM_CITY',
              'desc' => 'LBL_DNB_PRIM_CITY_DESC',
              'type' => 'bool',
            ),
            5 => 
            array (
              'name' => 'primaddrstateabbr',
              'label' => 'LBL_DNB_PRIM_STATE_ABBR',
              'desc' => 'LBL_DNB_PRIM_STATE_ABBR_DESC',
              'type' => 'bool',
            ),
            6 => 
            array (
              'name' => 'primaddrstate',
              'label' => 'LBL_DNB_PRIM_STATE',
              'desc' => 'LBL_DNB_PRIM_STATE_DESC',
              'type' => 'bool',
            ),
            7 => 
            array (
              'name' => 'primaddrctrycd',
              'label' => 'LBL_DNB_PRIM_CTRY_CD',
              'desc' => 'LBL_DNB_PRIM_CTRY_CD_DESC',
              'type' => 'bool',
            ),
            8 => 
            array (
              'name' => 'primaddrctrygrp',
              'label' => 'LBL_DNB_PRIM_CTRY_GRP',
              'desc' => 'LBL_DNB_PRIM_CTRY_GRP_DESC',
              'type' => 'bool',
            ),
            9 => 
            array (
              'name' => 'primaddrzip',
              'label' => 'LBL_DNB_PRIM_ZIP',
              'desc' => 'LBL_DNB_PRIM_ZIP_DESC',
              'type' => 'bool',
            ),
            10 => 
            array (
              'name' => 'uscensuscd',
              'label' => 'LBL_DNB_PRIM_CEN_CD',
              'desc' => 'LBL_DNB_PRIM_CEN_CD_DESC',
              'type' => 'bool',
            ),
            11 => 
            array (
              'name' => 'mailingaddrstreet',
              'label' => 'LBL_DNB_MAIL_STREET',
              'desc' => 'LBL_DNB_PRIM_STREET_DESC',
              'type' => 'bool',
            ),
            12 => 
            array (
              'name' => 'mailingaddrcity',
              'label' => 'LBL_DNB_MAIL_CITY',
              'desc' => 'LBL_DNB_PRIM_CITY_DESC',
              'type' => 'bool',
            ),
            13 => 
            array (
              'name' => 'mailingaddrstateabbr',
              'label' => 'LBL_DNB_MAIL_STATE_ABBR',
              'desc' => 'LBL_DNB_PRIM_STATE_ABBR_DESC',
              'type' => 'bool',
            ),
            14 => 
            array (
              'name' => 'mailingaddrzip',
              'label' => 'LBL_DNB_MAIL_ZIP',
              'desc' => 'LBL_DNB_PRIM_ZIP_DESC',
              'type' => 'bool',
            ),
            15 => 
            array (
              'name' => 'mailingaddrctrycd',
              'label' => 'LBL_DNB_MAIL_CTRY_CD',
              'desc' => 'LBL_DNB_PRIM_CTRY_CD_DESC',
              'type' => 'bool',
            ),
            16 => 
            array (
              'name' => 'long',
              'label' => 'LBL_DNB_LAT',
              'desc' => 'LBL_DNB_LAT_DESC',
              'type' => 'bool',
            ),
            17 => 
            array (
              'name' => 'lat',
              'label' => 'LBL_DNB_LONG',
              'desc' => 'LBL_DNB_LONG_DESC',
              'last' => '1',
              'type' => 'bool',
            ),
            18 => 
            array (
              'name' => 'phone',
              'label' => 'LBL_DNB_PHONE',
              'desc' => 'LBL_DNB_PHONE_DESC',
              'header' => 'LBL_DNB_TELECOMM',
              'header_desc' => 'LBL_DNB_TELECOMM_DESC',
              'type' => 'bool',
            ),
            19 => 
            array (
              'name' => 'fax',
              'label' => 'LBL_DNB_FAX',
              'desc' => 'LBL_DNB_FAX_DESC',
              'type' => 'bool',
            ),
            20 => 
            array (
              'name' => 'webpage',
              'label' => 'LBL_DNB_WEBPAGE',
              'desc' => 'LBL_DNB_WEBPAGE_DESC',
              'last' => '1',
              'type' => 'bool',
            ),
            21 => 
            array (
              'name' => 'indempcnt',
              'label' => 'LBL_DNB_IND_EMP_CNT',
              'desc' => 'LBL_DNB_IND_EMP_CNT_DESC',
              'header' => 'LBL_DNB_EMP_INF',
              'header_desc' => 'LBL_DNB_EMP_INF_DESC',
              'type' => 'bool',
            ),
            22 => 
            array (
              'name' => 'conempcnt',
              'label' => 'LBL_DNB_CON_EMP_CNT',
              'desc' => 'LBL_DNB_CON_EMP_CNT_DESC',
              'last' => '1',
              'type' => 'bool',
            ),
            23 => 
            array (
              'name' => 'lob',
              'label' => 'LBL_DNB_LOB',
              'desc' => 'LBL_DNB_LOB_DESC',
              'header' => 'LBL_DNB_ACT_OPER',
              'header_desc' => 'LBL_DNB_ACT_OPER_DESC',
              'last' => '1',
              'type' => 'bool',
            ),
            24 => 
            array (
              'name' => 'lastupddate',
              'label' => 'LBL_DNB_LAST_UPD_DATE',
              'desc' => 'LBL_DNB_LAST_UPD_DATE_DESC',
              'header' => 'LBL_DNB_SUBJ_HEADER',
              'header_desc' => 'LBL_DNB_SUBJ_HEADER_DESC',
              'type' => 'bool',
            ),
            25 => 
            array (
              'name' => 'marketind',
              'label' => 'LBL_DNB_MARKET_IND',
              'desc' => 'LBL_DNB_MARKET_IND_DESC',
              'last' => '1',
              'type' => 'bool',
            ),
            26 => 
            array (
              'name' => 'indcodes',
              'label' => 'LBL_DNB_IND_CD',
              'desc' => 'LBL_DNB_IND_CD_DESC',
              'header' => 'LBL_DNB_IND_CD_HED',
              'header_desc' => 'LBL_DNB_IND_CD_HED_DESC',
              'last' => '1',
              'type' => 'bool',
            ),
          ),
        ),
      ),
    ),
    'dnb-news-and-media' => 
    array (
      'templates' => 
      array (
        'dashlet-config' => '
<div class="record">
    <aside class=\'txt\'>
        {{str "LBL_DNB_NEWS_AND_MEDIA_DESC" }}
    </aside>
</div>',
        'dnb-desc' => '
<div id="dnb-no-data" class="block-footer">
    <aside>
        <em>{{str "LBL_DNB_NEWS_AND_MEDIA_DESC"}}</em>
    </aside>
</div>',
        'dnb-news-and-media' => '
<div id="dnb-news-detail-loading" class="block-footer">
    {{str "LBL_DNB_NEWS_AND_MEDIA_LOADING"}}...
</div>
<div id="dnb-news-detail">
    <div class="tabbable tabs-full two">
        <ul id="tab" class="nav nav-tabs">
            <li class="active">
                <a href="#news-tab" data-toggle="tab">{{str "LBL_DNB_NEWS"}}
                </a>
            </li>
            <li>
                <a href="#social-tab" data-toggle="tab">{{str "LBL_DNB_SOCIAL"}}</a>
            </li>
        </ul>
        <div class="tab-content">
            <!-- News Tab Start-->
            <div class="tab-pane active" id="news-tab">
                {{#if dnbNews.news.product}}
                    <div class=\'accordian dnb-show-less\' id="dnb_news_accordian">
                        {{#each dnbNews.news.product}}
                            <div class="accordion-group">
                                <div class="accordion-heading">
                                    {{#if this.TitleText}}
                                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#dnb_news_accordian" href="#news_{{@index}}">
                                            {{this.TitleText}}
                                        </a>
                                    {{/if}}
                                </div>
                                <div id="news_{{@index}}" class="accordion-body collapse">
                                    {{#if this.ContentText}}
                                        <div class="accordion-inner">
                                            {{this.ContentText}}
                                        </div>
                                    {{/if}}
                                    {{#if this.WebPageURL}}
                                        <div class="dnb-weburl">
                                            {{str "LBL_DNB_NEWS_AND_MEDIA_MORE"}}:
                                            <a href="{{this.WebPageURL}}" target="_blank">
                                                {{this.SourceDescription}}
                                            </a>
                                        </div>
                                    {{/if}}
                                </div>
                            </div>
                        {{/each}}
                    </div>
                    <div class="dnb-show-more">
                        <a class="showMoreData more">{{str "LBL_DNB_SHOW_MORE"}} <i class="icon-chevron-down"></i></a>
                        <a class="showLessData less">{{str "LBL_DNB_SHOW_LESS"}} <i class="icon-chevron-up"></i></a>
                    </div>
                {{else}}
                    <br/>
                    <div>
                        <aside class="txt">
                            <em>
                                {{#if dnbNews.news.errmsg}}
                                    {{dnbNews.news.errmsg}}
                                {{else}}
                                    {{dnbNews.errmsg}}
                                {{/if}}
                            </em>
                        </aside>
                    </div>
                {{/if}}
            </div>
            <!-- News Tab End-->
            <!-- Social Tab Start-->
            <div class="tab-pane fade" id="social-tab">
                {{#if dnbNews.social.product}}
                    <table class="table">
                        {{#each dnbNews.social.product}}
                            <tr>
                                <td>{{str this.label}}</td>
                                <td><input type=\'hidden\' id=\'{{this.mediaId}}\'/></td>
                            </tr>
                        {{/each}}
                    </table>
                {{else}}
                    <br/>
                    <div>
                        <aside class="txt">
                            <em>
                                {{#if dnbNews.social.errmsg}}
                                    {{dnbNews.social.errmsg}}
                                {{else}}
                                    {{dnbNews.errmsg}}
                                {{/if}}
                            </em>
                        </aside>
                    </div>
                {{/if}}
            </div>
            <!-- Social Tab End-->
        </div>
    </div>
</div>
',
        'dnb-no-duns' => '
<div id="dnb-no-duns" class="block-footer">
    <aside>
        <em>{{str "LBL_DNB_NO_DUNS"}}</em>
    </aside>
</div>',
      ),
      'meta' => 
      array (
        'dashlets' => 
        array (
          0 => 
          array (
            'label' => 'LBL_DNB_NEWS_AND_MEDIA',
            'description' => 'LBL_DNB_NEWS_AND_MEDIA_DESC',
            'filter' => 
            array (
              'module' => 
              array (
                0 => 'Accounts',
              ),
              'view' => 'record',
            ),
            'config' => 
            array (
            ),
            'preview' => 
            array (
            ),
          ),
        ),
        'custom_toolbar' => 
        array (
          'buttons' => 
          array (
            0 => 
            array (
              'dropdown_buttons' => 
              array (
                0 => 
                array (
                  'type' => 'dashletaction',
                  'action' => 'editClicked',
                  'label' => 'LBL_DASHLET_CONFIG_EDIT_LABEL',
                ),
                1 => 
                array (
                  'type' => 'dashletaction',
                  'action' => 'refreshClicked',
                  'label' => 'LBL_DASHLET_REFRESH_LABEL',
                ),
                2 => 
                array (
                  'type' => 'dashletaction',
                  'action' => 'removeClicked',
                  'label' => 'LBL_DASHLET_REMOVE_LABEL',
                ),
              ),
            ),
            1 => 
            array (
              'type' => 'dashletaction',
              'css_class' => 'dashlet-toggle btn btn-invisible minify',
              'icon' => 'icon-chevron-down',
              'action' => 'toggleMinify',
              'tooltip' => 'LBL_DASHLET_MAXIMIZE',
            ),
          ),
        ),
      ),
    ),
    'dnb-premium-company-info' => 
    array (
      'templates' => 
      array (
        'dashlet-config' => '
<div class="record">
    <div class="accordian" id="dnb_prem_config">
        {{#each dashletConfig.config.fields}}
            {{#if header}}
                <div class="accordion-group">
                    <div class="accordion-heading">
                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#dnb_prem_config" href="#dnb_config_{{@index}}">
                            {{str header}}
                        </a>
                    </div>
                <div id="dnb_config_{{@index}}" class="accordion-body collapse">
                    <div class="accordion-inner">
                        <p>{{str header_desc}}</p>
                    <table class="table">
            {{/if}}
            <tr>
                <td>
                    {{field ../this model=../this.settings template=../this.action}}
                </td>
                <td>
                    {{str label}}
                </td>
                <td>
                    {{str desc}}
                </td>
            </tr>
            {{#if last}}
                            </table>
                        </div>
                    </div>
                </div>
            {{/if}}
        {{/each}}
        </table>
    </div>
</div>
',
        'dnb-desc' => '
<div id="dnb-no-data" class="block-footer">
    <aside>
        <em>{{str "LBL_DNB_PREMIUM_COMPANY_INFO_DESC"}}</em>
    </aside>
</div>',
        'dnb-premium-company-info' => '
<div id="dnb-prem-company-detail-loading" class="block-footer">
	{{str "LBL_DNB_PREMIUM_COMPANY_INFO_LOADING"}}
</div>
<div id="dnb-prem-company-details">
    {{#if product}}
		<div class=\'dnb-show-less\'>
			<ul class="unstyled listed">
				{{#if product.SubjectHeader.OrganizationSummaryText}}
					<li>
						<div class=\'dnb-company-label\'>
							{{str "LBL_DNB_SUMMARY"}}
						</div>
						<div class=\'txt import-data\'>
							{{{this.product.SubjectHeader.OrganizationSummaryText}}}
						</div>
					</li>
				{{/if}}
				<!-- Total Inquires Count-->
				{{#if product.SubjectHeader.TotalInquiriesCount}}
					<li>
						<div class=\'dnb-company-label\'>
							{{str "LBL_DNB_TOTAL_ENQUIERY_COUNT"}}
						</div>
						<div class=\'txt import-data\'>
							{{this.product.SubjectHeader.TotalInquiriesCount}}
						</div>
					</li>
				{{/if}}
				<!-- Industry Code -->
				{{#if product.IndustryCode.IndustryCode}}
					{{#each product.IndustryCode.IndustryCode}}
						<li>
							<div class=\'dnb-company-label\'>
								{{this.[@TypeText]}}:{{this.IndustryCode.$}}
								{{#if this.DisplaySequence}}
									{{#eq this.DisplaySequence \'1\'}}
										<span class="label label-success pull-right" data-placement="right">{{str "LBL_DNB_PRIMARY"}}</span>
									{{/eq}}
								{{/if}}
							</div>
							<div class=\'txt import-data\'>
								{{this.IndustryCodeDescription.0.$}}
							</div>
						</li>
					{{/each}}
				{{/if}}
				<!-- Not Reachable Indicator -->
				{{#if product.Telecommunication.TelephoneNumber.0.UnreachableIndicator}}
					<li>
						<div class=\'dnb-company-label\'>
							{{str "LBL_DNB_UNREACHABLE_INDICATOR"}}
						</div>
						<div class=\'txt import-data\'>
							{{this.product.Telecommunication.TelephoneNumber.0.UnreachableIndicator}}
						</div>
					</li>
				{{/if}}
				<!-- Residential Address Indicator -->
				{{#if product.Location.PrimaryAddress.0.ResidentialAddressIndicator}}
					<li>
						<div class=\'dnb-company-label\'>
							{{str "LBL_DNB_RESIDENTIAL_ADDRESS_INDICATOR"}}
						</div>
						<div class=\'txt import-data\'>
							{{this.product.Location.PrimaryAddress.0.ResidentialAddressIndicator}}
						</div>
					</li>
				{{/if}}
				<!-- Last Update Date -->
				{{#if product.SubjectHeader.LastUpdateDate.$}}
					<li>
						<div class=\'dnb-company-label\'>
							{{str "LBL_DNB_LAST_UPDATE_DATE"}}
						</div>
						<div class=\'txt import-data\'>
							{{this.product.SubjectHeader.LastUpdateDate.$}}
						</div>
					</li>
				{{/if}}
				<!-- Street Address Line Text -->
				{{#if product.RegisteredDetail.OrganizationIdentificationNumberDetail.0.RegistrationLocation.PrimaryAddress.0.StreetAddressLine.0.LineText}}
					<li>
						<div class=\'dnb-company-label\'>
							{{str "LBL_DNB_STREET_ADDRESS_LINE_TEXT"}}
						</div>
						<div class=\'txt import-data\'>
							{{this.product.RegisteredDetail.OrganizationIdentificationNumberDetail.0.RegistrationLocation.PrimaryAddress.0.StreetAddressLine.0.LineText}}
						</div>
					</li>
				{{/if}}
				<!-- County Official Name -->
				{{#if product.Location.PrimaryAddress0.CountyOfficialName}}
					<li>
						<div class=\'dnb-company-label\'>
							{{str "LBL_DNB_COUNTRY_OFFICIAL_NAME"}}
						</div>
						<div class=\'txt import-data\'>
							{{this.product.Location.PrimaryAddress0.CountyOfficialName}}
						</div>
					</li>
				{{/if}}
				<!-- Territory Official Name -->
				{{#if product.Location.PrimaryAddress.0.TerritoryOfficialName}}
					<li>
						<div class=\'dnb-company-label\'>
							{{str "LBL_DNB_TERRITORY_OFFICIAL_NAME"}}
						</div>
						<div class=\'txt import-data\'>
							{{this.product.Location.PrimaryAddress.0.TerritoryOfficialName}}
						</div>
					</li>
				{{/if}}
				<!-- Territory Abbreviated Name-->
				{{#if product.Location.PrimaryAddress.0.TerritoryAbbreviatedName}}
					<li>
						<div class=\'dnb-company-label\'>
							{{str "LBL_DNB_TERRITORY_ABBREVATIVE_NAME"}}
						</div>
						<div class=\'txt import-data\'>
							{{this.product.Location.PrimaryAddress.0.TerritoryAbbreviatedName}}
						</div>
					</li>
				{{/if}}
				<!-- Telecommunication Number -->
				{{#if product.Telecommunication.TelephoneNumber.0.TelecommunicationNumber}}
					<li>
						<div class=\'dnb-company-label\'>
							{{str "LBL_DNB_TELECOMMUNICATION_NUMBER"}}
						</div>
						<div class=\'txt import-data\'>
							{{this.product.Telecommunication.TelephoneNumber.0.TelecommunicationNumber}}
						</div>
					</li>
				{{/if}}
				<!-- International Dialling Code -->
				{{#if product.Telecommunication.TelephoneNumber.0.InternationalDialingCode}}
					<li>
						<div class=\'dnb-company-label\'>
							{{str "LBL_DNB_INTERNATIONAL_DIALLING_CODE"}}
						</div>
						<div class=\'txt import-data\'>
							{{this.product.Telecommunication.TelephoneNumber.0.InternationalDialingCode}}
						</div>
					</li>
				{{/if}}
				<!-- Incorporation Year-->
				{{#if product.RegisteredDetail.IncorporationYear}}
					<li>
						<div class=\'dnb-company-label\'>
							{{str "LBL_DNB_INCORPORATION_YEAR"}}
						</div>
						<div class=\'txt import-data\'>
							{{this.product.RegisteredDetail.IncorporationYear}}
						</div>
					</li>
				{{/if}}
				<!--  Organization Identification Number -->
				{{#if product.RegisteredDetail.OrganizationIdentificationNumberDetail.0.OrganizationIdentificationNumber}}
					<li>
						<div class=\'dnb-company-label\'>
							{{str "LBL_DNB_ORGANIZATION_IDENTIFICATION_NUMBER"}}
						</div>
						<div class=\'txt import-data\'>
							{{this.product.RegisteredDetail.OrganizationIdentificationNumberDetail.0.OrganizationIdentificationNumber}}
						</div>
					</li>
				{{/if}}
				<!-- Filling Organization Name -->
				{{#if product.RegisteredDetail.OrganizationIdentificationNumberDetail.0.FilingOrganizationName}}
					<li>
						<div class=\'dnb-company-label\'>
							{{str "LBL_DNB_ORGANIZATION_FILLING_NAME"}}
						</div>
						<div class=\'txt import-data\'>
							{{this.product.RegisteredDetail.OrganizationIdentificationNumberDetail.0.FilingOrganizationName}}
						</div>
					</li>
				{{/if}}
				<!-- Stock Exchange Ticker Name-->
				{{#if product.RegisteredDetail.StockExchangeDetails.1.StockExchangeTickerName}}
					<li>
						<div class=\'dnb-company-label\'>
							{{str "LBL_DNB_STOCK_EXCHANGE_TICKER_NAME"}}
						</div>
						<div class=\'txt import-data\'>
							{{this.product.RegisteredDetail.StockExchangeDetails.1.StockExchangeTickerName}}
						</div>
					</li>
				{{/if}}
				<!-- Line of Business Description -->
				{{#if product.ActivitiesAndOperations.LineOfBusinessDetails.0.LineOfBusinessDescription.$}}
					<li>
						<div class=\'dnb-company-label\'>
							{{str "LBL_DNB_LINE_OF_BUSINESS_DESCRIPTION"}}
						</div>
						<div class=\'txt import-data\'>
							{{this.product.ActivitiesAndOperations.LineOfBusinessDetails.0.LineOfBusinessDescription.$}}
						</div>
					</li>
				{{/if}}
				<!-- Import Indicator-->
				{{#if product.ActivitiesAndOperations.ImportDetails.ImportIndicator}}
					<li>
						<div class=\'dnb-company-label\'>
							{{str "LBL_DNB_IMPORT_DETAILS_INDICATOR"}}
						</div>
						<div class=\'txt import-data\'>
							{{this.product.ActivitiesAndOperations.ImportDetails.ImportIndicator}}
						</div>
					</li>
				{{/if}}
				<!-- Export Indicator-->
				{{#if product.ActivitiesAndOperations.ExportDetails.ExportIndicator}}
					<li>
						<div class=\'dnb-company-label\'>
							{{str "LBL_DNB_EXPORT_DETAILS_INDICATOR"}}
						</div>
						<div class=\'txt import-data\'>
							{{this.product.ActivitiesAndOperations.ExportDetails.ExportIndicator}}
						</div>
					</li>
				{{/if}}
				<!-- Agent Indicator-->
				{{#if product.ActivitiesAndOperations.SubjectIsAgentDetails.AgentIndicator}}
					<li>
						<div class=\'dnb-company-label\'>
							{{str "LBL_DNB_SUBAGENT_INDICATOR"}}
						</div>
						<div class=\'txt import-data\'>
							{{this.product.ActivitiesAndOperations.SubjectIsAgentDetails.AgentIndicator}}
						</div>
					</li>
				{{/if}}
				<!-- Total Employee Quantity-->
				{{#if product.EmployeeFigures.IndividualEntityEmployeeDetails.TotalEmployeeQuantity}}
					<li>
						<div class=\'dnb-company-label\'>
							{{str "LBL_DNB_TOTAL_EMPLOYEE_QUANTITY"}}
						</div>
						<div class=\'txt import-data\'>
							{{this.product.EmployeeFigures.IndividualEntityEmployeeDetails.TotalEmployeeQuantity}}
						</div>
					</li>
				{{/if}}
				<!-- Current Principal-->
				{{#if product.PrincipalsAndManagement.CurrentPrincipal}}
					{{#each product.PrincipalsAndManagement.CurrentPrincipal}}
						<li>
							<div class=\'dnb-company-label\'>
								<i class="icon-user"></i>
								{{#if this.JobTitle.0.JobTitleText.$}}
									{{this.JobTitle.0.JobTitleText.$}}
								{{else}}
									{{str "LBL_DNB_ASSOCIATE"}}
								{{/if}}
							</div>
							<div class=\'txt import-data\'>
								{{this.PrincipalName.FullName}}
							</div>
						</li>
					{{/each}}
				{{/if}}
				<!-- Most Senior Principal-->
				{{#if product.PrincipalsAndManagement.MostSeniorPrincipal}}
					<li>
						<div class=\'dnb-company-label\'>
							<i class="icon-user"></i>
							{{#if product.PrincipalsAndManagement.MostSeniorPrincipal.JobTitle.0.JobTitleText.$}}
								{{product.PrincipalsAndManagement.MostSeniorPrincipal.JobTitle.0.JobTitleText.$}}
							{{else}}
								{{str "LBL_DNB_ASSOCIATE"}}
							{{/if}}
							<span class="label label-important pull-right" data-placement="right">{{str "LBL_DNB_SENIOR_PRINCIPAL"}}</span>
						</div>
						<div class=\'txt import-data\'>
							{{product.PrincipalsAndManagement.MostSeniorPrincipal.PrincipalName.FullName}}
						</div>
					</li>
				{{/if}}
				<!-- Third Party Assessment-->
				{{#if product.ThirdPartyAssessment.ThirdPartyAssessment}}
					{{#each product.ThirdPartyAssessment.ThirdPartyAssessment}}
						<li>
							<div class=\'dnb-company-label\'>
								{{str "LBL_DNB_RATING"}}
							</div>
							<div class=\'txt import-data\'>
								{{this.AssessmentTypeValue}}&nbsp;&nbsp;:&nbsp;&nbsp;{{this.AssessmentValue}}
							</div>
						</li>
					{{/each}}
				{{/if}}
				<!-- Small Business Indicator -->
				{{#if product.SocioEconomicIdentification.SmallBusinessIndicator}}
					<li>
						<div class=\'dnb-company-label\'>
								{{str "LBL_DNB_SOCIO_INDICATOR"}}
							</div>
							<div class=\'txt import-data\'>
								{{str "LBL_DNB_SMALL_BUSINESS_INDICATOR"}}&nbsp;&nbsp;:&nbsp;&nbsp;{{product.SocioEconomicIdentification.SmallBusinessIndicator}}
							</div>
					</li>
				{{/if}}
				<!-- Ethnicity Type Text -->
				{{#if product.SocioEconomicIdentification.OwnershipEthnicity.0.EthnicityTypeText.$}}
					<li>
						<div class=\'dnb-company-label\'>
							{{str "LBL_DNB_ETHNICITY_TYPE_TEXT"}}
						</div>
						<div class=\'txt import-data\'>
							{{this.product.SocioEconomicIdentification.OwnershipEthnicity.0.EthnicityTypeText.$}}
						</div>
					</li>
				{{/if}}
				<!-- History Rating Text -->
				{{#if product.Assessment.HistoryRatingText}}
					<li>
						<div class=\'dnb-company-label\'>
								{{str "LBL_DNB_ASSESMENT"}}
							</div>
							<div class=\'txt import-data\'>
								{{str "LBL_DNB_HISTORY_RATING_TEXT"}}&nbsp;&nbsp;:&nbsp;&nbsp;{{product.Assessment.HistoryRatingText.$}}
							</div>
					</li>
				{{/if}}
				{{#if product.SubjectHeader.TransferDUNSNumberRegistration.0.TransferredFromDUNSNumber}}
					<li>
						<div class=\'dnb-company-label\'>
							{{str "LBL_DNB_TRANSFERRED_FROM_DUNS_NUMBER"}}
						</div>
						<div class=\'txt import-data\'>
							{{this.product.SubjectHeader.TransferDUNSNumberRegistration.0.TransferredFromDUNSNumber}}
						</div>
					</li>
				{{/if}}
				{{#if product.SubjectHeader.DUNSSelfRequestIndicator}}
					<li>
						<div class=\'dnb-company-label\'>
							{{str "LBL_DNB_SELF_REQUEST_INDICATOR"}}
						</div>
						<div class=\'txt import-data\'>
							{{product.SubjectHeader.DUNSSelfRequestIndicator}}
						</div>
					</li>
				{{/if}}
				{{#if product.Location.PrimaryAddress.0.PrimaryTownName}}
					<li>
						<div class=\'dnb-company-label\'>
							{{str "LBL_DNB_PRIMARY_TOWN"}}
						</div>
						<div class=\'txt import-data\'>
							{{this.product.Location.PrimaryAddress.0.PrimaryTownName}}
						</div>
					</li>
				{{/if}}
				{{#if product.Location.PrimaryAddress.0.PostalCode}}
					<li>
						<div class=\'dnb-company-label\'>
							{{str "LBL_DNB_PRIMARY_ADDRESS_POSTAL_CODE"}}
						</div>
						<div class=\'txt import-data\'>
							{{this.product.Location.PrimaryAddress.0.PostalCode}}
						</div>
					</li>
				{{/if}}
				{{#if product.Location.PrimaryAddress.0.UndeliverableIndicator}}
					<li>
						<div class=\'dnb-company-label\'>
							{{str "LBL_DNB_UNDELIVERABLE_INDICATOR"}}
						</div>
						<div class=\'txt import-data\'>
							{{this.product.Location.PrimaryAddress.0.UndeliverableIndicator}}
						</div>
					</li>
				{{/if}}
				{{#if product.Location.PrimaryAddress.0.AddressUsageTenureDetail.0.TenureTypeText.$}}
					<li>
						<div class=\'dnb-company-label\'>
							{{str "LBL_DNB_ADDRESS_TENURE_DETAILS"}}
						</div>
						<div class=\'txt import-data\'>
							{{this.product.Location.PrimaryAddress.0.AddressUsageTenureDetail.0.TenureTypeText.$}}
						</div>
					</li>
				{{/if}}
				{{#if product.Location.PrimaryAddress.0.CountryGroupName}}
					<li>
						<div class=\'dnb-company-label\'>
							{{str "LBL_DNB_COUNTRY_GROUP_NAME"}}
						</div>
						<div class=\'txt import-data\'>
							{{this.product.Location.PrimaryAddress.0.CountryGroupName}}
						</div>
					</li>
				{{/if}}
				{{#if product.Location.PrimaryAddress.0.PremisesDetail.0.PremisesAreaMeasurement}}
					<li>
						<div class=\'dnb-company-label\'>
							{{str "LBL_DNB_PREMISES_AREA_MEASUREMENT"}}
						</div>
						<div class=\'txt import-data\'>
							{{this.product.Location.PrimaryAddress.0.PremisesDetail.0.PremisesAreaMeasurement}}
						</div>
					</li>
				{{/if}}
				{{#if product.Location.PrimaryAddress.0.PremisesDetail.0.PremisesAreaMeasurementReliabilityText.$}}
					<li>
						<div class=\'dnb-company-label\'>
							{{str "LBL_DNB_MEASUREMENT_RELIABILITY_TEXT"}}
						</div>
						<div class=\'txt import-data\'>
							{{this.product.Location.PrimaryAddress.0.PremisesDetail.0.PremisesAreaMeasurementReliabilityText.$}}
						</div>
					</li>
				{{/if}}
				{{#if product.Location.PrimaryAddress.0.PremisesDetail.0.PremisesAreaMeasurementUnitText.$}}
					<li>
						<div class=\'dnb-company-label\'>
							{{str "LBL_DNB_MEASUREMENT_UNIT_TEXT"}}
						</div>
						<div class=\'txt import-data\'>
							{{this.product.Location.PrimaryAddress.0.PremisesDetail.0.PremisesAreaMeasurementUnitText.$}}
						</div>
					</li>
				{{/if}}
				{{#if product.Location.PrimaryAddress.0.LatitudeMeasurement}}
					<li>
						<div class=\'dnb-company-label\'>
							{{str "LBL_DNB_LATITUDE_MEASUREMENT"}}
						</div>
						<div class=\'txt import-data\'>
							{{this.product.Location.PrimaryAddress.0.LatitudeMeasurement}}
						</div>
					</li>
				{{/if}}
				{{#if product.Location.PrimaryAddress.0.LongitudeMeasurement}}
					<li>
						<div class=\'dnb-company-label\'>
							{{str "LBL_DNB_LONGITUDE_MEASUREMENT"}}
						</div>
						<div class=\'txt import-data\'>
							{{this.product.Location.PrimaryAddress.0.LongitudeMeasurement}}
						</div>
					</li>
				{{/if}}
				{{#if product.Telecommunication.WebPageAddress.0.TelecommunicationAddress}}
					<li>
						<div class=\'dnb-company-label\'>
							{{str "LBL_DNB_WEBPAGE_ADDRESS"}}
						</div>
						<div class=\'txt import-data\'>
							{{this.product.Telecommunication.WebPageAddress.0.TelecommunicationAddress}}
						</div>
					</li>
				{{/if}}
				{{#if productName.OrganizationPrimaryName.0.OrganizationName.$}}
					<li>
						<div class=\'dnb-company-label\'>
							{{str "LBL_DNB_ORGANIZATION_NAME"}}
						</div>
						<div class=\'txt import-data\'>
							{{this.productName.OrganizationPrimaryName.0.OrganizationName.$}}
						</div>
					</li>
				{{/if}}
				{{#if productName.TradeStyleName.0.OrganizationName.$}}
					<li>
						<div class=\'dnb-company-label\'>
							{{str "LBL_DNB_TRADE_STYLE_NAME"}}
						</div>
						<div class=\'txt import-data\'>
							{{this.productName.TradeStyleName.0.OrganizationName.$}}
						</div>
					</li>
				{{/if}}
				{{#if productDetail.FamilyTreeMemberRole.0.FamilyTreeMemberRoleText.$}}
					<li>
						<div class=\'dnb-company-label\'>
							{{str "LBL_DNB_FAMILY_TREE_MEMBER_ROLE_TEXT"}}
						</div>
						<div class=\'txt import-data\'>
							{{this.productDetail.FamilyTreeMemberRole.0.FamilyTreeMemberRoleText.$}}
						</div>
					</li>
				{{/if}}
				{{#if productDetail.StandaloneOrganizationIndicator}}
					<li>
						<div class=\'dnb-company-label\'>
							{{str "LBL_DNB_STAND_ALONE_ORGANIZATION_INDICATOR"}}
						</div>
						<div class=\'txt import-data\'>
							{{this.productDetail.StandaloneOrganizationIndicator}}
						</div>
					</li>
				{{/if}}
				{{#if productDetail.ControlOwnershipDate.$}}
					<li>
						<div class=\'dnb-company-label\'>
							{{str "LBL_DNB_CONTROL_OWNERSHIP_DATE"}}
						</div>
						<div class=\'txt import-data\'>
							{{this.productDetail.ControlOwnershipDate.$}}
						</div>
					</li>
				{{/if}}
				{{#if productDetail.ControlOwnershipTypeText.$}}
					<li>
						<div class=\'dnb-company-label\'>
							{{str "LBL_DNB_CONTROL_OWNERSHIP_TYPE_TEXT"}}
						</div>
						<div class=\'txt import-data\'>
							{{this.productDetail.ControlOwnershipTypeText.$}}
						</div>
					</li>
				{{/if}}
				{{#if productDetail.OperatingStatusText.$}}
					<li>
						<div class=\'dnb-company-label\'>
							{{str "LBL_DNB_OPERATING_STATUS_TEXT"}}
						</div>
						<div class=\'txt import-data\'>
							{{this.productDetail.OperatingStatusText.$}}
						</div>
					</li>
				{{/if}}
				{{#if productDetail.OrganizationStartYear}}
					<li>
						<div class=\'dnb-company-label\'>
							{{str "LBL_DNB_ORGANIZATION_START_DATE"}}
						</div>
						<div class=\'txt import-data\'>
							{{this.productDetail.OrganizationStartYear}}
						</div>
					</li>
				{{/if}}
				{{#if product.RegisteredDetail.OrganizationIdentificationNumberDetail.0.RegistrationLocation.PrimaryAddress.0.PrimaryTownName}}
					<li>
						<div class=\'dnb-company-label\'>
							{{str "LBL_DNB_PRIMARY_TOWN_NAME"}}
						</div>
						<div class=\'txt import-data\'>
							{{this.product.RegisteredDetail.OrganizationIdentificationNumberDetail.0.RegistrationLocation.PrimaryAddress.0.PrimaryTownName}}
						</div>
					</li>
				{{/if}}
				{{#if product.RegisteredDetail.OrganizationIdentificationNumberDetail.0.RegistrationLocation.PrimaryAddress.0.PostalCode}}
					<li>
						<div class=\'dnb-company-label\'>
							{{str "LBL_DNB_REGISTRATION_LOCATION_POSTAL_CODE"}}
						</div>
						<div class=\'txt import-data\'>
							{{this.product.RegisteredDetail.OrganizationIdentificationNumberDetail.0.RegistrationLocation.PrimaryAddress.0.PostalCode}}
						</div>
					</li>
				{{/if}}
				{{#if product.RegisteredDetail.OrganizationIdentificationNumberDetail.0.RegistrationIssuerName}}
					<li>
						<div class=\'dnb-company-label\'>
							{{str "LBL_DNB_REGISTRATION_ISSUER_NAME"}}
						</div>
						<div class=\'txt import-data\'>
							{{this.product.RegisteredDetail.OrganizationIdentificationNumberDetail.0.RegistrationIssuerName}}
						</div>
					</li>
				{{/if}}
				{{#if product.RegisteredDetail.StockExchangeDetails.1.StockExchangeName.$}}
					<li>
						<div class=\'dnb-company-label\'>
							{{str "LBL_DNB_STOCK_EXCHANGE_NAME"}}
						</div>
						<div class=\'txt import-data\'>
							{{this.product.RegisteredDetail.StockExchangeDetails.1.StockExchangeName.$}}
						</div>
					</li>
				{{/if}}
				{{#if product.SocioEconomicIdentification.MinorityOwnedIndicator}}
					<li>
						<div class=\'dnb-company-label\'>
								{{str "LBL_DNB_SOCIO_INDICATOR"}}
							</div>
							<div class=\'txt import-data\'>
								{{str "LBL_DNB_MINORITY_OWNER_INDICATOR"}}&nbsp;&nbsp;:&nbsp;&nbsp;{{product.SocioEconomicIdentification.MinorityOwnedIndicator}}
							</div>
					</li>
				{{/if}}
				{{#if product.Assessment.CommercialCreditScore}}
					<li>
						<div class=\'dnb-company-label\'>
								{{str "LBL_DNB_HISTORY_RATING_TEXT"}}
							</div>
							<div class=\'txt import-data\'>
								{{str "LBL_DNB_RISK_CLASS"}}&nbsp;&nbsp;:&nbsp;&nbsp;{{product.Assessment.CommercialCreditScore.0.MarketingRiskClassText.$}}
							</div>
					</li>
				{{/if}}

			</ul>
		</div>
		<div class="dnb-show-more">
	        <a class="showMoreData more">{{str "LBL_DNB_SHOW_MORE"}} <i class="icon-chevron-down"></i></a>
	        <a class="showLessData less">{{str "LBL_DNB_SHOW_LESS"}} <i class="icon-chevron-up"></i></a>
	    </div>
	{{else}}
		 <aside class=\'create-no-data\'>
            {{#if errmsg}}
                <em>{{errmsg}}</em>
            {{else}}
                <em>{{str "LBL_DNB_NO_DATA"}}</em>
            {{/if}}
        </aside>
	{{/if}}
</div>',
        'dnb-premium-no-duns' => '
<div id="dnb-no-duns" class="block-footer">
    <aside>
        <em>{{str "LBL_DNB_NO_DUNS"}}</em>
    </aside>
</div>',
      ),
      'meta' => 
      array (
        'dashlets' => 
        array (
          0 => 
          array (
            'label' => 'LBL_DNB_PREMIUM_COMPANY_INFO',
            'description' => 'LBL_DNB_PREMIUM_COMPANY_INFO_DESC',
            'filter' => 
            array (
              'module' => 
              array (
                0 => 'Accounts',
              ),
              'view' => 'record',
            ),
            'config' => 
            array (
              'compname' => '1',
              'tradename' => '1',
              'locationtype' => '1',
              'cntrowndate' => '1',
              'cntrowntype' => '1',
              'operstatus' => '1',
              'boneyardind' => '1',
              'orgstartyear' => '1',
              'francoper' => '1',
              'primaddrstreet' => '1',
              'primaddrcity' => '1',
              'primaddrstateabbr' => '1',
              'primaddrstate' => '1',
              'primaddrctrycd' => '1',
              'primaddrctrygrp' => '1',
              'primaddrzip' => '1',
              'primaddrcountyname' => '1',
              'uscensuscd' => '1',
              'mailingaddrstreet' => '1',
              'mailingaddrcity' => '1',
              'mailingaddrstateabbr' => '1',
              'mailingaddrzip' => '1',
              'mailingaddrctrycd' => '1',
              'long' => '1',
              'lat' => '1',
              'phone' => '1',
              'fax' => '1',
              'webpage' => '1',
              'indempcnt' => '1',
              'conempcnt' => '1',
              'empdet' => '1',
              'lob' => '1',
              'impind' => '1',
              'expind' => '1',
              'agentind' => '1',
              'opertext' => '1',
              'histrat' => '1',
              'ccs' => '1',
              'uspatriskscr' => '1',
              'tpa' => '1',
              'minind' => '1',
              'smbind' => '1',
              'ethn' => '1',
              'femind' => '1',
              'smbdisadv' => '1',
              'alasnat' => '1',
              'smbcert' => '1',
              'mincoll' => '1',
              'disab' => '1',
              'svcdisabvet' => '1',
              'vietvet' => '1',
              'airprtdisadvent' => '1',
              'disabvetent' => '1',
              'disadvent' => '1',
              'disadvvetent' => '1',
              'minent' => '1',
              'fement' => '1',
              'hubcrt' => '1',
              'eightacrt' => '1',
              'vet_ind' => '1',
              'lsind' => '1',
              'vetent' => '1',
              'inqcnt' => '1',
              'transferdunsnbr' => '1',
              'lastupddate' => '1',
              'marketind' => '1',
              'dunsselfind' => '1',
              'nonmarkreastxt' => '1',
              'indcodes' => '1',
            ),
            'preview' => 
            array (
              'compname' => '1',
              'tradename' => '1',
              'locationtype' => '1',
              'cntrowndate' => '1',
              'cntrowntype' => '1',
              'operstatus' => '1',
              'boneyardind' => '1',
              'orgstartyear' => '1',
              'francoper' => '1',
              'primaddrstreet' => '1',
              'primaddrcity' => '1',
              'primaddrstateabbr' => '1',
              'primaddrstate' => '1',
              'primaddrctrycd' => '1',
              'primaddrctrygrp' => '1',
              'primaddrzip' => '1',
              'primaddrcountyname' => '1',
              'uscensuscd' => '1',
              'mailingaddrstreet' => '1',
              'mailingaddrcity' => '1',
              'mailingaddrstateabbr' => '1',
              'mailingaddrzip' => '1',
              'mailingaddrctrycd' => '1',
              'long' => '1',
              'lat' => '1',
              'phone' => '1',
              'fax' => '1',
              'webpage' => '1',
              'indempcnt' => '1',
              'conempcnt' => '1',
              'empdet' => '1',
              'lob' => '1',
              'impind' => '1',
              'expind' => '1',
              'agentind' => '1',
              'opertext' => '1',
              'histrat' => '1',
              'ccs' => '1',
              'uspatriskscr' => '1',
              'tpa' => '1',
              'minind' => '1',
              'smbind' => '1',
              'ethn' => '1',
              'femind' => '1',
              'smbdisadv' => '1',
              'alasnat' => '1',
              'smbcert' => '1',
              'mincoll' => '1',
              'disab' => '1',
              'svcdisabvet' => '1',
              'vietvet' => '1',
              'airprtdisadvent' => '1',
              'disabvetent' => '1',
              'disadvent' => '1',
              'disadvvetent' => '1',
              'minent' => '1',
              'fement' => '1',
              'hubcrt' => '1',
              'eightacrt' => '1',
              'vet_ind' => '1',
              'lsind' => '1',
              'vetent' => '1',
              'inqcnt' => '1',
              'transferdunsnbr' => '1',
              'lastupddate' => '1',
              'marketind' => '1',
              'dunsselfind' => '1',
              'nonmarkreastxt' => '1',
              'indcodes' => '1',
            ),
          ),
        ),
        'custom_toolbar' => 
        array (
          'buttons' => 
          array (
            0 => 
            array (
              'dropdown_buttons' => 
              array (
                0 => 
                array (
                  'type' => 'dashletaction',
                  'action' => 'editClicked',
                  'label' => 'LBL_DASHLET_CONFIG_EDIT_LABEL',
                ),
                1 => 
                array (
                  'type' => 'dashletaction',
                  'action' => 'refreshClicked',
                  'label' => 'LBL_DASHLET_REFRESH_LABEL',
                ),
                2 => 
                array (
                  'type' => 'dashletaction',
                  'action' => 'removeClicked',
                  'label' => 'LBL_DASHLET_REMOVE_LABEL',
                ),
              ),
            ),
            1 => 
            array (
              'type' => 'dashletaction',
              'css_class' => 'dashlet-toggle btn btn-invisible minify',
              'icon' => 'icon-chevron-down',
              'action' => 'toggleMinify',
              'tooltip' => 'LBL_DASHLET_MAXIMIZE',
            ),
          ),
        ),
        'config' => 
        array (
          'fields' => 
          array (
            0 => 
            array (
              'name' => 'compname',
              'label' => 'LBL_DNB_PRIM_NAME',
              'desc' => 'LBL_DNB_PRIM_NAME_DESC',
              'header' => 'LBL_DNB_ORG_NAME',
              'header_desc' => 'LBL_DNB_ORG_NAME_DESC',
              'type' => 'bool',
            ),
            1 => 
            array (
              'name' => 'tradename',
              'label' => 'LBL_DNB_TRD_NAME',
              'desc' => 'LBL_DNB_TRD_NAME_DESC',
              'last' => '1',
              'type' => 'bool',
            ),
            2 => 
            array (
              'name' => 'locationtype',
              'label' => 'LBL_DNB_LOCATION_TYPE',
              'desc' => 'LBL_DNB_LOCATION_TYPE_DESC',
              'header' => 'LBL_DNB_ORG_DET',
              'header_desc' => 'LBL_DNB_ORG_DET_DESC',
              'type' => 'bool',
            ),
            3 => 
            array (
              'name' => 'cntrowndate',
              'label' => 'LBL_DNB_CNTRL_OWN_DATE',
              'desc' => 'LBL_DNB_CNTRL_OWN_DATE_DESC',
              'type' => 'bool',
            ),
            4 => 
            array (
              'name' => 'cntrowntype',
              'label' => 'LBL_DNB_CNTRL_TYP_TEXT',
              'desc' => 'LBL_DNB_CNTRL_TYP_TEXT_DESC',
              'type' => 'bool',
            ),
            5 => 
            array (
              'name' => 'operstatus',
              'label' => 'LBL_DNB_OPERL_STA_TEXT',
              'desc' => 'LBL_DNB_OPERL_STA_TEXT_DESC',
              'type' => 'bool',
            ),
            6 => 
            array (
              'name' => 'boneyardind',
              'label' => 'LBL_DNB_BONE_ORG_IND',
              'desc' => 'LBL_DNB_BONE_ORG_IND_DESC',
              'type' => 'bool',
            ),
            7 => 
            array (
              'name' => 'orgstartyear',
              'label' => 'LBL_DNB_ORGS_STRT_YEAR',
              'desc' => 'LBL_DNB_ORGS_STRT_YEAR_DESC',
              'type' => 'bool',
            ),
            8 => 
            array (
              'name' => 'francoper',
              'label' => 'LBL_DNB_FRAN_TYP_TEXT',
              'desc' => 'LBL_DNB_FRAN_TYP_TEXT_DESC',
              'last' => '1',
              'type' => 'bool',
            ),
            9 => 
            array (
              'name' => 'primaddrstreet',
              'label' => 'LBL_DNB_PRIM_STREET',
              'desc' => 'LBL_DNB_PRIM_STREET_DESC',
              'header' => 'LBL_DNB_LOC',
              'header_desc' => 'LBL_DNB_LOC_DESC',
              'type' => 'bool',
            ),
            10 => 
            array (
              'name' => 'primaddrcity',
              'label' => 'LBL_DNB_PRIM_CITY',
              'desc' => 'LBL_DNB_PRIM_CITY_DESC',
              'type' => 'bool',
            ),
            11 => 
            array (
              'name' => 'primaddrstateabbr',
              'label' => 'LBL_DNB_PRIM_STATE_ABBR',
              'desc' => 'LBL_DNB_PRIM_STATE_ABBR_DESC',
              'type' => 'bool',
            ),
            12 => 
            array (
              'name' => 'primaddrstate',
              'label' => 'LBL_DNB_PRIM_STATE',
              'desc' => 'LBL_DNB_PRIM_STATE_DESC',
              'type' => 'bool',
            ),
            13 => 
            array (
              'name' => 'primaddrctrycd',
              'label' => 'LBL_DNB_PRIM_CTRY_CD',
              'desc' => 'LBL_DNB_PRIM_CTRY_CD_DESC',
              'type' => 'bool',
            ),
            14 => 
            array (
              'name' => 'primaddrctrygrp',
              'label' => 'LBL_DNB_PRIM_CTRY_GRP',
              'desc' => 'LBL_DNB_PRIM_CTRY_GRP_DESC',
              'type' => 'bool',
            ),
            15 => 
            array (
              'name' => 'primaddrzip',
              'label' => 'LBL_DNB_PRIM_ZIP',
              'desc' => 'LBL_DNB_PRIM_ZIP_DESC',
              'type' => 'bool',
            ),
            16 => 
            array (
              'name' => 'primaddrcountyname',
              'label' => 'LBL_DNB_PRIM_COUNTY_NAME',
              'desc' => 'LBL_DNB_PRIM_COUNTY_NAME_DESC',
              'type' => 'bool',
            ),
            17 => 
            array (
              'name' => 'uscensuscd',
              'label' => 'LBL_DNB_PRIM_CEN_CD',
              'desc' => 'LBL_DNB_PRIM_CEN_CD_DESC',
              'type' => 'bool',
            ),
            18 => 
            array (
              'name' => 'mailingaddrstreet',
              'label' => 'LBL_DNB_MAIL_STREET',
              'desc' => 'LBL_DNB_PRIM_STREET_DESC',
              'type' => 'bool',
            ),
            19 => 
            array (
              'name' => 'mailingaddrcity',
              'label' => 'LBL_DNB_MAIL_CITY',
              'desc' => 'LBL_DNB_PRIM_CITY_DESC',
              'type' => 'bool',
            ),
            20 => 
            array (
              'name' => 'mailingaddrstateabbr',
              'label' => 'LBL_DNB_MAIL_STATE_ABBR',
              'desc' => 'LBL_DNB_PRIM_STATE_ABBR_DESC',
              'type' => 'bool',
            ),
            21 => 
            array (
              'name' => 'mailingaddrzip',
              'label' => 'LBL_DNB_MAIL_ZIP',
              'desc' => 'LBL_DNB_PRIM_ZIP_DESC',
              'type' => 'bool',
            ),
            22 => 
            array (
              'name' => 'mailingaddrctrycd',
              'label' => 'LBL_DNB_MAIL_CTRY_CD',
              'desc' => 'LBL_DNB_PRIM_CTRY_CD_DESC',
              'type' => 'bool',
            ),
            23 => 
            array (
              'name' => 'long',
              'label' => 'LBL_DNB_LAT',
              'desc' => 'LBL_DNB_LAT_DESC',
              'type' => 'bool',
            ),
            24 => 
            array (
              'name' => 'lat',
              'label' => 'LBL_DNB_LONG',
              'desc' => 'LBL_DNB_LONG_DESC',
              'last' => '1',
              'type' => 'bool',
            ),
            25 => 
            array (
              'name' => 'phone',
              'label' => 'LBL_DNB_PHONE',
              'desc' => 'LBL_DNB_PHONE_DESC',
              'header' => 'LBL_DNB_TELECOMM',
              'header_desc' => 'LBL_DNB_TELECOMM_DESC',
              'type' => 'bool',
            ),
            26 => 
            array (
              'name' => 'fax',
              'label' => 'LBL_DNB_FAX',
              'desc' => 'LBL_DNB_FAX_DESC',
              'type' => 'bool',
            ),
            27 => 
            array (
              'name' => 'webpage',
              'label' => 'LBL_DNB_WEBPAGE',
              'desc' => 'LBL_DNB_WEBPAGE_DESC',
              'last' => '1',
              'type' => 'bool',
            ),
            28 => 
            array (
              'name' => 'indempcnt',
              'label' => 'LBL_DNB_IND_EMP_CNT',
              'desc' => 'LBL_DNB_IND_EMP_CNT_DESC',
              'header' => 'LBL_DNB_EMP_INF',
              'header_desc' => 'LBL_DNB_EMP_INF_DESC',
              'type' => 'bool',
            ),
            29 => 
            array (
              'name' => 'conempcnt',
              'label' => 'LBL_DNB_CON_EMP_CNT',
              'desc' => 'LBL_DNB_CON_EMP_CNT_DESC',
              'type' => 'bool',
            ),
            30 => 
            array (
              'name' => 'empdet',
              'label' => 'LBL_DNB_EMP_DET',
              'desc' => 'LBL_DNB_EMP_DET_DESC',
              'last' => '1',
              'type' => 'bool',
            ),
            31 => 
            array (
              'name' => 'lob',
              'label' => 'LBL_DNB_LOB',
              'desc' => 'LBL_DNB_LOB_DESC',
              'header' => 'LBL_DNB_ACT_OPER',
              'header_desc' => 'LBL_DNB_ACT_OPER_DESC',
              'type' => 'bool',
            ),
            32 => 
            array (
              'name' => 'impind',
              'label' => 'LBL_DNB_IMP_IND',
              'desc' => 'LBL_DNB_IMP_IND_DESC',
              'type' => 'bool',
            ),
            33 => 
            array (
              'name' => 'expind',
              'label' => 'LBL_DNB_EXP_IND',
              'desc' => 'LBL_DNB_EXP_IND_DESC',
              'type' => 'bool',
            ),
            34 => 
            array (
              'name' => 'agentind',
              'label' => 'LBL_DNB_AGENT_IND',
              'desc' => 'LBL_DNB_AGENT_IND_DESC',
              'type' => 'bool',
            ),
            35 => 
            array (
              'name' => 'opertext',
              'label' => 'LBL_DNB_OPER_TEXT',
              'desc' => 'LBL_DNB_OPER_TEXT_DESC',
              'last' => '1',
              'type' => 'bool',
            ),
            36 => 
            array (
              'name' => 'histrat',
              'label' => 'LBL_DNB_HIST_RAT',
              'desc' => 'LBL_DNB_HIST_RAT_DESC',
              'header' => 'LBL_DNB_ASSESMENT',
              'header_desc' => 'LBL_DNB_ASSESMENT_DESC',
              'type' => 'bool',
            ),
            37 => 
            array (
              'name' => 'ccs',
              'label' => 'LBL_DNB_CCS',
              'desc' => 'LBL_DNB_CCS_DESC',
              'type' => 'bool',
            ),
            38 => 
            array (
              'name' => 'uspatriskscr',
              'label' => 'LBL_DNB_USPAT_SCR',
              'desc' => 'LBL_DNB_USPAT_SCR_DESC',
              'type' => 'bool',
            ),
            39 => 
            array (
              'name' => 'tpa',
              'label' => 'LBL_DNB_TPA',
              'desc' => 'LBL_DNB_TPA_DESC',
              'last' => '1',
              'type' => 'bool',
            ),
            40 => 
            array (
              'name' => 'minind',
              'label' => 'LBL_DNB_MIN_IND',
              'desc' => 'LBL_DNB_MIN_IND_DESC',
              'header' => 'LBL_DNB_SOCIO_IND',
              'header_desc' => 'LBL_DNB_SOCIO_IND_DESC',
              'type' => 'bool',
            ),
            41 => 
            array (
              'name' => 'smbind',
              'label' => 'LBL_DNB_SMB_IND',
              'desc' => 'LBL_DNB_SMB_IND_DESC',
              'type' => 'bool',
            ),
            42 => 
            array (
              'name' => 'ethn',
              'label' => 'LBL_DNB_ETHN',
              'desc' => 'LBL_DNB_ETHN_DESC',
              'type' => 'bool',
            ),
            43 => 
            array (
              'name' => 'femind',
              'label' => 'LBL_DNB_FEM_IND',
              'desc' => 'LBL_DNB_FEM_IND_DESC',
              'type' => 'bool',
            ),
            44 => 
            array (
              'name' => 'smbdisadv',
              'label' => 'LBL_DNB_SMBDISADV_IND',
              'desc' => 'LBL_DNB_SMBDISADV_IND_DESC',
              'type' => 'bool',
            ),
            45 => 
            array (
              'name' => 'alasnat',
              'label' => 'LBL_DNB_ALASNAT_IND',
              'desc' => 'LBL_DNB_ALASNAT_IND_DESC',
              'type' => 'bool',
            ),
            46 => 
            array (
              'name' => 'smbcert',
              'label' => 'LBL_DNB_SMB_CERT',
              'desc' => 'LBL_DNB_SMB_CERT_DESC',
              'type' => 'bool',
            ),
            47 => 
            array (
              'name' => 'mincoll',
              'label' => 'LBL_DNB_MIN_COLL',
              'desc' => 'LBL_DNB_MIN_COLL_DESC',
              'type' => 'bool',
            ),
            48 => 
            array (
              'name' => 'disab',
              'label' => 'LBL_DNB_DISAB_IND',
              'desc' => 'LBL_DNB_DISAB_IND_DESC',
              'type' => 'bool',
            ),
            49 => 
            array (
              'name' => 'svcdisabvet',
              'label' => 'LBL_DNB_SVC_DISAB_VET',
              'desc' => 'LBL_DNB_SVC_DISAB_VET_DESC',
              'type' => 'bool',
            ),
            50 => 
            array (
              'name' => 'vietvet',
              'label' => 'LBL_DNB_VIET_VET',
              'desc' => 'LBL_DNB_VIET_VET_DESC',
              'type' => 'bool',
            ),
            51 => 
            array (
              'name' => 'airprtdisadvent',
              'label' => 'LBL_DNB_AIRPRT_DISADV_ENT',
              'desc' => 'LBL_DNB_AIRPRT_DISADV_ENT_DESC',
              'type' => 'bool',
            ),
            52 => 
            array (
              'name' => 'disabvetent',
              'label' => 'LBL_DNB_DISAB_VET_ENT',
              'desc' => 'LBL_DNB_DISAB_VET_ENT_DESC',
              'type' => 'bool',
            ),
            53 => 
            array (
              'name' => 'disadvent',
              'label' => 'LBL_DNB_DISADV_ENT',
              'desc' => 'LBL_DNB_DISADV_ENT_DESC',
              'type' => 'bool',
            ),
            54 => 
            array (
              'name' => 'disadvvetent',
              'label' => 'LBL_DNB_DISADV_VET_ENT',
              'desc' => 'LBL_DNB_DISADV_VET_ENT_DESC',
              'type' => 'bool',
            ),
            55 => 
            array (
              'name' => 'minent',
              'label' => 'LBL_DNB_MIN_ENT',
              'desc' => 'LBL_DNB_MIN_ENT_DESC',
              'type' => 'bool',
            ),
            56 => 
            array (
              'name' => 'fement',
              'label' => 'LBL_DNB_FEM_ENT',
              'desc' => 'LBL_DNB_FEM_ENT_DESC',
              'type' => 'bool',
            ),
            57 => 
            array (
              'name' => 'hubcrt',
              'label' => 'LBL_DNB_HUB_CRT',
              'desc' => 'LBL_DNB_HUB_CRT_DESC',
              'type' => 'bool',
            ),
            58 => 
            array (
              'name' => 'eightacrt',
              'label' => 'LBL_DNB_EIGHTA_CRT',
              'desc' => 'LBL_DNB_EIGHTA_CRT_DESC',
              'type' => 'bool',
            ),
            59 => 
            array (
              'name' => 'vet_ind',
              'label' => 'LBL_DNB_VET_IND',
              'desc' => 'LBL_DNB_VET_IND_DESC',
              'type' => 'bool',
            ),
            60 => 
            array (
              'name' => 'lsind',
              'label' => 'LBL_DNB_LS_IND',
              'desc' => 'LBL_DNB_LS_IND_DESC',
              'type' => 'bool',
            ),
            61 => 
            array (
              'name' => 'vetent',
              'label' => 'LBL_DNB_VET_ENT',
              'desc' => 'LBL_DNB_VET_ENT_DESC',
              'last' => '1',
              'type' => 'bool',
            ),
            62 => 
            array (
              'name' => 'inqcnt',
              'label' => 'LBL_DNB_INQ_CNT',
              'desc' => 'LBL_DNB_INQ_CNT_DESC',
              'header' => 'LBL_DNB_SUBJ_HEADER',
              'header_desc' => 'LBL_DNB_SUBJ_HEADER_DESC',
              'type' => 'bool',
            ),
            63 => 
            array (
              'name' => 'transferdunsnbr',
              'label' => 'LBL_DNB_TRNS_DUNS',
              'desc' => 'LBL_DNB_TRNS_DUNS_DESC',
              'type' => 'bool',
            ),
            64 => 
            array (
              'name' => 'lastupddate',
              'label' => 'LBL_DNB_LAST_UPD_DATE',
              'desc' => 'LBL_DNB_LAST_UPD_DATE_DESC',
              'type' => 'bool',
            ),
            65 => 
            array (
              'name' => 'marketind',
              'label' => 'LBL_DNB_MARKET_IND',
              'desc' => 'LBL_DNB_MARKET_IND_DESC',
              'type' => 'bool',
            ),
            66 => 
            array (
              'name' => 'dunsselfind',
              'label' => 'LBL_DNB_DUNSSELF_IND',
              'desc' => 'LBL_DNB_DUNSSELF_IND_DESC',
              'type' => 'bool',
            ),
            67 => 
            array (
              'name' => 'nonmarkreastxt',
              'label' => 'LBL_DNB_NONMARK_REAS_TXT',
              'desc' => 'LBL_DNB_NONMARK_REAS_TXT_DESC',
              'last' => '1',
              'type' => 'bool',
            ),
            68 => 
            array (
              'name' => 'indcodes',
              'label' => 'LBL_DNB_IND_CD',
              'desc' => 'LBL_DNB_IND_CD_DESC',
              'header' => 'LBL_DNB_IND_CD_HED',
              'header_desc' => 'LBL_DNB_IND_CD_HED_DESC',
              'last' => '1',
              'type' => 'bool',
            ),
          ),
        ),
      ),
    ),
    'dnb-standard-company-info' => 
    array (
      'templates' => 
      array (
        'dashlet-config' => '
<div class="record">
    <div class="accordian" id="dnb_std_config">
        {{#each dashletConfig.config.fields}}
            {{#if header}}
                <div class="accordion-group">
                    <div class="accordion-heading">
                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#dnb_std_config" href="#dnb_config_{{@index}}">
                            {{str header}}
                        </a>
                    </div>
                <div id="dnb_config_{{@index}}" class="accordion-body collapse">
                    <div class="accordion-inner">
                        <p>{{str header_desc}}</p>
                    <table class="table">
            {{/if}}
            <tr>
                <td>
                    {{field ../this model=../this.settings template=../this.action}}
                </td>
                <td>
                    {{str label}}
                </td>
                <td>
                    {{str desc}}
                </td>
            </tr>
            {{#if last}}
                            </table>
                        </div>
                    </div>
                </div>
            {{/if}}
        {{/each}}
        </table>
    </div>
</div>
',
        'dnb-desc' => '
<div id="dnb-no-data" class="block-footer">
    <aside>
        <em>{{str "LBL_DNB_STD_COMPANY_INFO_DESC"}}</em>
    </aside>
</div>',
        'dnb-standard-company-info' => '
<div id="dnb-std-company-detail-loading" class="block-footer">
	{{str "LBL_DNB_STD_COMPANY_INFO_LOADING"}}
</div>
<div id="dnb-std-company-details">
	{{#if product}}
		<div class=\'dnb-show-less\'>
			<ul class="unstyled listed">
				{{#if product.SubjectHeader.OrganizationSummaryText}}
					<li>
						<div class=\'dnb-company-label\'>
							{{str "LBL_DNB_SUMMARY"}}
						</div>
						<div class=\'txt import-data\'>
							{{{product.SubjectHeader.OrganizationSummaryText}}}
						</div>
					</li>
				{{/if}}
				{{#if product.SubjectHeader.TransferDUNSNumberRegistration.0.TransferredFromDUNSNumber}}
					<li>
						<div class="dnb-company-label">{{str "LBL_DNB_TF_DUNS"}}</div>
						<div class="txt import-data">
							{{product.SubjectHeader.TransferDUNSNumberRegistration.0.TransferredFromDUNSNumber}}
						</div>
					</li>
				{{/if}}
				{{#if product.SubjectHeader.TotalInquiriesCount}}
					<li>
						<div class="dnb-company-label">
					        {{str "LBL_DNB_TOTAL_INQUIRY_COUNT"}}
					    </div>
					    <div class="txt import-data">
					         {{product.SubjectHeader.TotalInquiriesCount}}<br/>
					    </div>
					</li>
				{{/if}}
				{{#if product.SubjectHeader.MarketabilityIndicator}}
					<li>
						<div class=\'dnb-company-label\'>{{str "LBL_DNB_MARKETABILITY_INDICATOR"}}</div>
						<div class=\'txt import-data\'>{{product.SubjectHeader.MarketabilityIndicator}}</div>
					</li>
				{{/if}}
				{{#if product.SubjectHeader.NonMarketableReasonText.0.$}}
					<li>
						<div class=\'dnb-company-label\'>
							{{str "LBL_DNB_NON_MARKETABILITY_INDICATOR"}}
						</div>
						<div class=\'txt import-data\'>
							{{product.SubjectHeader.NonMarketableReasonText.0.$}}
						</div>
					</li>
				{{/if}}
				{{#if product.IndustryCode.IndustryCode}}
					{{#each product.IndustryCode.IndustryCode}}
						<li>
							<div class=\'dnb-company-label\'>
								{{this.[@TypeText]}}:{{this.IndustryCode.$}}
								{{#if this.DisplaySequence}}
									{{#eq this.DisplaySequence \'1\'}}
										<span class="label label-success pull-right" data-placement="right">{{str "LBL_DNB_PRIMARY"}}</span>
									{{/eq}}
								{{/if}}
							</div>
							<div class=\'txt import-data\'>
								{{this.IndustryCodeDescription.0.$}}
							</div>
						</li>
					{{/each}}
				{{/if}}
				{{#if product.Telecommunication.TelephoneNumber.0.UnreachableIndicator}}
					<li>
						<div class=\'dnb-company-label\'>
							{{str "LBL_DNB_UNREACHABLE_INDICATOR"}}
						</div>
						<div class=\'txt import-data\'>
							{{product.Telecommunication.TelephoneNumber.0.UnreachableIndicator}}
						</div>
					</li>
				{{/if}}
				{{#if product.Location.PrimaryAddress.0.RegisteredAddressIndicator}}
					<li>
						<div class=\'dnb-company-label\'>
							{{str "LBL_DNB_REGISTERED_ADDRESS_INDICATOR"}}
						</div>
						<div class=\'txt import-data\'>
							{{product.Location.PrimaryAddress.0.RegisteredAddressIndicator}}
						</div>
					</li>
				{{/if}}
				{{#if product.Location.PrimaryAddress.0.ResidentialAddressIndicator}}
					<li>
						<div class=\'dnb-company-label\'>
							{{str "LBL_DNB_RESIDENTIAL_ADDRESS_INDICATOR"}}
						</div>
						<div class=\'txt import-data\'>
							{{product.Location.PrimaryAddress.0.ResidentialAddressIndicator}}
						</div>
					</li>
				{{/if}}
				{{#if product.SubjectHeader.LastUpdateDate.$}}
					<li>
						<div class=\'dnb-company-label\'>
							{{str "LBL_DNB_LAST_UPDATE"}}
						</div>
						<div class=\'txt import-data\'>
							{{product.SubjectHeader.LastUpdateDate.$}}
						</div>
					</li>
				{{/if}}
				{{#if product.SubjectHeader.DUNSSelfRequestIndicator}}
					<li>
						<div class=\'dnb-company-label\'>
							{{str "LBL_DNB_SELF_REQUEST_INDICATOR"}}
						</div>
						<div class=\'txt import-data\'>
							{{product.SubjectHeader.DUNSSelfRequestIndicator}}
						</div>
					</li>
				{{/if}}
				{{#if product.Location.PrimaryAddress.0.StreetAddressLine.0.LineText}}
					<li>
						<div class=\'dnb-company-label\'>
							{{str "LBL_DNB_STREET_ADDRESSLINE"}}
						</div>
						<div class=\'txt import-data\'>
							{{product.Location.PrimaryAddress.0.StreetAddressLine.0.LineText}}
						</div>
					</li>
				{{/if}}
				{{#if product.Location.PrimaryAddress.0.CountyOfficialName}}
					<li>
						<div class=\'dnb-company-label\'>
							{{str "LBL_DNB_COUNTRY_OFFICIAL_NAME"}}
						</div>
						<div class=\'txt import-data\'>
							{{product.Location.PrimaryAddress.0.CountyOfficialName}}
						</div>
					</li>
				{{/if}}
				{{#if product.Location.PrimaryAddress.0.TerritoryOfficialName}}
					<li>
						<div class=\'dnb-company-label\'>
							{{str "LBL_DNB_TERRITORY_OFFICIAL_NAME"}}
						</div>
						<div class=\'txt import-data\'>
							{{product.Location.PrimaryAddress.0.TerritoryOfficialName}}
						</div>
					</li>
				{{/if}}
				{{#if product.Location.PrimaryAddress.0.TerritoryAbbreviatedName}}
					<li>
						<div class=\'dnb-company-label\'>
							{{str "LBL_DNB_TERRITORY_ABBREVIATED_NAME"}}
						</div>
						<div class=\'txt import-data\'>
							{{product.Location.PrimaryAddress.0.TerritoryAbbreviatedName}}
						</div>
					</li>
				{{/if}}
				{{#if product.Telecommunication.TelephoneNumber.0.TelecommunicationNumber}}
					<li>
						<div class=\'dnb-company-label\'>
							{{str "LBL_DNB_TELECOMMUNICATION_NUMBER"}}
						</div>
						<div class=\'txt import-data\'>
							{{product.Telecommunication.TelephoneNumber.0.TelecommunicationNumber}}
						</div>
					</li>
				{{/if}}
				{{#if product.Telecommunication.TelephoneNumber.0.InternationalDialingCode}}
					<li>
						<div class=\'dnb-company-label\'>
							{{str "LBL_DNB_INT_DIALLING_CODE"}}
						</div>
						<div class=\'txt import-data\'>
							{{product.Telecommunication.TelephoneNumber.0.InternationalDialingCode}}
						</div>
					</li>
				{{/if}}
				{{#if product.RegisteredDetail.IncorporationYear}}
					<li>
						<div class=\'dnb-company-label\'>
							{{str "LBL_DNB_INCORPORATION_YEAR"}}
						</div>
						<div class=\'txt import-data\'>
							{{product.RegisteredDetail.IncorporationYear}}
						</div>
					</li>
				{{/if}}
				{{#if product.RegisteredDetail.OrganizationIdentificationNumberDetail.0.OrganizationIdentificationNumber}}
					<li>
						<div class=\'dnb-company-label\'>
							{{str "LBL_DNB_ORGANISATION_IDENTIFICATION_NUMBER"}}
						</div>
						<div class=\'txt import-data\'>
							{{product.RegisteredDetail.OrganizationIdentificationNumberDetail.0.OrganizationIdentificationNumber}}
						</div>
					</li>
				{{/if}}
				{{#if product.RegisteredDetail.OrganizationIdentificationNumberDetail.0.StartDate.$}}
					<li>
						<div class=\'dnb-company-label\'>
							{{str "LBL_DNB_ORGANISATION_IDENTIFICATION_START_DATE"}}
						</div>
						<div class=\'txt import-data\'>
							{{product.RegisteredDetail.OrganizationIdentificationNumberDetail.0.StartDate.$}}
						</div>
					</li>
				{{/if}}
				{{#if product.RegisteredDetail.OrganizationIdentificationNumberDetail.0.FilingOrganizationName}}
					<li>
						<div class=\'dnb-company-label\'>
							{{str "LBL_DNB_FILLING_ORGANISATION_NAME"}}
						</div>
						<div class=\'txt import-data\'>
							{{product.RegisteredDetail.OrganizationIdentificationNumberDetail.0.FilingOrganizationName}}
						</div>
					</li>
				{{/if}}
				{{#if product.RegisteredDetail.StockExchangeDetails0.StockExchangeTickerName}}
					<li>
						<div class=\'dnb-company-label\'>
							{{str "LBL_DNB_STOCK_EXCHANGE_TICKER__NAME"}}
						</div>
						<div class=\'txt import-data\'>
							{{product.RegisteredDetail.StockExchangeDetails0.StockExchangeTickerName}}
						</div>
					</li>
				{{/if}}
				{{#if product.RegisteredDetail.StockExchangeDetails.0.CountryISOAlpha2Code}}
					<li>
						<div class=\'dnb-company-label\'>
							{{str "LBL_DNB_STOCK_EXCHANGE_COUNTRY_ISO_ALPHA_CODE"}}
						</div>
						<div class=\'txt import-data\'>
							{{product.RegisteredDetail.StockExchangeDetails.0.CountryISOAlpha2Code}}
						</div>
					</li>
				{{/if}}
				{{#if product.ActivitiesAndOperations.LineOfBusinessDetails.0.LineOfBusinessDescription.$}}
					<li>
						<div class=\'dnb-company-label\'>
							{{str "LBL_DNB_LINE_OF_BUSINESS_DESCRIPTION"}}
						</div>
						<div class=\'txt import-data\'>
							{{product.ActivitiesAndOperations.LineOfBusinessDetails.0.LineOfBusinessDescription.$}}
						</div>
					</li>
				{{/if}}
				{{#if product.ActivitiesAndOperations.ImportDetails.ImportIndicator}}
					<li>
						<div class=\'dnb-company-label\'>
							{{str "LBL_DNB_IMPORT_DETAILS_INDICATOR"}}
						</div>
						<div class=\'txt import-data\'>
							{{product.ActivitiesAndOperations.ImportDetails.ImportIndicator}}
						</div>
					</li>
				{{/if}}
				{{#if product.ActivitiesAndOperations.ExportDetails.ExportIndicator}}
					<li>
						<div class=\'dnb-company-label\'>
							{{str "LBL_DNB_EXPORT_DETAILS_INDICATOR"}}
						</div>
						<div class=\'txt import-data\'>
							{{product.ActivitiesAndOperations.ExportDetails.ExportIndicator}}
						</div>
					</li>
				{{/if}}
				{{#if product.ActivitiesAndOperations.SubjectIsAgentDetails.AgentIndicator}}
					<li>
						<div class=\'dnb-company-label\'>
							{{str "LBL_DNB_AGENT_INDICATOR"}}
						</div>
						<div class=\'txt import-data\'>
							{{product.ActivitiesAndOperations.SubjectIsAgentDetails.AgentIndicator}}
						</div>
					</li>
				{{/if}}
				{{#if product.EmployeeFigures.IndividualEntityEmployeeDetails.TotalEmployeeQuantity}}
					<li>
						<div class=\'dnb-company-label\'>
							{{str "LBL_DNB_TOTAL_EMPLOYEE_QUANTITY"}}
						</div>
						<div class=\'txt import-data\'>
							{{product.EmployeeFigures.IndividualEntityEmployeeDetails.TotalEmployeeQuantity}}
						</div>
					</li>
				{{/if}}
				{{#if product.PrincipalsAndManagement.CurrentPrincipal}}
					{{#each product.PrincipalsAndManagement.CurrentPrincipal}}
						<li>
							<div class=\'dnb-company-label\'>
								<i class="icon-user"></i>
								{{#if this.JobTitle.0.JobTitleText.$}}
									{{this.JobTitle.0.JobTitleText.$}}
								{{else}}
									{{str "LBL_DNB_ASSOCIATE"}}
								{{/if}}
							</div>
							<div class=\'txt import-data\'>
								{{this.PrincipalName.FullName}}
							</div>
						</li>
					{{/each}}
				{{/if}}
				{{#if product.ThirdPartyAssessment.ThirdPartyAssessment}}
					{{#each product.ThirdPartyAssessment.ThirdPartyAssessment}}
						<li>
							<div class=\'dnb-company-label\'>
								{{str "LBL_DNB_RATING"}}
							</div>
							<div class=\'txt import-data\'>
								{{this.AssessmentTypeValue}}&nbsp;&nbsp;:&nbsp;&nbsp;{{this.AssessmentValue}}
							</div>
						</li>
					{{/each}}
				{{/if}}
				{{#if product.SocioEconomicIdentification.MinorityOwnedIndicator}}
					<li>
						<div class=\'dnb-company-label\'>
								{{str "LBL_DNB_SOCIO_INDICATOR"}}
                        </div>
                        <div class=\'txt import-data\'>
                            {{str "LBL_DNB_MINORITY_OWNER_INDICATOR"}}&nbsp;&nbsp;:&nbsp;&nbsp;{{product.SocioEconomicIdentification.MinorityOwnedIndicator}}
                        </div>
					</li>
				{{/if}}
				{{#if product.SocioEconomicIdentification.SmallBusinessIndicator}}
					<li>
						<div class=\'dnb-company-label\'>
								{{str "LBL_DNB_SOCIO_INDICATOR"}}
                        </div>
                        <div class=\'txt import-data\'>
                            {{str "LBL_DNB_SMALL_BUSINESS_INDICATOR"}}&nbsp;&nbsp;:&nbsp;&nbsp;{{product.SocioEconomicIdentification.SmallBusinessIndicator}}
                        </div>
					</li>
				{{/if}}
				{{#if product.OrderProductResponse.OrderProductResponseDetail.Product.SocioEconomicIdentification.OwnershipEthnicity.0.EthnicityTypeText.$}}
					<li>
						<div class=\'dnb-company-label\'>
							{{str "LBL_DNB_ETHNICITY_TYPE_TEXT"}}
						</div>
						<div class=\'txt import-data\'>
							{{this.product.OrderProductResponse.OrderProductResponseDetail.Product.SocioEconomicIdentification.OwnershipEthnicity.0.EthnicityTypeText.$}}
						</div>
					</li>
				{{/if}}
				{{#if product.Assessment.HistoryRatingText}}
					<li>
						<div class=\'dnb-company-label\'>
								{{str "LBL_DNB_ASSESMENT"}}
                        </div>
                        <div class=\'txt import-data\'>
                            {{str "LBL_DNB_HISTORY_RATING_TEXT"}}&nbsp;&nbsp;:&nbsp;&nbsp;{{product.Assessment.HistoryRatingText.$}}
                        </div>
					</li>
				{{/if}}
			</ul>
		</div>
		<div class="dnb-show-more">
	        <a class="showMoreData more">{{str "LBL_DNB_SHOW_MORE"}} <i class="icon-chevron-down"></i></a>
	        <a class="showLessData less">{{str "LBL_DNB_SHOW_LESS"}} <i class="icon-chevron-up"></i></a>
	    </div>
	{{else}}
		 <aside class=\'create-no-data\'>
            {{#if errmsg}}
                <em>{{errmsg}}</em>
            {{else}}
                <em>{{str "LBL_DNB_NO_DATA"}}</em>
            {{/if}}
        </aside>
	{{/if}}
</div>
',
        'dnb-standard-no-duns' => '
<div id="dnb-no-duns" class="block-footer">
	 <aside>
        <em>{{str "LBL_DNB_NO_DUNS"}}</em>
      </aside>
</div>',
      ),
      'meta' => 
      array (
        'dashlets' => 
        array (
          0 => 
          array (
            'label' => 'LBL_DNB_STD_COMPANY_INFO',
            'description' => 'LBL_DNB_STD_COMPANY_INFO_DESC',
            'filter' => 
            array (
              'module' => 
              array (
                0 => 'Accounts',
              ),
              'view' => 'record',
            ),
            'config' => 
            array (
              'compname' => '1',
              'tradename' => '1',
              'locationtype' => '1',
              'cntrowndate' => '1',
              'cntrowntype' => '1',
              'operstatus' => '1',
              'orgstartyear' => '1',
              'primaddrstreet' => '1',
              'primaddrcity' => '1',
              'primaddrstateabbr' => '1',
              'primaddrstate' => '1',
              'primaddrctrycd' => '1',
              'primaddrctrygrp' => '1',
              'primaddrzip' => '1',
              'primaddrcountyname' => '1',
              'uscensuscd' => '1',
              'mailingaddrstreet' => '1',
              'mailingaddrcity' => '1',
              'mailingaddrstateabbr' => '1',
              'mailingaddrzip' => '1',
              'mailingaddrctrycd' => '1',
              'long' => '1',
              'lat' => '1',
              'phone' => '1',
              'fax' => '1',
              'webpage' => '1',
              'indempcnt' => '1',
              'conempcnt' => '1',
              'empdet' => '1',
              'lob' => '1',
              'impind' => '1',
              'expind' => '1',
              'agentind' => '1',
              'histrat' => '1',
              'uspatriskscr' => '1',
              'tpa' => '1',
              'minind' => '1',
              'smbind' => '1',
              'ethn' => '1',
              'femind' => '1',
              'smbdisadv' => '1',
              'alasnat' => '1',
              'smbcert' => '1',
              'mincoll' => '1',
              'disab' => '1',
              'svcdisabvet' => '1',
              'vietvet' => '1',
              'airprtdisadvent' => '1',
              'disabvetent' => '1',
              'disadvent' => '1',
              'disadvvetent' => '1',
              'minent' => '1',
              'fement' => '1',
              'hubcrt' => '1',
              'eightacrt' => '1',
              'vet_ind' => '1',
              'lsind' => '1',
              'vetent' => '1',
              'inqcnt' => '1',
              'transferdunsnbr' => '1',
              'lastupddate' => '1',
              'marketind' => '1',
              'dunsselfind' => '1',
              'nonmarkreastxt' => '1',
              'indcodes' => '1',
            ),
            'preview' => 
            array (
              'compname' => '1',
              'tradename' => '1',
              'locationtype' => '1',
              'cntrowndate' => '1',
              'cntrowntype' => '1',
              'operstatus' => '1',
              'orgstartyear' => '1',
              'primaddrstreet' => '1',
              'primaddrcity' => '1',
              'primaddrstateabbr' => '1',
              'primaddrstate' => '1',
              'primaddrctrycd' => '1',
              'primaddrctrygrp' => '1',
              'primaddrzip' => '1',
              'primaddrcountyname' => '1',
              'uscensuscd' => '1',
              'mailingaddrstreet' => '1',
              'mailingaddrcity' => '1',
              'mailingaddrstateabbr' => '1',
              'mailingaddrzip' => '1',
              'mailingaddrctrycd' => '1',
              'long' => '1',
              'lat' => '1',
              'phone' => '1',
              'fax' => '1',
              'webpage' => '1',
              'indempcnt' => '1',
              'conempcnt' => '1',
              'empdet' => '1',
              'lob' => '1',
              'impind' => '1',
              'expind' => '1',
              'agentind' => '1',
              'histrat' => '1',
              'uspatriskscr' => '1',
              'tpa' => '1',
              'minind' => '1',
              'smbind' => '1',
              'ethn' => '1',
              'femind' => '1',
              'smbdisadv' => '1',
              'alasnat' => '1',
              'smbcert' => '1',
              'mincoll' => '1',
              'disab' => '1',
              'svcdisabvet' => '1',
              'vietvet' => '1',
              'airprtdisadvent' => '1',
              'disabvetent' => '1',
              'disadvent' => '1',
              'disadvvetent' => '1',
              'minent' => '1',
              'fement' => '1',
              'hubcrt' => '1',
              'eightacrt' => '1',
              'vet_ind' => '1',
              'lsind' => '1',
              'vetent' => '1',
              'inqcnt' => '1',
              'transferdunsnbr' => '1',
              'lastupddate' => '1',
              'marketind' => '1',
              'dunsselfind' => '1',
              'nonmarkreastxt' => '1',
              'indcodes' => '1',
            ),
          ),
        ),
        'custom_toolbar' => 
        array (
          'buttons' => 
          array (
            0 => 
            array (
              'dropdown_buttons' => 
              array (
                0 => 
                array (
                  'type' => 'dashletaction',
                  'action' => 'editClicked',
                  'label' => 'LBL_DASHLET_CONFIG_EDIT_LABEL',
                ),
                1 => 
                array (
                  'type' => 'dashletaction',
                  'action' => 'refreshClicked',
                  'label' => 'LBL_DASHLET_REFRESH_LABEL',
                ),
                2 => 
                array (
                  'type' => 'dashletaction',
                  'action' => 'removeClicked',
                  'label' => 'LBL_DASHLET_REMOVE_LABEL',
                ),
              ),
            ),
            1 => 
            array (
              'type' => 'dashletaction',
              'css_class' => 'dashlet-toggle btn btn-invisible minify',
              'icon' => 'icon-chevron-down',
              'action' => 'toggleMinify',
              'tooltip' => 'LBL_DASHLET_MAXIMIZE',
            ),
          ),
        ),
        'config' => 
        array (
          'fields' => 
          array (
            0 => 
            array (
              'name' => 'compname',
              'label' => 'LBL_DNB_PRIM_NAME',
              'desc' => 'LBL_DNB_PRIM_NAME_DESC',
              'header' => 'LBL_DNB_ORG_NAME',
              'header_desc' => 'LBL_DNB_ORG_NAME_DESC',
              'type' => 'bool',
            ),
            1 => 
            array (
              'name' => 'tradename',
              'label' => 'LBL_DNB_TRD_NAME',
              'desc' => 'LBL_DNB_TRD_NAME_DESC',
              'last' => '1',
              'type' => 'bool',
            ),
            2 => 
            array (
              'name' => 'locationtype',
              'label' => 'LBL_DNB_LOCATION_TYPE',
              'desc' => 'LBL_DNB_LOCATION_TYPE_DESC',
              'header' => 'LBL_DNB_ORG_DET',
              'header_desc' => 'LBL_DNB_ORG_DET_DESC',
              'type' => 'bool',
            ),
            3 => 
            array (
              'name' => 'cntrowndate',
              'label' => 'LBL_DNB_CNTRL_OWN_DATE',
              'desc' => 'LBL_DNB_CNTRL_OWN_DATE_DESC',
              'type' => 'bool',
            ),
            4 => 
            array (
              'name' => 'cntrowntype',
              'label' => 'LBL_DNB_CNTRL_TYP_TEXT',
              'desc' => 'LBL_DNB_CNTRL_TYP_TEXT_DESC',
              'type' => 'bool',
            ),
            5 => 
            array (
              'name' => 'operstatus',
              'label' => 'LBL_DNB_OPERL_STA_TEXT',
              'desc' => 'LBL_DNB_OPERL_STA_TEXT_DESC',
              'type' => 'bool',
            ),
            6 => 
            array (
              'name' => 'orgstartyear',
              'label' => 'LBL_DNB_ORGS_STRT_YEAR',
              'desc' => 'LBL_DNB_ORGS_STRT_YEAR_DESC',
              'last' => '1',
              'type' => 'bool',
            ),
            7 => 
            array (
              'name' => 'primaddrstreet',
              'label' => 'LBL_DNB_PRIM_STREET',
              'desc' => 'LBL_DNB_PRIM_STREET_DESC',
              'header' => 'LBL_DNB_LOC',
              'header_desc' => 'LBL_DNB_LOC_DESC',
              'type' => 'bool',
            ),
            8 => 
            array (
              'name' => 'primaddrcity',
              'label' => 'LBL_DNB_PRIM_CITY',
              'desc' => 'LBL_DNB_PRIM_CITY_DESC',
              'type' => 'bool',
            ),
            9 => 
            array (
              'name' => 'primaddrstateabbr',
              'label' => 'LBL_DNB_PRIM_STATE_ABBR',
              'desc' => 'LBL_DNB_PRIM_STATE_ABBR_DESC',
              'type' => 'bool',
            ),
            10 => 
            array (
              'name' => 'primaddrstate',
              'label' => 'LBL_DNB_PRIM_STATE',
              'desc' => 'LBL_DNB_PRIM_STATE_DESC',
              'type' => 'bool',
            ),
            11 => 
            array (
              'name' => 'primaddrctrycd',
              'label' => 'LBL_DNB_PRIM_CTRY_CD',
              'desc' => 'LBL_DNB_PRIM_CTRY_CD_DESC',
              'type' => 'bool',
            ),
            12 => 
            array (
              'name' => 'primaddrctrygrp',
              'label' => 'LBL_DNB_PRIM_CTRY_GRP',
              'desc' => 'LBL_DNB_PRIM_CTRY_GRP_DESC',
              'type' => 'bool',
            ),
            13 => 
            array (
              'name' => 'primaddrzip',
              'label' => 'LBL_DNB_PRIM_ZIP',
              'desc' => 'LBL_DNB_PRIM_ZIP_DESC',
              'type' => 'bool',
            ),
            14 => 
            array (
              'name' => 'primaddrcountyname',
              'label' => 'LBL_DNB_PRIM_COUNTY_NAME',
              'desc' => 'LBL_DNB_PRIM_COUNTY_NAME_DESC',
              'type' => 'bool',
            ),
            15 => 
            array (
              'name' => 'uscensuscd',
              'label' => 'LBL_DNB_PRIM_CEN_CD',
              'desc' => 'LBL_DNB_PRIM_CEN_CD_DESC',
              'type' => 'bool',
            ),
            16 => 
            array (
              'name' => 'mailingaddrstreet',
              'label' => 'LBL_DNB_MAIL_STREET',
              'desc' => 'LBL_DNB_PRIM_STREET_DESC',
              'type' => 'bool',
            ),
            17 => 
            array (
              'name' => 'mailingaddrcity',
              'label' => 'LBL_DNB_MAIL_CITY',
              'desc' => 'LBL_DNB_PRIM_CITY_DESC',
              'type' => 'bool',
            ),
            18 => 
            array (
              'name' => 'mailingaddrstateabbr',
              'label' => 'LBL_DNB_MAIL_STATE_ABBR',
              'desc' => 'LBL_DNB_PRIM_STATE_ABBR_DESC',
              'type' => 'bool',
            ),
            19 => 
            array (
              'name' => 'mailingaddrzip',
              'label' => 'LBL_DNB_MAIL_ZIP',
              'desc' => 'LBL_DNB_PRIM_ZIP_DESC',
              'type' => 'bool',
            ),
            20 => 
            array (
              'name' => 'mailingaddrctrycd',
              'label' => 'LBL_DNB_MAIL_CTRY_CD',
              'desc' => 'LBL_DNB_PRIM_CTRY_CD_DESC',
              'type' => 'bool',
            ),
            21 => 
            array (
              'name' => 'long',
              'label' => 'LBL_DNB_LAT',
              'desc' => 'LBL_DNB_LAT_DESC',
              'type' => 'bool',
            ),
            22 => 
            array (
              'name' => 'lat',
              'label' => 'LBL_DNB_LONG',
              'desc' => 'LBL_DNB_LONG_DESC',
              'last' => '1',
              'type' => 'bool',
            ),
            23 => 
            array (
              'name' => 'phone',
              'label' => 'LBL_DNB_PHONE',
              'desc' => 'LBL_DNB_PHONE_DESC',
              'header' => 'LBL_DNB_TELECOMM',
              'header_desc' => 'LBL_DNB_TELECOMM_DESC',
              'type' => 'bool',
            ),
            24 => 
            array (
              'name' => 'fax',
              'label' => 'LBL_DNB_FAX',
              'desc' => 'LBL_DNB_FAX_DESC',
              'type' => 'bool',
            ),
            25 => 
            array (
              'name' => 'webpage',
              'label' => 'LBL_DNB_WEBPAGE',
              'desc' => 'LBL_DNB_WEBPAGE_DESC',
              'last' => '1',
              'type' => 'bool',
            ),
            26 => 
            array (
              'name' => 'indempcnt',
              'label' => 'LBL_DNB_IND_EMP_CNT',
              'desc' => 'LBL_DNB_IND_EMP_CNT_DESC',
              'header' => 'LBL_DNB_EMP_INF',
              'header_desc' => 'LBL_DNB_EMP_INF_DESC',
              'type' => 'bool',
            ),
            27 => 
            array (
              'name' => 'conempcnt',
              'label' => 'LBL_DNB_CON_EMP_CNT',
              'desc' => 'LBL_DNB_CON_EMP_CNT_DESC',
              'type' => 'bool',
            ),
            28 => 
            array (
              'name' => 'empdet',
              'label' => 'LBL_DNB_EMP_DET',
              'desc' => 'LBL_DNB_EMP_DET_DESC',
              'last' => '1',
              'type' => 'bool',
            ),
            29 => 
            array (
              'name' => 'lob',
              'label' => 'LBL_DNB_LOB',
              'desc' => 'LBL_DNB_LOB_DESC',
              'header' => 'LBL_DNB_ACT_OPER',
              'header_desc' => 'LBL_DNB_ACT_OPER_DESC',
              'type' => 'bool',
            ),
            30 => 
            array (
              'name' => 'impind',
              'label' => 'LBL_DNB_IMP_IND',
              'desc' => 'LBL_DNB_IMP_IND_DESC',
              'type' => 'bool',
            ),
            31 => 
            array (
              'name' => 'expind',
              'label' => 'LBL_DNB_EXP_IND',
              'desc' => 'LBL_DNB_EXP_IND_DESC',
              'type' => 'bool',
            ),
            32 => 
            array (
              'name' => 'agentind',
              'label' => 'LBL_DNB_AGENT_IND',
              'desc' => 'LBL_DNB_AGENT_IND_DESC',
              'last' => '1',
              'type' => 'bool',
            ),
            33 => 
            array (
              'name' => 'histrat',
              'label' => 'LBL_DNB_HIST_RAT',
              'desc' => 'LBL_DNB_HIST_RAT_DESC',
              'header' => 'LBL_DNB_ASSESMENT',
              'header_desc' => 'LBL_DNB_ASSESMENT_DESC',
              'type' => 'bool',
            ),
            34 => 
            array (
              'name' => 'uspatriskscr',
              'label' => 'LBL_DNB_USPAT_SCR',
              'desc' => 'LBL_DNB_USPAT_SCR_DESC',
              'type' => 'bool',
            ),
            35 => 
            array (
              'name' => 'tpa',
              'label' => 'LBL_DNB_TPA',
              'desc' => 'LBL_DNB_TPA_DESC',
              'last' => '1',
              'type' => 'bool',
            ),
            36 => 
            array (
              'name' => 'minind',
              'label' => 'LBL_DNB_MIN_IND',
              'desc' => 'LBL_DNB_MIN_IND_DESC',
              'header' => 'LBL_DNB_SOCIO_IND',
              'header_desc' => 'LBL_DNB_SOCIO_IND_DESC',
              'type' => 'bool',
            ),
            37 => 
            array (
              'name' => 'smbind',
              'label' => 'LBL_DNB_SMB_IND',
              'desc' => 'LBL_DNB_SMB_IND_DESC',
              'type' => 'bool',
            ),
            38 => 
            array (
              'name' => 'ethn',
              'label' => 'LBL_DNB_ETHN',
              'desc' => 'LBL_DNB_ETHN_DESC',
              'type' => 'bool',
            ),
            39 => 
            array (
              'name' => 'femind',
              'label' => 'LBL_DNB_FEM_IND',
              'desc' => 'LBL_DNB_FEM_IND_DESC',
              'type' => 'bool',
            ),
            40 => 
            array (
              'name' => 'smbdisadv',
              'label' => 'LBL_DNB_SMBDISADV_IND',
              'desc' => 'LBL_DNB_SMBDISADV_IND_DESC',
              'type' => 'bool',
            ),
            41 => 
            array (
              'name' => 'alasnat',
              'label' => 'LBL_DNB_ALASNAT_IND',
              'desc' => 'LBL_DNB_ALASNAT_IND_DESC',
              'type' => 'bool',
            ),
            42 => 
            array (
              'name' => 'smbcert',
              'label' => 'LBL_DNB_SMB_CERT',
              'desc' => 'LBL_DNB_SMB_CERT_DESC',
              'type' => 'bool',
            ),
            43 => 
            array (
              'name' => 'mincoll',
              'label' => 'LBL_DNB_MIN_COLL',
              'desc' => 'LBL_DNB_MIN_COLL_DESC',
              'type' => 'bool',
            ),
            44 => 
            array (
              'name' => 'disab',
              'label' => 'LBL_DNB_DISAB_IND',
              'desc' => 'LBL_DNB_DISAB_IND_DESC',
              'type' => 'bool',
            ),
            45 => 
            array (
              'name' => 'svcdisabvet',
              'label' => 'LBL_DNB_SVC_DISAB_VET',
              'desc' => 'LBL_DNB_SVC_DISAB_VET_DESC',
              'type' => 'bool',
            ),
            46 => 
            array (
              'name' => 'vietvet',
              'label' => 'LBL_DNB_VIET_VET',
              'desc' => 'LBL_DNB_VIET_VET_DESC',
              'type' => 'bool',
            ),
            47 => 
            array (
              'name' => 'airprtdisadvent',
              'label' => 'LBL_DNB_AIRPRT_DISADV_ENT',
              'desc' => 'LBL_DNB_AIRPRT_DISADV_ENT_DESC',
              'type' => 'bool',
            ),
            48 => 
            array (
              'name' => 'disabvetent',
              'label' => 'LBL_DNB_DISAB_VET_ENT',
              'desc' => 'LBL_DNB_DISAB_VET_ENT_DESC',
              'type' => 'bool',
            ),
            49 => 
            array (
              'name' => 'disadvent',
              'label' => 'LBL_DNB_DISADV_ENT',
              'desc' => 'LBL_DNB_DISADV_ENT_DESC',
              'type' => 'bool',
            ),
            50 => 
            array (
              'name' => 'disadvvetent',
              'label' => 'LBL_DNB_DISADV_VET_ENT',
              'desc' => 'LBL_DNB_DISADV_VET_ENT_DESC',
              'type' => 'bool',
            ),
            51 => 
            array (
              'name' => 'minent',
              'label' => 'LBL_DNB_MIN_ENT',
              'desc' => 'LBL_DNB_MIN_ENT_DESC',
              'type' => 'bool',
            ),
            52 => 
            array (
              'name' => 'fement',
              'label' => 'LBL_DNB_FEM_ENT',
              'desc' => 'LBL_DNB_FEM_ENT_DESC',
              'type' => 'bool',
            ),
            53 => 
            array (
              'name' => 'hubcrt',
              'label' => 'LBL_DNB_HUB_CRT',
              'desc' => 'LBL_DNB_HUB_CRT_DESC',
              'type' => 'bool',
            ),
            54 => 
            array (
              'name' => 'eightacrt',
              'label' => 'LBL_DNB_EIGHTA_CRT',
              'desc' => 'LBL_DNB_EIGHTA_CRT_DESC',
              'type' => 'bool',
            ),
            55 => 
            array (
              'name' => 'vet_ind',
              'label' => 'LBL_DNB_VET_IND',
              'desc' => 'LBL_DNB_VET_IND_DESC',
              'type' => 'bool',
            ),
            56 => 
            array (
              'name' => 'lsind',
              'label' => 'LBL_DNB_LS_IND',
              'desc' => 'LBL_DNB_LS_IND_DESC',
              'type' => 'bool',
            ),
            57 => 
            array (
              'name' => 'vetent',
              'label' => 'LBL_DNB_VET_ENT',
              'desc' => 'LBL_DNB_VET_ENT_DESC',
              'last' => '1',
              'type' => 'bool',
            ),
            58 => 
            array (
              'name' => 'inqcnt',
              'label' => 'LBL_DNB_INQ_CNT',
              'desc' => 'LBL_DNB_INQ_CNT_DESC',
              'header' => 'LBL_DNB_SUBJ_HEADER',
              'header_desc' => 'LBL_DNB_SUBJ_HEADER_DESC',
              'type' => 'bool',
            ),
            59 => 
            array (
              'name' => 'transferdunsnbr',
              'label' => 'LBL_DNB_TRNS_DUNS',
              'desc' => 'LBL_DNB_TRNS_DUNS_DESC',
              'type' => 'bool',
            ),
            60 => 
            array (
              'name' => 'lastupddate',
              'label' => 'LBL_DNB_LAST_UPD_DATE',
              'desc' => 'LBL_DNB_LAST_UPD_DATE_DESC',
              'type' => 'bool',
            ),
            61 => 
            array (
              'name' => 'marketind',
              'label' => 'LBL_DNB_MARKET_IND',
              'desc' => 'LBL_DNB_MARKET_IND_DESC',
              'type' => 'bool',
            ),
            62 => 
            array (
              'name' => 'dunsselfind',
              'label' => 'LBL_DNB_DUNSSELF_IND',
              'desc' => 'LBL_DNB_DUNSSELF_IND_DESC',
              'type' => 'bool',
            ),
            63 => 
            array (
              'name' => 'nonmarkreastxt',
              'label' => 'LBL_DNB_NONMARK_REAS_TXT',
              'desc' => 'LBL_DNB_NONMARK_REAS_TXT_DESC',
              'last' => '1',
              'type' => 'bool',
            ),
            64 => 
            array (
              'name' => 'indcodes',
              'label' => 'LBL_DNB_IND_CD',
              'desc' => 'LBL_DNB_IND_CD_DESC',
              'header' => 'LBL_DNB_IND_CD_HED',
              'header_desc' => 'LBL_DNB_IND_CD_HED_DESC',
              'last' => '1',
              'type' => 'bool',
            ),
          ),
        ),
      ),
    ),
    'dropdown-menu' => 
    array (
      'templates' => 
      array (
        'dropdown-menu' => '
{{#each data.records}}
    <li>
        <span>{{str "LBL_MODULE_NAME" module}}: </span><a href="#{{module}}/{{id}}"><strong>{{name}}</strong></a>
    </li>
{{/each}}
{{#eq data.records.length "0"}}
    <li>
        <a href="#search/{{term}}">{{str "LNK_SEARCH_NO_RESULTS"}}</a>
    {{#each data.module_list}}
        <a href="#{{this}}/create">{{str "LNK_CREATE_WHEN_EMPTY" this}}</a>
    {{/each}}
    </li>
{{else}}
    <li>
        <a href="#search/{{term}}">{{str "LNK_SEARCH_FTS_VIEW_ALL"}}</a>
    </li>
{{/eq}}
',
      ),
    ),
    'dupecheck-filter-dropdown' => 
    array (
      'meta' => 
      array (
        'template' => 'filter-filter-dropdown',
      ),
    ),
    'dupecheck-header' => 
    array (
      'templates' => 
      array (
        'dupecheck-header' => '
<div class="want_filter highlight">
    <span class="duplicate_count"></span>
    {{!future: there will be a way to switch to a filter view here to perform your own search}}
</div>

',
      ),
    ),
    'dupecheck-list' => 
    array (
      'meta' => 
      array (
        'template' => 'list',
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
          ),
        ),
      ),
    ),
    'dupecheck-list-edit' => 
    array (
      'meta' => 
      array (
        'template' => 'list',
        'selection' => 
        array (
        ),
      ),
    ),
    'dupecheck-list-multiselect' => 
    array (
      'meta' => 
      array (
        'template' => 'list',
        'selection' => 
        array (
          'type' => 'multi',
          'label' => 'LBL_LINK_SELECT',
        ),
      ),
    ),
    'dupecheck-list-select' => 
    array (
      'meta' => 
      array (
        'template' => 'list',
        'selection' => 
        array (
          'type' => 'single',
          'label' => 'LBL_LINK_SELECT',
        ),
      ),
    ),
    'editmodal' => 
    array (
      'templates' => 
      array (
        'editmodal' => '
<div class="modal hide">
    <div class="modal-header">
        <a class="close" data-dismiss="modal"><i class="icon-remove"></i></a>
        <h3>{{str "LBL_NEW_FORM_TITLE" module}}</h3>
    </div>
    <div class="modal-body">
        <form class="form-horizontal" enctype="multipart/form-data" method="POST">
            <fieldset>
                {{#each meta.panels}}
                {{#each fields}}
                <div class="row-fluid control-group">
                <label class="span2">{{str this.label ../../this.model.module}}</label>
                <div class="span10">{{field ../../this model=../../context.attributes.createModel template="edit"}}</div>
                </div>
                {{/each}}
                {{/each}}
            </fieldset>
        </form>
    </div>
    <div class="modal-footer">
        {{#each meta.buttons}}
        {{field ../this model=../createModel}}
        {{/each}}
    </div>
</div>
',
      ),
    ),
    'error' => 
    array (
      'templates' => 
      array (
        'error' => '
<div class="error-message">
    {{#with model.attributes}}
    <h1>{{str title}}</h1>
    {{#each messages}}<p>{{str this}}</p>{{/each}}
    {{#if linkText}}<p><a href="javascript:window.history.back()">{{str linkText}}</a></p>{{/if}}
    {{/with}}    
</div>
<div class="sugar-cube-wrapper">
    {{{subFieldTemplate \'sugar-cube\' \'detail\' cubeOptions}}}
</div>
',
      ),
    ),
    'filter-actions' => 
    array (
      'templates' => 
      array (
        'filter-actions' => '
<div class="row-fluid">
    <div class="controls span6">
        <input type="text" class="inherit-width" placeholder="{{str \'LBL_FILTER_NEW_NAME\' \'Filters\'}}…">
    </div>
    {{#if showActions}}
    <div class="span6">
        <div class="pull-right">
            <a class="btn btn-link btn-invisible reset_button" track="click:filter-reset">{{str "LBL_RESET"}}</a>
            <a class="btn btn-link btn-invisible filter-close" track="click:filter-close">{{str "LBL_CANCEL_BUTTON_LABEL"}}</a>
            <a class="btn btn-link btn-invisible delete_button hide" track="click:filter-delete">{{str "LBL_DELETE"}}</a>
            <a class="btn btn-primary disabled save_button" track="click:filter-save">{{str "LBL_SAVE_BUTTON_LABEL"}}</a>
        </div>
    </div>
    {{/if}}
</div>
',
      ),
    ),
    'filter-filter-dropdown' => 
    array (
      'templates' => 
      array (
        'filter-filter-dropdown' => '
<input type="hidden" class="select2 search-filter" data-placeholder=\'{{str labelDropdownTitle}}\'>
<div class="choice-filter">
    <span class="choice-filter-label"></span>
    <span class="choice-filter-close"><i class="icon-remove-sign"></i></span>
</div>
',
        'result-partial' => '
<div class="{{#if icon}}select2-icon-prepend{{else}}select2-no-icon{{/if}}">
    <span class="select2-match"></span>
    {{#if icon}}<i class="icon {{icon}}"></i>{{/if}}
    {{text}}
</div>
',
        'selection-partial' => '
<span class="select2-choice-type">{{{label}}}{{#if enabled}}<i class="icon-caret-down"></i>{{/if}}</span>
',
      ),
    ),
    'filter-module-dropdown' => 
    array (
      'templates' => 
      array (
        'filter-module-dropdown' => '
<input type="hidden" class="select2 related-filter">
<div class="choice-related"></div>
',
        'result-partial' => '
<div><span class="select2-match"></span>{{str this "Filters"}}</div>',
        'selection-partial' => '
<span class="select2-choice-type">{{{this}}}</span>',
      ),
    ),
    'filter-quicksearch' => 
    array (
      'templates' => 
      array (
        'filter-quicksearch' => '
<input type="text" class="search-name">
',
      ),
    ),
    'filter-rows' => 
    array (
      'templates' => 
      array (
        'filter-row-partial' => '
<div class="filter-body" data-filter="row">
    <div class="row-fluid">
        <div class="controls span4" data-filter="field"></div>
        <div class="hide controls span4" data-filter="operator"></div>
        <div class="hide controls span4" data-filter="value"></div>
        <div class="filter-actions btn-group">
            <button data-action="remove" class="btn btn-invisible btn-dark"><i class="icon-minus"></i></button>
            <button data-action="add" class="btn btn-invisible btn-dark"><i class="icon-plus"></i></button>
        </div>
    </div>
</div>
',
        'filter-rows' => '
{{!filter-row-partial placeholder}}
',
      ),
    ),
    'filtered-list' => 
    array (
      'templates' => 
      array (
        'filtered-list' => '
{{#each meta.panels}}
    <table class="table dataTable table-striped">
        <thead>
        <tr>
            {{#each fields}}
                <th {{#if this.width}}width="{{this.width}}" {{/if}}class="{{#isSortable ../../module this}}sorting{{#eq ../../../orderBy.field name}}_{{{../../../../orderBy.direction}}}{{/eq}} orderBy{{name}}{{/isSortable}}"
                    {{#if name}} data-fieldname="{{name}}"{{/if}} data-orderby="{{orderBy}}">
                    <span>
                        {{str label ../../module}}
                    </span>
                </th>
            {{/each}}
        </tr>
        </thead>
        <tbody>
            {{#if ../filteredCollection.length}}
                {{#each ../../filteredCollection}}
                <tr name="{{module}}_{{attributes.id}}" class="single">
                    {{#each ../../fields}}
                        <td>{{field ../../../../this model=../this template=../../../../this.action}}</td>
                    {{/each}}
                </tr>
                {{/each}}
            {{/if}}
        </tbody>
    </table>
    {{#if ../collection.dataFetched}}
        {{#unless ../../filteredCollection.length}}
            <div class="block-footer">
                <em>{{str "LBL_LISTVIEW_NO_RECORDS" this.module}}</em>
            </div>
        {{/unless}}
    {{else}}
        <div class="block-footer">
            {{str "LBL_LOADING" this.module}}
        </div>
    {{/if}}
{{/each}}
',
      ),
    ),
    'filtered-search' => 
    array (
      'templates' => 
      array (
        'filtered-search' => '
<div class="inline-drawer">
    <article class="inline-drawer-header row-fluid">
        <div class="span12">
            <input type="text"
                   data-searchfield="true"
                   placeholder="{{str \'LBL_SEARCH_BY\' this.module}}"
                   class="span4 search"
                   value="{{searchTerm}}">
        </div>
    </article>
</div>
',
      ),
    ),
    'find-duplicates-headerpane' => 
    array (
      'meta' => 
      array (
        'template' => 'headerpane',
        'title' => 'LBL_DUP_MERGE',
        'buttons' => 
        array (
          0 => 
          array (
            'name' => 'cancel_button',
            'type' => 'button',
            'label' => 'LBL_CANCEL_BUTTON_LABEL',
            'css_class' => 'btn-invisible btn-link',
          ),
          1 => 
          array (
            'name' => 'merge_duplicates_button',
            'type' => 'button',
            'label' => 'LBL_MERGE_DUPLICATES',
            'css_class' => 'btn-primary disabled',
            'acl_action' => 'edit',
          ),
          2 => 
          array (
            'name' => 'sidebar_toggle',
            'type' => 'sidebartoggle',
          ),
        ),
      ),
    ),
    'flex-list' => 
    array (
      'templates' => 
      array (
        'flex-list' => '
{{#each meta.panels}}
<div class="flex-list-view-content">
    <table class="table table-striped dataTable{{#has "ReorderableColumns" ../plugins}} reorderable-columns{{/has}}{{#if ../isLinkAction}} search-and-select{{/if}}">
    <thead>
    <tr>
        {{#each ../leftColumns}}
        <th{{#if name}} data-fieldname="{{name}}"{{/if}}>
            <span>
                {{field ../../this template="list-header"}}
            </span>
        </th>
        {{/each}}
        {{#each ../_fields.visible}}
            <th class="{{#isSortable ../../module this}}sorting{{#eq ../../../orderBy.field name}}_{{../../../../orderBy.direction}}{{/eq}} orderBy{{name}}{{/isSortable}}"
            {{#if name}} data-fieldname="{{name}}"{{/if}} data-orderby="{{orderBy}}">
                {{#has "ReorderableColumns" ../../plugins}}
                {{! Insert a <div> around all the inner element of the column.
                    This is a fix for firefox because the <th> does not support
                    a relative positioning.}}
                <div>
                    <div class="th-droppable-placeholder" data-droppableindex="{{@index}}"></div>
                    {{! Insert a <div> around the <span> containing the field label.
                        That <div> is the draggable element.
                        This is a fix for firefox because dragging a <th> is not
                        supported.}}
                    <div{{#has "ReorderableColumns" ../../../plugins}} data-draggable="true"{{/has}}>
                {{/has}}
                        <span>
                            {{str this.label ../../module}}
                        </span>
                {{#has "ReorderableColumns" ../../plugins}}
                    </div>
                    {{#if @last}}
                        <div class="th-droppable-placeholder th-droppable-placeholder-last" data-droppableindex="{{../../../../_fields.visible.length}}"></div>
                    {{/if}}
                </div>
                {{/has}}
            </th>
        {{/each}}
        {{#each ../rightColumns}}
            {{#if isColumnDropdown}}
            <th class="nosort morecol">
                <div class="dropdown">
                    <button class="btn btn-invisible" data-toggle="dropdown" rel="tooltip" title="{{str "LBL_COLUMNS"}}" data-placement="bottom" data-action="fields-toggle" track="click:morecol"><i class="icon-ellipsis-horizontal"></i></button>
                    <ul class="dropdown-menu left">
                    {{#each ../../../_fields.all}}
                        <li>
                            <button class="{{#if selected}}active{{/if}}" data-field-toggle="{{name}}" track="click:{{name}}">
                                {{#if selected}}<i class="icon icon-ok"></i> {{/if}}{{str label ../../../../module}}
                            </button>
                        </li>
                    {{/each}}
                    </ul>
                </div>
            </th>
            {{else}}
            <th{{#if name}} data-fieldname="{{name}}"{{/if}}>
                <span>
                    {{field ../../this template="list-header"}}
                </span>
            </th>
            {{/if}}
        {{/each}}
    </tr>
    <tr>
        <th data-target="alert-container" class="alert alert-warning hide"{{#if ../this.colSpan}} colspan="{{../../this.colSpan}}"{{/if}}>
            <div data-target="alert">
            </div>
        </th>
    </tr>
    </thead>
    <tbody>
    {{#each ../collection.models}}
    <tr name="{{module}}_{{attributes.id}}" class="single">
        {{#each ../../leftColumns}}
        <td>
             {{field ../../../this model=../this template=../../../this.viewName}}
        </td>
        {{/each}}
        {{#each ../../_fields.visible}}
            <td{{#if this.align}} class="{{this.align}}"{{/if}} {{#if this.maxWidth}}style="max-width:{{this.maxWidth}}" {{/if}}data-type="{{type}}">
              {{field ../../../this model=../this template=../../../this.viewName}}
            </td>
        {{/each}}
        {{#each ../../rightColumns}}
        <td>
             {{field ../../../this model=../this template=../../../this.viewName}}
        </td>
        {{/each}}
    </tr>
    {{/each}}
    </tbody>
    </table>
    <span class="scrollbar-landmark"></span>
</div>
<div class="uxs-scroll-bar" data-scroll-spy="flex-list-view-content"><div>&nbsp;</div></div>
{{#if ../collection.dataFetched}}
    {{#unless ../../collection.length}}
        <div class="block-footer">
            {{str "LBL_NO_DATA_AVAILABLE"}}
        </div>
    {{/unless}}
{{/if}}
{{/each}}
',
      ),
    ),
    'footer-actions' => 
    array (
      'templates' => 
      array (
        'footer-actions' => '
{{#if isAuthenticated}}
   <button data-action="shortcuts" class="btn btn-invisible" aria-label="{{str "LBL_SHORTCUTS"}}" role="link"><i class="icon-keyboard"></i><span class="action-label">  {{str "LBL_SHORTCUTS"}}</span></button>
   <button data-action="tour" class="btn btn-invisible" aria-label="{{str "LNK_TOUR"}}" role="link"><i class="icon-road"></i><span class="action-label"> {{str "LNK_TOUR"}}</span></button>
   <button data-action="feedback" class="btn btn-invisible" aria-label="{{str "LBL_FEEDBACK"}}" role="link"><i class="icon-comment"></i><span class="action-label"> {{str "LBL_FEEDBACK"}}</span></button>
   <button data-action="help" class="btn btn-invisible disabled" aria-label="{{str "LBL_HELP"}}" role="link"><i class="icon-exclamation-sign"></i><span class="action-label"> {{str "LBL_HELP"}}</span></button>
   <button data-action="support" class="btn btn-invisible" aria-label="{{str "LBL_SUPPORT"}}" role="link"><i class="icon-question-sign"></i><span class="action-label"> {{str "LBL_SUPPORT"}}</span></button>
{{/if}}
',
      ),
      'meta' => 
      array (
        'last_state' => 
        array (
          'id' => 'footer-tutorial',
        ),
      ),
    ),
    'forecast-pareto' => 
    array (
      'templates' => 
      array (
        'forecast-pareto' => '

<div class="dashlet-options">
    <div class="row-fluid">
        {{#if displayTimeperiodPivot}}
        <div class="span3">
            {{#each dashletConfig.timeperiod}}
                {{field ../this model=../this.settings template="edit"}}
            {{/each}}
        </div>
        {{/if}}
        <div class="span3 groupByOptions">
            {{#with dashletConfig.group_by}}
                {{field ../this model=../this.settings}}
            {{/with}}
        </div>
        <div class="span3">
            {{#with dashletConfig.dataset}}
                {{field ../this model=../this.settings}}
            {{/with}}
        </div>
        {{#if isManager}}
        <div id="{{cid}}-mgr-toggle" class="pull-right">
            <div class="btn-group dashlet-group" data-toggle="buttons-radio">
                <button track="click:viewMyUserForecastPareTo" class="btn {{#eq settings.attributes.visibility "user"}}active{{/eq}}" rel="tooltip" value="user" data-action="visibility-switcher" title="{{{str "LBL_DASHLET_MY_FORECAST" \'Forecasts\'}}}" data-placement="bottom">
                    <i class="icon-user"></i>
                </button>
                <button track="click:viewMyTeamsForecastPareTo" class="btn {{#eq settings.attributes.visibility "group"}}active{{/eq}}" rel="tooltip" value="group" data-action="visibility-switcher" title="{{{str "LBL_DASHLET_MY_TEAMS_FORECAST" \'Forecasts\'}}}" data-placement="bottom">
                    <i class="icon-group"></i>
                </button>
            </div>
        </div>
        {{/if}}
    </div>
</div>
{{#with dashletConfig.chart}}
    {{field ../this model=../this.settings template=detail}}
{{/with}}
',
        'no-access' => '
<div class="forecasts-chart-wrapper">
    {{#unless isForecastSetup}}
        {{{forecastsNotSetUpMsg}}}
    {{/unless}}
    {{#unless forecastsConfigOK}}
        {{{str "LBL_FORECASTS_MISSING_SALES_STAGE_VALUES" \'Forecasts\'}}}
    {{/unless}}
</div>
',
      ),
      'meta' => 
      array (
        'dashlets' => 
        array (
          0 => 
          array (
            'label' => 'LBL_DASHLET_FORECASTS_CHART_NAME',
            'description' => 'LBL_DASHLET_FORECASTS_CHART_DESC',
            'config' => 
            array (
              'module' => 'Forecasts',
            ),
            'preview' => 
            array (
            ),
            'filter' => 
            array (
              'module' => 
              array (
                0 => 'Home',
                1 => 'Opportunities',
                2 => 'RevenueLineItems',
              ),
              'view' => 
              array (
                0 => 'record',
              ),
            ),
          ),
        ),
        'panels' => 
        array (
          0 => 
          array (
            'name' => 'panel_body',
            'columns' => 2,
            'labelsOnTop' => true,
            'placeholders' => true,
            'fields' => 
            array (
              0 => 
              array (
                'name' => 'visibility',
                'label' => 'LBL_DASHLET_CONFIGURE_MY_ITEMS_ONLY',
                'type' => 'enum',
                'options' => 'forecast_pareto_visibility_options',
                'enum_width' => 'auto',
              ),
            ),
          ),
        ),
        'chart' => 
        array (
          'name' => 'paretoChart',
          'label' => 'Pareto Chart',
          'type' => 'forecast-pareto-chart',
          'view' => 'detail',
        ),
        'timeperiod' => 
        array (
          0 => 
          array (
            'module' => 'Forecasts',
            'name' => 'selectedTimePeriod',
            'label' => 'TimePeriod',
            'type' => 'timeperiod',
            'default' => true,
            'enabled' => true,
            'view' => 'edit',
          ),
        ),
        'group_by' => 
        array (
          'name' => 'group_by',
          'label' => 'LBL_DASHLET_FORECASTS_GROUPBY',
          'type' => 'enum',
          'searchBarThreshold' => 5,
          'default' => true,
          'enabled' => true,
          'view' => 'edit',
          'options' => 'forecasts_chart_options_group',
        ),
        'dataset' => 
        array (
          'name' => 'dataset',
          'label' => 'LBL_DASHLET_FORECASTS_DATASET',
          'type' => 'enum',
          'searchBarThreshold' => 5,
          'default' => true,
          'enabled' => true,
          'view' => 'edit',
          'options' => 'forecasts_options_dataset',
        ),
      ),
    ),
    'forecastdetails' => 
    array (
      'templates' => 
      array (
        'details-msg' => '
<div class="span{{spanCSS}} tcenter">
    <div id="forecast_details_{{case}}_numbers" class="ellipsis_inline" title="{{labelAmount}}" data-placement="bottom">
        <span class="forecast_details_label">
            {{label}}
        </span>

        <br>

        <span class="forecast_details_amount">
            {{{amount}}}
        </span>

    </div>

    <div id="forecast_details_{{case}}_feedback" class="ellipsis_inline" title="{{{feedbackLn1}}} {{{feedbackLn2}}}" data-placement="bottom">
        <span class="forecast_details_feedback">
            {{{feedbackLn1}}}
            <br>
            {{{feedbackLn2}}}
        </span>
    </div>
</div>
',
        'forecastdetails' => '
{{#if isForecastSetup}}
    {{#if forecastsConfigOK}}
        {{#if showTimeperiod}}
            <div class="dashlet-options">
                <div class="row-fluid">
                    <div class="span4">
                        {{#each dashletConfig.timeperiod}}
                            {{field ../this model=../this.settings template="edit"}}
                        {{/each}}
                    </div>
                </div>
            </div>
        {{/if}}
        <div class="forecast-details"></div>
    {{else}}
        <div class="opportunity-pipeline-wrapper">
            {{{str "LBL_FORECASTS_MISSING_SALES_STAGE_VALUES" \'Forecasts\'}}}
        </div>
    {{/if}}
{{else}}
    <div class="opportunity-pipeline-wrapper">
        {{{forecastsNotSetUpMsg}}}
    </div>
{{/if}}
',
        'sub-details' => '
{{#if showTargetQuota}}
    <div class="row-fluid">
        <span class="span6">
            {{str "LBL_QUOTA" "Forecasts"}}
        </span>
        <span class="span6 tright">
            {{target_quota_amount_str}}
        </span>
    </div>
{{/if}}

<div class="row-fluid">
    <span class="span6">
        {{quota_label}}
    </span>
    <span class="span6 tright">
        {{quota_amount_str}}
    </span>
</div>

<div class="row-fluid">
    <span class="span6">
        {{str "LBL_CLOSED" "Forecasts"}}
    </span>
    <span class="span6 tright">
        {{closed_amount_str}}
    </span>
</div>

<div class="row-fluid deficitRow">
    <span class="span6">
        {{deficit_label}}
    </span>
    <span class="span6 tright">
        {{deficit_amount_str}}
    </span>
</div>

<div class="row-fluid">
    {{#if show_details_worst}}
        {{{worst_details}}}
    {{/if}}

    {{#if show_details_likely}}
        {{{likely_details}}}
    {{/if}}

    {{#if show_details_best}}
        {{{best_details}}}
    {{/if}}
</div>
',
      ),
      'meta' => 
      array (
        'dashlets' => 
        array (
          0 => 
          array (
            'label' => 'LBL_DASHLET_FORECAST_NAME',
            'description' => 'LBL_DASHLET_FORECASTS_DETAILS_DESC',
            'config' => 
            array (
              'module' => 'Forecasts',
            ),
            'preview' => 
            array (
            ),
            'filter' => 
            array (
              'module' => 
              array (
                0 => 'Home',
                1 => 'Forecasts',
              ),
              'view' => 
              array (
                0 => 'record',
                1 => 'records',
              ),
            ),
          ),
        ),
        'timeperiod' => 
        array (
          0 => 
          array (
            'module' => 'Forecasts',
            'name' => 'selectedTimePeriod',
            'label' => 'TimePeriod',
            'type' => 'timeperiod',
            'default' => true,
            'enabled' => true,
            'view' => 'edit',
          ),
        ),
      ),
    ),
    'forecastdetails-record' => 
    array (
      'templates' => 
      array (
        'forecastdetails-record' => '
{{#if isForecastSetup}}
    {{#if forecastsConfigOK}}
        <div class="forecast-details"></div>
    {{else}}
        <div class="opportunity-pipeline-wrapper">
            {{{str "LBL_FORECASTS_MISSING_SALES_STAGE_VALUES" \'Forecasts\'}}}
        </div>
    {{/if}}
{{else}}
    <div class="opportunity-pipeline-wrapper">
        {{{forecastsNotSetUpMsg}}}
    </div>
{{/if}}
',
      ),
    ),
    'forgotpassword' => 
    array (
      'templates' => 
      array (
        'forgotpassword' => '
<div class="welcome">
    <div class="thumbnail signup">
        <div class="tcenter">
            <h2 class="brand"><img src="{{logoUrl}}" alt="SugarCRM"></h2>
        </div>
        <form name=\'{{name}}\' class="tcenter">
            {{#if _showResult}}
                <div class="alert alert-{{#if _showSuccess}}success{{else}}error{{/if}} tleft">
                    <p>{{str resultLabel}}</p>
                </div>
            {{/if}}
                {{#each meta.panels}}
                    {{#each fields}}
                    <div class="control-group">{{field ../../this model=../../model template="edit"}}</div>
                    {{/each}}
                {{/each}}
            <div class="signup-footer">
                {{#each meta.buttons}}
                   {{field ../this model=../model template="edit"}}
                {{/each}}
            </div>
        </form>
    </div>
</div>
',
      ),
      'meta' => 
      array (
        'action' => 'list',
        'buttons' => 
        array (
          0 => 
          array (
            'name' => 'forgotPassword_button',
            'type' => 'button',
            'label' => 'LBL_REQUEST_PASSWORD',
            'primary' => true,
          ),
          1 => 
          array (
            'name' => 'cancel_button',
            'type' => 'button',
            'label' => 'LBL_LOGIN_BUTTON_LABEL',
            'css_class' => 'pull-left',
          ),
        ),
        'panels' => 
        array (
          0 => 
          array (
            'label' => 'LBL_PANEL_DEFAULT',
            'fields' => 
            array (
              0 => 
              array (
                'name' => 'username',
                'type' => 'varchar',
                'placeholder' => 'LBL_LIST_USER_NAME',
                'required' => true,
              ),
              1 => 
              array (
                'name' => 'email',
                'type' => 'email-text',
                'placeholder' => 'LBL_EMAIL_BUTTON',
                'required' => true,
              ),
              2 => 
              array (
                'name' => 'first_name',
                'type' => 'text',
                'css_class' => 'hp',
                'placeholder' => 'LBL_HONEYPOT',
              ),
            ),
          ),
        ),
      ),
    ),
    'globalsearch' => 
    array (
      'templates' => 
      array (
        'globalsearch' => '
<div class="navbar-search" aria-role="search">
    <input type="text" class="search-query" placeholder="{{str \'LBL_SEARCH\'}}" data-provide="typeahead" data-items="5" aria-label="{{str \'LBL_GLOBAL_SEARCH\'}}">
    <div class="advanced">
        <div class="btn-toolbar pull-right">
            <div class="btn-group">
                <button class="btn btn-link btn-invisible advanced dropdown-toggle" data-toggle="dropdown" track="click:globalsearch-dropdown" aria-label="{{str \'LBL_GLOBAL_SEARCH_MODULE_FILTER\'}}"><i class="icon-caret-down"></i></button>
                <div class="dropdown-menu pull-right globalsearch-adv-wrap scroll">
                    <ul class="globalsearch-adv reset-width" role="menu" data-advanced="options">
                        <li><label class="active"><input data-action="select-module" data-module="all" type="checkbox" checked="checked" tabindex="-1"> {{str \'LBL_SEARCH_ALL_MODULES\'}}</label></li>
                        {{#each searchModules}}
                        <li><label><input data-action="select-module" data-module="{{this}}" type="checkbox" tabindex="-1"> {{str \'LBL_MODULE_NAME\' this}}</label></li>
                        {{/each}}
                    </ul>
                </div>
                <button class="btn btn-inverse" data-action="search" track="click:globalsearch" aria-label="{{str \'LBL_GLOBAL_SEARCH_RUN\'}}"><i class="icon icon-search"></i></button>
            </div>
        </div>
    </div>
</div>
<div class="typeahead-wrapper"></div>
',
        'result' => '
{{#if data.records}}
    {{#each data.records}}
    <li>
        <a href="{{link}}">
            <span class="label label-module label-module-mini label-{{module}}" title="{{str "LBL_MODULE_NAME" module}}">{{moduleIconLabel module}}</span> {{name}}{{#if field_name}}, {{field_name}}: {{field_value}}{{/if}}
        </a>
    </li>
    {{/each}}
    {{#notEq data.next_offset "-1"}}
        <li>
            <a href="#bwc/index.php?module=Home&append_wildcard=true&action=spot&full=true&q={{term}}&m={{data.module_list}}">{{str "LNK_SEARCH_FTS_VIEW_ALL"}}</a>
        </li>
    {{/notEq}}
{{else}}
    <li class="no-results">
    {{str "LNK_SEARCH_NO_RESULTS"}}
    </li>
{{/if}}
',
      ),
    ),
    'headerpane' => 
    array (
      'templates' => 
      array (
        'headerpane' => '
<div class="headerpane">
    <h1>
        {{#each meta.fields}}
            <span class="record-cell" data-type="{{type}}" data-name="{{name}}">
                <span class="table-cell-wrapper">
                    <span class="index" data-fieldname="{{name}}" data-index="">
                        {{field ../this model=../this.model}}
                    </span>
                </span>
            </span>
        {{/each}}
        <div class="btn-toolbar pull-right dropdown">
            {{#each meta.buttons}}
                {{field ../this}}
            {{/each}}
        </div>
    </h1>
</div>
',
      ),
      'meta' => 
      array (
        'fields' => 
        array (
          0 => 
          array (
            'name' => 'title',
            'type' => 'label',
            'default_value' => 'LBL_MODULE_NAME',
          ),
        ),
        'buttons' => 
        array (
          0 => 
          array (
            'name' => 'create_button',
            'type' => 'button',
            'label' => 'LBL_CREATE_BUTTON_LABEL',
            'css_class' => 'btn-primary',
            'acl_action' => 'create',
            'route' => 
            array (
              'action' => 'create',
            ),
          ),
          1 => 
          array (
            'name' => 'sidebar_toggle',
            'type' => 'sidebartoggle',
          ),
        ),
      ),
    ),
    'help-dashboard-headerpane' => 
    array (
      'meta' => 
      array (
        'type' => 'dashboard-headerpane',
        'buttons' => 
        array (
          0 => 
          array (
            'type' => 'actiondropdown',
            'buttons' => 
            array (
              0 => 
              array (
                'name' => 'add_button',
                'type' => 'rowaction',
                'label' => 'LBL_CREATE_BUTTON_LABEL',
                'css_class' => 'btn',
              ),
              1 => 
              array (
                'name' => 'collapse_button',
                'type' => 'rowaction',
                'label' => 'LBL_DASHLET_MINIMIZE_ALL',
              ),
              2 => 
              array (
                'name' => 'expand_button',
                'type' => 'rowaction',
                'label' => 'LBL_DASHLET_MAXIMIZE_ALL',
              ),
            ),
            'showOn' => 'view',
          ),
          1 => 
          array (
            'name' => 'cancel_button',
            'type' => 'button',
            'label' => 'LBL_CANCEL_BUTTON_LABEL',
            'css_class' => 'btn-invisible btn-link',
            'showOn' => 'edit',
          ),
          2 => 
          array (
            'name' => 'save_button',
            'type' => 'button',
            'label' => 'LBL_SAVE_BUTTON_LABEL',
            'css_class' => 'btn-primary',
            'showOn' => 'edit',
          ),
          3 => 
          array (
            'name' => 'create_cancel_button',
            'type' => 'button',
            'label' => 'LBL_CANCEL_BUTTON_LABEL',
            'css_class' => 'btn-invisible btn-link',
            'showOn' => 'create',
          ),
          4 => 
          array (
            'name' => 'create_button',
            'type' => 'button',
            'label' => 'LBL_SAVE_BUTTON_LABEL',
            'css_class' => 'btn-primary',
            'showOn' => 'create',
          ),
        ),
        'panels' => 
        array (
          0 => 
          array (
            'name' => 'header',
            'fields' => 
            array (
              0 => 
              array (
                'type' => 'dashboardtitle',
                'name' => 'name',
                'placeholder' => 'LBL_DASHBOARD_TITLE',
              ),
              1 => 
              array (
                'type' => 'layoutbutton',
                'name' => 'layout',
              ),
            ),
          ),
        ),
      ),
    ),
    'help-dashlet' => 
    array (
      'templates' => 
      array (
        'help-dashlet' => '
<div class="help-dashlet-content">
    <div class="help-body">
        {{nl2br body}}
    </div>

    <div class="help-more">
        {{{more_help}}}
    </div>
</div>
',
      ),
      'meta' => 
      array (
        'dashlets' => 
        array (
          0 => 
          array (
            'label' => 'LBL_DEFAULT_HELP_DASHLET_TITLE',
            'description' => 'LBL_DEFAULT_HELP_DASHLET_DESC',
            'config' => 
            array (
            ),
            'preview' => 
            array (
            ),
            'filter' => 
            array (
              'dashboard' => 
              array (
                0 => 'help-dashboard',
              ),
            ),
          ),
        ),
        'custom_toolbar' => 
        array (
          'buttons' => 
          array (
            0 => 
            array (
              'type' => 'dashletaction',
              'css_class' => 'dashlet-toggle btn btn-invisible minify',
              'icon' => 'icon-chevron-up',
              'action' => 'toggleMinify',
              'tooltip' => 'LBL_DASHLET_TOGGLE',
            ),
          ),
        ),
      ),
    ),
    'history' => 
    array (
      'meta' => 
      array (
        'dashlets' => 
        array (
          0 => 
          array (
            'label' => 'LBL_HISTORY_DASHLET',
            'description' => 'LBL_HISTORY_DASHLET_DESCRIPTION',
            'config' => 
            array (
              'limit' => '10',
              'filter' => '7',
              'visibility' => 'user',
            ),
            'preview' => 
            array (
              'limit' => '10',
              'filter' => '7',
              'visibility' => 'user',
            ),
            'filter' => 
            array (
              'module' => 
              array (
                0 => 'Accounts',
                1 => 'Bugs',
                2 => 'Cases',
                3 => 'Contacts',
                4 => 'Home',
                5 => 'Leads',
                6 => 'Opportunities',
                7 => 'Prospects',
                8 => 'RevenueLineItems',
              ),
              'view' => 'record',
            ),
          ),
        ),
        'custom_toolbar' => 
        array (
          'buttons' => 
          array (
            0 => 
            array (
              'type' => 'actiondropdown',
              'no_default_action' => true,
              'icon' => 'icon-plus',
              'buttons' => 
              array (
                0 => 
                array (
                  'type' => 'dashletaction',
                  'action' => 'archiveEmail',
                  'params' => 
                  array (
                    'link' => 'emails',
                    'module' => 'Emails',
                  ),
                  'label' => 'LBL_ARCHIVE_EMAIL',
                  'acl_action' => 'create',
                  'acl_module' => 'Emails',
                ),
              ),
            ),
            1 => 
            array (
              'dropdown_buttons' => 
              array (
                0 => 
                array (
                  'type' => 'dashletaction',
                  'action' => 'editClicked',
                  'label' => 'LBL_DASHLET_CONFIG_EDIT_LABEL',
                ),
                1 => 
                array (
                  'type' => 'dashletaction',
                  'action' => 'refreshClicked',
                  'label' => 'LBL_DASHLET_REFRESH_LABEL',
                ),
                2 => 
                array (
                  'type' => 'dashletaction',
                  'action' => 'toggleClicked',
                  'label' => 'LBL_DASHLET_MINIMIZE',
                  'event' => 'minimize',
                ),
                3 => 
                array (
                  'type' => 'dashletaction',
                  'action' => 'removeClicked',
                  'label' => 'LBL_DASHLET_REMOVE_LABEL',
                ),
              ),
            ),
          ),
        ),
        'panels' => 
        array (
          0 => 
          array (
            'name' => 'panel_body',
            'columns' => 2,
            'labelsOnTop' => true,
            'placeholders' => true,
            'fields' => 
            array (
              0 => 
              array (
                'name' => 'filter',
                'label' => 'LBL_DASHLET_CONFIGURE_FILTERS',
                'type' => 'enum',
                'options' => 'history_filter_options',
              ),
              1 => 
              array (
                'name' => 'visibility',
                'label' => 'LBL_DASHLET_CONFIGURE_MY_ITEMS_ONLY',
                'type' => 'enum',
                'options' => 'history_visibility_options',
              ),
              2 => 
              array (
                'name' => 'limit',
                'label' => 'LBL_DASHLET_CONFIGURE_DISPLAY_ROWS',
                'type' => 'enum',
                'options' => 'history_limit_options',
              ),
            ),
          ),
        ),
        'filter' => 
        array (
          0 => 
          array (
            'name' => 'filter',
            'label' => 'LBL_FILTER',
            'type' => 'enum',
            'options' => 'history_filter_options',
          ),
        ),
        'tabs' => 
        array (
          0 => 
          array (
            'active' => true,
            'filter_applied_to' => 'date_start',
            'filters' => 
            array (
              'status' => 
              array (
                '$in' => 
                array (
                  0 => 'Held',
                  1 => 'Not Held',
                ),
              ),
            ),
            'link' => 'meetings',
            'module' => 'Meetings',
            'order_by' => 'date_start:desc',
            'record_date' => 'date_start',
            'row_actions' => 
            array (
              0 => 
              array (
                'type' => 'unlink-action',
                'icon' => 'icon-unlink',
                'css_class' => 'btn btn-mini',
                'event' => 'tabbed-dashlet:unlink-record:fire',
                'target' => 'view',
                'tooltip' => 'LBL_UNLINK_BUTTON',
                'acl_action' => 'edit',
              ),
            ),
            'include_child_items' => true,
          ),
          1 => 
          array (
            'filter_applied_to' => 'date_entered',
            'filters' => 
            array (
              'type' => 
              array (
                '$in' => 
                array (
                  0 => 'out',
                  1 => 'inbound',
                  2 => 'archived',
                ),
              ),
            ),
            'labels' => 
            array (
              'singular' => 'LBL_HISTORY_DASHLET_EMAIL_SINGULAR',
              'plural' => 'LBL_HISTORY_DASHLET_EMAIL_PLURAL',
            ),
            'link' => 'archived_emails',
            'module' => 'Emails',
            'order_by' => 'date_entered:desc',
            'row_actions' => 
            array (
              0 => 
              array (
                'type' => 'unlink-action',
                'icon' => 'icon-unlink',
                'css_class' => 'btn btn-mini',
                'event' => 'tabbed-dashlet:unlink-record:fire',
                'target' => 'view',
                'tooltip' => 'LBL_UNLINK_BUTTON',
                'acl_action' => 'edit',
              ),
            ),
          ),
          2 => 
          array (
            'filter_applied_to' => 'date_start',
            'filters' => 
            array (
              'status' => 
              array (
                '$in' => 
                array (
                  0 => 'Held',
                  1 => 'Not Held',
                ),
              ),
            ),
            'link' => 'calls',
            'module' => 'Calls',
            'order_by' => 'date_start:desc',
            'record_date' => 'date_start',
            'row_actions' => 
            array (
              0 => 
              array (
                'type' => 'unlink-action',
                'icon' => 'icon-unlink',
                'css_class' => 'btn btn-mini',
                'event' => 'tabbed-dashlet:unlink-record:fire',
                'target' => 'view',
                'tooltip' => 'LBL_UNLINK_BUTTON',
                'acl_action' => 'edit',
              ),
            ),
            'include_child_items' => true,
          ),
        ),
        'visibility_labels' => 
        array (
          'user' => 'LBL_HISTORY_DASHLET_USER_BUTTON_LABEL',
          'group' => 'LBL_HISTORY_DASHLET_GROUP_BUTTON_LABEL',
        ),
      ),
      'templates' => 
      array (
        'records' => '
<div class="tab-pane active">
    {{#if collection.length}}
        <ul class="unstyled listed" data-action="pagination-body">
            {{#each collection.models}}
                <li>
                    {{#if ../../row_actions}}
                        <div class="actions pull-right">
                            {{#each ../../row_actions}}
                                {{field ../../../this model=../this}}
                            {{/each}}
                        </div>
                    {{/if}}
                    <p>
                        {{#if attributes.assigned_user_id}}
                            <a href="#{{buildRoute module="Employees" id=attributes.assigned_user_id action="detail"}}" class="pull-left avatar avatar-md" data-title="{{getFieldValue this "assigned_user_name"}}">
                                <img src="{{getFieldValue this "picture_url"}}" alt="{{getFieldValue this "assigned_user_name"}}">
                            </a>
                        {{else}}
                            <span class="icon-stack pull-left">
                                <i class="icon-user icon-stack-base"></i>
                                <i class="icon-question-sign icon-light"></i>
                            </span>
                        {{/if}}
                        <a href="#{{buildRoute model=this action="detail"}}">{{getFieldValue this "name"}}</a>
                    </p>
                    <div class="details">
                        {{#if attributes.assigned_user_id}}
                            <a href="#{{buildRoute module="Employees" id=attributes.assigned_user_id action="detail"}}">{{getFieldValue this "assigned_user_name"}}</a>&#44;
                        {{else}}
                            {{str "LBL_UNASSIGNED" this.module}}&#44;
                        {{/if}}
                        {{relativeTime attributes.record_date class="date"}}
                    </div>
                </li>
            {{/each}}
        </ul>
    {{else}}
        <div class="block-footer">{{#if ../collection.dataFetched}}{{str "LBL_NO_DATA_AVAILABLE" this.module}}{{else}}{{str "LBL_LOADING" this.module}}{{/if}}</div>
    {{/if}}
</div>
',
        'row' => '
{{#with rowModel}}
    <li>
        {{#if ../row_actions}}
            <div class="actions pull-right">
                {{#each ../../row_actions}}
                    {{field ../../../this model=../this}}
                {{/each}}
            </div>
        {{/if}}
        <p>
            {{#if attributes.assigned_user_id}}
                <a href="#{{buildRoute module="Employees" id=attributes.assigned_user_id action="detail"}}" class="pull-left avatar avatar-md" data-title="{{getFieldValue this "assigned_user_name"}}">
                    <img src="{{getFieldValue this "picture_url"}}" alt="{{getFieldValue this "assigned_user_name"}}">
                </a>
            {{else}}
                <span class="icon-stack pull-left">
                                <i class="icon-user icon-stack-base"></i>
                                <i class="icon-question-sign icon-light"></i>
                            </span>
            {{/if}}
            <a href="#{{buildRoute model=this action="detail"}}">{{getFieldValue this "name"}}</a>
        </p>
        <div class="details">
            {{#if attributes.assigned_user_id}}
                <a href="#{{buildRoute module="Employees" id=attributes.assigned_user_id action="detail"}}">
                    {{getFieldValue this "assigned_user_name"}}&#44;
                </a>
            {{else}}
                {{str "LBL_UNASSIGNED" this.module}}&#44;
            {{/if}}
            {{relativeTime attributes.record_date class=\'date\'}}
        </div>
    </li>
{{/with}}
',
      ),
    ),
    'history-summary' => 
    array (
      'templates' => 
      array (
        'history-summary' => '
{{#each meta.panels}}
<div class="flex-list-view-content">
    <table class="table table-striped dataTable{{#has "ReorderableColumns" ../plugins}} reorderable-columns{{/has}}{{#if ../isLinkAction}} search-and-select{{/if}}">
    <thead>
    <tr>
        {{#each ../leftColumns}}
        <th{{#if name}} data-fieldname="{{name}}"{{/if}}>
            <span>
                {{field ../../this template="list-header"}}
            </span>
        </th>
        {{/each}}
        {{#each ../_fields.visible}}
            <th class="{{#if css_class}}{{css_class}}{{else}}cell-medium{{/if}} {{#if isSortable}}sorting{{#eq ../../../orderBy.field name}}_{{../../../../orderBy.direction}}{{/eq}} orderBy{{name}}{{/if}}"
            {{#if name}} data-fieldname="{{name}}"{{/if}} data-orderby="{{orderBy}}">
                {{#has "ReorderableColumns" ../../plugins}}
                {{! Insert a <div> around all the inner element of the column.
                    This is a fix for firefox because the <th> does not support
                    a relative positioning.}}
                <div>
                    <div class="th-droppable-placeholder" data-droppableindex="{{@index}}"></div>
                    {{! Insert a <div> around the <span> containing the field label.
                        That <div> is the draggable element.
                        This is a fix for firefox because dragging a <th> is not
                        supported.}}
                    <div{{#has "ReorderableColumns" ../../../plugins}} data-draggable="true"{{/has}}>
                {{/has}}
                        <span>
                            {{str this.label ../../module}}
                        </span>
                {{#has "ReorderableColumns" ../../plugins}}
                    </div>
                    {{#if @last}}
                        <div class="th-droppable-placeholder th-droppable-placeholder-last" data-droppableindex="{{../../../../_fields.visible.length}}"></div>
                    {{/if}}
                </div>
                {{/has}}
            </th>
        {{/each}}
        {{#each ../rightColumns}}
            {{#if isColumnDropdown}}
            <th class="nosort morecol">
                <div class="dropdown">
                    <button class="btn btn-invisible" data-toggle="dropdown" rel="tooltip" title="{{str "LBL_COLUMNS"}}" data-placement="bottom" data-action="fields-toggle" track="click:morecol"><i class="icon-ellipsis-horizontal"></i></button>
                    <ul class="dropdown-menu left">
                    {{#each ../../../_fields.all}}
                        <li>
                            <button class="{{#if selected}}active{{/if}}" data-field-toggle="{{name}}" track="click:{{name}}">
                                {{#if selected}}<i class="icon icon-ok"></i> {{/if}}{{str label ../../../../module}}
                            </button>
                        </li>
                    {{/each}}
                    </ul>
                </div>
            </th>
            {{else}}
            <th{{#if name}} data-fieldname="{{name}}"{{/if}}>
                <span>
                    {{field ../../this template="list-header"}}
                </span>
            </th>
            {{/if}}
        {{/each}}
    </tr>
    <tr>
        <th data-target="alert-container" class="alert alert-warning hide"{{#if ../this.colSpan}} colspan="{{../../this.colSpan}}"{{/if}}>
            <div data-target="alert">
            </div>
        </th>
    </tr>
    </thead>
    <tbody>
    {{#each ../collection.models}}
    <tr name="{{module}}_{{attributes.id}}" class="single">
        {{#each ../../leftColumns}}
        <td>
             {{field ../../../this model=../this template=../../../this.viewName}}
        </td>
        {{/each}}
        {{#each ../../_fields.visible}}
            <td{{#if this.align}} class="{{this.align}}"{{/if}} {{#if this.maxWidth}}style="max-width:{{this.maxWidth}}" {{/if}}data-type="{{type}}">
              {{field ../../../this model=../this template=../../../this.viewName}}
            </td>
        {{/each}}
        {{#each ../../rightColumns}}
        <td>
             {{field ../../../this model=../this template=../../../this.viewName}}
        </td>
        {{/each}}
    </tr>
    {{/each}}
    </tbody>
</table>
</div>
{{#if ../collection.dataFetched}}
    {{#unless ../../collection.length}}
        <div class="block-footer">
            {{str "LBL_NO_DATA_AVAILABLE"}}
        </div>
    {{/unless}}
{{/if}}
{{/each}}
',
      ),
      'meta' => 
      array (
        'template' => 'history-summary',
        'rowactions' => 
        array (
          'actions' => 
          array (
            0 => 
            array (
              'type' => 'preview-button',
              'css_class' => 'btn',
              'tooltip' => 'LBL_PREVIEW',
              'event' => 'list:preview:fire',
              'icon' => 'icon-eye-open',
              'acl_action' => 'view',
            ),
          ),
        ),
        'panels' => 
        array (
          0 => 
          array (
            'fields' => 
            array (
              0 => 
              array (
                'name' => 'picture',
                'type' => 'avatar',
                'align' => 'tcenter',
                'label' => 'LBL_MODULE_TYPE',
                'dismiss_label' => true,
                'readonly' => true,
                'enabled' => true,
                'default' => true,
                'isSortable' => true,
                'css_class' => 'cell-small',
              ),
              1 => 
              array (
                'name' => 'name',
                'label' => 'LBL_SUBJECT',
                'type' => 'name',
                'enabled' => true,
                'default' => true,
                'link' => true,
                'isSortable' => true,
                'css_class' => 'cell-large',
              ),
              2 => 
              array (
                'name' => 'status',
                'label' => 'LBL_STATUS',
                'type' => 'status',
                'enabled' => true,
                'default' => true,
              ),
              3 => 
              array (
                'name' => 'description',
                'type' => 'textarea',
                'label' => 'LBL_DESCRIPTION',
                'enabled' => true,
                'default' => true,
                'css_class' => 'cell-xlarge',
              ),
              4 => 
              array (
                'name' => 'to_addrs',
                'type' => 'email',
                'label' => 'LBL_HISTORICAL_SUMMARY_EMAIL_TO',
                'enabled' => true,
                'default' => true,
              ),
              5 => 
              array (
                'name' => 'from_addr',
                'type' => 'email',
                'label' => 'LBL_HISTORICAL_SUMMARY_EMAIL_FROM',
                'enabled' => true,
                'default' => true,
              ),
              6 => 
              array (
                'name' => 'related_contact',
                'label' => 'LBL_RELATED_CONTACT',
                'enabled' => true,
                'default' => true,
                'type' => 'related-contact',
                'link' => true,
              ),
              7 => 
              array (
                'name' => 'date_entered',
                'label' => 'LBL_LIST_DATE_ENTERED',
                'type' => 'datetimecombo',
                'enabled' => true,
                'default' => false,
                'isSortable' => true,
              ),
              8 => 
              array (
                'name' => 'date_modified',
                'label' => 'LBL_DATE_MODIFIED',
                'type' => 'datetimecombo',
                'enabled' => true,
                'default' => true,
                'isSortable' => true,
              ),
              9 => 
              array (
                'name' => 'assigned_user_name',
                'label' => 'LBL_LIST_ASSIGNED_USER',
                'id_name' => 'assigned_user_id',
                'link' => 'assigned_user_link',
                'module' => 'Users',
                'rname' => 'full_name',
                'type' => 'relate',
                'isSortable' => false,
                'enabled' => true,
                'default' => false,
              ),
            ),
          ),
        ),
        'last_state' => 
        array (
          'id' => 'history-summary',
        ),
      ),
    ),
    'history-summary-headerpane' => 
    array (
      'meta' => 
      array (
        'template' => 'headerpane',
        'fields' => 
        array (
          0 => 
          array (
            'name' => 'picture',
            'type' => 'avatar',
            'size' => 'large',
            'dismiss_label' => true,
            'readonly' => true,
          ),
          1 => 
          array (
            'name' => 'title',
            'type' => 'label',
            'default_value' => 'TPL_HISTORICAL_SUMMARY',
          ),
        ),
        'buttons' => 
        array (
          0 => 
          array (
            'name' => 'cancel_button',
            'type' => 'button',
            'label' => 'LBL_CLOSE_BUTTON_LABEL',
            'css_class' => 'btn-primary',
          ),
          1 => 
          array (
            'name' => 'sidebar_toggle',
            'type' => 'sidebartoggle',
          ),
        ),
      ),
    ),
    'history-summary-list-bottom' => 
    array (
      'meta' => 
      array (
        'template' => 'list-bottom',
      ),
    ),
    'history-summary-preview' => 
    array (
      'templates' => 
      array (
        'history-summary-preview' => '
<div class="block preview-data">
    {{#each meta.panels}}
        {{#each fields}}
            <div class="row-fluid{{#if ../hide}}{{#if ../../../hidePanel}} hide{{/if}} panel_hidden{{/if}}">
                <div class="span5">{{str  this.label ../../this.model.module}}</div>
                <div class="span7" data-type="{{type}}" name="{{name}}">
                    {{field ../../this model=../../model template="detail"}}
                </div>
            </div>
        {{/each}}
    {{/each}}
    <div class="row-fluid">
        <div class="{{#unless hiddenPanelExists}} hide{{/unless}} span5 show-hide-toggle">
            <button class="btn-link btn-invisible more{{#if hideMoreButton}} hide{{/if}}"
                    data-moreless="more"
                    data-target=".panel_hidden">{{str "LBL_SHOW_MORE"}} <i class="icon-chevron-down"></i></button>
            <button class="btn-link btn-invisible less{{#if hideLessButton}} hide{{/if}}"
                    data-moreless="less"
                    data-target=".panel_hidden">{{str "LBL_SHOW_LESS"}} <i class="icon-chevron-up"></i></button>
        </div>
    </div>
</div>
',
      ),
    ),
    'history-summary-preview-header' => 
    array (
      'templates' => 
      array (
        'history-summary-preview-header' => '

<h1>{{str "LBL_PREVIEW"}}</h1>
<div class="btn-toolbar pull-right">
    <div class="btn-group">
        <a class="btn btn-invisible closeSubdetail" data-toggle="tab"><i class="icon-remove"></i></a>
    </div>
</div>
',
      ),
    ),
    'inactive-tasks' => 
    array (
      'meta' => 
      array (
        'dashlets' => 
        array (
          0 => 
          array (
            'label' => 'LBL_INACTIVE_TASKS_DASHLET',
            'description' => 'LBL_INACTIVE_TASKS_DASHLET_DESCRIPTION',
            'config' => 
            array (
              'limit' => 10,
              'visibility' => 'user',
            ),
            'preview' => 
            array (
              'limit' => 10,
              'visibility' => 'user',
            ),
            'filter' => 
            array (
              'module' => 
              array (
                0 => 'Accounts',
                1 => 'Bugs',
                2 => 'Cases',
                3 => 'Contacts',
                4 => 'Home',
                5 => 'Leads',
                6 => 'Opportunities',
                7 => 'Prospects',
                8 => 'RevenueLineItems',
              ),
              'view' => 'record',
            ),
          ),
        ),
        'custom_toolbar' => 
        array (
          'buttons' => 
          array (
            0 => 
            array (
              'type' => 'actiondropdown',
              'no_default_action' => true,
              'icon' => 'icon-plus',
              'buttons' => 
              array (
                0 => 
                array (
                  'type' => 'dashletaction',
                  'action' => 'createRecord',
                  'params' => 
                  array (
                    'module' => 'Tasks',
                    'link' => 'tasks',
                  ),
                  'label' => 'LBL_CREATE_TASK',
                  'acl_action' => 'create',
                  'acl_module' => 'Tasks',
                ),
              ),
            ),
            1 => 
            array (
              'dropdown_buttons' => 
              array (
                0 => 
                array (
                  'type' => 'dashletaction',
                  'action' => 'editClicked',
                  'label' => 'LBL_DASHLET_CONFIG_EDIT_LABEL',
                ),
                1 => 
                array (
                  'type' => 'dashletaction',
                  'action' => 'refreshClicked',
                  'label' => 'LBL_DASHLET_REFRESH_LABEL',
                ),
                2 => 
                array (
                  'type' => 'dashletaction',
                  'action' => 'toggleClicked',
                  'label' => 'LBL_DASHLET_MINIMIZE',
                  'event' => 'minimize',
                ),
                3 => 
                array (
                  'type' => 'dashletaction',
                  'action' => 'removeClicked',
                  'label' => 'LBL_DASHLET_REMOVE_LABEL',
                ),
              ),
            ),
          ),
        ),
        'panels' => 
        array (
          0 => 
          array (
            'name' => 'panel_body',
            'columns' => 2,
            'labelsOnTop' => true,
            'placeholders' => true,
            'fields' => 
            array (
              0 => 
              array (
                'name' => 'visibility',
                'label' => 'LBL_DASHLET_CONFIGURE_MY_ITEMS_ONLY',
                'type' => 'enum',
                'options' => 'tasks_visibility_options',
              ),
              1 => 
              array (
                'name' => 'limit',
                'label' => 'LBL_DASHLET_CONFIGURE_DISPLAY_ROWS',
                'type' => 'enum',
                'options' => 'tasks_limit_options',
              ),
            ),
          ),
        ),
        'tabs' => 
        array (
          0 => 
          array (
            'active' => true,
            'filters' => 
            array (
              'status' => 
              array (
                '$equals' => 'Deferred',
              ),
            ),
            'label' => 'LBL_INACTIVE_TASKS_DASHLET_DEFERRED',
            'link' => 'tasks',
            'module' => 'Tasks',
            'order_by' => 'date_modified:desc',
            'record_date' => 'date_modified',
            'row_actions' => 
            array (
              0 => 
              array (
                'type' => 'unlink-action',
                'icon' => 'icon-unlink',
                'css_class' => 'btn btn-mini',
                'event' => 'tabbed-dashlet:unlink-record:fire',
                'target' => 'view',
                'tooltip' => 'LBL_UNLINK_BUTTON',
                'acl_action' => 'edit',
              ),
            ),
          ),
          1 => 
          array (
            'filters' => 
            array (
              'status' => 
              array (
                '$equals' => 'Completed',
              ),
            ),
            'label' => 'LBL_INACTIVE_TASKS_DASHLET_COMPLETED',
            'link' => 'tasks',
            'module' => 'Tasks',
            'order_by' => 'date_modified:desc',
            'record_date' => 'date_modified',
            'row_actions' => 
            array (
              0 => 
              array (
                'type' => 'unlink-action',
                'icon' => 'icon-unlink',
                'css_class' => 'btn btn-mini',
                'event' => 'tabbed-dashlet:unlink-record:fire',
                'target' => 'view',
                'tooltip' => 'LBL_UNLINK_BUTTON',
                'acl_action' => 'edit',
              ),
            ),
          ),
        ),
        'visibility_labels' => 
        array (
          'user' => 'LBL_INACTIVE_TASKS_DASHLET_USER_BUTTON_LABEL',
          'group' => 'LBL_INACTIVE_TASKS_DASHLET_GROUP_BUTTON_LABEL',
        ),
      ),
      'templates' => 
      array (
        'records' => '
<div class="tab-pane active">
    {{#if collection.length}}
        <ul class="unstyled listed" data-action="pagination-body">
            {{#each collection.models}}
                <li>
                    {{#if ../../row_actions}}
                        <div class="actions pull-right">
                            {{#each ../../row_actions}}
                                {{field ../../../this model=../this}}
                            {{/each}}
                        </div>
                    {{/if}}
                    <p>
                        {{#if attributes.assigned_user_id}}
                            <a href="#{{buildRoute module="Employees" id=attributes.assigned_user_id action="detail"}}" class="pull-left avatar avatar-md" data-title="{{getFieldValue this "assigned_user_name"}}">
                                <img src="{{getFieldValue this "picture_url"}}" alt="{{getFieldValue this "assigned_user_name"}}">
                            </a>
                        {{else}}
                            <span class="icon-stack pull-left">
                                <i class="icon-user icon-stack-base"></i>
                                <i class="icon-question-sign icon-light"></i>
                            </span>
                        {{/if}}
                        <a href="#{{buildRoute model=this action="detail"}}">{{getFieldValue this "name"}}</a>
                    </p>
                    <div class="details">
                        {{#if attributes.assigned_user_id}}
                            <a href="#{{buildRoute module="Employees" id=attributes.assigned_user_id action="detail"}}">{{getFieldValue this "assigned_user_name"}}</a>&#44;
                        {{else}}
                            {{str "LBL_UNASSIGNED" this.module}}&#44;
                        {{/if}}
                        {{relativeTime attributes.record_date class=\'date\'}}
                    </div>
                </li>
            {{/each}}
        </ul>
    {{else}}
        <div class="block-footer">{{#if ../collection.dataFetched}}{{str "LBL_NO_DATA_AVAILABLE" this.module}}{{else}}{{str "LBL_LOADING" this.module}}{{/if}}</div>
    {{/if}}
</div>
',
        'row' => '
{{#with rowModel}}
    <li>
        {{#if ../row_actions}}
            <div class="actions pull-right">
                {{#each ../../row_actions}}
                    {{field ../../../this model=../this}}
                {{/each}}
            </div>
        {{/if}}
        <p>
            {{#if attributes.assigned_user_id}}
                <a href="#{{buildRoute module="Employees" id=attributes.assigned_user_id action="detail"}}" class="pull-left avatar avatar-md" data-title="{{getFieldValue this "assigned_user_name"}}">
                    <img src="{{getFieldValue this "picture_url"}}" alt="{{getFieldValue this "assigned_user_name"}}">
                </a>
            {{else}}
                <span class="icon-stack pull-left">
                                <i class="icon-user icon-stack-base"></i>
                                <i class="icon-question-sign icon-light"></i>
                            </span>
            {{/if}}
            <a href="#{{buildRoute model=this action="detail"}}">{{getFieldValue this "name"}}</a>
        </p>
        <div class="details">
            {{#if attributes.assigned_user_id}}
                <a href="#{{buildRoute module="Employees" id=attributes.assigned_user_id action="detail"}}">
                    {{getFieldValue this "assigned_user_name"}}&#44;
                </a>
            {{else}}
                {{str "LBL_UNASSIGNED" this.module}}&#44;
            {{/if}}
            {{relativeTime attributes.record_date class=\'date\'}}
        </div>
    </li>
{{/with}}
',
      ),
    ),
    'interactionschart' => 
    array (
      'templates' => 
      array (
        'interactionschart' => '
<div class="dashlet-options">
    <div class="row-fluid">
        <div class="span8">
            {{#each this.meta.filter_duration}}
                {{field ../this model=../this.model template="edit"}}
            {{/each}}
        </div>
        <div class="span4">
            <div data-toggle="buttons-radio" class="btn-group pull-right dashlet-group">
                <button class="btn interactions-chart {{#eq params.list "my"}}active{{/eq}}" value="my"><i class="icon-user"></i></button>
                <button class="btn interactions-chart {{#eq params.list "all"}}active{{/eq}}" value="all"><i class="icon-group"></i></button>
            </div>
        </div>
    </div>
</div>
<div>
    <svg></svg>
</div>
',
      ),
      'meta' => 
      array (
        'dashlets' => 
        array (
          0 => 
          array (
            'name' => 'Interactions Chart',
            'description' => 'Displays Account interactions on chart.',
            'config' => 
            array (
            ),
            'preview' => 
            array (
            ),
            'filter' => 
            array (
              'module' => 
              array (
                0 => 'Documents',
              ),
              'view' => 'record',
            ),
          ),
        ),
        'panels' => 
        array (
          0 => 
          array (
            'name' => 'panel_body',
            'columns' => 2,
            'labelsOnTop' => true,
            'placeholders' => true,
            'fields' => 
            array (
              0 => 
              array (
                'name' => 'filter_duration',
                'label' => 'Filter',
                'type' => 'enum',
                'options' => 'interactions_options',
              ),
            ),
          ),
        ),
        'ui' => 
        array (
          'colors' => 
          array (
            'default' => '#085f94',
            'calls' => '#cce8f6',
            'emailsSent' => '#0092d1',
            'emailsRecv' => '#085f94',
            'meetings' => '#0d3d66',
          ),
        ),
        'filter_duration' => 
        array (
          0 => 
          array (
            'name' => 'filter_duration',
            'label' => 'Filter',
            'type' => 'enum',
            'options' => 'interactions_options',
          ),
        ),
      ),
    ),
    'language-actions' => 
    array (
      'templates' => 
      array (
        'language-actions' => '

{{#unless isAuthenticated}}
<span class="dropdown" data-action="languageList" id="languageList">
        <button title="{{str \'LBL_LANGUAGE\'}}" aria-label="{{str \'LBL_LANGUAGE\'}}" class="btn btn-invisible dropdown-toggle" data-toggle="dropdown" role="button" type="button">
            <i class="icon-globe"></i><span class="action-label">{{str \'LBL_LANGUAGE\'}}</span>
        </button>
        <div class="dropdown-menu bottom-up">
            <ul role="menu">
                {{#each languageList}}
                <li><a data-lang-key="{{key}}" href="javascript:void(0)" tabindex="-1">{{#eq ../currentLang key}}<strong>{{value}}</strong>{{else}}{{value}}{{/eq}}</a></li>
                {{/each}}
            </ul>
        </div>
</span>
{{/unless}}
',
      ),
    ),
    'learning-resources' => 
    array (
      'templates' => 
      array (
        'learning-resources' => '
{{#each resources}}
<li class="resource {{css_class}}">
    <a href="{{url}}" target="_blank"><span class="label label-module label-module-md pull-left {{color}}"><i class="icon-2x {{icon}}"></i></span></a>
    <div class="resource-info">
        <a href="{{url}}" target="_blank">{{str link module}}</a>
        <p class="details">{{str teaser module}}</p>
    </div>
</li>
{{/each}}
',
      ),
      'meta' => 
      array (
        'dashlets' => 
        array (
          0 => 
          array (
            'label' => 'LBL_LEARNING_RESOURCES_TITLE',
            'description' => 'LBL_LEARNING_RESOURCES_DESC',
            'config' => 
            array (
            ),
            'preview' => 
            array (
            ),
            'filter' => 
            array (
            ),
          ),
        ),
        'resources' => 
        array (
          'sugar_university' => 
          array (
            'color' => 'blue',
            'icon' => 'icon-book',
            'url' => 'http://university.sugarcrm.com/',
            'link' => 'LBL_LEARNING_RESOURCES_SUGAR_UNIVERSITY_LINK',
            'teaser' => 'LBL_LEARNING_RESOURCES_SUGAR_UNIVERSITY_TEASER',
          ),
          'community' => 
          array (
            'color' => 'green',
            'icon' => 'icon-comments-alt',
            'url' => 'https://community.sugarcrm.com/',
            'link' => 'LBL_LEARNING_RESOURCES_COMMUNITY_LINK',
            'teaser' => 'LBL_LEARNING_RESOURCES_COMMUNITY_TEASER',
          ),
          'support' => 
          array (
            'color' => 'red',
            'icon' => 'icon-question-sign',
            'url' => 'http://support.sugarcrm.com/',
            'link' => 'LBL_LEARNING_RESOURCES_SUPPORT_LINK',
            'teaser' => 'LBL_LEARNING_RESOURCES_SUPPORT_TEASER',
          ),
        ),
      ),
    ),
    'link-moduleselect' => 
    array (
      'templates' => 
      array (
        'link-moduleselect' => '
<div class="filter-options extend">
    <div class="filter-header clearfix">
        <div class="row-fluid">
            <div class="controls filter-field span3">
                <label for="relationship">{{str "LBL_RELATIONSHIP"}}</label>
            </div>
            <div class="controls filter-value span7">
                <select class="select2" id="relationship">
                    <option></option>
                    {{#eachOptions this.linkModules}}
                        <option value="{{key}}">{{str value.label ../this.module}}</option>
                    {{/eachOptions}}
                </select>
            </div>
        </div>
    </div>
</div>
',
      ),
    ),
    'list' => 
    array (
      'templates' => 
      array (
        'list' => '
{{#each meta.panels}}
<table class="table table-striped dataTable">
    <thead>
    <tr>
        {{#each fields}}
            <th {{#if this.width}}width="{{this.width}}" {{/if}}class="{{#isSortable ../../module this}}sorting{{#eq ../../../orderBy.field name}}_{{../../../../orderBy.direction}}{{/eq}} orderBy{{name}}{{/isSortable}}"
                {{#if name}} data-fieldname="{{name}}"{{/if}} data-orderby="{{orderBy}}">
                 <span>
                    {{str label ../../module}}
                 </span>
            </th>
        {{/each}}
    </tr>
    </thead>
    <tbody>
    {{#each ../collection.models}}
    <tr name="{{module}}_{{attributes.id}}" class="single">
        {{#each ../fields}}
            <td{{#if this.align}} class="{{this.align}}"{{/if}}>
              {{field ../../../this model=../this template=../../../this.viewName}}
            </td>
        {{/each}}
    </tr>
    {{/each}}
    </tbody>
</table>
{{/each}}
',
        'noaccess' => '
<div class="block-footer">
    {{str "ERR_HTTP_404_TITLE"}}
</div>
',
        'row' => '
{{#with rowModel}}
    <tr name="{{module}}_{{attributes.id}}" class="single">
        {{#each ../metaFields}}
            <td{{#if this.align}} class="{{this.align}}"{{/if}}>
                {{field ../../this model=../this template=../../this.viewName}}
            </td>
        {{/each}}
    </tr>
{{/with}}
',
        'selected-offset' => '
{{#if offset}}
    {{#eq offset -1}}
        {{str \'TPL_LISTVIEW_SELECTED_ALL\' this.module this}}
    {{/eq}}
    {{#notEq offset -1}}
        {{str \'TPL_LISTVIEW_SELECTED_FIRST_OFFSET\' this.module this}}
    {{/notEq}}
{{else}}
    {{str \'TPL_LISTVIEW_SELECTED_ALL\' this.module this}}
{{/if}}
<button type="button" class="btn btn-link btn-inline" data-action="clear">
    {{str \'LBL_LISTVIEW_SELECTED_CLEAR\'}}
</button>
',
      ),
    ),
    'list-bottom' => 
    array (
      'templates' => 
      array (
        'dashlet-bottom' => '
{{#if dataFetched}}
    <button data-action="show-more" class="btn btn-link btn-invisible more">{{showMoreLabel}}</button>
{{else}}
    <div class="loading">
        {{str "LBL_ALERT_TITLE_LOADING"}}<i class="l1 icon-circle"></i><i class="l2 icon-circle"></i><i class="l3 icon-circle"></i>
    </div>
{{/if}}
',
        'list-bottom' => '
{{#if dataFetched}}
    {{#notEq collection.next_offset "-1"}}
        <button data-action="show-more" class="btn btn-link btn-invisible more padded">{{showMoreLabel}}</button>
    {{/notEq}}
    {{#unless collection.length}}
        <div class="block-footer">
            {{#if context.attributes.isCreateEnabled}}
                <a href="#{{buildRoute context=context model=model action="create"}}" title="{{str "LNK_CREATE" module}}">
                    {{str "LBL_LISTVIEW_NO_RECORDS"}} {{str "LNK_CREATE_WHEN_EMPTY" module}}
                </a>
            {{else}}
                {{str "LBL_LISTVIEW_NO_RECORDS"}}
            {{/if}}
        </div>
    {{/unless}}
{{else}}
    {{#if showLoadMsg}}
        <div class="{{#unless ../collection.dataFetched}}block-footer{{/unless}}">
            <div class="loading{{#if ../collection.dataFetched}} padded{{/if}}">
                {{str "LBL_ALERT_TITLE_LOADING"}}<i class="l1 icon-circle"></i><i class="l2 icon-circle"></i><i class="l3 icon-circle"></i>
            </div>
        </div>
    {{/if}}
{{/if}}
',
      ),
    ),
    'list-headerpane' => 
    array (
      'meta' => 
      array (
        'template' => 'headerpane',
        'buttons' => 
        array (
          0 => 
          array (
            'name' => 'create_button',
            'type' => 'button',
            'label' => 'LBL_CREATE_BUTTON_LABEL',
            'css_class' => 'btn-primary',
            'acl_action' => 'create',
            'route' => 
            array (
              'action' => 'create',
            ),
          ),
          1 => 
          array (
            'name' => 'sidebar_toggle',
            'type' => 'sidebartoggle',
          ),
        ),
      ),
    ),
    'logout' => 
    array (
      'templates' => 
      array (
        'logout' => '
<div class="welcome">
    <div class="thumbnail login">
        <div class="tcenter">
            <h2 class="brand"><img src="{{logoUrl}}" alt="SugarCRM"></h2>
        </div>
        <form name=\'{{name}}\' class="tcenter">
        	<p>{{str "LBL_LOGGED_OUT"}}
        	</p>
        	<p>&nbsp;</p>
            <p class="wide">
                    <a class="btn btn-block btn-primary" name="login_button"
                       title="{{str "LBL_LOGIN_BUTTON_LABEL"}}">{{str "LBL_LOGIN_BUTTON_LABEL"}}</a>
			</p>
            <p class="wide">
                    <a class="btn btn-link btn-invisible" name="login_form_button"
                       title="{{str "LBL_LOGIN_FORM_LABEL"}}">{{str "LBL_LOGIN_FORM_LABEL"}}</a>
			</p>
        </form>
    </div>
</div>
',
      ),
      'meta' => 
      array (
        'action' => 'edit',
        'buttons' => 
        array (
          0 => 
          array (
            'name' => 'login_button',
            'type' => 'button',
            'label' => 'LBL_LOGIN_BUTTON_LABEL',
            'primary' => true,
          ),
          1 => 
          array (
            'name' => 'login_form_button',
            'type' => 'button',
            'label' => 'LBL_LOGIN_FORM_LABEL',
          ),
        ),
      ),
    ),
    'massaddtolist' => 
    array (
      'templates' => 
      array (
        'massaddtolist' => '
<div class="filter-header">
    <div class="row-fluid">
        <div class="controls span4">
            <strong>{{str "LBL_ADD_TO_PROSPECT_LIST_BUTTON_LABEL"}}</strong>
        </div>
        <div class="pull-right">
            {{#each meta.buttons}}
                {{field ../this}}
            {{/each}}
        </div>
    </div>
</div>
<div class="filter-body clearfix">
    <div class="row-fluid">
        <div class="controls filter-value span7">
            {{#with this.addToListField}}
                {{field ../this template="edit"}}
            {{/with}}
        </div>
    </div>
</div>
',
      ),
      'meta' => 
      array (
        'buttons' => 
        array (
          0 => 
          array (
            'name' => 'create_button',
            'type' => 'button',
            'label' => 'LBL_CREATE_NEW_TARGET_LIST',
            'acl_action' => 'create',
            'acl_module' => 'ProspectLists',
            'css_class' => 'btn-link btn-invisible',
          ),
          1 => 
          array (
            'type' => 'button',
            'value' => 'cancel',
            'css_class' => 'btn-link btn-invisible cancel_button',
            'label' => 'LBL_CANCEL_BUTTON_LABEL',
            'primary' => false,
          ),
          2 => 
          array (
            'name' => 'update_button',
            'type' => 'button',
            'label' => 'LBL_UPDATE',
            'acl_action' => 'edit',
            'acl_module' => 'ProspectLists',
            'css_class' => 'btn-primary',
            'primary' => true,
          ),
        ),
      ),
    ),
    'massaddtolist-progress' => 
    array (
      'meta' => 
      array (
        'template' => 'massupdate-progress',
        'buttons' => 
        array (
          0 => 
          array (
            'type' => 'button',
            'name' => 'btn-stop',
            'css_class' => 'btn-primary',
            'label' => 'LBL_CANCEL_BUTTON_LABEL',
          ),
        ),
      ),
    ),
    'masslink-progress' => 
    array (
      'meta' => 
      array (
        'template' => 'massupdate-progress',
      ),
    ),
    'massupdate' => 
    array (
      'templates' => 
      array (
        'massupdate' => '
<div class="filter-header">
    <div class="row-fluid">
        <div class="controls span6">
            <strong>{{str "LBL_MASS_UPDATE"}}</strong>
        </div>
        <div class="pull-right">
            {{#each meta.buttons}}
                {{field ../this}}
            {{/each}}
        </div>
    </div>
</div>
{{#each fieldValues}}
<div class="filter-body clearfix">
    <div class="row-fluid">
        <div class="filter-field controls span4">
            <select class="select2 mu_attribute inherit-width" data-index="{{@index}}">
                {{#if name}}
                <option value="{{name}}" selected>{{str label ../../this.model.module}}</option>
                {{else}}
                <option value="{{../../defaultOption.name}}" selected>{{str ../../defaultOption.label ../../this.model.module}}</option>
                {{/if}}
                {{#each ../fieldOptions}}
                <option value="{{name}}" {{#eq name ../name}}selected{{/eq}}>{{str label ../../this.model.module}}</option>
                {{/each}}
            </select>
        </div>
        <div class="filter-value controls span8">
            <span name="fieldPlaceHolder" index="{{@index}}">
            </span>
        </div>
        <div class="filter-actions btn-group">
            {{#notEq ../fieldValues.length 1}}
            <button data-action="remove" class="btn btn-invisible btn-dark" data-index="{{@index}}" rel="tooltip" data-placement="bottom" title="{{str "LBL_MASS_UPDATE_REMOVE_FIELD"}}"><i class="icon-minus"></i></button>
            {{/notEq}}
            <button data-action="add" class="btn btn-invisible btn-dark {{#eq ../fieldOptions.length 0}}disabled{{/eq}}" rel="tooltip" data-placement="bottom" title="{{str "LBL_MASS_UPDATE_ADD_FIELD"}}"><i class="icon-plus"></i></button>
        </div>
    </div>
</div>
{{/each}}
<div id="fieldPlaceHolders" class="hide">
    {{#each meta.panels}}
        {{#each fields}}
            {{field ../../this template=\'massupdate\'}}
        {{/each}}
    {{/each}}
</div>',
      ),
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
      ),
    ),
    'massupdate-progress' => 
    array (
      'templates' => 
      array (
        'massupdate-progress' => '
<div class="modal progress-modal">
    <div class="modal-header header">
        <button type="button" data-action="stop" class="close">&times;</button>
        <h3 data-holder="title">{{str \'TPL_MASSUPDATE_TITLE\' this.module this}}</h3>
    </div>
    <div class="modal-body">
        <div class="row-fluid">
            <div class="offset1 span10">
                <div class="progress-label">
                    <span data-holder="message"></span>
                    <span data-holder="estimate"></span>
                </div>
                <div class="progress progress-info progress-striped active" data-holder="bar">
                    <div class="bar" data-holder="progressbar"></div>
                </div>
            </div>
        </div>
        <div class="modal-footer">
            {{#each meta.buttons}}
                {{field ../this model=../model}}
            {{/each}}
        </div>
    </div>
</div>
<div class="modal-backdrop"></div>
',
      ),
    ),
    'merge-duplicates' => 
    array (
      'templates' => 
      array (
        'merge-duplicates' => '
<h4 class="merge-interface-header">
    <span class="record-name" data-container="primary-title"></span>
    <button class="btn btn-link btn-invisible pull-right"
            rel="tooltip" data-placement="bottom" data-toggle="proto"
            data-mode="preview" title="{{str \'LBL_PREVIEW\'}}">
        <i class="icon-eye-open"></i>
    </button>
</h4>
<div class="record record-merge-interface">
    <div class="merge-interface row-fluid">
        <div class="label-div">
            <div class="col pull-left">
                {{#each meta.panels}}
                    {{#each fields}}
                        <div class="merge-row merge-row-field-{{type}} {{#if maxHeight}}merge-row-field-height{{maxHeight}}{{/if}}">
                            <label class="ellipsis_inline"
                                   title="{{str label ../../module}}"
                                   data-placement="right">
                                {{str label ../../module}}
                            </label>
                        </div>
                    {{/each}}
                {{/each}}
            </div>
        </div>

        <div class="rows-div fluid-div num-cols-{{collection.models.length}}" data-container="merge-container">
            <div class="row-div-cnt">
                {{#each collection.models}}
                    <div class="col" data-record-id="{{id}}" data-container="merge-record">
                        <button class="btn btn-invisible icon-remove-sign pull-right"
                                data-action="delete" rel="tooltip" title="{{str "LBL_MERGE_DUPLICATES_REMOVE_TOOLTIP" ../module}}">
                        </button>
                        <div class="primary-lbl {{#if readonly}}disabled{{/if}}" data-container="primary-label">
                            {{#eq id ../primaryRecord.id}}
                                <span data-container="primary-label-span">{{str "LBL_COLLECTION_PRIMARY"}}</span>
                            {{/eq}}
                        </div>
                        <div class="box">
                            {{#each ../meta.panels}}
                                {{#each fields}}
                                    <div class="merge-row control-group merge-row-field-{{type}} {{#if maxHeight}}merge-row-field-height{{maxHeight}}{{/if}}">
                                        <div class="controls">
                                            {{#unless noRadioBox}}
                                                <input type="radio" name="copy_{{name}}" class="copy"
                                                       data-action="copy"
                                                       data-field-name="{{name}}"
                                                       data-record-id="{{../../../id}}" />
                                                {{! FIXME see SC-2065}}
                                                <label for="">{{field ../../../../this model=../../../this}}</label>
                                            {{else}}
                                                {{field ../../../../this model=../../../this}}
                                            {{/unless}}
                                        </div>
                                    </div>
                                {{/each}}
                            {{/each}}
                        </div>
                    </div>
                {{/each}}
            </div>
        </div>
    </div>
</div>
',
      ),
    ),
    'merge-duplicates-headerpane' => 
    array (
      'meta' => 
      array (
        'template' => 'headerpane',
        'fields' => 
        array (
          0 => 
          array (
            'name' => 'title',
            'type' => 'label',
            'default_value' => 'TPL_MERGING_RECORDS',
          ),
        ),
        'buttons' => 
        array (
          0 => 
          array (
            'name' => 'cancel_button',
            'type' => 'button',
            'label' => 'LBL_CANCEL_BUTTON_LABEL',
            'css_class' => 'btn-invisible btn-link',
          ),
          1 => 
          array (
            'name' => 'save_button',
            'type' => 'button',
            'label' => 'LBL_SAVE_BUTTON_LABEL',
            'css_class' => 'btn-primary',
          ),
          2 => 
          array (
            'name' => 'sidebar_toggle',
            'type' => 'sidebartoggle',
          ),
        ),
      ),
    ),
    'merge-duplicates-progress' => 
    array (
      'templates' => 
      array (
        'merge-duplicates-progress' => '
<div class="modal progress-modal">
    <div class="modal-header header">
        <h3 data-holder="title">{{str \'TPL_MASSUPDATE_TITLE\' this.module this}}</h3>
    </div>
    <div class="modal-body">
        <div class="row-fluid">
            <div class="offset1 span10">
                <div class="progress-label">
                    <span data-holder="message"></span>
                    <span data-holder="estimate"></span>
                </div>
                <div class="progress progress-info progress-striped active" data-holder="bar">
                    <div class="bar" data-holder="progressbar"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal-footer">
        {{#each meta.buttons}}
            {{field ../this model=../model}}
        {{/each}}
    </div>
</div>
<div class="modal-backdrop"></div>
',
      ),
    ),
    'mobile-action' => 
    array (
      'templates' => 
      array (
        'mobile-action' => '
<button data-action="mobile" class="btn btn-invisible" aria-label="{{str \'LNK_MOBILE\'}}" role="link" type="button">
    <i class="icon-mobile-phone"></i><span class="action-label"> {{str \'LNK_MOBILE\'}}</span>
</button>
',
      ),
    ),
    'modal-confirm' => 
    array (
      'templates' => 
      array (
        'modal-confirm' => '
<div class="container-fluid">
    <form>
        {{str message module}}
    </form>
</div>
<div class="modal-footer">
    {{#each meta.buttons}}
    {{field ../this}}
    {{/each}}
</div>',
      ),
      'meta' => 
      array (
        'buttons' => 
        array (
          0 => 
          array (
            'name' => 'ok_button',
            'type' => 'button',
            'css_class' => 'btn-primary pull-right',
            'label' => 'LBL_EMAIL_OK',
            'primary' => true,
          ),
          1 => 
          array (
            'name' => 'close_button',
            'type' => 'button',
            'css_class' => 'btn-invisible btn-link',
            'label' => 'LBL_EMAIL_CANCEL',
            'primary' => false,
          ),
        ),
      ),
    ),
    'modal-header' => 
    array (
      'templates' => 
      array (
        'modal-header' => '
<div class="modal-header header">
    <div class="buttons pull-right">
        <a href="javascript:void(0);" class="close" title="{{str "LBL_CLOSE_BUTTON_LABEL"}}"><i class="icon-remove icon-sm"></i></a>
        {{#each buttons}}
        {{field ../this}}
        {{/each}}
    </div>
    <h3 class="title">{{str title module}}</h3>
</div>',
      ),
    ),
    'module-menu' => 
    array (
      'templates' => 
      array (
        'favorites' => '
{{#each collection.models}}
    <li><a class="ellipsis_inline" tabindex="-1" href="#{{buildRoute model=this}}" data-route="#{{buildRoute model=this}}"><i class="icon-favorite active"></i>{{getFieldValue this \'name\'}}</a></li>
{{/each}}
',
        'module-menu' => '
{{#if meta.short}}
    <a class="module-list-link" href="#{{buildRoute module=module}}" data-route="#{{buildRoute module=module}}" track="click:{{module}}" tabindex="-1"><span class="label label-module label-module-mini label-{{module}}" title="{{str \'LBL_MODULE_NAME\' module}}">{{moduleIconLabel module}}</span>{{str \'LBL_MODULE_NAME\' module}}</a>
{{else}}
    <a class="btn btn-invisible btn-link module-name" href="#{{buildRoute module=module}}" data-route="#{{buildRoute module=module}}" track="click:{{module}}" aria-label="{{str \'LBL_MODULE_NAME\' module}}">{{str \'LBL_MODULE_NAME\' module}}</a>
    {{#if actions}}
    <button type="button" title="{{str \'LBL_LINK_MORE\' module}}" data-toggle="dropdown" class="btn btn-invisible dropdown-toggle" track="click:{{name}}-dropdown" aria-label="{{str \'LBL_MODULE_NAME\' module}} - {{str \'LBL_LINK_MORE\' module}}"><i class="icon-caret-down"></i></button>
    <div class="dropdown-menu scroll">
        <ul role="menu">
            {{#each actions}}
                <li><a class="ellipsis_inline" tabindex="-1"
                       data-navbar-menu-item="{{label}}"
                    {{#if event}}
                       href="javascript:void(0);"
                       data-event="{{event}}"
                       track="click:{{event}}"
                    {{else}}
                       href="{{route}}"
                       data-route="{{route}}"
                       track="click:{{route}}"
                    {{/if}}>{{#if icon}}<i class="{{icon}}"></i>{{/if}}{{str label ../module}}</a>
                </li>
            {{/each}}
            <li class="divider" data-container="recently-viewed"></li>
            <li class="divider" data-container="favorites"></li>
        </ul>
    </div>
    {{/if}}
{{/if}}
',
        'recently-viewed' => '
{{#each collection.models}}
    <li><a class="ellipsis_inline" tabindex="-1" href="#{{buildRoute model=this}}" data-route="#{{buildRoute model=this}}"><i class="icon-time active"></i>{{getFieldValue this \'name\'}}</a></li>
{{/each}}
',
      ),
    ),
    'news' => 
    array (
      'templates' => 
      array (
        'dashlet-config' => '
<div class="record">
    {{#each dashletConfig.config.fields}}
        <div class="row-fluid panel_body">
            <div class="record-cell">
                <div class="record-label">{{str label}}</div>
                {{field ../this model=../this.settings template=../this.action}}
            </div>
        </div>
    {{/each}}
</div>
',
        'news' => '
{{#if responseData.results}}
{{#each responseData.results}}
    <div class="news-article">
        <h5><a href="{{this.unescapedUrl}}">{{{this.titleNoFormatting}}}</a>
        </h5> ({{{this.publisher}}})
        <p>{{{this.content}}}</p>
    </div>
{{/each}}
{{else}}
    <div class="block-footer">{{str "LBL_NO_DATA_AVAILABLE"}}</div>
{{/if}}
',
      ),
      'meta' => 
      array (
        'dashlets' => 
        array (
          0 => 
          array (
            'label' => 'LBL_DASHLET_NEWS_NAME',
            'description' => 'LBL_DASHLET_NEWS_DESCRIPTION',
            'config' => 
            array (
              'limit' => '3',
            ),
            'preview' => 
            array (
              'limit' => '3',
            ),
            'filter' => 
            array (
              'module' => 
              array (
                0 => 'Accounts',
              ),
              'view' => 'record',
            ),
          ),
        ),
        'config' => 
        array (
          'fields' => 
          array (
            0 => 
            array (
              'name' => 'limit',
              'label' => 'LBL_DASHLET_CONFIGURE_DISPLAY_ROWS',
              'type' => 'enum',
              'searchBarThreshold' => -1,
              'options' => 
              array (
                1 => 1,
                2 => 2,
                3 => 3,
                4 => 4,
                5 => 5,
                6 => 6,
                7 => 7,
                8 => 8,
              ),
            ),
          ),
        ),
      ),
    ),
    'notifications' => 
    array (
      'templates' => 
      array (
        'notifications-alert' => '
{{title}}
{{getFieldValue model \'name\'}}
{{str "MSG_JS_ALERT_MTG_REMINDER_START"}} {{dateStart}}
{{#if parentName}}{{str "LBL_RELATED_TO" module}} {{parentName}}{{/if}}
{{#eq module "Calls"}}{{#if description}}{{str "MSG_JS_ALERT_MTG_REMINDER_DESC"}} {{description}}{{/if}}
{{str "MSG_JS_ALERT_MTG_REMINDER_CALL_MSG"}}{{/eq}}
{{#eq module "Meetings"}}{{#if location}}{{str "MSG_JS_ALERT_MTG_REMINDER_LOC"}} {{location}}{{/if}}
{{str "MSG_JS_ALERT_MTG_REMINDER_MEETING_MSG"}}{{/eq}}
',
        'notifications' => '
<ul class="nav megamenu">
    <li class="dropdown notification-list">
        <div class="btn-group" data-name="notifications-list-button">
            <button class="btn {{#if this.collection.length}}btn-danger{{else}}btn-inverse{{/if}} dropdown-toggle"
                    data-toggle="dropdown"
                    rel="tooltip"
                    title="{{str "LBL_NOTIFICATIONS" module}}"
                    aria-label="{{str "LBL_NOTIFICATIONS" module}}"
                    data-placement="bottom">
                {{this.collection.length}}
                {{#if this.collection.next_offset}}{{#notEq this.collection.next_offset "-1"}}+{{/notEq}}{{/if}}
            </button>
            <div class="dropdown-menu scroll pull-right">
                <ul role="menu">
                    {{#each this.collection.models}}
                        <li{{#if this.attributes.is_read}} class="read"{{/if}}><a class="row-fluid"
                               href="#{{buildRoute model=this action="detail"}}"
                               data-id="{{this.attributes.id}}"
                               data-action="is-read-handler"
                               tabindex="-1"><span
                                class="span8 ellipsis_inline"
                                title="{{this.attributes.name}}"
                                data-placement="bottom">
                            {{#with ../this.meta.fields.severity}}
                                {{field ../../this model=../this template="detail"}}
                            {{/with}}
                            {{this.attributes.name}}</span>
                            {{relativeTime this.attributes.date_entered class="span4 pull-right"}}
                        </a></li>
                    {{/each}}
                    <li><a class="row-fluid" href="#{{module}}" tabindex="-1"><i class="icon-reorder span1"></i><span class="span8 ellipsis_inline">{{str "LBL_SHOW_NOTIFICATIONS" module}}</span></a></li>
                </ul>
            </div>
        </div>
    </li>
</ul>
',
      ),
      'meta' => 
      array (
        'remindersFilterDef' => 
        array (
          'reminder_time' => 
          array (
            '$gte' => 0,
          ),
          'status' => 
          array (
            '$equals' => 'Planned',
          ),
          'accept_status_users' => 
          array (
            '$not_equals' => 'decline',
          ),
        ),
        'remindersLimit' => 100,
        'fields' => 
        array (
          'severity' => 
          array (
            'name' => 'severity',
            'type' => 'severity',
          ),
        ),
      ),
    ),
    'opportunity-metrics' => 
    array (
      'templates' => 
      array (
        'opportunity-metrics' => '
<div data-content="chart">
    <div class="nv-chart nv-chart-donut">
        <svg id="{{cid}}"></svg>
    </div>
    {{#eachOptions metricsCollection}}
        <div class="opportunity-metric">
            <span class="label {{value.cssClass}}">{{value.count}}</span>
            <div class="deal-amount-metric {{key}}">{{value.formattedAmount}}</div>
            <div class="opportunity-metric-description">{{value.stageLabel}}</div>
        </div>
    {{/eachOptions}}
</div>
<div class="block-footer hide" data-content="nodata">{{str "LBL_NO_DATA_AVAILABLE"}}</div>
',
      ),
      'meta' => 
      array (
        'dashlets' => 
        array (
          0 => 
          array (
            'label' => 'LBL_DASHLET_OPPORTUNITY_NAME',
            'description' => 'LBL_DASHLET_OPPORTUNITY_DESCRIPTION',
            'filter' => 
            array (
              'module' => 
              array (
                0 => 'Accounts',
              ),
              'view' => 'record',
            ),
            'config' => 
            array (
            ),
            'preview' => 
            array (
            ),
          ),
        ),
      ),
    ),
    'orgchart' => 
    array (
      'templates' => 
      array (
        'orgchart' => '
<div class="dashlet-options">
    <div class="row-fluid">
        <div class="span4">
            <div class="dropdown" data-control="org-jstree-dropdown">
                <button class="dropdown-toggle btn" data-toggle="dropdown">
                  <span class="jstree-label"></span>
                  <i class="icon-caret-down"></i>
                </button>
                <ul class="dropdown-menu">
                    <li>
                        <div data-control="org-jstree" class="jstree-sugar jstree jstree-0 jstree-focused"></div>
                    </li>
                </ul>
            </div>
        </div>
        <div class="span8">
            <div class="dashlet-group pull-right">
                <button class="btn toggle-control" rel="tooltip" data-control="orientation" title="{{str "LBL_ORG_CHART_TOOLTIP_TOGGLE"}}"><i class="icon-arrow-down"></i></button>
                <button class="btn toggle-control" rel="tooltip" data-control="show-all-nodes" title="{{str "LBL_ORG_CHART_TOOLTIP_NODES"}}"><i class="icon-sitemap"></i></button>
                <button class="btn toggle-control" rel="tooltip" data-control="zoom-to-fit" title="{{str "LBL_ORG_CHART_TOOLTIP_ZOOM"}}"><i class="icon-fullscreen"></i></button>
            </div>
            <div class="btn-slider pull-right">
                <div class="noUiSliderEnds">
                    <i class="zoom-control icon-minus-sign" data-control="zoom-out"></i>
                    <div class="noUiSlider"></div>
                    <i class="zoom-control icon-plus-sign" data-control="zoom-in"></i>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="nv-chart nv-chart-texture nv-chart-org" data-content="chart">
    <svg id="{{cid}}"></svg>
</div>
<div class="block-footer hide" data-content="nodata">{{str "LBL_NO_DATA_AVAILABLE"}}</div>
',
        'orgchartnode' => '
<img src="{{img}}" class="rep-avatar" width="32" height="32">
<div class="rep-name">
    <a href="{{url}}">{{full_name}}</a>
</div>
<div class="rep-title">{{title}}</div>
',
      ),
      'meta' => 
      array (
        'dashlets' => 
        array (
          0 => 
          array (
            'label' => 'LBL_ORG_CHART',
            'description' => 'LBL_ORG_CHART_DESC',
            'config' => 
            array (
            ),
            'preview' => 
            array (
            ),
            'filter' => 
            array (
              'module' => 
              array (
                0 => 'Leads',
              ),
              'view' => 'records',
            ),
          ),
          1 => 
          array (
            'label' => 'LBL_ORG_CHART',
            'description' => 'LBL_ORG_CHART_DESC',
            'config' => 
            array (
            ),
            'preview' => 
            array (
            ),
            'filter' => 
            array (
              'module' => 
              array (
                0 => 'Home',
              ),
              'view' => 'record',
            ),
          ),
        ),
      ),
    ),
    'panel-top' => 
    array (
      'templates' => 
      array (
        'panel-top' => '
<div class="label label-module label-{{module}} pull-left">{{moduleIconLabel module}}</div> <h4 class="pull-left">{{str layout.label parentModule}}</h4>
<div class="subpanel-controls btn-toolbar pull-right">
    {{#each meta.buttons}}
        {{field ../this}}
    {{/each}}
</div>
',
      ),
      'meta' => 
      array (
        'buttons' => 
        array (
          0 => 
          array (
            'type' => 'button',
            'css_class' => 'btn-invisible',
            'icon' => 'icon-chevron-up',
            'tooltip' => 'LBL_TOGGLE_VISIBILITY',
          ),
          1 => 
          array (
            'type' => 'actiondropdown',
            'name' => 'panel_dropdown',
            'css_class' => 'pull-right',
            'buttons' => 
            array (
              0 => 
              array (
                'type' => 'sticky-rowaction',
                'icon' => 'icon-plus',
                'name' => 'create_button',
                'label' => ' ',
                'acl_action' => 'create',
                'tooltip' => 'LBL_CREATE_BUTTON_LABEL',
              ),
              1 => 
              array (
                'type' => 'link-action',
                'name' => 'select_button',
                'label' => 'LBL_ASSOC_RELATED_RECORD',
              ),
            ),
          ),
        ),
      ),
    ),
    'password-expired' => 
    array (
      'templates' => 
      array (
        'password-expired' => '
<div class="welcome">
    <div class="thumbnail signup">
        <div class="tcenter">
            <h2 class="brand"><img src="{{logoUrl}}" alt="SugarCRM"></h2>
            <div class="password-reqs-status"></div>
            {{#if _showPasswordRequirements}}
                <ul class="password-reqs">
                    {{#each passwordRequirements}}
                        <li>{{this}}</li>
                    {{/each}}
                </ul>
            {{/if}}
        </div>
        <form name=\'{{name}}\' class="tcenter">
            {{#each meta.panels}}
                {{#each fields}}
                <div class="control-group">{{field ../../this model=../../model template="edit"}}</div>
                {{/each}}
            {{/each}}
            <div class="signup-footer">
                {{#each meta.buttons}}
                   {{field ../this model=../model template="edit"}}
                {{/each}}
            </div>
        </form>
    </div>
</div>
',
      ),
      'meta' => 
      array (
        'action' => 'list',
        'buttons' => 
        array (
          0 => 
          array (
            'name' => 'save_button',
            'type' => 'button',
            'label' => 'LBL_SAVE_BUTTON_LABEL',
            'value' => 'save',
            'css_class' => 'btn-primary save-profile',
          ),
        ),
        'panels' => 
        array (
          0 => 
          array (
            'label' => 'LBL_PANEL_DEFAULT',
            'fields' => 
            array (
              0 => 
              array (
                'name' => 'expired_password_update',
                'type' => 'change-my-password',
                'label' => 'LBL_CONTACT_EDIT_PASSWORD',
                'displayParams' => 
                array (
                  'colspan' => 2,
                ),
              ),
            ),
            0 => 
            array (
              'name' => 'name_field',
              'type' => 'text',
              'css_class' => 'hp',
              'placeholder' => 'LBL_HONEYPOT',
            ),
          ),
        ),
      ),
    ),
    'passwordmodal' => 
    array (
      'templates' => 
      array (
        'passwordmodal' => '
<div class="modal hide">
    <div class="modal-header">
        <a class="close" data-dismiss="modal"><i class="icon-remove"></i></a>
        <h3>{{str "LBL_PASSWORD_CHANGE_FORM_TITLE" context.attributes.module}}</h3>
    </div>
    <div class="modal-body">
        <form class="form-horizontal" method="POST">
            <fieldset>
                {{#each meta.panels}}
                {{#each fields}}
                <div class="row-fluid control-group">
                    <div class="span4">{{str label ../../context.attributes.module}}</div>
                    <div class="span6">{{field ../../this}}</div>
                </div>
                {{/each}}
                {{/each}}
            </fieldset>
        </form>
    </div>
    <div class="modal-footer">
        {{#each meta.buttons}}
        {{field ../this}}
        {{/each}}
    </div>
</div>
',
      ),
      'meta' => 
      array (
        'buttons' => 
        array (
          0 => 
          array (
            'name' => 'save_button',
            'type' => 'button',
            'label' => 'LBL_SAVE_BUTTON_LABEL',
            'value' => 'save',
            'css_class' => 'btn-primary save-profile',
          ),
          1 => 
          array (
            'name' => 'cancel_button',
            'type' => 'button',
            'label' => 'LBL_CANCEL_BUTTON_LABEL',
            'value' => 'cancel',
            'css_class' => 'btn-invisible btn-link',
          ),
        ),
        'panels' => 
        array (
          0 => 
          array (
            'label' => 'LBL_PANEL_DEFAULT',
            'fields' => 
            array (
              0 => 
              array (
                'name' => 'current_password',
                'type' => 'password',
                'label' => 'LBL_OLD_PASSWORD',
                'displayParams' => 
                array (
                  'colspan' => 2,
                ),
              ),
              1 => 
              array (
                'name' => 'new_password',
                'type' => 'password',
                'label' => 'LBL_NEW_PASSWORD',
                'displayParams' => 
                array (
                  'colspan' => 2,
                ),
              ),
              2 => 
              array (
                'name' => 'confirm_password',
                'type' => 'password',
                'label' => 'LBL_NEW_PASSWORD2',
                'displayParams' => 
                array (
                  'colspan' => 2,
                ),
              ),
            ),
          ),
        ),
      ),
    ),
    'planned-activities' => 
    array (
      'meta' => 
      array (
        'dashlets' => 
        array (
          0 => 
          array (
            'label' => 'LBL_PLANNED_ACTIVITIES_DASHLET',
            'description' => 'LBL_PLANNED_ACTIVITIES_DASHLET_DESCRIPTION',
            'config' => 
            array (
              'limit' => '10',
              'date' => 'today',
              'visibility' => 'user',
            ),
            'preview' => 
            array (
              'limit' => '10',
              'date' => 'today',
              'visibility' => 'user',
            ),
            'filter' => 
            array (
              'module' => 
              array (
                0 => 'Accounts',
                1 => 'Bugs',
                2 => 'Cases',
                3 => 'Contacts',
                4 => 'Home',
                5 => 'Leads',
                6 => 'Opportunities',
                7 => 'Prospects',
                8 => 'RevenueLineItems',
              ),
              'view' => 'record',
            ),
          ),
        ),
        'custom_toolbar' => 
        array (
          'buttons' => 
          array (
            0 => 
            array (
              'type' => 'actiondropdown',
              'no_default_action' => true,
              'icon' => 'icon-plus',
              'buttons' => 
              array (
                0 => 
                array (
                  'type' => 'dashletaction',
                  'action' => 'createRecord',
                  'params' => 
                  array (
                    'link' => 'meetings',
                    'module' => 'Meetings',
                  ),
                  'label' => 'LBL_SCHEDULE_MEETING',
                  'acl_action' => 'create',
                  'acl_module' => 'Meetings',
                ),
                1 => 
                array (
                  'type' => 'dashletaction',
                  'action' => 'createRecord',
                  'params' => 
                  array (
                    'link' => 'calls',
                    'module' => 'Calls',
                  ),
                  'label' => 'LBL_SCHEDULE_CALL',
                  'acl_action' => 'create',
                  'acl_module' => 'Calls',
                ),
              ),
            ),
            1 => 
            array (
              'dropdown_buttons' => 
              array (
                0 => 
                array (
                  'type' => 'dashletaction',
                  'action' => 'editClicked',
                  'label' => 'LBL_DASHLET_CONFIG_EDIT_LABEL',
                ),
                1 => 
                array (
                  'type' => 'dashletaction',
                  'action' => 'refreshClicked',
                  'label' => 'LBL_DASHLET_REFRESH_LABEL',
                ),
                2 => 
                array (
                  'type' => 'dashletaction',
                  'action' => 'toggleClicked',
                  'label' => 'LBL_DASHLET_MINIMIZE',
                  'event' => 'minimize',
                ),
                3 => 
                array (
                  'type' => 'dashletaction',
                  'action' => 'removeClicked',
                  'label' => 'LBL_DASHLET_REMOVE_LABEL',
                ),
              ),
            ),
          ),
        ),
        'panels' => 
        array (
          0 => 
          array (
            'name' => 'panel_body',
            'columns' => 2,
            'labelsOnTop' => true,
            'placeholders' => true,
            'fields' => 
            array (
              0 => 
              array (
                'name' => 'date',
                'label' => 'LBL_DASHLET_CONFIGURE_FILTERS',
                'type' => 'enum',
                'options' => 'planned_activities_filter_options',
              ),
              1 => 
              array (
                'name' => 'visibility',
                'label' => 'LBL_DASHLET_CONFIGURE_MY_ITEMS_ONLY',
                'type' => 'enum',
                'options' => 'planned_activities_visibility_options',
              ),
              2 => 
              array (
                'name' => 'limit',
                'label' => 'LBL_DASHLET_CONFIGURE_DISPLAY_ROWS',
                'type' => 'enum',
                'options' => 'planned_activities_limit_options',
              ),
            ),
          ),
        ),
        'tabs' => 
        array (
          0 => 
          array (
            'active' => true,
            'filter_applied_to' => 'date_start',
            'filters' => 
            array (
              'status' => 
              array (
                '$not_in' => 
                array (
                  0 => 'Held',
                  1 => 'Not Held',
                ),
              ),
            ),
            'link' => 'meetings',
            'module' => 'Meetings',
            'order_by' => 'date_start:asc',
            'record_date' => 'date_start',
            'row_actions' => 
            array (
              0 => 
              array (
                'type' => 'rowaction',
                'icon' => 'icon-remove-circle',
                'css_class' => 'btn btn-mini',
                'event' => 'planned-activities:close-record:fire',
                'target' => 'view',
                'tooltip' => 'LBL_PLANNED_ACTIVITIES_DASHLET_HELD_ACTIVITY',
                'acl_action' => 'edit',
              ),
              1 => 
              array (
                'type' => 'unlink-action',
                'icon' => 'icon-unlink',
                'css_class' => 'btn btn-mini',
                'event' => 'tabbed-dashlet:unlink-record:fire',
                'target' => 'view',
                'tooltip' => 'LBL_UNLINK_BUTTON',
                'acl_action' => 'edit',
              ),
            ),
            'include_child_items' => true,
            'invitation_actions' => 
            array (
              'name' => 'accept_status_users',
              'type' => 'invitation-actions',
            ),
            'overdue_badge' => 
            array (
              'name' => 'date_start',
              'type' => 'overdue-badge',
              'css_class' => 'pull-right',
            ),
          ),
          1 => 
          array (
            'filter_applied_to' => 'date_start',
            'filters' => 
            array (
              'status' => 
              array (
                '$not_in' => 
                array (
                  0 => 'Held',
                  1 => 'Not Held',
                ),
              ),
            ),
            'link' => 'calls',
            'module' => 'Calls',
            'order_by' => 'date_start:asc',
            'record_date' => 'date_start',
            'row_actions' => 
            array (
              0 => 
              array (
                'type' => 'rowaction',
                'icon' => 'icon-remove-circle',
                'css_class' => 'btn btn-mini',
                'event' => 'planned-activities:close-record:fire',
                'target' => 'view',
                'tooltip' => 'LBL_PLANNED_ACTIVITIES_DASHLET_HELD_ACTIVITY',
                'acl_action' => 'edit',
              ),
              1 => 
              array (
                'type' => 'unlink-action',
                'icon' => 'icon-unlink',
                'css_class' => 'btn btn-mini',
                'event' => 'tabbed-dashlet:unlink-record:fire',
                'target' => 'view',
                'tooltip' => 'LBL_UNLINK_BUTTON',
                'acl_action' => 'edit',
              ),
            ),
            'include_child_items' => true,
            'invitation_actions' => 
            array (
              'name' => 'accept_status_users',
              'type' => 'invitation-actions',
            ),
            'overdue_badge' => 
            array (
              'name' => 'date_start',
              'type' => 'overdue-badge',
            ),
          ),
        ),
      ),
      'templates' => 
      array (
        'records' => '
<div class="tab-pane active">
    {{#if collection.length}}
        <ul class="unstyled listed" data-action="pagination-body">
            {{#each collection.models}}
                <li>
                    <div class="pull-right">
                        {{#if ../../row_actions}}
                            {{#each ../../row_actions}}
                                {{field ../../../this model=../this}}
                            {{/each}}
                        {{/if}}
                        {{#if attributes.invitation}}
                            {{#with ../../invitationActions}}
                                {{field ../../../this model=../attributes.invitation template=\'edit\'}}
                            {{/with}}
                        {{/if}}
                    </div>
                    {{#if ../overdueBadge}}
                        {{#with ../../overdueBadge}}
                            {{field ../../../this model=../../this template=\'detail\'}}
                        {{/with}}
                    {{/if}}
                    <p>
                        {{#if attributes.assigned_user_id}}
                            <a href="#{{buildRoute module="Employees" id=attributes.assigned_user_id action="detail"}}" class="pull-left avatar avatar-md" data-title="{{getFieldValue this "assigned_user_name"}}">
                                <img src="{{getFieldValue this "picture_url"}}" alt="{{getFieldValue this "assigned_user_name"}}">
                            </a>
                        {{else}}
                            <span class="icon-stack pull-left">
                                <i class="icon-user icon-stack-base"></i>
                                <i class="icon-question-sign icon-light"></i>
                            </span>
                        {{/if}}
                        <a href="#{{buildRoute model=this action="detail"}}">{{getFieldValue this "name"}}</a>
                    </p>
                    <div class="details">
                        {{#if attributes.assigned_user_id}}
                            <a href="#{{buildRoute module="Employees" id=attributes.assigned_user_id action="detail"}}">{{getFieldValue this "assigned_user_name"}}</a>&#44;
                        {{else}}
                            {{str "LBL_UNASSIGNED" this.module}}&#44;
                        {{/if}}
                        {{relativeTime attributes.record_date class=\'date\'}}
                    </div>
                </li>
            {{/each}}
        </ul>
    {{else}}
        <div class="block-footer">{{#if ../collection.dataFetched}}{{str "LBL_NO_DATA_AVAILABLE" this.module}}{{else}}{{str "LBL_LOADING" this.module}}{{/if}}</div>
    {{/if}}
</div>
',
        'row' => '
{{#with rowModel}}
    <li>
        <div class="pull-right">
            {{#if ../row_actions}}
                {{#each ../../row_actions}}
                    {{field ../../../this model=../this}}
                {{/each}}
            {{/if}}
            {{#if attributes.invitation}}
                {{#with ../../invitationActions}}
                    {{field ../../../this model=../attributes.invitation template=\'edit\'}}
                {{/with}}
            {{/if}}
        </div>
        <p>
            {{#if attributes.assigned_user_id}}
                <a href="#{{buildRoute module="Employees" id=attributes.assigned_user_id action="detail"}}" class="pull-left avatar avatar-md" data-title="{{getFieldValue this "assigned_user_name"}}">
                    <img src="{{getFieldValue this "picture_url"}}" alt="{{getFieldValue this "assigned_user_name"}}">
                </a>
            {{else}}
                <span class="icon-stack pull-left">
                    <i class="icon-user icon-stack-base"></i>
                    <i class="icon-question-sign icon-light"></i>
                </span>
            {{/if}}
            <a href="#{{buildRoute model=this action="detail"}}">{{getFieldValue this "name"}}</a>
        </p>
        <div class="details">
            {{#if ../overdueBadge}}
                {{#with ../../overdueBadge}}
                    {{field ../../../this model=../../this template=\'detail\'}}
                {{/with}}
            {{/if}}
            {{#if attributes.assigned_user_id}}
                <a href="#{{buildRoute module="Employees" id=attributes.assigned_user_id action="detail"}}">
                    {{getFieldValue this "assigned_user_name"}}&#44;
                </a>
            {{else}}
                {{str "LBL_UNASSIGNED" this.module}}&#44;
            {{/if}}
            {{relativeTime attributes.record_date class=\'date\'}}
        </div>
    </li>
{{/with}}
',
        'toolbar' => '
<div class="dashlet-options">
    <div class="row-fluid">
        {{#if settings.attributes.date}}
            <div class="btn-group dashlet-group" data-toggle="buttons-radio">
                <button class="btn{{#eq settings.attributes.date "today"}} active{{/eq}}" value="today" data-action="date-switcher">{{str "LBL_PLANNED_ACTIVITIES_DASHLET_TODAY_BUTTON_LABEL" this.module}}</button>
                <button class="btn{{#eq settings.attributes.date "future"}} active{{/eq}}" value="future" data-action="date-switcher">{{str "LBL_PLANNED_ACTIVITIES_DASHLET_FUTURE_BUTTON_LABEL" this.module}}</button>
            </div>
        {{/if}}
        {{#if settings.attributes.visibility}}
            <div class="btn-group pull-right dashlet-group" data-toggle="buttons-radio">
                <button class="btn{{#eq settings.attributes.visibility "user"}} active{{/eq}}" value="user" data-action="visibility-switcher" rel="tooltip" data-container="body" data-placement="bottom" title="{{str "LBL_PLANNED_ACTIVITIES_DASHLET_USER_BUTTON_LABEL" this.module}}" track="click:viewMyUserDashlet"><i class="icon-user"></i></button>
                <button class="btn{{#eq settings.attributes.visibility "group"}} active{{/eq}}" value="group" data-action="visibility-switcher" rel="tooltip" data-container="body" data-placement="bottom" title="{{str "LBL_PLANNED_ACTIVITIES_DASHLET_GROUP_BUTTON_LABEL" this.module}}" track="click:viewMyTeamsDashlet"><i class="icon-group"></i></button>
            </div>
        {{/if}}
    </div>
</div>
',
      ),
    ),
    'preview' => 
    array (
      'templates' => 
      array (
        'preview' => '
<div class="block preview-data">
{{#each meta.panels}}
{{#each fields}}
    <div class="row-fluid{{#if ../hide}}{{#if ../../../hidePanel}} hide{{/if}} panel_hidden{{/if}}">
        <div class="span5">{{str  this.label ../../this.model.module}}</div>
        <div class="span7" data-type="{{type}}" name="{{name}}">
            {{field ../../this model=../../model template="detail"}}
        </div>
    </div>
{{/each}}
{{/each}}
    <div class="row-fluid">
        <div class="{{#unless hiddenPanelExists}} hide{{/unless}} span5 show-hide-toggle">
            <button class="btn-link btn-invisible more{{#if hideMoreButton}} hide{{/if}}"
                    data-moreless="more"
                    data-target=".panel_hidden">{{str "LBL_SHOW_MORE"}}...</button>
            <button class="btn-link btn-invisible less{{#if hideLessButton}} hide{{/if}}"
                    data-moreless="less"
                    data-target=".panel_hidden">{{str "LBL_SHOW_LESS"}}</button>
        </div>
    </div>
</div>
',
      ),
    ),
    'preview-header' => 
    array (
      'templates' => 
      array (
        'preview-header' => '
<h1>{{str "LBL_PREVIEW"}}</h1>
<div class="btn-toolbar pull-right">
    <div class="btn-group">
        {{#unless layout.hideNextPrevious}}
        <a class="btn btn-invisible{{#unless layout.previous}} disabled{{/unless}}" data-direction="left"><i class="icon-chevron-left"></i></a>
        <a class="btn btn-invisible{{#unless layout.next}} disabled{{/unless}}" data-direction="right"><i class="icon-chevron-right"></i></a>
        {{/unless}}
    </div>
    <div class="btn-group">
        <a class="btn btn-invisible closeSubdetail" data-toggle="tab"><i class="icon-remove"></i></a>
    </div>
</div>
',
      ),
    ),
    'quickcreate' => 
    array (
      'templates' => 
      array (
        'quickcreate' => '
<ul class="nav megamenu" >
    <li class="dropdown" id="createList">
        <div class="btn-group">
            <button data-toggle="dropdown" role="button" class="btn btn-invisible btn-link dropdown-toggle" rel="tooltip" data-placement="left" title="{{str "LBL_QUICK_CREATE_TITLE"}}" track="click:quickCreate" aria-label="{{str \'LBL_QUICK_CREATE_MENU\'}}"><i class="icon-plus icon-md"></i></button>
            <div class="dropdown-menu scroll pull-right" role="menu">
                <ul>
                    {{#each createMenuItems}}
                        <li>{{field ../this model=model template=../this.action}}</li>
                    {{/each}}
                </ul>
            </div>
        </div>
    </li>
</ul>
',
      ),
    ),
    'record' => 
    array (
      'templates' => 
      array (
        'record' => '
<div>
{{#if model.isNotEmpty}}
    {{#if enableHeaderPane}}
        <div class="headerpane">
            <h1>
                {{#each meta.panels}}
                    {{#if header}}
                        {{#each grid}}
                            {{#each this}}
                                <span class="record-cell" data-type="{{type}}" data-name="{{name}}">
                                    <span class="table-cell-wrapper">
                                        {{#if ../../this.labels}}
                                            {{#unless dismiss_label}}
                                                <span class="record-label" data-name="{{name}}">{{str label ../../../../../../this.model.module}}</span>
                                            {{/unless}}
                                        {{/if}}
                                        <span class="index{{index}}" data-fieldname="{{name}}" data-index="{{index}}">
                                            {{field ../../../../this model=../../../../this.model template=../../../../this.action}}
                                        </span>
                                        {{#unless ../../../../createMode}}
                                            {{#notHas name ../../../../../noEditFields}}
                                                <span class="record-edit-link-wrapper" data-name="{{name}}">
                                                    <a class="record-edit-link btn btn-invisible" data-type="{{type}}" data-name="{{name}}"><i class="icon-pencil"></i></a>
                                                </span>
                                            {{/notHas}}
                                        {{/unless}}
                                    </span>
                                </span>
                            {{/each}}
                        {{/each}}
                    {{/if}}
                {{/each}}
                {{#if enableHeaderButtons}}
                    <div class="btn-toolbar pull-right">
                        {{#unless createMode}}
                            {{#if showPrevNextBtnGroup}}
                                <div class="btn-group btn-group-previous-next">
                                    <button class="btn btn-invisible previous-row{{#unless showPrevious}} disabled{{/unless}}"
                                            data-action="scroll" data-action-type="prev"
                                            data-id="{{getFieldValue model "id"}}" rel="tooltip" data-placement="bottom" title="{{str "LNK_LIST_PREVIOUS" model.module}}">
                                        <i class="icon-chevron-left"></i>
                                    </button>
                                    <button class="btn btn-invisible next-row{{#unless showNext}} disabled{{/unless}}"
                                            data-action="scroll" data-action-type="next"
                                            data-id="{{getFieldValue model "id"}}" rel="tooltip" data-placement="bottom" title="{{str "LNK_LIST_NEXT" model.module}}">
                                        <i class="icon-chevron-right"></i>
                                    </button>
                                </div>
                            {{/if}}
                        {{/unless}}
                        {{#each meta.buttons}}
                            {{field ../this}}
                        {{/each}}
                    </div>
                {{/if}}
            </h1>
        </div>
    {{/if}}

    {{#if meta.useTabsAndPanels}}
    {{! if the first panel uses panels, then the rest use panels, so don\'t use tabview }}
        <div class="record tab-layout">
        {{#if meta.firstPanelIsTab}}
            <div class="content-tabs">
                <ul class="nav nav-tabs" id="recordTab">
                    {{#each meta.panels}}
                        {{#unless header}}
                            {{#if newTab}}
                                <li class="tab {{name}}">
                                    <a href="#{{name}}{{../../../cid}}" data-toggle="tab">{{str label ../../../this.module}}</a>
                                </li>
                            {{/if}}
                        {{/unless}}
                    {{/each}}
                    <li class="tab dropdown more hidden">
                        <a class="dropdown-toggle" data-toggle="dropdown"><b class="icon-chevron-down"></b></a>
                        <ul class="dropdown-menu scroll pull-right" role="menu">
                            {{#each meta.panels}}
                                {{#unless header}}
                                    {{#if newTab}}
                                        <li class="{{name}}">
                                            <a href="#{{name}}{{../../../cid}}">{{str label ../../../this.module}}</a>
                                        </li>
                                    {{/if}}
                                {{/unless}}
                            {{/each}}
                        </ul>
                    </li>
                </ul>
            <div id="tabContent" class="tab-content">
        {{/if}}
        {{#each meta.panels}}
            {{#unless header}}
                {{#if newTab}}
                    {{#notEq @index ../../../../meta.firstNonHeaderPanelIndex}}
                        </div>
                    {{/notEq}}
                    <div class="tab-pane fade" id="{{name}}{{../../../cid}}">
                {{else}}
                    <div class="row-fluid record-panel" data-panelName="{{name}}">
                        <div class="row-fluid record-panel-header {{#eq panelState "collapsed"}}panel-inactive{{/eq}}{{#notEq panelState "collapsed"}}panel-active{{/notEq}}">
                            <h4 class="pull-left">
                                {{str label ../../../this.module}}
                            </h4>
                            <div class="pull-right">
                                <button class="btn btn-invisible record-panel-arrow">
                                    <i class="icon-chevron-{{#eq panelState "collapsed"}}down{{/eq}}{{#notEq panelState "collapsed"}}up{{/notEq}}" rel="tooltip" data-container="body" data-title="Toggle Visibility"></i>
                                </button>
                            </div>
                        </div>
                    <div class="row-fluid record-panel-content {{#eq panelState "collapsed"}}hide{{/eq}}">
                {{/if}}
                {{#each grid}}
                        <div class="row-fluid {{../name}}">
                            {{#each this}}
                                <div class="span{{span}} record-cell{{#if cell_css_class}} {{cell_css_class}}{{/if}}" data-type="{{type}}" data-name="{{name}}">
                                    {{#if ../../labels}}
                                        {{#unless dismiss_label}}
                                            <div class="record-label" data-name="{{name}}">
                                                {{#if label}}{{str label ../../../../../../../../module}}{{/if}}
                                            </div>
                                        {{/unless}}
                                    {{/if}}
                                    {{#if name}}
                                        <span class="normal{{#if css}} {{css}}{{/if}} index{{index}}" data-fieldname="{{name}}" data-index="{{index}}">
                                            {{field ../../../../../../this model=../../../../../../model template=../../../../../../action}}
                                        </span>
                                    {{/if}}
                                    {{#unless ../../../../../../createMode}}
                                        {{#notHas name ../../../../../../../noEditFields}}
                                            <span class="record-edit-link-wrapper" data-name="{{name}}">
                                                <a class="record-edit-link btn btn-invisible" data-type="{{type}}" data-name="{{name}}"><i class="icon-pencil"></i></a>
                                            </span>
                                        {{/notHas}}
                                    {{/unless}}
                                </div>
                            {{/each}}
                        </div>
                {{/each}}
                {{#unless newTab}}</div></div>{{/unless}}
                {{#eq @index ../../../../meta.lastPanelIndex}}</div>{{/eq}}
            {{/unless}}
        {{/each}}
        {{#if meta.firstPanelIsTab}}
            </div>
            </div>
        {{/if}}
        </div>
    {{else}}
        <div class="record">
            {{#each meta.panels}}
                {{#unless header}}
                    {{#if ../labelsOnTop}}
                        {{#each grid}}
                            <div class="row-fluid {{../name}}{{#if ../hide}}{{#if ../../../../../hidePanel}} hide{{/if}}{{/if}}">
                                {{#each this}}
                                    <div class="span{{span}} record-cell{{#if cell_css_class}} {{cell_css_class}}{{/if}}" data-type="{{type}}" data-name="{{name}}">
                                        {{#if ../../labels}}
                                            {{#unless dismiss_label}}
                                                <div class="record-label" data-name="{{name}}">
                                                    {{#if label}}{{str label ../../../../../../../../module}}{{/if}}
                                                </div>
                                            {{/unless}}
                                        {{/if}}
                                        {{#if name}}
                                            <span class="normal{{#if css}} {{css}}{{/if}} index{{index}}" data-fieldname="{{name}}" data-index="{{index}}">
                                                {{field ../../../../../../this model=../../../../../../model template=../../../../../../action}}
                                            </span>
                                        {{/if}}
                                        {{#unless ../../../../../../createMode}}
                                            {{#notHas name ../../../../../../../noEditFields}}
                                            <span class="record-edit-link-wrapper" data-name="{{name}}">
                                                <a class="record-edit-link btn btn-invisible" data-type="{{type}}" data-name="{{name}}"><i class="icon-pencil"></i></a>
                                            </span>
                                            {{/notHas}}
                                        {{/unless}}
                                    </div>
                                {{/each}}
                            </div>
                        {{/each}}
                    {{else}}
                        <div class="form-horizontal">
                            <fieldset class="card2">
                                {{#each grid}}
                                    <div class="row-fluid control-group {{../name}}{{#if ../hide}}{{#if ../../../../../hidePanel}} hide{{/if}}{{/if}}">
                                        {{#each this}}
                                            {{#if ../../labels}}
                                                {{#unless dismiss_label}}
                                                    <div class="control-label span{{labelSpan}} {{label_css_class}}">
                                                        <div class="control-label-background span{{labelSpan}}">
                                                            <label class="tright record-label" data-name="{{name}}">{{str label ../../../../../../../module}}</label>
                                                        </div>
                                                    </div>
                                                {{/unless}}
                                            {{/if}}
                                            <div class="controls span{{span}} record-cell {{cell_css_class}}"
                                                 data-type="{{type}}" data-name="{{name}}">
                                                {{#if name}}
                                                    <span class="normal{{#if css}} {{css}}{{/if}} index{{index}}" data-fieldname="{{name}}" data-index="{{index}}">
                                                        {{field ../../../../../../this model=../../../../../../model template=../../../../../../action}}
                                                    </span>
                                                {{/if}}
                                                {{#unless ../../../../../../createMode}}
                                                    {{#notHas name ../../../../../../../noEditFields}}
                                                        <span class="record-edit-link-wrapper" data-name="{{name}}">
                                                        <a class="record-edit-link btn btn-invisible" data-type="{{type}}" data-name="{{name}}"><i class="icon-pencil"></i></a>
                                                    </span>
                                                    {{/notHas}}
                                                {{/unless}}
                                            </div>
                                        {{/each}}
                                    </div>
                                {{/each}}
                            </fieldset>
                        </div>
                    {{/if}}
                {{/unless}}
            {{/each}}
        </div>
        <div class="row-fluid{{#unless hiddenPanelExists}} hide{{/unless}} show-hide-toggle">
            <div class="record-cell">
                <button class="btn-link btn-invisible more{{#if hideMoreButton}} hide{{/if}}"
                        data-moreless="more"
                        data-target=".panel_hidden">{{str "LBL_SHOW_MORE"}}...</i></button>
                <button class="btn-link btn-invisible less{{#if hideLessButton}} hide{{/if}}"
                        data-moreless="less"
                        data-target=".panel_hidden">{{str "LBL_SHOW_LESS"}}</button>
            </div>
        </div>
    {{/if}}
{{/if}}
</div>
',
      ),
      'meta' => 
      array (
        'buttons' => 
        array (
          0 => 
          array (
            'type' => 'button',
            'name' => 'cancel_button',
            'label' => 'LBL_CANCEL_BUTTON_LABEL',
            'css_class' => 'btn-invisible btn-link',
            'showOn' => 'edit',
          ),
          1 => 
          array (
            'type' => 'rowaction',
            'event' => 'button:save_button:click',
            'name' => 'save_button',
            'label' => 'LBL_SAVE_BUTTON_LABEL',
            'css_class' => 'btn btn-primary',
            'showOn' => 'edit',
            'acl_action' => 'edit',
          ),
          2 => 
          array (
            'type' => 'actiondropdown',
            'name' => 'main_dropdown',
            'primary' => true,
            'showOn' => 'view',
            'buttons' => 
            array (
              0 => 
              array (
                'type' => 'rowaction',
                'event' => 'button:edit_button:click',
                'name' => 'edit_button',
                'label' => 'LBL_EDIT_BUTTON_LABEL',
                'acl_action' => 'edit',
              ),
              1 => 
              array (
                'type' => 'shareaction',
                'name' => 'share',
                'label' => 'LBL_RECORD_SHARE_BUTTON',
                'acl_action' => 'view',
              ),
              2 => 
              array (
                'type' => 'pdfaction',
                'name' => 'download-pdf',
                'label' => 'LBL_PDF_VIEW',
                'action' => 'download',
                'acl_action' => 'view',
              ),
              3 => 
              array (
                'type' => 'pdfaction',
                'name' => 'email-pdf',
                'label' => 'LBL_PDF_EMAIL',
                'action' => 'email',
                'acl_action' => 'view',
              ),
              4 => 
              array (
                'type' => 'divider',
              ),
              5 => 
              array (
                'type' => 'rowaction',
                'event' => 'button:find_duplicates_button:click',
                'name' => 'find_duplicates_button',
                'label' => 'LBL_DUP_MERGE',
                'acl_action' => 'edit',
              ),
              6 => 
              array (
                'type' => 'rowaction',
                'event' => 'button:duplicate_button:click',
                'name' => 'duplicate_button',
                'label' => 'LBL_DUPLICATE_BUTTON_LABEL',
                'acl_module' => '',
                'acl_action' => 'create',
              ),
              7 => 
              array (
                'type' => 'rowaction',
                'event' => 'button:audit_button:click',
                'name' => 'audit_button',
                'label' => 'LNK_VIEW_CHANGE_LOG',
                'acl_action' => 'view',
              ),
              8 => 
              array (
                'type' => 'divider',
              ),
              9 => 
              array (
                'type' => 'rowaction',
                'event' => 'button:delete_button:click',
                'name' => 'delete_button',
                'label' => 'LBL_DELETE_BUTTON_LABEL',
                'acl_action' => 'delete',
              ),
            ),
          ),
          3 => 
          array (
            'name' => 'sidebar_toggle',
            'type' => 'sidebartoggle',
          ),
        ),
        'last_state' => 
        array (
          'id' => 'record_view',
          'defaults' => 
          array (
            'show_more' => 'more',
          ),
        ),
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
              'name' => 'delete_button',
              'type' => 'button',
              'label' => 'LBL_DELETE',
              'acl_action' => 'delete',
              'primary' => true,
              'events' => 
              array (
                'click' => 'list:massdelete:fire',
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
      'templates' => 
      array (
        'row' => '
{{#with rowModel}}
    <tr name="{{module}}_{{attributes.id}}" class="single">
        {{#each ../leftColumns}}
            <td>
                {{field ../../this model=../this template=../../this.viewName}}
            </td>
        {{/each}}
        {{#each ../_fields.visible}}
            <td{{#if this.align}} class="{{this.align}}"{{/if}} {{#if this.maxWidth}}style="max-width:{{this.maxWidth}}" {{/if}}data-type="{{type}}">
                {{field ../../this model=../this template=../../this.viewName}}
            </td>
        {{/each}}
        {{#each ../rightColumns}}
            <td>
                {{field ../../this model=../this template=../../this.viewName}}
            </td>
        {{/each}}
    </tr>
{{/with}}
',
      ),
    ),
    'resolve-conflicts-headerpane' => 
    array (
      'meta' => 
      array (
        'template' => 'headerpane',
        'fields' => 
        array (
          0 => 
          array (
            'name' => 'title',
            'type' => 'label',
            'default_value' => 'LBL_RESOLVE_CONFLICT',
          ),
        ),
        'buttons' => 
        array (
          0 => 
          array (
            'name' => 'cancel_button',
            'type' => 'button',
            'label' => 'LBL_CANCEL_BUTTON_LABEL',
            'css_class' => 'btn-invisible btn-link',
          ),
          1 => 
          array (
            'name' => 'select_button',
            'type' => 'button',
            'label' => 'LBL_SELECT_BUTTON_LABEL',
            'css_class' => 'btn-primary disabled',
            'acl_action' => 'edit',
          ),
          2 => 
          array (
            'name' => 'sidebar_toggle',
            'type' => 'sidebartoggle',
          ),
        ),
      ),
    ),
    'saved-reports-chart' => 
    array (
      'templates' => 
      array (
        'saved-reports-chart' => '
{{#with dashletConfig.chart}}
    {{field ../this model=../this.reportData template=detail}}
{{/with}}
',
      ),
      'meta' => 
      array (
        'dashlets' => 
        array (
          0 => 
          array (
            'label' => 'LBL_DASHLET_SAVED_REPORTS_CHART',
            'description' => 'LBL_DASHLET_SAVED_REPORTS_CHART_DESC',
            'config' => 
            array (
            ),
            'preview' => 
            array (
            ),
          ),
        ),
        'dashlet_config_panels' => 
        array (
          0 => 
          array (
            'name' => 'panel_body',
            'columns' => 2,
            'labelsOnTop' => true,
            'placeholders' => true,
            'fields' => 
            array (
              0 => 
              array (
                'name' => 'saved_report_id',
                'label' => 'LBL_REPORT_SELECT',
                'type' => 'enum',
                'options' => 
                array (
                  '' => '',
                ),
              ),
              1 => 
              array (
                'name' => 'auto_refresh',
                'label' => 'LBL_REPORT_AUTO_REFRESH',
                'type' => 'enum',
                'options' => 'sugar7_dashlet_reports_auto_refresh_options',
              ),
              2 => 
              array (
                'name' => 'editReport',
                'label' => 'LBL_REPORT_EDIT',
                'type' => 'button',
                'css_class' => 'btn-invisible btn-link btn-inline',
                'dismiss_label' => true,
              ),
            ),
          ),
        ),
        'chart' => 
        array (
          'name' => 'chart',
          'label' => 'Chart',
          'type' => 'chart',
          'view' => 'detail',
        ),
      ),
    ),
    'selection-headerpane' => 
    array (
      'meta' => 
      array (
        'template' => 'headerpane',
        'fields' => 
        array (
          0 => 
          array (
            'name' => 'title',
            'type' => 'label',
            'default_value' => 'LBL_SEARCH_AND_SELECT',
          ),
        ),
        'buttons' => 
        array (
          0 => 
          array (
            'name' => 'close',
            'type' => 'button',
            'label' => 'LBL_CANCEL_BUTTON_LABEL',
            'events' => 
            array (
              'click' => 'selection:closedrawer:fire',
            ),
            'css_class' => 'btn-invisible btn-link',
          ),
          1 => 
          array (
            'name' => 'create_button',
            'type' => 'button',
            'label' => 'LBL_CREATE_BUTTON_LABEL',
            'acl_action' => 'create',
          ),
          2 => 
          array (
            'name' => 'link_button',
            'type' => 'button',
            'label' => 'LBL_LINK_BUTTON',
            'css_class' => 'btn-primary',
            'events' => 
            array (
              'click' => 'selection:link:fire',
            ),
          ),
          3 => 
          array (
            'name' => 'sidebar_toggle',
            'type' => 'sidebartoggle',
          ),
        ),
      ),
    ),
    'setup-complete-wizard-page' => 
    array (
      'templates' => 
      array (
        'setup-complete-wizard-page' => '
{{> wizard-page.header }}
<div class="modal-body">

{{#eq wizardName "admin"}}
    <ul class="thumbnails row-fluid">
        <li class="span2">
            <a class="thumbnail" href="#bwc/index.php?module=Administration&action=Locale&view=default"><i class="icon-globe"></i>{{str "LBL_WIZ_SYSTEM_LOCALE_SETTINGS" module}}</a>
        </li>
        <li class="span2">
            <a class="thumbnail" href="#bwc/index.php?module=EmailMan&action=config"><i class="icon-envelope"></i>{{str "LBL_WIZ_EMAIL_SETTINGS" module}}</a>
        </li>
        <li class="span2">
            <a class="thumbnail" href="#bwc/index.php?module=Configurator&action=EditView"><i class="icon-cogs"></i>{{str "LBL_WIZ_APPLICATION_SETTINGS" module}}</a>
        </li>
        <li class="span2">
            <a class="thumbnail" href="#bwc/index.php?module=Users&action=index"><i class="icon-plus-sign-alt"></i>{{str "LBL_WIZ_CREATE_USERS" module}}</a>
        </li>
        <li class="span2">
            <a class="thumbnail" href="#bwc/index.php?module=Import&action=step1&import_module=Administration"><i class="icon-upload"></i>{{str "LBL_WIZ_IMPORT_DATA" module}}</a>
        </li>
        <li class="span2">
            <a class="thumbnail" href="#bwc/index.php?module=ModuleBuilder&action=index&type=studio"><i class="icon-wrench"></i>{{str "LBL_WIZ_CONFIGURE_APPLICATION" module}}</a>
        </li>
    </ul>
{{/eq}}
    <ul class="thumbnails row-fluid">
        <li class="span3">
            <a class="thumbnail" target="_blank" href="http://support.sugarcrm.com/03_Training"><i class="icon-info-sign"></i>{{str "LBL_WIZ_SUGAR_TRAINING" module}}</a>
        </li>
        <li class="span3">
            <a class="thumbnail" target="_blank" href="http://support.sugarcrm.com/02_Documentation"><i class="icon-book"></i>{{str "LBL_WIZ_DOCUMENTATION" module}}</a>
        </li>
        <li class="span3">
            <a class="thumbnail" target="_blank" href="http://support.sugarcrm.com/04_Find_Answers/02KB"><i class="icon-briefcase"></i>{{str "LBL_WIZ_KNOWLEDGE_BASE" module}}</a>
        </li>
        <li class="span3">
            <a class="thumbnail" target="_blank" href="http://community.sugarcrm.com"><i class="icon-comments-alt"></i>{{str "LBL_WIZ_FORUMS" module}}</a>
        </li>
    </ul>
</div>
{{> wizard-page.footer }}
',
      ),
      'meta' => 
      array (
        'title' => 'LBL_WIZ_COMPLETE_TITLE',
        'message' => 'LBL_SETUP_COMPLETE_INFO',
      ),
    ),
    'share' => 
    array (
      'templates' => 
      array (
        'body-html' => '
{{!--
Define this empty to fallback to the body.hbs (that that doesn\'t use html tags).
--}}
<p>{{str "TPL_RECORD_SHARE_BODY" module this}}</p>
<a href="{{url}}">{{url}}</a>
',
        'body' => '
{{!--
Use body-html.hbs to add html tags. Keep this one clean.

Since this will be used as a value, we won\'t make it output safe.
Don\'t use this directly on your html output!
--}}
{{{str "TPL_RECORD_SHARE_BODY" module this}}}

{{{url}}}
',
        'subject' => '
{{!--
Since this will be used as a value, we won\'t make it output safe.
Don\'t use this directly on your html output!
--}}
{{{str "TPL_RECORD_SHARE_SUBJECT" module this}}}
',
      ),
    ),
    'subpanel-list' => 
    array (
      'meta' => 
      array (
        'template' => 'recordlist',
        'favorite' => true,
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
              'allow_bwc' => false,
            ),
            1 => 
            array (
              'type' => 'rowaction',
              'name' => 'edit_button',
              'icon' => 'icon-pencil',
              'label' => 'LBL_EDIT_BUTTON',
              'event' => 'list:editrow:fire',
              'acl_action' => 'edit',
              'allow_bwc' => true,
            ),
            2 => 
            array (
              'type' => 'unlink-action',
              'icon' => 'icon-unlink',
              'label' => 'LBL_UNLINK_BUTTON',
            ),
          ),
        ),
        'last_state' => 
        array (
          'id' => 'subpanel-list',
        ),
      ),
    ),
    'tabbed-dashlet' => 
    array (
      'templates' => 
      array (
        'records' => '
<div class="tab-pane active">
    {{#if collection.length}}
        <ul class="unstyled listed">
            {{#each collection.models}}
                <li>
                    <p>
                        <a href="#{{buildRoute model=this action="detail"}}">{{getFieldValue this "name"}}</a>
                    </p>
                </li>
            {{/each}}
        </ul>
    {{else}}
        <div class="block-footer">{{#if ../collection.dataFetched}}{{str "LBL_NO_DATA_AVAILABLE" this.module}}{{else}}{{str "LBL_LOADING" this.module}}{{/if}}</div>
    {{/if}}
</div>
',
        'tabbed-dashlet' => '
{{{toolbarHtml}}}
<div class="dashlet-unordered-list">
    <div class="dashlet-tabs tab{{tabs.length}}">
        {{{tabsHtml}}}
    </div>
    <div class="tab-content">
        {{{recordsHtml}}}
    </div>
</div>
',
        'tabs' => '
<div class="dashlet-tabs-row">
    {{#each this.tabs}}
        <div class="dashlet-tab{{#eq ../settings.attributes.activeTab @index}} active{{/eq}}">
            <a data-toggle="tab" data-action="tab-switcher" data-index="{{@index}}">
                <span class="count" data-action="count">{{#if collection.dataFetched}}{{../collection.length}}{{#notEq ../collection.next_offset "-1"}}+{{/notEq}}{{else}}-{{/if}}</span>
                {{#if label}}
                    {{str label module}}
                {{else}}
                    {{#eq collection.length "1"}}
                        {{#if labels.singular}}{{str labels.singular module}}{{else}}{{str "LBL_MODULE_NAME_SINGULAR" module}}{{/if}}
                    {{else}}
                        {{#if labels.plural}}{{str labels.plural module}}{{else}}{{str "LBL_MODULE_NAME" module}}{{/if}}
                    {{/eq}}
                {{/if}}
            </a>
        </div>
    {{/each}}
</div>
',
        'toolbar' => '
<div class="dashlet-options">
    <div class="row-fluid">
        <div class="span8">
            {{#each dashletConfig.filter}}
                {{field ../this model=../settings template="edit"}}
            {{/each}}
        </div>
        {{#if settings.attributes.visibility}}
            <div class="span4">
                <div class="btn-group pull-right dashlet-group" data-toggle="buttons-radio">
                    <button class="btn{{#eq settings.attributes.visibility "user"}} active{{/eq}}" value="user" data-action="visibility-switcher" rel="tooltip" data-container="body" data-placement="bottom" title="{{#if ../dashletConfig.visibility_labels.user}}{{str ../dashletConfig.visibility_labels.user this.module}}{{else}}{{str "TPL_TABBED_DASHLET_USER_BUTTON_LABEL" this.module}}{{/if}}" track="click:viewMyUserTabbedDashlet"><i class="icon-user"></i></button>
                    <button class="btn{{#eq settings.attributes.visibility "group"}} active{{/eq}}" value="group" data-action="visibility-switcher" rel="tooltip" data-container="body" data-placement="bottom" title="{{#if ../dashletConfig.visibility_labels.group}}{{str ../dashletConfig.visibility_labels.group this.module}}{{else}}{{str "TPL_TABBED_DASHLET_GROUP_BUTTON_LABEL" this.module}}{{/if}}" track="click:viewMyTeamsTabbedDashlet"><i class="icon-group"></i></button>
                </div>
            </div>
        {{/if}}
    </div>
</div>
',
      ),
    ),
    'tutorial' => 
    array (
      'templates' => 
      array (
        'tutorial' => '
<div id="tutorial" style="display:none">
    <div id="mask" class="mask"></div>
    <div id="tutorial-content"></div>
    <div id="tutorial-controls">
        <div class="btn-group">
            <a title="Back" href="#" class="btn btn-inverse back-btn disabled" track="click:tutorial_back"><i class=" icon-chevron-left"></i></a>
            <a title="Done" href="#" class="btn btn-inverse done-btn" track="click:tutorial_done"><span>{{str "LBL_DONE_BUTTON_LABEL"}}</span></a>
            <a title="Next" href="#" class="btn btn-inverse next-btn" track="click:tutorial_forward"><i class=" icon-chevron-right"></i></a>
        </div>
    </div>
</div>',
      ),
      'meta' => 
      array (
        'records' => 
        array (
          'version' => 1,
          'intro' => 'LBL_TOUR_LIST_INTRO',
          'content' => 
          array (
            0 => 
            array (
              'name' => '.sidebar-toggle',
              'text' => 'LBL_TOUR_LIST_INT_TOGGLE',
              'full' => true,
              'horizAdj' => -11,
              'vertAdj' => -13,
            ),
            1 => 
            array (
              'name' => '.filter .search-filter',
              'text' => 'LBL_TOUR_LIST_FILTER1',
              'full' => true,
              'vertAdj' => -12,
            ),
            2 => 
            array (
              'name' => '.choice-filter',
              'text' => 'LBL_TOUR_LIST_FILTER2',
              'full' => true,
              'vertAdj' => -15,
            ),
            3 => 
            array (
              'name' => '.filter-view .search-name',
              'text' => 'LBL_TOUR_LIST_FILTER_SEARCH',
              'full' => true,
              'vertAdj' => -14,
            ),
            4 => 
            array (
              'name' => '[data-view="activitystream"]',
              'text' => 'LBL_TOUR_LIST_ACTIVTYSTREAMLIST_TOGGLE',
              'full' => true,
              'horizAdj' => 5,
              'vertAdj' => -10,
            ),
            5 => 
            array (
              'name' => '[data-event="list:preview:fire"]',
              'text' => 'LBL_TOUR_LIST_FILTER_PREVIEW',
              'full' => true,
              'vertAdj' => -15,
            ),
          ),
        ),
        'record' => 
        array (
          'version' => 1,
          'intro' => 'LBL_TOUR_RECORD_INTRO',
          'content' => 
          array (
            0 => 
            array (
              'name' => '[data-fieldname="first_name"]',
              'text' => 'LBL_TOUR_RECORD_INLINEEDIT',
              'full' => true,
              'horizAdj' => -15,
              'vertAdj' => -13,
            ),
            1 => 
            array (
              'name' => '[data-fieldname="name"]',
              'text' => 'LBL_TOUR_RECORD_INLINEEDIT',
              'full' => true,
              'horizAdj' => -11,
              'vertAdj' => -13,
            ),
            2 => 
            array (
              'name' => '[name="edit_button"]',
              'text' => 'LBL_TOUR_RECORD_ACTIONS',
              'full' => true,
              'horizAdj' => -1,
              'vertAdj' => -13,
            ),
            3 => 
            array (
              'name' => '.record .record-cell',
              'text' => 'LBL_TOUR_RECORD_INLINEEDITRECORD',
              'full' => true,
              'horizAdj' => -11,
              'vertAdj' => -13,
            ),
            4 => 
            array (
              'name' => '.show-hide-toggle',
              'text' => 'LBL_TOUR_RECORD_SHOWMORE',
              'full' => true,
              'horizAdj' => -11,
              'vertAdj' => -13,
            ),
            5 => 
            array (
              'name' => '[data-view="subpanel"]',
              'text' => 'LBL_TOUR_RECORD_TOGGLEACTIVITIES',
              'full' => true,
              'horizAdj' => -11,
              'vertAdj' => -13,
            ),
            6 => 
            array (
              'name' => '.preview-headerbar .dropdown-toggle',
              'text' => 'LBL_TOUR_RECORD_DASHBOARDNAME',
              'full' => true,
              'horizAdj' => -11,
              'vertAdj' => -13,
            ),
            7 => 
            array (
              'name' => '.preview-headerbar .btn-toolbar',
              'text' => 'LBL_TOUR_RECORD_DASHBOARDACTIONS',
              'full' => true,
              'horizAdj' => 8,
              'vertAdj' => 5,
            ),
            8 => 
            array (
              'name' => '.dashlet-cell .icon-cog',
              'text' => 'LBL_TOUR_RECORD_DASHLETCOG',
              'full' => true,
              'horizAdj' => -18,
              'vertAdj' => -18,
            ),
          ),
        ),
      ),
    ),
    'user-locale-wizard-page' => 
    array (
      'meta' => 
      array (
        'title' => 'LBL_WIZ_USER_LOCALE_TITLE',
        'message' => 'LBL_SETUP_USER_LOCALE_INFO',
        'panels' => 
        array (
          0 => 
          array (
            'label' => 'LBL_PANEL_DEFAULT',
            'columns' => 2,
            'labelsOnTop' => true,
            'placeholders' => true,
            'fields' => 
            array (
              0 => 
              array (
                'name' => 'timezone',
                'type' => 'enum',
                'label' => 'LBL_WIZ_TIMEZONE',
                'required' => true,
              ),
              1 => 
              array (
                'name' => 'timepref',
                'type' => 'enum',
                'label' => 'LBL_WIZ_TIMEFORMAT',
                'required' => true,
              ),
              2 => 
              array (
                'name' => 'datepref',
                'type' => 'enum',
                'label' => 'LBL_WIZ_DATE_FORMAT',
                'required' => true,
              ),
              3 => 
              array (
                'name' => 'default_locale_name_format',
                'type' => 'enum',
                'label' => 'LBL_WIZ_NAME_FORMAT',
                'required' => true,
                'separator' => '|',
              ),
            ),
          ),
        ),
      ),
    ),
    'user-wizard-page' => 
    array (
      'meta' => 
      array (
        'title' => 'LBL_WIZ_USER_PROFILE_TITLE',
        'message' => 'LBL_SETUP_USER_INFO',
        'panels' => 
        array (
          0 => 
          array (
            'label' => 'LBL_PANEL_DEFAULT',
            'columns' => 2,
            'labelsOnTop' => true,
            'placeholders' => true,
            'fields' => 
            array (
              0 => 
              array (
                'name' => 'first_name',
                'label' => 'LBL_WIZ_FIRST_NAME',
              ),
              1 => 
              array (
                'name' => 'last_name',
                'label' => 'LBL_WIZ_LAST_NAME',
                'required' => true,
              ),
              2 => 
              array (
                'name' => 'email',
                'type' => 'email-text',
                'label' => 'LBL_WIZ_EMAIL',
                'required' => true,
              ),
              3 => 
              array (
                'name' => 'phone_work',
                'type' => 'phone',
                'label' => 'LBL_LIST_PHONE',
              ),
            ),
          ),
        ),
      ),
    ),
    'vcard-import' => 
    array (
      'templates' => 
      array (
        'vcard-import' => '
{{#each meta.panels}}
    <p><b>{{str "LBL_IMPORT_VCARDTEXT" ../module}}</b></p>
    {{#each fields}}
    <div class="span10 controls">
        {{field ../../this}}
    </div>
    {{/each}}
{{/each}}
',
      ),
      'meta' => 
      array (
        'panels' => 
        array (
          0 => 
          array (
            'fields' => 
            array (
              0 => 
              array (
                'name' => 'vcard_import',
                'type' => 'file',
                'view' => 'edit',
              ),
            ),
          ),
        ),
      ),
    ),
    'vcard-import-headerpane' => 
    array (
      'meta' => 
      array (
        'template' => 'headerpane',
        'fields' => 
        array (
          0 => 
          array (
            'name' => 'title',
            'type' => 'label',
            'default_value' => 'LBL_IMPORT_VCARD',
          ),
        ),
        'buttons' => 
        array (
          0 => 
          array (
            'name' => 'vcard_cancel_button',
            'type' => 'button',
            'label' => 'LBL_CANCEL_BUTTON_LABEL',
            'css_class' => 'btn-invisible btn-link',
          ),
          1 => 
          array (
            'name' => 'vcard_finish_button',
            'type' => 'button',
            'label' => 'LBL_CREATE_BUTTON_LABEL',
            'acl_action' => 'create',
            'css_class' => 'btn-primary',
          ),
          2 => 
          array (
            'name' => 'sidebar_toggle',
            'type' => 'sidebartoggle',
          ),
        ),
      ),
    ),
    'wizard-page' => 
    array (
      'templates' => 
      array (
        'footer' => '

{{! This is a partial, open tags for last 2 divs are in header}}
        <div class="modal-footer">
            {{#each meta.buttons}}
                {{field ../this model=../model template="edit"}}
            {{/each}}
        </div>
    </div>
</div>

',
        'header' => '
<div class="welcome">
    <div class="modal">
        <div class="modal-header modal-header-firstlogin row-fluid">
            <span class="step-circle">
                {{#if wizardCompleted}}<i class="icon-ok-sign"></i>{{/if}}
                {{#unless wizardCompleted}}<span>{{progress.page}}</span>{{/unless}}
            </span>
            <div class="firstlogin-title span7">
                <h3>{{str meta.title module}}</h3>
                <span>{{str meta.message module}}</span>
            </div>
            <div class="progress-section span5 pull-right">
                <span>{{str "LBL_SETUP_PROGRESS" module}}</span>
                <div class="progress progress-success">
                    <div class="bar" style="width: {{percentComplete}}%;"></div>
                </div>
            </div>
        </div>
    {{! This is a partial, the close for the .modal div is in the footer partial}}
',
        'wizard-page' => '
{{> wizard-page.header }}
        <!-- Hack: Adding .record here since .record .record-cell contain styles we need :( -->
        <div class="modal-body record">
            {{#each meta.panels}}
                {{#each grid}}
                    <div class="row-fluid {{../name}}{{#if ../hide}} hide{{/if}}">
                        {{#each this}}
                            <div class="span{{span}} record-cell{{#if cell_css_class}} {{cell_css_class}}{{/if}}" data-type="{{type}}" data-name="{{name}}">
                                <div class="record-label" data-type="{{type}}" data-name="{{name}}">{{#if label}}{{str label module}}{{/if}}</div>
                                <span class="normal{{#if css}} {{css}}{{/if}}" data-fieldname="{{name}}">
                                    {{field ../../../this model=../../../model template="edit"}}
                                </span>
                            </div>
                        {{/each}}
                    </div>
                {{/each}}
            {{/each}}
        </div>
{{> wizard-page.footer }}
',
      ),
    ),
    '_hash' => '1601d15230daf8df75a16406557630a4',
  ),
  'layouts' => 
  array (
    'footer' => 
    array (
      'templates' => 
      array (
        'footer' => '
<footer>
    <div class="table-row">
        {{!
            Include a custom OEM logo in the application footer
        }}
        <img style=\'vertical-align: middle; height: 45px;\' src=\'custom/themes/default/images/clogo.png\' alt=\'Logo\'> 

        <div class="copyright">
            {{str "LBL_POWERED_BY_SUGARCRM"}}
        </div>
        <div class="table-cell">
            <div class="btn-toolbar pull-right">
            </div>
        </div>
    </div>
</footer>
',
      ),
      'meta' => 
      array (
        'components' => 
        array (
          'type' => 'simple',
          0 => 
          array (
            'view' => 'mobile-action',
          ),
          1 => 
          array (
            'view' => 'language-actions',
          ),
          2 => 
          array (
            'view' => 'footer-actions',
          ),
        ),
      ),
    ),
    'header' => 
    array (
      'templates' => 
      array (
        'header' => '
<div class="navbar navbar-fixed-top">
    <div class="navbar-inner">
        <div class="nav-collapse">
        </div>
    </div>
	<div style="width: 100%;height: 6px;float: left;background: url(custom/styleguide/assets/img/content_topbar.png);"></div>
</div>
',
      ),
      'meta' => 
      array (
        'components' => 
        array (
          0 => 
          array (
            'layout' => 'module-list',
          ),
          1 => 
          array (
            'view' => 'globalsearch',
          ),
          2 => 
          array (
            'view' => 'notifications',
          ),
          3 => 
          array (
            'view' => 'profileactions',
          ),
          4 => 
          array (
            'view' => 'quickcreate',
          ),
        ),
        'last_state' => 
        array (
          'id' => 'app-header',
          'defaults' => 
          array (
            'last-home' => 'dashboard',
          ),
        ),
      ),
    ),
    'access-denied' => 
    array (
      'meta' => 
      array (
        'type' => 'simple',
        'components' => 
        array (
          0 => 
          array (
            'view' => 'access-denied',
          ),
        ),
      ),
    ),
    'activities' => 
    array (
      'meta' => 
      array (
        'components' => 
        array (
          0 => 
          array (
            'layout' => 
            array (
              'components' => 
              array (
                0 => 
                array (
                  'layout' => 
                  array (
                    'components' => 
                    array (
                      0 => 
                      array (
                        'view' => 'list-headerpane',
                      ),
                      1 => 
                      array (
                        'layout' => 
                        array (
                          'type' => 'filterpanel',
                          'span' => 12,
                          'availableToggles' => 
                          array (
                            0 => 
                            array (
                              'name' => 'activitystream',
                              'icon' => 'icon-time',
                              'label' => 'LBL_ACTIVITY_STREAM',
                            ),
                          ),
                          'components' => 
                          array (
                            0 => 
                            array (
                              'layout' => 'filter',
                              'targetEl' => '.filter',
                              'position' => 'prepend',
                            ),
                            1 => 
                            array (
                              'view' => 'filter-rows',
                              'targetEl' => '.filter-options',
                            ),
                            2 => 
                            array (
                              'view' => 'filter-actions',
                              'targetEl' => '.filter-options',
                            ),
                            3 => 
                            array (
                              'layout' => 'activitystream',
                              'context' => 
                              array (
                                'module' => 'Activities',
                              ),
                            ),
                          ),
                        ),
                      ),
                    ),
                    'type' => 'simple',
                    'name' => 'main-pane',
                    'span' => 8,
                  ),
                ),
                1 => 
                array (
                  'layout' => 
                  array (
                    'components' => 
                    array (
                      0 => 
                      array (
                        'layout' => 'list-sidebar',
                      ),
                    ),
                    'type' => 'simple',
                    'name' => 'side-pane',
                    'span' => 4,
                  ),
                ),
                2 => 
                array (
                  'layout' => 
                  array (
                    'components' => 
                    array (
                      0 => 
                      array (
                        'layout' => 'dashboard',
                        'context' => 
                        array (
                          'forceNew' => true,
                          'module' => 'Home',
                        ),
                      ),
                    ),
                    'type' => 'simple',
                    'name' => 'dashboard-pane',
                    'span' => 4,
                  ),
                ),
                3 => 
                array (
                  'layout' => 
                  array (
                    'components' => 
                    array (
                      0 => 
                      array (
                        'layout' => 'preview',
                      ),
                    ),
                    'type' => 'simple',
                    'name' => 'preview-pane',
                    'span' => 8,
                  ),
                ),
              ),
              'type' => 'default',
              'name' => 'sidebar',
              'span' => 12,
            ),
          ),
        ),
        'type' => 'simple',
        'name' => 'base',
        'span' => 12,
      ),
    ),
    'activitystream' => 
    array (
      'templates' => 
      array (
        'activitystream' => '
<ul class="activitystream-list results"></ul>
',
      ),
      'meta' => 
      array (
        'components' => 
        array (
          0 => 
          array (
            'view' => 'activitystream-omnibar',
          ),
          1 => 
          array (
            'view' => 'list-bottom',
          ),
          2 => 
          array (
            'view' => 'activitystream-bottom',
          ),
        ),
        'type' => 'activitystream',
        'span' => 12,
      ),
    ),
    'asdashlet-filter' => 
    array (
      'meta' => 
      array (
        'components' => 
        array (
          0 => 
          array (
            'layout' => 
            array (
              'type' => 'filterpanel',
              'meta' => 
              array (
                'availableToggles' => 
                array (
                  0 => 
                  array (
                    'name' => 'activitystream',
                    'icon' => 'icon-th-list',
                    'label' => 'LBL_ACTIVITY_STREAM',
                  ),
                ),
                'components' => 
                array (
                  0 => 
                  array (
                    'layout' => 
                    array (
                      'meta' => 
                      array (
                        'components' => 
                        array (
                          0 => 
                          array (
                            'view' => 'filter-filter-dropdown',
                          ),
                        ),
                        'last_state' => 
                        array (
                          'id' => 'filter',
                        ),
                        'layoutType' => 'records',
                      ),
                      'span' => 12,
                      'type' => 'filter',
                    ),
                    'targetEl' => '.filter',
                    'position' => 'prepend',
                  ),
                  1 => 
                  array (
                    'view' => 'filter-rows',
                    'targetEl' => '.filter-options',
                  ),
                  2 => 
                  array (
                    'view' => 'filter-actions',
                    'targetEl' => '.filter-options',
                  ),
                ),
              ),
            ),
            'context' => 
            array (
              'module' => 'Activities',
            ),
          ),
        ),
        'name' => 'asdashlet-filter',
        'span' => 12,
      ),
    ),
    'audit' => 
    array (
      'meta' => 
      array (
        'components' => 
        array (
          0 => 
          array (
            'layout' => 
            array (
              'components' => 
              array (
                0 => 
                array (
                  'layout' => 
                  array (
                    'components' => 
                    array (
                      0 => 
                      array (
                        'view' => 'audit-headerpane',
                      ),
                      1 => 
                      array (
                        'view' => 'filtered-search',
                      ),
                      2 => 
                      array (
                        'view' => 'audit',
                      ),
                      3 => 
                      array (
                        'view' => 'audit-footer',
                      ),
                    ),
                    'type' => 'simple',
                    'name' => 'main-pane',
                    'span' => 8,
                  ),
                ),
                1 => 
                array (
                  'layout' => 
                  array (
                    'components' => 
                    array (
                      0 => 
                      array (
                        'layout' => 'audit-sidebar',
                      ),
                    ),
                    'type' => 'simple',
                    'name' => 'side-pane',
                    'span' => 4,
                  ),
                ),
                2 => 
                array (
                  'layout' => 
                  array (
                    'components' => 
                    array (
                      0 => 
                      array (
                        'layout' => 'preview',
                      ),
                    ),
                    'type' => 'simple',
                    'name' => 'preview-pane',
                    'span' => 8,
                  ),
                ),
              ),
              'type' => 'default',
              'name' => 'sidebar',
              'span' => 12,
            ),
          ),
        ),
        'type' => 'audit',
        'name' => 'base',
        'span' => 12,
      ),
    ),
    'bwc' => 
    array (
      'meta' => 
      array (
        'type' => 'bwc',
        'components' => 
        array (
          0 => 
          array (
            'view' => 'bwc',
          ),
        ),
      ),
    ),
    'create' => 
    array (
      'meta' => 
      array (
        'components' => 
        array (
          0 => 
          array (
            'layout' => 
            array (
              'components' => 
              array (
                0 => 
                array (
                  'layout' => 
                  array (
                    'components' => 
                    array (
                      0 => 
                      array (
                        'view' => 'create',
                      ),
                    ),
                    'type' => 'simple',
                    'name' => 'main-pane',
                    'span' => 8,
                  ),
                ),
                1 => 
                array (
                  'layout' => 
                  array (
                    'components' => 
                    array (
                    ),
                    'type' => 'simple',
                    'name' => 'side-pane',
                    'span' => 4,
                  ),
                ),
                2 => 
                array (
                  'layout' => 
                  array (
                    'components' => 
                    array (
                    ),
                    'type' => 'simple',
                    'name' => 'dashboard-pane',
                    'span' => 4,
                  ),
                ),
                3 => 
                array (
                  'layout' => 
                  array (
                    'components' => 
                    array (
                      0 => 
                      array (
                        'layout' => 'preview',
                      ),
                    ),
                    'type' => 'simple',
                    'name' => 'preview-pane',
                    'span' => 8,
                  ),
                ),
              ),
              'type' => 'default',
              'name' => 'sidebar',
              'span' => 12,
              'last_state' => 
              array (
                'id' => 'create-default',
              ),
            ),
          ),
        ),
        'type' => 'create',
        'name' => 'base',
        'span' => 12,
      ),
    ),
    'create-actions' => 
    array (
      'meta' => 
      array (
        'components' => 
        array (
          0 => 
          array (
            'layout' => 
            array (
              'components' => 
              array (
                0 => 
                array (
                  'layout' => 
                  array (
                    'components' => 
                    array (
                      0 => 
                      array (
                        'view' => 'create-actions',
                      ),
                    ),
                    'type' => 'simple',
                    'name' => 'main-pane',
                    'span' => 8,
                  ),
                ),
                1 => 
                array (
                  'layout' => 
                  array (
                    'components' => 
                    array (
                    ),
                    'type' => 'simple',
                    'name' => 'side-pane',
                    'span' => 4,
                  ),
                ),
                2 => 
                array (
                  'layout' => 
                  array (
                    'components' => 
                    array (
                    ),
                    'type' => 'simple',
                    'name' => 'dashboard-pane',
                    'span' => 4,
                  ),
                ),
                3 => 
                array (
                  'layout' => 
                  array (
                    'components' => 
                    array (
                      0 => 
                      array (
                        'layout' => 'preview',
                      ),
                    ),
                    'type' => 'simple',
                    'name' => 'preview-pane',
                    'span' => 8,
                  ),
                ),
              ),
              'type' => 'default',
              'name' => 'sidebar',
              'span' => 12,
              'last_state' => 
              array (
                'id' => 'create-default',
              ),
            ),
          ),
        ),
        'type' => 'create-actions',
        'name' => 'base',
        'span' => 12,
      ),
    ),
    'create-dupecheck' => 
    array (
      'meta' => 
      array (
        'components' => 
        array (
          0 => 
          array (
            'view' => 'dupecheck-header',
          ),
          1 => 
          array (
            'name' => 'dupecheck-list',
            'view' => 'dupecheck-list',
            'primary' => true,
          ),
        ),
        'type' => 'dupecheck',
        'span' => 12,
      ),
    ),
    'create-nodupecheck' => 
    array (
      'meta' => 
      array (
        'components' => 
        array (
          0 => 
          array (
            'layout' => 
            array (
              'components' => 
              array (
                0 => 
                array (
                  'layout' => 
                  array (
                    'components' => 
                    array (
                      0 => 
                      array (
                        'view' => 'create-nodupecheck',
                      ),
                    ),
                    'type' => 'simple',
                    'name' => 'main-pane',
                    'span' => 8,
                  ),
                ),
                1 => 
                array (
                  'layout' => 
                  array (
                    'components' => 
                    array (
                    ),
                    'type' => 'simple',
                    'name' => 'side-pane',
                    'span' => 4,
                  ),
                ),
                2 => 
                array (
                  'layout' => 
                  array (
                    'components' => 
                    array (
                    ),
                    'type' => 'simple',
                    'name' => 'dashboard-pane',
                    'span' => 4,
                  ),
                ),
                3 => 
                array (
                  'layout' => 
                  array (
                    'components' => 
                    array (
                      0 => 
                      array (
                        'layout' => 'preview',
                      ),
                    ),
                    'type' => 'simple',
                    'name' => 'preview-pane',
                    'span' => 8,
                  ),
                ),
              ),
              'type' => 'default',
              'name' => 'sidebar',
              'span' => 12,
            ),
          ),
        ),
        'type' => 'create-nodupecheck',
        'name' => 'base',
        'span' => 12,
      ),
    ),
    'dashablelist-filter' => 
    array (
      'meta' => 
      array (
        'components' => 
        array (
          0 => 
          array (
            'layout' => 
            array (
              'type' => 'filterpanel',
              'meta' => 
              array (
                'components' => 
                array (
                  0 => 
                  array (
                    'layout' => 
                    array (
                      'meta' => 
                      array (
                        'components' => 
                        array (
                          0 => 
                          array (
                            'view' => 'filter-filter-dropdown',
                          ),
                        ),
                        'last_state' => 
                        array (
                          'id' => 'filter',
                        ),
                        'layoutType' => 'records',
                      ),
                      'span' => 12,
                      'type' => 'filter',
                    ),
                    'targetEl' => '.filter',
                    'position' => 'prepend',
                  ),
                  1 => 
                  array (
                    'view' => 'filter-rows',
                    'targetEl' => '.filter-options',
                  ),
                  2 => 
                  array (
                    'view' => 'filter-actions',
                    'targetEl' => '.filter-options',
                  ),
                ),
                'filter_options' => 
                array (
                  'auto_apply' => false,
                  'stickiness' => false,
                  'show_actions' => false,
                ),
              ),
            ),
          ),
        ),
        'name' => 'dashablelist-filter',
        'span' => 12,
      ),
    ),
    'dashboard' => 
    array (
      'templates' => 
      array (
        'dashboard-empty' => '
<div class="container-fluid">
    <h1 class="tcenter">{{str \'LBL_NO_DASHBOARD_CONFIGURED\' module}}</h1>
    <p class="tcenter"><button class="btn-link" data-action="create">{{str \'LBL_CREATE_DASHBOARD_LINK\' module}}</button></p>
</div>
',
      ),
    ),
    'dashlet' => 
    array (
      'templates' => 
      array (
        'dashlet' => '
<div class="thumbnail dashlet" data-type="dashlet" data-action="droppable">
    {{#if meta.preview}}
        <h4 data-toggle="dashlet" class="dashlet-title">{{meta.label}}</h4>
    {{else}}
        <div data-dashlet="toolbar"></div>
    {{/if}}
    <div data-dashlet="dashlet" class="dashlet-content"></div>
    <div class="swappable-dashlet icon-download-alt"></div>
</div>
',
      ),
    ),
    'dashlet-preview' => 
    array (
      'meta' => 
      array (
        'components' => 
        array (
          0 => 
          array (
            'view' => 'preview-header',
          ),
        ),
        'type' => 'preview',
        'span' => 12,
      ),
    ),
    'dashlet-row' => 
    array (
      'templates' => 
      array (
        'header' => '
<a data-toggle="dropdown" class="btn btn-invisible btn-link hide" rel="tooltip" title="{{str "LBL_DASHLET_CONFIGURE"}}" data-placement="bottom"><i class="icon-cog"></i></a>
<ul class="dropdown-menu left">
    <div>
        <li><a class="remove-row">{{str "LBL_DASHLET_REMOVE_LABEL"}}</a></li>
    </div>
</ul>
<a class="move btn btn-invisible btn-link hide" rel="tooltip" title="{{str "LBL_DASHLET_MOVE"}}" data-container="body" data-placement="bottom"><i class="icon-resize-vertical"></i></a>
',
      ),
    ),
    'dashletconfiguration' => 
    array (
      'meta' => 
      array (
        'components' => 
        array (
          0 => 
          array (
            'layout' => 
            array (
              'components' => 
              array (
                0 => 
                array (
                  'layout' => 
                  array (
                    'components' => 
                    array (
                      0 => 
                      array (
                        'view' => 'dashletconfiguration-headerpane',
                      ),
                    ),
                    'type' => 'simple',
                    'name' => 'main-pane',
                    'span' => 8,
                  ),
                ),
                1 => 
                array (
                  'layout' => 
                  array (
                    'components' => 
                    array (
                      0 => 
                      array (
                        'layout' => 'dashlet-sidebar',
                      ),
                    ),
                    'type' => 'simple',
                    'name' => 'side-pane',
                    'span' => 4,
                  ),
                ),
                2 => 
                array (
                  'layout' => 
                  array (
                    'components' => 
                    array (
                    ),
                    'type' => 'simple',
                    'name' => 'dashboard-pane',
                    'span' => 4,
                  ),
                ),
                3 => 
                array (
                  'layout' => 
                  array (
                    'components' => 
                    array (
                    ),
                    'type' => 'simple',
                    'name' => 'preview-pane',
                    'span' => 8,
                  ),
                ),
              ),
              'type' => 'default',
              'name' => 'sidebar',
              'span' => 12,
            ),
          ),
        ),
        'type' => 'dashletconfiguration',
        'name' => 'base',
        'span' => 12,
      ),
    ),
    'dashletselect' => 
    array (
      'meta' => 
      array (
        'components' => 
        array (
          0 => 
          array (
            'layout' => 
            array (
              'components' => 
              array (
                0 => 
                array (
                  'layout' => 
                  array (
                    'components' => 
                    array (
                      0 => 
                      array (
                        'view' => 'filtered-search',
                      ),
                      1 => 
                      array (
                        'view' => 'dashletselect-headerpane',
                      ),
                      2 => 
                      array (
                        'view' => 'dashletselect',
                      ),
                    ),
                    'type' => 'simple',
                    'name' => 'main-pane',
                    'span' => 8,
                  ),
                ),
                1 => 
                array (
                  'layout' => 
                  array (
                    'components' => 
                    array (
                      0 => 
                      array (
                        'layout' => 'dashlet-sidebar',
                      ),
                    ),
                    'type' => 'simple',
                    'name' => 'side-pane',
                    'span' => 4,
                  ),
                ),
                2 => 
                array (
                  'layout' => 
                  array (
                    'components' => 
                    array (
                    ),
                    'type' => 'simple',
                    'name' => 'dashboard-pane',
                    'span' => 4,
                  ),
                ),
                3 => 
                array (
                  'layout' => 
                  array (
                    'components' => 
                    array (
                      0 => 
                      array (
                        'layout' => 'dashlet-preview',
                      ),
                    ),
                    'type' => 'simple',
                    'name' => 'preview-pane',
                    'span' => 8,
                  ),
                ),
              ),
              'type' => 'default',
              'name' => 'sidebar',
              'span' => 12,
            ),
          ),
        ),
        'type' => 'dashletselect',
        'name' => 'base',
        'span' => 12,
      ),
    ),
    'default' => 
    array (
      'templates' => 
      array (
        'default' => '
<div class="main-pane"></div>
<div class="side sidebar-content">
    <div class="side-pane active"></div>
    <div class="dashboard-pane"></div>
    <div class="preview-pane"></div>
</div>
',
      ),
    ),
    'dnb-bal' => 
    array (
      'meta' => 
      array (
        'components' => 
        array (
          0 => 
          array (
            'layout' => 
            array (
              'components' => 
              array (
                0 => 
                array (
                  'layout' => 
                  array (
                    'components' => 
                    array (
                      0 => 
                      array (
                        'view' => 'dnb-bal-header',
                      ),
                      1 => 
                      array (
                        'view' => 'dnb-bal-params',
                      ),
                    ),
                    'type' => 'simple',
                    'name' => 'main-pane',
                    'span' => 8,
                  ),
                ),
                1 => 
                array (
                  'layout' => 
                  array (
                    'components' => 
                    array (
                      0 => 
                      array (
                        'layout' => 'sidebar',
                      ),
                    ),
                    'type' => 'simple',
                    'name' => 'side-pane',
                    'span' => 4,
                  ),
                ),
                2 => 
                array (
                  'layout' => 
                  array (
                    'components' => 
                    array (
                      0 => 
                      array (
                        'view' => 
                        array (
                          'name' => 'dnb-bal-results',
                          'label' => 'LBL_DNB_BAL_RSLT',
                        ),
                        'width' => 12,
                      ),
                    ),
                    'type' => 'simple',
                    'name' => 'dashboard-pane',
                    'span' => 4,
                  ),
                ),
                3 => 
                array (
                  'layout' => 
                  array (
                    'components' => 
                    array (
                    ),
                    'type' => 'simple',
                    'name' => 'preview-pane',
                    'span' => 8,
                  ),
                ),
              ),
              'type' => 'default',
              'name' => 'sidebar',
              'span' => 12,
            ),
          ),
        ),
        'type' => 'simple',
        'name' => 'base',
        'span' => 12,
      ),
    ),
    'drawer' => 
    array (
      'templates' => 
      array (
        'expand' => '
<div class="drawer-tab"><a href="javascript:void(0);" class="btn" rel="tooltip" title="{{str \'LBL_TOGGLE_DRAWER\'}}"><i class="icon-chevron-up"></i></a></div>
',
      ),
    ),
    'dupecheck' => 
    array (
      'meta' => 
      array (
        'components' => 
        array (
          0 => 
          array (
            'layout' => 
            array (
              'type' => 'filterpanel',
              'span' => 12,
              'components' => 
              array (
                0 => 
                array (
                  'layout' => 'dupecheck-filter',
                  'name' => 'filter',
                  'targetEl' => '.filter',
                  'position' => 'prepend',
                  'components' => 
                  array (
                    0 => 
                    array (
                      'view' => 'filter-quicksearch',
                    ),
                  ),
                ),
                1 => 
                array (
                  'view' => 'filter-rows',
                  'targetEl' => '.filter-options',
                ),
                2 => 
                array (
                  'view' => 'filter-actions',
                  'targetEl' => '.filter-options',
                ),
              ),
            ),
            'name' => 'filterpanel',
          ),
          1 => 
          array (
            'name' => 'dupecheck-list',
            'view' => 'dupecheck-list',
            'primary' => true,
          ),
          2 => 
          array (
            'view' => 'list-bottom',
          ),
        ),
        'type' => 'dupecheck',
        'span' => 12,
      ),
    ),
    'dupecheck-filter' => 
    array (
      'meta' => 
      array (
        'components' => 
        array (
          0 => 
          array (
            'view' => 'dupecheck-filter-dropdown',
          ),
          1 => 
          array (
            'view' => 'filter-quicksearch',
          ),
        ),
        'type' => 'dupecheck-filter',
        'span' => 12,
        'last_state' => 
        array (
          'id' => 'dupecheck-filter',
        ),
      ),
    ),
    'error' => 
    array (
      'meta' => 
      array (
        'type' => 'simple',
        'components' => 
        array (
          0 => 
          array (
            'view' => 'error',
          ),
        ),
      ),
    ),
    'filter' => 
    array (
      'meta' => 
      array (
        'components' => 
        array (
          0 => 
          array (
            'view' => 'filter-module-dropdown',
          ),
          1 => 
          array (
            'view' => 'filter-filter-dropdown',
          ),
          2 => 
          array (
            'view' => 'filter-quicksearch',
          ),
        ),
        'type' => 'filter',
        'span' => 12,
        'last_state' => 
        array (
          'id' => 'filter',
        ),
      ),
    ),
    'filterpanel' => 
    array (
      'templates' => 
      array (
        'filterpanel' => '
<div class="search-filter">
    <div class="control-group">
        <div class="filter controls controls-two btn-group-fit">
            <div class="toggle-actions actions">
                <div class="btn-group" data-toggle="buttons-radio">
                    {{#each toggles}}
                        <a type="button" class="btn {{#if disabled}}disabled{{/if}}" {{#if disabled}}disabled{{/if}} data-view="{{toggle}}" data-mode="view" rel="tooltip" title="{{str title}}" track="click:{{toggle}}"><i class="{{class}}"></i></a>
                    {{/each}}
                </div>
            </div>
        </div>
    </div>
    <div class="filter-options extend hide"></div>
</div>
<div class="main-content"></div>
',
      ),
    ),
    'find-duplicates' => 
    array (
      'meta' => 
      array (
        'components' => 
        array (
          0 => 
          array (
            'layout' => 
            array (
              'components' => 
              array (
                0 => 
                array (
                  'layout' => 
                  array (
                    'components' => 
                    array (
                      0 => 
                      array (
                        'view' => 'find-duplicates-headerpane',
                      ),
                      1 => 
                      array (
                        'layout' => 'dupecheck',
                      ),
                    ),
                    'type' => 'simple',
                    'name' => 'main-pane',
                    'span' => 8,
                  ),
                ),
                1 => 
                array (
                  'layout' => 
                  array (
                    'components' => 
                    array (
                      0 => 
                      array (
                        'layout' => 'sidebar',
                      ),
                    ),
                    'type' => 'simple',
                    'name' => 'side-pane',
                    'span' => 4,
                  ),
                ),
                2 => 
                array (
                  'layout' => 
                  array (
                    'components' => 
                    array (
                      0 => 
                      array (
                        'layout' => 'preview',
                      ),
                    ),
                    'type' => 'simple',
                    'name' => 'preview-pane',
                    'span' => 8,
                  ),
                ),
              ),
              'type' => 'default',
              'name' => 'sidebar',
              'span' => 12,
            ),
          ),
        ),
        'type' => 'find-duplicates',
        'name' => 'base',
        'span' => 12,
      ),
    ),
    'first-login-wizard' => 
    array (
      'meta' => 
      array (
        'type' => 'wizard',
        'buttons' => 
        array (
          0 => 
          array (
            'name' => 'previous_button',
            'type' => 'button',
            'label' => 'LBL_BACK',
            'css_class' => 'btn-link btn-invisible',
          ),
          1 => 
          array (
            'name' => 'next_button',
            'type' => 'button',
            'label' => 'LNK_LIST_NEXT',
            'primary' => true,
          ),
          2 => 
          array (
            'name' => 'start_sugar_button',
            'type' => 'button',
            'label' => 'LBL_WIZ_START_SUGAR',
            'primary' => true,
          ),
        ),
        'components' => 
        array (
          0 => 
          array (
            'view' => 'user-wizard-page',
          ),
          1 => 
          array (
            'view' => 'user-locale-wizard-page',
          ),
          2 => 
          array (
            'view' => 'setup-complete-wizard-page',
          ),
        ),
      ),
    ),
    'forgotpassword' => 
    array (
      'meta' => 
      array (
        'type' => 'simple',
        'components' => 
        array (
          0 => 
          array (
            'view' => 'forgotpassword',
          ),
        ),
      ),
    ),
    'help-dashboard' => 
    array (
      'meta' => 
      array (
        'name' => 'LBL_DEFAULT_HELP_DASHBOARD_TITLE',
        'type' => 'help-dashboard',
        'dashboard_type' => 'help-dashboard',
        'metadata' => 
        array (
          'components' => 
          array (
            0 => 
            array (
              'rows' => 
              array (
                0 => 
                array (
                  0 => 
                  array (
                    'view' => 
                    array (
                      'type' => 'help-dashlet',
                      'label' => 'LBL_DEFAULT_HELP_DASHLET_TITLE',
                    ),
                    'width' => 12,
                  ),
                  1 => 
                  array (
                    'view' => 
                    array (
                      'type' => 'learning-resources',
                      'label' => 'LBL_LEARNING_RESOURCES_NAME',
                    ),
                    'width' => 12,
                  ),
                ),
              ),
              'width' => 12,
            ),
          ),
        ),
      ),
    ),
    'history-summary' => 
    array (
      'meta' => 
      array (
        'components' => 
        array (
          0 => 
          array (
            'layout' => 
            array (
              'components' => 
              array (
                0 => 
                array (
                  'layout' => 
                  array (
                    'components' => 
                    array (
                      0 => 
                      array (
                        'view' => 'history-summary-headerpane',
                      ),
                      1 => 
                      array (
                        'view' => 'history-summary',
                      ),
                      2 => 
                      array (
                        'view' => 'history-summary-list-bottom',
                      ),
                    ),
                    'type' => 'simple',
                    'name' => 'main-pane',
                    'span' => 8,
                  ),
                ),
                1 => 
                array (
                  'layout' => 
                  array (
                    'components' => 
                    array (
                      0 => 
                      array (
                        'layout' => 'list-sidebar',
                      ),
                    ),
                    'type' => 'simple',
                    'name' => 'side-pane',
                    'span' => 4,
                  ),
                ),
                2 => 
                array (
                  'layout' => 
                  array (
                    'components' => 
                    array (
                    ),
                    'type' => 'simple',
                    'name' => 'dashboard-pane',
                    'span' => 4,
                  ),
                ),
                3 => 
                array (
                  'layout' => 
                  array (
                    'components' => 
                    array (
                      0 => 
                      array (
                        'layout' => 'history-summary-preview',
                      ),
                    ),
                    'type' => 'simple',
                    'name' => 'preview-pane',
                    'span' => 8,
                  ),
                ),
              ),
              'type' => 'default',
              'name' => 'sidebar',
              'span' => 12,
            ),
          ),
        ),
        'type' => 'simple',
        'name' => 'base',
        'span' => 12,
      ),
    ),
    'history-summary-preview' => 
    array (
      'meta' => 
      array (
        'components' => 
        array (
          0 => 
          array (
            'view' => 'history-summary-preview-header',
          ),
          1 => 
          array (
            'view' => 'history-summary-preview',
          ),
          2 => 
          array (
            'layout' => 'preview-activitystream',
            'context' => 
            array (
              'module' => 'Activities',
              'forceNew' => true,
            ),
          ),
        ),
        'type' => 'preview',
        'span' => 12,
      ),
    ),
    'list' => 
    array (
      'meta' => 
      array (
        'components' => 
        array (
          0 => 
          array (
            'view' => 'massupdate',
          ),
          1 => 
          array (
            'view' => 'massaddtolist',
          ),
          2 => 
          array (
            'view' => 'recordlist',
            'primary' => true,
          ),
          3 => 
          array (
            'view' => 'list-bottom',
          ),
        ),
        'type' => 'simple',
        'name' => 'list',
        'span' => 12,
      ),
    ),
    'list-sidebar' => 
    array (
      'meta' => 
      array (
        'components' => 
        array (
        ),
        'type' => 'simple',
        'span' => 12,
      ),
    ),
    'login' => 
    array (
      'meta' => 
      array (
        'type' => 'simple',
        'components' => 
        array (
          0 => 
          array (
            'view' => 'login',
          ),
        ),
      ),
    ),
    'logout' => 
    array (
      'meta' => 
      array (
        'type' => 'simple',
        'components' => 
        array (
          0 => 
          array (
            'view' => 'logout',
          ),
        ),
      ),
    ),
    'merge-duplicates' => 
    array (
      'meta' => 
      array (
        'components' => 
        array (
          0 => 
          array (
            'layout' => 
            array (
              'components' => 
              array (
                0 => 
                array (
                  'layout' => 
                  array (
                    'components' => 
                    array (
                      0 => 
                      array (
                        'view' => 'merge-duplicates-headerpane',
                      ),
                      1 => 
                      array (
                        'view' => 'merge-duplicates',
                      ),
                    ),
                    'type' => 'simple',
                    'name' => 'main-pane',
                    'span' => 8,
                  ),
                ),
                1 => 
                array (
                  'layout' => 
                  array (
                    'components' => 
                    array (
                      0 => 
                      array (
                        'layout' => 'sidebar',
                      ),
                    ),
                    'type' => 'simple',
                    'name' => 'side-pane',
                    'span' => 4,
                  ),
                ),
                2 => 
                array (
                  'layout' => 
                  array (
                    'components' => 
                    array (
                    ),
                    'type' => 'simple',
                    'name' => 'dashboard-pane',
                    'span' => 4,
                  ),
                ),
                3 => 
                array (
                  'layout' => 
                  array (
                    'components' => 
                    array (
                      0 => 
                      array (
                        'layout' => 'preview',
                      ),
                    ),
                    'type' => 'simple',
                    'name' => 'preview-pane',
                    'span' => 8,
                  ),
                ),
              ),
              'type' => 'default',
              'name' => 'sidebar',
              'span' => 12,
            ),
          ),
        ),
        'type' => 'merge-duplicates',
        'name' => 'base',
        'span' => 12,
      ),
    ),
    'module-list' => 
    array (
      'templates' => 
      array (
        'list' => '
<li class="dropdown" data-module="{{module}}"></li>
',
        'module-list' => '
<ul class="nav megamenu" role="navigation" data-container="module-list">
    <li class="dropdown hidden more" data-action="more-modules">
        <div class="btn-group">
            <button type="button" data-toggle="dropdown" class="btn btn-invisible dropdown-toggle" title="{{str \'LBL_LINK_MORE\'}}" track="click:navbar-more-modules" aria-label="{{str \'LBL_MORE_MODULES\'}}"><i class="icon-chevron-down"></i></button>
            <div class="dropdown-menu scroll" role="menu">
                <ul data-container="overflow"></ul>
            </div>
        </div>
    </li>
</ul>
',
      ),
      'meta' => 
      array (
        'components' => 
        array (
        ),
      ),
    ),
    'panel' => 
    array (
      'templates' => 
      array (
        'panel' => '
<ul class="nav results">
    <li class="subpanel clearfix"></li>
</ul>
',
      ),
    ),
    'password-expired' => 
    array (
      'meta' => 
      array (
        'type' => 'simple',
        'components' => 
        array (
          0 => 
          array (
            'view' => 'password-expired',
          ),
        ),
      ),
    ),
    'preview' => 
    array (
      'meta' => 
      array (
        'components' => 
        array (
          0 => 
          array (
            'view' => 'preview-header',
          ),
          1 => 
          array (
            'view' => 'preview',
          ),
          2 => 
          array (
            'layout' => 'preview-activitystream',
            'context' => 
            array (
              'module' => 'Activities',
              'forceNew' => true,
            ),
          ),
        ),
        'type' => 'preview',
        'span' => 12,
      ),
    ),
    'preview-activitystream' => 
    array (
      'templates' => 
      array (
        'preview-activitystream' => '
<ul class="activitystream-list results"></ul>
',
      ),
      'meta' => 
      array (
        'components' => 
        array (
          0 => 
          array (
            'view' => 'activitystream-bottom',
          ),
        ),
        'type' => 'preview-activitystream',
        'span' => 12,
      ),
    ),
    'record' => 
    array (
      'meta' => 
      array (
        'components' => 
        array (
          0 => 
          array (
            'layout' => 
            array (
              'components' => 
              array (
                0 => 
                array (
                  'layout' => 
                  array (
                    'components' => 
                    array (
                      0 => 
                      array (
                        'view' => 'record',
                        'primary' => true,
                      ),
                      1 => 
                      array (
                        'layout' => 'extra-info',
                      ),
                      2 => 
                      array (
                        'layout' => 
                        array (
                          'name' => 'filterpanel',
                          'span' => 12,
                          'last_state' => 
                          array (
                            'id' => 'record-filterpanel',
                            'defaults' => 
                            array (
                              'toggle-view' => 'subpanels',
                            ),
                          ),
                          'availableToggles' => 
                          array (
                            0 => 
                            array (
                              'name' => 'subpanels',
                              'icon' => 'icon-table',
                              'label' => 'LBL_DATA_VIEW',
                            ),
                            1 => 
                            array (
                              'name' => 'list',
                              'icon' => 'icon-table',
                              'label' => 'LBL_LISTVIEW',
                            ),
                            2 => 
                            array (
                              'name' => 'activitystream',
                              'icon' => 'icon-time',
                              'label' => 'LBL_ACTIVITY_STREAM',
                            ),
                          ),
                          'components' => 
                          array (
                            0 => 
                            array (
                              'layout' => 'filter',
                              'targetEl' => '.filter',
                              'position' => 'prepend',
                            ),
                            1 => 
                            array (
                              'view' => 'filter-rows',
                              'targetEl' => '.filter-options',
                            ),
                            2 => 
                            array (
                              'view' => 'filter-actions',
                              'targetEl' => '.filter-options',
                            ),
                            3 => 
                            array (
                              'layout' => 'activitystream',
                              'context' => 
                              array (
                                'module' => 'Activities',
                              ),
                            ),
                            4 => 
                            array (
                              'layout' => 'subpanels',
                            ),
                          ),
                        ),
                      ),
                    ),
                    'type' => 'simple',
                    'name' => 'main-pane',
                    'span' => 8,
                  ),
                ),
                1 => 
                array (
                  'layout' => 
                  array (
                    'components' => 
                    array (
                      0 => 
                      array (
                        'layout' => 'sidebar',
                      ),
                    ),
                    'type' => 'simple',
                    'name' => 'side-pane',
                    'span' => 4,
                  ),
                ),
                2 => 
                array (
                  'layout' => 
                  array (
                    'components' => 
                    array (
                      0 => 
                      array (
                        'layout' => 
                        array (
                          'type' => 'dashboard',
                          'last_state' => 
                          array (
                            'id' => 'last-visit',
                          ),
                        ),
                        'context' => 
                        array (
                          'forceNew' => true,
                          'module' => 'Home',
                        ),
                      ),
                    ),
                    'type' => 'simple',
                    'name' => 'dashboard-pane',
                    'span' => 4,
                  ),
                ),
                3 => 
                array (
                  'layout' => 
                  array (
                    'components' => 
                    array (
                      0 => 
                      array (
                        'layout' => 'preview',
                      ),
                    ),
                    'type' => 'simple',
                    'name' => 'preview-pane',
                    'span' => 8,
                  ),
                ),
              ),
              'type' => 'default',
              'name' => 'sidebar',
              'span' => 12,
            ),
          ),
        ),
        'type' => 'record',
        'name' => 'base',
        'span' => 12,
      ),
    ),
    'records' => 
    array (
      'meta' => 
      array (
        'components' => 
        array (
          0 => 
          array (
            'layout' => 
            array (
              'components' => 
              array (
                0 => 
                array (
                  'layout' => 
                  array (
                    'components' => 
                    array (
                      0 => 
                      array (
                        'view' => 'list-headerpane',
                      ),
                      1 => 
                      array (
                        'layout' => 
                        array (
                          'type' => 'filterpanel',
                          'span' => 12,
                          'last_state' => 
                          array (
                            'id' => 'list-filterpanel',
                            'defaults' => 
                            array (
                              'toggle-view' => 'list',
                            ),
                          ),
                          'availableToggles' => 
                          array (
                            0 => 
                            array (
                              'name' => 'list',
                              'icon' => 'icon-table',
                              'label' => 'LBL_LISTVIEW',
                            ),
                            1 => 
                            array (
                              'name' => 'activitystream',
                              'icon' => 'icon-time',
                              'label' => 'LBL_ACTIVITY_STREAM',
                            ),
                          ),
                          'components' => 
                          array (
                            0 => 
                            array (
                              'layout' => 'filter',
                              'targetEl' => '.filter',
                              'position' => 'prepend',
                            ),
                            1 => 
                            array (
                              'view' => 'filter-rows',
                              'targetEl' => '.filter-options',
                            ),
                            2 => 
                            array (
                              'view' => 'filter-actions',
                              'targetEl' => '.filter-options',
                            ),
                            3 => 
                            array (
                              'layout' => 'activitystream',
                              'context' => 
                              array (
                                'module' => 'Activities',
                              ),
                            ),
                            4 => 
                            array (
                              'layout' => 'list',
                            ),
                          ),
                        ),
                      ),
                    ),
                    'type' => 'simple',
                    'name' => 'main-pane',
                    'span' => 8,
                  ),
                ),
                1 => 
                array (
                  'layout' => 
                  array (
                    'components' => 
                    array (
                      0 => 
                      array (
                        'layout' => 'list-sidebar',
                      ),
                    ),
                    'type' => 'simple',
                    'name' => 'side-pane',
                    'span' => 4,
                  ),
                ),
                2 => 
                array (
                  'layout' => 
                  array (
                    'components' => 
                    array (
                      0 => 
                      array (
                        'layout' => 
                        array (
                          'type' => 'dashboard',
                          'last_state' => 
                          array (
                            'id' => 'last-visit',
                          ),
                        ),
                        'context' => 
                        array (
                          'forceNew' => true,
                          'module' => 'Home',
                        ),
                      ),
                    ),
                    'type' => 'simple',
                    'name' => 'dashboard-pane',
                    'span' => 4,
                  ),
                ),
                3 => 
                array (
                  'layout' => 
                  array (
                    'components' => 
                    array (
                      0 => 
                      array (
                        'layout' => 'preview',
                      ),
                    ),
                    'type' => 'simple',
                    'name' => 'preview-pane',
                    'span' => 8,
                  ),
                ),
              ),
              'type' => 'default',
              'name' => 'sidebar',
              'span' => 12,
            ),
          ),
        ),
        'type' => 'records',
        'name' => 'base',
        'span' => 12,
      ),
    ),
    'resolve-conflicts' => 
    array (
      'meta' => 
      array (
        'type' => 'resolve-conflicts',
        'name' => 'base',
        'span' => 12,
        'components' => 
        array (
          0 => 
          array (
            'layout' => 
            array (
              'components' => 
              array (
                0 => 
                array (
                  'layout' => 
                  array (
                    'components' => 
                    array (
                      0 => 
                      array (
                        'view' => 'resolve-conflicts-headerpane',
                      ),
                      1 => 
                      array (
                        'view' => 'resolve-conflicts-list',
                      ),
                    ),
                    'type' => 'simple',
                    'name' => 'main-pane',
                    'span' => 8,
                  ),
                ),
                1 => 
                array (
                  'layout' => 
                  array (
                    'components' => 
                    array (
                      0 => 
                      array (
                        'layout' => 'preview',
                      ),
                    ),
                    'type' => 'simple',
                    'name' => 'preview-pane',
                    'span' => 4,
                  ),
                ),
              ),
              'type' => 'default',
              'name' => 'sidebar',
              'span' => 12,
            ),
          ),
        ),
      ),
    ),
    'selection-list' => 
    array (
      'meta' => 
      array (
        'components' => 
        array (
          0 => 
          array (
            'layout' => 
            array (
              'components' => 
              array (
                0 => 
                array (
                  'layout' => 
                  array (
                    'components' => 
                    array (
                      0 => 
                      array (
                        'view' => 'selection-headerpane',
                      ),
                      1 => 
                      array (
                        'layout' => 
                        array (
                          'type' => 'filterpanel',
                          'span' => 12,
                          'availableToggles' => 
                          array (
                          ),
                          'filter_options' => 
                          array (
                            'stickiness' => false,
                          ),
                          'components' => 
                          array (
                            0 => 
                            array (
                              'layout' => 
                              array (
                                'meta' => 
                                array (
                                  'components' => 
                                  array (
                                    0 => 
                                    array (
                                      'view' => 'filter-filter-dropdown',
                                    ),
                                    1 => 
                                    array (
                                      'view' => 'filter-quicksearch',
                                    ),
                                  ),
                                  'last_state' => 
                                  array (
                                    'id' => 'filter',
                                  ),
                                  'layoutType' => 'records',
                                ),
                                'span' => 12,
                                'type' => 'filter',
                              ),
                              'targetEl' => '.filter',
                              'position' => 'prepend',
                            ),
                            1 => 
                            array (
                              'view' => 'filter-rows',
                              'targetEl' => '.filter-options',
                            ),
                            2 => 
                            array (
                              'view' => 'filter-actions',
                              'targetEl' => '.filter-options',
                            ),
                            3 => 
                            array (
                              'view' => 'selection-list',
                            ),
                            4 => 
                            array (
                              'view' => 'list-bottom',
                            ),
                          ),
                        ),
                      ),
                    ),
                    'type' => 'simple',
                    'name' => 'main-pane',
                    'span' => 8,
                  ),
                ),
                1 => 
                array (
                  'layout' => 
                  array (
                    'components' => 
                    array (
                      0 => 
                      array (
                        'layout' => 'selection-sidebar',
                      ),
                    ),
                    'type' => 'simple',
                    'name' => 'side-pane',
                    'span' => 4,
                  ),
                ),
                2 => 
                array (
                  'layout' => 
                  array (
                    'components' => 
                    array (
                    ),
                    'type' => 'simple',
                    'name' => 'dashboard-pane',
                    'span' => 4,
                  ),
                ),
                3 => 
                array (
                  'layout' => 
                  array (
                    'components' => 
                    array (
                      0 => 
                      array (
                        'layout' => 'preview',
                      ),
                    ),
                    'type' => 'simple',
                    'name' => 'preview-pane',
                    'span' => 8,
                  ),
                ),
              ),
              'type' => 'default',
              'name' => 'sidebar',
              'span' => 12,
            ),
          ),
        ),
        'type' => 'selection-list',
        'name' => 'base',
        'span' => 12,
      ),
    ),
    'shortcuts' => 
    array (
      'templates' => 
      array (
        'shortcuts-help-table' => '
{{#each this}}
    <tr><td>{{this.keys}}</td><td>{{this.help}}</td></tr>
{{/each}}
',
        'shortcuts' => '
<div id="styleguide" class="main-pane">
    <div class="headerpane">
        <h1>
            <div class="record-cell">
                <span class="module-title">{{str \'LBL_KEYBOARD_SHORTCUTS_HELP_TITLE\'}}</span>
            </div>
            <div class="btn-toolbar pull-right">
                <a class="btn btn-primary" href="javascript:void(0);" name="cancel_button">{{str \'LBL_CLOSE_BUTTON_LABEL\'}}</a>
            </div>
        </h1>
    </div>
    <div class="container-fluid">
        <div class="row-fluid">
            <div class="span4 columns">
                {{str \'LBL_SHORTCUT_KEYS_HELP_ABOUT\'}}
            </div>
            <div class="span4 columns">
                <table class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th colspan="2">{{str \'LBL_CONTEXTUAL_SHORTCUTS\'}}</th>
                        </tr>
                        <tr>
                            <th>{{str \'LBL_SHORTCUT_KEY_KEY\'}}</th>
                            <th>{{str \'LBL_SHORTCUT_FUNCTION\'}}</th>
                        </tr>
                    </thead>
                    <tbody data-display="contextual"></tbody>
                </table>
            </div>
            <div class="span4 columns">
                <table class="table table-striped table-bordered">
                    <thead>
                    <tr>
                        <th colspan="2">{{str \'LBL_GLOBAL_SHORTCUTS\'}}</th>
                    </tr>
                    <tr>
                        <th>{{str \'LBL_SHORTCUT_KEY_KEY\'}}</th>
                        <th>{{str \'LBL_SHORTCUT_FUNCTION\'}}</th>
                    </tr>
                    </thead>
                    <tbody data-display="global"></tbody>
                </table>
            </div>
        </div>
    </div>
</div>
',
      ),
      'meta' => 
      array (
        'type' => 'shortcuts',
        'help' => 
        array (
          'Global:Help' => 'LBL_SHORTCUT_HELP',
          'Global:Create' => 'LBL_SHORTCUT_QUICK_CREATE',
          'Global:Search' => 'LBL_SHORTCUT_SEARCH',
          'Sidebar:Toggle' => 'LBL_SHORTCUT_SIDEBAR_TOGGLE',
          'List:Headerpane:Create' => 'LBL_SHORTCUT_CREATE_RECORD',
          'List:Select:Down' => 'LBL_SHORTCUT_NAVIGATE_DOWN',
          'List:Select:Up' => 'LBL_SHORTCUT_NAVIGATE_UP',
          'List:Scroll:Left' => 'LBL_SHORTCUT_SCROLL_LEFT',
          'List:Scroll:Right' => 'LBL_SHORTCUT_SCROLL_RIGHT',
          'List:Select:Open' => 'LBL_SHORTCUT_OPEN',
          'List:Inline:Edit' => 'LBL_SHORTCUT_EDIT_SELECTED',
          'List:Delete' => 'LBL_SHORTCUT_RECORD_DELETE',
          'List:Inline:Cancel' => 'LBL_SHORTCUT_CANCEL_INLINE_EDIT',
          'List:Inline:Save' => 'LBL_SHORTCUT_RECORD_SAVE',
          'List:Favorite' => 'LBL_SHORTCUT_FAVORITE_RECORD',
          'List:Follow' => 'LBL_SHORTCUT_FOLLOW_RECORD',
          'List:Preview' => 'LBL_SHORTCUT_PREVIEW_SELECTED',
          'List:Select' => 'LBL_SHORTCUT_MARK_SELECTED',
          'SelectAll:Checkbox' => 'LBL_SHORTCUT_SELECT_ALL',
          'SelectAll:Dropdown' => 'LBL_SHORTCUT_OPEN_MASS_ACTION',
          'Filter:Search' => 'LBL_SHORTCUT_FILTER_SEARCH',
          'Filter:Create' => 'LBL_SHORTCUT_FILTER_CREATE',
          'Filter:Edit' => 'LBL_SHORTCUT_FILTER_EDIT',
          'Filter:Show' => 'LBL_SHORTCUT_FILTER_SHOW',
          'Record:Edit' => 'LBL_SHORTCUT_RECORD_EDIT',
          'Record:Delete' => 'LBL_SHORTCUT_RECORD_DELETE',
          'Record:Save' => 'LBL_SHORTCUT_RECORD_SAVE',
          'Record:Cancel' => 'LBL_SHORTCUT_RECORD_CANCEL',
          'Record:Previous' => 'LBL_SHORTCUT_RECORD_PREVIOUS',
          'Record:Next' => 'LBL_SHORTCUT_RECORD_NEXT',
          'Record:Favorite' => 'LBL_SHORTCUT_FAVORITE_RECORD',
          'Record:Follow' => 'LBL_SHORTCUT_FOLLOW_RECORD',
          'Record:Copy' => 'LBL_SHORTCUT_COPY_RECORD',
          'Record:Action:More' => 'LBL_SHORTCUT_OPEN_MORE_ACTION',
          'AuditHeaderPanel:Close' => 'LBL_SHORTCUT_CLOSE_DRAWER',
          'Create:Save' => 'LBL_SHORTCUT_RECORD_SAVE',
          'Create:Cancel' => 'LBL_SHORTCUT_CLOSE_DRAWER',
          'Dropdown:More' => 'LBL_SHORTCUT_OPEN_MORE_ACTION',
          'Dashlet:Config:Cancel' => 'LBL_SHORTCUT_CLOSE_DRAWER',
          'Dashlet:Config:Save' => 'LBL_SHORTCUT_RECORD_SAVE',
          'Dashlet:Select:Cancel' => 'LBL_SHORTCUT_CLOSE_DRAWER',
          'Filter:Add' => 'LBL_SHORTCUT_FILTER_ADD',
          'Filter:Remove' => 'LBL_SHORTCUT_FILTER_REMOVE',
          'Filter:Close' => 'LBL_SHORTCUT_FILTER_CLOSE',
          'Filter:Save' => 'LBL_SHORTCUT_FILTER_SAVE',
          'Filter:Delete' => 'LBL_SHORTCUT_FILTER_DELETE',
          'Filter:Reset' => 'LBL_SHORTCUT_FILTER_RESET',
          'Headerpane:Cancel' => 'LBL_SHORTCUT_CLOSE_DRAWER',
          'Headerpane:Save' => 'LBL_SHORTCUT_RECORD_SAVE',
          'Compose:Action:More' => 'LBL_SHORTCUT_OPEN_MORE_ACTION',
          'MassUpdate:Add' => 'LBL_SHORTCUT_MASS_UPDATE_ADD',
          'MassUpdate:Remove' => 'LBL_SHORTCUT_MASS_UPDATE_REMOVE',
          'MassUpdate:Cancel' => 'LBL_SHORTCUT_MASS_UPDATE_CANCEL',
          'MassUpdate:Update' => 'LBL_SHORTCUT_MASS_UPDATE_SAVE',
        ),
      ),
    ),
    'subpanel' => 
    array (
      'meta' => 
      array (
        'components' => 
        array (
          0 => 
          array (
            'view' => 'panel-top',
          ),
          1 => 
          array (
            'view' => 'subpanel-list',
          ),
          2 => 
          array (
            'view' => 'list-bottom',
          ),
        ),
        'span' => 12,
        'last_state' => 
        array (
          'id' => 'subpanel',
        ),
      ),
    ),
    'subpanel-with-massupdate' => 
    array (
      'meta' => 
      array (
        'components' => 
        array (
          0 => 
          array (
            'view' => 'panel-top',
          ),
          1 => 
          array (
            'view' => 'massupdate',
          ),
          2 => 
          array (
            'view' => 'subpanel-list',
          ),
          3 => 
          array (
            'view' => 'list-bottom',
          ),
        ),
        'span' => 12,
        'last_state' => 
        array (
          'id' => 'subpanel',
        ),
      ),
    ),
    'subpanels' => 
    array (
      'meta' => 
      array (
        'components' => 
        array (
        ),
        'type' => 'subpanels',
        'span' => 12,
      ),
    ),
    'tabbed-layout' => 
    array (
      'templates' => 
      array (
        'tabbed-layout' => '
<div class="tabbable">
    <ul class="nav nav-tabs related-tabs{{#if options.meta.notabs}} hide{{/if}}">
    </ul>
    <div class="tab-content">
    </div>
</div>',
      ),
    ),
    'togglepanel' => 
    array (
      'templates' => 
      array (
        'togglepanel' => '
<div class="search-filter">
    <div class="control-group">
        <div class="filter controls controls-two btn-group-fit">
            <div class="toggle-actions actions">
                <div class="btn-group" data-toggle="buttons-radio">
                    {{#each toggles}}
                        <a type="button" class="btn {{#eq ../options.meta.default toggle}}active{{/eq}}" data-view="{{toggle}}" data-mode="view" rel="tooltip" title="{{str title}}"><i class="{{class}}"></i></a>
                    {{/each}}
                </div>
            </div>
        </div>
    </div>
</div>
<div class="main-content"></div>
',
      ),
    ),
    'vcard-import' => 
    array (
      'meta' => 
      array (
        'components' => 
        array (
          0 => 
          array (
            'layout' => 
            array (
              'components' => 
              array (
                0 => 
                array (
                  'layout' => 
                  array (
                    'components' => 
                    array (
                      0 => 
                      array (
                        'view' => 'vcard-import-headerpane',
                      ),
                      1 => 
                      array (
                        'view' => 'vcard-import',
                      ),
                    ),
                    'type' => 'simple',
                    'name' => 'main-pane',
                    'span' => 8,
                  ),
                ),
                1 => 
                array (
                  'layout' => 
                  array (
                    'components' => 
                    array (
                      0 => 
                      array (
                        'layout' => 'sidebar',
                      ),
                    ),
                    'type' => 'simple',
                    'name' => 'side-pane',
                    'span' => 4,
                  ),
                ),
                2 => 
                array (
                  'layout' => 
                  array (
                    'components' => 
                    array (
                    ),
                    'type' => 'simple',
                    'name' => 'dashboard-pane',
                    'span' => 4,
                  ),
                ),
                3 => 
                array (
                  'layout' => 
                  array (
                    'components' => 
                    array (
                      0 => 
                      array (
                        'layout' => 'preview',
                      ),
                    ),
                    'type' => 'simple',
                    'name' => 'preview-pane',
                    'span' => 8,
                  ),
                ),
              ),
              'type' => 'default',
              'name' => 'sidebar',
              'span' => 12,
            ),
          ),
        ),
        'type' => 'simple',
        'name' => 'base',
        'span' => 12,
      ),
    ),
    '_hash' => 'c59aeb49896329edcf82a27dc41b3531',
  ),
  'labels' => 
  array (
    'en_us' => 'cache/api/metadata/lang_en_us_base_public.json?v=1528092400',
    'bg_BG' => 'cache/api/metadata/lang_bg_BG_base_public.json?v=1528092400',
    'cs_CZ' => 'cache/api/metadata/lang_cs_CZ_base_public.json?v=1528092400',
    'da_DK' => 'cache/api/metadata/lang_da_DK_base_public.json?v=1528092400',
    'de_DE' => 'cache/api/metadata/lang_de_DE_base_public.json?v=1528092400',
    'es_ES' => 'cache/api/metadata/lang_es_ES_base_public.json?v=1528092400',
    'et_EE' => 'cache/api/metadata/lang_et_EE_base_public.json?v=1528092400',
    'fr_FR' => 'cache/api/metadata/lang_fr_FR_base_public.json?v=1528092400',
    'he_IL' => 'cache/api/metadata/lang_he_IL_base_public.json?v=1528092400',
    'hu_HU' => 'cache/api/metadata/lang_hu_HU_base_public.json?v=1528092400',
    'it_it' => 'cache/api/metadata/lang_it_it_base_public.json?v=1528092400',
    'lt_LT' => 'cache/api/metadata/lang_lt_LT_base_public.json?v=1528092400',
    'ja_JP' => 'cache/api/metadata/lang_ja_JP_base_public.json?v=1528092400',
    'nb_NO' => 'cache/api/metadata/lang_nb_NO_base_public.json?v=1528092400',
    'nl_NL' => 'cache/api/metadata/lang_nl_NL_base_public.json?v=1528092400',
    'pl_PL' => 'cache/api/metadata/lang_pl_PL_base_public.json?v=1528092400',
    'pt_PT' => 'cache/api/metadata/lang_pt_PT_base_public.json?v=1528092400',
    'ro_RO' => 'cache/api/metadata/lang_ro_RO_base_public.json?v=1528092400',
    'ru_RU' => 'cache/api/metadata/lang_ru_RU_base_public.json?v=1528092400',
    'sv_SE' => 'cache/api/metadata/lang_sv_SE_base_public.json?v=1528092400',
    'tr_TR' => 'cache/api/metadata/lang_tr_TR_base_public.json?v=1528092400',
    'zh_CN' => 'cache/api/metadata/lang_zh_CN_base_public.json?v=1528092400',
    'pt_BR' => 'cache/api/metadata/lang_pt_BR_base_public.json?v=1528092400',
    'ca_ES' => 'cache/api/metadata/lang_ca_ES_base_public.json?v=1528092400',
    'en_UK' => 'cache/api/metadata/lang_en_UK_base_public.json?v=1528092400',
    'sr_RS' => 'cache/api/metadata/lang_sr_RS_base_public.json?v=1528092400',
    'lv_LV' => 'cache/api/metadata/lang_lv_LV_base_public.json?v=1528092400',
    'el_EL' => 'cache/api/metadata/lang_el_EL_base_public.json?v=1528092400',
    'ko_KR' => 'cache/api/metadata/lang_ko_KR_base_public.json?v=1528092400',
    'sk_SK' => 'cache/api/metadata/lang_sk_SK_base_public.json?v=1528092400',
    'sq_AL' => 'cache/api/metadata/lang_sq_AL_base_public.json?v=1528092400',
    'es_LA' => 'cache/api/metadata/lang_es_LA_base_public.json?v=1528092400',
    'fi_FI' => 'cache/api/metadata/lang_fi_FI_base_public.json?v=1528092400',
    'default' => 'en_us',
  ),
  'ordered_labels' => 
  array (
    'en_us' => 'cache/api/metadata/lang_en_us_base_public_ordered.json?v=1528092400',
    'bg_BG' => 'cache/api/metadata/lang_bg_BG_base_public_ordered.json?v=1528092400',
    'cs_CZ' => 'cache/api/metadata/lang_cs_CZ_base_public_ordered.json?v=1528092400',
    'da_DK' => 'cache/api/metadata/lang_da_DK_base_public_ordered.json?v=1528092400',
    'de_DE' => 'cache/api/metadata/lang_de_DE_base_public_ordered.json?v=1528092400',
    'es_ES' => 'cache/api/metadata/lang_es_ES_base_public_ordered.json?v=1528092400',
    'et_EE' => 'cache/api/metadata/lang_et_EE_base_public_ordered.json?v=1528092400',
    'fr_FR' => 'cache/api/metadata/lang_fr_FR_base_public_ordered.json?v=1528092400',
    'he_IL' => 'cache/api/metadata/lang_he_IL_base_public_ordered.json?v=1528092400',
    'hu_HU' => 'cache/api/metadata/lang_hu_HU_base_public_ordered.json?v=1528092400',
    'it_it' => 'cache/api/metadata/lang_it_it_base_public_ordered.json?v=1528092400',
    'lt_LT' => 'cache/api/metadata/lang_lt_LT_base_public_ordered.json?v=1528092400',
    'ja_JP' => 'cache/api/metadata/lang_ja_JP_base_public_ordered.json?v=1528092400',
    'nb_NO' => 'cache/api/metadata/lang_nb_NO_base_public_ordered.json?v=1528092400',
    'nl_NL' => 'cache/api/metadata/lang_nl_NL_base_public_ordered.json?v=1528092400',
    'pl_PL' => 'cache/api/metadata/lang_pl_PL_base_public_ordered.json?v=1528092400',
    'pt_PT' => 'cache/api/metadata/lang_pt_PT_base_public_ordered.json?v=1528092400',
    'ro_RO' => 'cache/api/metadata/lang_ro_RO_base_public_ordered.json?v=1528092400',
    'ru_RU' => 'cache/api/metadata/lang_ru_RU_base_public_ordered.json?v=1528092400',
    'sv_SE' => 'cache/api/metadata/lang_sv_SE_base_public_ordered.json?v=1528092400',
    'tr_TR' => 'cache/api/metadata/lang_tr_TR_base_public_ordered.json?v=1528092400',
    'zh_CN' => 'cache/api/metadata/lang_zh_CN_base_public_ordered.json?v=1528092400',
    'pt_BR' => 'cache/api/metadata/lang_pt_BR_base_public_ordered.json?v=1528092400',
    'ca_ES' => 'cache/api/metadata/lang_ca_ES_base_public_ordered.json?v=1528092400',
    'en_UK' => 'cache/api/metadata/lang_en_UK_base_public_ordered.json?v=1528092400',
    'sr_RS' => 'cache/api/metadata/lang_sr_RS_base_public_ordered.json?v=1528092400',
    'lv_LV' => 'cache/api/metadata/lang_lv_LV_base_public_ordered.json?v=1528092400',
    'el_EL' => 'cache/api/metadata/lang_el_EL_base_public_ordered.json?v=1528092400',
    'ko_KR' => 'cache/api/metadata/lang_ko_KR_base_public_ordered.json?v=1528092400',
    'sk_SK' => 'cache/api/metadata/lang_sk_SK_base_public_ordered.json?v=1528092400',
    'sq_AL' => 'cache/api/metadata/lang_sq_AL_base_public_ordered.json?v=1528092400',
    'es_LA' => 'cache/api/metadata/lang_es_LA_base_public_ordered.json?v=1528092400',
    'fi_FI' => 'cache/api/metadata/lang_fi_FI_base_public_ordered.json?v=1528092400',
    'default' => 'en_us',
  ),
  'config' => 
  array (
    'maxRecordFetchSize' => 1000,
    'maxRecordLinkFetchSize' => 5000,
    'massActions' => 
    array (
      'massUpdateChunkSize' => 20,
      'massDeleteChunkSize' => 20,
      'massLinkChunkSize' => 20,
    ),
    'mergeDuplicates' => 
    array (
      'mergeRelateFetchConcurrency' => 2,
      'mergeRelateFetchTimeout' => 90000,
      'mergeRelateFetchLimit' => 20,
      'mergeRelateUpdateConcurrency' => 4,
      'mergeRelateUpdateTimeout' => 90000,
      'mergeRelateMaxAttempt' => 3,
    ),
    'defaultCurrencySignificantDigits' => 2,
    'enableLegacyDashboards' => true,
    'logger' => 
    array (
      'level' => 'fatal',
    ),
    'maxQueryResult' => '50',
    'maxSubpanelResult' => '100',
    'defaultDecimalSeparator' => '.',
    'defaultNumberGroupingSeparator' => ',',
    'honeypot_on' => true,
    'forgotpasswordON' => true,
    'analytics' => 
    array (
      'enabled' => false,
    ),
    'inboundEmailCaseSubjectMacro' => '[CASE:%1]',
  ),
  'jssource' => 'cache/javascript/base/components_c5dc9083053ee2679934f739aba9acbb.js',
  'logo_url' => 'custom/themes/default/images/company_logo.png?v=x0xCeKu0L06wMYA77L4TuQ',
  '_override_values' => 
  array (
    1 => 'fields',
    6 => 'config',
  ),
  '_hash' => '6fc5c56cd0aeb8357e7781c0dec73743',
);