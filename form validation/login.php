
<!DOCTYPE html>
<html>
<head>
	<title>Done</title>
</head>
<body>

</body>
</html>



<?php




	
		$name = $_POST['name'];
		$email = $_POST['email'];

		
		if(isset($_POST['submit']))
		{

			echo 'Your Name : ' . $name .'<br> Your email :'. $email;


		}


?>