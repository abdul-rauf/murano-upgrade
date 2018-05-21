<?php
 // created: 2017-12-15 15:19:52
$dictionary['rt_sorting']['fields']['feedback_points1_c']['duplicate_merge_dom_value']=0;
$dictionary['rt_sorting']['fields']['feedback_points1_c']['labelValue']='Feedback Points';
$dictionary['rt_sorting']['fields']['feedback_points1_c']['full_text_search']=array (
  'boost' => '0',
  'enabled' => false,
);
$dictionary['rt_sorting']['fields']['feedback_points1_c']['calculated']='1';
$dictionary['rt_sorting']['fields']['feedback_points1_c']['formula']='ifElse(greaterThan($no_of_days_c,-1),ifElse(greaterThan($no_of_days_c,60),"0.00","0.25"),"0.00")';
$dictionary['rt_sorting']['fields']['feedback_points1_c']['enforced']='1';
$dictionary['rt_sorting']['fields']['feedback_points1_c']['dependency']='';

 ?>