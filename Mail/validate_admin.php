<?php
session_start();
if($_POST['username']==5327 && $_POST['password']==3990)
{
	$_SESSION['user']='admin';
	header('location:email_alert.php');
}
else
{
 $_SESSION['message']='Incorrect Login Credentials';
 header('location:admin.php');
}
?> 