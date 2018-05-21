<?php
/*
 * Your installation or use of this SugarCRM file is subject to the applicable
 * terms available at
 * http://support.sugarcrm.com/06_Customer_Center/10_Master_Subscription_Agreements/.
 * If you do not agree to all of the applicable terms or do not have the
 * authority to bind the entity as an authorized representative, then do not
 * install or use this SugarCRM file.
 *
 * Copyright (C) SugarCRM Inc. All rights reserved.
 */
$relationships = array (
  'mur_group_client_tasks_favorite' => 
  array (
    'id' => 'c7328d38-8fdf-0425-b80a-56655d9b3bad',
    'relationship_name' => 'mur_group_client_tasks_favorite',
    'lhs_module' => 'mur_group_client_tasks',
    'lhs_table' => 'mur_group_client_tasks',
    'lhs_key' => 'id',
    'rhs_module' => 'Users',
    'rhs_table' => 'users',
    'rhs_key' => 'id',
    'join_table' => 'sugarfavorites',
    'join_key_lhs' => 'record_id',
    'join_key_rhs' => 'modified_user_id',
    'relationship_type' => 'many-to-many',
    'relationship_role_column' => 'module',
    'relationship_role_column_value' => 'mur_group_client_tasks',
    'reverse' => '0',
    'deleted' => '0',
    'lhs_vname' => NULL,
    'rhs_vname' => NULL,
    'readonly' => true,
    'rhs_subpanel' => NULL,
    'lhs_subpanel' => NULL,
    'relationship_only' => false,
    'for_activities' => false,
    'is_custom' => false,
    'from_studio' => false,
  ),
  'mur_group_client_tasks_following' => 
  array (
    'id' => 'c90fb17e-4e6e-b3bc-2cab-56655dc42963',
    'relationship_name' => 'mur_group_client_tasks_following',
    'lhs_module' => 'mur_group_client_tasks',
    'lhs_table' => 'mur_group_client_tasks',
    'lhs_key' => 'id',
    'rhs_module' => 'Users',
    'rhs_table' => 'users',
    'rhs_key' => 'id',
    'join_table' => 'subscriptions',
    'join_key_lhs' => 'parent_id',
    'join_key_rhs' => 'created_by',
    'relationship_type' => 'many-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'mur_group_client_tasks',
    'reverse' => '0',
    'deleted' => '0',
    'lhs_vname' => NULL,
    'rhs_vname' => NULL,
    'readonly' => true,
    'rhs_subpanel' => NULL,
    'lhs_subpanel' => NULL,
    'relationship_only' => false,
    'for_activities' => false,
    'is_custom' => false,
    'from_studio' => false,
  ),
  'mur_group_client_tasks_modified_user' => 
  array (
    'id' => 'caf62325-9a98-7dc7-dbfc-56655da3c826',
    'relationship_name' => 'mur_group_client_tasks_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'mur_group_client_tasks',
    'rhs_table' => 'mur_group_client_tasks',
    'rhs_key' => 'modified_user_id',
    'join_table' => NULL,
    'join_key_lhs' => NULL,
    'join_key_rhs' => NULL,
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => NULL,
    'relationship_role_column_value' => NULL,
    'reverse' => '0',
    'deleted' => '0',
    'lhs_vname' => NULL,
    'rhs_vname' => NULL,
    'readonly' => true,
    'rhs_subpanel' => NULL,
    'lhs_subpanel' => NULL,
    'relationship_only' => false,
    'for_activities' => false,
    'is_custom' => false,
    'from_studio' => false,
  ),
  'mur_group_client_tasks_created_by' => 
  array (
    'id' => 'cce4ad48-c75f-b0aa-b8e7-56655d39f1a0',
    'relationship_name' => 'mur_group_client_tasks_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'mur_group_client_tasks',
    'rhs_table' => 'mur_group_client_tasks',
    'rhs_key' => 'created_by',
    'join_table' => NULL,
    'join_key_lhs' => NULL,
    'join_key_rhs' => NULL,
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => NULL,
    'relationship_role_column_value' => NULL,
    'reverse' => '0',
    'deleted' => '0',
    'lhs_vname' => NULL,
    'rhs_vname' => NULL,
    'readonly' => true,
    'rhs_subpanel' => NULL,
    'lhs_subpanel' => NULL,
    'relationship_only' => false,
    'for_activities' => false,
    'is_custom' => false,
    'from_studio' => false,
  ),
  'mur_group_client_tasks_activities' => 
  array (
    'id' => 'cef2d5aa-53b4-b652-a93a-56655d3c3bee',
    'relationship_name' => 'mur_group_client_tasks_activities',
    'lhs_module' => 'mur_group_client_tasks',
    'lhs_table' => 'mur_group_client_tasks',
    'lhs_key' => 'id',
    'rhs_module' => 'Activities',
    'rhs_table' => 'activities',
    'rhs_key' => 'id',
    'join_table' => 'activities_users',
    'join_key_lhs' => 'parent_id',
    'join_key_rhs' => 'activity_id',
    'relationship_type' => 'many-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'mur_group_client_tasks',
    'reverse' => '0',
    'deleted' => '0',
    'lhs_vname' => NULL,
    'rhs_vname' => 'LBL_ACTIVITY_STREAM',
    'readonly' => true,
    'rhs_subpanel' => NULL,
    'lhs_subpanel' => NULL,
    'relationship_only' => false,
    'for_activities' => false,
    'is_custom' => false,
    'from_studio' => false,
  ),
  'mur_group_client_tasks_assigned_user' => 
  array (
    'id' => 'd697bc89-d75b-20a8-47af-56655d8ab9c2',
    'relationship_name' => 'mur_group_client_tasks_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'mur_group_client_tasks',
    'rhs_table' => 'mur_group_client_tasks',
    'rhs_key' => 'assigned_user_id',
    'join_table' => NULL,
    'join_key_lhs' => NULL,
    'join_key_rhs' => NULL,
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => NULL,
    'relationship_role_column_value' => NULL,
    'reverse' => '0',
    'deleted' => '0',
    'lhs_vname' => NULL,
    'rhs_vname' => NULL,
    'readonly' => true,
    'rhs_subpanel' => NULL,
    'lhs_subpanel' => NULL,
    'relationship_only' => false,
    'for_activities' => false,
    'is_custom' => false,
    'from_studio' => false,
  ),
  'mur_group_client_tasks_leads_1' => 
  array (
    'rhs_label' => 'Leads',
    'lhs_label' => 'Investor Group Tasks',
    'lhs_subpanel' => 'default',
    'rhs_subpanel' => 'default',
    'lhs_module' => 'mur_group_client_tasks',
    'rhs_module' => 'Leads',
    'relationship_type' => 'many-to-many',
    'readonly' => true,
    'deleted' => false,
    'relationship_only' => false,
    'for_activities' => false,
    'is_custom' => false,
    'from_studio' => true,
    'relationship_name' => 'mur_group_client_tasks_leads_1',
  ),
);