<?php
if (($_SESSION['rol']!=1))
{
	 header("Location: mensajeNoAutorizado.html"); 
	} 
?>
