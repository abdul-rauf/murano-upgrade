<?php
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
