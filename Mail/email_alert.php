<?php
session_start();
if($_SESSION['user'] != "admin")
{
	header('location:admin.php');
}
?>

<!DOCTYPE HTML>
<html>
<head><title>Email Alert</title>
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <meta charset="utf-8">
 <link rel="stylesheet" href="resources/css/email_alert.css">
</head>

<body>
<div id='content'>
<form method="POST" action="email_alert_status.php">
 <input type="text" name="subject" required Placeholder="Subject"><br><br>
 <textarea rows='10' cols='40' name="body" required placeholder="Body"></textarea> <br><Br>
 <input type="submit" value="Send Email" style="cursor:pointer">
</form>
</div>
</body>
</html> 