<html>
<head>
<title>ModificarMateria</title>
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
s

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

<?php 

if(isset($_POST["enviar"]))
{

             
              $sql="Update materia Set video='".$_POST['video']."',sitioweb='".$_POST['sitioweb']."',descripcion='".$_POST['descripcion']."' Where idmateria=".$_POST['idmateria'];             
              //echo $sql;
              $consulta = mysql_query($sql,$conexion);
              if ($consulta) 
              {
                echo "Actualizacion exitosa";
              }else
              {
                echo "El cambio no se realizo";
              }

              echo "<br><a href='materias_ver.php' >Ver Materias</a>";
  }
  else 
  {



 ?>

<form action="materias_editar.php" method="post" name="form">
<table>
    <tr><font face="Comic Sans MS,arial,verdana" size="8" color="orange"><?php echo "Materia ". $resultado['nombre'];?></font></tr>
    <tr>
    <br><br>
    <td>
        <font face="Arial" size="6" color="green">Video</font>
        <font face="Comic Sans MS,arial,verdana" size="4" color="orange">*</font> 
    <br>  
      <textarea name="video" rows="1" cols="50"> <?php echo $resultado['video'];?> </textarea><br>
    </td>
    </tr>
    <tr>
    <td>  
      <font face="Arial" size="6" color="green">Sitio Web</font>
      <font face="Comic Sans MS,arial,verdana" size="4" color="orange">*</font>
    <br>  
      <textarea name="sitioweb" rows="1" cols="50"><?php echo $resultado['sitioweb'];?></textarea>
    <br>
    </td>
    </tr>
    <tr>
    <td>
      <font face="Arial" size="6" color="green">Descripcion</font>
      <font face="Comic Sans MS,arial,verdana" size="4" color="orange">*</font>
    <br>  
      <textarea name="descripcion" rows="4" cols="50"><?php echo $resultado['descripcion'];?></textarea>
      <input type="hidden" name="idmateria" value="<?php echo $resultado['idMateria'];?>">
    </td>
    </tr>

    <tr>
    <br>
    <td>
        <font face="Comic Sans MS,arial,verdana" size="3" color="orange">*Campos Obligatorios</font>  
    </td>   
    </tr>

    <tr>

    <td>
    
      &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
      <input type="submit"  name="enviar" value="Guardar" class="boton">
      <input type="reset"   value="Cancelar" class="boton">
    </td>
    </tr>
  </tr>
</table>
</form>
<?php }//sierre de else ?>
</center>

      
       

    

  </div>        
  </div>
      
  </div>
    </div>


 <?php 
include("pie.php");
 ?>
