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
$connectionId = mysql_connect("79.170.40.163","web163-croogo","croogo!@#");
if($connectionId)
	{
		$sel = mysql_select_db("web163-croogo",$connectionId);
      $result = mysql_query("SELECT `LEAD_First_Name`, `LEAD_Last_Name`, `LEAD_Title`, `LEAD_Account_Name`, `LEAD_Phone_Work`, `LEAD_Phone_Mobile`, `LEAD_Phone_Fax`, `LEAD_Assistant`, `LEAD_Assistant_Phone`, `LEAD_Alternatename_C`, `LEAD_Alternatelastname_C`, `LEAD_Alternatetitle_C`, `LEAD_Phone_Other`, `LEAD_Website`, `LEAD_Email_Address`, `LEAD_Primary_Address_Street`, `LEAD_Primary_Address_City`, `LEAD_Primary_Address_State`, `LEAD_Primary_Address_Postalcode`, `LEAD_Primary_Address_Country`, `LEAD_Alt_Address_Street`, `LEAD_Alt_Address_City`, `LEAD_Alt_Address_State`, `LEAD_Alt_Address_Postalcode`, `LEAD_Alt_Address_Country`, `LEAD_Company_Description`, `LEAD_Notes_C`, `LEAD_Investment_Description`, `LEAD_Newslinks_C`, `LEAD_Allocating_C`, `LEAD_Alloc_FoHFs_C`, `LEAD_FuM`, `LEAD_Peralloc_Hf_C`, `LEAD_Fum_Curr1_C`, `LEAD_Typ_Invest_C`, `LEAD_General_Strategy_Preferences`, `LEAD_Loc_Pref_C`, `LEAD_Spec_Strat_Pref_C`, `LEAD_Vol_Pref_C`, `LEAD_Investor_Typ_C`, `LEAD_Investment_Geography_C`, `LEAD_Min_Track_C`, `LEAD_Targ_Return_C`, `LEAD_Req_Aum_C`, `LEAD_Pref_Liquid_C`, `LEAD_Investment_Allocation_Details` FROM `users` where id = '1'", $connectionId); 
		$row = mysql_fetch_assoc($result);
		foreach($row as $key => $value)
		{
			if($value == 1)
				$fields[$key] = $value;
		}
	}
	if(!defined('sugarEntry'))define('sugarEntry', true);  // allow this file as an entry point   
	//require_once('include/nusoap/nusoap.php'); //use the nusoap library 
	
	//define the SOAP Client and point to the SOAP Server  
	//$client = new nusoapclient('http://perfectapartners.com/crm/soap.php?wsdl',true);
	
	// Create a session by passing a valid user name and password (password = hashed version stored in users->user_hash table)  
	// User must not be portal_only  
	//$client->call('create_session', array('user_name'=>'Ole', 'password'=>'51e037c12655f042448ca4e31f8be7ba'));  
	// the test function returns a string that you send it  
	//echo "User List Output: <br/>"; 
	//$users = $client->call('echoString', array('inputString'=>'Ole'));
$connectionId = mysql_connect("79.170.40.163","web163-master","sugaruk1");
if($connectionId)
	{
		$sel = mysql_select_db("web163-master",$connectionId);
      $result = mysql_query("SELECT leads.*, leads_cstm.* FROM `leads` inner join `leads_cstm` on leads.id = leads_cstm.id_c where data_updated = 1", $connectionId); 
      $users = array(); 

   while ($row = mysql_fetch_assoc($result)) {
		array_push($users, $row); 
      } 
      mysql_close($connectionId); 
	}
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
	
	// End the session  
	//$client->call('end_session', array('user_name'=>'soap'));
	//kill the client 
	unset($client);
if($_REQUEST['syncdata']!="")
{
include("config.php");
$dblink = mysql_connect("79.170.44.136","web136-sugarcr-1","UGzdUF/Qs");//("localhost","root","");
if($dblink)
	$sel = mysql_select_db("web136-sugarcr-1",$dblink);//("sugar",$dblink);
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