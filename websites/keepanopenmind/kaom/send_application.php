<?php
$subject = $_POST['subject']; 
$name = $_POST['name'];
$mail_from = $_POST['customer_mail'];  
$message = $_POST['detail']; 
$header="from: $name <$mail_from>";
$to ='tomaldy@hotmail.co.uk';
$send_contact=mail($to,$subject,$message,$header);
if($send_contact){
?>
<link href="../inc/css/content.css" rel="stylesheet" type="text/css" />
<table width="613" border="0" cellpadding="0" cellspacing="0" id="Table1" style="position: absolute; top: 0; left: 0">
<tr>
<td align="center" valign="middle" background="../images/layout/content/title_bar.png" width="613" height="25" style="background-repeat:no-repeat;;background-position:center center"><font style="font-size:10px" color="#FFFFFF" face="Verdana"><b>Job Applications</b></font></td>
</tr></table><br><br>
<img src="../images/Web_navigate_001.gif" align="left" />
<b>So, you want to apply to be staff here? Well, here you go...</b><br/><br/>We feel that you should be able to apply for any position you feel fit, don't think you're limited to applying for one job at a time.. that really is not what we believe in! You can apply for any job you like, here are the current staff positions we have free, available for application...<br/><br/>
&bull; Management<br/>
&bull; Assistant Management<br/>
&bull; Events Organiser<br/>
&bull; Competitions Creator<br/>
&bull; Guide Writer<br/>
&bull; Graphics Designer<br/>
<br/><br/><br/>
<table width="100%">
<tr>
<td style="background-color: #3C3; border: 1px solid #3F0; align: center; valign: middle;">
<br/>
<center><font style="font-size:10px" color="#000000" face="Verdana"><b>Your application has been received successfully!<br/>Remember to check your e-mail, openHabbo account and your Forum messages incase you have been chosen!</b></font></center>
<br/>
</td>
</tr>
</table>
<?
}
else {
?>
<link href="../inc/css/content.css" rel="stylesheet" type="text/css" />
<table width="613" border="0" cellpadding="0" cellspacing="0" id="Table1" style="position: absolute; top: 0; left: 0">
<tr>
<td align="center" valign="middle" background="../images/layout/content/title_bar.png" width="613" height="25" style="background-repeat:no-repeat;;background-position:center center"><font style="font-size:10px" color="#FFFFFF" face="Verdana"><b>Job Applications</b></font></td>
</tr></table><br><br>
<img src="../images/Web_navigate_001.gif" align="left" />
<b>So, you want to apply to be staff here? Well, here you go...</b><br/><br/>We feel that you should be able to apply for any position you feel fit, don't think you're limited to applying for one job at a time.. that really is not what we believe in! You can apply for any job you like, here are the current staff positions we have free, available for application...<br/><br/>
&bull; Management<br/>
&bull; Assistant Management<br/>
&bull; Events Organiser<br/>
&bull; Competitions Creator<br/>
&bull; Guide Writer<br/>
&bull; Graphics Designer<br/>
<br/><br/><br/>
<table width="100%">
<tr>
<td style="background-color: #F66; border: 1px solid #F00; align: center; valign: middle;">
<br/>
<center><font style="font-size:10px" color="#000000" face="Verdana"><b>We're sorry, there seemed to be an issue sending your application!<br/>Please click <a href="jobs.php" target="main">here</a> to try again!</b></font></center>
<br/>
</td>
</tr>
</table>
<?
}
?>