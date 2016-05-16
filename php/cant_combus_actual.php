<?php 
include ('../config.php');


$sql = "SELECT * FROM cant_combus_actual";

$result = mysql_query($sql);

if (!$result)

	die ("no se pudo ejecutar la query");

echo " <table border='1'><tr><td>Gas91</td><td>Gas95</td><td>D</td></tr>";
while ($row = mysql_fetch_assoc($result))
{
	echo "<tr><td>".$row['gas91'];
	echo " Ltrs</td><td>".$row['gas95'];
	echo " Ltrs</td><td>".$row['diesel']." Ltrs</td></tr>";
}
echo "</table>"






#cada tanque de gasolina almacena 35.000 Ltrs y el de diesel 45.000 Ltrs !!!!!
?>