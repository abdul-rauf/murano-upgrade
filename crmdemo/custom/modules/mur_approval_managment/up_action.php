<?php

$ids ="'".implode("','",$_REQUEST['mass'])."'";

 $sql ="update mur_approval_managment_cstm set  status_c ='approved' where id_c in (".$ids.") ";

$GLOBALS['db']->query($sql);


?>
<script>
alert("Select records are approved");
//top.reload();

</script>

<?php
header("location:index.php?module=mur_approval_managment&action=index");

?>
