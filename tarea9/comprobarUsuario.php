<?php
if (($_SESSION['rol']<1))
{
	header("location: login.php");
	echo'no puede realizar esta operacion '; 
	} 
?>
