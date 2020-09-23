<?php
session_start();
if(!isset($_SESSION['user']))
{
	header("location:login.php");
	
}

include 'db.ini';

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error)
 {
    die("Connection failed: " . $conn->connect_error);
    echo "If you see this message please contact the administrator for further details...";
 }
 
 

$usr=$_POST['username'];
$email=$_POST['email'];

$check_email = "SELECT Username FROM email_logs WHERE Username='$usr'";
$result_check_email = $conn->query($check_email);

if($result_check_email->num_rows==0)
{
$from='';
$to='';
$subject='Forgot Password';
$body=$usr." submitted a request to change his/her password.\n Email: ".$email;

if(mail($to,$subject,$body,$from))
{
 $_SESSION['message']="You have not registered your email with us. Please contact us to register.";
}
else
{
 $_SESSION['message']="Oops! Something went wrong.";
}

}


else
{
	$db_email=$conn->query("SELECT Email FROM email_logs WHERE Username='$usr'")->fetch_object()->Email; 
	 if($email==$db_email)
	   { 
          	
		 $temp_pwd=$conn->query("SELECT Password FROM login WHERE Username='$usr'")->fetch_object()->Password;
		 
		 	 
		 $from='';
         $to=$email;
         $subject='Password reset request';
         $body="Dear ".$usr.",\n Your password is ".$temp_pwd;
         if(mail($to,$subject,$body,$from))
          {
           $_SESSION['message']="Your password has been sent to your email.";
	      }
         else
          {
           $_SESSION['message']="Oops! Something went wrong.";
          } 
		 }     			
	 	
	 else
	 {
		$_SESSION['message']="Incorrect Email. Please try again.";
	 }		
}
$conn->close();
?>	