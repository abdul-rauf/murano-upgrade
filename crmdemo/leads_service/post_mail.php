<?php
$host = "allcrminstances.ccecxxqsq6ze.eu-west-1.rds.amazonaws.com";
$username = "SugarMUser";
$password = "N0T37x60[80370k";
$dbname = "master_crm";

$conn=mysqli_connect($host,$username,$password,$dbname);

//function call for mail sent after cron job run
mail_sent($conn);

function mail_sent($conn){
	$qry =mysqli_query($conn,"select count(*) as cnt from leads where status = 'In Process' and deleted=0");
	$res =mysqli_fetch_assoc($qry);
	require '/web/crm/phpmailer/PHPMailerAutoload.php';
 
	$mail = new PHPMailer;
	$mail->isSMTP();
	$mail->Host = 'smtp.gmail.com';
	$mail->SMTPAuth = true;
	$mail->Username = 'upgrade.outright@gmail.com';
	$mail->Password = 'Sugar123#';
	$mail->SMTPSecure = 'auto';
	 
	$mail->From = 'upgradecrm.outright@gmail.com';
	$mail->FromName = 'Testing Team';
	$mail->addAddress('support@outrightcrm.com', 'Testing Team');
    //$mail->AddCC('ashish@outrightcrm.com', 'Ashish Dwivedi');
	$mail->AddCC('chandra@outrightcrm.com', 'chandra Shekhar');
	$mail->WordWrap = 50;
	$mail->isHTML(true);
	 
	$mail->Subject = "Master CRM Leads synchronization with connecta service status";
	$mail->Body    = "Leads having status 'In Process', now sync with connecta crm.<br> ";
	$mail->Body    .= "Count of such leads are- ".$res['cnt'].".<br> ";
	$mail->Body    .= "<h3 style='color:black;'>Steps of synchronization</h3>";
	$mail->Body    .= "<h3 style='color:red;'>Master CRM</h3>";
	$mail->Body    .= "1.Truncate table leads_connecta<br>";
	$mail->Body    .= "2.Truncate table leads_cstm_connecta<br>";
	$mail->Body    .= "3.Leads having status 'In process' are now inserted to leads_connecta from leads table<br>";
	$mail->Body    .= "4.Leads cstm table  having id matched with in-process status lead records id are now inserted to leads_connecta from leads_cstm table<br>";
	$mail->Body    .= "<h3 style='color:red;'>Connecta</h3>";
	$mail->Body    .= "5.leads_connecta table is created through mysqldump<br>";
	$mail->Body    .= "6.Truncate table leads<br>";
	$mail->Body    .= "7.leads_connecta all records are now inserted from leads_connecta to leads table<br>";
	$mail->Body    .= "8.Drop table leads_connecta<br>";
	$mail->Body    .= "9.leads_cstm_connecta table is created through mysqldump<br>";
	$mail->Body    .= "10.Truncate table leads_cstm<br>";
	$mail->Body    .= "11.leads_cstm_connecta all records are now inserted from leads_cstm_connecta to leads_cstm table<br>";
	$mail->Body    .= "12.Drop table leads_cstm_connecta<br>";
	$mail->Body    .= "13.Column account_name1 is updated as equal to account_name in leads table<br>";
	$mail->Body    .= "<i><h3 style='color:blue;'>Here is the synchronization process accomplished.</h3></i>";
	
	if(!$mail->send()) {
	   echo 'Message could not be sent.\n';
	   echo 'Mailer Error: ' . $mail->ErrorInfo.'\n';
	   exit;
	}
   echo "Mail has been sent for service run\n";
 }
?>
