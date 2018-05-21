<?php
// created: 2013-01-18 09:00:48
$dictionary["mr_consultant_leads"] = array (
  'true_relationship_type' => 'many-to-many',
  'relationships' => 
  array (
    'mr_consultant_leads' => 
    array (
      'lhs_module' => 'mr_consultant',
      'lhs_table' => 'mr_consultant',
      'lhs_key' => 'id',
      'rhs_module' => 'Leads',
      'rhs_table' => 'leads',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'mr_consultant_leads_c',
      'join_key_lhs' => 'mr_consultant_leadsmr_consultant_ida',
      'join_key_rhs' => 'mr_consultant_leadsleads_idb',
    ),
  ),
  'table' => 'mr_consultant_leads_c',
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
      'name' => 'mr_consultant_leadsmr_consultant_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'mr_consultant_leadsleads_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'mr_consultant_leadsspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'mr_consultant_leads_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'mr_consultant_leadsmr_consultant_ida',
        1 => 'mr_consultant_leadsleads_idb',
      ),
    ),
  ),
);