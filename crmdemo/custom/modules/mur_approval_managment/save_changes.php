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
}
?>