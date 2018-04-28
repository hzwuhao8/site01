<?php
function gender_a()
{
  $fp = fopen('gender_a.txt', 'r');
  $contents = fread($fp, filesize('gender_a.txt'));
  fclose($fp);
  return $contents;
}

function gender_b()
{
  $fp = fopen('gender_b.txt', 'r');
  $contents = fread($fp, filesize('gender_b.txt'));
  fclose($fp);
  return $contents;
}
function age_a()
{
  $fp = fopen('age_a.txt', 'r');
  $contents = fread($fp, filesize('age_a.txt'));
  fclose($fp);
  return $contents;
}
function age_b()
{
  $fp = fopen('age_b.txt', 'r');
  $contents = fread($fp, filesize('age_b.txt'));
  fclose($fp);
  return $contents;
}
function age_c()
{
  $fp = fopen('age_c.txt', 'r');
  $contents = fread($fp, filesize('age_c.txt'));
  fclose($fp);
  return $contents;
}
function age_d()
{
  $fp = fopen('age_d.txt', 'r');
  $contents = fread($fp, filesize('age_d.txt'));
  fclose($fp);
  return $contents;
}
function pet_a()
{
  $fp = fopen('pet_a.txt', 'r');
  $contents = fread($fp, filesize('pet_a.txt'));
  fclose($fp);
  return $contents;
}
function pet_b()
{
  $fp = fopen('pet_b.txt', 'r');
  $contents = fread($fp, filesize('pet_b.txt'));
  fclose($fp);
  return $contents;
}
function pet_c()
{
  $fp = fopen('pet_c.txt', 'r');
  $contents = fread($fp, filesize('pet_c.txt'));
  fclose($fp);
  return $contents;
}

function a()
{
  $fp = fopen('other1.txt', 'r');
  $contents = fread($fp, filesize('other1.txt'));
  fclose($fp);
  return $contents;
}

$fother = fopen('other1.txt','r');
$rs = 7; //= fread($fother, filesize('other1.txt'));
fclose($fother);

?>
<html>
<head>
<title>result</title>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<style media="screen">
table {
  border-collapse: collapse;
  font-size:40px;
}
th {
  height:80px;
}
td {
  width:200px;
  height:60px;
  font-size:30px;
  text-align:center;

}
a{
  font-size:40px;
}
span{
  font-size:20px;
}
</style>
</head>
<body>
  <p id="p"/>
  <table border="1">
    <tr>
        <th>qusetion/choose</th>
        <th>a</th>
        <th>b</th>
        <th>c</th>
        <th>d</th>
    </tr>
      <tr>
          <td>gender:</td>
          <td id="ga"></td>
          <td id="gb"></td>
          <td>/</td>
          <td>/</td>
      </tr>
      <tr>
          <td>age:</td>
          <td id="aa"></td>
          <td id="ab"></td>
          <td id="ac"></td>
          <td id="ad"></td>
      </tr>
      <tr>
          <td>pet:</td>
          <td id="pa"></td>
          <td id="pb"></td>
          <td id="pc"></td>
          <td id="other">
            <?php
              $fp = fopen('other1.txt', 'r');
              $con = fread($fp, filesize('other1.txt'));
              echo "$con";
              fclose($fp);
            ?>
          </td>
      </tr>
  </table>
  <a href="/question/index_q.html" accesskey="i">index <span>accesskey="i"</a>
<br>
  <a href="/question/q.html" accesskey="q">question <span>accesskey="q"</a>
  <br>
  <a href="/question/reset.php" accesskey="r">question-reset <span>accesskey="r"</a>
  <br>
  <a href="/question/result.php" accesskey="-">question-result <span>accesskey="-"</a>
  <br>
<script>
var ga = <?php echo gender_a();?>;
var gb = <?php echo gender_b();?>;
var aa = <?php echo age_a();?>;
var ab = <?php echo age_b();?>;
var ac = <?php echo age_c();?>;
var ad = <?php echo age_d();?>;
var pa = <?php echo pet_a();?>;
var pb = <?php echo pet_b();?>;
var pc = <?php echo pet_c();?>;
$("#ga").text("male: " + ga);
$("#gb").text("female: " + gb);
$("#aa").text("<20: " + aa);
$("#ab").text("20~40: " + ab);
$("#ac").text("40~60: " + ac);
$("#ad").text(">60: " + ad);
$("#pa").text("NO: " + pa);
$("#pb").text("cat: " + pb);
$("#pc").text("dog: " + pc);


</script>



</body>
</html>
