<?php
$name = $_REQUEST['name'];
setcookie("name","$name",time()+3600);
?>
<html>
<head>
<title></title>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js">
</script>
</head>
<body>
<p id="p">welcome: </p>
<form action="cokkie2.php" method="get">
  <input id="in" name="name" type="text" value="name"></input>
  <input type="submit"></input>
</form>
<script>
function p() {
  x = document.getElementById("in").setAttribute("value","");
}
document.getElementById("in").onclick=function(){p()};
var y = document.cookie;
function str() {
  var p = y.indexOf("=");
  p += 1
  var na = y.substring(p)
  $("#p").append(na)
}
str()
 </script>
</body>
</html>
