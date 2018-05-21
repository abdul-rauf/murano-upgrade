<?php
// created: 2012-03-05 15:22:36
$dictionary["Lead"]["fields"]["cl_client_list_leads"] = array (
  'name' => 'cl_client_list_leads',
  'type' => 'link',
  'relationship' => 'cl_client_list_leads',
  'source' => 'non-db',
  'vname' => 'LBL_CL_CLIENT_LIST_LEADS_FROM_CL_CLIENT_LIST_TITLE',
  'id_name' => 'cl_client_2c69nt_list_ida',
);
$dictionary["Lead"]["fields"]["cl_client_list_leads_name"] = array (
  'name' => 'cl_client_list_leads_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_CL_CLIENT_LIST_LEADS_FROM_CL_CLIENT_LIST_TITLE',
  'save' => true,
  'id_name' => 'cl_client_2c69nt_list_ida',
  'link' => 'cl_client_list_leads',
  'table' => 'cl_client_list',
  'module' => 'cl_Client_list',
  'rname' => 'name',
);
$dictionary["Lead"]["fields"]["cl_client_2c69nt_list_ida"] = array (
  'name' => 'cl_client_2c69nt_list_ida',
  'type' => 'link',
  'relationship' => 'cl_client_list_leads',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_CL_CLIENT_LIST_LEADS_FROM_LEADS_TITLE',
);
