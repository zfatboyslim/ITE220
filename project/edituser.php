<?
	require_once ('myconfig.php');
	$result = mysqli_query($mydb,"SELECT * FROM student WHERE username='" . $_SESSION['ses_username'] ."'") 
	or die("Error: ".mysqli_error($mydb));

  while($row = mysqli_fetch_array($result)) {
  echo "<h2><center>User Details:</center></h2>";
  echo "<BR /><BR />";
  echo "<center>";
  echo "<table border='1'>";
  echo "<tr>";
  echo "<td><B>First Name:</B></td>";
  echo "<td>" . $row['first_name'] . "</td>";
  echo "</tr>";
  echo "</table>";
  echo "</center>";
  }
?>