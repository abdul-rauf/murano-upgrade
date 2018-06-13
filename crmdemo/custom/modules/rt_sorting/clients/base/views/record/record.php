<?php
// created: 2018-06-13 14:44:09
$viewdefs['rt_sorting']['base']['view']['record'] = array (
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
        13 => 
        array (
          'name' => 'tag',
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
          'name' => 'da_confirmed_clients_c',
          'studio' => 'visible',
          'label' => 'LBL_DA_CONFIRMED_CLIENTS',
        ),
      ),
    ),
  ),
  'templateMeta' => 
  array (
    'useTabs' => false,
  ),
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
          'acl_module' => 'rt_sorting',
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
);