<?php
// created: 2015-02-22 18:55:24
$viewdefs['CampaignLog']['base']['view']['subpanel-for-leads'] = array (
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
          'target_record_key' => 'campaign_id',
          'target_module' => 'Campaigns',
          'default' => true,
          'label' => 'LBL_LIST_CAMPAIGN_NAME',
          'enabled' => true,
          'name' => 'campaign_name1',
          'link' => true,
          'type' => 'relate',
        ),
        1 => 
        array (
          'default' => true,
          'label' => 'LBL_ACTIVITY_TYPE',
          'enabled' => true,
          'name' => 'activity_type',
          'type' => 'enum',
        ),
        2 => 
        array (
          'type' => 'int',
          'default' => true,
          'label' => 'LBL_HITS',
          'enabled' => true,
          'name' => 'hits',
        ),
        3 => 
        array (
          'default' => true,
          'label' => 'LBL_ACTIVITY_DATE',
          'enabled' => true,
          'name' => 'activity_date',
          'type' => 'datetime',
        ),
        4 => 
        array (
          'target_record_key' => 'related_id',
          'sortable' => false,
          'default' => true,
          'label' => 'LBL_RELATED',
          'enabled' => true,
          'name' => 'related_name',
          'link' => true,
          'type' => 'function',
        ),
      ),
    ),
  ),
  'type' => 'subpanel-list',
);