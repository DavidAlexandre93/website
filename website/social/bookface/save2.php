
<?php
include("config.php");
 
 function clean($str) {
		$str = @trim($str);
		if(get_magic_quotes_gpc()) {
			$str = stripslashes($str);
		}
		return mysqli_real_escape_string($str);
	}
$messages = clean($_POST['message']);
$user =clean($_POST['name']);
$pic =clean($_POST['name1']);
$poster =clean($_POST['poster']);
$poster2 =clean($_POST['poster2']);

$sql="INSERT INTO message (messages, user, picture, date_created, poster)
VALUES
('$messages','$user','$pic','".strtotime(date("Y-m-d H:i:s"))."','$poster')";
mysqli_query("UPDATE messages SET picture = '$pic' WHERE FirstName='$user'");
if (!mysqli_query($sql,$con))
  {
  die('Error: ' . mysqli_error());
  }
header("location: friendsprofile1.php" ."?id=" . "$poster2");
exit();

mysqli_close($con)

?>
