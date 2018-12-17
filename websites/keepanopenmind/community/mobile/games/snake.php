<div>
<img src="../../images/mobile/signal.png" align="left"/>
<img src="../../images/mobile/battery.png" align="right"/>
<center>
<script type="text/javascript">
 var currentTime = new Date()
  var hours = currentTime.getHours()
  var minutes = currentTime.getMinutes()

  if (minutes < 10)
  minutes = "0" + minutes

  document.write("<b>" + hours + ":" + minutes + " " + "</b>");
</script>
</center>
</div><br/>
<?php
include("../config.php");
if ($logged['id'])
{
?>
<html>
<head>
<title>Snake!</title>
</head>
<body>

</body>
</html>
<?php
}else{
?>
yooo you not logged in whaaaaaaaaaaaaat?
<?php
}
?>