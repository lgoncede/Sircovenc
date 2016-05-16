<?php 
session_start();  
	
	if (empty($_SESSION['usu'])) #si la sesi�n esta vacia se redirecciona al index

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
					<legend>Surtidor 1</legend>	
					Lado A
						<br /><label for="S1NumElec91A">
						<input type="text" placeholder="Numeracion Electronica 91A" size="25" name="S1NumElec91A" >
						<label for="S1NumMec91A">
						<input type="text" placeholder="Numeracion Mecanica 91A" size="25" name="S1NumMec91A" ><br />
						
						<label for="S1NumElec95A">
						<input type="text" placeholder="Numeracion Electronica 95A" size="25" name="S1NumElec95A" >
						<label for="S1NumMec95A">
						<input type="text" placeholder="Numeracion Mecanica 95A" size="25" name="S1NumMec95A" ><br />
					Lado B
						<br /><label for="S1NumElec91B">
						<input type="text" placeholder="Numeracion Electronica 91B" size="25" name="S1NumElec91B" >
						<label for="S1NumMec91B">
						<input type="text" placeholder="Numeracion Mecanica 91B" size="25" name="S1NumMec91B" ><br />
						
						<label for="S1NumElec95B">
						<input type="text" placeholder="Numeracion Electronica 95B" size="25" name="S1NumElec95B" >
						<label for="S1NumMec95B">
						<input type="text" placeholder="Numeracion Mecanica 95B" size="25" name="S1NumMec95B" ><br />
						<input type="submit" value="Guardar" name="guardarS1">
				</fieldset>
			</form>
	</body>
	<?php include("../html/footer.html");?>
</html>