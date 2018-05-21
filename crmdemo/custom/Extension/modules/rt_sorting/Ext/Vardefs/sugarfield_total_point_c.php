<?php
 // created: 2017-12-15 15:11:16
$dictionary['rt_sorting']['fields']['total_point_c']['duplicate_merge_dom_value']=0;
$dictionary['rt_sorting']['fields']['total_point_c']['labelValue']='Total Point';
$dictionary['rt_sorting']['fields']['total_point_c']['full_text_search']=array (
  'boost' => '0',
  'enabled' => false,
);
$dictionary['rt_sorting']['fields']['total_point_c']['calculated']='1';
$dictionary['rt_sorting']['fields']['total_point_c']['formula']='ifElse(equal($greenreport_c,"3"),3,ifElse(
and(equal($lead_status,"follow_up"),equal($greenreport_c,"Y")),
add($feedback_points1_c,$green_point_c),
add($feedback_points1_c,$green_point_c,$points_c)))';
$dictionary['rt_sorting']['fields']['total_point_c']['enforced']='1';
$dictionary['rt_sorting']['fields']['total_point_c']['dependency']='';

 ?>