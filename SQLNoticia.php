<?php 
	class SQLNoticia{

		private $resul = "";

		public function Select($campo,$id){
			require('conexion.php');
			$conexion = mysql_connect($servidor,$usuario,$password); // conexion BD
			mysql_select_db($bd,$conexion);
			$sql= "SELECT ".$campo." FROM noticia where IdNoticia =".$id;

			$consulta = mysql_query($sql,$conexion); 

			$resultado = mysql_fetch_array($consulta);
			
				$this->resul=$resultado["$campo"];
			
			//$this->resul=$sql;
			return $this->resul;

		}
	}

 ?>