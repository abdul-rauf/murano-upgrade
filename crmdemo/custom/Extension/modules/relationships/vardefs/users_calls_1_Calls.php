<?php
// created: 2017-05-25 07:04:05
$dictionary["Call"]["fields"]["users_calls_1"] = array (
  'name' => 'users_calls_1',
  'type' => 'link',
  'relationship' => 'users_calls_1',
  'source' => 'non-db',
  'module' => 'Users',
  'bean_name' => 'User',
  'side' => 'right',
  'vname' => 'LBL_USERS_CALLS_1_FROM_CALLS_TITLE',
  'id_name' => 'users_calls_1users_ida',
  'link-type' => 'one',
);
$dictionary["Call"]["fields"]["users_calls_1_name"] = array (
  'name' => 'users_calls_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_USERS_CALLS_1_FROM_USERS_TITLE',
  'save' => true,
  'id_name' => 'users_calls_1users_ida',
  'link' => 'users_calls_1',
  'table' => 'users',
  'module' => 'Users',
  'rname' => 'name',
);
$dictionary["Call"]["fields"]["users_calls_1users_ida"] = array (
  'name' => 'users_calls_1users_ida',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_USERS_CALLS_1_FROM_CALLS_TITLE_ID',
  'id_name' => 'users_calls_1users_ida',
  'link' => 'users_calls_1',
  'table' => 'users',
  'module' => 'Users',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'right',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);
