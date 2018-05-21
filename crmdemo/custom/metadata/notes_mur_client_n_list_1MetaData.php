<?php
// created: 2016-01-19 11:43:11
$dictionary["notes_mur_client_n_list_1"] = array (
  'true_relationship_type' => 'many-to-many',
  'from_studio' => true,
  'relationships' => 
  array (
    'notes_mur_client_n_list_1' => 
    array (
      'lhs_module' => 'Notes',
      'lhs_table' => 'notes',
      'lhs_key' => 'id',
      'rhs_module' => 'mur_client_n_list',
      'rhs_table' => 'mur_client_n_list',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'notes_mur_client_n_list_1_c',
      'join_key_lhs' => 'notes_mur_client_n_list_1notes_ida',
      'join_key_rhs' => 'notes_mur_client_n_list_1mur_client_n_list_idb',
    ),
  ),
  'table' => 'notes_mur_client_n_list_1_c',
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
      'name' => 'notes_mur_client_n_list_1notes_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'notes_mur_client_n_list_1mur_client_n_list_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'notes_mur_client_n_list_1spk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'notes_mur_client_n_list_1_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'notes_mur_client_n_list_1notes_ida',
        1 => 'notes_mur_client_n_list_1mur_client_n_list_idb',
      ),
    ),
  ),
);