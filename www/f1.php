<?php
$fp = fopen('data.txt', 'w');
fwrite($fp, '1\n');
fwrite($fp, "2\n3");
fclose($fp);

// the content of 'data.txt' is now 123 and not 23!
?>
