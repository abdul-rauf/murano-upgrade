<?php
 // created: 2018-06-12 08:16:06
$dictionary['rt_sorting']['fields']['feedback_points1_c']['duplicate_merge_dom_value'] = 0;
$dictionary['rt_sorting']['fields']['feedback_points1_c']['labelValue'] = 'Feedback Points';
$dictionary['rt_sorting']['fields']['feedback_points1_c']['calculated'] = '1';
$dictionary['rt_sorting']['fields']['feedback_points1_c']['formula'] = 'ifElse(greaterThan($no_of_days_c,-1),ifElse(greaterThan($no_of_days_c,42),"0.00","0.25"),"0.00")';
$dictionary['rt_sorting']['fields']['feedback_points1_c']['enforced'] = '1';
$dictionary['rt_sorting']['fields']['feedback_points1_c']['dependency'] = '';

