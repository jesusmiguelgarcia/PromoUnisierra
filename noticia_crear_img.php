	<?php
		require('conexion.php');
		$link=mysql_connect($servidor,$usuario,$password);
		mysql_select_db($bd,$link) OR DIE ("Error: No es posible establecer la conexi&oacute;n con la
		base de datos");
		//$sql = "SELECT imagen FROM noticia WHERE idNoticia = ".$resultado['idNoticia'];
		//$sql = "SELECT imagen FROM noticia WHERE idNoticia = ".$_GET['idNoticia'];
		$sql = "SELECT imagen FROM noticia WHERE idNoticia =".$_GET['idNoticia'];
		$result = mysql_query("$sql") or die("<b>Error:</b> Problem on Retrieving Image BLOB<br/>" .
		mysql_error());
		$row = mysql_fetch_array($result);
		$db_img = $row['imagen'];
		$type = "jpg";
		$db_img = imagecreatefromstring($db_img);
		header("Content-Type: image/jpeg");
		imagejpeg($db_img);
		imagedestroy($db_img);
	?>
