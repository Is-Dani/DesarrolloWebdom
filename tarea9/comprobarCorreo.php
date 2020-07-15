<?php 
if (!isset($_SESSION['correo']))
{
	header("location: login.php");
	echo'usuario no identificado'; 
	} 
?>
