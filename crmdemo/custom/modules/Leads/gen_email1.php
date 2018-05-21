<?php
echo 'ashish123';

echo $sql = "select id from leads where deleted =0 order by date_modified desc limit 20000,10000";
global $db;
$row =$db->query($sql);
while($res = $db->fetchByAssoc($row)){
echo '<br/>';
 $q = "SELECT ea.email_address as email FROM email_addresses ea
                LEFT JOIN email_addr_bean_rel ear ON ea.id = ear.email_address_id
                WHERE ear.bean_module = 'Leads'
                AND ear.bean_id = '".$res['id']."'
                AND ear.deleted = 0
                AND ea.invalid_email = 0
                ORDER BY ear.primary_address DESC";
				$row1 =$db->query($q);
				$res1 =$db->fetchByAssoc($row1);
				echo '<br/>';
echo				$sql ="update leads set email1_new ='".$res1['email']."' where id='".$res['id']."'";
				$db->query($sql);
				echo $x++;
				echo '<br/>';
	
}


?>