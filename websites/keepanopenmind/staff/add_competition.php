<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Add Competition</title>
<link href="../inc/css/content.css" rel="stylesheet" type="text/css" />
<style type="text/css">
.username
{
 margin:0;
 height:20px;
 width:146px;
 background:url('../images/contact_bg.png') no-repeat bottom;
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
 background:url('../images/message_bg.png') no-repeat bottom;
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
<table width="613" border="0" cellpadding="0" cellspacing="0" id="Table1" style="position: absolute; top:0px; left:0px;">
<tr>
<td align="center" valign="middle" background="../images/layout/content/title_bar.png" width="610" height="25" style="background-repeat:no-repeat;;background-position:center center"><font style="font-size:10px" color="#FFFFFF" face="Verdana"><b>Add a Competition</b></font></td>
</tr></table><br/><br/><br/>
<img src="../images/caballo_encabritado.gif" align="left" />
Adding a competition is an easy task to achieve, by filling in this simple form you will be able to add a competition within a heartbeat! We have given you the option of filling in the authors name so that you can do the job for someone else, if this leads to problems we may have to change the way we do things on the staff system, but for now this is a test in the BETA stages of KeepAnOpenMind!<br/><br/>
Also, in the message area you are allowed to use these HTML tags...<br/><br/>
<i>
&bull; &lt;b&gt;<b>This will make the text bold.</b>&lt;/b&gt;<br/>
&bull; &lt;u&gt;<u>This will make the text underlined.</u>&lt;/u&gt;<br/>
&bull; &lt;i&gt;<i>This will make the text italic.</i>&lt;/i&gt;<br/>
&bull; &lt;img src="path/to/image" align="left"&gt; ~ This will make an image appear! Providing you have the correct address to it... 
</i> 
<br/><br/><br/>
<center>
<form method="post" action="../inc/functions/add_competition.php" name="competition_request">
<b>Title:</b><br/><br/>
<div class="username">
<input type="text" name="name" class="usernamebox"/>
</div><br/>
<b>Host:</b><br/><br/>
<div class="username">
<input type="text" name="host" class="usernamebox"/>
</div><br/>
<b>End Date:</b><br/><br/>
<div class="username">
<input type="text" name="date" class="usernamebox" value="EG. 01/01/2012"/>
</div><br/>
<b>Message:</b><br/><br/>
<div class="message_box">
<textarea class="message" name="content" size="80"/></textarea>
</div><br/>
<input type="image" name="go" value="GO" src="../images/submit_contact.png" />
</form>
</center>
</body>
</html>