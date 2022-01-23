<?php
include("config.php");
$from=$_POST['sender'];
$receiver=$_POST['receiver'];
$content=$_POST['content'];
$status=$_POST['status'];

$sql="INSERT INTO messages (sender, receiver, content, status)
VALUES
('$from','$receiver','$content','$status')";
$sent=@mysqli_query($sql);

if (!$sent)
  {
  die('Error: ' . mysqli_error());
  }
echo "message sent";


mysqli_close($con)
?> 