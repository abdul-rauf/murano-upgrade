<?php
if(!defined('sugarEntry'))define('sugarEntry', true);
require_once('include/entryPoint.php');
global $db;

ini_set("display_errors",0);
error_reporting(E_ALL);

$now = date('d_M_Y');
$tbl_name='tracker';
$tbl_name_bak=$tbl_name."_".$now;

if(isset($_POST['create_backup'])){
	create_backup($now,$tbl_name,$tbl_name_bak);
}
if(isset($_POST['truncate'])){
	truncate($now,$tbl_name,$tbl_name_bak);
}

function create_backup($now,$tbl_name,$tbl_name_bak) {
    $qry_create= "CREATE TABLE IF NOT EXISTS $tbl_name_bak  LIKE ".$tbl_name; 
    $qry_insert= "INSERT ".$tbl_name_bak." SELECT * FROM ".$tbl_name; 
    echo "<div align='center'>";
    echo "<p style='color:red;'>Going for creating backup table ".$tbl_name_bak."</p><br>";
	$GLOBALS['db']->query($qry_create);
	echo "Table Created<br>";
	echo "<p style='color:red;'>Going for insertion in backup table ".$tbl_name_bak."</p><br>";
	$GLOBALS['db']->query($qry_insert);
	echo "Data Inserted<br>";
	echo "<br><br>";
	echo "<p style='color:blue;'>Truncate Table tracker</p>";
	echo "<form method='post'><input type='submit' class='button' name='truncate' value='Truncate Table Tracker' /></form>";
	echo "</div>";
	exit;
}

function truncate($now,$tbl_name,$tbl_name_bak) {
	echo "<div align='center'>";
	echo "<p style='color:red;'>Going for truncate tracker table</p><br>";
	$qry_truncate= "TRUNCATE ".$tbl_name;
    $GLOBALS['db']->query($qry_truncate);
    echo "Tracker table truncated<br>";
    echo "</div>";
    exit;
}
?>
<div align='center'>
<h3>Create tracker table Backup and truncate tracker table</h3><br>
<p style='color:blue;'>Creating Backup table if not exists - <?php echo $tbl_name_bak; ?></p>
<form method="post">
<input type="submit" class="button" name="create_backup" value="Create Backup Table" />
</form>
</div>










