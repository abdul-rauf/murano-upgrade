<?php
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


/**
 * ContactsViewContactAddressPopup
 * 
 * */

require_once('include/MVC/View/views/view.detail.php');
require_once('modules/Tasks/Task.php');

require_once('modules/mur_group_client_tasks/mur_group_client_tasks.php');


ini_set('display_errors','0');
error_reporting(E_ALL);

class LeadsViewgroup_task extends ViewDetail {
	    var $options = array('show_header' => true, 'show_title' => true, 'show_subpanels' => false, 'show_search' => true, 'show_footer' => true, 'show_javascript' => true, 'view_print' => false,);

 	function LeadsViewgroup_task(){
 		parent::ViewDetail();
 	}
 	
 	function process() {
		//$this->display();
parent::process();
 	}

 	function display() {
		global $mod_strings,$db,$current_user;
 		$smarty = new Sugar_Smarty();
			/*echo '<pre>'		;
			print_r($_REQUEST);
			echo '</pre>';
			*/
			$now =date('Y-m-d h:m:s');
			$lead_ids =0;
			if($_REQUEST['mass']){
			$lead_ids =implode(",",$_REQUEST['mass']);
			}
			
			if($_REQUEST['submit']){
				$client_id =$_REQUEST['to_hidden'];
				$clnt = new mur_group_client_tasks();
				$clnt->retrieve($client_id);

			$ld =explode(",",$_REQUEST['lead_ids']);
			
				foreach($ld as $lead_id){
					$cnt =0;
				$guid =create_guid();
			 $sql ="insert into mur_group_client_tasks_leads_1_c (id,date_modified,mur_group_client_tasks_leads_1mur_group_client_tasks_ida,
		mur_group_client_tasks_leads_1leads_idb ) values ('".$guid."','".$now."','".$client_id."','".$lead_id."')";
		$db->query($sql);

		$new_sql ="select group_concat(name) as name from mur_group_client_tasks mg inner join  mur_group_client_tasks_leads_1_c mgc on mg.id =mgc.mur_group_client_tasks_leads_1mur_group_client_tasks_ida  where  mg.deleted =0 AND mgc.deleted =0 and mur_group_client_tasks_leads_1leads_idb ='".$lead_id."' GROUP BY mur_group_client_tasks_leads_1leads_idb ";

				$new_row =$db->query($new_sql);
				$new_res =$db->fetchByAssoc($new_row);

				$fin_sql ="update leads set inv_groups ='".$new_res['name']."' where id ='".$lead_id."' ";
				$db->query($fin_sql);

				$tsk = new Task();
				$tsk->date_due =$clnt->task_date;
				$tsk->mur_client_n_list_id_c =$clnt->mur_client_n_list_id_c;
				$tsk->name =$clnt->name;
				$tsk->parent_id =$lead_id;
				$tsk->parent_type ="Leads";
				$tsk->assigned_user_id =$current_user->id;
								$tsk->team_id =$clnt->team_id;
$tsk->team_set_id =$clnt->team_set_id;
				$tsk->Save();
				$cnt++;
				}

				echo "<b>$cnt  Tasks are Created</b>";
			}
			
			
$smarty->assign('id', $this->bean->id);
$smarty->assign('name', $this->bean->name);
$smarty->assign('module', $this->bean->module_dir);
$smarty->assign('object', $this->bean->object_name);
$smarty->assign('lead_ids', $lead_ids);

			$smarty->assign('MOD', $mod_strings);
$smarty->assign('popup_link', '{"call_back_function":"set_return","form_name":"Quick_email","field_to_name_array":{"id":"to_hidden","name":"to"}}');

			if(!$_REQUEST['submit'])
			$smarty->display("custom/modules/tpls/GroupTask.tpl");	
 	}	
}
?>