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
/*
 * Created on Aug 14, 2007
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
$object_name = strtolower($object_name);
 $app_list_strings = array (

  $object_name.'_type_dom' =>
  array (
  	'Administration' => 'Administration',
    'Product' => 'Producto',
    'User' => 'Usuario',
  ),
   $object_name.'_status_dom' =>
  array (
    'New' => 'Nuevo',
    'Assigned' => 'Asignado',
    'Closed' => 'Cerrado',
    'Pending Input' => 'Pendiente de Información',
    'Rejected' => 'Rechazado',
    'Duplicate' => 'Duplicar',
  ),
  $object_name.'_priority_dom' =>
  array (
    'P1' => 'Alta',
    'P2' => 'Media',
    'P3' => 'Baja',
  ),
  $object_name.'_resolution_dom' =>
  array (
  	'' => '',
  	'Accepted' => 'Aceptado',
    'Duplicate' => 'Duplicar',
    'Closed' => 'Cerrado',
    'Out of Date' => 'Fuera de Fecha',
    'Invalid' => 'Inválido',
  ),
  );
?>
