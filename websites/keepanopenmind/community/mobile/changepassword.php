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
if($logged['id']) {  
if(isset($_GET['update'])) { 
//posts the passwords 
$oldpassword = sha1(md5(md5(sha1(md5(sha1(sha1(md5($_POST['oldpassword']))))))));  
$newpassword = sha1(md5(md5(sha1(md5(sha1(sha1(md5($_POST['newpassword'])))))))); 
$cnewpassword = sha1(md5(md5(sha1(md5(sha1(sha1(md5($_POST['cnewpassword'])))))))); 
//get the users old info from the database 
$info = mysql_query("SELECT * FROM `members` WHERE `username` = '$logged[username]'");  

$info = mysql_fetch_array($info); 
//if the old password matches the password in the database we continue 

if($info['password'] == $oldpassword) { 
//if the new password and conformation password are the same continue 
if($newpassword == $cnewpassword) { 
$update = mysql_query("UPDATE `members` SET `password` = '$newpassword' WHERE `username` = '$logged[username]'");
echo "Password Updated, You will need to relogin with your new password."; 
unset($_SESSION['id']); 
unset($_SESSION['password']); 
}else{ 
echo "Your new password and conformation password do not match!"; 
} 
}else{ 
echo "Your old password does not match the database password!"; 
} 
}else{ 
//shows the form if not already updated 
?>
<img src="../../images/s_area_safe.gif"><br/><br/>
<form action="changepassword.php?update" method="post"> 
<b>Old Password:</b><br/>
<div class="username">
<input type="password" name="oldpassword" class="usernamebox">
</div><br/>
<b>New Password:</b><br/>
<div class="username">
<input type="password" name="newpassword" class="usernamebox">
</div><br/>
<b>Confirm Password:</b><br/>
<div class="username">
<input type="password" name="cnewpassword" class="usernamebox">
</div><br/> 
<input type="image" value="Change" src="../../images/submit_contact.png"> 
</form>
<div style="height: 6px;"></div>
<i>Just click the home button to go back!</i>
<?php
} 
}else{ 
echo "You are not logged in."; 
} 
echo "<center>"; 
?>