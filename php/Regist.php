<?php
include ('../config.php');

$usuario = $_POST['usuario'];
$contrasena = $_POST['contrasena'];

$sql = "SELECT * FROM usuarios WHERE usuario = '$usuario'";
$resul = mysql_query($sql) or die("No se  pudo verificar si existe alg&uacute;n usuario con el mismo nombre");

if (mysql_num_rows($resul) > 0)
{
	echo "Disculpe ya existe el usuarion <br />";
	echo "Por favor intente con otro nombre <br />";
	echo "<a href='../html/FormRegist.html'>Registrarse</a>";
}

else
{
	$sql = "INSERT INTO usuarios (usuario,contrasena) VALUES ('$usuario','$contrasena')";
	$resul = mysql_query($sql) or die("No se  pudo guardar los datos");
	
	header("location:index.php");
}
?>