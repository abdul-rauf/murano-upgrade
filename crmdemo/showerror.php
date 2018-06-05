<!--
<!DOCTYPE html>
<html>
<head>
	<title>Error Logs</title>
</head>
<body>
	<form method="post">
		Sugar Log Path : <input type="text" name="sugar_log" placeholder="Full Path Required">
		Apache Log Path : <input type="text" name="apache_error_log" placeholder="Full Path Required">
		<input type="submit" name="submit">
	</form>
</body>
</html>
-->


<?php

//ini_set('display_error', 1); error_reporting(E_ALL);

//if( isset($_POST['submit']) && $_POST['sugar_log'] != "" && $_POST['apache_error_log'] != "" ) 
{
	echo 'Current script owner: ' . get_current_user();
	//$sugar_log_path = "tail -n 15 ".$_POST['sugar_log'];
	$sugar_log_path = "tail -n 15 sugarcrm_02_2018.log";
	//$apache_error_log_path = "tail -n 15 ".$_POST['apache_error_log'];
	$apache_error_log_path = "tail -n 15 /var/log/apache2/error.log";
	//echo $sugar_log_path.'<br/>'.$apache_error_log_path.'<br/>';
	$sugar_log = shell_exec($sugar_log_path);
	$apache_error_log = shell_exec($apache_error_log_path);
	//var_dump($apache_error_log);
	echo "<pre>";
	echo "<h3>Sugar_log:</h3>"."<br/>".$sugar_log."<br/><br/><br/>";
	echo "<h3>Apache_error_log:</h3>"."<br/>".$apache_error_log."<br/><br/><br/>";
	echo "<pre/>";
}
?>