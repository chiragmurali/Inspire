<html>
<head>
<style>
table{border-collapse: collapse;}
table,th,td{border:2px solid #f2f2f2;padding:20px;}
</style>
<title>CMS</title>
<link rel="stylesheet" type="text/css" href="css1/style.css">
</head>
<body>
<div class="topnav">
<ul>
<a href="">Class Management System</a>
<div class="topnav-right">
<a href="home.html">Admin Home</a>
<a href="contactus.php">Contact Us</a>
<a href="admin.html">Logout</a>
</div>
</ul>
</div>
<img src="img/back1.jpg" alt="unavailable" class="img1">
<ul class="sidenav">
  <h3><center>DASHBOARD</center></h3>
  <li><a href="home.html">Home</a></li>
  <li><a href="teacher.html">Add Staff</a></li>
  <li><a href="student.html">Add Student</a></li>
  <li><a href="schedule.html">Schedule Class</a></li>
  <li><a href="reschedule.html">Reschedule Class</a></li>
  <li><a href="staffsearch.html">Staff Details</a></li>
  <li><a href="deletetech.html">Delete Staff</a></li>
  <li><a href="studsearch.html">Student Details</a></li>
  <li><a href="deletestud.html">Delete Student</a></li>
  <li><a href="timetab.php">Timetable</a></li>
</ul>
<center><h1>DELETE STAFF</h1></center>
</br></br>
<?php
$user="chirag";
$password="chirag123";
$db="chirag";
$name=$_POST['search'];
$conn=new mysqli('localhost',$user,$password,$db);
if($conn==true)
	$check=mysqli_query($conn,"SELECT * FROM `staff` WHERE name='$name'");
    $checkrows=mysqli_num_rows($check);

   if($checkrows>0) {
		$result=mysqli_query($conn,"DELETE FROM `staff` WHERE name='$name'");
		?> <center><b><h3><?php echo "Staff Deleted";?></h3></b></center><?php
	}
   
   else{
	   ?><center><b><h3><?php echo "Staff not present";
   }
	   
	?>
</h3></b></center>
<div id="fixedfooter">Nexus Edutech</div>	
</body>
</html>