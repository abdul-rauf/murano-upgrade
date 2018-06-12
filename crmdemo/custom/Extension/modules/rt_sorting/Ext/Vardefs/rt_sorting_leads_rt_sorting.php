<?php

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
  'rname' => 'full_name',
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
