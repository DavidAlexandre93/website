<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>

<?php
include("config.php");

$result = mysqli_query("SELECT * FROM image");

echo "<br />";
while($row = mysqli_fetch_array($result))
  {
  		echo '<img src=' . $row["image_id"] . '>' . $row['image'] . '</a><br />';
		//16.	<img src="pix.php?pixID=<?php echo mysqli_result($rsPix,$i,"pixID"); ?>"/>
  }

mysqli_close($con);
?>
</body>
</html>
