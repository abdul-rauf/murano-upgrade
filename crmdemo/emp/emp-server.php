<?php
/*$link = mysql_connect("localhost", "root", "");
if($link)
{
$sel = mysql_select_db("testing",$link);
}*/
function getEmpInfo($emp_id) {
//global $link;
//$res = mysql_query("Select * from Emp where emp_id = ".$emp_id,$link);
//$row = mysql_fetch_assoc($res);
return $emp_id;//"Name: ".$row['emp_name']." Age: ".$row['emp_age']." Designation: ".$row['emp_desg'];
}
ini_set("soap.wsdl_cache_enabled", "0");
$server = new SoapServer("http://www.muranoconnect.com/master/emp/emp.wsdl");
$server->addFunction("getEmpInfo");
$server->handle();
?>  