<?php
 // created: 2017-11-23 11:10:41
$layout_defs["Leads"]["subpanel_setup"]['rt_sorting_leads'] = array (
  'order' => 100,
  'module' => 'rt_sorting',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_RT_SORTING_LEADS_FROM_RT_SORTING_TITLE',
  'get_subpanel_data' => 'rt_sorting_leads',
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
