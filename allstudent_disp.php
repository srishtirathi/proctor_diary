<html>
<head>
	<title>Personal Info</title>
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
    	<h1 style="margin-left: 400px;">PERSONAL INFORMATION</h1>
		<?php
		session_start();
if(!isset($_SESSION['studentuser']))
		$host="localhost"; 
		$username="root"; 
		$password=""; 
		$db_name="student"; 
		$tbl_name="sem4";
		//$search=$_POST["search"];
		$conn=mysqli_connect($host, $username, $password)or die("cannot connect"); 
		
		mysqli_select_db($conn,$db_name)or die("cannot select DB");

		

	$query = "SELECT * FROM student_info ";
	//echo $query;

		//$result = mysql_query($query, $conn);
		$result = mysqli_query($conn,$query);
		
		//if(mysql_num_rows($result) == 0)
		if(mysqli_num_rows($result)==0)
			echo "Not found<br/>";
		

		//$row = mysql_fetch_array($result);
		echo "<table border='2' align='center'>
<tr>
<th>Name</th>
<th>USN</th>
<th>Branch</th>
<th>Sem</th>
<th>Dob</th>
<th>email ID</th>
<th>Contact_no</th>
<th>Address</th>
<th>Father's name</th>
<th>Father's occupation</th>
<th>Mother's name</th>
<th>Mother's occupation</th>
<th>Accomodation</th>
</tr>
";
while($row=mysqli_fetch_array($result))
{
	echo "<tr>";
	echo "<td>".$row['name']."</td>";
	echo "<td>".$row['usn']."</td>";
	echo "<td>".$row['branch']."</td>";
	echo "<td>".$row['sem']."</td>";
	echo "<td>".$row['dob']."</td>";
	echo "<td>".$row['email_id']."</td>";
	echo "<td>".$row['contact_no']."</td>";
	echo "<td>".$row['address']."</td>";
	echo "<td>".$row['fathers_name']."</td>";
	echo "<td>".$row['fathers_occupation']."</td>";
	echo "<td>".$row['mothers_name']."</td>";
	echo "<td>".$row['mothers_occupation']."</td>";
	echo "<td>".$row['accomodation']."</td>";
	echo "</tr>";
	
}
echo"</table>";
?>
	</body>
</html>