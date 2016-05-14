<?php 
		include('../config.php');
		SESSION_START();
		$_SESSION['usu']='';
		session_destroy();
		mysql_close($con) or die ("No se pudo desconectar de $dbname");
		header('location:index.php');
?>