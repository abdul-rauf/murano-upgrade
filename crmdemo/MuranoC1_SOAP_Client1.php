<link href="http://www.perfectapartners.com/crm/cache/themes/Sugar/css/style.css?s=67dae274296e41f8c717edafd4e192b3&c=1" type="text/css" rel="stylesheet">
<script>
function checkall() {
    var theForm = document.frm_sync;
	((theForm.check_all.checked == 0) ? a = 0 : a = 1);
    for (i=0; i<theForm.elements.length; i++) {
        if (theForm.elements[i].name=='myuser[]')
            theForm.elements[i].checked = a;
    }
}
</script>
<?php
    $B1client = new SoapClient("../connceta/B1.wsdl");
    $B1_id=$_GET['B1_id'];
    $fields = $B1client->getB1Info($B1_id);

    $A1client = new SoapClient("../master/A1.wsdl");
    $users = $A1client->getA1Info();

	echo "<form action='' method='post' name='frm_sync'><table id=\"muranosync\" width=\"100%\" class=\"list view\" border='0' cellspacing=\"0\" cellpadding=\"0\"><tr><th><div><input type='checkbox' name='check_all' onclick=\"checkall();\"/></div></th>";
	foreach($fields as $f_key => $f_val)
		echo "<th><div class=\"abc\">".str_replace("_"," ",str_replace("LEAD_","",$f_key))."</div>";
	echo "</th></tr>";
	$i = 0;
	foreach($users as $user)
	{
		echo "<tr class=\"oddListRowS1\" height=\"20\" onmouseover=\"this.style.backgroundColor='#ecf7ff'\" onmouseout=\"this.style.backgroundColor='#fff'\" bgcolor=\"#fff\"><td valign=\"top\" align=\"left\" scope=\"row\"><input type='checkbox' name='myuser[]' value='".$i."'/></td>";
		foreach($fields as $f_key => $f_val)
			if($f_val == 1)echo "<td valign=\"top\" align=\"left\" scope=\"row\"> ".$user[strtolower(str_replace("LEAD_","",$f_key))]." </td>";
		echo "</tr>";
		$i++;
	}
	echo "<tr><td colspan='".(count($fields)+1)."'><input type='submit' name='syncdata' value='Sync'/></td></tr></table></form><br />"; 
	unset($client);

if($_REQUEST['syncdata']!="")
{
include("config.php");
$dblink = mysql_connect("79.170.44.136","web136-sugarcr-1","UGzdUF/Qs");//($sugar_config['dbconfig']['db_host_name'],$sugar_config['dbconfig']['db_user_name'],$sugar_config['dbconfig']['db_password']);
if($dblink)
	$sel = mysql_select_db("web136-sugarcr-1",$dblink);//($sugar_config['dbconfig']['db_name'],$link);
	$j = 0;
	foreach($_REQUEST['myuser'] as $muser)
	{
		$sel_qry = "Select * from `leads` where `id` = '".$users[$muser]['id']."'";
		$sel_res = mysql_query($sel_qry,$dblink);
		$sel_rows = mysql_num_rows($sel_res);
		if($sel_rows > 0)
		{	$qry = "Update `leads` set ";
			foreach($fields as $f_key => $f_val)
				if(($f_val == 1) && ($user[strtolower(str_replace("LEAD_","",$f_key))] != "")) 
					$qry = $qry.strtolower(str_replace("LEAD_","",$f_key)) .' = \''.$users[$muser][strtolower(str_replace("LEAD_","",$f_key))].'\', ';
			$qry = substr_replace($qry, "", -2, 2);	
			$qry = $qry." where `id` = '".$users[$muser]['id']."'";
			$res = mysql_query($qry,$dblink);
			if($res) 
				{$result = true;$j++;}
			else 
				$result = false;
		}
		else 
		{
			$qry = "INSERT INTO `leads` ( `id`, ";	
			foreach($fields as $f_key => $f_val)
				if(($f_val == 1) && ($user[strtolower(str_replace("LEAD_","",$f_key))] != "")) 
					$qry = $qry.'`'.strtolower(str_replace("LEAD_","",$f_key)) .'`, ';
			$qry = substr_replace($qry, "", -2, 2);	
			$qry = $qry." ) VALUES ( '".$users[$muser]['id']."', ";
			foreach($fields as $f_key => $f_val)
				if(($f_val == 1) && ($user[strtolower(str_replace("LEAD_","",$f_key))] != "")) 
					$qry = $qry.'\''.$users[$muser][strtolower(str_replace("LEAD_","",$f_key))] .'\', ';
			$qry = substr_replace($qry, "", -2, 2);	
			$qry = $qry.' )';
			$res1 = mysql_query($qry,$dblink);
			if($res1) 
				{$result = true;$j++;}
			else 
				$result = false;
		}
			if(!$result) echo "<br/>Error for ".$user['id'];
			//echo $qry;
	}
	echo $j." Data Synchronized successfully.";
}
?>