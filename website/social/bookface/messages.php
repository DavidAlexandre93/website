<?php
require_once('auth.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<p>New messages</p>
<p>
<?php
include("config.php");

$result = mysqli_query("SELECT * FROM messages WHERE receiver='".$_SESSION['SESS_FIRST_NAME'] ."' and status='pending' ORDER BY receiver ASC");

echo "<br />";
while($row = mysqli_fetch_array($result))
  {
  		echo $row['sender'];
		echo '&nbsp;&nbsp;&nbsp;';
		echo '<a href=read.php?id=' . $row["message_id"] . '>' . "Read" . '</a>';
		echo '&nbsp;&nbsp;&nbsp;';
		echo '<a href=replymessages.php?id=' . $row["message_id"] . '>' . "Reply" . '</a><br />';
		
  }
mysqli_close($con);

?>


</p>
</body>
</html>
