
<?php

include("config.php");
 
 function clean($str) {
		$str = @trim($str);
		if(get_magic_quotes_gpc()) {
			$str = stripslashes($str);
		}
		return mysqli_real_escape_string($str);
	}
$messages = clean($_POST['postcomment']);
$user =clean($_POST['user']);
$pic =clean($_POST['pic']);
$postid =clean($_POST['postid']);

$sql="INSERT INTO postcomment (content, commentedby, pic, id, date_created)
VALUES
('$messages','$user','$pic','$postid','".strtotime(date("Y-m-d H:i:s"))."')";

if (!mysqli_query($sql,$con))
  {
  die('Error: ' . mysqli_error());
  }
header("location: lol.php");
exit();

mysqli_close($con)

?>

