<?php
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
 ?>