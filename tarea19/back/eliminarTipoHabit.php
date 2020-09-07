<?php
include 'conexion.php';
$id = $_POST['id'];
	$sql="DELETE from tipohabitaciones where id=$id";
	$resultado=$con->query($sql);
?>