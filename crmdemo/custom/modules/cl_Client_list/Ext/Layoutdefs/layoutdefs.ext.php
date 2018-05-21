<?php
// WARNING: The contents of this file are auto-generated.

//Merged from custom/Extension/modules/cl_Client_list/Ext/Layoutdefs/cl_client_list_leads_cl_Client_list.php

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

//Merged from custom/Extension/modules/cl_Client_list/Ext/Layoutdefs/cl_client_list_contacts_cl_Client_list.php

 // created: 2012-03-05 19:01:50
$layout_defs["cl_Client_list"]["subpanel_setup"]['cl_client_list_contacts'] = array (
  'order' => 100,
  'module' => 'Contacts',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_CL_CLIENT_LIST_CONTACTS_FROM_CONTACTS_TITLE',
  'get_subpanel_data' => 'cl_client_list_contacts',
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

//Merged from custom/Extension/modules/cl_Client_list/Ext/Layoutdefs/cl_client_list_accounts_cl_Client_list.php

 // created: 2012-03-05 18:59:46
$layout_defs["cl_Client_list"]["subpanel_setup"]['cl_client_list_accounts'] = array (
  'order' => 100,
  'module' => 'Accounts',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_CL_CLIENT_LIST_ACCOUNTS_FROM_ACCOUNTS_TITLE',
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


//auto-generated file DO NOT EDIT
$layout_defs['cl_Client_list']['subpanel_setup']['cl_client_list_leads']['override_subpanel_name'] = 'cl_Client_list_subpanel_cl_client_list_leads';


//auto-generated file DO NOT EDIT
$layout_defs['cl_Client_list']['subpanel_setup']['cl_client_list_leads_1']['override_subpanel_name'] = 'cl_Client_list_subpanel_cl_client_list_leads_1';
