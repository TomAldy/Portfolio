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

  document.write("<b>" + hours + ":" + minutes + " " + "</b>");
</script>
</center>
</div>
<div style="height:212px">
<?
require_once "config.php"; //REQUIRE ONCE FOR SECURITY PURPOSES
$userid= $logged['id'];
$getuser= mysql_query("SELECT * FROM `members` WHERE `id`='$userid'");
//GET USER INFO FROM DB

//NOW FOR REST OF SEARCH PAGE
?>
<html><head><title>Your title</title>
<script src="forms-search.js"></script>
<? //BECAME LAZY FOR ALL THOSE PPL WHO WANT TO INTEGRATE THIS SCRIPT INTO THEIR SITE :) ?>
</head>
<body>
<div style="font-family: Verdana; font-size: 10px; color: #FFFFFF; padding: 5px;">
<div align="center" style="font-family: Verdana; font-size: 10px; color: #FFFFFF"><br />
<b>Search Tool</b><br/><br/>
<div class="username">
<input type="text" class="usernamebox" name="search-username" onKeyPress="search(this.value);" /></div><br/><b><s>A B C D E F G H I J K L M N O P Q R S T U V W X Y Z</s></b><br/><hr style="border:1px dashed white;">
<div id="txtHint" style="font-family: Verdana; font-size: 10px; color: #FFFFFF"><br/><img src="../../images/finger_push.gif"><br/><br/><b>Either click a letter,</b><br/><i>or use the search bar!</i></div>
<? //IM USING A ID IM USED TO. UNLESS YOU WANT TO CHANGE SOME STUFF IN THE 'forms-search.php' SCRIPT THEN I RECOMMEND LEAVING THIS ALONE. ?>
</div>
</div>
</div><br/>
<center><i>Don't forget to add your friends to message them!</i></center>
</body>
</html>