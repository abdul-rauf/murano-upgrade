<?php



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




?>