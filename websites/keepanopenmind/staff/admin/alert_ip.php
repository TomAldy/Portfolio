<link href="../../inc/css/content.css" rel="stylesheet" type="text/css" />
<style type="text/css">
.username
{
 margin:0;
 height:20px;
 width:146px;
 background:url('../../images/contact_bg.png') no-repeat bottom;
}
.usernamebox
{
 background:none;
 border: 0;
 width:134px;
 height:17px;
 margin:0;
 padding: 1px 7px 0px 7px;
 font-family:Verdana, Arial, Helvetica, sans-serif;
 font-size:10px;
}
.message_box
{
 margin:0;
 height:100px;
 width:220px;
 background:url('../../images/message_bg.png') no-repeat bottom;
}
.message
{
 background:none;
 border:none;
 width:209px;
 height:97px;
 margin:0;
 padding-top: 6px;
 padding-bottom: 8px;
 padding-right: 7px;
 padding-left: 7px;
 font-family:Verdana, Arial, Helvetica, sans-serif;
 font-size:10px;
}
</style>
<?php
// Tells the file that we are starting a PHP file.
include("../../inc/functions/config.php"); // Includes configuration file, to connect to the database.
$alertme = $_POST['alert']; 
if ($alertme) { // Asking if the form has been sent, if it has let's carry on...  
$ip = $_POST['ip']; // The IP variable, without this the whole script wouldn't work!  
$alert1 = $_POST['alert1']; // We need a message to show in the alert, don't we? 
if($alert1==NULL) { // If the message in the alert is blank.  
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="refresh" content="4;url=alert_ip.php">
<title>Closing the Fansite</title>
</head>
<body>
<table width="613" border="0" cellpadding="0" cellspacing="0" id="Table1" style="position: absolute; top: 0; left: 0">
<tr>
<td align="center" valign="middle" background="../../images/layout/content/title_bar.png" width="613" height="25" style="background-repeat:no-repeat;;background-position:center center"><font style="font-size:10px" color="#FFFFFF" face="Verdana"><b>Alerting an IP Address</b></font></td>
</tr></table><br/><br/><br/>
<img src="../../images/article_medieval.gif" align="right" />
<b>So, you want to alert an IP address?</b><br/><br/><i>Well, let's get too it...</i><br/><br/>We realise that from time to time people come along and cause mischief around the website, there will always be that person who finds a flaw in the websites security or who will decide to go out of their way in order to cause problems. We know that all you want to do is complain and shout about it, but the best you can do is ban them for now... and here's the tool to do it!<br/><br/><br/><br/><br/><br/><br/>
<center>
<b>Unfortunaetly, something went wrong; by the looks of things you didn't write a message!</b><br/><i>You will now be redirected back to the form to fix the issue!</i>
<br/><br/>
<img src="../../images/frank_sorry.gif" />
<?php
}else{ // Woohoo! Everything is running smoothly, let's carry on.
$alert1 = htmlspecialchars($alert1); // Stop pests from entering HTML into the form, it won't work anyway. 
$update = mysql_query("INSERT INTO alert (ip, alert) VALUES('$ip','$alert1')"); // Insert the information into the Table.    
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="refresh" content="4;url=alert_ip.php">
<title>Closing the Fansite</title>
</head>
<body>
<table width="613" border="0" cellpadding="0" cellspacing="0" id="Table1" style="position: absolute; top: 0; left: 0">
<tr>
<td align="center" valign="middle" background="../../images/layout/content/title_bar.png" width="613" height="25" style="background-repeat:no-repeat;;background-position:center center"><font style="font-size:10px" color="#FFFFFF" face="Verdana"><b>Alerting an IP Address</b></font></td>
</tr></table><br/><br/><br/>
<img src="../../images/article_medieval.gif" align="right" />
<b>So, you want to alert an IP address?</b><br/><br/><i>Well, let's get too it...</i><br/><br/>We realise that from time to time people come along and cause mischief around the website, there will always be that person who finds a flaw in the websites security or who will decide to go out of their way in order to cause problems. We know that all you want to do is complain and shout about it, but the best you can do is ban them for now... and here's the tool to do it!<br/><br/><br/><br/><br/><br/><br/>
<center>
<b>Your message has been sent successfully!</b><br/>
<i>Let's hope the user gets it soon!</i><br/><br/>
<img src="../../images/summer_editorial_1.gif" /><br/><br/><i>Please wait a few seconds for the form to load again...</i>
<img src="" />
<?php
} // Let us end that else we started a while back.
} // Never forget to close and if. 
else // Wait, we haven't end the form yet, let's display it.    
{ // Opens the else to enter our code ect.
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Closing the Fansite</title>
</head>
<body>
<table width="613" border="0" cellpadding="0" cellspacing="0" id="Table1" style="position: absolute; top: 0; left: 0">
<tr>
<td align="center" valign="middle" background="../../images/layout/content/title_bar.png" width="613" height="25" style="background-repeat:no-repeat;;background-position:center center"><font style="font-size:10px" color="#FFFFFF" face="Verdana"><b>Alerting an IP Address</b></font></td>
</tr></table><br/>
<img src="../../images/article_medieval.gif" align="right" />
<b>So, you want to alert an IP address?</b><br/><br/><i>Well, let's get too it...</i><br/><br/>We realise that from time to time people come along and cause mischief around the website, there will always be that person who finds a flaw in the websites security or who will decide to go out of their way in order to cause problems. We know that all you want to do is complain and shout about it, but the best you can do is ban them for now... and here's the tool to do it!<br/><br/><br/><br/><br/><br/><br/>
<center>
<form method="post">
<b>IP:</b><br/><div class="username"><input type="text" name="ip" class="usernamebox"></div><br/><br/>
<b>Message:</b><br/><div class="message_box"><textarea name="alert1" class="message"></textarea></div><br/><br/>
<input type="image" name="alert" value="ALERT" src="../../images/staff/alert_ok.png">
</form>
<?php 
} // End the form after entering all the information.
?>
</center>
</body>
</html>