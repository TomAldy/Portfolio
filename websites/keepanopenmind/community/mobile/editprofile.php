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
include "config.php"; 
echo "<center>"; 
//checks see if there logged in 
if($logged["id"]) {  
if(isset($_GET["update"])) { 
$email = addslashes(htmlspecialchars($_POST['email']));  
$openhabbo = addslashes(htmlspecialchars($_POST['openhabbo']));  
$vibearray = addslashes(htmlspecialchars($_POST['vibearray']));  
$sex = addslashes(htmlspecialchars($_POST['sex']));  
//checks the sex if its ok 
if(($sex == "Male") || ($sex == "Female")) { 
//updates there profile in the db 
$update = mysql_query("UPDATE `members` SET `email` = '$email', `sex` = '$sex', `openhabbo` = '$openhabbo', `vibearray` = '$vibearray' WHERE `username` = '$logged[username]'");
?>
<meta content="4; editprofile.php" http-equiv="refresh">
<br/><br/>
<img src="../../images/edito_tekislam.gif"><br/><br/><b>Your profile has been updated!</b><br/><i>Back to the form we go...</i>
<?php
} 
//if the sex is invalid 
else{ 
?>
<meta content="4; editprofile.php" http-equiv="refresh">
<br/><br/>
<img src="../../images/angryhabbos2.gif"><br/><br/>
<b>That gender doesn't exist!</b><br/><i>Back to the form...</i>
<?
} 
}else{ 
$getuser = mysql_query("SELECT * FROM `members` WHERE `username` = '$logged[username]'"); 
$user = mysql_fetch_array($getuser);  
?>
<form action="editprofile.php?update" method="post"> 
<b>Email Address:</b><br/>
<div class="username">
<input type="text" name="email" value="<?php echo $user['email']; ?>" class="usernamebox"></div><br/>
<b>openHabbo Username:</b><br/>
<div class="username">
<input type="text" name="openhabbo" value="<?php echo $user['openhabbo']; ?>" class="usernamebox"></div><br/>
<b>vibeArray Username:</b><br/>
<div class="username">
<input type="text" name="vibearray" value="<?php echo $user['vibearray']; ?>" class="usernamebox"></div><br/>
<b>Gender:</b><br/>
<select name="sex" value="<?php echo $user['sex'] ?>" style="border:1 px solid black; font-family: Verdana; font-size: 10px; color: #000000; width: 140px;"> 
<option value="Male">Male</option>  
<option value="Female">Female</option> 
</select>
</div><br/><br/>
<input type="image" value="Update" src="../../images/submit_contact.png"> 
</form>
<br>
<i>Just click the home button to go back!</i>
<?php
} 
}else{ 
echo "You are not logged in."; 
} 
echo "<center>"; 
?>