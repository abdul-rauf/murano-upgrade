<?php
exec('./leads_service.sh', $output);
$outputs = implode('<br>', $output);
echo $outputs;
?>
