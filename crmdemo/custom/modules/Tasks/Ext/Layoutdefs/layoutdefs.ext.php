<?php
// WARNING: The contents of this file are auto-generated.

//Merged from custom/Extension/modules/Tasks/Ext/Layoutdefs/prospectlists_tasks_1_Tasks.php

 // created: 2015-11-25 11:15:44
$layout_defs["Tasks"]["subpanel_setup"]['prospectlists_tasks_1'] = array (
  'order' => 100,
  'module' => 'ProspectLists',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_PROSPECTLISTS_TASKS_1_FROM_PROSPECTLISTS_TITLE',
  'get_subpanel_data' => 'prospectlists_tasks_1',
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


//auto-generated file DO NOT EDIT
$layout_defs['Tasks']['subpanel_setup']['prospectlists_tasks_1']['override_subpanel_name'] = 'Task_subpanel_prospectlists_tasks_1';
