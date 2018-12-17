<?php
///////////////////////////////
// Fixed by : Leenster 2012 //
/////////////////////////////

require ('config.php');

function filter($string){
	return mysql_real_escape_string(stripslashes(trim(htmlspecialchars($string))));
	}
	
$action = $_GET['action'];
$title = filter($_GET['title']);

$query_getmovie = "SELECT * FROM movies WHERE title = '$title' LIMIT 1";
$row_getmovie = mysql_fetch_array(mysql_query($query_getmovie));

if ($action == "getTopMovies" && $_GET['language'] == "uk"){
	
	$query_topmovie = "SELECT * FROM movies ORDER BY votes DESC LIMIT 20"; 	 
	$result_topmovie = mysql_query($query_topmovie) or die(mysql_error());
	echo '<?xml version="1.0" encoding="UTF-8" ?><d>';
	
	while($row_topmovie = mysql_fetch_array($result_topmovie)){
		echo '<i><![CDATA['.$row_topmovie['title'].']]></i>';
	}
	
	echo '</d>';
}

elseif ($action == "getMovie" && $_GET['title'] != null){
	$xml = stripslashes($row_getmovie['xml']);
	if ($xml == null) { die(); };
	echo '<?xml version="1.0" encoding="UTF-8" ?>
	<d>
	<votes>'.$row_getmovie['votes'].'</votes>
	<director>'.$row_getmovie['director'].'</director>
	<data>
	';
	echo $xml;
}
elseif ($action == "voteMovie" && $_GET['voteType'] != null && $_GET['title'] != null && $_GET['verify'] != null ){
	$votes = $row_getmovie['votes'];
	if ($_GET['voteType'] == "1") {
	$votes++;
}

elseif ($_GET['voteType'] == "0") {
	$votes--;}
	mysql_query ("UPDATE movies SET votes = '$votes' WHERE title = '$title' LIMIT 1");
}
 
elseif((isset($_POST['action']))&&($_POST['action']=='saveMovie')){
	$newtitle = filter($_POST['title']);
	$director = filter($_POST['director']);
	$xml = mysql_real_escape_string(addslashes($_POST['xml']));
	$email = filter($_POST['email']);
	mysql_query("INSERT INTO movies (`director`, `title`, `xml`, `email`) VALUES ('".$director."', '".$newtitle."', '".$xml."', '".$email."')");
	echo '<?xml version="1.0" encoding="UTF-8" ?>&res=ok';
}

else {
	echo '<?xml version="1.0" encoding="UTF-8" ?>';
}
?>