<?php
 // created: 2012-04-23 07:14:20
$layout_defs["Leads"]["subpanel_setup"]['cl_client_list_leads'] = array (
  'order' => 100,
  'module' => 'cl_Client_list',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_LEADS_ASH_AA_FROM_ASH_AA_TITLE',
  'get_subpanel_data' => 'cl_client_list_leads',
  'top_buttons' => 
  array (
    0 => 
    array (
      'widget_class' => 'SubPanelTopCreateButton',
    ),
    1 => 
    array (
      'widget_class' => 'SubPanelTopSelectButton',
      'mode' => 'MultiSelect',
    ),
  ),
);
