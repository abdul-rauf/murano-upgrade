<?php
 if(!defined('sugarEntry'))define('sugarEntry', true);
/*********************************************************************************
 * SugarCRM Community Edition is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2012 SugarCRM Inc.
 * 
 * This program is free software; you can redistribute it and/or modify it under
 * the terms of the GNU Affero General Public License version 3 as published by the
 * Free Software Foundation with the addition of the following permission added
 * to Section 15 as permitted in Section 7(a): FOR ANY PART OF THE COVERED WORK
 * IN WHICH THE COPYRIGHT IS OWNED BY SUGARCRM, SUGARCRM DISCLAIMS THE WARRANTY
 * OF NON INFRINGEMENT OF THIRD PARTY RIGHTS.
 * 
 * This program is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE.  See the GNU Affero General Public License for more
 * details.
 * 
 * You should have received a copy of the GNU Affero General Public License along with
 * this program; if not, see http://www.gnu.org/licenses or write to the Free
 * Software Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA
 * 02110-1301 USA.
 * 
 * You can contact SugarCRM, Inc. headquarters at 10050 North Wolfe Road,
 * SW2-130, Cupertino, CA 95014, USA. or at email address contact@sugarcrm.com.
 * 
 * The interactive user interfaces in modified source and object code versions
 * of this program must display Appropriate Legal Notices, as required under
 * Section 5 of the GNU Affero General Public License version 3.
 * 
 * In accordance with Section 7(b) of the GNU Affero General Public License version 3,
 * these Appropriate Legal Notices must retain the display of the "Powered by
 * SugarCRM" logo. If the display of the logo is not reasonably feasible for
 * technical reasons, the Appropriate Legal Notices must display the words
 * "Powered by SugarCRM".
 ********************************************************************************/
ini_set('display_errors','0');
error_reporting(E_ALL);
//print_r($_POST);
global $db;
 require_once 'custom/modules/Contacts/notify_users.php';
require_once 'modules/mu_Enquriy_Tracker/mu_Enquriy_Tracker.php';

$n_form = new notification_form();

$id = create_guid();


require_once 'modules/Leads/Lead.php';
$lead = new Lead;
$lead->retrieve($_POST['from']);

require_once 'modules/mur_client_n_list/mur_client_n_list.php';
$acc =new mur_client_n_list;
$acc->retrieve($_POST['to_hidden']);


//$n_form->send_lead_notifications($_POST['from'],$_POST['to_hidden'],$id,'58487f61-bac5-1286-ad45-51dbd7c67d48',$_POST['object'],1,$lead);
$n_form->send_lead_notifications($_POST['from'],$_POST['to_hidden'],$id,'13b7aa9e-b7df-7d02-4aa9-52407ecce4ce',$_POST['object'],1,$lead,$acc);

$tracker = new mu_Enquriy_Tracker;
$tracker->new_with_id = 1;
$tracker->id = $id;
$tracker->lead_id_c = $_POST['from'];
$tracker->account_id_c = $_POST['to_hidden'];
$tracker->Save();

echo "Email Sent Successfully";echo '<br/>';
echo '<a href="index.php?module=Leads&action=DetailView&record='.$_POST['from'].'">click here</a> for Lead';
?>