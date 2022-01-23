<?php
				  if (isset($_GET['id']))
	{
include("config.php");
			$messages_id = $_GET['id'];
			//$result = mysqli_query("SELECT * FROM friendlist WHERE friends_id = $member_id");
			mysqli_query("DELETE FROM postcomment WHERE comment_id='$messages_id'");
			header("location: lol.php");
			exit();
			
			mysqli_close($con);
			}
			?>