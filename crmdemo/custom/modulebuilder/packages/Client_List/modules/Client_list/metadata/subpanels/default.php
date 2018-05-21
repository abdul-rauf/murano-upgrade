<?php
$module_name='cl_Client_list';
$subpanel_layout = array (
  'top_buttons' => 
  array (
    0 => 
    array (
      'widget_class' => 'SubPanelTopCreateButton',
    ),
    1 => 
    array (
      'widget_class' => 'SubPanelTopSelectButton',
      'popup_module' => 'cl_Client_list',
    ),
  ),
  'where' => '',
  'list_fields' => 
  array (
    'name' => 
    array (
      'vname' => 'LBL_NAME',
      'widget_class' => 'SubPanelDetailViewLink',
      'width' => '45%',
      'default' => true,
    ),
    'client_list' => 
    array (
      'type' => 'enum',
      'default' => true,
      'studio' => 'visible',
      'vname' => 'LBL_CLIENT_LIST',
      'width' => '10%',
    ),
    'date_sent' => 
    array (
      'type' => 'date',
      'vname' => 'LBL_DATE_SENT',
      'width' => '10%',
      'default' => true,
    ),
    'hit_status' => 
    array (
      'type' => 'enum',
      'default' => true,
      'studio' => 'visible',
      'vname' => 'LBL_HIT_STATUS',
      'width' => '10%',
    ),
    'date_modified' => 
    array (
      'vname' => 'LBL_DATE_MODIFIED',
      'width' => '45%',
      'default' => true,
    ),
    'relate_to_leads' => 
    array (
      'type' => 'relate',
      'studio' => 'visible',
      'vname' => 'LBL_RELATE_TO_LEADS',
      'width' => '10%',
      'default' => true,
      'widget_class' => 'SubPanelDetailViewLink',
      'target_module' => 'Leads',
      'target_record_key' => 'lead_id_c',
    ),
    'modified_by_name' => 
    array (
      'type' => 'relate',
      'link' => 'modified_user_link',
      'vname' => 'LBL_MODIFIED_NAME',
      'width' => '10%',
      'default' => true,
      'widget_class' => 'SubPanelDetailViewLink',
      'target_module' => 'Users',
      'target_record_key' => 'modified_user_id',
    ),
    'ticket_size' => 
    array (
      'type' => 'varchar',
      'vname' => 'LBL_TICKET_SIZE',
      'width' => '10%',
      'default' => true,
    ),
    'created_by_name' => 
    array (
      'type' => 'relate',
      'link' => 'created_by_link',
      'vname' => 'LBL_CREATED',
      'width' => '10%',
      'default' => true,
      'widget_class' => 'SubPanelDetailViewLink',
      'target_module' => 'Users',
      'target_record_key' => 'created_by',
    ),
    'continent' => 
    array (
      'type' => 'enum',
      'default' => true,
      'studio' => 'visible',
      'vname' => 'LBL_CONTINENT',
      'width' => '10%',
    ),
    'edit_button' => 
    array (
      'widget_class' => 'SubPanelEditButton',
      'module' => 'cl_Client_list',
      'width' => '4%',
      'default' => true,
    ),
    'remove_button' => 
    array (
      'widget_class' => 'SubPanelRemoveButton',
      'module' => 'cl_Client_list',
      'width' => '5%',
      'default' => true,
    ),
  ),
);