<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$hook_array['before_save'][] = Array(
    '1',
    'Save amended date',
    'custom/modules/rt_sorting/logic_hooks/amendedDate.php',
    'AmendedDate',
    'updateDate'
);

$hook_array['process_record'][] = Array(
    '1',
    'Save amended date',
    'custom/modules/rt_sorting/logic_hooks/amendedDate.php',
    'AmendedDate',
    'convertDate'
);
