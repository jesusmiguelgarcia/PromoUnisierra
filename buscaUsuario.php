<html>
	<head>
		<?php include("CSSyJS.php");
			session_start();
			if(isset($_SESSION["tipo"]))
			{
				if($_SESSION["tipo"]!=1)
				{
					header("location:index.php");
				}
			}
			print_r($_SESSION["nombre"]);
			print_r($_SESSION["tipo"]);
		?>
		<meta charset="utf-8"/>
		<title>Buscar</title>
	</head>
	<body>
	<div class="todo">
		<div class="content">
			<?php
				include("cabeza.php");
			?>
			<div class="content_resize">
			<center>
			<?php include("conexion.php");?>
					<head>
						<title>Busca Usuario</title>
					</head>
					<h1><center>Buscar Usuario</h1>
					<a href="listaUsuarios.php"><b><right>Volver</right></b></a>
					<center>
						<form method="POST" action=""/>
							<h4>Escriba el nombre de usuario</h4>
							<input type="text" name="buscar""/>
							<input type="submit" name="submit"value="Buscar"/>
								<TABLE BORDER=1 CELLSPACING=1 CELLPADDING=1>
					<TR><TD><b><center>id Usuario</center></b></TD><TD><b><center>Nombre</center></b></TD><TD><b><center>Apellido</center></b></TD><TD><b><center> Tipo Usuario</center></b></TD><TD><b><center> Edad</center></b></TD><TD><b><center> Sexo </center></b></TD><TD><b><center> Carrera</center></b></TD><TD><b><center> Provincia</center></b></TD><TD><b><center> Email</center></b></TD><TD><b><center> Telefono </center></b></TD><TD><b><center> Contraseña </center></b></TD></TR>
					</center>
				<body>
				
					     <?php
							
								$busca=$_POST['buscar'];
								$conexion=mysql_connect($servidor,$usuario,$password);
								mysql_select_db($bd,$conexion);
								if($busca!="")
								{
									
									$busqueda=mysql_query("SELECT * FROM usuario WHERE nombre LIKE '%".$busca."%'");
									
									while($f=mysql_fetch_array($busqueda))
									{
										printf("<tr><td>%s</td><td>%s</td><td>%s</td><td>%s</td><td>%s</td><td>%s</td><td>%s</td><td>%s</td><td>%s</td><td>%s</td><td>%s</td></tr>",$f['idUsuario'],$f['nombre'],$f['apellido'],$f['tipo'],$f['edad'],$f['sexo'],$f['carrera'],$f['provincia'],$f['email'],$f['telefono'],$f['password']);
										echo"<br>";
										echo"<br>";
									}
									mysql_free_result($busqueda);
									mysql_close($conexion);
								}
								
								else
								{
									if($busca=="")
									{
										echo "Porfavor Introdusca un nombre para realizar la busqueda";
									}
								}
					     ?>
					</table>
				</form>
		</center>
		<?php	
			include("pie.php");
		?>
		</div>
		</div>
		</div>
	</body>
</html>
			
			