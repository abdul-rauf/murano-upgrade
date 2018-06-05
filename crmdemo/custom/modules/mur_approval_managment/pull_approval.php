<?php
die("I was past refreshed on 10th March 2018. Please remove die if you want to use it again . then change this message again.");

global $db;
ini_set('display_errors',1);
error_reporting(E_ALL);
require_once 'modules/mur_approval_managment/mur_approval_managment.php';
require_once 'modules/Leads/Lead.php';

echo $sql="select id,first_name,last_name,last_spoke_c from leads inner join leads_cstm on leads_cstm.id_c = leads.id where leads_cstm.go_on_web_c ='1' and deleted =0 ";			



$row = $db->query($sql);
while($res = $db->fetchByAssoc($row)){
$lead_bean = new Lead();
$lead_bean->retrieve($res[id]);
	echo $find_email ="SELECT   email_address FROM email_addresses  JOIN email_addr_lead_bean_rel eabr 
  ON eabr.email_address_id = email_addresses.id WHERE eabr.lead_bean_module = 'Leads' AND eabr.lead_bean_id = '".$res[id]."'
AND email_addresses.invalid_email = 0 AND eabr.deleted = 0 AND eabr.primary_address = 1  ";
$email_row =$db->query($find_email);

$res_email = $db->fetchByAssoc($email_row);

	$name = $res['first_name']." ".$res['last_name'];
$app = new mur_approval_managment();

$app->status_c ='approved';


$app->lead_id_c = $res['id'];
$app->email_c = $res_email['email_address'];

$app->weekly_investor_updates=$lead_bean->weekly_investor_updates_c;
					
					
						
						$app->name =$lead_bean->name;
						$app->lead_id_c =$lead_bean->id;
						$app->email_c =$lead_bean->email1;
						

						$app->account_name =$lead_bean->account_name;
						 $app->first_name =$lead_bean->first_name;
						 $app->last_name=$lead_bean->last_name;
						

						$app->investor_type =$lead_bean->investor_typ_c;
						$app->primary_address_street =$lead_bean->primary_address_street;
						$app->primary_address_state=$lead_bean->primary_address_state;

						$app->primary_address_city =$lead_bean->city;
						$app->primary_address_country =$lead_bean->primary_address_country;
						$app->phone_work=$lead_bean->phone_work;

						$app->assistant_phone =$lead_bean->assistant_phone;
						$app->primary_address_country =$lead_bean->primary_address_country;
						$app->phone_work=$lead_bean->phone_work;
						$app->assigned_user_id=$lead_bean->assigned_user_id;
						$app->last_spoke_c=$lead_bean->last_spoke_c;
						$app->Save();


}






?>