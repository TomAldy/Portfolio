<?php
$dir = '../images/badges/';
$files2 = scandir($dir, 1);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Badges & Achievements</title>
<link href="../inc/css/content.css" rel="stylesheet" type="text/css" />
<script language="JavaScript">

//Preloaded slideshow script- By Jason Moon
//For this script and more
//Visit http://www.dynamicdrive.com

// PUT THE URL'S OF YOUR IMAGES INTO THIS ARRAY...
var Slides = <?php echo json_encode(array_slice($files2, 2)); ?>;

// DO NOT EDIT BELOW THIS LINE!
function CacheImage(ImageSource) { // TURNS THE STRING INTO AN IMAGE OBJECT
   var ImageObject = new Image();
   ImageObject.src = ImageSource;
   return ImageObject;
}

function ShowSlide(Direction) {
   if (SlideReady) {
      NextSlide = CurrentSlide + Direction;
      // THIS WILL DISABLE THE BUTTONS (IE-ONLY)
      document.SlideShow.Previous.disabled = (NextSlide == 0);
      document.SlideShow.Next.disabled = (NextSlide == 
(Slides.length-1));    
 if ((NextSlide >= 0) && (NextSlide < Slides.length)) {
            document.images['Screen'].src = Slides[NextSlide].src;
            CurrentSlide = NextSlide++;
            Message = 'Picture ' + (CurrentSlide+1) + ' of ' + 
Slides.length;
            self.defaultStatus = Message;
            if (Direction == 1) CacheNextSlide();
      }
      return true;
   }
}

function Download() {
   if (Slides[NextSlide].complete) {
      SlideReady = true;
      self.defaultStatus = Message;
   }
   else setTimeout("Download()", 100); // CHECKS DOWNLOAD STATUS EVERY 100 MS
   return true;
}

function CacheNextSlide() {
   if ((NextSlide < Slides.length) && (typeof Slides[NextSlide] == 
'string'))
{ // ONLY CACHES THE IMAGES ONCE
      SlideReady = false;
      self.defaultStatus = 'Downloading next picture...';
      Slides[NextSlide] = CacheImage(Slides[NextSlide]);
      Download();
   }
   return true;
}

function StartSlideShow() {
   CurrentSlide = -1;
   Slides[0] = CacheImage(Slides[0]);
   SlideReady = true;
   ShowSlide(1);
}
</script>
</head>
<body onLoad="StartSlideShow()">
<table width="613" border="0" cellpadding="0" cellspacing="0" id="Table1">
<tr>
<td align="center" valign="middle" background="../images/layout/content/title_bar.png" width="613" height="25" style="background-repeat:no-repeat;;background-position:center center"><font style="font-size:10px" color="#FFFFFF" face="Verdana"><b>Badges & Achievements</b></font></td>
</tr></table><br>
<img src="../images/tomaldybadge.png" align="right"/>
There are many openHabbo Users out there who have plenty of Badges and Achievements, but I know what you're wondering, how many are there? Plus, what do they all mean?<br/><br/>Well, we are here to explain to you what each badge looks like, unfortunately we can not as of yet explain to you what they are for, because that would take a long time, but keep in mind that the longer that KeepAnOpenMind is open, the more badges we are getting done ready for V2!<br/><br/>You can use our little badge tool below to view all of the badges on openHabbo, beware that there are a lot!<br/><br/><br/>
<div style="padding-left: 240px;">
<img src="../images/content/left.png" onClick="ShowSlide(-1)" style="float:left"/>
<form name="SlideShow" style="float:left; background-image: url('../images/content/background.png'); background-repeat:no-repeat;">
<table style="height: 59px; width: 60px;">
<tr>
   <td><input type="button" name="Previous" 
value=" << "
onClick="ShowSlide(-1)" style="display: none;"></td>
   <td align="left"><img name="Screen" width=50 height=50  /></td>
   <td align="right"><input type="button" name="Next"
value=" >> " onClick="ShowSlide(1)" style="display: none;"></td>
</tr>
</table>
</form>
<img src="../images/content/right.png" onClick="ShowSlide(1)" style="float:left"/>
</div>
<br/><br/><br/><br/><br/><br/><br/><br/>
<b>So, why do we have badges?</b><br/>
<i>Do you really need to ask that question?</i><br/><br/>
Well, we need bagges simply because, it is a great way to show other openHabbo Users that you have earned particular awards for certain events, for example; if you had won an official openHabbo Hotel event and no one knew, how could you ever prove that you achieved it? That's where the badges come in!<br/><br/>
<b>How do I go about getting a badge for myself?</b><br/>
<i>Read below to find out how!</i><br/><br/>
You can easily achieve a badge on openHabbo, there are staff all about the hotel hosting events for you to win them! Bare in mind, that not all openHabbo Staff members will award you with a badge, a few of them loike to give out openHabbo Tower trophies to people as a special gift to say well done, these are rare trophies and can be traded for rare items, so these are also a good prize to win!<br/><br/>
Selective openHabbo Staff members like to let you choose the badge they give you, such as <b>Fleurs</b> for example, if you ever tune into DJ Emma on the radio (Fleurs) then she is definitely more than likely to hold a competition for a badge or a tower; she loves hosting trivia sessions!<br/><br/><br/>
<center>
<img src="../images/content/seperator.png" />
</center>
<br/><br/>
<b>Achievements</b><br/>
<i>Everyone has to do them!</i><br/><br/>
Achievements are small little odd jobs that the hotel Administrators have asked you to achieve in order to become part of the community in openHabbo, by copleting achievments you are able to earn more BADGES and even pixels on certain areas!<br/><br/>
Achievments can be found in the hotel in the image below...<br/><br/>
<center>
<img src="../images/achievement_image.png" />
<br/><br/><br/>
<img src="../images/content/seperator.png" />
</center>
<br/><br/>
</body>
</html>