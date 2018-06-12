<?php
// created: 2018-06-12 08:26:52
$viewdefs['rt_client_reporting']['base']['view']['record'] = array (
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
          'name' => 'email_to',
          'label' => 'LBL_EMAIL_TO',
        ),
        1 => 
        array (
          'name' => 'email_cc',
          'label' => 'LBL_EMAIL_CC',
        ),
        2 => 
        array (
          'name' => 'email_bcc',
          'label' => 'LBL_EMAIL_BCC',
        ),
        3 => 
        array (
        ),
        4 => 
        array (
          'name' => 'team',
          'studio' => 'visible',
          'label' => 'LBL_TEAM',
        ),
        5 => 
        array (
          'name' => 'backup_analyst',
          'studio' => 'visible',
          'label' => 'LBL_BACKUP_ANALYST',
        ),
        6 => 
        array (
          'name' => 'assigned_user_name',
          'label' => 'LBL_ASSIGNED_TO',
        ),
        7 => 
        array (
        ),
        8 => 
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
        1 => 
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
        2 => 
        array (
          'name' => 'team_name',
        ),
        3 => 
        array (
        ),
      ),
    ),
  ),
  'templateMeta' => 
  array (
    'useTabs' => false,
  ),
);