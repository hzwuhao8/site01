<?php
$fp = fopen('data.txt', 'r');

$filename = 'data.txt';
$contents = fread($fp, filesize($filename));
echo "$contents";

fclose($handle);
?>
