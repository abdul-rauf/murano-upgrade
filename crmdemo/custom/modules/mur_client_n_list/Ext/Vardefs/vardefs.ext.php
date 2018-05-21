<?php
// WARNING: The contents of this file are auto-generated.

//Merged from custom/Extension/modules/mur_client_n_list/Ext/Vardefs/sugarfield_fund_type_c.php

 // created: 2013-09-23 14:21:18
$dictionary['mur_client_n_list']['fields']['fund_type_c']['enforced']='';
$dictionary['mur_client_n_list']['fields']['fund_type_c']['dependency']='';

 
//Merged from custom/Extension/modules/mur_client_n_list/Ext/Vardefs/sugarfield_fund_manager_c.php

 // created: 2013-09-23 19:04:58
$dictionary['mur_client_n_list']['fields']['fund_manager_c']['enforced']='';
$dictionary['mur_client_n_list']['fields']['fund_manager_c']['dependency']='';

 
//Merged from custom/Extension/modules/mur_client_n_list/Ext/Vardefs/sugarfield_fund_aum_c.php

 // created: 2013-09-23 14:58:31
$dictionary['mur_client_n_list']['fields']['fund_aum_c']['enforced']='';
$dictionary['mur_client_n_list']['fields']['fund_aum_c']['dependency']='';

 
//Merged from custom/Extension/modules/mur_client_n_list/Ext/Vardefs/sugarfield_legal_structure_c.php

 // created: 2013-09-23 14:20:12
$dictionary['mur_client_n_list']['fields']['legal_structure_c']['enforced']='';
$dictionary['mur_client_n_list']['fields']['legal_structure_c']['dependency']='';

 
//Merged from custom/Extension/modules/mur_client_n_list/Ext/Vardefs/sugarfield_liquidity_c.php

 // created: 2013-09-23 14:19:40
$dictionary['mur_client_n_list']['fields']['liquidity_c']['enforced']='';
$dictionary['mur_client_n_list']['fields']['liquidity_c']['dependency']='';

 
//Merged from custom/Extension/modules/mur_client_n_list/Ext/Vardefs/sugarfield_track_record_c.php

 // created: 2013-09-23 14:19:18
$dictionary['mur_client_n_list']['fields']['track_record_c']['enforced']='';
$dictionary['mur_client_n_list']['fields']['track_record_c']['dependency']='';

 
//Merged from custom/Extension/modules/mur_client_n_list/Ext/Vardefs/sugarfield_sent_counter_c.php

 // created: 2013-09-24 10:53:47
$dictionary['mur_client_n_list']['fields']['sent_counter_c']['enforced']='';
$dictionary['mur_client_n_list']['fields']['sent_counter_c']['dependency']='';

 
//Merged from custom/Extension/modules/mur_client_n_list/Ext/Vardefs/active_on.php




$dictionary['mur_client_n_list']['fields']['active_on']= array(

  'name' => 'active_on',
    'vname' => 'Active On Portal',
    'type' => 'enum',
	'studio'=>array("EditView"=>true,"DetailView"=>true),
'options' => 'active_on_list',
);
$dictionary['mur_client_n_list']['fields']['active_on_portal']=
  array (
    'name' => 'active_on_portal',
    'vname' => 'Active On Portal',
    'type' => 'bool',
  
    'options' => 'bool_init_dom',
	'audited'=>true,
	'comment' => 'Status of the lead',
    'merge_filter' => 'enabled',
  );





//Merged from custom/Extension/modules/mur_client_n_list/Ext/Vardefs/sugarfield_firm_aum_c.php

 // created: 2013-09-23 14:59:27
$dictionary['mur_client_n_list']['fields']['firm_aum_c']['enforced']='';
$dictionary['mur_client_n_list']['fields']['firm_aum_c']['dependency']='';

 
//Merged from custom/Extension/modules/mur_client_n_list/Ext/Vardefs/mur_client_n_list_cl_client_list_mur_client_n_list.php

 // created: 2015-02-22 18:48:06
$dictionary['mur_client_n_list']['fields']['mur_client_cl_client_list']['name'] = 'mur_client_cl_client_list';
$dictionary['mur_client_n_list']['fields']['mur_client_cl_client_list']['type'] = 'link';
$dictionary['mur_client_n_list']['fields']['mur_client_cl_client_list']['relationship'] = 'mur_client_n_list_cl_client_list';
$dictionary['mur_client_n_list']['fields']['mur_client_cl_client_list']['source'] = 'non-db';
$dictionary['mur_client_n_list']['fields']['mur_client_cl_client_list']['vname'] = 'LBL_MUR_CLIENT_N_LIST_CL_CLIENT_LIST_FROM_CL_CLIENT_LIST_TITLE';
$dictionary['mur_client_n_list']['fields']['mur_client_cl_client_list']['id_name'] = 'mur_client8cf1nt_list_idb';
$dictionary['mur_client_n_list']['fields']['mur_client_ient_list_name']['name'] = 'mur_client_ient_list_name';
$dictionary['mur_client_n_list']['fields']['mur_client_ient_list_name']['type'] = 'relate';
$dictionary['mur_client_n_list']['fields']['mur_client_ient_list_name']['source'] = 'non-db';
$dictionary['mur_client_n_list']['fields']['mur_client_ient_list_name']['vname'] = 'LBL_MUR_CLIENT_N_LIST_CL_CLIENT_LIST_FROM_CL_CLIENT_LIST_TITLE';
$dictionary['mur_client_n_list']['fields']['mur_client_ient_list_name']['save'] = true;
$dictionary['mur_client_n_list']['fields']['mur_client_ient_list_name']['id_name'] = 'mur_client8cf1nt_list_idb';
$dictionary['mur_client_n_list']['fields']['mur_client_ient_list_name']['link'] = 'mur_client_cl_client_list';
$dictionary['mur_client_n_list']['fields']['mur_client_ient_list_name']['table'] = 'cl_client_list';
$dictionary['mur_client_n_list']['fields']['mur_client_ient_list_name']['module'] = 'cl_Client_list';
$dictionary['mur_client_n_list']['fields']['mur_client_ient_list_name']['rname'] = 'name';
$dictionary['mur_client_n_list']['fields']['mur_client8cf1nt_list_idb']['name'] = 'mur_client8cf1nt_list_idb';
$dictionary['mur_client_n_list']['fields']['mur_client8cf1nt_list_idb']['type'] = 'id';
$dictionary['mur_client_n_list']['fields']['mur_client8cf1nt_list_idb']['relationship'] = 'mur_client_n_list_cl_client_list';
$dictionary['mur_client_n_list']['fields']['mur_client8cf1nt_list_idb']['source'] = 'non-db';
$dictionary['mur_client_n_list']['fields']['mur_client8cf1nt_list_idb']['reportable'] = false;
$dictionary['mur_client_n_list']['fields']['mur_client8cf1nt_list_idb']['side'] = 'left';
$dictionary['mur_client_n_list']['fields']['mur_client8cf1nt_list_idb']['vname'] = 'LBL_MUR_CLIENT_N_LIST_CL_CLIENT_LIST_FROM_CL_CLIENT_LIST_TITLE';
$dictionary['mur_client_n_list']['fields']['mur_client8cf1nt_list_idb']['link'] = 'mur_client_cl_client_list';
$dictionary['mur_client_n_list']['fields']['mur_client8cf1nt_list_idb']['rname'] = 'id';

//Merged from custom/Extension/modules/mur_client_n_list/Ext/Vardefs/sugarfield_email_address_c.php

 // created: 2013-09-23 16:12:51
$dictionary['mur_client_n_list']['fields']['email_address_c']['enforced']='';
$dictionary['mur_client_n_list']['fields']['email_address_c']['dependency']='';

 
//Merged from custom/Extension/modules/mur_client_n_list/Ext/Vardefs/sugarfield_name.php

 // created: 2015-11-18 11:59:09
$dictionary['mur_client_n_list']['fields']['name']['duplicate_merge']='disabled';
$dictionary['mur_client_n_list']['fields']['name']['duplicate_merge_dom_value']='0';
$dictionary['mur_client_n_list']['fields']['name']['calculated']=false;
$dictionary['mur_client_n_list']['fields']['name']['audited']=true;
$dictionary['mur_client_n_list']['fields']['name']['massupdate']=false;
$dictionary['mur_client_n_list']['fields']['name']['merge_filter']='disabled';
$dictionary['mur_client_n_list']['fields']['name']['unified_search']=false;

 
//Merged from custom/Extension/modules/mur_client_n_list/Ext/Vardefs/prospectlists_mur_client_n_list_1_mur_client_n_list.php

// created: 2015-11-25 11:14:54
$dictionary["mur_client_n_list"]["fields"]["prospectlists_mur_client_n_list_1"] = array (
  'name' => 'prospectlists_mur_client_n_list_1',
  'type' => 'link',
  'relationship' => 'prospectlists_mur_client_n_list_1',
  'source' => 'non-db',
  'module' => 'ProspectLists',
  'bean_name' => 'ProspectList',
  'vname' => 'LBL_PROSPECTLISTS_MUR_CLIENT_N_LIST_1_FROM_PROSPECTLISTS_TITLE',
  'id_name' => 'prospectlists_mur_client_n_list_1prospectlists_ida',
);

//Merged from custom/Extension/modules/mur_client_n_list/Ext/Vardefs/notes_mur_client_n_list_1_mur_client_n_list.php

// created: 2016-01-19 11:43:11
$dictionary["mur_client_n_list"]["fields"]["notes_mur_client_n_list_1"] = array (
  'name' => 'notes_mur_client_n_list_1',
  'type' => 'link',
  'relationship' => 'notes_mur_client_n_list_1',
  'source' => 'non-db',
  'module' => 'Notes',
  'bean_name' => 'Note',
  'vname' => 'LBL_NOTES_MUR_CLIENT_N_LIST_1_FROM_NOTES_TITLE',
  'id_name' => 'notes_mur_client_n_list_1notes_ida',
);

//Merged from custom/Extension/modules/mur_client_n_list/Ext/Vardefs/sugarfield_active_on_portal.php

 // created: 2017-04-10 16:33:23
$dictionary['mur_client_n_list']['fields']['active_on_portal']['default']=false;
$dictionary['mur_client_n_list']['fields']['active_on_portal']['massupdate']=false;
$dictionary['mur_client_n_list']['fields']['active_on_portal']['comments']='Status of the lead';
$dictionary['mur_client_n_list']['fields']['active_on_portal']['duplicate_merge']='enabled';
$dictionary['mur_client_n_list']['fields']['active_on_portal']['duplicate_merge_dom_value']='1';
$dictionary['mur_client_n_list']['fields']['active_on_portal']['merge_filter']='disabled';
$dictionary['mur_client_n_list']['fields']['active_on_portal']['reportable']=false;
$dictionary['mur_client_n_list']['fields']['active_on_portal']['unified_search']=false;
$dictionary['mur_client_n_list']['fields']['active_on_portal']['calculated']=false;

 
//Merged from custom/Extension/modules/mur_client_n_list/Ext/Vardefs/sugarfield_active_on.php

 // created: 2017-04-10 16:33:33
$dictionary['mur_client_n_list']['fields']['active_on']['default']='CSV';
$dictionary['mur_client_n_list']['fields']['active_on']['audited']=false;
$dictionary['mur_client_n_list']['fields']['active_on']['massupdate']=true;
$dictionary['mur_client_n_list']['fields']['active_on']['options']='Client_list';
$dictionary['mur_client_n_list']['fields']['active_on']['duplicate_merge']='enabled';
$dictionary['mur_client_n_list']['fields']['active_on']['duplicate_merge_dom_value']='1';
$dictionary['mur_client_n_list']['fields']['active_on']['merge_filter']='disabled';
$dictionary['mur_client_n_list']['fields']['active_on']['reportable']=false;
$dictionary['mur_client_n_list']['fields']['active_on']['unified_search']=false;
$dictionary['mur_client_n_list']['fields']['active_on']['calculated']=false;
$dictionary['mur_client_n_list']['fields']['active_on']['dependency']=false;

 
//Merged from custom/Extension/modules/mur_client_n_list/Ext/Vardefs/rt_client_reporting_mur_client_n_list_mur_client_n_list.php

// created: 2017-11-23 11:21:02
$dictionary["mur_client_n_list"]["fields"]["rt_client_reporting_mur_client_n_list"] = array (
  'name' => 'rt_client_reporting_mur_client_n_list',
  'type' => 'link',
  'relationship' => 'rt_client_reporting_mur_client_n_list',
  'source' => 'non-db',
  'module' => 'rt_client_reporting',
  'bean_name' => false,
  'vname' => 'LBL_RT_CLIENT_REPORTING_MUR_CLIENT_N_LIST_FROM_MUR_CLIENT_N_LIST_TITLE',
  'id_name' => 'rt_client_reporting_mur_client_n_listmur_client_n_list_ida',
  'link-type' => 'many',
  'side' => 'left',
);
