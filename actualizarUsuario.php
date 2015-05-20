<?php
		require('conexion.php');
		$conexion = mysql_connect($servidor,$usuario,$password);// conexion BD
		mysql_select_db($bd,$conexion);
		$resultado=sprintf("UPDATE  usuario SET nombre='%s',apellido='%s',tipo='%s',edad='%s',sexo='%s',carrera='%s',provincia='%s',email='%s',telefono='%s',password='%s' WHERE idUsuario='%s'",$_POST['nombre'],$_POST['apellido'],$_POST['tipo'],$_POST['edad'],$_POST['sexo'],$_POST['carrera'],$_POST['provincia'],$_POST['email'],$_POST['telefono'],$_POST['password'],$_POST['id'],$conexion);
		mysql_query($resultado);
		mysql_close($conexion);
		echo"<a href='listaUsuarios.php'>Volver a lista usuarios";
		
?>