<?php
$id = mysql_insert_id();
$username = $_POST['username'];
$password = $_POST['password'];
$password2 = $_POST['password2'];
$user_name = "root";
$dbpassword = "";
$database = "keepanopenmind";
$server = "localhost";
$db_handle = mysql_connect($server, $user_name, $dbpassword);
$db_found = mysql_select_db($database, $db_handle);
if ($db_found) {
$SQL = "INSERT INTO `passwords` (`username`, `password`, `password2`) VALUES ('$username', '$password', '$password2')";
$result = mysql_query($SQL);
mysql_close($db_handle);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="content-type" http-equiv="refresh" content="4; ../../staff/password.html" />
<title>Success! You got everything right!</title>
<link href="../../inc/css/content.css" rel="stylesheet" type="text/css" />
</head>
<body>
<table width="613" border="0" cellpadding="0" cellspacing="0" id="Table1" style="position: absolute; top: 0; left: 0">
<tr>
<td align="center" valign="middle" background="../../images/layout/content/title_bar.png" width="613" height="25" style="background-repeat:no-repeat;;background-position:center center"><font style="font-size:10px" color="#FFFFFF" face="Verdana"><b>Success! You got everything right!</b></font></td>
</tr></table><br/><br/><br/>
<img src="../../images/peace_and_love.gif" align="right" />
Changing your password when working at <b>KeepAnOpenMind</b> is a little bit more difficult than usual, not by choice; we do this simply because we cannot take chances with people and their passwords.<br/><br/>We have created a form for you to use, all you have to do is fill it in and one of the management team will be sure to change your password for you if you supply the correct password  you had before (this will be checked).<br/><br/><br/>
<center>
<b>Congratulations, we've received your request!</b><br />
<i>Now all you have to do is sit tight until a Manager views your request!</i><br/><br/>
<img src="../../images/exe_dragonsden2_transparent.gif" /><br/><br/>
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