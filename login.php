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


<ul>
  <li><a href="login.php" class="active">Home</a></li>
  <li><a href="https://acoe.annauniv.edu/sems/login/student">Sems</a></li>
  <li><a href="https://www.aukdc.edu.in/onlinefee/gotoAgree.htm">Semester Fees Payment</a></li>
  <li><a href="http://acoe.annauniv.edu">ACOE</a></li>
</ul>




<div class="bgbox">

   <div class="forgot_pwd" id="forgot_pwd_box">

<h2>Forgot Password ?</h2>

<form name="forgot_password" method="post" action="forgot_pwd.php">

<div class="inputbox">
<input type="text" name="username" autocomplete="off" required>
<label>Username</label>
</div>


<div class="inputbox">
<input type="email" name="email" autocomplete="off" required>
<label>Registered Email ID</label>
</div>

<input type="submit"  value="Submit">
<input type="button" value="Cancel" onclick="document.getElementById('forgot_pwd_box').style.width='0'">
</form>

</div>


<div class="login" id="login_box">

<h2>Login</h2>

<form name="login" method="post" action="validate.php" onsubmit="return validate_local()">

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

<a href="javascript:void(0)" onclick="document.getElementById('forgot_pwd_box').style.width='100%'">Forgot Password?</a>

</form>
</div>


</div>
</div>
<script src="resources/javascript/validate.js"></script>
<script src="resources/javascript/animate_loading.js"></script>

</body> 
</html> 