<?php
	session_start();
	unset($_SESSION['nombre']);
	unset($_SESSION['tipo']);
	header("location:login.php");
?>