<?php
session_start();
if($_SESSION['user'] != "admin")
{
	header('location:admin.php');
}

include 'db.ini';
include 'phpmailer/mail.php';



$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$result=$conn->query("SELECT * FROM email_logs");

if ($result->num_rows > 0) 
{
    echo "<table><tr><th>Username</th><th>Email</th><th>Status</th></tr>";
	
    while($row = $result->fetch_assoc()) 
	{
	if(send_email($row["Email"], $_POST['subject'], $_POST['body']))
     {
      echo "<tr><td>".$row["Username"]."</td><td>".$row["Email"]."</td><td>"."Success"."</td></tr>";
     } 
    else
     {	 
      echo "<tr><td>".$row["Username"]."</td><td>".$row["Email"]."</td><td>"."Failed"."</td></tr>";
     }    

    }
    echo "</table>";
} 
else {
    echo "0 results";


}	
session_destroy();
?>


<!DOCTYPE HTML>
<html>
<head><title>Email Alert Status</title>
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <meta charset="utf-8">
 
<link rel="stylesheet" href="resources/css/database.css">	   
</head>
</html>