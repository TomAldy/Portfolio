<html>
<head>
<php?/*================================================================+\ 
|| Force Hotel & openHabbo API Access 
|+================================================================== 
|| # Copyright (C) 2009-2012 Force Hotel 
|| # http://www.forcehotel.com , http://www.openhabbo.com 
|| # Images Copyright (C) 2009 Sulake Ltd. All rights reserved. 
|+================================================================== 
|| # Api created by Andrew 
|| # Use this script to access the Force Hotel or openHabbo API to retrieve a users figure. 
|| # Script edited by Amiten 
\+================================================================*/ ?>

<title>Force And Open Imager</title>
<link href="../../inc/css/content.css" rel="stylesheet" type="text/css" />
<body>
<style type="text/css">
<!--
#apDiv1 {
	position:absolute;
	left:879px;
	top:46px;
	width:300px;
	height:200px;
	z-index:1;
}
-->
</style>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"></head>
<style>
body
{
	font-family: Verdana;
	font-size: 10px;
	margin: 0px;
}

tr, td
{
	font-family: Verdana;
	font-size: 10px;
}
input
{
	font-family: Verdana;
	font-size: 10px;
	border: 1px solid black;
	padding: 3px;
}

select
{
	font-family: verdana;
	font-size: 10px;
	border: 1px solid black;
	padding: 3px;
}
</style>
<!-- Created By Jamie Cassidy - JC-Labz.NET -->
</head>

<body text="#000000 link="#000000" vlink="#000000" alink="#000000">
<table width="613" border="0" cellpadding="0" cellspacing="0" id="Table1">
<tr>
<td align="center" valign="middle" background="../../images/layout/content/title_bar.png" width="613" height="25" style="background-repeat:no-repeat;;background-position:center center"><font style="font-size:10px" color="#FFFFFF" face="Verdana"><b>openHabbo/Force Hotel Imager!</b></font></td>
</tr></table><br>
<img src="../../images/200934_bubblegumparty.png" align="right" />
<b>The Imager</b><br/>
<i>Created by <b>Andrew</b>, edited by <b>Amiten</b>...</i><br/><br/>
Ever wanted to see your openHabbo or Force Hotel avatar out of the hotel? Well here is the place to do it! You are also able to use this image anywhere you want, just right click and save it and you are able to use it anyway you want, in any place! Most people tend to use it on Forums or for when creating Pixel Art, but we really don't mind what you do with it, as soon as you save it; it's yours!<br/><br/>
We would just like to make it <b>extremely clear</b>, that we did not make this script, it has been created by Andrew and edited by Amiten to make sure that it is of full functioning quality, we thank the pair of them for creating it and allowing us to add more functionality to our website!<br/><br/><br/>
<div align="center">
<p>
  <?php 
if(isset($_POST['imager']))
{
	$name = $_POST['name'];
	$action = $_POST['action'];
	$direction = $_POST['direction'];
	$h_direction = $_POST['h_direction'];
	$gesture = $_POST['gesture'];
	$size = $_POST['size'];
	$hotel = $_POST['hotel'];
	
	$fp = @file_get_contents("http://www." . $hotel . "/api_access.php?api=avatar&user=" . $name . "&action=" . $action . "&direction=" . $direction . "&head_direction=" . $h_direction . "&gesture=" . $gesture . "&size=" . $size);
	$userImage = $fp;
	
	echo("<p align=\"center\"><b>Here's your $hotel image, $name!</b><br/><i>Hope you enjoy it!</i></p><p align=\"center\"><img src=$userImage/></p>");
}
echo("
<p><form method=\"post\">
  <table width=\"400\" border=\"0\" align=\"center\" cellpadding=\"3\" cellspacing=\"1\">
    <tr>
      <td width=\"95\" bgcolor=\"#999999\" style=\"-moz-border-radius: 3px;-webkit-border-radius: 3px;border-radius: 3px;\"><b>Username:</b></td>
      <td width=\"244\" bgcolor=\"#CCCCCC\" style=\"-moz-border-radius: 3px;-webkit-border-radius: 3px;border-radius: 3px;\"><input name=\"name\" type=\"text\" id=\"name\" size=\"30\" style=\"-moz-border-radius: 10px;-webkit-border-radius: 10px;border-radius: 10px;\"/></td>
    </tr>
    <tr>
      <td bgcolor=\"#999999\" style=\"-moz-border-radius: 3px;-webkit-border-radius: 3px;border-radius: 3px;\"><b>Hotel:</b></td>
      <td bgcolor=\"#CCCCCC\" style=\"-moz-border-radius: 3px;-webkit-border-radius: 3px;border-radius: 3px;\"><select name=\"hotel\" style=\"-moz-border-radius: 10px;-webkit-border-radius: 10px;border-radius: 10px;\">
      <option value=\"forcehotel.com\">ForceHotel</option>
      <option value=\"openhabbo.com\">OpenHabbo</option>
      </select>
      </td>
    </tr>
    <tr>
      <td bgcolor=\"#999999\" style=\"-moz-border-radius: 3px;-webkit-border-radius: 3px;border-radius: 3px;\"><b>Action:</b></td>
      <td bgcolor=\"#CCCCCC\" style=\"-moz-border-radius: 3px;-webkit-border-radius: 3px;border-radius: 3px;\"><select name=\"action\" id=\"action\" style=\"-moz-border-radius: 10px;-webkit-border-radius: 10px;border-radius: 10px;\">
        <option value=\"std\">None</option>
						<option value=\"wav\">Wave</option>
						<option value=\"wlk\">Walk</option>
						<option value=\"sit\">Sit</option>
						<option value=\"lay\">Lay down</option>
						<option value=\"drk=1\">Drinking</option>
						<option value=\"crr=1\">Hold drink (blue)</option>
						<option value=\"none\">---</option>
						<option value=\"crr=2\">Hold: Carrot</option>
						<option value=\"crr=3\">Hold: Ice</option>
						<option value=\"crr=5\">Hold: Cola</option>
						<option value=\"crr=6\">Hold: Coffee</option>
						<option value=\"crr=9\">Hold: Pink potion</option>
						<option value=\"crr=33\">Hold: Calippo icecream</option>
						<option value=\"crr=42\">Hold: Japanese tea</option>
						<option value=\"crr=43\">Hold: red glass</option>
						<option value=\"crr=44\">Hold: green glass</option>
						<option value=\"crr=667\">Hold: Bubbles</option>
						<option value=\"none\">---</option>
						<option value=\"drk=2\">Eat: Carrot</option>
						<option value=\"drk=3\">Eat: Ice</option>
						<option value=\"drk=33\">Eat: Calippo icecream</option>
						<option value=\"drk=5\">Drink: Cola</option>
						<option value=\"drk=6\">Drink: Coffee</option>
						<option value=\"drk=9\">Drink: Pink potion</option>
						<option value=\"drk=42\">Drink: Japanese tea</option>
						<option value=\"drk=43\">Drink: red glass</option>
						<option value=\"drk=44\">Drink: green glass</option>
						<option value=\"drk=667\">Drink: Bubbles</option>
      </select>
      </td>
    </tr>
    <tr>
      <td bgcolor=\"#999999\" style=\"-moz-border-radius: 3px;-webkit-border-radius: 3px;border-radius: 3px;\"><b>Gesture:</b></td>
      <td bgcolor=\"#CCCCCC\" style=\"-moz-border-radius: 3px;-webkit-border-radius: 3px;border-radius: 3px;\"><select name=\"gesture\" id=\"gesture\" style=\"-moz-border-radius: 10px;-webkit-border-radius: 10px;border-radius: 10px;\">
       <option value=\"std\">None</option>
						<option value=\"sml\">Smile</option>
						<option value=\"sad\">Sad</option>
						<option value=\"spk\">Speak</option>
						<option value=\"eyb\">Eyes closed</option>
						<option value=\"agr\">Angry</option>
						<option value=\"srp\">Surprised</option>
      </select>
      </td>
    </tr>
  </table>
<table width=\"400\" border=\"0\" align=\"center\" cellpadding=\"3\" cellspacing=\"1\">
    <tr>
      <td bgcolor=\"#999999\" rowspan=\"2\" style=\"-moz-border-radius: 3px;-webkit-border-radius: 3px;border-radius: 3px;\"><b>Figure Direction:</b></td>
      <td bgcolor=\"#CCCCCC\" style=\"-moz-border-radius: 3px;-webkit-border-radius: 3px;border-radius: 3px;\"style=\"-moz-border-radius: 3px;-webkit-border-radius: 3px;border-radius: 3px;\"width=\"64\"><div align=\"center\"><img src=\"directions/1.png\" alt=\"1\" width=\"64\" height=\"110\" /><br />
        <input type=\"radio\" name=\"direction\" id=\"radio\" value=\"1\" />
      </div></td>
      <td bgcolor=\"#CCCCCC\" style=\"-moz-border-radius: 3px;-webkit-border-radius: 3px;border-radius: 3px;\"style=\"-moz-border-radius: 3px;-webkit-border-radius: 3px;border-radius: 3px;\"width=\"64\"><div align=\"center\"><img src=\"directions/2.png\" alt=\"2\" width=\"64\" height=\"110\" /><br />
        <input type=\"radio\" name=\"direction\" id=\"radio2\" value=\"2\" />
      </div></td>
      <td bgcolor=\"#CCCCCC\" style=\"-moz-border-radius: 3px;-webkit-border-radius: 3px;border-radius: 3px;\"style=\"-moz-border-radius: 3px;-webkit-border-radius: 3px;border-radius: 3px;\"width=\"64\"><div align=\"center\"><img src=\"directions/3.png\" alt=\"3\" width=\"64\" height=\"110\" /><br />
        <input type=\"radio\" name=\"direction\" id=\"radio3\" value=\"3\" />
      </div></td>
      <td bgcolor=\"#CCCCCC\" style=\"-moz-border-radius: 3px;-webkit-border-radius: 3px;border-radius: 3px;\"style=\"-moz-border-radius: 3px;-webkit-border-radius: 3px;border-radius: 3px;\"width=\"64\"><div align=\"center\"><img src=\"directions/4.png\" alt=\"4\" width=\"64\" height=\"110\" /><br />
        <input type=\"radio\" name=\"direction\" id=\"radio4\" value=\"4\" />
      </div></td>
    </tr>
    <tr>
      <td bgcolor=\"#CCCCCC\" style=\"-moz-border-radius: 3px;-webkit-border-radius: 3px;border-radius: 3px;\"width=\"64\"><div align=\"center\"><img src=\"directions/5.png\" alt=\"5\" width=\"64\" height=\"110\" /><br />
        <input type=\"radio\" name=\"direction\" id=\"radio5\" value=\"5\" />
      </div></td>
      <td bgcolor=\"#CCCCCC\" style=\"-moz-border-radius: 3px;-webkit-border-radius: 3px;border-radius: 3px;\"width=\"64\"><div align=\"center\"><img src=\"directions/6.png\" alt=\"6\" width=\"64\" height=\"110\" /><br />
        <input type=\"radio\" name=\"direction\" id=\"radio6\" value=\"6\" />
      </div></td>
      <td bgcolor=\"#CCCCCC\" style=\"-moz-border-radius: 3px;-webkit-border-radius: 3px;border-radius: 3px;\"width=\"64\"><div align=\"center\"><img src=\"directions/7.png\" alt=\"7\" width=\"64\" height=\"110\" /><br />
        <input type=\"radio\" name=\"direction\" id=\"radio7\" value=\"7\" />
      </div></td>
      <td bgcolor=\"#CCCCCC\" style=\"-moz-border-radius: 3px;-webkit-border-radius: 3px;border-radius: 3px;\"width=\"64\"><div align=\"center\"><img src=\"directions/8.png\" alt=\"8\" width=\"64\" height=\"110\" /><br />
        <input type=\"radio\" name=\"direction\" id=\"radio8\" value=\"8\" />
      </div></td>
    </tr>
  </table>
  <table width=\"400\" border=\"0\" align=\"center\" cellpadding=\"3\" cellspacing=\"1\">
    <tr>
      <td bgcolor=\"#999999\" rowspan=\"2\" style=\"-moz-border-radius: 3px;-webkit-border-radius: 3px;border-radius: 3px;\"><b>Head Direction:</b></td>
      <td bgcolor=\"#CCCCCC\" style=\"-moz-border-radius: 3px;-webkit-border-radius: 3px;border-radius: 3px;\"width=\"64\"><div align=\"center\">
	  	<img src=\"h_directions/1.gif\" alt=\"1\" /><br />
        <input type=\"radio\" name=\"h_direction\" id=\"radio9\" value=\"1\" />
      </div></td>
      <td bgcolor=\"#CCCCCC\" style=\"-moz-border-radius: 3px;-webkit-border-radius: 3px;border-radius: 3px;\"width=\"64\"><div align=\"center\">
	  <img src=\"h_directions/2.gif\" alt=\"2\" /><br />
        <input type=\"radio\" name=\"h_direction\" id=\"radio10\" value=\"2\" />
      </div></td>
      <td bgcolor=\"#CCCCCC\" style=\"-moz-border-radius: 3px;-webkit-border-radius: 3px;border-radius: 3px;\"width=\"64\"><div align=\"center\">
	  <img src=\"h_directions/3.gif\" alt=\"3\" /><br />
        <input type=\"radio\" name=\"h_direction\" id=\"radio11\" value=\"3\" />
      </div></td>
      <td bgcolor=\"#CCCCCC\" style=\"-moz-border-radius: 3px;-webkit-border-radius: 3px;border-radius: 3px;\"width=\"64\"><div align=\"center\">
	  <img src=\"h_directions/4.gif\" alt=\"4\" /><br />
        <input type=\"radio\" name=\"h_direction\" id=\"radio12\" value=\"4\" />
      </div></td>
    </tr>
    <tr>
      <td bgcolor=\"#CCCCCC\" style=\"-moz-border-radius: 3px;-webkit-border-radius: 3px;border-radius: 3px;\"width=\"64\"><div align=\"center\">
	  <img src=\"h_directions/5.gif\" alt=\"5\" /><br />
        <input type=\"radio\" name=\"h_direction\" id=\"radio13\" value=\"5\" />
      </div></td>
      <td bgcolor=\"#CCCCCC\" style=\"-moz-border-radius: 3px;-webkit-border-radius: 3px;border-radius: 3px;\"width=\"64\"><div align=\"center\">
	  <img src=\"h_directions/6.gif\" alt=\"6\" /><br />
        <input type=\"radio\" name=\"h_direction\" id=\"radio14\" value=\"6\" />
      </div></td>
      <td bgcolor=\"#CCCCCC\" style=\"-moz-border-radius: 3px;-webkit-border-radius: 3px;border-radius: 3px;\"width=\"64\"><div align=\"center\">
	  <img src=\"h_directions/7.gif\" alt=\"7\" /><br />
        <input type=\"radio\" name=\"h_direction\" id=\"radio15\" value=\"7\" />
      </div></td>
      <td bgcolor=\"#CCCCCC\" style=\"-moz-border-radius: 3px;-webkit-border-radius: 3px;border-radius: 3px;\"width=\"64\"><div align=\"center\">
	  <img src=\"h_directions/8.gif\" alt=\"8\" /><br />
        <input type=\"radio\" name=\"h_direction\" id=\"radio16\" value=\"8\" />
      </div></td>
    </tr>
  </table>
  <table width=\"400\" border=\"0\" align=\"center\" cellpadding=\"3\" cellspacing=\"1\">
    <tr>
      <td bgcolor=\"#999999\" style=\"-moz-border-radius: 3px;-webkit-border-radius: 3px;border-radius: 3px;\"><b>Size:</b></td>
      <td bgcolor=\"#CCCCCC\" style=\"-moz-border-radius: 3px;-webkit-border-radius: 3px;border-radius: 3px;\"width=\"135\"><div align=\"center\"><img src=\"size/large.png\" alt=\"large\" width=\"64\" height=\"110\" /><br />
        <input type=\"radio\" name=\"size\" id=\"radio17\" value=\"l\" />
      </div></td>
      <td bgcolor=\"#CCCCCC\" style=\"-moz-border-radius: 3px;-webkit-border-radius: 3px;border-radius: 3px;\"width=\"135\" valign=\"bottom\"><div align=\"center\"><img src=\"size/small.png\" alt=\"small\" width=\"30\" height=\"56\" /><br />
        <input type=\"radio\" name=\"size\" id=\"s\" value=\"s\" />
      </div></td>
    </tr>
  </table>
  <div align=\"center\"><br />
    <input type=\"image\" name=\"imager\" id=\"imager\" value=\"Go!\" src=\"../../images/submit_contact.png\" style=\"border: 0px;\" />
  </div>
</form></p>
</body>
</html>");
?>
</p>
