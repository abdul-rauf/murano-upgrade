<?php
// Do not store anything in this file that is not part of the array or the hook version.  This file will	
// be automatically rebuilt in the future. 
 $hook_version = 1; 
$hook_array = Array(); 
// position, file, function 
$hook_array['before_save'] = Array(); 
$hook_array['process_record'] = Array(); 
$hook_array['before_save'][] = Array(1, 'Leads push feed', 'modules/Leads/SugarFeeds/LeadFeed.php','LeadFeed', 'pushFeed'); 

$hook_array['before_save'][] = Array(1444, 'save lead source fields', 'custom/modules/Leads/SaveConsultants.php','SaveConsultant', 'SaveSource'); 
$hook_array['after_ui_frame'] = Array(); 
$hook_array['after_ui_frame'][] = Array(1, 'Leads InsideView frame', 'modules/Connectors/connectors/sources/ext/rest/insideview/InsideViewLogicHook.php','InsideViewLogicHook', 'showFrame'); 
$hook_array['before_save'][] = Array(1445, 'update email address', 'custom/modules/Leads/get_email1.php','get_email1', 'get_email_save'); 


$hook_array['after_save'] = Array(); 
$hook_array['after_save'][] = Array(1, 'save consultants', 'custom/modules/Leads/SaveConsultants.php','SaveConsultant', 'Save'); 

$hook_array['after_save'][] = Array(66, 'update connecta worked delete', 'custom/modules/Leads/SaveConsultants.php','SaveConsultant', 'updateConnecta');

$hook_array['before_save'][] = Array(67, 'create management approval', 'custom/modules/Leads/SaveConsultants.php','SaveConsultant', 'save_approval');

//$hook_array['after_retrieve'][] = Array(69, 'show target lists', 'custom/modules/Leads/SaveConsultants.php','SaveConsultant', 'show_target_names');

//$hook_array['after_retrieve'][] = Array(691, 'show investor group', 'custom/modules/Leads/SaveConsultants.php','SaveConsultant', 'show_inv_group');

//$hook_array['process_record'][] = Array(6915, 'show investor group on list', 'custom/modules/Leads/SaveConsultants.php','SaveConsultant', 'show_inv_group');

//$hook_array['process_record'][] = Array(169, 'show target lists123', 'custom/modules/Leads/SaveConsultants.php','SaveConsultant', 'show_target_names');

//$hook_array['before_save'][] = Array(1569, 'show target lists1236', 'custom/modules/Leads/SaveConsultants.php','SaveConsultant', 'show_target_names');


//$hook_array['after_delete'] = Array(); 
//$hook_array['after_delete'][] = Array(44, 'update connecta delete ', 'custom/modules/Leads/SaveConsultants.php','SaveConsultant', 'updateConDelete');
//$hook_array['process_record'][] = Array(34, 'set account name ', 'custom/modules/Leads/murano_tasks.php','murano_task', 'reload_account_name');
//$hook_array['after_retrieve'][] = Array(345, 'set account name detailview ', 'custom/modules/Leads/murano_tasks.php','murano_task', 'reload_account_name');
$hook_array['after_retrieve'][] = Array(11,'before_save','custom/modules/Leads/make_opt_out.php','make_opt_out','forOptout');

?>