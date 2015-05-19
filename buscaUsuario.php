<html>
	<head>
		<?php include("CSSyJS.php");?>
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
									echo "<b>id Usuario:</b> ".$f['idUsuario'].'&nbsp;&nbsp;<br>';
									echo "<b>Nombre de Usuario:</b> ".$f['nombre'].'&nbsp;&nbsp;<br>';
									echo "<b>Apellido: </b>".$f['apellido'].'&nbsp;&nbsp;<br>';
									echo "<b>Tipo: </b>".$f['tipo'].'&nbsp;&nbsp;<br>';
									echo "<b>Edad: </b>".$f['edad'].'&nbsp;&nbsp;<br>';
									echo "<b>Sexo: </b>".$f['sexo'].'&nbsp;&nbsp;<br>';
									echo "<b>Carrera: </b>".$f['carrera'].'&nbsp;&nbsp;<br>';
									echo "<b>Provincia: </b>".$f['provincia'].'&nbsp;&nbsp;<br>';
									echo "<b>Email: </b>".$f['email'].'&nbsp;&nbsp;<br>';
									echo "<b>Telefono: </b>".$f['telefono'].'&nbsp;&nbsp;<br>';
									echo "<b>Password: </b>".$f['password'].'&nbsp;&nbsp;<br>';

									echo"<br>";
									echo"<br>";
								}
							}
							else
							{
								if($busca=="")
								{
									echo "Porfavor Introdusca un nombre para realizar la busqueda";
								}
							}
					?>
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
			
			