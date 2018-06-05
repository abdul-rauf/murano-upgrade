<?php
// WARNING: The contents of this file are auto-generated.

//Merged from custom/Extension/modules/Schedulers/Ext/ScheduledTasks/ImportCalls.php


/**
 * Push the job to jobs list
 * Read the CSV file and add all the records as call records in CRM
 * */
array_push($job_strings, 'ImportCalls');

/* * **
 * Function to calculate the lat longs for accounts, contacts and leads.
 * */

function ImportCalls() {
    $GLOBALS['log']->fatal("Importing Calls...");
    $new_files_dir = 'custom/vstl/new_files/';
    $processed_files_dir = 'custom/vstl/processed_files/';
    if (!file_exists($new_files_dir)) {
        mkdir($new_files_dir, 0777);
    }
    if (!file_exists($processed_files_dir)) {
        mkdir($processed_files_dir, 0777);
    }
    $files_path = $new_files_dir . "*.csv";
    foreach (glob($files_path) as $file_path) {
        $GLOBALS['log']->fatal("Importing file $file_path");
        $result = csv2array($file_path);
        $records = $result['rows'];
        $count = 0;
        
        /*
         * Moving file to processed directory before inserting records
         */
        $arr = explode($new_files_dir, $file_path);
        $file_name = $arr[1];
        if(!empty($file_name)) {
        $GLOBALS['log']->fatal("The file $file_path is moved to $processed_files_dir$file_name");
        rename($file_path, $processed_files_dir . $file_name);
        
        /*
         * Inserting records in leads module
         */
        foreach ($records as $key => $record) {
            $count++;
            $ext = $record['Extension'];
            $query = "SELECT id FROM users u join users_cstm uc on u.id = uc.id_c WHERE u.deleted = 0 AND u.status = 'Active' AND uc.extension_c = '$ext'";
            $result = $GLOBALS['db']->query($query);
            $user = $GLOBALS['db']->fetchByAssoc($result);
            $user_id = $user['id'];
            $call_date = strtr($record['Date-Time'], '/', '-');
            $date_start = date("Y-m-d H:i:s", strtotime($call_date));
            $datetime_for_DB = gmdate($GLOBALS['timedate']->get_db_date_time_format(), strtotime($date_start));
            if ($record['Direction'] == 'Outbound') {
                $phone_number = $record['Called'];
            } else {
                $phone_number = $record['Calling'];
            }
            $lead_query = "SELECT id FROM leads WHERE deleted = 0 AND (
            REPLACE(REPLACE(REPLACE(REPLACE(REPLACE(REPLACE(REPLACE(phone_home, '/', ''), '.', ''), '+', ''), '(', ''), ')', ''), '-', ''), ' ', '') ='$phone_number' OR
            REPLACE(REPLACE(REPLACE(REPLACE(REPLACE(REPLACE(REPLACE(phone_mobile, '/', ''), '.', ''), '+', ''), '(', ''), ')', ''), '-', ''), ' ', '') ='$phone_number' OR
            REPLACE(REPLACE(REPLACE(REPLACE(REPLACE(REPLACE(REPLACE(phone_work, '/', ''), '.', ''), '+', ''), '(', ''), ')', ''), '-', ''), ' ', '') ='$phone_number' OR
            REPLACE(REPLACE(REPLACE(REPLACE(REPLACE(REPLACE(REPLACE(phone_other, '/', ''), '.', ''), '+', ''), '(', ''), ')', ''), '-', ''), ' ', '') ='$phone_number')";
            $result = $GLOBALS['db']->query($lead_query);
            $lead = $GLOBALS['db']->fetchByAssoc($result);
            $lead_id = $lead['id'];
            $call_hourtime = date('H', strtotime($date_start));
            
            $call = new Call();
            $call->name = $record['Extension'] . " " . $date_start;
            $call->date_start = $datetime_for_DB;
            $call->parent_type = 'Leads';
            $call->parent_id = $lead_id;
            $call->description = $record['Charge Description'];
            $call->direction = $record['Direction'];
            $call->calling_c = $record['Calling'];
            $call->called_c = $record['Called'];
            $call->extension_c = $record['Extension'];
            $call->ring_c = $record['Ring'];
            $call->wait_c = $record['Wait'];
            $call->talk_c = $record['Talk'];
            $call->answer_c = $record['Answer'];
            $call->class_of_service_c = $record['Class of Service'];
            $call->site_c = $record['Site'];
            $call->cost_c = (double) preg_replace( '/[^0-9,"."]/', '', $record['Cost'] );
            $call->charge_description_c = $record['Charge Description'];
            $call->call_source_c = $record['Source'];
            
            /*
             * We are setting assigned_user_id to '0' so that the assigned user should not get notification when been is saved.
             * After saving the bean we'll set actual assigned_user_id via query.
             */
            $call->assigned_user_id = '0';
            $call->call_hour_c = $call_hourtime;
            $call->vtsl_c = true;
            $call->processed = true;
            $call->save();
            
            $GLOBALS['log']->debug("$call->id $call->extension_c call record has been add in the SugarCRM");
            if (!empty($user_id)) {
                $call->load_relationship('users_calls_1');
                $call->users_calls_1->add($user_id);
            }
            if (!empty($lead_id)) {
                $call->load_relationship('leads');
                $call->leads->add($lead_id);
            }
            $GLOBALS['db']->query("UPDATE calls SET assigned_user_id='$user_id' WHERE id ='$call->id'");
        }
        $GLOBALS['log']->fatal("Imported file $file_path");
        $GLOBALS['log']->fatal("$count calls records have been add in the SugarCRM");
    } else {
        $GLOBALS['log']->fatal("File name should not be Empty.");
    }
        
    }
    return true;
}
function csv2array($filename) {
    $rows = array();
    $flag = true;
    $header = array();
    $counter = 0;
    if (($file = fopen($filename, "r")) !== FALSE) {
        while (($row = fgetcsv($file, 0, ',', '"')) !== FALSE) {

            if ($flag) {

                $header = $row;
                $header[0] = 'Date-Time';
                $flag = false;
            } else {
                $r = array();
                foreach ($row as $k => $v) {
                    if (isset($header[$k]))
                        $r[$header[$k]] = $v;
                    //echo "<br>".$v;
                }
                $rows[] = $r;
            }
        }
        fclose($file);
    }
    $data = array(
        'header' => $header,
        'rows' => $rows
    );
    return $data;
}