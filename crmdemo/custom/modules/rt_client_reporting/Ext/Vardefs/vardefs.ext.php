<?php
// WARNING: The contents of this file are auto-generated.

//Merged from custom/Extension/modules/rt_client_reporting/Ext/Vardefs/rt_client_reporting_mur_client_n_list_rt_client_reporting.php

// created: 2017-11-23 11:21:02
$dictionary["rt_client_reporting"]["fields"]["rt_client_reporting_mur_client_n_list"] = array (
  'name' => 'rt_client_reporting_mur_client_n_list',
  'type' => 'link',
  'relationship' => 'rt_client_reporting_mur_client_n_list',
  'source' => 'non-db',
  'module' => 'mur_client_n_list',
  'bean_name' => 'mur_client_n_list',
  'side' => 'right',
  'vname' => 'LBL_RT_CLIENT_REPORTING_MUR_CLIENT_N_LIST_FROM_RT_CLIENT_REPORTING_TITLE',
  'id_name' => 'rt_client_reporting_mur_client_n_listmur_client_n_list_ida',
  'link-type' => 'one',
);
$dictionary["rt_client_reporting"]["fields"]["rt_client_reporting_mur_client_n_list_name"] = array (
  'name' => 'rt_client_reporting_mur_client_n_list_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_RT_CLIENT_REPORTING_MUR_CLIENT_N_LIST_FROM_MUR_CLIENT_N_LIST_TITLE',
  'save' => true,
  'id_name' => 'rt_client_reporting_mur_client_n_listmur_client_n_list_ida',
  'link' => 'rt_client_reporting_mur_client_n_list',
  'table' => 'mur_client_n_list',
  'module' => 'mur_client_n_list',
  'rname' => 'name',
);
$dictionary["rt_client_reporting"]["fields"]["rt_client_reporting_mur_client_n_listmur_client_n_list_ida"] = array (
  'name' => 'rt_client_reporting_mur_client_n_listmur_client_n_list_ida',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_RT_CLIENT_REPORTING_MUR_CLIENT_N_LIST_FROM_RT_CLIENT_REPORTING_TITLE_ID',
  'id_name' => 'rt_client_reporting_mur_client_n_listmur_client_n_list_ida',
  'link' => 'rt_client_reporting_mur_client_n_list',
  'table' => 'mur_client_n_list',
  'module' => 'mur_client_n_list',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'right',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);
