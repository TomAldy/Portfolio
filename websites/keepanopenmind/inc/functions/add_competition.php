<?php
$id = mysql_insert_id();
$name = $_POST['name'];
$host = $_POST['host'];
$date = $_POST['date'];
$content = $_POST['content'];
$user_name = "root";
$dbpassword = "";
$database = "keepanopenmind";
$server = "localhost";
$db_handle = mysql_connect($server, $user_name, $dbpassword);
$db_found = mysql_select_db($database, $db_handle);
if ($db_found) {
$SQL = "INSERT INTO `competitions` (`id`, `title`, `host`, `content`, `end date`) VALUES ('$id', '$name', '$host', '$content', '$date')";
$result = mysql_query($SQL);
mysql_close($db_handle);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="content-type" http-equiv="refresh" content="4; ../../staff/add_competition.php" />
<title>Success! You got everything right!</title>
<link href="../../inc/css/content.css" rel="stylesheet" type="text/css" />
</head>
<body>
<table width="613" border="0" cellpadding="0" cellspacing="0" id="Table1" style="position: absolute; top: 0; left: 0">
<tr>
<td align="center" valign="middle" background="../../images/layout/content/title_bar.png" width="613" height="25" style="background-repeat:no-repeat;;background-position:center center"><font style="font-size:10px" color="#FFFFFF" face="Verdana"><b>The Competition has begun...</b></font></td>
</tr></table><br/><br/><br/>
<img src="../../images/chamil_habbo_003.gif" align="right" />
We have made sure that the competition has been added to the list, be sure to check on the website to make sure it has and everything is running smoothly!<br/><br/>Due to <b>KeepAnOpenMind</b> being in BETA stages, we are sure that if any problems are to occur we will change our method of doing things on here, as we admit we have cut a few corners when creating this website!<br/><br/><br/>
<center>
<b>Congratulations, the competition has been added!</b><br />
<i>Now all you have to do is sit tight until some people enter!</i><br/><br/>
<img src="../../images/Diner_illustration_waitress1.gif" /><br/><br/>
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