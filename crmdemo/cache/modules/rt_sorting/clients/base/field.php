<?php
$clientCache['rt_sorting']['base']['field'] = array (
  'customClient' => 
  array (
    'controller' => 
    array (
      'base' => '/**
 * Created by ahsan.latif on 6/30/16.
 */
({
    /**
     * Called when initializing the field
     * @param options
     */
    extendsFrom: \'NameField\',
    _render: function () {

        this._super(\'_render\');
        //console.log("test");
    },

})',
    ),
  ),
  'client' => 
  array (
    'templates' => 
    array (
      'list' => '
<div class="ellipsis_inline_1"  data-placement="bottom" title="{{#unless value}}{{#if def.placeholder}}{{str def.placeholder this.model.module}}{{/if}}{{/unless}}{{value}}" >
    {{#if def.link}}<span id = "{{this.model.id}}"><a onclick="openQuestionMarks()")>{{value}}</a></span>{{else}}{{value}}{{/if}}
    </div>',
    ),
  ),
  'question_marked' => 
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
<button type="button" id="yes" name="yes">Yes</button>
<button type="button" id="no" name="no">No</button>',
      'list' => '
<div class="ellipsis_inline" data-placement="bottom" title="{{value.long}}">{{value.long}}</div>
',
    ),
  ),
  'customQuestion_marked' => 
  array (
    'controller' => 
    array (
      'base' => '({
    /**
     * Called when initializing the field
     * @param options
     */
    extendsFrom: \'TextareaField\', 
})',
    ),
  ),
  'screening' => 
  array (
    'templates' => 
    array (
      'edit' => '
<input type="hidden" class="select2" name="{{name}}"{{#if def.tabindex}} tabindex="{{def.tabindex}}"{{/if}}>
{{#unless hideHelp}}{{#if def.help}}<p class="help-block">{{str def.help module}}</p>{{/if}}{{/unless}}
<button type="button" id="add_client" name="add_client">Add</button>
<button type="button" id="question_mark" name="question_mark">?</button>',
    ),
  ),
  'customScreening' => 
  array (
    'controller' => 
    array (
      'base' => '/**
 * Created by ahsan.latif on 6/30/16.
 */
({
    /**
     * Called when initializing the field
     * @param options
     */
    extendsFrom: \'EnumField\',
    _render: function () {
        this.setPotentialClientList();
        this._super(\'_render\');

    },
    setPotentialClientList: function(){
        var self = this;
        if (!this.items || _.isEmpty(this.items)) {
            var mur_client_n_list = app.data.createBeanCollection(\'mur_client_n_list\');
            mur_client_n_list.fetch({
                fields: [\'id\', \'name\'],
                filter: [{\'active_on_portal\': \'1\'}],
                limit: 1000,
                success: function(){
                    var data = {};
                    _.each(mur_client_n_list.models, function(model){
                            var value = model.get(\'name\');
                            data[value] = value;
                    });
                    self.items = data;
                }
            });
        }
    },
    /**
     * Called when formatting the value for display
     * @param value
     */
    format: function (value) {
        return this._super(\'format\', [value]);
    },
    /**
     * Called when unformatting the value for storage
     * @param value
     */
    unformat: function (value) {
        return this._super(\'unformat\', [value]);
    }
})
',
    ),
  ),
  '_hash' => '1740542c206559ab476fff9a261afecd',
);

