<form action="login.php" method="POST">
		id Usuario <input type="text" name="id">
		<br>
		<br>
		<input type="submit" name="aceptar">
</form>
<?php		
		if(isset($_POST['aceptar']))
		{
			header('modificarUsuario.php');
		}
?>