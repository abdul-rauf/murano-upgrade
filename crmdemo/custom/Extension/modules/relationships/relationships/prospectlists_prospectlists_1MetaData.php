<?php
// created: 2015-11-25 11:41:10
$dictionary["prospectlists_prospectlists_1"] = array (
  'true_relationship_type' => 'many-to-many',
  'from_studio' => true,
  'relationships' => 
  array (
    'prospectlists_prospectlists_1' => 
    array (
      'lhs_module' => 'ProspectLists',
      'lhs_table' => 'prospect_lists',
      'lhs_key' => 'id',
      'rhs_module' => 'ProspectLists',
      'rhs_table' => 'prospect_lists',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'prospectlists_prospectlists_1_c',
      'join_key_lhs' => 'prospectlists_prospectlists_1prospectlists_ida',
      'join_key_rhs' => 'prospectlists_prospectlists_1prospectlists_idb',
    ),
  ),
  'table' => 'prospectlists_prospectlists_1_c',
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
      'name' => 'prospectlists_prospectlists_1prospectlists_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'prospectlists_prospectlists_1prospectlists_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'prospectlists_prospectlists_1spk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'prospectlists_prospectlists_1_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'prospectlists_prospectlists_1prospectlists_ida',
        1 => 'prospectlists_prospectlists_1prospectlists_idb',
      ),
    ),
  ),
);