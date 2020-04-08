<html>
<head>
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
<img src="img/adminb.jpg" class="img1">
<div>
<?php
$user="chirag";
$password="chirag123";
$db="chirag";
$oldpass=$_POST['opwd'];
$newpass=$_POST['npwd'];
$cpass=$_POST['cpwd'];
$conn=new mysqli('localhost',$user,$password,$db);
if($conn==true)
	$check=mysqli_query($conn,"SELECT * FROM `admininp` WHERE Password='$oldpass'");
    $checkrows=mysqli_num_rows($check);
	if($checkrows>0) {
		if($newpass == $cpass){
		$query="UPDATE `admininp` SET `Password`='$newpass' WHERE Password='$oldpass'";
		$result = mysqli_query($conn, $query) or die('Error querying database.');
		 ?><center><h3><b><?php echo "Password changed Successfully!!";?></b></h3></center>
		<?php
   }
    else{
		?><center><h3><b><?php echo "New password and Confirm passwords do not match!!";?></b></h3></center><?php
	}
	}
	else{
		?><center><h3><b><?php echo "The old password you have entered does not exist!!";?> </b></h3></center><?php
		}	
   ?>
   </br></br></br>
<center><a href="setting.html" class="button1">Back</a></center>
</br></br>
</div>
</center>
<div id="fixedfooter">Nexus Edutech</div>
</body>
</html>