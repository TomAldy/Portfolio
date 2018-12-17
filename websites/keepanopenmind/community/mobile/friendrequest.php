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
<? 
include "config.php"; //include config 
if ($logged['username']){ //checks user is logged in 
$user = isset($_GET['user']) ? $_GET['user'] : null;
if ($user){ //gets username 
$username = htmlspecialchars($user); //friend 
$by = $logged['username']; //you 
$mobile = $logged['mobile'];
$query = mysql_query("INSERT INTO `friend_requests` ( `username` , `by` , `mobile`) VALUES ( '$username' , '$by' , '$mobile')"); //inserts the request
echo ( "
<meta http-equiv=\"refresh\" content=\"4; login.php\">
<br/><br/><br/><img src=\"../../images/newoutfits.gif\"><br/><br/><b>Your request has been sent to...</b><br/><i>$username<br/><br/><br/><br/><div style=\"height: 4px;\"></div>Taking you back to the main menu...</i>" ); //echos completion 
} else { 
echo ( "No request was made" ); // or no request sent 
} 
} else { 
echo ( "You need to be logged in" ); //not logged in 
} 
?> 