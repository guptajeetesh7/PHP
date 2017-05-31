<?php
 require 'config.php';

 if(!loggedin()){

 	if(isset($_POST['username']) && isset($_POST['password']) && isset($_POST['password_again']))
 	{
 		$username = $_POST['username'];
 		$password = $_POST['password'];
 		$password_again = $_POST['password_again'];

 		if(!empty($username) && !empty($password) && !empty($password_again))
 		{
 				if($password!=$password_again){

 					echo "<strong>PASSWORD NOT MATCHED</strong>";
 				}
 				else{
 					$password_hash = md5($password);


 					

 					$query = "SELECT  `username`  FROM  `data`  WHERE  `username`  =  '$username' ";


 					$query_run = mysql_query($query);



 					if(mysql_num_rows($query_run) == 1){
 						echo "<strong>Username ".$username. "  already registered</strong>";
 					}

 					else{
 						
 						$query = "INSERT INTO `data` VALUES ('', '".mysql_real_escape_string($username)."', '".mysql_real_escape_string($password_hash)."')";

 					if($query_run = mysql_query($query))
 					{
 						header('Location: register_success.php');
 					}else
 					{
 						echo mysql_error();
 						echo '<strong>Sorry , we coludn\'t register at this time . try again later . </strong>';
 					}
 					


 					}

 				}

 		}
 		else{
 			echo "<strong>Please fill all the feild</strong>";
 			
 		}

 	

 	}


 ?>
 
<form action="register.php" method="POST">

	USERNAME :<br>
	<input type="text" name="username" value="<?php if(!empty($username)) echo $username; ?>"><br><br>
	PASSWORD :<br>
	<input type="password" name="password" ><br><br>

	PASSWORD AGAIN:<br>
	<input type="password" name="password_again"><br><br>

	<br>
	<input type="submit" value="Register">
	
	

</form>






 <?php	
 	

 }
 
 else {
 	echo "You are already registered";
 }

?>