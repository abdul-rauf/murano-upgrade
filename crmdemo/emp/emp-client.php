<?php
    $client = new SoapClient("http://www.muranoconnect.com/master/emp/emp.wsdl");
    $emp_id=$_GET['emp_id'];
    $response = $client->getEmpInfo($emp_id);
    echo "Information for Emp_Id: ".$emp_id."<br/>".$response;
?>
