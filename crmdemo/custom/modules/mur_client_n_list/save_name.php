<?php 
class save_name {
 
    function save_name_value($bean, $event, $arguments){
		global $current_user;
		//$bean->name =$bean->clients;
		//$bean->password =base64_encode($bean->password);
		$auth_users =array('86591714-9a1f-a049-ccc3-57befeafe1eb');
		if(!is_admin($current_user) && !in_array($current_user->id,$auth_users)){
		$bean->password ='';
			if($event =='before_save'){
			$bean->password =$bean->fetched_row['password'];
			}
		}
		
	}
}
?>