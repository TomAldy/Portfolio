<?php
$q= $_GET["q"];
require_once "config.php";
$sql="SELECT * FROM `members` WHERE username LIKE '%$q%' LIMIT 12";

$result = mysql_query($sql);
$check= mysql_num_rows($result);

if ($check == "0" || !isset($q)){
echo "NO SUCH USER WAS FOUND!";
}else{
	echo "<div align='left' style='padding-left: 5px;'><b>";
while($row = mysql_fetch_array($result)){
$usersname= $row['username'];
echo "<a href=\"members.php?user=$usersname\" target=\"mobile\">&raquo; $usersname</a><br/>";
}
}
echo"</b></div>";
?>