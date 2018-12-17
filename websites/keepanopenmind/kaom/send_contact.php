<?php
$subject = $_POST['username'];  
$message = $_POST['message']; 
$header="from: $subject <KeepAnOpenMind Contact>";
$to ='tomaldy@hotmail.co.uk';
$send_contact=mail($to,$subject,$message,$header);
if($send_contact){
?>
<img src="../images/contact/success.png">
<?
}else{
?>
<a href="contact_form.php" target="contact"><img src="../images/contact/failure.png"></a>
<?
}
?>