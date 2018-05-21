<?php
// WARNING: The contents of this file are auto-generated.

//Merged from custom/Extension/modules/Leads/Ext/Layoutdefs/mr_consultant_leads_Leads.php

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


//auto-generated file DO NOT EDIT
$layout_defs['Leads']['subpanel_setup']['campaigns']['override_subpanel_name'] = 'Lead_subpanel_campaigns';


//auto-generated file DO NOT EDIT
$layout_defs['Leads']['subpanel_setup']['cl_client_list_leads']['override_subpanel_name'] = 'Lead_subpanel_cl_client_list_leads';


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


//auto-generated file DO NOT EDIT
$layout_defs['Leads']['subpanel_setup']['mu_enquriy_tracker']['override_subpanel_name'] = 'Lead_subpanel_mu_enquriy_tracker';
