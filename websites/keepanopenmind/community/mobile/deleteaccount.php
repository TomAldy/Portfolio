<?php
include("config.php");
if ($logged['id'])
{
mysql_query("DELETE FROM `members` WHERE `id` = '$logged[id]'");
?>
<meta content="4; login.php" http-equiv="refresh">
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
</div><br/><br/><br/>
<img src="../../images/safetySteve_sign_left01.gif">
<br/><br/>
<b>Safety Steve will escort you out of the premises!</b><br/><i>Back to the main screen we go...</i>
<?php
}
?>