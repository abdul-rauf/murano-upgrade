<?php 
class save_clients {
 
    function save_clients_id($bean, $event, $arguments){
		if($bean->no_dup ==1)
			return false;
//$bean->load_relationships('ash_bb_ash_aa');
$bean->client_drop_c = str_replace('^','',$bean->client_drop_c);
$x =explode(',',$bean->client_drop_c);

 $bean->mur_client_n_list_id_c =$x[0];
$c = $x[0];
		foreach($x as $y){
		if($y == $c){
		continue;
		}
		$new_bean = new cl_Client_list();
		$new_bean->no_dup =1;
		//$new_bean->name =$bean->name;
		//$new_bean->load_relationships('ash_bb_ash_aa');
		$new_bean->mur_client_n_list_id_c =$y;
		$new_bean->date_send_c =$bean->date_send_c;

		//$new_bean->ash_bb_ash_aa->add($y);
		$new_bean->Save();
		}
		$new_bean->no_dup =0;
	}
	function save_name_value(&$bean, $event, $arguments){
	global $db;

 $sql ="SELECT name from mur_client_n_list t1 inner join cl_client_list_cstm t2 on t1.id=t2.mur_client_n_list_id_c where t2.id_c ='".$bean->id."'";
	$row =$db->query($sql);
	$res =$db->fetchByAssoc($row);
	 $bean->client_list = $res['name'];
	 $bean->name = $res['name'];
	}
}
?>