<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>KeepAnOpenMind News</title>
<link href="../inc/css/content.css" rel="stylesheet" type="text/css" />
</head>
<body>
<table width="613" border="0" cellpadding="0" cellspacing="0" id="Table1" style="position: absolute; top: 0; left: 0">
<tr>
<td align="center" valign="middle" background="../images/layout/content/title_bar.png" width="613" height="25" style="background-repeat:no-repeat;;background-position:center center"><font style="font-size:10px" color="#FFFFFF" face="Verdana"><b>KeepAnOpenMind News</b></font></td>
</tr></table><br><br />
<br />
<img src="../images/newspaper.gif" align="right" />
<b>The KeepAnOpenMind News!</b><br />
<i>What else is there to know...?</i><br />
<br />
This page holds all of the news related to KeepAnOpenMind, everything brand new and up to date that you would like to know is open and available to you from our news team, they like to make sure that everything is kept up to date, and any news that is not reported that you think should be can be added quite simply, just use the contact us form under the 'KAOM' section on the websites main menu, contacting us only takes a couple of minutes and lets us known that we need to start being more on top of things when it comes to our news group.<br/><br/><br/>
<?php
include("../inc/functions/config.php");
$r = mysql_query("SELECT * FROM `news` WHERE `category` = 'KeepAnOpenMind' ORDER BY id Desc ");
while($m = mysql_fetch_array($r))
{
$id = $m['id'];
$author = $m['author'];
$title = $m['title'];
$story = $m['story'];
$category = $m['category'];
if($category == 'KeepAnOpenMind')
{
?>
<center>
<img src="../images/content/seperator.png" />
<br/><br/>
<div id="news_top"></div>
<div id="news_content">
<b><?php echo $title ?></b><br/>
<i>Written by <?php echo $author ?></i>
<br/><br/>
<?php echo $story ?>
</div>
<div id="news_bottom"></div>
<br/>
<?php
}else{
	echo"omg what no news fail...";
}
}
?>
<br/>
<img src="../images/content/seperator.png" /><br /><br />
</center>