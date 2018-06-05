<?php

$hook_array = Array(); 
// position, file, function 
$hook_array['before_save'] = Array(); 
$hook_array['after_retrieve'] = Array();
$hook_array['process_record'] = Array();
$hook_array['before_save'][] = Array(1, 'update fields', 'custom/modules/mur_approval_managment/save_changes.php','save_changes', 'update_fld'); 
$hook_array['after_delete'][] = Array(2, 'update lead', 'custom/modules/mur_approval_managment/save_changes.php','save_changes', 'update_lead'); 
//$hook_array['before_retrieve'][] = Array(55,'last spoke','custom/modules/mur_approval_managment/save_changes.php', 'save_changes','update_last_spoke_date');
//$hook_array['process_record'][] = Array(7,'last spokelist','custom/modules/mur_approval_managment/save_changes.php','save_changes','update_last_spoke_date');
?>
