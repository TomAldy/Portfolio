<?php
$id = mysql_insert_id();
$title = $_POST['title'];
$category = $_POST['category'];
$author = $_POST['author'];
$article = $_POST['article'];
$user_name = "root";
$dbpassword = "";
$database = "keepanopenmind";
$server = "localhost";
$db_handle = mysql_connect($server, $user_name, $dbpassword);
$db_found = mysql_select_db($database, $db_handle);
if ($db_found) {
$SQL = "INSERT INTO `news` (`author`, `title`, `story`, `category`) VALUES ('$author', '$title', '$article', '$category')";
$result = mysql_query($SQL);
mysql_close($db_handle);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="content-type" http-equiv="refresh" content="4; ../../staff/add_news.php" />
<title>The News Article has been added!</title>
<link href="../../inc/css/content.css" rel="stylesheet" type="text/css" />
</head>
<body>
<table width="613" border="0" cellpadding="0" cellspacing="0" id="Table1" style="position: absolute; top:0px; left:0px;">
<tr>
<td align="center" valign="middle" background="../../images/layout/content/title_bar.png" width="610" height="25" style="background-repeat:no-repeat;;background-position:center center"><font style="font-size:10px" color="#FFFFFF" face="Verdana"><b>Add a News Article</b></font></td>
</tr></table><br/><br/><br/>
<img src="../../images/nimiqnewsie.gif" align="right" />
Adding a news article couldn't be more simple on KeepAnOpenMind, all you have to do is fill in the form below and the news article will be added, you are allowed to use html in the form, so please be careful, unless you know what you're doing, we'd rather you didn't use HTML!<br/><br/>We will give you some tips anyway...<br/><br/>
&bull; &lt;b&gt;<b>this makes text bold</b>&lt;/b&gt;<br/>
&bull; &lt;u&gt;<u>this makes text underlined</u>&lt;/u&gt;<br/>
&bull; &lt;i&gt;<i>this makes text italic</i>&lt;/i&gt;<br/>
&bull; &lt;img src="path/to/image/here" align="right"&gt; - this will add an image to the news article.<br/>
<br/><br/><br/>
<center>
<b>Congratulations, you successfully added the article!</b><br />
<i>Now all you have to do is check on the website to see if it looks good!</i><br/><br/>
<img src="../../images/basketball_1.gif" /><br/><br/>
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