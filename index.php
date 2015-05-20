<?php session_start(); ?>
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

/*Consulta SQL*/				$sql= "SELECT idNoticia, tituloNoticia, descripcion, fecha, imagen FROM `noticia` order by fecha desc"; // consulta a ejectuar

							$consulta = mysql_query($sql,$conexion); // realiza la consulta (instruccion,conexion a bd)
						?>

			 			<center> <table border="0" cellspacing="10" align="">
			 			<?php 
			 					if(isset($_SESSION['nombre'])){
									if($_SESSION['tipo'] == 1){
										echo "
										<form action='noticia_insertar.php' method='post'>
												<input type='submit' name='nuevaNoticia' , value='Nueva Noticia'>
										</form> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;";

										echo "Usuario: ".$_SESSION['Nombre'];									
									}
									else
										echo"Usuario: ".$_SESSION['Nombre'];
								}
			 			 ?>
						
<!-- resultados SQL -->	<?php 
							while ($resultado = mysql_fetch_array($consulta)) 
							{	
								$id = $resultado['idNoticia'];

/*Poner titulo noticia*/		echo "<tr>
						    			<td colspan = '2'> 
						    				<h1>". $resultado['tituloNoticia']."</h1>
						    			</td>
						    		 </tr>";

/*pone imagen de noticia*/    	echo "<tr>
						    			<td>";
						 ?>
						<img src="create_img.php?idpic=<?php echo $id; ?> " WIDTH=200 HEIGHT=100>
					
							<?php
/*Pone cuerpo de la noticia*/  echo "
						    		</td>
						    			<td>
						    				<h3>". $resultado['descripcion'] ."<br> <b>Publicado el: ". $resultado['fecha']."</b></h3>
						    				<form action='noticia_detalle.php?id=$id' method='post'>
												<input type='submit' name='ver' , value='Ver'>
											</form>";
												

												if(isset($_SESSION['Nombre'])){
													if($_SESSION['Tipo'] == 1){
														echo " 
						    				<form action='noticia_insertar.php?id=$id' method='post'>
												<input type='submit' name='editar' , value='Editar'>
											</form>
											<form action='noticia_eliminar.php?id=$id' method='post'>
												<input type='submit' name='eliminar' , value='Eliminar'>
											</form>";
													
													}
												}

										echo "
						    			</td>
						    		</tr>";
							}//end While
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