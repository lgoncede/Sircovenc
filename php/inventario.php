<?php 
include ('../config.php');

$sql = "SELECT *FROM compras";

$result = mysql_query($sql);

if (!$result)

	die ("no se pudo ejecutar la query");

echo " <table border='1'><tr><td>Gas91</td><td>Gas95</td><td>D</td></tr>";
while ($row = mysql_fetch_assoc($result))
{
	echo "<tr><td>".$row['ltrs_Gas_91'];
	echo "</td><td>".$row['ltrs_Gas_95'];
	echo "</td><td>".$row['ltrs_D']."</td></tr>";
}
echo "</table>"
?>