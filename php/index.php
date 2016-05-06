<!DOCTYPE HTML>
<html>
	<head>
		<title>SIRCOVEC</title>
		<meta charset="utf-8" />
	</head>
	
	<body>
		<h1>SIRCOVENC</h1>
		<h2>(Sistema de Registro para el Control de Venta de Combustible)</h2>
		<form action="Validar.php" method="post" id="form_login">
			<fieldset>
				<legend>Login</legend>
				<label for="usuario">Usuario:</label> <br />
				<input type="text" id="usuario" name="usuario" size="15" autofocus required/> <br />
				<label for="contrasena">Contrase&ntilde;a:</label><br />
				<input type="password" id="contrasena" name="contrasena" size="15" required/> <br />
				<input type="submit" value="Entrar" name="entrar">
			</fieldset>
		</form>
		<br /><br />
		<a href="../html/FormRegistUs.html">Crear Usuario</a>
	</body>
	
	<footer>
		<p>Sistema creado por <i>Lgoncede</i></p>
	</footer>
</html>