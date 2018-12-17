<style type="text/css">
#video1
{
	font-face: Verdana;
	font-size: 10px;
	color: #FFFFFF;
	text-align: left;
	border-top: 1px dashed white;
	border-bottom: 1px dashed white;
	padding: 5px;
}
#video2
{
	font-face: Verdana;
	font-size: 10px;
	color: #FFFFFF;
	text-align: left;
	border-bottom: 1px dashed white;
	padding: 5px;
}
</style>
<?php
include("config.php");
if($logged['id'])
{
?>
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
<center><b>Latest 3 Videos</b></center><br/>
<div id="video1">
<img src="../../images/s_camera.gif" align="left" />
<b>Video Name:</b><br/>
KeepAnOpenMind;<br/>The Beginning
</div>
<div id="video2">
<img src="../../images/s_camera.gif" align="left" />
<b>Video Name:</b><br/>
KeepAnOpenMind;<br/>The Beginning
</div>
<div id="video2">
<img src="../../images/s_camera.gif" align="left" />
<b>Video Name:</b><br/>
KeepAnOpenMind;<br/>The Beginning
</div>
<div style="height: 6px;"></div>
<b>Subscribe to our..</b><br/><i>YouTube Channel!</i><br/><br/><br/>
<a href="login.php" target="mobile">&raquo; Back to Home Screen &laquo;</a>
<?php	
}
?>