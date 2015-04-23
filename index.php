<!DOCTYPE html>
<html lang="es">
<head>
	<!-- <link rel="stylesheet" href="css/noticias.css"> -->
	<?php include("cssyjs.php");?>
	<meta charset="utf-8"/>
	<title>Noticias </title>
</head>
<body>
<div class="todo">
	<?php include("cabeza.php"); ?>
	<div  class="content">
		<div id="contenido" class="content_resize">

			<div id="noticias">

				<?php 
					require('conexion.php');
					$conexion = mysql_connect($servidor,$usuario,$password); // conexion BD

				 	mysql_select_db($bd,$conexion);

					$sql= "SELECT tituloNoticia, descripcion, fecha FROM `noticia` order by fecha desc"; // consulta a ejectuar

					$consulta = mysql_query($sql,$conexion); // realiza la consulta (instruccion,conexion a bd)
				?>

	 		<center> <table border="0" cellspacing="10" align="">
				
				<?php 
					while ($resultado = mysql_fetch_array($consulta)) 
					{	

				    	echo "<tr>
				    			<td colspan = '2'> 
				    				<h1>". $resultado['tituloNoticia']."</h1>
				    			</td>
				    		 </tr>";

				    	echo "<tr>
				    			<td>
				    				<img src='imagenes/no_imagen.jpg'>
				    			</td>
				    			<td>
				    				<p>". $resultado['descripcion'] ."<br> <b> Publicado el: :". $resultado['fecha']."</b></p>
				    			</td>
				    		  </tr>";
					}
				 ?>

			</table></center>

<!-- 				<table border="0" width="100%">
	<tr>
		<td><h1>Noticia 1:</h1>
			<table>
				<tr>
					<td rowspan="2"> <img src="imagenes/no_imagen.jpg"></td>
					<td><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p></td>
				</tr>	
			</table>
		</td>
		<td>&nbsp&nbsp&nbsp&nbsp</td>
		<td><h1>Noticia 4:</h1>
			<table>
				<tr>
					<td rowspan="2"> <img src="imagenes/no_imagen.jpg"></td>
					<td><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p></td>
				</tr>	
			</table>
		</td>
	</tr>
	<tr>
		<td><h1>Noticia 2:</h1>
			<table>
				<tr>
					<td rowspan="2"> <img src="imagenes/no_imagen.jpg"></td>
					<td><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p></td>
				</tr>	
			</table>
		</td>
		<td>&nbsp&nbsp&nbsp&nbsp</td>
		<td><h1>Noticia 5:</h1>
			<table>
				<tr>
					<td rowspan="2"> <img src="imagenes/no_imagen.jpg"></td>
					<td><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p></td>
				</tr>	
			</table>
		</td>
	</tr>
	<tr>
		<td><h1>Noticia 3:</h1>
			<table>
				<tr>
					<td rowspan="2"> <img src="imagenes/no_imagen.jpg"></td>
					<td><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p></td>
				</tr>	
			</table>
		</td>
		<td>&nbsp&nbsp&nbsp&nbsp</td>
		<td><h1>Noticia 6:</h1>
			<table>
				<tr>
					<td rowspan="2"> <img src="imagenes/no_imagen.jpg"></td>
					<td><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p></td>
				</tr>	
			</table>
		</td>
	</tr>
</table> -->
			</div>
		</div>
		<center>
			<div id="copyright">
			<?php include("pie.php"); ?>
			</div>
		</center>
	</div>
	</div>
</body>
</html>
