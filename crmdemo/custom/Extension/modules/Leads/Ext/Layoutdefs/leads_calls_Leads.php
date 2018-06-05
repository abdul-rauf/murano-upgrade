<?php
$layout_defs["Leads"]["subpanel_setup"]['calls_leads'] = array (
  'order' => 50,
  'module' => 'Calls',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_CALLS_LOGS_LEADS_FROM_CALLS_TITLE',
  'get_subpanel_data' => 'calls',
  'top_buttons' => 
  array (
    0 => 
    array (
      'widget_class' => 'SubPanelTopButtonQuickCreate',
    ),
    1 => array (
      'widget_class' => 'SubPanelTopSelectButton',
      'mode' => 'MultiSelect',
    ),
  ),
);

unset($layout_defs["Leads"]["subpanel_setup"]['activities']['collection_list']['calls']);
unset($layout_defs["Leads"]["subpanel_setup"]['activities']['collection_list']['oldcalls']);
unset($layout_defs["Leads"]["subpanel_setup"]['history']['collection_list']['calls']);
unset($layout_defs["Leads"]["subpanel_setup"]['history']['collection_list']['oldcalls']);
