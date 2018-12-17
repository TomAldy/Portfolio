<?php
function checkban($ip)
    {
        // querys database
        $q = mysql_query("SELECT * FROM `banned` WHERE `ip` = '$_SERVER[REMOTE_ADDR]' LIMIT 1");
        $get = mysql_num_rows($q);
        // if found
        if ($get == "1")
            { 
                // deny user access
                $r=mysql_fetch_array($q);
                echo("<div id=\"overlay\"><img src=\"images/banned/no.png\" border=\"0\"></a></div>");
            }
    }
// places a ban in the database
function addban($ip)
    {
        $insert = mysql_query("INSERT INTO `banned` (`ip`) VALUES ('$ip')") or die("Could not add ban.<br />".mysql.error()."");
        ?>
        <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="refresh" content="4;url=banip.php?x=add">
<title>Homepage</title>
<link href="../../inc/css/content.css" rel="stylesheet" type="text/css" />
</head>
<body>
<table width="613" border="0" cellpadding="0" cellspacing="0" id="Table1" style="position: absolute; top: 0; left: 0">
<tr>
<td align="center" valign="middle" background="../../images/layout/content/title_bar.png" width="613" height="25" style="background-repeat:no-repeat;;background-position:center center"><font style="font-size:10px" color="#FFFFFF" face="Verdana"><b>Ban An IP Address</b></font></td>
</tr></table><br/><br/><br/><img src="../../images/fyh_wots_that_weird_machine.gif" align="left" />
<b>So, someone has been naughty then?</b><br/><br/>We realise that we will sometimes come across someone who does not know how to behave, so we've decided to create this IP Ban tool, of course only management should be able to access this. If there are any other uses of this by anyone other than a member of <b>KeepAnOpenMind</b> management, then we will be forced to take action and ban <b>YOU</b> from the site.<br/><br/><br/><br/><center> 
        <b>The ip address, <?php echo $ip ?> has been added to the ban list.</b><br/><i>You will now be redirected back to the ban form...</i><br/><br/><img src="../../images/tm_dancing_habbos.gif" /><br/><br/><i>Now we can all party, thanks to you banning the riff raff!
        <?php
    }
// deletes a ban from the database
function delban($id)
    {
        // runs a delete query
        $delete = mysql_query("DELETE FROM `banned` WHERE `id` = '$id' LIMIT 1") or die("Could not remove ban.<br />".mysql.error()."");
        echo "<meta http-equiv=\"refresh\" content=\"4;url=banip.php\"><b>The ip address has been removed from the ban list.</b><br/><i>You will now be taken back to the ban list.</i><br/><br/><img src=\"../../images/dance_article3.gif\">";
    }
// lists the bans in the ban admin
function listbans()
    { 
        // loop to show all band
        $query = mysql_query("SELECT * FROM `banned` ORDER BY id DESC");
        $num = mysql_num_rows($query);
        if ($num)
            {
        while ($r=mysql_fetch_array($query))
            {
                echo "<table width=\"90%\" cellpadding=\"10\" cellspacing=\"1\" border=\"0\" id=\"Table1\" style=\"font-family:Verdana;font-size:10px;\">
<tr>
<td align=\"center\" valign=\"middle\" width=\"49\" height=\"54\" bgcolor=\"#D8D8D8\"><img src=\"../../images/lightbulb.gif\"></td>
<td align=\"left\" valign=\"middle\" width=\"284\" height=\"54\" bgcolor=\"#D8D8D8\">&nbsp;$r[ip]<br/><br/><a href='banip.php?x=delete&id=$r[id]' class='normal'>&nbsp;Click here to unban the IP Address...</a><br/><br/><i>Please make sure that the person you are unbanning has learnt their lesson, if not a good slap on the wrist should do it!</a></td>
</tr>
</table>";
            }	
			}else{
echo"<table width=\"90%\" cellpadding=\"5\" cellspacing=\"1\" border=\"0\" id=\"Table1\" style=\"font-family:Verdana;font-size:10px;\">
<tr>
<td align=\"center\" valign=\"middle\" width=\"49\" height=\"54\" bgcolor=\"#D8D8D8\"><img src=\"../../images/sad.gif\"><br/><br/><b>Unfortunately, everyone has been behaving themselves, so there are currently no outstanding bans!</b></td>
</tr></table><br/>";	
            }
    }
?>