<?php
// created: 2013-10-24 15:27:04
$subpanel_layout['list_fields'] = array (
  'account_name' => 
  array (
    'type' => 'relate',
    'studio' => 'visible',
    'vname' => 'LBL_ACCOUNT_NAME',
    'id' => 'ACCOUNT_ID_C',
    'link' => true,
    'width' => '10%',
    'default' => true,
    'widget_class' => 'SubPanelDetailViewLink',
    'target_module' => 'mur_client_n_list',
    'target_record_key' => 'account_id_c',
  ),
  'date_click' => 
  array (
    'type' => 'datetimecombo',
    'vname' => 'LBL_DATE_CLICK',
    'width' => '10%',
    'default' => true,
  ),
  'date_modified' => 
  array (
    'vname' => 'LBL_DATE_MODIFIED',
    'width' => '45%',
    'default' => true,
  ),
  'edit_button' => 
  array (
    'widget_class' => 'SubPanelEditButton',
    'module' => 'mu_Enquriy_Tracker',
    'width' => '4%',
    'default' => true,
  ),
  'remove_button' => 
  array (
    'widget_class' => 'SubPanelRemoveButton',
    'module' => 'mu_Enquriy_Tracker',
    'width' => '5%',
    'default' => true,
  ),
);