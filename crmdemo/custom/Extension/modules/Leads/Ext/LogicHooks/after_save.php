<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$hook_array['after_save'][] = Array(
    2,
    'update related sorting records', 
    'custom/modules/Leads/UpdateSorting.php', 
    'UpdateSorting', 
    'updateSorting',
    );
