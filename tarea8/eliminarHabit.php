<?php
	include 'conexion.php';
	$opcion = $_GET['opcion'];
	$sql="DELETE from habitacion where id=$opcion";
	$resultado=$con->query($sql);
	if ($resultado)
		echo "se elimino con exito";
	else
		echo "hubo un error";
?> 
<meta http-equiv="refresh" content="4;URL=listarHabit.php">   
