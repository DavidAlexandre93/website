<?php

include("config.php");
 
 function clean($str) {
		$str = @trim($str);
		if(get_magic_quotes_gpc()) {
			$str = stripslashes($str);
		}
		return mysqli_real_escape_string($str);
	}
$messages = clean($_GET['textfield']);
$user =clean($_GET['useid']);
$PIC =clean($_GET['textfield1']);
$sql="INSERT INTO photoscomment (comment, commentby, PIC)
VALUES
('$messages','$user','$PIC')";
if (!mysqli_query($sql,$con))
  {
  die('Error: ' . mysqli_error());
  }
header("location: photocomment.php" ."?id=" . "$user");

mysqli_close($con)

?>