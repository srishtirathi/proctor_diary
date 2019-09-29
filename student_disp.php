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
<style type="text/css">
	p
	{
		margin-left: 400px;
	}
</style>
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
		$tbl_name="student_info";
		$search=$_POST['search'];
		$conn=mysqli_connect($host, $username, $password)or die("cannot connect"); 
		
		mysqli_select_db($conn,$db_name)or die("cannot select DB");

		

	$query = "SELECT * FROM student_info WHERE usn='$search' ";
	//echo $query;

		//$result = mysql_query($query, $conn);
		$result = mysqli_query($conn,$query);
		
		//if(mysql_num_rows($result) == 0)
		if(mysqli_num_rows($result)==0)
			echo "Not found<br/>";
		

		//$row = mysql_fetch_array($result);
		
while($row=mysqli_fetch_array($result))
{
	//echo "<tr>";
	echo "<p>Name: ".$row['name']."</p>";
	echo "<p>USN: ".$row['usn']."</p>";
	echo "<p>Branch: ".$row['branch']."</p>";
	echo "<p>Sem: ".$row['sem']."</p>";
	echo "<p>Dob: ".$row['dob']."</p>";
	echo "<p>email ID: ".$row['email_id']."</p>";
	echo "<p>Contact no.: ".$row['contact_no']."</p>";
	echo "<p>Address: ".$row['address']."</p>";
	echo "<p>Father's name: ".$row['fathers_name']."</p>";
	echo "<p>Father's occupation: ".$row['fathers_occupation']."</p>";
	echo "<p>Mother's name: ".$row['mothers_name']."</p>";
	echo "<p>Mother's occupation: ".$row['mothers_occupation']."</p>";
	echo "<p>Accomodation: ".$row['accomodation']."</p>";
	//echo "</tr>";
	
}
//echo"</table>";
?>
	</body>
</html>