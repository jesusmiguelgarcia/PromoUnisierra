<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>

	<?php include("cssyjs.php");?>
	<meta charset="UTF-8">
	<title>Agregar Noticia</title>

</head>

<body>

	<div class="todo">
		<?php include("cabeza.php"); ?>
			<div  class="content">
				<div id="contenido" class="content_resize">
					<center>
					<form action="" method="post">

						Titulo:	<input type="text" name="titulo"><br>
						Noticia: <br><textarea rows="10" cols="50" name="descripcion"> </textarea><br><br>
						Imagen <input type = "file" name= "imagen"><br><br>
						<input type="submit" name="enviar" value="Agregar"><br><br>

					</form>
					</center>

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

<?php 
/*	$titulo = $_POST['titulo'];
	$descripcion = $_POST['descripcion'];
	$imagen = $_POST['enviar'];

	require('conexion.php');
		
		$conexion = mysql_connect($servidor,$usuario,$password); // conexion BD
		
		mysql_select_db($bd,$conexion);
		$sql= "INSERT INTO noticia (idNoticia, tituloNoticia, descripcion, imagen) VALUES (NULL,'". $titulo."','". $descripcion."','". $imagen."' )";
		$consulta = mysql_query($sql,$conexion); // realiza la consulta (instruccion,conexion a bd)*/
 ?>