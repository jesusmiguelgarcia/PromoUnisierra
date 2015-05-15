<?php session_start(); ?>
<!DOCTYPE html>
<html lang="es">
<head>
	<?php include("cssyjs.php");?>
	<meta charset="UTF-8">
	<title>Insertar Noticia</title>
</head>
<body>
	<div class="todo">
		<?php include("cabeza.php"); ?>
			<div  class="content">
				<div id="contenido" class="content_resize">
			
<!-- oepn form --> <form method="post" action="" enctype="multipart/form-data" name="form">
						<center>
							<table border="0" cellpadding="3" cellspacing="20"> 
								<tr>
									<td align="right">Titulo:</td>
									<td>
 <!--Titulo -->							<input type="text" name="titulo" size="48">
									</td>
 <!--Mostar img --> 					<td rowspan="2">Mostrar imagen examinada</td>
								</tr>
								<tr>
									<td valign="top">Descripcion:</td>
									<td rowspan="2">
 <!--Descripcion -->				<textarea name="descripcion" placeholder="Cuerpo de la noticia" cols="50" 										rows="10"></textarea>
									</td>
									
								</tr>
								<tr>
									<td></td>
									<td>
  <!-- examinar la imagen -->			<input type="file" name="miimagen">
 									</td>
								</tr>
								<tr>
									<td></td>
									<td>
										<center>
	  <!-- boton agregar -->				<input type="submit" name="agregar" value="Agregar">
										</center>
									</td>
									<td></td>
								</tr>
							</table>
						</center>
					</form>

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
	if(isset($_POST['agregar']))
	{
		require('conexion.php');
		$conexion = mysql_connect($servidor,$usuario,$password); // conexion BD
		mysql_select_db($bd,$conexion);

		$miimagen = $_FILES['miimagen']['tmp_name']; // El archivo se recibe en el vector $_FILES	 
		 // Ahora abro y leo la imagen como un archivo y agrego escape para evitar errores de dato.
		 $imagen = addslashes(fread(fopen($miimagen, "r"), filesize($miimagen)));
		 //echo $imagen . "<br>";
		 $formato = "jpg";
		  // Y, grabo la imágen en la base de datos en el item definido como BLOB
		 $consulta="INSERT INTO noticia (tituloNoticia, descripcion, imagen, fecha,Usuario_idUsuario)  
		 VALUES ('".$_POST['titulo']."','".$_POST['descripcion']."','".$imagen."','2015-05-05','1' )";
		 $result = mysql_query($consulta);
		 //echo $consulta;
	}
 ?>