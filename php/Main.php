<?php session_start();  
	if (!empty($_POST['salir']))
	{
		$_SESSION['usu']='';
		session_destroy();
	}

	if (empty($_SESSION['usu'])) #si la sesión esta vacia se redirecciona al index

	header ('location:index.php');

		include('../html/head.html');
?>
		<body>
			<h1>SIRCOVENC</h2>
			<nav>
				<ul>
					<li>
						<a href="Main.php">P&aacute;gina Principal</a>
					</li>
					
					<li>
						<a href="Main.php">Recepci&oacute;n de Combustible</a>
					</li>
					
					<li>
						<a href="Main.php">Venta de Combustible</a>
					</li>
					
					
					<li>
						<a href="Main.php">Historial</a>
					</li>
					
					<li>
						<a href="Main.php">Cerrar Sessi&oacute;n</a>
					</li>
					
				</ul>
			</nav>
			
			<?php echo "Nombre de Usuario: <i>".$_SESSION['usu']."</i><br />Nombre de la Estaci&oacute;n : <i>".$_SESSION['nom_es']."</i> <br /> 
			R.I.F: <i>".$_SESSION['rif']."</i><br /> Direcci&oacute;n: <i>".$_SESSION['direc']."</i><br /> Telefono: <i>".$_SESSION['tlf']."</i><br />"; ?>
		</body>
<?php
		
		
		include('../html/footer.html');
?>