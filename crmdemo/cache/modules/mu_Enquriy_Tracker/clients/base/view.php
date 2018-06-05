<?php
$clientCache['mu_Enquriy_Tracker']['base']['view'] = array (
  'list' => 
  array (
    'meta' => 
    array (
      'panels' => 
      array (
        0 => 
        array (
          'label' => 'LBL_PANEL_DEFAULT',
          'fields' => 
          array (
            0 => 
            array (
              'name' => 'lead_record',
              'default' => true,
              'enabled' => true,
              'type' => 'relate',
              'studio' => 'visible',
              'label' => 'LBL_LEAD_RECORD',
              'id' => 'LEAD_ID_C',
              'link' => true,
              'width' => '10%',
            ),
            1 => 
            array (
              'name' => 'account_name',
              'default' => true,
              'enabled' => true,
              'type' => 'relate',
              'studio' => 'visible',
              'label' => 'LBL_ACCOUNT_NAME',
              'id' => 'ACCOUNT_ID_C',
              'link' => true,
              'width' => '10%',
            ),
            2 => 
            array (
              'name' => 'date_entered',
              'default' => true,
              'enabled' => true,
              'type' => 'datetime',
              'label' => 'LBL_DATE_ENTERED',
              'width' => '10%',
            ),
            3 => 
            array (
              'name' => 'date_click',
              'default' => true,
              'enabled' => true,
              'type' => 'datetimecombo',
              'label' => 'LBL_DATE_CLICK',
              'width' => '10%',
            ),
            4 => 
            array (
              'name' => 'status',
              'default' => true,
              'enabled' => true,
              'type' => 'enum',
              'studio' => 'visible',
              'label' => 'LBL_STATUS',
              'width' => '10%',
            ),
            5 => 
            array (
              'name' => 'assigned_user_name',
              'label' => 'LBL_ASSIGNED_TO_NAME',
              'width' => '9%',
              'default' => true,
              'enabled' => true,
              'link' => true,
              'id' => 'ASSIGNED_USER_ID',
            ),
            6 => 
            array (
              'name' => 'name',
              'label' => 'LBL_NAME',
              'default' => false,
              'enabled' => true,
              'link' => true,
              'width' => '32%',
            ),
            7 => 
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
    ),
  ),
  'subpanel-for-leads' => 
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
              'type' => 'relate',
              'link' => true,
              'default' => true,
              'target_module' => 'mur_client_n_list',
              'target_record_key' => 'account_id_c',
              'label' => 'LBL_ACCOUNT_NAME',
              'enabled' => true,
              'name' => 'account_name',
            ),
            1 => 
            array (
              'type' => 'datetimecombo',
              'default' => true,
              'label' => 'LBL_DATE_CLICK',
              'enabled' => true,
              'name' => 'date_click',
            ),
            2 => 
            array (
              'default' => true,
              'label' => 'LBL_DATE_MODIFIED',
              'enabled' => true,
              'name' => 'date_modified',
              'type' => 'datetime',
            ),
          ),
        ),
      ),
      'type' => 'subpanel-list',
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
      'templateMeta' => 
      array (
        'maxColumns' => '2',
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
          'label' => 'LBL_PANEL_DEFAULT',
          'fields' => 
          array (
            0 => 
            array (
              'name' => 'name',
              'label' => 'LBL_NAME',
              'default' => true,
              'enabled' => true,
              'link' => true,
              'width' => '32',
            ),
            1 => 
            array (
              'name' => 'team_name',
              'label' => 'LBL_TEAM',
              'width' => '9',
              'default' => false,
              'enabled' => true,
            ),
            2 => 
            array (
              'name' => 'assigned_user_name',
              'label' => 'LBL_ASSIGNED_TO_NAME',
              'width' => '9',
              'default' => true,
              'enabled' => true,
              'link' => true,
              'id' => 'ASSIGNED_USER_ID',
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
  '_hash' => '0ce8fceb5527fe344bf20f1cb628257a',
);

