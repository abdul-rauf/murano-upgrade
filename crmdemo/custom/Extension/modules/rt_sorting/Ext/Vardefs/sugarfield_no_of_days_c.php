<?php
 // created: 2017-12-15 15:42:31
$dictionary['rt_sorting']['fields']['no_of_days_c']['duplicate_merge_dom_value']=0;
$dictionary['rt_sorting']['fields']['no_of_days_c']['labelValue']='No of Days';
$dictionary['rt_sorting']['fields']['no_of_days_c']['full_text_search']=array (
  'boost' => '0',
  'enabled' => false,
);
$dictionary['rt_sorting']['fields']['no_of_days_c']['calculated']='1';
$dictionary['rt_sorting']['fields']['no_of_days_c']['formula']='ifElse(
isAfter($feedback_date1_c,$date_entered),
subtract(daysUntil($feedback_date1_c),daysUntil($date_entered)),-1)';
$dictionary['rt_sorting']['fields']['no_of_days_c']['enforced']='1';
$dictionary['rt_sorting']['fields']['no_of_days_c']['dependency']='';

 ?>