<?php
// created: 2018-06-13 10:57:00
$viewdefs['Calls']['base']['view']['record'] = array (
  'buttons' => 
  array (
    0 => 
    array (
      'type' => 'button',
      'name' => 'cancel_button',
      'label' => 'LBL_CANCEL_BUTTON_LABEL',
      'css_class' => 'btn-invisible btn-link',
      'showOn' => 'edit',
      'events' => 
      array (
        'click' => 'button:cancel_button:click',
      ),
    ),
    1 => 
    array (
      'type' => 'actiondropdown',
      'name' => 'save_dropdown',
      'primary' => true,
      'switch_on_click' => true,
      'showOn' => 'edit',
      'buttons' => 
      array (
        0 => 
        array (
          'type' => 'rowaction',
          'event' => 'button:save_button:click',
          'name' => 'save_button',
          'label' => 'LBL_SAVE_BUTTON_LABEL',
          'css_class' => 'btn btn-primary',
          'acl_action' => 'edit',
        ),
        1 => 
        array (
          'type' => 'save-and-send-invites-button',
          'event' => 'button:save_button:click',
          'name' => 'save_invite_button',
          'label' => 'LBL_SAVE_AND_SEND_INVITES_BUTTON',
          'acl_action' => 'edit',
        ),
      ),
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
          'type' => 'editrecurrencesbutton',
          'event' => 'button:edit_recurrence_button:click',
          'name' => 'edit_recurrence_button',
          'label' => 'LBL_EDIT_ALL_RECURRENCES',
          'acl_action' => 'edit',
        ),
        2 => 
        array (
          'type' => 'shareaction',
          'name' => 'share',
          'label' => 'LBL_RECORD_SHARE_BUTTON',
          'acl_action' => 'view',
        ),
        3 => 
        array (
          'type' => 'pdfaction',
          'name' => 'download-pdf',
          'label' => 'LBL_PDF_VIEW',
          'action' => 'download',
          'acl_action' => 'view',
        ),
        4 => 
        array (
          'type' => 'pdfaction',
          'name' => 'email-pdf',
          'label' => 'LBL_PDF_EMAIL',
          'action' => 'email',
          'acl_action' => 'view',
        ),
        5 => 
        array (
          'type' => 'divider',
        ),
        6 => 
        array (
          'type' => 'rowaction',
          'event' => 'button:duplicate_button:click',
          'name' => 'duplicate_button',
          'label' => 'LBL_DUPLICATE_BUTTON_LABEL',
          'acl_module' => 'Calls',
          'acl_action' => 'create',
        ),
        7 => 
        array (
          'type' => 'divider',
        ),
        8 => 
        array (
          'type' => 'rowaction',
          'event' => 'button:delete_button:click',
          'name' => 'delete_button',
          'label' => 'LBL_DELETE_BUTTON_LABEL',
          'acl_action' => 'delete',
        ),
        9 => 
        array (
          'type' => 'deleterecurrencesbutton',
          'name' => 'delete_recurrence_button',
          'label' => 'LBL_REMOVE_ALL_RECURRENCES',
          'acl_action' => 'delete',
        ),
        10 => 
        array (
          'type' => 'closebutton',
          'name' => 'record-close-new',
          'label' => 'LBL_CLOSE_AND_CREATE_BUTTON_LABEL',
          'closed_status' => 'Held',
          'acl_action' => 'edit',
        ),
        11 => 
        array (
          'type' => 'closebutton',
          'name' => 'record-close',
          'label' => 'LBL_CLOSE_BUTTON_LABEL',
          'closed_status' => 'Held',
          'acl_action' => 'edit',
        ),
      ),
    ),
    3 => 
    array (
      'name' => 'sidebar_toggle',
      'type' => 'sidebartoggle',
    ),
  ),
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
        4 => 
        array (
          'name' => 'status',
          'type' => 'event-status',
          'enum_width' => 'auto',
          'dropdown_width' => 'auto',
          'dropdown_class' => 'select2-menu-only',
          'container_class' => 'select2-menu-only',
        ),
      ),
    ),
    1 => 
    array (
      'name' => 'lbl_editview_panel2',
      'label' => 'LBL_EDITVIEW_PANEL2',
      'columns' => 2,
      'labels' => true,
      'labelsOnTop' => true,
      'placeholders' => true,
      'fields' => 
      array (
        0 => 
        array (
          'name' => 'tag',
          'span' => 12,
        ),
      ),
      'newTab' => false,
      'panelDefault' => 'expanded',
    ),
    2 => 
    array (
      'name' => 'panel_hidden',
      'label' => 'LBL_RECORD_SHOWMORE',
      'columns' => 2,
      'labels' => true,
      'labelsOnTop' => true,
      'placeholders' => true,
      'hide' => true,
      'fields' => 
      array (
        0 => 
        array (
          'name' => 'parent_name',
          'span' => 12,
        ),
        1 => 
        array (
          'name' => 'description',
          'rows' => 3,
          'span' => 6,
        ),
        2 => 
        array (
          'name' => 'users_calls_1_name',
          'label' => 'LBL_USERS_CALLS_1_FROM_USERS_TITLE',
          'span' => 6,
        ),
      ),
      'newTab' => true,
      'panelDefault' => 'expanded',
    ),
    3 => 
    array (
      'name' => 'lbl_panel_assignment',
      'label' => 'LBL_PANEL_ASSIGNMENT',
      'columns' => 2,
      'labels' => true,
      'labelsOnTop' => true,
      'placeholders' => true,
      'fields' => 
      array (
        0 => 'assigned_user_name',
        1 => 'team_name',
      ),
      'newTab' => false,
      'panelDefault' => 'expanded',
    ),
    4 => 
    array (
      'name' => 'lbl_editview_panel1',
      'label' => 'LBL_EDITVIEW_PANEL1',
      'columns' => 2,
      'labels' => true,
      'labelsOnTop' => true,
      'placeholders' => true,
      'fields' => 
      array (
        0 => 'direction',
        1 => 
        array (
          'name' => 'calling_c',
          'label' => 'LBL_CALLING',
        ),
        2 => 
        array (
          'name' => 'called_c',
          'label' => 'LBL_CALLED',
        ),
        3 => 
        array (
          'name' => 'ring_c',
          'label' => 'LBL_RING',
        ),
        4 => 
        array (
          'name' => 'answer_c',
          'label' => 'LBL_ANSWER',
        ),
        5 => 
        array (
          'name' => 'wait_c',
          'label' => 'LBL_WAIT',
        ),
        6 => 
        array (
          'name' => 'talk_c',
          'label' => 'LBL_TALK',
        ),
        7 => 
        array (
          'name' => 'extension_c',
          'label' => 'LBL_EXTENSION',
        ),
        8 => 
        array (
          'name' => 'site_c',
          'label' => 'LBL_SITE',
        ),
        9 => 
        array (
          'related_fields' => 
          array (
            0 => 'currency_id',
            1 => 'base_rate',
          ),
          'name' => 'cost_c',
          'label' => 'LBL_COST',
        ),
        10 => 
        array (
          'name' => 'call_source_c',
          'label' => 'LBL_CALL_SOURCE',
        ),
        11 => 
        array (
          'name' => 'date_entered_by',
          'readonly' => true,
          'inline' => true,
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
        12 => 
        array (
          'name' => 'charge_description_c',
          'studio' => 'visible',
          'label' => 'LBL_CHARGE_DESCRIPTION',
        ),
        13 => 
        array (
          'name' => 'call_hour_c',
          'label' => 'LBL_CALL_HOUR',
        ),
      ),
      'newTab' => true,
      'panelDefault' => 'expanded',
    ),
  ),
  'templateMeta' => 
  array (
    'maxColumns' => '2',
    'useTabs' => true,
  ),
);