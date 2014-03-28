<?php
require('../databaseinfo.php');
// Create connection
$con=mysqli_connect($host,$user,$pass,$db);

// Check connection
if (mysqli_connect_errno($con))
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$result = mysqli_query($con, "SELECT * FROM $mcTable");

while($row = mysqli_fetch_array($result)) {
    echo "<br />";
    echo "<div id=post>";
	echo "<span class=title>" . $row['title'] . "</span></br><span class=content>" . $row['content'] . "</span>";
    echo "</div>";
}

msqli_close($con);
?>
