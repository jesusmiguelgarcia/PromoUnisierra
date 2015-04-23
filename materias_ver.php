<html>
<head>
<title>Ayuda</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

<?php 
include("cssyjs.php");
include("conexion.php");
$idmateria=2;
 ?>
</head>

<body>
  <div class="todo">




<?php 
include("cabeza.php");

$conexion=mysql_connect($servidor,$usuario, $password);
	mysql_select_db($bd);//bd
	$sql="select nombre,descripcion,video,sitioweb from materia";
	$consulta=mysql_query($sql,$conexion);
	 $resultado = mysql_fetch_array($consulta);
	
 ?>



 <div class="content">
    <div class="content_resize">
          <div class="article">

          	diseño web
          
          	<?php

	
		echo "<h2>Nombre: ".$resultado['nombre']."</h2><p> Descripcion:<br>:"
		.$resultado["descripcion"].
		":<br><br><b>Video: </b><br>".$resultado['video']. "<b><br><br>Sitio Web:</b><br><br>".$resultado['sitioweb']."<br><br>";


		
	
 ?>





    </div>




        
  </div>
      
 
</div>

  
 <?php 
include("pie.php");
 ?>

 






 
	
