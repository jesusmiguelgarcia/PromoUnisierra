<?php
session_start(); 
require_once("conexion.php");
require_once("claseActividades.php");

    $conexion = mysql_connect($servidor, $usuario, $password);
    mysql_select_db($bd, $conexion) or die("No se puede seleccionar la base de datos.");

if(isset($_GET['eliminar'])){
    $id = $_GET['eliminar'];
    $acti = new actividades();
    $acti->eliminar($id);
}

?>
<html>
<?php include("cssyjs.php");?>
<style type="text/css">
*{border-width: 0px;}
</style>
<head>
    <meta charset="utf-8">
    <title>Ver Actividades</title>
</head>
    <body>
    <div class="todo">
    <div  class="content">
        <div id="encabezado" >
            <div id="logo">
                <!-- <img src="http://www.alumnosonline.com/universidades/unisierra/logo_unisierra.jpg"> -->
            </div>
        </div>

    <?php include("cabeza.php"); ?>

        <div id="contenido" class="content_resize">

<table  align="center"  cellspacing=1 cellpadding=1 width="100%" border="2" >
<tr><td align="center"><?php if(isset($_SESSION['nombre']))echo"<h1>Bienvenido ".$_SESSION['nombre']."</h1><br>"; ?></td></tr>
<?php if(isset($_SESSION['tipo'])){if($_SESSION['tipo']==1){ ?>
<tr>
    <td align="center">
        
        <?php require_once("subMenu_actividades.php"); ?>
    </td>
</tr>
<?php }} ?>
    <tr>
        
        <td valign="top">
            
            <table  align="center"  cellspacing=1 cellpadding=1 width="80%">
            <tr bgcolor= "#36B911">
                <th scope="col">Estado</th>
                <th scope="col">Encargado</th>
                <th scope="col">Acciones</th>
                <th scope="col">Fecha</th>
                <th scope="col">Hora</th>
                <?php if(isset($_SESSION['tipo'])){if($_SESSION['tipo']==1){ ?>
                <th scope="col">Herramientas</th>
                <?php }} ?>
            </tr>
            <?php 
            $result = mysql_query ("SELECT * FROM actividad", $conexion);
                while ($row = mysql_fetch_array($result)) {
                    ?>
                    <tr  align="center" bgcolor= "">
                    <td><?php if($row['estado']== "Completo") echo "<font color='green'>$row[1]</font>"; else echo "<font color='red'>$row[1]</font>"; ?></td>
                    <td><?php echo $row['encargado']; ?></td>
                    <td><?php echo $row['acciones']; ?></td>
                    <td><?php echo $row['fecha']; ?></td>
                    <td><?php echo $row['hora']." ".$row['turno']; ?></td>

                    <?php if(isset($_SESSION['tipo'])){if($_SESSION['tipo']==1){ ?>
                    <td><a href="actividades_avanze.php?id=<?php echo $row['idActividad']; ?>"><input style="color: #FFFFFF; background-color: #1C1B1B"  TYPE="button" VALUE="Avanze"></a>
                        <a href="actividades.php?eliminar=<?php echo $row['idActividad']; ?>"><input style="color: #FFFFFF; background-color: #1C1B1B"  TYPE="button" VALUE="Eliminar"></a></td>
                    <?php }} ?>
                    </tr>
                    
                <?php } ?>
            </table>
         </td>
    </tr>
</table>
<?php require_once("pie.php"); ?>
</body>
</html>