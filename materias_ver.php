
<?php 
include("conexion.php");
 ?>
 
	<?php

	$conexion=mysql_connect($servidor,$usuario, $password);
	mysql_select_db($bd);//bd
	$sql="select nombre,descripcion,video,sitioweb from materia";
	$consulta=mysql_query($sql,$conexion);
	 $resultado = mysql_fetch_array($consulta);
	
		echo "<b>Nombre: </b>".$resultado['nombre']."<b><br><br> Descripcion:<br> </b>:"
		.$resultado["descripcion"].
		":<br><br><b>Video: </b><br>".$resultado['video']. "<b><br><br>Sitio Web:</b><br><br><br>".$resultado['sitioweb']."<br><br>";

		
	
 ?>

