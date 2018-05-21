<?php
// created: 2017-11-23 11:21:02
$dictionary["rt_client_reporting_mur_client_n_list"] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    'rt_client_reporting_mur_client_n_list' => 
    array (
      'lhs_module' => 'mur_client_n_list',
      'lhs_table' => 'mur_client_n_list',
      'lhs_key' => 'id',
      'rhs_module' => 'rt_client_reporting',
      'rhs_table' => 'rt_client_reporting',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'rt_client_reporting_mur_client_n_list_c',
      'join_key_lhs' => 'rt_client_reporting_mur_client_n_listmur_client_n_list_ida',
      'join_key_rhs' => 'rt_client_reporting_mur_client_n_listrt_client_reporting_idb',
    ),
  ),
  'table' => 'rt_client_reporting_mur_client_n_list_c',
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
      'name' => 'rt_client_reporting_mur_client_n_listmur_client_n_list_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'rt_client_reporting_mur_client_n_listrt_client_reporting_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'rt_client_reporting_mur_client_n_listspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'rt_client_reporting_mur_client_n_list_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'rt_client_reporting_mur_client_n_listmur_client_n_list_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'rt_client_reporting_mur_client_n_list_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'rt_client_reporting_mur_client_n_listrt_client_reporting_idb',
      ),
    ),
  ),
);