<?php
global $db;

		$cl_sql ='select id from mur_group_client_tasks where deleted =0';

		$cl_row = $db->query($cl_sql);
		
while($cl_res = $db->fetchByAssoc($cl_row)){

		echo $client_name ="select group_concat(name) as name from mur_group_client_tasks mg inner join  mur_group_client_tasks_leads_1_c mgc on mg.id =mgc.mur_group_client_tasks_leads_1mur_group_client_tasks_ida  where mur_group_client_tasks_leads_1leads_idb ='".$cl_res['id']."' AND mg.deleted =0 AND mgc.deleted =0 GROUP BY mur_group_client_tasks_leads_1leads_idb  ";
		echo '<hr/>';
		$client_row = $db->query($client_name);
		$client_res = $db->fetchByAssoc($client_row);
}

		//$fin_sql ="update leads set inv_groups ='".$client_res['name']."' where id ='".$arguments['related_id']."'";
		//	$db->query($fin_sql);


?>