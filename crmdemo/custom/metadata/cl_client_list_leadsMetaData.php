<?php
// created: 2018-06-13 14:43:30
$dictionary['cl_client_list_leads'] = array (
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
    'id' => 
    array (
      'name' => 'id',
      'type' => 'varchar',
      'len' => 36,
    ),
    'date_modified' => 
    array (
      'name' => 'date_modified',
      'type' => 'datetime',
    ),
    'deleted' => 
    array (
      'name' => 'deleted',
      'type' => 'bool',
      'len' => '1',
      'default' => '0',
      'required' => true,
    ),
    'cl_client_2c69nt_list_ida' => 
    array (
      'name' => 'cl_client_2c69nt_list_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    'cl_client_b14ddsleads_idb' => 
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