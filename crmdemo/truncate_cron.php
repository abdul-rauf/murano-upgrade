<?php

define('PATH',dirname(__FILE__));

include PATH."/config.php";
$dbConfig = $sugar_config['dbconfig'];

$host = $dbConfig['db_host_name'];
$username = $dbConfig['db_user_name'];
$password = $dbConfig['db_password'];
$database = $dbConfig['db_name']; 
/*This portion of the code will create a MySQL connection that will connect to the database.*/
$server = mysql_connect($host, $username, $password) or
die(mysql_error());
mysql_select_db($database,$server);

$conn = new PDO("mysql:host=".$dbConfig['db_host_name'].";dbname=".$dbConfig['db_name']."", $dbConfig['db_user_name'], $dbConfig['db_password']);

$now = date('d_M_Y');
$tbl_name='tracker';
$tbl_name_bak=$tbl_name."_".$now;

create_backup();

function create_backup() {
	global $now,$tbl_name,$tbl_name_bak,$conn;
	//create and insertion part
    $qry_create= "CREATE TABLE IF NOT EXISTS $tbl_name_bak  LIKE ".$tbl_name; 
    $qry_insert= "INSERT ".$tbl_name_bak." SELECT * FROM ".$tbl_name; 
    echo "Going for creating backup table ".$tbl_name_bak."\n";
	$conn->query($qry_create);
	echo "Going for insertion in backup table ".$tbl_name_bak."\n";
	$conn->query($qry_insert);
	
	//truncate part
	truncate_table();
}

function truncate_table() {
	global $now,$tbl_name,$tbl_name_bak,$conn;
	echo "Going for truncate tracker table\n";
	$qry_truncate= "TRUNCATE ".$tbl_name;
    $conn->query($qry_truncate);
    echo "Tracker table truncated\n";
}
