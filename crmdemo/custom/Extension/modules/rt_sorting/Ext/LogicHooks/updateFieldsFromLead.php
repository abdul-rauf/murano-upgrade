<?php

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
