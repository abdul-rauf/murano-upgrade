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

//Merged from custom/Extension/modules/Leads/Ext/Layoutdefs/new_sub.php


$layout_defs['Leads']['subpanel_setup']['mu_enquriy_tracker'] =
        array('order' => 149,
            'module' => 'mu_Enquriy_Tracker',
            'subpanel_name' => 'default',
            'get_subpanel_data' => 'function:get_closed_lost_closed_won_opportunities',
			'sort_order' => 'desc',
			'sort_by' => 'date_click',
            'generate_select' => true,
            'title_key' => 'Enquiry Tracker',
            'top_buttons' => array(),
            'function_parameters' => array(
                'import_function_file' => 'custom/modules/Leads/customEnquirySubpanel.php',
           //     'sales_stage' => 'Closed Lost',
                'campaign_id' => $_REQUEST['record'],
                'return_as_array' => 'true'
            ),
);


//Merged from custom/Extension/modules/Leads/Ext/Layoutdefs/mur_group_client_tasks_leads_1_Leads.php

 // created: 2015-12-08 10:37:17
$layout_defs["Leads"]["subpanel_setup"]['mur_group_client_tasks_leads_1'] = array (
  'order' => 100,
  'module' => 'mur_group_client_tasks',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_MUR_GROUP_CLIENT_TASKS_LEADS_1_FROM_MUR_GROUP_CLIENT_TASKS_TITLE',
  'get_subpanel_data' => 'mur_group_client_tasks_leads_1',
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

//Merged from custom/Extension/modules/Leads/Ext/Layoutdefs/rt_sorting_leads_Leads.php

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


//auto-generated file DO NOT EDIT
$layout_defs['Leads']['subpanel_setup']['rt_sorting_leads']['override_subpanel_name'] = 'Lead_subpanel_rt_sorting_leads';
