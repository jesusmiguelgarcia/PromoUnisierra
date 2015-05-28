<?php 

	session_start();

	$_SESSION['nombre'] = "Jorge";
	$_SESSION['tipo'] = 1;

	header('location:index.php');
 ?>