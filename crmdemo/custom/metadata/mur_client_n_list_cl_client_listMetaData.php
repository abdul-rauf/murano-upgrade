<?php
// created: 2012-04-27 06:53:07
$dictionary["mur_client_n_list_cl_client_list"] = array (
  'true_relationship_type' => 'one-to-one',
  'from_studio' => true,
  'relationships' => 
  array (
    'mur_client_n_list_cl_client_list' => 
    array (
      'lhs_module' => 'mur_client_n_list',
      'lhs_table' => 'mur_client_n_list',
      'lhs_key' => 'id',
      'rhs_module' => 'cl_Client_list',
      'rhs_table' => 'cl_client_list',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'mur_client__client_list_c',
      'join_key_lhs' => 'mur_clientd202_n_list_ida',
      'join_key_rhs' => 'mur_client8cf1nt_list_idb',
    ),
  ),
  'table' => 'mur_client__client_list_c',
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
      'name' => 'mur_clientd202_n_list_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'mur_client8cf1nt_list_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'mur_client_cl_client_listspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'mur_client_cl_client_list_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'mur_clientd202_n_list_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'mur_client_cl_client_list_idb2',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'mur_client8cf1nt_list_idb',
      ),
    ),
  ),
);