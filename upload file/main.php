<?php

if(isset($_POST['submit']) && !empty($_POST['submit'])){

	$file_name = $_FILES['file']['name'];
	$tmp_name = $_FILES['file']['tmp_name'];

	if(isset($file_name) && !empty($file_name)){

		$location = "uploads/";

		if(move_uploaded_file($tmp_name, $location.$file_name))
		{
			echo "File uploaded succesfully";

		}
		else
		{
			echo "Oops Try later Server down";
		}


		
	}

	else
	{
		echo "Please Select a file to upload";
	}

}


?>

<form method="POST" action="main.php" enctype="multipart/form-data"> 
	
	<input type="file" name="file" value="Choose File"><br><br>

	<input type="submit" name="submit" value="Upload">

</form>