<?php

$hook_array = Array(); 
// position, file, function 
$hook_array['before_save'] = Array(); 
$hook_array['before_save'][] = Array(1, 'update fields', 'custom/modules/mur_approval_managment/save_changes.php','save_changes', 'update_fld'); 

$hook_array['after_delete'][] = Array(2, 'update lead', 'custom/modules/mur_approval_managment/save_changes.php','save_changes', 'update_lead'); 

?>