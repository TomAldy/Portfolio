<?php
$ip = $_SERVER['REMOTE_ADDR'];
$type = $_POST['type'];
$to = $_POST['to'];    
$message = $_POST['message']; 
$openhabbo = $_POST['openhabbo'];  
$subject = "$type from $openhabbo ($ip)";
$header="This is a message from $openhabbo from the openHabbo Hotel, they have a $type for you, see it below!";
$send_contact=mail($to,$subject,$message,$header);
if($send_contact){
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Send a Request!</title>
<link href="../inc/css/content.css" rel="stylesheet" type="text/css" />
</head>
<body>
<table width="613" border="0" cellpadding="0" cellspacing="0" id="Table1">
<tr>
<td align="center" valign="middle" background="../images/layout/content/title_bar.png" width="613" height="25" style="background-repeat:no-repeat;;background-position:center center"><font style="font-size:10px" color="#FFFFFF" face="Verdana"><b>KeepAnOpenMind Request Line!</b></font></td>
</tr></table><br>
<img src="../images/trax_dance.gif" align="right" />
Welcome to the Requests and Shoutouts page, this request line has been made specifically for any DJ's that work within KeepAnOpenMind, they receive your requests and play the song you like if they see it. Please fill in this form when you want to Request a song to be played on the Radio, have your shoutout read, or you just want to contact the DJ.<br>
<br>
Your IP Address is logged for security reasons, and your IP Address is: <b><?php echo $_SERVER['REMOTE_ADDR']; ?></b><br/><br/><br/><br/><center>
<img src="../images/explore_rapper_1.gif" /><br /><br/>Congratulations, <? echo $openhabbo ?>! Your request has successfully been sent!<br/><i>Wait to see if the DJ plays your request!</i></center>
</body>
</html>
<?
}else{
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Send a Request!</title>
<link href="../inc/css/content.css" rel="stylesheet" type="text/css" />
</head>
<body>
<table width="613" border="0" cellpadding="0" cellspacing="0" id="Table1">
<tr>
<td align="center" valign="middle" background="../images/layout/content/title_bar.png" width="613" height="25" style="background-repeat:no-repeat;;background-position:center center"><font style="font-size:10px" color="#FFFFFF" face="Verdana"><b>KeepAnOpenMind Request Line!</b></font></td>
</tr></table><br>
<img src="../images/trax_dance.gif" align="right" />
Welcome to the Requests and Shoutouts page, this request line has been made specifically for any DJ's that work within KeepAnOpenMind, they receive your requests and play the song you like if they see it. Please fill in this form when you want to Request a song to be played on the Radio, have your shoutout read, or you just want to contact the DJ.<br>
<br>
Your IP Address is logged for security reasons, and your IP Address is: <b><?php echo $_SERVER['REMOTE_ADDR']; ?></b><br/><br/><br/><br/><center>
<img src="../images/explore_rapper_1.gif" /><br /><br/>Unfortunaetly, <? echo $openhabbo ?>! Your request was not able to be sent!<br/><i>Try again later!</i></center>
</body>
</html>
<?
}
?>