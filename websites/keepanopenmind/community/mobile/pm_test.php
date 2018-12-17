<?php
include("config.php");
$msgs = mysql_query("SELECT * FROM `privates` WHERE (`to` = '" . $logged['mobile'] . "') OR (`to` = '" . $logged['username'] . "') ORDER BY `pid` Desc LIMIT 2") or die(mysql_error()); //get all the messages to the loged in user 
echo "<a href=\"pms.php?page=compose\">Compose Message</a><br/><br/> 
<a href=\"pms.php?page=delall\">Delete All Messages</a><br/><br/>
-----------------------------------";
$total_pms = mysql_num_rows($msgs); //count members 
if($total_pms == 0){ //check if there are messages or not 
?>
<br/>
<br/>
<img src="../../images/shabbolin_ill_maitre.gif"><br/><br/>You have no new messages...
<br/>
<br/>
<?php
}else{ //or if there are messages 
echo"<div style=\"height:130px;overflow: auto;\">";
while($r = mysql_fetch_array($msgs)){ //repeat for all the messages 
echo "
<table width=\"100%\" cellpadding=\"5\" cellspacing=\"0\" border=\"0\" id=\"Table1\">
<tr>
<td align=\"center\" valign=\"middle\" width=\"38\" height=\"44\"><a href=\"pms.php?page=view&id=$r[pid]\"><img src=\"$r[status]\" border=\"0\"></a><br/><a href=\"pms.php?page=delete&id=$r[pid]\"><img src=\"../../images/delete_entry_button.gif\" border=\"0\"></a></td>
<td align=\"left\" valign=\"middle\" width=\"222\" height=\"44\"><font face=\"Verdana\" style=\"font-size: 10px; color: #FFFFFF;\">$r[from2] <i>($r[from])</i><br/>
$r[date]<br/>$r[time]<br/>
</tr>
</table></font>
-----------------------------------"; //echo the messages 
} //end while 
} //end message amount check 
?>