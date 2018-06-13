<?php
if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
  
    class make_opt_out {	
        function forOptout($bean, $event, $arguments){
			global $db;
            $sql = "select count(*) as cnt from email_addresses ea inner join email_addr_bean_rel eabr on ea.id= eabr.email_address_id where  ea.deleted='0' and eabr.deleted='0' and ea.opt_out =1 and eabr.bean_id ='".$bean->id."'  ";

		$row =$db->query($sql);	
		$res =$db->fetchByAssoc($row);
		

		if($res['cnt'] && $bean->lead_opt_out ==0){
					$up_sql ="update leads set lead_opt_out =1 where id ='".$bean->id."'";
					$db->query($up_sql);
					$this->ConDelete($bean->id);
			}
			else if(!$res['cnt'] && $bean->lead_opt_out ==1){
				$up_sql ="update leads set lead_opt_out =0 where id ='".$bean->id."'";
				$db->query($up_sql);
			}
		}
		
		function ConDelete($bean_id){
			$con =mysql_connect('54.75.225.64','root','Sugar123#') or sugar_upgrade_die(mysql_error());
			mysql_select_db('connecta') or sugar_upgrade_die(mysql_error());;
			 $sql ="delete from leads where id ='".$bean_id."'";
			$row =mysql_query($sql,$con);
			mysql_close($con);
			}
     }

?>
