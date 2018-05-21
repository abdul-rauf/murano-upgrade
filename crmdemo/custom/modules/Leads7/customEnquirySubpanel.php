<?php 
function get_closed_lost_closed_won_opportunities($params) {
	
	global $db;
	  $args = func_get_args();
$bean = $GLOBALS['app']->controller->bean;
    $lead_id = $args[0]['campaign_id'];
	
    $return_array['select'] = "SELECT accounts.*";
    $return_array['from'] = " FROM accounts ";
   $return_array['where'] = " WHERE  lead_id_c = '" . $lead_id . "' and mu_enquriy_tracker.deleted =0 ";
  // $return_array['join'] = " INNER JOIN accounts_opportunities ON accounts_opportunities.opportunity_id = opportunities.id AND accounts_opportunities.deleted = '0' INNER JOIN accounts ON accounts.id = accounts_opportunities.account_id AND accounts.deleted = '0' AND accounts.id = '" . $accountId . "'";
    $return_array['join_tables'] = '';
    return $return_array;
	
}

?>