<?php
// WARNING: The contents of this file are auto-generated.

//Merged from custom/Extension/modules/rt_sorting/Ext/LogicHooks/updateFieldsFromLead.php


/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$hook_array['after_relationship_add'][] = Array(
    '1',
    'Update Account Name and Primary Address Country',
    'custom/modules/rt_sorting/logic_hooks/updateFieldsFromLeads.php',
    'SortingLogic',
    'updateFields'
);

//Merged from custom/Extension/modules/rt_sorting/Ext/LogicHooks/createTasks.php


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

//Merged from custom/Extension/modules/rt_sorting/Ext/LogicHooks/amendedDate.php


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
