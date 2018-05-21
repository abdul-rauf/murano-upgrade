<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*********************************************************************************
 * By installing or using this file, you are confirming on behalf of the entity
 * subscribed to the SugarCRM Inc. product ("Company") that Company is bound by
 * the SugarCRM Inc. Master Subscription Agreement (“MSA”), which is viewable at:
 * http://www.sugarcrm.com/master-subscription-agreement
 *
 * If Company is not bound by the MSA, then by installing or using this file
 * you are agreeing unconditionally that Company will be bound by the MSA and
 * certifying that you have authority to bind Company accordingly.
 *
 * Copyright (C) 2004-2013 SugarCRM Inc.  All rights reserved.
 ********************************************************************************/

$viewdefs['Bugs']['editview'] = array (
  'templateMeta' =>
  array (
    'maxColumns' => '2',
    'widths' => array(
                    array('label' => '10', 'field' => '30'),
                    array('label' => '10', 'field' => '30')
                    ),
    'formId' => 'BugEditView',
    'formName' => 'BugEditView',
    'hiddenInputs' =>
    array (
      'module' => 'Bugs',
      'returnmodule' => 'Bugs',
      'returnaction' => 'DetailView',
      'action' => 'Save',
    ),
    'hiddenFields' => array(
	    array (
           'name'=>'portal_viewable',
           'operator'=>'=',
           'value'=>'1',
	    ),
    ),
  ),
  'data' => array(
     array ('priority','status'),
     array ('source','product_category'),
     array ('resolution'),
     array (array ('field' => 'name', 'displayParams' => array('size' => 60))),
     array (array ('field' => 'description', 'displayParams' => array ('rows' => '15', 'cols' => '100'))),
     array (array ('field' => 'work_log', 'displayParams' => array ('rows' => '15', 'cols' => '100'))),
  )
);
?>
