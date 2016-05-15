<?php 
session_start();  
	
	if (empty($_SESSION['usu'])) #si la sesión esta vacia se redirecciona al index

	header ('location:index.php');
?>
<!DOCTYPE HTML>
<html>
	<?php include("../html/head.html");?>
	<body>
		<h1>SIRCOVENC</h2>
			<nav>
				<ul>
					<li>
						<a href="Main.php">P&aacute;gina Principal</a>
					</li>
					
					<li>
						<a href="Compra.php">Recepci&oacute;n de Combustible</a>
					</li>
					
					<li>
						<a href="Venta.php">Venta de Combustible</a>
					</li>
					
					
					<li>
						<a href="Historial">Historial</a>
					</li>
					
					<li>
						<a href="Logout.php">Cerrar Sessi&oacute;n</a>
					</li>
					
				</ul>
			</nav>
			
			<?php echo "Nombre de Usuario: <i>".$_SESSION['usu']."</i><br /><br />" ;?>
			
			<form method="POST" action="RegistroCompra.php" id="FormCompra">
				<fieldset>
					<legend>Registro de Compra de Combustible</legend>
					<label for="EmpTrans">
					<input type="text" placeholder="Nombre de la empresa Transportadora" size="30" name="EmpTrans" autofocus required><br />
					<label for="NombConduc">
					<input type="text" placeholder="Nombre del conductor" size="30" name="NombConduc" required><br />
					<label for="Gas91">
					<input type="text" placeholder="gas91" size="30" name="Gas91"><br />
					<label for="Gas95">
					<input type="text" placeholder="Gas95" size="30" name="Gas95"><br />
					<label for="Diesel">
					<input type="text" placeholder="Diesel" size="30" name="Diesel"><br />
					<input type="submit" value="Guardar" name="guardar">
				</fieldset>
			</form>
	</body>
	<?php include("../html/footer.html");?>
</html>