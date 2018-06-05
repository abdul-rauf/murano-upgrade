<?php
// Do not store anything in this file that is not part of the array or the hook version.  This file will	
// be automatically rebuilt in the future. 
 $hook_version = 1; 
$hook_array = Array(); 
// position, file, function 
$hook_array['before_save'] = Array(); 
$hook_array['before_save'][] = Array(1,'Leads push feed','modules/Leads/SugarFeeds/LeadFeed.php','LeadFeed','pushFeed',);
$hook_array['before_save'][] = Array(1444,'save lead source fields','custom/modules/Leads/SaveConsultants.php','SaveConsultant','SaveSource',);
$hook_array['before_save'][] = Array(1445,'update email address','custom/modules/Leads/get_email1.php','get_email1','get_email_save',);
$hook_array['before_save'][] = Array(67,'create management approval','custom/modules/Leads/SaveConsultants.php','SaveConsultant','save_approval',);
$hook_array['process_record'] = Array(); 
$hook_array['after_ui_frame'] = Array(); 
$hook_array['after_ui_frame'][] = Array(1,'Leads InsideView frame','modules/Connectors/connectors/sources/ext/rest/insideview/InsideViewLogicHook.php','InsideViewLogicHook','showFrame',);
$hook_array['after_save'] = Array(); 
$hook_array['after_save'][] = Array(1,'save consultants','custom/modules/Leads/SaveConsultants.php','SaveConsultant','Save',);
$hook_array['after_save'][] = Array(66,'update connecta worked delete','custom/modules/Leads/SaveConsultants.php','SaveConsultant','updateConnecta',);
$hook_array['after_retrieve'] = Array(); 
$hook_array['after_retrieve'][] = Array(11,'before_save','custom/modules/Leads/make_opt_out.php','make_opt_out','forOptout',);
$hook_array['after_relationship_add'] = Array(); 
$hook_array['after_relationship_add'][] = Array(99,'Adding Calls in leads for difficultyScore','custom/modules/Leads/difficultyScore.php','difficultyScore','calculateScore',);
$hook_array['after_relationship_delete'] = Array(); 
$hook_array['after_relationship_delete'][] = Array(99,'Deleting Leads in leads for difficultyScore','custom/modules/Leads/difficultyScore.php','difficultyScore','calculateScore',);



?>