<?php 

	session_start();

	$_SESSION['Nombre'] = "Jacel";
	$_SESSION['Tipo'] = 1;

	header('location:materias_editar.php');
 ?>