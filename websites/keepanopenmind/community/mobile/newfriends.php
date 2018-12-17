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
</div><br/>
<?php 
include "config.php"; // inlcudes config 

if ($logged['username']) { //checks user is logged in 
$friends = isset($_GET['friends']) ? $_GET['friends'] : null;
switch ($friends) { //allows multiple pages 
default: 
$get = mysql_query( "SELECT * FROM `friend_requests` WHERE `username` = '$logged[username]' LIMIT 3"); //gets requests 
$list = mysql_num_rows($get);
if($list == 0)
{
	echo"<div style=\"height:212px\">
<center><b>Latest 3 Contact Requests</b></center>
-----------------------------------<br/><br/><img src=\"../../images/faceoff_thumb.gif\"><br/><br/><b>You currently have...</b><br/><i>0 contact requests!</i>";
}else{
echo"
<div style=\"height:212px\">
<center><b>Latest 3 Contact Requests</b></center>
-----------------------------------";
while ($reqs = mysql_fetch_array($get)) 
{ 
echo "
<table width=\"100%\" cellpadding=\"3\" cellspacing=\"0\" border=\"0\" id=\"Table1\">
<tr>
<td align=\"center\" valign=\"middle\" width=\"38\" height=\"44\">";
if($logged['sex'] == "Male")
{
echo"<img src=\"../../images/male.gif\">";
}elseif($logged['sex'] == "Female")
{
echo"<img src=\"../../images/female.gif\">";	
}else{
echo"<img src=\"../../images/alert_triangle.gif\">";
}
echo("</td>
<td align=\"left\" valign=\"middle\" width=\"222\" height=\"44\"><font face=\"Verdana\" style=\"font-size: 10px; color: #FFFFFF;\">$reqs[by] wants to be friends with you!<br/> 
<a href='newfriends.php?friends=accept&user=$reqs[by]&mobile=$reqs[mobile]'>Accept</a> <b>|</b>
<a href='newfriends.php?friends=delete&user=$reqs[by]'>Delete</a>
</td>
</tr>
</table></font>
-----------------------------------"); //displays requests and shows accept delete links 
} 
}
break; 

case 'accept': //accept page 
if ($_GET['user']) { //get username 

$add = mysql_query( "INSERT INTO `friends` (`friendname` , `username` , `mobile`) VALUES ('$_GET[user]' , '$logged[username]' , '$_GET[mobile]') "); // add to your friends list
$delete = mysql_query( "DELETE FROM `friend_requests` WHERE `by` = '$_GET[user]' "); // deletes friend request 
echo ( "<meta http-equiv=\"refresh\" content=\"3; newfriends.php\"><div style=\"height:212px\"><br/><br/><img src=\"../../images/drink.gif\"><br/><br/><b>$_GET[user] has been added as a friend!</b><br/><i>...and the request has been deleted!</i>" ); // echos the completion 
} 
break; //ends accept page 

case 'delete': // delete page 
if ($_GET['user']) { //gets username 
$delete = mysql_query( "DELETE FROM `friend_requests` WHERE `by` = '$_GET[user]' "); // deletes friend request 
echo ( "<meta http-equiv=\"refresh\" content=\"3; newfriends.php\"><div style=\"height:212px\"><br/><br/><img src=\"../../images/callie_rain.gif\"><br/><br/><b>$_GET[user] will not be happy</b><br/><i>that the request has been deleted!</i>" ); // echos completion 
} 
break; //ends delete page 
} // ends switch 
} else { 
echo ( "You need to be logged in" ); // not logged in 
} 
?> 
</div>
<div style="padding-left: 8px;text-align:left;">
<a href="contacts.php" target="mobile">&raquo; Contact List</a><br/>
<a href="search.php" target="mobile">&raquo; Find a new contact!</a><br/>
</div>
