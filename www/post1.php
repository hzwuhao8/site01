
<head>
<title>post1</title>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js">
</script>
</head>
<body>
  <div id="div">
  <?php
  $name = $_REQUEST['a'];
  $l = "<a href ='http://www.baidu.com/'>b</a>";
  $h = "<h1> a </h1>";
  echo $h;
   ?>
  <p id="i">iiiiiii<span id="s1">iii</span>iiiiiiiiiiiiiii<p/>

  <script>
  $("#s1").text()
  </script>

  <p id="p"/>

  <script>
  //var p = "<a href ='http://www.baidu.com/'> b </a>"
  //var p = 9
  var p = "<?php echo $l ?>"
  //document.getElementById('p').innerHTML = p

  $("#p").html(p)

  </script>
</body>
</html>
