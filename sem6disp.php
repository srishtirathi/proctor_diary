<!DOCTYPE html>
<html>


<head>
	<title>Sem 6</title>
	<link rel="stylesheet" type="text/css" href="disp_table.css">
	<script>
  function signOut() {
    var auth2 = gapi.auth2.getAuthInstance();
    auth2.signOut().then(function () {
      console.log('User signed out.');
    });
  }
</script>
</head>
	<body>
		<img src="bms.jpeg" style="width: 150px;height: 150px; margin-left:0px; float: left">
		<a href="../pdashboard.html"><img src="home.png" style=" width: 50px; margin-left: 990px; float: left;"></a>
    	<a href="../homepage.html" onclick="signOut();"><button type="button"  class="login100-form-btn">SIGN OUT</button></a>
    	<h1>SEMESTER 6</h1>
		<?php
		session_start();
if(!isset($_SESSION['studentuser']))
		$host="localhost"; 
		$username="root"; 
		$password=""; 
		$db_name="student"; 
		$tbl_name="sem6";
		$conn=mysqli_connect($host, $username, $password)or die("cannot connect"); 
		
		mysqli_select_db($conn,$db_name)or die("cannot select DB");

		

	$query = "SELECT * FROM sem6";
	//echo $query;

		//$result = mysql_query($query, $conn);
		$result = mysqli_query($conn,$query);
		
		//if(mysql_num_rows($result) == 0)
		if(mysqli_num_rows($result)==0)
			echo "Not found<br/>";
		
		//$row = mysql_fetch_array($result);
		echo "<table border='2' align='center'>
<tr>
<th>USN</th>
<th>Course Title</th>
<th>Course Code</th>
<th>Credits</th>
<th>Regular/Re-register</th>
<th>Attempt No.</th>
<th>Faculty</th>
<th>Attendance</th>
<th>CIE Marks</th>
<th>SEE Grade</th>
<th>Grade Points</th>
</tr>
";
while($row=mysqli_fetch_array($result))
{
	echo "<tr>";
	echo "<td>".$row['usn']."</td>";
	echo "<td>".$row['course_title']."</td>";
	echo "<td>".$row['course_code']."</td>";
	echo "<td>".$row['credits']."</td>";
	echo "<td>".$row['re_register']."</td>";
	echo "<td>".$row['attempt_no']."</td>";
	echo "<td>".$row['faculty']."</td>";
	echo "<td>".$row['attendance']."</td>";
	echo "<td>".$row['cie_marks']."</td>";
	echo "<td>".$row['see_grade']."</td>";
	echo "<td>".$row['grade_points']."</td>";
	echo "</tr>";
	
}
echo"</table>";
?>
	</body>
</html>