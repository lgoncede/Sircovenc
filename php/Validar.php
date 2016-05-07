<?php 
//Validación
include ('../config.php');
session_start();

 $usuario = $_POST['usuario'];
 $contrasena = $_POST['contrasena'];
 
 $query = "SELECT * FROM usuarios WHERE usuario = '$usuario' AND contrasena='$contrasena'";
 $result = mysql_query($query);
 
 if ( mysql_num_rows($result) == 1)
 {
	 $fila = mysql_fetch_assoc($result);
	  $_SESSION['usu'] = $fila ['usuario'];
	 
	
	 $sql = "SELECT * FROM datoes" ;
	 $query  = mysql_query($sql);
	 
	 if(!$query)
		 
		 die ("Se produjo un error al realizar la consulta");
		 
		 #********************************Resolver error al cargar los datos de la E/S en las VS********************************************
	 while (mysql_fetch_row($query)) 
	 { 
		$_SESSION['nom_es'] = $query['nombre']; 
		$_SESSION['rif'] = $query['rif']; 
		$_SESSION['direc'] = $query['direc']; 
		$_SESSION['tlf'] = $query['tlf']; 
	 } 
		
	   
	  header('location:Main.php');
 }
 else
 {
	 echo "usuario o contrase&ntilde;a incorrecta";
	 echo "<br /><a href='../php/index.php' >Regresar</a>";
  }
  
  
?>