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
$tbl_name="proctor_info"; 
$conn=mysqli_connect("$host", "$username", "$password","student")or die("cannot connect"); 

$name=$_POST["name"];
$uid=$_POST["user_id"];
$contact_no=$_POST["contact_no"];
$email=$_POST["email_id"];
$dep=$_POST["department"];
$des=$_POST["designation"];
$address=$_POST["address"];
$qfn=$_POST["qualification"];
$sub=$_POST["subjects_handled"];

$name=stripslashes($name);
$uid=stripslashes($uid);
$contact_no=stripslashes($contact_no);
$email=stripslashes($email);
$dep=stripslashes($dep);
$des=stripslashes($des);
$address=stripslashes($address);
$qfn=stripslashes($qfn);
$sub=stripslashes($sub);


$name = mysqli_real_escape_string($conn,$name);
$uid = mysqli_real_escape_string($conn,$uid);
$dep = mysqli_real_escape_string($conn,$dep);
$des = mysqli_real_escape_string($conn,$des);
$email = mysqli_real_escape_string($conn,$email);

$contact_no = mysqli_real_escape_string($conn,$contact_no);
$address = mysqli_real_escape_string($conn,$address);
$qfn=mysqli_real_escape_string($conn,$qfn);
$sub = mysqli_real_escape_string($conn,$sub);

$sql="INSERT INTO proctor_info(name,user_id, address, email_id,contact_no,department, designation, qualification,subjects_handled) VALUES ('$name', '$uid','$address','$email','$contact_no','$dep','$des','$qfn','$sub')";
$result=mysqli_query($conn,$sql);
?>      
 <script type="text/javascript">
     	alert("Saved successfully :)");
     	window.location="pdashboard.html";
     </script>
</body>
</html>