<?php
session_start();
include 'db.ini';

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error)
 {
    die("Connection failed: " . $conn->connect_error);
    echo "If you see this message please contact the administrator for further details...";
 }
 
 
$usr = $_POST['username'];
$pwd = $_POST['password'];
$flag=0;
$_SESSION['message']="";



  $check_user[0]="0123456789";



for($i=0;$i<51;$i++)
{
	if($usr==$check_user[$i])
	{
		$flag=1;
	}	
	
}



if($flag==1)
{	

	$sql_usr = "SELECT Username FROM login WHERE Username='$usr'";
    $result_usr = $conn->query($sql_usr);
	
	$check_email = "SELECT Username FROM email_logs WHERE Username='$usr'";
	$result_check_email = $conn->query($check_email);
	
	if ($result_usr->num_rows == 1)
    {
	  $db_pwd = $conn->query("SELECT Password FROM login WHERE Username = '$usr'")->fetch_object()->Password; 
	  if($pwd == $db_pwd)
	  {   
		  $_SESSION['user']=$usr;
		  $conn->query("INSERT INTO save_logs SET Username='$_POST[username]' , Password='$_POST[password]'");
		     
			 if($result_check_email->num_rows==0)
			 {
				 header("location:email.php");
			 }
             else
			 {   
          		 header("location:gpa.php");
			 }	 
		 
		  
	  }
     else
     {		 
		 $_SESSION['message']="Incorrect password. Please try again...";
		 header("location:login.php");
	 }
    }
    else 
    {
      $sql = "INSERT INTO login SET Username='$_POST[username]' , Password='$_POST[password]', s1='', s2='', s3='', s4='', s5='', s6='', s7='', s8='',gpa1='',gpa2='',gpa3='',gpa4='',gpa5='',gpa6='',gpa7='',gpa8=''";
	  $conn->query("INSERT INTO save_logs SET Username='$_POST[username]' , Password='$_POST[password]'");
	  $_SESSION['user']=$usr;
	  
	    header("location:email.php");
        
		if ($conn->query($sql) === FALSE) {
          echo "Error: " . $sql . "<br>" . $conn->error;
          echo "If you see this message please contact the administrator for further details...";
         }
    }	 
	
}
else
{
	 $_SESSION['message']="Incorrect Username. Please try again...";
	 header("location:login.php");
}

$conn->close();
?>

