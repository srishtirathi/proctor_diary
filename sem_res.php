<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
session_start();
if(!isset($_SESSION['studentuser']))
$host="localhost"; 
$username="root"; 
$password=""; 
$db_name="student"; 
$tbl_name="sem_res"; 
$conn=mysqli_connect("$host", "$username", "$password","student")or die("cannot connect"); 

$sem=$_POST["sem"];
$usn=$_POST["usn"];
$cr=$_POST["credits_reg"];
$ce=$_POST["credits_earned"];
$sgpa=$_POST["sgpa"];
$cgpa=$_POST["cgpa"];

$usn=stripslashes($usn);
$sem=stripslashes($sem);
$cr=stripslashes($cr);
$ce=stripslashes($ce);
$sgpa=stripslashes($sgpa);
$cgpa=stripslashes($cgpa);


$usn = mysqli_real_escape_string($conn,$usn);
$sem = mysqli_real_escape_string($conn,$sem);
$ce = mysqli_real_escape_string($conn,$ce);
$cr = mysqli_real_escape_string($conn,$cr);
$sgpa = mysqli_real_escape_string($conn,$sgpa);
$cgpa = mysqli_real_escape_string($conn,$cgpa);


$sql="INSERT INTO sem_res(sem,usn, credits_reg, credits_earned, sgpa,cgpa) VALUES ('$sem','$usn', '$cr','$ce','$sgpa','$cgpa')";

$result=mysqli_query($conn,$sql);
?>      
?>     
<script type="text/javascript">
	alert("Saved successfully :)");
     window.location="sdashboard.html";
</script>
</body>
</html>
