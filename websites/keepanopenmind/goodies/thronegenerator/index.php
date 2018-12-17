<?php
include("functions.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>openHabbo Throne Generator</title>
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
<table width="613" border="0" cellpadding="0" cellspacing="0" id="Table1">
<tr>
<td align="center" valign="middle" background="../../images/layout/content/title_bar.png" width="613" height="25" style="background-repeat:no-repeat;;background-position:center center"><font style="font-size:10px" color="#FFFFFF" face="Verdana"><b>Avatar Throne Generator</b></font></td>
</tr></table><br/>
<img src="../../images/greybear_queensibidi.gif" align="right" />
There are many reasons as to why you may want an image of your Avatar sat in a Throne, it could be because you don't own one! We feel as though the best piece of furniture to prove your wealth is the throne, the best of the best ;)<br/><br/>So, wondering how it's done? It's fairly simple, just type your name in the form below, click 'OK' and you're away!<br/><br/><i>It only takes 30 seconds...</i><br/><br/><center>
<form method="post" action="result.php">
<b>openHabbo Name:</b><br><br/>
<input type="text" name="habbo" id="habbo" style="padding: 3px" /><br/><br/>
<b>Hotel:</b><br/>
<select size="1" name="country" id="country" style="padding: 3px">
  <option value="openhabbo">openHabbo</option>
  <option value="forcehotel">Force Hotel</option>
</select><br/><br/>
<input type="image" src="../../images/submit_contact.png" value="Generate" />
</form><br><br/>
<b>As much as we'd love to include Force Hotel in this, we do not support it, maybe in the future though...</b><br/>
<i>Sorry for any inconvenience caused!</i>
</center>
</body>
</html>