<?php 
include "config.php"; 
unset($_SESSION['id']); 
unset($_SESSION['password']); 
//loggedout message 
?>
<meta http-equiv='Refresh' content='4; URL=login.php'/>
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

  document.write("<b>" + hours + ":" + minutes + " " + "</b>")
</script><br/><br/><br/>
<img src="../../images/article_psms.gif"><br/><br/><b>You are now logged out!</b><br/><i>Now taking you to the login form...</i>
</center>