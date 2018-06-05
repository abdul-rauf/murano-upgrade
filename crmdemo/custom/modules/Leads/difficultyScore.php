<?php

class difficultyScore {

    function calculateScore($bean, $event, $arguments) {
        global $db;
        If ($arguments['related_module'] = 'cl_Client_list' || $arguments['related_module'] = 'Calls') {
            $difficultyscore  = 0.00;
            $call_count_query = "SELECT count(cl.id) as total_calls
                                FROM calls_leads cl 
                                JOIN calls c 
                                ON c.id = cl.call_id 
                                WHERE c.deleted = 0 
                                AND cl.lead_id = '$bean->id' 
                                AND cl.deleted = 0";
            $call_row = $db->query($call_count_query);
            $call_res = $db->fetchByAssoc($call_row);
            $total_no_of_calls = $call_res['total_calls'];
            
            $cl_client_query = "SELECT COUNT( cd.id ) as total_clients 
                                FROM cl_client_list_leads_c cd
                                JOIN cl_client_list cl ON cl.id = cl_client_2c69nt_list_ida
                                WHERE cl_client_b14ddsleads_idb =  '$bean->id'
                                AND cd.deleted =0
                                AND cl.deleted =0
                                AND cl.date_entered >= ( CURDATE( ) - INTERVAL 5 DAY )";
            $client_row = $db->query($cl_client_query);
            $cl_cleint_res = $db->fetchByAssoc($client_row);
            $total_no_of_client = (int)$cl_cleint_res['total_clients'];
            
            if($total_no_of_client){
            $difficultyscore = $total_no_of_calls / $total_no_of_client;
            }else{
            $difficultyscore = 0.00;    
            }
            
            $difficultyscore = number_format((float)$difficultyscore, 2, '.', '');
            $leadctm_sql = "update leads_cstm set difficulty_score_c = $difficultyscore where id_c ='$bean->id'";
            $db->query($leadctm_sql);
        }
    }
}
?>

