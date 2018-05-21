<?php
 // created: 2015-12-08 10:37:17
$layout_defs["mur_group_client_tasks"]["subpanel_setup"]['mur_group_client_tasks_leads_1'] = array (
  'order' => 100,
  'module' => 'Leads',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_MUR_GROUP_CLIENT_TASKS_LEADS_1_FROM_LEADS_TITLE',
  'get_subpanel_data' => 'mur_group_client_tasks_leads_1',
  'top_buttons' => 
  array (
    0 => 
    array (
      'widget_class' => 'SubPanelTopSelectButton',
      'mode' => 'MultiSelect',
    ),
    1 => 
    array (
      'widget_class' => 'SubPanelTopButtonQuickCreate',
    ),
  ),
);
