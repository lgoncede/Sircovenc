<?php
	include ('../config.php');

	$EmpTrans = $_POST['EmpTrans'];
	$NombConduc = $_POST['NombConduc'];
	$Gas91 = $_POST['Gas91'];
	$Gas95 = $_POST['Gas95'];
	$Diesel = $_POST['Diesel'];

		$sql = "INSERT INTO compras (Emp_Trans,Nomb_Conduc,ltrs_Gas_91,ltrs_Gas_95,ltrs_D) VALUES ('$EmpTrans','$NombConduc','$Gas91','$Gas95','$Diesel')";
		$resul = mysql_query($sql) or die("No se  pudo guardar los datos");
	
		
		$sql = "UPDATE cant_combus_actual SET gas91 = gas91 + '$Gas91',gas95 = gas95 + '$Gas95',diesel = diesel + '$Diesel'";
		$resul = mysql_query($sql) or die ("No se pudo actualidar los datos de la cantidad actual de combustible");
		header('location:Main.php');
?>