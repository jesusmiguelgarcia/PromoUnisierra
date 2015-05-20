
?>
<html>
<head>
<title>Curricula</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

<?php 
include("cssyjs.php");
$idmateria=1;
if (isset($_GET["id"]))
 {
  $idmateria=$_GET['id'];
}
?>
</head>

<body>
<?php

include("cabeza.php");
 ?>


 <div class="content">
    <div class="content_resize">
      <div class="mainbar">
        <div class="article">

          <?php 
          require('conexion.php');
          $conexion = mysql_connect($servidor,$usuario,$password); // conexion BD

          mysql_select_db($bd,$conexion);

          $sql= "SELECT nombre, descripcion, video, sitioweb,idMateria FROM `materia` Where idMateria=".$idmateria; 
          mysql_query("SET NAMES 'utf8'");
          $consulta = mysql_query($sql,$conexion); 
          $resultado = mysql_fetch_array($consulta) ;
         //echo ($resultado['nombre'].$resultado['video'].$resultado['sitioweb']);

          
        ?>

       

<center>

<img src="curricula.png" width="844" height="686" border="0" usemap="#Map"> 
<map name="Map">
  <area shape="rect" coords="29,492,103,535" href="materias_ver.php?idMateria=6" target="_self" alt="etica">
  <area shape="rect" coords="29,441,102,483" href="materias_ver.php?idMateria=5" target="_self" alt="analisis">
  <area shape="rect" coords="30,340,102,382" href="materias_ver.php?idMateria=4" target="_self" alt="intro">
  <area shape="rect" coords="30,238,101,279" href="materias_ver.php?idMateria=3" target="_self" alt="fundamentos">
  <area shape="rect" coords="30,187,102,229" href="materias_ver.php?idMateria=2" target="_self" alt="logica">
  <area shape="rect" coords="29,135,102,178" href="materias_ver.php?idMateria=1" target="_self" alt="mate1">
  <area shape="rect" coords="283,43,563,60" href="www.unisierra.edu.mx" target="_self" alt="unisierra">
  <area shape="rect" coords="741,34,814,101" href="www.unisierra.edu.mx" target="_self" alt="unisierra">
  <area shape="rect" coords="30,35,103,102" href="www.unisierra.edu.mx" target="_self" alt="unisierra">
</map>
    
       

    

              </div>        
          </div>      
      </div>
  </div>


 <?php 
include("pie.php");
 ?>
