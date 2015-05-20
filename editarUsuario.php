
	<?php
			include("CSSyJS.php");
			session_start();
				if(isset($_SESSION["tipo"]))
				{
					if($_SESSION["tipo"]!=1)
					{
						header("location:index.php");
					}
				}
				print_r($_SESSION["nombre"]);
				print_r($_SESSION["tipo"]);
			require('conexion.php');
			$conexion = mysql_connect($servidor,$usuario,$password);// conexion BD
			mysql_select_db($bd,$conexion);
		?>
		<meta charset="utf-8"/>
		<title>Registro</title>
	</head>
	<body>
	<div class="todo">
		<div class="content">
			<?php
				include("cabeza.php");
			?>
			<div class="content_resize">
			<center>
		<h1>Editar Usuario</h1>
		<table><left>
			<tr>
				<td><left><a href="listaUsuarios.php"><b>Volver</b></left></td>
				<td><left><a href="Login.php"><b>Salir</b></left></td>
			</tr>
			<tr>
		</table>
		<form method='post' action='actualizarUsuario.php?consulta=actualizar'>
				Ingresa el id Usuario a actualizar<input type="text" name="id"><br/>
				<table>
					<tr>
						<td>Nombre</td>
						<td><input type="text" name="nombre" /></td>
					</tr>
					<tr>
						<td>Apellido</td>
						<td><input type="text" name="apellido" /></td>
					</tr>
					<tr>
						<td>Tipo Usuario</td>
						<td><input type="text" name="tipo" /></td>
					</tr>
					<tr>
						<td>Edad</td>
						<td><input type="text" name="edad" /></td>
					</tr>
					<tr>
						<td>Sexo</td>
						<td><input type="text" name="sexo" /></td>
					</tr>
					<tr>
						<td>Carrera</td>
						<td><input type="text" name="carrera" /></td>
					</tr>
					<tr>
						<td>Provincia</td>
						<td><input type="text" name="provincia" /></td>
					</tr>
					<tr>
						<td>Email</td>
						<td><input type="text" name="email" /></td>
					</tr>
					<tr>
						<td>Telefono</td>
						<td><input type="text" name="telefono"  /></td>
					</tr>
					<tr>
						<td>Password</td>
						<td><input type="password" name="password" /></td>
					</tr>
					<tr>
					<td><br></td>
					</tr>
					<tr>
						<td></td><td><input type="submit" value="aceptar"></td>
					</tr>
				</table>
			</center>
			
		<form/>
		<?php	
			include("pie.php");
		?>
		</div>
		</div>
		</div>
	</body>