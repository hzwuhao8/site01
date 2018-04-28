<?php
$fp = fopen('data.txt', 'w');
fwrite($fp, 1);
fwrite($fp, ", ");
fwrite($fp, 200);
fclose($fp);
?>
