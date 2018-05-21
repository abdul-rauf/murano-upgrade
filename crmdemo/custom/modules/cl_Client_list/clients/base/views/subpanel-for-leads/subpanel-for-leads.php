<?php
// created: 2015-02-22 18:55:25
$viewdefs['cl_Client_list']['base']['view']['subpanel-for-leads'] = array (
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
          'default' => true,
          'label' => 'LBL_NAME',
          'enabled' => true,
          'name' => 'client_list',
          'link' => true,
          'type' => 'enum',
        ),
        1 => 
        array (
          'default' => true,
          'label' => 'Hit Status',
          'enabled' => true,
          'name' => 'hit_status',
          'link' => true,
          'type' => 'enum',
        ),
        2 => 
        array (
          'default' => true,
          'label' => 'Date Sent',
          'enabled' => true,
          'name' => 'date_sent',
          'link' => true,
          'type' => 'date',
        ),
        3 => 
        array (
          'default' => true,
          'label' => 'LBL_DATE_MODIFIED',
          'enabled' => true,
          'name' => 'date_modified',
          'type' => 'datetime',
        ),
        4 => 
        array (
          'type' => 'text',
          'sortable' => false,
          'default' => true,
          'label' => 'LBL_DESCRIPTION',
          'enabled' => true,
          'name' => 'description',
        ),
      ),
    ),
  ),
  'type' => 'subpanel-list',
);