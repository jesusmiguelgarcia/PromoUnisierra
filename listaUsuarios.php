<?php
	
	session_start();
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


					<td><a href="formularioAgregar.php"><b><center>Nuevo Usuario</center></b></td>
					<td><a href="buscaUsuario.php"><b><center>Buscar Usuario</center></b></td>
					<td><a href="formularioBorrar.php"><b><center>Borrar Usuario</center></b></td>
					<td></td>
					<td></td>

					<td><left><a href="formularioLogin.php"><b><center>Salir</b></center></td></left>
				</tr>
			</table
			<br>
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
