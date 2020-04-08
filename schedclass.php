<html>
<head>
<title>CMS</title>
<link rel="stylesheet" type="text/css" href="css1/style.css">
<style>
table {
    border-collapse: collapse;
    width: 65%;
	float:top-right;
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
<h1><center><b>NEW SCHEDULE</b><center></h1>
</br>
<?php
$user="chirag";
$password="chirag123";
$db="chirag";
$day=$_POST['day'];
$time=$_POST['tim'];
$subj=$_POST['sub'];
$teach=$_POST['teac'];
$conn=new mysqli('localhost',$user,$password,$db);
if($conn==true)
	$check=mysqli_query($conn,"SELECT * FROM `timetable` WHERE time='$time' and day='$day'");
    $checkrows=mysqli_num_rows($check);

   if($checkrows>0) {
	   ?>
      <b><center><h3> <?php echo "Sorry there is a class already scheduled in this time and day"; ?></h3></b></center>
	  <?php
   } else {  
    //insert results from the form inputs
	$query="INSERT INTO `timetable`(`day`, `time`, `subject`, `teacher`) VALUES ('$day','$time','$subj','$teach')";
	 $result = mysqli_query($conn, $query) or die('Error querying database.');?>
	    <center><h3><b><?php echo "Added successfully!!!";?></b></h3></center>
		<?php
   }
   ?>
<h2><center>The Time Table</center></h2>
<?php
$result=mysqli_query($conn,"SELECT * FROM `timetable`");
?>
<table>
<tr><th>Day</th>
	<th>Timing</th>
	<th>Subject</th>
	<th>Teacher</th></tr>
	<?php
	while($row=mysqli_fetch_array($result,MYSQL_BOTH))
	{
		?>
		<tr><th><?php echo $row['day']; ?></th>
		<td><?php echo $row['time']; ?></td>
		<td><?php echo $row['subject']; ?></td>
		<td><?php echo $row['teacher']; ?></td></tr>
		<?php
	}
	?>	
<div id="fixedfooter">Nexus Edutech</div>	
</body>
</html>	