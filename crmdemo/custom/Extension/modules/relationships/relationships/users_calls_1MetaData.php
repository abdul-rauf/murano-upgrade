<?php
// created: 2018-06-13 14:43:30
$dictionary['users_calls_1'] = array (
  'true_relationship_type' => 'one-to-many',
  'from_studio' => true,
  'relationships' => 
  array (
    'users_calls_1' => 
    array (
      'lhs_module' => 'Users',
      'lhs_table' => 'users',
      'lhs_key' => 'id',
      'rhs_module' => 'Calls',
      'rhs_table' => 'calls',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'users_calls_1_c',
      'join_key_lhs' => 'users_calls_1users_ida',
      'join_key_rhs' => 'users_calls_1calls_idb',
    ),
  ),
  'table' => 'users_calls_1_c',
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
    'users_calls_1users_ida' => 
    array (
      'name' => 'users_calls_1users_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    'users_calls_1calls_idb' => 
    array (
      'name' => 'users_calls_1calls_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'users_calls_1spk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'users_calls_1_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'users_calls_1users_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'users_calls_1_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'users_calls_1calls_idb',
      ),
    ),
  ),
);