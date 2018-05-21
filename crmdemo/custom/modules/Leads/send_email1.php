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
global $db,$timedate;

$now =$timedate->nowDb();
require_once 'modules/mu_Enquriy_Tracker/mu_Enquriy_Tracker.php';
require_once 'modules/Leads/Lead.php';
$tracker = new mu_Enquriy_Tracker;
$tracker->retrieve_by_string_fields(array('id'=>$_REQUEST['id']));



if($tracker->status =='Active'){
require_once 'modules/mur_client_n_list/mur_client_n_list.php';
$acc =new mur_client_n_list;
$acc->retrieve_by_string_fields(array('id'=>$tracker->account_id_c));
$acc->sent_counter_c =$acc->sent_counter_c +1;
$acc->Save();
$lead = new Lead;
$lead->retrieve_by_string_fields(array('id'=>$tracker->lead_id_c));



$tracker->status='Clicked';
$tracker->date_click = $now;
$tracker->Save();
require_once 'custom/modules/Contacts/notify_users.php';

$n_form = new notification_form();
//$n_form->send_lead_notifications($tracker->lead_id_c,$tracker->account_id_c,$_REQUEST['id'],'82f4056c-27cb-61bf-44d1-51dc05b115b2','mur_client_n_list',0,$acc);
$n_form->send_lead_notifications($tracker->lead_id_c,$tracker->account_id_c,$_REQUEST['id'],'a6a8a689-8241-28d5-0144-5240638f96d2','mur_client_n_list',0,$acc,$lead);
echo 'Email Sent';
}
else{
echo 'Email was already clicked';
die();
}
?>