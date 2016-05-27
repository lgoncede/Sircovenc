<?php 
		include ('../config.php');
		#contar cuantas filas tiene la tabla 
		
					$sql="SELECT COUNT(*) FROM surtidor1";  
						$consulta=mysql_query($sql); 
						$rcount=mysql_result($consulta,0);
						
					$sql = "SELECT NumElec91A FROM surtidor1 WHERE id = '$rcount'";
					$result =mysql_query($sql);
					
					while ($row = mysql_fetch_assoc($result))
						{
							$nf =$row['NumElec91A'];
						}
						
						$nn = $rcount - 1;
					
					$sql = "SELECT NumElec91A FROM surtidor1 WHERE id = '$nn'";
					$result =mysql_query($sql);
					
					while ($row = mysql_fetch_assoc($result))
						{
							$ni =$row['NumElec91A'];
						}
						
						$ltrsvend = $nf - $ni ;
		
		$sql = "UPDATE cant_combus_actual SET gas91 = gas91 - '$ltrsvend'";
		$resul = mysql_query($sql) or die ("No se pudo actualidar los datos de la cantidad actual de combustible");
		header('location:venta.php');
?>