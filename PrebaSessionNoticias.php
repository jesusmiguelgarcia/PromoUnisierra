<?php 

	session_start();

	$_SESSION['Nombre'] = "Jorge";
	$_SESSION['Tipo'] = 1;

	header('location:index.php');
 ?>