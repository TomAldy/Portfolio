<?php
include("../inc/functions/config.php");
include "../inc/functions/ban.php";
checkban($_SERVER['REMOTE_ADDR']);
$ip = $_SERVER['REMOTE_ADDR'];
$rquery = mysql_query("SELECT * FROM `alert`"); // We must use a MySQL query to grab the information from the "alert" table.
$m=mysql_fetch_assoc($rquery); // We will use a while here to let us grab the information and display it like "$m[ip]".
if($m['ip'] == $ip){ // Checks if the users IP is the same as the one in the database.
?>
<div id="alert">
<div id="alert_top">
</div>
<div id="alert_mid"><center><?php echo $m['alert']; ?><br/><br/><a href="javascript: void(0);"><img src="images/alert/ok.png" border="0" onclick="Effect.toggle('alert','appear'); return false;"/></a></center></div>
<div id="alert_bottom"></div>
</div>
<? // Open our PHP tags again to show we are entering PHP again.
mysql_query("DELETE FROM `alert` WHERE ip = '$m[ip]'"); // Let's delete the alert from the database after it is viewed.
} // End our if.
$check = mysql_query("SELECT * FROM `close`");
//Gets the information from the database.
$closed = mysql_fetch_array($check);
//Gets the array of data in the database
if($closed['closed'] == "yes")
//If the database field `closed` contains yes
{
echo"
<div id=\"overlay\">
<a href=\"index.php\"><img src=\"images/maintenance/disconnected.png\" border=\"0\"></a>
</div>";
}
?>