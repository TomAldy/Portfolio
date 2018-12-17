<div>
<img src="../../images/mobile/signal.png" align="left"/>
<img src="../../images/mobile/battery.png" align="right"/>
<center>
<script type="text/javascript">
 var currentTime = new Date()
  var hours = currentTime.getHours()
  var minutes = currentTime.getMinutes()

  if (minutes < 10)
  minutes = "0" + minutes

  document.write("<b>" + hours + ":" + minutes + " " + "</b>")
</script>
</center><br/>




<?php 
include("config.php"); //Include config file 
if(!$logged['id']){ //Check if user is logged in 
echo "<b>Error</b>: You Are Not Logged In!"; //Not logged in 
}else{ //Their loggedin 
$page = isset($_GET['page']) ? $_GET['page'] : null;
switch($page){ //make some links ?page=case 
default: //set up the default page upon going to pms.php 
$msgs = mysql_query("SELECT * FROM `privates` WHERE (`to` = '" . $logged['mobile'] . "') OR (`to` = '" . $logged['username'] . "') ORDER BY `pid` Desc LIMIT 3") or die(mysql_error()); //get all the messages to the loged in user 
$total_pms = mysql_num_rows($msgs); //count members 
if($total_pms == 0){ //check if there are messages or not 
?>
<div style="height:212px">
<br/>
<br/>
<br/>
<img src="../../images/shabbolin_ill_maitre.gif"><br/><br/><b>No texts at the moment!</b><br/><i>Pop back later...</i>
<br/>
<br/>
</div>
<?php
}else{ //or if there are messages 
echo"<div style=\"height:212px\"><b>Latest 3 Texts</b><br/>-----------------------------------";
while($r = mysql_fetch_array($msgs)){ //repeat for all the messages 
echo "
<table width=\"100%\" cellpadding=\"3\" cellspacing=\"0\" border=\"0\" id=\"Table1\">
<tr>
<td align=\"center\" valign=\"middle\" width=\"38\" height=\"44\"><a href=\"showmessage.php?id=$r[pid]\"><img src=\"$r[status]\" border=\"0\"></a><br/><a href=\"pms.php?page=delete&id=$r[pid]\"><img src=\"../../images/delete_entry_button.gif\" border=\"0\"></a></td>
<td align=\"left\" valign=\"middle\" width=\"222\" height=\"44\"><font face=\"Verdana\" style=\"font-size: 8px; color: #FFFFFF;\"><b>$r[from2]<br/>$r[from]</b><br/>
$r[date]<br/>$r[time]<br/>
</tr>
</table></font>
-----------------------------------"; //echo the messages 
} //end while 
} //end message amount check 
echo"</div>
<div style=\"text-align: left;padding-left: 10px;\">
<a href=\"pms.php?page=compose\">&raquo; Send Text</a><br/> 
<a href=\"pms.php?page=delall\">&raquo; Clear Inbox</a><br/><br/>
</div>";

// --------------------------------------------------------------------------
// --------------------------------------------------------------------------
// --------------------------------------------------------------------------
// --------------------------------------------------------------------------


break; //end the default page 
case 'view': //define the view page 
$id = (int)htmlspecialchars(strip_tags($_GET['id'])); //make the ID safe 
if(!$id){ //if there is no ID to select 
echo "<meta content=\"4; pms.php\" http-equiv=\"refresh\">
	<br/><br/><br/><img src=\"../../images/shoutshout.gif\"><br/><br/><b>Just to let you know...</b><br/><i>That text is non-existant!</i><br/><br/><br/><br/><br/><br/><i>Back to your inbox we go...</i>"; //echo the error 
}else{ //or if there is.... 
$select = mysql_query("SELECT * FROM `privates` WHERE `pid` = '" . $id . "';"); //get the message's info 
$msg = mysql_fetch_array($select); //select all data 
if($msg['to'] != $logged['mobile']){ //check if the user logged in is the owner of the message 
echo "<meta content=\"4; pms.php\" http-equiv=\"refresh\">
	<br/><br/><br/><img src=\"../../images/shoutshout.gif\"><br/><br/><b>Just to let you know...</b><br/><i>This text wasn't sent to you!</i><br/><br/><br/><br/><br/><br/><i>Back to your inbox we go...</i>"; //if not 
}else{ //maybe... 
if (!isset($_POST['reply']))
{
$mark = mysql_query("UPDATE `privates` SET `status` = '../../images/mail.gif' WHERE `pid` = '" . $id . "'") or die(mysql_error()); //mark it as Read 
$message = nl2br(stripslashes($msg['content'])); //make new lines to  and strip the slashes 
echo "
<img src=\"../../images/logo_sms.png\"><br/><br/>
<form method=\"post\"> 
<center><b>Reply message...</b><br/><i>Type your text below...</i><br/><br/>
<textarea name=\"msg\" style=\"border:1px solid black; background-color: #FFFFFF; height: 60px; width: 170px;font-family:Verdana; font-size: 10px;\"></textarea><br/><br/>
<input type=\"image\" name=\"reply\" value=\"Reply\" src=\"../../images/submit_contact.png\">
</form><br/><br/><div style=\"height:7px;\"></div><a href=\"pms.php\" target=\"mobile\">Back to inbox...</a>"; //echo the message and reply box. 
}else{ //if the form was submitted 
$to = $msg['from']; //get who it is to 
$from2 = $logged['username']; //who its from 
$from = $logged['mobile']; //who its from 
$msg = addslashes($_POST['msg']); //the content 
$time = date("H:i"); 
$date = date("d/m/y"); //the date sent 
$do = mysql_query("INSERT INTO `privates` (`to`,`from`,`from2`,`date`,`time`,`content`) VALUES ('" . $to . "','" . $from . "','" . $from2 . "','" . $date . "','" . $time . "','" . $msg . "')") or die(mysql_error()); //insert into the table!
echo "<meta content=\"4; pms.php\" http-equiv=\"refresh\"><br/><br/><br/><img src=\"../../images/md_02.gif\"><br/><br/><b>Text sent!</b><br/><i>Now to wait for a reply!</i><br/><br/><br/><br/><i>Going back to inbox...</i>"; //the message was sent 
} //end reply check 
} //end check posession 
} //end id check 


// --------------------------------------------------------------------------
// --------------------------------------------------------------------------
// --------------------------------------------------------------------------
// --------------------------------------------------------------------------


break; 
case 'compose': //create a new message 
if (!isset($_POST['send']))
{
echo "
<img src=\"../../images/typo.gif\"><br/><br/>
<form method=\"post\" action=\"\"> 
<b>Mobile Number:</b><br/>"; //echo some of the form and whatnot 
if(isset($_GET['number'])){ //check if there is a user in the address bar 
echo "<div class=\"username\"><input type=\"text\" name=\"to\" value=\"$_GET[number]\" class=\"usernamebox\"></div><br/>"; //if there is 
}else{ //or not.. 
echo "<div class=\"username\"><input type=\"text\" name=\"to\" class=\"usernamebox\"></div><br/>"; //echo the input box without the value of the user! 
} //end user check in address bar 
echo "<b>Message:</b><br/>
<div>
<textarea name=\"message\" class=\"message\" style=\"border:1px solid black; background-color: #FFFFFF; height: 60px; width: 170px;\"></textarea></div><br/>
<input type=\"image\" name=\"send\" value=\"Send Message\" src=\"../../images/submit_contact.png\"> 
</form><div style=\"height: 6px;\"></div><i>Click <a href=\"pms.php\" target=\"mobile\">here</a> to go straight back to your inbox!</i>"; //echo the rest of the form 
}else{ //or if it was.... 
$to = stripslashes(htmlspecialchars(strip_tags($_POST['to']))); //who its to 
$from2 = "$logged[username]";
$from = "$logged[mobile]"; //who its from 
$time = date("H:i"); 
$date = date("d/m/y"); //the date sent 
$msg = addslashes($_POST['message']); //the message variable 
$do = mysql_query("INSERT INTO `privates` (`to`,`from`,`from2`,`date`,`time`,`content`) VALUES ('" . $to . "','" . $from . "','" . $from2 . "','" . $date . "','" . $time . "','" . $msg . "')") or die(mysql_error());
echo "<meta content=\"4; pms.php\" http-equiv=\"refresh\">
	<br/><br/><br/><img src=\"../../images/smilla_hugs_dog.gif\"><br/><br/><b>YES! Get in there...</b><br/><i>Your text was sent!</i><br/><br/><br/><br/><br/><br/><div style=\"height: 4px;\"></div><i>Back to your inbox we go...</i>"; 
} //end sent check 
break; //end make new msg 


// --------------------------------------------------------------------------
// --------------------------------------------------------------------------
// --------------------------------------------------------------------------
// --------------------------------------------------------------------------


case 'delall': //delete all page 
$get = mysql_query("SELECT * FROM `privates` WHERE `to` = '" . $logged['mobile'] . "'"); //get the private messages 

if(mysql_num_rows($get) == "0"){ 
    echo "
	<meta content=\"4; pms.php\" http-equiv=\"refresh\">
	<br/><br/><br/><img src=\"../../images/sherlock.gif\"><br/><br/><b>I have figured out that...</b><br/><i>You have no texts to delete!</i><br/><br/><br/><br/><br/><br/><i>Back to your inbox we go...</i>"; 
}else{ 
$delete = mysql_query("DELETE FROM `privates` WHERE `to` = '" . $logged['mobile'] . "'"); //delete tehm 
    if($delete) { //check if theres a mySQL error 
        echo "<meta content=\"4; pms.php\" http-equiv=\"refresh\">
	<br/><br/><br/><img src=\"../../images/sherlock.gif\"><br/><br/><b>I have figured out that...</b><br/><i>Your texts have disappeared!</i><br/><br/><br/><br/><br/><br/><i>Back to your inbox we go...</i>"; //success 
    }else{ //or not 
        echo "mySQL Error Encountered!"; 
    } //end error check 
} //end msg check 
break; //end page 


// --------------------------------------------------------------------------
// --------------------------------------------------------------------------
// --------------------------------------------------------------------------
// --------------------------------------------------------------------------


case 'delete': //start the delete page! 
$id = (int)htmlspecialchars(strip_tags($_GET['id'])); //make the ID safe 
if(!$id){ //if there is no ID to select 
echo "<a href=\"pms.php\">Go Back</a>No ID Selected!"; //echo the error 
}else{ //or if there is.... 
$select = mysql_query("SELECT * FROM `privates` WHERE `pid` = '" . $id . "'"); //get the message's info 
$msg = mysql_fetch_array($select); //select all data 
if($msg['to'] != $logged['mobile']){ //check if the user logged in is the owner of the message 
echo "<a href=\"pms.php\">Go Back</a>This Message Was Not Sent To You"; //if not 
}else{ //maybe... 
$do = mysql_query("DELETE FROM `privates` WHERE `pid` = '" . $id . "'") or die(mysql_error()); 
echo "<meta content=\"4; pms.php\" http-equiv=\"refresh\">
	<br/><br/><br/><img src=\"../../images/sherlock.gif\"><br/><br/><b>I have figured out that...</b><br/><i>You have deleted said text!</i><br/><br/><br/><br/><br/><br/><i>Back to your inbox we go...</i>"; 
} //end check possession 
} //end id check 
break; //end the delete page! 
} //end switch/get 
} //end login check 
?> 