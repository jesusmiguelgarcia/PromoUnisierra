<?php 

	require('conexion.php');
	$conexion = mysql_connect($servidor,$usuario,$password); // conexion BD
	mysql_select_db($bd,$conexion);


	if (isset($_POST['eliminar'])) 
	{
		$eliminaSQL = "DELETE from noticia WHERE idNoticia =" . $_GET['id'];
		mysql_query($eliminaSQL);
		//echo "$eliminaSQL";
	}
	header('location:index.php');

 ?>