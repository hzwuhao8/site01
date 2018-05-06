<?php
$i = 0;
$fn1 = array('age_a.txt','age_b.txt','age_c.txt','age_d.txt','gender_a.txt','gender_b.txt','pet_a.txt','pet_b.txt','pet_c.txt','other1.txt');
$name = array("aa","ab","ac","ad","ga","gb","pa","pb","pc","other");
$name2 = array("aa","ab","ac","ad","ga","gb","pa","pb","pc","other");
foreach ($fn1 as $fn) {
  $f = file_get_contents($fn);
  $name[$i] = $f;
  $i++;
/*

  if (filesize($fn) == 0) {
    $name[$i] = "null";
    $i++;
    continue;
  }
  $fp = fopen($fn, 'r');
  $c = fread($fp, filesize($fn));
  fclose($fp);
  if ($c == "") {
    $name[$i] = "null2";
    $i++;
    continue;
  }
  $name[$i] = $c;
  $i++;
  */
}
$fl=array_combine($name2,$name);
?>
<html>
<head>
<title>result</title>
<script src="/js/jquery-3.3.1.min.js"></script>
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
button{
  font-size:60px;
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
          <td id="ga">male: <?php echo "$fl[ga]";?></td>
          <td id="gb">female: <?php echo "$fl[gb]";?></td>
          <td>/</td>
          <td>/</td>
      </tr>
      <tr>
          <td>age:</td>
          <td id="aa"><20: <?php echo "$fl[aa]";?></td>
          <td id="ab">20~40: <?php echo "$fl[ab]";?></td>
          <td id="ac">20~40: <?php echo "$fl[ac]";?></td>
          <td id="ad">>60: <?php echo "$fl[ad]";?></td>
      </tr>
      <tr>
          <td>pet:</td>
          <td id="pa">NO: <?php echo "$fl[pa]";?></td>
          <td id="pb">cat: <?php echo "$fl[pb]";?></td>
          <td id="pc">dog: <?php echo "$fl[pc]";?></td>
          <td id="other"><?php echo "$fl[other]";?></td>
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
  <button id="re" onclick="re()">re</button>
<script>
function re() {
  $.get("/question/reset.php");
}
</script>

</body>
</html>
