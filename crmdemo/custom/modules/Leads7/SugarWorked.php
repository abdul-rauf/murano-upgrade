<?php
$record = $_GET['worked_id'];
$worked = $_GET['worked'];
require_once('modules/Leads/Lead.php');
$lead = new Lead();
$lead->retrieve($record);
$lead->data_updated =$worked;
$lead->Save();
echo 'done';
/*
include("config.php");
$record = $_GET['worked_id'];
$worked = $_GET['worked'];
//if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
$link = mysql_connect($sugar_config['dbconfig']['db_host_name'],$sugar_config['dbconfig']['db_user_name'],$sugar_config['dbconfig']['db_password']);
if($link)
	$sel = mysql_select_db($sugar_config['dbconfig']['db_name'],$link);
echo $sql ="Update `leads` set data_updated = ".$worked." ,date_data_updated = now() ,date_modified = now() where `id` = '".$record."'";
mysql_query("Update `leads` set data_updated = ".$worked." ,date_data_updated = now() ,date_modified = now() where `id` = '".$record."'",$link) or die(mysql_error());

*/
?>