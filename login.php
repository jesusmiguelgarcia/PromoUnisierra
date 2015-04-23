<html>
	<head>
		<?php include("CSSyJS.php");?>
		<meta charset="utf-8"/>
		<title>Login</title>
	</head>
	
	<body>
	<div class ="todo">
		<div class="content">
		<?php 
			include("cabeza.php");
			?>
		<div class="content_resize">
		<center>
		<h1>Login</h1>
		<form method="POST" action="login.php"/>
			<table>
				<tr>
					<td>Nombre</td>
					<td><input type="text" name="nombre" ></td>
				</tr>
				<tr>
					<td>Password</td>
					<td><input type="password" name="contrasena" ></td>
				</tr>
			</table>
			<input type="submit" name="Aceptar" value="iniciar"/><td> </td><input type="reset" name="Canselar" value="canselar"/>
			<?php
				if(isset($_POST['Aceptar']))
				{
					require("login_validar.php");
				}
			?>
			
		</form>
		</center>
		<?php
			include("pie.php");
			?>
		</div>
		</div>
		</div>
	</body>
	
</html>