<?php

include("config.php");
 
 function clean($str) {
		$str = @trim($str);
		if(get_magic_quotes_gpc()) {
			$str = stripslashes($str);
		}
		return mysqli_real_escape_string($str);
	}
$messages = clean($_POST['comment']);
$user =$_POST['firstname'];
$sql="INSERT INTO comment (comment, post_id)
VALUES
('$messages','$user')";

if (!mysqli_query($sql,$con))
  {
  die('Error: ' . mysqli_error());
  }
echo "success";
exit();

mysqli_close($con)

?>