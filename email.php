<?php
session_start();
if(!isset($_SESSION['user']))
{
	header("location:login.php");
}	
?>
<!Doctype HTML>
<html>
<head>
 <title>Email Registration</title>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <link rel="stylesheet" href="resources/css/animate_loading.css">
 <link rel="stylesheet" href="resources/css/email_reg.css">

</head>

<body onload="show_body()">
<div id="blackbody"></div>
<div id="loading"></div>
<div id="hide_body" style="display:none">
<br>


<div id="main">
<h3>Email Registration</h3>
Please register your email with us to get periodic updates<br><br>

<form name="email_reg" action="email_process.php" method="post" onsubmit="return fill_form()">
 <input type="email" name="email" placeholder="Email" required autocomplete="off">
 <input type="number" name="username" style="display:none">
 <input type="submit" value="Submit">
</form> 

</div>
</div>
</div>

<script src="resources/javascript/animate_loading.js"></script>
<script type="text/javascript">
function fill_form()
{
	this.document.email_reg.username.value=localStorage._usr;
	return true;
}
</script>
</body>
</html>