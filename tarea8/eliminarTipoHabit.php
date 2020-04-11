<?php
include 'conexion.php';
$opcion2 = $_GET['opcion2'];
	$sql2="DELETE from tipohabitaciones where id=$opcion2";
	$resultado2=$con->query($sql2);
	if ($resultado2)
		echo "se elimino con exito";
	else
        echo "hubo un error";
?>
<meta http-equiv="refresh" content="4;URL=listarHabit.php">   