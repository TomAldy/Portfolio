<head>
<link rel="stylesheet" type="text/css" href="gallerystyle.css" />
      
<!-- Do not edit IE conditional style below -->
<!--[if gte IE 5.5]>
<style type="text/css">
#motioncontainer {
width:expression(Math.min(this.offsetWidth, maxwidth)+'px');
}
</style>
<![endif]-->
<!-- End Conditional Style -->

<script type="text/javascript" src="motiongallery.js">

/***********************************************
* CMotion Image Gallery- © Dynamic Drive DHTML code library (www.dynamicdrive.com)
* Visit http://www.dynamicDrive.com for hundreds of DHTML scripts
* This notice must stay intact for legal use
* Modified by Jscheuer1 for autowidth and optional starting positions
***********************************************/

</script>
</head>
<div id="motioncontainer" style="position:relative;overflow:hidden;">
<div id="motiongallery" style="position:absolute;left:0;top:0;white-space: nowrap;">

<nobr id="trueContainer">
<?php
include("config.php");
$files = glob("../../images/*.*"); 
for ($i=1; $i<count($files); $i++) 
{ 
$num = $files[$i]; 
echo '<img src="'.$num.'" alt="random image" width="150" height="150">'."&nbsp;&nbsp;";
}
?>
</nobr>
</div>
</div>

