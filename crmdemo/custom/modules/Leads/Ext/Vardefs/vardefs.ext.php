<?php
// WARNING: The contents of this file are auto-generated.

//Merged from custom/Extension/modules/Leads/Ext/Vardefs/sugarfield_typcom_size_c.php

 // created: 2011-05-18 13:58:06
$dictionary['Lead']['fields']['typcom_size_c']['enforced']='false';
$dictionary['Lead']['fields']['typcom_size_c']['dependency']='';

 
//Merged from custom/Extension/modules/Leads/Ext/Vardefs/sugarfield_ticket_size_c.php

 // created: 2012-03-05 15:00:30
$dictionary['Lead']['fields']['ticket_size_c']['enforced']='false';
$dictionary['Lead']['fields']['ticket_size_c']['dependency']='';

 
//Merged from custom/Extension/modules/Leads/Ext/Vardefs/sugarfield_typ_invest_c.php

 // created: 2011-05-18 11:53:39
$dictionary['Lead']['fields']['typ_invest_c']['enforced']='false';
$dictionary['Lead']['fields']['typ_invest_c']['dependency']='';

 
//Merged from custom/Extension/modules/Leads/Ext/Vardefs/sugarfield_vol_pref_c.php

 // created: 2011-09-08 11:08:42
$dictionary['Lead']['fields']['vol_pref_c']['dependency']='';

 
//Merged from custom/Extension/modules/Leads/Ext/Vardefs/mr_consultant_leads_Leads.php

// created: 2013-01-18 09:00:48
$dictionary["Lead"]["fields"]["mr_consultant_leads"] = array (
  'name' => 'mr_consultant_leads',
  'type' => 'link',
  'relationship' => 'mr_consultant_leads',
  'source' => 'non-db',
  'vname' => 'LBL_MR_CONSULTANT_LEADS_FROM_MR_CONSULTANT_TITLE',
);

//Merged from custom/Extension/modules/Leads/Ext/Vardefs/sugarfield_website.php

 // created: 2014-05-27 11:57:13
$dictionary['Lead']['fields']['website']['calculated']=false;
$dictionary['Lead']['fields']['website']['link_target']='_blank';
$dictionary['Lead']['fields']['website']['default']='';
$dictionary['Lead']['fields']['website']['massupdate']=0;
$dictionary['Lead']['fields']['website']['comments']='URL of website for the company';
$dictionary['Lead']['fields']['website']['merge_filter']='disabled';

 
//Merged from custom/Extension/modules/Leads/Ext/Vardefs/sugarfield_targ_return_c.php

 // created: 2011-07-12 10:15:34
$dictionary['Lead']['fields']['targ_return_c']['enforced']='false';
$dictionary['Lead']['fields']['targ_return_c']['dependency']='';

 
//Merged from custom/Extension/modules/Leads/Ext/Vardefs/sugarfield_spec_strat_pref_c.php

 // created: 2013-05-22 12:14:26
$dictionary['Lead']['fields']['spec_strat_pref_c']['dependency']='';

 
//Merged from custom/Extension/modules/Leads/Ext/Vardefs/sugarfield_ownership_c.php

 // created: 2011-05-12 19:37:41

 
//Merged from custom/Extension/modules/Leads/Ext/Vardefs/sugarfield_newslinks_c.php

 // created: 2011-05-12 19:37:41

 
//Merged from custom/Extension/modules/Leads/Ext/Vardefs/sugarfield_peralloc_hf_c.php

 // created: 2012-02-09 12:05:43
$dictionary['Lead']['fields']['peralloc_hf_c']['enforced']='false';
$dictionary['Lead']['fields']['peralloc_hf_c']['dependency']='';

 
//Merged from custom/Extension/modules/Leads/Ext/Vardefs/sugarfield_pref_liquid_c.php

 // created: 2013-10-03 09:10:18
$dictionary['Lead']['fields']['pref_liquid_c']['dependency']='';
$dictionary['Lead']['fields']['pref_liquid_c']['visibility_grid']='';

 
//Merged from custom/Extension/modules/Leads/Ext/Vardefs/sugarfield_req_aum_c.php

 // created: 2014-05-27 11:55:42
$dictionary['Lead']['fields']['req_aum_c']['enforced']='false';
$dictionary['Lead']['fields']['req_aum_c']['dependency']='';

 
//Merged from custom/Extension/modules/Leads/Ext/Vardefs/sugarfield_assistant_phone.php

 // created: 2013-01-22 11:16:15
$dictionary['Lead']['fields']['assistant_phone']['comments']='Phone number of the assistant of the contact';
$dictionary['Lead']['fields']['assistant_phone']['merge_filter']='disabled';
$dictionary['Lead']['fields']['assistant_phone']['calculated']=false;

 
//Merged from custom/Extension/modules/Leads/Ext/Vardefs/sugarfield_required_aum_c.php

 // created: 2013-01-22 11:24:37
$dictionary['Lead']['fields']['required_aum_c']['dependency']='';
$dictionary['Lead']['fields']['required_aum_c']['visibility_grid']='';

 
//Merged from custom/Extension/modules/Leads/Ext/Vardefs/sugarfield_con1.php

 // created: 2015-01-14 18:10:19
$dictionary['Lead']['fields']['con1']['massupdate']=0;
$dictionary['Lead']['fields']['con1']['options']='blank_list';
$dictionary['Lead']['fields']['con1']['comments']='The street address used for billing address';
$dictionary['Lead']['fields']['con1']['merge_filter']='disabled';
$dictionary['Lead']['fields']['con1']['calculated']=false;
$dictionary['Lead']['fields']['con1']['dependency']='';

 
//Merged from custom/Extension/modules/Leads/Ext/Vardefs/sugarfield_go_on_web_c.php

 // created: 2014-12-17 12:07:46
$dictionary['Lead']['fields']['go_on_web_c']['enforced']='';
$dictionary['Lead']['fields']['go_on_web_c']['dependency']='';

 
//Merged from custom/Extension/modules/Leads/Ext/Vardefs/new_email1.php

// created: 2012-12-18 14:50:26
$dictionary["Lead"]["fields"]['email1_new'] = 
    array (
      'name' => 'email1_new',
      'vname' => 'Email Address',
      'type' => 'varchar',
      'len' => '150',

       'merge_filter' => 'enabled',
	  'importable' => 'false',
    );

//Merged from custom/Extension/modules/Leads/Ext/Vardefs/sugarfield_fund_structure_c.php

 // created: 2015-05-21 09:37:35
$dictionary['Lead']['fields']['fund_structure_c']['labelValue']='Fund Structure';
$dictionary['Lead']['fields']['fund_structure_c']['dependency']='';
$dictionary['Lead']['fields']['fund_structure_c']['visibility_grid']='';

 
//Merged from custom/Extension/modules/Leads/Ext/Vardefs/sugarfield_password_c.php

 // created: 2015-06-21 05:28:24
$dictionary['Lead']['fields']['password_c']['labelValue']='Password';
$dictionary['Lead']['fields']['password_c']['full_text_search']=array (
  'boost' => '0',
  'enabled' => false,
);
$dictionary['Lead']['fields']['password_c']['enforced']='';
$dictionary['Lead']['fields']['password_c']['dependency']='';

 
//Merged from custom/Extension/modules/Leads/Ext/Vardefs/primary_address.php

 // created: 2011-07-12 10:34:08
$dictionary['Lead']['fields']['primary_address_state']['massupdate']=1;


 
//Merged from custom/Extension/modules/Leads/Ext/Vardefs/sugarfield_generate_doc.php

$dictionary["Lead"]["fields"]['generate_doc'] = 
    array (
      'name' => 'generate_doc',
      'vname' => 'LBL_GENERATE_DOC',
      'type' => 'varchar',
'source' =>'non-db',
      'len' => '150',
	 'comment' => 'BUTTON FOR GENERATE DOC',
	  'studio' => array('detailview'=>true),
    );
 
//Merged from custom/Extension/modules/Leads/Ext/Vardefs/cl_client_list_leads_Leads.php

// created: 2012-03-05 15:22:36
$dictionary["Lead"]["fields"]["cl_client_list_leads"] = array (
  'name' => 'cl_client_list_leads',
  'type' => 'link',
  'relationship' => 'cl_client_list_leads',
  'source' => 'non-db',
  'vname' => 'LBL_CL_CLIENT_LIST_LEADS_FROM_CL_CLIENT_LIST_TITLE',
  'id_name' => 'cl_client_2c69nt_list_ida',
);
$dictionary["Lead"]["fields"]["cl_client_list_leads_name"]=array (
  'name' => 'cl_client_list_leads_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_CL_CLIENT_LIST_LEADS_FROM_CL_CLIENT_LIST_TITLE',
  'save' => true,
  'id_name' => 'cl_client_2c69nt_list_ida',
  'link' => 'cl_client_list_leads',
  'table' => 'cl_client_list',
  'module' => 'cl_Client_list',
  'rname' => 'name',
);

$dictionary["Lead"]["fields"]["cl_client_2c69nt_list_ida"]=array (
  'name' => 'cl_client_2c69nt_list_ida',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_CL_CLIENT_LIST_LEADS_FROM_LEADS_TITLE',
  'id_name' => 'cl_client_2c69nt_list_ida',
  'link' => 'cl_client_list_leads',
  'table' => 'cl_client_list',
  'module' => 'cl_Client_list',
  'rname' => 'id',
  'reportable' => false,
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);
$dictionary["Lead"]["fields"]["cl_client_list_leads_right"]=array (
  'name' => 'cl_client_list_leads_right',
  'type' => 'link',
  'relationship' => 'cl_client_list_leads',
  'source' => 'non-db',
  'vname' => 'LBL_CL_CLIENT_LIST_LEADS_FROM_LEADS_TITLE',
  'id_name' => '_idb',
  'side' => 'right',
  'link-type' => 'many',
);


//Merged from custom/Extension/modules/Leads/Ext/Vardefs/sugarfield_affiliate_c.php

 // created: 2013-01-23 12:05:04
$dictionary['Lead']['fields']['affiliate_c']['enforced']='';
$dictionary['Lead']['fields']['affiliate_c']['dependency']='';

 
//Merged from custom/Extension/modules/Leads/Ext/Vardefs/sugarfield_consultant.php

 // created: 2013-08-30 14:14:19
$dictionary['Lead']['fields']['consultant']['comments']='The street address used for billing address';
$dictionary['Lead']['fields']['consultant']['merge_filter']='disabled';
$dictionary['Lead']['fields']['consultant']['calculated']=false;

 
//Merged from custom/Extension/modules/Leads/Ext/Vardefs/sugarfield_lead_source_description.php

 // created: 2013-10-02 12:25:24
$dictionary['Lead']['fields']['lead_source_description']['help']='For Description of Lead';
$dictionary['Lead']['fields']['lead_source_description']['comments']='Description of the lead source';
$dictionary['Lead']['fields']['lead_source_description']['merge_filter']='disabled';
$dictionary['Lead']['fields']['lead_source_description']['calculated']=false;
$dictionary['Lead']['fields']['lead_source_description']['rows']='4';
$dictionary['Lead']['fields']['lead_source_description']['cols']='20';

 
//Merged from custom/Extension/modules/Leads/Ext/Vardefs/sugarfield_status_description.php

 // created: 2013-10-17 09:30:40
$dictionary['Lead']['fields']['status_description']['comments']='Description of the status of the lead';
$dictionary['Lead']['fields']['status_description']['merge_filter']='disabled';
$dictionary['Lead']['fields']['status_description']['calculated']=false;
$dictionary['Lead']['fields']['status_description']['rows']='4';
$dictionary['Lead']['fields']['status_description']['cols']='20';

 
//Merged from custom/Extension/modules/Leads/Ext/Vardefs/sugarfield_min_track_c.php

 // created: 2013-10-03 09:11:23
$dictionary['Lead']['fields']['min_track_c']['dependency']='';
$dictionary['Lead']['fields']['min_track_c']['visibility_grid']='';

 
//Merged from custom/Extension/modules/Leads/Ext/Vardefs/quick_email.php

 // created: 2011-07-12 10:34:08
$dictionary["Lead"]["fields"]['quick_email'] = 
    array (
      'name' => 'quick_email',
      'vname' => 'LBL_SEND_QUICK_EMAIL',
      'type' => 'varchar',
      'len' => '150',
	  'source'=>'non-db',
      'comment' => 'BUTTON FOR QUICK EMAIL',
      
    );
$dictionary["Lead"]["fields"]['lead_source_description_cp'] = 
    array (
      'name' => 'lead_source_description_cp',
      'vname' => 'LBL_LEAD_SOURCE_DESCRIPTION',
      'type' => 'text',
       'source'=>'non-db',
      'comment' => 'BUTTON FOR QUICK EMAIL',
      'studio' =>array('detailview'=>true,'editview'=>true),
    );
$dictionary["Lead"]["fields"]['lead_source_cp'] = 
    array (
      'name' => 'lead_source_cp',
   'vname' => 'LBL_LEAD_SOURCE',
      'type' => 'enum',
      'options' => 'lead_source_dom',
      'len' => '100',
      'audited' => true,
      'comment' => 'Lead source (ex: Web, print)',
      'merge_filter' => 'enabled',
	  'source'=>'non-db',

      'studio' =>array('detailview'=>true,'editview'=>true),
    );
 
//Merged from custom/Extension/modules/Leads/Ext/Vardefs/sugarfield_allocating_c.php

 // created: 2015-04-13 14:38:18
$dictionary['Lead']['fields']['allocating_c']['labelValue']='Allocating';
$dictionary['Lead']['fields']['allocating_c']['dependency']='';
$dictionary['Lead']['fields']['allocating_c']['visibility_grid']='';

 
//Merged from custom/Extension/modules/Leads/Ext/Vardefs/sugarfield_client_list_c.php

 // created: 2012-03-05 14:51:32

 
//Merged from custom/Extension/modules/Leads/Ext/Vardefs/sugarfield_description.php

 // created: 2012-02-09 12:03:46
$dictionary['Lead']['fields']['description']['calculated']=false;
$dictionary['Lead']['fields']['description']['rows']='20';

 
//Merged from custom/Extension/modules/Leads/Ext/Vardefs/sugarfield_account_name.php

 // created: 2011-05-25 16:17:22
$dictionary['Lead']['fields']['account_name']['calculated']=false;
$dictionary['Lead']['fields']['account_name']['merge_filter']='enabled';

 
//Merged from custom/Extension/modules/Leads/Ext/Vardefs/sugarfield_fsa_c.php

 // created: 2011-05-12 19:37:41

 
//Merged from custom/Extension/modules/Leads/Ext/Vardefs/sugarfield_alloc_fohfs_c.php

 // created: 2011-05-19 17:10:57
$dictionary['Lead']['fields']['alloc_fohfs_c']['dependency']='';

 
//Merged from custom/Extension/modules/Leads/Ext/Vardefs/sugarfield_avg_time_monitored_c.php

 // created: 2011-07-12 10:14:50
$dictionary['Lead']['fields']['avg_time_monitored_c']['enforced']='false';
$dictionary['Lead']['fields']['avg_time_monitored_c']['dependency']='';

 
//Merged from custom/Extension/modules/Leads/Ext/Vardefs/sugarfield_alternatename_c.php

 // created: 2011-05-12 19:37:41

 
//Merged from custom/Extension/modules/Leads/Ext/Vardefs/sugarfield_alternatetitle_c.php

 // created: 2011-05-12 19:37:41

 
//Merged from custom/Extension/modules/Leads/Ext/Vardefs/sugarfield_alt_address_street.php

 // created: 2011-01-20 13:43:03
$dictionary['Lead']['fields']['alt_address_street']['calculated']=false;

 
//Merged from custom/Extension/modules/Leads/Ext/Vardefs/sugarfield_aum_c.php

 // created: 2011-06-01 17:43:26
$dictionary['Lead']['fields']['aum_c']['enforced']='false';
$dictionary['Lead']['fields']['aum_c']['dependency']='';

 
//Merged from custom/Extension/modules/Leads/Ext/Vardefs/sugarfield_fum_curr1_c.php

 // created: 2011-09-08 11:10:47
$dictionary['Lead']['fields']['fum_curr1_c']['dependency']='';

 
//Merged from custom/Extension/modules/Leads/Ext/Vardefs/sugarfield_fundname_c.php

 // created: 2011-05-12 19:37:41

 
//Merged from custom/Extension/modules/Leads/Ext/Vardefs/sugarfield_investor_rating_c.php

 // created: 2011-08-04 10:01:29
$dictionary['Lead']['fields']['investor_rating_c']['dependency']='';

 
//Merged from custom/Extension/modules/Leads/Ext/Vardefs/data_updated.php

 // created: 2011-07-12 10:34:08
$dictionary['Lead']['fields']['data_updated']=array(
  'name' => 'data_updated',
      'vname' => 'Worked',
      'type' => 'bool',
      'default' => '0',
     'massupdate' => true,
	   'required' => false,
      'studio' => true,
      'comment' => 'An indicator of whether contact can be called',
);

 
//Merged from custom/Extension/modules/Leads/Ext/Vardefs/sugarfield_investor_typ_c.php

 // created: 2011-09-08 11:13:52
$dictionary['Lead']['fields']['investor_typ_c']['dependency']='';

 
//Merged from custom/Extension/modules/Leads/Ext/Vardefs/sugarfield_last_name.php

 // created: 2011-02-16 11:07:27
$dictionary['Lead']['fields']['last_name']['required']=false;
$dictionary['Lead']['fields']['last_name']['calculated']=false;
$dictionary['Lead']['fields']['last_name']['importable']='true';

 
//Merged from custom/Extension/modules/Leads/Ext/Vardefs/sugarfield_loc_pref_c.php

 // created: 2012-04-24 14:06:19
$dictionary['Lead']['fields']['loc_pref_c']['dependency']='';

 
//Merged from custom/Extension/modules/Leads/Ext/Vardefs/sugarfield_alternatelastname_c.php

 // created: 2011-05-12 19:37:41

 
//Merged from custom/Extension/modules/Leads/Ext/Vardefs/sugarfield_investment_geography_c.php

 // created: 2011-09-08 11:07:26
$dictionary['Lead']['fields']['investment_geography_c']['dependency']='';

 
//Merged from custom/Extension/modules/Leads/Ext/Vardefs/sugarfield_fund_manager_c.php

 // created: 2011-05-12 19:37:41

 
//Merged from custom/Extension/modules/Leads/Ext/Vardefs/sugarfield_fund_type_c.php

 // created: 2013-05-22 12:13:48
$dictionary['Lead']['fields']['fund_type_c']['dependency']='';

 
//Merged from custom/Extension/modules/Leads/Ext/Vardefs/sugarfield_further_information_c.php

 // created: 2012-02-09 12:05:24
$dictionary['Lead']['fields']['further_information_c']['enforced']='false';
$dictionary['Lead']['fields']['further_information_c']['dependency']='';

 
//Merged from custom/Extension/modules/Leads/Ext/Vardefs/consultants.php

// created: 2012-12-18 14:50:26
$dictionary["Lead"]["fields"]['con1'] = 
    array (
      'name' => 'con1',
      'vname' => 'LBL_CONSULTANTS',
      'type' => 'multienum',
      'len' => '150',
	  'options' => 'blank_list',
      'comment' => 'The street address used for billing address',
      'group' => 'consultants',
      'isMultiSelect' => true,

      'merge_filter' => 'enabled',
    );
	$dictionary["Lead"]["fields"]['consultant'] = 
    array (
      'name' => 'consultant',
      'vname' => 'LBL_CONSULTANTS_ADD',
      'type' => 'varchar',
      'len' => '150',
      'comment' => 'The street address used for billing address',
      'group' => 'consultants',
      'merge_filter' => 'enabled',
    );

	$dictionary["Lead"]["fields"]['further_information_c']['massupdate'] = true;
$dictionary["Lead"]["fields"]['account_description']['massupdate'] = true;

$dictionary["Lead"]["fields"]['primary_address_street']['massupdate'] = true;
$dictionary["Lead"]["fields"]['primary_address_city']['massupdate'] = true;
$dictionary["Lead"]["fields"]['primary_address_state']['massupdate'] = true;
$dictionary["Lead"]["fields"]['primary_address_postalcode']['massupdate'] = true;
$dictionary["Lead"]["fields"]['primary_address_country']['massupdate'] = true;

$dictionary["Lead"]["fields"]['account_name']['massupdate'] = true;
$dictionary["Lead"]["fields"]['website']['massupdate'] = true;
$dictionary["Lead"]["fields"]['primary_address_country']['massupdate'] = true;



$dictionary["Lead"]["fields"]['status_description']['massupdate'] = false;
$dictionary["Lead"]["fields"]['lead_source_description']['massupdate'] = false;
$dictionary["Lead"]["fields"]['description']['massupdate'] = false;
$dictionary["Lead"]["fields"]['data_updated']['massupdate'] = false;
$dictionary["Lead"]["fields"]['converted']['massupdate'] = false;

//Merged from custom/Extension/modules/Leads/Ext/Vardefs/sugarfield_hit_status_c.php

 // created: 2012-03-05 14:58:09
$dictionary['Lead']['fields']['hit_status_c']['dependency']='';

 
//Merged from custom/Extension/modules/Leads/Ext/Vardefs/sugarfield_weekly_investor_updates_c.php

 // created: 2015-10-16 10:59:06
$dictionary['Lead']['fields']['weekly_investor_updates_c']['labelValue']='Weekly Investor Updates';
$dictionary['Lead']['fields']['weekly_investor_updates_c']['full_text_search']=array (
  'boost' => '0',
  'enabled' => false,
);
$dictionary['Lead']['fields']['weekly_investor_updates_c']['enforced']='';
$dictionary['Lead']['fields']['weekly_investor_updates_c']['dependency']='';

 
//Merged from custom/Extension/modules/Leads/Ext/Vardefs/sugarfield_mifid_c.php

 // created: 2015-10-19 13:05:29
$dictionary['Lead']['fields']['mifid_c']['labelValue']='Mifid';
$dictionary['Lead']['fields']['mifid_c']['dependency']='';
$dictionary['Lead']['fields']['mifid_c']['visibility_grid']='';

 
//Merged from custom/Extension/modules/Leads/Ext/Vardefs/mur_group_client_tasks_leads_1_Leads.php

// created: 2015-12-08 10:37:17
$dictionary["Lead"]["fields"]["mur_group_client_tasks_leads_1"] = array (
  'name' => 'mur_group_client_tasks_leads_1',
  'type' => 'link',
  'relationship' => 'mur_group_client_tasks_leads_1',
  'source' => 'non-db',
  'module' => 'mur_group_client_tasks',
  'bean_name' => 'mur_group_client_tasks',
  'vname' => 'LBL_MUR_GROUP_CLIENT_TASKS_LEADS_1_FROM_MUR_GROUP_CLIENT_TASKS_TITLE',
  'id_name' => 'mur_group_client_tasks_leads_1mur_group_client_tasks_ida',
);

//Merged from custom/Extension/modules/Leads/Ext/Vardefs/all_targets.php

// created: 2012-12-18 14:50:26
$dictionary["Lead"]["fields"]['target_links'] = 
    array (
      'name' => 'target_links',
      'vname' => 'All Target Lists',
      'type' => 'text',
      'len' => '250',

       'merge_filter' => 'enabled',
	  'importable' => 'false',
	  'studio'=>array('listview'=>true,'detailview'=>true),
    );

//Merged from custom/Extension/modules/Leads/Ext/Vardefs/sugarfield_mur_group_client_tasks_id_c.php

 // created: 2016-01-04 16:18:29

 
//Merged from custom/Extension/modules/Leads/Ext/Vardefs/all_inv_group.php

// created: 2012-12-18 14:50:26
$dictionary["Lead"]["fields"]['inv_groups'] = 
    array (
      'name' => 'inv_groups',
      'vname' => 'Investor Group Tasks',
      'type' => 'text',
      'len' => '250',

       'merge_filter' => 'enabled',
	  'importable' => 'false',
	  'studio'=>array('listview'=>true,'detailview'=>true),
    );

//Merged from custom/Extension/modules/Leads/Ext/Vardefs/sugarfield_investor_group_task_c.php

 // created: 2016-01-06 11:08:57
$dictionary['Lead']['fields']['investor_group_task_c']['labelValue']='All Trips';
$dictionary['Lead']['fields']['investor_group_task_c']['full_text_search']=array (
  'boost' => '0',
  'enabled' => false,
);
$dictionary['Lead']['fields']['investor_group_task_c']['dependency']='';

 
//Merged from custom/Extension/modules/Leads/Ext/Vardefs/sugarfield_inv_groups.php

 // created: 2016-01-06 11:18:52
$dictionary['Lead']['fields']['inv_groups']['audited']=false;
$dictionary['Lead']['fields']['inv_groups']['massupdate']=false;
$dictionary['Lead']['fields']['inv_groups']['duplicate_merge']='enabled';
$dictionary['Lead']['fields']['inv_groups']['duplicate_merge_dom_value']='1';
$dictionary['Lead']['fields']['inv_groups']['merge_filter']='disabled';
$dictionary['Lead']['fields']['inv_groups']['full_text_search']=array (
  'boost' => '0',
  'enabled' => false,
);
$dictionary['Lead']['fields']['inv_groups']['calculated']=false;
$dictionary['Lead']['fields']['inv_groups']['rows']='4';
$dictionary['Lead']['fields']['inv_groups']['cols']='20';

 
//Merged from custom/Extension/modules/Leads/Ext/Vardefs/opt_out.php

// created: 2012-12-18 14:50:26
$dictionary["Lead"]["fields"]['lead_opt_out'] = 
    array (
     'name' => 'lead_opt_out',
            'vname' => 'Lead Out',
            'type' => 'bool',
            'comment' => 'lead opt_out option',
            'importable' => 'false',
            'massupdate' => false,
            'studio' => array('listview'=>'true','detailview'=>true)
    );

//Merged from custom/Extension/modules/Leads/Ext/Vardefs/sugarfield_first_name.php

 // created: 2017-08-25 09:40:33
$dictionary['Lead']['fields']['first_name']['required']=true;
$dictionary['Lead']['fields']['first_name']['audited']=false;
$dictionary['Lead']['fields']['first_name']['massupdate']=false;
$dictionary['Lead']['fields']['first_name']['comments']='First name of the contact';
$dictionary['Lead']['fields']['first_name']['duplicate_merge']='enabled';
$dictionary['Lead']['fields']['first_name']['duplicate_merge_dom_value']='1';
$dictionary['Lead']['fields']['first_name']['merge_filter']='disabled';
$dictionary['Lead']['fields']['first_name']['calculated']=false;

 
//Merged from custom/Extension/modules/Leads/Ext/Vardefs/sugarfield_title.php

 // created: 2017-08-25 09:41:23
$dictionary['Lead']['fields']['title']['required']=true;
$dictionary['Lead']['fields']['title']['audited']=false;
$dictionary['Lead']['fields']['title']['massupdate']=false;
$dictionary['Lead']['fields']['title']['comments']='The title of the contact';
$dictionary['Lead']['fields']['title']['duplicate_merge']='enabled';
$dictionary['Lead']['fields']['title']['duplicate_merge_dom_value']='1';
$dictionary['Lead']['fields']['title']['merge_filter']='disabled';
$dictionary['Lead']['fields']['title']['full_text_search']=array (
  'boost' => '0',
  'enabled' => false,
);
$dictionary['Lead']['fields']['title']['calculated']=false;

 
//Merged from custom/Extension/modules/Leads/Ext/Vardefs/sugarfield_primary_address_country.php

 // created: 2017-09-08 10:35:43
$dictionary['Lead']['fields']['primary_address_country']['calculated']=false;
$dictionary['Lead']['fields']['primary_address_country']['massupdate']=false;
$dictionary['Lead']['fields']['primary_address_country']['comments']='Country for primary address';
$dictionary['Lead']['fields']['primary_address_country']['merge_filter']='disabled';
$dictionary['Lead']['fields']['primary_address_country']['required']=true;
$dictionary['Lead']['fields']['primary_address_country']['audited']=false;
$dictionary['Lead']['fields']['primary_address_country']['duplicate_merge']='enabled';
$dictionary['Lead']['fields']['primary_address_country']['duplicate_merge_dom_value']='1';
$dictionary['Lead']['fields']['primary_address_country']['full_text_search']=array (
  'boost' => '0',
  'enabled' => false,
);

 
//Merged from custom/Extension/modules/Leads/Ext/Vardefs/sugarfield_continent_c.php

 // created: 2017-09-08 10:51:09
$dictionary['Lead']['fields']['continent_c']['labelValue']='Continent';
$dictionary['Lead']['fields']['continent_c']['dependency']='';
$dictionary['Lead']['fields']['continent_c']['visibility_grid']='';

 
//Merged from custom/Extension/modules/Leads/Ext/Vardefs/sugarfield_preferred_language.php

 // created: 2017-11-03 10:45:49
$dictionary['Lead']['fields']['preferred_language']['default']='en_us';
$dictionary['Lead']['fields']['preferred_language']['audited']=false;
$dictionary['Lead']['fields']['preferred_language']['massupdate']=false;
$dictionary['Lead']['fields']['preferred_language']['duplicate_merge']='enabled';
$dictionary['Lead']['fields']['preferred_language']['duplicate_merge_dom_value']='1';
$dictionary['Lead']['fields']['preferred_language']['merge_filter']='disabled';
$dictionary['Lead']['fields']['preferred_language']['calculated']=false;
$dictionary['Lead']['fields']['preferred_language']['dependency']=false;

 
//Merged from custom/Extension/modules/Leads/Ext/Vardefs/sugarfield_suitable_clients_c.php

 // created: 2017-11-03 10:46:10
$dictionary['Lead']['fields']['suitable_clients_c']['labelValue']='Suitable Clients Context Summit  Feb 2016';
$dictionary['Lead']['fields']['suitable_clients_c']['dependency']='';
$dictionary['Lead']['fields']['suitable_clients_c']['visibility_grid']='';

 
//Merged from custom/Extension/modules/Leads/Ext/Vardefs/sugarfield_mfa_conference_c.php

 // created: 2017-11-03 10:46:27
$dictionary['Lead']['fields']['mfa_conference_c']['labelValue']='MFA Conference 2016';
$dictionary['Lead']['fields']['mfa_conference_c']['dependency']='';
$dictionary['Lead']['fields']['mfa_conference_c']['visibility_grid']='';

 
//Merged from custom/Extension/modules/Leads/Ext/Vardefs/sugarfield_person_attending_c.php

 // created: 2017-11-03 10:46:50
$dictionary['Lead']['fields']['person_attending_c']['labelValue']='Context Summit Attending Yes Or No';
$dictionary['Lead']['fields']['person_attending_c']['dependency']='';
$dictionary['Lead']['fields']['person_attending_c']['visibility_grid']='';

 
//Merged from custom/Extension/modules/Leads/Ext/Vardefs/sugarfield_hfm_summit_c.php

 // created: 2017-11-03 10:47:09
$dictionary['Lead']['fields']['hfm_summit_c']['labelValue']='HFM Summit';
$dictionary['Lead']['fields']['hfm_summit_c']['dependency']='';
$dictionary['Lead']['fields']['hfm_summit_c']['visibility_grid']='';

 
//Merged from custom/Extension/modules/Leads/Ext/Vardefs/sugarfield_opal_c.php

 // created: 2017-11-03 10:48:40
$dictionary['Lead']['fields']['opal_c']['labelValue']='Opal 2015';
$dictionary['Lead']['fields']['opal_c']['dependency']='';
$dictionary['Lead']['fields']['opal_c']['visibility_grid']='';

 
//Merged from custom/Extension/modules/Leads/Ext/Vardefs/sugarfield_pan_c.php

 // created: 2017-11-03 10:49:01
$dictionary['Lead']['fields']['pan_c']['labelValue']='Pan - European Summit';
$dictionary['Lead']['fields']['pan_c']['dependency']='';
$dictionary['Lead']['fields']['pan_c']['visibility_grid']='';

 
//Merged from custom/Extension/modules/Leads/Ext/Vardefs/sugarfield_gaim_c.php

 // created: 2017-11-03 10:49:22
$dictionary['Lead']['fields']['gaim_c']['labelValue']='Gaim';
$dictionary['Lead']['fields']['gaim_c']['dependency']='';
$dictionary['Lead']['fields']['gaim_c']['visibility_grid']='';

 
//Merged from custom/Extension/modules/Leads/Ext/Vardefs/sugarfield_clarins_c.php

 // created: 2017-11-03 10:54:51
$dictionary['Lead']['fields']['clarins_c']['labelValue']='Clarins 3 Months';
$dictionary['Lead']['fields']['clarins_c']['dependency']='';
$dictionary['Lead']['fields']['clarins_c']['visibility_grid']='';

 
//Merged from custom/Extension/modules/Leads/Ext/Vardefs/sugarfield_hfi_c.php

 // created: 2017-11-03 10:55:02
$dictionary['Lead']['fields']['hfi_c']['labelValue']='HFI Summit';
$dictionary['Lead']['fields']['hfi_c']['dependency']='';
$dictionary['Lead']['fields']['hfi_c']['visibility_grid']='';

 
//Merged from custom/Extension/modules/Leads/Ext/Vardefs/sugarfield_lead_source.php

 // created: 2017-11-03 10:55:48
$dictionary['Lead']['fields']['lead_source']['massupdate']=false;
$dictionary['Lead']['fields']['lead_source']['comments']='Lead source (ex: Web, print)';
$dictionary['Lead']['fields']['lead_source']['duplicate_merge']='enabled';
$dictionary['Lead']['fields']['lead_source']['duplicate_merge_dom_value']='1';
$dictionary['Lead']['fields']['lead_source']['merge_filter']='disabled';
$dictionary['Lead']['fields']['lead_source']['calculated']=false;
$dictionary['Lead']['fields']['lead_source']['dependency']=false;

 
//Merged from custom/Extension/modules/Leads/Ext/Vardefs/sugarfield_last_spoke_c.php

 // created: 2017-11-03 10:58:38
$dictionary['Lead']['fields']['last_spoke_c']['options']='date_range_search_dom';
$dictionary['Lead']['fields']['last_spoke_c']['labelValue']='Last Spoke Date';
$dictionary['Lead']['fields']['last_spoke_c']['enforced']='';
$dictionary['Lead']['fields']['last_spoke_c']['dependency']='';
$dictionary['Lead']['fields']['last_spoke_c']['enable_range_search']='1';

 
//Merged from custom/Extension/modules/Leads/Ext/Vardefs/sugarfield_feedback2_c.php

 // created: 2017-11-03 10:59:57
$dictionary['Lead']['fields']['feedback2_c']['labelValue']='Feedback2';
$dictionary['Lead']['fields']['feedback2_c']['dependency']='';
$dictionary['Lead']['fields']['feedback2_c']['visibility_grid']='';

 
//Merged from custom/Extension/modules/Leads/Ext/Vardefs/sugarfield_feedback3_c.php

 // created: 2017-11-03 11:00:13
$dictionary['Lead']['fields']['feedback3_c']['labelValue']='Feedback3';
$dictionary['Lead']['fields']['feedback3_c']['dependency']='';
$dictionary['Lead']['fields']['feedback3_c']['visibility_grid']='';

 
//Merged from custom/Extension/modules/Leads/Ext/Vardefs/sugarfield_feedback_c.php

 // created: 2017-11-03 11:00:31
$dictionary['Lead']['fields']['feedback_c']['labelValue']='Feedback1';
$dictionary['Lead']['fields']['feedback_c']['dependency']='';
$dictionary['Lead']['fields']['feedback_c']['visibility_grid']='';

 
//Merged from custom/Extension/modules/Leads/Ext/Vardefs/sugarfield_suitable_test123_c.php

 // created: 2017-11-03 11:00:53
$dictionary['Lead']['fields']['suitable_test123_c']['labelValue']='suitable test123';
$dictionary['Lead']['fields']['suitable_test123_c']['dependency']='';
$dictionary['Lead']['fields']['suitable_test123_c']['visibility_grid']=array (
  'trigger' => 'accept_status_name',
  'values' => 
  array (
    'Turtle_Miami_Feb_2016' => 
    array (
      0 => 'black_circle',
      1 => 'Daiquiri',
    ),
    'Multitude_Cincinnati_Jan_2016' => 
    array (
      0 => 'Cart',
    ),
    'Astranaut_New York_Jan_2016' => 
    array (
    ),
    'Astranaut_San Francisco_Jan_2016' => 
    array (
    ),
    'Portico_Luxembourg_Feb_2016' => 
    array (
      0 => 'Loch_Ness',
      1 => 'harvest_moon',
    ),
    'Premiere_London_Jan_2016' => 
    array (
    ),
    'Quant_London_Jan_2016' => 
    array (
    ),
    'Premiere_Netherlands_Feb_2016' => 
    array (
    ),
    'Phoenix_Sweden_Switzerland_Jan_2016' => 
    array (
    ),
  ),
);

 
//Merged from custom/Extension/modules/Leads/Ext/Vardefs/sugarfield_tempanalyst_c.php

 // created: 2017-11-03 11:02:05
$dictionary['Lead']['fields']['tempanalyst_c']['labelValue']='Temp Analyst';
$dictionary['Lead']['fields']['tempanalyst_c']['dependency']='';
$dictionary['Lead']['fields']['tempanalyst_c']['visibility_grid']='';

 
//Merged from custom/Extension/modules/Leads/Ext/Vardefs/sugarfield_trip6_c.php

 // created: 2017-11-03 11:15:39
$dictionary['Lead']['fields']['trip6_c']['labelValue']='Trip 6';
$dictionary['Lead']['fields']['trip6_c']['dependency']='';
$dictionary['Lead']['fields']['trip6_c']['visibility_grid']='';

 
//Merged from custom/Extension/modules/Leads/Ext/Vardefs/sugarfield_trip8_c.php

 // created: 2017-11-03 11:16:14
$dictionary['Lead']['fields']['trip8_c']['labelValue']='Trip 8';
$dictionary['Lead']['fields']['trip8_c']['dependency']='';
$dictionary['Lead']['fields']['trip8_c']['visibility_grid']='';

 
//Merged from custom/Extension/modules/Leads/Ext/Vardefs/sugarfield_trip9_c.php

 // created: 2017-11-03 11:16:36
$dictionary['Lead']['fields']['trip9_c']['labelValue']='Trip 9';
$dictionary['Lead']['fields']['trip9_c']['dependency']='';
$dictionary['Lead']['fields']['trip9_c']['visibility_grid']='';

 
//Merged from custom/Extension/modules/Leads/Ext/Vardefs/sugarfield_trips_suitable5_c.php

 // created: 2017-11-03 11:17:01
$dictionary['Lead']['fields']['trips_suitable5_c']['labelValue']='Trip 5';
$dictionary['Lead']['fields']['trips_suitable5_c']['dependency']='';
$dictionary['Lead']['fields']['trips_suitable5_c']['visibility_grid']='';

 
//Merged from custom/Extension/modules/Leads/Ext/Vardefs/sugarfield_notes_c.php

 // created: 2017-11-03 11:19:25
$dictionary['Lead']['fields']['notes_c']['labelValue']='Notes';
$dictionary['Lead']['fields']['notes_c']['full_text_search']=array (
  'boost' => '0',
  'enabled' => false,
);
$dictionary['Lead']['fields']['notes_c']['enforced']='false';
$dictionary['Lead']['fields']['notes_c']['dependency']='';

 
//Merged from custom/Extension/modules/Leads/Ext/Vardefs/rt_sorting_leads_Leads.php

// created: 2017-11-23 11:10:41
$dictionary["Lead"]["fields"]["rt_sorting_leads"] = array (
  'name' => 'rt_sorting_leads',
  'type' => 'link',
  'relationship' => 'rt_sorting_leads',
  'source' => 'non-db',
  'module' => 'rt_sorting',
  'bean_name' => false,
  'vname' => 'LBL_RT_SORTING_LEADS_FROM_LEADS_TITLE',
  'id_name' => 'rt_sorting_leadsleads_ida',
  'link-type' => 'many',
  'side' => 'left',
);

//Merged from custom/Extension/modules/Leads/Ext/Vardefs/sugarfield_min_track1_c.php

 // created: 2017-12-18 11:30:59
$dictionary['Lead']['fields']['min_track1_c']['labelValue']='Minimum Track Record (Extended)';
$dictionary['Lead']['fields']['min_track1_c']['full_text_search']=array (
  'boost' => '0',
  'enabled' => false,
);
$dictionary['Lead']['fields']['min_track1_c']['enforced']='';
$dictionary['Lead']['fields']['min_track1_c']['dependency']='';

 
//Merged from custom/Extension/modules/Leads/Ext/Vardefs/sugarfield_pref_liquid_1c_c.php

 // created: 2017-12-18 13:19:21
$dictionary['Lead']['fields']['pref_liquid_1c_c']['labelValue']='Preferred Liquidity (Extended)';
$dictionary['Lead']['fields']['pref_liquid_1c_c']['full_text_search']=array (
  'boost' => '0',
  'enabled' => false,
);
$dictionary['Lead']['fields']['pref_liquid_1c_c']['enforced']='';
$dictionary['Lead']['fields']['pref_liquid_1c_c']['dependency']='';

 
//Merged from custom/Extension/modules/Leads/Ext/Vardefs/sugarfield_account_description.php

 // created: 2017-12-20 13:43:46
$dictionary['Lead']['fields']['account_description']['calculated']=false;
$dictionary['Lead']['fields']['account_description']['rows']='23';
$dictionary['Lead']['fields']['account_description']['cols']='95';
$dictionary['Lead']['fields']['account_description']['audited']=false;
$dictionary['Lead']['fields']['account_description']['massupdate']=false;
$dictionary['Lead']['fields']['account_description']['comments']='Description of lead account';
$dictionary['Lead']['fields']['account_description']['duplicate_merge']='enabled';
$dictionary['Lead']['fields']['account_description']['duplicate_merge_dom_value']='1';
$dictionary['Lead']['fields']['account_description']['merge_filter']='disabled';

 
//Merged from custom/Extension/modules/Leads/Ext/Vardefs/sugarfield_difficulty_score_c.php

 // created: 2018-01-25 11:01:34
$dictionary['Lead']['fields']['difficulty_score_c']['duplicate_merge_dom_value']='1';
$dictionary['Lead']['fields']['difficulty_score_c']['merge_filter']='disabled';
$dictionary['Lead']['fields']['difficulty_score_c']['labelValue']='Difficulty Score';
$dictionary['Lead']['fields']['difficulty_score_c']['unified_search']=false;
$dictionary['Lead']['fields']['difficulty_score_c']['full_text_search']=array (
  'boost' => '0',
  'enabled' => false,
);
$dictionary['Lead']['fields']['difficulty_score_c']['calculated']=false;
$dictionary['Lead']['fields']['difficulty_score_c']['enforced']='';
$dictionary['Lead']['fields']['difficulty_score_c']['dependency']='';
$dictionary['Lead']['fields']['difficulty_score_c']['enable_range_search']=false;

 
//Merged from custom/Extension/modules/Leads/Ext/Vardefs/sugarfield_trips_suitable2_c.php

 // created: 2018-01-29 15:27:10
$dictionary['Lead']['fields']['trips_suitable2_c']['labelValue']='Trip 2';
$dictionary['Lead']['fields']['trips_suitable2_c']['dependency']='';
$dictionary['Lead']['fields']['trips_suitable2_c']['visibility_grid']='';

 
//Merged from custom/Extension/modules/Leads/Ext/Vardefs/sugarfield_trips_suitable3_c.php

 // created: 2018-01-29 15:27:34
$dictionary['Lead']['fields']['trips_suitable3_c']['labelValue']='Trip 3';
$dictionary['Lead']['fields']['trips_suitable3_c']['dependency']='';
$dictionary['Lead']['fields']['trips_suitable3_c']['visibility_grid']='';

 
//Merged from custom/Extension/modules/Leads/Ext/Vardefs/sugarfield_trips_suitable4_c.php

 // created: 2018-02-20 13:54:10
$dictionary['Lead']['fields']['trips_suitable4_c']['labelValue']='Trip 4';
$dictionary['Lead']['fields']['trips_suitable4_c']['dependency']='';
$dictionary['Lead']['fields']['trips_suitable4_c']['visibility_grid']='';

 
//Merged from custom/Extension/modules/Leads/Ext/Vardefs/sugarfield_trip7_c.php

 // created: 2018-02-20 14:27:04
$dictionary['Lead']['fields']['trip7_c']['labelValue']='Trip 7';
$dictionary['Lead']['fields']['trip7_c']['dependency']='';
$dictionary['Lead']['fields']['trip7_c']['visibility_grid']='';

 
//Merged from custom/Extension/modules/Leads/Ext/Vardefs/sugarfield_suitable_clients_2_c.php

 // created: 2018-03-07 10:24:26
$dictionary['Lead']['fields']['suitable_clients_2_c']['labelValue']='Trip 1';
$dictionary['Lead']['fields']['suitable_clients_2_c']['dependency']='';
$dictionary['Lead']['fields']['suitable_clients_2_c']['visibility_grid']='';

 