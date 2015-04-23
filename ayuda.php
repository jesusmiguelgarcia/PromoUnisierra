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

$conexion= mysql_connect($servidor,$usuario,$password);
mysql_select_db($bd);
$sql="select * from materia where idmateria=".$idmateria;
$resultado=mysql_query($sql,$conexion);
$materias=mysql_fetch_row($resultado);

 ?>



 <div class="content">
    <div class="content_resize">
          <div class="article">


          <h2><span>Mike</span></h2><div class="clr"></div>
          <p><span class="date">March 16, 2018</span> &nbsp;|&nbsp Posted by <a href="#">Owner</a> &nbsp;|&nbsp; Filed under <a href="#">templates</a>, <a href="#">internet</a> <a href="#" class="com">Comments (11) &raquo;</a></p>
          <img src="imagenes/mike.jpg"  height="199" alt="image" />
          <p>This is a free CSS website template by <a href="http://www.rocketwebsitetemplates.com/" title="Website Templates">RocketWebsiteTemplates.com</a>. This 
work is distributed under the <a rel="license" href="http://creativecommons.org/licenses/by/3.0/">Creative Commons Attribution 3.0 License</a>, 
which means that you are free to use it for any personal or commercial purpose provided you credit me in the form of a link back to <a href="http://www.rocketwebsitetemplates.com/" title="Website Templates">RocketWebsiteTemplates.com</a>.</p>
  <p class="spec"><a href="#" class="rm">Read more &raquo;</a></p>
  <p> 
    <?php  
    echo "Primer usuario en BD: ".$usuarios[1];
    ?>
  <p>
 Usuarios

 Noticias

 Actividades

 Graficos

 Desarrolladores: fotos
 jorge
 jacel
 yorlenis
 juan
 jaime
 martin
 mike

 finaliza funcionalidad

 
    </div>


   <div class="article">

          
          <h2><span>Yorlenis</span></h2>
          <div class="clr"></div>
          <p><span class="date">March 16, 2018</span> &nbsp;|&nbsp Posted by <a href="#">Owner</a> &nbsp;|&nbsp; Filed under <a href="#">templates</a>, <a href="#">internet</a> <a href="#" class="com">Comments (11) &raquo;</a></p>
          <img src="imagenes/yorlenis.jpg"  height="199" alt="image" />

    </div>
    <div class="clr"></div>
    <div class="article">

          <h2>Matematicas 1</h2>
          <div class="clr"></div>
          
          <p><b>Descripcion </b> <br> Se ven conceptos basicos de matematicas
          <br><iframe width="560" height="315" src="https://www.youtube.com/embed/51XAEDHdMQY" frameborder="0" allowfullscreen></iframe>
          </p>

    </div>



 <div class="article">

<?php $variable_descripcion="info de mate basica";

$variable_video="https://www.youtube.com/embed/51XAEDHdMQY";

?>

          <h2><span><?php echo $materias[1]; ?></span></h2>
          <div class="clr"></div>
          
          <p>Descripcion  <input type="text" value="<?php echo $materias[2]; ?>"
          <br> Video  <input type="text" value="<?php echo $materias[3]; ?>"<br>
         <input type="submit">
          </p>

    </div>




        
  </div>
      
 
</div>

  
 <?php 
include("pie.php");
 ?>

 