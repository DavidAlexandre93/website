<?php
	require_once('auth.php');
?>
<?php
include("config.php");

$result = mysqli_query("SELECT * FROM friendlist WHERE firstname='".$_SESSION['SESS_FIRST_NAME'] ."' and status='pending' ORDER BY firstname ASC");

echo "<br />";
while($row = mysqli_fetch_array($result))
  {
  		
		echo $row['addby'];
		echo '<a href=acceptrequest.php?id=' . $row["friends_id"] . '>' . "Accept" .  '</a>';
		echo '<a href=deleterequest.php?id=' . $row["friends_id"] . '>' . "Delete" .  '</a>';
  }

mysqli_close($con);

?>
