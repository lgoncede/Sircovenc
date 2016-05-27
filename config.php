<?php  
 $dbhost = "localhost";
 $dbname = "prueba";
 $dbuser = "root";
 $dbpass = "root";
 
 $con = mysql_connect($dbhost,$dbuser,$dbpass) or die ("problema conectarce a MySqL");
 mysql_select_db ($dbname) or die ("problema al conectarce a la base de datos $dbname");
?>