<?php

$name = (isset($_POST['name'])) ? $_POST['name'] : null;
$email = (isset($_POST['email'])) ? $_POST['email'] : null;
$subject = (isset($_POST['subject'])) ? $_POST['subject'] : null;
$message = (isset($_POST['message'])) ? $_POST['message'] : null;
$gCapctchaResponse = (isset($_POST['g-recaptcha-response'])) ? $_POST['g-recaptcha-response'] : null;

function response($msg) {
	if(strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) != 'xmlhttprequest') {
		session_start();
		$_SESSION['flash'] = $msg;
		header("Location: ../index.php");
	}else{
		echo $msg;
	}
}

if ($name == null || $email == null || $subject == null || $message == null) {
	response(0001);
}elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)){
	response(0002);
}else{
	$postdata = http_build_query(
		array(
			'secret' => '6LcUg4EUAAAAAKphtoEbvqijok5zWOJED8RFAx1t',
			'response' => $gCapctchaResponse
		)
	);

	$opts = array('http' =>
		array(
			'method'  => 'POST',
			'header'  => 'Content-type: application/x-www-form-urlencoded',
			'content' => $postdata
		)
	);

	$context  = stream_context_create($opts);

	$result = file_get_contents('https://www.google.com/recaptcha/api/siteverify', false, $context);

	$check = json_decode($result);

	if($check->success) {
		$headers = "From: ".$name." (".$email.")";
		mail('me@tomaldy.com',$subject,$message,$headers);
		response(0003);
	} else {
		response(0004);
	}
	
}

