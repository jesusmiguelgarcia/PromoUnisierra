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
	session_star();
	require('conexion.php');
	$conexion=mysql_connect($servidor,$usuario,$password);  //conexion bd
	mysql_select_db($bd,$conexion);
	$result=mysql_query("SELECT * FROM usuario", $conexion);
	
?>
<html>
	<head>
	<center>
	<table>
	<tr>

					<td><a href="formulario.php"><b><center>Nuevo Usuario</center></b></td>
					<td><a href="formularioAgregar.php"><b><center>Nuevo Usuario</center></b></td>
					<td><a href="buscaUsuario.php"><b><center>Buscar Usuario</center></b></td>
					<td><a href="formularioBorrar.php"><b><center>Borrar Usuario</center></b></td>
					<td></td>
					<td></td>
					<td><left><a href="Login.php"><b><center>Salir</b></center></td></left>
					<td><left><a href="formularioLogin.php"><b><center>Salir</b></center></td></left>
				</tr>
			</table
			<br>
			<?php
			
					while($row=mysql_fetch_array($result))
					{
						printf("<tr><td>%s</td><td>%s</td><td>%s</td><td>%s</td><td>%s</td><td>%s</td><td>%s</td><td>%s</td><td>%s</td><td>%s</td><td>%s</td></tr>",$row['idUsuario'],$row['nombre'],$row['apellido'],$row['tipo'],$row['edad'],$row['sexo'],$row['carrera'],$row['provincia'],$row['email'],$row['telefono'],$row['contrasena']);
						printf("<tr><td>%s</td><td>%s</td><td>%s</td><td>%s</td><td>%s</td><td>%s</td><td>%s</td><td>%s</td><td>%s</td><td>%s</td><td>%s</td></tr>",$row['idUsuario'],$row['nombre'],$row['apellido'],$row['tipo'],$row['edad'],$row['sexo'],$row['carrera'],$row['provincia'],$row['email'],$row['telefono'],$row['password']);
					}
					mysql_free_result($result);
					
					mysql_close($link);
					mysql_close($conexion);
				?>
			</table>
		</center>
		
		</div>
		<?php
				include("pie.php");
