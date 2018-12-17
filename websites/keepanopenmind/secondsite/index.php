<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Testing Website</title>
</head>
<link href="inc/css/layout.css" rel="stylesheet" type="text/css" />
<body background="images/backgrounds/newbg.png">
<div id="layout">
<div id="bottombar"><a href="http://www.vibearray.com" target="_blank"><img src="images/layout/advertisements/1.png" border="0" /></a></div>
<div id="topbar"><img src="images/layout/grandopening.png" align="left" />
<div id="selecttemplate">
<select name="template" style="width: 120px;">
<option value="default" value="http://www.keepanopendmind.org/website/upgraded" selected>-- LAYOUT #1</option>
<option value="second" value="http://www.keepanopendmind.org/website/default">-- LAYOUT #2</option>
</select>
</div>
</div>
<div id="banner">
<img src="images/layout/hotelbanner.png" align="right" />
</div>
<center><div id="newsupdates"><font style="rainbox: true;">WOW LOOK AT THIS WE CAN MAKE <font face="VolterBold">VOLTER BOLD</font> CHECK OUT THE CODING TO SEE HOW THIS IS DONE! IT'S MORE OR LESS ALREADY SETUP, DON'T WAIT.</font></div>
<div id="middlecontent">
<div id="left">
<div id="leftcontent">
<script type="text/javascript">
var persistmenu="yes"
var persisttype="sitewide"
if (document.getElementById){ 
document.write('<style type="text/css">\n')
document.write('.submenu{display: none;}\n')
document.write('</style>\n')
}
function SwitchMenu(obj){
	if(document.getElementById){
	var el = document.getElementById(obj);
	var ar = document.getElementById("masterdiv").getElementsByTagName("span");
		if(el.style.display != "block"){ 
			for (var i=0; i<ar.length; i++){
				if (ar[i].className=="submenu")
				ar[i].style.display = "none";
			}
			el.style.display = "block";
		}else{
			el.style.display = "none";
		}
	}
}
function get_cookie(Name) { 
var search = Name + "="
var returnvalue = "";
if (document.cookie.length > 0) {
offset = document.cookie.indexOf(search)
if (offset != -1) { 
offset += search.length
end = document.cookie.indexOf(";", offset);
if (end == -1) end = document.cookie.length;
returnvalue=unescape(document.cookie.substring(offset, end))
}

}

return returnvalue;

}



function onloadfunction(){

if (persistmenu=="yes"){

var cookiename=(persisttype=="sitewide")? "switchmenu" : window.location.pathname

var cookievalue=get_cookie(cookiename)

if (cookievalue!="")

document.getElementById(cookievalue).style.display="block"

}

}



function savemenustate(){

var inc=1, blockid=""

while (document.getElementById("sub"+inc)){

if (document.getElementById("sub"+inc).style.display=="block"){

blockid="sub"+inc

break

}

inc++

}

var cookiename=(persisttype=="sitewide")? "switchmenu" : window.location.pathname

var cookievalue=(persisttype=="sitewide")? blockid+";path=/" : blockid

document.cookie=cookiename+"="+cookievalue

}



if (window.addEventListener)

window.addEventListener("load", onloadfunction, false)

else if (window.attachEvent)

window.attachEvent("onload", onloadfunction)

else if (document.getElementById)

window.onload=onloadfunction



if (persistmenu=="yes" && document.getElementById)

window.onunload=savemenustate



</script>
<br/>
<div id="masterdiv">
<img src="images/layout/menu/keepanopenmind_up.png" border="0" onmouseover="this.src='images/layout/menu/keepanopenmind_down.png'" onmouseout="this.src='images/layout/menu/keepanopenmind_up.png'" id="keepanopenmind" name="keepanopenmind" onclick="SwitchMenu('sub1')" style="padding-bottom: 4px;"/><br/>
<span class="submenu" id="sub1" style="text-align: left; padding-left: 8px;">
- Link ONE<br/>
- Link TWO<br/>
- Link THREE<br/><br/>
</span>
<img src="images/layout/menu/keepanopenmind_up.png" border="0" onmouseover="this.src='images/layout/menu/keepanopenmind_down.png'" onmouseout="this.src='images/layout/menu/keepanopenmind_up.png'" id="keepanopenmind" name="keepanopenmind" onclick="SwitchMenu('sub2')" style="padding-bottom: 4px;"/><br/>
<span class="submenu" id="sub2" style="text-align: left; padding-left: 8px;">
- Link ONE<br/>
- Link TWO<br/>
- Link THREE<br/><br/>
</span>
<img src="images/layout/menu/keepanopenmind_up.png" border="0" onmouseover="this.src='images/layout/menu/keepanopenmind_down.png'" onmouseout="this.src='images/layout/menu/keepanopenmind_up.png'" id="keepanopenmind" name="keepanopenmind" onclick="SwitchMenu('sub3')" style="padding-bottom: 4px;"/><br/>
<span class="submenu" id="sub3" style="text-align: left; padding-left: 8px;">
- Link ONE<br/>
- Link TWO<br/>
- Link THREE<br/><br/>
</span>
<img src="images/layout/menu/keepanopenmind_up.png" border="0" onmouseover="this.src='images/layout/menu/keepanopenmind_down.png'" onmouseout="this.src='images/layout/menu/keepanopenmind_up.png'" id="keepanopenmind" name="keepanopenmind" onclick="SwitchMenu('sub4')" style="padding-bottom: 4px;"/><br/>
<span class="submenu" id="sub4" style="text-align: left; padding-left: 8px;">
- Link ONE<br/>
- Link TWO<br/>
- Link THREE<br/><br/>
</span>
<img src="images/layout/menu/keepanopenmind_up.png" border="0" onmouseover="this.src='images/layout/menu/keepanopenmind_down.png'" onmouseout="this.src='images/layout/menu/keepanopenmind_up.png'" id="keepanopenmind" name="keepanopenmind" onclick="SwitchMenu('sub5')" style="padding-bottom: 4px;"/><br/>
<span class="submenu" id="sub5" style="text-align: left; padding-left: 8px;">
- Link ONE<br/>
- Link TWO<br/>
- Link THREE<br/><br/>
</span>
<img src="images/layout/menu/keepanopenmind_up.png" border="0" onmouseover="this.src='images/layout/menu/keepanopenmind_down.png'" onmouseout="this.src='images/layout/menu/keepanopenmind_up.png'" id="keepanopenmind" name="keepanopenmind" onclick="SwitchMenu('sub6')" style="padding-bottom: 4px;"/><br/>
<span class="submenu" id="sub6" style="text-align: left; padding-left: 8px;">
- Link ONE<br/>
- Link TWO<br/>
- Link THREE<br/><br/>
</span>
<img src="images/layout/menu/keepanopenmind_up.png" border="0" onmouseover="this.src='images/layout/menu/keepanopenmind_down.png'" onmouseout="this.src='images/layout/menu/keepanopenmind_up.png'" id="keepanopenmind" name="keepanopenmind" onclick="SwitchMenu('sub7')" style="padding-bottom: 4px;"/><br/>
<span class="submenu" id="sub7" style="text-align: left; padding-left: 8px;">
- Link ONE<br/>
- Link TWO<br/>
- Link THREE<br/><br/>
</span>
<img src="images/layout/menu/keepanopenmind_up.png" border="0" onmouseover="this.src='images/layout/menu/keepanopenmind_down.png'" onmouseout="this.src='images/layout/menu/keepanopenmind_up.png'" id="keepanopenmind" name="keepanopenmind" onclick="SwitchMenu('sub8')" style="padding-bottom: 4px;"/><br/>
<span class="submenu" id="sub8" style="text-align: left; padding-left: 8px;">
- Link ONE<br/>
- Link TWO<br/>
- Link THREE<br/><br/>
</span>
<img src="images/layout/menu/keepanopenmind_up.png" border="0" onmouseover="this.src='images/layout/menu/keepanopenmind_down.png'" onmouseout="this.src='images/layout/menu/keepanopenmind_up.png'" id="keepanopenmind" name="keepanopenmind" onclick="SwitchMenu('sub9')" style="padding-bottom: 4px;"/><br/>
<span class="submenu" id="sub9" style="text-align: left; padding-left: 8px;">
- Link ONE<br/>
- Link TWO<br/>
- Link THREE<br/><br/>
</span>
<br/>
</div>
</div>
<div id="leftbottom"></div>
</div>
<div id="middle">
<div id="promobar"><img src="images/layout/advertisements/promo/left/council.png" />&nbsp;&nbsp;<img src="images/layout/advertisements/promo/middle/trophy.png" />&nbsp;&nbsp;<img src="images/layout/advertisements/promo/right/events.png" /></div>
<div id="contenttop"></div>
<div id="contentmid">
<div id="contentleft">
<center>
<div id="boxtop" style="background-image: url('images/layout/latestheadlines.png');"></div>
<div id="boxcontent">
<center>
OH HAI
</center>
</div>
<div id="boxbottom"></div>
<br/>
<div id="boxtop" style="background-image: url('images/layout/radiostatistics.png');"></div>
<div id="boxcontent">
<center>
OH HAI
</center>
</div>
<div id="boxbottom"></div>
<br/>
<div id="boxtop" style="background-image: url('images/layout/radioplayer.png');"></div>
<div id="boxcontent">
<center>
<object class="texto_ouca" width="181" height="41" vspace="0" hspace="0" align="top" type="application/x-shockwave-flash" data="http://forcehotel.com/player2.swf? bgcolor=0xeaeaea&amp;iconcolor=0x000000&amp;textcolor=0x666666&amp;barcolor=0x666666&amp;pathcolor=0xFFFFFF&amp;buttoncolor=0xD2D2D2&amp;buttonhovercolor=0x0099cc&amp;soundFile=http://216.245.196.139:8000/openstream.ogg">
    <param name="movie" value="http://forcehotel.com/player2.swf?bgcolor=0xeaeaea&amp;iconcolor=0x000000&amp;textcolor=0x666666&amp;barcolor=0x666666&amp;pathcolor=0xFFFFFF&amp;buttoncolor=0xD2D2D2&amp;buttonhovercolor=0x0099cc&amp;soundFile=http://216.245.196.139:8000/openstream.ogg" />
    <param name="quality" value="high" />
    <param name="menu" value="false" />
    <param name="wmode" value="transparent" />
</object>
</center>
</div>
<div id="boxbottom"></div>
</center>
</div>
<div id="contentright">
<div id="maincontenttop"></div>
<br/>
<div id="maincontentmid">
<script type="text/javascript">

window.onload = function() {

var f = document.getElementById("mainframe");

function resize() {

var h = "";

var w = "";

if (f.contentDocument) {

h = f.contentDocument.documentElement.offsetHeight + 20 + "px";

} else if (f.contentWindow) {

h = f.contentWindow.document.body.scrollHeight + 5 + "px";

} else {

return;

}

f.setAttribute("height",h);

f.parentNode.setAttribute("height",h);

}

if (window.addEventListener) {

f.onload = resize;

} else if (f.attachEvent) {

f.attachEvent("onload", resize);

} else {

return;

}

resize();

}

</script>

<iframe name="main" id="mainframe" src="pages/home.html" width="100%" frameborder="0" allowtransparency="no" scrolling="No"></iframe>
</div><br/>
<div id="maincontentbottom"></div>
</div>
</div>
<div id="aftercontent">
<br/>
<center>
<div id="copyrighttop"></div>
<div id="copyrightmid">ForceHotel®, openHabbo, dotXen and associated logos are trademarks of dotXen Group. All rights reserved. Copyright, trademarks and other rights in the material from openHabbo® and other services of dotXen Group on this website are owned by dotXen Group. All rights reserved. This website is neither owned nor operated by dotXen Group and it is not part of openHabbo® or any other service or website owned or operated by dotXen Group. dotXen Group are not responsible for any content on this website and the views and opinions expressed herein are not necessarily the views and opinions of dotXen Group.</div>
<div id="copyrightbottom"></div>
<br/><br/><br/><br/><br/><br/><br/>
</center>
<br/>
</div>
</div>
</div>
</center>
</div>
</body>
</html>