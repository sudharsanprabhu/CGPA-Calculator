<?php
session_start();
include 'phpmailer/mail.php';
 
if(isset($_POST['email']) && isset($_POST['username']))
{
	$characters="ABCDEFGHJKLMNOPQRSTUVWXYZabcdefghijkmnopqurstuvwxyz023456789";
	$otp="";
	
	for($i=0;$i<6;$i++)
	{
		$otp .= $characters[rand(0,58)];
	}
	
	$_SESSION['otp']=$otp;
	$_SESSION['email']=$_POST['email'];
	$_SESSION['user']=$_POST['username'];
	     
         $to=$_POST['email'];
         $subject='OTP Verification';
         $body="<p>Dear ".$_SESSION['user'].",</p> <p>Your otp is ".$otp."<br>Please do not share your otp with anyone.</p>";
         if(send_email($to,$subject,$body))
          {
		   header("location:otp.php");
	      }
         else
          {
           header("location:error.php");
          } 
}
?>