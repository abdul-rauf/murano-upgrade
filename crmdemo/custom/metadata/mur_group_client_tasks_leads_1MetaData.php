<?php
// created: 2018-06-13 14:43:30
$dictionary['mur_group_client_tasks_leads_1'] = array (
  'true_relationship_type' => 'many-to-many',
  'from_studio' => true,
  'relationships' => 
  array (
    'mur_group_client_tasks_leads_1' => 
    array (
      'lhs_module' => 'mur_group_client_tasks',
      'lhs_table' => 'mur_group_client_tasks',
      'lhs_key' => 'id',
      'rhs_module' => 'Leads',
      'rhs_table' => 'leads',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'mur_group_client_tasks_leads_1_c',
      'join_key_lhs' => 'mur_group_client_tasks_leads_1mur_group_client_tasks_ida',
      'join_key_rhs' => 'mur_group_client_tasks_leads_1leads_idb',
    ),
  ),
  'table' => 'mur_group_client_tasks_leads_1_c',
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
    'mur_group_client_tasks_leads_1mur_group_client_tasks_ida' => 
    array (
      'name' => 'mur_group_client_tasks_leads_1mur_group_client_tasks_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    'mur_group_client_tasks_leads_1leads_idb' => 
    array (
      'name' => 'mur_group_client_tasks_leads_1leads_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'mur_group_client_tasks_leads_1spk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'mur_group_client_tasks_leads_1_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'mur_group_client_tasks_leads_1mur_group_client_tasks_ida',
        1 => 'mur_group_client_tasks_leads_1leads_idb',
      ),
    ),
  ),
);