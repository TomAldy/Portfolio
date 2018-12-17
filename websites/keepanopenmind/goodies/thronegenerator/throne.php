<?php
header("Content-type: image/gif");
$habbo = $_GET['habbo'];
$country = $_POST['country'];
    $im = imagecreatefromgif("throne_1.gif");
    $white = imagecolorallocate($im, 255, 255, 255);
    $black = imagecolorallocate($im, 0, 0, 0);
	$fp = @file_get_contents("http://" .$country. ".com/api_access.php?api=avatar&user=" .$habbo. "&direction=3&action=sit&head_direction=3&gesture=sml&size=l");  
	$home = $fp;
	$home2 = imagecreatefromgif("$home&img_format=gif");
    imagecopy($im, $home2, 14, -16, 0, 0, 64, 110);
    $throne = imagecreatefromgif("throne_2.gif");
    imagecopy($im, $throne, 34, 56, 0, 0, 38, 44);
//Create Image
imagegif($im);
imagedestroy($im);
?>