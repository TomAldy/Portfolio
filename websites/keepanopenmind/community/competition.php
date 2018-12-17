<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Competition</title>
<link href="../inc/css/content.css" rel="stylesheet" type="text/css" />
</head>
<body>
<table width="613" border="0" cellpadding="0" cellspacing="0" id="Table1" style="position: absolute; top: 0; left: 0">
<tr>
<td align="center" valign="middle" background="../images/layout/content/title_bar.png" width="613" height="25" style="background-repeat:no-repeat;;background-position:center center"><font style="font-size:10px" color="#FFFFFF" face="Verdana"><b>Latest Competition</b></font></td>
</tr></table><br><br><br/>
<img src="../images/rclr_garden.gif" align="right" />
We believe that competitions are a main attraction to our users here at <b>KeepAnOpenMind</b>, and thanks to our team of competition creators, we are able to offer as many as we can. Unfortunaetly, to avoid confusion we only ever publish one at a time, this is so we do not get confused with entries!<br/><br/>
<b>Here are a few things we'd like you to keep in mind...</b><br/><br/>
&bull; Remember to always get your openHabbo username correct!<br/>
&bull; You are only allowed to enter once.<br/>
&bull; The correct form is on OUR website, no one elses.<br/>
&bull; We will never ask for your password.<br/><br/>
<i>If you happen to notice any of these points being broken or not being followed, then contact us using our contact form.</i><br/><br/><br/>
<center>
<?php
include("../inc/functions/config.php");
$r = mysql_query("SELECT * FROM `competitions` ORDER BY id Desc LIMIT 4");
while($m = mysql_fetch_array($r))
{
$id = $m['id'];
$title = $m['title'];
$host = $m['host'];
$content = $m['content'];
$date = $m['end date'];
?>
<table width="100%" cellpadding="10" cellspacing="1" border="0" id="Table1" style="font-family:Verdana;font-size:10px;">
<tr>
<td align="center" valign="middle" width="49" height="54" bgcolor="#D8D8D8"><img src="../images/lightbulb.gif"></td>
<td align="left" valign="middle" width="284" height="54" bgcolor="#D8D8D8"><b>Competition Name:</b> <?php echo $m['title'] ?><br/><b>Competition Host:</b> <?php echo $m['host'];?><br/><b>End Date:</b> <?php echo $date ?><br/><br/><a href="competitions.php?id=<? echo $m['id']; ?>" target="main" class="page"><i>Click here for more details...</i></a></td>
</tr>
</table>
</center>
<?
}
?>