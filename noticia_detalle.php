<!DOCTYPE html>
<html lang="es">

	<head>
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
							$idNoticia = $_GET['id'];
							require('conexion.php');
							$conexion = mysql_connect($servidor,$usuario,$password); // conexion BD

						 	mysql_select_db($bd,$conexion);

							$sql= "SELECT tituloNoticia, descripcion, fecha FROM `noticia` WHERE idNoticia= '$idNoticia' "; // consulta a ejectuar

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
						    				<h3>". $resultado['descripcion'] ."<br> <b>Publicado el: ". $resultado['fecha']."</b></h3>
						    			</td>
						    		  </tr>";
							}
						 ?>

						</table></center>
						
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
