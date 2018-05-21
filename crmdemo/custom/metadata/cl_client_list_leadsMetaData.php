<?php
// created: 2012-03-05 15:22:36
$dictionary["cl_client_list_leads"] = array (
  'relationships' => 
  array (
    'cl_client_list_leads' => 
    array (
      'lhs_module' => 'cl_Client_list',
      'lhs_table' => 'cl_client_list',
      'lhs_key' => 'id',
      'rhs_module' => 'Leads',
      'rhs_table' => 'leads',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'cl_client_list_leads_c',
      'join_key_lhs' => 'cl_client_2c69nt_list_ida',
      'join_key_rhs' => 'cl_client_b14ddsleads_idb',
    ),
  ),
  'table' => 'cl_client_list_leads_c',
  'fields' => 
  array (
    0 => 
    array (
      'name' => 'id',
      'type' => 'varchar',
      'len' => 36,
    ),
    1 => 
    array (
      'name' => 'date_modified',
      'type' => 'datetime',
    ),
    2 => 
    array (
      'name' => 'deleted',
      'type' => 'bool',
      'len' => '1',
      'default' => '0',
      'required' => true,
    ),
    3 => 
    array (
      'name' => 'cl_client_2c69nt_list_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'cl_client_b14ddsleads_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'cl_client_list_leadsspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'cl_client_list_leads_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'cl_client_2c69nt_list_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'cl_client_list_leads_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'cl_client_b14ddsleads_idb',
      ),
    ),
  ),
);