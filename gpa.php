<?php
session_start();
if(!isset($_SESSION['user']))
{   $_SESSION['message']="Please login to continue...";
	header("location:login.php");
	
}
?>
	
<!Doctype HTML>
<html>
<head>
 <title>GPA Calculator</title>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, inital-scale=1.0">
 <link rel="stylesheet" href="resources/css/navbar.css">
 <link rel="stylesheet" href="resources/css/sidenav.css">
 <link rel="stylesheet" href="resources/css/gpa_page.css">
 <link rel="stylesheet" href="resources/css/load.css">
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

<div class="sidenav">
  
  <div id="profile">
    <input type="text" id="user_name" readonly /><br><br><br>
	<input type="text" id="reg_num" readonly /><br><br><br>
	<input type="text" id="semester_num" readonly />
  
  </div>

  <div id="options">
   <button onclick="load()" id="load_button">View</button><br><br>
   <button onclick="clr()" id="delete_button">Delete</button><br><br>
   <button onclick="change_password()" id="change_password_button">Change Password</button><br><br>
   <button onclick="window.open('logout.php','_self')" id="logout_button">Logout</button>
  </div>
  
</div>

<div class="body_box">

 <div id="show_result">
   <span id="close_result_box" onclick="close_result_box()">&times;</span>
   <br>
   <p>Your GPA is</p>

    <p id="show_gpa"></p> 
    <button class="save_button" onclick="save()">Save</button>	
 
 </div>

<div id="message_box">
   <span id="close_message_box" onclick="close_message_box()">&times;</span>
   <br>
    <div id="show_message">	  	
	</div>   
 
 </div>
 
 
 <div id="delete_message_box">
   <span id="close_delete_message_box" onclick="close_delete_message_box()">&times;</span>
   <br>
    <div id="show_delete_message">
	 Are your sure that you want to delete your grades?<br><br>
	  
	    <button id="yes" onclick="perform_delete()"> Yes </button>&nbsp;&nbsp;&nbsp;
		<button id="no" onclick="close_delete_message_box()"> No </button>
	  	
	</div>   
 
 </div>

<div id="pwd_box">
   
   <span id="close_pwd_box" onclick="close_pwd_box()">&times;</span>
   <br>
   
   <div id="pwd">
  	<form onsubmit="return update_password()">
         <div class="inputbox">
         <input type="password" id="new_password" required autocomplete="off">
         <label>Enter new password</label>
         </div>
		 <br>
		 <input type="submit" value="Change Password">
	</form> 
	</div>   
 
   <div id="pwd_query"></div>
 
 </div>




   <div class="page1">
    <div id="click_sem" class="click_sem_box" onclick="open_sems_list()">Choose your semester</div>
	
	<div id="list_semesters" class="list_semesters_box">  
 
    <div onclick="sem_1()">Semester 1</div><br>
    <div onclick="sem_2()">Semester 2</div><br>
    <div onclick="sem_3()">Semester 3</div><br>
	<div onclick="sem_4()">Semester 4</div><br>
	<div onclick="sem_5()">Semester 5</div><br>
	<div onclick="sem_6()">Semester 6</div><br>
	<div onclick="sem_7()">Semester 7</div><br>
	<div onclick="sem_8()">Semester 8</div><br>
    

	</div>  
  </div> 

<div id="sem1">



<select id="e1" autofocus>
<option value="" disabled selected="selected">Grade</option>
<option value="10"> O </option>
<option value="9"> A+ </option>
<option value="8"> A </option>
<option value="7"> B+ </option>
<option value="6"> B </option>
<option value="0"> RA/SA </option>
</select> 
Foundational English
<br>



<select id="m1" autofocus>
<option value="" disabled selected="selected">Grade</option>
<option value="10"> O </option>
<option value="9"> A+ </option>
<option value="8"> A </option>
<option value="7"> B+ </option>
<option value="6"> B </option>
<option value="0"> RA/SA </option>
</select>
Mathematics I
<br>


<select id="p1" autofocus>
<option value="" disabled selected="selected">Grade</option>
<option value="10"> O </option>
<option value="9"> A+ </option>
<option value="8"> A </option>
<option value="7"> B+ </option>
<option value="6"> B </option>
<option value="0"> RA/SA </option>
</select>
Engineering Physics I
<br>


<select id="c1" autofocus>
<option value="" disabled selected="selected">Grade</option>
<option value="10"> O </option>
<option value="9"> A+ </option>
<option value="8"> A </option>
<option value="7"> B+ </option>
<option value="6"> B </option>
<option value="0"> RA/SA </option>
</select>
Engineering Chemistry I
<br>

<select id="electronics" autofocus>
<option value="" disabled selected="selected">Grade</option>
<option value="10"> O </option>
<option value="9"> A+ </option>
<option value="8"> A </option>
<option value="7"> B+ </option>
<option value="6"> B </option>
<option value="0"> RA/SA </option>
</select>
Basics of Electronics Engineering
<br>



<select id="eg" autofocus>
<option value="" disabled selected="selected">Grade</option>
<option value="10"> O </option>
<option value="9"> A+ </option>
<option value="8"> A </option>
<option value="7"> B+ </option>
<option value="6"> B </option>
<option value="0"> RA/SA </option>
</select>
Engineering Graphics
<br>


<select id="science_lab" autofocus>
<option value="" disabled selected="selected">Grade</option>
<option value="10"> O </option>
<option value="9"> A+ </option>
<option value="8"> A </option>
<option value="7"> B+ </option>
<option value="6"> B </option>
<option value="0"> RA/SA </option>
</select>
Basic Sciences Laboratory
</div>


<div id="sem2">
<select id="e2" autofocus>
<option value="" disabled selected="selected">Grade</option>
<option value="10"> O </option>
<option value="9"> A+ </option>
<option value="8"> A </option>
<option value="7"> B+ </option>
<option value="6"> B </option>
<option value="0"> RA/SA </option>
</select>
 Technical English
<br>

<select id="m2" autofocus>
<option value="" disabled selected="selected">Grade</option>
<option value="10"> O </option>
<option value="9"> A+ </option>
<option value="8"> A </option>
<option value="7"> B+ </option>
<option value="6"> B </option>
<option value="0"> RA/SA </option>
</select>
 Mathematics II
<br>

<select id="p2" autofocus>
<option value="" disabled selected="selected">Grade</option>
<option value="10"> O </option>
<option value="9"> A+ </option>
<option value="8"> A </option>
<option value="7"> B+ </option>
<option value="6"> B </option>
<option value="0"> RA/SA </option>
</select>
 Physics for Geoinformatics Engineering
 <br>
 
 <select id="ct" autofocus>
<option value="" disabled selected="selected">Grade</option>
<option value="10"> O </option>
<option value="9"> A+ </option>
<option value="8"> A </option>
<option value="7"> B+ </option>
<option value="6"> B </option>
<option value="0"> RA/SA </option>
</select>
 Computing Techniques
 <br>
 
 <select id="evs" autofocus>
<option value="" disabled selected="selected">Grade</option>
<option value="10"> O </option>
<option value="9"> A+ </option>
<option value="8"> A </option>
<option value="7"> B+ </option>
<option value="6"> B </option>
<option value="0"> RA/SA </option>
</select>
 Environmental Science and Engineering
 <br>
 
 <select id="cpl" autofocus>
<option value="" disabled selected="selected">Grade</option>
<option value="10"> O </option>
<option value="9"> A+ </option>
<option value="8"> A </option>
<option value="7"> B+ </option>
<option value="6"> B </option>
<option value="0"> RA/SA </option>
</select>
 Computer Pracitces Laboratory
<br>

<select id="epl" autofocus>
<option value="" disabled selected="selected">Grade</option>
<option value="10"> O </option>
<option value="9"> A+ </option>
<option value="8"> A </option>
<option value="7"> B+ </option>
<option value="6"> B </option>
<option value="0"> RA/SA </option>
</select> 
 Engineering Pracitces Laboratory
</div>

<div id="sem3">

<select id="t_and_s" autofocus>
<option value="" disabled selected="selected">Grade</option>
<option value="10"> O </option>
<option value="9"> A+ </option>
<option value="8"> A </option>
<option value="7"> B+ </option>
<option value="6"> B </option>
<option value="0"> RA/SA </option>
</select> 
 Transforms And Statistics
<br> 
 
<select id="oops" autofocus>
<option value="" disabled selected="selected">Grade</option>
<option value="10"> O </option>
<option value="9"> A+ </option>
<option value="8"> A </option>
<option value="7"> B+ </option>
<option value="6"> B </option>
<option value="0"> RA/SA </option>
</select> 
 Fundamentals of Object Oriented Programming
<br>

<select id="p_and_g" autofocus>
<option value="" disabled selected="selected">Grade</option>
<option value="10"> O </option>
<option value="9"> A+ </option>
<option value="8"> A </option>
<option value="7"> B+ </option>
<option value="6"> B </option>
<option value="0"> RA/SA </option>
</select> 
 Plane and Geodetic Surveying for Geoinformatics
<br>

<select id="rs" autofocus>
<option value="" disabled selected="selected">Grade</option>
<option value="10"> O </option>
<option value="9"> A+ </option>
<option value="8"> A </option>
<option value="7"> B+ </option>
<option value="6"> B </option>
<option value="0"> RA/SA </option>
</select> 
 Fundamentals of Remote Sensing
 <br>
 
 <select id="c_t" autofocus>
<option value="" disabled selected="selected">Grade</option>
<option value="10"> O </option>
<option value="9"> A+ </option>
<option value="8"> A </option>
<option value="7"> B+ </option>
<option value="6"> B </option>
<option value="0"> RA/SA </option>
</select>
 Communication Theory
 <br>
 
 <select id="c_and_g" autofocus>
<option value="" disabled selected="selected">Grade</option>
<option value="10"> O </option>
<option value="9"> A+ </option>
<option value="8"> A </option>
<option value="7"> B+ </option>
<option value="6"> B </option>
<option value="0"> RA/SA </option>
</select>
 Cartography and GIS Concepts
 <br>
 
 <select id="pgs_lab" autofocus>
<option value="" disabled selected="selected">Grade</option>
<option value="10"> O </option>
<option value="9"> A+ </option>
<option value="8"> A </option>
<option value="7"> B+ </option>
<option value="6"> B </option>
<option value="0"> RA/SA </option>
</select>
 Plane and Geodetic Surveying Laboratory for Geoinformatics
 <br>
 
 <select id="oops_lab" autofocus>
<option value="" disabled selected="selected">Grade</option>
<option value="10"> O </option>
<option value="9"> A+ </option>
<option value="8"> A </option>
<option value="7"> B+ </option>
<option value="6"> B </option>
<option value="0"> RA/SA </option>
</select>
Object Oriented Programming Laboratory

</div>

<div id="sem4">

<select id="n_and_g" autofocus>
<option value="" disabled selected="selected">Grade</option>
<option value="10"> O </option>
<option value="9"> A+ </option>
<option value="8"> A </option>
<option value="7"> B+ </option>
<option value="6"> B </option>
<option value="0"> RA/SA </option>
</select>
 Numerical Methods and Graph Theory
 <br>
 
 <select id="geology" autofocus>
<option value="" disabled selected="selected">Grade</option>
<option value="10"> O </option>
<option value="9"> A+ </option>
<option value="8"> A </option>
<option value="7"> B+ </option>
<option value="6"> B </option>
<option value="0"> RA/SA </option>
</select>
Geology for Geoinformatics
<br>

<select id="geodatabase" autofocus>
<option value="" disabled selected="selected">Grade</option>
<option value="10"> O </option>
<option value="9"> A+ </option>
<option value="8"> A </option>
<option value="7"> B+ </option>
<option value="6"> B </option>
<option value="0"> RA/SA </option>
</select>
 Geo Database System
<br>

<select id="photogrammetry" autofocus>
<option value="" disabled selected="selected">Grade</option>
<option value="10"> O </option>
<option value="9"> A+ </option>
<option value="8"> A </option>
<option value="7"> B+ </option>
<option value="6"> B </option>
<option value="0"> RA/SA </option>
</select>
 Elements of Photogrammetry
<br>

<select id="ms" autofocus>
<option value="" disabled selected="selected">Grade</option>
<option value="10"> O </option>
<option value="9"> A+ </option>
<option value="8"> A </option>
<option value="7"> B+ </option>
<option value="6"> B </option>
<option value="0"> RA/SA </option>
</select> 
 Modern Surveying
 <br>
 
 <select id="ug" autofocus>
<option value="" disabled selected="selected">Grade</option>
<option value="10"> O </option>
<option value="9"> A+ </option>
<option value="8"> A </option>
<option value="7"> B+ </option>
<option value="6"> B </option>
<option value="0"> RA/SA </option>
</select>
 Urban Geoinformatics
<br>

<select id="gps_lab" autofocus>
<option value="" disabled selected="selected">Grade</option>
<option value="10"> O </option>
<option value="9"> A+ </option>
<option value="8"> A </option>
<option value="7"> B+ </option>
<option value="6"> B </option>
<option value="0"> RA/SA </option>
</select> 
 Total Station and GPS Surveying Laboratory
<br>

<select id="gis_lab" autofocus>
<option value="" disabled selected="selected">Grade</option>
<option value="10"> O </option>
<option value="9"> A+ </option>
<option value="8"> A </option>
<option value="7"> B+ </option>
<option value="6"> B </option>
<option value="0"> RA/SA </option>
</select> 
 Cartography and GIS Laboratory
</div> 
 
<div id="sem5">

<select id="geodesy" autofocus>
<option value="" disabled selected="selected">Grade</option>
<option value="10"> O </option>
<option value="9"> A+ </option>
<option value="8"> A </option>
<option value="7"> B+ </option>
<option value="6"> B </option>
<option value="0"> RA/SA </option>
</select> 
 Geodesy
 <br>
 
 <select id="image_processing" autofocus>
<option value="" disabled selected="selected">Grade</option>
<option value="10"> O </option>
<option value="9"> A+ </option>
<option value="8"> A </option>
<option value="7"> B+ </option>
<option value="6"> B </option>
<option value="0"> RA/SA </option>
</select>
 Digital Image Processing for Geoinformatics Engineers
 <br>
 
 <select id="ars" autofocus>
<option value="" disabled selected="selected">Grade</option>
<option value="10"> O </option>
<option value="9"> A+ </option>
<option value="8"> A </option>
<option value="7"> B+ </option>
<option value="6"> B </option>
<option value="0"> RA/SA </option>
</select>
 Advanced Remote Sensing
<br>

<select id="sm" autofocus>
<option value="" disabled selected="selected">Grade</option>
<option value="10"> O </option>
<option value="9"> A+ </option>
<option value="8"> A </option>
<option value="7"> B+ </option>
<option value="6"> B </option>
<option value="0"> RA/SA </option>
</select> 
 Satellite Meteorology
<br>

<select id="pe1" autofocus>
<option value="" disabled selected="selected">Grade</option>
<option value="10"> O </option>
<option value="9"> A+ </option>
<option value="8"> A </option>
<option value="7"> B+ </option>
<option value="6"> B </option>
<option value="0"> RA/SA </option>
</select> 
 Professional Elective I
 <br>
 
 <select id="pe2" autofocus>
<option value="" disabled selected="selected">Grade</option>
<option value="10"> O </option>
<option value="9"> A+ </option>
<option value="8"> A </option>
<option value="7"> B+ </option>
<option value="6"> B </option>
<option value="0"> RA/SA </option>
</select>
 Professional Elective II
 <br>
 
 <select id="database_lab" autofocus>
<option value="" disabled selected="selected">Grade</option>
<option value="10"> O </option>
<option value="9"> A+ </option>
<option value="8"> A </option>
<option value="7"> B+ </option>
<option value="6"> B </option>
<option value="0"> RA/SA </option>
</select>
 Geo Database Laboratory
 <br>
 
 <select id="photo_lab" autofocus>
<option value="" disabled selected="selected">Grade</option>
<option value="10"> O </option>
<option value="9"> A+ </option>
<option value="8"> A </option>
<option value="7"> B+ </option>
<option value="6"> B </option>
<option value="0"> RA/SA </option>
</select>
 Photogrammetry Laboratory
</div>

<div id="sem6">

<select id="hydrology" autofocus>
<option value="" disabled selected="selected">Grade</option>
<option value="10"> O </option>
<option value="9"> A+ </option>
<option value="8"> A </option>
<option value="7"> B+ </option>
<option value="6"> B </option>
<option value="0"> RA/SA </option>
</select> 
 Hydrology and Water Resources Engineering for Geoinformatics
 <br>
 
<select id="sap" autofocus>
<option value="" disabled selected="selected">Grade</option>
<option value="10"> O </option>
<option value="9"> A+ </option>
<option value="8"> A </option>
<option value="7"> B+ </option>
<option value="6"> B </option>
<option value="0"> RA/SA </option>
</select> 
 Spatial Analysis and Applications
<br>

<select id="osgis" autofocus>
<option value="" disabled selected="selected">Grade</option>
<option value="10"> O </option>
<option value="9"> A+ </option>
<option value="8"> A </option>
<option value="7"> B+ </option>
<option value="6"> B </option>
<option value="0"> RA/SA </option>
</select> 
 Open Source GIS
 <br>
 
 <select id="sct" autofocus>
<option value="" disabled selected="selected">Grade</option>
<option value="10"> O </option>
<option value="9"> A+ </option>
<option value="8"> A </option>
<option value="7"> B+ </option>
<option value="6"> B </option>
<option value="0"> RA/SA </option>
</select>
 Soft Computing Techniques
 <br>
 
 <select id="pe3" autofocus>
<option value="" disabled selected="selected">Grade</option>
<option value="10"> O </option>
<option value="9"> A+ </option>
<option value="8"> A </option>
<option value="7"> B+ </option>
<option value="6"> B </option>
<option value="0"> RA/SA </option>
</select>
 Professional Elective III
 <br>
 
 <select id="oe1" autofocus>
<option value="" disabled selected="selected">Grade</option>
<option value="10"> O </option>
<option value="9"> A+ </option>
<option value="8"> A </option>
<option value="7"> B+ </option>
<option value="6"> B </option>
<option value="0"> RA/SA </option>
</select>
 Open Elective I*
 <br>
 
 <select id="sap_lab" autofocus>
<option value="" disabled selected="selected">Grade</option>
<option value="10"> O </option>
<option value="9"> A+ </option>
<option value="8"> A </option>
<option value="7"> B+ </option>
<option value="6"> B </option>
<option value="0"> RA/SA </option>
</select>
 Spatial Analysis and Applications Laboratory
 <br>
 
 <select id="image_processing_lab" autofocus>
<option value="" disabled selected="selected">Grade</option>
<option value="10"> O </option>
<option value="9"> A+ </option>
<option value="8"> A </option>
<option value="7"> B+ </option>
<option value="6"> B </option>
<option value="0"> RA/SA </option>
</select>
 Digital Image Processing Laboratory
 <br>
 
 <select id="survey" autofocus>
<option value="" disabled selected="selected">Grade</option>
<option value="10"> O </option>
<option value="9"> A+ </option>
<option value="8"> A </option>
<option value="7"> B+ </option>
<option value="6"> B </option>
<option value="0"> RA/SA </option>
</select>
 Survey Camp (2 Weeks - During V Semester)
 </div>
 
<div id="sem7">
 <select id="support_system" autofocus>
<option value="" disabled selected="selected">Grade</option>
<option value="10"> O </option>
<option value="9"> A+ </option>
<option value="8"> A </option>
<option value="7"> B+ </option>
<option value="6"> B </option>
<option value="0"> RA/SA </option>
</select>
 Decision Support System for Resource Management
 <br>
 
 <select id="agri" autofocus>
<option value="" disabled selected="selected">Grade</option>
<option value="10"> O </option>
<option value="9"> A+ </option>
<option value="8"> A </option>
<option value="7"> B+ </option>
<option value="6"> B </option>
<option value="0"> RA/SA </option>
</select>
 Agriculture and Forestry for Geoinformatics
 <br>
 
 <select id="emp" autofocus>
<option value="" disabled selected="selected">Grade</option>
<option value="10"> O </option>
<option value="9"> A+ </option>
<option value="8"> A </option>
<option value="7"> B+ </option>
<option value="6"> B </option>
<option value="0"> RA/SA </option>
</select>
 Employability Skills
 <br>
 
 <select id="ocean" autofocus>
<option value="" disabled selected="selected">Grade</option>
<option value="10"> O </option>
<option value="9"> A+ </option>
<option value="8"> A </option>
<option value="7"> B+ </option>
<option value="6"> B </option>
<option value="0"> RA/SA </option>
</select>
 Oceanography and Coastal Processes
 <br>
 
 <select id="pe4" autofocus>
<option value="" disabled selected="selected">Grade</option>
<option value="10"> O </option>
<option value="9"> A+ </option>
<option value="8"> A </option>
<option value="7"> B+ </option>
<option value="6"> B </option>
<option value="0"> RA/SA </option>
</select>
 Professional Elective IV
 <br>
 
 <select id="oe2" autofocus>
<option value="" disabled selected="selected">Grade</option>
<option value="10"> O </option>
<option value="9"> A+ </option>
<option value="8"> A </option>
<option value="7"> B+ </option>
<option value="6"> B </option>
<option value="0"> RA/SA </option>
</select>
 Open Elective II*
 <br>
 
 <select id="seminar" autofocus>
<option value="" disabled selected="selected">Grade</option>
<option value="10"> O </option>
<option value="9"> A+ </option>
<option value="8"> A </option>
<option value="7"> B+ </option>
<option value="6"> B </option>
<option value="0"> RA/SA </option>
</select>
 Technical Seminar
 <br>
 
 <select id="it" autofocus>
<option value="" disabled selected="selected">Grade</option>
<option value="10"> O </option>
<option value="9"> A+ </option>
<option value="8"> A </option>
<option value="7"> B+ </option>
<option value="6"> B </option>
<option value="0"> RA/SA </option>
</select>
 Industrial Training (4 Weeks During VI Semester - Summer)
 </div>
 
 <div id="sem8">
  <select id="pe5" autofocus>
<option value="" disabled selected="selected">Grade</option>
<option value="10"> O </option>
<option value="9"> A+ </option>
<option value="8"> A </option>
<option value="7"> B+ </option>
<option value="6"> B </option>
<option value="0"> RA/SA </option>
</select>
 Professional Elective V
<br>

<select id="pe6" autofocus>
<option value="" disabled selected="selected">Grade</option>
<option value="10"> O </option>
<option value="9"> A+ </option>
<option value="8"> A </option>
<option value="7"> B+ </option>
<option value="6"> B </option>
<option value="0"> RA/SA </option>
</select>
 Professional Elective VI
 <br>
 
 <select id="oe3" autofocus>
<option value="" disabled selected="selected">Grade</option>
<option value="10"> O </option>
<option value="9"> A+ </option>
<option value="8"> A </option>
<option value="7"> B+ </option>
<option value="6"> B </option>
<option value="0"> RA/SA </option>
</select>
 Open Elective III*
 <br>
 
 <select id="pw" autofocus>
<option value="" disabled selected="selected">Grade</option>
<option value="10"> O </option>
<option value="9"> A+ </option>
<option value="8"> A </option>
<option value="7"> B+ </option>
<option value="6"> B </option>
<option value="0"> RA/SA </option>
</select>
 Project Work<sup>#</sup>

 </div> 

<div id="button_box">
<button onclick="calculate_gpa()" class="gpa_button">Calculate My GPA</button><br><br>
<button onclick="cancel_calc()" class="cancel_button">Cancel</button>
</div>




 <div id="lsem1">Semester 1:
  <span id="close_load_box_button" onclick="close_load_box()">&times;</span>
<table>
 <tr><th>Course</th><th>Grade</th></tr>
 <tr>
  <td>Foundational English</td><td id="a[0]" align="center"></td>
 </tr> 
 
<tr>
 <td>Mathematics I </td><td id="a[1]" align="center"></td>
</tr> 

<tr>
 <td>Engineering Physics </td><td id="a[2]" align="center"></td>
</tr> 

<tr>
 <td>Engineering Chemistry</td><td id="a[3]" align="center"></td>
</tr> 

 <tr>
  <td>Basic of Electronics Engineering</td><td id="a[4]" align="center"></td>
 </tr> 

 <tr>
 <td>Engineering Graphics </td><td id="a[5]" align="center"></td>
 </tr> 

 <tr>
 <td>Basic Sciences Laboratory</td><td id="a[6]" align="center"></td>
 </tr> 
</table><br>GPA: <span id="load_gpa[0]"></span>
</div>


<div id="lsem2">Semester 2:
<span id="close_load_box_button" onclick="close_load_box()">&times;</span>

<table>
<tr><th>Course</th><th>Grade</th></tr>
<tr>
  <td>Technical English</td><td id="b[0]" align="center"></td>
 </tr> 

 <tr>
 <td>Mathematics II</td><td id="b[1]" align="center"></td>
 </tr> 

 <tr>
 <td>Physics for Geoinformatics Engineering</td><td id="b[2]" align="center"></td>
 </tr> 
 
 <tr>
 <td>Computing Techniques</td><td id="b[3]" align="center"></td>
 </tr> 
 
<tr>
 <td>Environmental Science and Engineering</td><td id="b[4]" align="center"></td>
 </tr> 
 
 <tr> 
 <td>Computer Pracitces Laboratory</td><td id="b[5]" align="center"></td>
 </tr> 
 
 <tr>
 <td>Engineering Pracitces Laboratory</td><td id="b[6]" align="center"></td>
 </tr> 
</table><br>GPA: <span id="load_gpa[1]"></span> 
</div>

<div id="lsem3">Semester 3:
<span id="close_load_box_button" onclick="close_load_box()">&times;</span>

<table><tr><th>Course</th><th>Grade</th></tr>
<tr>
 <td>Transforms And Statistics</td><td id="c[0]" align="center"></td>
 </tr> 
 
 <tr>
 <td>Fundamentals of Object Oriented Programming</td><td id="c[1]" align="center"></td>
 </tr> 
 
 <tr>
 <td>Plane and Geodetic Surveying for Geoinformatics</td><td id="c[2]" align="center"></td>
 </tr> 
 
 <tr>
 <td>Fundamentals of Remote Sensing</td><td id="c[3]" align="center"></td>
 </tr> 
 
 <tr>
 <td>Communication Theory</td><td id="c[4]" align="center"></td>
 </tr> 
 
 <tr>
 <td>Cartography and GIS Concepts</td><td id="c[5]" align="center"></td>
 </tr>  
 
 <tr>
 <td>Plane and Geodetic Surveying Laboratory for Geoinformatics</td><td id="c[6]" align="center"></td>
 </tr> 
 
<tr>
<td>Object Oriented Programming Laboratory</td><td id="c[7]" align="center"></td>
 </tr> 
</table><br>GPA: <span id="load_gpa[2]"></span>
</div>

<div id="lsem4">Semester 4:
<span id="close_load_box_button" onclick="close_load_box()">&times;</span>

  <table><tr><th>Course</th><th>Grade</th></tr>
<tr>
<td>Numerical Methods and Graph Theory</td><td id="d[0]" align="center"></td>
 </tr>  

 <tr>
<td>Geology for Geoinformatics</td><td id="d[1]" align="center"></td>
 </tr> 

 <tr>
 <td>Geo Database System</td><td id="d[2]" align="center"></td>
 </tr> 

<tr>
 <td>Elements of Photogrammetry</td><td id="d[3]" align="center"></td>
 </tr> 

 <tr>
 <td>Modern Surveying</td><td id="d[4]" align="center"></td>
 </tr> 
 
 <tr>
 <td>Urban Geoinformatics</td><td id="d[5]" align="center"></td>
 </tr> 

  <tr>
 <td>Total Station and GPS Surveying Laboratory</td><td id="d[6]" align="center"></td>
 </tr> 

 <tr>
 <td>Cartography and GIS Laboratory</td><td id="d[7]" align="center"></td>
 </tr> 
 </table><br>GPA: <span id="load_gpa[3]"></span>
</div> 
 
<div id="lsem5">Semester 5:
<span id="close_load_box_button" onclick="close_load_box()">&times;</span>

<table><tr><th>Course</th><th>Grade</th></tr>
<tr>
 <td>Geodesy</td><td id="e[0]" align="center"></td>
 </tr> 
 
 <tr>
 <td>Digital Image Processing for Geoinformatics Engineers</td><td id="e[1]" align="center"></td>
 </tr> 
 
 <tr>
 <td>Advanced Remote Sensing</td><td id="e[2]" align="center"></td>
 </tr> 

 <tr>
 <td>Satellite Meteorology</td><td id="e[3]" align="center"></td>
 </tr> 

<tr>
 <td>Professional Elective I</td><td id="e[4]" align="center"></td>
 </tr> 
 
<tr>
 <td>Professional Elective II</td><td id="e[5]" align="center"></td>
 </tr> 
 
 
<tr>
 <td>Geo Database Laboratory</td><td id="e[6]" align="center"></td>
 </tr>  
 
<tr>
 <td>Potogrammetry Laboratory</td><td id="e[7]" align="center"></td>
 </tr> 
 </table><br>GPA: <span id="load_gpa[4]"></span>
</div>

<div id="lsem6">Semester 6:
<span id="close_load_box_button" onclick="close_load_box()">&times;</span>

<table><tr><th>Course</th><th>Grade</th></tr>
<tr>
<td>Hydrology and Water Resources Engineering for Geoinformatics</td><td id="f[0]" align="center"></td>
 </tr> 
 
<tr>
 <td>Spatial Analysis and Applications</td><td id="f[1]" align="center"></td>
 </tr> 

<tr>
 <td>Open Source GIS</td><td id="f[2]" align="center"></td>
 </tr> 
 
 <tr>
 <td>Soft Computing Techniques</td><td id="f[3]" align="center"></td>
 </tr> 
 
<tr>
 <td>Professional Elective III</td><td id="f[4]" align="center"></td>
 </tr> 
 
 <tr>
 <td>Open Elective I*</td><td id="f[5]" align="center"></td>
 </tr> 
 
 <tr>
 <td>Spatial Analysis and Applications Laboratory</td><td id="f[6]" align="center"></td>
 </tr> 
 
 <tr>
  <td>Digital Image Processing Laboratory</td><td id="f[7]" align="center"></td>
 </tr> 
 
 <tr>
 <td>Survey Camp (2 Weeks - During V Semester)</td><td id="f[8]" align="center"></td>
 </tr> 
 </table><br>GPA: <span id="load_gpa[5]"></span>
 </div>
 
<div id="lsem7">Semester 7:
<span id="close_load_box_button" onclick="close_load_box()">&times;</span>

<table><tr><th>Course</th><th>Grade</th></tr>
<tr>
<td>Decision Support System for Resource Management</td><td id="g[0]" align="center"></td>
 </tr> 
 
 <tr>
 <td>Agriculture and Forestry for Geoinformatics</td><td id="g[1]" align="center"></td>
 </tr> 
 
 <tr>
 <td>Employability Skills</td><td id="g[2]" align="center"></td>
 </tr> 
  
 <tr>
 <td>Oceanography and Coastal Processes</td><td id="g[3]" align="center"></td>
 </tr> 
 
 <tr>
 <td>Professional Elective IV</td><td id="g[4]" align="center"></td>
 </tr> 
 
 <tr>
 <td>Open Elective II*</td><td id="g[5]" align="center"></td>
 </tr> 
 
 <tr>
 <td>Technical Seminar</td><td id="g[6]" align="center"></td>
 </tr> 
 
 <tr>
 <td>Industrial Training (4 Weeks During VI Semester - Summer)</td><td id="g[7]" align="center"></td>
 </tr> 
 </table><br>GPA: <span id="load_gpa[6]"></span>
 </div>
 
 <div id="lsem8">Semester 8:
 <span id="close_load_box_button" onclick="close_load_box()">&times;</span>

 <table><tr><th>Course</th><th>Grade</th></tr>
 <tr>
 <td>Professional Elective V</td><td id="h[0]" align="center"></td>
 </tr> 

 <tr>
 <td>Professional Elective VI</td><td id="h[1]" align="center"></td>
 </tr> 
 
<tr>
 <td>Open Elective III*</td><td id="h[2]" align="center"></td>
 </tr> 
 
 <tr>
 <td>Project Work<sup>#</sup></td><td id="h[3]" align="center"></td>
 </tr> 
 </table><br>GPA: <span id="load_gpa[7]"></span>
</div> 









</div>

</div>
</body>



<script src="resources/javascript/open_sems_list.js"></script>
<script src="resources/javascript/gpa.js"></script>
<script src="resources/javascript/jquery2.2.4.js"></script>
<script src="resources/javascript/save.js"></script>
<script src="resources/javascript/delete.js"></script>
<script src="resources/javascript/change_password.js"></script> 
<script src="resources/javascript/load.js"></script>
<script src="resources/javascript/profile.js"></script>
<script src="resources/javascript/animate_loading.js"></script>
  
  </html>