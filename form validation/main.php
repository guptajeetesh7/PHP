

<?php
	
	if(isset($_POST['submit'])){

		$name = $_POST['name'];
		$password = $_POST['password'];
		$contact = $_POST['contact'];
		$email = $_POST['email'];

		$error='';

			if(empty($name))
			{
				$error = "<li>Username is empty</li> ";
			}		
			if(empty($password))
			{
				$error = $error."<li>Password is empty</li> ";
			}		


			if(strlen($password)<=5 && !empty($password)) {
				$error =$error. "<li> Password is very weak </li>";
			}

			if(empty($contact))
			{
				$error = $error."<li>contact is empty</li> ";
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

	<style >
		p{
			font-size: 40px;
		}
	</style>
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

<tr>
<td>PASSWORD :</td>
<td><input type="password" name="password"></td>
</tr>


<tr>
<td>CONTACT No : </td>
<td><input type="text" name="contact"></td>
</tr>


</table>


<input type="submit" name="submit">
</form>
<ul style="color: red;">
<?php  if(isset($error)) echo $error;   ?>

</ul>




</body>
</html>




