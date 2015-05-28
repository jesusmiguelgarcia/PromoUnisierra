<?php
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

	require('conexion.php');
	$conexion=mysql_connect($servidor,$usuario,$password);  //conexion bd
	mysql_select_db($bd,$conexion);
	$result=mysql_query("SELECT * FROM usuario", $conexion);
	
?>
<html>
	<head>
	<?php include("CSSyJS.php");?>
	<meta charset="utf-8"/>
	<h1>Alumnos</h1>
	<body>
	<div class ="todo">
	<div class="content">
		<?php
			include("cabeza.php");
		?>
		<div class="content_resize">
		<center>
			<table>
				<tr>
					<td><a href="formularioAgregar.php"><b><center>Nuevo Usuario</center></b></td>
					<td><a href="buscaUsuario.php"><b><center>Buscar Usuario</center></b></td>
					<td><a href="formularioBorrar.php"><b><center>Borrar Usuario</center></b></td>
					<td><a href="editarUsuario.php"><b><center>Editar Usuario</center></b></td>
					<td></td>
					<td></td>

					<td><left><a href="salir.php"><b><center>Salir</b></center></td></left>
				</tr>
			</table
			<br>
			<br>
			<TABLE BORDER=1 CELLSPACING=1 CELLPADDING=1>
					<TR><TD><b><center>id Usuario</center></b></TD><TD><b><center>Nombre</center></b></TD><TD><b><center>Apellido</center></b></TD><TD><b><center> Tipo Usuario</center></b></TD><TD><b><center> Edad</center></b></TD><TD><b><center> Sexo </center></b></TD><TD><b><center> Carrera</center></b></TD><TD><b><center> Provincia</center></b></TD><TD><b><center> Email</center></b></TD><TD><b><center> Telefono </center></b></TD><TD><b><center> Contraseña </center></b></TD></TR>
			<?php
			
					while($row=mysql_fetch_array($result))
					{
						
						printf("<tr><td>%s</td><td>%s</td><td>%s</td><td>%s</td><td>%s</td><td>%s</td><td>%s</td><td>%s</td><td>%s</td><td>%s</td><td>%s</td></tr>",$row['idUsuario'],$row['nombre'],$row['apellido'],$row['tipo'],$row['edad'],$row['sexo'],$row['carrera'],$row['provincia'],$row['email'],$row['telefono'],$row['password']);
					}
					mysql_free_result($result);
					
					mysql_close($conexion);
				?>
			</table>
		</center>
	
		</div>
		<?php
				include("pie.php");