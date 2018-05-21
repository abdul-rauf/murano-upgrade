<?php
// created: 2015-11-25 11:14:54
$dictionary["prospectlists_mur_client_n_list_1"] = array (
  'true_relationship_type' => 'many-to-many',
  'from_studio' => true,
  'relationships' => 
  array (
    'prospectlists_mur_client_n_list_1' => 
    array (
      'lhs_module' => 'ProspectLists',
      'lhs_table' => 'prospect_lists',
      'lhs_key' => 'id',
      'rhs_module' => 'mur_client_n_list',
      'rhs_table' => 'mur_client_n_list',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'prospectlists_mur_client_n_list_1_c',
      'join_key_lhs' => 'prospectlists_mur_client_n_list_1prospectlists_ida',
      'join_key_rhs' => 'prospectlists_mur_client_n_list_1mur_client_n_list_idb',
    ),
  ),
  'table' => 'prospectlists_mur_client_n_list_1_c',
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
      'name' => 'prospectlists_mur_client_n_list_1prospectlists_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'prospectlists_mur_client_n_list_1mur_client_n_list_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'prospectlists_mur_client_n_list_1spk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'prospectlists_mur_client_n_list_1_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'prospectlists_mur_client_n_list_1prospectlists_ida',
        1 => 'prospectlists_mur_client_n_list_1mur_client_n_list_idb',
      ),
    ),
  ),
);