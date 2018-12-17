<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Change Password Requests</title>
<link href="../../inc/css/content.css" rel="stylesheet" type="text/css" />
</head>
<body>
<table width="613" border="0" cellpadding="0" cellspacing="0" id="Table1" style="position: absolute; top: 0; left: 0">
<tr>
<td align="center" valign="middle" background="../../images/layout/content/title_bar.png" width="613" height="25" style="background-repeat:no-repeat;;background-position:center center"><font style="font-size:10px" color="#FFFFFF" face="Verdana"><b>Change Password Requests</b></font></td>
</tr></table><br><br />
<br />
<img src="../../images/frank_frank_03.gif" align="right" />
<b>All these people losing their passwords or just forgetting change them..</b><br />
<i>Will they never learn to keep them safe or remember them?</i><br />
<br />
These are the password change requests, now due to the nature of the system we use; only the owner and or co-owner can do this! Why, you ask? It is because all of the information that needs to be changed cannot be changed simply by a form, it is too secure to access and therefore needs to be changed in all of the files.<br/><br/>We have given you the option to view these so that if no higher adminstration of management is online, you can get in contact with them as soon as possible to let them know that a password needs changing...<br/><br/><br/>
<?php
include("../../inc/functions/config.php");
$r = mysql_query("SELECT * FROM `passwords`");
while($m = mysql_fetch_array($r))
{
$id = $m['id'];
$username = $m['username'];
$password = $m['password'];
$password2 = $m['password2'];
?>
<center>
<table width="90%" cellpadding="10" cellspacing="1" border="0" id="Table1" style="font-family:Verdana;font-size:10px;">
<tr>
<td align="center" valign="middle" width="49" height="54" bgcolor="#D8D8D8"><a href="delete_password.php?id=<?php echo $id ?>"><img src="../../images/staff/delete.png" border="0"></a></td>
<td align="left" valign="middle" width="278" height="54" bgcolor="#D8D8D8" style="padding-left: 6px;"><b>Username:</b> <?php echo $username ?><br/><b>Current Password:</b> <?php echo $password ?><br/><b>Password Change:</b> <?php echo $password2 ?><br/><i>You must be confident that you know if the person is who they say they are.</i></td>
</tr>
</table>
<br/>
</center>
<?php
}
?>