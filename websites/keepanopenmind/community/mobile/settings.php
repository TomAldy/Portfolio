<?php
include("config.php");
if ($logged['id'])
{
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
</center><br/>
<div style="text-align:left;">
<img src="../../images/s_box_1.gif" align="left">
<div style="height: 36px;padding-top: 5px;"><a href="editprofile.php" target="mobile"><b>Edit Details</b></a><br/>
<i>Something changed?</i></div>
<img src="../../images/s_box_2.gif" align="left">
<div style="height: 36px;padding-top: 5px;"><b><a href="changepassword.php" target="mobile">Change Password</a></b><br/>
<i>Increase security!</i></div>
<img src="../../images/s_box_3.gif" align="left">
<div style="height: 36px;padding-top: 5px;"><b><a href="editbackground.php" target="mobile">Change Theme</a></b><br/>
<i>Change the look!</i></div>
<img src="../../images/s_box_4.gif" align="left">
<div style="height: 36px;padding-top: 5px;"><b><a href="logout.php" target="mobile">Logout</a></b><br/>
<i>Going somewhere?</i></div>
<img src="../../images/s_box_5.gif" align="left">
<div style="height: 36px;padding-top: 5px;"><b><a href="deleteaccount.php" target="mobile">Delete Account</a></b><br/>
<i>Don't click this! :(</i></div>
</div>
<div style="height: 7px;"></div>
<center>
<i>Just click the home button to go back!</i>
</center>
<?php
}
?>