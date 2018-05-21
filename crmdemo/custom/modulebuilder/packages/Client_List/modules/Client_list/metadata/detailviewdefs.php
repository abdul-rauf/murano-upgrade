<?php
$module_name = 'cl_Client_list';
$viewdefs [$module_name] = 
array (
  'DetailView' => 
  array (
    'templateMeta' => 
    array (
      'form' => 
      array (
        'buttons' => 
        array (
          0 => 'EDIT',
          1 => 'DUPLICATE',
          2 => 'DELETE',
          3 => 'FIND_DUPLICATES',
        ),
      ),
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
            'name' => 'ticket_size',
            'label' => 'LBL_TICKET_SIZE',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'date_entered',
            'customCode' => '{$fields.date_entered.value} {$APP.LBL_BY} {$fields.created_by_name.value}',
            'label' => 'LBL_DATE_ENTERED',
          ),
          1 => 
          array (
            'name' => 'date_modified',
            'customCode' => '{$fields.date_modified.value} {$APP.LBL_BY} {$fields.modified_by_name.value}',
            'label' => 'LBL_DATE_MODIFIED',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'continent',
            'studio' => 'visible',
            'label' => 'LBL_CONTINENT',
          ),
          1 => 'name',
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'relate_to_leads',
            'studio' => 'visible',
            'label' => 'LBL_RELATE_TO_LEADS',
          ),
          1 => 
          array (
            'name' => 'account_name',
            'label' => 'LBL_ACCOUNT_NAME',
          ),
        ),
      ),
    ),
  ),
);
?>
