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
						<!-- home-->
					</li>
					
					<li>
						<!-- aforo de tanques-->
					</li>
					
					<li>
						<!-- control de surtidores-->
					</li>
					
					
					<li>
						<!-- cerrar sesión-->
					</li>
					
					<li>
						<!-- historial-->
					</li>
					
					<li>
						<!-- cerrar sesión-->
					</li>
				</ul>
			</nav>
		</body>
<?php
		
		
		include('../html/footer.html');
?>