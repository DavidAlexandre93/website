<?php
	require_once('auth.php');
?>
<?php

$errmsg_arr = array();
	
	//Validation error flag
	$errflag = false;
include("config.php");
$firstname=$_GET['firstname'];
$lastname=$_GET['lastname'];
$address=$_GET['address'];
$contct_no=$_GET['contactno'];
$website=$_GET['url'];
$gender=$_GET['gender'];
$addby=$_GET['name'];
$status=$_GET['status'];
$propic=$_GET['propic'];
$friend_id=$_GET['friend'];
if($firstname == $_SESSION['SESS_FIRST_NAME']) {
		$errmsg_arr[] = ' You cannot add your self, ipaliwat anay sa nso ang record mo hehehehe';
		$errflag = true;
	}
	if($errflag) {
		$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
		session_write_close();
		header("location: friends.php");
		exit();
	}
if($firstname != '') {
		$qry = "SELECT * FROM friendlist WHERE friends_id='$friend_id'";
		$result = mysqli_query($qry);
		if($result) {
			if(mysqli_num_rows($result) > 0) {
				$errmsg_arr[] = 'the friends you are trying to add is already in your friends list';
				$errflag = true;
			}
			@mysqli_free_result($result);
		}
		else {
			die("Query failed");
		}
	}
	
	//If there are input validations, redirect back to the registration form
	if($errflag) {
		$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
		session_write_close();
		echo '<script> location.href="friends.php"; </script>';
		exit();
	}

$sql="INSERT INTO friendlist (firstname, lastname, address, contact_no, website, gender, addby, status, location)
VALUES
('$firstname','$lastname','$address','$contct_no','$website','$gender','$addby','$status','$propic')";

if (!mysqli_query($sql,$con))
  {
  die('Error: ' . mysqli_error());
  }
echo '<script> location.href="profile.php"; </script>';
exit();

mysqli_close($con)
?> 