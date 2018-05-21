<?php
$hook_array['before_save'][] = array(1444,'save lead source fields','custom/modules/Leads/SaveConsultants.php','SaveConsultant','SaveSource',);
$hook_array['after_save'][] = array(1,'save consultants','custom/modules/Leads/SaveConsultants.php','SaveConsultant','Save',);
$hook_array['after_save'][] = array(66,'update connecta worked delete','custom/modules/Leads/SaveConsultants.php','SaveConsultant','updateConnecta',);
$hook_array['after_save'][] = array(67,'create management approval','custom/modules/Leads/SaveConsultants.php','SaveConsultant','save_approval',);
$hook_array['after_delete'][] = array(44,'update connecta delete ','custom/modules/Leads/SaveConsultants.php','SaveConsultant','updateConDelete',);
