<?php
session_start();
include 'db.ini';

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error)
 {
    die("Connection failed: " . $conn->connect_error);
    echo "If you see this message please contact the administrator for further details...";
 }
 
$email=$_GET['email'];

$conn->query("INSERT INTO email_logs SET Username='$_SESSION[user]' , Email='$email'"); 
header("location:gpa.php");
?>