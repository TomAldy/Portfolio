<?php
include("functions.php");
$habbo = $_POST['habbo'];
$habbo2 = $_POST['habbo2'];
$country = $_POST['country'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Avatar Friend Generator</title>
<link href="../../inc/css/content.css" rel="stylesheet" type="text/css" />
</head>
<body>
<table width="613" border="0" cellpadding="0" cellspacing="0" id="Table1">
<tr>
<td align="center" valign="middle" background="../../images/layout/content/title_bar.png" width="613" height="25" style="background-repeat:no-repeat;;background-position:center center"><font style="font-size:10px" color="#FFFFFF" face="Verdana"><b>Avatar Friend Generator</b></font></td>
</tr></table><br>
<img src="../../images/exe_dragonsden3_whitebg.gif" align="right" />
Ever wanted a picture of you and your openHabbo OR ForceHotel friend on a forum or any other website? Well, the wait for it is all over, with this unique tool we have created that grabs the image from the hotel and displays it, so you are able to see any one of your friends sat on a club sofa with you!<br/><br/>
We understand that the demand for more of these imagers is also high, so don't worry we've got our techies on the job putting more together for you, just feel free to use the contact form to try and suggest what furniture you would like to be used!<br/><br/><br/><br/>
<center>
Here you go <b><? echo $habbo ?></b>!<br/><i>Your fantastic, brand new Habbo HC Sofa Image, with your Habbo and your friend, <b><? echo $habbo2 ?></b> sat in it from KeepAnOpenMind!</i><br>
<br>
<img src="hc.php?habbo=<? echo $habbo ?>&habbo2=<? echo $habbo2 ?>&country=<? echo $country ?>"><br/><br/><b>Web Designing Code:<br/><table width="338" border="0" cellpadding="0" cellspacing="0" id="Table1">
<tr>
<td align="center" valign="middle"><textarea name="message" rows="8" cols="60"><a href="http://www.keepanopenmind.org" target="_blank"><img src="http://www.keepanopenmind.org/goodies/clubsofa/hc.php?habbo=<? echo $habbo ?>&habbo2=<? echo $habbo2 ?>&country=<? echo $country ?>" border=0></a></textarea></td>
</tr>
</table><br/>
<b>Forum Code:<br/><table width="338" border="0" cellpadding="0" cellspacing="0" id="Table1">
<tr>
<td align="center" valign="middle" ><textarea name="message" rows="8" cols="60">[url=http://www.keepanopenmind.org][img]http://www.keepanopenmind.org/goodies/clubsofa/hc.php?habbo=<? echo $habbo ?>&habbo2=<? echo $habbo2 ?>&country=<? echo $country ?>[/img][/url]</textarea></td>
</tr>
</table><br/>
<b>Direct Image Link:<br/><table width="338" border="0" cellpadding="0" cellspacing="0" id="Table1">
<tr>
<td align="center" valign="middle"><textarea name="message" rows="8" cols="60">http://www.keepanopenmind.org/goodies/clubsofa/hc.php?habbo=<? echo $habbo ?>&habbo2=<? echo $habbo2 ?>&country=<? echo $country ?></textarea></td>
</tr>
</table></center>
<br/><br/>
</body>
</html>