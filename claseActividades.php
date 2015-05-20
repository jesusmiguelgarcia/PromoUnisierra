<?php
class actividades {

	public $estado;
	public $encargado;
	public $acciones;
	public $fecha;
	public $hora;
	public $turno;
	public $x;


	function registrar($estado,$encargado,$acciones,$fecha,$hora,$turno,$x){
		include("conexion.php");

		$conexion = mysql_connect($servidor, $usuario, $password);
	    mysql_select_db($bd, $conexion) or die("No se puede seleccionar la base de datos.");	
	    mysql_query("INSERT INTO actividad (idActividad, estado, encargado, acciones, fecha, hora, turno, Usuario_idUsuario) VALUES (NULL,'".$estado."', '".$encargado."','".$acciones."','".$fecha."','".$hora."','".$turno."', '".$x."')" , $conexion);
    	header('LOCATION: actividades.php');
	}

	function eliminar($id){
		include("conexion.php");

		$conexion = mysql_connect($servidor, $usuario, $password);
    	mysql_select_db($bd, $conexion) or die("No se puede seleccionar la base de datos.");
		mysql_query("DELETE FROM actividad WHERE idActividad = '$id';", $conexion);
	}
}
?>