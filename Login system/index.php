<?php



include 'config.php';

//include 'loginpage.php';

if(loggedin())

{

	echo 'You are already logged in <a href =" logout.php "  >Log out </a>';
}

else
{
	include 'loginform.php';
}


?>