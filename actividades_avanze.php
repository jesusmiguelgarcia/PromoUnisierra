<?php 
session_start(); 
require_once("conexion.php");

    $conexion = mysql_connect($servidor, $usuario, $password);
    mysql_select_db($bd, $conexion) or die("No se puede seleccionar la base de datos.");

if(isset($_GET['id'])){
    $id=$_GET['id'];
    $result = mysql_query("SELECT * FROM actividad WHERE idActividad = $id", $conexion);
    $row = mysql_fetch_array($result);

} else if (isset($_POST['modificar'])){
    $id = $_POST['id'];
    $estado =$_POST['estado'];
    $encargado =$_POST['encargado'];
    $fecha =$_POST['fecha'];
    $hora =$_POST['hora']; 
    $turno = $_POST['turno'];
    $acciones =$_POST['acciones'];
    mysql_query("UPDATE actividad SET estado = '$estado', encargado = '$encargado', fecha = '$fecha', hora = '$hora', turno = '$turno', acciones = '$acciones' WHERE idactividad = '$id'", $conexion);
    header('LOCATION: actividades.php');
}else header('LOCATION: actividades.php');
?>
<html>
<?php include("cssyjs.php");?>
<style type="text/css">
*{border-width: 0px;}
</style>
<head>
    <meta charset="utf-8">
    <title>Ver Actividades</title>
    <script type="text/javascript">
        function valida (form){
            var error = false;
            if(form.encargado.value == "" ||  form.encargado.value.length >15){
                document.getElementById('errorEncargado').innerHTML = "Error en Encargado";
                error = true;
            }else{
                document.getElementById('errorEncargado').innerHTML = "";
            }
            if(form.fecha.value.length != 10){
                document.getElementById('errorFecha').innerHTML = "Error en Fecha";
                error = true;
            }else{
                document.getElementById('errorFecha').innerHTML = "";
            }
            if(form.hora.value.length != 5 & form.hora.value.length != 8){
                document.getElementById('errorHora').innerHTML = "Error en Hora";
                error = true;
            }else{
                document.getElementById('errorHora').innerHTML = "";
            }
            if(form.acciones.value.length > 100 || form.acciones.value == ""){
                document.getElementById('errorAcciones').innerHTML = "Error en Acciones";
                error = true;
            }else{
                document.getElementById('errorAcciones').innerHTML = "";
            }
           if (error==true) return false; else return true;
        }
    </script>
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

<table  align="center" cellspacing=1 cellpadding=1 width="100%"  border="0">
    <tr>
        <td align="center">
            <?php require_once("subMenu_actividades.php");?>
        </td>
    </tr>
    <tr>
        
        <td valign="top" align="center"> 
            <form method="POST" action="actividades_avanze.php" onsubmit="return valida(this);">
                <table  align="center" cellspacing=1 cellpadding=1 width="80%">
        <tr> <tr bgcolor= "#36B911">
        <TABLE align="center">
        <TR> 
        <input type="hidden" value="<?php echo $row['idActividad']; ?>" name="id">
            <Th style="color: #FFFFFF; background-color: #36B911">Estado</Th>
            <TD>
            <SELECT name="estado" style="width: 186">
            <?php 
            if($row['estado']== "Completo"){?>
                <OPTION VALUE="Incompleto">Incompleto</OPTION>
                <OPTION VALUE="Completo" SELECTED>Completo</OPTION> <?php
            }else {?>
                <OPTION VALUE="Incompleto" SELECTED>Incompleto</OPTION>
                <OPTION VALUE="Completo" >Completo</OPTION> <?php
            }
            ?>  
            </SELECT>
            </TD>
        </TR>
        <TR>
            <Th style="color: #FFFFFF; background-color: #36B911" >Encargado</TH>
            <TD>
            <INPUT type=text name="encargado" value="<?php echo $row['encargado']; ?>" size="15">
            <font color="red">
            <div id="errorEncargado" align="center"></div>
            </font>
            </TD>
        </TR>
        <TR>
            <Th style="color: #FFFFFF; background-color: #36B911">Fecha</Th>
            <TD>
            <INPUT type=text name="fecha" value="<?php echo $row['fecha']; ?>" placeholder="AAAA/MM/DD" size="15">
            <font color="red">
            <div id="errorFecha" align="center"></div>
            </font>
            </TD>
        </TR>
        <TR> 
            <Th style="color: #FFFFFF; background-color: #36B911">Hora</Th>
            <TD >
                <INPUT type=text name="hora" value="<?php echo $row['hora']; ?>" placeholder="HH:MM" size="9">
                <SELECT name="turno" style="width: 49">
                    <?php 
                    if($row['turno']== "pm"){?>
                        <OPTION VALUE="am">am</OPTION>
                        <OPTION VALUE="pm" SELECTED>pm</OPTION> <?php
                    }else {?>
                        <OPTION VALUE="am" SELECTED>am</OPTION>
                        <OPTION VALUE="pm" >pm</OPTION> <?php
                    }
                    ?>
                </SELECT>
                <font color="red">
            <div id="errorHora" align="center"></div>
            </font>
            </TD>
        </TR>
        <TR>
            <Th style="color: #FFFFFF; background-color: #36B911">Acciones</Th>
            <TD>
            <TEXTAREA rows="3" name="acciones" cols="24" placeholder="Describa las acciones..."><?php echo $row['acciones']; ?></TEXTAREA>
            <font color="red">
            <div id="errorAcciones" align="center"></div>
            </font>
            </TD>
        </TR>
        <TR>
            <TD align="center" COLSPAN=2>
            <INPUT style="background-color: #ED8B29" type="submit" value="Modificar" name="modificar">
            <a href="actividades.php"><INPUT style="background-color: #ED8B29" type="button" value="Cancelar"></a>
            </TD>
        </TR>
        </TABLE>
            </form>
        </td>
    </tr>
</table>
<?php require_once("pie.php");?>
</body>
</html>