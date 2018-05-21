<?php
define('sugarEntry', TRUE);  
require_once "SugarSOAP.php";
$soap=new SugarSoap('sugarsoap.wsdl'); // we automatically log in
echo "12";
$result=$soap->getContacts(" contacts.email1<>'' ",5," contacts.last_name desc");
if($result['result_count']>0){ 
    foreach($result['entry_list'] as $record){
        $array= $soap->nameValuePairToSimpleArray($record['name_value_list']);
        echo $array['first_name'] . " " . $array['last_name'] . " - " . $array['email1']. "<br>";              
    }
} else {
    echo "No contacts found";
}  
?>