<?php
// Do not store anything in this file that is not part of the array or the hook version.  This file will	
// be automatically rebuilt in the future. 
 $hook_version = 1; 
$hook_array = Array(); 
// position, file, function 
$hook_array['after_retrieve'] = Array(); 
$hook_array['after_retrieve'][] = Array(1, 'save relations', 'custom/modules/mur_client_n_list/save_name.php','save_name', 'save_name_value'); 

$hook_array['before_save'][] = Array(2, 'save relations change', 'custom/modules/mur_client_n_list/save_name.php','save_name', 'save_name_value');
?>