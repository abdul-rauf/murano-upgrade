<?php
// WARNING: The contents of this file are auto-generated.

//Merged from custom/Extension/modules/rt_sorting/Ext/Vardefs/rt_sorting_leads_rt_sorting.php

// created: 2017-11-23 11:10:41
$dictionary["rt_sorting"]["fields"]["rt_sorting_leads"] = array (
  'name' => 'rt_sorting_leads',
  'type' => 'link',
  'relationship' => 'rt_sorting_leads',
  'source' => 'non-db',
  'module' => 'Leads',
  'bean_name' => 'Lead',
  'side' => 'right',
  'vname' => 'LBL_RT_SORTING_LEADS_FROM_RT_SORTING_TITLE',
  'id_name' => 'rt_sorting_leadsleads_ida',
  'link-type' => 'one',
);
$dictionary["rt_sorting"]["fields"]["rt_sorting_leads_name"] = array (
  'name' => 'rt_sorting_leads_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_RT_SORTING_LEADS_FROM_LEADS_TITLE',
  'save' => true,
  'id_name' => 'rt_sorting_leadsleads_ida',
  'link' => 'rt_sorting_leads',
  'table' => 'leads',
  'module' => 'Leads',
  'rname' => 'name',
  'db_concat_fields' => 
  array (
    0 => 'first_name',
    1 => 'last_name',
  ),
);
$dictionary["rt_sorting"]["fields"]["rt_sorting_leadsleads_ida"] = array (
  'name' => 'rt_sorting_leadsleads_ida',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_RT_SORTING_LEADS_FROM_RT_SORTING_TITLE_ID',
  'id_name' => 'rt_sorting_leadsleads_ida',
  'link' => 'rt_sorting_leads',
  'table' => 'leads',
  'module' => 'Leads',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'right',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);

//Merged from custom/Extension/modules/rt_sorting/Ext/Vardefs/amended_date.php


/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$dictionary['rt_sorting']['fields']['amended_date']= array(
        'name' => 'amended_date',
        'vname' => 'LBL_RECENT_TIME_CHANGED',
        'type' => 'varchar',
        'len' => '255',
        'source' => 'non-db',
);
//Merged from custom/Extension/modules/rt_sorting/Ext/Vardefs/duplicate_check.php


/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$dictionary['rt_sorting']['duplicate_check']['enabled'] = false;
//Merged from custom/Extension/modules/rt_sorting/Ext/Vardefs/sugarfield_points_c.php

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

 
//Merged from custom/Extension/modules/rt_sorting/Ext/Vardefs/sugarfield_green_point_c.php

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

 
//Merged from custom/Extension/modules/rt_sorting/Ext/Vardefs/sugarfield_feedback_received_c.php

 // created: 2017-12-15 16:12:22
$dictionary['rt_sorting']['fields']['feedback_received_c']['labelValue']='Feedback Received';
$dictionary['rt_sorting']['fields']['feedback_received_c']['full_text_search']=array (
  'boost' => '0',
  'enabled' => false,
);
$dictionary['rt_sorting']['fields']['feedback_received_c']['enforced']='';
$dictionary['rt_sorting']['fields']['feedback_received_c']['dependency']='';

 
//Merged from custom/Extension/modules/rt_sorting/Ext/Vardefs/sugarfield_name.php

 // created: 2017-12-15 16:24:13
$dictionary['rt_sorting']['fields']['name']['help']='*** This will auto-fill. Ignore this.';
$dictionary['rt_sorting']['fields']['name']['unified_search']=false;
$dictionary['rt_sorting']['fields']['name']['full_text_search']=array (
);

 
//Merged from custom/Extension/modules/rt_sorting/Ext/Vardefs/sugarfield_spaces.php

 // created: 2017-12-15 16:25:59
$dictionary['rt_sorting']['fields']['spaces']['help']='*** Estimate how many spaces will this go to?';

 
//Merged from custom/Extension/modules/rt_sorting/Ext/Vardefs/sugarfield_potential_clients.php

 // created: 2017-12-20 09:06:00
$dictionary['rt_sorting']['fields']['potential_clients']['help']='***This is a list of only clients with active CRM';

 
//Merged from custom/Extension/modules/rt_sorting/Ext/Vardefs/sugarfield_amendments_completed_c.php

 // created: 2017-12-20 09:27:01
$dictionary['rt_sorting']['fields']['amendments_completed_c']['labelValue']='Completed Amendments';
$dictionary['rt_sorting']['fields']['amendments_completed_c']['enforced']='';
$dictionary['rt_sorting']['fields']['amendments_completed_c']['dependency']='';

 
//Merged from custom/Extension/modules/rt_sorting/Ext/Vardefs/sugarfield_amendments.php

 // created: 2017-12-20 09:27:32
$dictionary['rt_sorting']['fields']['amendments']['full_text_search']=array (
);

 
//Merged from custom/Extension/modules/rt_sorting/Ext/Vardefs/sugarfield_lead_status.php

 // created: 2018-01-16 14:22:34
$dictionary['rt_sorting']['fields']['lead_status']['default']='follow_up';
$dictionary['rt_sorting']['fields']['lead_status']['help']='***Is your report a "New" or "Follow Up"?';
$dictionary['rt_sorting']['fields']['lead_status']['audited']=true;

 
//Merged from custom/Extension/modules/rt_sorting/Ext/Vardefs/sugarfield_greenreport_c.php

 // created: 2018-01-16 14:22:50
$dictionary['rt_sorting']['fields']['greenreport_c']['labelValue']='Green Report?';
$dictionary['rt_sorting']['fields']['greenreport_c']['enforced']='';
$dictionary['rt_sorting']['fields']['greenreport_c']['dependency']='';

 
//Merged from custom/Extension/modules/rt_sorting/Ext/Vardefs/sugarfield_feedback_date1_c.php

 // created: 2018-01-16 14:23:12
$dictionary['rt_sorting']['fields']['feedback_date1_c']['labelValue']='Completed Feedback Date';
$dictionary['rt_sorting']['fields']['feedback_date1_c']['enforced']='';
$dictionary['rt_sorting']['fields']['feedback_date1_c']['dependency']='';

 
//Merged from custom/Extension/modules/rt_sorting/Ext/Vardefs/sugarfield_confirmed_clients.php

 // created: 2018-01-16 14:24:20
$dictionary['rt_sorting']['fields']['confirmed_clients']['help']='***This is clients you have selected from Potential List and you will intend to send report to these clients';
$dictionary['rt_sorting']['fields']['confirmed_clients']['cols']='10';
$dictionary['rt_sorting']['fields']['confirmed_clients']['audited']=true;
$dictionary['rt_sorting']['fields']['confirmed_clients']['full_text_search']=array (
);

 
//Merged from custom/Extension/modules/rt_sorting/Ext/Vardefs/sugarfield_question_marks.php

 // created: 2018-01-16 14:24:37
$dictionary['rt_sorting']['fields']['question_marks']['help']='***This is clients in question. You can also add commentary. e.g.  Cloud5? (Will to check)';
$dictionary['rt_sorting']['fields']['question_marks']['audited']=true;
$dictionary['rt_sorting']['fields']['question_marks']['full_text_search']=array (
);

 
//Merged from custom/Extension/modules/rt_sorting/Ext/Vardefs/sugarfield_email_timestamp.php

 // created: 2018-01-16 14:24:50
$dictionary['rt_sorting']['fields']['email_timestamp']['audited']=true;

 
//Merged from custom/Extension/modules/rt_sorting/Ext/Vardefs/sugarfield_assigned_team.php

 // created: 2018-01-16 14:25:10
$dictionary['rt_sorting']['fields']['assigned_team']['help']='***This field will auto-fill the Subject';
$dictionary['rt_sorting']['fields']['assigned_team']['audited']=true;

 
//Merged from custom/Extension/modules/rt_sorting/Ext/Vardefs/sugarfield_date_modified.php

 // created: 2018-01-16 14:25:39
$dictionary['rt_sorting']['fields']['date_modified']['audited']=true;
$dictionary['rt_sorting']['fields']['date_modified']['comments']='Date record last modified';
$dictionary['rt_sorting']['fields']['date_modified']['duplicate_merge']='enabled';
$dictionary['rt_sorting']['fields']['date_modified']['duplicate_merge_dom_value']=1;
$dictionary['rt_sorting']['fields']['date_modified']['merge_filter']='disabled';
$dictionary['rt_sorting']['fields']['date_modified']['unified_search']=false;
$dictionary['rt_sorting']['fields']['date_modified']['calculated']=false;

 
//Merged from custom/Extension/modules/rt_sorting/Ext/Vardefs/sugarfield_da_confirmed_clients_c.php

 // created: 2018-01-24 10:20:19
$dictionary['rt_sorting']['fields']['da_confirmed_clients_c']['labelValue']='DA Confirmed Clients';
$dictionary['rt_sorting']['fields']['da_confirmed_clients_c']['dependency']='';
$dictionary['rt_sorting']['fields']['da_confirmed_clients_c']['visibility_grid']='';

 
//Merged from custom/Extension/modules/rt_sorting/Ext/Vardefs/sugarfield_da_qm_clients_c.php

 // created: 2018-01-24 10:20:44
$dictionary['rt_sorting']['fields']['da_qm_clients_c']['labelValue']='DA Question Marks';
$dictionary['rt_sorting']['fields']['da_qm_clients_c']['dependency']='';
$dictionary['rt_sorting']['fields']['da_qm_clients_c']['visibility_grid']='';

 
//Merged from custom/Extension/modules/rt_sorting/Ext/Vardefs/sugarfield_da_feedback_clients_c.php

 // created: 2018-02-07 09:25:45
$dictionary['rt_sorting']['fields']['da_feedback_clients_c']['labelValue']='DA Feedback Clients';
$dictionary['rt_sorting']['fields']['da_feedback_clients_c']['dependency']='';
$dictionary['rt_sorting']['fields']['da_feedback_clients_c']['visibility_grid']='';

 
//Merged from custom/Extension/modules/rt_sorting/Ext/Vardefs/sugarfield_other_team_client_c.php

 // created: 2018-02-12 16:36:02
$dictionary['rt_sorting']['fields']['other_team_client_c']['labelValue']='Other Team Client?';
$dictionary['rt_sorting']['fields']['other_team_client_c']['enforced']='';
$dictionary['rt_sorting']['fields']['other_team_client_c']['dependency']='';

 
//Merged from custom/Extension/modules/rt_sorting/Ext/Vardefs/sugarfield_ref_id_c.php

 // created: 2018-02-13 13:40:56
$dictionary['rt_sorting']['fields']['ref_id_c']['labelValue']='Ref';
$dictionary['rt_sorting']['fields']['ref_id_c']['enforced']='1';
$dictionary['rt_sorting']['fields']['ref_id_c']['dependency']='';

 
//Merged from custom/Extension/modules/rt_sorting/Ext/Vardefs/sugarfield_feedback_points1_c.php

 // created: 2018-02-14 14:15:08
$dictionary['rt_sorting']['fields']['feedback_points1_c']['duplicate_merge_dom_value']=0;
$dictionary['rt_sorting']['fields']['feedback_points1_c']['labelValue']='Feedback Points';
$dictionary['rt_sorting']['fields']['feedback_points1_c']['calculated']='1';
$dictionary['rt_sorting']['fields']['feedback_points1_c']['formula']='ifElse(greaterThan($no_of_days_c,-1),ifElse(greaterThan($no_of_days_c,42),"0.00","0.25"),"0.00")';
$dictionary['rt_sorting']['fields']['feedback_points1_c']['enforced']='1';
$dictionary['rt_sorting']['fields']['feedback_points1_c']['dependency']='';

 
//Merged from custom/Extension/modules/rt_sorting/Ext/Vardefs/sugarfield_no_of_days_c.php

 // created: 2018-02-14 14:15:31
$dictionary['rt_sorting']['fields']['no_of_days_c']['duplicate_merge_dom_value']=0;
$dictionary['rt_sorting']['fields']['no_of_days_c']['labelValue']='No of Days';
$dictionary['rt_sorting']['fields']['no_of_days_c']['calculated']='1';
$dictionary['rt_sorting']['fields']['no_of_days_c']['formula']='ifElse(
isAfter($feedback_date1_c,$date_entered),
subtract(daysUntil($feedback_date1_c),daysUntil($date_entered)),-1)';
$dictionary['rt_sorting']['fields']['no_of_days_c']['enforced']='1';
$dictionary['rt_sorting']['fields']['no_of_days_c']['dependency']='';

 
//Merged from custom/Extension/modules/rt_sorting/Ext/Vardefs/sugarfield_report_status.php

 // created: 2018-02-15 16:55:23
$dictionary['rt_sorting']['fields']['report_status']['comments']='';
$dictionary['rt_sorting']['fields']['report_status']['help']='***Not Ready - You do not want anyone to see it, but only yourself. ***Ready for Team ? -  You want Team ? to see it.  ***Ready to Amend - The report sorting is finished and you want the report owner to finalise it to send to client. ***Send - Report has been sent. ';
$dictionary['rt_sorting']['fields']['report_status']['audited']=true;

 
//Merged from custom/Extension/modules/rt_sorting/Ext/Vardefs/sugarfield_total_point_c.php

 // created: 2018-02-16 15:01:05
$dictionary['rt_sorting']['fields']['total_point_c']['duplicate_merge_dom_value']=0;
$dictionary['rt_sorting']['fields']['total_point_c']['labelValue']='Total Point';
$dictionary['rt_sorting']['fields']['total_point_c']['calculated']='1';
$dictionary['rt_sorting']['fields']['total_point_c']['formula']='ifElse(equal($greenreport_c,"3"),3,ifElse(equal($other_team_client_c,"O"),divide($points_c,2),ifElse(equal($report_status,"no_clients"),0.00,ifElse(equal($report_status,"on_hold"),0.00,ifElse(equal($report_status,"not_ready"),0.00,ifElse(and(equal($lead_status,"follow_up"),equal($greenreport_c,"Y")),
add($green_point_c),
add($green_point_c,$points_c)))))))';
$dictionary['rt_sorting']['fields']['total_point_c']['enforced']='1';
$dictionary['rt_sorting']['fields']['total_point_c']['dependency']='';

 