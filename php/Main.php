<?php 
	session_start();  
	
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
			
			<?php echo "Nombre de Usuario: <i>".$_SESSION['usu']."</i><br />";?>
			
			<figure>
			<img src="../img/img_es.jpg" width="500" height="350" >
			</figure>
				<!-- en php -->
				
				<?php include ('inventario.php');?>
		</body>
<?php
		
		
		include('../html/footer.html');
?>