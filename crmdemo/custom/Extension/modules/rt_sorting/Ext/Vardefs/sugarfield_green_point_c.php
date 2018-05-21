<?php
 // created: 2017-12-15 15:05:10
$dictionary['rt_sorting']['fields']['green_point_c']['duplicate_merge_dom_value']=0;
$dictionary['rt_sorting']['fields']['green_point_c']['labelValue']='Green Point';
$dictionary['rt_sorting']['fields']['green_point_c']['full_text_search']=array (
  'boost' => '0',
  'enabled' => false,
);
$dictionary['rt_sorting']['fields']['green_point_c']['calculated']='true';
$dictionary['rt_sorting']['fields']['green_point_c']['formula']='ifElse(contains($greenreport_c,"Y"),"1","0")';
$dictionary['rt_sorting']['fields']['green_point_c']['enforced']='true';
$dictionary['rt_sorting']['fields']['green_point_c']['dependency']='';

 ?>