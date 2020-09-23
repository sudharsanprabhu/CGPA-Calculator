<?php
require('class.phpmailer.php');
require('class.smtp.php');

function send_email($to, $subject, $body)	
{
$mail = new PHPMailer();
$mail->IsSMTP();
$mail->SMTPAuth = TRUE;
$mail->SMTPSecure = "ssl";
$mail->Host="";
$mail->Port=465;  
$mail->IsHTML(true);

$mail->Username = "";
$mail->Password = "";
$mail->FromName = "";	

	
$mail->AddAddress($to);
$mail->Subject=$subject;
$mail->Body=$body;

if($mail->Send()) 
  return true;
else 
  return false;
}
?>