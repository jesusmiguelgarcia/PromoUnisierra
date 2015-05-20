<?php 

	session_start();

	$_SESSION['Nombre'] = "Jorge";
	$_SESSION['Tipo'] = 0;

	header('location:index.php');
 ?>