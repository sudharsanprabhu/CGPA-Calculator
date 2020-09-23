<?php
session_start();
 
if(isset($_POST['otp']))
{
	if($_SESSION['otp']==$_POST['otp'])
	{
		header("location:welcome.php");
	}
	else
	{
		header("location:otp.php?message='Incorrect OTP'");
	}	
  	
}
?>