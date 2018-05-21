<?php
// WARNING: The contents of this file are auto-generated.

//Merged from custom/Extension/modules/Meetings/Ext/Layoutdefs/calls_meetings_Meetings.php

// created: 2011-02-17 12:24:34
$layout_defs["Meetings"]["subpanel_setup"]["calls_meetings"] = array (
  'order' => 100,
  'module' => 'Calls',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_CALLS_MEETINGS_FROM_CALLS_TITLE',
  'get_subpanel_data' => 'calls_meetings',
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
