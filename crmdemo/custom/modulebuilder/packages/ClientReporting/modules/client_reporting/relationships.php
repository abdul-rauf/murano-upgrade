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
  'rt_client_reporting_mur_client_n_list' => 
  array (
    'rhs_label' => 'Clients List',
    'lhs_label' => 'Client Reporting',
    'lhs_subpanel' => 'default',
    'lhs_module' => 'rt_client_reporting',
    'rhs_module' => 'mur_client_n_list',
    'relationship_type' => 'many-to-one',
    'readonly' => false,
    'deleted' => false,
    'relationship_only' => false,
    'for_activities' => false,
    'is_custom' => false,
    'from_studio' => false,
    'relationship_name' => 'rt_client_reporting_mur_client_n_list',
  ),
);