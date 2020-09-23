<?php
session_start();

 
require('phpmailer/class.phpmailer.php');
require('phpmailer/class.smtp.php');

$subject="Welcome";
$body="Dear ".$_SESSION['user'].",<p> Thanks for registering your email with us.</p><p> You will get periodic updates and you can use your email address to get your password if you have forgot.</P>"; 




$mail = new PHPMailer();
$mail->IsSMTP();
$mail->SMTPAuth = TRUE;
$mail->SMTPSecure = "ssl";
$mail->Host     = "";
$mail->Port     = '465';  
$mail->IsHTML(true);

$mail->Username = "";
$mail->Password = "";
$mail->FromName = "";	
	
	
$mail->AddAddress($_SESSION['email']);
$mail->Subject=$subject;
$mail->Body=$body;

$user=$_SESSION['user'];
$email=$_SESSION['email'];

if($mail->Send()) 
  header("location:insert_email.php?usr=$user&email=$email");
else 
  header("location:error.php");

?>