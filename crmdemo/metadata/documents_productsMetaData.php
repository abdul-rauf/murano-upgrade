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
$dictionary["documents_products"] = array (
  'true_relationship_type' => 'many-to-many',
  'relationships' => 
  array (
    'documents_products' => 
    array (
      'lhs_module' => 'Documents',
      'lhs_table' => 'documents',
      'lhs_key' => 'id',
      'rhs_module' => 'Products',
      'rhs_table' => 'products',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'documents_products',
      'join_key_lhs' => 'document_id',
      'join_key_rhs' => 'product_id',
    ),
  ),
  'table' => 'documents_products',
  'fields' => 
  array (
    0 => 
    array (
      'name' => 'id',
      'type' => 'id',
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
      'name' => 'document_id',
      'type' => 'id',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'product_id',
      'type' => 'id',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'documents_productsspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'documents_products_product_id',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'product_id',
        1 => 'document_id',
      ),
    ),
    2 => 
    array (
      'name' => 'documents_products_document_id',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'document_id',
        1 => 'product_id',
      ),
    ),
  ),
);

