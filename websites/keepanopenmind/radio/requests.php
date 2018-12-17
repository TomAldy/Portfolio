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
Your IP Address is logged for security reasons, and your IP Address is: <b><?php echo $_SERVER['REMOTE_ADDR']; ?></b><br/><br/>
<form action="send_requests.php" method="post">

<table border="0" width="100%" align="left" cellpadding="3" cellspacing="2"><tr>
<td><div align="right"><strong>openHabbo Name:</strong></div></td>
<td><input type="text" name="openhabbo" maxlength="255" style="font-family: Verdana; font-size: 8pt;" size="30"></td>
</tr><tr>
<td><div align="right"><strong>Message Type:</strong></div></td>
<td><select name="type" style="font-family: Verdana; font-size: 8pt;">
				<option value="Request">Request</option><option value="Shoutout">Shoutout</option><option value="Joke">Joke</option><option value="Competition">Competition</option></select></td>
</tr><tr>
<td><div align="right"><strong>Send To:</strong></div></td>
<td>
<select name="to" style="font-family: Verdana; font-size: 8pt;">
                  <option value="Tomaldy@live.co.uk">DJ TomAldy</option></select>
</td>
</tr><tr>
<td><div align="right"><strong>Message:</strong></div></td>
<td><textarea name="message" cols="45" rows="8" style="font-family: Verdana; font-size: 8pt;"></textarea></td>
</tr><tr>
<td>&nbsp;</td>
<td><input type="image" src="../images/submit_contact.png" /></td>
</tr>
</table>
</form>
</body>
</html>