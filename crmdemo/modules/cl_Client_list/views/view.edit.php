<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

require_once('include/MVC/View/views/view.edit.php');

class cl_Client_listViewEdit extends ViewEdit {
	function cl_Client_listViewEdit(){
 		parent::__construct();
		
		        $this->useForSubpanel = TRUE;  

 	}
	function preDisplay(){
	parent::preDisplay();
	global $db;
	$sql ="SELECT name , id from mur_client_n_list where deleted =0 order by name";
$row =	$db->query($sql);
while($res =$db->fetchByAssoc($row)){
$fin_res[$res['id']] =$res['name'];
//$fin_res[$res['name']] =$res['name'];
}

$GLOBALS['app_list_strings']['client_drop_list'] =$fin_res;
	//$this->bean->abc_c =get_select_options_with_id($fin_res,$this->bean->abc_c);
}
	function display(){

	parent::display();
/*	echo '<script>';
	if($this->bean->id){
	echo 'document.getElementById("client_drop_c").disabled ="disabled"';
	}
	echo '</script>';
	*/
	}

	
	}
	
?>
