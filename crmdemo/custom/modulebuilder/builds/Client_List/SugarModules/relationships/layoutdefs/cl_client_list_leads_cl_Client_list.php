<?php
 // created: 2012-03-05 15:22:36
$layout_defs["cl_Client_list"]["subpanel_setup"]['cl_client_list_leads'] = array (
  'order' => 100,
  'module' => 'Leads',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_CL_CLIENT_LIST_LEADS_FROM_LEADS_TITLE',
  'get_subpanel_data' => 'cl_client_list_leads',
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
