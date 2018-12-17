<?php
if( isset( $_COOKIE['logged'] ) )
{
if ($_COOKIE['userlevel'] == "Management")
{
//////////////////////////////////////
//  Created by Jamie Cassidy   //
//////////////////////////////////////
include("../../inc/functions/config.php");
switch($_GET['action'])
//uses ?action= links
{
default:
//default case
echo"
<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">
<html xmlns=\"http://www.w3.org/1999/xhtml\">
<head>
<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
<title>Closing the Fansite</title>
<link href=\"../../inc/css/content.css\" rel=\"stylesheet\" type=\"text/css\" />
<style type=\"text/css\">
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
 width:206px;
 height:86px;
 margin:0;
 padding-top: 6px;
 padding-bottom: 8px;
 padding-right: 7px;
 padding-left: 7px;
 font-family:Verdana, Arial, Helvetica, sans-serif;
 font-size:10px;
}
</style>
</head>
<body>
<table width=\"613\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" id=\"Table1\" style=\"position: absolute; top: 0; left: 0\">
<tr>
<td align=\"center\" valign=\"middle\" background=\"../../images/layout/content/title_bar.png\" width=\"613\" height=\"25\" style=\"background-repeat:no-repeat;;background-position:center center\"><font style=\"font-size:10px\" color=\"#FFFFFF\" face=\"Verdana\"><b>Going into Maintenance...</b></font></td>
</tr></table><br>
<img src=\"../../images/crowleynewsie.gif\" align=\"right\" />
Depending what the problem is for you closing down the site, you must be sure it is for the best because in result, the fansite may lose traffic as turning off the fansite disconnects every single one of the users who are currently browsing <b>KeepAnOpenMind</b>, in result, openHabbo radio <b>WILL</b> lose listeners if <b>KeepAnOpenMind</b> is shut down.<br/><br/>Overall, the fansite must stay open unless there is a <b>serious</b> problem, also remember that if you have shut the fansite down, your IP address will be logged so that the management know who you are if you're to shut down the fansite without being staff!<br/><br/><br/>
<center>
<b>Are you sure you want to close KeepAnOpenMind?</b><br/><br/>
<form action=\"close_site.php?action=close\" method=\"post\" name=\"closefansite\">
<input type=\"image\" value=\"yes\" name=\"closed\" src=\"../../images/staff/confirm_offline.png\"> <input type=\"image\" value=\"no\" name=\"closed\" src=\"../../images/staff/confirm_online.png\">
</form>
</center>
</body>
</html>";
//Echo the form..
break;
//break default case
case 'close':
//Close case
$closed = $_POST['closed'];
if($closed == 'yes')
//If the selected option was yes
{
mysql_query("UPDATE `close` SET `closed` = '$closed'");
echo"
<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">
<html xmlns=\"http://www.w3.org/1999/xhtml\">
<head>
<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
<title>Closing the Fansite</title>
<link href=\"../../inc/css/content.css\" rel=\"stylesheet\" type=\"text/css\" />
</head>
<body>
<table width=\"613\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" id=\"Table1\" style=\"position: absolute; top: 0; left: 0\">
<tr>
<td align=\"center\" valign=\"middle\" background=\"../../images/layout/content/title_bar.png\" width=\"613\" height=\"25\" style=\"background-repeat:no-repeat;;background-position:center center\"><font style=\"font-size:10px\" color=\"#FFFFFF\" face=\"Verdana\"><b>You killed it!</b></font></td>
</tr></table><br><br/><br/>
<img src=\"../../images/crowleynewsie.gif\" align=\"right\" />
Depending what the problem is for you closing down the site, you must be sure it is for the best because in result, the fansite may lose traffic as turning off the fansite disconnects every single one of the users who are currently browsing <b>KeepAnOpenMind</b>, in result, openHabbo radio <b>WILL</b> lose listeners if <b>KeepAnOpenMind</b> is shut down.<br/><br/>Overall, the fansite must stay open unless there is a <b>serious</b> problem, also remember that if you have shut the fansite down, your IP address will be logged so that the management know who you are if you're to shut down the fansite without being staff!<br/><br/><br/>
<center>
<b>The fansite is now closed, be sure to contact any Management that does not know about this.</b><br/><i>Meanwhile, in TomAldy's room...</i><br/><br/><img src=\"../../images/staff/tomaldy_room.png\" />
</center>
</body>
</html>
";
//Updates the database and outputs a success message.
}
elseif($closed == 'no')
//If the selected option was no
{
mysql_query("UPDATE `close` SET `closed` = '$closed'");
echo"
<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">
<html xmlns=\"http://www.w3.org/1999/xhtml\">
<head>
<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
<title>Closing the Fansite</title>
<link href=\"../../inc/css/content.css\" rel=\"stylesheet\" type=\"text/css\" />
</head>
<body>
<table width=\"613\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" id=\"Table1\" style=\"position: absolute; top: 0; left: 0\">
<tr>
<td align=\"center\" valign=\"middle\" background=\"../../images/layout/content/title_bar.png\" width=\"613\" height=\"25\" style=\"background-repeat:no-repeat;;background-position:center center\"><font style=\"font-size:10px\" color=\"#FFFFFF\" face=\"Verdana\"><b>Yay! It's back!</b></font></td>
</tr></table><br><br/><br/>
<img src=\"../../images/crowleynewsie.gif\" align=\"right\" />
Depending what the problem is for you closing down the site, you must be sure it is for the best because in result, the fansite may lose traffic as turning off the fansite disconnects every single one of the users who are currently browsing <b>KeepAnOpenMind</b>, in result, openHabbo radio <b>WILL</b> lose listeners if <b>KeepAnOpenMind</b> is shut down.<br/><br/>Overall, the fansite must stay open unless there is a <b>serious</b> problem, also remember that if you have shut the fansite down, your IP address will be logged so that the management know who you are if you're to shut down the fansite without being staff!<br/><br/><br/>
<center>
<b>The fansite is officially back open, let's hope the next maintenance is one very far away!</b><br/><i>Meanwhile, back in TomAldy's room...</i><br/><br/><img src=\"../../images/staff/tomaldy_open.png\" />
</center>
</body>
</html>";
//Update the database and outputs a sucess message.
}
break;
//break close case
}
//End switch function
}else{
	echo"yo, you not admin!";
}
}else{
	echo"you're not logged in :S";
}
?>