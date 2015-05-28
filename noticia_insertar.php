<?php session_start(); 
	include('SQLNoticia.php');

	$c = new SQLNoticia();
?>
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
									<?php 
										if(isset($_POST['editar']))									
											echo"<input type='text' name='titulo' size='48' value='".$c->Select("tituloNoticia",$_GET['id'])."' >";
										else
											echo"<input type='text' name='titulo' size='48'>";
									 ?>
 <!--Titulo -->							<!-- <input type="text" name="titulo" size="48"> -->
									</td>
 <!--Mostar img --> 					<td rowspan="2">Mostrar imagen examinada</td>
								</tr>
								<tr>
									<td valign="top">Descripcion:</td>
									<td rowspan="2">
									<?php 
										if(isset($_POST['editar']))		

										echo"<textarea name='descripcion' placeholder='Cuerpo de la noticia' cols='50' rows='10'>".$c->Select("descripcion",$_GET['id'])."</textarea>";
										else									
											echo"<textarea name='descripcion' placeholder='Cuerpo de la noticia' cols='50' rows='10'></textarea>";
									?>
 <!--Descripcion -->				<!-- <textarea name="descripcion" placeholder="Cuerpo de la noticia" cols="50" 										rows="10"></textarea> -->
									</td>
									<?php $fecha = date("Y"."-"."m"."-"."d"); ?>
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
										<?php if(isset($_POST['editar'])) 
											{
												echo "<input type='submit' name='update' value='Actualizar'>";
											}else{
												echo "<input type='submit' name='agregar' value='Agregar'>";
											}
										?>
	  <!-- boton agregar -->				<!-- <input type="submit" name="agregar" value="Agregar"> -->
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
		 $consulta="INSERT INTO noticia (tituloNoticia, descripcion, imagen, fecha, Usuario_idUsuario)  
		 VALUES ('".$_POST['titulo']."','".$_POST['descripcion']."','".$imagen."','".$fecha."','1' )";
		 $result = mysql_query($consulta);
		 //echo $consulta;
		 header('location:index.php');
	}

	if(isset($_POST['update']))
	{
		require('conexion.php');
		$conexion = mysql_connect($servidor,$usuario,$password); 
		mysql_select_db($bd,$conexion);


		if(isset($_POST['miimagen']))
		{
			$miimagen = $_FILES['miimagen']['tmp_name']; 
			$imagen = addslashes(fread(fopen($miimagen, "r"), filesize($miimagen)));
			$formato = "jpg";

			$update = "UPDATE noticia SET tituloNoticia ='".$_POST['titulo']."',descripcion='".$_POST['descripcion']."',imagen='".$imagen."',fecha='".$fecha."' WHERE idNoticia=".$_GET['id'];			
			$result = mysql_query($update);
			//echo $update;
		}else{
			$update = "UPDATE noticia SET tituloNoticia ='".$_POST['titulo']."',descripcion='".$_POST['descripcion']."',fecha='".$fecha."' WHERE idNoticia=".$_GET['id'];			
			$result = mysql_query($update);
		}	
		header('location:index.php');
	}	
 ?>