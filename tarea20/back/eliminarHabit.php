<?php
	include 'conexion.php';
	$id = $_POST['id'];
	$sql="DELETE from habitacion where id=$id";
	$resultado=$con->query($sql);
?> 
