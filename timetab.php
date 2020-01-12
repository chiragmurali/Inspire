<html>
<head>
<title>CMS</title>
<style>

table {
    border-collapse: collapse;
    width: 65%;
	float:right;
}

th, td {
    text-align:center;
    padding: 8px;
}

tr:nth-child(odd){background-color: #f2f2f2}

th {
    background-color: black;
    color: white;
}
</style>
<title>CMS</title>
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
<?php
$user="chirag";
$password="chirag123";
$db="chirag";

$conn=new mysqli('localhost',$user,$password,$db);
if($conn==true)
	$check=mysqli_query($conn,"SELECT * FROM `timetable`");
    $checkrows=mysqli_num_rows($check);

   if($checkrows>0){
	   ?>
<h1><center><b>TIMETABLE</b><center></h1>
</br></br>
<table>
<tr><th>Day</th>
	<th>Timings</th>
	<th>Subject</th>
	<th>Teacher</th></tr>
	<?php
	while($row=mysqli_fetch_array($check,MYSQL_BOTH))
	{
		?>
		<tr><th><?php echo $row['day']; ?></th>
		<td><?php echo $row['time']; ?></td>
		<td><?php echo $row['subject']; ?></td>
		<td><?php echo $row['teacher']; ?></td></tr>
		<?php
	}
   }
	?>
</table>
<div id="fixedfooter">Nexus Edutech</div>
</body>
</html>