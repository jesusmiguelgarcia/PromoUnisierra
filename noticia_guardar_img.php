<?php
	require('conexion.php');
	$link=mysql_connect($servidor,$usuario,$password);
	mysql_select_db($bd,$link);
	$miimagen = $_FILES['miimagen']['tmp_name']; // El archivo se recibe en el vector $_FILES	 
	//echo "Sube a BD";
	 // Ahora abro y leo la imagen como un archivo y agrego escape para evitar errores de dato.
	 $imagen = addslashes(fread(fopen($miimagen, "r"), filesize($miimagen)));
	 echo $imagen . "<br>";
	 $formato = "jpg";
	  // Y, grabo la imágen en la base de datos en el item definido como BLOB
	 $consulta="INSERT INTO noticia (caption, img) VALUES ('".$formato."','".$imagen."')";
	 $result = mysql_query($consulta);
 ?>