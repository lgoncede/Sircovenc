<?php 
include ('../config.php');

$sql = "SELECT *FROM compras";

$result = mysql_query($sql);

if (!$result)

	die ("no se pudo ejecutar la query");

echo " Gas91 Gas95 D <br />";
while ($row = mysql_fetch_assoc($result))
{
	echo $row['ltrs_Gas_91'];
	echo $row['ltrs_Gas_95'];
	echo $row['ltrs_D']."<br />";
}
?>