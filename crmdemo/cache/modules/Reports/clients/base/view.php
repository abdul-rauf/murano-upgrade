<?php
$clientCache['Reports']['base']['view'] = array (
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
              'name' => 'name',
              'label' => 'LBL_REPORT_NAME',
              'link' => true,
              'type' => 'name',
              'enabled' => true,
              'default' => true,
            ),
            1 => 
            array (
              'name' => 'module',
              'label' => 'LBL_MODULE',
              'default' => true,
            ),
            2 => 
            array (
              'name' => 'report_type',
              'label' => 'LBL_REPORT_TYPE',
              'type' => 'enum',
              'options' => 'dom_report_types',
              'default' => true,
            ),
            3 => 
            array (
              'name' => 'assigned_user_name',
              'label' => 'LBL_LIST_ASSIGNED_USER',
              'default' => true,
              'sortable' => false,
            ),
            4 => 
            array (
              'name' => 'date_entered',
              'label' => 'LBL_DATE_ENTERED',
              'default' => false,
              'readonly' => true,
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
              'name' => 'name',
              'label' => 'LBL_REPORT_NAME',
              'link' => true,
              'type' => 'name',
              'enabled' => true,
              'default' => true,
            ),
            1 => 
            array (
              'name' => 'module',
              'label' => 'LBL_MODULE',
              'default' => true,
            ),
            2 => 
            array (
              'name' => 'report_type',
              'label' => 'LBL_REPORT_TYPE',
              'type' => 'enum',
              'options' => 'dom_report_types',
              'default' => true,
            ),
            3 => 
            array (
              'name' => 'assigned_user_name',
              'label' => 'LBL_LIST_ASSIGNED_USER',
              'default' => true,
              'sortable' => false,
            ),
            4 => 
            array (
              'name' => 'date_entered',
              'label' => 'LBL_DATE_ENTERED',
              'default' => true,
              'readonly' => true,
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
              'name' => 'name',
              'label' => 'LBL_REPORT_NAME',
              'link' => true,
              'type' => 'name',
              'enabled' => true,
              'default' => true,
            ),
            1 => 
            array (
              'name' => 'module',
              'label' => 'LBL_MODULE',
              'default' => true,
            ),
            2 => 
            array (
              'name' => 'report_type',
              'label' => 'LBL_REPORT_TYPE',
              'type' => 'enum',
              'options' => 'dom_report_types',
              'default' => true,
            ),
            3 => 
            array (
              'name' => 'assigned_user_name',
              'label' => 'LBL_LIST_ASSIGNED_USER',
              'default' => true,
              'sortable' => false,
            ),
            4 => 
            array (
              'name' => 'date_entered',
              'label' => 'LBL_DATE_ENTERED',
              'default' => false,
              'readonly' => true,
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
              'name' => 'name',
              'label' => 'LBL_REPORT_NAME',
              'link' => true,
              'type' => 'name',
              'enabled' => true,
              'default' => true,
            ),
            1 => 
            array (
              'name' => 'module',
              'label' => 'LBL_MODULE',
              'type' => 'module',
              'default' => true,
            ),
            2 => 
            array (
              'name' => 'report_type',
              'label' => 'LBL_REPORT_TYPE',
              'type' => 'enum',
              'options' => 'dom_report_types',
              'default' => true,
            ),
            3 => 
            array (
              'name' => 'assigned_user_name',
              'label' => 'LBL_LIST_ASSIGNED_USER',
              'default' => true,
              'sortable' => false,
            ),
            4 => 
            array (
              'name' => 'date_entered',
              'label' => 'LBL_DATE_ENTERED',
              'default' => false,
              'readonly' => true,
            ),
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
  'subpanel-list' => 
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
              'label' => 'LBL_NAME',
              'enabled' => true,
              'default' => true,
              'name' => 'name',
              'link' => true,
            ),
            1 => 
            array (
              'label' => 'LBL_DATE_MODIFIED',
              'enabled' => true,
              'default' => true,
              'name' => 'date_modified',
            ),
          ),
        ),
      ),
      'orderBy' => 
      array (
        'field' => 'date_modified',
        'direction' => 'desc',
      ),
    ),
  ),
  '_hash' => 'd363ffa2693430746c09bcdd813d0694',
);

