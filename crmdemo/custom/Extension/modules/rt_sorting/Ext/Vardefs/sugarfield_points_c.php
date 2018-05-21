<?php
 // created: 2017-12-15 15:02:29
$dictionary['rt_sorting']['fields']['points_c']['duplicate_merge_dom_value']=0;
$dictionary['rt_sorting']['fields']['points_c']['labelValue']='Lead Point';
$dictionary['rt_sorting']['fields']['points_c']['full_text_search']=array (
  'boost' => '0',
  'enabled' => false,
);
$dictionary['rt_sorting']['fields']['points_c']['calculated']='true';
$dictionary['rt_sorting']['fields']['points_c']['formula']='ifElse(contains($lead_status,"new"),"1","0.5")';
$dictionary['rt_sorting']['fields']['points_c']['enforced']='true';
$dictionary['rt_sorting']['fields']['points_c']['dependency']='';

 ?>