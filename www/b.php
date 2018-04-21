<?php
include  "base.php";
$sql = "select * from employees";
$array = $db->getAll($sql);
 
print_r($array);

?>
