<?php
// Create connection
$con=mysqli_connect("localhost","root","<password>","website");

// Check connection
if (mysqli_connect_errno($con))
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$result = mysqli_query($con, "SELECT * FROM minecraftPosts");

while($row = mysqli_fetch_array($result)) {
    echo "<div id=post>";
	echo "<span class=title>" . $row['title'] . "</span></br><span class=content>" . $row['content'] . "</span>";
    echo "</div><br />";
}

msqli_close($con);
?>
