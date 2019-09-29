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
$tbl_name="student_info"; 
$conn=mysqli_connect("$host", "$username", "$password","student")or die("cannot connect"); 


$name=$_POST["name"];
$usn=$_POST["usn"];
$branch=$_POST["branch"];
$sem=$_POST["sem"];
$dob =$_POST["dob"];
$phone=$_POST["contact_no"];
$email=$_POST["email_id"];
$fname=$_POST["fathers_name"];
$foccupation=$_POST["fathers_occupation"];
$address=$_POST["address"];
$fphone=$_POST["fathers_contact"];
$mname=$_POST["mothers_name"];
$moccupation=$_POST["mothers_occupation"];
$mphone=$_POST["mothers_contact"];
$acc=$_POST["accomodation"];

$name=stripslashes($name);
$usn=stripslashes($usn);
$branch =stripslashes($branch);
$sem =stripslashes($sem);
$dob =stripslashes($dob);
$phone=stripslashes($phone);
$email=stripslashes($email);
$fname=stripslashes($fname);
$foccupation=stripslashes($foccupation);
$moccupation=stripslashes($moccupation);
$address=stripslashes($address);
$fphone=stripslashes($fphone);
$mphone=stripslashes($mphone);
$mname=stripslashes($mname);
$acc=stripslashes($acc);

$name = mysqli_real_escape_string($conn,$name);
$usn = mysqli_real_escape_string($conn,$usn);
$branch = mysqli_real_escape_string($conn,$branch);
$sem = mysqli_real_escape_string($conn,$sem);
$dob = mysqli_real_escape_string($conn,$dob);
$email = mysqli_real_escape_string($conn,$email);
$fname = mysqli_real_escape_string($conn,$fname);
$foccupation = mysqli_real_escape_string($conn,$foccupation);
$moccupation = mysqli_real_escape_string($conn,$moccupation);
$phone = mysqli_real_escape_string($conn,$phone);
$address = mysqli_real_escape_string($conn,$address);
$fphone = mysqli_real_escape_string($conn,$fphone);
$mphone = mysqli_real_escape_string($conn,$mphone);
$mname = mysqli_real_escape_string($conn,$mname);
$acc = mysqli_real_escape_string($conn,$acc);

$sql="INSERT INTO student_info(name,usn,branch,sem,dob,email_id,contact_no,address,fathers_name,	fathers_occupation,	fathers_contact,	mothers_name,	mothers_occupation,	mothers_contact,accomodation) VALUES ('$name', '$usn' ,'$branch','$sem','$dob','$email','$phone','$address','$fname','$foccupation','$fphone','$mname','$moccupation','$mphone','$acc')";
$result=mysqli_query($conn,$sql);
?>  

<script type="text/javascript">
     	alert("Saved successfully :)");
     	window.location="sdashboard.html";
     </script>
</body>
</html>