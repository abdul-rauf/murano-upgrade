<?php
$module_name = 'cl_Client_list';
$viewdefs [$module_name] = 
array (
  'EditView' => 
  array (
    'templateMeta' => 
    array (
      'maxColumns' => '2',
      'widths' => 
      array (
        0 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
        1 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
      ),
      'useTabs' => false,
    ),
    'panels' => 
    array (
      'default' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'client_list',
            'studio' => 'visible',
            'label' => 'LBL_CLIENT_LIST',
          ),
          1 => 
          array (
            'name' => 'date_sent',
            'label' => 'LBL_DATE_SENT',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'hit_status',
            'studio' => 'visible',
            'label' => 'LBL_HIT_STATUS',
          ),
          1 => 
          array (
            'name' => 'continent',
            'studio' => 'visible',
            'label' => 'LBL_CONTINENT',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'ticket_size',
            'label' => 'LBL_TICKET_SIZE',
          ),
          1 => 'name',
        ),
      ),
    ),
  ),
);
?>
