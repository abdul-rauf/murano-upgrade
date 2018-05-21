<?php
/*********************************************************************************
 * The contents of this file are subject to the SugarCRM Master Subscription
 * Agreement ("License") which can be viewed at
 * http://www.sugarcrm.com/crm/en/msa/master_subscription_agreement_11_April_2011.pdf
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
 * by SugarCRM are Copyright (C) 2004-2011 SugarCRM, Inc.; All Rights Reserved.
 ********************************************************************************/

$dictionary['mur_client_n_list'] = array(
	'table'=>'mur_client_n_list',
	'audited'=>true,
		'duplicate_merge'=>true,
		'fields'=>array (
  'clients' => 
  array (
    'required' => true,
    'name' => 'clients',
    'vname' => 'LBL_CLIENTS',
    'type' => 'enum',
    'massupdate' => 0,
    'default' => 'CSV',
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => false,
    'reportable' => true,
    'calculated' => false,
    'len' => 100,
    'size' => '20',
    'options' => 'Client_list',
    'studio' => 'visible',
    'dependency' => false,
  ),
  'continent' => 
  array (
    'required' => false,
    'name' => 'continent',
    'vname' => 'LBL_CONTINENT',
    'type' => 'enum',
    'massupdate' => 0,
    'default' => 'Europe',
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => false,
    'reportable' => true,
    'calculated' => false,
    'len' => 100,
    'size' => '20',
    'options' => 'Continent',
    'studio' => 'visible',
    'dependency' => false,
  ),
  'password' => 
  array (
    'required' => false,
    'name' => 'password',
    'vname' => 'Password',
    'type' => 'varchar',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => false,
    'reportable' => true,
    'studio' => 'visible',

    'dependency' => false,
  ),
  'full_name' => 
    array (
      'name' => 'full_name',
      'source' => 'non-db',
      'len' => '510',
  ),   
),
	'relationships'=>array (
),
	'optimistic_locking'=>true,
		'unified_search'=>true,
	);
if (!class_exists('VardefManager')){
        require_once('include/SugarObjects/VardefManager.php');
}
VardefManager::createVardef('mur_client_n_list','mur_client_n_list', array('basic','team_security','assignable'));