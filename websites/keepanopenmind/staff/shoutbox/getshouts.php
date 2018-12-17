<center>
<?php

include("config.php");

?>
<script>
function GetXmlHttpObject()
{ 
    var objXMLHttp = null 
    if (window.XMLHttpRequest)
    { 
        objXMLHttp = new XMLHttpRequest() 
        }
            else if (window.ActiveXObject)
        { 
        objXMLHttp = new ActiveXObject("Microsoft.XMLHTTP")
    } 
    return objXMLHttp 
} 

function grab() {
// Open function
// Set object
    xmlHttp = GetXmlHttpObject() 
    if (xmlHttp == null)
    {
        alert ("Browser does not support HTTP Request")
        return
    }
// We have set teh object


var url = "getshouts.php"
xmlHttp.open("GET",url,true)
xmlHttp.onreadystatechange = function () {
if (xmlHttp.readyState == 4) {
document.getElementById("shoutbox").innerHTML = xmlHttp.responseText;

}
};
xmlHttp.send(null);
// End function
}

function sendshout() {
// Open function
// Set object
    xmlHttp = GetXmlHttpObject() 
    if (xmlHttp == null)
    {
        alert ("Browser does not support HTTP Request")
        return
    }
// We have set teh object


// Make sure they aint spammingz!!

if(document.request.message.value == "") {
        alert("Please enter a message!")
        return
}

var url = "sendshout.php?message="+document.request.message.value
xmlHttp.open("GET",url,true)
xmlHttp.onreadystatechange = function () {
if (xmlHttp.readyState == 4) {
grab();
document.request.message.value = "";
}
};
xmlHttp.send(null);
// End function
}

/*/ DELETE /*/
function delshout(id) {
// Open function
// Set object
    xmlHttp = GetXmlHttpObject() 
    if (xmlHttp == null)
    {
        alert ("Browser does not support HTTP Request")
        return
    }
// We have set teh object


// Make sure they aint spammingz!!

if(id == "") {
        alert("Error!")
        return
}

var url = "delshout.php?id="+id
xmlHttp.open("GET",url,true)
xmlHttp.onreadystatechange = function () {
if (xmlHttp.readyState == 4) {
grab();
}
};
xmlHttp.send(null);
// End function
}




</script>
<?php
//
$query = mysql_query("SELECT * FROM shoutbox ORDER BY id DESC LIMIT 14");

$i = "0";

while($rows = mysql_fetch_array($query)) {

echo("
<center>
<div>
<div style=\"background-image: url('../../images/shoutbox/left.png');float:left;width:33px;height: 29px;\">&nbsp;</div>
<div style=\"background-image: url('../../images/shoutbox/bg.png');float:left;height: 20px; padding: 3px;\">
<div id=\"". $rows["id"] ."\"\">
<b>". $rows["username"] .":</b> ". nl2br($rows["message"]) ."
</div>
</div>
<div height=\"29\" width=\"12\" style=\"background-image: url('../../images/shoutbox/right.png');float:left;width: 12px;height: 29px;\">&nbsp;</div>
</div><br/>
<div height=\"10\">&nbsp;</div>
</center>");

//

$i++;

}

die();
?>
</center>