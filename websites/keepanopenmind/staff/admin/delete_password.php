<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="refresh" content="6; password_requests.php" />
<title>Now the wait begins...</title>
<link href="../../inc/css/content.css" rel="stylesheet" type="text/css" />
</head>
<body>
<table width="613" border="0" cellpadding="0" cellspacing="0" id="Table1" style="position: absolute; top: 0; left: 0">
<tr>
<td align="center" valign="middle" background="../../images/layout/content/title_bar.png" width="613" height="25" style="background-repeat:no-repeat;;background-position:center center"><font style="font-size:10px" color="#FFFFFF" face="Verdana"><b>Now the wait begins...</b></font></td>
</tr></table><br><br />
<br />
<img src="../../images/frank_frank_03.gif" align="right" />
<b>All these people losing their passwords or just forgetting change them..</b><br />
<i>Will they never learn to keep them safe or remember them?</i><br />
<br />
These are the password change requests, now due to the nature of the system we use; only the owner and or co-owner can do this! Why, you ask? It is because all of the information that needs to be changed cannot be changed simply by a form, it is too secure to access and therefore needs to be changed in all of the files.<br/><br/>We have given you the option to view these so that if no higher adminstration of management is online, you can get in contact with them as soon as possible to let them know that a password needs changing...<br/><br/><br/>
<center>
<?php
include("../../inc/functions/config.php");
$id = $_GET['id'];
mysql_query("DELETE FROM `passwords` WHERE `id` = '$id'");
echo"<b>You have successfully deleted the password request!</b><br />
<i>You will now be taken back to the list...</i><br/><br/><img src='../../images/gc_frank_desk.gif'>";
?>
</center>
</body>
</html>