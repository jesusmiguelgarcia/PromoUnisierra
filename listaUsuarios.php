<?php
	function conectarse()
	{
		if(!($link=mysql_connect("localhost","root","")))
		{
			echo "Error conectando con la base de datos";
			exit();
		}
		if(!(mysql_select_db("iscpromocion",$link)))
		{
			echo "Error seleccionando la base de datos";
			exit();
		}
		return $link;
	}
	$link=conectarse();
	
	$result=mysql_query("SELECT * FROM usuario",$link);
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
					<td><a href="formulario.php"><b><center>Nuevo Usuario</center></b></td>
					<td><a href="buscaUsuario.php"><b><center>Buscar Usuario</center></b></td>
					<td><a href="formularioBorrar.php"><b><center>Borrar Usuario</center></b></td>
					<td></td>
					<td></td>
					<td><left><a href="formularioLogin.php"><b><center>Salir</b></center></td></left>
				</tr>
			</table
			<br>
			<br>
			<TABLE BORDER=1 CELLSPACING=1 CELLPADDING=1>
					<TR><TD><b><center>id Usuario</center></b></TD><TD><b><center>Nombre</center></b></TD><TD><b><center>Apellido</center></b></TD><TD><b><center> Tipo Usuario</center></b></TD><TD><b><center> Edad</center></b></TD><TD><b><center> Sexo </center></b></TD><TD><b><center> Carrera</center></b></TD><TD><b><center> Provincia</center></b></TD><TD><b><center> Email</center></b></TD><TD><b><center> Telefono </center></b></TD><TD><b><center> Contraseña </center></b></TD></TR>
				<?php
					while($row=mysql_fetch_array($result))
					{
						printf("<tr><td>%s</td><td>%s</td><td>%s</td><td>%s</td><td>%s</td><td>%s</td><td>%s</td><td>%s</td><td>%s</td><td>%s</td><td>%s</td></tr>",$row['idUsuario'],$row['nombre'],$row['apellido'],$row['tipo'],$row['edad'],$row['sexo'],$row['carrera'],$row['provincia'],$row['email'],$row['telefono'],$row['contrasena']);
					}
					mysql_free_result($result);
					
					mysql_close($link);
				?>
			</table>
		</center>
		
		</div>
		<?php
				include("pie.php");
		?>
		</div>
		</div>
	</body>
</html>