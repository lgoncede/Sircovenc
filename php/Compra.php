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
						<a href="Historial">Historial (No disponible)</a>
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
					<label for="CodFact">
					<input type="text" placeholder="C&oacute;digo de Factura" size="30" name="CodFact" autofocus autocomplete="on" required><br />
					<label for="EmpTrans">
					<input type="text" placeholder="Nombre de la empresa Transportadora" size="30" name="EmpTrans" autocomplete="on" required><br />
					<label for="PlantDist">
					<input type="text" placeholder="Planta Distribuidora" size="30" name="PlantDist"  autocomplete="on" required><br />
					<label for="NombConduc">
					<input type="text" placeholder="Nombre del conductor" size="30" name="NombConduc" required><br />
					<label for="Gas91">
					<input type="number" placeholder="gas91" size="30" name="Gas91" autocomplete="on"> <br />
					<label for="Gas95">
					<input type="number" placeholder="Gas95" size="30" name="Gas95" autocomplete="on"><br />
					<label for="Diesel">
					<input type="number" placeholder="Diesel" size="30" name="Diesel" autocomplete="on"><br />
					<input type="submit" value="Guardar" name="guardar">
				</fieldset>
			</form>
	</body>
	<?php include("../html/footer.html");?>
</html>