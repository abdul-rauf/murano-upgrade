<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$hook_array['after_save'][] = Array(
    '1',
    'Create task from confirmed clients on every feed',
    'custom/modules/rt_sorting/logic_hooks/createTasks.php',
    'SortingTask',
    'createTasks'
);
