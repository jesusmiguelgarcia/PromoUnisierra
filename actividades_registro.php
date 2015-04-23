<?php 
require_once("conexion.php");

    $conexion = mysql_connect($servidor, $usuario, $password);
    mysql_select_db($bd, $conexion) or die("No se puede seleccionar la base de datos.");

if(isset($_POST['registrar'])){
    $estado =$_POST['estado'];
    $encargado =$_POST['encargado'];
    $fecha =$_POST['fecha'];
    $hora =$_POST['hora']; $turno = $_POST['turno'];
    $acciones =$_POST['acciones'];
    $x=1;

    mysql_query("INSERT INTO actividad (idActividad, estado, encargado, acciones, fecha, hora, turno, Usuario_idUsuario) VALUES (NULL,".$estado."', '".$encargado."','".$acciones."','".$fecha."','".$hora."','".$turno."','".$x."')", $conexion);
    header('LOCATION: actividades.php');
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

<table  align="center" cellspacing=1 cellpadding=1 width="100%"  border="0">
    <tr>
        <td valign="top" width="35%" align="left">
            <?php require_once("subMenu_actividades.php");?>
        </td>
        <td valign="top" align="left"> <br><br>
            <form method="POST" action="actividades_registro.php">
                <table  align="left" cellspacing=1 cellpadding=1 width="80%">
        <tr> <tr bgcolor= "#36B911">
        <TABLE align="left" border="1">
        <TR> 
            <Th style="color: #FFFFFF; background-color: #36B911">Estado</Th>
            <TD>
            <SELECT name="estado" style="width: 186">
                <OPTION VALUE="Incompleto">Incompleto</OPTION>
                <OPTION VALUE="Completo">Completo</OPTION>
            </SELECT>
            </TD>
        </TR>
        <TR>
            <Th style="color: #FFFFFF; background-color: #36B911" >Encargado</TH>
            <TD >
            <INPUT type=text name="encargado"  size="15">
            </TD>
        </TR>
        <TR>
            <Th style="color: #FFFFFF; background-color: #36B911">Fecha</Th>
            <TD >
            <INPUT type=text name="fecha" placeholder="AAAA-MM-DD"  size="15">
            </TD>
        </TR>
        <TR> 
            <Th style="color: #FFFFFF; background-color: #36B911">Hora</Th>
            <TD >
                <INPUT type=text name="hora" placeholder="HH:MM" size="9">
                <SELECT name="turno" style="width: 49">
                    <OPTION VALUE="am">am</OPTION>
                    <OPTION VALUE="pm">pm</OPTION>
                </SELECT>
            </TD>
        </TR>
        <TR>
            <Th style="color: #FFFFFF; background-color: #36B911">Acciones</Th>
            <TD >
            <TEXTAREA rows="3" name="acciones" cols="24" placeholder="Describa las acciones..."></TEXTAREA>
            </TD>
        </TR>
        <TR>
            <TD align="center" colspan="2">
            <INPUT style="background-color: #ED8B29" type="submit" value="Registrar" name="registrar">
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