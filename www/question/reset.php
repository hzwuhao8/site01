<?php
/*
$fp = fopen('gender_a.txt', 'w');
fwrite($fp, 0);
fclose($fp);
$fp = fopen('gender_b.txt', 'w');
fwrite($fp, 0);
fclose($fp);
$fp = fopen('age_a.txt', 'w');
fwrite($fp, 0);
fclose($fp);
$fp = fopen('age_b.txt', 'w');
fwrite($fp, 0);
fclose($fp);
$fp = fopen('age_c.txt', 'w');
fwrite($fp, 0);
fclose($fp);
$fp = fopen('age_d.txt', 'w');
fwrite($fp, 0);
fclose($fp);
$fp = fopen('pet_a.txt', 'w');
fwrite($fp, 0);
fclose($fp);
$fp = fopen('pet_b.txt', 'w');
fwrite($fp, 0);
fclose($fp);
$fp = fopen('pet_c.txt', 'w');
fwrite($fp, 0);
fclose($fp);
$fp = fopen('other1.txt', 'w');
fwrite($fp, "other:");
fclose($fp);
*/
function areset()
{
  $fp = fopen('gender_a.txt', 'w');
  fwrite($fp, 0);
  fclose($fp);
  echo "Re";
}
 ?>

 <html>
 <head>
 <title>reset</title>
 <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js">
 </script>
 <style media="screen">
   a{
     font-size:40px;
   }
   span{
     font-size:20px;
   }
 </style>
 <script>
 function re() {
   $("#h1").text("r");
 }
 </script>
 </head>
 <body>
   <p id="h1" onclick="re()">R</p>

   <a href="/question/index_q.html" accesskey="i">index <span>accesskey="i"</a>
  <br>
   <a href="/question/q.html" accesskey="q">question <span>accesskey="q"</a>
   <br>
   <a href="/question/reset.php" accesskey="r">question-reset <span>accesskey="r"</a>
   <br>
   <a href="/question/result.php" accesskey="-">question-result <span>accesskey="-"</a>
   <br>

 </body>
 </html>
