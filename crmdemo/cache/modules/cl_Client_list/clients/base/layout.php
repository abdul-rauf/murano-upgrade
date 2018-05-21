<?php
$clientCache['cl_Client_list']['base']['layout'] = array (
  'subpanels' => 
  array (
    'meta' => 
    array (
      'components' => 
      array (
        0 => 
        array (
          'label' => 'LBL_CL_CLIENT_LIST_ACCOUNTS_FROM_ACCOUNTS_TITLE',
          'context' => 
          array (
            'link' => 'cl_client_list_accounts',
          ),
          'layout' => 'subpanel',
        ),
        1 => 
        array (
          'label' => 'LBL_CL_CLIENT_LIST_CONTACTS_FROM_CONTACTS_TITLE',
          'context' => 
          array (
            'link' => 'cl_client_list_contacts',
          ),
          'layout' => 'subpanel',
        ),
        2 => 
        array (
          'label' => 'LBL_CL_CLIENT_LIST_LEADS_FROM_LEADS_TITLE',
          'context' => 
          array (
            'link' => 'cl_client_list_leads',
          ),
          'layout' => 'subpanel',
          'override_subpanel_list_view' => 'subpanel-cl_client_list_subpanel_cl_client_list_leads',
        ),
      ),
    ),
  ),
  '_hash' => '7af246a93c300e90a1a7227cda8ce94f',
);

