<?php
		if(isset($_POST[ 'Aceptar']))
		{
			$idUsuario=$_POST['idUsuario'];
			$usuario=$_POST['nombre'];
			$apellido=$_POST['apellido'];
			$tipo=$_POST['tipo'];
			$edad=$_POST['edad'];
			$sexo=$_POST['sexo'];
			$carrera=$_POST['carrera'];
			$provincia=$_POST['provincia'];
			$email=$_POST['email'];
			$telefono=$_POST['telefono'];
			$contrasena=$_POST['contrasena'];
			$campos=strlen($idUsuario)* strlen($usuario)*strlen($apellido)*strlen($tipo)*strlen($edad)*strlen($sexo)*strlen($carrera)*strlen($provincia)*strlen($email)*strlen($telefono)*strlen($contrasena);
		if($campos>0)
		{
			require("conexionjuan.php");
			mysql_query("INSERT INTO usuario VALUES ('$idUsuario','$usuario','$apellido','$tipo','$edad','$sexo','$carrera','$provincia','$email','$telefono','$contrasena')");
			echo "Se ha ingresado correctamente";
				include("listaUsuarios.php");
		}
		else
		{
			echo "No se permiten espacios en blanco";
		}
	}
?>