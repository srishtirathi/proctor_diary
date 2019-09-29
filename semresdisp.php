<html>
<head>
	<title>Grade Card</title>
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
    	<h1>GRADE CARD</h1>
		<?php
		session_start();
if(!isset($_SESSION['studentuser']))
		$host="localhost"; 
		$username="root"; 
		$password=""; 
		$db_name="student"; 
		$tbl_name="sem_res";
		$conn=mysqli_connect($host, $username, $password)or die("cannot connect"); 
		
		mysqli_select_db($conn,$db_name)or die("cannot select DB");

		

	$query = "SELECT * FROM sem_res";
	//echo $query;

		//$result = mysql_query($query, $conn);
		$result = mysqli_query($conn,$query);
		
		//if(mysql_num_rows($result) == 0)
		if(mysqli_num_rows($result)==0)
			echo "Not found<br/>";
		

		//$row = mysql_fetch_array($result);
		echo "<table border='2' align='center'>
<tr>
<th>SEMESTER</th>
<th>USN</h>
<th>CREDITS REGISTERED</th>
<th>CREDITS EARNDED</th>
<th>SGPA</th>
<th>CGPA</th>

</tr>
";

while($row=mysqli_fetch_array($result))
{
	echo "<tr>";
	echo "<td>".$row['sem']."</td>";
	echo "<td>".$row['usn']."</td>";
	echo "<td>".$row['credits_reg']."</td>";
	echo "<td>".$row['credits_earned']."</td>";
	echo "<td>".$row['sgpa']."</td>";
	echo "<td>".$row['cgpa']."</td>";
	
	echo "</tr>";
	
}
echo"</table>";
?>
	</body>
</html>