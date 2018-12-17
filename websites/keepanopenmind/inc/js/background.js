
/*Background Change Script w/cookie persistence
  © 2006 John Davenport Scheuer (jscheuer1)
  this credit must remain for legal use
  visit Dynamic Drive Help Forums (http://www.dynamicdrive.com/forums/) */

//Set expiration in days, use 0 for session only cookie
var exp=20

//Set Background Images Array, use at least two Images.
//Do NOT use =, +, -, or spaces in path or filenames.
//For best results, set body's background to the first entry
var backgs=new Array
backgs[0]="images/backgrounds/forest_bg.png"
backgs[1]="images/backgrounds/01.gif"
backgs[2]="images/backgrounds/02.gif"
backgs[3]="images/backgrounds/2lt4saq.jpg"
backgs[4]="images/backgrounds/03.gif"
backgs[5]="images/backgrounds/05.gif"
backgs[6]="images/backgrounds/06.gif"
backgs[7]="images/backgrounds/07.gif"
backgs[8]="images/backgrounds/08.gif"
backgs[9]="images/backgrounds/09.gif"
backgs[10]="images/backgrounds/10.gif"
backgs[11]="images/backgrounds/11.gif"
backgs[12]="images/backgrounds/12.gif"
backgs[13]="images/backgrounds/13.gif"
backgs[14]="images/backgrounds/14.gif"
backgs[15]="images/backgrounds/15.gif"
backgs[16]="images/backgrounds/16.gif"
backgs[17]="images/backgrounds/17.gif"
backgs[18]="images/backgrounds/18.gif"
backgs[19]="images/backgrounds/19.gif"
backgs[20]="images/backgrounds/21.gif"
backgs[21]="images/backgrounds/22.gif"
backgs[22]="images/backgrounds/23.gif"
backgs[23]="images/backgrounds/24.gif"
backgs[24]="images/backgrounds/25.gif"
backgs[25]="images/backgrounds/26.gif"
backgs[26]="images/backgrounds/27.gif"
backgs[27]="images/backgrounds/28.gif"
backgs[28]="images/backgrounds/29.gif"
backgs[29]="images/backgrounds/30.gif"
backgs[30]="images/backgrounds/32.gif"
backgs[31]="images/backgrounds/33.gif"
backgs[32]="images/backgrounds/38.gif"
backgs[33]="images/backgrounds/39.gif"
backgs[34]="images/backgrounds/40.gif"
backgs[35]="images/backgrounds/42.gif"
backgs[36]="images/backgrounds/basket_ball.gif"
backgs[37]="images/backgrounds/bday_background.gif.png"
backgs[38]="images/backgrounds/bg.gif"
backgs[39]="images/backgrounds/bg_10.png"
backgs[40]="images/backgrounds/bg_blue.gif"
backgs[41]="images/backgrounds/bg_crosshatch.gif"
backgs[42]="images/backgrounds/bg_duck.gif"
backgs[43]="images/backgrounds/bg_empty.gif"
backgs[44]="images/backgrounds/bg_fish.gif"
backgs[45]="images/backgrounds/bg_frog.gif"
backgs[46]="images/backgrounds/bg_grass.gif"
backgs[47]="images/backgrounds/bg_grey.gif"
backgs[48]="images/backgrounds/bg_info.gif"

/////////No Editing Needed for rest of Script////////
function bgChange(){
if (backgs.length>2)
backgs.push([backgs.shift()])
for (i = 0; i < backgs.length; i++)
if (document.body.background!==backgs[i]||document.body.style.backgroundImage.toLowerCase()!=='url('+backgs[i].toLowerCase()+')'){
document.body.style.backgroundImage='url('+backgs[i]+')'
break
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
var acookiename="abgchange"
var acookievalue=get_cookie(acookiename)
if (acookievalue!=""){
backgs=eval(acookievalue)
document.body.style.backgroundImage='url('+backgs[0]+')'
}
}

function saveBgrnd(){
var abackgs='["'
for (i = 0; i < backgs.length; i++)
abackgs+=backgs[i]+'","'
abackgs=abackgs.substr(0,abackgs.length-2)+']'
var acookiename="abgchange"
var date = new Date();
date.setTime(date.getTime()+(exp*24*60*60*1000));
var expires = exp? "; expires="+date.toGMTString() : ""
var acookievalue=abackgs+expires+"; path=/" 
document.cookie=acookiename+"="+acookievalue
}

if ( typeof window.addEventListener != "undefined" )
    window.addEventListener( "load", onloadfunction, false );
else if ( typeof window.attachEvent != "undefined" ) {
    window.attachEvent( "onload", onloadfunction );
}
else {
    if ( window.onload != null ) {
        var oldOnload = window.onload;
        window.onload = function ( e ) {
            oldOnload( e );
            onloadfunction();
        };
    }
    else
        window.onload = onloadfunction;
}

window.onunload=saveBgrnd