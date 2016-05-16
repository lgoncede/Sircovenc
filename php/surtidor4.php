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
			
			<form method="POST" action="RegistroVenta.php" id="FormVenta">
				<fieldset>
					<legend>Surtidor 4</legend>	
					
						<label for="S4NumElecDA">
						<input type="text" placeholder="Numeracion Electronica DA" size="25" name="S4NumElecDA" ><br />
						
						<label for="S4NumElecDB">
						<input type="text" placeholder="Numeracion Electronica DB" size="25" name="S4NumElecDA" ><br />
						<input type="submit" value="Guardar" name="guardar">
				</fieldset>
			</form>
	</body>
	<?php include("../html/footer.html");?>
</html>