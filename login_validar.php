<?php
	$nom=$_REQUEST['nombre'];
	$contra=$_REQUEST['contrasena'];
	require('conexion.php');
	$conexion = mysql_connect($servidor,$usuario,$password);
	or die("Problemas al conectar con el servidor");
	mysql_select_db("iscpromocion",$conexion) or die("Error al tratar de conectar con la base de datos");
	$login=mysql_query("SELECT * FROM usuario where nombre = '".$nom."'and contrasena='".$contra."'",$conexion);

	if($us=mysql_fetch_array($login))
	{
		header("Location: listaUsuarios.php");
	}
	else
	{
		echo "Contraseña o Usuario incorrecto";
		?>
		<br>
		<a href="login.php"><b> Volver a login</b>
<?php
	}
?>