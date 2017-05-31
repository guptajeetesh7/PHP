<?php


$file_path = $_SERVER['SCRIPT_NAME'];

if(isset($_POST['submit']) ){



	$username = $_POST['username'];
	$password = $_POST['password'];

	$password_hash = md5($password);

	if(!empty($username) && !empty($password)){

	$query = "SELECT `username` , `password` FROM `data` WHERE `username`='$username' AND   `password` ='$password_hash' ";
	if($query_run = mysql_query($query)){

		$query_rows = mysql_num_rows($query_run);
		if($query_rows == 0){
			echo 'INVALID ACCOUNT';
		}

		elseif ($query_rows == 1) {
			$user_id = mysql_result($query_run,0,"username" );
			$_SESSION['username'] = $user_id;
			header('Location : loginpage.php');
			//header('Location : loginpage.php');
		}

	}
	else
	{
		
	}


	



	}




	else{
		echo "Please fill all entry";
	}



}

?>
<hr>

<form action="<?php echo $file_path ?>" method="POST" >

  USERNAME ::<input type="text" name="username" placeholder="username" ><br><br>
  PASSWORD ::<input type="password" name="password" placeholder="password"><br><br>
  <input type="submit" name="submit" value="LOGIN">
  <input type="submit" name="new" value="SIGN IN">

</form>