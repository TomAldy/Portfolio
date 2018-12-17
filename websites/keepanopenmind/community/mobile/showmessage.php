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
</script>
</center><br/>
<?php
include("config.php");
$id = $_GET['id'];
$select = mysql_query("SELECT * FROM `privates` WHERE `pid` = '" . $id . "';"); //get the message's info 
$msg = mysql_fetch_array($select);
if($msg['to'] != $logged['mobile']){
echo "<a href=\"pms.php\">Go Back</a> - This Message Was Not Sent To You"; 
}else{ 
echo"<div style=\"height:212px;text-align: left;padding-left: 6px;\"><center><img src=\"../../images/Old_Scroll_1.gif\"></center><br/><br/><b>Message From:</b><br/>$msg[from2] - <i>($msg[from])</i><br/><br/><b>Message:</b><br/>$msg[content]<br/><br/></div><div style=\"height: 1px;\"></div><div style=\"text-align: left; padding-left: 6px;\"><a href=\"pms.php?page=view&id=$msg[pid]\">&raquo; Reply to Message...</a><br/><a href=\"pms.php?page=delete&id=$msg[pid]\">&raquo; Delete Message...</a></div>";
}
?>