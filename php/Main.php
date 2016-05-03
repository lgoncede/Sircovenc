<?php session_start();  
if (!empty($_POST['salir']))
{
	$_SESSION['usu']='';
	session_destroy();
}

if (empty($_SESSION['usu']))

header ('location:index.php');
?>
<html>
	<head>
		<title>P&aacute;gina Principal</title>
		<meta charset="utf-8" />
	</head>
	
	<body>
		<form action="Main.php" method="POST">
			<button name="salir" value="1">Salir</button>
		</form>
		
		<h1> Bienvenido <i><?php echo $_SESSION['usu'];?></i>  a LGONsite</h1>
		
	</body>
	
	<footer>
		<p>Creado por Lgoncede</p>
	</footer>
</html>