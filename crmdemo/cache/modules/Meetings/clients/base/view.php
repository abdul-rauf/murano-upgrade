<?php
$clientCache['Meetings']['base']['view'] = array (
  'dupecheck-list' => 
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
              'label' => 'LBL_LIST_SUBJECT',
              'link' => true,
              'default' => true,
              'enabled' => true,
            ),
            1 => 
            array (
              'name' => 'contact_name',
              'label' => 'LBL_LIST_CONTACT',
              'link' => true,
              'id' => 'CONTACT_ID',
              'default' => true,
              'enabled' => true,
            ),
            2 => 
            array (
              'name' => 'parent_name',
              'label' => 'LBL_LIST_RELATED_TO',
              'id' => 'PARENT_ID',
              'link' => true,
              'default' => true,
              'enabled' => true,
              'sortable' => false,
            ),
            3 => 
            array (
              'name' => 'date_start',
              'label' => 'LBL_LIST_DATE',
              'link' => false,
              'default' => true,
              'enabled' => true,
            ),
            4 => 
            array (
              'name' => 'team_name',
              'label' => 'LBL_LIST_TEAM',
              'default' => false,
              'enabled' => true,
            ),
            5 => 
            array (
              'name' => 'assigned_user_name',
              'label' => 'LBL_LIST_ASSIGNED_TO_NAME',
              'id' => 'ASSIGNED_USER_ID',
              'default' => false,
              'enabled' => true,
            ),
            6 => 
            array (
              'name' => 'direction',
              'type' => 'enum',
              'label' => 'LBL_LIST_DIRECTION',
              'default' => false,
              'enabled' => true,
            ),
            7 => 
            array (
              'name' => 'status',
              'label' => 'LBL_LIST_STATUS',
              'link' => false,
              'default' => false,
              'enabled' => true,
            ),
            8 => 
            array (
              'name' => 'date_entered',
              'width' => '10%',
              'label' => 'LBL_DATE_ENTERED',
              'default' => false,
              'enabled' => true,
              'readonly' => true,
            ),
          ),
        ),
      ),
      'dependencies' => 
      array (
        0 => 
        array (
          'name' => 'password_vis',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'type',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetVisibility',
              'params' => 
              array (
                'target' => 'password',
                'value' => 'isInEnum($type,getDD("extapi_meeting_password"))',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        1 => 
        array (
          'name' => 'displayed_url_vis',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'type',
            1 => 'type',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetVisibility',
              'params' => 
              array (
                'target' => 'displayed_url',
                'value' => 'and(isAlpha($type),not(equal($type,"Sugar")))',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
      ),
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
              'name' => 'name',
              'label' => 'LBL_LIST_SUBJECT',
              'link' => true,
              'default' => true,
              'enabled' => true,
            ),
            1 => 
            array (
              'name' => 'contact_name',
              'label' => 'LBL_LIST_CONTACT',
              'link' => true,
              'id' => 'CONTACT_ID',
              'default' => true,
              'enabled' => true,
            ),
            2 => 
            array (
              'name' => 'parent_name',
              'label' => 'LBL_LIST_RELATED_TO',
              'id' => 'PARENT_ID',
              'link' => true,
              'default' => true,
              'enabled' => true,
              'sortable' => false,
            ),
            3 => 
            array (
              'name' => 'date_start',
              'label' => 'LBL_LIST_DATE',
              'link' => false,
              'default' => true,
              'enabled' => true,
            ),
            4 => 
            array (
              'name' => 'team_name',
              'label' => 'LBL_LIST_TEAM',
              'default' => false,
              'enabled' => true,
            ),
            5 => 
            array (
              'name' => 'assigned_user_name',
              'label' => 'LBL_LIST_ASSIGNED_TO_NAME',
              'id' => 'ASSIGNED_USER_ID',
              'default' => true,
              'enabled' => true,
            ),
            6 => 
            array (
              'name' => 'direction',
              'type' => 'enum',
              'label' => 'LBL_LIST_DIRECTION',
              'default' => false,
              'enabled' => true,
            ),
            7 => 
            array (
              'name' => 'status',
              'label' => 'LBL_LIST_STATUS',
              'link' => false,
              'default' => false,
              'enabled' => true,
            ),
            8 => 
            array (
              'name' => 'date_entered',
              'width' => '10%',
              'label' => 'LBL_DATE_ENTERED',
              'default' => true,
              'enabled' => true,
              'readonly' => true,
            ),
          ),
        ),
      ),
      'dependencies' => 
      array (
        0 => 
        array (
          'name' => 'password_vis',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'type',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetVisibility',
              'params' => 
              array (
                'target' => 'password',
                'value' => 'isInEnum($type,getDD("extapi_meeting_password"))',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        1 => 
        array (
          'name' => 'displayed_url_vis',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'type',
            1 => 'type',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetVisibility',
              'params' => 
              array (
                'target' => 'displayed_url',
                'value' => 'and(isAlpha($type),not(equal($type,"Sugar")))',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
      ),
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
          'header' => true,
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
            1 => 'name',
            2 => 
            array (
              'name' => 'favorite',
              'label' => 'LBL_FAVORITE',
              'type' => 'favorite',
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
          'fields' => 
          array (
            0 => 'type',
            1 => 'status',
            2 => 'date_start',
            3 => 'location',
            4 => 'date_end',
            5 => 'parent_name',
            6 => 
            array (
              'name' => 'fieldset_duration',
              'type' => 'fieldset',
              'label' => 'Duration',
              'fields' => 
              array (
                0 => 'duration_hours',
                1 => 'duration_minutes',
              ),
            ),
          ),
        ),
        2 => 
        array (
          'name' => 'panel_hidden',
          'label' => 'LBL_RECORD_SHOWMORE',
          'columns' => 2,
          'hide' => true,
          'labelsOnTop' => true,
          'placeholders' => true,
          'fields' => 
          array (
            0 => 
            array (
              'name' => 'description',
              'span' => 8,
            ),
            1 => 
            array (
              'type' => 'html',
              'default_value' => '',
            ),
            2 => 'teams',
            3 => 'password',
            4 => 'join_url',
            5 => 
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
            6 => 'reminder_checked',
            7 => 
            array (
              'name' => 'date_entered_by',
              'readonly' => true,
              'type' => 'fieldset',
              'label' => 'LBL_DATE_ENTERED',
              'fields' => 
              array (
                0 => 
                array (
                  'name' => 'date_entered',
                ),
                1 => 
                array (
                  'type' => 'label',
                  'default_value' => 'LBL_BY',
                ),
                2 => 
                array (
                  'name' => 'created_by_name',
                ),
              ),
            ),
          ),
        ),
      ),
      'dependencies' => 
      array (
        0 => 
        array (
          'name' => 'password_vis',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'type',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetVisibility',
              'params' => 
              array (
                'target' => 'password',
                'value' => 'isInEnum($type,getDD("extapi_meeting_password"))',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        1 => 
        array (
          'name' => 'displayed_url_vis',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'type',
            1 => 'type',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetVisibility',
              'params' => 
              array (
                'target' => 'displayed_url',
                'value' => 'and(isAlpha($type),not(equal($type,"Sugar")))',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
      ),
    ),
  ),
  'resolve-conflicts-list' => 
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
              'label' => 'LBL_LIST_SUBJECT',
              'link' => true,
              'default' => true,
              'enabled' => true,
            ),
            1 => 
            array (
              'name' => 'contact_name',
              'label' => 'LBL_LIST_CONTACT',
              'link' => true,
              'id' => 'CONTACT_ID',
              'default' => true,
              'enabled' => true,
            ),
            2 => 
            array (
              'name' => 'parent_name',
              'label' => 'LBL_LIST_RELATED_TO',
              'id' => 'PARENT_ID',
              'link' => true,
              'default' => true,
              'enabled' => true,
              'sortable' => false,
            ),
            3 => 
            array (
              'name' => 'date_start',
              'label' => 'LBL_LIST_DATE',
              'link' => false,
              'default' => true,
              'enabled' => true,
            ),
            4 => 
            array (
              'name' => 'team_name',
              'label' => 'LBL_LIST_TEAM',
              'default' => false,
              'enabled' => true,
            ),
            5 => 
            array (
              'name' => 'assigned_user_name',
              'label' => 'LBL_LIST_ASSIGNED_TO_NAME',
              'id' => 'ASSIGNED_USER_ID',
              'default' => false,
              'enabled' => true,
            ),
            6 => 
            array (
              'name' => 'direction',
              'type' => 'enum',
              'label' => 'LBL_LIST_DIRECTION',
              'default' => false,
              'enabled' => true,
            ),
            7 => 
            array (
              'name' => 'status',
              'label' => 'LBL_LIST_STATUS',
              'link' => false,
              'default' => false,
              'enabled' => true,
            ),
            8 => 
            array (
              'name' => 'date_entered',
              'width' => '10%',
              'label' => 'LBL_DATE_ENTERED',
              'default' => false,
              'enabled' => true,
              'readonly' => true,
            ),
          ),
        ),
      ),
      'dependencies' => 
      array (
        0 => 
        array (
          'name' => 'password_vis',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'type',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetVisibility',
              'params' => 
              array (
                'target' => 'password',
                'value' => 'isInEnum($type,getDD("extapi_meeting_password"))',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        1 => 
        array (
          'name' => 'displayed_url_vis',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'type',
            1 => 'type',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetVisibility',
              'params' => 
              array (
                'target' => 'displayed_url',
                'value' => 'and(isAlpha($type),not(equal($type,"Sugar")))',
              ),
            ),
          ),
          'notActions' => 
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
              'label' => 'LBL_LIST_SUBJECT',
              'link' => true,
              'default' => true,
              'enabled' => true,
            ),
            1 => 
            array (
              'name' => 'contact_name',
              'label' => 'LBL_LIST_CONTACT',
              'link' => true,
              'id' => 'CONTACT_ID',
              'default' => true,
              'enabled' => true,
            ),
            2 => 
            array (
              'name' => 'parent_name',
              'label' => 'LBL_LIST_RELATED_TO',
              'id' => 'PARENT_ID',
              'link' => true,
              'default' => true,
              'enabled' => true,
              'sortable' => false,
            ),
            3 => 
            array (
              'name' => 'date_start',
              'label' => 'LBL_LIST_DATE',
              'link' => false,
              'default' => true,
              'enabled' => true,
            ),
            4 => 
            array (
              'name' => 'team_name',
              'label' => 'LBL_LIST_TEAM',
              'default' => false,
              'enabled' => true,
            ),
            5 => 
            array (
              'name' => 'assigned_user_name',
              'label' => 'LBL_LIST_ASSIGNED_TO_NAME',
              'id' => 'ASSIGNED_USER_ID',
              'default' => false,
              'enabled' => true,
            ),
            6 => 
            array (
              'name' => 'direction',
              'type' => 'enum',
              'label' => 'LBL_LIST_DIRECTION',
              'default' => false,
              'enabled' => true,
            ),
            7 => 
            array (
              'name' => 'status',
              'label' => 'LBL_LIST_STATUS',
              'link' => false,
              'default' => false,
              'enabled' => true,
            ),
            8 => 
            array (
              'name' => 'date_entered',
              'width' => '10%',
              'label' => 'LBL_DATE_ENTERED',
              'default' => false,
              'enabled' => true,
              'readonly' => true,
            ),
          ),
        ),
      ),
      'dependencies' => 
      array (
        0 => 
        array (
          'name' => 'password_vis',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'type',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetVisibility',
              'params' => 
              array (
                'target' => 'password',
                'value' => 'isInEnum($type,getDD("extapi_meeting_password"))',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        1 => 
        array (
          'name' => 'displayed_url_vis',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'type',
            1 => 'type',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetVisibility',
              'params' => 
              array (
                'target' => 'displayed_url',
                'value' => 'and(isAlpha($type),not(equal($type,"Sugar")))',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
      ),
    ),
  ),
  'subpanel-list' => 
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
({extendsFrom:\'SubpanelListView\',initialize:function(options){this._super(\'initialize\',[options]);this.collection.on(\'change:date_start change:date_end\',this.updateDuration,this);},updateDuration:function(model){var minutes=0,hours=0,start=app.date(model.get(\'date_start\')),end=app.date(model.get(\'date_end\'));if(start.isValid()&&end.isValid()&&start.isBefore(end)){var duration=app.date.duration(end.diff(start));minutes=Math.floor(duration.minutes());hours=Math.floor(duration.asHours());}
model.set(\'duration_minutes\',minutes);model.set(\'duration_hours\',hours);}})',
    ),
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
              'name' => 'name',
              'label' => 'LBL_LIST_SUBJECT',
              'enabled' => true,
              'default' => true,
              'link' => true,
            ),
            1 => 
            array (
              'name' => 'status',
              'label' => 'LBL_LIST_STATUS',
              'enabled' => true,
              'default' => true,
            ),
            2 => 
            array (
              'target_record_key' => 'contact_id',
              'target_module' => 'Contacts',
              'name' => 'contact_name',
              'label' => 'LBL_LIST_CONTACT',
              'link' => true,
              'module' => 'Contacts',
              'enabled' => true,
              'default' => true,
              'related_fields' => 
              array (
                0 => 'contact_id',
              ),
            ),
            3 => 
            array (
              'name' => 'date_start',
              'label' => 'LBL_LIST_DATE',
              'enabled' => true,
              'default' => true,
            ),
            4 => 
            array (
              'name' => 'date_end',
              'label' => 'LBL_DATE_END',
              'enabled' => true,
              'default' => true,
            ),
            5 => 
            array (
              'name' => 'assigned_user_name',
              'target_record_key' => 'assigned_user_id',
              'target_module' => 'Employees',
              'label' => 'LBL_LIST_ASSIGNED_TO_NAME',
              'enabled' => true,
              'default' => true,
              'sortable' => false,
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
            'name' => 'edit_button',
            'icon' => 'icon-pencil',
            'label' => 'LBL_EDIT_BUTTON',
            'event' => 'list:editrow:fire',
            'acl_action' => 'edit',
            'allow_bwc' => true,
          ),
          1 => 
          array (
            'type' => 'unlink-action',
            'icon' => 'icon-unlink',
            'label' => 'LBL_UNLINK_BUTTON',
          ),
          2 => 
          array (
            'type' => 'closebutton',
            'icon' => 'icon-remove-circle',
            'name' => 'record-close',
            'label' => 'LBL_CLOSE_BUTTON_TITLE',
            'acl_action' => 'edit',
          ),
        ),
      ),
      'dependencies' => 
      array (
        0 => 
        array (
          'name' => 'password_vis',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'type',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetVisibility',
              'params' => 
              array (
                'target' => 'password',
                'value' => 'isInEnum($type,getDD("extapi_meeting_password"))',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        1 => 
        array (
          'name' => 'displayed_url_vis',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'type',
            1 => 'type',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetVisibility',
              'params' => 
              array (
                'target' => 'displayed_url',
                'value' => 'and(isAlpha($type),not(equal($type,"Sugar")))',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
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
      'dependencies' => 
      array (
        0 => 
        array (
          'name' => 'password_vis',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'type',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetVisibility',
              'params' => 
              array (
                'target' => 'password',
                'value' => 'isInEnum($type,getDD("extapi_meeting_password"))',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        1 => 
        array (
          'name' => 'displayed_url_vis',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'type',
            1 => 'type',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetVisibility',
              'params' => 
              array (
                'target' => 'displayed_url',
                'value' => 'and(isAlpha($type),not(equal($type,"Sugar")))',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
      ),
    ),
  ),
  '_hash' => '987c65a49525ad6bcdb7316aa7b3f4bd',
);

