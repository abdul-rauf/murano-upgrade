<?php
$hook_array['before_save'][] = array(1444,'save lead source fields','custom/modules/Leads/SaveConsultants.php','SaveConsultant','SaveSource',);
$hook_array['before_save'][] = array(1445,'update email address','custom/modules/Leads/get_email1.php','get_email1','get_email_save',);
$hook_array['before_save'][] = array(67,'create management approval','custom/modules/Leads/SaveConsultants.php','SaveConsultant','save_approval',);
$hook_array['after_save'][] = array(1,'save consultants','custom/modules/Leads/SaveConsultants.php','SaveConsultant','Save',);
$hook_array['after_save'][] = array(66,'update connecta worked delete','custom/modules/Leads/SaveConsultants.php','SaveConsultant','updateConnecta',);
$hook_array['after_retrieve'][] = array(11,'before_save','custom/modules/Leads/make_opt_out.php','make_opt_out','forOptout',);
$hook_array['after_relationship_add'][] = array(99,'Adding Calls in leads for difficultyScore','custom/modules/Leads/difficultyScore.php','difficultyScore','calculateScore',);
$hook_array['after_relationship_delete'][] = array(99,'Deleting Leads in leads for difficultyScore','custom/modules/Leads/difficultyScore.php','difficultyScore','calculateScore',);
