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
<div style="height: 212px; text-align: left;">
<?php 
include "config.php"; 
if(isset($_GET['user'])) {
$username = addslashes($_GET['user']); 
//querys the db to find the username 
$getuser = mysql_query("SELECT * FROM `members` WHERE `username` = '$username'"); 
//checks see if the username exists in the db  
$usernum = mysql_num_rows($getuser); 
//if it don't exist  
if($usernum == 0)  

{  
//don't exist 

echo ("User Not Found");  

}  
//if it does exist then show there profile 
else{ 
$user = mysql_fetch_array($getuser);  
$fp = @file_get_contents("http://openhabbo.com/api_access.php?api=avatar&user=$user[openhabbo]&direction=4&action=wav&head_direction=3&gesture=sml&size=1");  
$userImage = $fp;
echo " 
<img src=\"$userImage\" border=\"0\" /><br/><br/>
<hr style=\"border:1px dashed white;\">
<b>$user[username]'s Profile</b><br><br> 
<div style=\"text-align:left\"><b>&nbsp;&nbsp;openHabbo Username:</b> <i>$user[openhabbo]</i><br> 
<b>&nbsp;&nbsp;vibeArray Username:</b> <i>$user[vibearray]</i><br> 
<b>&nbsp;&nbsp;Gender:</b> <i>$user[sex]</i><br/></div><hr style=\"border:1px dashed white;\"><br/><a href=\"friendrequest.php?user=TomAldy\"><b>Add as Contact!</b></a> 
"; 

} 
}else{ 
//gets all the members from the database 
$getusers = mysql_query("SELECT * FROM `members` ORDER BY `id` ASC") or die(mysql_error()); 
//loops there name out 
while ($user = mysql_fetch_array($getusers)) {  
echo "<a href='members.php?user=$user[username]'>$user[username]</a><br></div>";  
} 
} 
?>