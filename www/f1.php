<?php
$fp = fopen('data.txt', 'w');
fwrite($fp, '100,200,300');
fwrite($fp, ",200");

//$y=array(1,2,3);
//fwrite($fp, $y);

fclose($fp);



// the content of 'data.txt' is now 123 and not 23!
?>
