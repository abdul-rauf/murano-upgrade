<?php
 // created: 2013-01-18 09:00:48
$layout_defs["Leads"]["subpanel_setup"]['mr_consultant_leads'] = array (
  'order' => 100,
  'module' => 'mr_consultant',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_MR_CONSULTANT_LEADS_FROM_MR_CONSULTANT_TITLE',
  'get_subpanel_data' => 'mr_consultant_leads',
  'top_buttons' => 
  array (
    0 => 
    array (
      'widget_class' => 'SubPanelTopButtonQuickCreate',
    ),
    1 => 
    array (
      'widget_class' => 'SubPanelTopSelectButton',
      'mode' => 'MultiSelect',
    ),
  ),
);
