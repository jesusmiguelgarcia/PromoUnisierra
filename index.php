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
							require('conexion.php');
							$conexion = mysql_connect($servidor,$usuario,$password); // conexion BD

						 	mysql_select_db($bd,$conexion);

							$sql= "SELECT idNoticia, tituloNoticia, descripcion, fecha, imagen FROM `noticia` order by fecha desc"; // consulta a ejectuar

							$consulta = mysql_query($sql,$conexion); // realiza la consulta (instruccion,conexion a bd)
						?>

			 			<center> <table border="0" cellspacing="10" align="">
						
						<?php 
							while ($resultado = mysql_fetch_array($consulta)) 
							{	
								$id = $resultado['idNoticia'];

						    	echo "<tr>
						    			<td colspan = '2'> 
						    				<h1>". $resultado['tituloNoticia']."</h1>
						    			</td>
						    		 </tr>";

						    	echo "<tr>
						    			<td>";
						 ?>
						 <?php echo "<img src='noticia_crear_img.php?idNoticia=".$resultado[4]."'>"; ?>
					
						<?php
									echo "
						    			
						    			</td>
						    			<td>
						    				<h3>". $resultado['descripcion'] ."<br> <b>Publicado el: ". $resultado['fecha']."</b></h3>
												<a href = 'noticia_detalle.php?id=$id'> ver mas </a>
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