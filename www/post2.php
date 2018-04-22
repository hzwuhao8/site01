<head>
<title>post2</title>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.20.3/TweenMax.min.js" >
</script>
</head>
<body>
  <?php
  $name = $_GET["b"];
//  echo $name;
   ?>
   <?php
   $c = $_GET["c"];
   echo $c;
    ?>
<p id="p"></p>
<script>
var a = "<?php echo $name;?>"
$("#p").prepend(a)
var tween1 = TweenLite.to($("#p"),3,{x:"+=50"});
var tween2 = TweenLite.to($("#p"),3,{width:2000,hight:100});
</script>

</body>
</html>
