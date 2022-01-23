<?php
				  if (isset($_GET['id']))
	{

include("config.php");
			$friendid = $_GET['id'];
			//$result = mysqli_query("SELECT * FROM friendlist WHERE friends_id = $member_id");
			mysqli_query("DELETE FROM friendlist WHERE friends_id='$friendid'");
			header("location: profile.php");
			exit();
			
			mysqli_close($con);
			}
			?>