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

$data_grade = $_POST['grade'];
$data_username = $_SESSION['user'];
$data_sem = "s".$_POST['sem'];
$data_gpa = $_POST['gpa'];

$gpa_sem = "gpa".$_POST['sem'];
$sql = "UPDATE login SET $data_sem='$data_grade', $gpa_sem='$data_gpa' WHERE Username='$data_username'"; 
if($conn->query($sql) === TRUE)
{
	 echo "Your grades were saved Successfully";
}
else
{
 echo "Oops. Something went wrong while saving your grades. Please contact administrator for further information";
} 


$conn->close();
?>		 