<?php

include("config.php");


$file=$_FILES['image']['tmp_name'];


	if (!isset($file)) {
	echo "";
	}else{
	$image= addslashes(file_get_contents($_FILES['image']['tmp_name']));
	$image_name= addslashes($_FILES['image']['name']);
	$image_size= getimagesize($_FILES['image']['tmp_name']);

	
		if ($image_size==FALSE) {
		
			echo "That's not an image!";
			
		}else{
			
			move_uploaded_file($_FILES["image"]["tmp_name"],"uploadedimage/" . $_FILES["image"]["name"]);
			
			$location="uploadedimage/" . $_FILES["image"]["name"];
			$title=$_POST['title'];
			$body=$_POST['body'];
			
			$sql="INSERT INTO ads (ads_title, ads_content, ads_pic)
VALUES
('$title','$body','$location')";

if (!mysqli_query($sql))
  {
  die('Error: ' . mysqli_error());
  }
header("location: profile.php");
exit();

			
			}
	}


?>