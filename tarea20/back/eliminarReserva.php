<?php
	include 'conexion.php';
	$id = $_POST['id'];
	$sql="DELETE from reservas where id=$id";
	$resultado=$con->query($sql);
?> 
