<?php
$name = $_REQUEST['gender'];
if ($name == "a") {
  $fp = fopen('gender_a.txt', 'r');
  $filename = 'gender_a.txt';
  $contents = fread($fp, filesize($filename));
  $t = (int)$contents;
  $n = $t + 1;
  $fp = fopen('gender_a.txt', 'w');
  fwrite($fp, $n);
  fclose($fp);
}
elseif ($name == "b"){
  $f = 'gender_b.txt';
  $fp = fopen("gender_b.txt", 'r');
  $contents = fread($fp, filesize($f));
  $t = (int)$contents;
  $n = $t + 1;
  $fp = fopen($f, 'w');
  fwrite($fp, $n);
  fclose($fp);
}

$age = $_REQUEST['age'];
if ($age == "a") {
  $fp = fopen('age_a.txt', 'r');
  $filename = 'age_a.txt';
  $contents = fread($fp, filesize($filename));
  $t = (int)$contents;
  $n = $t + 1;
  $fp = fopen('age_a.txt', 'w');
  fwrite($fp, $n);
  fclose($fp);
}
elseif ($age == "b") {
  $fp = fopen('age_b.txt', 'r');
  $filename = 'age_b.txt';
  $contents = fread($fp, filesize($filename));
  $t = (int)$contents;
  $n = $t + 1;
  $fp = fopen('age_b.txt', 'w');
  fwrite($fp, $n);
  fclose($fp);
}
elseif ($age == "c") {
  $fp = fopen('age_c.txt', 'r');
  $filename = 'age_c.txt';
  $contents = fread($fp, filesize($filename));
  $t = (int)$contents;
  $n = $t + 1;
  $fp = fopen('age_c.txt', 'w');
  fwrite($fp, $n);
  fclose($fp);
}
elseif ($age == "d") {
  $fp = fopen('age_d.txt', 'r');
  $filename = 'age_d.txt';
  $contents = fread($fp, filesize($filename));
  $t = (int)$contents;
  $n = $t + 1;
  $fp = fopen('age_d.txt', 'w');
  fwrite($fp, $n);
  fclose($fp);
}

$p =[];
foreach ($_REQUEST['pet'] as $i) {
    array_push($p,$i);
}
if (in_array("a",$p)) {
  $fp = fopen('pet_a.txt', 'r');
  $filename = 'pet_a.txt';
  $contents = fread($fp, filesize($filename));
  $t = (int)$contents;
  $n = $t + 1;
  $fp = fopen('pet_a.txt', 'w');
  fwrite($fp, $n);
  fclose($fp);
}
if (in_array("b",$p)) {
  $fp = fopen('pet_b.txt', 'r');
  $filename = 'pet_b.txt';
  $contents = fread($fp, filesize($filename));
  $t = (int)$contents;
  $n = $t + 1;
  $fp = fopen('pet_b.txt', 'w');
  fwrite($fp, $n);
  fclose($fp);
}
if (in_array("c",$p)) {
  $fp = fopen('pet_c.txt', 'r');
  $filename = 'pet_c.txt';
  $contents = fread($fp, filesize($filename));
  $t = (int)$contents;
  $n = $t + 1;
  $fp = fopen('pet_c.txt', 'w');
  fwrite($fp, $n);
  fclose($fp);
}
$o = $_REQUEST['other'];
if ($o != "other") {
  $fp = fopen('other1.txt', 'a');
  fwrite($fp, $o);
  fwrite($fp,"<br>");
  fclose($fp);
}

 ?>
 <br>
 <a href="/question/index_q.html" accesskey="i">index <span>accesskey="i"</a>
<br>
 <a href="/question/q.html" accesskey="q">question <span>accesskey="q"</a>
 <br>
 <a href="/question/result.php" accesskey="-">question-result <span>accesskey="-"</a>
 <br>
 <p id="p"></p>

 <script>
 var x = <?php echo "$age";?>
 document.getElementById("p").innerHTML = "x";


 <?php
 $x = array(1,2,3,4);
 echo implode(" ",$x);
 ?>
