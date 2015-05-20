<?php 

	session_start();

	$_SESSION['nombre'] = "Makashi32";
	$_SESSION['tipo'] = 1;

	header('location:index.php');
 ?>