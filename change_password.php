<?php
include 'db.ini';

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    echo "  If you see this message please contact the administrator for further details...";
	} 
	
$usr=$_POST['username'];
$new_pwd=mysqli_escape_string($conn,$_POST['password']);

$old_pwd=$conn->query("SELECT Password FROM login WHERE Username='$usr'")->fetch_object()->Password;
if($new_pwd==$old_pwd)
{
	echo "<span style='color:red'> The new password must be different from the old password!</span>";
}
else
{	
 $sql="UPDATE login SET Password='$new_pwd' WHERE Username='$usr'";
   if($conn->query($sql) === TRUE)
    {
      echo "Your password has been changed successfully.";
    }

    else
     {
       echo "<span style='color:red'>Oops! Something went wrong while changing your password. Please contact administrator for further information.</span>";
     } 

}

$conn->close();
?> 