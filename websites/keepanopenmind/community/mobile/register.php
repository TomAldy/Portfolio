<?php 
include "config.php"; 
echo "<center><font face='Verdana' style='font-size: 10px; color: #FFFFFF;'>"; 
//if we have posted the register for we will register this user 
if(isset($_GET['register'])) { 
//check to see if any fields were left blank 
if((!$_POST['username']) || (!$_POST['password']) || (!$_POST['cpassword']) || (!$_POST['email'])) { 
echo "A field was left blank please go back and try again."; 
}else{ 
//posts all the data from the register form 
$username = $_POST['username'];  
$password = $_POST['password'];  
$cpassword = $_POST['cpassword'];  
$email = $_POST['email']; 
$ip = $_SERVER['REMOTE_ADDR'];
$randome = mt_rand(100000000, 999999999);
//check see if the 2 passwords are the same 
if($password == $cpassword) 
{ 
//encrypts the password 8 times 
$password = sha1(md5(md5(sha1(md5(sha1(sha1(md5($password))))))));  
$cname = mysql_query("SELECT `username` FROM `members` WHERE `username` = '$username'");  
$cname= mysql_num_rows($cname);  
//checks to see if the username or email allready exist 
if($cname>=1) {  
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

  document.write("<b>" + hours + ":" + minutes + " " + "</b>")
</script>
</center>
</div>
<meta content="4; register.php" http-equiv="refresh">
<br/><br/><img src="../../images/toolman.png"><br/><br/><i><b>We're sorry, that username is already in use!</b><br/><br/>You will now be redirected back to the registration form...</div></i>
<?php
}else{ 
//gets rid of bad stuff from there username and email 
$username = addslashes(htmlspecialchars($username));  
$email = addslashes(htmlspecialchars($email)); 
$adduser = mysql_query("INSERT INTO `members` (`username`, `password`, `email`, `userlevel`, `mobile`, `ip`) VALUES('$username','$password','$email','2', '07$randome', '$ip')");
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

  document.write("<b>" + hours + ":" + minutes + " " + "</b>")
</script>
</center>
</div><br/><br/><br/>
<img src="../../images/combo_9.gif"><br/><br/>
<b>You are now registered!</b><br/><br/><br/><Br/><br/><div style="height: 1px;"></div><i>Now taking you to the Login Form...</i>
<?php 
} 
}else{
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

  document.write("<b>" + hours + ":" + minutes + " " + "</b>")
</script>
</center>
</div>
<meta content="4; register.php" http-equiv="refresh">
<br/><br/><img src="../../images/Pen_carruing.gif"><br/><br/><i><b>Your password didn't match!</b><br/><br/>You will now be redirected back to the registration form...</div></i>
<?php 
} 
} 
}else{ 
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

  document.write("<b>" + hours + ":" + minutes + " " + "</b>")
</script>
</center>
</div><br/>
<form action="register.php?register" method="post">
<b>Username:</b><br/>
<div class="username">
<input type="text" name="username" size="30" maxlength="25" class="usernamebox">
</div><br/>
<b>Password:</b><br/>
<div class="username">
<input type="password" name="password" size="30" maxlength="25" class="usernamebox">
</div><br/>
<b>Confirm Password:</b><br/>
<div class="username">
<input type="password" name="cpassword" size="30" maxlength="25" class="usernamebox">
</div><br/>
<b>E-mail Address:</b><br/>
<div class="username">
<input type="text" name="email" size="30" maxlength="55" class="usernamebox">
</div><br/>
<center><input type="image" value="Register" src="../../images/mobile/register.png"></center> 
</form><div style="height: 8px;"></div>
<b>Fill in all the details to receive an account!</b>
<?
} 
echo "</center>"; 
?>