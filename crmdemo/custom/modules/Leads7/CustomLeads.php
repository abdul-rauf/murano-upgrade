<?php


require_once "modules/Leads/Lead.php";

Class CustomLeads extends Lead{
	
		function create_new_list_query($order_by, $where,$filter=array(),$params=array(), $show_deleted = 0,$join_type='', $return_array = false, $parentbean = null, $singleSelect = false){
		
			$ret_array = parent::create_new_list_query($order_by, $where, $filter, $params, $show_deleted, $join_type, true, $parentbean, $singleSelect);

//echo $ret_array['order_by'] =str_replace('leads_cstmlast_spoke_c','leads_cstm.last_spoke_c',$ret_array['order_by']);
			if ( !$return_array )
				return  $ret_array['select'] . $ret_array['from'] . $ret_array['where']. $ret_array['order_by'];
			return $ret_array;
		}
	}
