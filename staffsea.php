<html>
<head>
<title>CMS</title>
<style>
table{border-collapse: collapse;}
table,th,td{border:2px solid #f2f2f2; padding:20px;}
</style>
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
<center><h1>STAFF DETAILS</h1></center>
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
		?>
	<center><table border=5>
	<tr><th>Teacher Name</th>
	<th>Qualification</th>
	<th>Salary</th>
	<th>Subject</th></tr>
	<?php
	while($row=mysqli_fetch_array($check,MYSQL_BOTH))
	{
		?>
		<tr><td><?php echo $row['name']; ?></td>
		<td><?php echo $row['qualification']; ?></td>
		<td><?php echo $row['salary']; ?></td>
		<td><?php echo $row['subject']; ?></td></tr>
		<?php
	}
   }
   else{
	   ?><center><b><h3><?php echo "Sorry staff not present!!";
   }
	?>
</h3></b></center>
<div id="fixedfooter">Nexus Edutech</div>	
</body>
</html>