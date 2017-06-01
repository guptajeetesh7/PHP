<?php

if(isset($_POST['submit']) && !empty($_POST['submit'])){

	$file_name = $_FILES['file']['name'];
	$tmp_name = $_FILES['file']['tmp_name'];

	$size = $_FILES['file']['size'];
	$type = $_FILES['file']['type'];


	$extension = substr($file_name,strpos($file_name,'.' )+1);

	$max_size = 2097152 ;

	 $extension = strtolower($extension);

	//	 echo $type.$size;

	if(isset($file_name) && !empty($file_name) ){

		if( ($extension=='jpg' || $extension=='jpeg') && ($type=='image/jpeg' || $type=='image/jpg') ){

			if($size < $max_size){

									$location = 'uploads/';

									if(move_uploaded_file($tmp_name,$location.$file_name))
											{
												echo "File uploaded succesfully";

											}
										else
											{
												echo "Oops Try later Server down";
											}

								}


						else{
								echo "Size must be less than 2MB";
							}
	}
	else{
		echo "Please upload a jpeg or jpg file";
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