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
					<legend>Surtidor 1</legend>
					<label for="NomOpdorS1">
					<input type="text" placeholder="Nombre del Operador" size="25" name="NomOpdorS1" autofocus>
					<label for="turnoS1">
					Ma&ntilde;ana<input type="radio"   name="turnoS1" value="1" > <!--1 mañana,2 tarde,3 mañana y tarde-->
					Tarde<input type="radio"   name="turnoS1" value="2" > <!--1 mañana,2 tarde,3 mañana y tarde-->
					Ma&ntilde;ana y Tarde<input type="radio"   name="turnoS1" value="3" ><br /> <!--1 mañana,2 tarde,3 mañana y tarde-->
					
					<label for="S1NumElec91A">
					<input type="text" placeholder="Numeracion Electronica 91A" size="25" name="S1NumElec91A" >
					<label for="S1NumMec91A">
					<input type="text" placeholder="Numeracion Mecanica 91A" size="25" name="S1NumMec91A" ><br />
					
					<label for="S1NumElec95A">
					<input type="text" placeholder="Numeracion Electronica 95A" size="25" name="S1NumElec95A" >
					<label for="S1NumMec95A">
					<input type="text" placeholder="Numeracion Mecanica 95A" size="25" name="S1NumMec95A" ><br />
					
					<label for="S1NumElec91B">
					<input type="text" placeholder="Numeracion Electronica 91B" size="25" name="S1NumElec91B" >
					<label for="S1NumMec91B">
					<input type="text" placeholder="Numeracion Mecanica 91B" size="25" name="S1NumMec91B" ><br />
					
					<label for="S1NumElec95B">
					<input type="text" placeholder="Numeracion Electronica 95B" size="25" name="S1NumElec95B" >
					<label for="S1NumMec95B">
					<input type="text" placeholder="Numeracion Mecanica 95B" size="25" name="S1NumMec95B" ><br />
					
					
					<br /><legend>Surtidor 2</legend>
					<label for="NomOpdorS2">
					<input type="text" placeholder="Nombre del Operador" size="25" name="NomOpdorS2" >
					<label for="turnoS2">
					Ma&ntilde;ana<input type="radio"   name="turnoS2" value="1" > <!--1 mañana,2 tarde,3 mañana y tarde-->
					Tarde<input type="radio"   name="turnoS2" value="2" > <!--1 mañana,2 tarde,3 mañana y tarde-->
					Ma&ntilde;ana y Tarde<input type="radio"   name="turnoS2" value="3" ><br /> <!--1 mañana,2 tarde,3 mañana y tarde-->
					
					<label for="NumElec91A">
					<input type="text" placeholder="Numeracion Electronica 91A" size="25" name="NumElec91A" >
					<label for="NumMec91A">
					<input type="text" placeholder="Numeracion Mecanica 91A" size="25" name="NumMec91A" ><br />
					
					<label for="NumElec95A">
					<input type="text" placeholder="Numeracion Electronica 95A" size="25" name="NumElec95A" >
					<label for="NumMec95A">
					<input type="text" placeholder="Numeracion Mecanica 95A" size="25" name="NumMec95A" ><br />
					
					<label for="NumElec91B">
					<input type="text" placeholder="Numeracion Electronica 91B" size="25" name="NumElec91B" >
					<label for="NumMec91B">
					<input type="text" placeholder="Numeracion Mecanica 91B" size="25" name="NumMec91B" ><br />
					
					<label for="NumElec95B">
					<input type="text" placeholder="Numeracion Electronica 95B" size="25" name="NumElec95B" >
					<label for="NumMec95B">
					<input type="text" placeholder="Numeracion Mecanica 95B" size="25" name="NumMec95B" ><br />
					
					
					<br /><legend>Surtidor 3</legend>
					<label for="NomOpdorS3">
					<input type="text" placeholder="Nombre del Operador" size="25" name="NomOpdorS3" autofocus>
					<label for="turnoS3">
					Ma&ntilde;ana<input type="radio"   name="turnoS3" value="1" autofocus> <!--1 mañana,2 tarde,3 mañana y tarde-->
					Tarde<input type="radio"   name="turnoS3" value="2" autofocus> <!--1 mañana,2 tarde,3 mañana y tarde-->
					Ma&ntilde;ana y Tarde<input type="radio"   name="turnoS3" value="3" autofocus><br /> <!--1 mañana,2 tarde,3 mañana y tarde-->
					
					<label for="NumElec91A">
					<input type="text" placeholder="Numeracion Electronica 91A" size="25" name="NumElec91A" >
					<label for="NumMec91A">
					<input type="text" placeholder="Numeracion Mecanica 91A" size="25" name="NumMec91A" ><br />
					
					<label for="NumElec95A">
					<input type="text" placeholder="Numeracion Electronica 95A" size="25" name="NumElec95A" >
					<label for="NumMec95A">
					<input type="text" placeholder="Numeracion Mecanica 95A" size="25" name="NumMec95A" ><br />
					
					<label for="NumElec91B">
					<input type="text" placeholder="Numeracion Electronica 91B" size="25" name="NumElec91B" >
					<label for="NumMec91B">
					<input type="text" placeholder="Numeracion Mecanica 91B" size="25" name="NumMec91B" ><br />
					
					<label for="NumElec95B">
					<input type="text" placeholder="Numeracion Electronica 95B" size="25" name="NumElec95B" >
					<label for="NumMec95B">
					<input type="text" placeholder="Numeracion Mecanica 95B" size="25" name="NumMec95B" ><br />
					
					
					<br /><legend>Surtidor 4</legend>
					<label for="NomOpdorS4">
					<input type="text" placeholder="Nombre del Operador" size="25" name="NomOpdorS4" autofocus>
					<label for="turnoS4">
					Ma&ntilde;ana<input type="radio"   name="turnoS4" value="1" autofocus> <!--1 mañana,2 tarde,3 mañana y tarde-->
					Tarde<input type="radio"   name="turnoS4" value="2" autofocus> <!--1 mañana,2 tarde,3 mañana y tarde-->
					Ma&ntilde;ana y Tarde<input type="radio"   name="turnoS4" value="3" autofocus><br /> <!--1 mañana,2 tarde,3 mañana y tarde-->
					
					<label for="NumElecDA">
					<input type="text" placeholder="Numeracion Electronica Diesel A" size="25" name="NumElecDA" ><br />
					
					<label for="NumElecDB">
					<input type="text" placeholder="Numeracion Electronica Diesel B" size="25" name="NumElecDB" ><br />
					
					
					<input type="submit" value="Guardar" name="guardar">
				</fieldset>
			</form>
	</body>
	<?php include("../html/footer.html");?>
</html>