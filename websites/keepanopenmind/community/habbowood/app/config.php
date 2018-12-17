<?php
//Database connection info
$db_server = "localhost";
$db_name = "keepanopenmind";
$db_username = "root";
$db_password = "";

// DO NOT EDIT BELOW THIS LINE
mysql_connect($db_server, $db_username, $db_password) or die(mysql_error());
mysql_select_db($db_name) or die ("Database not found.");
?>