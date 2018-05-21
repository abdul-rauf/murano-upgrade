<?php
$module_name = 'mur_client_n_list';
$viewdefs[$module_name] = 
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
      'syncDetailEditViews' => true,
      'tabDefs' => 
      array (
        'DEFAULT' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
      ),
    ),
    'panels' => 
    array (
      'default' => 
      array (
        0 => 
        array (
          0 => 'name',
          1 => 
          array (
            'name' => 'fund_manager_c',
            'label' => 'LBL_FUND_MANAGER',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'fund_type_c',
            'label' => 'LBL_FUND_TYPE',
          ),
          1 => 
          array (
            'name' => 'liquidity_c',
            'label' => 'LBL_LIQUIDITY',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'fund_aum_c',
            'label' => 'LBL_FUND_AUM',
          ),
          1 => 
          array (
            'name' => 'firm_aum_c',
            'label' => 'LBL_FIRM_AUM',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'legal_structure_c',
            'label' => 'LBL_LEGAL_STRUCTURE',
          ),
          1 => 
          array (
            'name' => 'track_record_c',
            'label' => 'LBL_TRACK_RECORD',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'email_address_c',
            'label' => 'LBL_EMAIL_ADDRESS',
          ),
          1 => 
          array (
            'name' => 'continent',
            'studio' => 'visible',
            'label' => 'LBL_CONTINENT',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'sent_counter_c',
            'label' => 'LBL_SENT_COUNTER',
          ),
          1 => 
          array (
            'name' => 'password',
            'studio' => 'visible',
            'label' => 'Password',
          ),
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'active_on_portal',
            'comment' => 'Status of the lead',
            'label' => 'Active On Portal',
          ),
        ),
      ),
    ),
  ),
);
