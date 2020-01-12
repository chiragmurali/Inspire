<html>
<head>
<title>CMS</title>
<style>
.button{
	font:bold;
	text-decoration:none;
	color:#333333;
	background-color:#EEEEEE;
	padding:20px 20px;
	border:solid 1px #333333;
}
</style>
<link rel="stylesheet" type="text/css" href="css1/style.css">
</head>
<body>
<div class="topnav">
<ul>
<a href="">Class Management System</a>
<div class="topnav-right">
<a href="admin.html">Admin Home</a>
<a href="contactus.php">Contact Us</a>
<a href="admin.html">Logout</a>
</div>
</ul>
</div>
<img src="img/adminb.jpg" alt="unavailable" class="img1">
<?php
$user="chirag";
$password="chirag123";
$db="chirag";
$name=$_POST['nme'];
$pass1=$_POST['pwd'];
$conn=new mysqli('localhost',$user,$password,$db);
if($conn==true)
	$check=mysqli_query($conn,"SELECT * FROM `admininp` WHERE Name='$name' and Password='$pass1'");
    $checkrows=mysqli_num_rows($check);
	
   if($checkrows>0) {
	   ?>
	   <center><b><h3> <?php echo "You are Authorized";?></h3></b></center>
</br></br>   
	   <center><a href="teacher.html" class="button1">Teacher Details</a>
	   <a href="home.html" class="button1">Home</a>
		<a href="student.html" class="button1">Student Details</a></center>		   	
   <?php
   }
   else{
	   ?><center><b><h3><?php echo "Username or Password is incorrect please check again";?></h3></b></center></br></br></br>
	   <center><a href="admin.html" class="button1">back</a></center>
	   <?php
   }
   ?>
		
<br></br><br></br>
<div id="fixedfooter">Nexus Edutech</div>
</body>
</html>
		
			
		  
	