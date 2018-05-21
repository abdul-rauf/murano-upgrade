<?php
$clientCache['Calls']['base']['view'] = array (
  'dupecheck-list' => 
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
              'label' => 'LBL_LIST_SUBJECT',
              'enabled' => true,
              'default' => true,
              'link' => true,
              'name' => 'name',
            ),
            1 => 
            array (
              'label' => 'LBL_STATUS',
              'enabled' => true,
              'default' => true,
              'name' => 'status',
            ),
            2 => 
            array (
              'target_record_key' => 'contact_id',
              'target_module' => 'Contacts',
              'label' => 'LBL_LIST_CONTACT',
              'link' => true,
              'enabled' => true,
              'default' => true,
              'name' => 'contact_name',
              'related_fields' => 
              array (
                0 => 'contact_id',
              ),
            ),
            3 => 
            array (
              'name' => 'parent_name',
              'width' => '20%',
              'label' => 'LBL_LIST_RELATED_TO',
              'dynamic_module' => 'PARENT_TYPE',
              'id' => 'PARENT_ID',
              'link' => true,
              'enabled' => true,
              'default' => true,
              'sortable' => false,
              'ACLTag' => 'PARENT',
              'related_fields' => 
              array (
                0 => 'parent_id',
                1 => 'parent_type',
              ),
            ),
            4 => 
            array (
              'label' => 'LBL_LIST_DATE',
              'enabled' => true,
              'default' => false,
              'name' => 'date_start',
            ),
            5 => 
            array (
              'label' => 'LBL_DATE_END',
              'enabled' => true,
              'default' => false,
              'name' => 'date_end',
            ),
            6 => 
            array (
              'name' => 'assigned_user_name',
              'target_record_key' => 'assigned_user_id',
              'target_module' => 'Employees',
              'label' => 'LBL_LIST_ASSIGNED_TO_NAME',
              'enabled' => true,
              'default' => false,
              'sortable' => false,
            ),
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
          'name' => 'panel_header',
          'label' => 'LBL_PANEL_1',
          'fields' => 
          array (
            0 => 
            array (
              'label' => 'LBL_LIST_SUBJECT',
              'enabled' => true,
              'default' => true,
              'link' => true,
              'name' => 'name',
            ),
            1 => 
            array (
              'label' => 'LBL_STATUS',
              'enabled' => true,
              'default' => true,
              'name' => 'status',
            ),
            2 => 
            array (
              'target_record_key' => 'contact_id',
              'target_module' => 'Contacts',
              'label' => 'LBL_LIST_CONTACT',
              'link' => true,
              'enabled' => true,
              'default' => true,
              'name' => 'contact_name',
              'related_fields' => 
              array (
                0 => 'contact_id',
              ),
            ),
            3 => 
            array (
              'name' => 'parent_name',
              'width' => '20%',
              'label' => 'LBL_LIST_RELATED_TO',
              'dynamic_module' => 'PARENT_TYPE',
              'id' => 'PARENT_ID',
              'link' => true,
              'enabled' => true,
              'default' => true,
              'sortable' => false,
              'ACLTag' => 'PARENT',
              'related_fields' => 
              array (
                0 => 'parent_id',
                1 => 'parent_type',
              ),
            ),
            4 => 
            array (
              'label' => 'LBL_LIST_DATE',
              'enabled' => true,
              'default' => true,
              'name' => 'date_start',
            ),
            5 => 
            array (
              'label' => 'LBL_DATE_END',
              'enabled' => true,
              'default' => true,
              'name' => 'date_end',
            ),
            6 => 
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
          'name' => 'panel_header',
          'label' => 'LBL_PANEL_1',
          'fields' => 
          array (
            0 => 
            array (
              'label' => 'LBL_LIST_SUBJECT',
              'enabled' => true,
              'default' => true,
              'link' => true,
              'name' => 'name',
            ),
            1 => 
            array (
              'label' => 'LBL_STATUS',
              'enabled' => true,
              'default' => true,
              'name' => 'status',
            ),
            2 => 
            array (
              'target_record_key' => 'contact_id',
              'target_module' => 'Contacts',
              'label' => 'LBL_LIST_CONTACT',
              'link' => true,
              'enabled' => true,
              'default' => true,
              'name' => 'contact_name',
              'related_fields' => 
              array (
                0 => 'contact_id',
              ),
            ),
            3 => 
            array (
              'name' => 'parent_name',
              'width' => '20%',
              'label' => 'LBL_LIST_RELATED_TO',
              'dynamic_module' => 'PARENT_TYPE',
              'id' => 'PARENT_ID',
              'link' => true,
              'enabled' => true,
              'default' => true,
              'sortable' => false,
              'ACLTag' => 'PARENT',
              'related_fields' => 
              array (
                0 => 'parent_id',
                1 => 'parent_type',
              ),
            ),
            4 => 
            array (
              'label' => 'LBL_LIST_DATE',
              'enabled' => true,
              'default' => false,
              'name' => 'date_start',
            ),
            5 => 
            array (
              'label' => 'LBL_DATE_END',
              'enabled' => true,
              'default' => false,
              'name' => 'date_end',
            ),
            6 => 
            array (
              'name' => 'assigned_user_name',
              'target_record_key' => 'assigned_user_id',
              'target_module' => 'Employees',
              'label' => 'LBL_LIST_ASSIGNED_TO_NAME',
              'enabled' => true,
              'default' => false,
              'sortable' => false,
            ),
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
          'name' => 'panel_header',
          'label' => 'LBL_PANEL_1',
          'fields' => 
          array (
            0 => 
            array (
              'label' => 'LBL_LIST_SUBJECT',
              'enabled' => true,
              'default' => true,
              'link' => true,
              'name' => 'name',
            ),
            1 => 
            array (
              'label' => 'LBL_STATUS',
              'enabled' => true,
              'default' => true,
              'name' => 'status',
            ),
            2 => 
            array (
              'target_record_key' => 'contact_id',
              'target_module' => 'Contacts',
              'label' => 'LBL_LIST_CONTACT',
              'link' => true,
              'enabled' => true,
              'default' => true,
              'name' => 'contact_name',
              'related_fields' => 
              array (
                0 => 'contact_id',
              ),
            ),
            3 => 
            array (
              'name' => 'parent_name',
              'width' => '20%',
              'label' => 'LBL_LIST_RELATED_TO',
              'dynamic_module' => 'PARENT_TYPE',
              'id' => 'PARENT_ID',
              'link' => true,
              'enabled' => true,
              'default' => true,
              'sortable' => false,
              'ACLTag' => 'PARENT',
              'related_fields' => 
              array (
                0 => 'parent_id',
                1 => 'parent_type',
              ),
            ),
            4 => 
            array (
              'label' => 'LBL_LIST_DATE',
              'enabled' => true,
              'default' => false,
              'name' => 'date_start',
            ),
            5 => 
            array (
              'label' => 'LBL_DATE_END',
              'enabled' => true,
              'default' => false,
              'name' => 'date_end',
            ),
            6 => 
            array (
              'name' => 'assigned_user_name',
              'target_record_key' => 'assigned_user_id',
              'target_module' => 'Employees',
              'label' => 'LBL_LIST_ASSIGNED_TO_NAME',
              'enabled' => true,
              'default' => false,
              'sortable' => false,
            ),
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
              'label' => 'LBL_LIST_SUBJECT',
              'enabled' => true,
              'default' => true,
              'link' => true,
              'name' => 'name',
            ),
            1 => 
            array (
              'label' => 'LBL_STATUS',
              'enabled' => true,
              'default' => true,
              'name' => 'status',
            ),
            2 => 
            array (
              'target_record_key' => 'contact_id',
              'target_module' => 'Contacts',
              'label' => 'LBL_LIST_CONTACT',
              'link' => true,
              'enabled' => true,
              'default' => true,
              'name' => 'contact_name',
              'related_fields' => 
              array (
                0 => 'contact_id',
              ),
            ),
            3 => 
            array (
              'label' => 'LBL_LIST_DATE',
              'enabled' => true,
              'default' => true,
              'name' => 'date_start',
            ),
            4 => 
            array (
              'label' => 'LBL_DATE_END',
              'enabled' => true,
              'default' => true,
              'name' => 'date_end',
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
          'fields' => 
          array (
            0 => 'assigned_user_name',
            1 => 'team_name',
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
          'fields' => 
          array (
            0 => 
            array (
              'name' => 'description',
              'span' => 12,
            ),
            1 => 
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
            2 => 
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
    ),
  ),
  '_hash' => '01ae04455a02432baf5cab52ab4234b6',
);

