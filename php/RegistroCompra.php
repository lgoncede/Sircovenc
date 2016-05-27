<?php
	include ('../config.php');
	$CodFact = $_POST['CodFact'];
	$PlantDist = $_POST['PlantDist'];
	$EmpTrans = $_POST['EmpTrans'];
	$NombConduc = $_POST['NombConduc'];
	$Gas91 = $_POST['Gas91'];
	$Gas95 = $_POST['Gas95'];
	$Diesel = $_POST['Diesel'];
	$hoy = date("Y-m-d");
	
		$sql = "INSERT INTO compras VALUES ('$CodFact','$EmpTrans','$PlantDist','$NombConduc','$Gas91','$Gas95','$Diesel','$hoy')";
		$resul = mysql_query($sql) or die("No se  pudo guardar los datos");
	
		$consulta = "SELECT * FROM cant_combus_actual";
		if (mysql_num_rows($consulta) > 0)
		{
			$sql = "UPDATE cant_combus_actual SET gas91 = gas91 + '$Gas91',gas95 = gas95 + '$Gas95',diesel = diesel + '$Diesel'";
			$resul = mysql_query($sql) or die ("No se pudo actualidar los datos de la cantidad actual de combustible");
			header('location:Main.php');
		}
		else
		{
			$sql = "INSERT INTO cant_combus_actual VALUES ('$hoy','$Gas91','$Gas95','$Diesel')";
		$resul = mysql_query($sql) or die("No se  pudo actualizar la tabla no tiene datos");
		header('location:Main.php');
		}
?>