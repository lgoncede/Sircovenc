<?php 
		SESSION_START();
		$_SESSION['usu']='';
		session_destroy();
		
		header('location:index.php');
?>