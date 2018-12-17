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
 width:209px;
 height:97px;
 margin:0;
 padding-top: 6px;
 padding-bottom: 8px;
 padding-right: 7px;
 padding-left: 7px;
 font-family:Verdana, Arial, Helvetica, sans-serif;
 font-size:10px;
}
</style>
<?php
// banadmin.php

// include the files
include "../../inc/functions/config.php";
include "../../inc/functions/ban.php";
// switch statement to do pages in admin
switch ($_GET['x'])
    { 
       // if no page show bans
        default:
		?>
        <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Homepage</title>
<link href="../../inc/css/content.css" rel="stylesheet" type="text/css" />
</head>
<body>
<table width="613" border="0" cellpadding="0" cellspacing="0" id="Table1" style="position: absolute; top: 0; left: 0">
<tr>
<td align="center" valign="middle" background="../../images/layout/content/title_bar.png" width="613" height="25" style="background-repeat:no-repeat;;background-position:center center"><font style="font-size:10px" color="#FFFFFF" face="Verdana"><b>Ban An IP Address</b></font></td>
</tr></table><br/><img src="../../images/fyh_wots_that_weird_machine.gif" align="left" />
<b>So, someone has been naughty then?</b><br/><br/>We realise that we will sometimes come across someone who does not know how to behave, so we've decided to create this IP Ban tool, of course only management should be able to access this. If there are any other uses of this by anyone other than a member of <b>KeepAnOpenMind</b> management, then we will be forced to take action and ban <b>YOU</b> from the site.<br/><br/><br/><br/><center><div>
                    <?php echo listbans(); ?>
                    </div>
        <?php
        break;
        // if add ban, show the form
        case "add":
            // if posted, insert it
            if ($_POST['add'])
                {
                    $ip = $_POST['ip'];
                    if (!$ip)
                        {
                            echo "You must put an ip address at least";
                        }
						addban($ip);
                }
            // otherwise show form
            else
                {
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Homepage</title>
<link href="../../inc/css/content.css" rel="stylesheet" type="text/css" />
</head>
<body>
<table width="613" border="0" cellpadding="0" cellspacing="0" id="Table1" style="position: absolute; top: 0; left: 0">
<tr>
<td align="center" valign="middle" background="../../images/layout/content/title_bar.png" width="613" height="25" style="background-repeat:no-repeat;;background-position:center center"><font style="font-size:10px" color="#FFFFFF" face="Verdana"><b>Ban An IP Address</b></font></td>
</tr></table><br/><img src="../../images/fyh_wots_that_weird_machine.gif" align="left" />
<b>So, someone has been naughty then?</b><br/><br/>We realise that we will sometimes come across someone who does not know how to behave, so we've decided to create this IP Ban tool, of course only management should be able to access this. If there are any other uses of this by anyone other than a member of <b>KeepAnOpenMind</b> management, then we will be forced to take action and ban <b>YOU</b> from the site.<br/><br/><br/><br/><center>
<form method="post" action="banip.php?x=add">
<b>IP Address:</b><br /><div class="username"><input type="text" name="ip" class="usernamebox"></div><br /><br/>   
<input type="image" name="add" value="Add Ban" src="../../images/staff/ban.png">
<?php
                }
        break;
        // delete ban    
        case "delete":
            // got the id, preform the action
            if ($_GET['id'])
                {
					?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Homepage</title>
<link href="../../inc/css/content.css" rel="stylesheet" type="text/css" />
</head>
<body>
<table width="613" border="0" cellpadding="0" cellspacing="0" id="Table1" style="position: absolute; top: 0; left: 0">
<tr>
<td align="center" valign="middle" background="../../images/layout/content/title_bar.png" width="613" height="25" style="background-repeat:no-repeat;;background-position:center center"><font style="font-size:10px" color="#FFFFFF" face="Verdana"><b>Ban An IP Address</b></font></td>
</tr></table><br/><br/><br/><img src="../../images/fyh_wots_that_weird_machine.gif" align="left" />
<b>So, someone has been naughty then?</b><br/><br/>We realise that we will sometimes come across someone who does not know how to behave, so we've decided to create this IP Ban tool, of course only management should be able to access this. If there are any other uses of this by anyone other than a member of <b>KeepAnOpenMind</b> management, then we will be forced to take action and ban <b>YOU</b> from the site.<br/><br/><br/><br/><center> 
                   <?php    echo delban($_GET['id']); ?>
                   <?php
                }
            // show error
            else 
                {
                    echo "No ip selected to remove";
                }
        break;
    }
?>
</center>
</body>
</html>