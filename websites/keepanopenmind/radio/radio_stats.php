<style type="text/css">
<!--
body
{
	background-color: transparent;
	font-family: Verdana;
	font-size: 10px;
	color: #FFFFFF;
}
a {
	font-size: 10px;
	color: #FFFFFF;
}
a:link {
	text-decoration: none;
}
a:visited {
	text-decoration: none;
	color: #FFFFFF;
}
a:hover {
	text-decoration: none;
	color: #FFFFFF;
}
a:active {
	text-decoration: none;
	color: #FFFFFF;
}
-->
</style>


<?
// CHOOSE A RADIO - set the following variable to either "force" or "open"
$stream = "open";






if($stream == "force"){
    $fp = @file_get_contents("http://forcehotel.com/api_access.php?api=radio&stream=force"); 
} else if($stream == "open"){
    $fp = @file_get_contents("http://forcehotel.com/api_access.php?api=radio&stream=open"); 
} else {
    echo "Invalid stream selected!";
}


if(strlen($fp) > 0 && $fp !== "radio_offline"){
    $rows = explode("^", $fp);
    $dj = $rows[0];
    $listeners = $rows[1];
    $song = $rows[2];
    $out = "<div style='position: absolute; top:2px; left:0px;width:634px;'>
<img src='../images/layout/openhabbo_logo.png' align='right'>
<font face='Verdana' color='#FFFFFF' style='font-size:10px;'>
<b>DJ:</b>  " . $dj . "<br/>
<b>Listeners:</b> " . $listeners . "<br/>
<b>Now Playing:</b> " . $song . "&nbsp;
<br/><a href='radio_stats.php' targer='stats'><b>[REFRESH]</b></a>
</font>
</div>";
} else {
    if($stream == "force"){
        $out = "ForceFM is currently offline.";
    } else if($stream == "open"){
        $out = "<br/><center><b>Unfortunately, openHabbo radio is offline.</b><br/>Please check back again later to see if it's online!</b></center>"; 
    }
}


echo $out;
?>