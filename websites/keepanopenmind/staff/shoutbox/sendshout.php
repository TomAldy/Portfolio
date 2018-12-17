<center>
<?php

include("config.php");

$message = $_GET['message'];
$name = $_GET['name'];

$name = clean($name);
$message = clean($message);
$message = nl2br($message);
$message = parse_smilies($message);
$ip = $_SERVER['REMOTE_ADDR'];

if($message == "" || $name == "") {
die;
}

if(preg_match("#^/me(.*)$#", $message)) {
## ME
$message = explode("/me", $message);

$message = "<strong>*". $name ." ". $message[1] ."*</strong>";

$insert = mysql_query("INSERT INTO shoutbox (`username`, `message`, `ip`) VALUES ('$name', '$message', '$ip')") or die('Could not insert data! '.mysql_error());

}
else {

$insert = mysql_query("INSERT INTO shoutbox (`username`, `message`, `ip`) VALUES ('$name', '$message', '$ip')") or die('Could not insert data! '.mysql_error());
}
//
die();
?>
</center>