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
 <title>Error</title>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <link rel="stylesheet" href="resources/css/animate_loading.css">
 <link rel="stylesheet" href="resources/css/error.css">

</head>

<body onload="show_body()">
<div id="blackbody"></div>
<div id="loading"></div>
<div id="hide_body" style="display:none">
<br>

<div id="main">

<img src="resources/css/images/error.png">
<p>
Oops! Something went wrong...<br>
Please try again later or contact administrator for further details.
</p>
<p>
We are sorry for the inconvinience. 
</p>
</div>
</div>

<script src="resources/javascript/animate_loading.js"></script>
</body>
</html>