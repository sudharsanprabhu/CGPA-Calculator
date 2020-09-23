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
	$sql="SELECT * FROM login WHERE Username='$usr'";
	
	$grade[0] = $conn->query($sql)->fetch_object()->s1;
	$grade[1] = $conn->query($sql)->fetch_object()->s2;
    $grade[2] = $conn->query($sql)->fetch_object()->s3;
	$grade[3] = $conn->query($sql)->fetch_object()->s4;
	$grade[4] = $conn->query($sql)->fetch_object()->s5;
	$grade[5] = $conn->query($sql)->fetch_object()->s6;
	$grade[6] = $conn->query($sql)->fetch_object()->s7;
	$grade[7] = $conn->query($sql)->fetch_object()->s8;
	
    $grade[8] = $conn->query($sql)->fetch_object()->gpa1;
	$grade[9] = $conn->query($sql)->fetch_object()->gpa2;
	$grade[10] = $conn->query($sql)->fetch_object()->gpa3;
	$grade[11] = $conn->query($sql)->fetch_object()->gpa4;
	$grade[12] = $conn->query($sql)->fetch_object()->gpa5;
	$grade[13] = $conn->query($sql)->fetch_object()->gpa6;
	$grade[14] = $conn->query($sql)->fetch_object()->gpa7;
	$grade[15] = $conn->query($sql)->fetch_object()->gpa8;

    echo json_encode($grade);
	
	$conn->close();
?>	