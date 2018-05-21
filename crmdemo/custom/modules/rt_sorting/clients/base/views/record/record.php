<?php
$module_name = 'rt_sorting';
$viewdefs[$module_name] = 
array (
  'base' => 
  array (
    'view' => 
    array (
      'record' => 
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
                'span' => 12,
              ),
            ),
          ),
        ),
        'templateMeta' => 
        array (
          'useTabs' => false,
        ),
      ),
    ),
  ),
);