<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Contact Form</title>
<link href="../inc/css/content.css" rel="stylesheet" type="text/css" />
<SCRIPT TYPE="text/javascript">
<!--
// copyright 1999-2001 Idocs, Inc. http://www.idocs.com/tags/
// Distribute this script freely, but keep this 
// notice with the code.
var resetRolls = new Object();

function resetimage(src)
{
this.src=src;
this.confirm=true;
this.alt="Reset";
this.write=resetimage_write;
}

function resetimage_write()
{
document.write('<A ');
if (this.rollover)
    {
    if (! this.name)
        {
        alert('to create a rollover you must give the image a name');
        return;
        }

    resetRolls[this.name] = new Object();
    resetRolls[this.name].over = new Image();
    resetRolls[this.name].over.src=this.rollover;
    resetRolls[this.name].out = new Image();
    resetRolls[this.name].out.src=this.src;
    document.write(
        ' onMouseOver="if (document.images)document.images[\'' + 
        this.name + '\'].src=resetRolls[\'' + this.name + '\'].over.src"' + 
        ' onMouseOut="if (document.images)document.images[\'' + 
        this.name + '\'].src=resetRolls[\'' + this.name + '\'].out.src"'
        );
    }
document.write(' HREF="javascript:');
if (this.confirm)
    document.write('if(confirm(\'Are you sure you want to reset?\'))');
document.write(
    'document.forms[' + 
    (document.forms.length - 1) + '].reset();void(0);">');
document.write('<IMG SRC="' + this.src + '" ALT="' + this.alt + '"');
document.write(' BORDER=0');
if (this.name)document.write(' NAME="' + this.name + '"');
if (this.height)document.write(' HEIGHT=' + this.height);
if (this.width)document.write(' WIDTH=' + this.width);
if (this.otheratts)document.write(' '+ this.otheratts);
document.write('></A>');
}
//-->
</SCRIPT>
</head>
<body>
<div style="position:absolute; top:0px; left: 14px;">
<b>Contact Us</b><br/>
<i>Remember to fill in all details, try to keep it brief...</i><br/><br/>
<form name="contact" method="post" action="send_contact.php">
<b>What is your openHabbo username?</b><br/>
<div class="username">
<input type=" text" class="usernamebox" name="username" id="username" />
</div><br/>
<i>Without an openHabbo username, it will be very difficult to contact you!</i>
<br/><br/>
<b>What seems to be the problem?</b><br/>
<div class="message_box">
<textarea class="message" name="message" id="message" maxlength="250">
</textarea>
</div><br/>
<i>You have a limit of 250 characters.</i><br/><br/>
<SCRIPT TYPE="text/javascript">
<!--
var ri = new resetimage("../images/cancel_contact.png");
ri.write();
//-->
</SCRIPT>
<NOSCRIPT><INPUT TYPE=RESET></NOSCRIPT> &nbsp; <input type="image" src="../images/submit_contact.png" />
</div>
</body>
</html>