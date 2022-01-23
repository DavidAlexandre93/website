<?php
include("config.php");
$id=$_POST['useid'];
mysqli_query("DELETE FROM friendlist WHERE friends_id='$id'");
echo 'friends succesfully deleted';
mysqli_close($con);
?> 