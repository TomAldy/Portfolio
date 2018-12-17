<?php
$id = $_POST['id'];
$alert = $_POST['alert'];
$user_name = "root";
$dbpassword = "";
$database = "keepanopenmind";
$server = "localhost";
$db_handle = mysql_connect($server, $user_name, $dbpassword);
$db_found = mysql_select_db($database, $db_handle);
if ($db_found) {
$SQL = "INSERT INTO `sitealert` (`id`, `sitealert`) VALUES ('$id', '$alert')";
$result = mysql_query($SQL);
mysql_close($db_handle);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="content-type" http-equiv="refresh" content="4; ../../staff/admin/mass_alert.php" />
<title>The alert has been sent!</title>
<link href="../../inc/css/content.css" rel="stylesheet" type="text/css" />
</head>
<body>
<table width="613" border="0" cellpadding="0" cellspacing="0" id="Table1" style="position: absolute; top: 0; left: 0">
<tr>
<td align="center" valign="middle" background="../../images/layout/content/title_bar.png" width="613" height="25" style="background-repeat:no-repeat;;background-position:center center"><font style="font-size:10px" color="#FFFFFF" face="Verdana"><b>The alert has been sent! ;o</b></font></td>
</tr></table><br/><br/><br/>
<img src="../../images/Newsie_Lotus_thumb.gif" align="left" />
As a part of the Management team at <b>KeepAnOpenMind</b>, we have created a tool that allows you to send a mass message out to everyone viewing the website for your own pleasure! We believe that being able to interact with the visitors of our website, shows that we care more than others do! We like to keep them in the known, hence the news! ;) But this can also help remove the barrier between visitors and staff!<br />
<br />
Of course, there are a few rules, these being...<br />
<br />
<i>
&bull; Any flooding will not be tolerated, so don't do it.<br/>
&bull; Any swearing will be found out about and the user will be banned from the website.<br/>
&bull; Keep the message short, too much information can make the visitors not care.<br/>
&bull; Do not use the alert tool for your own personal gain.
</i> 
<br/><br/><br/>
<center>
<b>Woohoo! The site alert has been sent!</b><br />
<i>We pray you didn't send them some annoying message! ;)</i><br/><br/>
<img src="../../images/natasha_image.gif" /><br/><br/>
<i>You will now be redirected back to the form...</i>
</center>
</body>
</html>
<?php
}
else {
print "Database NOT Found ";
mysql_close($db_handle);
}
?>