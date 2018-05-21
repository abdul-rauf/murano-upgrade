<?php
global $db;

$sql ='SELECT leads.assigned_user_id, mu.id
FROM mur_approval_managment mu
INNER JOIN mur_approval_managment_cstm muc ON mu.id = muc.id_c
LEFT JOIN leads ON muc.lead_id_c = leads.id ';

$res =$db->query($sql);
while($row =$db->fetchByAssoc($res)){
	$fin_res[] =$row;
	echo $new_sql ="update mur_approval_managment set assigned_user_id ='".$row['assigned_user_id']."' where id ='".$row['id']."'";
	$db->query($new_sql);
}
echo '<pre>';
print_r($fin_res);