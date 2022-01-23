
<?php
				 
include("config.php");
			$messages = $_POST['com'];
			$remarksby = $_POST['cam'];
			//mysqli_query("INSERT INTO like(like, likeby) VALUES ('$messages_id','$likeby')");
			$sql="INSERT INTO bleh (remarks, remarksby)
VALUES
('$messages','$remarksby')";
if (!mysqli_query($sql,$con))
  {
  die('Error: ' . mysqli_error());
  }
			header("location: lol.php");
			exit();
			
			mysqli_close($con);
			
			?>