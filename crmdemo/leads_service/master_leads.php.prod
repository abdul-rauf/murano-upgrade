<?php
$host = "allcrminstances.ccecxxqsq6ze.eu-west-1.rds.amazonaws.com";
$username = "SugarMUser";
$password = "N0T37x60[80370k";
$dbname = "master_crm";

$conn=mysqli_connect($host,$username,$password,$dbname);

echo "Creating leads_connecta table in master crm if not exists\n";
mysqli_query($conn,"CREATE TABLE  IF NOT EXISTS leads_connecta LIKE leads");

echo "Creating leads_cstm_connecta table in master crm if not exists\n";
mysqli_query($conn,"CREATE TABLE  IF NOT EXISTS leads_cstm_connecta LIKE leads_cstm");

echo "Going for truncate leads_connecta -master crm\n";
mysqli_query($conn,"truncate table leads_connecta");

echo "Going for truncate leads_cstm_connecta-master crm\n";
mysqli_query($conn,"truncate table leads_cstm_connecta");

echo "Going for insertion from leads in process records to leads_connecta -master crm\n";
mysqli_query($conn,"INSERT INTO leads_connecta select * from leads where status = 'In Process' and deleted=0");

echo "Going for insertion of  leads_cstm with in process id to leads_cstm_connecta-master crm\n";
mysqli_query($conn,"INSERT INTO leads_cstm_connecta select * from leads_cstm where id_c in (select leads_cstm.id_c from leads inner join leads_cstm on leads.id=leads_cstm.id_c where leads.status='In Process' and leads.deleted=0 )");

echo "Going for add account_name1 column in leads_connecta table in master crm\n";
mysqli_query($conn,"ALTER TABLE leads_connecta ADD account_name1 VARCHAR( 255 ) NULL DEFAULT NULL");
?>
