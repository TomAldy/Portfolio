<?
ob_start();
$username=$_GET["username"];
$password=$_GET["password"];
$userlevel = $_GET["userlevel"];
if($username=="TomAldy" && $password=="aldytom1" && $userlevel=="Management"){
setcookie("logged", "yes", time()+3600);
setcookie("username", $username, time()+3600);
setcookie("password", $password, time()+3600);
setcookie("userlevel", $userlevel, time()+3600);
echo "Manager";
}
elseif($username=="assistant" && $password=="test" && $userlevel=="Assistant Management")
{
setcookie("logged", "yes", time()+3600);
setcookie("username", $username, time()+3600);
setcookie("password", $password, time()+3600);
setcookie("userlevel", $userlevel, time()+3600);
echo "Assistant";
}
elseif($username=="news" && $password=="test" && $userlevel=="News Reporter")
{
setcookie("logged", "yes", time()+3600);
setcookie("username", $username, time()+3600);
setcookie("password", $password, time()+3600);
setcookie("userlevel", $userlevel, time()+3600);
echo "Reporter";
}
elseif($username=="competition" && $password=="test" && $userlevel=="Competition Editor")
{
setcookie("logged", "yes", time()+3600);
setcookie("username", $username, time()+3600);
setcookie("password", $password, time()+3600);
setcookie("userlevel", $userlevel, time()+3600);
echo"Competitions";
}else{
echo"No";
}
?>