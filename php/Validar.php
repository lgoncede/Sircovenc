<?php 
//Validación
include ('../config.php');
session_start();

 $usuario = $_POST['usuario'];
 $contrasena = $_POST['contrasena'];
 
 $query = "SELECT * FROM usuarios WHERE usuario = '$usuario' AND contrasena='$contrasena'";
 $result = mysql_query($query);
 
 if ( mysql_num_rows($result) == 2)
 {
	 $fila = mysql_fetch_assoc($result);
	  $_SESSION['usu'] = $fila ['usuario'];
	  
	 if(mysql_close($con)==FALSE)
		echo "NO se pudo cerrar la conexion a MySqL";
		exit();
	 
	  header('location:Main.php');
 }
 else
 {
	 echo "usuario o contrase&ntilde;a incorrecta";
	 echo "<br /><a href='../php/index.php' >Regresar</a>";
  }
  
  
  
?>