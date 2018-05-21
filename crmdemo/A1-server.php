<?php
$connectionId = mysql_connect("79.170.40.163","web163-master","sugaruk1");
if($connectionId)
{
$sel = mysql_select_db("web163-master",$connectionId);
}
function getA1Info() {
	global $connectionId;
      $result = mysql_query("SELECT * FROM `leads` where data_updated = 1", $connectionId); 
      $users = array(); 

   while ($row = mysql_fetch_assoc($result)) {
		array_push($users, $row); 
      } 
	return serialize($users);
}
ini_set("soap.wsdl_cache_enabled", "0");
$server = new SoapServer("A1.wsdl");
$server->addFunction("getA1Info");
$server->handle();
?>