<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*********************************************************************************
 * The contents of this file are subject to the SugarCRM Master Subscription
 * Agreement ("License") which can be viewed at
 * http://www.sugarcrm.com/crm/master-subscription-agreement
 * By installing or using this file, You have unconditionally agreed to the
 * terms and conditions of the License, and You may not use this file except in
 * compliance with the License.  Under the terms of the license, You shall not,
 * among other things: 1) sublicense, resell, rent, lease, redistribute, assign
 * or otherwise transfer Your rights to the Software, and 2) use the Software
 * for timesharing or service bureau purposes such as hosting the Software for
 * commercial gain and/or for the benefit of a third party.  Use of the Software
 * may be subject to applicable fees and any use of the Software without first
 * paying applicable fees is strictly prohibited.  You do not have the right to
 * remove SugarCRM copyrights from the source code or user interface.
 *
 * All copies of the Covered Code must include on each user interface screen:
 *  (i) the "Powered by SugarCRM" logo and
 *  (ii) the SugarCRM copyright notice
 * in the same form as they appear in the distribution.  See full license for
 * requirements.
 *
 * Your Warranty, Limitations of liability and Indemnity are expressly stated
 * in the License.  Please refer to the License for the specific language
 * governing these rights and limitations under the License.  Portions created
 * by SugarCRM are Copyright (C) 2004-2012 SugarCRM, Inc.; All Rights Reserved.
 ********************************************************************************/




$module_name = 'mur_approval_managment';
$listViewDefs[$module_name] = array(
	'NAME' => array(
		'width' => '10%', 
		'label' => 'LBL_NAME', 
		'default' => true,
        'link' => true),         
	'TEAM_NAME' => array(
		'width' => '9', 
		'label' => 'LBL_TEAM',
        'default' => false),
	'ASSIGNED_USER_NAME' => array(
		'width' => '9', 
		'label' => 'LBL_ASSIGNED_TO_NAME',
		'module' => 'Employees',
        'id' => 'ASSIGNED_USER_ID',
        'default' => true),

		'ACCOUNT_NAME' => 
  array (
    'type' => 'varchar',
    'studio' => 
    array (
      'listview' => true,
    ),
    'label' => 'Account Name',
    'width' => '10%',
    'default' => true,
  ),
   'PRIMARY_ADDRESS_COUNTRY' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_PRIMARY_ADDRESS_COUNTRY',
    'width' => '10%',
    'default' => true,
  ),
  'WEEKLY_INVESTOR_UPDATES' => 
  array (
    'type' => 'text',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_WEEKLY_INVESTOR_UPDATES',
    'sortable' => true,
    'width' => '30%',
  ),
    'STATUS_C' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_STATUS',
    'width' => '10%',
  ),
  'STATUS_CHANGED_C' => 
  array (
    'type' => 'datetimecombo',
    'default' => true,
    'label' => 'LBL_STATUS_CHANGED',
    'width' => '10%',
  ),
  
  
  

  'PRIMARY_ADDRESS_CITY' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_PRIMARY_ADDRESS_CITY',
    'width' => '10%',
    'default' => false,
  ),
 
  'FIRST_NAME' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_FIRST_NAME',
    'width' => '10%',
    'default' => false,
  ),
  'LAST_NAME' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_LAST_NAME',
    'width' => '10%',
    'default' => false,
  ),
  'INVESTOR_TYPE' => 
  array (
    'type' => 'multienum',
    'default' => false,
    'studio' => 'visible',
    'label' => 'LBL_INVESTOR_TYP',
    'width' => '10%',
  ),
  'PHONE_WORK' => 
  array (
    'type' => 'phone',
    'label' => 'LBL_OFFICE_PHONE',
    'width' => '10%',
    'default' => false,
  ),
  'ASSISTANT_PHONE' => 
  array (
    'type' => 'phone',
    'label' => 'LBL_ASSISTANT_PHONE',
    'width' => '10%',
    'default' => false,
  ),
  'EMAIL_C' => 
  array (
    'type' => 'varchar',
    'default' => false,
    'label' => 'LBL_EMAIL',
    'width' => '10%',
  ),
  
  'DATE_SENT' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_DATE_SENT',
    'width' => '10%',
    'default' => false,
  ),
  'HIT_STATUS' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_HIT_SENT',
    'width' => '10%',
    'default' => false,
  ),
   'LAST_SPOKE_C' => 
  array (
    'type' => 'LAST_SPOKE_C',
    'label' => 'Last Spoke Date',
    'width' => '10%',
    'default' => true,
  ),
  'ASSIGNED_USER_NAME' => 
  array (
    'width' => '9%',
    'label' => 'LBL_ASSIGNED_TO_NAME',
    'module' => 'Employees',
    'id' => 'ASSIGNED_USER_ID',
    'default' => true,
  ),
  'DATE_ENTERED' => 
  array (
    'type' => 'datetime',
    'label' => 'LBL_DATE_ENTERED',
    'width' => '10%',
    'default' => true,
  ),
  'DATE_MODIFIED' => 
  array (
    'type' => 'datetime',
    'label' => 'LBL_DATE_MODIFIED',
    'width' => '10%',
    'default' => false,
  ),
  'MODIFIED_BY_NAME' => 
  array (
    'type' => 'relate',
    'link' => false,
    'label' => 'LBL_MODIFIED_NAME',
    'id' => 'MODIFIED_USER_ID',
    'width' => '10%',
    'default' => false,
  ),
  'CREATED_BY_NAME' => 
  array (
    'type' => 'relate',
    'link' => false,
    'label' => 'LBL_CREATED',
    'id' => 'CREATED_BY',
    'width' => '10%',
    'default' => false,
  ),
  
  'TEAM_NAME' => 
  array (
    'width' => '9%',
    'label' => 'LBL_TEAM',
    'default' => false,
  ),
	
);
?>
