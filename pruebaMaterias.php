<?php 

	session_start();

	$_SESSION['nombre'] = "Jacel";
	$_SESSION['tipo'] = 1;

	header('location:materias_editar.php');
 ?>