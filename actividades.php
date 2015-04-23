<?php 
require_once("conexion.php");
//ver 1.0

    $conexion = mysql_connect($servidor, $usuario, $password);
    mysql_select_db($bd, $conexion) or die("No se puede seleccionar la base de datos.");

if(isset($_GET['eliminar'])){
    $id = $_GET['eliminar'];
    query("DELETE FROM actividad WHERE idActividad = '$id';");
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
    
    <div class="todo">
    <div  class="content">
        <div id="encabezado" >
            <div id="logo">
                <!-- <img src="http://www.alumnosonline.com/universidades/unisierra/logo_unisierra.jpg"> -->
            </div>
        </div>

    <?php include("cabeza.php"); ?>

        <div id="contenido" class="content_resize">

<table  align="center"  cellspacing=1 cellpadding=1 width="100%" >

    <tr>
        <td valign="top">
            <?php require_once("subMenu_actividades.php");?>
        </td>
        <td valign="top"> <br><br>
            <table  align="center"  cellspacing=1 cellpadding=1 width="80%">
            <tr bgcolor= "#36B911">
                <th scope="col">Estado</th>
                <th scope="col">Encargado</th>
                <th scope="col">Acciones</th>
                <th scope="col">Fecha</th>
                <th scope="col">Hora</th>
                <th scope="col">Herramientas</th>
            </tr>
            <?php 
            $result = mysql_query ("SELECT * FROM actividad", $conexion);
                while ($row = mysql_fetch_array($result)) {
                    ?>
                    <tr  align="center" bgcolor= "#A8ABA7">
                    <td><?php if($row['estado']== "Completo") echo "<font color='green'>$row[1]</font>"; else echo "<font color='red'>$row[1]</font>"; ?></td>
                    <td><?php echo $row['encargado']; ?></td>
                    <td><?php echo $row['acciones']; ?></td>
                    <td><?php echo $row['fecha']; ?></td>
                    <td><?php echo $row['hora']." ".$row['turno']; ?></td>
                    <td><a href="actividades_avanze.php?id=<?php echo $row['idactividad']; ?>"><input style="color: #FFFFFF; background-color: #1C1B1B"  TYPE="button" VALUE="Avanze"></a>
                        <a href="actividades.php?eliminar=<?php echo $row['idactividad']; ?>"><input style="color: #FFFFFF; background-color: #1C1B1B"  TYPE="button" VALUE="Eliminar"></a></td>
                    </tr>
                    <?php
                }
            ?>
         </td>
    </tr>
</table>
<?php require_once("pie.php");?>
</body>
</html>