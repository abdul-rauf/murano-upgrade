<?php
global $db;

		echo $sql ="SELECT group_concat(pl.name) as nm,leads.id FROM leads LEFT JOIN  `prospect_lists_prospects` plp ON leads.id = plp.related_id
				LEFT JOIN prospect_lists pl ON plp.prospect_list_id = pl.id WHERE  pl.deleted =0 and plp.deleted =0
				and leads.deleted =0
				group by leads.id
				";
				$row =$db->query($sql);
	
		
while($cl_res = $db->fetchByAssoc($row)){

		$client_res[] =$cl_res;
		echo $sql1 ="update leads set target_links ='".$cl_res['nm']."' where id ='".$cl_res['id']."'";
		echo '<hr/>';
		$db->query($sql1);
}
echo '<pre>';
print_r($client_res);
		//$fin_sql ="update leads set inv_groups ='".$client_res['name']."' where id ='".$arguments['related_id']."'";
		//	$db->query($fin_sql);


?>