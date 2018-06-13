<?php
// created: 2018-06-13 14:44:00
$viewdefs['Accounts']['mobile']['view']['detail'] = array (
  'templateMeta' => 
  array (
    'maxColumns' => '1',
    'widths' => 
    array (
      0 => 
      array (
        'label' => '10',
        'field' => '30',
      ),
    ),
  ),
  'panels' => 
  array (
    0 => 
    array (
      'label' => 'LBL_PANEL_DEFAULT',
      'fields' => 
      array (
        0 => 'name',
        1 => 'phone_office',
        2 => 
        array (
          'name' => 'website',
          'type' => 'link',
        ),
        3 => 'email1',
        4 => 'assigned_user_name',
        5 => 'team_name',
      ),
    ),
  ),
);