<html>
	<head>
		<title>Borrar Usuario</title>
	</head>
	<body><center>
			
</html>

<html>
	<head>
		<?php include("CSSyJS.php");?>
		<meta charset="utf-8"/>
		<title>Buscar</title>
	</head>
	<body>
	<div class="todo">
		<div class="content">
			<?php
				include("cabeza.php");
			?>
			<div class="content_resize">
			<center>
					<h1>Borrar Usuario</h1>
					<form action="borrarUsuario.php" method="post" name="formularioBorrar">
						<h4>Escriba el nombre de usuario</h4>
						<input type="text" name="nombre"/>
						<input type="submit" value="Borrar"/>
					</form>
					<a href="listaUsuarios.php"><b> Volver</b>
			</center>
		<?php	
			include("pie.php");
		?>
		</div>
		</div>
		</div>
	</body>
</html>
			