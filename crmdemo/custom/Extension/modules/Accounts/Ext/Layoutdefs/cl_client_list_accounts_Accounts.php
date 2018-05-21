<?php
 // created: 2012-03-05 18:59:46
$layout_defs["Accounts"]["subpanel_setup"]['cl_client_list_accounts'] = array (
  'order' => 100,
  'module' => 'cl_Client_list',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_CL_CLIENT_LIST_ACCOUNTS_FROM_CL_CLIENT_LIST_TITLE',
  'get_subpanel_data' => 'cl_client_list_accounts',
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
