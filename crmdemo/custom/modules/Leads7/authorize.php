<?php

global $db;
/*
 $sql ="select id_c,fund_type_c from leads_cstm where fund_type_c like '%Fixed Income%'";
$row =$db->query($sql);
while($res =$db->fetchByAssoc($row)){
$result[] =$res;
}
 $sql1 ="select id_c,fund_type_c from leads_cstm where fund_type_c like '%Equity%'";

$row1 =$db->query($sql1);
while($res1 =$db->fetchByAssoc($row1)){
$result1[] =$res1;
}

 $sql2 ="select id_c,spec_strat_pref_c from leads_cstm where spec_strat_pref_c like '%Options%'";

$row2 =$db->query($sql2);
while($res2 =$db->fetchByAssoc($row2)){
//echo "old_value ".$res2['spec_strat_pref_c'];
//echo '<hr/>';
$new_val =str_replace('Options','Volatility Arbitrage',$res2['spec_strat_pref_c']);
$id[] =$res2['id_c'];
//echo 'new value'.$new_val;


 echo $up_sql ="Update leads_cstm set spec_strat_pref_c ='".$new_val."' where id_c ='".$res2['id_c']."'";
$db->query($up_sql);

echo '<hr/>';
}

echo '<pre>';
print_r($id);
echo '</pre>';
*/
//$sql2 ="select id_c,fund_type_c from leads_cstm where fund_type_c like '%Equity%'";
$sql2 ="select id_c,fund_type_c from leads_cstm where fund_type_c like '%Fixed Income%'";
$row2 =$db->query($sql2);
while($res2 =$db->fetchByAssoc($row2)){
$id[] =$res2['id_c'];
$sql2_new ="select spec_strat_pref_c from leads_cstm where id_c ='".$res2['id_c']."'";
$row2_new =$db->query($sql2_new);
echo '<hr/>';


		while($res3 =$db->fetchByAssoc($row2_new)){
			echo "old_value ".$res3['spec_strat_pref_c'];
			$new_val = $res3['spec_strat_pref_c'].",^LO_Fixed_Income^";
			echo '<hr/>';
		    echo "new_value ".$new_val;
			echo '<hr/>';
			  echo $up_sql ="Update leads_cstm set spec_strat_pref_c ='".$new_val."' where id_c ='".$res2['id_c']."'";
			  $db->query($up_sql);
		}
}



echo '<pre>';
print_r($id);
echo '</pre>';


?>