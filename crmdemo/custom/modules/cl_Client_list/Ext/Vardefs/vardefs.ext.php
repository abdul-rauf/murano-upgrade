<?php
// WARNING: The contents of this file are auto-generated.

//Merged from custom/Extension/modules/cl_Client_list/Ext/Vardefs/sugarfield_lead_id1_c.php

 // created: 2012-03-05 15:48:29

 
//Merged from custom/Extension/modules/cl_Client_list/Ext/Vardefs/sugarfield_client_name_c.php

 // created: 2012-04-27 06:58:02
$dictionary['cl_Client_list']['fields']['client_name_c']['dependency']='';

 
//Merged from custom/Extension/modules/cl_Client_list/Ext/Vardefs/sugarfield_mur_client_n_list_id_c.php

 // created: 2012-04-27 06:58:02

 
//Merged from custom/Extension/modules/cl_Client_list/Ext/Vardefs/sugarfield_date_modified.php

 // created: 2012-10-03 17:20:46
$dictionary['cl_Client_list']['fields']['date_modified']['comments']='Date record last modified';
$dictionary['cl_Client_list']['fields']['date_modified']['merge_filter']='disabled';
$dictionary['cl_Client_list']['fields']['date_modified']['calculated']=false;
$dictionary['cl_Client_list']['fields']['date_modified']['enable_range_search']='1';

 
//Merged from custom/Extension/modules/cl_Client_list/Ext/Vardefs/sugarfield_hit_status.php

 // created: 2014-04-14 14:20:02
$dictionary['cl_Client_list']['fields']['hit_status']['default']='Lead_Sent';
$dictionary['cl_Client_list']['fields']['hit_status']['merge_filter']='disabled';

 
//Merged from custom/Extension/modules/cl_Client_list/Ext/Vardefs/cl_client_list_accounts_cl_Client_list.php

// created: 2012-03-05 18:59:46
$dictionary["cl_Client_list"]["fields"]["cl_client_list_accounts"] = array (
  'name' => 'cl_client_list_accounts',
  'type' => 'link',
  'relationship' => 'cl_client_list_accounts',
  'source' => 'non-db',
  'vname' => 'LBL_CL_CLIENT_LIST_ACCOUNTS_FROM_ACCOUNTS_TITLE',
);

//Merged from custom/Extension/modules/cl_Client_list/Ext/Vardefs/sugarfield_client_lists_relate_c.php

 // created: 2012-03-05 15:48:29
$dictionary['cl_Client_list']['fields']['client_lists_relate_c']['dependency']='';

 
//Merged from custom/Extension/modules/cl_Client_list/Ext/Vardefs/cl_client_list_contacts_cl_Client_list.php

// created: 2012-03-05 19:01:50
$dictionary["cl_Client_list"]["fields"]["cl_client_list_contacts"] = array (
  'name' => 'cl_client_list_contacts',
  'type' => 'link',
  'relationship' => 'cl_client_list_contacts',
  'source' => 'non-db',
  'vname' => 'LBL_CL_CLIENT_LIST_CONTACTS_FROM_CONTACTS_TITLE',
);

//Merged from custom/Extension/modules/cl_Client_list/Ext/Vardefs/cl_client_list_leads_cl_Client_list.php

// created: 2012-03-05 15:22:36
$dictionary["cl_Client_list"]["fields"]["cl_client_list_leads"] = array (
  'name' => 'cl_client_list_leads',
  'type' => 'link',
  'relationship' => 'cl_client_list_leads',
  'source' => 'non-db',
  'side' => 'right',
  'vname' => 'LBL_CL_CLIENT_LIST_LEADS_FROM_LEADS_TITLE',
);

//Merged from custom/Extension/modules/cl_Client_list/Ext/Vardefs/mur_client_n_list_cl_client_list_cl_Client_list.php

 // created: 2015-02-22 18:48:05
$dictionary['cl_Client_list']['fields']['mur_client_cl_client_list']['name'] = 'mur_client_cl_client_list';
$dictionary['cl_Client_list']['fields']['mur_client_cl_client_list']['type'] = 'link';
$dictionary['cl_Client_list']['fields']['mur_client_cl_client_list']['relationship'] = 'mur_client_n_list_cl_client_list';
$dictionary['cl_Client_list']['fields']['mur_client_cl_client_list']['source'] = 'non-db';
$dictionary['cl_Client_list']['fields']['mur_client_cl_client_list']['vname'] = 'LBL_MUR_CLIENT_N_LIST_CL_CLIENT_LIST_FROM_MUR_CLIENT_N_LIST_TITLE';
$dictionary['cl_Client_list']['fields']['mur_client_cl_client_list']['id_name'] = 'mur_clientd202_n_list_ida';
$dictionary['cl_Client_list']['fields']['mur_client_ient_list_name']['name'] = 'mur_client_ient_list_name';
$dictionary['cl_Client_list']['fields']['mur_client_ient_list_name']['type'] = 'relate';
$dictionary['cl_Client_list']['fields']['mur_client_ient_list_name']['source'] = 'non-db';
$dictionary['cl_Client_list']['fields']['mur_client_ient_list_name']['vname'] = 'LBL_MUR_CLIENT_N_LIST_CL_CLIENT_LIST_FROM_MUR_CLIENT_N_LIST_TITLE';
$dictionary['cl_Client_list']['fields']['mur_client_ient_list_name']['save'] = true;
$dictionary['cl_Client_list']['fields']['mur_client_ient_list_name']['id_name'] = 'mur_clientd202_n_list_ida';
$dictionary['cl_Client_list']['fields']['mur_client_ient_list_name']['link'] = 'mur_client_cl_client_list';
$dictionary['cl_Client_list']['fields']['mur_client_ient_list_name']['table'] = 'mur_client_n_list';
$dictionary['cl_Client_list']['fields']['mur_client_ient_list_name']['module'] = 'mur_client_n_list';
$dictionary['cl_Client_list']['fields']['mur_client_ient_list_name']['rname'] = 'name';
$dictionary['cl_Client_list']['fields']['mur_clientd202_n_list_ida']['name'] = 'mur_clientd202_n_list_ida';
$dictionary['cl_Client_list']['fields']['mur_clientd202_n_list_ida']['type'] = 'id';
$dictionary['cl_Client_list']['fields']['mur_clientd202_n_list_ida']['relationship'] = 'mur_client_n_list_cl_client_list';
$dictionary['cl_Client_list']['fields']['mur_clientd202_n_list_ida']['source'] = 'non-db';
$dictionary['cl_Client_list']['fields']['mur_clientd202_n_list_ida']['reportable'] = false;
$dictionary['cl_Client_list']['fields']['mur_clientd202_n_list_ida']['side'] = 'left';
$dictionary['cl_Client_list']['fields']['mur_clientd202_n_list_ida']['vname'] = 'LBL_MUR_CLIENT_N_LIST_CL_CLIENT_LIST_FROM_MUR_CLIENT_N_LIST_TITLE';
$dictionary['cl_Client_list']['fields']['mur_clientd202_n_list_ida']['link'] = 'mur_client_cl_client_list';
$dictionary['cl_Client_list']['fields']['mur_clientd202_n_list_ida']['rname'] = 'id';

//Merged from custom/Extension/modules/cl_Client_list/Ext/Vardefs/sugarfield_client_list.php

 // created: 2012-03-05 19:21:51
$dictionary['cl_Client_list']['fields']['client_list']['required']=true;
$dictionary['cl_Client_list']['fields']['client_list']['importable']='false';

 
//Merged from custom/Extension/modules/cl_Client_list/Ext/Vardefs/sugarfield_name.php

 // created: 2015-11-18 12:01:38
$dictionary['cl_Client_list']['fields']['name']['len']='100';
$dictionary['cl_Client_list']['fields']['name']['required']=false;
$dictionary['cl_Client_list']['fields']['name']['duplicate_merge']='disabled';
$dictionary['cl_Client_list']['fields']['name']['duplicate_merge_dom_value']='0';
$dictionary['cl_Client_list']['fields']['name']['calculated']=false;
$dictionary['cl_Client_list']['fields']['name']['audited']=true;
$dictionary['cl_Client_list']['fields']['name']['massupdate']=false;
$dictionary['cl_Client_list']['fields']['name']['merge_filter']='disabled';
$dictionary['cl_Client_list']['fields']['name']['unified_search']=false;

 
//Merged from custom/Extension/modules/cl_Client_list/Ext/Vardefs/sugarfield_client_drop_c.php

 // created: 2015-11-18 12:04:06
$dictionary['cl_Client_list']['fields']['client_drop_c']['labelValue']='Clients Names';
$dictionary['cl_Client_list']['fields']['client_drop_c']['dependency']='';
$dictionary['cl_Client_list']['fields']['client_drop_c']['visibility_grid']='';

 