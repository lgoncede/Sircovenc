<?php

	include ('../config.php');

	
	$S1NumElec91A = $_POST['S1NumElec91A'];
	$S1NumElec95A = $_POST['S1NumElec95A'];
	$S1NumElec91B = $_POST['S1NumElec91B'];
	$S1NumElec95B = $_POST['S1NumElec95B'];
	
	$S2NumElec91A = $_POST['S2NumElec91A'];
	$S2NumElec95A = $_POST['S2NumElec95A'];
	$S2NumElec91B = $_POST['S2NumElec91B'];
	$S2NumElec95B = $_POST['S2NumElec95B'];
	
	$S3NumElec91A = $_POST['S3NumElec91A'];
	$S3NumElec95A = $_POST['S3NumElec95A'];
	$S3NumElec91B = $_POST['S3NumElec91B'];
	$S3NumElec95B = $_POST['S3NumElec95B'];
	
	
	
	
	if (isset($_POST['guardarS1']) && !empty($_POST['guardarS1']))
	{
		$sql = "INSERT INTO surtidor1(NumElec91A,NumElec91B,NumElec95A,NumElec95B) VALUES ('$S1NumElec91A','$S1NumElec91B','$S1NumElec95A','$S1NumElec95B')";
		$result = mysql_query($sql) or die ("No se pudo insertar los datos del surtidor 1");
		header('location:venta.php');
	}
	else if (isset($_POST['guardarS2']) && !empty($_POST['guardarS2']))
	{
		$sql = "INSERT INTO surtidor2(NumElec91A,NumElec91B,NumElec95A,NumElec95B) VALUES ('$S2NumElec91A','$S2NumElec91B','$S2NumElec95A','$S2NumElec95B')";
		$result = mysql_query($sql) or die ("No se pudo insertar los datos del surtidor 2");
		header('location:venta.php');
	}
	else if (isset($_POST['guardarS3']) && !empty($_POST['guardarS3']))
	{
		$sql = "INSERT INTO surtidor3(NumElec91A,NumElec91B,NumElec95A,NumElec95B) VALUES ('$S3NumElec91A','$S3NumElec91B','$S3NumElec95A','$S3NumElec95B')";
		$result = mysql_query($sql) or die ("No se pudo insertar los datos del surtidor 3");
		header('location:venta.php');
	}
	
	

?>
