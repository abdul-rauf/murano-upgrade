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

require_once('modules/mr_consultant/mr_consultant.php');


class SaveConsultant  {

    function Save($bean, $event, $arguments){

		if(isset($_REQUEST['number_con'])){
			for($i=0;$i<=$_REQUEST['number_con'];$i++){
			$con_value ='Leads0Consultants'.$i;
				if(isset($_REQUEST[$con_value]) && !empty($_REQUEST[$con_value])){
				$con_bean = new mr_consultant();
				$guid = create_guid();
				$con_bean->new_with_id =1;
				$con_bean->id =$guid;
				$con_bean->name =$_REQUEST[$con_value];
				$con_bean->Save();
				}		 
			}
		}
    }

		function updateConnecta($bean, $event, $arguments){
	
			if($bean->fetched_row['data_updated'] == 1 && $bean->data_updated !=1){
			$con =mysql_connect('79.170.44.155','web155-a-suga-6','FR7dywUH!') or sugar_upgrade_die(mysql_error());
			mysql_select_db('web155-a-suga-6');
			$sql ="delete from leads where id ='".$bean->id."'";
			$row =mysql_query($sql,$con);
			mysql_close($con);
			}
		}
			function updateConDelete($bean, $event, $arguments){
			$con =mysql_connect('79.170.44.155','web155-a-suga-6','FR7dywUH!') or sugar_upgrade_die(mysql_error());
			mysql_select_db('web155-a-suga-6');
			$sql ="delete from leads where id ='".$bean->id."'";
			$row =mysql_query($sql,$con);
			mysql_close($con);
			}
			function SaveSource($bean, $event, $arguments){
				if(isset($bean->lead_source_description_cp)){
				$bean->lead_source_description=	$bean->lead_source_description_cp ;
				}
				if(isset($bean->lead_source_cp)){
				$bean->lead_source=$bean->lead_source_cp ;
				}

				if($bean->status=='In Process'){
					$bean->data_updated =1;
				}
				else{
				$bean->data_updated =0;
				}
			}
			function save_approval($bean, $event, $arguments){
				require_once 'modules/mur_approval_managment/mur_approval_managment.php';
					global $db,$current_user;
					$sql ="select * from mur_approval_managment ma inner join mur_approval_managment_cstm mac on ma.id =mac.id_c where ma.deleted =0 and mac.lead_id_c= '".$bean->id."'";
					$row =$db->query($sql);
					$res =$db->fetchByAssoc($row);

					if($bean->go_on_web_c){
					$app = New mur_approval_managment();
					if($res){
						$app->retrieve($res['id']);
					}
					$app->name =$bean->name;
					$app->lead_id_c =$bean->id;
					$app->email_c =$bean->email1;
					$app->weekly_investor_updates=$bean->weekly_investor_updates_c;

					$app->account_name =$bean->account_name;
					$app->first_name =$bean->first_name;
					$app->last_name=$bean->last_name;

					$app->investor_type =$bean->investor_typ_c;
					$app->primary_address_street =$bean->primary_address_street;
					$app->primary_address_state=$bean->primary_address_state;

					$app->primary_address_city =$bean->city;
					$app->primary_address_country =$bean->primary_address_country;
					$app->phone_work=$bean->phone_work;

					$app->assistant_phone =$bean->assistant_phone;
					$app->primary_address_country =$bean->primary_address_country;
					$app->phone_work=$bean->phone_work;
					
					$app->Save();

					}

		
			}
}
?>
