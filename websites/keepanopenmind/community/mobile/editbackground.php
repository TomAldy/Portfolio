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
$background = $_POST['background'];  
$update = mysql_query("UPDATE `members` SET `background` = '$background' WHERE `username` = '$logged[username]'");
?>
<meta content="4; login.php" http-equiv="refresh">
<br>
<img src="../../images/Bam_in_present.gif"><br/><br/>
<b>Your new theme is ready!</b><br/><i>Redirecting you back to the main menu...</i>
<? 
}else{ 
$getuser = mysql_query("SELECT * FROM `members` WHERE `username` = '$logged[username]'"); 
$user = mysql_fetch_array($getuser);  
?>
<br/>
<img src="../../images/Black_002_w03.gif"><br/><br/>
<form action="editbackground.php?update" method="post"> 
<b>Background:</b><br/><br/>
<select name="background" style="border:1 px solid black; font-family: Verdana; font-size: 10px; color: #000000; width: 140px;"> 
<option value="../../images/mobile/background.png">Grey</option>  
<option value="../../images/mobile/background2.png">Blue</option> 
<option value="../../images/mobile/background3.png">Red</option> 
<option value="../../images/mobile/background4.png">Green</option> 
<option value="../../images/mobile/background5.png">Pink</option> 
<option value="../../images/mobile/background6.png">Orange</option>
<option value="../../images/mobile/background7.png">Yellow</option>
 
</select>
</div><br/><br/>
<input type="image" value="Update" src="../../images/submit_contact.png"> 
</form>
<br>
<div style="height: 7px;"></div>
<i>Just click the home button to go back!</i>
<?php
} 
}else{ 
echo "You are not logged in."; 
}
?>