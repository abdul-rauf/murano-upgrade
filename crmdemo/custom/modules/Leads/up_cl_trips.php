<?php
global $db;

		echo $client_name ="select group_concat(t3.name) as nm,t3.lead from (select * from (select mg.name,mg.id,mur_group_client_tasks_leads_1leads_idb as lead,mur_group_client_tasks_leads_1mur_group_client_tasks_ida from mur_group_client_tasks mg inner join  mur_group_client_tasks_leads_1_c mgc on mg.id =mgc.mur_group_client_tasks_leads_1mur_group_client_tasks_ida  where  mg.deleted =0 AND mgc.deleted =0  ) as t1  group by t1.id,lead) t3 group by t3.lead  ";
		echo '<hr/>';
		$client_row = $db->query($client_name);
		
while($cl_res = $db->fetchByAssoc($client_row)){

		$client_res[] =$cl_res;
		echo $sql ="update leads set inv_groups ='".$cl_res['nm']."' where id ='".$cl_res['lead']."'";
		echo '<hr/>';
		$db->query($sql);
}
echo '<pre>';
print_r($client_res);
		//$fin_sql ="update leads set inv_groups ='".$client_res['name']."' where id ='".$arguments['related_id']."'";
		//	$db->query($fin_sql);


?>