<?php
 // created: 2018-06-12 08:16:06
$dictionary['rt_sorting']['fields']['points_c']['duplicate_merge_dom_value'] = 0;
$dictionary['rt_sorting']['fields']['points_c']['labelValue'] = 'Lead Point';
$dictionary['rt_sorting']['fields']['points_c']['calculated'] = 'true';
$dictionary['rt_sorting']['fields']['points_c']['formula'] = 'ifElse(contains($lead_status,"new"),"1","0.5")';
$dictionary['rt_sorting']['fields']['points_c']['enforced'] = 'true';
$dictionary['rt_sorting']['fields']['points_c']['dependency'] = '';

