<?php
session_start();
if($_SESSION['user'] != "admin")
{
	header('location:login.php');
}

include 'db.ini';

$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$conn->query("DELETE FROM save_logs");
header('location:database.php');
?>	