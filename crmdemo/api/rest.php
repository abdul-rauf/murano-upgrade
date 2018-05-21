<?php
if(!defined('sugarEntry'))define('sugarEntry', true);
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

ob_start();
chdir(dirname(__FILE__).'/../');
define('ENTRY_POINT_TYPE', 'api');
require('include/entryPoint.php');
require_once("include/api/RestService.php");
SugarAutoLoader::load('custom/include/RestService.php');
$restServiceClass = SugarAutoLoader::customClass('RestService');

global $service;
$service = new $restServiceClass();
$service->execute();

