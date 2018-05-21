<?php
// created: 2015-02-22 18:55:25
$viewdefs['mu_Enquriy_Tracker']['base']['view']['subpanel-for-leads'] = array (
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
);