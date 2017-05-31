<?php



include 'config.php';

//include 'loginpage.php';

if(isset($_SESSION['username']) && !empty($_SESSION['username'])){

	echo 'You are already logged in';
}

else
{
	include 'loginform.php';
}


?>