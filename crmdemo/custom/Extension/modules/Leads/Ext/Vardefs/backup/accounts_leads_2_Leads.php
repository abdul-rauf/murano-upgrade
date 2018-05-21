<?php
// created: 2011-02-04 10:45:33
$dictionary["Lead"]["fields"]["accounts_leads_2"] = array (
  'name' => 'accounts_leads_2',
  'type' => 'link',
  'relationship' => 'accounts_leads_2',
  'source' => 'non-db',
  'vname' => 'LBL_ACCOUNTS_LEADS_2_FROM_ACCOUNTS_TITLE',
);
$dictionary["Lead"]["fields"]["accounts_leads_2_name"] = array (
  'name' => 'accounts_leads_2_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_ACCOUNTS_LEADS_2_FROM_ACCOUNTS_TITLE',
  'save' => true,
  'id_name' => 'accounts_l5b88ccounts_ida',
  'link' => 'accounts_leads_2',
  'table' => 'accounts',
  'module' => 'Accounts',
  'rname' => 'name',
);
$dictionary["Lead"]["fields"]["accounts_l5b88ccounts_ida"] = array (
  'name' => 'accounts_l5b88ccounts_ida',
  'type' => 'link',
  'relationship' => 'accounts_leads_2',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_ACCOUNTS_LEADS_2_FROM_LEADS_TITLE',
);
