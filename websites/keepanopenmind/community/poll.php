<?
setcookie('VoteGrabbed', date("F jS - g:i a"), time()+604800); 
if(isset($_COOKIE['VoteGrabbed']))
{
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Homepage</title>
<link href="../inc/css/content.css" rel="stylesheet" type="text/css" />
</head>
<body>
<table width="613" border="0" cellpadding="0" cellspacing="0" id="Table1" style="position: absolute; top: 0; left: 0">
<tr>
<td align="center" valign="middle" background="../images/layout/content/title_bar.png" width="613" height="25" style="background-repeat:no-repeat;;background-position:center center"><font style="font-size:10px" color="#FFFFFF" face="Verdana"><b>Thanks for your vote!</b></font></td>
</tr></table><br><br>
<img src="../images/poll.gif" align="right"  />
Poll's are what we like to use on KeepAnOpenMind to know what is going on within the community, such as what you think about the website, how you think we should make it better for you all and even more. <br/><br/>We feel that the community isn't heard enough in most fansites, and that the more interaction we have between us and you, the better! So, we are offering you to have the chance to change something within KeepAnOpenMind, that is if you feel it needs to be changed!<br/><br/><br/><br/><br/>
<center><img src="../images/poll/thanks.png" /></center>
<br/><br/>
<i>..we hope you made the right choice, you can't vote again now for another week!</i><br/><br/>
<b>Think you have a good idea for this weeks poll?</b><br/><br/>
All you have to do is click on the 'Contact Us' link underneath the menu called 'KAOM', just jot down a small description of your poll idea and we'll be sure to get back to you on whether we think it's relevant enough to use!<br/><br/><i>Don't worry, we will credit you for your ideas!</i>
<br/><br/><br/><br/>
</body>
</html>
<?
}else{
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Homepage</title>
<link href="../inc/css/content.css" rel="stylesheet" type="text/css" />
<script>
function VoteAlert()
{
    alert("Thank you for casting your vote!");
    location = "poll.php";
}
</script>
</head>
<body>
<table width="613" border="0" cellpadding="0" cellspacing="0" id="Table1" style="position: absolute; top: 0; left: 0">
<tr>
<td align="center" valign="middle" background="../images/layout/content/title_bar.png" width="613" height="25" style="background-repeat:no-repeat;;background-position:center center"><font style="font-size:10px" color="#FFFFFF" face="Verdana"><b>Do you like KeepAnOpenMind.net?</b></font></td>
</tr></table><br><br>
<img src="../images/poll.gif" align="right"  />
Poll's are what we like to use on KeepAnOpenMind to know what is going on within the community, such as what you think about the website, how you think we should make it better for you all and even more. <br/><br/>We feel that the community isn't heard enough in most fansites, and that the more interaction we have between us and you, the better! So, we are offering you to have the chance to change something within KeepAnOpenMind, that is if you feel it needs to be changed!<br/><br/><b>Our current question this week is...</b><br/><br/><br/>
<div id="poll">
<center><img src="../images/poll/question1.png" align="right" /></center>
<div width="161">
<center>
<a href="javascript: void(0);" onClick="VoteAlert();"><img src="../images/poll/yes.png" border="0" /></a><br/>
<a href="javascript: void(0);" onClick="VoteAlert();"><img src="../images/poll/no.png" border="0" /></a>
<br/>
<img src="../images/poll/you.png">
</center>
</div>
<br/><br/>
<i>..remember to think carefully before answering, once you've answered you cannot vote again!</i><br/><br/>
<b>Think you have a good idea for this weeks poll?</b><br/><br/>
All you have to do is click on the 'Contact Us' link underneath the menu called 'KAOM', just jot down a small description of your poll idea and we'll be sure to get back to you on whether we think it's relevant enough to use!<br/><br/><i>Don't worry, we will credit you for your ideas!</i>
</div>
</body>
</html>
<?
}
?>