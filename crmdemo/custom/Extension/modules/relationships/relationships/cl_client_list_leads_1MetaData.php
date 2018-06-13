<?php
// created: 2018-06-13 14:43:30
$dictionary['cl_client_list_leads_1'] = array (
  'true_relationship_type' => 'many-to-many',
  'from_studio' => true,
  'relationships' => 
  array (
    'cl_client_list_leads_1' => 
    array (
      'lhs_module' => 'cl_Client_list',
      'lhs_table' => 'cl_client_list',
      'lhs_key' => 'id',
      'rhs_module' => 'Leads',
      'rhs_table' => 'leads',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'cl_client_list_leads_1_c',
      'join_key_lhs' => 'cl_client_e022nt_list_ida',
      'join_key_rhs' => 'cl_client_2948_1leads_idb',
    ),
  ),
  'table' => 'cl_client_list_leads_1_c',
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
    'cl_client_e022nt_list_ida' => 
    array (
      'name' => 'cl_client_e022nt_list_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    'cl_client_2948_1leads_idb' => 
    array (
      'name' => 'cl_client_2948_1leads_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'cl_client_list_leads_1spk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'cl_client_list_leads_1_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'cl_client_e022nt_list_ida',
        1 => 'cl_client_2948_1leads_idb',
      ),
    ),
  ),
);