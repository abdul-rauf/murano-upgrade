<?php

class save_changes{

	function update_fld($bean,$event,$arguments){
		if(($bean->status_c=='approved' && $bean->fetched_row['status_c']!='approved') || 
		($bean->status_c=='rejected' && $bean->fetched_row['status_c']!='rejected') ){
			$ts =date('Y-m-d H:i:s');
			$bean->status_changed_c=$ts;
		}
	}
	function update_lead($bean,$event,$arguments){
		global $db;
		$sql ="update leads_cstm set go_on_web_c =0 where id_c ='".$bean->lead_id_c."'";
		$db->query($sql);

	}
	
	
	function update_last_spoke_date($bean,$event,$arguments){
		global $db;
		
		if($bean->lead_id_c){
     
    
	echo $sql="select first_name,last_name,last_spoke_c,description from leads inner join leads_cstm on leads_cstm.id_c = leads.id where leads_cstm.id_c ='".$bean->lead_id_c."' ";			
     $result = $db->query($sql);
      $row =$db->fetchByAssoc($result);
     $bean->last_spoke_c =$row['last_spoke_c'];
$bean->description =$row['description'];
$name = $row['first_name']." ".$row['last_name'];
echo $sql2 =" update mur_approval_managment set name = '".$name."',description='".$row['description']."' where id='".$bean->id."'";

$sql3 =" update mur_approval_managment_cstm set last_spoke_c = '".$row['last_spoke_c']."' where id_c='".$bean->id."'"; 
$db->query($sql2);
// $db->query($sql2);
    	}
    	//print_r($bean);	
	}
	
	
	
	
	
}
?>
