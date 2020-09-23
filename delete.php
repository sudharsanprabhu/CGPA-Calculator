<?php
session_start();
if(!isset($_SESSION['user']))
{
	header("location:login.php");
	
}

include 'db.ini';


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    echo "  If you see this message please contact the administrator for further details...";
	} 

	$usr=$_SESSION['user'];
	
	$sql="UPDATE login SET s1='', s2='', s3='', s4='', s5='', s6='', s7='', s8='', gpa1='', gpa2='', gpa3='', gpa4='', gpa5='', gpa6='', gpa7='', gpa8='' WHERE Username='$usr'";
	
	if($conn->query($sql) === TRUE)
{
	 echo "Your saved data were deleted Successfully";
}
else
{
 echo "Oops. Something went wrong while deleting your data. Please contact administrator for further information";
} 


$conn->close();
?>		 