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
<center><b>Contact List</b><br/>-----------------------------------</center>
<?php
include("config.php");
$page = isset($_GET['page']) ? $_GET['page'] : null;
switch($page){
default:
$getfriends = mysql_query( "SELECT * FROM `friends` WHERE `username` = '$logged[username]' ORDER BY `friendname`" );
while ($friends = mysql_fetch_array($getfriends)) 
{ 
echo "<div style=\"height:188px\"><div style=\"text-align: left;padding-left: 6px;\"><b><a href=\"pms.php?page=compose&number=$friends[mobile]\" target=\"mobile\">[TEXT]</a> - <a href=\"contacts.php?page=delete&id=$friends[id]\" target=\"mobile\">[REMOVE]</a> ~ </b>$friends[friendname]</div>-----------------------------------</div>"; 
} 
if ($friends == 0)
{
	echo"<div style=\"height:188px\"><br/><img src=\"../../images/safetySteve_sign_left01.gif\"><br/><br/><b>You currently have...</b><br/><i>0 contacts!</i><br/>-----------------------------------</div>";
}
break;



case 'delete': 
$id = $_GET['id'];
mysql_query("DELETE FROM `friends` WHERE `id` = '$id'");
echo"<div style=\"height:188px\"><meta http-equiv=\"refresh\" content=\"2; contacts.php\"><img src=\"../../images/frank_frank_20.gif\"><br/><br/><b>Goodbye...</b><br/><i>You have successfully deleted the user from your contacts list!</i></div>";
break;
}
?>
<div style="padding-left: 8px;text-align:left;">
<a href="contacts.php" target="mobile">&raquo; Contact List</a><br/>
<a href="newfriends.php" target="mobile">&raquo; Contact Requests</a><br/>
</div>