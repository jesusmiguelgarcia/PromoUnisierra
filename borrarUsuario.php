<?php
	require('conexion.php');
	$conexion = mysql_connect($servidor,$usuario,$password);// conexion BD
	mysql_select_db($bd,$conexion);
	$nombre=$_POST['nombre'];
	$registro=mysql_query("SELECT idUsuario FROM usuario WHERE idUsuario='$nombre'",$conexion) ;
	
	
	if($reg=mysql_fetch_array($registro))
	{
		mysql_query("DELETE FROM usuario WHERE  idUsuario='$nombre'");
		echo "se han eliminado los datos del usuario";
		header("Location: listaUsuarios.php");
	}
	else
	{
		echo"El usuario no existe!!";
	?>
		<br>
		<a href="formularioBorrar.php"><b> Volver</b></a>
	<?php
	}
	?>


	
