<?  
session_start(); //allows session 

$conn = mysql_connect("localhost","root","");  
mysql_select_db('keepanopenmind') or die(mysql_error());  

$configid = isset($_SESSION['id']) ? $_SESSION['id'] : null;
$configpass = isset($_SESSION['password']) ? $_SESSION['password'] : null;  
$logged = mysql_query("SELECT * FROM `members` WHERE `id` = '$configid' AND `password` = '$configpass'"); 
$logged = mysql_fetch_array($logged);  

//some server details, don't edit! 
$host = $_SERVER['HTTP_HOST']; 
$self = $_SERVER['PHP_SELF']; 

//change this to your site name 
$sitename = "KeepAnOpenMobile"; 

if ($logged['background'] == "")
{
 echo"
<link href=\"../../inc/css/mobile.css\" rel=\"stylesheet\" type=\"text/css\" />
 <body background='../../images/mobile/background.png'>";	
}else{
 echo"
 <link href=\"../../inc/css/mobile.css\" rel=\"stylesheet\" type=\"text/css\" />
 <body background='$logged[background]'>";
}
echo "<center>";
?>