

<?php
	
	if(isset($_POST['submit'])){

		$name = $_POST['name'];
		$email = $_POST['email'];

		$error='';

			if(empty($name))
			{
				$error = "<li>Username is empty</li> ";
			}		

			if(empty($email))

			{
				$error = $error."<li>Email is empty</li> ";
			}

			
	}

?>


<DOCTYPE !HTML>


<html>

<head>
	<title>Form handling</title>
</head>
<body>

<h1>Suscription Form</h1>



<form action="" method="POST">



<table>
<tr>

<td>USERNAME : </td>
<td><input type="text"  name="name"></td>
</tr>



<tr>
<td>E-MAIL: </td>
<td><input type="text" name="email"></td>
</tr>

</table>


<input type="submit" name="submit">
</form>

<?php  if(isset($error)) echo $error;   ?>



</body>
</html>




