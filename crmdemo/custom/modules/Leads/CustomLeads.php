<?php


require_once "modules/Leads/Lead.php";

Class CustomLeads extends Lead{
	
		function create_new_list_query($order_by, $where,$filter=array(),$params=array(), $show_deleted = 0,$join_type='', $return_array = false, $parentbean = null, $singleSelect = false){
		
			$ret_array = parent::create_new_list_query($order_by, $where, $filter, $params, $show_deleted, $join_type, true, $parentbean, $singleSelect);
			if(strpos($ret_array['order_by'],'leads_cstm.last_spoke_c ASC')){
			 $ret_array['order_by'] =str_replace('leads_cstm.last_spoke_c ASC','leads_cstm.last_spoke_c DESC',$ret_array['order_by']);

			}
			else{
			 $ret_array['order_by'] =str_replace('leads_cstm.last_spoke_c DESC','leads_cstm.last_spoke_c asc',$ret_array['order_by']);
			}

			if ( !$return_array )
				return  $ret_array['select'] . $ret_array['from'] . $ret_array['where']. $ret_array['order_by'];
			return $ret_array;
		}
	}
