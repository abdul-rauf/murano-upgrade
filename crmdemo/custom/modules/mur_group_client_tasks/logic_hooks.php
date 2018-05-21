<?php
// Do not store anything in this file that is not part of the array or the hook version.  This file will	
// be automatically rebuilt in the future. 
 $hook_version = 1; 
$hook_array = Array(); 
// position, file, function 
$hook_array['after_relationship_add'] = Array();
$hook_array['after_relationship_add'][] = Array(1, 'add in leads','custom/modules/mur_group_client_tasks/save_target_lead.php','save_targets','save_target_inv');

$hook_array['after_relationship_delete'][] = Array(2, 'remove in leads','custom/modules/mur_group_client_tasks/save_target_lead.php','save_targets','save_target_inv');

?>