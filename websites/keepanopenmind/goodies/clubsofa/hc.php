<?php
header("Content-type: image/gif");
$habbo = $_GET['habbo'];
$habbo2 = $_GET['habbo2'];
$country = $_GET['country'];
$im = imagecreatefromgif("HCSofaT.gif");
$white = imagecolorallocate($im, 255, 255, 255);
$black = imagecolorallocate($im, 0, 0, 0);
$fp = @file_get_contents("http://" .$country. ".com/api_access.php?api=avatar&user=" .$habbo. "&action=sit&direction=4&head_direction=3&gesture=sml&size=l");  
$home = $fp;
$home2 = imagecreatefromgif("$home&img_format=gif");
imagecopy($im, $home2, 32, -10, 0, 0, 64, 110);
$fp = @file_get_contents("http://" .$country. ".com/api_access.php?api=avatar&user=" .$habbo2. "&action=sit&direction=4&head_direction=3&gesture=sml&size=l");  
$home3 = $fp;
$home4 = imagecreatefromgif("$home3&img_format=gif");
imagecopy($im, $home4, 58, 0, 0, 0, 64, 110);
$arm = imagecreatefromgif("HCSofaT2.gif");
imagecopy($im, $arm, 83.5, 72, 0, 0, 50, 47);
//Create Image
imagegif($im);
imagedestroy($im);
?>