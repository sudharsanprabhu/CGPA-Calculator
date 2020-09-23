<?php
session_start();
?>

<!Doctype HTML>
<html>
<head>
 <title>Login</title>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <link rel="stylesheet" href="resources/css/navbar.css">
 <link rel="stylesheet" href="resources/css/login.css">
 <link rel="stylesheet" href="resources/css/forgot_pwd.css">
 <link rel="stylesheet" href="resources/css/animate_loading.css">

</head>

<body onload="show_body()">
<div id="blackbody"></div>
<div id="loading"></div>
<div id="hide_body" style="display:none">
<br>


<div class="bgbox">


<div class="login" id="login_box">

<h2>Admin Login</h2>

<form name="login" method="post" action="validate_admin.php">

<div class="inputbox">
<input type="text" name="username" placeholder="Username" required autocomplete="off">
</div>

<div class="inputbox">
<input type="password" name="password" placeholder="Password" required autocomplete="off">



   <div class="incorrect">
    <?php 
	  if(isset($_SESSION['message']))
	  {
		  echo $_SESSION['message'];
		  $_SESSION['message']="";
	  }	  
	
	?>
   </div>
</div>

<input type="submit" value="Login">

</form>
</div>


</div>
</div>
<script src="resources/javascript/animate_loading.js"></script>

</body> 
</html>