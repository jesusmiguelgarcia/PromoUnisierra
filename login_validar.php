<?php

	$nom=$_REQUEST['nombre'];
	$pass=$_REQUEST['password'];
	require('conexion.php');
	$conexion = mysql_connect($servidor,$usuario,$password) or die("Problemas al conectar con el servidor");
	mysql_select_db($bd,$conexion) or die("Error al tratar de conectar con la base de datos");
	$login=mysql_query("SELECT * FROM usuario where nombre = '".$nom."'and password='".$pass."'",$conexion);

	if($us=mysql_fetch_array($login))
	{
		$_SESSION["nombre"]="$nom";
													//meterias ayel lusta usuario
		if($us["tipo"]=="admin") 
		{
			
		$_SESSION["tipo"]=1;
		}
		
		else 
		{
			$_SESSION["tipo"]=0;
		}
					//y aki la de noticias
		
		//admin=1 normal=0
		
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