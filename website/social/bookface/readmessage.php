
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

<?php
include("config.php");

$messageid=$_POST['messageid'];

mysqli_query("UPDATE messages SET status = 'read' WHERE message_id='$messageid'");
header("location: lol.php");
exit();
mysqli_close($con);
?> 
</body>
</html>
