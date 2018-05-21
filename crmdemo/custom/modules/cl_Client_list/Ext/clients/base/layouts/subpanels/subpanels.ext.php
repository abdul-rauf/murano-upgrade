<?php
// WARNING: The contents of this file are auto-generated.


// created: 2015-02-22 18:55:25
$viewdefs['cl_Client_list']['base']['layout']['subpanels']['components'][] = array (
  'label' => 'LBL_CL_CLIENT_LIST_ACCOUNTS_FROM_ACCOUNTS_TITLE',
  'context' => 
  array (
    'link' => 'cl_client_list_accounts',
  ),
  'layout' => 'subpanel',
);

// created: 2015-02-22 18:55:25
$viewdefs['cl_Client_list']['base']['layout']['subpanels']['components'][] = array (
  'label' => 'LBL_CL_CLIENT_LIST_CONTACTS_FROM_CONTACTS_TITLE',
  'context' => 
  array (
    'link' => 'cl_client_list_contacts',
  ),
  'layout' => 'subpanel',
);

// created: 2015-02-22 18:55:25
$viewdefs['cl_Client_list']['base']['layout']['subpanels']['components'][] = array (
  'label' => 'LBL_CL_CLIENT_LIST_LEADS_FROM_LEADS_TITLE',
  'context' => 
  array (
    'link' => 'cl_client_list_leads',
  ),
  'layout' => 'subpanel',
);

// created: 2015-02-22 18:55:25
$viewdefs['cl_Client_list']['base']['layout']['subpanels']['components'][] = array (
  'override_subpanel_list_view' => 
  array (
    'view' => 'subpanel-cl_client_list_subpanel_cl_client_list_leads',
    'link' => 'cl_client_list_leads',
  ),
);