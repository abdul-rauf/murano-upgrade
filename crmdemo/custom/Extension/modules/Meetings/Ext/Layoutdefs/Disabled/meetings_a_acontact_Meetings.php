<?php
// created: 2011-02-17 11:59:40
$layout_defs["Meetings"]["subpanel_setup"]["meetings_a_acontact"] = array (
  'order' => 100,
  'module' => 'A_AContact',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_MEETINGS_A_ACONTACT_FROM_A_ACONTACT_TITLE',
  'get_subpanel_data' => 'meetings_a_acontact',
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
