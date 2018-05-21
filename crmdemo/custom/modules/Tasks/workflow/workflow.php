<?php

include_once("include/workflow/alert_utils.php");
include_once("include/workflow/action_utils.php");
include_once("include/workflow/time_utils.php");
include_once("include/workflow/trigger_utils.php");
//BEGIN WFLOW PLUGINS
include_once("include/workflow/custom_utils.php");
//END WFLOW PLUGINS
	class Tasks_workflow {
	function process_wflow_triggers(& $focus){
		include("custom/modules/Tasks/workflow/triggers_array.php");
		include("custom/modules/Tasks/workflow/alerts_array.php");
		include("custom/modules/Tasks/workflow/actions_array.php");
		include("custom/modules/Tasks/workflow/plugins_array.php");
		
 if( (  (
 	 ( 
 isset($focus->date_due) && $focus->date_due !='' &&  isset($focus->date_due) && $focus->date_due !='0000-00-00 00:00:00' 
 && $focus->fetched_row['date_due']!= $focus->date_due)  
 && TimeDate::getInstance()->fromDb($focus->date_due)->getTimestamp() < (time() - 0)) )  ||  (  (
 	 ( 
 isset($focus->date_due) && $focus->date_due !='' &&  isset($focus->date_due) && $focus->date_due !='0000-00-00 00:00:00' )  
 && TimeDate::getInstance()->fromDb($focus->date_due)->getTimestamp() < (time() - 0)) && !empty($_SESSION['workflow_cron']) && $_SESSION['workflow_cron']=="Yes" ) ){ 
 

	 //Frame Secondary 

	 $secondary_array = array(); 
	 //Secondary Triggers 
	 $trigger_time_count = '0';
 	 $time_array['time_int'] = '0';
	 $time_array['time_int_type'] = 'datetime';
	 $time_array['target_field'] = 'date_due';
	 $workflow_id = 'bba0c77f-9b25-417f-0b53-568d5340e599'; 

if(!empty($_SESSION["workflow_cron"]) && $_SESSION["workflow_cron"]=="Yes" &&
				!empty($_SESSION["workflow_id_cron"]) && in_array($workflow_id, $_SESSION["workflow_id_cron"])){
				
	global $triggeredWorkflows;
	if (!isset($triggeredWorkflows['6884fa28_3bcb_15b2_0177_59a02a8cb863'])){
		$triggeredWorkflows['6884fa28_3bcb_15b2_0177_59a02a8cb863'] = true;
		 $alertshell_array = array(); 

	 $alertshell_array['alert_msg'] = "645c0ef7-fcdd-5a60-5b02-524d2e7c76b3"; 

	 $alertshell_array['source_type'] = "Custom Template"; 

	 $alertshell_array['alert_type'] = "Email"; 

	 process_workflow_alerts($focus, $alert_meta_array['Tasks0_alert0'], $alertshell_array, false); 
 	 unset($alertshell_array); 
		}
}

 

	 //End Frame Secondary 

	 unset($secondary_array); 
 

 //End if trigger is true 
 } 

// Hack for skipping the check if field has changed, just check values
if (!empty($_SESSION['workflow_cron'])) {
	$saveWorkflowCron = $_SESSION['workflow_cron'];
}
$_SESSION['workflow_cron'] = 'Yes';
$secondary_array = array();$checkFields = array('for' => 'activity', 'excludeType' => array(), 'field_filter' => array('date_due'));
$dataChanged = $GLOBALS['db']->getDataChanges($focus, $checkFields);
if ((empty($focus->fetched_row) || !empty($dataChanged) )) {
	 $trigger_time_count = '0';
 	 $time_array['time_int'] = '0';
	 $time_array['time_int_type'] = 'datetime';
	 $time_array['target_field'] = 'date_due';
$workflow_id = 'bba0c77f-9b25-417f-0b53-568d5340e599'; 

		 check_for_schedule($focus, $workflow_id, $time_array); 

 }
// Revert to original value
if (!empty($saveWorkflowCron)) {
	$_SESSION['workflow_cron'] = $saveWorkflowCron;
} else {
	unset($_SESSION['workflow_cron']);
}

	//end function process_wflow_triggers
	}

	//end class
	}

?>