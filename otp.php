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
 <title>Verify Email</title>
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
<h3>Email Verification</h3>
Please verify your email by entering the otp sent to your email<br><br>

<form name="otp_verify" action="otp_process.php" method="post">
 <input type="text" name="otp" placeholder="OTP" required autocomplete="off"><br><br>
 <input type="submit" value="Verify">
</form> 

<div class="incorrect">
    <?php 
	  if(isset($_GET['message']))
	  {
		  echo $_GET['message'];
		  $_GET['message']="";
	  }	  
	
	?>
   </div>

</div>
</div>
</div>

<script src="resources/javascript/animate_loading.js"></script>
</body>
</html>