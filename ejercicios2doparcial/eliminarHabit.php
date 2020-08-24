<?php
	include 'conexion.php';
	$id = $_POST['id'];
	$sql="DELETE from habitacion where id=$id";
	$resultado=$con->query($sql);
	if ($resultado)
        echo "se elimino con exito";
	else
		echo "hubo un error";
?> 
<input type="button" value="regresar" onclick="cargar('habitaciones.php')">   
