<?php
// created: 2015-02-22 18:55:25
$viewdefs['cl_Client_list']['base']['view']['subpanel-list'] = array (
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
          'default' => true,
          'enabled' => true,
          'name' => 'client_list',
          'link' => true,
          'type' => 'enum',
        ),
        1 => 
        array (
          'label' => 'Hit Status',
          'default' => true,
          'enabled' => true,
          'name' => 'hit_status',
          'link' => true,
          'type' => 'enum',
        ),
        2 => 
        array (
          'label' => 'Date Sent',
          'default' => true,
          'enabled' => true,
          'name' => 'date_sent',
          'link' => true,
          'type' => 'date',
        ),
        3 => 
        array (
          'label' => 'LBL_DATE_MODIFIED',
          'default' => true,
          'enabled' => true,
          'name' => 'date_modified',
          'type' => 'datetime',
        ),
      ),
    ),
  ),
  'type' => 'subpanel-list',
);