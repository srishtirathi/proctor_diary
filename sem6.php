<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
$host="localhost"; 
$username="root"; 
$password=""; 
$db_name="student"; 
$tbl_name="sem6"; 
$conn=mysqli_connect("$host", "$username", "$password","student")or die("cannot connect"); 
//mysql_select_db("$db_name")or die("cannot select DB");

$usn=$_POST["usn"];
$ct=$_POST["course_title"];
$cc=$_POST["course_code"];
$cr=$_POST["credits"];
$reg=$_POST["re_register"];
$an=$_POST["attempt_no"];
$fc=$_POST["faculty"];
$att=$_POST["attendance"];
$cie=$_POST["cie_marks"];
$see=$_POST["see_grade"];
$gp=$_POST["grade_points"];

// To protect MySQL injection (more detail about MySQL injection)

$usn=stripslashes($usn);
$ct=stripslashes($ct);
$cc=stripslashes($cc);
$cr=stripslashes($cr);
$reg=stripslashes($reg);
$an=stripslashes($an);
$fc=stripslashes($fc);
$att=stripslashes($att);
$cie=stripslashes($cie);
$see=stripslashes($see);
$gp=stripslashes($gp);


$usn = mysqli_real_escape_string($conn,$usn);
$ct = mysqli_real_escape_string($conn,$ct);
$cc = mysqli_real_escape_string($conn,$cc);
$cr = mysqli_real_escape_string($conn,$cr);
$reg = mysqli_real_escape_string($conn,$reg);
$an = mysqli_real_escape_string($conn,$an);
$fc = mysqli_real_escape_string($conn,$fc);
$att = mysqli_real_escape_string($conn,$att);
$cie = mysqli_real_escape_string($conn,$cie);
$see = mysqli_real_escape_string($conn,$see);
$gp = mysqli_real_escape_string($conn,$gp);





$sql="INSERT INTO sem6(usn,course_title,course_code, credits, re_register,attempt_no,faculty,attendance,cie_marks,see_grade,grade_points) VALUES ('$usn', '$ct','$cc','$cr','$reg','$an','$fc','$att','$cie','$see','$gp')";
$result=mysqli_query($conn,$sql);
?>      
 <script type="text/javascript">
     	alert("Saved successfully :)");
     	window.location="sdashboard.html";
     </script>
</body>
</html>