<?php
		if(isset($_POST[ 'Aceptar']))
		{
			$user=$_POST['nombre'];
			$apellido=$_POST['apellido'];
			$tipo=$_POST['tipo'];
			$edad=$_POST['edad'];
			$sexo=$_POST['sexo'];
			$carrera=$_POST['carrera'];
			$provincia=$_POST['provincia'];
			$email=$_POST['email'];
			$telefono=$_POST['telefono'];
			$pass=$_POST['password'];
			$campos= strlen($user)*strlen($apellido)*strlen($tipo)*strlen($edad)*strlen($sexo)*strlen($carrera)*strlen($provincia)*strlen($email)*strlen($telefono)*strlen($pass);
		
			if($campos>0)
			{
				require("conexion.php");
				$link= mysql_connect($servidor,$usuario,$password);
					if($link)
				{
					mysql_select_db($bd,$link);
				}
				mysql_query("INSERT INTO usuario VALUES ('$idUsuario','$user','$apellido','$tipo','$edad','$sexo','$carrera','$provincia','$email','$telefono','$pass')");
				echo "Se ha ingresado correctamente";
			    include("listaUsuarios.php");
			}
			else
			{
				echo "No se permiten espacios en blanco";
			}
		}
?>