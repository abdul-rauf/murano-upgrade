<?php
 // created: 2018-02-16 15:01:05
$dictionary['rt_sorting']['fields']['total_point_c']['duplicate_merge_dom_value']=0;
$dictionary['rt_sorting']['fields']['total_point_c']['labelValue']='Total Point';
$dictionary['rt_sorting']['fields']['total_point_c']['calculated']='1';
$dictionary['rt_sorting']['fields']['total_point_c']['formula']='ifElse(equal($greenreport_c,"3"),3,ifElse(equal($other_team_client_c,"O"),divide($points_c,2),ifElse(equal($report_status,"no_clients"),0.00,ifElse(equal($report_status,"on_hold"),0.00,ifElse(equal($report_status,"not_ready"),0.00,ifElse(and(equal($lead_status,"follow_up"),equal($greenreport_c,"Y")),
add($green_point_c),
add($green_point_c,$points_c)))))))';
$dictionary['rt_sorting']['fields']['total_point_c']['enforced']='1';
$dictionary['rt_sorting']['fields']['total_point_c']['dependency']='';

 ?>