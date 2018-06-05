<?php
$clientCache['rt_report_board']['base']['view'] = array (
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
          'newTab' => false,
          'panelDefault' => 'expanded',
          'fields' => 
          array (
            0 => 
            array (
              'name' => 'client',
              'studio' => 'visible',
              'label' => 'LBL_CLIENT',
            ),
            1 => 
            array (
              'name' => 'client_alias',
              'label' => 'LBL_CLIENT_ALIAS',
            ),
            2 => 
            array (
              'name' => 'four_weeks_average',
              'label' => 'LBL_FOUR_WEEKS_AVERAGE',
            ),
            3 => 
            array (
              'name' => 'fund_type',
              'label' => 'LBL_FUND_TYPE',
            ),
            4 => 
            array (
              'name' => 'green_status',
              'label' => 'LBL_GREEN_STATUS',
            ),
            5 => 
            array (
              'name' => 'minimum_black',
              'label' => 'LBL_MINIMUM_BLACK',
            ),
            6 => 
            array (
              'name' => 'no_of_reports',
              'label' => 'LBL_NO_OF_REPORTS',
            ),
            7 => 
            array (
            ),
            8 => 'assigned_user_name',
            9 => 
            array (
              'name' => 'assigned_team',
              'studio' => 'visible',
              'label' => 'LBL_ASSIGNED_TEAM',
            ),
            10 => 
            array (
            ),
            11 => 'team_name',
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
          ),
        ),
      ),
      'templateMeta' => 
      array (
        'useTabs' => false,
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
              'name' => 'client',
              'label' => 'LBL_CLIENT',
              'enabled' => true,
              'id' => 'MUR_CLIENT_N_LIST_ID_C',
              'link' => true,
              'sortable' => false,
              'width' => '10%',
              'default' => true,
            ),
            1 => 
            array (
              'name' => 'client_alias',
              'label' => 'LBL_CLIENT_ALIAS',
              'enabled' => true,
              'width' => '10%',
              'default' => true,
            ),
            2 => 
            array (
              'name' => 'no_of_reports',
              'label' => 'LBL_NO_OF_REPORTS',
              'enabled' => true,
              'width' => '10%',
              'default' => true,
            ),
            3 => 
            array (
              'name' => 'four_weeks_average',
              'label' => 'LBL_FOUR_WEEKS_AVERAGE',
              'enabled' => true,
              'width' => '10%',
              'default' => true,
            ),
            4 => 
            array (
              'name' => 'minimum_black',
              'label' => 'LBL_MINIMUM_BLACK',
              'enabled' => true,
              'width' => '10%',
              'default' => true,
            ),
            5 => 
            array (
              'name' => 'fund_type',
              'label' => 'LBL_FUND_TYPE',
              'enabled' => true,
              'width' => '10%',
              'default' => true,
            ),
            6 => 
            array (
              'name' => 'green_status',
              'label' => 'LBL_GREEN_STATUS',
              'enabled' => true,
              'width' => '10%',
              'default' => true,
            ),
            7 => 
            array (
              'name' => 'assigned_team',
              'label' => 'LBL_ASSIGNED_TEAM',
              'enabled' => true,
              'width' => '10%',
              'default' => true,
            ),
            8 => 
            array (
              'name' => 'team_name',
              'label' => 'LBL_TEAM',
              'width' => '9%',
              'default' => false,
              'enabled' => true,
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
              'label' => 'LBL_NAME',
              'default' => true,
              'enabled' => true,
              'link' => true,
            ),
            1 => 
            array (
              'name' => 'team_name',
              'label' => 'LBL_TEAM',
              'width' => 9,
              'default' => true,
              'enabled' => true,
            ),
            2 => 
            array (
              'name' => 'assigned_user_name',
              'label' => 'LBL_ASSIGNED_TO_NAME',
              'width' => 9,
              'default' => true,
              'enabled' => true,
              'link' => true,
            ),
            3 => 
            array (
              'label' => 'LBL_DATE_MODIFIED',
              'enabled' => true,
              'default' => true,
              'name' => 'date_modified',
              'readonly' => true,
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
  '_hash' => '139c3fdd54895a138e3181f7f1fca1c9',
);

