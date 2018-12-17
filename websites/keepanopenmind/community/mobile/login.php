<?php 
include "config.php"; 
if($logged['id']) { 
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
<center>
<a href="pms.php" target="mobile"><img src="../../images/mobile/icons/texts.png" border="0" /></a><a href="contacts.php" target="mobile"><img src="../../images/mobile/icons/contacts.png" border="0" /></a><a href="../games/index.html" target="main" onclick="javascript: alert('Taking you to the KeepAnOpenMind Arcade!');"><img src="../../images/mobile/icons/games.png" border="0"/></a><a href="../../images/pictures/index.php" target="_blank"><img src="../../images/mobile/icons/pictures.png" border="0" /></a><a href="videos.php" target="mobile"><img src="../../images/mobile/icons/videos.png" border="0" /></a><img src="../../images/mobile/icons/podcasts.png" style="opacity: 0.5;"/><a href="search.php" target="mobile"><img src="../../images/mobile/icons/search.png" border="0" /></a><img src="../../images/mobile/icons/updates.png" style="opacity: 0.5;" /><a href="settings.php" target="mobile"><img src="../../images/mobile/icons/settings.png" border="0" /></a>
</center><br/>
<div style="padding-left: 5px;padding-top: 5px;text-align: left;">
<b>Welcome, <?php echo $logged['username']; ?>!</b><br/><b>Your number is:</b><i> <?php echo $logged['mobile']; ?></i>
</div>
<?php
}elseif(isset($_GET['login'])) { 
$username = htmlspecialchars(addslashes($_POST['username']));  
$password = sha1(md5(md5(sha1(md5(sha1(sha1(md5($_POST['password'])))))))); 
$uinfo = mysql_query("SELECT * FROM `members` WHERE `username` = '$username'") or die(mysql_error()); 
$checkuser = mysql_num_rows($uinfo); 
if($checkuser == '0') { 
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
<center>
</div><br/><br/><br/><br/>
<img src="../../images/frank_sorry.gif"><br/><br/>
<b>That user does not exist!</b><br/><i>Now taking you back to the login form...</i></center>
<?php
}else{ 
$udata = mysql_fetch_array($uinfo); 
if($udata['password'] == $password) { 
$query = mysql_query("SELECT * FROM `members` WHERE `username` = '$username'") or die(mysql_error()); 
$user = mysql_fetch_array($query); 
$_SESSION['id'] = "$user[id]"; 
$_SESSION['password'] = "$user[password]"; 
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
</script><br/><br/><br/><br/>
<img src="../../images/holding_hands.gif"><br/><br/><b>You are now logged in!</b><br/><i>Please wait...</i></center>
<?php
}else{ 
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
<center>
</div><br/><br/><br/><br/>
<img src="../../images/frank_frank_01.gif"><br/><br/>
<b>The password was incorrect!</b><br/><i>Now taking you back to the login form...</i></center>
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
<img src="../../images/mobile_phone.gif"><br/><br/>
<form action="login.php?login" method="post"> 
<b>Username:</b><br/>
<div class="username">
<input type="text" name="username" size="30" maxlength="25" class="usernamebox">
</div><br/>
<b>Password:</b><br/>
<div class="username">
<input type="password" name="password" size="30" maxlength="25" class="usernamebox">
</div><br/>
<input type="image" value="Login" src="../../images/submit_contact.png">
</form><br/>
<i>Register by clicking <b><a href="register.php" target="mobile">here!</a></b></i>
</center>
<?
}
?>