<?php
$fn = array('age_a.txt','age_b.txt','age_c.txt','age_d.txt','gender_a.txt','gender_b.txt','pet_a.txt','pet_b.txt','pet_c.txt','other1.txt');
foreach ($fn as $fname) {
  $fp = fopen("$fname", 'w');
  fwrite($fp, "reset");
  fclose($fp);
}
?>
