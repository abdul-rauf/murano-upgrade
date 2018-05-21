<?php
// created: 2015-01-11 07:07:58
$viewdefs['Opportunities']['EditView'] = array (
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
    'javascript' => '{$PROBABILITY_SCRIPT}',
    'useTabs' => false,
    'tabDefs' => 
    array (
      'DEFAULT' => 
      array (
        'newTab' => false,
        'panelDefault' => 'expanded',
      ),
      'LBL_PANEL_ASSIGNMENT' => 
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
        0 => 
        array (
          'name' => 'name',
        ),
        1 => 
        array (
          'name' => 'account_name',
          'label' => 'LBL_ACCOUNT_NAME',
        ),
      ),
      1 => 
      array (
        0 => 
        array (
          'name' => 'currency_id',
          'label' => 'LBL_CURRENCY',
        ),
        1 => 
        array (
          'name' => 'date_closed',
        ),
      ),
      2 => 
      array (
        0 => 
        array (
          'name' => 'amount',
        ),
        1 => 
        array (
          'name' => 'opportunity_type',
          'comment' => 'Type of opportunity (ex: Existing, New)',
          'label' => 'LBL_TYPE',
        ),
      ),
      3 => 
      array (
        0 => 
        array (
          'name' => 'sales_stage',
          'comment' => 'Indication of progression towards closure',
          'label' => 'LBL_SALES_STAGE',
        ),
        1 => 
        array (
          'name' => 'lead_source',
          'comment' => 'Source of the opportunity',
          'label' => 'LBL_LEAD_SOURCE',
        ),
      ),
      4 => 
      array (
        0 => 
        array (
          'name' => 'probability',
          'comment' => 'The probability of closure',
          'label' => 'LBL_PROBABILITY',
        ),
        1 => 
        array (
          'name' => 'campaign_name',
          'label' => 'LBL_CAMPAIGN',
        ),
      ),
      5 => 
      array (
        0 => 
        array (
          'name' => 'next_step',
          'comment' => 'The next step in the sales process',
          'label' => 'LBL_NEXT_STEP',
        ),
      ),
      6 => 
      array (
        0 => 
        array (
          'name' => 'description',
          'comment' => 'Full text of the note',
          'label' => 'LBL_DESCRIPTION',
        ),
      ),
    ),
    'LBL_PANEL_ASSIGNMENT' => 
    array (
      0 => 
      array (
        0 => 
        array (
          'name' => 'assigned_user_name',
          'label' => 'LBL_ASSIGNED_TO_NAME',
        ),
        1 => 
        array (
          'name' => 'team_name',
        ),
      ),
    ),
  ),
);