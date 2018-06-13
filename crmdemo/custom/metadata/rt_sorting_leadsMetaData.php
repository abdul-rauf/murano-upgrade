<?php
// created: 2018-06-13 14:43:30
$dictionary['rt_sorting_leads'] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    'rt_sorting_leads' => 
    array (
      'lhs_module' => 'Leads',
      'lhs_table' => 'leads',
      'lhs_key' => 'id',
      'rhs_module' => 'rt_sorting',
      'rhs_table' => 'rt_sorting',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'rt_sorting_leads_c',
      'join_key_lhs' => 'rt_sorting_leadsleads_ida',
      'join_key_rhs' => 'rt_sorting_leadsrt_sorting_idb',
    ),
  ),
  'table' => 'rt_sorting_leads_c',
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
    'rt_sorting_leadsleads_ida' => 
    array (
      'name' => 'rt_sorting_leadsleads_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    'rt_sorting_leadsrt_sorting_idb' => 
    array (
      'name' => 'rt_sorting_leadsrt_sorting_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'rt_sorting_leadsspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'rt_sorting_leads_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'rt_sorting_leadsleads_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'rt_sorting_leads_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'rt_sorting_leadsrt_sorting_idb',
      ),
    ),
  ),
);