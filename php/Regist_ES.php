<?php
include ('../config.php');

$nom_ES = $_POST['nom_ES'];
$rif = $_POST['rif'];
$direc = $_POST['direc'];
$tlf = $_POST['tlf'];

	$sql = "INSERT INTO datoes (nombre,rif,direc,tlf) VALUES ('$nom_ES','$rif','$direc','$tlf')";
	$resul = mysql_query($sql) or die("No se  pudo guardar los datos");
	
	header('location:index.php');
	
	
?>